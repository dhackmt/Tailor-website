-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2024 at 09:26 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `add`
--

DROP TABLE IF EXISTS `add`;
CREATE TABLE IF NOT EXISTS `add` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `location` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `f1` varchar(20) NOT NULL,
  `f2` varchar(20) NOT NULL,
  `f3` varchar(20) NOT NULL,
  `f4` varchar(20) NOT NULL,
  `f5` varchar(20) NOT NULL,
  `f6` varchar(20) NOT NULL,
  `coupon` int NOT NULL,
  `discount` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `add`
--

INSERT INTO `add` (`id`, `name`, `location`, `description`, `contact`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `coupon`, `discount`, `image`, `image1`, `image2`, `image3`) VALUES
(1, 'Chandan', 'Pimpri, sai chowk', 'Handwork', '906789876', 'salwar', 'blouse', 'anarkali', 'lehnga', 'suits', 'patiala', 0, '20', 'cloth1.jpg', 'cloth2.jpg', 'cloth3.jpg', 'cloth4.jpg'),
(2, 'Gayatri', 'Kalewadi sector 2', 'Embroidry', '98812222344', 'Salwar suit', 'Patiala suit', 'One peice', 'Uniforms', 'Alterations', 'Anarkali', 128, '60', 'cloth3.jpg', 'blouse1.jpg', 'evening.jpg', 'saree.jpg'),
(3, 'Gayatri', 'Sai chowk', 'Gents Tailor', '98812222344', 'Salwar suit', 'Patiala suit', 'One peice', 'Uniforms', 'alterations', 'Evening Gowns', 145, '40', 'tailor3.jpg', 'cloth5.jpg', 'cloth13.jpg', 'm3.jpg'),
(4, 'Fine Stitch', 'Kalewadi', 'alterations', '98812222344', 'salwar suit', 'Patiala suit', 'One peice', 'Uniforms', 'Alterations', 'Evening Gowns', 451, '30', 'tailor4.jpg', 'cloth7.jpg', 'blazer1.jpeg', 'cloth3.jpg'),
(5, 'Fashion cut', 'Panchgani', 'All types of Blouse', '98812222344', 'Salwar suit', 'Patiala suit', 'One peice', 'Uniforms', 'Alterations', 'Anarkali', 928, '80', 'tailor5.jpg', 'cloth7.jpg', 'cloth5.jpg', 'cloth8.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'drishti', 'Drishti.123'),
(2, 'Admin', 'Admin.123');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `code` int NOT NULL,
  `cid` int NOT NULL,
  `sname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `username`, `code`, `cid`, `sname`) VALUES
(1, 'Sanjana.123', 436, 1, 'chandan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Sanjana.123', 'drishti.123'),
(2, 'Admin.12345', 'Admin.123');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
CREATE TABLE IF NOT EXISTS `shop` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  `discount` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `image`, `name`, `contact`, `description`, `discount`) VALUES
(1, 'cloth1.jpg', 'Chandan', '906789876', 'Handwork', '20'),
(3, 'cloth2.jpg', 'Gayatri', '98812222344', 'Embroidry', '60'),
(4, 'tailor2.jpg', 'Fine stitch', '98812222344', 'Embroidry', '60'),
(5, 'cloth6.jpg', 'Fashion cut', '98812222344', 'Embroidry', '60'),
(15, 'tailor5.jpg', 'Fashion cut', '98812222344', 'All types of Blouse', '80');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
