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
-- Table structure for table `flowercompanybuyproductlist`
--

DROP TABLE IF EXISTS `flowercompanybuyproductlist`;
CREATE TABLE IF NOT EXISTS `flowercompanybuyproductlist` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `BuyerId` int(10) NOT NULL,
  `BuyProduct` text NOT NULL,
  `Quantity` int(10) NOT NULL,
  `BuyDate` date NOT NULL,
  `UniqueProductID` int(10) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `UniqueProductID` (`UniqueProductID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flowercompanybuyproductlist`
--

INSERT INTO `flowercompanybuyproductlist` (`Id`, `BuyerId`, `BuyProduct`, `Quantity`, `BuyDate`, `UniqueProductID`) VALUES
(23, 8, 'Flowers Bouquet of 15 Pink Roses', 1, '2019-02-24', 263),
(24, 8, 'Flowers Bouquet of 15 Pink Roses', 1, '2019-02-24', 862);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
