-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 03:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_6406021421171`
--
CREATE DATABASE IF NOT EXISTS `db_6406021421171` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_6406021421171`;

-- --------------------------------------------------------

--
-- Table structure for table `harley`
--

DROP TABLE IF EXISTS `harley`;
CREATE TABLE `harley` (
  `_id` int(8) NOT NULL,
  `name_bike` varchar(255) NOT NULL DEFAULT 'unknow',
  `color_bike` varchar(80) NOT NULL,
  `Price` varchar(80) NOT NULL,
  `time_create` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `harley`
--

TRUNCATE TABLE `harley`;
--
-- Dumping data for table `harley`
--

INSERT DELAYED IGNORE INTO `harley` (`_id`, `name_bike`, `color_bike`, `Price`, `time_create`) VALUES
(1, 'ROAD KING', 'Black', '฿ 1,259,000', '2022-02-04 14:47:23'),
(2, 'FORTY-EIGHT', 'White', '฿ 687,000', '2022-02-04 14:47:23'),
(3, 'SOFTAIL STANDARD', 'ฺBlack', '฿ 821,000', '2022-02-04 14:47:23'),
(4, 'FAT BOB', 'ฺBrown', ' ฿ 1,178,000 ', '2022-02-04 14:47:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harley`
--
ALTER TABLE `harley`
  ADD KEY `name_bike` (`name_bike`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
