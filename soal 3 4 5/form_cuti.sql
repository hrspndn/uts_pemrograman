-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2020 pada 13.54
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_cuti`
--

CREATE TABLE `form_cuti` (
  `id_karyawan` int(10) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `alasan_cuti` varchar(100) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `pengajuan_cuti` int(11) NOT NULL,
  `sisa_cuti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `form_cuti`
--

INSERT INTO `form_cuti` (`id_karyawan`, `nik`, `nama`, `divisi`, `jabatan`, `alasan_cuti`, `tgl_mulai`, `tgl_selesai`, `pengajuan_cuti`, `sisa_cuti`) VALUES
(5, 343452, 'susi martiani', 'Supervisor', '', 'keperluan keluarga', '2020-12-10', '2020-12-13', 0, 0),
(6, 23456, 'haris pendina', 'Produksi', 'Leader', 'keperluan keluarga', '2020-12-01', '2020-12-02', 1, 9);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `form_cuti`
--
ALTER TABLE `form_cuti`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `form_cuti`
--
ALTER TABLE `form_cuti`
  MODIFY `id_karyawan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
