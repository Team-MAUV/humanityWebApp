-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 05:35 AM
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
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `session_id` int(11) NOT NULL,
  `buy_id` int(11) NOT NULL,
  `bid_amount` float NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bid_session`
--

CREATE TABLE `bid_session` (
  `session_id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `date` date NOT NULL,
  `product_id` int(11) NOT NULL,
  `won_buy_id` int(11) NOT NULL,
  `highest_bid_amount` float NOT NULL,
  `collected/not` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buy_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nic` int(25) NOT NULL,
  `address` varchar(200) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buy_id`, `name`, `nic`, `address`, `username`, `password`, `email`) VALUES
(1, 'A.B.C.Perera', 971122548, '12/8, Main rd, Collombo 05. ', 'user', '123456', 'abc@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_contact`
--

CREATE TABLE `buyer_contact` (
  `buy_id` int(11) NOT NULL,
  `contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `com_handle_buyer`
--

CREATE TABLE `com_handle_buyer` (
  `com_nic` int(11) NOT NULL,
  `buy_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `don_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `don_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nic` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `contribution` float NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor_contact`
--

CREATE TABLE `donor_contact` (
  `don_id` int(11) NOT NULL,
  `contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `staff_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `starting_bid` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`session_id`,`buy_id`,`bid_amount`);

--
-- Indexes for table `bid_session`
--
ALTER TABLE `bid_session`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `won_buy_id` (`won_buy_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buy_id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `buyer_contact`
--
ALTER TABLE `buyer_contact`
  ADD PRIMARY KEY (`buy_id`,`contact_no`);

--
-- Indexes for table `commissioner`
--
ALTER TABLE `commissioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `com_handle_buyer`
--
ALTER TABLE `com_handle_buyer`
  ADD PRIMARY KEY (`com_nic`,`buy_id`),
  ADD KEY `buy_id` (`buy_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `don_id` (`don_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`don_id`);

--
-- Indexes for table `donor_contact`
--
ALTER TABLE `donor_contact`
  ADD PRIMARY KEY (`don_id`,`contact_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commissioner`
--
ALTER TABLE `commissioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `don_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid_session`
--
ALTER TABLE `bid_session`
  ADD CONSTRAINT `bid_session_ibfk_1` FOREIGN KEY (`won_buy_id`) REFERENCES `buyer` (`buy_id`),
  ADD CONSTRAINT `bid_session_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `buyer_contact`
--
ALTER TABLE `buyer_contact`
  ADD CONSTRAINT `buyer_contact_ibfk_1` FOREIGN KEY (`buy_id`) REFERENCES `buyer` (`buy_id`);

--
-- Constraints for table `com_handle_buyer`
--
ALTER TABLE `com_handle_buyer`
  ADD CONSTRAINT `com_handle_buyer_ibfk_1` FOREIGN KEY (`buy_id`) REFERENCES `buyer` (`buy_id`),
  ADD CONSTRAINT `com_handle_buyer_ibfk_2` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`id`);

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`don_id`) REFERENCES `donor` (`don_id`);

--
-- Constraints for table `donor_contact`
--
ALTER TABLE `donor_contact`
  ADD CONSTRAINT `donor_contact_ibfk_1` FOREIGN KEY (`don_id`) REFERENCES `donor` (`don_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
