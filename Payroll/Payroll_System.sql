-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 30, 2021 at 01:46 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Payroll System`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`Username`, `Password`) VALUES
('root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `RegistrationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Leaving Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`id`, `FirstName`, `LastName`, `Designation`, `Address`, `City`, `Phone`, `RegistrationDate`, `Leaving Date`) VALUES
(21, 'dhkasd', 'sgadj', 'gdjhsga', 'gdhjsaggd', 'hjdsagd', 'dshjagd', '2021-01-19 13:37:00', NULL),
(22, 'sDK', 'SGKHGD', 'DGJH', 'DGJHSGD', 'DGJHGd', 'jg', '2021-01-19 14:03:25', NULL),
(23, 'gadui', 'jdh', 'GHJD', 'GJHG', 'JSGD', 'GESGD', '2021-01-19 15:35:16', NULL),
(24, 'raza', 'khatana', 'CEO', 'taxuka', 'taxila', '0213545', '2021-01-19 17:01:11', NULL),
(25, 'waqar', 'khatana', 'CEO', 'taxila', 'taxila', '123457', '2021-01-20 15:51:20', NULL),
(26, 'tyson', 'tyson', 'admin', 'tokyo', 'tokyo', '1234567', '2021-01-20 15:51:55', NULL),
(27, 'tyson', 'tyson', 'admin', 'tokyo', 'tokyo', '0000000000', '2021-01-20 15:53:05', NULL),
(28, 'gajhgdhj', 'khatana', 'dhjsgd', 'gdjg', 'jgd', 'hjgd', '2021-01-20 16:18:36', NULL),
(29, 'dgajhsgdhj', 'khatana', 'khkjshdkj', 'hkjshkdjah', 'jskhadkj', 'djskhdak', '2021-01-20 16:18:45', NULL),
(30, 'dajhsgdhg', 'khatana', 'dkahskh', 'jksadkjg', 'gdhsjagd', 'gdhsjagd', '2021-01-20 16:18:52', NULL),
(31, 'djahsgdhj', 'Khatana', 'dgjasgd', 'shkjadkjsgdkasgd gsdgasgdjsgdgas gdjsgjdgsj gdjsghdgsjhdghjagdjhagsdhjagshdgshjgdhs  dja g', 'djhsagdhd', 'hsjgdhjs', '2021-01-20 16:20:00', NULL),
(32, 'djasdj', 'Khatana', 'gajshd', 'sh gdjsagd gsjgdjh sjsafdjs asmdvshjad sdagsdj saadgsjhg s adks djsgajdgs jadgsjhagd jsa', 'sgdjhasgd', 'gdjhsagdjs', '2021-01-20 16:21:44', NULL),
(33, 'ajsgd', 'khatana', 'dhjagdjhjd', 'gashjghjsag', 'dhsjgjd', 'dfsjd', '2021-01-20 16:22:39', NULL),
(34, 'dkjsahd', 'dkjshg', 'gdjhsg', 'gfshjg', 'ddgjhg', 'jhdg', '2021-01-20 17:16:58', NULL),
(35, 'sdkj', 'DJKG', 'DHGH', 'DGJ', 'HGDHJG', 'JGD', '2021-01-20 17:18:12', NULL),
(36, 'dsdgah', 'svdjhavshjd', 'hdhjagdjh', 'adhjsd', 'sajhdahjd', 'dhdvhjasd', '2021-01-29 14:58:49', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Employees`
--
ALTER TABLE `Employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
