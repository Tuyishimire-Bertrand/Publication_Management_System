-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2022 at 10:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--
CREATE DATABASE IF NOT EXISTS `pms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pms`;

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

DROP TABLE IF EXISTS `Admin`;
CREATE TABLE IF NOT EXISTS `Admin` (
  `adminId` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `Admin`
--

TRUNCATE TABLE `Admin`;
--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`adminId`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

DROP TABLE IF EXISTS `borrows`;
CREATE TABLE IF NOT EXISTS `borrows` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `borrows`
--

TRUNCATE TABLE `borrows`;
--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`id`, `timestamp`, `title`, `username`) VALUES
(1, '2022-09-03 22:28:59', 'Dummy', 'admin'),
(2, '2022-09-03 22:30:28', 'C Programming', 'ojboni'),
(3, '2022-09-03 22:31:00', 'C Programming', 'ojboni'),
(4, '2022-09-03 22:31:00', 'Dummy', 'ojboni'),
(5, '2022-09-03 22:31:00', '21st Centuary IT', 'ojboni'),
(6, '2022-09-03 22:32:35', 'Dummy', 'sensy'),
(7, '2022-09-03 22:32:35', 'Makerere At 100', 'sensy'),
(8, '2022-09-03 22:35:26', 'Business Administration', 'sensy'),
(9, '2022-09-03 22:36:47', 'Business Administration', 'simo'),
(10, '2022-09-03 22:36:47', 'Makerere At 100', 'simo'),
(11, '2022-09-04 12:12:46', 'Business Administration', 'sensy'),
(12, '2022-09-04 12:12:47', 'C Programming', 'sensy'),
(13, '2022-09-04 12:16:41', 'Business Administration', 'sensy'),
(14, '2022-09-04 12:16:41', 'C Programming', 'sensy'),
(15, '2022-09-05 20:30:17', '21st Centuary IT', 'ojboni'),
(16, '2022-09-06 18:33:42', 'C Programming', 'sensy'),
(17, '2022-09-06 18:33:42', '21st Centuary IT', 'sensy'),
(18, '2022-09-06 18:35:58', 'C Programming', 'ojboni'),
(19, '2022-09-06 18:41:45', 'Leadership Skills', 'ojboni');

-- --------------------------------------------------------

--
-- Table structure for table `Publisher`
--

DROP TABLE IF EXISTS `Publisher`;
CREATE TABLE IF NOT EXISTS `Publisher` (
  `pId` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `yop` int(4) NOT NULL,
  PRIMARY KEY (`pId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `Publisher`
--

TRUNCATE TABLE `Publisher`;
--
-- Dumping data for table `Publisher`
--

INSERT INTO `Publisher` (`pId`, `title`, `author`, `yop`) VALUES
('B101', 'Business Administration', 'Prof. Johuan Koloki', 2011),
('C101', 'C Programming', 'Mugejjera Eemma', 2018),
('F101', '21st Centuary IT', 'Flavia Hasujja', 2021),
('L101', 'Leadership Skills', 'Tony Oyan', 2004),
('M101', 'Makerere At 100', 'Nawangwe Barnabus', 2022),
('S101', 'Systems Design', 'Chongomweru Haleem', 2011);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
CREATE TABLE IF NOT EXISTS `User` (
  `userId` int(25) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `sname` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `User`
--

TRUNCATE TABLE `User`;
--
-- Dumping data for table `User`
--

INSERT INTO `User` (`userId`, `fname`, `sname`, `username`, `password`) VALUES
(1, 'Ojok', 'Boniface', 'ojboni', '12345678'),
(2, 'Onen', 'Sam Sensy', 'sensy', '12345678'),
(3, 'Okullu ', 'Simon', 'simo', '12345678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;