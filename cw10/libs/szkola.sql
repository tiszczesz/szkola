

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Maj 2016, 10:56
-- Wersja serwera: 10.1.9-MariaDB
-- Wersja PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Baza danych: `szkola`
--
DROP DATABASE IF EXISTS `szkola`;
CREATE DATABASE IF NOT EXISTS `szkola` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `szkola`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasy`
--


GRANT ALL PRIVILEGES ON `szkola`.* TO 'user'@'localhost' IDENTIFIED BY 'user';

CREATE TABLE `klasy` (
  `id` int(11) NOT NULL,
  `nazwa` char(4) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klasy`
--

INSERT INTO `klasy` (`id`, `nazwa`) VALUES
(1, '1A'),
(2, '1B'),
(3, '2A'),
(4, '2B');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczniowie`
--

CREATE TABLE `uczniowie` (
  `id` int(11) NOT NULL,
  `Nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `Imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `Srednia` float NOT NULL,
  `KlasaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uczniowie`
--

INSERT INTO `uczniowie` (`id`, `Nazwisko`, `Imie`, `Srednia`, `KlasaID`) VALUES
(1, 'Kopacki', 'Adam', 4.2, 1),
(2, 'Górecka', 'Anna', 5.2, 1),
(3, 'Turecki', 'Jan', 3, 2),
(4, 'Rylek', 'Tomasz', 3.5, 2),
(5, 'Frytek', 'Dominika', 3.5, 2),
(6, 'Popek', 'Grzegorz', 3.5, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klasy`
--
ALTER TABLE `klasy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uczniowie`
--
ALTER TABLE `uczniowie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klasy`
--
ALTER TABLE `klasy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `uczniowie`
--
ALTER TABLE `uczniowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;