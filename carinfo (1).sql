-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 09:20 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `dob`, `email`, `level`) VALUES
(2, 'whysoserious', 'hgdvcghvdhg', '1996-11-22', 'principaljupiterpublic@gmail.com', 1),
(3, 'chiku', '1111', '1996-11-22', 'cs.shiba@hotmail.com', 2),
(4, 'dsd', '1111', '2019-11-03', 'shibaprasadjena12@gmail.com', 2),
(5, 'Chiku Viper', 'admin', '2000-06-16', 'chikubtech@gmail.com', 2),
(7, 'pinku', 'adminchiku', '1999-06-11', 'satyaprasadjena9@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `cid` int(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cbrand` varchar(50) NOT NULL,
  `variants` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `engine` varchar(50) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `fueltype` varchar(50) NOT NULL,
  `seatingcapacity` varchar(2) NOT NULL,
  `aditionaldetails` varchar(250) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`cid`, `cname`, `cbrand`, `variants`, `price`, `engine`, `transmission`, `fueltype`, `seatingcapacity`, `aditionaldetails`, `photo`) VALUES
(8, 'Toyota Fortuner', 'Toyota', '2.7 4x2 MT,2.7 4x2 AT', '32.34Lakhs, 34.17Lakhs', '2694 to 2755 cc', 'Manual and Automatic', 'Diesel and Petrol', '7', '52603 for 5 years', 'toyota.png'),
(9, 'Bmw 3 series', 'BMW', '2.7 4x2 MT,2.7 4x2 AT', '57.93Lakhs, 62.73Lakhs', '1995 to 1998 cc', 'Automatic', 'Diesel and Petrol', '5', 'Call 18002090230', 'bmw.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
