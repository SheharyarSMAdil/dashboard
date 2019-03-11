-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 08:38 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iaq`
--

-- --------------------------------------------------------

--
-- Table structure for table `iaq3001`
--

CREATE TABLE `iaq3001` (
  `_id` int(11) NOT NULL,
  `pm_10` float NOT NULL,
  `pm_2_5` float NOT NULL,
  `voc` float NOT NULL,
  `co2` float NOT NULL,
  `humidity` float NOT NULL,
  `temperature` float NOT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iaq3001`
--

INSERT INTO `iaq3001` (`_id`, `pm_10`, `pm_2_5`, `voc`, `co2`, `humidity`, `temperature`, `date_time`) VALUES
(1, 22, 28, 1, 600, 43, 5, '2018-12-12 00:00:00'),
(2, 29, 2, 0, 750, 50, 2, '2018-12-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `iaq3002`
--

CREATE TABLE `iaq3002` (
  `_id` int(11) NOT NULL,
  `pm_10` float NOT NULL,
  `pm_2_5` float NOT NULL,
  `voc` float NOT NULL,
  `co2` float NOT NULL,
  `humidity` float NOT NULL,
  `temperature` float NOT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iaq3002`
--

INSERT INTO `iaq3002` (`_id`, `pm_10`, `pm_2_5`, `voc`, `co2`, `humidity`, `temperature`, `date_time`) VALUES
(1, 30, 20, 1, 500, 55, 2, '2018-12-25 00:00:00'),
(2, 23, 42, 3, 700, 60, 1, '2018-12-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `devices` varchar(255) NOT NULL,
  `initials` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `devices`, `initials`, `client_name`) VALUES
('adil@gmail.com', 'adil', '["iaq3001","iaq3002"]', 'Mr.', 'Shahrayar S.M. Adil');

-- --------------------------------------------------------

--
-- Table structure for table `realtimedata`
--

CREATE TABLE `realtimedata` (
  `device_id` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `pm_10` float NOT NULL,
  `pm_2_5` float NOT NULL,
  `voc` float NOT NULL,
  `co2` float NOT NULL,
  `humidity` float NOT NULL,
  `temperature` float NOT NULL,
  `date_time` datetime NOT NULL,
  `geolocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iaq3001`
--
ALTER TABLE `iaq3001`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `iaq3002`
--
ALTER TABLE `iaq3002`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `realtimedata`
--
ALTER TABLE `realtimedata`
  ADD UNIQUE KEY `device_id` (`device_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iaq3001`
--
ALTER TABLE `iaq3001`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `iaq3002`
--
ALTER TABLE `iaq3002`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
