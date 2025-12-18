-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2025 at 01:13 PM
-- Server version: 8.0.44-0ubuntu0.24.04.2
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakaddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dsn`
--

CREATE TABLE `dsn` (
  `id` int NOT NULL,
  `nidn` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` enum('P','L') NOT NULL,
  `alamat` text NOT NULL,
  `matkul` int NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dsn`
--

INSERT INTO `dsn` (`id`, `nidn`, `nama`, `gender`, `alamat`, `matkul`, `waktu`) VALUES
(1, '789', 'siti', 'P', 'Purwokerto', 2, '2025-11-11 14:40:18'),
(2, '123', 'siti', 'P', 'kebumen                        ', 3, '2025-11-11 16:18:37'),
(3, '234', 'supri', 'L', 'purwokerto                        ', 2, '2025-11-11 16:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` int NOT NULL,
  `nim` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` enum('P','L') NOT NULL,
  `alamat` text NOT NULL,
  `prodi` int NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `nim`, `nama`, `gender`, `alamat`, `prodi`, `waktu`) VALUES
(1, '1117', 'Bintang', 'L', 'Purbalingga', 1, '2025-10-08 13:42:11'),
(2, '117', 'bintang', 'L', 'tjm                        ', 1, '2025-11-04 14:14:02'),
(3, '34', 'dfi', 'P', '                        pbg', 2, '2025-11-04 14:15:32'),
(4, '123', 'anu', 'L', '          bms              ', 3, '2025-11-04 14:17:50'),
(5, '123', 'ani', 'P', 'pwt        ', 1, '2025-11-04 14:17:57'),
(8, '098888', 'towo', 'L', 'PBG                     ', 1, '2025-11-11 07:17:12'),
(9, '777', 'sibad', 'L', 'karangene                        ', 1, '2025-12-10 20:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` char(12) NOT NULL,
  `password` char(255) NOT NULL,
  `level` enum('mhs','dosen','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'mhs', 'mhs', 'mhs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dsn`
--
ALTER TABLE `dsn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dsn`
--
ALTER TABLE `dsn`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
