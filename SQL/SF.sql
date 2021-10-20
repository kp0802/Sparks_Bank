-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 20, 2021 at 06:55 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sparksfoundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`sender`, `receiver`, `balance`, `datetime`) VALUES
('Anmol', 'Hisham', 350, '2021-10-20 22:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `balance`) VALUES
(10221, 'Anmol', 'anmol123@gmail.com', 8739201790, 875),
(10222, 'Bineeth', 'bineeth_qwe@gmail.com', 8873675409, 1412),
(10223, 'Prana', 'pranas07@gmail.com', 7734590656, 1270),
(10224, 'Vipin Binod', 'vipin_sergio@gmail.com', 9987460880, 1300),
(10225, 'Hisham', 'hisham007@gmail.com', 7758494380, 1065),
(10226, 'Akshara', 'akshara_0310@gmail.com', 7764592556, 1025),
(10227, 'Ashind', 'ashind_123gmail.com', 9817635669, 1400),
(10228, 'Khabib', 'mini_khabib@gmail.com', 8879505672, 1355),
(10229, 'Vishnu KA', 'vishnu_lm10@gmail.com', 7736824300, 1009),
(10230, 'Manu J', 'manu_jason0110@gmail.com', 7749029384, 1201);

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10231;
