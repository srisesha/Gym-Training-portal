-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 08:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cid` int(11) NOT NULL,
  `cname` varchar(60) NOT NULL,
  `batch` varchar(60) NOT NULL,
  `timings` varchar(60) NOT NULL,
  `trainer` varchar(80) NOT NULL,
  `trainerinfo` varchar(100) NOT NULL,
  `duration` varchar(60) NOT NULL,
  `fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `cname`, `batch`, `timings`, `trainer`, `trainerinfo`, `duration`, `fees`) VALUES
(2, 'Western Dance ', 'evening ', '6.30 - 8.30pm', 'keerthi', 'good in western dance', '4 months', 2500),
(3, 'yoga', 'Morning', '6.30 am-8.00 am', 'naveen', 'good in yoga and also a winner of national yoga competition', '3 months', 1500),
(4, 'Karate', 'evening ', '6.30 - 8.30pm', 'Sensai Shihan Hussaini', '32 years of training and he is a holder 5th dan black belt', '6 months', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `enquirydetail`
--

CREATE TABLE `enquirydetail` (
  `enid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `endate` varchar(60) NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquirydetail`
--

INSERT INTO `enquirydetail` (`enid`, `userid`, `username`, `subject`, `endate`, `content`) VALUES
(1, 2, 'keerthi', 'about dance', '17/03/10', 'i want dance class could you tell me the fees and course duration');

-- --------------------------------------------------------

--
-- Table structure for table `eventsinfo`
--

CREATE TABLE `eventsinfo` (
  `eid` int(11) NOT NULL,
  `eventname` varchar(60) NOT NULL,
  `category` varchar(60) NOT NULL,
  `edate` varchar(60) NOT NULL,
  `participation` varchar(70) NOT NULL,
  `price` varchar(80) NOT NULL,
  `details` varchar(80) NOT NULL,
  `photo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventsinfo`
--

INSERT INTO `eventsinfo` (`eid`, `eventname`, `category`, `edate`, `participation`, `price`, `details`, `photo`) VALUES
(1, 'national levekl karate competion', 'yoga', '20/3/2017', '100', '3 prizes', 'winner of the karate student got a computer', 'images.jpg'),
(2, 'dance 2017', 'dance', '19/3/2017', '40 STUDENTS', '4 PRIZES', 'competition held on rajaya mathiya mandram', '5544.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offerpackage`
--

CREATE TABLE `offerpackage` (
  `offerid` int(11) NOT NULL,
  `offername` varchar(60) NOT NULL,
  `details` varchar(100) NOT NULL,
  `course` varchar(60) NOT NULL,
  `validity` varchar(60) NOT NULL,
  `photo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offerpackage`
--

INSERT INTO `offerpackage` (`offerid`, `offername`, `details`, `course`, `validity`, `photo`) VALUES
(1, 'Summer Offer', '20% discount', 'yoga', '31/3/2017', 'y1.jpg'),
(2, 'vijaya dashami offer', 'get 40% reduction in western dance ', 'Western Dance ', '16/6/2017', 'd1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `uid` int(11) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `confirm` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`uid`, `uname`, `password`, `confirm`, `email`, `contact`) VALUES
(1, 'anitha@gmail.com', 'anitha', 'anitha', 'anitha@gmail.com', '9845678987'),
(2, 'keerthi', 'keerthi', 'keerthi', 'keerthi@gmail.com', '9876737373');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `enquirydetail`
--
ALTER TABLE `enquirydetail`
  ADD PRIMARY KEY (`enid`);

--
-- Indexes for table `eventsinfo`
--
ALTER TABLE `eventsinfo`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `offerpackage`
--
ALTER TABLE `offerpackage`
  ADD PRIMARY KEY (`offerid`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `enquirydetail`
--
ALTER TABLE `enquirydetail`
  MODIFY `enid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `eventsinfo`
--
ALTER TABLE `eventsinfo`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `offerpackage`
--
ALTER TABLE `offerpackage`
  MODIFY `offerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
