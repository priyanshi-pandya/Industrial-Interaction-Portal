-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 11:08 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

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
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `clg_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `cmp_name` varchar(1000) NOT NULL,
  `message` mediumtext NOT NULL,
  `isactive` int(2) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `clg_id`, `cmp_id`, `cmp_name`, `message`, `isactive`, `doi`, `dou`) VALUES
(1, 1, 1, 'CREART Solutions', 'Please conduct a seminar for our students.', 0, '2012-03-20 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 3, 'TCS', 'Please conduct a seminar for our students', 1, '2012-03-20 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 1, 'CREART Solutions', 'Please conduct a workshop for our students', 0, '2014-03-20 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 3, 'TCS', 'Please conduct a seminar for our students.', 0, '2014-03-20 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 3, 'TCS', 'Please conduct a workshop for our students.', 0, '2014-03-20 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 1, 'CREART Solutions', 'Please conduct a workshop for our students.', 0, '2014-03-20 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `cmp_id`, `post_id`, `uid`, `isactive`, `doi`, `dou`) VALUES
(1, 1, 1, 3, 1, '2007-03-20', '0000-00-00'),
(2, 3, 4, 2, 1, '2007-03-20', '0000-00-00'),
(3, 1, 5, 4, 1, '2007-03-20', '0000-00-00'),
(4, 1, 1, 4, 1, '2007-03-20', '0000-00-00'),
(5, 1, 4, 4, 1, '2007-03-20', '0000-00-00'),
(6, 3, 7, 8, 1, '2008-03-20', '0000-00-00'),
(7, 3, 3, 7, 1, '2008-03-20', '0000-00-00'),
(8, 3, 8, 3, 1, '2012-03-20', '0000-00-00'),
(9, 3, 9, 3, 1, '2012-03-20', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `area_tbl`
--

CREATE TABLE `area_tbl` (
  `id` int(11) NOT NULL,
  `areaname` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_tbl`
--

