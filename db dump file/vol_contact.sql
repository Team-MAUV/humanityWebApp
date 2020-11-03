-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 02:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tzuchi`
--

-- --------------------------------------------------------

--
-- Table structure for table `vol_contact`
--

CREATE TABLE `vol_contact` (
  `vol_id` char(5) NOT NULL,
  `contact` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vol_contact`
--

INSERT INTO `vol_contact` (`vol_id`, `contact`) VALUES
('vol4', '0112555123'),
('vol5', '0112555124'),
('vol3', '0112555288'),
('vol1', '0712894561'),
('vol2', '0714894561');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vol_contact`
--
ALTER TABLE `vol_contact`
  ADD PRIMARY KEY (`contact`,`vol_id`),
  ADD KEY `vol_id` (`vol_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vol_contact`
--
ALTER TABLE `vol_contact`
  ADD CONSTRAINT `vol_contact_ibfk_1` FOREIGN KEY (`vol_id`) REFERENCES `volunteer` (`vol_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
