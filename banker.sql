-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 07:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banker`
--

-- --------------------------------------------------------

--
-- Table structure for table `banker`
--

CREATE TABLE `banker` (
  `S.No` int(2) NOT NULL,
  `Deposit To` varchar(255) NOT NULL,
  `Account Number` int(11) NOT NULL,
  `Refrence/Challan Number.:` int(11) NOT NULL,
  `Branch Name` varchar(255) NOT NULL,
  `Your Name` text NOT NULL,
  `Your Account Number` int(11) NOT NULL,
  `PAN` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banker`
--

INSERT INTO `banker` (`S.No`, `Deposit To`, `Account Number`, `Refrence/Challan Number.:`, `Branch Name`, `Your Name`, `Your Account Number`, `PAN`, `Amount`) VALUES
(1, 'lccnsdcds', 422341, 3552335, 'Varanasi', 'icncc', 44534442, 5564444, 435423);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banker`
--
ALTER TABLE `banker`
  ADD PRIMARY KEY (`S.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banker`
--
ALTER TABLE `banker`
  MODIFY `S.No` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
