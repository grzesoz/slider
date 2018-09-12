-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Sie 2018, 22:24
-- Wersja serwera: 10.1.13-MariaDB
-- Wersja PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `slider`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `size` int(11) NOT NULL,
  `type` text COLLATE utf8_polish_ci NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `foto`
--

INSERT INTO `foto` (`id`, `name`, `size`, `type`, `data`) VALUES
(20, 'F1.jpg', 48669, 'image/jpeg', '2018-08-29 20:21:10'),
(21, 'F2.jpg', 16108, 'image/jpeg', '2018-08-29 20:21:12'),
(22, 'F4.jpg', 126044, 'image/jpeg', '2018-08-29 20:21:15'),
(23, 'F3.jpg', 45511, 'image/jpeg', '2018-08-29 20:21:18');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
