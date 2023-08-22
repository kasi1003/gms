-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 04:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `oponganda`
--

CREATE TABLE `oponganda` (
  `section_code` varchar(6) NOT NULL,
  `available_graves` int(11) DEFAULT NULL,
  `total_graves` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oponganda`
--

INSERT INTO `oponganda` (`section_code`, `available_graves`, `total_graves`) VALUES
('s1', 99, 100),
('s10', 79, 100),
('s11', 34, 100),
('s12', 34, 100),
('s13', 14, 100),
('s14', 51, 100),
('s15', 99, 100),
('s16', 6, 100),
('s17', 85, 100),
('s18', 65, 100),
('s19', 19, 100),
('s2', 70, 100),
('s20', 44, 100),
('s21', 95, 100),
('s22', 70, 100),
('s23', 90, 100),
('s24', 34, 100),
('s25', 80, 100),
('s26', 32, 100),
('s3', 67, 100),
('s4', 2, 100),
('s5', 35, 100),
('s6', 34, 100),
('s7', 55, 100),
('s8', 64, 100),
('s9', 25, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oponganda`
--
ALTER TABLE `oponganda`
  ADD PRIMARY KEY (`section_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
