-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 03:05 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academicsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_faculty`
--

CREATE TABLE `add_faculty` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobileno` int(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Batch` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_faculty`
--

INSERT INTO `add_faculty` (`id`, `name`, `email`, `mobileno`, `Qualification`, `Batch`, `Username`, `password`) VALUES
(1, 'abhi', 'abhi@gmail.com', 2147483647, 'Mtech', 'eee', 'abhi', 'abhi@123'),
(2, 'anisha', 'a@gmail.com', 2147483647, 'btech', 'jsd', 'anisha', 'erfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `add_student`
--

CREATE TABLE `add_student` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phoneno` int(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_student`
--

INSERT INTO `add_student` (`id`, `name`, `dob`, `gender`, `email`, `phoneno`, `Qualification`, `batch`, `username`, `password`) VALUES
(1, 'abhi', '1997', 'female', 'abhi@gmail.com', 2147483647, 'Mtech', 'eee', 'minad', 'abhi123'),
(2, 'ammu', '1997', 'female', 'abhi@gmail.com', 2147483647, 'btech', 'EEE', 'Admin', 'abhi123');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', ''),
('admin1', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `assessmentno` varchar(20) NOT NULL,
  `sub1` varchar(20) NOT NULL,
  `sub2` varchar(20) NOT NULL,
  `sub3` varchar(20) NOT NULL,
  `sub4` varchar(20) NOT NULL,
  `maxmark` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`id`, `name`, `batch`, `assessmentno`, `sub1`, `sub2`, `sub3`, `sub4`, `maxmark`) VALUES
(1, 'abhi', 'EEE', '01', '75', '60', '88', '92', '100'),
(2, 'elsa', 'cs', '02', '80', '55', '77', '90', '100');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `hour1` varchar(20) NOT NULL,
  `hour2` varchar(20) NOT NULL,
  `hour3` varchar(20) NOT NULL,
  `hour4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `name`, `batch`, `hour1`, `hour2`, `hour3`, `hour4`) VALUES
(1, 'abhi', 'eee', 'pgt', 'pe', 'psa', 'dsp'),
(2, 'Abhirami ps', 'EEE', 'power system', 'digital', 'power generation', 'signals'),
(3, 'adarsh', 'EEE', 'power system', 'digital', 'power generation', 'signals'),
(4, 'anandhan', 'EEE', 'power system', 'digital', 'power generation', 'signals'),
(5, 'nami', 'EEE', 'power system', 'digital', 'power generation', 'signals');

-- --------------------------------------------------------

--
-- Table structure for table `facleave`
--

CREATE TABLE `facleave` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `leaveid` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facleave`
--

INSERT INTO `facleave` (`id`, `name`, `leaveid`, `reason`, `status`) VALUES
(1, 'ammu', '01', 'fever', 'pending'),
(2, 'abhi', '02', 'fever', 'pending'),
(3, 'abhi', '01', 'fever', 'pending'),
(4, 'abhi', '01', 'fever', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `stuleave`
--

CREATE TABLE `stuleave` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `leaveid` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuleave`
--

INSERT INTO `stuleave` (`id`, `name`, `leaveid`, `reason`, `status`) VALUES
(1, 'abhi', '01', 'fever', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_faculty`
--
ALTER TABLE `add_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_student`
--
ALTER TABLE `add_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facleave`
--
ALTER TABLE `facleave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stuleave`
--
ALTER TABLE `stuleave`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_faculty`
--
ALTER TABLE `add_faculty`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `add_student`
--
ALTER TABLE `add_student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facleave`
--
ALTER TABLE `facleave`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stuleave`
--
ALTER TABLE `stuleave`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
