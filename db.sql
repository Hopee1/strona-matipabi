-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 02:45 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4
CREATE DATABASE portfolio;
USE portfolio;   

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `o_mnie`
--

CREATE TABLE `o_mnie` (
  `id` int(11) NOT NULL,
  `tytul` varchar(255) NOT NULL,
  `opis` text NOT NULL,
  `obrazek` varchar(255) NOT NULL,
  `tekst1` text NOT NULL,
  `obrazek2` varchar(255) NOT NULL,
  `obrazek3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `o_mnie`
--

INSERT INTO `o_mnie` (`id`, `tytul`, `opis`, `obrazek`, `tekst1`, `obrazek2`, `obrazek3`) VALUES
(2, 'Informacje o mnie:', 'Mam 18 lat i jestem uczniem ZST w Słubicach. Uczę się na kierunku technik informatyk.\r\nNie przeszkadza mi to jednak w interesowaniu się takimi rzeczami jak, między innymi, historia, prawo. W swoim wolnym czasie lubię słuchać muzyki, w tym najróżniejszych gatunków, takich jak rock, metal, czy chociażby muzyka klasyczna. Lubię także gotować, oraz czytać i grać. Pasjonuję się także numizmatyką, oraz ogólnym kolekcjonowaniem starych rzeczy.', 'https://cdn.discordapp.com/attachments/948364094703013891/1101477336093839460/20230428_135556.jpg', 'Poniżej przedstawię parę monet jakie posiadam w swojej kolekcji.', 'https://cdn.discordapp.com/attachments/948364094703013891/1101477336689422346/20230428_135540.jpg', 'https://cdn.discordapp.com/attachments/948364094703013891/1101477337201131531/20230428_135615.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `o_mnie`
--
ALTER TABLE `o_mnie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `o_mnie`
--
ALTER TABLE `o_mnie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
