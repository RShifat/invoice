-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 07:20 AM
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
-- Table structure for table `saintmartin`
--

CREATE TABLE `saintmartin` (
  `ID` int(255) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PHONE` int(14) DEFAULT NULL,
  `CHECKIN` varchar(255) DEFAULT NULL,
  `CHECKOUT` varchar(255) DEFAULT NULL,
  `ROOM` int(30) DEFAULT NULL,
  `ROOMTYPE` varchar(255) DEFAULT NULL,
  `PACKAGE` varchar(255) DEFAULT NULL,
  `PERSON` int(30) DEFAULT NULL,
  `TOKEN` varchar(30) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CHECKED OUT` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saintmartin`
--

INSERT INTO `saintmartin` (`ID`, `NAME`, `EMAIL`, `PHONE`, `CHECKIN`, `CHECKOUT`, `ROOM`, `ROOMTYPE`, `PACKAGE`, `PERSON`, `TOKEN`, `DATE`, `CHECKED OUT`) VALUES
(1, 'Shifatur Rahman', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-15', '2020-11-19', 1, 'Single', 'Student', 2, '610', '2020-11-06 06:26:05', 0),
(2, 'Shifatur Rahman', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-15', '2020-11-19', 1, 'Single', 'Student', 2, '0', '2020-11-06 06:31:35', 0),
(3, 'Abul Kashem', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-25', '2020-12-03', 3, 'Single', 'Corporate', 3, '0', '2020-11-06 08:51:47', 0),
(4, 'Kashfia', 'shifaturrahman30@gmail.com', 2147483647, '2020-11-13', '2020-11-26', 3, 'Single', 'Family', 12, '86289', '2020-11-06 09:07:33', 0),
(5, 'shifat', 'shifaturrahman30@gmail.com', 3423523, '2020-11-06', '2020-11-06', 3, 'Single', 'Student', 3, '799', '2020-11-06 09:13:59', 0),
(6, 'shifat', 'shifaturrahman30@gmail.com', 3423523, '2020-11-06', '2020-11-06', 3, 'Single', 'Student', 3, '2147483647', '2020-11-06 09:19:36', 0),
(7, 'shifat', 'shifaturrahman30@gmail.com', 3423523, '2020-11-06', '2020-11-06', 3, 'Single', 'Student', 3, '3272ba1710dd', '2020-11-06 09:20:26', 0),
(8, 'rasehd', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-13', '2020-12-10', 2, 'Single', 'Family', 4, 'dfb93d0ff925', '2020-11-06 09:31:55', 0),
(9, 'rasehd', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-13', '2020-12-10', 2, 'Single', 'Family', 4, '6863b90ce0e9', '2020-11-06 09:35:20', 0),
(10, 'Abul Kashem', 'shifaturrahman30@gmail.com', 2314124, '2020-11-06', '2020-12-03', 3, 'Single', 'Student', 1, '01bf8239eb45', '2020-11-06 09:38:27', 0),
(11, 'asad', 'shifaturrahman30@gmail.com', 124123434, '2020-11-12', '2020-11-20', 1, 'Single', 'Student', 4, '0a70e4a9a954', '2020-11-06 12:18:28', 0),
(12, 'asad', 'shifaturrahman30@gmail.com', 124123434, '2020-11-12', '2020-11-20', 1, 'Single', 'Student', 4, 'ddc4188e4724', '2020-11-06 12:21:39', 0),
(13, 'Admin', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-06', '2020-11-13', 3, 'Single', 'Family', 8, 'c66b3b3724dd', '2020-11-06 12:44:02', 0),
(14, 'Admin', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-06', '2020-11-06', 2, 'Single', 'Student', 4, '02dd335bb4c0', '2020-11-06 12:44:58', 0),
(15, 'Admin', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-04', '2020-11-16', 1, 'Single', 'Student', 3, 'd24e6564c61e', '2020-11-06 12:57:46', 0),
(16, 'asad', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-25', '2020-11-17', 4, 'double', 'Corporate', 3, '6ea6e63899a1', '2020-11-06 13:01:18', 0),
(17, 'asad', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-25', '2020-11-17', 4, 'double', 'Corporate', 3, '2e4255d29347', '2020-11-06 13:09:14', 0),
(18, 'Abul Kashem', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-25', '2020-11-17', 4, 'double', 'Corporate', 3, 'bc1a591ac004', '2020-11-06 13:16:23', 0),
(19, 'Shifat', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-25', '2020-11-17', 4, 'double', 'Corporate', 3, '61819746035a', '2020-11-06 13:17:39', 0),
(20, 'Kashfia', 'shifaturrahman30@gmail.com', 1797120584, '2020-11-26', '2020-11-21', 3, 'Single', 'Family', 4, 'e9f59f6e1bf1', '2020-11-06 13:20:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saintmartin`
--
ALTER TABLE `saintmartin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saintmartin`
--
ALTER TABLE `saintmartin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
