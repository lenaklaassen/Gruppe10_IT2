-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 20. Dez 2022 um 13:16
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `m11575_21`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'zentraler Stromzähler'),
(2, 'Lampen'),
(3, 'Ladekabel'),
(216, 'Router');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gas_meter`
--

CREATE TABLE `gas_meter` (
  `id` int(10) UNSIGNED NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `consumption` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `gas_meter`
--

INSERT INTO `gas_meter` (`id`, `timestamp`, `consumption`) VALUES
(1, '2022-12-18 16:26:03', 123),
(2, '2022-12-18 16:26:03', 125),
(3, '2022-12-19 17:01:00', 50),
(4, '2022-12-19 17:01:35', 234),
(5, '2022-12-19 17:02:10', 20),
(6, '2022-12-19 17:02:10', 23),
(7, '2022-12-19 17:02:10', 343),
(8, '2022-12-19 17:02:10', 170),
(9, '2022-12-19 17:02:10', 116),
(10, '2022-12-19 17:02:10', 67),
(11, '2022-12-19 17:02:10', 23),
(12, '2022-12-19 17:02:10', 112),
(13, '2022-12-19 17:02:10', 140),
(14, '2022-12-19 17:02:10', 206),
(15, '2020-12-22 11:20:00', 56),
(16, '2020-12-22 10:58:23', 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `power_meter`
--

CREATE TABLE `power_meter` (
  `id` int(10) UNSIGNED NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category` int(11) NOT NULL,
  `consumption` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `power_meter`
--

INSERT INTO `power_meter` (`id`, `timestamp`, `category`, `consumption`) VALUES
(1, '2022-12-18 16:25:43', 1, 50),
(2, '2022-12-19 13:08:01', 3, 20),
(3, '2022-12-19 13:08:13', 1, 40),
(4, '2022-12-19 13:12:01', 1, 10),
(5, '2022-12-19 13:12:01', 1, 23),
(6, '2022-12-19 13:12:01', 1, 12),
(7, '2022-12-19 13:12:01', 1, 233),
(8, '2022-12-19 13:12:01', 1, 65),
(9, '2022-12-19 15:30:21', 1, 65),
(10, '2022-12-19 13:12:01', 1, 45),
(11, '2022-12-19 13:12:01', 1, 187),
(12, '2022-12-19 13:12:01', 1, 69),
(13, '2022-12-19 13:12:01', 1, 120),
(14, '2022-12-19 15:41:48', 1, 121),
(15, '2022-12-19 15:42:08', 3, 99),
(16, '2022-12-19 16:06:13', 1, 130),
(17, '2022-12-19 16:06:47', 1, 110),
(18, '2022-12-19 16:06:47', 1, 110),
(19, '2022-12-19 16:06:58', 1, 100),
(20, '2022-12-19 16:07:42', 1, 23),
(21, '2020-12-22 11:09:43', 2, 12),
(22, '2020-12-22 11:10:21', 1, 10),
(23, '2020-12-22 11:11:22', 3, 132),
(25, '2020-12-22 11:36:08', 216, 6),
(26, '2020-12-22 10:59:32', 3, 23);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `gas_meter`
--
ALTER TABLE `gas_meter`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `power_meter`
--
ALTER TABLE `power_meter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `electricity meter_category_foreign` (`category`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT für Tabelle `gas_meter`
--
ALTER TABLE `gas_meter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `power_meter`
--
ALTER TABLE `power_meter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `power_meter`
--
ALTER TABLE `power_meter`
  ADD CONSTRAINT `electricity meter_category_foreign` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
