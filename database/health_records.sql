-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 03:35 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountinformation`
--

CREATE TABLE `accountinformation` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `id_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `account_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountinformation`
--

INSERT INTO `accountinformation` (`id`, `name`, `lastname`, `middle_name`, `age`, `gender`, `username`, `password`, `contact_number`, `id_number`, `email`, `account_status`) VALUES
(1, 'lance', 'cabiscuelas', 'ladrera', '15', 'male', 'lance21', 'lance21', '09284', 's2038589', 'ladrera21@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountinformation`
--
ALTER TABLE `accountinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountinformation`
--
ALTER TABLE `accountinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
