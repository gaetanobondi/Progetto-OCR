<?php
require_once 'class/Scansione.php';
$scanner = new Scansione();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
  $cookie1 = $_POST['cookie1'] ?? null;
  $cookie2 = $_POST['cookie2'] ?? null;
  $targetDirectory = "uploads/"; // Imposta la cartella di destinazione per le immagini
  $resultMessage = $scanner->uploadScontrino($_FILES["image"], $targetDirectory, $cookie1, $cookie2);
}
 ?>


<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Scansione scontrini</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <h1>Progetto di scansione scontrini di <span class="rainbow-text">Gaetano Bondì</span></h1>
    <a href="mailto:bondi.gaetano@gmail.com">bondi.gaetano@gmail.com</a>

    <div style="margin: 20px 0">
      <h2>Scansioni recenti</h2>
      <div class="recent">
        <?php if($scanner->getScontrini()): ?>
          <?php foreach ($scanner->getScontrini() as $scontrino): ?>
            <div class="scan">
              <img src="<?=$scontrino['image_name']?>" alt="scontrino">
              <h4>Comune:</h4>
              <p><?=$scontrino['comune'] ?? "NaN"?></p>
              <h4>Importo:</h4>
              <p><?=$scontrino['importo'] ?? "NaN"?> EUR</p>
              <h4>Data:</h4>
              <p><?=$scontrino['data']?></p>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>

    <hr />

    <div class="new-scan">
      <h2>Effettua una scansione</h2>

      <form method="POST" enctype="multipart/form-data">
          <label for="image">Clicca qui per selezionare un'immagine da caricare</label>
          <input type="file" name="image" id="image" accept="image/*" required>
          <label>
            <input type="checkbox" id="showInputs"> Usa anche Google Bard
          </label>

          <div id="inputContainer" style="display: none;">
            <span>API NON UFFICIALE</span>
            <p style="text-align: left">
              Apri bard.google.com <bR />
              Apri il developer tools, cliscca sul tab Application <br />
              In Application sotto Storage dovresti trovare un menù a tendina dei cookie <br />
              Sotto cookie clicca su https://bard.google.com che ti mostrerà tutti i cookie utilizzati come nome e valore <br />
              Copia il valore dei cookie <b>__Secure-1PSID</b> e <b>__Secure-1PSIDTS</b>
            </p>
            <img style="display: block; margin: 20px auto; max-width: 100%" src="cookie.png" alt="immagine di come recuperare i cookie di google bard">
            <input type="text" id="cookie1" name="cookie1" placeholder="__Secure-1PSID">
            <input type="text" id="cookie2" name="cookie2" placeholder="__Secure-1PSIDTS">
          </div>
          <div class="preview">
            <img id="previewImage" src="#" alt="Anteprima dell'immagine" style="max-width: 100%; display: none;">
          </div>
          <br>
          <input type="submit" value="Carica Immagine" id="submitButton" onclick="document.getElementById('previewImage').style.display = 'none';" disabled>
      </form>

      <script type="text/javascript">
      const inputImage = document.getElementById('image');
      const previewImage = document.getElementById('previewImage');
      const submitButton = document.getElementById('submitButton');

      inputImage.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
          previewImage.style.display = 'block';
          previewImage.src = URL.createObjectURL(file);
          submitButton.disabled = false; // Abilita il pulsante di submit
        } else {
          previewImage.style.display = 'none';
          previewImage.src = '';
          submitButton.disabled = true; // Disabilita il pulsante di submit
        }
      });

      const showInputsCheckbox = document.getElementById('showInputs');
      const inputContainer = document.getElementById('inputContainer');

      showInputsCheckbox.addEventListener('change', function() {
        if (this.checked) {
          inputContainer.style.display = 'block';
        } else {
          inputContainer.style.display = 'none';
        }
      });
      </script>

      <?php if (isset($resultMessage)): ?>
        <div class="result">
          <img src="<?=$resultMessage['image']?>" alt="scontrino">
          <h3>Testo trovato:</h3>
          <p><?=$resultMessage['text']?></p>
          <h3>Comune:</h3>
          <p><?=$resultMessage['comune']?></p>
          <h3>Importo:</h3>
          <p><?=$resultMessage['importo']?></p>
          <h3>Data:</h3>
          <p><?=$resultMessage['data']?></p>
          <?php if(isset($resultMessage['bard'])): ?>
            <h3>Google Bard:</h3>
            <p><?=$resultMessage['bard']?></p>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </body>
</html>
