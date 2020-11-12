-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 07:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porjoton`
--

-- --------------------------------------------------------

--
-- Table structure for table `bil`
--

CREATE TABLE `bil` (
  `ID` int(255) NOT NULL,
  `TOKEN` varchar(255) DEFAULT NULL,
  `ROOM` int(255) DEFAULT NULL,
  `FOOD` int(255) DEFAULT NULL,
  `OTHERS` int(255) DEFAULT NULL,
  `DISCOUNT` float(5,3) NOT NULL,
  `VAT` float(9,3) NOT NULL,
  `TOTAL` float(9,3) NOT NULL,
  `PMETHOD` text NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bil`
--

INSERT INTO `bil` (`ID`, `TOKEN`, `ROOM`, `FOOD`, `OTHERS`, `DISCOUNT`, `VAT`, `TOTAL`, `PMETHOD`, `DATE`) VALUES
(1, 'e9f59f6e1bf1', 3000, 560, 0, 0.000, 999.999, 999.999, '', '2020-11-09 13:52:56'),
(5, '01bf8239eb45', 400, 875, 5767, 12.000, 23.000, 5646.000, '', '2020-11-09 16:41:47'),
(6, 'bc1a591ac004', 4000, 0, 0, 0.000, 10.000, 4400.000, '', '2020-11-11 16:00:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bil`
--
ALTER TABLE `bil`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bil`
--
ALTER TABLE `bil`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
