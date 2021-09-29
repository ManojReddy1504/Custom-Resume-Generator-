-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 01:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_maker2`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dy` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `linked` varchar(255) NOT NULL,
  `obj` varchar(255) NOT NULL,
  `we` varchar(255) NOT NULL,
  `pjt` varchar(255) NOT NULL,
  `aq` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`user_id`, `name`, `phone`, `email2`, `address`, `dy`, `fb`, `insta`, `linked`, `obj`, `we`, `pjt`, `aq`) VALUES
(9, 'abc', '8296013995', 'abc@gmail.com', 'nainital, uttrakhand', 'i am a good person', 'fb/abhi', 'insta/abhi', 'linkedin/abhi', 'hardworking', 'nothing\r\nnothing\r\nnothing\r\nnothing', 'nothing\r\nnothing\r\nnothing\r\nnothing', 'nothing\r\nnothing\r\nnothing\r\nnothing'),
(11, 'abc', '1234567890', 'abc@gmail.com', 'bangalore, karnataka', 'i am a rider', 'riderop', 'riderop', 'riderop', 'zindegi ne mauka hi nhi diya objective sochne ka', 'zindegi ne mauka hi nhi diya objective sochne ka \r\nto work experience kis baat ka', 'zindegi ne mauka hi nhi diya objective sochne ka \r\nto work experience kis baat ka', 'zindegi ne mauka hi nhi diya objective sochne ka \r\nto work experience kis baat ka');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'abc', 'abc@gmail.com', 900150983),
(2, 'PAWAN SINGH', 'pawan@gmail.com', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
