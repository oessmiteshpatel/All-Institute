-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 12:02 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aere`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
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

CREATE TABLE IF NOT EXISTS `tablcontact` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Remark` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tablcontact`
--

INSERT INTO `tablcontact` (`Id`, `Fname`, `Contact`, `Email`, `Remark`) VALUES
(6, 'nirav', '123456789', 'n@gmail.com', ' fgbgb'),
(9, 'mitesh', '1234567890', 'mitesh.patel@theopeneyes.in', 'qwertyuio asdfghjk zxcvbnm'),
(11, 'asdfg', '1234567890', 'vidhi.bathani@theopeneyes.in', 'qwertyuio qwertyu qwertyuiop');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE IF NOT EXISTS `tblcourse` (
  `CourseID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(250) NOT NULL,
  `OfferedBy` varchar(250) NOT NULL,
  `Summary` text NOT NULL,
  `StartDate` varchar(20) DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Location` varchar(250) NOT NULL,
  `StartTime` varchar(50) NOT NULL,
  `EndTime` varchar(50) NOT NULL,
  `IntendedAudience` varchar(30) NOT NULL,
  `MeetingType` varchar(10) NOT NULL,
  `CourseFees` int(6) NOT NULL,
  `TotalCapacity` int(3) NOT NULL,
  `NoofUserRegistered` int(11) NOT NULL,
  `Instructor` varchar(100) NOT NULL,
  `Instigator` varchar(250) NOT NULL,
  `IsStatus` int(11) NOT NULL DEFAULT '1',
  `CourseStartDate` date DEFAULT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`CourseID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`CourseID`, `Title`, `OfferedBy`, `Summary`, `StartDate`, `EndDate`, `Location`, `StartTime`, `EndTime`, `IntendedAudience`, `MeetingType`, `CourseFees`, `TotalCapacity`, `NoofUserRegistered`, `Instructor`, `Instigator`, `IsStatus`, `CourseStartDate`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(5, 'FREE Online Course Offered by ALL Institute current or total no of register user equal to total capacity', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught.\r\n\r\n    Strategic Considerations\r\n        Strategic alignment with organizational goals\r\n        Naming and purpose the credential\r\n        Eligibility criteria\r\n        Assessment type\r\n        Competency level\r\n        Target audiences including SMEs and international audiences\r\n        Target B2B\r\n        Endorsements\r\n        Accreditation\r\n        Maintenance/Recertification\r\n        Certification versus Certificate\r\n        Translation, delivery, vendor management\r\n    Marketing Considerations\r\n        Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)\r\n        Tactical marketing (communication tactics such as social media, integrated marketing, video/native)\r\n        Tradition versus digital channels\r\n        Global considerations\r\n        Implications of social psychology/influence theory on marketing\r\n    Test Development/Psychometric Considerations\r\n        Test Development Lifecycle\r\n        Traditional/Waterfall Models\r\n        Agile Models\r\n        Testing and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines)\r\n    Operational Considerations\r\n        Project Planning\r\n        Risk Analysis\r\n        Costs\r\n        SME Management\r\n        Steering/Oversight Committee\r\n        Vendor selection/management\r\n    Other Considerations\r\n        Accreditation\r\n        Translation/international\r\n        Small volume\r\n', '2018-06-20', '2018-06-26', 'Scottsdale, AZ', '10:00:00', '16:00:00', 'Novice to Expert', 'Virtual', 1200, 27, 26, 'Nitin Shirasad', 'hello', 1, '2017-07-13', 1, '2018-02-14 10:59:43', 1, '2017-06-09 07:29:38'),
