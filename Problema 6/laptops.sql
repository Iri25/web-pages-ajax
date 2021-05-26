-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 25, 2021 la 06:03 PM
-- Versiune server: 10.4.19-MariaDB
-- Versiune PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `laptops`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `laptops`
--

CREATE TABLE `laptops` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `procesor` varchar(100) NOT NULL,
  `memory` varchar(100) NOT NULL,
  `hdd` varchar(100) NOT NULL,
  `graphicsCard` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `laptops`
--

INSERT INTO `laptops` (`id`, `name`, `procesor`, `memory`, `hdd`, `graphicsCard`) VALUES
(1, 'Asus Gaming', 'i5', '8GB', '512GB', 'GTX 1050'),
(2, 'Asus ROG', 'i7', '16GB', '1024GB', 'GTX 1050 Ti'),
(3, 'MSI GF65 Thin', 'i7', '8GB', '512GB', 'GTX 1660 Ti');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
