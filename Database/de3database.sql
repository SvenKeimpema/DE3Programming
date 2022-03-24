-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 mrt 2022 om 08:58
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `de3database`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cammond`
--

CREATE TABLE `cammond` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comm` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `cammond`
--

INSERT INTO `cammond` (`id`, `username`, `comm`) VALUES
(7, 'username', 'dit is geweldig?'),
(24, 'thomas', 'Hello world! Log in om comments te plaatsen.'),
(27, 'Tokkie', 'Nog eentje'),
(28, 'Tokkie', 'Nog eentje'),
(29, 'Tokkie', 'Nog eentje'),
(30, 'Tokkie', 'Nog eentje');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `webuser`
--

CREATE TABLE `webuser` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `webuser`
--

INSERT INTO `webuser` (`id`, `username`, `email`, `pass`) VALUES
(0, 'Massie', 'keimpje8910@gmail.com', 'TMvvan1F'),
(1, 'sveny', 'keimpje1234@gmail.com', 'VP5mwn1b12'),
(2, 'username', 'keimpje12311224@gmail.com', 'VP5mwn1b12'),
(3, 'thomas', 'almekinders.t@gmail.com', '12345'),
(4, 'Tokkie', 'thomas.almekinders@ziggo.', 'Pass!rag');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `cammond`
--
ALTER TABLE `cammond`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `webuser`
--
ALTER TABLE `webuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `cammond`
--
ALTER TABLE `cammond`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT voor een tabel `webuser`
--
ALTER TABLE `webuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
