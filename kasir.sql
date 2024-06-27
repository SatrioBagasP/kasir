-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2024 at 07:13 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int NOT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`) VALUES
(1, 'satrio', '123');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(225) NOT NULL,
  `nama_barang` varchar(225) DEFAULT NULL,
  `harga_barang` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`) VALUES
('B001', 'Chitato', 10000),
('B002', 'Milku', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_nota`
--

CREATE TABLE `detail_nota` (
  `id_nota` int DEFAULT NULL,
  `id_barang` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `detail_nota`
--

INSERT INTO `detail_nota` (`id_nota`, `id_barang`) VALUES
(41, 'B001'),
(44, 'B001'),
(45, 'B001'),
(45, 'B001'),
(45, 'B001'),
(45, 'B001'),
(45, 'B002'),
(46, 'B001'),
(46, 'B001'),
(46, 'B001'),
(46, 'B001'),
(46, 'B002'),
(46, 'B002'),
(46, 'B002'),
(48, 'B001'),
(48, 'B001'),
(48, 'B001'),
(48, 'B001'),
(48, 'B002'),
(48, 'B002'),
(50, 'B001'),
(50, 'B001'),
(50, 'B002'),
(51, 'B001'),
(51, 'B001'),
(51, 'B002'),
(51, 'B002'),
(51, 'B001'),
(52, 'B002'),
(52, 'B002'),
(52, 'B002'),
(53, 'B001'),
(53, 'B001'),
(53, 'B001'),
(53, 'B002'),
(54, 'B001'),
(54, 'B001'),
(54, 'B002'),
(54, 'B002'),
(54, 'B001'),
(55, 'B001'),
(55, 'B001'),
(55, 'B001'),
(55, 'B002'),
(62, 'B001'),
(62, 'B002'),
(62, 'B001'),
(62, 'B001'),
(63, 'B001'),
(63, 'B002'),
(64, 'B001'),
(64, 'B001'),
(64, 'B002'),
(64, 'B002'),
(64, 'B002'),
(64, 'B002'),
(65, 'B001'),
(66, 'B001'),
(66, 'B002'),
(66, 'B001'),
(69, 'B002'),
(70, 'B001'),
(70, 'B001'),
(70, 'B001'),
(70, 'B001'),
(70, 'B002'),
(71, 'B001'),
(71, 'B002'),
(72, 'B001'),
(73, 'B002'),
(73, 'B002'),
(73, 'B002'),
(73, NULL),
(73, 'B002'),
(75, 'B001'),
(75, 'B002'),
(75, 'B001'),
(76, 'B001'),
(77, 'B001'),
(77, 'B001'),
(78, 'B001'),
(78, 'B002'),
(78, 'B001'),
(79, 'B001'),
(80, 'B002'),
(81, 'B001'),
(81, 'B001'),
(83, 'B001'),
(83, 'B002'),
(83, 'B001');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int NOT NULL,
  `id_pegawai` varchar(225) DEFAULT NULL,
  `total_harga` int DEFAULT NULL,
  `uang` int DEFAULT NULL,
  `kembalian` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `id_pegawai`, `total_harga`, `uang`, `kembalian`) VALUES
(62, 'P001', 35000, 50000, 15000),
(63, 'P001', 15000, 20000, 5000),
(64, 'P001', 40000, 50000, 10000),
(65, 'P001', 10000, 10000, 0),
(66, 'P001', 25000, 30000, 5000),
(69, 'P001', 5000, 10000, 5000),
(70, 'P001', 45000, 50000, 5000),
(71, 'P001', 15000, 20000, 5000),
(72, 'P001', 10000, 10000, 0),
(73, 'P001', 20000, 50000, 30000),
(75, 'P001', 25000, 50000, 25000),
(76, 'P001', 10000, 10000, 0),
(77, 'P001', 20000, 50000, 30000),
(78, 'P001', 25000, 30000, 5000),
(79, 'P001', 10000, 20000, 10000),
(80, 'P001', NULL, NULL, NULL),
(81, 'P001', NULL, NULL, NULL),
(82, 'P001', NULL, NULL, NULL),
(83, 'P001', 26000, 50000, 24000);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(225) NOT NULL,
  `nama_pegawai` varchar(225) DEFAULT NULL,
  `id_akun` int DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `id_akun`, `password`) VALUES
('P001', 'Satrio', 1, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
