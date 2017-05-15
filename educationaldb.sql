-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 09:40 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educationaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cureq`
--

CREATE TABLE `cureq` (
  `cuID` int(11) NOT NULL,
  `reqID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cureq`
--

INSERT INTO `cureq` (`cuID`, `reqID`) VALUES
(1, 2),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `cusp`
--

CREATE TABLE `cusp` (
  `cuID` int(11) NOT NULL,
  `spID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cuID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text,
  `Birthdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cuID`, `Image`, `UserName`, `FirstName`, `LastName`, `ContactNumber`, `Password`, `Email`, `Address`, `Birthdate`) VALUES
(11, '', 'Wan', 'Juan', 'Cruz', '09786543455', '827ccb0eea8a706c4c34a16891f84e7b', 'wan@outlook.com', '#25 Leonila Hill, Baguio CIty', '1998-05-11'),
(12, '', 'Lila', 'Mariella', 'Fern', '09887889879', 'cfe53f93c6e9817fbe292bbf20ed6e9c', 'lal@yahoo.com', '#19 Loakan, Baguio City', '1972-05-23'),
(13, '', 'Abo', 'Averey', 'Mas', '09897711278', '58abe46d24b3b48884e4e019d70bdf0f', 'abo@google.com', '#289 Quirino, Baguio City', '1989-05-20'),
(14, '', 'John', 'Jin', 'Dulse', '09678811876', 'eca8a799a8b0306fca0200fbdf8d3e15', 'dulse@gmail.com', '#1 Bonifacio Rd., Baguio City', '1980-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `reqID` int(11) NOT NULL,
  `reqDate` date NOT NULL,
  `spID` int(11) NOT NULL,
  `serviceType` varchar(45) NOT NULL,
  `status` enum('pending','confirmed','declined','cancelled') NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`reqID`, `reqDate`, `spID`, `serviceType`, `status`, `last_updated`) VALUES
(1, '2017-05-12', 1, 'service 1', 'cancelled', '2017-05-12 07:34:59'),
(2, '2017-05-12', 2, 'service 2', 'pending', '2017-05-12 07:34:59'),
(3, '2017-05-12', 3, 'English 1', 'cancelled', '2017-05-12 07:34:59'),
(4, '2017-05-12', 6, 'Science 2', 'confirmed', '2017-05-12 07:58:33'),
(5, '2017-05-12', 7, 'Social Studies 1', 'pending', '2017-05-12 07:34:59'),
(6, '2017-05-12', 5, 'Science 1', 'cancelled', '2017-05-12 07:34:59');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `spID` int(11) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `FirstName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `ContactNumber` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Service` varchar(45) NOT NULL,
  `Category` enum('math','english','science','socialstudies') NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Birthdate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`spID`, `Username`, `FirstName`, `LastName`, `ContactNumber`, `Password`, `Service`, `Category`, `Email`, `Address`, `Birthdate`) VALUES
(11, 'Nat', 'Nathan', 'Calims', '09678876543', '1404834e52a4c6cac9444f1fb3c62d3c', 'English subject tutorial', '', 'nat@yahoo.com', '#123 Trancoville, Baguio City', '1991-05-24'),
(12, 'Mel', 'Mel', 'Mel', '09778654567', '983346d65de8c114c6c8c9019ceac78b', 'Cheese Cake tutorial', '', 'mel@google.com', '#67 Bakakeng, Baguio City', '1990-05-26'),
(13, 'Sada', 'Qeu', 'Sada', '09345547789', '827ccb0eea8a706c4c34a16891f84e7b', 'Gong tutotial', '', 'que@gmail.com', '#345 Navy Base, Baguio City', '1992-02-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cureq`
--
ALTER TABLE `cureq`
  ADD KEY `cuID_idx` (`cuID`),
  ADD KEY `reqID_idx` (`reqID`);

--
-- Indexes for table `cusp`
--
ALTER TABLE `cusp`
  ADD KEY `cuID_idx` (`cuID`),
  ADD KEY `spID_idx` (`spID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cuID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`reqID`),
  ADD KEY `spID_idx` (`spID`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`spID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `reqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `spID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
