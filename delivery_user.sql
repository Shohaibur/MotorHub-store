-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 05:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delivery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_user`
--

CREATE TABLE `delivery_user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `driving_license_no` varchar(50) NOT NULL,
  `transport_license_no` varchar(50) NOT NULL,
  `transport` varchar(15) NOT NULL,
  `delivery_area` varchar(30) NOT NULL,
  `payment_option` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_user`
--

INSERT INTO `delivery_user` (`id`, `email`, `name`, `phone_number`, `gender`, `dob`, `driving_license_no`, `transport_license_no`, `transport`, `delivery_area`, `payment_option`, `password`) VALUES
(13, 'joya@gmail.com', 'nabila', '01750822500', 'female', '2000-12-30', 'mN155555', 'mN155555', 'car', 'inside_dhaka', 'cash', 'mN155555'),
(26, 'joya2@gmail.com', 'nabila', '11111111111', 'female', '2001-03-01', 'mN155555', 'mN155555', 'car', 'inside_dhaka', 'cash', 'mN155555'),
(27, 'joya3@gmail.com', 'nabila', '01833184044', 'female', '2001-03-01', 'mN155555', 'mN155555', 'car', 'inside_dhaka', 'cash', 'mN155555'),
(29, 'joya5@gmail.com', 'nabila', '11111111111', 'female', '2001-12-12', 'mN155555', 'mN155555', 'car', 'inside_dhaka', 'cash', 'mN155555'),
(30, 'jadeb@gmail.com', 'jaded', '01234567891', 'female', '1999-12-22', 'mN155555', 'mN155555', 'car', 'inside_dhaka', 'cash', 'mN155555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery_user`
--
ALTER TABLE `delivery_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE_EMAIL` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery_user`
--
ALTER TABLE `delivery_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
