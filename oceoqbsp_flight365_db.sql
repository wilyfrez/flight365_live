-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2020 at 12:08 AM
-- Server version: 10.1.43-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oceoqbsp_flight365_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'wilyfrez', '1234'),
(2, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `approved_testimonies`
--

CREATE TABLE `approved_testimonies` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `testimonies` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `approved_testimonies`
--

INSERT INTO `approved_testimonies` (`id`, `name`, `email`, `dept`, `country`, `testimonies`) VALUES
(1, 'Paul Success', 'paul@gmail.com', 'Benin Zone 1', 'Nigeria', 'Thank you Pastor ma. For this opportunity to be taught on leadership excellence. I have move and motivated to lead rightly'),
(4, 'Glory Mike', 'gloriousa@gmail.com', 'OFTP', 'Nigeria', 'Glory!!! I am so so blessed. Thanks a million, Esteemed Pastor Ma, for those words. I am flying and my leadership is in another dimension of glory. Thank you, Ma. I love you'),
(5, 'Pastor Precious Anyim ', 'anyimprecious@gmail.com', 'OCEO ', 'Nigeria', 'God is most gracious and kind'),
(6, 'Hillary Ode', 'odeadiya@gmail.com', 'OCEO', 'Nigeria', 'Praise God halleujah!!! ');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `dept`, `country`, `comment`, `time`) VALUES
(24, 'Wisdom Bold', 'wisy@gmail.com', 'Benin zone 1', 'Cameroon', 'Wow this is beatiful', '2019-12-22 22:45:26'),
(32, 'Kenneth Paul', 'paul@gmail.com', 'Zone 2', 'Nigeria', 'I am an excellent leader. ', '2019-12-31 10:51:49'),
(36, 'Micheal Paul', 'loveprogramming365@gmail.com', 'OHOA', 'Nigeria', 'This is awesome', '2020-01-02 12:25:44'),
(37, 'Blessings Nelson', 'bebe@gmail.com', 'ISM', 'Nigeria', 'Hallelujah ðŸ•º', '2020-01-02 13:14:49'),
(38, 'Temienor Solomon', 'solomontemienor1994@gmail.com', 'Media', 'Nigeria', 'Wonderful, inventive', '2020-01-02 14:36:39'),
(39, 'Pastor Precious Anyim ', 'anyimprecious@gmail.com', 'OCEO ', 'Nigeria', 'Am In!!\n', '2020-01-03 01:43:56'),
(40, 'OGHENECHOHWO BLESSING', 'oghenechohwofegiro@gmail.com', 'None', 'Nigeria', 'Nice', '2020-01-03 02:35:04'),
(41, 'Simon Grant ', 'grantsimon018@gmail.com', 'Sound/zone A', 'Nigeria', 'Amazing ðŸ¤¯â¤ï¸', '2020-01-03 11:53:03'),
(42, 'Oghenechohwo Joy', 'nyoregreat49@gmail.com', 'Media', 'Nigeria', 'This is awesome and inventive ', '2020-01-04 00:46:09'),
(43, 'Elderson Bonny ', 'elderson202@gmail.com', 'Oceo', 'Nigeria', 'Theres no better way to start the year... I\'m super excited ', '2020-01-04 04:37:15'),
(44, 'Pastor Aisha Momoh', 'aishamomoh07@gmail.com', 'Campus Ministry', 'Nigeria', 'Its simple to access and quite easy.', '2020-01-06 07:48:04'),
(45, 'Hillary Ode', 'odeadiya@gmail.com', 'OCEO', 'Nigeria', 'Praise God\n', '2020-01-07 03:45:18'),
(46, 'Edna Oharisi', 'Pastoredna.o@loveworld360.com', 'OCEO', 'Nigeria', 'Wow!!!!!!!!!!!!!!!!!!!! i love it', '2020-01-28 09:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `declined_testimonies`
--

CREATE TABLE `declined_testimonies` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `testimonies` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `testimonies` text COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `name`, `email`, `dept`, `country`, `testimonies`, `time`) VALUES
(10, 'Wisdom Nose', 'nose@gmail.com', 'OFTP', 'Nigeria', 'I want to say a very big thank you to you Pastor Ma. Every time I listen to you I receive guidance to win in life. I love you big Ma.', '2020-01-01 06:42:51'),
(12, 'Micheal Paul', 'loveprogramming365@gmail.com', 'OHOA', 'Nigeria', 'Wow... Hearing this alone I have moved. Thank you ma', '2020-01-02 12:30:56'),
(13, 'Blessings Nelson', 'bebe@gmail.com', 'ISM', 'Nigeria', 'Words so precious', '2020-01-02 13:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `viewers`
--

CREATE TABLE `viewers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `signInTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `viewers`
--

INSERT INTO `viewers` (`id`, `name`, `email`, `dept`, `country`, `signInTime`) VALUES
(1, 'Micheal Paul', 'loveprogramming365@gmail.com', 'OHOA', 'Nigeria', '2020-01-02 12:25:16'),
(2, 'Blessings Nelson', 'bebe@gmail.com', 'ISM', 'Nigeria', '2020-01-02 13:13:35'),
(3, 'Temienor Solomon', 'solomontemienor1994@gmail.com', 'Media', 'Nigeria', '2020-01-02 14:35:52'),
(4, 'Pastor Precious Anyim ', 'anyimprecious@gmail.com', 'OCEO ', 'Nigeria', '2020-01-03 01:43:24'),
(5, 'OGHENECHOHWO BLESSING', 'oghenechohwofegiro@gmail.com', 'None', 'Nigeria', '2020-01-03 02:34:41'),
(6, 'Elderson ', 'elderson202@gmail.com', 'Oceo', '', '2020-01-03 03:48:40'),
(7, 'Wilfred', 'Wilfred.o@loveworld360.com', 'OCEO', 'Nigeria', '2020-01-03 04:07:12'),
(8, 'wilyfrez', 'wilfred.o@loveworld360.com', 'OCEO', 'Nigeria', '2020-01-03 04:48:17'),
(9, 'Oghenechohwo Joy', 'nyoregreat49@gmail.com', 'Media', 'Nigeria', '2020-01-03 06:30:44'),
(10, 'Oghenechohwo Joy', 'nyoregreat49@gmail.com', 'Media', 'Nigeria', '2020-01-03 06:39:44'),
(11, 'Oghenechohwo Joy', 'nyoregreat49@gmail.com', 'Media', 'Nigeria', '2020-01-03 07:08:35'),
(12, 'Simon Grant ', 'grantsimon018@gmail.com', 'Sound/zone A', 'Nigeria', '2020-01-03 11:52:16'),
(13, 'Oghenechohwo Joy', 'nyoregreat49@gmail.com', 'Media', 'Nigeria', '2020-01-04 00:28:36'),
(14, 'Oghenechohwo Joy', 'nyoregreat49@gmail.com', 'Media', 'Nigeria', '2020-01-04 00:38:04'),
(15, 'Oghenechohwo Joy', 'nyoregreat49@gmail.com', 'Media', 'Nigeria', '2020-01-04 00:45:00'),
(16, 'Elderson Bonny ', 'elderson202@gmail.com', 'Oceo', 'Nigeria', '2020-01-04 04:34:44'),
(17, 'Egharevba Kelly', 'kellyeghas378@yahoo.com', 'Decoration/zone A', 'Nigeria', '2020-01-04 07:32:08'),
(18, 'Ose Usiholo', 'oseusiholo85@gmail.com', 'Oceo', 'Nigeria', '2020-01-04 07:48:40'),
(19, 'Pastor Aisha Momoh', 'aishamomoh07@gmail.com', 'Campus Ministry', 'Nigeria', '2020-01-06 07:12:21'),
(20, 'Hillary Ode', 'odeadiya@gmail.com', 'OCEO', 'Nigeria', '2020-01-07 03:42:19'),
(21, 'Hillary Ode', 'odeadiya@gmail.com', 'OCEO', 'Nigeria', '2020-01-07 05:50:58'),
(22, 'Oghenechohwo Obruche', 'wilfred.o@loveworld360.com', 'OCEO', 'Nigeria', '2020-01-07 11:18:13'),
(23, 'Kenneth Paul', 'loveprogramming365@gmail.com', 'OHOA', 'Nigeria', '2020-01-07 11:39:15'),
(24, 'Hhjjj', 'bebe@gmail.com', 'Bbnnm', 'Nigeria', '2020-01-07 12:06:28'),
(25, 'Kenneth Paul', 'wilyfrez@gmail.com', 'OHOA', 'Nigeria', '2020-01-08 09:37:16'),
(26, 'Wilfred', 'wilyfrez@gmail.com', 'Healing School', 'Nigeria', '2020-01-19 15:29:46'),
(27, 'Jennifer Otobo', 'Real4jenny50@gmail.com', 'OCEO/Zone 1', 'Nigeria', '2020-01-20 17:29:16'),
(28, 'Wilfred ', 'wilyf@gma.com', 'OCEO', 'Nigeria', '2020-01-24 09:26:54'),
(29, 'Oghenechohwo Obruche', 'wilyfrez@gmail.com', 'OHOA', 'Nigeria', '2020-01-26 19:19:54'),
(30, 'wilyfrez', 'wilyfrez@gmail.com', 'OHOA', 'Nigeria', '2020-01-27 05:09:18'),
(31, 'wifred o', 'wil@gn.com', 'oceo', 'Nigeria', '2020-01-27 08:19:09'),
(32, 'Oghenechohwo Obruche', 'wilfred.o@loveworld360.com', 'OHOA', 'Nigeria', '2020-01-28 07:43:35'),
(33, 'wilyfrez', 'loveprogramming365@gmail.com', 'OCEO', 'Nigeria', '2020-01-28 07:53:57'),
(34, 'Oghenechohwo Obruche', 'wilyfrez@gmail.com', 'OHOA', 'Nigeria', '2020-01-28 08:40:01'),
(35, 'Edna Oharisi', 'Pastoredna.o@loveworld360.com', 'OCEO', 'Nigeria', '2020-01-28 09:00:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved_testimonies`
--
ALTER TABLE `approved_testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `declined_testimonies`
--
ALTER TABLE `declined_testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewers`
--
ALTER TABLE `viewers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `approved_testimonies`
--
ALTER TABLE `approved_testimonies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `declined_testimonies`
--
ALTER TABLE `declined_testimonies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `viewers`
--
ALTER TABLE `viewers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
