-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2016 at 05:03 am
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `captured_write`
--

-- --------------------------------------------------------

--
-- Table structure for table `print_sizes`
--

CREATE TABLE IF NOT EXISTS `print_sizes` (
`id` int(10) unsigned NOT NULL,
  `size` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `size_price` decimal(6,2) NOT NULL,
  `paper_weight_grams` decimal(6,2) NOT NULL,
  `paper_hight_mm` decimal(6,2) NOT NULL,
  `paper_width_mm` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `print_sizes`
--

INSERT INTO `print_sizes` (`id`, `size`, `size_price`, `paper_weight_grams`, `paper_hight_mm`, `paper_width_mm`, `created_at`, `updated_at`) VALUES
(1, 'A5', '10.00', '2.50', '210.00', '148.00', NULL, NULL),
(2, 'A4', '20.00', '5.00', '297.00', '210.00', NULL, NULL),
(3, 'A3', '30.00', '10.00', '420.00', '297.00', NULL, NULL),
(4, 'A2', '40.00', '20.00', '594.00', '420.00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `print_sizes`
--
ALTER TABLE `print_sizes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `print_sizes`
--
ALTER TABLE `print_sizes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
