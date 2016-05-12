-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 02:24 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `captured_write`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `print_id` int(10) UNSIGNED NOT NULL,
  `size_id` int(10) UNSIGNED NOT NULL,
  `frame_id` int(10) UNSIGNED NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `single_price` decimal(6,2) NOT NULL,
  `subtotal` decimal(6,2) NOT NULL,
  `status` enum('refunded','shipped','approved','expired','declined','timeout','pending') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `session_id`, `print_id`, `size_id`, `frame_id`, `quantity`, `single_price`, `subtotal`, `status`, `created_at`, `updated_at`) VALUES
(2, '34e8c3c69e', 6, 1, 1, 1, '15.00', '15.00', 'pending', '2016-05-11 11:00:22', '2016-05-11 11:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `frame_sizes`
--

CREATE TABLE `frame_sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `size` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `size_price` decimal(6,2) NOT NULL,
  `frame_weight_grams` decimal(6,2) NOT NULL,
  `frame_hight_mm` decimal(6,2) NOT NULL,
  `frame_width_mm` decimal(6,2) NOT NULL,
  `frame_depth_mm` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `frame_sizes`
--

INSERT INTO `frame_sizes` (`id`, `size`, `size_price`, `frame_weight_grams`, `frame_hight_mm`, `frame_width_mm`, `frame_depth_mm`, `created_at`, `updated_at`) VALUES
(1, 'no_frame', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(2, 'A5', '5.00', '25.00', '240.00', '188.00', '30.00', NULL, NULL),
(3, 'A4', '10.00', '50.00', '337.00', '250.00', '30.00', NULL, NULL),
(4, 'A3', '15.00', '100.00', '460.00', '337.00', '30.00', NULL, NULL),
(5, 'A2', '20.00', '200.00', '634.00', '480.00', '30.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_21_074023_prints_table', 1),
('2016_05_01_074942_create_print_size_table', 2),
('2016_05_01_074956_create_frame_size_table', 2),
('2016_05_02_023414_create_crarts_table', 2),
('2016_05_07_032328_create_shipping_table', 2),
('2016_05_09_020627_create_orders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `cart_session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `grand_total` decimal(6,2) NOT NULL,
  `status` enum('refunded','shipped','approved','expired','declined','timeout','pending') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prints`
--

CREATE TABLE `prints` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` smallint(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prints`
--

INSERT INTO `prints` (`id`, `title`, `price`, `description`, `poster`, `quantity`, `created_at`, `updated_at`) VALUES
(6, 'Be Still and Know - Gold', '5.00', 'Be still and know that I am God \r\nPsalm 46:10', 'BeStillandKnowGold', 499, '2016-05-11 09:16:14', '2016-05-11 11:00:22'),
(7, 'Clothed With Strength', '0.00', 'She is Clothed With Strength and Dignity and Laughs Without Fear of the Future -\r\nProverbs 31:25', 'ClothedWithStrength', 500, '2016-05-11 09:19:02', '2016-05-11 09:19:21'),
(8, 'Do Small Things - Floral', '0.00', 'Do Small Things With Great Love', 'DoSmallThings', 500, '2016-05-11 09:22:10', '2016-05-11 09:22:50'),
(9, 'Goal Getter - Gold', '5.00', 'Goal Getter', 'GoalGetterGold', 500, '2016-05-11 09:25:38', '2016-05-11 09:25:38'),
(10, 'Gods Spirit Beckons - Gold on Black', '5.00', 'Gods Spirit Beckons There are Things to Do and Places to Go', 'GodsSpiritBeckonsGoldonBlack', 500, '2016-05-11 09:27:38', '2016-05-11 09:30:13'),
(11, 'Gods Spirit Beckons - Gold on White', '5.00', 'Gods Spirit Beckons There are Things to Do and Places to Go', 'GodsSpiritBeckonsGoldonWhite', 500, '2016-05-11 09:28:55', '2016-05-11 09:28:55'),
(12, 'Gods Spirit Beckons - Gold on White', '5.00', 'Gods Spirit Beckons There are Things to Do and Places to Go', 'GodsSpiritBeckonsGoldonWhite', 500, '2016-05-11 09:30:32', '2016-05-11 09:30:32'),
(13, 'Gods Spirit Beckons', '0.00', 'Gods Spirit Beckons There are Things to Do and Places to go', 'GodsSpiritBeckons', 500, '2016-05-11 09:31:29', '2016-05-11 11:00:31'),
(14, 'Gods Spirit Beckons - Gold on Black', '5.00', 'Gods Spirit Beckons There are Things to Do and Places to Go', 'GodsSpiritBeckonsGoldonBlack', 500, '2016-05-11 09:32:29', '2016-05-11 09:32:29'),
(15, 'Goal Getter - Gold', '5.00', 'Goal Getter', 'GoalGetterGold', 500, '2016-05-11 09:33:23', '2016-05-11 09:33:23'),
(16, 'Hard Work - Gold on Black', '5.00', 'Hard Work Beats Talent When Talent Destroys Hard Work', 'HardWorkGoldonBlack', 500, '2016-05-11 09:34:42', '2016-05-11 09:34:42'),
(17, 'He Put a Little of Heaven in Our Hearts', '0.00', 'He Put a Little of Heaven in Our Hearts So We Never Settle For Less - 2 Corinthians 5:5', 'HePutaLittleofHeaveninOurHearts', 500, '2016-05-11 09:38:41', '2016-05-11 09:38:41'),
(18, 'Hope Continually', '0.00', 'But I Will Hope Continually and Praise You More and More - Psalm 71:14', 'HopeContinually', 500, '2016-05-11 09:40:54', '2016-05-11 09:40:54'),
(19, 'Hope Continually - Gold on White', '5.00', 'But I Will Hope Continually and Praise You More and More - Psalm 71:14', 'HopeContinuallyGoldonWhite', 500, '2016-05-11 09:41:26', '2016-05-11 09:41:26'),
(20, 'Humble Kanye - Gold on White', '5.00', 'Humble With a Hint of Kanye', 'HumbleKanyeGoldonWhite', 500, '2016-05-11 09:42:39', '2016-05-11 09:42:39'),
(21, 'Humble Kanye - Gold on Black', '5.00', 'Humble With a Hint of Kanye', 'HumbleKanyeGoldonBlack', 500, '2016-05-11 09:43:10', '2016-05-11 09:43:10'),
(22, 'I Can Do All Things', '0.00', 'I Can Do All Things Through Christ Who Gives Me Strength - Philippians 4:13', 'ICanDoAllThings', 500, '2016-05-11 09:45:26', '2016-05-11 09:45:26'),
(23, 'In The Darkest of Days', '0.00', 'In The Darkest of Days I Will Smile My Brightest', 'InTheDarkestofDays', 500, '2016-05-11 09:47:34', '2016-05-11 09:47:34'),
(24, 'My Help Comes From', '0.00', 'My Help Comes From The Lord, The Maker of Heaven and Earth - Psalm 121:2', 'MyHelpComesFrom', 500, '2016-05-11 09:49:31', '2016-05-11 09:49:31'),
(25, 'Sky Scrapper  ', '0.00', 'I Will Rising From The Ground Like a Sky Scraper', 'SkyScrapper', 50, '2016-05-11 09:51:04', '2016-05-11 09:51:04'),
(26, 'Spread Love - Gold on Black', '5.00', 'Spread Love As Thick As You Would Nutella', 'SpreadLoveGoldonBlack', 500, '2016-05-11 09:52:32', '2016-05-11 09:52:32'),
(27, 'Stay Humble - Gold on Black', '5.00', 'Stay Humble, Hustle Hard', 'StayHumbleGoldonBlack', 500, '2016-05-11 09:53:32', '2016-05-11 09:53:32'),
(28, 'Stay Humble', '0.00', 'Stay Humble, Hustle Hard', 'StayHumble', 500, '2016-05-11 09:54:07', '2016-05-11 09:54:07'),
(29, 'Too Blessed', '0.00', 'Too Blessed To Be Stressed', 'TooBlessed', 500, '2016-05-11 09:54:53', '2016-05-11 09:54:53'),
(30, 'Too Blessed - Gold on Black', '5.00', 'Too Blessed To Be Stressed', 'TooBlessedGoldonBlack', 500, '2016-05-11 09:55:51', '2016-05-11 09:55:51'),
(31, 'We Loose Ourselves', '0.00', 'We Loose Ourselves In The Thing We Love. We Find Ourselves There Too.', 'WeLooseOurselves', 500, '2016-05-11 09:57:11', '2016-05-11 09:57:11'),
(32, 'Think About Such Things', '0.00', 'What Ever Is True, Noble, Light, Pure, Lovely, Admirable, Excellent, Praiseworthy, Think About Such Things - Philippians 4:8', 'ThinkAboutSuchThings', 500, '2016-05-11 10:00:27', '2016-05-11 10:00:27'),
(33, 'Think About Such Things - Gold on Black', '0.00', 'What Ever Is True, Noble, Light, Pure, Lovely, Admirable, Excellent, Praiseworthy, Think About Such Things - Philippians 4:8', 'ThinkAboutSuchThingsGoldonBlack', 500, '2016-05-11 10:01:18', '2016-05-11 10:01:18'),
(34, 'What If I Fall', '0.00', '"What If I Fall? " "Oh My Darling, What If You Fly?"', 'WhatIfIFall', 500, '2016-05-11 10:02:34', '2016-05-11 10:02:34'),
(35, 'When My Heart Is Overwhelmed - Gold on Black', '5.00', 'When My Heart Is Overwhelmed Lead Me To The Rock That Is Higher Than I - Psalm 61:2', 'WhenMyHeartIsOverwhelmedGoldonBlack', 500, '2016-05-11 10:04:37', '2016-05-11 10:04:37'),
(36, 'You Are Blessed', '0.00', 'You Are Blessed When You''re Content With Just Who You Are - No More No Less. That''s The Moment You Find Yourselves Proud Owners Of Everything That Can''t Be Bought - Matthew 5:5', 'YouAreBlessed', 500, '2016-05-11 10:07:19', '2016-05-11 10:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `print_sizes`
--

CREATE TABLE `print_sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `size` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `size_price` decimal(6,2) NOT NULL,
  `paper_weight_grams` decimal(6,2) NOT NULL,
  `paper_hight_mm` decimal(6,2) NOT NULL,
  `paper_width_mm` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `print_sizes`
--

INSERT INTO `print_sizes` (`id`, `size`, `size_price`, `paper_weight_grams`, `paper_hight_mm`, `paper_width_mm`, `created_at`, `updated_at`) VALUES
(1, 'A5', '10.00', '2.50', '210.00', '148.00', NULL, NULL),
(2, 'A4', '20.00', '5.00', '297.00', '210.00', NULL, NULL),
(3, 'A3', '30.00', '10.00', '420.00', '297.00', NULL, NULL),
(4, 'A2', '40.00', '20.00', '594.00', '420.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `session_id`, `name`, `email`, `phone`, `message`, `country`, `state`, `city`, `street`, `postcode`, `created_at`, `updated_at`) VALUES
(1, '3bdac12bab', 'kristy', 'kristy.ramage@gmail.com', '124563789', 'this is awesome', 'New Zealand', 'Taranaki', 'New Plymouth', '8 Hood Place', '4310', '2016-05-10 13:42:56', '2016-05-10 13:42:56'),
(4, '2c856d1d51', 'kristy', 'kristy.ramage@gmail.com', '125478963', 'ththerher ehe rhe rh', 'New Zealand', 'Taranaki', 'New Plymouth', '8 Hood Place', '4312', '2016-05-10 14:50:37', '2016-05-10 14:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstName`, `lastName`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kristy', 'kristy@admin.com', '$2y$10$ysW9syKQVbLiIjQM7zcz6.imeOA0XMbA7z3jrLtr/E6aHI6Sux7am', 'Kristy', 'Ramage', 'admin', NULL, '2016-04-27 11:21:58', '2016-04-27 11:21:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_print_id_foreign` (`print_id`),
  ADD KEY `carts_size_id_foreign` (`size_id`),
  ADD KEY `carts_frame_id_foreign` (`frame_id`);

--
-- Indexes for table `frame_sizes`
--
ALTER TABLE `frame_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_cart_id_foreign` (`cart_id`),
  ADD KEY `orders_shipping_id_foreign` (`shipping_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `prints`
--
ALTER TABLE `prints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `print_sizes`
--
ALTER TABLE `print_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `frame_sizes`
--
ALTER TABLE `frame_sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prints`
--
ALTER TABLE `prints`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `print_sizes`
--
ALTER TABLE `print_sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_frame_id_foreign` FOREIGN KEY (`frame_id`) REFERENCES `frame_sizes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_print_id_foreign` FOREIGN KEY (`print_id`) REFERENCES `prints` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `print_sizes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shipping` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
