-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2023 pada 06.06
-- Versi server: 10.4.21-MariaDB-log
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_batubolong`
--
CREATE DATABASE IF NOT EXISTS `db_batubolong` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_batubolong`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_histori`
--

CREATE TABLE `tb_histori` (
  `id_histori` int(11) NOT NULL,
  `Tipe` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `gambar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `no_tiket` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendapatan`
--

CREATE TABLE `tb_pendapatan` (
  `id_pendapatan` int(11) NOT NULL,
  `sumber` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `pendapatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendapatan`
--

INSERT INTO `tb_pendapatan` (`id_pendapatan`, `sumber`, `tanggal`, `waktu`, `pendapatan`) VALUES
(1, 'Top-Up', '2023-01-16', '12:54:28', '1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyewaan`
--

CREATE TABLE `tb_penyewaan` (
  `id_penyewaan` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_saldo`
--

CREATE TABLE `tb_saldo` (
  `id_saldo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `saldo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_saldo`
--

INSERT INTO `tb_saldo` (`id_saldo`, `id_user`, `username`, `saldo`) VALUES
(1, 7, 'testpengunjung', '5720000'),
(2, 8, 'nightshadow', '55000'),
(3, 9, 'gilang', '1000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stand`
--

CREATE TABLE `tb_stand` (
  `id_stand` int(11) NOT NULL,
  `nama_stand` varchar(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `tipe_stand` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_stand`
--

INSERT INTO `tb_stand` (`id_stand`, `nama_stand`, `nama_pemilik`, `tipe_stand`, `keterangan`, `gambar`, `username`, `password`) VALUES
(3, 'cobaDong2', 'coba', 'Penyewaan', 'cobaaaa', 'Promo.png', 'coba', 'c3ec0f7b054e729c5a716c8125839829'),
(4, 'coba yang ini', 'aasd', 'Penyewaan', 'adsad', 'OBerry_Jam1.png', 'coba yang ini', 'b28bfaf0c75475dbbd89e89db01fc826'),
(5, 'testnambah', 'cobadoang', 'Resto', 'hehhehe', 'Promo_Mercent.png', 'testnambah', '51fb409ebaf3c8ecec80194f98d74961'),
(6, 'testnambah', 'cobadoang', 'Resto', 'hehhehewwww', 'p1.png', 'testnambah', '51fb409ebaf3c8ecec80194f98d74961');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tiket`
--

CREATE TABLE `tb_tiket` (
  `id_tiket` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `tiket` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tiket`
--

INSERT INTO `tb_tiket` (`id_tiket`, `tanggal`, `waktu`, `tiket`, `status`) VALUES
(1, '2023-01-16', '01:09:49', 'test', 'Invalid'),
(2, '2023-01-16', '01:09:49', 'test', 'Invalid'),
(3, '2023-01-16', '01:09:50', 'test', 'Invalid'),
(4, '2023-01-16', '01:09:50', 'test', 'Invalid'),
(5, '2023-01-16', '01:09:51', 'test', 'Invalid'),
(6, '2023-01-16', '01:09:51', 'test', 'Invalid'),
(7, '2023-01-16', '01:09:52', 'test', 'Invalid'),
(8, '2023-01-16', '01:09:53', 'test', 'Invalid'),
(9, '2023-01-16', '01:09:54', 'test', 'Invalid'),
(10, '2023-01-16', '01:09:54', 'test', 'Invalid'),
(11, '2023-01-16', '01:09:56', 'test', 'Invalid'),
(12, '2023-01-16', '01:09:57', 'test', 'Invalid'),
(13, '2023-01-16', '01:10:10', 'test', 'Invalid'),
(14, '2023-01-16', '01:10:10', 'test', 'Invalid'),
(15, '2023-01-16', '01:10:10', 'test', 'Invalid'),
(16, '2023-01-16', '01:10:11', 'test', 'Invalid'),
(17, '2023-01-16', '01:10:14', 'test', 'Invalid'),
(18, '2023-01-16', '01:10:14', 'test', 'Invalid'),
(19, '2023-01-16', '01:11:08', 'test', 'Invalid'),
(20, '2023-01-16', '01:11:08', 'test', 'Invalid'),
(21, '2023-01-16', '01:11:08', 'test', 'Invalid'),
(22, '2023-01-16', '01:11:09', 'test', 'Invalid'),
(23, '2023-01-16', '01:11:12', 'test', 'Invalid'),
(24, '2023-01-16', '01:11:13', 'test', 'Invalid'),
(25, '2023-01-16', '01:12:17', 'test', 'Invalid'),
(26, '2023-01-16', '01:12:18', 'test', 'Invalid'),
(27, '2023-01-16', '01:12:42', 'test', 'Invalid'),
(28, '2023-01-16', '01:12:42', 'test', 'Invalid'),
(29, '2023-01-16', '01:13:57', 'test', 'Invalid'),
(30, '2023-01-16', '01:13:58', 'test', 'Invalid'),
(31, '2023-01-16', '01:14:58', 'test', 'Invalid'),
(32, '2023-01-16', '01:14:59', 'test', 'Invalid'),
(33, '2023-01-16', '01:15:12', 'test', 'Invalid'),
(34, '2023-01-16', '01:15:12', 'test', 'Invalid'),
(35, '2023-01-16', '01:15:13', 'test', 'Invalid'),
(36, '2023-01-16', '01:15:13', 'test', 'Invalid'),
(37, '2023-01-16', '01:17:18', 'test', 'Invalid'),
(38, '2023-01-16', '01:17:18', 'test', 'Invalid'),
(39, '2023-01-16', '01:17:27', 'test', 'Invalid'),
(40, '2023-01-16', '01:17:27', 'test', 'Invalid'),
(41, '2023-01-16', '01:17:28', 'test', 'Invalid'),
(42, '2023-01-16', '01:17:28', 'test', 'Invalid'),
(43, '2023-01-16', '01:17:28', 'test', 'Invalid'),
(44, '2023-01-16', '01:17:28', 'test', 'Invalid'),
(45, '2023-01-16', '01:22:46', 'test', 'Invalid'),
(46, '2023-01-16', '01:22:46', 'test', 'Invalid'),
(47, '2023-01-16', '01:26:13', 'test', 'Invalid'),
(48, '2023-01-16', '01:26:13', 'test', 'Invalid'),
(49, '2023-01-16', '01:27:24', 'test', 'Invalid'),
(50, '2023-01-16', '01:27:24', 'test', 'Invalid'),
(51, '2023-01-16', '01:27:28', 'test', 'Invalid'),
(52, '2023-01-16', '01:27:28', 'test', 'Invalid'),
(53, '2023-01-16', '01:27:28', 'test', 'Invalid'),
(54, '2023-01-16', '01:27:28', 'test', 'Invalid'),
(55, '2023-01-16', '01:27:35', 'test', 'Invalid'),
(56, '2023-01-16', '01:27:35', 'test', 'Invalid'),
(57, '2023-01-16', '01:27:35', 'test', 'Invalid'),
(58, '2023-01-16', '01:27:35', 'test', 'Invalid'),
(59, '2023-01-16', '01:27:35', 'test', 'Invalid'),
(60, '2023-01-16', '01:27:35', 'test', 'Invalid'),
(61, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(62, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(63, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(64, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(65, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(66, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(67, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(68, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(69, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(70, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(71, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(72, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(73, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(74, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(75, '2023-01-16', '01:28:54', 'test', 'Invalid'),
(76, '2023-01-16', '01:28:54', 'test', 'Invalid'),
(77, '2023-01-16', '01:28:54', 'test', 'Invalid'),
(78, '2023-01-16', '01:28:54', 'test', 'Invalid'),
(79, '2023-01-16', '01:28:54', 'test', 'Invalid'),
(80, '2023-01-16', '01:28:54', 'test', 'Invalid'),
(81, '2023-01-16', '01:31:45', 'test', 'Invalid'),
(82, '2023-01-16', '01:31:45', 'test', 'Invalid'),
(83, '2023-01-16', '01:31:54', 'test', 'Invalid'),
(84, '2023-01-16', '01:31:54', 'test', 'Invalid'),
(85, '2023-01-16', '01:32:33', 'test', 'Invalid'),
(86, '2023-01-16', '01:32:33', 'test', 'Invalid'),
(87, '2023-01-16', '01:34:02', 'test', 'Invalid'),
(88, '2023-01-16', '01:34:02', 'test', 'Invalid'),
(89, '2023-01-16', '01:34:41', 'test', 'Invalid'),
(90, '2023-01-16', '01:34:41', 'test', 'Invalid'),
(91, '2023-01-16', '01:35:51', 'test', 'Invalid'),
(92, '2023-01-16', '01:35:51', 'test', 'Invalid'),
(93, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(94, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(95, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(96, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(97, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(98, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(99, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(100, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(101, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(102, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(103, '2023-01-16', '01:39:31', 'test', 'Invalid'),
(104, '2023-01-16', '01:39:31', 'test', 'Invalid'),
(105, '2023-01-16', '01:39:44', 'test', 'Invalid'),
(106, '2023-01-16', '01:39:44', 'test', 'Invalid'),
(107, '2023-01-16', '01:39:44', 'test', 'Invalid'),
(108, '2023-01-16', '01:39:44', 'test', 'Invalid'),
(109, '2023-01-16', '01:40:01', 'test', 'Invalid'),
(110, '2023-01-16', '01:40:01', 'test', 'Invalid'),
(111, '2023-01-16', '01:40:01', 'test', 'Invalid'),
(112, '2023-01-16', '01:40:01', 'test', 'Invalid'),
(113, '2023-01-16', '01:44:55', 'test', 'Invalid'),
(114, '2023-01-16', '01:44:55', 'test', 'Invalid'),
(115, '2023-01-16', '01:46:09', 'test', 'Invalid'),
(116, '2023-01-16', '01:46:09', 'test', 'Invalid'),
(117, '2023-01-16', '01:55:32', 'test', 'Invalid'),
(118, '2023-01-16', '01:55:32', 'test', 'Invalid'),
(119, '2023-01-16', '01:55:35', 'test', 'Invalid'),
(120, '2023-01-16', '01:55:35', 'test', 'Invalid'),
(121, '2023-01-16', '01:58:15', 'test', 'Invalid'),
(122, '2023-01-16', '01:58:15', 'test', 'Invalid'),
(123, '2023-01-16', '01:58:15', 'test', 'Invalid'),
(124, '2023-01-16', '01:58:15', 'test', 'Invalid'),
(125, '2023-01-16', '01:58:36', 'test', 'Invalid'),
(126, '2023-01-16', '01:58:36', 'test', 'Invalid'),
(127, '2023-01-16', '01:58:43', 'test', 'Invalid'),
(128, '2023-01-16', '01:58:43', 'test', 'Invalid'),
(129, '2023-01-16', '01:58:43', 'test', 'Invalid'),
(130, '2023-01-16', '01:58:43', 'test', 'Invalid'),
(131, '2023-01-16', '01:58:43', 'test', 'Invalid'),
(132, '2023-01-16', '01:58:43', 'test', 'Invalid'),
(133, '2023-01-16', '01:58:48', 'test', 'Invalid'),
(134, '2023-01-16', '01:58:48', 'test', 'Invalid'),
(135, '2023-01-16', '01:58:51', 'test', 'Invalid'),
(136, '2023-01-16', '01:58:51', 'test', 'Invalid'),
(137, '2023-01-16', '02:00:30', 'test', 'Invalid'),
(138, '2023-01-16', '02:00:30', 'test', 'Invalid'),
(139, '2023-01-16', '02:00:32', 'test', 'Invalid'),
(140, '2023-01-16', '02:00:32', 'test', 'Invalid'),
(141, '2023-01-16', '02:01:27', 'test', 'Invalid'),
(142, '2023-01-16', '02:01:27', 'test', 'Invalid'),
(143, '2023-01-16', '02:02:43', 'test', 'Invalid'),
(144, '2023-01-16', '02:02:43', 'test', 'Invalid'),
(145, '2023-01-16', '02:02:46', 'test', 'Invalid'),
(146, '2023-01-16', '02:02:46', 'test', 'Invalid'),
(147, '2023-01-16', '02:03:16', 'test', 'Invalid'),
(148, '2023-01-16', '02:03:16', 'test', 'Invalid'),
(149, '2023-01-16', '02:03:20', 'test', 'Invalid'),
(150, '2023-01-16', '02:03:20', 'test', 'Invalid'),
(151, '2023-01-16', '02:03:37', 'test', 'Invalid'),
(152, '2023-01-16', '02:04:15', 'test', 'Invalid'),
(153, '2023-01-16', '02:04:18', 'test', 'Invalid'),
(154, '2023-01-16', '02:04:20', 'test', 'Invalid'),
(155, '2023-01-16', '02:05:45', 'test', 'Invalid'),
(156, '2023-01-16', '02:06:14', 'test', 'Invalid'),
(157, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(158, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(159, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(160, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(161, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(162, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(163, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(164, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(165, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(166, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(167, '2023-01-16', '02:07:36', 'test', 'Invalid'),
(168, '2023-01-16', '02:10:57', 'test', 'Invalid'),
(169, '2023-01-16', '02:12:25', 'test', 'Invalid'),
(170, '2023-01-16', '02:12:25', 'test', 'Invalid'),
(171, '2023-01-16', '02:12:25', 'test', 'Invalid'),
(172, '2023-01-16', '02:12:25', 'test', 'Invalid'),
(173, '2023-01-16', '02:12:25', 'test', 'Invalid'),
(174, '2023-01-16', '02:12:25', 'test', 'Invalid'),
(175, '2023-01-16', '02:12:25', 'test', 'Invalid'),
(176, '2023-01-16', '02:12:25', 'test', 'Invalid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `level`, `type`) VALUES
(1, 'admin', 'jago', 'adminjago123@gmail.com', 'admin', 'b18e948191620cea7803d0733584eee9', 1, ''),
(3, 'Admin', 'Ganteng', 'adminganteng123@gmail.com', 'adminkeren', 'b18e948191620cea7803d0733584eee9', 1, ''),
(4, 'Admin', 'Cantik', 'admincantik123@gmail.com', 'admincans', 'b18e948191620cea7803d0733584eee9', 1, ''),
(5, 'Surving', 'Mania', 'survingmania@gmail.com', 'survingmania', 'ab97df09055c55e6e57aac6d8f2c1360', 2, 'Penyewaan'),
(6, 'Resto', 'Vegan', 'restoveganenak@gmail.com', 'vegansehat', '63f0c927d2d314f8f2cbdb1f41f62153', 2, 'Resto'),
(7, 'pengunjung', 'test', 'pengunjungcoba@gmail.com', 'testpengunjung', '098f6bcd4621d373cade4e832627b4f6', 3, ''),
(8, 'Andre', 'Prasetya', 'andreseptaprasetya06@gmail.com', 'nightshadow', '7a7b46be978bf4b68bf74f39978e96ab', 3, ''),
(9, 'Gilang', 'wkwkwk', 'gilang@gmail.com', 'gilang', 'c37fddfb7b3f538674c6e9a77e7bf486', 3, ''),
(10, 'testnambah', '', '', 'testnambah', '51fb409ebaf3c8ecec80194f98d74961', 2, 'Resto');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `tb_histori`
--
ALTER TABLE `tb_histori`
  ADD PRIMARY KEY (`id_histori`);

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  ADD PRIMARY KEY (`id_pendapatan`);

--
-- Indeks untuk tabel `tb_penyewaan`
--
ALTER TABLE `tb_penyewaan`
  ADD PRIMARY KEY (`id_penyewaan`);

--
-- Indeks untuk tabel `tb_saldo`
--
ALTER TABLE `tb_saldo`
  ADD PRIMARY KEY (`id_saldo`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_stand`
--
ALTER TABLE `tb_stand`
  ADD PRIMARY KEY (`id_stand`);

--
-- Indeks untuk tabel `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_histori`
--
ALTER TABLE `tb_histori`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  MODIFY `id_pendapatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_penyewaan`
--
ALTER TABLE `tb_penyewaan`
  MODIFY `id_penyewaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_saldo`
--
ALTER TABLE `tb_saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_stand`
--
ALTER TABLE `tb_stand`
  MODIFY `id_stand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_tiket`
--
ALTER TABLE `tb_tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD CONSTRAINT `tb_menu_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_saldo`
--
ALTER TABLE `tb_saldo`
  ADD CONSTRAINT `tb_saldo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
