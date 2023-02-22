-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2023 at 09:01 PM
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
-- Database: `imiot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('pothan', 'pothan@123Akshay');

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE `item_list` (
  `sl_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `con_number` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `items` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`sl_no`, `name`, `email`, `con_number`, `quantity`, `category`, `items`) VALUES
(1, 'Adwaith', 'admin@gmail.com', 82819, 1, 'hardware', 1),
(9, 'Pothan', 'pothan@gmail.com', 83628818, 1, 'PROJECT', 2),
(10, 'Amarnath', 'amarnath@gmail.com', 7382133, 13, 'SOFTWARE', 2),
(11, 'rahul', 'rahul@gamil.com', 2133222, 1, 'HARDWARE', 2),
(12, 'rahul', 'rahul@gamil.com', 2133222, 1, 'HARDWARE', 2),
(13, 'arjun', 'arjun@gmail.com', 1234567, 12, 'SOFTWARE', 10),
(14, 'Nakul', 'nakul@mail.com', 12345, 12, 'PROJECT', 1),
(15, 'Kumaran', 'kumaran@gmail.com', 7635, 1, 'SOFTWARE', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `item_list`
--
ALTER TABLE `item_list`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_list`
--
ALTER TABLE `item_list`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
