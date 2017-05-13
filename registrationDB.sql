-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2017 at 10:14 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminmodule`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cuID` int(6) NOT NULL,
  `UsernameC` varchar(11) NOT NULL,
  `LastnameC` varchar(255) NOT NULL,
  `FirstnameC` varchar(255) NOT NULL,
  `Birthdate` date NOT NULL,
  `EmailC` varchar(255) NOT NULL,
  `AddressC` varchar(255) NOT NULL,
  `ContactC` int(11) NOT NULL,
  `PasswordC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cuID`, `UsernameC`, `LastnameC`, `FirstnameC`, `Birthdate`, `EmailC`, `AddressC`, `ContactC`, `PasswordC`) VALUES
(1, 'tin', 'caguioa', 'tin', '1997-09-15', 'tinz_caguioa@yahoo.com', '#252 Dontogan, Baguio City', 929044317, '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `spID` int(6) NOT NULL,
  `UsernameP` varchar(255) NOT NULL,
  `LastnameP` varchar(255) NOT NULL,
  `FirstnameP` varchar(255) NOT NULL,
  `BirthdateP` date NOT NULL,
  `serviceType` varchar(255) NOT NULL,
  `EmailP` varchar(255) NOT NULL,
  `AddressP` varchar(255) NOT NULL,
  `ContactP` int(11) NOT NULL,
  `PasswordP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cuID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cuID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
