-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 26, 2022 at 02:47 PM
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
  `adminId` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`adminId`, `username`, `password`) VALUES
('', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

DROP TABLE IF EXISTS `borrows`;
CREATE TABLE IF NOT EXISTS `borrows` (
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `pId` varchar(25) NOT NULL,
  `userId` varchar(25) NOT NULL,
  PRIMARY KEY (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Publisher`
--

DROP TABLE IF EXISTS `Publisher`;
CREATE TABLE IF NOT EXISTS `Publisher` (
  `pId` varchar(25) NOT NULL,
  `title` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `yop` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Publisher`
--

INSERT INTO `Publisher` (`pId`, `title`, `author`, `yop`) VALUES
('1', 'Season of the Witch', 'Erich Spiers', 1997),
('2', 'Trip, The', 'Grannie Rash', 2000),
('3', 'Man from Monterey, The', 'Brion Skillitt', 1999),
('4', 'Papusza', 'Kimmie Edeson', 2009),
('5', 'Twin Falls Idaho', 'Karlee Leftwich', 2011),
('6', 'Big Snit, The', 'Hogan Stienham', 1995),
('7', 'Dog Days (Hundstage)', 'Kristi Kose', 2010),
('8', 'People vs. Larry Flynt, The', 'Monte Kelston', 1992),
('9', 'Ladies and Gentlemen, the Fabulous Stains (a.k.a. All Washed Up)', 'Minta Lacotte', 2004),
('10', 'Fados', 'Ernst Mc-Kerley', 1991),
('11', 'Friday Night (Vendredi Soir)', 'Ebony Leggen', 1988),
('12', 'Rob Roy', 'Alvy Nisbet', 2012),
('13', 'That\'s What I Am', 'Adolf Dunsmore', 2000),
('14', 'How to Beat the High Cost of Living', 'Jacqueline Layburn', 1992),
('15', 'Killer Elite', 'Amanda Thackwray', 1995),
('16', 'Linsanity', 'Glyn Wiggam', 2002),
('17', 'Wraith, The', 'Pryce Chezier', 2009),
('18', 'Seventh Veil, The', 'Truman Reynish', 2003),
('19', 'Olsen Gang on the Track, The (Olsen-banden på sporet)', 'Sileas Schottli', 2005),
('20', 'The Mad Magician', 'Hugo Louiset', 1992),
('21', 'Lost Boys, The', 'Ina Shenton', 2005),
('22', 'Rollercoaster', 'Adorne Jeanneau', 1993),
('23', 'Silent Night, Deadly Night', 'Mara Deeny', 1996),
('24', 'The Monkey Hustle', 'Hart Lukes', 1998),
('25', 'Flashdance', 'Alberik Nazareth', 2011),
('26', 'King\'s Game (Kongekabale)', 'Quentin Murch', 2006),
('27', 'Happy Here and Now', 'Kristina Clemintoni', 1995),
('28', 'Modern Romance', 'Tyne Plumley', 2010),
('29', 'Ugly American, The', 'Augusta Tidball', 1993),
('30', 'Bananas', 'Francois Doick', 2004),
('31', 'Frozen, The', 'Joelle McPolin', 1995),
('32', 'Adventures of a Dentist', 'Alexandro Beers', 1987),
('33', 'Stars Fell on Henrietta, The', 'Tann Harbottle', 1993),
('34', 'More Than Honey', 'Kathryn Harnor', 1976),
('35', 'At Berkeley', 'Howard Flacknoe', 1994),
('36', 'World, the Flesh and the Devil, The', 'Stephani Flips', 2009),
('37', 'Summer Place, A', 'Coraline Bucklee', 2001),
('38', 'Spring Break', 'Roch Laterza', 1987),
('39', 'Nanny, The', 'Loise Oliffe', 2005),
('40', 'Shadrach', 'Fredrick Francisco', 2008),
('41', 'Paris Blues', 'Selena Kettell', 2003),
('42', 'Violent Cop (Sono otoko, kyôbô ni tsuki)', 'Zarla Eede', 2009),
('43', 'Ask the Dust', 'Garrard Paeckmeyer', 1993),
('44', 'We Are Legion: The Story of the Hacktivists', 'Dorey Stanner', 1984),
('45', 'Shocker', 'Susette Gogin', 1999),
('46', 'Day of the Wacko (Dzien swira)', 'Allard Gatward', 2001),
('47', 'Mission: Impossible III', 'Todd Derycot', 1990),
('48', 'Galaxina', 'Antonina Humburton', 1993),
('49', 'Silencers, The', 'Genevieve Brum', 2008),
('50', 'Superman/Shazam!: The Return of Black Adam (DC Showcase Original Shorts Collection)', 'Emile Kemmons', 2003),
('51', 'Wings (Krylya)', 'Howie Beningfield', 2003),
('52', 'Male and Female', 'Bekki Doding', 1986),
('53', 'Mr Reliable', 'Bartolomeo Savoury', 2002),
('54', 'Baby, the Rain Must Fall', 'Orelie Bolletti', 2003),
('55', 'Zelig', 'Myriam Cornilli', 2005),
('56', 'Fan, The', 'Lenore Truett', 2010),
('57', 'Liberal Arts', 'Niccolo Sich', 2012),
('58', 'Cat on a Hot Tin Roof', 'Lesly Antliff', 2011),
('59', 'Dead Pool, The', 'Cobbie Pepis', 2005),
('60', 'Closer to the Moon', 'Aurore Sandy', 1999),
('61', 'Heavenly Body, The', 'Tymon McCallister', 2009),
('62', 'Never Weaken', 'Almeria Lifton', 2005),
('63', 'Scream 4', 'Klarrisa Pachta', 2002),
('64', 'The Face of Marble', 'Sileas Whapples', 1995),
('65', 'Tarzan and the Lost City', 'Annadiane Haig', 2003),
('66', 'Daar', 'Anson Sinclar', 2000),
('67', 'The Hire: Chosen', 'Darcy Feenan', 1984),
('68', 'Big Empty, The', 'Nellie Plaschke', 1998),
('69', 'Wild Heritage', 'Burk Tommasuzzi', 2008),
('70', 'Passchendaele', 'Ashlee Broyd', 1995),
('71', 'Eyes of an Angel', 'Inger Seely', 2009),
('72', 'Finding North', 'Abigail Walthew', 2006),
('73', '2009: Lost Memories', 'Sileas Faithorn', 2000),
('74', 'Wild Is the Wind', 'Ileane Phebee', 2000),
('75', 'Ranma ½: Nihao My Concubine (Ranma ½: Kessen Tôgenkyô! Hanayome o torimodose!!)', 'Sherri Mertin', 2008),
('76', 'The Loft', 'Lorri Campa', 2002),
('77', 'Chosin ', 'Ringo Routh', 2004),
('78', 'Walking and Talking', 'Hayley Cayser', 1996),
('79', 'Pinchcliffe Grand Prix (Flåklypa Grand Prix)', 'Pollyanna Hare', 1993),
('80', 'Condemned, The', 'Caterina Hubbins', 2006),
('81', 'Battle for the Planet of the Apes', 'Caressa Bree', 1966),
('82', 'Blue Kite, The (Lan feng zheng)', 'Ichabod Hotchkin', 2002),
('83', 'Trip, The', 'Josepha Mariault', 1985),
('84', 'Happy, Texas', 'Darlleen Stanier', 2001),
('85', 'Cinderella II: Dreams Come True', 'Kettie Lethieulier', 2008),
('86', 'Jesus Is a Palestinian (Jezus is een Palestijn)', 'Eolanda Vallentin', 2010),
('87', 'Oliver Twist', 'Julita Cheves', 2006),
('88', 'Peas at 5:30 (Erbsen auf halb 6)', 'Cordi Stinton', 2008),
('89', 'Cellar, The (Huset vid vägens ände)', 'Sisely Chad', 2009),
('90', 'Corvette Summer', 'Ermin Pleasants', 2008),
('91', 'Waiting Women (Kvinnors väntan)', 'Dael Wayte', 1995),
('92', 'Funny Man, A (Dirch)', 'Audre Breed', 1994),
('93', 'Julia', 'Kerry Lamdin', 2009),
('94', 'Marilyn Hotchkiss\' Ballroom Dancing & Charm School', 'Morley MacNeilley', 2000),
('95', 'Children of the Secret State', 'Reba Ondrasek', 2012),
('96', 'Wetlands (Feuchtgebiete)', 'Arlyn Derobert', 2000),
('97', 'Tinker, Tailor, Soldier, Spy', 'Decca Firminger', 2010),
('98', '7 Plus Seven', 'Trixie Remmers', 2011),
('99', 'Jaws 2', 'Dorthy Rossbrooke', 1997),
('100', 'Good bye, Lenin!', 'Abran Suggitt', 2008);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
CREATE TABLE IF NOT EXISTS `User` (
  `userId` varchar(25) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`userId`, `fname`, `sname`, `username`, `password`) VALUES
('1', 'Aviva', 'Dregan', 'adregan0', 'h5MtquEc9j'),
('10', 'Charlie', 'Coppens', 'ccoppens9', 'qMXeh3r9Jp28'),
('11', 'Charissa', 'Berney', 'cberneya', 'wOhILIP'),
('12', 'Linda', 'Canlin', 'lcanlinb', 'qobB719Zmgam'),
('13', 'Gaile', 'Pleavin', 'gpleavinc', 'vC30Q2pGZ'),
('14', 'Bethany', 'Maultby', 'bmaultbyd', 'B0FhCCr1O'),
('15', 'Yuma', 'Cottu', 'ycottue', 'szf9hsZZ'),
('16', 'Ruthie', 'Kleeman', 'rkleemanf', 'WNa56qmI'),
('17', 'Wood', 'Faraday', 'wfaradayg', 'ie83jqJRLCw'),
('18', 'Emmi', 'Sabatini', 'esabatinih', '8UZDTPB1zQ1P'),
('19', 'Hurlee', 'Goundsy', 'hgoundsyi', '3igHt7'),
('2', 'Justina', 'Sewall', 'jsewall1', 'wCUz25dV1'),
('20', 'Adolph', 'Minchell', 'aminchellj', '6GWPA25l'),
('21', 'Onen', 'sensy', 'sensy', '12345678'),
('3', 'Pen', 'Robbs', 'probbs2', 'TDQAw8Iwu'),
('4', 'Glenn', 'Onn', 'gonn3', 'Qyn3auotWKKU'),
('5', 'Alissa', 'McGuggy', 'amcguggy4', 'sBvyuvYvTv6'),
('6', 'Cos', 'Drinnan', 'cdrinnan5', '95a1nCS'),
('7', 'Adrianne', 'Dyter', 'adyter6', 'JWkLaUYy'),
('8', 'Eugene', 'Darey', 'edarey7', 'sIVyYouHB3w'),
('9', 'Wilone', 'Siss', 'wsiss8', 'lUL4AbmBF');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
