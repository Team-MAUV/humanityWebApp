-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 06:31 AM
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
(1, 'BCASEHB001', 1, 2, '2019-06-07', '2019-07-07', 'beneficiery_case/Group Project I - Proposal Evaluation Criteria Grid.pdf', 'finished'),
(2, 'BCASEHB002', 2, 3, '2020-06-07', NULL, 'beneficiery_case/Second Year Group Project Guide 2020.pdf', 'current'),
(4, 'BCASEHB004', 3, 2, '2019-06-07', NULL, 'beneficiery_case/harry-potter-and-the-prisoner-of-azkaban-yify-english.srt', 'current'),
(5, 'BCASEHB005', 1, NULL, NULL, NULL, 'beneficiery_case/harry-potter-and-the-order-of-the-phoenix-yify-english.srt', 'pending'),
(6, 'BCASEHB006', 4, NULL, NULL, NULL, 'beneficiery_case/harry-potter-and-the-half-blood-prince-yify-english.srt', 'pending'),
(7, 'BCASEHB007', 2, NULL, NULL, NULL, 'beneficiery_case/harry-potter-and-the-deathly-hallows-part-2-yify-english.srt', 'pending'),
(8, 'BCASEHB008', 1, NULL, NULL, NULL, 'beneficiery_case/SCS2209 Database II.docx', 'pending'),
(9, 'BCASEHB009', 2, NULL, NULL, NULL, 'beneficiery_case/Lecture - Week 06.pdf', 'pending'),
(10, 'BCASEHB010', 3, NULL, NULL, NULL, 'beneficiery_case/Syllabus.doc', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `product_id` int(11) NOT NULL,
  `buy_id` int(11) NOT NULL,
  `bid_amount` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`product_id`, `buy_id`, `bid_amount`, `time`) VALUES
(12, 1, 123.22, '2021-03-17 05:30:17'),
(12, 1, 200, '2021-03-16 18:46:09'),
(12, 1, 213, '2021-03-17 06:06:38'),
(12, 1, 300.22, '2021-03-17 06:42:16'),
(12, 1, 400, '2021-03-17 06:46:07'),
(12, 1, 500, '2021-03-17 06:51:10'),
(12, 1, 5000.22, '2021-03-17 06:02:21'),
(12, 1, 40001, '2021-03-17 07:02:38'),
(12, 1, 40003, '2021-03-17 07:27:04'),
(12, 1, 800000, '2021-03-19 14:29:35'),
(12, 1, 850000, '2021-03-19 14:29:35'),
(12, 2, 300, '2021-03-16 18:46:09');

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
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `buy_id`, `userlogin_id`, `name`, `nic`, `address`, `email`, `contact`) VALUES
(1, 'BUYHB001', 12, 'S.D. Sarada', '896450470V', 'Malabe', 'vigaravi98@gmail.com', '0112888456'),
(2, 'BUYHB002', 19, 'S.M. Chandrasekara', '892450190V', 'Hambantota', 'ahmdodampe@hotmail.com', '0112444786'),
(3, 'BUYHB003', 21, 'J.E. Silva', '973498468V', 'Matara', 'anjana.malitha@gmail.com', '0112888451');

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
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commissioner`
--

INSERT INTO `commissioner` (`id`, `com_id`, `com_nic`, `userlogin_id`, `name`, `address`, `email`, `contact`, `gender`) VALUES
(1, 'COMHB001', '687653576V', 1, 'P.R. Perera', 'Hambantota', 'ahmdodampe@hotmail.com', '0112333244', 'male '),
(2, 'COMHB002', '651237865V', 2, 'A.M. Wanigarathna', 'Hambantota', 'thavinu2003@gmail.com', '0712894562', 'female'),
(3, 'COMHB003', '627653576V', 3, 'N.M. Jayalath', 'Hambantota', 'uthpalakasun1997@gmail.com', '0714894561', 'male '),
(4, 'COMHB004', '761237865V', 4, 'J.K. Silva', 'Hambantota', 'merce177x@gmail.com', '0712894534', 'female'),
(5, 'COMHB005', '821250460V', 22, 'H.K. Withana', 'Colombo', 'ahmdodampe1111@hotmail.com', '0112555288', 'male'),
(6, 'COMHB006', '876509350V', 23, 'M.B. Fernando', 'Hambantota', 'anjana.malitha@gmail.com', '0112555211', 'female');

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
  `amount` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `don_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `amount`, `type`, `date`, `don_id`) VALUES
