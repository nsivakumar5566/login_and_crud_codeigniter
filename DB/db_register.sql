-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 07:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `userid` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `images` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`userid`, `email`, `password`, `gender`, `country`, `comment`, `images`) VALUES
(9, 'k.manikandan9989@gmail.com', 'ddddd', 'male', 'china', 'fdfgfdgdgffdgdf', 'INSULDIN3.jpg'),
(10, 'mechsiva35@gmail.com', '12345', 'male', 'china', 'fdaagrtg', '4blud.jpg'),
(21, 'puviya@gmail.com', '666', 'male', 'india', '6fdsdfdfdf', 'August_slip.jpg'),
(22, 'senthi@gmail.com', 'ghjj', 'female', 'china', 'ghjghjjg', 'experiance.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `puviya`
--

CREATE TABLE `puviya` (
  `userid` int(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `images` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puviya`
--

INSERT INTO `puviya` (`userid`, `title`, `description`, `images`) VALUES
(5, 'siva', 'senthil', 'adul.jpg'),
(6, 'senthil', 'about - Meaning in Tamil, what is meaning of about', 'a1.jpg'),
(7, 'kkbbcjv', 'about - Meaning in Tamil, what is meaning of about in Tamil dictionary, pronunciation, synonyms and definitions of about in Tamil and English.', 'door_(2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `siva_table`
--

CREATE TABLE `siva_table` (
  `siva_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siva_table`
--

INSERT INTO `siva_table` (`siva_id`, `name`, `city`) VALUES
(54, 'sankar', '555');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `student_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `comment` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`student_id`, `name`, `gender`, `country`, `comment`) VALUES
(1, 'sivakumar', 'male', 'india', 'sfddsgffdsfgfdsgd'),
(2, 'sankar', 'male', 'india', 'dfds'),
(3, 'divya', 'female', 'chennai', 'dfdgfdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `puviya`
--
ALTER TABLE `puviya`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `siva_table`
--
ALTER TABLE `siva_table`
  ADD PRIMARY KEY (`siva_id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `puviya`
--
ALTER TABLE `puviya`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `siva_table`
--
ALTER TABLE `siva_table`
  MODIFY `siva_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `student_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