(6, 'FREE Online Course Offered by ALL-Institute - featured', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught.\r\n\r\n    Strategic Considerations\r\n        Strategic alignment with organizational goals\r\n        Naming and purpose the credential\r\n        Eligibility criteria\r\n        Assessment type\r\n        Competency level\r\n        Target audiences including SMEs and international audiences\r\n        Target B2B\r\n        Endorsements\r\n        Accreditation\r\n        Maintenance/Recertification\r\n        Certification versus Certificate\r\n        Translation, delivery, vendor management\r\n    Marketing Considerations\r\n        Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)\r\n        Tactical marketing (communication tactics such as social media, integrated marketing, video/native)\r\n        Tradition versus digital channels\r\n        Global considerations\r\n        Implications of social psychology/influence theory on marketing\r\n    Test Development/Psychometric Considerations\r\n        Test Development Lifecycle\r\n        Traditional/Waterfall Models\r\n        Agile Models\r\n        Testing and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines)\r\n    Operational Considerations\r\n        Project Planning\r\n        Risk Analysis\r\n        Costs\r\n        SME Management\r\n        Steering/Oversight Committee\r\n        Vendor selection/management\r\n    Other Considerations\r\n        Accreditation\r\n        Translation/international\r\n        Small volume\r\n', '2018-02-11', '2018-08-30', 'Scottsdale, AZ', '00:00:00', '00:00:00', 'Novice to Expert', 'Virtual', 1200, 25, 22, 'Nitin Shirasad', '', 1, NULL, 1, '2018-02-14 10:59:02', 1, '2017-06-09 01:59:38'),
(7, 'FREE Online Course Offered by ALL-Institute - current', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught.\r\n\r\n    Strategic Considerations\r\n        Strategic alignment with organizational goals\r\n        Naming and purpose the credential\r\n        Eligibility criteria\r\n        Assessment type\r\n        Competency level\r\n        Target audiences including SMEs and international audiences\r\n        Target B2B\r\n        Endorsements\r\n        Accreditation\r\n        Maintenance/Recertification\r\n        Certification versus Certificate\r\n        Translation, delivery, vendor management\r\n    Marketing Considerations\r\n        Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)\r\n        Tactical marketing (communication tactics such as social media, integrated marketing, video/native)\r\n        Tradition versus digital channels\r\n        Global considerations\r\n        Implications of social psychology/influence theory on marketing\r\n    Test Development/Psychometric Considerations\r\n        Test Development Lifecycle\r\n        Traditional/Waterfall Models\r\n        Agile Models\r\n        Testing and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines)\r\n    Operational Considerations\r\n        Project Planning\r\n        Risk Analysis\r\n        Costs\r\n        SME Management\r\n        Steering/Oversight Committee\r\n        Vendor selection/management\r\n    Other Considerations\r\n        Accreditation\r\n        Translation/international\r\n        Small volume\r\n', '2018-02-11', '2018-06-26', 'Scottsdale, AZ', '00:00:00', '00:00:00', 'Novice to Expert', 'Virtual', 1200, 44, 34, 'Nitin Shirasad', 'nirav patel', 1, '2018-02-12', 1, '2018-02-14 11:00:58', 1, '2017-06-09 01:59:38'),
(8, 'FREE Online Course Offered by ALL-Institute - featured', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught.\r\n\r\n    Strategic Considerations\r\n        Strategic alignment with organizational goals\r\n        Naming and purpose the credential\r\n        Eligibility criteria\r\n        Assessment type\r\n        Competency level\r\n        Target audiences including SMEs and international audiences\r\n        Target B2B\r\n        Endorsements\r\n        Accreditation\r\n        Maintenance/Recertification\r\n        Certification versus Certificate\r\n        Translation, delivery, vendor management\r\n    Marketing Considerations\r\n        Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)\r\n        Tactical marketing (communication tactics such as social media, integrated marketing, video/native)\r\n        Tradition versus digital channels\r\n        Global considerations\r\n        Implications of social psychology/influence theory on marketing\r\n    Test Development/Psychometric Considerations\r\n        Test Development Lifecycle\r\n        Traditional/Waterfall Models\r\n        Agile Models\r\n        Testing and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines)\r\n    Operational Considerations\r\n        Project Planning\r\n        Risk Analysis\r\n        Costs\r\n        SME Management\r\n        Steering/Oversight Committee\r\n        Vendor selection/management\r\n    Other Considerations\r\n        Accreditation\r\n        Translation/international\r\n        Small volume\r\n', '2017-06-26', '2017-06-30', 'Scottsdale, AZ', '00:00:00', '00:00:00', 'Novice to Expert', 'Virtual', 1200, 50, 5, 'Nitin Shirasad', '', 1, NULL, 1, '2017-12-25 09:40:58', 1, '2017-06-09 01:59:38'),
(9, 'FREE Online Course Offered by ALL-Institute - Finished', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught.\r\n\r\n    Strategic Considerations\r\n        Strategic alignment with organizational goals\r\n        Naming and purpose the credential\r\n        Eligibility criteria\r\n        Assessment type\r\n        Competency level\r\n        Target audiences including SMEs and international audiences\r\n        Target B2B\r\n        Endorsements\r\n        Accreditation\r\n        Maintenance/Recertification\r\n        Certification versus Certificate\r\n        Translation, delivery, vendor management\r\n    Marketing Considerations\r\n        Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)\r\n        Tactical marketing (communication tactics such as social media, integrated marketing, video/native)\r\n        Tradition versus digital channels\r\n        Global considerations\r\n        Implications of social psychology/influence theory on marketing\r\n    Test Development/Psychometric Considerations\r\n        Test Development Lifecycle\r\n        Traditional/Waterfall Models\r\n        Agile Models\r\n        Testing and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines)\r\n    Operational Considerations\r\n        Project Planning\r\n        Risk Analysis\r\n        Costs\r\n        SME Management\r\n        Steering/Oversight Committee\r\n        Vendor selection/management\r\n    Other Considerations\r\n        Accreditation\r\n        Translation/international\r\n        Small volume\r\n', '2017-06-01', '2017-06-18', 'Scottsdale, AZ', '00:00:00', '00:00:00', 'Novice to Expert', 'Virtual', 1200, 50, 5, 'Nitin Shirasad', '', 1, NULL, 1, '2017-06-09 01:59:38', 1, '2017-06-09 01:59:38'),
(10, 'FREE Online Course Offered by ALL Institute current or total no of register user equal to total capacity', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught. Strategic Considerations Strategic alignment with organizational goalsNaming and purpose the credentialEligibility criteriaAssessment typeCompetency levelTarget audiences including SMEs and international audiencesTarget B2BEndorsementsAccreditationMaintenance/RecertificationCertification versus CertificateTranslation, delivery, vendor management Marketing Considerations Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)Tactical marketing (communication tactics such as social media, integrated marketing, video/native)Tradition versus digital channelsGlobal considerationsImplications of social psychology/influence theory on marketing Test Development/Psychometric Considerations Test Development LifecycleTraditional/Waterfall ModelsAgile ModelsTesting and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines) Operational Considerations Project PlanningRisk AnalysisCostsSME ManagementSteering/Oversight CommitteeVendor selection/management Other Considerations AccreditationTranslation/internationalSmall volume ', '2017-01-01', '2018-07-28', 'Vadoara, 5023/1245 . Nr. viswamitri nagar', '00:00:00', '00:00:00', 'Novice to Expert', 'Virtual', 200, 41, 41, 'nitin shirasad', 'Dr. ram krushanan', 1, NULL, 0, '2018-02-12 12:34:56', 0, '2017-06-26 21:27:40'),
(11, 'FREE Online Course Offered by ALL Institute current or total no of register user equal to total capacity', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to \r\nmanage the development of launching a credentialing program in 90 days. \r\nBelow are the topic areas and examples that will be taught.\r\n											\r\n											Strategic Considerations \r\n												Strategic alignment with organizational goalsNaming and purpose the credentialEligibility criteriaAssessment typeCompetency levelTarget audiences including SMEs and international audiencesTarget B2BEndorsementsAccreditationMaintenance/RecertificationCertification versus CertificateTranslation, delivery, vendor management\r\n											\r\n											Marketing Considerations \r\n												Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)Tactical marketing (communication tactics such as social media, integrated marketing, video/native)Tradition versus digital channelsGlobal considerationsImplications of social psychology/influence theory on marketing\r\n											Test Development/Psychometric Considerations\r\n												Test Development LifecycleTraditional/Waterfall ModelsAgile ModelsTesting and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC,  SIOP, Uniform Guidelines)\r\n											Operational Considerations\r\n												Project PlanningRisk AnalysisCostsSME ManagementSteering/Oversight CommitteeVendor selection/management\r\n											Other Considerations\r\n												AccreditationTranslation/internationalSmall volume\r\n											', '2017-06-22', '2017-07-28', 'Vadoara, 5023/1245 . Nr. viswamitri nagar', '01:00:00', '13:22:00', 'Novice to Expert', 'Virtual', 200, 40, 0, 'nitin shirasad', 'Dr. ram krushanan', 1, '2018-02-13', 0, '2018-02-13 13:20:24', 0, '2017-06-26 21:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourseregistered`
--

CREATE TABLE IF NOT EXISTS `tblcourseregistered` (
  `CourserRegisteredId` int(11) NOT NULL AUTO_INCREMENT,
  `RegisterId` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `IsActive` int(1) NOT NULL,
  `createdOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`CourserRegisteredId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblcourseregistered`
