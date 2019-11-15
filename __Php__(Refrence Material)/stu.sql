-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 03:50 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `rollno` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `marks` bigint(10) NOT NULL,
  `path` varchar(333) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `name`, `mobile_number`, `year`, `marks`, `path`) VALUES
(109, 1009, 'Mamata ', 7485966352, 'BCA 1', 754, 'image/'),
(108, 1008, 'Kamal ', 9685744152, 'BCA 1', 865, 'image/'),
(107, 1007, 'Jothi', 8596748552, 'BCA 1', 754, 'image/'),
(106, 1006, 'Hansraj', 9887455645, 'BCA 1', 785, 'image/'),
(105, 1005, 'Gaurav Sharma', 7889564585, 'BCA 1', 896, 'image/'),
(104, 1004, 'Gajender ', 8956745689, 'BCA 1', 456, 'image/'),
(103, 1003, 'Amit Sharma', 7845965689, 'BCA 1', 652, 'image/'),
(102, 1002, 'Ankit', 9314294394, 'BCA 1', 963, 'image/'),
(101, 1001, 'Ajay', 7728862103, 'BCA 1', 785, 'image/'),
(110, 1010, 'Manoj', 7790908596, 'BCA 1', 852, 'image/'),
(201, 2001, 'Mulchand Kumawat', 7485854512, 'BCA 2', 785, 'image/'),
(202, 2002, 'Neeraj ', 6585967445, 'BCA 2', 765, 'image/'),
(203, 2003, 'Prachis Kumawat', 7584958653, 'BCA 2', 754, 'image/'),
(204, 2004, 'Prakash ', 7584958695, 'BCA 2', 563, 'image/'),
(205, 2005, 'Rahul Kumawat', 6545789878, 'BCA 2', 985, 'image/'),
(206, 2006, 'Rajkumar', 7584958485, 'BCA 2', 789, 'image/'),
(207, 2007, 'Rakesh ', 7586958475, 'BCA 2', 753, 'image/'),
(208, 2008, 'Ramesh', 7575889966, 'BCA 2', 567, 'image/'),
(209, 2009, 'Rameshwar', 7741855212, 'BCA 2', 785, 'image/'),
(210, 2010, 'Sagar Jangid', 8574965241, 'BCA 2', 789, 'image/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
