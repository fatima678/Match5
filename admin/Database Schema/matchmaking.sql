-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 09:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matchmaking`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `matric_degree` varchar(50) NOT NULL,
  `intermediate_degree` varchar(50) NOT NULL,
  `bachelors_detail` text NOT NULL,
  `masters_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`id`, `c_id`, `matric_degree`, `intermediate_degree`, `bachelors_detail`, `masters_detail`) VALUES
(4, 53, 'science', 'engineering', 'BS Computer Science', 'NA'),
(9, 55, 'science', 'engineering', 'BSCS', 'Law'),
(10, 56, 'science', 'engineering', 'Mass Com', 'Mass Com'),
(11, 57, 'science', 'medical', 'Maths', 'Maths'),
(12, 58, 'science', 'medical', 'MBBS', 'Neurology'),
(13, 59, 'science', 'ics', 'BS EE', 'NA'),
(14, 60, 'science', 'ics', 'BSDS', 'Data Sciene');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`, `a_id`) VALUES
('admin', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `occupation` varchar(40) NOT NULL,
  `monthly_income` int(50) NOT NULL,
  `age` int(4) NOT NULL,
  `height` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `caste` varchar(30) NOT NULL,
  `profile_img` varchar(50) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `email`, `phone_no`, `religion`, `occupation`, `monthly_income`, `age`, `height`, `gender`, `marital_status`, `caste`, `profile_img`, `c_id`, `city`) VALUES
(9, 'Sajjad', 'SajjadSaroya6@gmail.com', '03024371932', 'islam', 'govt-job', 50000, 23, '5.8', 'male', 'single', 'Saroya', ' uploads/Sajjad1.jpg', 53, 'Gujranwala'),
(14, 'Muzammil', 'muzammil@gmail.com', '03081111111', 'islam', 'govt-job', 100000, 23, '5.5', 'male', 'single', 'Rana', ' uploads/mz.jpeg', 55, 'gujranwala'),
(15, 'Alia', 'alia11@gmail.com', '03034455671', 'islam', 'teacher', 70000, 27, '5.6', 'female', 'single', 'Mehar', ' uploads/alia2.jpg', 56, 'lahore'),
(16, 'amna', 'amna123@gmail.com', '03001122334', 'islam', 'other', 40000, 25, '5.2', 'female', 'single', 'Butt', ' uploads/amna.jpg', 57, 'islamabad'),
(17, 'Aleena', 'alee22@gmail.com', '03435656342', 'islam', 'doctor', 200000, 28, '5.4', 'female', 'single', 'Mughal', ' uploads/aleena.jpg', 58, 'islamabad'),
(18, 'Sana Aziz', 'sanii44@gmail.com', '03224534678', 'islam', 'govt-job', 70000, 33, '5.3', 'female', 'single', 'Sandhu', ' uploads/sana.jpg', 59, 'gujranwala'),
(19, 'Raeesa', 'jutt3344@gmail.com', '03123456789', 'islam', 'other', 60000, 28, '5.1', 'female', 'single', 'Jutt', ' uploads/raeesa.jpg', 60, 'gujranwala');

-- --------------------------------------------------------

--
-- Table structure for table `candidatesignup`
--

CREATE TABLE `candidatesignup` (
  `c_id` int(3) NOT NULL,
  `c_username` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL,
  `confirmpassword` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidatesignup`
--

INSERT INTO `candidatesignup` (`c_id`, `c_username`, `password`, `confirmpassword`) VALUES
(52, 'Fatima', 'fs66', 'fs66'),
(53, 'Sajjad', '1122', '1122'),
(54, 'mz', '1133', '1133'),
(55, 'muzammil', '5566', '5566'),
(56, 'Aliya ', 'aliya', 'aliya'),
(57, 'Amna', 'amna11', 'amna11'),
(58, 'aleena', 'alee22', 'alee22'),
(59, 'sana', 'sana11', 'sana11'),
(60, 'raeesa', 'raeesa22', 'raeesa22');

-- --------------------------------------------------------

--
-- Table structure for table `familydetail`
--

