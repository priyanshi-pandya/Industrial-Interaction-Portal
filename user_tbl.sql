-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 07:29 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

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
(7, 'Trisha', 'trisha@gmail.com', '123', 'VhyyVwTnbyd6OQTi.jpg', 'Resume_sample.docx', 1, 1, '2007-03-20 07:03:55', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
