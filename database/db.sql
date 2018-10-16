-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2018 at 01:08 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modl29`
--

-- --------------------------------------------------------

--
-- Table structure for table `biomodl29`
--

CREATE TABLE `biomodl29` (
  `bioid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `dob` date NOT NULL,
  `phonenumber` varchar(20) NOT NULL DEFAULT 'not given',
  `city` varchar(50) NOT NULL DEFAULT 'not given',
  `country` varchar(50) NOT NULL DEFAULT 'India',
  `institute` varchar(500) NOT NULL DEFAULT 'not given',
  `status` varchar(500) NOT NULL DEFAULT 'not given',
  `designation` varchar(300) NOT NULL DEFAULT 'not given',
  `userimage` varchar(500) NOT NULL DEFAULT 'img/avtar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commentmodl29`
--

CREATE TABLE `commentmodl29` (
  `commentid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `freindid` int(11) NOT NULL,
  `contents` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commentreply`
--

CREATE TABLE `commentreply` (
  `commentreplyid` int(11) NOT NULL,
  `commentid` int(11) NOT NULL,
  `contents` varchar(10000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `likemodl29`
--

CREATE TABLE `likemodl29` (
  `likeid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `freindid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postmodl29`
--

CREATE TABLE `postmodl29` (
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `contents` varchar(10000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `starmodl29`
--

CREATE TABLE `starmodl29` (
  `starid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `friendid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usermodl29`
--

CREATE TABLE `usermodl29` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(300) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biomodl29`
--
ALTER TABLE `biomodl29`
  ADD PRIMARY KEY (`bioid`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `commentmodl29`
--
ALTER TABLE `commentmodl29`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `commentreply`
--
ALTER TABLE `commentreply`
  ADD PRIMARY KEY (`commentreplyid`);

--
-- Indexes for table `likemodl29`
--
ALTER TABLE `likemodl29`
  ADD PRIMARY KEY (`likeid`);

--
-- Indexes for table `postmodl29`
--
ALTER TABLE `postmodl29`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `starmodl29`
--
ALTER TABLE `starmodl29`
  ADD PRIMARY KEY (`starid`);

--
-- Indexes for table `usermodl29`
--
ALTER TABLE `usermodl29`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biomodl29`
--
ALTER TABLE `biomodl29`
  MODIFY `bioid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commentmodl29`
--
ALTER TABLE `commentmodl29`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commentreply`
--
ALTER TABLE `commentreply`
  MODIFY `commentreplyid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `likemodl29`
--
ALTER TABLE `likemodl29`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `postmodl29`
--
ALTER TABLE `postmodl29`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `starmodl29`
--
ALTER TABLE `starmodl29`
  MODIFY `starid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usermodl29`
--
ALTER TABLE `usermodl29`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;