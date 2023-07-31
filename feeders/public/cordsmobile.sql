-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 31, 2023 at 07:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cordsmobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `userID` varchar(200) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member_login`
--

CREATE TABLE `member_login` (
  `id` int(11) NOT NULL,
  `phone_number` varchar(56) NOT NULL,
  `password` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_login`
--

INSERT INTO `member_login` (`id`, `phone_number`, `password`) VALUES
(1, '09073240313', 'AdminOfficer200');

-- --------------------------------------------------------

--
-- Table structure for table `observation`
--

CREATE TABLE `observation` (
  `id` int(11) NOT NULL,
  `userID` varchar(200) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `observation`
--

INSERT INTO `observation` (`id`, `userID`, `message`) VALUES
(1, 'ganiyumubarak12@gmail.com', 'We observe that; the only place where light has been given since monday till now is Olonkoro.');

-- --------------------------------------------------------

--
-- Table structure for table `transformer`
--

CREATE TABLE `transformer` (
  `id` int(11) NOT NULL,
  `transformer_id` varchar(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transformer`
--

INSERT INTO `transformer` (`id`, `transformer_id`, `message`) VALUES
(1, 'Aree onakankanfo', 'Come to our Area for Clearification');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Olaniyi Muaz', 'olaniyihassan94@gmail.com', '123456789', 'Come', '2023-05-10 05:55:30', '2023-05-10 05:55:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_login`
--
ALTER TABLE `member_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `observation`
--
ALTER TABLE `observation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transformer`
--
ALTER TABLE `transformer`
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
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_login`
--
ALTER TABLE `member_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `observation`
--
ALTER TABLE `observation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transformer`
--
ALTER TABLE `transformer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
