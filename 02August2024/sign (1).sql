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
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(30) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'samir', 'Amir@ddf.com   ', 'ffffrtyy', '54128935'),
(7, 'Abdullah ', 'abdullah@gmail.com ', 'uirjrfmdl', '42561222'),
(17, 'Kalam', 'mamun@gmail.com  ', 'ffffrtyy', '54128935'),
(19, 'Amir', 'abdullah@g.com', 'ffff', '42561222'),
(20, 'Mamun', 'abuhmdabdullah@gmail.com', 'ffffrtyy', '42561222'),
(27, 'Samir', 'amun@gmail.com ', 'ffff', '10003864'),
(37, 'Amiras', 'm@gmail.com', 'uirjrfmdl', '510003864'),
(39, 'Mamun', 'asmpi.com', 'uirjrfmdl', '42561222'),
(117, 'Robi', 'rony@gmail.com ', 'uirjrfmdl', '01210003864'),
(118, 'mhan ', 'ah@gmail.com ', 'ffffiooll', '012510003864'),
(119, 'rojain', 'nihan@gmail.com ', 'jfckfgo', '510003864'),
(121, 'jamil', 'opiullah@gmail.com ', 'ujhggnnb', '54128935'),
(125, 'Amir', 'werabdullah@gmail.com', 'uirjrfmdl', '510003864'),
(127, 'Mamun', 'lkasm@gmail.com', 'uirjrfmdl', '510003864'),
(130, 'Amir', 'kiosm@gmail.com', 'uirjrfmdl', '510003864'),
(163, 'Mohiuddin', 'mohi@gmail.com', 'mohi9fh', '01752437923'),
(164, 'Forhad Hossain', 'forhad26@gmail.com', 'forhad99', '01567980553'),
(166, 'Abir Hossain ', 'abir@gmail.com', ' abir123', '0172536955'),
(167, 'Nur Hasan', 'nur@gmail.com', 'nur12345', '01758635955'),
(168, 'Jahid Mia   ', 'jahid@gmail.com', 'jahid12', '01758965933'),
(169, 'Rakib Mia', 'rakib@gmail.com', 'rakib123', '0172365955'),
(170, 'Safiq', 'safiq@gmail.com', 'safiq123', '0178963522');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
