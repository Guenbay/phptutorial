-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 04. Okt 2023 um 07:50
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
-- Datenbank: `bankomat`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `surename` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `girokonto_id` int(11) DEFAULT NULL,
  `sparbuch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `accounts`
--

INSERT INTO `accounts` (`id`, `firstname`, `surename`, `email`, `girokonto_id`, `sparbuch_id`) VALUES
(3, 'Ivan', 'Gartsev', 'ivan@gartsev.de', NULL, NULL),
(4, 'Günbay', 'Sali', 'gs@blubbi.de', NULL, NULL),
(5, 'Lina', 'Mahayqli', 'lina@ka.de', NULL, NULL),
(6, 'test', 'teset', 'test@test.de', NULL, NULL),
(7, 'Test2', 'test2', 'test2@test.de', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `girokonten`
--

CREATE TABLE `girokonten` (
  `id` int(11) NOT NULL,
  `account_nr` int(11) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sparbuecher`
--

CREATE TABLE `sparbuecher` (
  `id` int(11) NOT NULL,
  `account_nr` int(11) NOT NULL,
  `credit` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_ids_idx` (`girokonto_id`,`sparbuch_id`) USING BTREE,
  ADD KEY `sparbuch_id` (`sparbuch_id`);

--
-- Indizes für die Tabelle `girokonten`
--
ALTER TABLE `girokonten`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_nr_idx` (`account_nr`) USING BTREE;

--
-- Indizes für die Tabelle `sparbuecher`
--
ALTER TABLE `sparbuecher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_nr_idx` (`account_nr`) USING BTREE;

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`sparbuch_id`) REFERENCES `sparbuecher` (`id`);

--
-- Constraints der Tabelle `girokonten`
--
ALTER TABLE `girokonten`
  ADD CONSTRAINT `girokonten_ibfk_1` FOREIGN KEY (`id`) REFERENCES `accounts` (`girokonto_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
