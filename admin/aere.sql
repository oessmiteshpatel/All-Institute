-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 07:40 AM
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
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `CourseID` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `OfferedBy` varchar(250) NOT NULL,
  `Summary` text NOT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Location` varchar(250) NOT NULL,
  `Time` varchar(60) NOT NULL,
  `IntendedAudience` varchar(30) NOT NULL,
  `MeetingType` varchar(10) NOT NULL,
  `CourseFees` int(6) NOT NULL,
  `TotalCapacity` int(3) NOT NULL,
  `NoofUserRegistered` int(11) NOT NULL,
  `Instructor` varchar(100) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedOn` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`CourseID`, `Title`, `OfferedBy`, `Summary`, `StartDate`, `EndDate`, `Location`, `Time`, `IntendedAudience`, `MeetingType`, `CourseFees`, `TotalCapacity`, `NoofUserRegistered`, `Instructor`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(5, 'FREE Online Course Offered by ALL-Institute', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught.\r\n\r\n    Strategic Considerations\r\n        Strategic alignment with organizational goals\r\n        Naming and purpose the credential\r\n        Eligibility criteria\r\n        Assessment type\r\n        Competency level\r\n        Target audiences including SMEs and international audiences\r\n        Target B2B\r\n        Endorsements\r\n        Accreditation\r\n        Maintenance/Recertification\r\n        Certification versus Certificate\r\n        Translation, delivery, vendor management\r\n    Marketing Considerations\r\n        Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)\r\n        Tactical marketing (communication tactics such as social media, integrated marketing, video/native)\r\n        Tradition versus digital channels\r\n        Global considerations\r\n        Implications of social psychology/influence theory on marketing\r\n    Test Development/Psychometric Considerations\r\n        Test Development Lifecycle\r\n        Traditional/Waterfall Models\r\n        Agile Models\r\n        Testing and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines)\r\n    Operational Considerations\r\n        Project Planning\r\n        Risk Analysis\r\n        Costs\r\n        SME Management\r\n        Steering/Oversight Committee\r\n        Vendor selection/management\r\n    Other Considerations\r\n        Accreditation\r\n        Translation/international\r\n        Small volume\r\n', '2017-06-12', NULL, 'Scottsdale, AZ', '1pm to 4:00pm ET', 'Novice to Expert', 'Virtual', 1200, 50, 5, 'Nitin Shirasad', 1, '2017-06-09 07:29:38', 1, '2017-06-09 07:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourseregistered`
--

CREATE TABLE `tblcourseregistered` (
  `CourserRegisteredId` int(11) NOT NULL,
  `RegisteredId` int(11) NOT NULL,
  `CourseId` int(11) NOT NULL,
  `IsActive` int(1) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedOn` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `ConfirmationCode` varchar(30) NOT NULL,
  `IsActive` int(11) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedOn` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`RegisterId`, `UserName`, `Password`, `FirstName`, `LastName`, `Email`, `Address`, `Phone`, `ConfirmationCode`, `IsActive`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(2, 'zub', '123', 'zuber', 'mansuri', 'zubermansuri@gmail.com', 'vadodara', '9173745062', '10', 1, 2, '2017-06-09 06:20:20', 2, '2017-06-09 06:20:20');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`RegisterId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblcourseregistered`
--
ALTER TABLE `tblcourseregistered`
  MODIFY `CourserRegisteredId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblregister`
--
ALTER TABLE `tblregister`
  MODIFY `RegisterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
