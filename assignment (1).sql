-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 01:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'hama', 'rzgar', 3000.5),
(2, 'rzgar', 'rzgar', 3000.5)
;

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
(3, 'action'),
(1, 'horror'),
(1, 'comedy'),
(1, 'action'),
(3, 'action'),
(1, 'action'),
(1, 'action'),
(3, 'horror'),
(1, 'action'),
(3, 'comedy'),
(2, 'sport'),
(2, 'shisha')
;

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
  `tag` varchar(5) NOT NULL,
  `count` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tasks`
--

INSERT INTO `t_tasks` (`id`, `Title`, `Description`, `Schedualed_date`, `Due_date`, `Priority`, `tag`, `count`) VALUES
(9, 'aaaaa', 'fffffffffff', '2020-11-16', '2020-11-07', 'A', '', 3),
(10, 'test', 'tesr', '2020-12-01', '2020-11-23', 'B', '', 0),
(11, 'test', 'tesr', '2020-11-05', '2020-11-17', 'B', '', 0),
(12, '', '', '0000-00-00', '0000-00-00', '', '', 0),
(13, 'test', 'tesr', '2020-11-14', '2020-11-09', 'C', '', 0),
(14, 'test', 'aaaaaaaa', '2020-11-07', '2020-11-09', 'C', '', 0);

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
(53, 'hama', '81dc9bdb52d04dc20036dbd8313ed055', 'hama', 'rzgar');

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
