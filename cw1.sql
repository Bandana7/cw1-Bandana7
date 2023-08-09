-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 05:51 PM
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
-- Database: `cw1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `image`) VALUES
(1, 'Nezuko', 'none', 'image'),
(2, 'preshu', 'cosplayer', 'image'),
(3, 'shinigami', 'cosplayer', 'image');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_as`) VALUES
(1, 'eilip', 'eilip9@gmail.com', '$2y$10$0gQi7TyEZ5l2xWUKg3kq..lSeSvOUdT2NnPx878BoMpxKqXxHCprK', 1),
(2, 'bandana', 'bandana4@gmail.com', '$2y$10$1TB92nOvWwnQ1misVWZBHez4fD1BQqX8gnqqS/xpctpdxoYeyeDPa', 0),
(3, 'nas', 'nas9@gmail.com', '$2y$10$vi63jLG1Bv6NGrftDauhkexPD7U8y9s8XuubcwFgSH2/vNMTLnEri', 0),
(4, 'user', 'user@gmail.com', '$2y$10$92RVoDCrq65Jd/d1o9PbZuayGTu3C66zLNpWwbDaszb7s.1s9kIRS', 0),
(5, 'lina', 'lina@gmail.com', '$2y$10$YQECTnTxZputBcubM2s1.etKORwAolL7wTb.u8QXae6pZ0b5F3svy', 0),
(7, 'new', 'new@gmail.com', '$2y$10$MxD2Wlzgw8gbYscYYw0Fa.FW4bdNKi9vZHx4/0gekgSZTMhH2sEKC', 0),
(12, 'kool', 'k@gmail.com', '$2y$10$HgOgdhUPP124QeYAEOeYveJxpKRpmIFnNT2g7hMl6PQyS214XNHFa', 0),
(13, 'naya', 'n@gmail.com', '$2y$10$LTFFaHko0KjUwftBiMiCDurvMmXbF1.xJ12TuVHh693FAuv.6pHRu', 0),
(14, 'naya', 'n@gmail.com', '$2y$10$JiDpvq4LbC82zaYYDGvxHe/ueZLStQLDtsnOKKvk3eQ6ctoiPAh.C', 0),
(15, 'happy', 'h@gmail.com', '$2y$10$bQXhxf3pBUxO8byZxgWRDuBjB9zr90GHHFIETKmyRwfOrdIdJ8E96', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
