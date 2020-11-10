-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 06:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `path` text NOT NULL,
  `uploaded_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `description`, `path`, `uploaded_date`) VALUES
(1, 'Abandoned Building', '', 'images/abandoned-building.jpg', '2019-07-16 20:09:26'),
(2, 'Beach', 'Hot summer day at the beach.', 'images/beach.jpg', '2019-07-16 20:10:05'),
(3, 'City', 'A view down at the city.', 'images/city.jpg', '2019-07-16 20:10:45'),
(4, 'Mountain', '', 'images/mountain.jpg', '2019-07-16 20:11:27'),
(5, 'Road', 'Going down the only road I\'ve even known.', 'images/road.jpg', '2019-07-16 20:12:00'),
(6, 'Stars', 'A wonderful view of the night sky.', 'images/stars.jpg', '2019-07-16 20:12:39'),
(61, 'Fast and Furious', 'Hello', 'images/2007-Ferrari-Dino-Concept-Design-by-Ugur-Sahin-Red-Side-Angle-1920x1440.jpg', '2020-11-10 01:05:53'),
(62, 'Beach Cleanup Program', 'sfs', 'images/Vector-Wallpaper-1.jpg', '2020-11-10 09:09:43'),
(63, 'New', 'sfs', 'images/hd-widescreen-wallpaper-3.jpg', '2020-11-10 10:08:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
