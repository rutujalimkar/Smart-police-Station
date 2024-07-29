-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 07:52 PM
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
-- Database: `digital_police_station`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident_cases`
--

CREATE TABLE `accident_cases` (
  `id` int(11) NOT NULL,
  `police_station_id` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `vehical_no` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accident_cases`
--

INSERT INTO `accident_cases` (`id`, `police_station_id`, `photo`, `vehical_no`, `status`) VALUES
(1, '1', '1.jpg', 'mh 12 tx 1212', 1),
(2, '1', '2.jpg', 'mh 12 jhb ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `m_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `your_address` text NOT NULL,
  `c_f_name` varchar(200) NOT NULL,
  `c_m_name` varchar(200) NOT NULL,
  `c_l_name` varchar(200) NOT NULL,
  `c_address` text NOT NULL,
  `complaint` text NOT NULL,
  `your_mobile` varchar(200) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `f_name`, `m_name`, `l_name`, `your_address`, `c_f_name`, `c_m_name`, `c_l_name`, `c_address`, `complaint`, `your_mobile`, `status`) VALUES
(1, 'adasd', 'das', 'sadasdasd', 'sadas', 'das', 'dasd', 'asdas', 'das', 'dasd', 'asd', 0),
(2, 'asa', 'asas', 'asas', 'sas', 'asa', 'sas', 'aas', 'as', 'as', 'as', 1),
(3, 'sdsa', 'dsad', 'sadsa', 'dsad', 'sad', 'sadsa', 'dsad', 'sad', 'sads', 'ad', 0),
(4, 'sdsad', 'sds', 'adsad', 'sad', 'sad', 'sad', 'sad', 'sad', 'sds', 'dsad', 0);

-- --------------------------------------------------------

--
-- Table structure for table `festival_permission`
--

