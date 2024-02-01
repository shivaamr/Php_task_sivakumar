-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 10:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ksstask`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Premium'),
(2, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Wedding card'),
(2, 'Visting Card');

-- --------------------------------------------------------

--
-- Table structure for table `neworder`
--

CREATE TABLE `neworder` (
  `id` int(255) NOT NULL,
  `orderdate` date NOT NULL,
  `region` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `items` int(255) NOT NULL,
  `units` int(255) NOT NULL,
  `unitcost` decimal(65,2) NOT NULL,
  `total` decimal(65,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `neworder`
--

INSERT INTO `neworder` (`id`, `orderdate`, `region`, `report`, `items`, `units`, `unitcost`, `total`) VALUES
(1, '2021-01-06', 'East', 'Jones', 95, 2, '189.05', '189.05'),
(2, '2021-01-23', 'Central', 'Kivell', 50, 20, '999.50', '999.50'),
(3, '2021-02-09', 'Central', 'Jardine', 36, 5, '179.64', '179.64'),
(4, '2021-02-26', 'Central', 'Gill', 27, 20, '539.73', '539.73'),
(5, '2021-03-15', 'West', 'Sorvino', 56, 3, '167.44', '167.44'),
(6, '2021-04-01', 'East', 'Jones', 60, 5, '299.40', '299.40'),
(7, '2021-04-18', 'Central', 'Andrews', 75, 2, '149.25', '149.25'),
(8, '2021-05-05', 'Central', 'Jardine', 90, 5, '449.10', '449.10'),
(9, '2021-05-22', 'West', 'Thompson', 32, 2, '63.68', '63.68'),
(10, '2021-06-08', 'East', 'Jones', 60, 9, '539.40', '539.40'),
(11, '2021-06-25', 'Central', 'Morgan', 90, 5, '449.10', '449.10'),
(12, '2021-07-12', 'East', 'Howard', 29, 2, '57.71', '57.71'),
(13, '2021-07-29', 'East', 'Parent', 81, 20, '1619.19', '1619.19'),
(14, '2021-08-15', 'East', 'Jones', 35, 5, '174.65', '174.65'),
(15, '2021-09-01', 'Central', 'Smith', 2, 125, '250.00', '250.00'),
(16, '2021-09-18', 'East', 'Jones', 16, 16, '255.84', '255.84'),
(17, '2021-10-05', 'Central', 'Morgan', 28, 9, '251.72', '251.72'),
(18, '2021-10-22', 'East', 'Jones', 64, 9, '575.36', '575.36'),
(19, '2021-11-08', 'East', 'Parent', 15, 20, '299.85', '299.85'),
(20, '2021-11-25', 'Central', 'Kivell', 96, 5, '479.04', '479.04'),
(21, '2021-12-12', 'Central', 'Smith', 67, 1, '86.43', '86.43'),
(22, '2021-12-29', 'East', 'Parent', 74, 16, '1183.26', '1183.26'),
(23, '2022-01-15', 'Central', 'Gill', 46, 9, '413.54', '413.54'),
(24, '2022-02-01', 'Central', 'Smith', 87, 15, '1305.00', '1305.00'),
(25, '2022-02-18', 'East', 'Jones', 4, 5, '19.96', '19.96'),
(26, '2022-03-07', 'West', 'Sorvino', 7, 20, '139.93', '139.93'),
(27, '2022-03-24', 'Central', 'Jardine', 50, 5, '249.50', '249.50'),
(28, '2022-04-10', 'Central', 'Andrews', 66, 2, '131.34', '131.34'),
(29, '2022-04-27', 'East', 'Howard', 96, 5, '479.04', '479.04'),
(30, '2022-05-14', 'Central', 'Gill', 53, 1, '68.37', '68.37'),
(31, '2022-05-31', 'Central', 'Gill', 80, 9, '719.20', '719.20'),
(32, '2022-06-17', 'Central', 'Kivell', 5, 125, '625.00', '625.00'),
(33, '2022-07-04', 'East', 'Jones', 62, 5, '309.38', '309.38'),
(34, '2022-07-21', 'Central', 'Morgan', 55, 12, '686.95', '686.95'),
(35, '2022-08-07', 'Central', 'Kivell', 42, 24, '1005.90', '1005.90'),
(36, '2022-08-24', 'West', 'Sorvino', 3, 275, '825.00', '825.00'),
(37, '2022-09-10', 'Central', 'Gill', 7, 1, '9.03', '9.03'),
(38, '2022-09-27', 'West', 'Sorvino', 76, 2, '151.24', '151.24'),
(39, '2022-10-14', 'West', 'Thompson', 57, 20, '1139.43', '1139.43'),
(40, '2022-10-31', 'Central', 'Andrews', 14, 1, '18.06', '18.06'),
(41, '2022-11-17', 'Central', 'Jardine', 11, 5, '54.89', '54.89'),
(42, '2022-12-04', 'Central', 'Jardine', 94, 20, '1879.06', '1879.06'),
(43, '2022-12-21', 'Central', 'Andrews', 28, 5, '139.72', '139.72'),
(44, '0000-00-00', '', '', 0, 0, '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `product_keyword` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `pimage1` varchar(255) NOT NULL,
  `pimage2` varchar(255) NOT NULL,
  `pimage3` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `selling_price` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `description`, `product_keyword`, `category_id`, `brand_id`, `pimage1`, `pimage2`, `pimage3`, `price`, `selling_price`, `date`, `status`) VALUES
(2, 'Visiting card', 'Rectangular Visiting Card', 'Visitingcard', 2, 1, 'v1.jpg', 'v2.jpg', 'v3.jpg', 60, 45, '2023-11-01 12:56:19', 1),
(3, 'Weddingcard', 'Unique design', 'Wedding', 1, 1, 'wedding.jpg', '501.jpg', 'wedding.jpg', 90, 65, '2024-02-01 03:33:56', 0),
(4, 'Weddingcard', 'High Quality Wedding Card', 'Card', 1, 1, '501.jpg', 'wedding.jpg', 'wedding.jpg', 120, 100, '2024-02-01 09:58:54', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `neworder`
--
ALTER TABLE `neworder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `neworder`
--
ALTER TABLE `neworder`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
