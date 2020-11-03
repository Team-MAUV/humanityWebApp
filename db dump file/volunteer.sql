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
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `vol_id` char(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` text DEFAULT NULL,
  `vol_points` int(11) DEFAULT NULL,
  `joined_year` date DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `prev_vol_exp` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`vol_id`, `name`, `nic`, `address`, `gender`, `dob`, `email`, `level`, `vol_points`, `joined_year`, `username`, `password`, `prev_vol_exp`) VALUES
('vol1', '	 Mr. W. R. Peiris,', '67122362V', ' 10, Dharmapala Mawatha,Mallakam East, COLOMBO 00700.', 'male', '1967-04-30', 'randika@gmail.com', 'permanent', 1023, '2016-10-13', 'randika@vol', 'randika@1234', NULL),
('vol2', 'Miss Rene de Silva,', '87122362V', '46, Wellawatta,Galle Road,	COLOMBO 00600', 'female', '1987-10-06', 'rene@gmail.com', 'temporary', 123, '2019-10-11', 'rene@vol', 'rene@1234', 'University Volunteering'),
('vol3', 'Manuli Wanniarachchi', '986250470V', 'N/4, Anderson Flats, Colombo 05', 'female ', '1998-08-12', 'manuli1998@gmail.com', NULL, NULL, NULL, NULL, NULL, 'Nothing'),
('vol4', 'Dilanka Perera', '896450470V', 'No.23/6 Koranelis Mawatha, Nugegoda', 'female ', '2020-10-14', 'dila@gmail.com', NULL, NULL, NULL, NULL, NULL, 'Nothing'),
('vol5', 'Ayesh', '896490490V', 'wfceafwef', 'male ', '2020-10-28', 'admin@g', NULL, NULL, NULL, NULL, NULL, 'Nothing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`vol_id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
