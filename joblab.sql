-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 04:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joblab`
--
--- Password  dsyPK*gOpJLM6&B#ZT
-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Technology Jobs'),
(2, 'Banking & Finance Jobs'),
(3, 'Construction Jobs'),
(4, 'Engineering Jobs'),
(5, 'Hr Jobs');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `job_title`, `description`, `company`, `location`, `salary`, `contact_email`, `contact_user`, `post_date`) VALUES
(1, 1, 'Senior Fullstack Developer', 'We are looking for bachelor of science in computer science', 'Google', 'Remote', '90k', 'google12@gmail.com', 'Sundar Pichai', '2023-04-29 13:17:33'),
(2, 2, 'Accountant', 'We are looking for bachelor of science in Acountancy', 'UBA Bank', 'London', '50k', 'uba12@gmail.com', 'tony uba', '2023-04-29 13:17:33'),
(3, 1, 'Software Engineer', 'lorem ipsum lorem ipsum lorem ipsum', 'google', 'remote', '80k', 'larry@gmail.com', 'larry page', '2023-05-06 13:15:18'),
(4, 1, 'Software Engineer', 'lorem ipsum donot', 'google', 'remote', '80k', 'larry@gmail.com', 'larry page', '2023-05-09 11:18:44'),
(5, 1, 'Software Engineer', 'random random random random', 'google', 'remote', '200k', 'newman@gmail.com', 'newman', '2023-05-10 20:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `email`, `pass`) VALUES
(1, 'max', 'agbaa@sika3.com', '$2y$10$U1ZjYzYrS3RAjY8m3XTcLuZp35fu79RQeznqiFKAI3nYBL/3sDHge'),
(2, 'name', 'dddd@gmail.com', '$2y$10$10sI4CJpGpb83MTkmMzmpuTdTbvFIuSvuHUKv6bNwD3S5mHArVfS.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
