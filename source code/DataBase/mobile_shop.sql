-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2016 at 02:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobile_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile_details`
--

CREATE TABLE IF NOT EXISTS `mobile_details` (
  `item_no` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `availability` varchar(10) DEFAULT NULL,
  `photo_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`item_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_details`
--

INSERT INTO `mobile_details` (`item_no`, `name`, `brand`, `price`, `description`, `availability`, `photo_id`) VALUES
(1, 'Sony Xperia J', 'Sony', 10000, 'Mobile with primary and front cameras.', 'Yes', '1'),
(2, 'Samsung Galaxy J5', 'Samsung', 20000, 'Versions: J500FN (Europe); J500F (HK, India, South Africa, Thailand); J500G (Malaysia, Indonesia); J500Y (New Zealand); J500M (LATAM)\r\n Also known as Samsung Galaxy J5 Duos with dual-SIM card slots', 'Yes', '2'),
(3, 'Samsung Galaxy J7', 'Samsung', 25000, 'Versions: J710F, J710FN (EMEA); J710M (LATAM); J710H (South Africa, Pakistan, Vietnam)\r\n Also known as Samsung Galaxy J7 (2016) Duos with dual-SIM card slots\r\n Asia/China model with 1080p display and 3 GB RAM', 'Yes', '3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
