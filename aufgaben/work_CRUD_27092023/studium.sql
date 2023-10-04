-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 04. Okt 2023 um 07:49
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
-- Tabellenstruktur für Tabelle `kurse`
--

CREATE TABLE `kurse` (
  `id` int(11) NOT NULL,
  `kurscode` varchar(10) NOT NULL,
  `kursname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `kurse`
--

INSERT INTO `kurse` (`id`, `kurscode`, `kursname`) VALUES
(1, '001', 'DevOps'),
(52, '002', 'PHP');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `studenten`
--

CREATE TABLE `studenten` (
  `martnummer` int(11) NOT NULL,
  `nachname` varchar(50) NOT NULL,
  `vorname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `studenten`
--

INSERT INTO `studenten` (`martnummer`, `nachname`, `vorname`) VALUES
(3, 'Baki', 'Athome'),
(52, 'Zimba', 'Outdoor');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kurse`
--
ALTER TABLE `kurse`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `studenten`
--
ALTER TABLE `studenten`
  ADD PRIMARY KEY (`martnummer`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kurse`
--
ALTER TABLE `kurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT für Tabelle `studenten`
--
ALTER TABLE `studenten`
  MODIFY `martnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
