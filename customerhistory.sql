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
-- Table structure for table `customerhistory`
--

CREATE TABLE `customerhistory` (
  `Sender` varchar(20) NOT NULL,
  `Reciever` varchar(20) NOT NULL,
  `Amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerhistory`
--

INSERT INTO `customerhistory` (`Sender`, `Reciever`, `Amount`) VALUES
('Sarang', 'Sarang', 2000),
('Ayush', 'Sarang', 5000),
('Sarang', 'Ayush', 2000),
('Sarang', 'Ayush', 110000),
('Ayush', 'Sarang', 2000),
('Ayush', 'Sarang', 12222),
('Ayush', 'Sarang', 12222),
('SARANG5511', 'Ayush', 5000),
('Sarang', 'admin', 5000),
('Sarang', 'Sarang', 2000),
('Sarang', 'nandini', 5000),
('sarang5511', 'nandini', 2000),
('nandini', 'admin', 5000),
('Siddho', '19BDS0127', 5000),
('Sarang', 'sarang5511', 5000),
('Sarang', 'sarang5511', 5000),
('Sarang', 'sarang5511', 12222),
('Sarang', 'sarang5511', 12222),
('sarang5511', '19BDS0127', 5000),
('19BDS0127', 'sarang5511', 5000),
('19BDS0127', 'sarang5511', 5000),
('Sarang', 'nandini', 50000),
('Sarang', 'Ayush K', 5000),
('Sarang', 'sarang5511', 120),
('Sarang', 'sarang5511', 120),
('Sarang', 'sarang5511', 120),
('Soniaa', 'Sarang', 50000),
('Soniaa', 'Sarang', 50000),
('admin', 'Sarang', 10),
('admin', 'Sarang', 10),
('Sarang', 'Sarang', 120),
('Sarang', 'Sarang', 120),
('Sarang', 'admin', 120),
('sarang5511', 'sarang5511', 5000),
('sarang5511', 'sarang5511', 5000),
('sarang5511', 'sarang5511', 5000),
('Sarang', 'admin', 5000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
