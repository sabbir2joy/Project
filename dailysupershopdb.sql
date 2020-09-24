-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 03:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dailysupershopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pbrand` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `quan` int(250) NOT NULL,
  `origin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `pname`, `pbrand`, `cost`, `price`, `quan`, `origin`) VALUES
(6, 'Flour', 'Tir', 35, 50, 10, 'Bangladesh'),
(7, 'Potato', 'Local', 15, 20, 20, 'Bangladesh'),
(8, 'Onion', 'Local', 45, 65, 45, 'Bangladesh'),
(9, 'Garlic', 'Local', 80, 120, 10, 'Bangladesh'),
(14, 'Mobile', 'Apple', 200, 250, 12, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `dob` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `dob`, `address`, `email`, `usertype`, `username`, `password`) VALUES
(16, 'Md', 'Hossain', 1879, 111900, 'West tangra, Sarulia, Demra, Dhaka', 'sabbir2joy@gmail.com', 'Admin', 'sabbir', '1234'),
(17, 'Joy', 'Hassan', 1234, 111900, 'Dhaka', 'abc', 'Worker', 'joy', '1234'),
(20, 'sefgsafg', 'asgfdasfsadfasdfas', 453, 111900, 'asdfasdfsdf', 'af@sdfadsf', 'Admin', 'mahmud', '12345678'),
(21, 'sadfsdf', 'sdfasdfdsaf', 326437, 111900, 'asdfafda', 'sdfgsd@sdgfzsfds', 'Admin', 'hasib', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
