-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 06:13 PM
-- Server version: 10.4.11-MariaDB
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('admin','moderator') NOT NULL,
  `last_login` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) VALUES
(1, 'Tachapol', 'Chaimongkolsup', 'mysteriouz', '$2y$10$m3Ndl4yNqeqUKIm8WwIm8eTLjY8xKwVIRm86xuKvxtGWQhtiUo1xi', 'admin', '2021-05-12 22:39:07', '2021-05-10 03:45:33', '2021-05-10 03:45:33'),
(7, 'Admin', 'Unesco', 'admin', '$2y$10$inMM9suU3tR0EcqLAX3S9.QHfW9z6DviA28KcYNFfPsPMRLOoDk7W', 'admin', '2021-05-09 22:30:19', '2021-05-09 22:30:19', '2021-05-09 22:30:19'),
(8, 'test', 'test', 'test', '$2y$10$kORyeEbTg/owRYBFkciTC..VdapaKlLVKckDo.BWSWD0EiCnzAsJ6', 'admin', '2021-05-10 04:12:39', '2021-05-10 03:34:30', '2021-05-10 03:34:30'),
(10, 'test', 'test ', 'test1', '$2y$10$vePWghT14o7MEwaoGAe9B.0ydiyMjtHYnKw2jVb8tYhIh8rdhBKrC', 'moderator', '2021-05-10 19:23:30', '2021-05-10 19:23:21', '2021-05-10 03:46:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
