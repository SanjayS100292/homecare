-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 11:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ausername` text NOT NULL,
  `apassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ausername`, `apassword`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookid` int(20) NOT NULL,
  `users` varchar(100) NOT NULL,
  `wid` int(20) NOT NULL,
  `wname` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `bookdate` text NOT NULL,
  `regisdate` text NOT NULL,
  `descipt` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `amount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookid`, `users`, `wid`, `wname`, `addr`, `city`, `bookdate`, `regisdate`, `descipt`, `status`, `amount`) VALUES
(2, 'sanjays', 2001, 'kiran', 'suvarna\nvazhikulangar\nnorth paravur\n683513', 'Thrissur', '2022-11-12', '2022-11-04 17:40:56', 'electrical wiring', 'Completed', 7500),
(3, 'sanjays', 2002, 'pkgroup', 'suvarna\nvazhikulangar\nnorth paravur\n683513', 'Thrissur', '2022-11-11', '2022-11-04 21:45:10', 'maintanance ', 'Completed', 12000),
(4, 'sanjays', 2001, 'kiran', 'suvarna\r\nvazhikulangar\r\nnorth paravur\r\n683513', 'Ernakulam', '2022-11-17', '2022-11-08 14:10:58', 'Bathroom plumbing', 'Accepted', 0),
(5, 'najel', 2010, 'rajwork', 'house\r\nthirur\r\nmalappuram', 'Malappuram', '2023-01-13', '2023-01-04 19:40:41', 'repair of AC', 'Accepted', 0),
(6, 'josh', 2003, 'streamx', 'hshbs\r\nsjsnns\r\nsnsk\r\n', 'Ernakulam', '2023-01-13', '2023-01-05 14:07:12', 'leaking waterpath', 'Completed', 5400);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` text NOT NULL,
  `categories` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `categories`) VALUES
('1', 'electrician'),
('2', 'plumber'),
('3', 'maid'),
('4', 'Electronic'),
('5', 'Designer');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cid` int(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cid`, `city`) VALUES
(3, 'Ernakulam'),
(4, 'Thrissur'),
(5, 'Malappuram'),
(7, 'Calicut');

-- --------------------------------------------------------

--
-- Table structure for table `complaintprovider`
--

CREATE TABLE `complaintprovider` (
  `cid` int(100) NOT NULL,
  `workid` int(100) NOT NULL,
  `wname` varchar(200) NOT NULL,
  `bookid` int(100) NOT NULL,
  `complaint` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintprovider`
--

INSERT INTO `complaintprovider` (`cid`, `workid`, `wname`, `bookid`, `complaint`, `status`) VALUES
(3, 2002, 'pkgroup', 3, 'sanjays not found', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `complaintuser`
--

CREATE TABLE `complaintuser` (
  `cid` int(100) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `bookid` int(100) NOT NULL,
  `complaint` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintuser`
--

INSERT INTO `complaintuser` (`cid`, `uname`, `bookid`, `complaint`, `status`) VALUES
(1, 'sanjays', 3, 'not contacted by service provider', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uusername` text NOT NULL,
  `email` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `upassword` text NOT NULL,
  `date` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uusername`, `email`, `address`, `upassword`, `date`, `status`) VALUES
('aaa', 'a@gmaail.as', 'a', '12345678', '2023-01-05 14:58:20', 'Pending'),
('najel', 'najel@gmail.com', 'house\r\nthirur\r\nmalappuram', '12345678', '2023-01-04 19:37:26', 'Accepted'),
('sanjays', 'SANJAY@GMAIL.COM', 'Suvarna house\r\nVazhikulanga\r\nN paravur', '12345678', '2022-10-09 12:02:20', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `workgroup`
--

CREATE TABLE `workgroup` (
  `wid` int(20) NOT NULL,
  `wusername` varchar(100) NOT NULL,
  `wpassword` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `noworkers` int(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `categ` varchar(100) NOT NULL,
  `yoe` int(100) NOT NULL,
  `idproof` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workgroup`
--

INSERT INTO `workgroup` (`wid`, `wusername`, `wpassword`, `emailid`, `noworkers`, `city`, `categ`, `yoe`, `idproof`, `picture`) VALUES
(2001, 'kiran', '1234', 'kirankr@gmail.com', 5, 'Ernakulam', 'electrician', 7, 'Domestic Workers Certificate', 'pic1.jpg'),
(2002, 'pkgroup', '1234', 'pkgroup@gmail.com', 8, 'Ernakulam', 'plumber', 4, 'Domestic Workers Certificate', '1.png'),
(2003, 'streamx', '1234', 'ohightecho@gmail.com', 3, 'Ernakulam', 'plumber', 7, 'Labours Welfare Certificate', 'IMG20221228191004.jpg'),
(2010, 'rajwork', '1234', 'rajwork@gmai.com', 6, 'Malappuram', 'Electronic', 6, 'Contractors Licence', 'Capture9999.jpg'),
(2011, 'rex', '1234', 'rex@gmaill.com', 7, 'Thrissur', 'Designer', 9, 'Domestic Workers Certificate', '1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `username` (`ausername`) USING HASH;

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookid`),
  ADD UNIQUE KEY `bookid` (`bookid`),
  ADD KEY `wid` (`wid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD UNIQUE KEY `catid` (`catid`(100));

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `complaintprovider`
--
ALTER TABLE `complaintprovider`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `complaintuser`
--
ALTER TABLE `complaintuser`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uusername`(100)),
  ADD UNIQUE KEY `email_2` (`email`(100)),
  ADD UNIQUE KEY `email` (`email`) USING HASH,
  ADD UNIQUE KEY `uusername` (`uusername`) USING HASH;

--
-- Indexes for table `workgroup`
--
ALTER TABLE `workgroup`
  ADD PRIMARY KEY (`wid`),
  ADD UNIQUE KEY `username` (`wusername`),
  ADD UNIQUE KEY `wid` (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complaintprovider`
--
ALTER TABLE `complaintprovider`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complaintuser`
--
ALTER TABLE `complaintuser`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workgroup`
--
ALTER TABLE `workgroup`
  MODIFY `wid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2012;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
