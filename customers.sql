-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 08:52 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customerinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Balance` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Name`, `Email`, `Balance`) VALUES
('Sarang', 'bangsarang7@gmail.com', 64668),
('admin', 'admin@gmial.com', 215110),
('nandini', 'bangnandini@gmail.com', 53000),
('sarang5511', 'bangsarang7@gmail.com', 105120),
('19BDS0127', 'bangsarang7@gmail.com', 105000),
('Siddho', 'sid@gmail.com', 195000),
('sarang5511', 'sid@gmail.com', 105120),
('Sarang', 'admin@gmial.com', 64668),
('Ayush K', 'ayush1@gmail.com', 25000),
('SARANG5511', 'bangsarang7@gmail.com', 105120),
('Soniaa', 'soniagupta@gmail.com', 50000),
('19BDS0127', 'bangsarang7@gmail.com', 100000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
