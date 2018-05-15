-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 12:08 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aere`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tablcontact`
--

CREATE TABLE `tablcontact` (
  `Id` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablcontact`
--

INSERT INTO `tablcontact` (`Id`, `Fname`, `Contact`, `Email`, `Remark`) VALUES
(6, 'nirav', '123456789', 'n@gmail.com', ' fgbgb'),
(7, 'mitesh', '8888888888', 'mmm@gmail.com', 'trdtfyvujbgiugiugui');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `CourseID` int(11) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `OfferedBy` varchar(250) DEFAULT NULL,
  `Summary` text,
  `Image` varchar(255) DEFAULT NULL,
  `Video` text,
  `StartDate` varchar(20) DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Location` varchar(250) DEFAULT NULL,
  `StartTime` varchar(50) NOT NULL,
  `EndTime` varchar(50) NOT NULL,
  `IntendedAudience` varchar(30) DEFAULT NULL,
  `MeetingType` varchar(10) DEFAULT NULL,
  `CourseFees` varchar(6) DEFAULT NULL,
  `TotalCapacity` int(3) NOT NULL,
  `NoofUserRegistered` int(11) NOT NULL,
  `Instigator` varchar(250) DEFAULT NULL,
  `InsId` varchar(50) DEFAULT NULL,
  `IsStatus` int(11) NOT NULL DEFAULT '1',
  `CourseStartDate` date DEFAULT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`CourseID`, `Title`, `OfferedBy`, `Summary`, `Image`, `Video`, `StartDate`, `EndDate`, `Location`, `StartTime`, `EndTime`, `IntendedAudience`, `MeetingType`, `CourseFees`, `TotalCapacity`, `NoofUserRegistered`, `Instigator`, `InsId`, `IsStatus`, `CourseStartDate`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, '', '', '<br>', '9.png', '', '2018-04-04', '2018-04-04', '', '12:59:00 pm', '12:59:00 pm', '', '', '', 8, 0, '', NULL, 1, '2018-04-04', 0, '2018-04-04 07:22:32', 0, '2018-04-04 06:59:30'),
(2, '', '', '<br>', '9.png', '', '2018-04-12', '2018-04-04', '', '12:59:00 pm', '12:59:00 pm', '', '', '', 8, 0, '', NULL, 1, '2018-04-04', 0, '2018-04-04 07:22:44', 0, '2018-04-04 07:01:41'),
(3, '', '', '<br>', '9.png', '', '2018-04-12', '2018-04-12', '', '12:59:00 pm', '12:59:00 pm', '', '', '', 7, 0, '', NULL, 1, '2018-04-04', 0, '2018-04-04 07:46:43', 0, '2018-04-04 07:45:41'),
(4, 'sderyr', '', '<br>', '13.jpg', 'https://www.youtube.com/embed/DG0C3Tntl1M', '2018-03-06', '2018-03-13', '', '12:59:00 pm', '12:59:00 pm', '', '', '77', 9, 0, '', NULL, 1, '2018-04-04', 0, '2018-04-04 10:08:40', 0, '2018-04-04 09:21:33'),
(5, 'dsfrsgr', '', '<br>', '13.jpg', 'https://www.youtube.com/embed/DG0C3Tntl1M', '2018-04-04', '2018-04-04', '', '12:59:00 pm', '12:59:00 pm', '', '', '', 9, 0, '', NULL, 1, NULL, 0, '2018-04-04 10:08:43', 0, '2018-04-04 09:55:14'),
(6, 'uyguyguy', '', '<br>', '13.jpg', '', '2018-04-04', '2018-04-11', '', '12:59:00 pm', '12:59:00 pm', '', '', '', 9, 0, '', NULL, 1, NULL, 0, '2018-04-04 10:48:33', 0, '2018-04-04 10:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourseregistered`
--

CREATE TABLE `tblcourseregistered` (
  `CourserRegisteredId` int(11) NOT NULL,
  `RegisterId` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `IsActive` int(1) NOT NULL,
  `createdOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmstinstructor`
--

CREATE TABLE `tblmstinstructor` (
  `InsId` int(11) NOT NULL,
  `InsName` varchar(100) NOT NULL,
  `InsImg` varchar(100) NOT NULL,
  `About` text NOT NULL,
  `IsActive` int(11) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedBy` int(11) NOT NULL,
  `UpdatedOn` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmstinstructor`
--

INSERT INTO `tblmstinstructor` (`InsId`, `InsName`, `InsImg`, `About`, `IsActive`, `CreatedBy`, `CreatedOn`, `UpdatedBy`, `UpdatedOn`) VALUES
(1, 'mitesh', '2.jpg', 'dsfdrhyrtctujt sddfertry', 0, 0, '2018-04-04 06:48:22', 0, '2018-04-04 06:48:22'),
(2, 'vidhi', '13.jpg', 'wersestdryrdu', 1, 0, '2018-04-04 06:48:39', 0, '2018-04-04 06:48:39'),
(3, 'krupu', '4.jpg', 'dfgrtfhrtf', 1, 0, '2018-04-04 06:53:01', 0, '2018-04-04 06:53:01'),
(4, 'pooja', '13.jpg', 'rfgtrhrh', 1, 0, '2018-04-04 09:17:54', 0, '2018-04-04 09:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE `tblregister` (
  `RegisterId` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `ConfirmationCode` varchar(100) NOT NULL,
  `IsActive` int(11) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `createdOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `otp` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`RegisterId`, `UserName`, `Password`, `FirstName`, `LastName`, `Email`, `Address`, `Phone`, `ConfirmationCode`, `IsActive`, `CreatedBy`, `createdOn`, `otp`) VALUES
(1, 'mitnp16@gmail.com', '12345678Aa@', 'miesh', 'patel', 'mitnp16@gmail.com', 'anand', '1111111111', '12345678', 0, 0, '2018-01-30 11:14:31', '15743'),
(2, 'nirav@gmail.com', '12345678@aH', 'nirav', 'patel', 'nirav@gmail.com', 'anand', '1234567890', '12345678', 1, 0, '2018-01-30 12:06:15', '24137'),
(3, 'mit17@gmail.com', '12345678a', 'mit', 'patel', 'mit17@gmail.com', 'sdfghjk xcvbnm sdfghjk sdfghjm,', '11111111111', '12345678a', 1, 0, '2018-02-26 08:05:52', '6853'),
(4, 'kkk@gmail.com', '12345678', 'kkkk', 'patel', 'kkk@gmail.com', 'asdfghj asdfghj asdfghjk', '123456789012', '12345678', 0, 0, '2018-02-28 12:24:43', '6021'),
(5, 'krupali@gmail.com', '123456aq@A', 'krupali', 'mistry', 'krupali@gmail.com', 'wadi', '1234567890', '123456aq@A', 1, 0, '2018-03-01 09:10:04', '9665');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablcontact`
--
ALTER TABLE `tablcontact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `tblcourseregistered`
--
ALTER TABLE `tblcourseregistered`
  ADD PRIMARY KEY (`CourserRegisteredId`);

--
-- Indexes for table `tblmstinstructor`
--
ALTER TABLE `tblmstinstructor`
  ADD PRIMARY KEY (`InsId`);

--
-- Indexes for table `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`RegisterId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablcontact`
--
ALTER TABLE `tablcontact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblcourseregistered`
--
ALTER TABLE `tblcourseregistered`
  MODIFY `CourserRegisteredId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblmstinstructor`
--
ALTER TABLE `tblmstinstructor`
  MODIFY `InsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblregister`
--
ALTER TABLE `tblregister`
  MODIFY `RegisterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
