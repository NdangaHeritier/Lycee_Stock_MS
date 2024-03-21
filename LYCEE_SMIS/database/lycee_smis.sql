-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 08:09 AM
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
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_ID` int(11) NOT NULL,
  `ClassName` varchar(100) NOT NULL,
  `ClassTeacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_ID`, `ClassName`, `ClassTeacher`) VALUES
(1, '5 Accounting', 1),
(3, '4 bussiness', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson_ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `class_ID` int(11) NOT NULL,
  `teacher_ID` int(11) NOT NULL,
  `Credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_ID`, `Title`, `class_ID`, `teacher_ID`, `Credits`) VALUES
(3, 'transactions controll', 1, 2, 35),
(4, 'currencies', 1, 2, 50);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `mark_ID` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `lesson_ID` int(11) NOT NULL,
  `CAT` decimal(5,2) NOT NULL,
  `EXAM` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(11, 'Rice', '114.00', 'kgs'),
(12, 'Salt', '20.00', 'kgs'),
(13, 'Sugar', '110.00', 'kgs'),
(14, 'Beans', '65.00', 'kgs');

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
(26, 14, '45.00', '2024-03-08', '2024-03-15'),
(27, 14, '20.00', '2024-03-18', '2024-03-18'),
(28, 11, '200.00', '2024-03-18', '2024-04-20');

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
(2, 9, '12.00', '2024-03-07', 'Students Feeding', 'Dinner'),
(3, 11, '100.00', '2024-03-18', 'students feedings', 'Morning'),
(4, 11, '20.00', '2024-03-18', 'students feedings', 'Morning');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_ID` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `class_ID` int(11) NOT NULL,
  `RegDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_ID`, `FirstName`, `LastName`, `Sex`, `DOB`, `class_ID`, `RegDate`) VALUES
(5, 'wilton', 'john', 'Male', '2011-11-11', 1, '2024-03-20'),
(6, 'Petro', 'Khan', 'Male', '1010-10-10', 3, '2024-03-21'),
(7, 'UU', 'VV', 'Female', '2003-02-23', 1, '2024-03-21');

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
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_ID` int(11) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `RegDate` date NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_ID`, `FullName`, `Email`, `RegDate`, `User_ID`) VALUES
(1, 'Cobby Bryan', 'cobby@gmail.com', '2024-03-19', 104),
(2, 'Muhire Jimmy', 'jimmymuhire@gmail.com', '2024-03-20', 105),
(3, 'Trainer BB', 'bb@gmail.com', '2024-03-21', 106);

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
(100, 'BAMUREBE B.', '0781234567', '1234', 'Store Keeper', 'profiles/BingWallpaper.jpg', '2024-03-05'),
(101, 'BURSARY', '0788888888', '8888', 'Cashier', 'profiles/default.png', '2024-03-05'),
(102, 'KAKA LEYY', '0780000000', '0000', 'DOS', 'profiles/dev.PNG', '2024-03-19'),
(103, 'KAMUGI VED', '0791111111', '1111', 'Head Master', 'profiles/default.png', '2024-03-19'),
(104, 'Cobby Bryan', '0789999999', '9999', 'Teacher', 'profiles/default.png', '2024-03-19'),
(105, 'Muhire Jimmy', '0782222222', '2222', 'Teacher', 'profiles/default.png', '2024-03-20'),
(106, 'Trainer BB', '0785555555', '5555', 'Teacher', 'profiles/default.png', '2024-03-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_ID`),
  ADD KEY `ClassTeacher` (`ClassTeacher`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_ID`),
  ADD KEY `class_ID` (`class_ID`),
  ADD KEY `teacher_ID` (`teacher_ID`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`mark_ID`),
  ADD KEY `lesson_ID` (`lesson_ID`),
  ADD KEY `student_ID` (`student_ID`);

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_ID`),
  ADD KEY `class_ID` (`class_ID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_ID`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `mark_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stock_in`
--
ALTER TABLE `stock_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `stock_out`
--
ALTER TABLE `stock_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`ClassTeacher`) REFERENCES `teachers` (`teacher_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`class_ID`) REFERENCES `classes` (`class_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lessons_ibfk_2` FOREIGN KEY (`teacher_ID`) REFERENCES `teachers` (`teacher_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`lesson_ID`) REFERENCES `lessons` (`lesson_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`student_ID`) REFERENCES `students` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`class_ID`) REFERENCES `classes` (`class_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`U_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
