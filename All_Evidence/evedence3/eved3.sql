-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2024 at 03:13 PM
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
-- Database: `eved3`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_product` (IN `name` VARCHAR(50), IN `product_details` VARCHAR(200), IN `product_price` DECIMAL(5,2))   INSERT INTO products(id,name,product_details,product_price)VALUES(NULL,name,product_details,product_price)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `product_details` varchar(200) NOT NULL,
  `product_price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `product_details`, `product_price`) VALUES
(1, 'walton_carr', 'dsffsfuy', '125.20'),
(3, 'Lux', 'dsffsfuy', '125.20'),
(6, 'Singer tv', 'fffr ', '100.50'),
(8, 'Laptophp', 'oollk', '50.62');

--
-- Triggers `products`
--
DELIMITER $$
CREATE TRIGGER `product_delete` AFTER DELETE ON `products` FOR EACH ROW INSERT INTO product_log VALUES(NULL,old.name,old.product_price,"Delete",NOW(),old.id
)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_insert` AFTER INSERT ON `products` FOR EACH ROW INSERT INTO product_log VALUES(NULL,NEW.name,NEW.product_price,"Insert",NOW(),NEW.id
)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_update` AFTER UPDATE ON `products` FOR EACH ROW INSERT INTO product_log VALUES(NULL,old.name,old.product_price,"Update",NOW(),old.id
)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product_log`
--

CREATE TABLE `product_log` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `product_price` decimal(5,2) NOT NULL,
  `action` enum('Insert','Update','Delete') NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_log`
--

INSERT INTO `product_log` (`id`, `name`, `product_price`, `action`, `time`, `product_id`) VALUES
(1, 'walton_car', '125.20', 'Update', '2024-08-26 05:21:34', 1),
(2, 'walton_car', '200.02', 'Insert', '2024-08-26 06:32:54', 4),
(3, 'walton_carr', '125.20', 'Update', '2024-08-26 07:03:29', 1),
(4, 'Meril', '125.20', 'Update', '2024-08-26 07:04:04', 3),
(5, 'walton_car', '200.02', 'Update', '2024-08-26 07:04:21', 4),
(6, 'Lux', '125.20', 'Update', '2024-08-26 07:06:53', 4),
(7, 'walton_carr', '12.53', 'Delete', '2024-08-26 07:11:06', 4),
(8, 'Lux', '80.75', 'Delete', '2024-08-26 07:11:49', 2),
(9, 'Mamun', '200.60', 'Insert', '2024-08-26 07:17:26', 5),
(10, 'Mamun', '200.60', 'Update', '2024-08-26 07:18:51', 5),
(11, 'Umbrella', '100.50', 'Insert', '2024-08-26 07:56:38', 6),
(12, 'Biscuit', '20.65', 'Insert', '2024-08-26 08:04:21', 7),
(13, 'Biscuit', '20.65', 'Update', '2024-08-26 08:05:59', 7),
(14, 'Meril Soup', '125.20', 'Update', '2024-08-26 08:06:33', 7),
(15, 'walton_carr', '125.20', 'Update', '2024-08-26 08:06:53', 7),
(16, 'walton_carr', '125.20', 'Update', '2024-08-26 08:07:15', 7),
(17, 'Meril Soup', '125.20', 'Delete', '2024-08-26 08:07:53', 7),
(18, 'Laptophp', '50.62', 'Insert', '2024-08-26 08:18:41', 8),
(19, 'Umbrella', '100.50', 'Update', '2024-08-26 08:19:17', 6),
(20, 'Mamip', '200.60', 'Delete', '2024-08-26 08:19:37', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`) VALUES
(1, 'Abdullah', '050248cd2efad770e194ca0e12d44264'),
(2, 'Salam', 'd9891900f1edaeb5b8bf051d61addcdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_log`
--
ALTER TABLE `product_log`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_log`
--
ALTER TABLE `product_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
