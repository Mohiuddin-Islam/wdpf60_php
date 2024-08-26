-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 08:21 PM
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
-- Database: `cr7`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `m_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`m_id`, `company_name`, `address`, `contact_no`) VALUES
(4, 'Singer', 'Dhaka', '66555'),
(5, 'Walton', 'Gazipur', '01752896350'),
(6, 'Konka', 'Savar', '01752436954');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `Manufacturer_DELETE` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product
WHERE m_id = old.m_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `m_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `product_name`, `price`, `m_id`) VALUES
(7, 'S455', 3200, 4),
(8, 'S655', 10000, 4),
(10, 'a55', 6000, 4),
(11, 's22', 2000, 4),
(12, 'j22', 1000, 4),
(13, 'Walton', 20000, 5),
(14, 'Konka', 50000, 6);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list_view`
-- (See below for the actual view)
--
CREATE TABLE `product_list_view` (
`p_id` int(11)
,`product_name` varchar(50)
,`price` int(5)
,`m_id` int(10)
);

-- --------------------------------------------------------

--
-- Structure for view `product_list_view`
--
DROP TABLE IF EXISTS `product_list_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list_view`  AS SELECT `product`.`p_id` AS `p_id`, `product`.`product_name` AS `product_name`, `product`.`price` AS `price`, `product`.`m_id` AS `m_id` FROM `product` WHERE `product`.`price` > 50005000  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
