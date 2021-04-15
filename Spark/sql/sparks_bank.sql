-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 04:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16390323_sparkbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Vinayak Chavan', 'Mayank kalgude', 300, '2021-04-15 18:57:39'),
(2, 'Jugal Patel', 'Harshil Ramanuj', 200, '2021-04-15 19:32:23'),
(3, 'Shubham Patil', 'Vinayak Chavan', 300, '2021-04-15 19:40:43'),
(4, 'Gopal Bharadva', 'Darshan Tank', 2000, '2021-04-15 19:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Vinayak Chavan', 'vinayak@gmail.com', 5000),
(2, 'Pradip prajapti', 'pradip@gmail.com', 4000),
(3, 'Darshan Tank', 'darshan@gmail.com', 6500),
(4, 'Jay patel', 'jay@gmail.com', 6000),
(5, 'Vishal Prajapati', 'vishal@gmail.com', 5000),
(6, 'Gopal Bharadva', 'gopal@gmail.com', 2000),
(7, 'Parth Gabhani', 'parth@gmail.com', 4250),
(8, 'Harshil Ramanuj', 'harshil@gmail.com', 6700),
(9, 'Tejas Gamit', 'tejas@gamil.com', 5400),
(10, 'Jugal Patel', 'jugal@gmail.com', 3500),
(13, 'Neel keni', 'neel@gmail.com', 5200),
(14, 'Jugal Patel', 'jag@gmail.com', 4800),
(15, 'Shubham Patil', 'shubham@gmail.com', 4200),
(16, 'Shubham Patil', 'shubham@gmail.com', 4900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
