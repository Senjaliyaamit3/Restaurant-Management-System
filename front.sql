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
-- Database: `front`
--

-- --------------------------------------------------------

--
-- Table structure for table `front_tbl`
--

CREATE TABLE `front_tbl` (
  `Id` int(11) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `front_tbl`
--

INSERT INTO `front_tbl` (`Id`, `Image`, `Name`, `Price`) VALUES
(12, '1727775073.jpg', 'Samosa', '159'),
(13, '1727775134.webp', 'Cake', '300'),
(14, '1727775196.jpg', 'Burger', '450'),
(15, '1727775256.webp', 'Frech-Fries', '399'),
(16, '1727775321.jpg', 'Ice-Cream', '299'),
(17, '1727775374.webp', 'Noodels', '199'),
(18, '1727775418.jpg', 'Pasta', '250'),
(19, '1727775462.jpg', 'Pav-Bhaji', '359'),
(20, '1727775523.webp', 'Sandwich', '259'),
(21, '1727775576.webp', 'Punjabi_thali', '239'),
(22, '1727775637.jpg', 'Pizza', '449'),
(23, '1727775696.jpg', 'Kit-Kat-shake', '369'),
(36, '1728709475.jpg', 'Popcorn', '59'),
(38, '1733195573.jpg', 'Dosa', '80');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `front_tbl`
--
ALTER TABLE `front_tbl`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `front_tbl`
--
ALTER TABLE `front_tbl`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
