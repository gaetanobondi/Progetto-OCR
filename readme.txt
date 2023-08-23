Per far funzionare il progetto:
- Installare tesseract tramite il file .exe
- Importare il file ocr.sql in MySql
- In class/Scansione.php configurare l'accesso al db
- Enjoy

Per questo progetto ho usato Tesseract. Tesseract è un motore di riconoscimento ottico dei caratteri (OCR) open source sviluppato da HP Labs e poi continuato da Google. Si tratta di un software in grado di convertire immagini di testo scansionate o fotografate in testo digitale.
Per far funzionare Tesseract in php mi sono affidato alla libreria disponibile su GitHub thiagoalessio/tesseract-ocr-for-php (https://github.com/thiagoalessio/tesseract-ocr-for-php), mentre per l'api non ufficiale di Google Bard mi sono affidato alla libreria pj8912/php-bard-api (https://github.com/pj8912/php-bard-api).

Lascio in allegato un video del funzionamento del prodotto.

Gaetano Bondì. bondi.gaetano@gmail.com