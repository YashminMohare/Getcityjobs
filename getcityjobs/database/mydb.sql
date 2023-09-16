-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 12:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `recruitername` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `jobtitle` text DEFAULT NULL,
  `salary` int(255) DEFAULT NULL,
  `jobtype` char(255) DEFAULT NULL,
  `joblocation` varchar(300) DEFAULT NULL,
  `jobtiming` varchar(255) DEFAULT NULL,
  `jobdescription` varchar(300) DEFAULT NULL,
  `aboutcompany` varchar(300) DEFAULT NULL,
  `workerrequire` int(255) DEFAULT NULL,
  `postingdate` date DEFAULT NULL,
  `joiningdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `recruitername`, `email`, `qualification`, `jobtitle`, `salary`, `jobtype`, `joblocation`, `jobtiming`, `jobdescription`, `aboutcompany`, `workerrequire`, `postingdate`, `joiningdate`) VALUES
(114, 'Yasmin mohare', 'yashminmohaxre2005@gmail.com', 'diploma pass out', 'COMPUTER OPRATOR', 5000, 'Full Time', 'moti nagar balaghat', '10 AM TO 5 PM', 'HEY I NEED A COMPUTER OPERATOR', 'MY SHOP NAME IS ANURADHA MAAL', 5, '2023-04-18', '2023-04-18'),
(115, 'Peter Parker', 'himanshushrirang4@gmail.com', 'MBBS', 'HOSPITAL COMPUNDER', 399999, 'full-time', 'HANUMAN CHOWK BALAGHAT', '10AM TO 6PM', 'HEY I WANT A MBBS COMPLETE BOY ', ' HOSPITAL NAME :  VISHVKARMA PRIVATE', 5, '2023-04-19', '2023-04-17'),
(116, 'Peter Parker', 'himanshushrirang4@gmail.com', 'MBBS', 'HOSPITAL COMPUNDER', 399999, 'full-time', 'HANUMAN CHOWK BALAGHAT', '10AM TO 6PM', 'HEY I WANT A MBBS COMPLETE BOY ', ' HOSPITAL NAME :  VISHVKARMA PRIVATE', 5, '2023-04-19', '2023-04-17'),
(118, 'sharad', 'sharaddahate@gmail.com', 'ba', 'jjn', 10000, 'Full Time', 'moti nagar', '10am to 5pm', 'sxasxsds', 'nxsn jsnj', 2, '2023-04-19', '2023-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `gender` char(10) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `aqualification` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `gender`, `experience`, `qualification`, `aqualification`, `password`, `date`) VALUES
(34, 'HARSH', 'SHRIRANG', 'himanshushrirang4@gmail.com', 'male', '3 year', 'Diploma (CS) & Degree (BA)', 'DSA    ', '$2y$04$IchUi2v0n0HheWVUqW6tm.V3nT1E6ZgJrfzB.mYLGX.VcpNfzFlPu', '2023-04-18'),
(35, 'peter', 'Parker', 'peterparker@gmail.com', 'Male', '3 year', 'Diploma (CS) & Degree (BA)', 'DSA ', '$2y$04$67Z0AhPDAHUYzVcVSYpi2u2cqlT4rUjWvDJRpGvNB2CGyXmO9lusW', '2023-04-16'),
(37, 'Toni', 'starks', 'toni@gmail.cm', 'Male', '.......................', '..........................', '............................ ', '$2y$04$FjkkaMrScXxVzR8WO30s0eR/.9ItWEj.XGWVp47RxmFRulglnjPr2', '2023-04-16'),
(43, 'hkjb', 'gjsb', 'aryantshrirang4@gmail.com', 'female', '2 year', 'diploma', 'DSA p', '$2y$04$CsjfYl1NHRG4rVBTD5UBneuyvkZCyBjB.OSKfzD/fTS4QoRdQO58W', '2023-04-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
