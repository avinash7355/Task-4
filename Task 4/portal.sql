-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2023 at 02:49 PM
-- Server version: 8.0.33
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesstype`
--

CREATE TABLE `accesstype` (
  `id` int NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accesstype`
--

INSERT INTO `accesstype` (`id`, `type`) VALUES
(1, 'Admin'),
(2, 'Teacher'),
(3, 'Student'),
(4, 'Librarian');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id` int NOT NULL,
  `chaptername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`id`, `chaptername`) VALUES
(2, 'History'),
(34, 'Honeybee'),
(50, 'functions'),
(1234, 'Binary operation');

-- --------------------------------------------------------

--
-- Table structure for table `Chapter_s`
--

CREATE TABLE `Chapter_s` (
  `id` int NOT NULL,
  `Chapter_id` int NOT NULL,
  `subject_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Chapter_s`
--

INSERT INTO `Chapter_s` (`id`, `Chapter_id`, `subject_id`) VALUES
(1, 2, 1),
(2, 34, 1245),
(3, 50, 1245);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rollno` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rollno`, `fullname`, `email`, `password`, `address`) VALUES
(1, 'Avinash Pratap', 'avinashpratap@brainvire.com', '123', 'lko'),
(15, '15', 'amittiwari@gmail.comdgfasg', 'dsgtiwari', 'Kanpurdsg'),
(24, 'Rahul', 'rahul@123', '123', 'address'),
(45, 'Vivek kumar pal', 'vivekkrpal@gmail.com', 'vivek', 'Banaras'),
(121, 'Rahul', 'rahul@gmail.com', '123', 'SDFAD'),
(123, 'Shivam', 'Boombaam@gmail.com', '213', 'Mumbai'),
(124, 'Vinay', 'rahul@gmail.com', 'avinash', 'PBH'),
(21341, 'Avinash', 'DGDASG@GMAIL.COM', '1234', 'SDFAD');

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

CREATE TABLE `standard` (
  `id` int NOT NULL,
  `standard_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `standard`
--

INSERT INTO `standard` (`id`, `standard_name`) VALUES
(1, 'CLASS III'),
(2, 'Class II'),
(16, 'Class XI');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int NOT NULL,
  `subjectname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subjectname`) VALUES
(1, 'Social science'),
(2, 'Hindi'),
(4, 'Science'),
(1245, 'EVS');

-- --------------------------------------------------------

--
-- Table structure for table `subject_standard`
--

CREATE TABLE `subject_standard` (
  `id` int NOT NULL,
  `standard_id` int NOT NULL,
  `subject_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subject_standard`
--

INSERT INTO `subject_standard` (`id`, `standard_id`, `subject_id`) VALUES
(1, 1, 2),
(2, 1, 2),
(3, 1, 2),
(4, 1, 4),
(5, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int NOT NULL,
  `userid` int NOT NULL,
  `user_access_type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `userid`, `user_access_type`) VALUES
(1, 1, 3),
(2, 15, 1),
(3, 24, 2),
(4, 45, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesstype`
--
ALTER TABLE `accesstype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Chapter_s`
--
ALTER TABLE `Chapter_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_standard`
--
ALTER TABLE `subject_standard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesstype`
--
ALTER TABLE `accesstype`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `Chapter_s`
--
ALTER TABLE `Chapter_s`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rollno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21342;

--
-- AUTO_INCREMENT for table `standard`
--
ALTER TABLE `standard`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1246;

--
-- AUTO_INCREMENT for table `subject_standard`
--
ALTER TABLE `subject_standard`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
