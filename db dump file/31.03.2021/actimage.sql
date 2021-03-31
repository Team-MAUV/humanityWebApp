-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 10:50 AM
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
-- Table structure for table `actimage`
--

CREATE TABLE `actimage` (
  `id` int(11) NOT NULL,
  `image_id` varchar(12) NOT NULL,
  `act_id` varchar(18) NOT NULL,
  `incharge_id` varchar(18) NOT NULL,
  `date` date NOT NULL,
  `image_path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actimage`
--

INSERT INTO `actimage` (`id`, `image_id`, `act_id`, `incharge_id`, `date`, `image_path`) VALUES
(19, 'ACTIMGB019', 'VACTHB001', 'TMPSTFHB003', '2021-03-30', 'act_img/VACTHB001/don.jpg'),
(20, 'ACTIMGB020', 'VACTHB003', 'TMPSTFHB003', '2021-03-30', 'act_img/VACTHB003/ddd.jpg'),
(21, 'ACTIMGB021', 'VACTHB003', 'TMPSTFHB003', '2021-03-30', 'act_img/VACTHB003/c.jpg'),
(22, 'ACTIMGB022', 'VACTHB002', 'TMPSTFHB003', '2021-03-30', 'act_img/VACTHB002/c.jpg'),
(23, 'ACTIMGB023', 'VACTHB002', 'TMPSTFHB003', '2021-03-30', 'act_img/VACTHB002/logo.jpg'),
(25, 'ACTIMGB025', 'VACTHB002', 'TMPSTFHB003', '2021-03-30', 'act_img/VACTHB002/download.jfif'),
(26, 'ACTIMGB026', 'VACTHB002', 'TMPSTFHB003', '2021-03-30', 'act_img/VACTHB002/don.jpg'),
(27, 'ACTIMGB027', 'VACTHB002', 'TMPSTFHB003', '2021-03-30', 'act_img/VACTHB002/1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actimage`
--
ALTER TABLE `actimage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actimage`
--
ALTER TABLE `actimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
