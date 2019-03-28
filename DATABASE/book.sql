-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 05:44 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `bid` varchar(50) NOT NULL,
  `btitle` varchar(255) NOT NULL,
  `bcat` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`bid`, `btitle`, `bcat`) VALUES
('nu001', 'HP DESKJET INK PRINTER', 'PRINTER'),
('nu002', 'APC เครื่องสำรองไฟ รุ่น BK500EI UPS CS 500VA', ''),
('nu003', 'HP ตลับหมึกอิงค์เจ็ท รุ่น HP 60 (CC640WA) - BLACK', 'ตลับหมึก'),
('122', 'สายไฟ', 'ยาว20เมตร'),
('9F-01-02-066/55', 'โต๊ะทำงาน', '-'),
('9F-01-02-066/56', 'โต๊ะทำงาน', '-');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `depid` int(10) NOT NULL,
  `depname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`depid`, `depname`) VALUES
(1, 'สารสนเทศและวิชาการกีฬา'),
(2, 'การคลัง');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `divisid` int(10) NOT NULL,
  `divisname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`divisid`, `divisname`) VALUES
(1, 'สารสนเทศ'),
(2, 'วิชาการกีฬา');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `userid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`userid`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mid` int(5) NOT NULL,
  `mname` varchar(59) NOT NULL,
  `posi` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL,
  `divis` varchar(50) NOT NULL,
  `dep` varchar(50) NOT NULL,
  `mphone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mid`, `mname`, `posi`, `work`, `divis`, `dep`, `mphone`) VALUES
(58316301, 'นริศรา เนียมอ้ม', 'ประธาน', 'อะไร', 'กองทัพบก', 'ปชสพ', '960582589'),
(58316302, 'เยาวเรศ สุขสถาน', 'กรรมการ', 'วะห๊ะ', 'กองทัพบก', 'ฝ่ายศิลป์', '960582589');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `posid` int(10) NOT NULL,
  `posname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`posid`, `posname`) VALUES
(1, 'โปรแกรมเมอร์'),
(2, 'ไอที ซัพพอร์ต');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `mid` varchar(20) NOT NULL,
  `bid` varchar(20) NOT NULL,
  `tborrow` date NOT NULL,
  `treturn` date NOT NULL,
  `tstatus` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`mid`, `bid`, `tborrow`, `treturn`, `tstatus`) VALUES
('55555', 'nu001', '2019-03-08', '0000-00-00', 1),
('55555', 'nu001', '2019-03-08', '0000-00-00', 1),
('1212312121', 'nu001', '2019-03-08', '0000-00-00', 1),
('1212312121', 'nu001', '2019-03-08', '0000-00-00', 1),
('1212312121', 'nu003', '2019-03-08', '0000-00-00', 1),
('1212312121', 'nu001', '2019-03-08', '0000-00-00', 1),
('55555', 'nu001', '2019-03-10', '0000-00-00', 1),
('55555', 'nu001', '2019-03-10', '0000-00-00', 1),
('4', 'nu001', '2019-03-13', '0000-00-00', 1),
('4', 'nu001', '2019-03-13', '0000-00-00', 1),
('2', 'nu001', '2019-03-19', '2019-03-19', 0),
('2', 'nu001', '2019-03-19', '2019-03-19', 0),
('2', 'nu003', '2019-03-19', '2019-03-19', 0),
('2', 'nu001', '2019-03-19', '2019-03-19', 0),
('58316295', 'nu001', '2019-03-19', '0000-00-00', 1),
('2', 'nu001', '2019-03-19', '2019-03-19', 0),
('2', 'nu001', '2019-03-19', '2019-03-19', 0),
('2', 'nu001', '2019-03-19', '2019-03-19', 0),
('58316004', 'nu001', '2019-03-19', '2019-03-19', 0),
('58316004', 'nu001', '2019-03-19', '2019-03-20', 0),
('2', 'nu001', '2019-03-19', '0000-00-00', 1),
('2', 'nu001', '2019-03-19', '0000-00-00', 1),
('2', 'nu001', '2019-03-19', '0000-00-00', 1),
('5', 'nu001', '2019-03-19', '0000-00-00', 1),
('5', 'nu002', '2019-03-19', '0000-00-00', 1),
('5', '122', '2019-03-19', '0000-00-00', 1),
('58316004', '122', '2019-03-19', '2019-03-19', 0),
('58316004', 'nu001', '2019-03-20', '2019-03-20', 0),
('58316004', 'nu001', '2019-03-20', '2019-03-20', 0),
('58316004', 'nu002', '2019-03-20', '2019-03-20', 0),
('', 'nu001', '2019-03-20', '2019-03-20', 0),
('58316291', '9F-01-02-066/55', '2019-03-27', '2019-03-27', 0),
('58316292', 'nu001', '2019-03-28', '2019-03-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `workid` int(10) NOT NULL,
  `workname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`workid`, `workname`) VALUES
(1, 'บริการเทคโนโลยีสารสนเทศ'),
(2, 'ปฎิบัติการคอมพิวเตอร์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`depid`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`divisid`);

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`posid`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`workid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `depid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `divisid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58316303;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `posid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `workid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
