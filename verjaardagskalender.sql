-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 07 feb 2018 om 08:40
-- Serverversie: 5.6.37
-- PHP-versie: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `github`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `verjaardagskalender`
--

CREATE TABLE IF NOT EXISTS `verjaardagskalender` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL DEFAULT '0',
  `month` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birth` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `verjaardagskalender`
--

INSERT INTO `verjaardagskalender` (`id`, `day`, `month`, `name`, `birth`) VALUES
(4, 13, 'Augustus', 'Damiën Peerbolte', 2001),
(7, 5, 'Februari', 'TestNameTwo', 1998),
(12, 4, 'Juni', 'Aardappel', 2000),
(13, 1, 'Januari', 'ProjectOne', 2001),
(14, 2, 'Januari', 'ProjectTwo', 2001),
(15, 11, 'Januari', 'ProjectEleven', 2000);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `verjaardagskalender`
--
ALTER TABLE `verjaardagskalender`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `verjaardagskalender`
--
ALTER TABLE `verjaardagskalender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
