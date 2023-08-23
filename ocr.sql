-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ago 10, 2023 alle 14:57
-- Versione del server: 5.7.17
-- Versione PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocr`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `scontrino`
--

CREATE TABLE `scontrino` (
  `id` int(11) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `comune` varchar(100) DEFAULT NULL,
  `importo` double DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `scontrino`
--

INSERT INTO `scontrino` (`id`, `text`, `image_name`, `comune`, `importo`, `data`) VALUES
(40, 'BARONCHELLI A.\nC.S0 DI P.TA ROMANA 72 MILANO\nTEL. 0258318535\nPARTITA IVA 12999500155\n\nDOCUMENTO COMMERCIALE\nDI VENDITA 0 PRESTAZIONE\n\nDESIRIZIONE =A ELRO\n\nTWA 4 046 22,20\nTOTALE COMPLESSIVO 2)\nDI CUI IVA 0,85\nPAGAMENTO CONTANTE 22,20\nPAGAMENTO ELETTRONICO 0,00\nNON RISCOSSO 0,00\nRESTO 0,00\nIMPORTO PAGATO 22,20\n\n06-06-2020 09:51\nDOCUMENTO N. 0107-0009\n\nRT 3C1CE132857\n\nCONTANTE 22,20', 'uploads/image5.jpg', NULL, 22.2, '2020-06-06'),
(38, 'GRAN CAFFEâ€™ CIMMINO\nCOFFE TREC S.RL\nVk 08661671217\nVIA LARGA 2 = 20122 MILAND\nTEL. 02/8051663\nTBRRIVEDERCE E GUZIE\n\n \n\nDOCUMENTO COMERCTALE\n4i vendita o prestazione\n\nDescrizione TVA Prezzo(Â©)\nOFF je 1,00\n3.1 X1,00\nTOME COPLESSIIO 4,00\nor it 1Â¥4 0.08)\naganento contan 1,\nPanne contre ie\nnporto pagato ,\n01286 Res, 001\n8-03-2020 08:42\nOOCNENTO N. 1425-0174\n\nAT 454qU201800,', 'uploads/image2.jpg', NULL, NULL, '2020-03-08'),
(39, 'LIBRERIA RINASCITA\n\nPiazza Roma, 7\nASCOLI PICENO\nIva 00291120442\n\nTelefono 0736, 259653\n\nwww.rinascita.i1t\n\nDOCUMENTO COMMERCIALE\ndi vendita o prestazione\n\n \n\nDESCRIZIONE IVA PREZZO(â‚¬)\n1 LIBRI VARI D ESe 0,10\nee ee ee a\n\nOP.: MIMMA\n\nTP.: CARTA DOCENTE\nPROG. 736217\nCar\n\nkaa KK KAKA KKK KKK\n\nGRAZIE ROSSI MARIO IL\nSUO _SALDO E* -- -54,2 == EURO\nSPENDI QUI IL TUO BONUS 18APP\n500 EURO IN CULTURA PER 18ENNI\n\nDEVOLVI IL 5X1000 A FAVORE\nDELLA LETTURA: SOSTIENTI\nASSOCIAZIONE RINASCITA\n\nCF: 92057910447\n\nTOTALE COMPLESSIVO 0,10\n\nDI CUI IVA 0,00\nPAGAMENTO CONTANTE 0,10\nPAGAMENTO ELETTRONICO 0,00\nNON RISCOSSO 0,00\nRESTO 0,00\nIMPORTO PAGATO 0,10\n\n*ES = Esente\n\n11/02/20 15:05 DOC.N.0929-0021\nRT 96MEV061838', 'uploads/image4.jpg', 'ASCOLI PICENO', 0.1, '2020-02-11'),
(37, 'BE KIDS S.R.L.\nVia Falcone e Borsellino 107\n90018 - Termini Imerese (PA)\nTe]. 081-3126331\nPartita Iva 06255560820\nwww. piazzaitalia. it\n\nDOCUMENTO COMMERCIALE\ndi vendita o prestazione\n\nDESCRIZIONE IVA Prezzo(â‚¬)\n82802 CINTURA (P) 22,,00% 5,00\n06850 T.SHIRT (P) 22,00 5,00\n83232 CAM.MC (P) 22,,00% 10,00\n83232 CAM.MC (P) 22 00% 10,00\n07445 CAMICIA 22 00% 12,99\n88512 Arrotond(P) -0,04\nTOTALE COMPLESSIO 0%\ndi cut IA Lh\nPagamento contante 50,00\nResto 1309\nImporto pagato 42,95\n\n21-07-2023 12:28\nDOCUMENTO N. 1993-0065\n\nRT 99MEX017953\n\nDETTAGLIO FORME di PAGAMENTO\nContanti 50,00', 'uploads/image1.jpg', 'Termini Imerese ', 42.95, '2023-07-21'),
(36, 'EUROSPIN SICILIA S.P.A.\nP.V. Via Amerigo Vespucci\n\n90018 - Termini Imerese (PA)\n\nTel. 045/7862000\n\nPil, 03683460877\n\nwww.eurospin.it\n\n \n\nCassa 6\n\nDOCUMENTO COMMERCIALE\ndi vendita o prestazione\n\n \n \n   \n \n \n  \n  \n  \n\nDescrizione IVA EURO\nGAMBERI ARGENT, 800 10% 8,99\nGAMBERI ARGENT. 800 10% 8,98\nGAMBERI ARGENT,800 10% 8, o2\nCOZZE SGUSC, 250g 10% 2,09\nCOZZE SGUSC,) 2509 1104 2,09\n\nÂ» COZZE SGUSC. 250g 10% 2 (oh)\n>) ACETO BIANCO PET 1 10% iO} oes)\n)ACETO BIANCO PET 1 10% [Oh aay?\n~ACETO BIANCO PET 1 10% 0), 59\nSPAGHETTI TAGL.1kg 4% 1,09\n\nÂ® BAVETTE 1kg 4% 1,09\nBAVETTE 1kg 4% 1, 0:9\nSEDANI RIGATI 1kg 4% 1,09\nPIPE RIGATE 1kg 4% 1,09\nPIPE RIGATE 1kg 4% 1,09\nRIC SAP ARG/ALOE 2 22% 2,00\n43,55\n\n43,55\n\nTotale Complessivo 43,55\n\nDI CUI IVA 3,79\nPagamento elettronico 43,55\nIMPORTO PAGATO 43,55\n\n22/07/2023 13:00\n OOCUMENTO N, 00874-00123\n\nSERVER RT: 96SRT001533\nECR: 93030006', 'uploads/image3.jpg', 'Termini Imerese ', 43.55, '2023-07-22');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `scontrino`
--
ALTER TABLE `scontrino`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `scontrino`
--
ALTER TABLE `scontrino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
