-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 02:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tapasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_admin`
--

CREATE TABLE `akun_admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun_admin`
--

INSERT INTO `akun_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `akun_petugas`
--

CREATE TABLE `akun_petugas` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun_petugas`
--

INSERT INTO `akun_petugas` (`id`, `username`, `password`) VALUES
(1, 'agim', 'agim');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` varchar(80) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `nomer` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `nomer`) VALUES
('mbr0000000000', 'M. Gymnastiar', '081189765432');

-- --------------------------------------------------------

--
-- Table structure for table `order_member`
--

CREATE TABLE `order_member` (
  `id` int(60) NOT NULL,
  `id_member` varchar(80) NOT NULL,
  `id_paket` varchar(80) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` enum('sudah diambil','belum diambil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` varchar(50) NOT NULL,
  `jenis_paket` varchar(50) NOT NULL,
  `harga` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `jenis_paket`, `harga`) VALUES
('pkt0000000001', 'Expres 1', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `pelaundry_biasa`
--

CREATE TABLE `pelaundry_biasa` (
  `id` int(50) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `nomer` varchar(80) NOT NULL,
  `jenis_paket` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` enum('sudah diambil','belum diambil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` varchar(80) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `nomer` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `nomer`) VALUES
('P0000000001', 'khoyrur roykhan', '081256872345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_admin`
--
ALTER TABLE `akun_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun_petugas`
--
ALTER TABLE `akun_petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_member`
--
ALTER TABLE `order_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelaundry_biasa`
--
ALTER TABLE `pelaundry_biasa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_paket` (`jenis_paket`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_admin`
--
ALTER TABLE `akun_admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `akun_petugas`
--
ALTER TABLE `akun_petugas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_member`
--
ALTER TABLE `order_member`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelaundry_biasa`
--
ALTER TABLE `pelaundry_biasa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_member`
--
ALTER TABLE `order_member`
  ADD CONSTRAINT `order_member_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `order_member_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id`);

--
-- Constraints for table `pelaundry_biasa`
--
ALTER TABLE `pelaundry_biasa`
  ADD CONSTRAINT `pelaundry_biasa_ibfk_1` FOREIGN KEY (`jenis_paket`) REFERENCES `paket` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
