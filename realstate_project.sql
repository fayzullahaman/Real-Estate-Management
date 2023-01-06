-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 08:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realstate_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2023-01-03-060642', 'App\\Database\\Migrations\\Property', 'default', 'App', 1672730531, 1),
(4, '2023-01-03-060657', 'App\\Database\\Migrations\\Users', 'default', 'App', 1672730531, 1);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(5) UNSIGNED NOT NULL,
  `property_name` varchar(100) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `property_price` decimal(10,2) NOT NULL,
  `property_image` varchar(200) DEFAULT NULL,
  `property_address` varchar(100) DEFAULT NULL,
  `property_size` decimal(10,2) DEFAULT NULL,
  `property_details` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `property_name`, `property_type`, `property_price`, `property_image`, `property_address`, `property_size`, `property_details`) VALUES
(1, 'Suite Home For Sell', 'Appartment', '2000000.00', '', 'Kakrail, Dhaka', '1000.00', 'This is suite home for sell'),
(2, 'Suite Home For Sell', 'Villa', '2500000.00', '', 'Kakrail, Dhaka', '1500.00', 'This is suite home for sell'),
(3, 'Suite Home For Sell', 'Office', '3000000.00', '', 'Kakrail, Dhaka', '2000.00', 'This is suite home for sell'),
(4, 'Suite Home For Sell', 'Building', '20500000.00', '', 'Kakrail, Dhaka', '5000.00', 'This is suite home for sell'),
(5, 'Suite Home For Sell', 'Home', '2000000.00', '', 'Kakrail, Dhaka', '2000.00', 'This is suite home for sell'),
(6, 'Suite Home For Sell', 'Shop', '2000000.00', '', 'Kakrail, Dhaka', '1800.00', 'This is suite home for sell'),
(7, 'Suite Home For Sell', 'Townhouse', '3500000.00', '', 'Kakrail, Dhaka', '3000.00', 'This is suite home for sell'),
(8, 'Suite Home For Sell', 'Garage', '2000000.00', '', 'Kakrail, Dhaka', '1000.00', 'This is suite home for sell'),
(9, 'Suite Home For Sell', 'Appartment', '2000000.00', '', 'Kakrail, Dhaka', '1000.00', 'This is suite home for sell'),
(10, 'Suite Home For Sell', 'Villa', '2500000.00', '', 'Kakrail, Dhaka', '1500.00', 'This is suite home for sell'),
(11, 'Suite Home For Sell', 'Office', '3000000.00', '', 'Kakrail, Dhaka', '2000.00', 'This is suite home for sell');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` char(64) NOT NULL,
  `creattime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
