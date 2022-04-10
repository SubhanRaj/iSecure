-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2022 at 11:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iSecure`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `password`, `dt`) VALUES
(1, 'masterofcosmos', '$2y$10$.5gxhMKHVOjE/kyP6anVGuzeohxu2eriBUR6xeNg61iaQV/tYC5E.', '2022-01-23 16:54:13'),
(2, 'codewithharry', '$2y$10$cWHGd30RIhb25VB2ZVEbkeRGNIMDedbWsEv8tI0dfY0H..OUFDdsq', '2022-01-23 16:58:18'),
(3, 'subhan', '$2y$10$pNGWbtt/DpFAVX8wN1zPuOs/x5hzsOade9RwqbVN.6j8fiwahXezS', '2022-01-23 19:29:21'),
(4, 'Pinki', '$2y$10$SxfoLgjkST2Bh1L0nOn2yOz762ewO7oCViFuL3LKtmDqZljdR811S', '2022-01-23 19:30:36'),
(5, 'Mobile User 1', '$2y$10$/D2oH3VbD.wcXPhaPb8NLeFNjfzzS6SwlVqjKXYhj7cAucMzUHrs6', '2022-01-23 21:03:21'),
(6, 'Mobile User 2', '$2y$10$LiuTK.XsB.4TikkmX8mntOAaZZsvaXY1MVLCmMGcsYJS0FmrlSDgC', '2022-01-24 00:13:16'),
(7, 'ex@n.com', '$2y$10$/KY70KZKfxU8Gxz0lWfh4esLGspiirE/XzWw6/oqL/bZ.cKfssMQq', '2022-02-08 22:11:47'),
(8, '1@1.com', '$2y$10$j.azdnA0oIp6QYRaHBVLU.QfKnvmLQ81SD8b/0.nsoBxf5olFsGYW', '2022-02-08 22:12:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