CREATE TABLE `familydetail` (
  `f_id` int(11) NOT NULL,
  `c_id` int(3) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `father_occupation` varchar(50) NOT NULL,
  `mother_occupation` varchar(50) DEFAULT NULL,
  `father_phone` varchar(20) DEFAULT NULL,
  `siblings` int(11) NOT NULL,
  `married_persons` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `familydetail`
--

INSERT INTO `familydetail` (`f_id`, `c_id`, `father_name`, `mother_name`, `father_occupation`, `mother_occupation`, `father_phone`, `siblings`, `married_persons`) VALUES
(14, 53, 'Sadiq Ali', 'Riffat Bibi', 'govt-job', 'other', '03001111111', 4, 0),
(19, 55, 'Asghar', 'Maa g ', 'other', 'housewife', '03001111111', 4, 3),
(20, 56, 'Ajmal', 'Rehana', 'teacher', 'housewife', '03002323431', 5, 2),
(21, 57, 'Rafeeq', 'Rozeena', 'govt-job', 'housewife', '03001234567', 3, 1),
(22, 58, 'Raheem', 'Maryam', 'doctor', 'housewife', '03456784567', 3, 2),
(23, 59, 'Aziz', 'Sobia', 'govt-job', 'housewife', '03002323431', 5, 3),
(24, 60, 'Ahmed', 'Robeena', 'other', 'housewife', '03226583654', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `house_detail`
--

CREATE TABLE `house_detail` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `size` varchar(50) DEFAULT NULL,
  `total_floors` int(11) DEFAULT NULL,
  `house_owner` varchar(50) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_detail`
--

INSERT INTO `house_detail` (`id`, `c_id`, `size`, `total_floors`, `house_owner`, `city`, `location`) VALUES
(3, 55, '1 kanal', 2, 'medical', 'gujranwala', 'Eminabad, Gujranwala'),
(4, 56, '10 marla', 2, 'medical', 'lahore', 'DHA, Lahore'),
(5, 57, '7 marla', 2, 'engineering', 'islamabad', 'Fazaia Housing Society, Islamabad'),
(6, 58, '1 kanal', 2, 'medical', 'islamabad', 'Street no.3, DHA Phase 1, Rawalpindi, Islamabad'),
(7, 59, '15 Marla', 2, 'medical', 'gujranwala', 'House No.10, Street 4, Main bazar Daska,Gujranwala'),
(8, 60, '3 marla', 2, 'medical', 'gujranwala', 'House no.65, Street no.0, near PGC, Kamoke, Gujranwala');

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `payment_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `payment_amount` decimal(10,2) NOT NULL,
  `purchase_date` datetime DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `package_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`payment_id`, `c_id`, `payment_status`, `payment_amount`, `purchase_date`, `expiration_date`, `package_name`) VALUES
(76, 53, 'paid', '35000.00', '2023-09-04 07:50:29', '2024-09-04 07:50:29', 'signature-package'),
(77, 58, 'paid', '8500.00', '2023-09-06 21:17:19', '2023-09-13 21:17:19', 'normal'),
(78, 59, 'paid', '4000.00', '2023-09-06 21:26:24', '2023-09-07 21:26:24', 'basic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `candidatesignup`
--
ALTER TABLE `candidatesignup`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `familydetail`
--
ALTER TABLE `familydetail`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `house_detail`
--
ALTER TABLE `house_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `c_id` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `candidatesignup`
--
ALTER TABLE `candidatesignup`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `familydetail`
--
ALTER TABLE `familydetail`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `house_detail`
--
ALTER TABLE `house_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academics`
--
ALTER TABLE `academics`
  ADD CONSTRAINT `academics_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `candidate` (`c_id`);

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `candidatesignup` (`c_id`);

--
-- Constraints for table `familydetail`
--
ALTER TABLE `familydetail`
  ADD CONSTRAINT `familydetail_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `candidatesignup` (`c_id`);

--
-- Constraints for table `house_detail`
--
ALTER TABLE `house_detail`
  ADD CONSTRAINT `house_detail_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `candidate` (`c_id`);

--
-- Constraints for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD CONSTRAINT `payment_detail_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `candidate` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
