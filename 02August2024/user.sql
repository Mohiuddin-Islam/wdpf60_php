-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2024 at 06:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf60`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'asm', 'abdullah', 'asm@gmail.com', 'd9729feb74992cc3482b350163a1a010'),
(2, 'sani', 'abdullah', 'asm@gmail.com', 'd9729feb74992cc3482b350163a1a010'),
(3, 'sani', 'abdullah', 'asm@gmail.com', 'd9729feb74992cc3482b350163a1a010'),
(5, 'asm', 'abdullah', 'asm@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'asm', 'abdullah', 'asm@gmail.com', '71b3b26aaa319e0cdf6fdb8429c112b0'),
(7, 'asm', 'abdullah', 'abdullah@gmail.com', 'af12a8015c4ca1f59ed7f9c37dd1e6b8'),
(8, 'sm', 'sani', 'asm@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'asm', 'abdullah', 'asm@gmail.com', '71b3b26aaa319e0cdf6fdb8429c112b0'),
(12, 'Mohiuudin', 'Islam', 'mohiuddin@gmail.com', '3f3c29591fe4d68cd9161c974313249e'),
(13, 'Farhad', 'Hossain', 'forhad26@gmail.com', 'ea7c5f402ea2eb5898bf8b0a959d5011'),
(14, 'Abir', 'Hossain', 'abir@gmail.com', '05d50eb3518ed5a53e44d671cde9d4c0'),
(15, 'Safin', 'Ahmed', 'arif@gmail.com', 'a0514586a408be35e9165e7eedce000e'),
(16, 'Safin', 'Ahmed', 'arif@gmail.com', 'a0514586a408be35e9165e7eedce000e'),
(17, 'Nur', 'Hasan', 'nur@gmail.com', '5310bd8ee74f4425856af002be0f3f60'),
(18, 'Jamil', 'Hossain', 'jamil@gmail.com', '48351bfdb2d5f2783d5c2532bc68af4c'),
(19, 'Jahid', 'Mia', 'jahid@gmail.com', '3899de3b6bca4726c7e83c4dc0c2579b'),
(20, 'Rakib', 'Mia', 'rakib@gmail.com', 'c6a12dd17a3aa185b3d23b77b36e8a80');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
