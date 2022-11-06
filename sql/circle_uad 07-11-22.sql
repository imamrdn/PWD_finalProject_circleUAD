-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2022 at 03:01 AM
-- Server version: 8.0.31-0ubuntu0.20.04.1
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
-- Database: `circle_uad`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(2, 'Admin', '-', 'superadmin@dev.com', '$2y$10$rpqhVT6qCCgOSZVE6wd1qeuQjVkLRwCvXqynE6CbH0cDm8NtD08cu', 1),
(3, 'Joko', 'Wow', 'jokowow@gmail.com', '$2y$10$GXQpbbp0rTkLIJOOqZHFz.dMAy9DfoNPsjEK557R8xpZ3XXS9lpBu', 0),
(4, 'Pak', 'Imam', 'imam@gmail.com', '$2y$10$IIdjv1KZQ7mE2yYJYZqrhOPvosxgkCGkigG6ar5eUqJp2A8m3BINa', 0),
(5, 'Imam', 'Ganteng', 'gans@gmail.com', '$2y$10$UKJIZJasKPYGXZWDvomzue9el2eGiv.Vs4Emfu9ELl7bTD2cpqAcW', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
