-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2024 at 07:30 PM
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
-- Database: `homework2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_manufacturer` (IN `name` VARCHAR(50), IN `address` VARCHAR(100), IN `contact` VARCHAR(50))   INSERT INTO manufacturer(id,name,address,contact_no) VALUES (NULL,name,address,contact)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'Walton', 'Rampura', '01752896350'),
(2, 'Sony', 'Gazipur', '01752436456'),
(3, 'Singer', 'Savar', '01752896312'),
(4, 'Jamuna', 'Badda', '017524369542'),
(5, 'Lg', 'Mirpur', '01752896350'),
(7, 'Tcl', 'Chittagong', '01758265987');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `Manufacturer_Delete` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product WHERE id = old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'Smart Tv 43 inch', 20000, 1),
(2, 'Sony Bravia 65 inch Tv', 50000, 2),
(3, 'Refrigerator', 80000, 3),
(4, 'Oven', 3000, 4),
(5, 'Londry', 2000, 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_above_5000`
-- (See below for the actual view)
--
CREATE TABLE `product_above_5000` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'Habib', 'habib123'),
(2, 'Rahim', 'rahim123'),
(3, 'Jasim', 'jasim123'),
(4, 'Fahim', 'fahim123');

-- --------------------------------------------------------

--
-- Structure for view `product_above_5000`
--
DROP TABLE IF EXISTS `product_above_5000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_above_5000`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 50005000  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
