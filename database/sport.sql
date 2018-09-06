-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 10:54 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(35) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin'),
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(35) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` double NOT NULL,
  `password` varchar(255) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `game` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob_year` varchar(10) NOT NULL,
  `dob_month` varchar(10) NOT NULL,
  `dob_date` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `password`, `branch`, `year`, `game`, `gender`, `dob_year`, `dob_month`, `dob_date`) VALUES
(1, 'shubham', 'Shubham@gmail.com', 9917993860, '81dc9bdb52d04dc20036dbd8313ed055', 'MCA', '1st', 'Cricket', 'male', '1980', 'January', '01'),
(2, 'Ankur Singh', 'ankur@gmail.com', 9838971368, '202cb962ac59075b964b07152d234b70', 'EC', '4th', 'Basketball', 'male', '1995', 'July', '15'),
(3, 'Malilka', 'mallika@gmail.com', 7567891235, '202cb962ac59075b964b07152d234b70', 'ME', '3rd', 'Badminton', 'male', '1997', 'June', '12'),
(4, 'Rajesh', 'rajesh@gmail.com', 9917799387, '81dc9bdb52d04dc20036dbd8313ed055', 'MCA', '1st', 'Cricket', 'male', '1987', 'April', '05'),
(5, 'komal', 'komal@gmail.com', 9917993860, '81dc9bdb52d04dc20036dbd8313ed055', 'MBA', '2nd', 'Football', 'male', '1980', 'January', '01'),
(6, 'Shyam', 'shyam@gmail.com', 7037037877, '81dc9bdb52d04dc20036dbd8313ed055', 'MBA', '2nd', 'Football', 'male', '1995', 'September', '02'),
(7, 'Raju', 'raju@gmail.com', 9917993860, '81dc9bdb52d04dc20036dbd8313ed055', 'B.Pharma', '3rd', 'Vollyball', 'male', '1980', 'January', '01'),
(8, 'Om', 'om@gmail.com', 8974568512, '81dc9bdb52d04dc20036dbd8313ed055', 'B.Pharma', '3rd', 'Vollyball', 'male', '1984', 'April', '04'),
(9, 'omprakash', 'om@gmail.com', 9856741235, '81dc9bdb52d04dc20036dbd8313ed055', 'CS', '4th', 'Table Tennis', 'male', '1980', 'January', '01'),
(10, 'suraj', 'suraj@gmail.com', 7835964125, '202cb962ac59075b964b07152d234b70', 'CS', '4th', 'Table Tennis', 'male', '1998', 'October', '17'),
(11, 'Kumar', 'kumar@gmail.com', 9917993860, '202cb962ac59075b964b07152d234b70', 'IT', '2nd', 'Pool', 'male', '1980', 'January', '02'),
(12, 'Pandey Ji', 'pandey@gmail.com', 8974561235, '202cb962ac59075b964b07152d234b70', 'CIVIL', '4th', 'Lawn Tennis', 'male', '1993', 'September', '02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
