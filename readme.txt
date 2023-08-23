Testo fornito:
Il cliente è una media azienda italiana del settore GDO (grande distribuzione organizzata) che sta avviando un processo di digitalizzazione a 360° e che ha deciso di affidarsi, per questa finalità, a SB Italia.
Tra le soluzioni di digitalizzazione di cui il cliente è alla ricerca, una in particolare riguarda lo sviluppo di un sistema che permetta di recuperare le informazioni fondamentali da file immagine di scansioni di documenti di testo (scontrini, ricevute, fatture cartacee, ecc.).

Challenge:
Data la scansione di uno scontrino italiano, messa a disposizione con apposito file testuale, trovare comune, importo e data. 
Nello specifico, viene richiesto di realizzare un sistema che consenta di recuperare le informazioni dello scontrino (appunto comune, importo e data) tramite sistemi di OCR e/o AI. Opzionale è recuperare anche le singole voci della spesa e la registrazione dei dati sul database.

Per far funzionare il progetto:
- Installare tesseract tramite il file .exe
- Importare il file ocr.sql in MySql
- In class/Scansione.php configurare l'accesso al db
- Enjoy

Per questo progetto ho usato Tesseract. Tesseract è un motore di riconoscimento ottico dei caratteri (OCR) open source sviluppato da HP Labs e poi continuato da Google. Si tratta di un software in grado di convertire immagini di testo scansionate o fotografate in testo digitale.
Per far funzionare Tesseract in php mi sono affidato alla libreria disponibile su GitHub thiagoalessio/tesseract-ocr-for-php (https://github.com/thiagoalessio/tesseract-ocr-for-php), mentre per l'api non ufficiale di Google Bard mi sono affidato alla libreria pj8912/php-bard-api (https://github.com/pj8912/php-bard-api).

Lascio in allegato un video del funzionamento del prodotto.

Gaetano Bondì. bondi.gaetano@gmail.com
