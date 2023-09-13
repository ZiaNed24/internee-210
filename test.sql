-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 11:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bug_reports`
--

CREATE TABLE `bug_reports` (
  `id` int(11) NOT NULL,
  `title` varchar(56) NOT NULL,
  `description` varchar(56) NOT NULL,
  `priority` varchar(56) NOT NULL,
  `assigned_to` varchar(56) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bug_reports`
--

INSERT INTO `bug_reports` (`id`, `title`, `description`, `priority`, `assigned_to`, `name`) VALUES
(1, 'azamt', 'azamp', 'Medium', 'wer', 'azam'),
(2, 'bug', 'sfoasfhausf', 'Medium', 'asad', 'zia12'),
(3, 'hello', 'dsgshaeaweg', 'Low', 'noman', 'zia'),
(4, 'gdsg', 'dsgs', 'Medium', 'dsg', 'zia56'),
(5, 'bug12', 'bugis12', 'Medium', 'ij12', 'wajid12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(59) NOT NULL,
  `password` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'zia12', '$2y$10$b4QSZxl/oZ00Jwv0f78jmuXsiT99yGnyOzwGJi4Gkr23/3pNdLu8i'),
(2, 'zia12', '$2y$10$J4IDY31HnNCsNODEDe64Ke0zH5QOQByPD98/Azjotro89/pOxQnim'),
(3, 'zia12', '$2y$10$rTRO1KvfgA8jH2d7diJKvu1FupVAlQoSIUoHe578V9y8f4kECd5Mm'),
(4, 'zia12', '$2y$10$9UxOVS5wRkTlrPgU0o.jzeubDJeNsWX6FhPodowE4WKZxwyTafjDO'),
(5, 'zia12', '21'),
(6, 'zia12', '21'),
(7, 'zia12', '123'),
(8, 'zia12', '123'),
(9, 'zia12', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bug_reports`
--
ALTER TABLE `bug_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bug_reports`
--
ALTER TABLE `bug_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
