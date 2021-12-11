-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 06:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicantID` int(11) NOT NULL,
  `universityID` varchar(255) NOT NULL,
  `fname` char(30) DEFAULT NULL,
  `gender` char(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `levels` int(11) DEFAULT NULL,
  `major` char(30) DEFAULT NULL,
  `gpa` varchar(10) DEFAULT NULL,
  `companypreference` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicantID`, `universityID`, `fname`, `gender`, `email`, `levels`, `major`, `gpa`, `companypreference`) VALUES
(4, 'ASH', 'Emmanuella Aplerku', 'female', 'emmanuella.aplerku@ashesi.edu.', 300, 'MIS', '3.34', 'KPMG Ghana');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CompanyID` int(11) NOT NULL,
  `CompanyName` char(30) DEFAULT NULL,
  `requirementLevel` char(30) DEFAULT NULL,
  `GPACutOff` decimal(10,0) DEFAULT NULL,
  `Location` varchar(30) DEFAULT NULL,
  `MajorPreference` char(30) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `UniversityID` int(11) NOT NULL,
  `UniversityName` char(30) DEFAULT NULL,
  `YearEstablished` varchar(30) DEFAULT NULL,
  `Description` char(100) DEFAULT NULL,
  `Location` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `fname` char(30) NOT NULL,
  `lname` char(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`fname`, `lname`, `email`, `password`) VALUES
('Alberta', 'Agyemang', 'aagyemang10@gmail.com', 'cf86cdfd79c2c42c6389e7ba3fc234'),
('Allotei', 'Papoe', 'allotei.papoe@ashesi.edu.gh', '42ce894a1f7de5e9656316619c96dc'),
('chasya', 'abakah', 'chasya.abakah@ashesi.edu.gh', 'b25c5b145554ad609567fda11e09509a'),
('Emmanuella', 'Aplerku', 'emmanuella.aplerku@ashesi.edu.gh', '2c6bbccfa2585dc527e46d74edd05c'),
('Iseoma', 'Eke', 'iseoma.eke@gmail.com', '9db2de8e59c24b79edfad1c6e695aa'),
('kwame', 'gyau', 'kwame.gyau@ashesi.edu.gh', '8c2334499866f1b9f4337a53298e7b'),
('Shirley', 'Yankyera', 'shirley.yankyera@ashesi.edu.gh', 'a9e3ac7c6aa5c11a83e3883ef9b65d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicantID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CompanyID`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`UniversityID`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
