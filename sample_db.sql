-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 05:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sample_user`
--

CREATE TABLE `sample_user` (
  `ID` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text,
  `lname` text NOT NULL,
  `phonenum` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample_user`
--

INSERT INTO `sample_user` (`ID`, `fname`, `mname`, `lname`, `phonenum`, `email`, `password`) VALUES
(1, 'sample ', '', 'user', 9843435654, 'user@gmail.com', '12345'),
(2, 'sample', '', 'user2', 9754355356, 'user2@gmail.com', '12345'),
(3, 'sample', '', 'user3', 9645435353, 'user3@gmail.com', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sample_user`
--
ALTER TABLE `sample_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sample_user`
--
ALTER TABLE `sample_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