INSERT INTO `area_tbl` (`id`, `areaname`, `cid`, `sid`, `doi`, `dou`, `isactive`) VALUES
(1, 'New Naroda', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'Sabarmati', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'Kashi', 5, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

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
(5, 'Varanasi', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Surat', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Udaipur', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clg_tbl`
--

CREATE TABLE `clg_tbl` (
  `clg_id` int(11) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_tbl`
--

INSERT INTO `clg_tbl` (`clg_id`, `clg_name`, `email`, `password`, `doi`, `dou`, `isactive`) VALUES
(1, 'Government Girls Polytechnic', 'ggp@gmail.com', '123', '2015-02-20 09:02:37', '0000-00-00 00:00:00', 1),
(2, 'Government Polytechnic', 'gp@gmail.com', '123', '2015-02-20 11:02:18', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cmp_tbl`
--

CREATE TABLE `cmp_tbl` (
  `cmp_id` int(11) NOT NULL,
  `cmp_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmp_tbl`
--

INSERT INTO `cmp_tbl` (`cmp_id`, `cmp_name`, `email`, `password`, `doi`, `dou`, `isactive`) VALUES
(1, 'CREART Solutions', 'creart@gmail.com', '123', '2020-02-15 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'TCS', 'tcs@gmail.com', '123', '2015-02-20 11:02:58', '0000-00-00 00:00:00', 1);

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
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruitment_post`
--

INSERT INTO `recruitment_post` (`post_id`, `post_description`, `cmp_id`, `cmp_name`, `company_type`, `job_type`, `position`, `vacancy`, `doi`, `dou`, `isactive`) VALUES
(1, 'kjhnasjdisurliessgv', 1, 'CREART Solutions', 'IT', 'Junior Designer', 1, 10, '2022-02-20 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'khsagfygwfywleiuf', 3, 'TCS', 'IT', 'Senior Developer', 2, 50, '2022-02-20 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'ihwoiffhoegjo', 3, 'TCS', 'IT', 'Manager', 3, 5, '2025-02-20 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'gidiwddwp9dpujopciuj', 1, 'CREART Solutions', 'IT', 'Senior Developer', 1, 20, '2025-02-20 00:00:00', '0000-00-00 00:00:00', 1),
(5, 'uwtyeirurfiow', 1, 'CREART Solutions', 'IT', 'Frontend Developer', 1, 13, '2025-02-20 00:00:00', '0000-00-00 00:00:00', 1),
(6, 'dfhrthrtth', 3, 'TCS', 'IT', 'Mid Level Designer', 1, 25, '2025-02-20 00:00:00', '0000-00-00 00:00:00', 0),
(7, 'gtkiuloo', 3, 'TCS', 'IT', 'Senior Developer', 0, 2, '2008-03-20 00:00:00', '0000-00-00 00:00:00', 1),
(8, 'jutgiyigfiwef', 3, 'TCS', 'IT', 'Frontend Developer', 0, 4, '2012-03-20 00:00:00', '0000-00-00 00:00:00', 1),
(9, 'khloi', 3, 'TCS', 'IT', 'Manager', 0, 1, '2012-03-20 00:00:00', '0000-00-00 00:00:00', 1),
(10, 'GUGYWYGBUGO', 1, 'CREART Solutions', 'Marketing', 'Frontend Developer', 0, 10, '2014-03-20 00:00:00', '0000-00-00 00:00:00', 0);

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
(1, 'GUJARAT', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'MP', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'UP', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Uttar Pradesh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Rajasthan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `resume` varchar(5000) NOT NULL,
  `user_type` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `firstname`, `email`, `password`, `profilepic`, `resume`, `user_type`, `isactive`, `doi`, `dou`) VALUES
(1, 'admin', 'admin@gmail.com', '123', '', '', 2, 1, '2020-03-06 00:00:00', '0000-00-00 00:00:00'),
(2, 'Madhuri', 'madhuri@gmail.com', '123', 'logo - Copy (2).png', 'vandana_resume.docx', 1, 1, '2006-03-20 12:03:08', '0000-00-00 00:00:00'),
(3, 'Tripti', 'tripti@gmail.com', '123', '20141116_194011-1.jpg', 'niraj 1.pdf', 1, 1, '2006-03-20 12:03:33', '0000-00-00 00:00:00'),
(4, 'Priyanshi', 'pri@gmail.com', '123', '20150503_092108.jpg', 'Ram Resume New.docx', 1, 1, '2006-03-20 12:03:49', '0000-00-00 00:00:00'),
(5, 'Madhu', 'madhu@gmail.com', '123', 'back.jpg', 'Resume_sample.docx', 1, 1, '2006-03-20 12:03:36', '0000-00-00 00:00:00'),
(6, 'rajesh', 'rajesh@creatt.in', '123', 'avatar.png', '', 1, 1, '2006-03-20 13:03:47', '0000-00-00 00:00:00'),
(7, 'Trisha', 'trisha@gmail.com', '123', 'VhyyVwTnbyd6OQTi.jpg', 'Resume_sample.docx', 1, 1, '2007-03-20 07:03:55', '0000-00-00 00:00:00'),
(8, 'Vandana Sharma', 'vandana@gmail.com', '123', '20160502_140655.jpg', 'niraj 1.pdf', 1, 1, '2008-03-20 18:03:34', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `clg_tbl`
--
ALTER TABLE `clg_tbl`
  ADD PRIMARY KEY (`clg_id`);

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
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `area_tbl`
--
ALTER TABLE `area_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `city_tbl`
--
ALTER TABLE `city_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clg_tbl`
--
ALTER TABLE `clg_tbl`
  MODIFY `clg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cmp_tbl`
--
ALTER TABLE `cmp_tbl`
  MODIFY `cmp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recruitment_post`
--
ALTER TABLE `recruitment_post`
  MODIFY `post_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `state_tbl`
--
ALTER TABLE `state_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
