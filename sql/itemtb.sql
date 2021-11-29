-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 04:28 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `itemtb`
--

CREATE TABLE `itemtb` (
  `item_id` int(10) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `available_quantity` int(10) NOT NULL,
  `item_price` int(10) NOT NULL,
  `item_description` varchar(500) NOT NULL,
  `item_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemtb`
--

INSERT INTO `itemtb` (`item_id`, `item_name`, `available_quantity`, `item_price`, `item_description`, `item_image`) VALUES
(1, 'Dry Beans (100g)', 200, 60, 'demo description to this item', './upload/seeds1.jpg'),
(2, 'Green Chili (plant)', 20, 45, 'demo description to this item', './upload/seeds2.jpg'),
(3, 'Microgreens (plant)', 50, 85, 'demo description to this item', './upload/seeds3.jpg'),
(4, 'Capsicum (plant)', 100, 50, 'demo description to this item', './upload/seeds4.jpg'),
(5, 'Asian Greens (plant)', 300, 65, 'demo description to this item', './upload/seeds5.jpg'),
(6, 'Bush Beans (5 pees)', 60, 120, 'demo description to this item', './upload/seeds6.jpg'),
(7, 'Celeriac (plant)', 40, 70, 'demo description to this item', './upload/seeds7.jpg'),
(8, 'Kidney Bean (100g)', 50, 25, 'demo description to this item', './upload/seeds8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itemtb`
--
ALTER TABLE `itemtb`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itemtb`
--
ALTER TABLE `itemtb`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
