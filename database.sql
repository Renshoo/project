-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 10:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `rencana` text NOT NULL,
  `fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `deskripsi`, `rencana`, `fasilitas`) VALUES
(1, 'Ubud Full Day Tour', 'Explore the best of Ubud in a day! Discover Tegenungan Waterfall, Tegalalang Rice Terrace, Tirta Empul Temple, Ubud Monkey Forest, Ubud Palace, and Ubud Market. Enjoy private transport, lunch, and expert guidance. Book now for an enriching cultural and scenic adventure in Bali!', 'Pick up from your hotel\r\nUbud Swing Experience\r\nBalinese House Compound Visit\r\nSacred Monkey Forest Sanctuary\r\nTegalalang Rice Terrace\r\nTirta Empul Temple\r\nTegenungan Waterfall\r\nBack to your hotel', 'The tour will be accompanied by our licensed driver in private air-conditioning car to keep your\r\nconvenience and enjoyable journey.'),
(2, 'East Bali Tour', 'Embark on a journey through East Bali\'s cultural treasures with us! Discover Lempuyang Temple\'s stunning vistas, delve into Tenganan Traditional Village\'s rich heritage, and wander Tirta Gangga Water Garden and Taman Ujung Sukasada. Enjoy a delightful lunch in Candidasa and travel comfortably in a private, air-conditioned car with our expert driver-guide.', 'Pick up from your hotel\r\nVisit Lempuyang Temple\r\nLunch at Restaurant in Candidasa area\r\nVisit Tenganan Traditional Village\r\nVisit Tirta Gangga Water Garden\r\nVisit Taman Ujung Sukasada\r\nBack to your hotel', 'The tour will be accompanied by our licensed driver in private air-conditioning car to keep your\r\nconvenience and enjoyable journey.');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `lokasi` text NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `gambar`, `lokasi`, `nama`) VALUES
(1, 'Gallery/product2.png', 'Bali, Indonesia', 'Paket Tour Nusa Penida Barat'),
(2, 'Gallery/product3.png', 'Bali, Indonesia', 'Paket Tour Nusa Penida Timur'),
(3, 'Gallery/product3.jpg', 'Bali, Indonesia', 'Combination West Trip Nusa Penida + Snorkeling'),
(4, 'Gallery/product4.png', 'Bali, Indonesia', 'Paket Tour Nusa Penida 1 Hari 1 Malam'),
(5, 'Gallery/product5.png', 'Bali, Indonesia', 'Paket Tour Kombinasi Nusa Penida (Destinasi Barat Dan Timur)'),
(6, 'Gallery/product6.png', 'Bali, Indonesia', 'West Trip Nusa Penida'),
(7, 'Gallery/product7.jpg', 'Bali, Indonesia', 'Combination West Trip Nusa Penida + Snorkeling'),
(8, 'Gallery/product88.png', 'Bali, Indonesia', 'East Trip Nusa Penida');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
