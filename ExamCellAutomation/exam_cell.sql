-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 07:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_cell`
--

-- --------------------------------------------------------

--
-- Table structure for table `hallticket`
--

CREATE TABLE `hallticket` (
  `id` int(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Level` int(10) NOT NULL,
  `Semester` int(10) NOT NULL,
  `SeatNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `hallticket`
--

INSERT INTO `hallticket` (`id`, `FirstName`, `LastName`, `Level`, `Semester`, `SeatNumber`) VALUES
(2017001, 'abdelrahman', 'sobhy', 2, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `stuId` int(10) DEFAULT NULL,
  `Semester` int(10) NOT NULL,
  `sub1` varchar(20) NOT NULL DEFAULT 'Not-added',
  `sub1GD` varchar(11) DEFAULT 'Not-added',
  `sub2` varchar(20) NOT NULL DEFAULT 'Not-added',
  `sub2GD` varchar(11) DEFAULT 'Not-added',
  `sub3` varchar(20) NOT NULL DEFAULT 'Not-added',
  `sub3GD` varchar(11) DEFAULT 'Not-added',
  `sub4` varchar(20) DEFAULT 'Not-added',
  `sub4GD` varchar(11) DEFAULT 'Not-added',
  `sub5` varchar(20) NOT NULL DEFAULT 'Not-added',
  `sub5GD` varchar(11) DEFAULT 'Not-added',
  `sub6` varchar(20) NOT NULL DEFAULT 'Not-added',
  `sub6GD` varchar(11) DEFAULT 'Not-added',
  `sub7` varchar(20) NOT NULL DEFAULT 'Not-added',
  `sub7GD` varchar(11) DEFAULT 'Not-added'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`stuId`, `Semester`, `sub1`, `sub1GD`, `sub2`, `sub2GD`, `sub3`, `sub3GD`, `sub4`, `sub4GD`, `sub5`, `sub5GD`, `sub6`, `sub6GD`, `sub7`, `sub7GD`) VALUES
(2017001, 4, 'ds', '90', 'cs', '80', 'os', '70', 'ir', '90', 'is', '60', 'dc', '80', 'pl', '50');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `un` varchar(100) NOT NULL,
  `ps` varchar(100) NOT NULL,
  `jop` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`un`, `ps`, `jop`) VALUES
('admin', '0000', 'ad'),
('2017001', '2018', 'st');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `PhoneNumber` int(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Level` varchar(100) NOT NULL,
  `Semester` varchar(100) NOT NULL,
  `image` blob NOT NULL,
  `id` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL DEFAULT 'Not-added'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`FirstName`, `LastName`, `EmailAddress`, `PhoneNumber`, `Address`, `Level`, `Semester`, `image`, `id`, `pass`) VALUES
('abdelrahman', 'sobhy', 'abdosobhy1200@gmail.com', 1017102408, 'NasrCity', '2', '4', 0x494d475f32303138303932375f3232333932372e6a7067, 2017001, '2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hallticket`
--
ALTER TABLE `hallticket`
  ADD PRIMARY KEY (`SeatNumber`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hallticket`
--
ALTER TABLE `hallticket`
  MODIFY `SeatNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2017002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