(1, 500, 'Charity', '2020-03-16', 2),
(2, 1000, 'Disaster Relief', '2020-10-12', 2),
(3, 1000, 'Charity', '2021-01-11', 1),
(4, 1500, 'Development', '2021-03-02', 2),
(5, 500, 'Charity', '2021-03-16', 2);

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
  `contribution` float DEFAULT 0,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `don_id`, `userlogin_id`, `name`, `nic`, `contact`, `contribution`, `email`, `address`) VALUES
(1, 'DONHB001', 11, 'A.P. Nishshanka', '986250470V', '0112555288', 1000, 'manuli1998@gmail.com', 'Colombo'),
(2, 'DONHB002', 18, 'A.K.Perera', '926130470V', '0112555124', 4000, 'merce177x@gmail.com', 'Malabe'),
(3, 'DONHB003', 20, 'M.C. Withana', '821250460V', '0112534877', 0, 'anjana.malitha@gmail.com', 'Galle'),
(4, 'DONHB004', 24, 'I.P. Somarathna', '856450470V', '0112555276', 0, 'uthpalakasun@1997gmail.com', 'Colombo');

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
(1, 'Abandoned Building', '', 'images/abandoned-building.jpg', '2019-07-16 20:09:26');

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
  `name` varchar(100) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'pending',
  `com_id` int(11) DEFAULT NULL,
  `reject_reason` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`leave_id`, `staff_id`, `name`, `from_date`, `to_date`, `reason`, `status`, `com_id`, `reject_reason`) VALUES
(1, 3, 'D.R. Amasha', '2020-11-25', '2020-11-27', 'Wedding', 'approved', NULL, NULL),
(2, 4, 'S.E. Perera', '2020-11-25', '2020-11-26', 'Funeral', 'approved', NULL, NULL),
(3, 1, 'A.S.Nimali', '2020-12-03', '2020-12-06', 'Nothing', 'approved', NULL, NULL),
(4, 2, 'H.J. Amal', '2021-01-13', '2021-01-15', 'Sick', 'pending', NULL, NULL),
(5, 6, 'F.R. Wijenayake', '2020-12-31', '2021-01-02', 'Family trip', 'pending', NULL, NULL),
(6, 2, 'H.J. AMAL', '2020-11-25', '2020-11-26', 'Sick', 'approved', 4, NULL);

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

--
-- Dumping data for table `marking_attendance`
--

