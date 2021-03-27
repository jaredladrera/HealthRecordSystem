-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 02:22 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `address` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `account_password` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `id_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `account_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountinformation`
--

INSERT INTO `accountinformation` (`id`, `name`, `lastname`, `address`, `middle_name`, `age`, `gender`, `username`, `account_password`, `contact_number`, `id_number`, `email`, `account_status`) VALUES
(1, 'Lance Jared Cabiscuelas', 'cabiscuelas', 'Malvar Batangas', 'ladrera', '15', 'male', 'lance21', 'lance21', '09307980536', 's2038589', 'ladrera21@gmail.com', 'nurse');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `note` varchar(200) NOT NULL,
  `age` varchar(20) NOT NULL,
  `guardian` varchar(100) NOT NULL,
  `parent_contact` varchar(50) NOT NULL,
  `issue_status` varchar(20) NOT NULL,
  `date_issue` varchar(50) NOT NULL,
  `time_issue` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `lastname`, `id_number`, `issue`, `contact_number`, `address`, `gender`, `note`, `age`, `guardian`, `parent_contact`, `issue_status`, `date_issue`, `time_issue`) VALUES
(1, 'Lance Jared Cabiscuelas', 'Cabiscuelas', 'jhgkjk', 'gkgk', '09307980536', 'Malvar Batangas', 'male', 'fxgfff', 'g456', 'Lance Jared Cabiscuelas', '09307980536', 'minor', '2021-03-04', '1:17 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
