-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 08:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

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
(1, 'Lance Jared Cabiscuelas', 'cabiscuelas', 'Malvar Batangas', 'ladrera', '15', 'male', 'lance21', 'lance21', '09307980536', 's2038589', 'ladrera21@gmail.com', 'admin'),
(0, 'kim', 'kong', 'quezon city', 'coco', '34', 'male', 'coco', 'coco', '12233', 'SN3959506', 'coco@gmail.com', 'nurse');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `date_in` varchar(30) NOT NULL,
  `time_in` varchar(30) NOT NULL,
  `date_out` varchar(30) NOT NULL,
  `time_out` varchar(30) NOT NULL,
  `login_id` int(11) NOT NULL,
  `login_username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `date_in`, `time_in`, `date_out`, `time_out`, `login_id`, `login_username`) VALUES
(14, 'Wed April 14 2021', '11:00:pm', 'Wed April 14 2021', '11:01:pm', 1, 'lance21'),
(15, 'Wed April 14 2021', '11:01:pm', 'Wed April 14 2021', '11:02:pm', 1, 'lance21'),
(16, 'Wed April 14 2021', '11:02:pm', 'Wed April 14 2021', '11:03:pm', 1, 'lance21'),
(18, 'Wed April 14 2021', '11:04:pm', 'Wed April 14 2021', '11:04:pm', 0, 'coco'),
(21, 'Sat April 17 2021', '8:37:am', 'Sat April 17 2021', '4:15:pm', 1, 'lance21'),
(22, 'Sat April 17 2021', '11:11:am', 'Sat April 17 2021', '11:12:am', 0, 'coco'),
(24, 'Sat April 17 2021', '11:13:am', 'Sat April 17 2021', '11:14:am', 0, 'coco'),
(27, 'Sat April 17 2021', '12:47:am', 'Sat April 17 2021', '2:31:am', 1, 'lance21'),
(28, 'Sat April 17 2021', '2:32:am', 'Sat April 17 2021', '2:39:am', 1, 'lance21'),
(30, 'Sun April 18 2021', '9:13:am', 'Sun April 18 2021', '12:11:pm', 1, 'lance21'),
(31, 'Sun April 18 2021', '12:11:pm', 'Sun April 18 2021', '12:12:pm', 0, 'coco'),
(32, 'Sun April 18 2021', '12:12:pm', '', '', 1, 'lance21'),
(33, 'Sun April 18 2021', '12:34:pm', '', '', 0, 'coco'),
(34, 'Mon April 19 2021', '2:40:pm', '', '', 1, 'lance21'),
(35, 'Fri April 23 2021', '2:59:pm', '', '', 1, 'lance21');

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
  `medecine_take` varchar(100) NOT NULL,
  `parent_contact` varchar(50) NOT NULL,
  `issue_status` varchar(20) NOT NULL,
  `date_issue` varchar(50) NOT NULL,
  `time_issue` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `lastname`, `id_number`, `issue`, `contact_number`, `address`, `gender`, `note`, `age`, `guardian`, `medecine_take`, `parent_contact`, `issue_status`, `date_issue`, `time_issue`) VALUES
(1, 'Lance Jared Cabiscuelas', 'Cabiscuelas', 'jhgkjk', 'gkgk', '09307980536', 'Malvar Batangas', 'male', 'fxgfff', 'g456', 'Lance Jared Cabiscuelas', '', '09307980536', 'minor', '2021-03-04', '1:17 PM'),
(2, 'Lance Jared Cabiscuelas', 'Cabiscuelas', 'jhgkjk', 'gkgk', '09307980536', 'Malvar Batangas', 'male', 'need to undergo to ctscan', 'g456', 'Lance Jared Cabiscuelas', '', '09307980536', 'major', '2021-04-13', '6:53 PM'),
(4, 'jack', 'jill', 'S2349459', 'toothache', '93485', 'jsdjhsdjs', 'male', 'test test', '22', 'jsdjf', '', 'jdsfhjsdf', 'minor', '2021-04-17', '11:17 AM'),
(5, 'christine', 'senete', 'SN35965', 'Headache', '094574757', '2343 malvar', 'female', 'minor problem', '23', 'Florida senete', 'Biogesic', '254354535', 'minor', '2021-04-13', '02:49 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
