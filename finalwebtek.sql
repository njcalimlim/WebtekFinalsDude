-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 09:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finalwebtek`
--

-- --------------------------------------------------------

--
-- Table structure for table `serviceinfo`
--

CREATE TABLE IF NOT EXISTS `serviceinfo` (
  `ServiceId` int(6) NOT NULL,
  `ServiceDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE IF NOT EXISTS `serviceprovider` (
  `providerID` int(11) NOT NULL,
  `ServiceDescription` text NOT NULL,
  `Field` varchar(100) NOT NULL,
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`providerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `UserType` enum('C','SP','A') NOT NULL,
  `UserId` int(6) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Birthdate` date NOT NULL,
  `E-mail` varchar(40) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `OptionalContact` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `UserName` varchar(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`UserId`),
  KEY `FirstName` (`FirstName`,`LastName`,`Birthdate`,`E-mail`,`ContactNumber`,`OptionalContact`,`Address`,`UserName`,`Password`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=654322 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`UserType`, `UserId`, `FirstName`, `LastName`, `Birthdate`, `E-mail`, `ContactNumber`, `OptionalContact`, `Address`, `UserName`, `Password`) VALUES
('SP', 123456, 'Ian', 'Choco', '1996-05-06', 'ianpogi@gmail', 1234567891, 987654321, 'palma,st b.c', 'choconagata', '1234566'),
('SP', 123546, 'Lairde', 'Belo', '0000-00-00', 'lb@gmail.com', 646468956, 0, '', 'lairde', 'lasfnslf'),
('C', 654321, 'Nathan', 'MachoGwapito', '0000-00-00', 'nathanAwesome@gmail.com', 912345231, 912345131, '#12 Brookside, Baguio City', 'Nate69', 'webtekisheart');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD CONSTRAINT `serviceprovider_ibfk_1` FOREIGN KEY (`providerID`) REFERENCES `userinfo` (`UserId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
