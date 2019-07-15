-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 25, 2019 at 05:49 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `flowercompany`
--

DROP TABLE IF EXISTS `flowercompany`;
CREATE TABLE IF NOT EXISTS `flowercompany` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `FullName` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Passkey` varchar(20) NOT NULL,
  `PhoneNumber` bigint(11) NOT NULL,
  `Country` text NOT NULL,
  `Gender` text NOT NULL,
  `Address` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flowercompany`
--

INSERT INTO `flowercompany` (`Id`, `FullName`, `Email`, `Passkey`, `PhoneNumber`, `Country`, `Gender`, `Address`) VALUES
(8, 'sail kargutkar', 's@s.c', '1234', 8451070960, 'India', 'Male', 'Lalbaug');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
