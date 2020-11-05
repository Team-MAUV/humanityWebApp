-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 03:06 PM
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
-- Database: `humanity`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buy_id` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buy_id`, `name`, `nic`, `address`, `email`, `contact`, `username`, `password`, `gender`) VALUES
('BUY/HB/1', 'Anjana', '896450490V', 'Colombo', '2018cs184@stu.ucsc.cmb.ac.lk', '0112555123', 'admin', 'root', 'male ');

-- --------------------------------------------------------

--
-- Table structure for table `commissioner`
--

CREATE TABLE `commissioner` (
  `id` int(11) NOT NULL,
  `com_nic` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commissioner`
--

INSERT INTO `commissioner` (`id`, `com_nic`, `name`, `address`, `gender`, `email`, `username`, `password`) VALUES
(1, '199856262545', 'Commissioner 1', 'Test Rd, Test', 'male', 'assf@gmail.com', 'user', '098f6bcd4621d373cade4e832627b4f6'),
(3, '199856256825', 'Test 1', 'sfsf', 'male', 'assf@gmail.com', 'user1', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `don_id` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `contribution` float DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`don_id`, `name`, `nic`, `contact`, `gender`, `username`, `password`, `contribution`, `email`, `address`) VALUES
('DON/HB/1', 'Manuli Wanniarachchi', '986250470V', '0112555288', 'female ', 'user', 'manuli', 10, 'manuli1998@gmail.com', 'N/4, Anderson Flats, Colombo 05'),
('DON/HB/2', 'Dilanka Perera', '983216312318V', '0112888456', 'female ', 'dilaaa', 'dila', NULL, 'dila@gmail.com', 'No.23/6 Koranelis Mawatha, Nugegoda');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `vol_id` varchar(15) NOT NULL,
  `name` varchar(60) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `level` text DEFAULT NULL,
  `vol_points` int(11) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `prev_vol_exp` varchar(200) DEFAULT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`vol_id`, `name`, `nic`, `address`, `gender`, `dob`, `email`, `contact`, `level`, `vol_points`, `username`, `password`, `prev_vol_exp`, `join_date`, `status`) VALUES
('VOL/HB/1', '	 Mr. W. R. Peiris,', '67122362V', ' 10, Dharmapala Mawatha,Mallakam East, COLOMBO 00700.', 'male', '1967-04-30', 'randika@gmail.com', '', 'permanent', 1023, 'randika@vol', 'randika@1234', NULL, '2020-11-04 17:02:52', NULL),
('VOL/HB/10', 'Buddhi', '42335347457V', 'Malabe', 'male ', '2020-11-19', 'buddhi@gmail.com', '31242354657', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-04 07:23:06', NULL),
('VOL/HB/11', 'Chathura', '7458131241V', 'Rathnapura', 'male ', '2020-11-15', 'chathu@gmail.com', '2124352463', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-04 07:23:06', NULL),
('VOL/HB/12', 'Nipuni', '23165317V', 'Kalutara', 'female ', '2020-11-02', 'nipuni@gmail.com', '263512751723', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-04 07:24:00', NULL),
('VOL/HB/13', 'Iranga  Mudalige', '257827427V', 'Belihuloya', 'male ', '2020-11-19', 'ira@gmail.com', '26453843', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-04 07:27:19', NULL),
('VOL/HB/14', 'Hansani Ramasha', '214649183475v', 'Narahenpita', 'female ', '2020-11-16', 'hansani@gmail.com', '214135131', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-04 16:59:59', NULL),
('VOL/HB/15', 'Saman', '53467423847V', 'Galle', 'male ', '1987-02-18', 'ann@gmail.com', '0112343212', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-04 17:02:04', NULL),
('VOL/HB/2', 'Miss Rene de Silva,', '87122362V', '46, Wellawatta,Galle Road,	COLOMBO 00600', 'female', '1987-10-06', 'rene@gmail.com', '', 'temporary', 123, 'rene@vol', 'rene@1234', 'University Volunteering', '2020-11-04 17:03:17', NULL),
('VOL/HB/3', 'Manuli Wanniarachchi', '986250470V', 'N/4, Anderson Flats, Colombo 05', 'female ', '1998-08-12', 'manuli1998@gmail.com', '', NULL, NULL, NULL, NULL, 'Nothing', '2020-11-04 17:03:44', NULL),
('VOL/HB/4', 'Dilanka Perera', '896450470V', 'No.23/6 Koranelis Mawatha, Nugegoda', 'female ', '2020-10-14', 'dila@gmail.com', '', NULL, NULL, NULL, NULL, 'Nothing', '2020-11-04 17:04:04', NULL),
('VOL/HB/5', 'Ayesh', '896490490V', 'wfceafwef', 'male ', '2020-10-28', 'admin@g', '', NULL, NULL, NULL, NULL, 'Nothing', '2020-11-04 17:04:17', NULL),
('VOL/HB/6', 'Anjana', '123456788V', 'N/4, Anderson Flats', 'male ', '2020-11-17', '2018cs184@stu.ucsc.cmb.ac.lk', '', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-04 17:04:31', NULL),
('VOL/HB/7', 'Vigani ', '1298473872V', 'Colombo', 'female ', '2020-11-09', 'cvvevefavae@gmail.com', '', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-04 17:04:45', NULL),
('VOL/HB/8', 'A', '123', 'dcc', 'male ', '2020-11-18', 'dcdec', '', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-04 17:05:01', NULL),
('VOL/HB/9', 'Uthpala', '986289470V', 'Gampaha', 'male ', '2020-11-17', 'uthpala@gmail.com', '', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-04 17:05:18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buy_id`);

--
-- Indexes for table `commissioner`
--
ALTER TABLE `commissioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`don_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`vol_id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commissioner`
--
ALTER TABLE `commissioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
