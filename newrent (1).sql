-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 10:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `bed_id` int(11) NOT NULL,
  `bhouse_id` varchar(50) NOT NULL,
  `bed_no` varchar(50) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `bed_status` varchar(60) NOT NULL,
  `bed_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`bed_id`, `bhouse_id`, `bed_no`, `room_id`, `price`, `bed_status`, `bed_added`) VALUES
(27, '2', '1', '202', '1000', 'vacant', '2023-02-04 08:32:50'),
(28, '2', '2', '203', '1000', 'vacant', '2023-02-04 08:32:50'),
(29, '2', '3', '204', '1000', 'vacant', '2023-02-04 08:32:50'),
(30, '2', '5', '206', '1000', 'vacant', '2023-02-04 08:35:04'),
(31, '2', '6', '207', '1000', 'vacant', '2023-02-04 08:35:04'),
(32, '2', '7', '208', '1000', 'vacant', '2023-02-04 09:12:49'),
(33, '2', '8', '209', '1000', 'vacant', '2023-02-04 09:12:49'),
(34, '2', '9', '210', '1000', 'vacant', '2023-02-04 09:33:10'),
(35, '2', '10', '211', '1000', 'vacant', '2023-02-04 09:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `boarding_house`
--

CREATE TABLE `boarding_house` (
  `bhouse_id` int(11) NOT NULL,
  `bhouse_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `amenities` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bh_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boarding_house`
--

INSERT INTO `boarding_house` (`bhouse_id`, `bhouse_name`, `description`, `location`, `amenities`, `image`, `user_id`, `bh_added`) VALUES
(2, 'Rodriguez', 'atbang sa nmsc', 'Labuyo, Tangub City', 'aa', 'house.png', 14, '2023-01-28 22:47:36'),
(11, 'Pink', 'atbang sa nmsc', 'Labuyo, Tangub City', 'cxxcaa', 'house.png', 14, '2023-02-02 15:26:27'),
(18, 'GRAY', 'dsd', 'Likod sa blue house', 'jhghgj', 'house.png', 14, '2023-02-03 16:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `customer_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `payment_amount` varchar(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `ratings_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `date_recorded` datetime NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) NOT NULL,
  `bed_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `bed_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `started_date` date NOT NULL,
  `total_amount` varchar(20) NOT NULL,
  `status` varchar(60) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reservation_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `bhouse_id` int(20) NOT NULL,
  `room_no` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `number_of_beds` varchar(50) NOT NULL,
  `room_type_id` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `amenities` varchar(60) NOT NULL,
  `room_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `bhouse_id`, `room_no`, `description`, `number_of_beds`, `room_type_id`, `image`, `amenities`, `room_added`) VALUES
(6, 2, '201', 'asa', '2', 'aa', 'mar enroll.png', 'sasa', '2023-02-05 16:30:47'),
(7, 2, '202', 'fdfd', '2', 'bb', 'room.png', 'as', '2023-02-05 16:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_type_id` int(11) NOT NULL,
  `bhouse_id` varchar(20) NOT NULL,
  `type_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `bhouse_id`, `type_name`) VALUES
(1, '2', 'a'),
(2, '2', 'a'),
(3, '2', 'aa'),
(4, '2', 'bb');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `rule_id` int(11) NOT NULL,
  `bhouse_id` int(20) NOT NULL,
  `rules` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`rule_id`, `bhouse_id`, `rules`) VALUES
(1, 2, 'bawal mag inom'),
(2, 2, 'bawal mag sigarilyo'),
(3, 2, 'no outside person/s allowed inside the room'),
(4, 2, 'bawal mag jowa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` int(20) NOT NULL,
  `user_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fullname`, `contact`, `email`, `image`, `role`, `status`, `user_added`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'John Doe', '9434556643', 'admin@gmail.com', 'file.png', 'admin', 0, '2023-01-28 22:37:37'),
(14, 'mariz', 'ee11cbb19052e40b07aac0ca060c23ee', 'Mariz Larita', '9366313898', 'a@gmail.com', 'file.png', 'user', 0, '2023-01-29 15:03:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`bed_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `boarding_house`
--
ALTER TABLE `boarding_house`
  ADD PRIMARY KEY (`bhouse_id`),
  ADD KEY `user_id_fk` (`user_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `reservation_fk` (`reservation_id`),
  ADD KEY `user_fk` (`user_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`ratings_id`),
  ADD KEY `roomid_Fk` (`room_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `bed_id_fk` (`bed_id`),
  ADD KEY `customer_id_fk` (`customer_id`),
  ADD KEY `userid_fk` (`user_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `roomtype_fk` (`room_no`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`rule_id`),
  ADD KEY `bhouse_id` (`bhouse_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `bed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `boarding_house`
--
ALTER TABLE `boarding_house`
  MODIFY `bhouse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `ratings_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boarding_house`
--
ALTER TABLE `boarding_house`
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `reservation_fk` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `roomid_Fk` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `bed_id_fk` FOREIGN KEY (`bed_id`) REFERENCES `bed` (`bed_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_id_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userid_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_ibfk_1` FOREIGN KEY (`bhouse_id`) REFERENCES `boarding_house` (`bhouse_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
