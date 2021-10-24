-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 07:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `checked_in_out` tinyint(1) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `checked_in_out`, `start_date`, `end_date`, `product_id`, `customer_id`) VALUES
(4, 0, '2022-11-11', '2022-11-22', 4, 5),
(5, 0, '2021-09-28', '2021-10-28', 5, 6),
(6, 1, '2021-10-20', '2021-10-23', 5, 7),
(10, 1, '2021-10-24', '2021-10-26', 5, 9),
(14, 0, '2021-10-24', '2021-10-25', 2, 2),
(17, 1, '2021-10-25', '2021-10-29', 6, 2),
(18, NULL, '0000-00-00', '0000-00-00', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `email`, `password`, `isAdmin`) VALUES
(1, 'Towsifa Elahi ', '01842643849', 'towsifa1998@gmail.com', '123456789', NULL),
(2, 'salsa', '01835819282', 'salsa@gmail.com', '123', NULL),
(3, 'Manager', '01809876554', 'manager@admin.com', '123456789', 1),
(4, 'Mehejabin', '0177777777', 'jitu@gmail.com', '1234', NULL),
(5, 'Sakib khan', '01988888888', 'sakib@gmail.com', '12345', NULL),
(6, 'wanda', '01822222222', 'wanda@mail.com', '1234', NULL),
(7, 'Towsifa Elahi ', '01842643849', 'towsifa1998@gmail.com', '12345', NULL),
(8, 'alif', '01822222222', 'alif@gmail.com', '000', NULL),
(9, 'ayesha', '01842643849', 'ayesha@gmail.com', '1111', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_information`
--

CREATE TABLE `product_information` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `model` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_information`
--

INSERT INTO `product_information` (`id`, `name`, `type`, `model`, `address`, `description`, `price`, `image_link`) VALUES
(1, 'CAR ONE', 'car', 'Model One', NULL, 'Model One', '1025', './assets/images/car1.png'),
(2, 'CAR TWO', 'car', 'Model Two', NULL, 'Model Two', '1252', './assets/images/car2.png'),
(3, 'CAR THREE', 'car', 'Model Three', NULL, '', '1251', './assets/images/car3.png'),
(4, 'CAR FOUR', 'car', 'Model Four', NULL, 'Model Four', '1521', './assets/images/car4.png'),
(5, 'Resort One', 'resort', 'Resort One', 'Resort One', 'Resort One', '4512', './assets/images/resort1.jpg'),
(6, 'Hall One', 'room', 'Hall One', 'Hall One', 'Hall One', '4517', './assets/images/hall1.jpg'),
(7, 'Resort Two', 'resort', 'Resort One', NULL, 'Resort Two', '33000', 'assets/images/resort5.jpg'),
(8, 'Resort Three', 'resort', 'Resort Three', NULL, 'Resort Three', '40000', 'assets/images/resort6.jpg'),
(9, 'Hall Two', 'room', 'Hall Two', NULL, 'Hall Two', '32000', 'assets/images/hall5.jpg'),
(10, 'Hall Three', 'room', 'Hall Three', NULL, 'Hall Three', '22000', 'assets/images/hall6.jpg'),
(11, 'Hall Four', 'room', 'Hall Four', NULL, 'Hall Four', '35000', 'assets/images/hall7.jpg'),
(12, 'Hall Five', 'room', 'Hall Five', NULL, 'Hall Five', '45000', 'assets/images/hall7.jpg'),
(13, 'Resort Four', 'resort', 'Resort Four', NULL, 'Resort Four', '22000', 'assets/images/re8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_booking_p` (`product_id`),
  ADD KEY `product_booking_p` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_information`
--
ALTER TABLE `product_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_information`
--
ALTER TABLE `product_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
