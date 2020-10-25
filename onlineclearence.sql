-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 08:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineclearence`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `idno` int(10) NOT NULL,
  `user` text NOT NULL,
  `gander` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `idno`, `user`, `gander`, `email`, `password`) VALUES
(2, 'Nicholas', 'Ouma', 5467890, 'Head of department', 'Female', 'tumbo@gmail.com', '12345678'),
(3, 'Nicholas', 'Oado', 8798909, 'Administrator', 'Male', 'fai@gmail.com', '12345678'),
(4, 'Nicholas', 'Atieno', 87989543, 'Administrator', 'female', 'atieno@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `id` int(11) NOT NULL,
  `addimission` varchar(20) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `level` text NOT NULL,
  `date` date NOT NULL,
  `library` varchar(50) NOT NULL,
  `hod` varchar(50) NOT NULL,
  `finance` varchar(50) NOT NULL,
  `examination` varchar(50) NOT NULL,
  `registrar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`id`, `addimission`, `fname`, `lname`, `level`, `date`, `library`, `hod`, `finance`, `examination`, `registrar`) VALUES
(1, 'bit/098/2020', 'Faith', 'Rengitianga', 'Certificate', '2020-10-08', 'NOT CLEARED', 'CLEARED', 'NOT CLEARED', 'NOT CLEARED', 'CLEARED'),
(2, 'BIT/0987/1919', 'Nicholas', 'rapa', 'Master', '2020-10-11', 'CLEARED', 'NOT CLEARED', 'NOT CLEARED', 'NOT CLEARED', 'CLEARED'),
(3, 'BIT/9876/2019', 'FaithI', 'Rengitiang', 'Barchelor', '2020-10-13', 'CLEARED', 'CLEARED', 'CLEARED', 'CLEARED', 'CLEARED'),
(4, '1919', 'Kevin', 'Otieno', 'Master', '2020-10-14', 'NOT CLEARED', 'CLEARED', 'CLEARED', 'CLEARED', 'CLEARED'),
(5, 'HR/0987/2019', 'Nick', 'mwendwe', 'Barchelor', '2020-10-19', 'CLEARED', 'NOT CLEARED', 'CLEARED', 'NOT CLEARED', 'CLEARED');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `idno` int(10) NOT NULL,
  `contact` int(20) NOT NULL,
  `gander` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `idno`, `contact`, `gander`, `email`, `password`) VALUES
(1, 'Nicholas', 'Ouma', 43535, 99999, 'feMale', 'ouma@gmail.com', '12345678'),
(2, 'faith', 'Rengitianga', 4567890, 7567894, 'Female', 'rengetiang@gmail.com', '12345678'),
(3, 'nick', 'mwendwa', 43535878, 756789876, 'Others', 'mwendwa@gmail.com', '11111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
