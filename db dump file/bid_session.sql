-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 05:45 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid_session`
--
ALTER TABLE `bid_session`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `won_buy_id` (`won_buy_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid_session`
--
ALTER TABLE `bid_session`
  ADD CONSTRAINT `bid_session_ibfk_1` FOREIGN KEY (`won_buy_id`) REFERENCES `buyer` (`buy_id`),
  ADD CONSTRAINT `bid_session_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
