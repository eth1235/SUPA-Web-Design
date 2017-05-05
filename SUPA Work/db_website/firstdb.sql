-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2017 at 12:24 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `db1_users`
--

CREATE TABLE `db1_users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gpa` float NOT NULL,
  `gradelevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db1_users`
--

INSERT INTO `db1_users` (`name`, `email`, `password`, `gpa`, `gradelevel`) VALUES
('Adrianna', 'adriadri@blah.com', 'sock-o', 4, 11),
('Austin', 'ausieaus@blah.com', 'ethan', 3.9, 11),
('Cooper', 'barkiebark@blah.com', 'b0nez', 4, 11),
('Ethan', 'etheth@blah.com', 'austin', 4, 11),
('ryan', 'ryan@holy.com', 'iAmRyan', 3.86, 11),
('Zach', 'zackyzack@blah.com', 'brody', 4, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db1_users`
--
ALTER TABLE `db1_users`
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
