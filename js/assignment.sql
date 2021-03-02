-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 06:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` char(30) NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fname`, `lname`, `salary`) VALUES
(1, 'Sara', 'Ali', 3000.5),
(2, 'sangar', 'tahir', 3000.5),
(3, 'sangar', 'tahir', 3000.5),
(21, 'Sara', 'Ali', 3000.5),
(22, 'Sara', 'Ali', 3000.5),
(23, 'Sara', 'Ali', 3000.5),
(24, 'Sara', 'Ali', 3000.5),
(25, 'Sara', 'Ali', 3000.5),
(26, 'Sara', 'Ali', 3000.5),
(27, 'Sara', 'Ali', 3000.5),
(28, 'Sara', 'Ali', 3000.5),
(29, 'Sara', 'Ali', 3000.5),
(30, 'Sara', 'Ali', 3000.5),
(31, 'Sara', 'Ali', 3000.5),
(32, 'Sara', 'Ali', 3000.5),
(33, 'Sara', 'Ali', 3000.5),
(34, 'Sara', 'Ali', 3000.5),
(35, 'Sara', 'Ali', 3000.5),
(36, 'Sara', 'Ali', 3000.5),
(37, 'Sara', 'Ali', 3000.5),
(38, 'Sara', 'Ali', 3000.5),
(39, 'Sara', 'Ali', 3000.5),
(40, 'Sara', 'Ali', 3000.5),
(41, 'Sara', 'Ali', 3000.5),
(44, 'Sara', 'Ali', 3000.5),
(45, 'Sara', 'Ali', 3000.5),
(46, 'Sara', 'Ali', 3000.5),
(47, 'Sara', 'Ali', 3000.5),
(48, 'Sara', 'Ali', 3000.5);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(6) NOT NULL,
  `tag_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`) VALUES
(15, 'xawxoshy'),
(15, 'action'),
(10, 'comedy'),
(23, 'basha'),
(23, 'action'),
(22, 'dsa'),
(23, 'action'),
(23, 'action'),
(53, 'xayal'),
(53, 'sarxosh'),
(53, 'xayal'),
(53, 'sarxosh'),
(23, 'action'),
(23, 'action'),
(23, 'lacho'),
(24, 'action'),
(21, 'action'),
(21, 'actionn'),
(20, 'xawxoshy'),
(25, 'comedy');

-- --------------------------------------------------------

--
-- Table structure for table `t_tasks`
--

CREATE TABLE `t_tasks` (
  `id` int(6) UNSIGNED NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` varchar(256) NOT NULL,
  `Schedualed_date` date NOT NULL,
  `Due_date` date NOT NULL,
  `Priority` varchar(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `tag` varchar(5) NOT NULL,
  `count` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tasks`
--

INSERT INTO `t_tasks` (`id`, `Title`, `Description`, `Schedualed_date`, `Due_date`, `Priority`, `username`, `tag`, `count`) VALUES
(20, 'sa', 'www', '2020-12-11', '2020-12-07', 'A', 'aha', '', 3),
(21, 'sasssss', 'wwwssssssss', '2020-12-11', '2020-12-07', 'A', 'aha', '', 3),
(23, 'xoshtn', 'alone', '2020-12-15', '2020-12-15', 'A', 'sangar', '', 3),
(24, 'sa', 'www', '2020-12-11', '2020-12-07', 'A', 'sangar', '', 3),
(25, 'sa', 'www', '2020-12-11', '2020-12-07', 'A', 'aha', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`id`, `username`, `password`, `firstname`, `lastname`) VALUES
(53, 'sangar', '81dc9bdb52d04dc20036dbd8313ed055', 'st', 'tt'),
(54, 'deni', 'a01610228fe998f515a72dd730294d87', 'db', 'br'),
(55, 'aha', '81dc9bdb52d04dc20036dbd8313ed055', 'aha', 'aha'),
(56, 'kawan', '827ccb0eea8a706c4c34a16891f84e7b', 'kawann', 'pshtiwan'),
(57, '', '53c82eba31f6d416f331de9162ebe997', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tasks`
--
ALTER TABLE `t_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `t_tasks`
--
ALTER TABLE `t_tasks`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
