-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 03:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new1`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `userpwd` varchar(55) NOT NULL,
  `useremail` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `userpwd`, `useremail`) VALUES
(1, 'kavin', '1234', 'kavin@gmail.com'),
(2, 'kavin', '', ''),
(4, 'kavin', '111', 'kavin@gmail.com'),
(5, 'kavin', 'kavin', 'kavin@gmail.com'),
(6, 'kavin1', 'kavin', 'kavin@gmail.com'),
(7, 'kavin1', '111', 'kavin@gmail.com'),
(8, 'kavin1', '111', 'kavin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register1`
--

CREATE TABLE `register1` (
  `id` int(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `TxtDOB` varchar(200) NOT NULL,
  `AGE` varchar(200) NOT NULL,
  `message` varchar(155) NOT NULL,
  `countrycode` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `countySel` varchar(200) NOT NULL,
  `stateSel` varchar(200) NOT NULL,
  `districtSel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register1`
--

INSERT INTO `register1` (`id`, `username`, `TxtDOB`, `AGE`, `message`, `countrycode`, `phone`, `Gender`, `countySel`, `stateSel`, `districtSel`) VALUES
(24, 'kavin', '12/12/1999', '23 years old', '99', '+62', '9578814042', 'Male', 'Canada', 'Columbia', 'Washington'),
(30, 'kavin', '12/12/1999', '23 years old', 'kavin', '+62', '9578814012', 'Male', 'Canada', 'Alberta', 'Acadia'),
(33, 'kavin', '12/12/1999', '23', 'KAVI', '+62', '9578814042', 'Male', 'Australia', 'Victoria', 'Altona'),
(34, 'kavin', '12/12/1990', '32', 'kavin', '+91', '3578814012', 'Male', 'India', 'Kerala', 'Thiruvananthapuram'),
(37, 'kavin', '11/11/1999', '23', 'kavi', '+91', '3578814012', 'Male', 'Australia', 'South Australia', 'Dunstan'),
(38, 'kavin', '12/12/1990', '32', 'kavin', '+62', '9578814042', 'Male', 'India', 'Delhi', 'new Delhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register1`
--
ALTER TABLE `register1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register1`
--
ALTER TABLE `register1`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
