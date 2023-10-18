-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Okt 2023 um 14:04
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `studium`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `faecher`
--

CREATE TABLE `faecher` (
  `id` int(11) NOT NULL,
  `kurscode` int(11) NOT NULL,
  `kursname` text NOT NULL,
  `kursbeschreibung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `faecher`
--

INSERT INTO `faecher` (`id`, `kurscode`, `kursname`, `kursbeschreibung`) VALUES
(5, 1, 'Deutsch', 'In diesem Fach lernt man die Deutsche Sprache und Grammatik'),
(6, 2, 'Informatik', 'Informationen und Mathematik'),
(9, 3, 'Sport', 'Leistungsfach Sport'),
(10, 4, 'Cocktail', 'Mischen von Cocktail '),
(11, 5, 'Shisha', 'Lernen wie man richtig Shisha zubereitet'),
(12, 6, 'Zerspannung', 'Zerspanungsmechaniker werden hier fündig');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kurse`
--

CREATE TABLE `kurse` (
  `id` int(11) NOT NULL,
  `kurscode` int(11) NOT NULL,
  `kursname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `kurse`
--

INSERT INTO `kurse` (`id`, `kurscode`, `kursname`) VALUES
(2, 0, ''),
(3, 0, ''),
(4, 0, ''),
(5, 0, ''),
(6, 101, 'Blubb Test Kurs Name'),
(7, 105, 'Blubbdiblubb'),
(8, 120, 'Etwas'),
(9, 121, 'test'),
(10, 124, 'test2'),
(11, 6, 'Zerspannung');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `notenbuch`
--

CREATE TABLE `notenbuch` (
  `id` int(11) NOT NULL,
  `kurscode` int(11) NOT NULL,
  `martnummer` int(11) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `notenbuch`
--

INSERT INTO `notenbuch` (`id`, `kurscode`, `martnummer`, `note`) VALUES
(1, 1, 123123, 1),
(2, 2, 123123, 1),
(3, 6, 123456, 2),
(4, 2, 123456, 1),
(5, 3, 123456, 2),
(6, 3, 123456, 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `studenten`
--

CREATE TABLE `studenten` (
  `id` int(11) NOT NULL,
  `martnummer` int(6) NOT NULL,
  `vorname` varchar(50) NOT NULL,
  `nachname` varchar(50) NOT NULL,
  `durchschnitt` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `studenten`
--

INSERT INTO `studenten` (`id`, `martnummer`, `vorname`, `nachname`, `durchschnitt`) VALUES
(100, 123456, 'Ziko', 'Haji', 0),
(101, 45678, 'Ivan', 'Gartsev', 1),
(104, 11564, 'Mila', 'Zwergspitz Pommeranien', 3.5),
(107, 11557, 'TestwithArt', 'ArtStudentEintragen', 6),
(108, 543157, 'queen of', 'drama', 3),
(122, 12334, 'test', 'test', 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `faecher`
--
ALTER TABLE `faecher`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `kurse`
--
ALTER TABLE `kurse`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `notenbuch`
--
ALTER TABLE `notenbuch`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `studenten`
--
ALTER TABLE `studenten`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `studenten_martnummer` (`martnummer`) USING BTREE;

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `faecher`
--
ALTER TABLE `faecher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `kurse`
--
ALTER TABLE `kurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `notenbuch`
--
ALTER TABLE `notenbuch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `studenten`
--
ALTER TABLE `studenten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
