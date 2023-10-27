-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 04:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caritukang`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_foto` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tukang_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_tukang` int(11) DEFAULT NULL,
  `nama_tukang` varchar(255) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `nama_customer` varchar(22) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `deskripsi_pekerjaan` varchar(255) DEFAULT NULL,
  `harga` varchar(30) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `bukti_transfer` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `stop` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `id_tukang` int(11) DEFAULT NULL,
  `pesanan_id` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `rating` int(12) DEFAULT NULL,
  `ulasan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `email`, `password`, `status`) VALUES
(1, 'admin', 'nazihhaidar512@gmail.com', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tukang`
--

CREATE TABLE `tukang` (
  `id_tukang` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama_tukang` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` int(100) DEFAULT NULL,
  `no_rekening` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `tukang_id` (`tukang_id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_tukang` (`id_tukang`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `fk_rating_tukang_idx` (`id_tukang`),
  ADD KEY `fk_rating_customer_idx` (`id_customer`),
  ADD KEY `fk_rating_pesanan_idx` (`pesanan_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tukang`
--
ALTER TABLE `tukang`
  ADD PRIMARY KEY (`id_tukang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tukang`
--
ALTER TABLE `tukang`
  MODIFY `id_tukang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `tukang_id` FOREIGN KEY (`tukang_id`) REFERENCES `tukang` (`id_tukang`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `id_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `id_tukang` FOREIGN KEY (`id_tukang`) REFERENCES `tukang` (`id_tukang`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_rating_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `fk_rating_pesanan` FOREIGN KEY (`pesanan_id`) REFERENCES `pemesanan` (`id_pemesanan`),
  ADD CONSTRAINT `fk_rating_tukang` FOREIGN KEY (`id_tukang`) REFERENCES `tukang` (`id_tukang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