--

INSERT INTO `tblcourseregistered` (`CourserRegisteredId`, `RegisterId`, `CourseID`, `IsActive`, `createdOn`) VALUES
(1, 2, 5, 1, '2018-02-14 10:59:43'),
(2, 1, 7, 1, '2018-02-14 11:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE IF NOT EXISTS `tblregister` (
  `RegisterId` int(11) NOT NULL AUTO_INCREMENT,
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
  `otp` varchar(100) NOT NULL,
  PRIMARY KEY (`RegisterId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`RegisterId`, `UserName`, `Password`, `FirstName`, `LastName`, `Email`, `Address`, `Phone`, `ConfirmationCode`, `IsActive`, `CreatedBy`, `createdOn`, `otp`) VALUES
(1, 'mitesh.patel@theopeneyes.in', '12345678', 'mitesh', 'patel', 'mitesh.patel@theopeneyes.in', 'anand', '1234567890', '12345678', 1, 0, '2018-02-09 07:16:28', '22212'),
(2, 'nirav.patel@theopeneyes.in', '12345678', 'nirav', 'patel', 'nirav.patel@theopeneyes.in', 'asdfghjk', '1234567890', '12345678', 1, 0, '2018-02-09 07:21:36', '20974'),
(3, 'vidhi.bathani@theopeneyes.in', '12345678', 'vidhi', 'bathani', 'vidhi.bathani@theopeneyes.in', 'asdfghjk', '1234567890', '12345678', 1, 0, '2018-02-09 07:27:41', '18580'),
(4, 'tmehta@theopeneyes.com', 'W3lc0m3', 'trushant', 'Mehta', 'tmehta@theopeneyes.com', 'Washington DC', '8859998546', 'W3lc0m3', 1, 0, '2018-02-09 13:01:35', '13339');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
