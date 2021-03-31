-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 11:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humanity`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark_attendance`
--

CREATE TABLE `mark_attendance` (
  `incharge_id` varchar(100) NOT NULL,
  `activity_id` varchar(100) NOT NULL,
  `vol_id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `confirm` tinyint(4) NOT NULL DEFAULT 0,
  `attendance` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark_attendance`
--

INSERT INTO `mark_attendance` (`incharge_id`, `activity_id`, `vol_id`, `date`, `confirm`, `attendance`) VALUES
('', 'VACTHB007', 'VOLHB001', '0000-00-00', 1, 0),
('', 'VACTHB008', 'VOLHB001', '0000-00-00', 1, 0),
('', 'VACTHB007', 'VOLHB002', '0000-00-00', 1, 0),
('', 'VACTHB009', 'VOLHB002', '0000-00-00', 1, 0),
('', 'VACTHB009', 'VOLHB002', '0000-00-00', 1, 0),
('', 'VACTHB008', 'VOLHB004', '0000-00-00', 1, 0),
('', 'VACTHB009', 'VOLHB004', '0000-00-00', 1, 0),
('', 'VACTHB002', 'VOLHB001', '0000-00-00', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
