-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 09:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `2024-2025`
--

CREATE TABLE `2024-2025` (
  `ID` int(11) NOT NULL,
  `Student_No` varchar(50) DEFAULT NULL,
  `Last_name` varchar(100) DEFAULT NULL,
  `First_name` varchar(100) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `Program` varchar(100) DEFAULT NULL,
  `Year_graduated` year(4) DEFAULT NULL,
  `Contact_no` varchar(15) DEFAULT NULL,
  `Personal_email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `2024-2025`
--

INSERT INTO `2024-2025` (`ID`, `Student_No`, `Last_name`, `First_name`, `Department`, `Program`, `Year_graduated`, `Contact_no`, `Personal_email`) VALUES
(1, '123456', 'Go', 'Troy', 'Computer Science', 'Bacher of Science in Computer Science', '2025', '09123456789', 'Go.troy@123.com');

-- --------------------------------------------------------

--
-- Table structure for table `2024-2025-ws`
--

CREATE TABLE `2024-2025-ws` (
  `Alumni_id` int(11) NOT NULL,
  `Last_name` varchar(100) DEFAULT NULL,
  `First_name` varchar(100) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `Year_graduated` year(4) DEFAULT NULL,
  `Contact_no` varchar(15) DEFAULT NULL,
  `Personal_email` varchar(100) DEFAULT NULL,
  `Working_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `2024-2025-ws`
--

INSERT INTO `2024-2025-ws` (`Alumni_id`, `Last_name`, `First_name`, `Department`, `Year_graduated`, `Contact_no`, `Personal_email`, `Working_status`) VALUES
(1, 'Go', 'Troy', 'Computer Science', '2025', '09123456789', 'Go.troy@123.com', 'Employed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2024-2025`
--
ALTER TABLE `2024-2025`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `2024-2025-ws`
--
ALTER TABLE `2024-2025-ws`
  ADD PRIMARY KEY (`Alumni_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2024-2025`
--
ALTER TABLE `2024-2025`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `2024-2025-ws`
--
ALTER TABLE `2024-2025-ws`
  MODIFY `Alumni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
