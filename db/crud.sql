-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2020 at 12:25 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(16, 'Rakesh', 'Rankawat', '2020-04-01 18:45:01', '2020-04-01 18:45:01'),
(17, 'Meenu', 'Rana', '2020-04-03 18:47:36', '2020-04-03 18:47:36'),
(18, 'Dela', 'Smith', '2020-04-03 18:47:51', '2020-04-03 18:47:51'),
(19, 'Effin', 'Cray', '2020-04-03 18:48:05', '2020-04-03 18:48:05'),
(20, 'Erika', 'Albright', '2020-04-03 18:51:47', '2020-04-03 18:51:47'),
(21, 'Mark', 'Zeck', '2020-04-03 18:52:37', '2020-04-03 18:52:37'),
(22, 'Edvardo', 'Sheverine', '2020-04-03 18:54:10', '2020-04-03 18:54:10'),
(23, 'Tanuj', 'Chauhan', '2020-04-03 18:54:31', '2020-04-03 18:54:31'),
(24, 'Umesh', 'Kumar', '2020-04-03 18:54:45', '2020-04-03 18:54:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
