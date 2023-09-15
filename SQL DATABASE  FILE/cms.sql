-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 04:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `reg_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `reg_date`) VALUES
(1, 'maq', '123', '0000-00-00 00:00:00.000000'),
(2, 'noman', '123', '0000-00-00 00:00:00.000000'),
(3, 'saleem', '321', '0000-00-00 00:00:00.000000'),
(4, 'rafay', '123', '0000-00-00 00:00:00.000000'),
(5, 'hey', 'hey', '0000-00-00 00:00:00.000000'),
(6, 'sameed', '123', '0000-00-00 00:00:00.000000'),
(7, 'sameed7', '123', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users_complain`
--

CREATE TABLE `users_complain` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `complain_message` varchar(100) NOT NULL,
  `publish_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_complain`
--

INSERT INTO `users_complain` (`id`, `user_id`, `complain_message`, `publish_date`) VALUES
(2, 1, 'Complaint 1 here', '2023-01-20 15:06:40'),
(3, 1, 'Complaint 2', '2023-01-20 17:17:14'),
(4, 4, 'rafay complaint 1 update', '2023-01-20 19:21:35'),
(5, 4, '5123', '2023-01-20 19:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `users_meta`
--

CREATE TABLE `users_meta` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_meta`
--

INSERT INTO `users_meta` (`id`, `user_id`, `firstname`, `lastname`, `email`, `phone`, `image_path`) VALUES
(1, 1, 'Mujahid', 'Ahmed', 'Mujahid@gmail.com', '03336254646', 'upload/maq/spider.png'),
(2, 2, 'muhammad', 'noman', 'noman@gmail.com', '123456', ''),
(3, 3, 'm', 'sssss', 'saleem@gmail.com', '123456', ''),
(4, 4, 'Abdul', 'Rafay', 'rafay@gmail.com', '032222551', 'upload/rafay/spider.png'),
(5, 5, 'hey1', 'hey2', 'hey@gmail.com', '03122156', ''),
(6, 6, 'sameed', 'fazal', 'sameed@gmail.com', '03162323', ''),
(7, 7, 'sameed', 'fazal', 'sameed1@gmail.com', '03166666559', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_complain`
--
ALTER TABLE `users_complain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users_meta`
--
ALTER TABLE `users_meta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_complain`
--
ALTER TABLE `users_complain`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_meta`
--
ALTER TABLE `users_meta`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_complain`
--
ALTER TABLE `users_complain`
  ADD CONSTRAINT `users_complain_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users_meta`
--
ALTER TABLE `users_meta`
  ADD CONSTRAINT `users_meta_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
