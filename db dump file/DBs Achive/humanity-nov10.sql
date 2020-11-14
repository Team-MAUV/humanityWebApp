-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 03:14 PM
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
  `beneficiery_id` varchar(50) NOT NULL,
  `vol_id` varchar(50) NOT NULL,
  `com_nic` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `closed_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `session_id` varchar(50) NOT NULL,
  `buy_id` varchar(50) NOT NULL,
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
  `product_id` varchar(50) NOT NULL,
  `won_buy_id` varchar(50) NOT NULL,
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

INSERT INTO `buyer` (`id`, `buy_id`, `name`, `nic`, `address`, `email`, `contact`, `username`, `password`, `gender`) VALUES
(1, 'BUY/HB/1', 'Anjana', '896450490V', 'Colombo', '2018cs184@stu.ucsc.cmb.ac.lk', '0112555123', 'admin', 'root', 'male '),
(2, 'BUY/HB/2', 'Manuli Wanniarachchi', '986250470V', 'N/4, Anderson Flats', 'manuli1998@gmail.com', '0112555288', 'manuli1998', 'manuli', 'female '),
(3, 'BUY/HB/3', 'Dilanka Perera', '123456789V', 'No.23/6 Koranelis Mawatha, Nugegoda', 'dila@gmail.com', '0112555123', 'dilaaa', 'dila', 'female ');

-- --------------------------------------------------------

--
-- Table structure for table `commissioner`
--

CREATE TABLE `commissioner` (
  `id` int(11) NOT NULL,
  `com_nic` varchar(50) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `com_access_media`
--

CREATE TABLE `com_access_media` (
  `com_nic` varchar(50) NOT NULL,
  `media_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `com_handle_buyer`
--

