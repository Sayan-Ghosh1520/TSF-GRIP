-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 05:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17447667_bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bms_table`
--

CREATE TABLE `bms_table` (
  `id` int(10) NOT NULL,
  `Name` text NOT NULL,
  `Balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bms_table`
--

INSERT INTO `bms_table` (`id`, `Name`, `Balance`) VALUES
(115100, 'Vanya', 1900),
(115101, 'Ben', 2100),
(115102, 'Sir Reginald', 2400),
(115103, 'Diego', 2000),
(115104, 'Luther', 2000),
(115105, 'Allison', 1600),
(115106, 'Klaus', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Sender` text NOT NULL,
  `Receiver` text NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Sender`, `Receiver`, `Amount`, `DateTime`) VALUES
('Vanya', 'Ben', '100', '2021-08-19 12:53:22'),
('Allison', 'Sir Reginald', '400', '2021-08-19 12:53:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bms_table`
--
ALTER TABLE `bms_table`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
