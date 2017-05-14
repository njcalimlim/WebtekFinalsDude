-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 11:52 PM
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
(1, '', 'username', 'Warlick', 'Verlene', '2147483647', 'password', 'email@email.cm', 'Baguio City', '2017-05-16'),
(2, '', 'sagada', 'Kevin James', 'Dilem', '8888888', 'sagada', 'kevinjames@gmail.com', 'Sagada, Mt. Province', '2017-05-16');

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
(1, 'user1', 'Altha', 'Seyler', '09999999', 'pass1', 'service 1', 'math', 'email@email.cm', 'Baguio City', '2017-05-16'),
(2, 'service1', 'service provider 1', 'service', '09324324', 'service1', 'service 2', 'math', 'email@email.cm', 'Baguio City', '2017-05-18'),
(3, 'usere1', 'fne1', 'lne1', '091232343', 'passe1', 'English 1', 'english', 'e1@email.com', 'Baguio City', 'today'),
(4, 'usere2', 'fne2', 'lne2', '091232343', 'passe2', 'English 2', 'english', 'e2@email.com', 'Baguio City', 'TOday'),
(5, 'users1', 'fns1', 'lns1', '019233243', 'passs1', 'Science 1', 'science', 's1@email.com', 'Baguio City', 'Today'),
(6, 'users2', 'fns2', 'lns2', '0923445', 'passs2', 'Science 2', 'science', 's2@email.com', 'Baguio City', 'today'),
(7, 'userss1', 'fnss1', 'lnss1', '0234934573', 'passs1', 'Social Studies 1', 'socialstudies', 'ss2@email.com', 'Baguio City', 'Today'),
(8, 'userss2', 'fnss2', 'lnss2', '09344757634', 'passs2', 'Social Studies 2', 'socialstudies', 'ss2@email.com', 'Baguio City', 'Today');

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
  MODIFY `cuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `reqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `spID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
