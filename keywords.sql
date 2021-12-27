-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 03:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `girl_channel`
--

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `name`) VALUES
(1, 'Perfume'),
(2, 'cosmetics'),
(3, 'i\'ve totally heard that'),
(4, 'tsuyoshi domoto'),
(5, 'plastic surgery'),
(6, 'handsome man'),
(7, 'kazuya ninomiya'),
(8, 'nozomi tsuji'),
(9, 'yutaka takenouchi'),
(10, 'kuro-chan'),
(11, 'M-1 GRAND PRIX'),
(12, 'hirano shiyo'),
(13, 'Sexy Zone'),
(14, 'image'),
(15, 'yuichi hanada'),
(16, 'koichi domoto'),
(17, 'sho sakurai'),
(18, 'storm'),
(19, 'namie amuro'),
(20, 'masama uno'),
(21, 'riho yoshioka'),
(22, 'toro salmon'),
(23, 'wonder'),
(24, 'misato ugaki'),
(25, 'kanna hashimoto'),
(26, 'bachelorhood'),
(27, 'tool'),
(28, 'figure skating'),
(29, 'princess masako'),
(30, 'anri sakaguchi'),
(31, 'kento yamazaki'),
(32, 'zawachin'),
(33, 'sugi-chan'),
(34, 'cute'),
(35, 'masaharu fukuyama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
