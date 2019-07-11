-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 10:20 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siwesmgtsyst`
--

-- --------------------------------------------------------

--
-- Table structure for table `monitors`
--

CREATE TABLE `monitors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitors`
--

INSERT INTO `monitors` (`id`, `name`, `username`, `password`, `location`) VALUES
(1, 'John Ndukwe', 'john', 'john', 'Lagos'),
(2, 'Okon Marvin', 'okon', 'okon', 'Abuja'),
(3, 'Peter Iyke', 'peter', 'peter', 'Portharcourt');

-- --------------------------------------------------------

--
-- Table structure for table `qualifiedstudent`
--

CREATE TABLE `qualifiedstudent` (
  `name` varchar(100) NOT NULL,
  `regno` bigint(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifiedstudent`
--

INSERT INTO `qualifiedstudent` (`name`, `regno`, `username`, `password`) VALUES
('prosper', 2012111067, 'prosper_opara', 'thisboy'),
('AYOGU', 20151010896, 'ayogu', 'ayogu'),
('ARINZE', 20151011026, 'arinze', 'arinze');

-- --------------------------------------------------------

--
-- Table structure for table `registeredstudent`
--

CREATE TABLE `registeredstudent` (
  `id` bigint(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `regno` bigint(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `supervisorname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredstudent`
--

INSERT INTO `registeredstudent` (`id`, `firstname`, `lastname`, `regno`, `dept`, `phone`, `school`, `location`, `company`, `supervisorname`, `address`) VALUES
(1, 'BLOSSOM', 'AYOGU', 20151010896, 'IMT', '08109993242', 'SMAT', 'Lagos', 'OIl & GAS', 'MR JOHN', 'PO.BOX 16668'),
(6, 'ARINZE', 'AYOGU', 20151011000, 'FAT', '08023450745', 'SMAT', 'Lagos', 'OIl & GAS', 'MR JOHN', 'futo market'),
(7, 'Prosper', 'opara', 752647045, 'BDT', '09030988212', 'SOES', 'Abuja', 'Genesys', 'Njoku', 'Enugu road'),
(8, 'GODSPOWER', 'UCHE', 20151011000, 'IMT', '08033254784', 'SMAT', 'Portharcourt', 'google', 'amadi', 'po. box 1556');

-- --------------------------------------------------------

--
-- Table structure for table `siwescordinator`
--

CREATE TABLE `siwescordinator` (
  `id` bigint(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siwescordinator`
--

INSERT INTO `siwescordinator` (`id`, `name`, `username`, `password`) VALUES
(1, 'Amadi', 'Amadi', 'Amadi');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` bigint(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `name`, `username`, `password`) VALUES
(1, 'google', 'google', 'google'),
(2, 'remiter', 'remiter', 'remiter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitors`
--
ALTER TABLE `monitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifiedstudent`
--
ALTER TABLE `qualifiedstudent`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `registeredstudent`
--
ALTER TABLE `registeredstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siwescordinator`
--
ALTER TABLE `siwescordinator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitors`
--
ALTER TABLE `monitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `qualifiedstudent`
--
ALTER TABLE `qualifiedstudent`
  MODIFY `regno` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `registeredstudent`
--
ALTER TABLE `registeredstudent`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `siwescordinator`
--
ALTER TABLE `siwescordinator`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
