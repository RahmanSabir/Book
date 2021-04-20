-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 07:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabir`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`) VALUES
(1, 'EEE'),
(2, 'Computer Science'),
(3, 'Civil');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_price` float(43,2) NOT NULL,
  `product_des` text NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `writer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `cat_id`, `product_price`, `product_des`, `product_image`, `writer`) VALUES
(1, 'ptoduct 1', 1, 22.30, 'this is product one', 'EEE1.jpg', 'hanry'),
(2, 'product 2', 1, 23.30, ' this is product one', 'EEE2.jpg', 'hanry'),
(3, 'Electrical Engineering', 1, 22.30, 'this is product three', 'EEE3.jpg', 'hanry'),
(4, 'product 4', 1, 23.30, ' this is product one', 'EEE4.jpg', 'hanry'),
(5, 'product 5', 1, 23.00, ' this is product 5', 'EEE5.jpg', 'hanry'),
(6, 'product 1', 2, 23.00, ' this is product 6', 'CSE1.jpg', 'hanry'),
(7, 'product 2', 2, 23.00, ' this is product 2', 'CSE2.jpg', 'hanry'),
(8, 'product 3', 2, 24.00, ' this is product 3', 'CSE3.jpg', 'hanry'),
(9, ' Basic Civil Engineering', 3, 23.50, ' Basic Civil Engineering', 'Civil1.jpg', 'hanry'),
(10, 'product 2', 3, 23.00, ' this is product 2', 'Civil2.jpg', 'hanry'),
(11, 'product 3', 3, 25.00, ' this is product 3', 'Civil3.jpg', 'hanry');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_password`) VALUES
(1, 'nihal', 0),
(2, 'abir', 0),
(3, 'nihal', 0),
(11, '1', 1),
(12, '1', 1),
(13, '1', 1),
(14, '1', 1),
(15, '1', 1),
(16, '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
