-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 11:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investhooddocsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attid` int(10) NOT NULL,
  `attdatetime` datetime DEFAULT NULL,
  `attlocation` varchar(25) DEFAULT NULL,
  `empid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `depid` int(10) NOT NULL,
  `depname` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(10) NOT NULL,
  `empname` varchar(25) DEFAULT NULL,
  `empsurname` varchar(25) DEFAULT NULL,
  `emprole` varchar(25) NOT NULL,
  `empcode` varchar(25) DEFAULT NULL,
  `empphone` varchar(10) DEFAULT NULL,
  `empemail` varchar(25) DEFAULT NULL,
  `emppassword` varchar(8) NOT NULL,
  `empstatus` varchar(25) DEFAULT NULL,
  `empdepartmentid` int(10) DEFAULT NULL,
  `emppositionid` int(10) DEFAULT NULL,
  `emptypeid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `empname`, `empsurname`, `emprole`, `empcode`, `empphone`, `empemail`, `emppassword`, `empstatus`, `empdepartmentid`, `emppositionid`, `emptypeid`) VALUES
(1, 'Katlego', 'Mashego', 'admin', '101255', '079301+651', 'admin@investhoodit.com', 'admin123', 'full time', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employeetask`
--

CREATE TABLE `employeetask` (
  `empid` int(10) DEFAULT NULL,
  `tasid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employeetype`
--

CREATE TABLE `employeetype` (
  `emptypeid` int(10) NOT NULL,
  `emptypename` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaveapplication`
--

CREATE TABLE `leaveapplication` (
  `appid` int(10) NOT NULL,
  `leaid` int(10) DEFAULT NULL,
  `empid` int(10) DEFAULT NULL,
  `appreason` varchar(255) DEFAULT NULL,
  `appdays` int(10) DEFAULT NULL,
  `appfrom` date DEFAULT NULL,
  `appto` date DEFAULT NULL,
  `appstatus` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `posid` int(10) NOT NULL,
  `posname` varchar(25) DEFAULT NULL,
  `depid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `tasid` int(10) NOT NULL,
  `tasname` varchar(255) DEFAULT NULL,
  `tasdetails` varchar(255) DEFAULT NULL,
  `empid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblleave`
--

CREATE TABLE `tblleave` (
  `leaid` int(10) NOT NULL,
  `leaname` varchar(25) DEFAULT NULL,
  `leadesc` varchar(255) DEFAULT NULL,
  `leacredits` int(10) DEFAULT NULL,
  `emptypeid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attid`),
  ADD KEY `empid` (`empid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`depid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`),
  ADD KEY `empdepartmentid` (`empdepartmentid`,`emppositionid`,`emptypeid`),
  ADD KEY `emptypeid` (`emptypeid`),
  ADD KEY `emppositionid` (`emppositionid`);

--
-- Indexes for table `employeetask`
--
ALTER TABLE `employeetask`
  ADD KEY `empid` (`empid`,`tasid`),
  ADD KEY `tasid` (`tasid`);

--
-- Indexes for table `employeetype`
--
ALTER TABLE `employeetype`
  ADD PRIMARY KEY (`emptypeid`);

--
-- Indexes for table `leaveapplication`
--
ALTER TABLE `leaveapplication`
  ADD PRIMARY KEY (`appid`),
  ADD KEY `leaid` (`leaid`,`empid`),
  ADD KEY `empid` (`empid`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`posid`),
  ADD KEY `depid` (`depid`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`tasid`),
  ADD KEY `empid` (`empid`);

--
-- Indexes for table `tblleave`
--
ALTER TABLE `tblleave`
  ADD PRIMARY KEY (`leaid`),
  ADD KEY `emptypeid` (`emptypeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `depid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employeetype`
--
ALTER TABLE `employeetype`
  MODIFY `emptypeid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaveapplication`
--
ALTER TABLE `leaveapplication`
  MODIFY `appid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `posid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `tasid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblleave`
--
ALTER TABLE `tblleave`
  MODIFY `leaid` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`emptypeid`) REFERENCES `employeetype` (`emptypeid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`empdepartmentid`) REFERENCES `department` (`depid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`emppositionid`) REFERENCES `position` (`posid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employeetask`
--
ALTER TABLE `employeetask`
  ADD CONSTRAINT `employeetask_ibfk_1` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employeetask_ibfk_2` FOREIGN KEY (`tasid`) REFERENCES `task` (`tasid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leaveapplication`
--
ALTER TABLE `leaveapplication`
  ADD CONSTRAINT `leaveapplication_ibfk_1` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leaveapplication_ibfk_2` FOREIGN KEY (`leaid`) REFERENCES `tblleave` (`leaid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `position`
--
ALTER TABLE `position`
  ADD CONSTRAINT `position_ibfk_1` FOREIGN KEY (`depid`) REFERENCES `department` (`depid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblleave`
--
ALTER TABLE `tblleave`
  ADD CONSTRAINT `tblleave_ibfk_1` FOREIGN KEY (`emptypeid`) REFERENCES `employeetype` (`emptypeid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
