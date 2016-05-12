-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 02:10 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prints`
--
ALTER TABLE `prints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prints`
--
ALTER TABLE `prints`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
