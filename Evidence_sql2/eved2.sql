-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2024 at 08:22 AM
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
-- Database: `eved2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_student` (IN `name` VARCHAR(50), IN `address` VARCHAR(100), IN `mobile` VARCHAR(20))   INSERT INTO student(id,student_name,address,mobile) VALUES (NULL,name,address,mobile)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `all_display`
-- (See below for the actual view)
--
CREATE TABLE `all_display` (
`id` int(11)
,`student_name` varchar(50)
,`address` varchar(100)
,`mobile` varchar(20)
,`module_name` varchar(20)
,`totalmarks` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `module_name` varchar(20) NOT NULL,
  `totalmarks` int(5) NOT NULL,
  `student_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `module_name`, `totalmarks`, `student_id`) VALUES
(1, 'NT', 200, 25),
(2, 'WDPF', 500, 26),
(3, 'GAVE', 450, 27),
(4, 'CF', 500, 28),
(5, 'DDD', 600, 29);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `address`, `mobile`) VALUES
(25, 'Safin', 'Badda', '0175893654'),
(26, 'Saif', 'Rampura', '0175893654'),
(27, 'Abdullah', 'Abul Hotel', '0175893654'),
(28, 'Noman', 'Sajahanpur', '0175893654'),
(29, 'Rakib', 'Jatrabari', '01567980553');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `student_delete` AFTER DELETE ON `student` FOR EACH ROW DELETE FROM result WHERE result.student_id = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'Abdullah', '1234a'),
(2, 'Joy', 'abc12');

-- --------------------------------------------------------

--
-- Structure for view `all_display`
--
DROP TABLE IF EXISTS `all_display`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `all_display`  AS SELECT `student`.`id` AS `id`, `student`.`student_name` AS `student_name`, `student`.`address` AS `address`, `student`.`mobile` AS `mobile`, `result`.`module_name` AS `module_name`, `result`.`totalmarks` AS `totalmarks` FROM (`student` join `result`) WHERE `student`.`id` = `result`.`student_id``student_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
