-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2024 pada 12.41
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_siswa`
--

CREATE TABLE `biodata_siswa` (
  `id_siswa` int(11) NOT NULL,
  `NISN` int(20) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `card_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biodata_siswa`
--

INSERT INTO `biodata_siswa` (`id_siswa`, `NISN`, `NAMA`, `card_id`) VALUES
(1, 1303220156, 'AHMAD ROHMAN NURROHIM', 123456789),
(2, 1303220113, 'AGUNG LAKSONO PUTRA', 987654321),
(3, 1303220028, 'FIKRI ALBAR AL-GHIFARI', 12345678),
(4, 1303223177, 'FADHIL RAKA  AULIA', 1234567891);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
