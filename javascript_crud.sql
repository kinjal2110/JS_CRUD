-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 08:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `javascript_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`) VALUES
(1, 'kinjal', 'kinjal.suryavanshi@theonetechnologies.co.in'),
(2, 'kinjal suryavanshi', 'admin.com'),
(3, 'kinjal suryavanshi', 'kinjal.suryavanshi@theonetechnologies.co.in'),
(5, 'ritu jani', 'kinjal.suryavanshi@theonetechnologies.co.in'),
(8, 'kinjal', 'kinjal.suryavanshi@theonetechnologies.co.in'),
(10, 'ritu jani', 'kinjal.suryavanshi@theonetechnologies.co.in'),
(11, 'kinjal', 'admin@123.com'),
(12, 'kinjal suryavanshi', 'kinjal.suryavanshi@theonetechnologies.co.in'),
(13, 'ritu jani', 'kinjal.suryavanshi@theonetechnologies.co.in'),
(14, 'kinjal suryavanshi', 'kinjal.suryavanshi@theonetechnologies.co.in'),
(15, 'ritu jani', 'admin@123.com'),
(16, 'ritu jani', 'admin@123.com'),
(17, 'ritu jani', 'kinjal.suryavanshi@theonetechnologies.co.in'),
(19, 'chips', 'kinjal@123.com'),
(20, 'Rahul pandya', 'rahulpandya@theonegmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