INSERT INTO `marking_attendance` (`incharge_id`, `staff_id`, `activity_id`, `vol_id`, `date`, `time`) VALUES
(1, 1, 1, 1, '2020-12-19', '11:30:20'),
(4, 4, 5, 1, '2021-03-10', '12:22:22');

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
  `product_id` varchar(50) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1,
  `type` varchar(50) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `bid_end_time` datetime DEFAULT NULL,
  `won_buy_id` int(11) DEFAULT NULL,
  `highest_bid_amount` float DEFAULT 0,
  `collected_status` tinyint(1) NOT NULL DEFAULT 0,
  `description` varchar(500) DEFAULT NULL,
  `starting_bid` float DEFAULT NULL,
  `product_path` varchar(200) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_id`, `name`, `availability`, `type`, `staff_id`, `date`, `bid_end_time`, `won_buy_id`, `highest_bid_amount`, `collected_status`, `description`, `starting_bid`, `product_path`, `volume`) VALUES
(12, 'PROHB012', 'test 333', 1, 'Electronic', 1, '2021-03-25 16:59:00', '2021-03-26 16:59:00', 1, 40003, 0, 'test ', 40000, 'product_images/abandoned-building.jpg', 200),
(14, 'PROHB014', 'test 332', 1, 'Other', 1, '2021-03-18 10:24:00', '2021-03-19 10:24:00', 1, 9000, 0, 'test', 2200, 'product_images/city.jpg', 22),
(15, 'PROHB015', 'test 333', 1, 'Paper', 1, '2021-03-19 10:40:00', '2021-03-20 10:40:00', NULL, 0, 0, 'test ', 30000, 'product_images/volbg2.jpg', 300),
(16, 'PROHB016', 'test 332', 1, 'Glass', 1, '2021-03-18 10:44:00', '2021-03-18 10:45:00', NULL, 0, 0, 'testtttst', 4000, 'product_images/abc.jpg', 70),
(17, 'PROHB017', 'test 332', 1, 'Plastic', 1, '2021-03-18 11:21:00', '2021-03-18 11:22:00', NULL, 0, 0, 'efcaffdssdsaddsd', 22222, 'product_images/account_circle_24px.png', 22);

-- --------------------------------------------------------

--
-- Table structure for table `project_report`
--

CREATE TABLE `project_report` (
  `id` int(11) NOT NULL,
  `report_id` varchar(10) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `approved_date` date DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `remark` varchar(500) NOT NULL,
  `com_id` int(11) DEFAULT NULL,
  `report_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_report`
--

INSERT INTO `project_report` (`id`, `report_id`, `title`, `staff_id`, `created_date`, `approved_date`, `status`, `remark`, `com_id`, `report_path`) VALUES
(1, 'RPTHB001', 'Donation Report', 6, '2019-10-14', '2020-04-06', 'approved', '', 1, 'project_report/SCS 2210 - Tutorial 1.pdf'),
(2, 'RPTHB002', 'Annual Market Report', 1, '2020-06-08', '2020-07-15', 'approved', '', 3, 'project_report/Database II Transaction (Tutorial 03).pdf'),
(3, 'RPTHB003', 'Volunteer Activity Report', 3, '2020-11-28', NULL, 'pending', '', NULL, 'project_report/Tute4 18001841.pdf'),
(4, 'RPTHB004', 'Products Report', 1, '2020-11-28', NULL, 'pending', '', NULL, 'project_report/18001841-quiz.pdf'),
(5, 'RPTHB005', 'Donation Report', 4, '2020-11-28', '2020-11-30', 'rejected', 'Insufficient details', 4, 'project_report/Lab sheet -1.pdf'),
(6, 'RPTHB006', 'Annual Donation Report', 2, '2020-11-29', '2020-11-30', 'rejected', 'Not good', 6, 'project_report/L1 Automata Theory.pdf'),
(7, 'RPTHB007', 'Annual Report', 1, '2020-12-02', NULL, 'pending', '', NULL, 'project_report/Annual Report.html');

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
(19, 'akperera@gmail.com', '03bf00eeeac236cc', '$2y$10$VTVQVlQB5ncnI70GTMzCUOFOpB.5ppaI5uY0wJJw/4XlJdg2syIgq', '1605382688'),
(31, 'dilankaperera27@gmail.com', 'c2e918f9490731f2', '$2y$10$egZ83kp5KZ8zHxW2AOaebOhDUcZsQ1p1lxA1xn1XXc1sw6eD9u26C', '1605386528'),
(41, 'ahmdodampe96@gmail.com', '5b2340246a35ec70', '$2y$10$aK2HyG.1BIaXz0fuZNboQOxxYOZlGQQZFjxS0KOgzNrIcW3Ah6c6u', '1605454237'),
(48, 'merce177x@gmail.com', '32ab6072c10a76e1', '$2y$10$Zb0vBhUX586dEqK2Xlo0ZeS5.3lh8n/MSiEA9AXQvW7fnRHHba5Qu', '1606589646'),
(49, 'manuli1998@gmail.com', '56e18cfec7ab13f5', '$2y$10$cCRogGPpa/Z5idFuGoEiuuP6E5mxcUPOw1HGqfCQa8OSBU7m74sga', '1606623880'),
(51, 'ahmdodampe@hotmail.com', '650b34d03c3d9acd', '$2y$10$S88vWpnBYJfOEpntvplqq.63.DFHLhdd9KuFdwIyPYVGaZALYSa9u', '1616330939');

-- --------------------------------------------------------

--
-- Table structure for table `session_incharge`
--

CREATE TABLE `session_incharge` (
  `id` int(11) NOT NULL,
  `incharge_id` varchar(50) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `id_in_stf_tbl` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `passcode` varchar(50) DEFAULT NULL,
  `vol_activityId` varchar(20) NOT NULL,
  `vol_activity` varchar(100) NOT NULL,
  `session_start_time` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(6) DEFAULT 'active',
  `session_closed_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_incharge`
--

INSERT INTO `session_incharge` (`id`, `incharge_id`, `name`, `id_in_stf_tbl`, `username`, `passcode`, `vol_activityId`, `vol_activity`, `session_start_time`, `status`, `session_closed_time`) VALUES
(2, 'STFHB002', 'F.R. Wijenayaka', 2, 'TMPSTFHB002', '635798', '', '', '2020-11-24 20:25:28', 'active', NULL),
(15, 'STFHB004', 'S.E. Perera', 4, 'TMPSTFHB004', '490263', '', 'Blood Donation Campaign', '2021-03-21 12:24:59', 'closed', '2021-03-21 17:47:54'),
(16, 'STFHB006', 'F.R. Wijenayaka', 6, 'TMPSTFHB006', '342178', '', 'Tree planting campaign', '2021-03-21 18:49:09', 'closed', '2021-03-21 18:54:53'),
(17, 'STFHB007', 'S.K. Ranasinghe', 7, 'TMPSTFHB007', '873690', '', 'Tree planting campaign', '2021-03-21 18:56:07', 'closed', '2021-03-21 18:56:57'),
(18, 'STFHB003', 'D.R. Amasha', 3, 'TMPSTFHB003', '264971', 'VACTHB002', 'Blood Donation Campaign', '2021-03-23 07:07:23', 'active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(50) DEFAULT NULL,
  `userlogin_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `joined_year` date DEFAULT current_timestamp(),
  `contact` varchar(10) NOT NULL,
  `com_id` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `no_leave` int(11) DEFAULT 0,
  `availability` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_id`, `userlogin_id`, `name`, `nic`, `address`, `dob`, `email`, `gender`, `joined_year`, `contact`, `com_id`, `status`, `no_leave`, `availability`) VALUES
(1, 'STFHB001', 5, 'A.S. Nimali', '916289470V', 'Hambantota', '1991-02-12', 'manuli1998@gmail.com', 'female ', '2016-10-13', '0112333211', 1, 'accepted', 5, 0),
(2, 'STFHB002', 6, 'H.J. Amal', '832345786V', 'Hambantota', '1983-11-04', 'thavinu2003@gmail.com', 'male', '2017-11-03', '0712894523', 3, 'accepted', 2, 0),
(3, 'STFHB003', 7, 'D.R. Amasha', '667223621V', 'Hambantota', '1966-06-22', 'vigaucsc2019@gmail.com', 'female ', '2017-12-15', '0112333456', 2, 'accepted', 1, 0),
(4, 'STFHB004', 8, 'S.E. Perera', '792345786V', 'Hambantota', '1979-11-03', 'ahmdodampe@hotmail.com', 'male', '2018-10-13', '0712894451', 4, 'accepted', 0, 0),
(5, 'STFHB005', 9, 'T.P. Fernando', '787223621V', 'Hambanotota', '1978-11-10', 'anjana.malitha@gmail.com', 'male ', '2018-11-03', '0112333221', 2, 'accepted', 0, 0),
(6, 'STFHB006', 10, 'F.R. Wijenayaka', '892345786V', 'Hambantota', '1989-07-20', 'vigaravi98@gmail.com', 'female', '2019-10-13', '0712894451', 1, 'accepted', 4, 0),
(7, 'STFHB007', NULL, 'S.K. Ranasinghe', '637223621V', 'Hambanota', '1963-11-25', 'merce177x@gmail.com', 'female ', '2020-11-30', '0112333228', NULL, 'pending', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'COMHB001', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'commissioner'),
(2, 'COMHB002', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'commissioner'),
(3, 'COMHB003', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'commissioner'),
(4, 'COMHB004', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'commissioner'),
(5, 'STFHB001', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'staff'),
(6, 'STFHB002', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'staff'),
(7, 'STFHB003', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'staff'),
(8, 'STFHB004', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'staff'),
(9, 'STFHB005', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'staff'),
(10, 'STFHB006', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'staff'),
(11, 'don1', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'donor'),
(12, 'buy1', '$2y$10$JVc5uuOr62OH.k0YoRcKL.HQVdU3APohwi6KELI6TJ5UKD7Ck69Xy', 'buyer'),
(13, 'VOLHB001', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'volunteer'),
(14, 'VOLHB002', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'volunteer'),
(15, 'VOLHB003', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'volunteer'),
(16, 'VOLHB004', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'volunteer'),
(17, 'VOLHB005', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'volunteer'),
(18, 'don2', '$2y$10$Qit9Er.64jblcD/DbaRMBuA.ThE85bARLiWmg/Q0mtSpdGay.bBpe', 'donor'),
(19, 'buy2', '$2y$10$x10F5fYkMmX/4U4VNdnGDefxdcJDPbFVEbx7GgeHHIGyc9VuqouZy', 'buyer'),
(20, 'don3', '$2y$10$w6p6oCHOVomwgXhaDPm2re57GXHAjCuqFEAF9wtCLUAU6KRKhtz3K', 'donor'),
(21, 'buy3', '$2y$10$xS564.4o5Hw1L4i1KirQW.eQRI.cRQ1v3PUWZhxyvHTJMq12xkw2e', 'buyer'),
(22, 'COMHB005', '$2y$10$emGVZF8RLlIXitlxw1o62eWKHegsUnmCXMv08CbsGDPuK3LeIH/Sm', 'commissioner'),
(23, 'COMHB006', '$2y$10$PupxSJQWJd6zmXzRKlN10.1zWJtR/OrlxcuSgSY9E9UXrLF69VBYW', 'commissioner'),
(24, 'don4', '$2y$10$pnN64C3J0la6ZEmlbvd/pe.tV0d8qrKi/nykmuB8.ADWiv3CMdcFS', 'donor'),
(25, 'buy4', '$2y$10$5fOrJXBJJo9nl6pktA/FNuAW/jXXxt/EedDmX9edQ8E5U1tuH43Ia', 'buyer'),
(26, 'VOLHB008', '$2y$10$/jr7C87RZxlWzdFNo9W0ceo6oEs8TU5bJAC6qxyZ8XrBov.n896YO', 'volunteer'),
(27, 'VOLHB009', '$2y$10$XixrgORRnCRYjTBlf9WLkupeMe5yDzOIkfqC8ba.2UEO6JdRBQ/Ge', 'volunteer');

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
  `prev_vol_exp` varchar(200) DEFAULT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `vol_id`, `userlogin_id`, `name`, `nic`, `address`, `gender`, `dob`, `email`, `contact`, `level`, `vol_points`, `prev_vol_exp`, `join_date`, `status`) VALUES
(1, 'VOLHB001', 13, 'A.C. Wikramasinghe', '887250470V', 'Hambantota', 'male ', '1988-11-11', 'manuli1998@gmail.com', '0112555287', 'Permanent Volunteer', 100, 'University Volunteering', '2020-12-01 13:07:53', 1),
(2, 'VOLHB002', 14, 'J.K. Edirisinghe', '892450470V', 'Malabe', 'female ', '1989-07-13', 'edirisinghe@hotmail.com', '0112555121', 'Permanent Volunteer', 200, 'Nothing', '2020-12-01 09:10:53', 1),
(3, 'VOLHB003', 15, 'F.A. Silva', '816450470V', 'Hambantota', 'male ', '1981-11-25', 'silva@gmail.com', '0112888456', 'Temporary Volunteer', 0, 'Nothing', '2020-11-19 10:05:57', 1),
(4, 'VOLHB004', 16, 'A.R. Thisera', '926450490V', 'Hambantota', 'female ', '1992-03-23', 'vigaravi98@gmail.com', '0112555221', 'Temporary Volunteer', 0, 'Nothing', '2020-11-19 10:07:13', 1),
(5, 'VOLHB005', 17, 'S.W. Bandara', '946310490V', 'Hambantota', 'female ', '1994-12-02', 'uthpalakasun1997@gmail.com', '0112566459', 'Temporary Volunteer', 0, 'Nothing', '2020-12-02 04:45:05', 1),
(6, NULL, NULL, 'H.R. Ramasha', '936253470V', 'Colombo', 'male ', '1993-09-21', 'anjana.malitha@gmail.com', '0762355287', NULL, NULL, 'Nothing', '2020-12-01 16:45:44', 0),
(7, NULL, NULL, ' J.L. Perera', '886230470V', 'Hambantota', 'female ', '1988-02-12', 'thavinu2003@gmail.com', '0112555222', NULL, NULL, 'Nothing', '2020-12-01 16:46:00', 0),
(8, 'VOLHB008', 26, 'A.M. Dodampe', '966250470V', 'Hambantota', 'male ', '1996-12-09', 'ahmdodampe@hotmail.com', '0112555124', 'Temporary Volunteer', 0, 'Nothing', '2020-12-01 16:46:44', 1),
(9, 'VOLHB009', 27, 'M.C.Wanniarachichi', '987250470V', 'Colombo', 'female ', '1998-12-22', 'merce177x@gmail.com', '0718077941', 'Temporary Volunteer', 0, 'Nothing', '2020-12-02 09:59:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vol_activity`
--

