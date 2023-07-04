-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 07:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happyteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(1, '', 'mansi@abc.com', '9291938453', 'dhvbfuzdhsb', 'DHFVBdhubfvh', '2023-06-27 13:02:08'),
(2, 'mansi', 'mansi@abc.com', '9493821234', 'fgbvsgtffbsg', 'v gfbbg', '2023-06-27 13:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `event_registration`
--

CREATE TABLE `event_registration` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tshirt_size` varchar(5) NOT NULL,
  `address` varchar(255) NOT NULL,
  `category_km` varchar(10) NOT NULL,
  `emergency_contact_name` varchar(255) NOT NULL,
  `emergency_contact_number` int(15) NOT NULL,
  `organizer_name` varchar(255) NOT NULL,
  `refer_by` varchar(255) NOT NULL,
  `discount_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'vandu', 'vandu@abc.com', 'vandu', '2023-07-03 05:32:10'),
(2, 'ramesh', 'ramesh@abc.com', 'ramesh', '2023-07-03 09:51:03'),
(3, 'dhruvak', 'dhruvak@abc.com', 'dhruvak', '2023-07-03 10:09:57'),
(4, 'hitesh', 'hitesh@abc.com', 'hitesh', '2023-07-03 10:22:32'),
(5, 'hitesh', 'hitesh@abc.com', 'hitesh', '2023-07-03 10:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(7, 'mansi', 'mansi@abc.com', '$2y$10$2i0XctyW/b8qrT.Un0KUf.vqz9qVsHayg06GoMYuZKxNn24tGcKBe', '2023-07-01 13:18:11'),
(8, 'vandu', 'vandu@abc.com', '$2y$10$h92uov6dJJTiuLbCZAO/beUhuwAofWjDHMGk1S0OzfF7Le.9bkh2S', '2023-07-03 05:19:16'),
(9, 'abhi', 'abhi@abc.com', '$2y$10$GQPvD4SzFXqpBnQzeSpn3.jCxOEm6ye8ZzlyZyZvTspg5U5tWp2G6', '2023-07-03 07:50:40'),
(10, 'sona', 'sona@abc.com', 'sona123', '2023-07-03 07:57:04'),
(11, 'ketul', 'ketul@abc.com', '$2y$10$921W/pQkNh9jXjyWU2twOeLUEQx47rp0LhIjuMnFEI7qleyEEW6yK', '2023-07-03 07:59:32'),
(12, 'megha', 'megha@abc.com', '', '2023-07-03 09:32:48'),
(13, 'ramesh', 'ramesh@abc.com', 'ramesh', '2023-07-03 09:39:44'),
(14, 'mahesh', 'mahesh@abc.com', '', '2023-07-03 09:53:54'),
(15, 'priya', 'priya@abc.com', '', '2023-07-03 09:58:45'),
(16, 'renuka', 'renuka@abc.com', '$2y$10$IweHyqvnyZVA.pKPVllfqeOegue8HUcsEaZMB0/5/OjsUMgp4eM7S', '2023-07-03 10:01:56'),
(17, 'dhruvee', 'dhruvee@abc.com', '', '2023-07-03 10:03:20'),
(18, 'dhruvam', 'dhruvam@abc.com', '', '2023-07-03 10:05:46'),
(19, 'dhruval', 'dhruval@abc.com', '', '2023-07-03 10:08:03'),
(20, 'dhruvak', 'dhruvak@abc.com', 'dhruvak', '2023-07-03 10:09:15'),
(21, 'Hitesh', 'hitesh@abc.com', 'hitesh', '2023-07-03 10:22:10'),
(22, 'prabhas', 'prabhas@abc.com', 'abcdef123', '2023-07-03 10:33:43'),
(23, 'hitesh', 'hitesh123@abc.com', 'hitesh123', '2023-07-03 10:57:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_registration`
--
ALTER TABLE `event_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_registration`
--
ALTER TABLE `event_registration`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