CREATE TABLE `com_handle_buyer` (
  `com_nic` varchar(50) NOT NULL,
  `buy_id` varchar(50) NOT NULL,
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
  `don_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `don_id` varchar(15) DEFAULT NULL,
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

INSERT INTO `donor` (`id`, `don_id`, `name`, `nic`, `contact`, `gender`, `username`, `password`, `contribution`, `email`, `address`) VALUES
(1, NULL, 'Manuli Wanniarachchi', '986250470V', '0112555288', 'female ', 'user', 'manuli', 10, 'manuli1998@gmail.com', 'N/4, Anderson Flats, Colombo 05'),
(2, NULL, 'Dilanka Perera', '983216312318V', '0112888456', 'female ', 'dilaaa', 'dila', NULL, 'dila@gmail.com', 'No.23/6 Koranelis Mawatha, Nugegoda'),
(4, NULL, 'Buddhi', '983216562318V', '0112888456', 'male ', 'buu', 'buu', NULL, 'buddhi@gmail.com', 'Malabe'),
(5, NULL, 'Anjana', '896459490V', '0112888456', 'male ', 'admin', 'aaaa', NULL, 'ann@gmail.com', 'Colombo');

-- --------------------------------------------------------

--
-- Table structure for table `home_visit`
--

CREATE TABLE `home_visit` (
  `id` int(11) NOT NULL,
  `visit_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `vol_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_visit_assign`
--

CREATE TABLE `home_visit_assign` (
  `id` int(11) NOT NULL,
  `visit_id` varchar(50) NOT NULL,
  `com_nic` varchar(50) NOT NULL,
  `beneficiery_id` varchar(50) NOT NULL
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
  `com_nic` varchar(50) NOT NULL,
  `activity_id` varchar(50) NOT NULL,
  `incharge_id` varchar(50) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `leave_id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `com_nic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marking_attendance`
--

CREATE TABLE `marking_attendance` (
  `incharge_id` varchar(50) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `activity_id` varchar(50) NOT NULL,
  `vol_id` varchar(50) NOT NULL,
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
  `incharge_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `activity_id` varchar(50) NOT NULL,
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
  `staff_id` varchar(50) NOT NULL,
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
  `staff_id` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `approved_date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `com_nic` varchar(50) NOT NULL,
  `report_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session_incharge`
--

CREATE TABLE `session_incharge` (
  `id` int(11) NOT NULL,
  `incharge_id` varchar(50) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
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
  `com_nic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_application`
--

CREATE TABLE `staff_application` (
  `application_id` int(11) NOT NULL,
  `vol_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `com_nic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `status`) VALUES
(1, 'com1', '202cb962ac59075b964b07152d234b70', 'commissioner', 'active'),
(2, 'vol1', '202cb962ac59075b964b07152d234b70', 'volunteer', 'active'),
(3, 'don1', '202cb962ac59075b964b07152d234b70', 'donor', 'active'),
(4, 'buy1', '202cb962ac59075b964b07152d234b70', 'buyer', 'active'),
(5, 'vol2', '202cb962ac59075b964b07152d234b70', 'volunteer', 'active'),
(6, 'stf1', '202cb962ac59075b964b07152d234b70', 'staff', 'active'),
(7, 'user7', '202cb962ac59075b964b07152d234b70', 'commissioner', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `vol_id` varchar(15) DEFAULT NULL,
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
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `vol_id`, `name`, `nic`, `address`, `gender`, `dob`, `email`, `contact`, `level`, `vol_points`, `username`, `password`, `prev_vol_exp`, `join_date`, `status`) VALUES
(1, 'VOL/HB/1', 'A', '123', 'dcc', 'male ', '2020-11-18', 'dcdec', '', 'temporary', NULL, 'vol1', '123', 'Nothing', '2020-11-10 10:59:52', NULL),
(2, 'VOL/HB/2', 'Anjana', '123456788V', 'N/4, Anderson Flats', 'male ', '2020-11-17', '2018cs184@stu.ucsc.cmb.ac.lk', '', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-10 11:00:08', NULL),
(3, 'VOL/HB/3', 'Vigani ', '1298473872V', 'Colombo', 'female ', '2020-11-09', 'cvvevefavae@gmail.com', '', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-10 11:00:25', NULL),
(4, 'VOL/HB/4', 'Hansani Ramasha', '214649183475v', 'Narahenpita', 'female ', '2020-11-16', 'hansani@gmail.com', '214135131', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-10 11:00:33', NULL),
(5, 'VOL/HB/5', 'Nipuni', '23165317V', 'Kalutara', 'female ', '2020-11-02', 'nipuni@gmail.com', '263512751723', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-10 11:00:43', NULL),
(6, 'VOL/HB/6', 'Iranga  Mudalige', '257827427V', 'Belihuloya', 'male ', '2020-11-19', 'ira@gmail.com', '26453843', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-10 11:00:55', NULL),
(7, 'VOL/HB/7', 'Buddhi', '42335347457V', 'Malabe', 'male ', '2020-11-19', 'buddhi@gmail.com', '31242354657', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-10 11:01:04', NULL),
(8, 'VOL/HB/8', 'Saman', '53467423847V', 'Galle', 'male ', '1987-02-18', 'ann@gmail.com', '0112343212', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-10 11:01:12', NULL),
(9, 'VOL/HB/9', '	 Mr. W. R. Peiris,', '67122362V', ' 10, Dharmapala Mawatha,Mallakam East, COLOMBO 00700.', 'male', '1967-04-30', 'randika@gmail.com', '', 'permanent', 1023, 'randika@vol', 'randika@1234', NULL, '2020-11-10 11:01:22', NULL),
(10, 'VOL/HB/10', 'Chathura', '7458131241V', 'Rathnapura', 'male ', '2020-11-15', 'chathu@gmail.com', '2124352463', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-10 11:01:31', NULL),
(11, 'VOL/HB/11', 'Miss Rene de Silva,', '87122362V', '46, Wellawatta,Galle Road,	COLOMBO 00600', 'female', '1987-10-06', 'rene@gmail.com', '', 'temporary', 123, 'rene@vol', 'rene@1234', 'University Volunteering', '2020-11-10 11:01:41', NULL),
(12, 'VOL/HB/12', 'Dilanka Perera', '896450470V', 'No.23/6 Koranelis Mawatha, Nugegoda', 'female ', '2020-10-14', 'dila@gmail.com', '', NULL, NULL, NULL, NULL, 'Nothing', '2020-11-10 11:01:51', NULL),
(13, 'VOL/HB/13', 'Ayesh', '896490490V', 'wfceafwef', 'male ', '2020-10-28', 'admin@g', '', NULL, NULL, NULL, NULL, 'Nothing', '2020-11-10 11:02:01', NULL),
(14, 'VOL/HB/14', 'Manuli Wanniarachchi', '986250470V', 'N/4, Anderson Flats, Colombo 05', 'female ', '1998-08-12', 'manuli1998@gmail.com', '', NULL, NULL, NULL, NULL, 'Nothing', '2020-11-10 11:02:10', NULL),
(15, 'VOL/HB/15', 'Uthpala', '986289470V', 'Gampaha', 'male ', '2020-11-17', 'uthpala@gmail.com', '', 'temporary', NULL, NULL, NULL, 'Nothing', '2020-11-10 11:14:25', NULL),
(16, NULL, 'XYZ', '34235463V', 'Colombo', 'male ', '2020-11-09', 'xyz@gmail.com', '3423534673573', NULL, NULL, NULL, NULL, 'Nothing', '2020-11-07 12:47:44', NULL),
(17, NULL, 'AAAAA', '23576457887', 'wfceafwef', 'male ', '2020-11-18', 'aaaaaa', '0112555124', NULL, NULL, NULL, NULL, 'DCscd', '2020-11-08 04:27:59', NULL),
(18, NULL, 'BBBB', '2479086543', 'Colombo', 'male ', '2020-11-11', 'bbbb', '01128887654', NULL, NULL, NULL, NULL, 'davd', '2020-11-08 04:33:04', NULL),
(19, NULL, 'test', 'test', 'test@gmail.com', 'male ', '2020-12-01', 'test@gmail.com', '0112888789', NULL, NULL, NULL, NULL, '', '2020-11-08 13:51:20', NULL),
(23, NULL, 'Test1', '986279470V', 'Colombo', 'male ', '2020-11-19', 'manuli1298@gmail.com', '0112555277', NULL, NULL, NULL, NULL, 'Nothing', '2020-11-10 04:34:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vol_activity`
--

CREATE TABLE `vol_activity` (
  `id` int(11) NOT NULL,
  `activity_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `venue` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `participant_count` int(11) DEFAULT NULL,
  `invitation_path` varchar(100) NOT NULL,
  `confirm_participant_count` int(11) DEFAULT NULL,
  `com_nic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beneficiery_case`
--
ALTER TABLE `beneficiery_case`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beneficiery_id` (`beneficiery_id`),
  ADD KEY `vol_id` (`vol_id`),
  ADD KEY `com_nic` (`com_nic`);

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
  ADD UNIQUE KEY `buy_id` (`buy_id`);

--
-- Indexes for table `commissioner`
--
ALTER TABLE `commissioner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `com_nic` (`com_nic`);

--
-- Indexes for table `com_access_media`
--
ALTER TABLE `com_access_media`
  ADD PRIMARY KEY (`com_nic`,`media_id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `com_handle_buyer`
--
ALTER TABLE `com_handle_buyer`
  ADD PRIMARY KEY (`com_nic`),
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
  ADD UNIQUE KEY `don_id` (`don_id`);

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
  ADD UNIQUE KEY `visit_id` (`visit_id`),
  ADD UNIQUE KEY `beneficiery_id` (`beneficiery_id`),
  ADD KEY `com_nic` (`com_nic`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incharge_appoints`
--
ALTER TABLE `incharge_appoints`
  ADD PRIMARY KEY (`com_nic`,`activity_id`,`incharge_id`),
  ADD KEY `activity_id` (`activity_id`),
  ADD KEY `incharge_id` (`incharge_id`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`leave_id`,`staff_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `com_nic` (`com_nic`);

--
-- Indexes for table `marking_attendance`
--
ALTER TABLE `marking_attendance`
  ADD PRIMARY KEY (`incharge_id`,`staff_id`,`activity_id`,`vol_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `activity_id` (`activity_id`),
  ADD KEY `vol_id` (`vol_id`);

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
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `com_nic` (`com_nic`);

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
  ADD KEY `com_nic` (`com_nic`);

--
-- Indexes for table `staff_application`
--
ALTER TABLE `staff_application`
  ADD PRIMARY KEY (`application_id`,`vol_id`),
  ADD KEY `vol_id` (`vol_id`),
  ADD KEY `com_nic` (`com_nic`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `vol_id` (`vol_id`);

--
-- Indexes for table `vol_activity`
--
ALTER TABLE `vol_activity`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `com_nic` (`com_nic`),
  ADD UNIQUE KEY `activity_id` (`activity_id`),
  ADD UNIQUE KEY `invitation_path` (`invitation_path`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beneficiery_case`
--
ALTER TABLE `beneficiery_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bid_session`
--
ALTER TABLE `bid_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commissioner`
--
ALTER TABLE `commissioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

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
-- AUTO_INCREMENT for table `session_incharge`
--
ALTER TABLE `session_incharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beneficiery_case`
--
ALTER TABLE `beneficiery_case`
  ADD CONSTRAINT `beneficiery_case_ibfk_1` FOREIGN KEY (`vol_id`) REFERENCES `volunteer` (`vol_id`),
  ADD CONSTRAINT `beneficiery_case_ibfk_2` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`);

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`buy_id`) REFERENCES `buyer` (`buy_id`),
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `bid_session` (`session_id`);

--
-- Constraints for table `bid_session`
--
ALTER TABLE `bid_session`
  ADD CONSTRAINT `bid_session_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `bid_session_ibfk_2` FOREIGN KEY (`won_buy_id`) REFERENCES `buyer` (`buy_id`);

--
-- Constraints for table `com_access_media`
--
ALTER TABLE `com_access_media`
  ADD CONSTRAINT `com_access_media_ibfk_1` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`),
  ADD CONSTRAINT `com_access_media_ibfk_2` FOREIGN KEY (`media_id`) REFERENCES `media` (`media_id`),
  ADD CONSTRAINT `com_access_media_ibfk_3` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`),
  ADD CONSTRAINT `com_access_media_ibfk_4` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`);

--
-- Constraints for table `com_handle_buyer`
--
ALTER TABLE `com_handle_buyer`
  ADD CONSTRAINT `com_handle_buyer_ibfk_1` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`),
  ADD CONSTRAINT `com_handle_buyer_ibfk_2` FOREIGN KEY (`buy_id`) REFERENCES `buyer` (`buy_id`);

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`don_id`) REFERENCES `donor` (`don_id`);

--
-- Constraints for table `home_visit`
--
ALTER TABLE `home_visit`
  ADD CONSTRAINT `home_visit_ibfk_1` FOREIGN KEY (`vol_id`) REFERENCES `volunteer` (`vol_id`);

--
-- Constraints for table `home_visit_assign`
--
ALTER TABLE `home_visit_assign`
  ADD CONSTRAINT `home_visit_assign_ibfk_1` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`),
  ADD CONSTRAINT `home_visit_assign_ibfk_2` FOREIGN KEY (`visit_id`) REFERENCES `home_visit` (`visit_id`),
  ADD CONSTRAINT `home_visit_assign_ibfk_3` FOREIGN KEY (`beneficiery_id`) REFERENCES `beneficiery_case` (`beneficiery_id`);

