-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2024 pada 22.19
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
-- Database: `sawmobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatifhp`
--

CREATE TABLE `alternatifhp` (
  `Id_mobil` int(11) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `kategori_kendaraan` varchar(20) NOT NULL,
  `Transmisi` varchar(20) NOT NULL,
  `Kisaran_harga_beli` varchar(20) NOT NULL,
  `Kapasitas_Penumpang` varchar(10) NOT NULL,
  `Tahun_Pembuatan` varchar(5) NOT NULL,
  `Warna_Mobil` varchar(10) NOT NULL,
  `Kondisi_Mesin` varchar(20) NOT NULL,
  `Bahan_Bakar` varchar(10) NOT NULL,
  `Ukuran_CC` varchar(10) NOT NULL,
  `Kapasitas_Bagasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `alternatifhp`
--

INSERT INTO `alternatifhp` (`Id_mobil`, `userid`, `Nama`, `kategori_kendaraan`, `Transmisi`, `Kisaran_harga_beli`, `Kapasitas_Penumpang`, `Tahun_Pembuatan`, `Warna_Mobil`, `Kondisi_Mesin`, `Bahan_Bakar`, `Ukuran_CC`, `Kapasitas_Bagasi`) VALUES
(0, 0, 'MG HS Magnify I-Smart Matic ', '', '', '', '', '', '', '', '', '', ''),
(1, 0, 'Avanza', 'MPV', 'Manual', '100', '7', '2012', 'Putih', 'Bagus', 'Solar', '1200', 'Sedang'),
(0, 0, 'khk', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `Kriteria` varchar(50) NOT NULL,
  `attribut` varchar(50) NOT NULL,
  `Bobot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `normal`
--

CREATE TABLE `normal` (
  `id_normal` int(11) NOT NULL,
  `Id_mobil` int(11) NOT NULL,
  `kategori_kendaraan2` double NOT NULL,
  `Transmisi2` double NOT NULL,
  `Kisaran_harga_beli2` double NOT NULL,
  `Kapasitas_Penumpang2` double NOT NULL,
  `Kapasitas_Bagasi2` double NOT NULL,
  `Tahun_Pembuatan2` double NOT NULL,
  `Warna_Mobil2` double NOT NULL,
  `Kondisi_Mesin2` double NOT NULL,
  `Bahan_Bakar2` double NOT NULL,
  `Ukuran_CC2` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_sub` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_sub` varchar(100) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uplad`
--

CREATE TABLE `uplad` (
  `id_file` int(11) NOT NULL,
  `Id_mobil` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `uplad`
--

INSERT INTO `uplad` (`id_file`, `Id_mobil`, `nama_file`) VALUES
(0, 0, 'daihatsu terios.png'),
(0, 0, 'daihatsu terios.png'),
(0, 0, 'daihatsu terios.png'),
(0, 0, 'daihatsu terios.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Telepon` varchar(14) NOT NULL,
  `user_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`userid`, `nama_depan`, `nama_belakang`, `email`, `password`, `Telepon`, `user_level`) VALUES
(0, 'MARANATHA SAMUEL', 'GULTOM', 'maranathasamuelg@gmail.com', '$2y$10$1NMzuxGLNU18hokwOW/ip.uE8TbVABSE8LWuqwFSzP20p5WR0hTvq', '083891458172', 1),
(0, 'MARANATHA SAMUEL', 'GULTOM', 'maranathasamuelg@gmail.com', '$2y$10$slpEqvIF0mNp.JHQmVMzCuvp.9nWJXyfDUPBU6j2sM4o3uYpKmE/a', '083891458172', 1),
(0, 'MARANATHA SAMUEL', 'GULTOM', 'maranathasamuelg@gmail.com', '$2y$10$oG1GCMZ06PENTVppeyEeyOYnjAbJfZIj8jqUMiQr5K/wFPH.qSk.S', '083891458172', 2),
(0, 'MARANATHA SAMUEL', 'GULTOM', 'maranathasamuel@gmail.com', '$2y$10$cpUm894dXdKz8oxzo2p6P.1YXlY6qb4RP8IHam60PEty80BrfQfhO', '083891458172', 2),
(0, 'MARANATHA SAMUEL', 'GULTOM', 'maranathasamuelg@gmail.com', '$2y$10$1ABu5xYowU4FMIoAnHYMIe7NduBwRhY9MgAT75x9PMQ9LtZ7ct6H2', '083891458172', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
