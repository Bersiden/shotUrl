-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 08:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `shoturl`
--

CREATE TABLE `shoturl` (
  `id` int(11) NOT NULL,
  `urlName` varchar(255) NOT NULL,
  `shotUrl` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `view` int(11) NOT NULL DEFAULT 0,
  `startDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `modifyDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shoturl`
--

INSERT INTO `shoturl` (`id`, `urlName`, `shotUrl`, `status`, `view`, `startDate`, `createDate`, `modifyDate`) VALUES
(1, 'https://www.google.com/', 'Aa1d5f5wf', 1, 2, '2021-09-09 00:30:22', '2021-09-09 00:30:22', '2021-09-09 00:30:22'),
(2, 'tsetsetset', 'dZRSrH0nE', 0, 0, '2021-09-09 00:41:15', '2021-09-09 00:41:15', '2021-09-09 00:41:15'),
(3, 'tsetset', '4hRWIOEKD', 0, 0, '2021-09-09 00:44:35', '2021-09-09 00:44:35', '2021-09-09 00:44:35'),
(4, 'tsetsetse', '1JkTt1qeY', 0, 0, '2021-09-09 00:44:44', '2021-09-09 00:44:44', '2021-09-09 00:44:44'),
(5, 'tsetset', 'CLSpGgqm9', 0, 0, '2021-09-09 01:08:22', '2021-09-09 01:08:22', '2021-09-09 01:08:22'),
(6, 'setsetse', 'bFgGRCHXN', 1, 0, '2021-09-09 01:08:57', '2021-09-09 01:08:57', '2021-09-09 01:08:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shoturl`
--
ALTER TABLE `shoturl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shoturl`
--
ALTER TABLE `shoturl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
