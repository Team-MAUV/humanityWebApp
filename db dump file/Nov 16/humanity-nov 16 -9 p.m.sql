-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 04:41 PM
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
-- Table structure for table `beneficiery_case`
--

CREATE TABLE `beneficiery_case` (
  `id` int(11) NOT NULL,
  `beneficiery_id` varchar(50) DEFAULT NULL,
  `vol_id` int(11) DEFAULT NULL,
  `com_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `closed_date` date DEFAULT NULL,
  `case_path` varchar(200) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiery_case`
--

INSERT INTO `beneficiery_case` (`id`, `beneficiery_id`, `vol_id`, `com_id`, `start_date`, `closed_date`, `case_path`, `status`) VALUES
(1, 'BCASE/HB/1', 1, NULL, NULL, NULL, 'beneficiery_case/Enola Holmes (2020) [720p] [WEBRip] [YTS.MX].torrent', NULL),
(2, 'BCASE/HB/2', 1, NULL, NULL, NULL, 'beneficiery_case/Get Out (2017) [720p] [BluRay] [YTS.MX].torrent', NULL),
(3, 'BCASE/HB/3', 1, NULL, NULL, NULL, 'beneficiery_case/28 Weeks Later (2007) [720p] [BluRay] [YTS.MX].torrent', NULL),
(4, NULL, 1, NULL, NULL, NULL, 'beneficiery_case/Troy (2004) [720p] [BluRay] [YTS.MX].torrent', NULL),
(5, NULL, 2, NULL, NULL, NULL, 'beneficiery_case/humanity- nov 13.sql', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `session_id` int(11) NOT NULL,
  `buy_id` int(11) NOT NULL,
  `bid_amount` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid_session`
--

CREATE TABLE `bid_session` (
  `id` int(11) NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `date` date NOT NULL,
  `product_id` int(11) NOT NULL,
  `won_buy_id` int(11) NOT NULL,
  `highest_bid_amount` int(11) NOT NULL,
  `collected_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `buy_id` varchar(15) DEFAULT NULL,
  `userlogin_id` int(11) DEFAULT NULL,
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

INSERT INTO `buyer` (`id`, `buy_id`, `userlogin_id`, `name`, `nic`, `address`, `email`, `contact`, `username`, `password`, `gender`) VALUES
(1, 'BUY/HB/1', 4, 'Mrs. S.N. Nimali', '745813121V', 'Colombo', 'nimali@gmail.com', '0714894561', 'buy1', '202cb962ac59075b964b07152d234b70', 'female ');

-- --------------------------------------------------------

--
-- Table structure for table `commissioner`
--

CREATE TABLE `commissioner` (
  `id` int(11) NOT NULL,
  `com_id` varchar(50) DEFAULT NULL,
  `com_nic` varchar(50) DEFAULT NULL,
  `userlogin_id` int(11) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commissioner`
--

INSERT INTO `commissioner` (`id`, `com_id`, `com_nic`, `userlogin_id`, `name`, `address`, `email`, `contact`, `gender`, `username`, `password`) VALUES
(1, 'COM/HB/1', '687653576V', 2, 'Mr. P.J. Fernando', 'Hambantota', 'fernando@gmail.com', '0712894561', 'male ', 'com1', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `com_access_media`
--

CREATE TABLE `com_access_media` (
  `com_id` int(11) NOT NULL,
  `media_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `com_handle_buyer`
--

CREATE TABLE `com_handle_buyer` (
  `com_id` int(11) NOT NULL,
  `buy_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `title`, `created`) VALUES
(1, 'John Doe', 'johndoe@example.com', '2026550143', 'Lawyer', '2019-05-08 17:32:00'),
(2, 'David Deacon', 'daviddeacon@example.com', '2025550121', 'Employee', '2019-05-08 17:28:44'),
(3, 'Sam White', 'samwhite@example.com', '2004550121', 'Employee', '2019-05-08 17:29:27'),
(4, 'Colin Chaplin', 'colinchaplin@example.com', '2022550178', 'Supervisor', '2019-05-08 17:29:27'),
(5, 'Ricky Waltz', 'rickywaltz@example.com', '7862342390', '', '2019-05-09 19:16:00'),
(6, 'Arnold Hall', 'arnoldhall@example.com', '5089573579', 'Manager', '2019-05-09 19:17:00'),
(7, 'Toni Adams', 'alvah1981@example.com', '2603668738', '', '2019-05-09 19:19:00'),
(8, 'Donald Perry', 'donald1983@example.com', '7019007916', 'Employee', '2019-05-09 19:20:00'),
(9, 'Joe McKinney', 'nadia.doole0@example.com', '6153353674', 'Employee', '2019-05-09 19:20:00'),
(10, 'Angela Horst', 'angela1977@example.com', '3094234980', 'Assistant', '2019-05-09 19:21:00'),
(11, 'James Jameson', 'james1965@example.com', '4002349823', 'Assistant', '2019-05-09 19:32:00'),
(12, 'Daniel Deacon', 'danieldeacon@example.com', '5003423549', 'Manager', '2019-05-09 19:33:00'),
(13, 'Anjana Dodampe', 'ahmdodampe@hotmail.com', '+10778892557', 'Code', '2020-11-16 20:52:00'),
(14, 'John Doe', 'johndoe@example.com', '2026550143', 'Lawyer', '2019-05-08 17:32:00'),
(15, 'David Deacon', 'daviddeacon@example.com', '2025550121', 'Employee', '2019-05-08 17:28:44'),
(16, 'Sam White', 'samwhite@example.com', '2004550121', 'Employee', '2019-05-08 17:29:27'),
(17, 'Colin Chaplin', 'colinchaplin@example.com', '2022550178', 'Supervisor', '2019-05-08 17:29:27'),
(18, 'Ricky Waltz', 'rickywaltz@example.com', '7862342390', '', '2019-05-09 19:16:00'),
(19, 'Arnold Hall', 'arnoldhall@example.com', '5089573579', 'Manager', '2019-05-09 19:17:00'),
(20, 'Toni Adams', 'alvah1981@example.com', '2603668738', '', '2019-05-09 19:19:00'),
(21, 'Donald Perry', 'donald1983@example.com', '7019007916', 'Employee', '2019-05-09 19:20:00'),
(22, 'Joe McKinney', 'nadia.doole0@example.com', '6153353674', 'Employee', '2019-05-09 19:20:00'),
(23, 'Angela Horst', 'angela1977@example.com', '3094234980', 'Assistant', '2019-05-09 19:21:00'),
(24, 'James Jameson', 'james1965@example.com', '4002349823', 'Assistant', '2019-05-09 19:32:00'),
(25, 'Daniel Deacon', 'danieldeacon@example.com', '5003423549', 'Manager', '2019-05-09 19:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `donation_id` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `don_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `don_id` varchar(15) DEFAULT NULL,
  `userlogin_id` int(11) DEFAULT NULL,
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

INSERT INTO `donor` (`id`, `don_id`, `userlogin_id`, `name`, `nic`, `contact`, `gender`, `username`, `password`, `contribution`, `email`, `address`) VALUES
(1, 'DON/HB/1', 3, 'Mr. D.P. Samarasinghe', '667223621V', '0112555123', 'male ', 'don1', '202cb962ac59075b964b07152d234b70', 1300, 'dp123@gmail.com', 'Colombo'),
(4, NULL, 10, 'Manuli Wanniarachchi', '986250470V', '0112888456', 'male ', 'don3', '123', NULL, 'manuli1998@gmail.com', 'N/4, Anderson Flats, Colombo 05');

-- --------------------------------------------------------

--
-- Table structure for table `home_visit`
--

CREATE TABLE `home_visit` (
  `id` int(11) NOT NULL,
  `visit_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `vol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_visit_assign`
--

CREATE TABLE `home_visit_assign` (
  `id` int(11) NOT NULL,
  `visit_id` int(11) NOT NULL,
  `com_id` int(11) DEFAULT NULL,
  `beneficiery_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `incharge_appoints`
--

CREATE TABLE `incharge_appoints` (
  `com_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `incharge_id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `leave_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `com_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marking_attendance`
--

CREATE TABLE `marking_attendance` (
  `incharge_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `vol_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `media_id` varchar(50) NOT NULL,
  `incharge_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `activity_id` int(11) NOT NULL,
  `media_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `starting_bid` datetime NOT NULL,
  `product_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_report`
--

CREATE TABLE `project_report` (
  `id` int(11) NOT NULL,
  `report_id` varchar(10) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `created_date` date NOT NULL,
  `approved_date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `com_id` int(11) DEFAULT NULL,
  `report_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(11, 'ahmdodampe@hotmail.com', '20b8fe06410f51c8', '$2y$10$oYEkT0462lBouMdrRt7ZnOf.SF2jf3tB5u6.oO5SEkSj7U1Cfwt7u', '1605382085'),
(19, 'akperera@gmail.com', '03bf00eeeac236cc', '$2y$10$VTVQVlQB5ncnI70GTMzCUOFOpB.5ppaI5uY0wJJw/4XlJdg2syIgq', '1605382688'),
(31, 'dilankaperera27@gmail.com', 'c2e918f9490731f2', '$2y$10$egZ83kp5KZ8zHxW2AOaebOhDUcZsQ1p1lxA1xn1XXc1sw6eD9u26C', '1605386528'),
(41, 'ahmdodampe96@gmail.com', '5b2340246a35ec70', '$2y$10$aK2HyG.1BIaXz0fuZNboQOxxYOZlGQQZFjxS0KOgzNrIcW3Ah6c6u', '1605454237'),
(42, 'manuli1998@gmail.com', 'ad931460cab3d981', '$2y$10$8m/IZAsFT65jjQ/7mYiS2.vhFx1OKUQLdvt7qS0y49pxXptux5DHC', '1605534325');

-- --------------------------------------------------------

--
-- Table structure for table `session_incharge`
--

CREATE TABLE `session_incharge` (
  `id` int(11) NOT NULL,
  `incharge_id` varchar(50) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `userlogin_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `joined_year` date NOT NULL,
  `contact` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `com_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_id`, `userlogin_id`, `name`, `nic`, `address`, `dob`, `email`, `gender`, `joined_year`, `contact`, `username`, `password`, `com_id`) VALUES
(1, 'STF/HB/1', 5, 'Mrs. P.L. Perera', '698712362V', 'Hambantota', '1969-11-17', 'plperera@gmail.com', 'female ', '2019-10-13', '0762555123', 'stf1', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_application`
--

CREATE TABLE `staff_application` (
  `id` int(11) NOT NULL,
  `vol_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `com_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `email`) VALUES
(1, 'vol1', '$2y$10$MhUSfGDF/gWY84Gr/ZWH1OXVtUbBjrjm2HNdrHdFJwdyJ6axpOnL6', 'volunteer', NULL),
(2, 'com1', '$2y$10$kNeo3ZicSIzkY.MNvs/hHep5cj3VHcK8zv5iuB3XD9.0tIp43jeWS', 'commissioner', NULL),
(3, 'don1', '$2y$10$.cozwApwsE1ylOLVfnpvtO2NC4PpYeSiuVJdH8bI/gtnPGG2ZiTvC', 'donor', NULL),
(4, 'buy1', '$2y$10$fi/YkDD5ha1OiYFOO2ApuOFsKCMntFcGdhq2GUKxuW2p8O8VMsP56', 'buyer', NULL),
(5, 'stf1', '$2y$10$6GiKlUbzdc05EdUmfRqVsewTOToeRt51vC0PwAhw8tgRCghpPO756', 'staff', NULL),
(8, 'vol2', '202cb962ac59075b964b07152d234b70', 'volunteer', NULL),
(9, 'vol3', '$2y$10$CYoc20AfUSi.P9sFbdcFG.Xu5Os1YDrKI3jjd4nYidq9jZaf8t1M2', 'volunteer', NULL),
(10, 'don3', '123', 'donor', 'manuli1998@gmail.com'),
(11, 'don2', '123', 'donor', 'buddhi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `vol_id` varchar(15) DEFAULT NULL,
  `userlogin_id` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `level` text DEFAULT NULL,
  `vol_points` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `prev_vol_exp` varchar(200) DEFAULT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `vol_id`, `userlogin_id`, `name`, `nic`, `address`, `gender`, `dob`, `email`, `contact`, `level`, `vol_points`, `username`, `password`, `prev_vol_exp`, `join_date`, `status`) VALUES
(1, 'VOL/HB/1', 1, 'Mr. A.K. Perera', '787250470V', 'Hambantota', 'male ', '2020-07-08', 'ahmdodampe96@gmail.com', '0112333244', 'permanent', 1023, 'vol1', '202cb962ac59075b964b', 'Nothing', '2020-11-14 19:12:33', 1),
(2, 'VOL/HB/2', 8, 'Ms. DIlanka Perera', '000000000V', 'XX', 'female', '2020-11-05', 'dilankaperera27@gmail.com', '0000000000', NULL, NULL, NULL, NULL, NULL, '2020-11-16 13:13:16', 0),
(4, 'VOL/HB/3', 9, 'Ms. Manuli Wanniarachchi', '000010000V', 'XX', 'female', '2020-11-05', 'manuli1998@gmail.com', '0000000000', NULL, NULL, NULL, NULL, NULL, '2020-11-16 13:13:29', 1),
(6, NULL, NULL, 'Anjana', '966250470V', 'Colombo', 'male ', '2020-11-11', 'ann@gmail.com', '0112555287', NULL, NULL, NULL, NULL, 'Nothing', '2020-11-16 13:12:30', 0),
(7, NULL, NULL, 'Buddhi Wickramasinghe', '987250470V', 'Malabe', 'male ', '1998-03-22', 'chathuranga4742@gmail.com', '0112777456', NULL, NULL, NULL, NULL, 'Nothing', '2020-11-16 13:24:57', 0),
(8, NULL, NULL, 'Uthpala ', '973250672V', 'Gampaha', 'male ', '1997-06-25', 'uthpala@gmail.com', '0112555287', NULL, NULL, NULL, NULL, 'Nothing', '2020-11-16 13:26:10', 0),
(9, NULL, NULL, 'Vigani ', '986550470V', 'Jaffna', 'female ', '1998-05-12', 'vigani@gmail.com', '0112555124', NULL, NULL, NULL, NULL, 'Nothing', '2020-11-16 13:27:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vol_activity`
--

CREATE TABLE `vol_activity` (
  `id` int(11) NOT NULL,
  `activity_id` varchar(50) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `venue` varchar(200) NOT NULL,
  `start_date_time` datetime NOT NULL,
  `end_date_time` datetime NOT NULL,
  `participant_count` int(11) DEFAULT NULL,
  `confirm_participant_count` int(11) DEFAULT NULL,
  `com_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vol_activity`
--

INSERT INTO `vol_activity` (`id`, `activity_id`, `name`, `venue`, `start_date_time`, `end_date_time`, `participant_count`, `confirm_participant_count`, `com_id`) VALUES
(1, '', 'Blood Donation Camp', 'Community Hall', '2020-11-26 10:00:00', '2020-11-26 14:00:00', 150, NULL, 1),
(2, NULL, 'Tree planting campaign', 'Main branch', '2020-11-18 17:37:00', '2020-11-18 21:37:00', 200, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beneficiery_case`
--
ALTER TABLE `beneficiery_case`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beneficiery_id` (`beneficiery_id`),
  ADD KEY `com_id` (`com_id`),
  ADD KEY `vol_id` (`vol_id`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`session_id`,`buy_id`,`bid_amount`),
  ADD KEY `buy_id` (`buy_id`);

--
-- Indexes for table `bid_session`
--
ALTER TABLE `bid_session`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `session_id` (`session_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `won_buy_id` (`won_buy_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `buy_id` (`buy_id`),
  ADD KEY `userlogin_id` (`userlogin_id`);

--
-- Indexes for table `commissioner`
--
ALTER TABLE `commissioner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `com_id` (`com_id`),
  ADD UNIQUE KEY `com_nic` (`com_nic`),
  ADD KEY `userlogin_id` (`userlogin_id`);

--
-- Indexes for table `com_access_media`
--
ALTER TABLE `com_access_media`
  ADD PRIMARY KEY (`com_id`,`media_id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `com_handle_buyer`
--
ALTER TABLE `com_handle_buyer`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `buy_id` (`buy_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `donation_id` (`donation_id`),
  ADD KEY `don_id` (`don_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `don_id` (`don_id`),
  ADD KEY `userlogin_id` (`userlogin_id`);

--
-- Indexes for table `home_visit`
--
ALTER TABLE `home_visit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `visit_id` (`visit_id`),
  ADD KEY `vol_id` (`vol_id`);

--
-- Indexes for table `home_visit_assign`
--
ALTER TABLE `home_visit_assign`
  ADD PRIMARY KEY (`id`),
  ADD KEY `com_id` (`com_id`),
  ADD KEY `beneficiery_id` (`beneficiery_id`),
  ADD KEY `visit_id` (`visit_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incharge_appoints`
--
ALTER TABLE `incharge_appoints`
  ADD PRIMARY KEY (`com_id`,`activity_id`,`incharge_id`),
  ADD KEY `incharge_id` (`incharge_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`leave_id`,`staff_id`),
  ADD KEY `com_id` (`com_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `marking_attendance`
--
ALTER TABLE `marking_attendance`
  ADD PRIMARY KEY (`incharge_id`,`staff_id`,`activity_id`,`vol_id`),
  ADD KEY `vol_id` (`vol_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_id` (`media_id`),
  ADD KEY `incharge_id` (`incharge_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `project_report`
--
ALTER TABLE `project_report`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `report_id` (`report_id`),
  ADD UNIQUE KEY `report_path` (`report_path`),
  ADD KEY `com_id` (`com_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `session_incharge`
--
ALTER TABLE `session_incharge`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `incharge_id` (`incharge_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_id` (`staff_id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `com_id` (`com_id`),
  ADD KEY `userlogin_id` (`userlogin_id`);

--
-- Indexes for table `staff_application`
--
ALTER TABLE `staff_application`
  ADD PRIMARY KEY (`id`,`vol_id`),
  ADD KEY `com_id` (`com_id`),
  ADD KEY `vol_id` (`vol_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `vol_id` (`vol_id`),
  ADD KEY `userlogin_id` (`userlogin_id`);

--
-- Indexes for table `vol_activity`
--
ALTER TABLE `vol_activity`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `activity_id` (`activity_id`),
  ADD KEY `com_id` (`com_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beneficiery_case`
--
ALTER TABLE `beneficiery_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bid_session`
--
ALTER TABLE `bid_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commissioner`
--
ALTER TABLE `commissioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_visit`
--
ALTER TABLE `home_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_visit_assign`
--
ALTER TABLE `home_visit_assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_report`
--
ALTER TABLE `project_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `session_incharge`
--
ALTER TABLE `session_incharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vol_activity`
--
ALTER TABLE `vol_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beneficiery_case`
--
ALTER TABLE `beneficiery_case`
  ADD CONSTRAINT `beneficiery_case_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `beneficiery_case_ibfk_2` FOREIGN KEY (`vol_id`) REFERENCES `volunteer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `bid_session` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`buy_id`) REFERENCES `buyer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bid_session`
--
ALTER TABLE `bid_session`
  ADD CONSTRAINT `bid_session_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bid_session_ibfk_2` FOREIGN KEY (`won_buy_id`) REFERENCES `buyer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`userlogin_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `commissioner`
--
ALTER TABLE `commissioner`
  ADD CONSTRAINT `commissioner_ibfk_1` FOREIGN KEY (`userlogin_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `com_access_media`
--
ALTER TABLE `com_access_media`
  ADD CONSTRAINT `com_access_media_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `com_handle_buyer`
--
ALTER TABLE `com_handle_buyer`
  ADD CONSTRAINT `com_handle_buyer_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `com_handle_buyer_ibfk_2` FOREIGN KEY (`buy_id`) REFERENCES `buyer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`don_id`) REFERENCES `donor` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`userlogin_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `home_visit`
--
ALTER TABLE `home_visit`
  ADD CONSTRAINT `home_visit_ibfk_1` FOREIGN KEY (`vol_id`) REFERENCES `volunteer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `home_visit_assign`
--
ALTER TABLE `home_visit_assign`
  ADD CONSTRAINT `home_visit_assign_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `home_visit_assign_ibfk_2` FOREIGN KEY (`beneficiery_id`) REFERENCES `beneficiery_case` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `home_visit_assign_ibfk_3` FOREIGN KEY (`visit_id`) REFERENCES `home_visit` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `incharge_appoints`
--
ALTER TABLE `incharge_appoints`
  ADD CONSTRAINT `incharge_appoints_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `incharge_appoints_ibfk_3` FOREIGN KEY (`incharge_id`) REFERENCES `session_incharge` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `incharge_appoints_ibfk_4` FOREIGN KEY (`activity_id`) REFERENCES `vol_activity` (`id`);

--
-- Constraints for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD CONSTRAINT `leave_request_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `leave_request_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `marking_attendance`
--
ALTER TABLE `marking_attendance`
  ADD CONSTRAINT `marking_attendance_ibfk_1` FOREIGN KEY (`vol_id`) REFERENCES `volunteer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marking_attendance_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marking_attendance_ibfk_4` FOREIGN KEY (`vol_id`) REFERENCES `volunteer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marking_attendance_ibfk_5` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marking_attendance_ibfk_7` FOREIGN KEY (`incharge_id`) REFERENCES `session_incharge` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marking_attendance_ibfk_8` FOREIGN KEY (`activity_id`) REFERENCES `vol_activity` (`id`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`incharge_id`) REFERENCES `session_incharge` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `vol_activity` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_report`
--
ALTER TABLE `project_report`
  ADD CONSTRAINT `project_report_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_report_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `session_incharge`
--
ALTER TABLE `session_incharge`
  ADD CONSTRAINT `session_incharge_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`userlogin_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff_application`
--
ALTER TABLE `staff_application`
  ADD CONSTRAINT `staff_application_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_application_ibfk_2` FOREIGN KEY (`vol_id`) REFERENCES `volunteer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `volunteer_ibfk_1` FOREIGN KEY (`userlogin_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vol_activity`
--
ALTER TABLE `vol_activity`
  ADD CONSTRAINT `vol_activity_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