--
-- Constraints for table `incharge_appoints`
--
ALTER TABLE `incharge_appoints`
  ADD CONSTRAINT `incharge_appoints_ibfk_1` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`),
  ADD CONSTRAINT `incharge_appoints_ibfk_2` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`),
  ADD CONSTRAINT `incharge_appoints_ibfk_3` FOREIGN KEY (`activity_id`) REFERENCES `vol_activity` (`activity_id`),
  ADD CONSTRAINT `incharge_appoints_ibfk_4` FOREIGN KEY (`incharge_id`) REFERENCES `session_incharge` (`incharge_id`),
  ADD CONSTRAINT `incharge_appoints_ibfk_5` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`),
  ADD CONSTRAINT `incharge_appoints_ibfk_6` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`);

--
-- Constraints for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD CONSTRAINT `leave_request_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `leave_request_ibfk_2` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`);

--
-- Constraints for table `marking_attendance`
--
ALTER TABLE `marking_attendance`
  ADD CONSTRAINT `marking_attendance_ibfk_1` FOREIGN KEY (`incharge_id`) REFERENCES `session_incharge` (`incharge_id`),
  ADD CONSTRAINT `marking_attendance_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `marking_attendance_ibfk_3` FOREIGN KEY (`activity_id`) REFERENCES `vol_activity` (`activity_id`),
  ADD CONSTRAINT `marking_attendance_ibfk_4` FOREIGN KEY (`vol_id`) REFERENCES `volunteer` (`vol_id`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`incharge_id`) REFERENCES `session_incharge` (`incharge_id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `vol_activity` (`activity_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `project_report`
--
ALTER TABLE `project_report`
  ADD CONSTRAINT `project_report_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `project_report_ibfk_2` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`);

--
-- Constraints for table `session_incharge`
--
ALTER TABLE `session_incharge`
  ADD CONSTRAINT `session_incharge_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`);

--
-- Constraints for table `staff_application`
--
ALTER TABLE `staff_application`
  ADD CONSTRAINT `staff_application_ibfk_1` FOREIGN KEY (`vol_id`) REFERENCES `volunteer` (`vol_id`),
  ADD CONSTRAINT `staff_application_ibfk_2` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`);

--
-- Constraints for table `vol_activity`
--
ALTER TABLE `vol_activity`
  ADD CONSTRAINT `vol_activity_ibfk_1` FOREIGN KEY (`com_nic`) REFERENCES `donor` (`don_id`),
  ADD CONSTRAINT `vol_activity_ibfk_2` FOREIGN KEY (`com_nic`) REFERENCES `commissioner` (`com_nic`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
