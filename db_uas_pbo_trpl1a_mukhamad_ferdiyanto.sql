-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2026 at 01:04 AM
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
-- Database: `db_uas_pbo_trpl1a_mukhamad_ferdiyanto`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `semester` int NOT NULL,
  `tarif_ukt_nominal` decimal(12,2) NOT NULL,
  `jenis_pembiayaan` enum('Mandiri','Bidikmisi','Prestasi') NOT NULL,
  `golongan_ukt` varchar(10) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nomor_kip_kuliah` varchar(30) DEFAULT NULL,
  `dana_saku_subsidi` decimal(12,2) DEFAULT NULL,
  `nama_instansi_beasiswa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `minimal_ipk_syarat` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `semester`, `tarif_ukt_nominal`, `jenis_pembiayaan`, `golongan_ukt`, `nama_wali`, `nomor_kip_kuliah`, `dana_saku_subsidi`, `nama_instansi_beasiswa`, `minimal_ipk_syarat`) VALUES
(1, 'Andi Saputra', '2311001', 2, '5000000.00', 'Mandiri', 'UKT 3', 'Budi Saputra', NULL, NULL, NULL, NULL),
(2, 'Budi Santoso', '2311002', 4, '6500000.00', 'Mandiri', 'UKT 5', 'Slamet Santoso', NULL, NULL, NULL, NULL),
(3, 'Citra Lestari', '2311003', 6, '7000000.00', 'Mandiri', 'UKT 6', 'Rudi Lestari', NULL, NULL, NULL, NULL),
(4, 'Dewi Anggraini', '2311004', 8, '8000000.00', 'Mandiri', 'UKT 7', 'Ahmad Anggraini', NULL, NULL, NULL, NULL),
(5, 'Eko Prasetyo', '2311005', 2, '4500000.00', 'Mandiri', 'UKT 2', 'Joko Prasetyo', NULL, NULL, NULL, NULL),
(6, 'Fajar Nugraha', '2311006', 4, '5500000.00', 'Mandiri', 'UKT 4', 'Yanto Nugraha', NULL, NULL, NULL, NULL),
(7, 'Gina Amelia', '2311007', 6, '7500000.00', 'Mandiri', 'UKT 6', 'Rahmat Amelia', NULL, NULL, NULL, NULL),
(8, 'Hendra Wijaya', '2311008', 8, '8500000.00', 'Mandiri', 'UKT 8', 'Sutrisno Wijaya', NULL, NULL, NULL, NULL),
(9, 'Intan Permata', '2311009', 2, '0.00', 'Bidikmisi', NULL, NULL, 'KIP001', '700000.00', NULL, NULL),
(10, 'Joko Firmansyah', '2311010', 4, '0.00', 'Bidikmisi', NULL, NULL, 'KIP002', '750000.00', NULL, NULL),
(11, 'Kiki Aulia', '2311011', 6, '0.00', 'Bidikmisi', NULL, NULL, 'KIP003', '800000.00', NULL, NULL),
(12, 'Lina Marlina', '2311012', 8, '0.00', 'Bidikmisi', NULL, NULL, 'KIP004', '700000.00', NULL, NULL),
(13, 'M. Rizki', '2311013', 2, '0.00', 'Bidikmisi', NULL, NULL, 'KIP005', '900000.00', NULL, NULL),
(14, 'Nanda Putri', '2311014', 4, '0.00', 'Bidikmisi', NULL, NULL, 'KIP006', '850000.00', NULL, NULL),
(15, 'Oki Ramadhan', '2311015', 2, '2000000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Bank Indonesia', '3.50'),
(16, 'Putri Ayu', '2311016', 4, '1500000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Djarum Foundation', '3.60'),
(17, 'Qori Ahmad', '2311017', 6, '1000000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Pertamina', '3.75'),
(18, 'Rina Oktavia', '2311018', 8, '2500000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Telkom Indonesia', '3.70'),
(19, 'Salsa Nabila', '2311019', 4, '1800000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'BRI', '3.50'),
(20, 'Teguh Saputra', '2311020', 6, '1200000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'PLN', '3.65');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
