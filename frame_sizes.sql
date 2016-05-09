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
-- Table structure for table `frame_sizes`
--

CREATE TABLE IF NOT EXISTS `frame_sizes` (
`id` int(10) unsigned NOT NULL,
  `size` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `size_price` decimal(6,2) NOT NULL,
  `frame_weight_grams` decimal(6,2) NOT NULL,
  `frame_hight_mm` decimal(6,2) NOT NULL,
  `frame_width_mm` decimal(6,2) NOT NULL,
  `frame_depth_mm` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `frame_sizes`
--

INSERT INTO `frame_sizes` (`id`, `size`, `size_price`, `frame_weight_grams`, `frame_hight_mm`, `frame_width_mm`, `frame_depth_mm`, `created_at`, `updated_at`) VALUES
(1, 'no_frame', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(2, 'A5', '5.00', '25.00', '240.00', '188.00', '30.00', NULL, NULL),
(3, 'A4', '10.00', '50.00', '337.00', '250.00', '30.00', NULL, NULL),
(4, 'A3', '15.00', '100.00', '460.00', '337.00', '30.00', NULL, NULL),
(5, 'A2', '20.00', '200.00', '634.00', '480.00', '30.00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frame_sizes`
--
ALTER TABLE `frame_sizes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frame_sizes`
--
ALTER TABLE `frame_sizes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
