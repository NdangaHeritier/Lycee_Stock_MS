-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 04:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lycee_smis`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `Quantity` decimal(13,2) NOT NULL,
  `qnty_measures` varchar(50) NOT NULL DEFAULT 'kgs'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `product_name`, `Quantity`, `qnty_measures`) VALUES
(9, 'Oil', '55.00', 'litres'),
(10, 'Maize Flour', '73.00', 'kgs'),
(11, 'Rice', '34.00', 'kgs'),
(12, 'Salt', '20.00', 'kgs'),
(13, 'Sugar', '110.00', 'kgs'),
(14, 'Beans', '45.00', 'kgs');

-- --------------------------------------------------------

--
-- Table structure for table `stock_in`
--

CREATE TABLE `stock_in` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `amount_in` decimal(13,2) NOT NULL,
  `in_date` date NOT NULL,
  `expired_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_in`
--

INSERT INTO `stock_in` (`id`, `pro_id`, `amount_in`, `in_date`, `expired_date`) VALUES
(17, 9, '20.00', '2024-03-07', '2024-03-10'),
(18, 9, '10.00', '2024-03-07', '2024-05-10'),
(19, 11, '34.00', '2024-03-07', '2024-03-12'),
(20, 10, '23.00', '2024-03-08', '0000-00-00'),
(21, 12, '20.00', '2024-03-08', '2024-03-13'),
(22, 13, '80.00', '2024-03-08', '2024-03-15'),
(23, 13, '30.00', '2024-03-08', '2024-07-29'),
(24, 9, '25.00', '2024-03-08', '2024-03-13'),
(25, 10, '50.00', '2024-03-08', '2024-03-13'),
(26, 14, '45.00', '2024-03-08', '2024-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `stock_out`
--

CREATE TABLE `stock_out` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `amount_out` decimal(13,2) NOT NULL,
  `out_date` date NOT NULL,
  `reason` text NOT NULL,
  `period_of_use` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_out`
--

INSERT INTO `stock_out` (`id`, `pro_id`, `amount_out`, `out_date`, `reason`, `period_of_use`) VALUES
(1, 11, '10.00', '2024-03-07', 'Students Feeding', 'Lunch'),
(2, 9, '12.00', '2024-03-07', 'Students Feeding', 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `students_available`
--

CREATE TABLE `students_available` (
  `school` varchar(100) NOT NULL,
  `number_of_students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_available`
--

INSERT INTO `students_available` (`school`, `number_of_students`) VALUES
('LYCEE SAINT ALEXANDRE SAULI DE MUHURA', 617);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_ID` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `pic` varchar(255) NOT NULL DEFAULT 'profiles/default.png',
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_ID`, `fullname`, `phone_number`, `password`, `role`, `pic`, `reg_date`) VALUES
(100, 'BAMUREBE B.', '0781234567', '1234567', 'Store Keeper', 'profiles/BingWallpaper.jpg', '2024-03-05'),
(101, 'BURSARY', '0788888888', '8888', 'Cashier', 'profiles/default.png', '2024-03-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `stock_in`
--
ALTER TABLE `stock_in`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `stock_out`
--
ALTER TABLE `stock_out`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stock_in`
--
ALTER TABLE `stock_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `stock_out`
--
ALTER TABLE `stock_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stock_in`
--
ALTER TABLE `stock_in`
  ADD CONSTRAINT `stock_in_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `products` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stock_out`
--
ALTER TABLE `stock_out`
  ADD CONSTRAINT `stock_out_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `products` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