CREATE TABLE `festival_permission` (
  `id` int(11) NOT NULL,
  `police_station_id` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `permission_date` varchar(100) NOT NULL,
  `permission_for` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `festival_permission`
--

INSERT INTO `festival_permission` (`id`, `police_station_id`, `name`, `address`, `permission_date`, `permission_for`, `description`, `status`) VALUES
(1, '1', 'ffdf', 'dfd', '12 ', 'Ganesh festival', 'sadsad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `fir_id` int(11) NOT NULL,
  `police_station_id` varchar(500) NOT NULL,
  `victim_name` varchar(500) NOT NULL,
  `compaint_type` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `compaint_person_name` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`fir_id`, `police_station_id`, `victim_name`, `compaint_type`, `description`, `compaint_person_name`, `address`, `status`) VALUES
(1, 'Pune', 'asas', 'Complaint Type:', 'sas', 'asas', 'ass', 0),
(2, '2', 'dadss', 'Complaint Type:', 'sdsa', 'dsad', 'asdsa', 1),
(3, '6', 'sdsa', 'Beating', 'sd', 'sads', 'adsad', 0),
(4, '4', 'sds', 'Complaint Type:', 'sds', 'dsd', 'sad', 0);

-- --------------------------------------------------------

--
-- Table structure for table `missing_person`
--

CREATE TABLE `missing_person` (
  `missing_person_id` int(11) NOT NULL,
  `police_Station_name` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `age` varchar(500) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `skine_tone` varchar(500) NOT NULL,
  `height` varchar(500) NOT NULL,
  `body_type` varchar(500) NOT NULL,
  `wearing` varchar(500) NOT NULL,
  `missing_data` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missing_person`
--

INSERT INTO `missing_person` (`missing_person_id`, `police_Station_name`, `name`, `age`, `gender`, `skine_tone`, `height`, `body_type`, `wearing`, `missing_data`, `photo`, `status`) VALUES
(1, '1', 'Screenshot (14).png', '232', 'Male', 'dsad', '33', 'dsf', 'dsfd', 'dsfsd', '4.jpg', 1),
(2, '1', 'Screenshot (328).png', '435', 'Male', 'fds', '43', 'd', 'dsf', 'dsfs', '3.jpg', 1),
(3, '1', 'Screenshot (12).png', 'rewr', 'Male', 'ewrwe', 'rwer', 'werwe', 'ewrwe', 'er', '2.jpg', 1),
(4, '1', 'sdf', 'sdfsd', 'Male', 'dsfsd', 'fsdf', 'dsf', 'sdf', 'sdfsd', '1.jpg', 1),
(5, '1', 'xxzcxz', 'xcxz', 'Male', 'xcxz', 'xcxzc', 'xzcz', 'xzcz', 'xcxz', '5.jpg', 1),
(6, '1', 'xxzcxz', 'xcxz', 'Male', 'xcxz', 'xcxzc', 'xzcz', 'xzcz', 'xcxz', '6.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `most_wanted`
--

CREATE TABLE `most_wanted` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `age` varchar(500) NOT NULL,
  `skinetone` varchar(500) NOT NULL,
  `hair` varchar(500) NOT NULL,
  `body` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `most_wanted`
--

INSERT INTO `most_wanted` (`id`, `name`, `age`, `skinetone`, `hair`, `body`, `description`, `photo`, `status`) VALUES
(1, 'ssad', 'sadda', 'dsad', 'sad', 'sad', 'He is most wanted in amritsar for his involment in roberries and drug smugling, he is memebr of ... gang', '1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `police_station_id` int(11) NOT NULL,
  `police_station_name` varchar(500) NOT NULL,
  `user_name` text NOT NULL,
  `password` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`police_station_id`, `police_station_name`, `user_name`, `password`, `address`, `status`) VALUES
(2, 'Chaturshringi Police Station - Pune', 'chaturshringi', 'password', 'Pune', 1),
(3, 'Wakad\r\nPolice Station', 'wakad_police', 'password', 'Rajiv Gandhi Infotech Park Phase 1 Hinjewadi\r\nDist Mulshi Pune 411057', 1),
(4, 'Sangavi\r\nPolice Station', 'sangavi', 'password', 'Sangavi Police Station, Sai chouk navi\r\nSangavi. Pimpari chinchavad corporetion', 1),
(5, 'Hinjewadi\r\nPolice Station\r\n', 'hinjewadi', 'password', 'Rajiv Gandhi Infotech Park, Hinjewadi, TalMulshi Pune.', 1),
(6, 'Pimpri\r\nPolice Station', '', 'password', 'In Front of Pune Chinchwad Teliphone\r\nExchange,Pune-Mumbai\r\nRoad,Chinchwad,Pune-411019.', 1),
(7, 'Chinchwad\r\nPolice Station', '', 'password', 'Chafekar Chowk, In front Of Dr.kamat\r\nHospital Near Chinchavad Bhaji Mandai,Pune33\r\n', 1),
(8, ' Nigadi\r\nPolice Station', '', 'password', 'Sec. No-24, Near Dada Dadi Garden, Nigadi\r\nPradhikaran, Pune.', 1),
(9, ' Bhosari\r\nPolice Station', '', 'password', 'Near C.I.R.T.Nashik Rod Bhosari Pune.', 1),
(10, 'MIDC Bhosari\r\nPolice Station', '', 'password', 'Culter Crest, Sector No. - 6, M-4 Spine City\r\nRoad, Moshi Pradhikaran, Pune 412105\r\n', 1),
(11, 'Yerawada\r\nPolice Station', '', 'password', 'Shashtrinagar Chowk,Yerawada,Pune.', 1),
(12, 'Vimantal\r\nPolice Station', '', 'password', 'Satyam Aarked Building,Ramwadi,Pune.', 1),
(13, 'Vishrantwadi\r\nPolice Station', '', 'password', 'Vishrantwadi Police Station, Survey No-90,\r\nPune Alandi Road, Mental Corner, Yerawada ,\r\nPune.\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unidentified_dead_bodies`
--

CREATE TABLE `unidentified_dead_bodies` (
  `id` int(11) NOT NULL,
  `age` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `skinetone` varchar(500) NOT NULL,
  `height` varchar(500) NOT NULL,
  `body_type` varchar(500) NOT NULL,
  `wearing` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unidentified_dead_bodies`
--

INSERT INTO `unidentified_dead_bodies` (`id`, `age`, `gender`, `skinetone`, `height`, `body_type`, `wearing`, `photo`, `status`) VALUES
(1, 'sdsd', 'sdsd', 'asd', 'ad', 'sad', 'sad', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `password`, `user_type`, `status`) VALUES
(1, 'admin', 'password', 'user', 1),
(2, 'milind', 'password', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident_cases`
--
ALTER TABLE `accident_cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `festival_permission`
--
ALTER TABLE `festival_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`fir_id`);

--
-- Indexes for table `missing_person`
--
ALTER TABLE `missing_person`
  ADD PRIMARY KEY (`missing_person_id`);

--
-- Indexes for table `most_wanted`
--
ALTER TABLE `most_wanted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`police_station_id`);

--
-- Indexes for table `unidentified_dead_bodies`
--
ALTER TABLE `unidentified_dead_bodies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident_cases`
--
ALTER TABLE `accident_cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `festival_permission`
--
ALTER TABLE `festival_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fir`
--
ALTER TABLE `fir`
  MODIFY `fir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `missing_person`
--
ALTER TABLE `missing_person`
  MODIFY `missing_person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `most_wanted`
--
ALTER TABLE `most_wanted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `police_station`
--
ALTER TABLE `police_station`
  MODIFY `police_station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `unidentified_dead_bodies`
--
ALTER TABLE `unidentified_dead_bodies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