CREATE TABLE `vol_activity` (
  `id` int(11) NOT NULL,
  `activity_id` varchar(50) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `point` int(11) DEFAULT 0,
  `venue` varchar(200) NOT NULL,
  `start_date_time` datetime NOT NULL,
  `end_date_time` datetime NOT NULL,
  `participant_count` int(11) DEFAULT NULL,
  `confirm_participant_count` int(11) DEFAULT 0,
  `com_id` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vol_activity`
--

INSERT INTO `vol_activity` (`id`, `activity_id`, `name`, `point`, `venue`, `start_date_time`, `end_date_time`, `participant_count`, `confirm_participant_count`, `com_id`, `status`) VALUES
(1, 'VACTHB001', 'Tree Planting Campaign', 10, 'Kandy Town', '2020-12-19 11:30:00', '2020-11-19 13:30:00', 200, 195, 1, 0),
(2, 'VACTHB002', 'Blood Donation Campaign', 10, 'Community Hall', '2020-08-10 10:00:00', '2020-08-10 16:00:34', 300, 231, 3, 0),
(3, 'VACTHB003', 'Beach Cleaning Campaign', 10, 'Galle Town', '2019-10-15 14:03:34', '2019-10-15 18:03:34', 400, 320, 2, 0),
(4, 'VACTHB004', 'Blood Donation Campaign', 10, 'Main branch', '2021-01-19 10:30:00', '2021-01-19 16:30:00', 350, 0, 2, 0),
(5, 'VACTHB005', 'Book Donation Campaign', 10, 'Community Hall', '2021-03-10 11:37:00', '2021-03-10 03:37:00', 300, 0, 4, 0),
(6, 'VACTHB006', 'Food Distribution Campaign', 10, 'Hambantota Town', '2020-12-25 09:00:00', '2020-11-25 13:30:00', 300, 300, 4, 1),
(7, 'VACTHB007', 'Tree planting campaign', 10, 'Matara', '2020-12-05 13:57:00', '2020-12-05 18:57:00', 200, 0, 1, 1);

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
  ADD PRIMARY KEY (`buy_id`,`product_id`,`bid_amount`),
  ADD KEY `buy_id` (`buy_id`),
  ADD KEY `prod` (`product_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `buy_id` (`buy_id`),
  ADD KEY `userlogin_id` (`userlogin_id`);

--
-- Indexes for table `commissioner`
--
ALTER TABLE `commissioner`
  ADD PRIMARY KEY (`id`),
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
  ADD KEY `don_id` (`don_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`),
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
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `won_buyer` (`won_buy_id`);

--
-- Indexes for table `project_report`
--
ALTER TABLE `project_report`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `report_path` (`report_path`),
  ADD UNIQUE KEY `report_id` (`report_id`),
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
  ADD KEY `staff_id` (`id_in_stf_tbl`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `staff_id` (`staff_id`),
  ADD KEY `com_id` (`com_id`),
  ADD KEY `userlogin_id` (`userlogin_id`);

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
  ADD UNIQUE KEY `vol_id` (`vol_id`),
  ADD KEY `userlogin_id` (`userlogin_id`);

--
-- Indexes for table `vol_activity`
--
ALTER TABLE `vol_activity`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `activity_id` (`activity_id`),
  ADD KEY `vol_activity_ibfk_1` (`com_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beneficiery_case`
--
ALTER TABLE `beneficiery_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commissioner`
--
ALTER TABLE `commissioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `project_report`
--
ALTER TABLE `project_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `session_incharge`
--
ALTER TABLE `session_incharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vol_activity`
--
ALTER TABLE `vol_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beneficiery_case`
--
ALTER TABLE `beneficiery_case`
  ADD CONSTRAINT `beneficiery_case_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `beneficiery_case_ibfk_2` FOREIGN KEY (`vol_id`) REFERENCES `volunteer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`buy_id`) REFERENCES `buyer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prod` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`userlogin_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `commissioner`
--
ALTER TABLE `commissioner`
  ADD CONSTRAINT `commissioner_ibfk_1` FOREIGN KEY (`userlogin_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_don_id` FOREIGN KEY (`don_id`) REFERENCES `donor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`userlogin_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `home_visit`
--
ALTER TABLE `home_visit`
  ADD CONSTRAINT `home_visit_ibfk_1` FOREIGN KEY (`vol_id`) REFERENCES `volunteer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `home_visit_assign`
--
ALTER TABLE `home_visit_assign`
  ADD CONSTRAINT `home_visit_assign_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_visit_assign_ibfk_2` FOREIGN KEY (`beneficiery_id`) REFERENCES `beneficiery_case` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_visit_assign_ibfk_3` FOREIGN KEY (`visit_id`) REFERENCES `home_visit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `leave_request_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leave_request_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `won_buyer` FOREIGN KEY (`won_buy_id`) REFERENCES `buyer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_report`
--
ALTER TABLE `project_report`
  ADD CONSTRAINT `project_report_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `project_report_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `session_incharge`
--
ALTER TABLE `session_incharge`
  ADD CONSTRAINT `session_incharge_ibfk_1` FOREIGN KEY (`id_in_stf_tbl`) REFERENCES `staff` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`userlogin_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `volunteer_ibfk_1` FOREIGN KEY (`userlogin_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vol_activity`
--
ALTER TABLE `vol_activity`
  ADD CONSTRAINT `vol_activity_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `commissioner` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
