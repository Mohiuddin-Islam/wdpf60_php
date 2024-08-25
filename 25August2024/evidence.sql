-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Aug 25, 2024 at 01:29 PM
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
-- Database: `evidence`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_manufacturer` (IN `name` VARCHAR(50), IN `address` VARCHAR(100), IN `contact` VARCHAR(50))   INSERT INTO manufacturer (id,name,address,contact_no) VALUES (NULL,name,address,contact)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `log_book`
--

CREATE TABLE `log_book` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `event` enum('Insert','Update','Delete') NOT NULL,
  `event_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_book`
--

INSERT INTO `log_book` (`id`, `product_name`, `event`, `event_time`) VALUES
(1, 'Walton', 'Insert', '2024-08-24 07:02:03'),
(2, 'Jamuna Refrigerator', 'Update', '2024-08-24 07:07:23'),
(3, 'Minister Londre', 'Update', '2024-08-24 07:07:59'),
(4, 'Walton', 'Delete', '2024-08-24 07:08:29'),
(5, 'Jamuna Refrigerator 120 inch', 'Delete', '2024-08-25 07:02:09'),
(6, 'Minister Ac', 'Update', '2024-08-25 07:04:06');

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
(2, 'Walton', 'Cumilla', '01753595511'),
(3, 'Samsung', 'Rajshahi', '01752437955'),
(4, 'Lg', 'Barisal', '01755695514'),
(5, 'Konka', 'Gazipur', '01752437955'),
(7, 'Minister', 'Dhaka', '01755695565'),
(8, 'Jamuna', 'Badda', '017852365456'),
(9, 'Panasonic', 'Rampura', '01752437955'),
(10, 'TCL', 'Mirpur', '01752437955');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `Manufacturer_DELETE` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product
WHERE product.manufacturer_id = old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_bk`
--

CREATE TABLE `manufacturer_bk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer_bk`
--

INSERT INTO `manufacturer_bk` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'Sony', 'Dhaka', '01752437955'),
(2, 'Walton', 'Cumilla', '01753595511'),
(3, 'Samsung', 'Rajshahi', '01752437955'),
(4, 'Lg', 'Barisal', '01755695514'),
(5, 'Konka', 'Gazipur', '01752437955'),
(6, 'Jamuna', 'Savar', '01752437957'),
(7, 'Minister', 'Dhaka', '01755695565');

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
(2, 'Walton Fan', 2000, 2),
(3, 'Samsung Galaxy Note 10', 4000, 3),
(4, 'Lg Tv 55 inch', 55000, 4),
(5, 'Konka Tv 43 inch', 70000, 5),
(7, 'Minister Ac', 50000, 7);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `product_delete` AFTER DELETE ON `product` FOR EACH ROW INSERT INTO log_book VALUES(NULL, old.name, "Delete", NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_insert` AFTER INSERT ON `product` FOR EACH ROW INSERT INTO log_book VALUES(NULL, new.name, "Insert", NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_update` AFTER UPDATE ON `product` FOR EACH ROW INSERT INTO log_book VALUES(NULL, old.name, "Update", NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_above_2000_price`
-- (See below for the actual view)
--
CREATE TABLE `product_above_2000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_above_5000_price`
-- (See below for the actual view)
--
CREATE TABLE `product_above_5000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `product_bk`
--

CREATE TABLE `product_bk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_bk`
--

INSERT INTO `product_bk` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'Sony Monitor 65 inch', 5000, 1),
(2, 'Walton Fan', 2000, 2),
(3, 'Samsung Galaxy Note 10', 4000, 3),
(4, 'Lg Tv 55 inch', 55000, 4),
(5, 'Konka Tv 43 inch', 70000, 5),
(6, 'Jamuna Refrigerator', 80000, 6),
(7, 'Minister Londre', 5000, 7);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list`
-- (See below for the actual view)
--
CREATE TABLE `product_list` (
`id` int(11)
,`Product Name` varchar(50)
,`price` int(5)
,`Manufacturer Name` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `product_above_2000_price`
--
DROP TABLE IF EXISTS `product_above_2000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_above_2000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 20002000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_above_5000_price`
--
DROP TABLE IF EXISTS `product_above_5000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_above_5000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 50005000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_list`
--
DROP TABLE IF EXISTS `product_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `Product Name`, `product`.`price` AS `price`, `manufacturer`.`name` AS `Manufacturer Name` FROM (`product` join `manufacturer`) WHERE `manufacturer`.`id` = `product`.`manufacturer_id``manufacturer_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_book`
--
ALTER TABLE `log_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_bk`
--
ALTER TABLE `product_bk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_book`
--
ALTER TABLE `log_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_bk`
--
ALTER TABLE `product_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
