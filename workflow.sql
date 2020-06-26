-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2019 at 11:25 AM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin1', 'admin1'),
(3, 'ashikali', 'ashik');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Lid` int(11) NOT NULL,
  `Location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Lid`, `Location`) VALUES
(1, 'Peringala'),
(2, 'Pallikara'),
(3, 'Padathikara'),
(4, 'Karimugal'),
(5, 'marampally');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `SlNo` int(11) NOT NULL,
  `Tpid` int(11) NOT NULL,
  `Uid` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `prev` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`SlNo`, `Tpid`, `Uid`, `Status`, `prev`) VALUES
(4, 3, 3, 'confirm', 0),
(6, 1, 1, 'pending', 0),
(8, 4, 1, 'confirm', 0),
(9, 4, 1, 'pending', 0),
(10, 2, 6, 'confirm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `Tid` int(11) NOT NULL,
  `Trade` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trade`
--

INSERT INTO `trade` (`Tid`, `Trade`) VALUES
(1, 'Plumber'),
(2, 'Electrician'),
(3, 'Painter'),
(4, 'Carpenter'),
(5, 'Mechanic'),
(7, 'Builder'),
(6, 'Farmer'),
(8, 'sweeper'),
(9, '');

-- --------------------------------------------------------

--
-- Table structure for table `tradeperson`
--

CREATE TABLE `tradeperson` (
  `Tpid` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Trade` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `PhoneNo` bigint(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tradeperson`
--

INSERT INTO `tradeperson` (`Tpid`, `Name`, `Trade`, `Location`, `PhoneNo`, `Username`, `Password`) VALUES
(1, 'Ram', 'Plumber', 'Peringala', 544334655, 'ram', 'ram'),
(2, 'rajan', 'Electrician', 'Peringala', 6978969, 'rajan', 'rajan'),
(3, 'sabir', 'Plumber', 'Pallikara', 4654574884, 'sabir', 'sabir'),
(4, 'Dileep', 'Carpenter', 'Karimugal', 5436667, 'dileep', 'dileep');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Uid` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Uid`, `Name`, `Location`, `Username`, `Password`) VALUES
(1, 'kadheeja', 'peringala', 'kadheeja', 'kadheeja'),
(2, 'jisna', 'Peringala', 'jisna', 'jisna'),
(3, 'hyru', 'Pallikara', 'hyru', 'hyru'),
(4, 'krishnapriya', 'Padathikara', 'krishnapriya', 'krishnapriya'),
(5, 'askar ali', 'Peringala', 'askar', 'askar'),
(6, 'kadheeja', 'Padathikara', 'kadheeja', 'kadheeja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Lid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`SlNo`);

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`Tid`);

--
-- Indexes for table `tradeperson`
--
ALTER TABLE `tradeperson`
  ADD PRIMARY KEY (`Tpid`),
  ADD KEY `Trade` (`Trade`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `Lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `SlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `trade`
--
ALTER TABLE `trade`
  MODIFY `Tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tradeperson`
--
ALTER TABLE `tradeperson`
  MODIFY `Tpid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
