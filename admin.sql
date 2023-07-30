-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 05:05 AM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Number` int(12) NOT NULL,
  `Gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Dob` date NOT NULL,
  `Nominee_Name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Nominee_Age` int(4) NOT NULL,
  `Nominee_Gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Relation_with_Admin` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Tin_Number` int(6) NOT NULL,
  `Password` text CHARACTER SET utf8 NOT NULL,
  `image` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Email`, `Number`, `Gender`, `Dob`, `Nominee_Name`, `Nominee_Age`, `Nominee_Gender`, `Relation_with_Admin`, `Tin_Number`, `Password`, `image`) VALUES
('Nabila', 'tonoy@gmail.com', 12345678, '', '2000-12-07', 'Forhad', 23, 'on', 'Sister', 333456, 'Aa12@@', 'images/3.png'),
('jaml', 'tonoy@gmail.com', 3456789, '', '2000-12-14', 'kamal', 23, 'on', 'Son', 345678, 'Aa12@@', 'images/4.png'),
('Shoyeb', 'tonoy@gmail.com', 2147483647, '', '1999-12-14', 'kamal', 23, 'Male', 'Son', 223456, 'Aa12@@', 'images/im.jpg'),
('Forhadul', 'tonoy@gmail.com', 12345678, '', '1999-12-23', 'kamal', 23, '', 'Son', 234567, 'Ab12@#', 'images/1.png'),
('jabed', 'Nabila@gmail.com', 123456789, '', '1999-12-07', 'Forhad', 12, 'Male', 'Son', 234567, 'As12@@', 'images/2.png'),
('Ssazzad', 'sazzad@gmail.com', 123456789, '', '1999-12-02', 'Forhad', 23, 'Male', 'Brother', 234123, 'As12@@', 'images/Screenshot (3).png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
