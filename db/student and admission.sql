-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 05:39 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp3_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `uni_students`
--

CREATE TABLE `uni_students` (
  `id` int(11) NOT NULL,
  `enrollement` varchar(255) DEFAULT NULL,
  `aadhar` varchar(255) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `wmobile` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `university_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `sem_yearly` int(11) DEFAULT NULL,
  `fee` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `education_type` int(11) DEFAULT NULL,
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_students`
--

INSERT INTO `uni_students` (`id`, `enrollement`, `aadhar`, `sname`, `fname`, `mname`, `dob`, `mobile`, `wmobile`, `address`, `pincode`, `district`, `state`, `university_id`, `course_id`, `sem_yearly`, `fee`, `discount`, `education_type`, `remark`) VALUES
(3, 'ECR20210328090727', '290419498227', 'John Doe', 'Finchh Scott', 'Harley Quinn', '2003-03-27', '7532943952', '7532943952', 'Faridabad', '121002', 'Faridabad', 'Haryana', 1, 1, 25, 10000, 100, 1, 'First Year Student');

-- --------------------------------------------------------

--
-- Table structure for table `uni_student_admission`
--

CREATE TABLE `uni_student_admission` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `sem_yearly` int(11) NOT NULL,
  `fee` float NOT NULL,
  `discount` float NOT NULL,
  `is_current` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_student_admission`
--

INSERT INTO `uni_student_admission` (`id`, `student_id`, `university_id`, `course_id`, `sem_yearly`, `fee`, `discount`, `is_current`, `created_at`) VALUES
(1, 3, 1, 1, 25, 10000, 100, 1, '2021-03-28 03:39:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uni_students`
--
ALTER TABLE `uni_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_student_admission`
--
ALTER TABLE `uni_student_admission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uni_students`
--
ALTER TABLE `uni_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_student_admission`
--
ALTER TABLE `uni_student_admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
