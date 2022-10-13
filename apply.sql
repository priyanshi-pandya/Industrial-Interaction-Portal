-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 10:01 AM
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
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `cmp_id`, `uid`, `isactive`, `doi`, `dou`) VALUES
(1, 3, 3, 1, '2020-03-06', '0000-00-00'),
(2, 3, 1, 1, '2020-03-06', '0000-00-00'),
(3, 3, 1, 1, '2020-03-06', '0000-00-00'),
(4, 3, 3, 1, '2020-03-06', '0000-00-00'),
(5, 3, 3, 1, '2020-03-06', '0000-00-00'),
(6, 0, 2, 1, '2007-03-20', '0000-00-00'),
(7, 0, 2, 1, '2007-03-20', '0000-00-00'),
(8, 0, 2, 1, '2007-03-20', '0000-00-00'),
(9, 0, 2, 1, '2007-03-20', '0000-00-00'),
(10, 0, 2, 1, '2007-03-20', '0000-00-00'),
(11, 3, 2, 1, '2007-03-20', '0000-00-00'),
(12, 3, 2, 1, '2007-03-20', '0000-00-00'),
(13, 1, 7, 1, '2007-03-20', '0000-00-00'),
(14, 6, 7, 1, '2007-03-20', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
