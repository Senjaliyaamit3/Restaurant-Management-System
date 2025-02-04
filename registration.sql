-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2024 at 01:24 PM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('Amit Senjaliya', 'amit12345');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Name` varchar(50) NOT NULL,
  `Product` varchar(50) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Price` int(10) NOT NULL,
  `Total` int(30) NOT NULL,
  `Name_C` varchar(50) NOT NULL,
  `Mobile` int(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Accept` varchar(20) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `C_n` varchar(40) NOT NULL,
  `Mobile` int(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` int(11) NOT NULL,
  `Food_name` varchar(50) NOT NULL,
  `Product` varchar(60) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Price` int(20) NOT NULL,
  `Total_amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `Id` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Name_C` varchar(50) NOT NULL,
  `Price` int(10) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`Id`, `Name`, `Quantity`, `Name_C`, `Price`, `Img`) VALUES
(16, 'Burger', 2, 'Umang Memakiya', 450, '1727775196.jpg'),
(17, 'Frech-Fries', 1, 'Umang Memakiya', 399, '1727775256.webp'),
(18, 'Cake', 1, 'Amit Senjaliya', 300, '1727775134.webp'),
(19, 'Punjabi_thali', 1, 'Amit Senjaliya', 239, '1727775576.webp'),
(20, 'Sandwich', 2, 'Amit Senjaliya', 259, '1727775523.webp'),
(21, 'Ice-Cream', 1, 'sanjay', 299, '1727775321.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Username` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Password` varchar(90) NOT NULL,
  `Conform_Password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Username`, `Email`, `Password`, `Conform_Password`) VALUES
('Amit Senjaliya', 'senjaliyaamit1@gmail.com', 'amit@123', 'amit@123'),
('Umang Memakiya', 'amitsenjaliya1@gmail.com', '5506', '5506'),
('Pranav Patel', 'Patelpranav203@gmail.com', 'pranav@1234', 'pranav@1234'),
('Het Dholariya', 'hetdholariya@gmail.com', 'het@123', 'het@123'),
('Krish Harsora', 'krishharsora@gmail.com', 'k3435', 'k3435'),
('Ronak Karangiya', 'ronakkarangiya@gmail.com', '8454', '8454'),
('Yash kotak', 'kotakyash@gmail.com', 'yash50', 'yash50'),
('Bhavya Bhanderi', 'bhavya@gmail.com', 'bhavya@123', 'bhavya@123'),
('sanjay', 'abc@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
