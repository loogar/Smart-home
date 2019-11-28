-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2018 at 09:03 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domisep`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `HomeID` varchar(255) NOT NULL,
  `UserID` varchar(255) NOT NULL,
  `Size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`HomeID`, `UserID`, `Size`) VALUES
('', 'user0', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` varchar(255) NOT NULL,
  `Used` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `Used`) VALUES
('', 0),
('prod01', 1),
('prod02', 0),
('prod03', 0),
('prod04', 0),
('prod101', 0),
('prod_10', 0),
('prod_100', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `HomeID` varchar(255) NOT NULL,
  `RoomID` varchar(255) NOT NULL,
  `RoomType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`HomeID`, `RoomID`, `RoomType`) VALUES
('', 'room0', 'living'),
('', 'room1', 'bathroom2');

-- --------------------------------------------------------

--
-- Table structure for table `sensors`
--

CREATE TABLE `sensors` (
  `SensorID` varchar(255) NOT NULL,
  `SensorTpye` varchar(255) NOT NULL,
  `RoomID` varchar(200) NOT NULL,
  `Roomtype` varchar(255) NOT NULL,
  `SensorValue` double NOT NULL,
  `SensorAlertStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensors`
--

INSERT INTO `sensors` (`SensorID`, `SensorTpye`, `RoomID`, `Roomtype`, `SensorValue`, `SensorAlertStatus`) VALUES
('room0Sensor1', 'Temperature', 'room0', 'living', 34, '0'),
('room0Sensor2', 'Temperature', 'room0', 'livin2', 184, '1'),
('room0Sensor3', 'Humidity', 'room0', 'livin2', 12, '0'),
('room1Sensor1', 'Humidity', 'room1', 'bathroom3', 194, '0');

-- --------------------------------------------------------

--
-- Table structure for table `SesnsorReadings`
--

CREATE TABLE `SesnsorReadings` (
  `date` date NOT NULL,
  `SensorID` varchar(250) NOT NULL,
  `SensorValue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SesnsorReadings`
--

INSERT INTO `SesnsorReadings` (`date`, `SensorID`, `SensorValue`) VALUES
('2018-01-15', 'room0Sensor1', 20),
('2018-01-08', 'room0Sensor1', 1),
('2018-01-01', 'room0Sensor1', 22),
('2018-01-01', 'room0Sensor2', 2),
('2018-01-09', 'room0Sensor3', 22);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Userid` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `EmailID` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ProductID` varchar(255) NOT NULL,
  `UserStatusActive` tinyint(1) NOT NULL DEFAULT '1',
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `username`, `FirstName`, `LastName`, `EmailID`, `Password`, `DOB`, `Address`, `ProductID`, `UserStatusActive`, `Gender`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin@gmail.com', 'DOy1Fv.//9yys', '2018-01-09', 'sssss', '', 1, 'other'),
('user0', 'User_old', 'Katherine', 'Hepburn', 'audrey_hepburn@gmail.com', 'DOy1Fv.//9yys', '2018-01-16', '123 rue des pinsons', 'prod01', 1, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`RoomID`);

--
-- Indexes for table `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`SensorID`),
  ADD UNIQUE KEY `SensorID` (`SensorID`);

--
-- Indexes for table `SesnsorReadings`
--
ALTER TABLE `SesnsorReadings`
  ADD KEY `SensorID` (`SensorID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`),
  ADD UNIQUE KEY `ProductID` (`ProductID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `home`
--
ALTER TABLE `home`
  ADD CONSTRAINT `home_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`Userid`);

--
-- Constraints for table `SesnsorReadings`
--
ALTER TABLE `SesnsorReadings`
  ADD CONSTRAINT `sesnsorreadings_ibfk_1` FOREIGN KEY (`SensorID`) REFERENCES `sensors` (`SensorID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
