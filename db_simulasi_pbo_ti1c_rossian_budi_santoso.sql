-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2026 at 05:01 AM
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
-- Database: `db_simulasi_pbo_ti1c_rossian budi santoso`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` int(11) NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(100) DEFAULT NULL,
  `lokasi_kampus` varchar(100) DEFAULT NULL,
  `jenis_prestasi` varchar(100) DEFAULT NULL,
  `tingkat_prestasi` varchar(50) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(100) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Andi Susanto', 'SMAN 1 Cilacap', 85.50, 250000, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(2, 'Budi Rahayu', 'SMKN 1 Cilacap', 78.00, 250000, 'Reguler', 'Teknik Mesin', 'Kampus 2', NULL, NULL, NULL, NULL),
(3, 'Citra Lestari', 'SMAN 2 Purwokerto', 82.00, 250000, 'Reguler', 'Akuntansi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(4, 'Deni Pratama', 'SMA Muhammadiyah', 75.50, 250000, 'Reguler', 'Manajemen Bisnis', 'Kampus Utama', NULL, NULL, NULL, NULL),
(5, 'Eka Putri', 'SMKN 2 Cilacap', 88.00, 250000, 'Reguler', 'Teknik Elektronika', 'Kampus 2', NULL, NULL, NULL, NULL),
(6, 'Fajar Hidayat', 'SMAN 3 Cilacap', 79.50, 250000, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(7, 'Gita Savitri', 'SMAN 1 Kebumen', 81.00, 250000, 'Reguler', 'Teknik Mesin', 'Kampus 2', NULL, NULL, NULL, NULL),
(8, 'Hendra Wijaya', 'SMAN 1 Cilacap', 92.50, 250000, 'Prestasi', NULL, NULL, 'Juara 1 OSN Komputer', 'Nasional', NULL, NULL),
(9, 'Indah Permata', 'SMAN 2 Cilacap', 90.00, 250000, 'Prestasi', NULL, NULL, 'Juara 1 FLS2N Tari', 'Provinsi', NULL, NULL),
(10, 'Joko Anwar', 'SMKN 1 Purwokerto', 89.50, 250000, 'Prestasi', NULL, NULL, 'Juara 2 LKS Web Tech', 'Nasional', NULL, NULL),
(11, 'Kiki Amalia', 'SMAN 1 Banyumas', 91.00, 250000, 'Prestasi', NULL, NULL, 'Hafidz 30 Juz', 'Nasional', NULL, NULL),
(12, 'Lukman Hakim', 'SMA Al Irsyad', 88.50, 250000, 'Prestasi', NULL, NULL, 'Juara 1 Pencak Silat', 'Kabupaten', NULL, NULL),
(13, 'Mira Santika', 'SMAN 1 Kroya', 93.00, 250000, 'Prestasi', NULL, NULL, 'Juara 1 Debat Bahasa Inggris', 'Provinsi', NULL, NULL),
(14, 'Nanda Saputra', 'SMKN 2 Purwokerto', 87.50, 250000, 'Prestasi', NULL, NULL, 'Juara 3 Robotik', 'Provinsi', NULL, NULL),
(15, 'Oscar Mahendra', 'SMAN 1 Cilacap', 86.00, 250000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DINAS-001', 'Kemenkumham'),
(16, 'Putri Tanjung', 'SMAN 2 Purwokerto', 89.00, 250000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DINAS-002', 'BPS'),
(17, 'Qori Assegaf', 'SMAN 1 Kebumen', 85.00, 250000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DINAS-003', 'Kemenkeu'),
(18, 'Rizky Ramadhan', 'SMKN 1 Cilacap', 84.50, 250000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DINAS-004', 'Kemenhub'),
(19, 'Siti Aminah', 'SMAN 3 Cilacap', 87.00, 250000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DINAS-005', 'Pemkab Cilacap'),
(20, 'Tirta Mandira', 'SMAN 1 Purbalingga', 88.50, 250000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DINAS-006', 'Kemenkumham');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
