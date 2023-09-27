-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 01:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devine_mercy_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `identification_number` int(11) NOT NULL,
  `department` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date_added` date NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `email`, `phone_no`, `identification_number`, `department`, `password`, `date_added`, `added_by`) VALUES
(1, 'maxwel james', 'maxwel@gmail.com', 2147483647, 0, '', 'f1b708bba17f1ce948dc979f4d7092bc', '2023-04-24', 0),
(2, 'James Dan', 'Dan@gmail.com', 2147483647, 0, '', 'e11170b8cbd2d74102651cb967fa28e5', '2023-04-24', 0),
(3, 'markus', 'tada@gmail.com', 2136841222, 0, '', '3a08fe7b8c4da6ed09f21c3ef97efce2', '2023-04-26', 0),
(4, 'grace moses', 'grace@gmail.com', 2147483647, 0, '', '4aee3e28df37ea1af64bd636eca59dcb', '2023-04-26', 0),
(5, 'tomi mofobi', 'mofobi@gmail.com', 2147483647, 0, '', 'e53a68903e2c336a890907125b489abd', '2023-04-26', 0),
(6, 'tomi mofobi', 'mofobi@gmail.com', 2147483647, 0, '', 'e53a68903e2c336a890907125b489abd', '2023-04-26', 0),
(7, 'success samuel', 'success@gmail.com', 2147483647, 0, 'd', '0ff5247ca8a0dd247b3ed7428922b7ef', '2023-04-26', 0),
(8, 'Ruth micheal', 'ruth@gmail.com', 2147483647, 0, 'd', '664fae06a748e656511d55b59fc6f85e', '2023-04-26', 0),
(9, 'emmanuel yakubu', 'emmanuel@gmail.com', 2147483647, 0, 'lt', '664fae06a748e656511d55b59fc6f85e', '2023-04-28', 0),
(10, 'Ruth micheal', 'ruth@gmail.com', 2147483647, 0, 'd', 'f1b708bba17f1ce948dc979f4d7092bc', '2023-08-31', 0),
(11, 'emmanuel yakubu', 'emmanuel@gmail.com', 2147483647, 0, 'd', 'f1b708bba17f1ce948dc979f4d7092bc', '2023-09-27', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
