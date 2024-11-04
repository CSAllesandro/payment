-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 08:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cart_items` text NOT NULL,
  `payment_method` enum('credit_card','cash_on_delivery') NOT NULL,
  `delivery_method` enum('vehicle_delivery','bike_delivery') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cart_items`, `payment_method`, `delivery_method`, `created_at`) VALUES
(1, '{\"1\":\"1\"}', '', '', '2024-11-04 07:23:54'),
(2, '{\"2\":\"1\"}', '', '', '2024-11-04 07:25:36'),
(3, '[]', 'cash_on_delivery', 'bike_delivery', '2024-11-04 07:25:45'),
(4, '[]', 'cash_on_delivery', 'bike_delivery', '2024-11-04 07:28:25'),
(5, '{\"1\":\"1\"}', '', '', '2024-11-04 07:28:39'),
(6, '{\"2\":\"1\"}', '', '', '2024-11-04 07:30:23'),
(7, '{\"1\":\"1\"}', '', '', '2024-11-04 07:35:52'),
(8, '{\"1\":\"1\"}', '', '', '2024-11-04 07:36:22'),
(9, '{\"1\":\"1\"}', '', '', '2024-11-04 07:37:42'),
(10, '{\"1\":\"1\"}', '', '', '2024-11-04 07:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `quantity`, `img`) VALUES
(1, 'Product 1', 'Description for product 1', 10.00, 100, 'product1.jpg'),
(2, 'Product 2', 'Description for product 2', 20.00, 50, 'product2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
