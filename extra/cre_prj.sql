-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2020 at 10:20 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cre_prj`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_tbl`
--

CREATE TABLE `area_tbl` (
  `id` int(11) NOT NULL,
  `areaname` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_tbl`
--

INSERT INTO `area_tbl` (`id`, `areaname`, `cid`, `sid`, `doi`, `dou`, `isactive`) VALUES
(1, 'Vastral', 1, 2, '0000-00-00', '0000-00-00', 1),
(2, 'Narada', 1, 2, '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city_tbl`
--

CREATE TABLE `city_tbl` (
  `id` int(11) NOT NULL,
  `cityname` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_tbl`
--

INSERT INTO `city_tbl` (`id`, `cityname`, `sid`, `isactive`, `doi`, `dou`) VALUES
(1, 'Ahmedabad', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Bhopal', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Agra', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'rajkot', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Paris', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'ad', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clg_tbl`
--

CREATE TABLE `clg_tbl` (
  `clg_id` int(11) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_tbl`
--

INSERT INTO `clg_tbl` (`clg_id`, `clg_name`, `email`, `password`, `doi`, `dou`, `isactive`) VALUES
(0, 'ggp', 'ggp@gmail.com', '123', '2022-02-20', '0000-00-00', 1),
(0, 'gp@gmail.com', 'g@gmail.com', '123', '2022-02-20', '0000-00-00', 1),
(0, 'gggp', 'gggp@gmail.com', '123', '2022-02-20', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cmp_tbl`
--

CREATE TABLE `cmp_tbl` (
  `cmp_id` int(11) NOT NULL,
  `cmp_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmp_tbl`
--

INSERT INTO `cmp_tbl` (`cmp_id`, `cmp_name`, `email`, `password`, `doi`, `dou`, `isactive`) VALUES
(1, 'creart', 'c@gmail.com', '123', '2022-02-20', '0000-00-00', 1),
(2, 'creart', 'c@gmail.com', '123', '2022-02-20', '0000-00-00', 1),
(3, 'TCS', 't@gmail.com', '123', '2022-02-20', '0000-00-00', 1),
(4, 'Rel', 'r@gmail.com', '123', '2022-02-20', '0000-00-00', 1),
(5, 'tcs', 'tcs@gmail.com', '123', '2022-02-20', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recruitment_post`
--

CREATE TABLE `recruitment_post` (
  `post_id` int(20) NOT NULL,
  `post_description` varchar(500) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `cmp_name` varchar(100) NOT NULL,
  `company_type` varchar(50) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `position` int(11) NOT NULL,
  `vacancy` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruitment_post`
--

INSERT INTO `recruitment_post` (`post_id`, `post_description`, `cmp_id`, `cmp_name`, `company_type`, `job_type`, `position`, `vacancy`, `doi`, `dou`, `isactive`) VALUES
(1, 'sdf', 3, 'tcs', 'IT', 'Frontend Developer', 2, 5, '2022-02-20', '0000-00-00', 1),
(2, 'qwerty', 1, 'Creart', 'IT', 'Senior Developer', 3, 20, '2025-02-20', '0000-00-00', 1),
(3, 'azsdsv', 0, 'IS', 'IT', 'Junior Designer', 2, 50, '2005-03-20', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE `state_tbl` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`id`, `sname`, `isactive`, `doi`, `dou`) VALUES
(1, 'GUJARAT', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'MP', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'UP', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Uttar Pradesh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'snm', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Utah', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `firstname`, `email`, `password`, `profilepic`, `user_type`, `isactive`, `doi`, `dou`) VALUES
(1, 'Demo Admin', 'admin@gmail.com', '123', 'avatar.png', 2, 1, '2012-11-19 07:46:12', '0000-00-00 00:00:00'),
(2, 'Pankaj demo', 'pan@gmail.com', '123456', 'Inara Hair & Beauty - Final Logo - Dark.png', 1, 1, '2012-11-19 07:52:49', '0000-00-00 00:00:00'),
(3, 'Pankaj Suthar', 'pa@gmail.com', '123456', 'download.jpg', 1, 1, '2012-11-19 07:56:42', '0000-00-00 00:00:00'),
(4, 'Nimish', 'nimish@gmail.com', '123456', 'avatar.png', 1, 1, '2012-11-19 07:57:52', '0000-00-00 00:00:00'),
(5, 'Krishna', 'guptakms@gmail.com', '123', 'avatar.png', 1, 1, '2013-11-19 15:03:23', '0000-00-00 00:00:00'),
(6, 'Fenil', 'fenil@gmail.com', '123', 'Comingsoon1_1-crop.jpg', 1, 1, '2014-11-19 08:14:33', '0000-00-00 00:00:00'),
(7, 'Krishna', 'krishna@gmail.com', '123', 'avatar.png', 1, 1, '2019-12-19 06:26:26', '0000-00-00 00:00:00'),
(8, 'kashyap', 'k@gmail.com', '123', 'avatar.png', 1, 1, '2023-12-19 07:39:31', '0000-00-00 00:00:00'),
(9, 'avatar', 'av@gmail.com', '123', 'Inara Hair & Beauty - Final Logo - Dark.png', 1, 1, '2010-01-20 06:58:36', '0000-00-00 00:00:00'),
(10, 'Km', 'km@gmail.com', '123', 'Preview.jpeg', 1, 1, '2010-01-20 10:49:30', '0000-00-00 00:00:00'),
(11, 'abc', 'a@gmail.com', '123', '12345.jpg', 1, 1, '2022-02-20 09:02:49', '0000-00-00 00:00:00'),
(12, 'asd', 'a@gmail.com', '123', '20618.jpg', 1, 1, '2022-02-20 09:02:02', '0000-00-00 00:00:00'),
(13, 'asd', 'asd@gmail.com', '123', '20618.jpg', 1, 1, '2022-02-20 09:02:49', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_tbl`
--
ALTER TABLE `area_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_tbl`
--
ALTER TABLE `city_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmp_tbl`
--
ALTER TABLE `cmp_tbl`
  ADD PRIMARY KEY (`cmp_id`);

--
-- Indexes for table `recruitment_post`
--
ALTER TABLE `recruitment_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_tbl`
--
ALTER TABLE `area_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city_tbl`
--
ALTER TABLE `city_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cmp_tbl`
--
ALTER TABLE `cmp_tbl`
  MODIFY `cmp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recruitment_post`
--
ALTER TABLE `recruitment_post`
  MODIFY `post_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state_tbl`
--
ALTER TABLE `state_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
