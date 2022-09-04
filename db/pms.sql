-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2022 at 11:21 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `adminId` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`adminId`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `id` int(25) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(10, '2022-09-03 22:36:47', 'Makerere At 100', 'simo');

-- --------------------------------------------------------

--
-- Table structure for table `Publisher`
--

CREATE TABLE `Publisher` (
  `pId` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `yop` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `User` (
  `userId` int(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `sname` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`userId`, `fname`, `sname`, `username`, `password`) VALUES
(1, 'Ojok', 'Boniface', 'ojboni', '12345678'),
(2, 'Onen', 'Sam Sensy', 'sensy', '12345678'),
(3, 'Okullu ', 'Simon', 'simo', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Publisher`
--
ALTER TABLE `Publisher`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `adminId` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `borrows`
--
ALTER TABLE `borrows`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `userId` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;