<?php
require_once 'Database.php';
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../bard.php';
use thiagoalessio\TesseractOCR\TesseractOCR;

class Scansione {
  private $db;

  public function __construct() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "ocr";

    $this->db = new Database($host, $username, $password, $database);
  }

  public function fetchScontrino($imagePath, $cookie1, $cookie2) {
    // Crea un'istanza di TesseractOCR con il percorso dell'immagine
    $tesseract = new TesseractOCR($imagePath);

    // Opzionale: Imposta il percorso dell'eseguibile di Tesseract se è diverso da quello predefinito
    // $tesseract->executable('path/to/tesseract');

    // Opzionale: Imposta la lingua per il riconoscimento (es. "ita" per italiano, "eng" per inglese, ecc.)
    // $tesseract->lang('eng');

    // Esegui il riconoscimento dei caratteri
    $text = $tesseract->run();

    $return = [];
    $fields = [];
    $return += ['image' => $imagePath];
    $fields += ['image_name' => $imagePath];
    $return += ['text' => $text];
    $fields += ['text' => $text];

    // controllo se usare google bard
    if($cookie1 && $cookie2) {
      $return += ['bard' => $this->fetchWithBard($cookie1, $cookie2, $text)];
    }

    // Estrai il comune
    $comunePattern1 = '/([0-9]{5}) - (.+)\(/';
    $comunePattern2 = '/[0-9]+\s+(.+?)\s+Iva/';
    // Prova il primo pattern
    if (preg_match($comunePattern1, $text, $comuneMatches)) {
        $comune = $comuneMatches[2]; // Contiene il nome del comune come stringa
        $fields += ['comune' => $comune];
    } else {
        // Prova il secondo pattern se il primo non trova una corrispondenza
        if (preg_match($comunePattern2, $text, $comuneMatches)) {
            $comune = $comuneMatches[1]; // Contiene il nome del comune come stringa
            $fields += ['comune' => $comune];
        } else {
            $comune = "Comune non trovato"; // Assegna un valore di default se il comune non viene trovato
        }
    }
    $return += ['comune' => $comune];

    // Estrai l'importo complessivo
    $importoPattern = '/Importo pagato ([0-9,\.]+)/i';
    if(preg_match($importoPattern, $text, $importoMatches)) {
      $importoComplessivo = $importoMatches[1]; // Contiene l'importo complessivo come stringa
    } else {
      $importoComplessivo = "Importo non trovato";
    }

    // Definisci gli array dei pattern da provare
    $dataPatterns = array(
        '/([0-9]{2}-[0-9]{2}-[0-9]{4})/',
        '/([0-9]{1}-[0-9]{2}-[0-9]{4})/',
        '/([0-9]{2}\/[0-9]{2}\/[0-9]{4})/',
        '/([0-9]{2}\/[0-9]{2}\/[0-9]{2})/',
        '/([0-9]{2}-[0-9]{2}-[0-9]{2})/'
    );

    // Inizializza la data dello scontrino con il valore di default
    $dataScontrino = "Data non trovata";

    // Prova i pattern uno per uno
    $i = 0;
    foreach ($dataPatterns as $pattern) {
        if (preg_match($pattern, $text, $dataMatches)) {
            $dataScontrino = $dataMatches[1]; // Contiene la data dello scontrino come stringa
            switch ($i) {
              case 0:
                $format = 'd-m-Y';
                break;
              case 1:
                $format = 'j-m-Y';
                break;
              case 2:
                $format = 'd/m/Y';
                break;
              case 3:
                $format = 'd/m/y';
                break;
              case 4:
                $format = 'd-m-y';
                break;
            }
            $dataScontrinoSQL = DateTime::createFromFormat($format, $dataScontrino);
            $dataScontrinoFormatted = $dataScontrinoSQL->format('Y-m-d H:i:s');
            $fields += ['data' => $dataScontrinoFormatted];
            break; // Esci dal ciclo se trovi una corrispondenza
        }
        $i++;
    }

    // Converti l'importo complessivo in un valore numerico float (se necessario)
    if($importoComplessivo != "Importo non trovato") {
      $importoComplessivoFloat = floatval(str_replace(',', '.', $importoComplessivo));
      $fields += ['importo' => $importoComplessivoFloat];
      $importoComplessivoFloat = $importoComplessivoFloat . " EUR" . PHP_EOL;
    } else {
      $importoComplessivoFloat = $importoComplessivo;
    }

    $return += ['data' => $dataScontrino];
    $return += ['importo' => $importoComplessivoFloat];
    $this->saveScontrino($fields);
    return $return;
  }

  public function saveScontrino($fields) {
    $query = 'INSERT INTO scontrino (';

    foreach ($fields as $key => $value) {
        $query .= '`' . $key . '`,';
    }

    $query = rtrim($query, ',');
    $query .= ') VALUES (';

    foreach ($fields as $key => $value) {
        // Assicurati che i valori siano opportunamente sanitizzati e validati
        $query .= "'" . $value . "',";
    }

    $query = rtrim($query, ',');
    $query .= ')';

    // Esegui la query
    $result = $this->db->query($query);

    // if ($result) {
    //     echo "Inserimento avvenuto con successo!";
    // } else {
    //     echo "Errore durante l'inserimento: " . $this->db->error;
    // }
}

public function fetchWithBard($cookie1, $cookie2, $text) {
  //two keys are required which are two cookies values
  $_ENV['BARD_API_KEY_X'] = $cookie1;
  $_ENV['BARD_API_KEY_Y'] = $cookie2;
  $bard = new Bard();
  $input_text = "Estrai dal seguente testo: comune, data e importo complessivo: $text";  // Input text for the conversation
  $result = $bard->get_answer($input_text);  // Get the response from Bard
  if (isset($result['choices'][0]['content'][0])) {
    $value = htmlspecialchars($result['choices'][0]['content'][0]);
  } else {
      $value = 'Ricontrolla i valori dei cookie inseriti.'; // o qualsiasi valore che desideri restituire
  }

  return $value;
}


  public function getScontrini() {
    $query = "SELECT * FROM scontrino";
    $result = $this->db->query($query);

    $scontrini = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $scontrini[] = $row;
    }

    return $scontrini;
  }


  public function uploadScontrino($file, $targetDirectory, $cookie1, $cookie2) {
    $uploadedFileName = $file['name'];
    $targetFilePath = $targetDirectory . basename($uploadedFileName);

    if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
        return $this->fetchScontrino('uploads/'.$uploadedFileName, $cookie1, $cookie2);
        // return "L'immagine $uploadedFileName è stata caricata con successo.";
    } else {
        return "Si è verificato un errore durante il caricamento dell'immagine.";
    }
  }

}
