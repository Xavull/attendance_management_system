-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 07:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investhood`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attID` int(10) NOT NULL,
  `attDateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attLocation` varchar(150) NOT NULL,
  `empID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `depID` int(10) NOT NULL,
  `depName` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`depID`, `depName`) VALUES
(1, 'IT'),
(2, 'Marketing'),
(3, 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empID` varchar(10) NOT NULL,
  `empName` varchar(255) NOT NULL,
  `empSurname` varchar(255) NOT NULL,
  `empPhone` varchar(15) NOT NULL,
  `empEmail` varchar(255) NOT NULL,
  `empStatus` varchar(150) NOT NULL,
  `empDepartment` int(10) NOT NULL,
  `empPosition` int(10) NOT NULL,
  `empTypeID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empID`, `empName`, `empSurname`, `empPhone`, `empEmail`, `empStatus`, `empDepartment`, `empPosition`, `empTypeID`) VALUES
('EMP15530', 'Senzo', 'Mgcaleka', '0785253254', 'sharma@gmail.com', 'resigned', 3, 5, 2),
('EMP41472', 'Palki', 'Sharma', '0785253254', 'sharma@gmail.com', 'active', 1, 2, 1),
('EMP46954', 'Onke', 'Mzondo', '0785253201', 'senzo1@gmail.com', 'active', 1, 3, 1),
('EMP51669', 'Senzo', 'Sharma', '0785253201', 'senzo456546@gmail.com', 'active', 1, 1, 2),
('EMP69201', 'Senzo', 'Mgcaleka', '0785253201', 'senzo@gmail.com', 'active', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `employeetype`
--

CREATE TABLE `employeetype` (
  `empTypeID` int(10) NOT NULL,
  `empTypeName` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeetype`
--

INSERT INTO `employeetype` (`empTypeID`, `empTypeName`) VALUES
(1, 'Permanent Employee'),
(2, 'Contract Employee');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `leaID` int(10) NOT NULL,
  `leaName` varchar(255) NOT NULL,
  `leaDesc` varchar(255) NOT NULL,
  `leaCredits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaveapplication`
--

CREATE TABLE `leaveapplication` (
  `appID` int(10) NOT NULL,
  `leaID` int(10) NOT NULL,
  `empID` int(10) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `appDays` int(10) NOT NULL,
  `appFrom` date NOT NULL,
  `appTo` int(11) NOT NULL,
  `appStatus` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `posID` int(10) NOT NULL,
  `posName` varchar(150) NOT NULL,
  `depID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`posID`, `posName`, `depID`) VALUES
(1, 'Jnr Software Dev', 1),
(2, 'Snr Software Dev', 1),
(3, 'Jnr Technical Support', 1),
(4, 'Jnr Marketing', 2),
(5, 'Jnr Internal Auditor', 3),
(6, 'Jnr Accountant', 3);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `taskID` int(10) NOT NULL,
  `empID` int(10) NOT NULL,
  `taskName` varchar(100) NOT NULL,
  `taskDetails` longtext NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`depID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `employeetype`
--
ALTER TABLE `employeetype`
  ADD PRIMARY KEY (`empTypeID`);

--
-- Indexes for table `leaveapplication`
--
ALTER TABLE `leaveapplication`
  ADD PRIMARY KEY (`appID`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`posID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`taskID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `depID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employeetype`
--
ALTER TABLE `employeetype`
  MODIFY `empTypeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leaveapplication`
--
ALTER TABLE `leaveapplication`
  MODIFY `appID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `posID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `taskID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
