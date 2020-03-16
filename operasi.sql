-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 07:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aritmatika`
--

-- --------------------------------------------------------

--
-- Table structure for table `operasi`
--

CREATE TABLE `operasi` (
  `id` int(5) NOT NULL,
  `a` double NOT NULL,
  `b` double NOT NULL,
  `hasil` double NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operasi`
--

INSERT INTO `operasi` (`id`, `a`, `b`, `hasil`, `ket`) VALUES
(1, 5, 6, 11, 'B'),
(2, 7, 1, 8, 'A'),
(4, 1, 2, 3, 'A'),
(5, 1, 11, 12, 'B'),
(6, -2, -2, -2, 'D'),
(7, 3, 3, 3, 'A'),
(8, 3, 3, 3, 'A'),
(9, 44, 44, 44, 'C'),
(10, 2, 2, 2, 'A'),
(11, 2, 2, 2, 'A'),
(12, 144, 233, 377, 'C'),
(13, 5632, 11264, 11264, 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `operasi`
--
ALTER TABLE `operasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `operasi`
--
ALTER TABLE `operasi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
