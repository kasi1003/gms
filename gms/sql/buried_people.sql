-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 04:30 PM
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
-- Table structure for table `buried_people`
--

CREATE TABLE `buried_people` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `date_of_death` date DEFAULT NULL,
  `death_number` varchar(50) DEFAULT NULL,
  `burial_location_code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buried_people`
--

INSERT INTO `buried_people` (`id`, `full_name`, `date_of_death`, `death_number`, `burial_location_code`) VALUES
(1, 'Tobby Imasiku', '0000-00-00', 'NAM-2023-1222', 'OPs12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buried_people`
--
ALTER TABLE `buried_people`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buried_people`
--
ALTER TABLE `buried_people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
