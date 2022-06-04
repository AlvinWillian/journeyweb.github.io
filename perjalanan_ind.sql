-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2022 pada 16.09
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perjalanan_ind`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `nik` int(30) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` enum('pria','wanita') DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`nik`, `nama_lengkap`, `tgl_lahir`, `jk`, `password`) VALUES
(321111, 'Alvin Willian', '2004-01-03', 'pria', 'a123'),
(321112, 'Baron Rizal', '2002-05-12', 'pria', 'b123'),
(321113, 'Cantika', '2004-09-06', 'wanita', 'c123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perjalanan`
--

CREATE TABLE `perjalanan` (
  `id` int(100) NOT NULL,
  `nik` int(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` varchar(20) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `suhu_tubuh` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perjalanan`
--

INSERT INTO `perjalanan` (`id`, `nik`, `tanggal`, `waktu`, `lokasi`, `suhu_tubuh`) VALUES
(91, 321111, '2022-01-20', '07:00', 'Bandung', '35'),
(92, 321111, '2022-02-22', '13:25', 'Soreang-Bandung', '27'),
(93, 321111, '2022-02-25', '08:35', 'Bekasi', '37'),
(94, 321111, '2022-03-26', '07:30', 'Bogor', '36'),
(95, 321111, '2022-02-27', '07:30', 'Cikarang', '35'),
(96, 321111, '2022-02-28', '17:26', 'Lampung Selatan', '35'),
(97, 321111, '2022-03-01', '06:30', 'Jakarta', '34'),
(98, 321111, '2022-03-02', '13:25', 'Bekasi', '36'),
(99, 321111, '2022-03-02', '15:00', 'Karawang', '37'),
(100, 321111, '2022-03-05', '07:00', 'Subang', '35'),
(101, 321111, '2022-03-06', '17:30', 'Karawang', '35'),
(102, 321111, '2022-03-07', '04:00', 'Jogjakarta', '27'),
(104, 321112, '2022-02-08', '07:00', 'Bekasi', '36'),
(105, 321112, '2022-02-13', '07:30', 'Cikarang', '36'),
(106, 321112, '2022-02-16', '06:30', 'Bogor', '27'),
(107, 321112, '2022-02-23', '08:35', 'Bandung', '34'),
(108, 321112, '2022-03-01', '07:00', 'Jakarta', '35'),
(109, 321112, '2022-03-04', '13:25', 'Karawang', '36'),
(110, 321112, '2022-03-07', '17:26', 'Bandung', '27'),
(111, 321113, '2022-03-07', '05:30', 'Bandung', '30'),
(112, 321113, '2022-01-17', '07:00', 'Bandung', '30'),
(113, 321113, '2022-01-20', '07:00', 'Karawang', '34'),
(114, 321113, '2022-01-28', '06:30', 'Bandung', '30'),
(115, 321113, '2022-02-02', '07:16', 'Jakarta', '35'),
(116, 321113, '2022-02-16', '13:25', 'Bogor', '35'),
(117, 321113, '2022-03-03', '08:35', 'Cikarang', '34'),
(118, 321113, '2022-03-07', '08:35', 'Subang', '34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perjalanan`
--
ALTER TABLE `perjalanan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD CONSTRAINT `perjalanan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pengguna` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
