-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2019 at 04:10 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neven-projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `id` int(11) NOT NULL,
  `datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `naslov` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `tekst` text COLLATE utf8_croatian_ci NOT NULL,
  `slika` varchar(256) COLLATE utf8_croatian_ci NOT NULL,
  `kategorija` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`id`, `datum`, `naslov`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(1, '2019-06-22 15:45:47', 'Prvi test', 'Ovo je tekst članka. Trebao bi biti dugačak ali ne da mi se puno pisati.', 'fatcat.jpg', 'vijesti', 0),
(12, '2019-06-22 19:05:28', 'Jedan', 'haha xd', '1520255364830.jpg', 'muzika', 0),
(13, '2019-06-22 19:05:52', 'Dva', 'haha xd', '1557296977582.jpg', 'muzika', 0),
(15, '2019-06-22 22:05:04', 'Četiri', 'Tekst.', '1523968213049.jpg', 'sport', 0),
(18, '2019-06-22 23:25:29', 'Naslov', 'bezveze', '1524303853894.png', 'vijesti', 0),
(19, '2019-06-23 00:51:56', 'Dinoo', 'Lorem ipsum', '1520312569275.jpg', 'vijesti', 0),
(20, '2019-06-23 14:02:25', 'Ššest', 'Ovo je šesta vijest, i to sportska.', '1542587308271.jpg', 'sport', 0),
(21, '2019-06-23 14:03:40', 'Tri tri', 'Treća', '1538763773553.jpg', 'muzika', 0),
(22, '2019-06-23 14:07:15', 'Sedam', 'sedam', '1541771510509.jpg', 'sport', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) COLLATE utf8_croatian_ci NOT NULL,
  `prezime` varchar(32) COLLATE utf8_croatian_ci NOT NULL,
  `korisnicko_ime` varchar(32) COLLATE utf8_croatian_ci NOT NULL,
  `lozinka` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(9, 'Neven', 'Jakopčić', 'test', '$2y$10$ilBMnLxkBGeXzLeTYq2KP.J2jIu5scUSXNaUPhQiivp.KJiIxHWlO', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanak`
--
ALTER TABLE `clanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
