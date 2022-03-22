-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 06:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `subject` varchar(200) NOT NULL,
  `class_teacher` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `dob`, `subject`, `class_teacher`) VALUES
(1001, 'aditya  ', 'adi@gmail.com  ', 'adi123  ', '2015-11-16', 'chemistry ', '10A  '),
(1002, 'arnav', 'arnav@gmail.com', 'arnav123', '2014-11-11', 'maths', '7b'),
(1003, 'jainam ', 'jainam@gmail.com ', 'jai123 ', '2021-11-03', 'maths ', '8b '),
(1004, 'admin ', 'admin@gmail.com ', 'admin123 ', '2016-11-27', 'hindi', 'admin ');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `roll_no` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `parent_name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `class` int(200) NOT NULL,
  `phone` int(200) NOT NULL,
  `blood_group` varchar(200) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `grade` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`roll_no`, `name`, `email`, `password`, `parent_name`, `dob`, `class`, `phone`, `blood_group`, `remark`, `grade`) VALUES
(107, 'roshan', 'ro@gm.com', 'roshan123', 'rosh', '2015-11-17', 1, 1249259183, 'i0i0', 'i', 'i'),
(101, 'ujjwal ', 'ujjwal@gmail.com ', 'ujjwal123 ', 'vinod ', '2015-11-02', 10, 981389248, 'b+ ', 'good ', 'B+ '),
(102, 'Ritik ', 'ritik@gmail.com ', 'ritik123 ', 'suman ', '2021-11-08', 7, 987565646, '0- ', 'Average ', 'B +'),
(103, 'suyash', 'suyash@gmail.com', 'suyash123', 'srivastav', '2018-11-07', 10, 1249259183, 'ab+', 'can do better ', 'B'),
(104, 'aryan', 'aryan@gmail.com', 'aryan123', 'ujjwal', '2014-11-11', 8, 786876868, 'ab+', 'very good', 'A+');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
