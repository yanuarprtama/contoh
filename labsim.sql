-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2024 pada 08.52
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labsim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_lab`
--

CREATE TABLE `peminjaman_lab` (
  `id` int(11) NOT NULL,
  `lab_id` int(11) DEFAULT NULL,
  `nomor_peminjaman` varchar(255) DEFAULT NULL,
  `mata_kuliah` varchar(255) DEFAULT NULL,
  `waktu_mulai` datetime DEFAULT NULL,
  `waktu_selesai` datetime DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `praktikum` varchar(255) DEFAULT NULL,
  `dosen_pengajar` varchar(255) DEFAULT NULL,
  `jenis_peminjaman` varchar(255) DEFAULT NULL COMMENT 'PERKULIAHAN, PENELITIAN',
  `jenis_pengguna` varchar(255) DEFAULT NULL COMMENT 'TARUNA, DOSEN, PESERTA',
  `nama_pengguna` varchar(255) DEFAULT NULL,
  `nit_pengguna` varchar(255) DEFAULT NULL,
  `email_pengguna` varchar(255) DEFAULT NULL,
  `jumlah_peserta` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT 'PENDING, DITERIMA, DIKEMBALIKAN',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `peminjaman_lab`
--

INSERT INTO `peminjaman_lab` (`id`, `lab_id`, `nomor_peminjaman`, `mata_kuliah`, `waktu_mulai`, `waktu_selesai`, `course`, `praktikum`, `dosen_pengajar`, `jenis_peminjaman`, `jenis_pengguna`, `nama_pengguna`, `nit_pengguna`, `email_pengguna`, `jumlah_peserta`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(3940, NULL, NULL, 'ayooo', NULL, NULL, NULL, 'ayoooo', 'ayoooo', NULL, NULL, 'M. Badrut Tamam', '210441100032', NULL, 939, NULL, NULL, '2024-06-07 06:46:54', '2024-06-07 06:46:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peminjaman_lab`
--
ALTER TABLE `peminjaman_lab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peminjaman_lab`
--
ALTER TABLE `peminjaman_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3941;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
