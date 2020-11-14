-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 04:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `status`) VALUES
(1, 'Specials', 'ACTIVE'),
(2, 'Fast Foods', 'ACTIVE'),
(3, 'Combos', 'ACTIVE'),
(4, 'Deserts', 'ACTIVE'),
(5, 'Drinks', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `salary` float(10,2) NOT NULL,
  `emp_phn` text NOT NULL,
  `emp_address` varchar(255) NOT NULL,
  `emp_join` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_name`, `designation`, `salary`, `emp_phn`, `emp_address`, `emp_join`, `image`, `status`) VALUES
(4, 'Mark Doe', 'chef', 20000.00, '01855181028', 'cumilla', '2019-01-01', 'images/chefs/ff993d3a75.jpg', 'ACTIVE'),
(5, 'Jhon Doe', 'manager', 25000.00, '01955181028', 'dhaka', '2019-01-02', 'images/chefs/173516ee27.jpg', 'ACTIVE'),
(6, 'Jhon Smith', 'waiter', 15000.00, '01755181028', 'feni', '2019-01-03', 'images/chefs/398d7df592.jpg', 'ACTIVE'),
(7, 'Sarah Doe', 'chef', 20000.00, '01955181028', 'dhaka', '2019-01-04', 'images/chefs/39324734c8.jpg', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `gallery_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `menu_id` int(50) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `trans_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `menu_id`, `unit_price`, `quantity`, `price`, `trans_id`) VALUES
(1, 1, 80, 4, 320, 1),
(2, 2, 200, 2, 400, 1),
(3, 1, 80, 2, 160, 2),
(4, 20, 150, 0, 0, 5),
(5, 23, 130, 0, 0, 4),
(6, 22, 120, 0, 0, 5),
(7, 24, 110, 0, 0, 6),
(8, 20, 150, 1, 150, 6),
(9, 23, 130, 1, 130, 6),
(10, 22, 120, 2, 240, 6),
(11, 24, 110, 1, 110, 6),
(12, 20, 150, 1, 150, 7),
(13, 21, 120, 2, 240, 7),
(14, 22, 120, 1, 120, 7),
(15, 23, 130, 1, 130, 7),
(16, 20, 150, 1, 150, 8),
(17, 21, 120, 2, 240, 8),
(18, 22, 120, 1, 120, 8),
(19, 23, 130, 1, 130, 8),
(20, 31, 150, 1, 150, 8),
(21, 20, 150, 1, 150, 9),
(22, 21, 120, 2, 240, 9),
(23, 22, 120, 1, 120, 9),
(24, 23, 130, 1, 130, 9),
(25, 31, 150, 1, 150, 9),
(26, 20, 150, 1, 150, 10),
(27, 21, 120, 2, 240, 10),
(28, 22, 120, 1, 120, 10),
(29, 23, 130, 1, 130, 10),
(30, 31, 150, 1, 150, 10),
(31, 20, 150, 1, 150, 11),
(32, 21, 120, 2, 240, 11),
(33, 22, 120, 1, 120, 11),
(34, 23, 130, 1, 130, 11),
(35, 31, 150, 1, 150, 11),
(36, 20, 150, 1, 150, 12),
(37, 21, 120, 1, 120, 12),
(38, 23, 130, 2, 260, 12),
(39, 20, 150, 1, 150, 13),
(40, 21, 120, 1, 120, 13),
(41, 23, 130, 2, 260, 13),
(42, 22, 120, 1, 120, 14),
(43, 24, 110, 1, 110, 14);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `adding_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `phone`, `address`, `adding_date`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '01955181028', 'cumilla', '2019-01-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `ingredient` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `cat_id`, `food_name`, `price`, `ingredient`, `image`, `status`) VALUES
(20, 1, 'Parota Dosha', 150.00, 'Mutton, Chicks, Salad, Dosha, Butter ,Stips', 'images/menu/59cec8cf4a.jpg', 'AVAILABLE'),
(21, 1, 'Riso e indivia', 120.00, 'Riso e indivia', 'images/menu/685bc084cc.jpg', 'AVAILABLE'),
(22, 1, 'Risotto', 120.00, 'Riso e indivia', 'images/menu/685bc084cc.jpg', 'AVAILABLE'),
(23, 1, 'Banana Sandwich', 130.00, 'Mutton, Chicks, Salad, Dosha', 'images/menu/06013ad19e.jpg', 'AVAILABLE'),
(24, 1, 'Motor Salad Crips', 110.00, 'Mutton, Chicks, Salad, Dosha, Butter', 'images/menu/6ead25f4f4.jpg', 'AVAILABLE'),
(25, 1, 'Murena fritta', 100.00, 'Mutton, Chicks, Salad, Dosha, Butter ,Stips', 'images/menu/a78482a00d.jpg', 'AVAILABLE'),
(26, 2, 'Motor Salad Crips', 100.00, 'Mutton, Chicks, Salad, Dosha, Butter ,Stips', 'images/menu/13be418d4c.jpg', 'HIDDEN'),
(27, 2, 'Acqua pazza', 110.00, 'Mutton, Chicks', 'images/menu/0c0dbd0c8b.jpg', 'AVAILABLE'),
(28, 2, 'Margherita Sandwich', 120.00, 'Mutton, Chicks, Salad', 'images/menu/3ed5869e9a.jpg', 'AVAILABLE'),
(29, 2, 'Chicken Marata Biriyani', 130.00, 'Mutton, Chicks, Salad, Dosha', 'images/menu/4bb1816aac.jpg', 'AVAILABLE'),
(30, 2, 'Cripsy Green Salad', 140.00, 'Mutton, Chicks, Salad, Dosha, Butter', 'images/menu/ce83644e4d.jpg', 'AVAILABLE'),
(31, 2, 'Murena fritta', 150.00, 'Mutton, Chicks, Salad, Dosha, Butter ,Stips', 'images/menu/ce83644e4d.jpg', 'AVAILABLE'),
(32, 3, 'Acqua pazza', 150.00, 'Mutton, Chicks, Salad, Dosha, Butter ,Stips', 'images/menu/4e371243e1.jpg', 'AVAILABLE'),
(33, 3, 'Motor Salad Crips', 140.00, 'Mutton, Chicks', 'images/menu/0c0dbd0c8b.jpg', 'AVAILABLE'),
(34, 3, 'Banana Sandwich', 130.00, 'Mutton, Chicks, Salad', 'images/menu/98d55eb4a7.jpg', 'AVAILABLE'),
(35, 3, 'Pasta Carbonara', 120.00, 'Mutton, Chicks, Salad, Dosha', 'images/menu/4b10808a7e.jpg', 'AVAILABLE'),
(36, 3, 'Riso e indivia', 110.00, 'Mutton, Chicks, Salad, Dosha, Butter', 'images/menu/61c78381c9.jpg', 'AVAILABLE'),
(37, 3, 'Parota Dosha', 100.00, 'Mutton, Chicks, Salad, Dosha, Butter ,Stips', 'images/menu/a5d9c6b8cd.jpg', 'AVAILABLE'),
(38, 4, 'Murena fritta', 100.00, 'Mutton, Chicks, Salad, Dosha, Butter ,Stips', 'images/menu/a78482a00d.jpg', 'AVAILABLE'),
(39, 4, 'Cripsy Green Salad', 110.00, 'Mutton, Chicks', 'images/menu/7bd6b01db0.jpg', 'AVAILABLE'),
(40, 4, 'Chicken Marata Biriyani', 120.00, 'Mutton, Chicks, Salad', 'images/menu/4d977ec83a.jpg', 'AVAILABLE'),
(41, 4, 'Margherita Sandwich', 130.00, 'Mutton, Chicks, Salad, Dosha', 'images/menu/6af22cfc07.jpg', 'AVAILABLE'),
(42, 4, 'Acqua pazza', 130.00, 'Mutton, Chicks, Salad, Dosha, Butter', 'images/menu/bafe2aa9e7.jpg', 'AVAILABLE'),
(43, 4, 'Motor Salad Crips', 150.00, 'Mutton, Chicks, Salad, Dosha, Butter ,Stips', 'images/menu/3877d2162a.jpg', 'AVAILABLE'),
(44, 5, 'Pasta Carbonara', 150.00, 'Mutton, Chicks, Salad, Dosha, Butter ,Stips', 'images/menu/4bb1816aac.jpg', 'AVAILABLE'),
(45, 5, 'Banana Sandwich', 140.00, 'Mutton, Chicks', 'images/menu/3f3920608a.jpg', 'AVAILABLE'),
(46, 5, 'Motor Salad Crips', 130.00, 'Mutton, Chicks, Salad', 'images/menu/0205c57c55.jpg', 'AVAILABLE'),
(47, 5, 'Acqua pazza', 120.00, 'Mutton, Chicks, Salad, Dosha', 'images/menu/97733871f5.jpg', 'AVAILABLE'),
(48, 5, 'Parota Dosha', 110.00, 'Mutton, Chicks, Salad, Dosha, Butter', 'images/menu/13be418d4c.jpg', 'AVAILABLE'),
(49, 5, 'Riso e indivia', 100.00, 'Mutton, Chicks, Salad, Dosha, Butter ,Stips', 'images/menu/eee3dd6746.jpg', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Stand-in structure for view `menu_category`
-- (See below for the actual view)
--
CREATE TABLE `menu_category` (
`id` int(11)
,`cat_id` int(11)
,`food_name` varchar(255)
,`price` float(10,2)
,`ingredient` varchar(255)
,`image` varchar(255)
,`status` varchar(255)
,`cat_name` varchar(255)
,`cat_status` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `rt_id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `special_req` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(50) NOT NULL,
  `booked_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `rt_id`, `name`, `phone`, `address`, `special_req`, `date`, `time`, `status`, `booked_datetime`) VALUES
(1, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 03:46:41'),
(2, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 03:46:41'),
(3, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 03:46:41'),
(4, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 03:46:41'),
(5, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 03:46:41'),
(6, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 03:46:41'),
(7, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 03:46:41'),
(8, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 03:46:41'),
(9, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 03:46:41'),
(10, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 03:46:41'),
(11, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 03:55:53'),
(12, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 21:32:22'),
(13, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-01-31 22:15:09'),
(14, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-02-01 00:04:43'),
(15, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-02-01 00:51:43'),
(16, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-02-01 01:36:46'),
(17, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-02-01 01:36:59'),
(18, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-02-05 19:56:21'),
(19, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-02-07 00:32:33'),
(20, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-02-07 01:44:41'),
(21, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-02-07 03:08:14'),
(22, 5, 'shabuz', 1955181028, 'cumilla', '', '2019-03-14', '21:06:00', 'AVAILABLE', '2019-02-07 03:09:13');

-- --------------------------------------------------------

--
-- Stand-in structure for view `reservation_rt`
-- (See below for the actual view)
--
CREATE TABLE `reservation_rt` (
`id` int(11)
,`rt_id` int(50)
,`name` varchar(255)
,`phone` int(50)
,`address` varchar(100)
,`special_req` text
,`date` date
,`time` time
,`status` varchar(50)
,`booked_datetime` datetime
,`rt_name` varchar(255)
,`max_accomodate` varchar(255)
,`rt_status` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `reserve_table`
--

CREATE TABLE `reserve_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `max_accomodate` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'AVAILABLE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_table`
--

INSERT INTO `reserve_table` (`id`, `name`, `max_accomodate`, `status`) VALUES
(3, 'Table 1', '4', 'AVAILABLE'),
(4, 'Table 2', '4', 'BOOKED'),
(5, 'Table 3', '6', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `name`, `total_price`, `phone`, `address`, `status`, `date_time`) VALUES
(1, 'Ray', 720.00, 12345, 'cumilla', 'DELIVERED', '2019-02-06 00:59:39'),
(2, 'zaman', 160.00, 12345, 'dhaka', 'DELIVERED', '2019-02-06 00:59:39'),
(3, 'Rayhan', 1200.00, 1955181028, 'cumilla', 'DELIVERED', '2019-02-06 00:59:39'),
(4, 'ray', 630.00, 1955181028, 'Cumilla', 'DELIVERED', '2019-02-06 00:59:39'),
(5, 'ray', 630.00, 1955181028, 'Cumilla', 'ON PROCESS', '2019-02-06 00:59:39'),
(6, 'mehedi', 630.00, 1955181028, 'Cumilla', 'CANCELLED', '2019-02-06 00:59:39'),
(7, 'ray', 640.00, 1955181028, 'Cumilla', 'ON PROCESS', '2019-02-06 00:59:39'),
(9, 'mehedi', 790.00, 1955181028, 'Cumilla', 'ON PROCESS', '2019-02-06 01:54:34'),
(10, 'ray', 790.00, 1955181028, 'Cumilla', 'ON PROCESS', '2019-02-06 02:13:02'),
(11, 'ray', 790.00, 1855181028, 'Cumilla', 'ON PROCESS', '2019-02-06 02:34:55'),
(13, 'rayhan', 530.00, 1955181028, 'Cumilla', 'ON PROCESS', '2019-02-07 01:14:32'),
(14, '', 230.00, 0, '', 'ON PROCESS', '2019-02-07 03:04:28');

-- --------------------------------------------------------

--
-- Structure for view `menu_category`
--
DROP TABLE IF EXISTS `menu_category`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `menu_category`  AS  select `m`.`id` AS `id`,`m`.`cat_id` AS `cat_id`,`m`.`food_name` AS `food_name`,`m`.`price` AS `price`,`m`.`ingredient` AS `ingredient`,`m`.`image` AS `image`,`m`.`status` AS `status`,`c`.`cat_name` AS `cat_name`,`c`.`status` AS `cat_status` from (`menu` `m` join `category` `c`) where `m`.`cat_id` = `c`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `reservation_rt`
--
DROP TABLE IF EXISTS `reservation_rt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reservation_rt`  AS  select `r`.`id` AS `id`,`r`.`rt_id` AS `rt_id`,`r`.`name` AS `name`,`r`.`phone` AS `phone`,`r`.`address` AS `address`,`r`.`special_req` AS `special_req`,`r`.`date` AS `date`,`r`.`time` AS `time`,`r`.`status` AS `status`,`r`.`booked_datetime` AS `booked_datetime`,`rt`.`name` AS `rt_name`,`rt`.`max_accomodate` AS `max_accomodate`,`rt`.`status` AS `rt_status` from (`reservation` `r` join `reserve_table` `rt`) where `rt`.`id` = `r`.`rt_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve_table`
--
ALTER TABLE `reserve_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reserve_table`
--
ALTER TABLE `reserve_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
