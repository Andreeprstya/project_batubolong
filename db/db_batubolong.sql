-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 03:55 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

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
-- Table structure for table `tb_barang`
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
-- Table structure for table `tb_buktibayar`
--

CREATE TABLE `tb_buktibayar` (
  `id_bukti` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buktibayar`
--

INSERT INTO `tb_buktibayar` (`id_bukti`, `id_user`, `gambar`, `status`) VALUES
(1, 7, 'OBerry_Jam.png', ''),
(2, 7, 'OBerry_Jam2.jpg', 'Invalid');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailpesanan`
--

CREATE TABLE `tb_detailpesanan` (
  `id_detail` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detailpesanan`
--

INSERT INTO `tb_detailpesanan` (`id_detail`, `id_pemesanan`, `menu`, `jumlah`, `harga`) VALUES
(1, 2, 'Nasi Goreng dfag', 3, 12000),
(2, 2, 'Ayam Bakar', 1, 15000),
(3, 3, 'Nasi Goreng dfag', 3, 12000),
(4, 3, 'Ayam Bakar', 1, 15000),
(5, 4, 'Nasi Goreng dfag', 3, 12000),
(6, 4, 'Ayam Bakar', 1, 15000),
(7, 5, 'Nasi Goreng dfag', 3, 12000),
(8, 5, 'Ayam Bakar', 1, 15000),
(9, 6, 'Nasi Goreng dfag', 3, 12000),
(10, 6, 'Ayam Bakar', 1, 15000),
(11, 7, 'Nasi Goreng dfag', 2, 12000),
(12, 8, 'Nasi Goreng dfag', 1, 12000),
(13, 9, 'Nasi Goreng dfag', 1, 12000),
(14, 10, 'Nasi Goreng dfag', 1, 12000),
(15, 11, 'Nasi Goreng dfag', 1, 12000),
(16, 12, 'Nasi Goreng dfag', 1, 12000),
(17, 13, 'Nasi Goreng dfag', 1, 12000),
(18, 14, 'Nasi Goreng dfag', 1, 12000),
(19, 15, 'Nasi Goreng dfag', 1, 12000),
(20, 16, 'Nasi Goreng dfag', 1, 12000),
(21, 17, 'Nasi Goreng dfag', 1, 12000),
(22, 18, 'Nasi Goreng dfag', 1, 12000),
(23, 19, 'Nasi Goreng dfag', 1, 12000),
(24, 20, 'Nasi Goreng dfag', 1, 12000),
(25, 21, 'Nasi Goreng dfag', 1, 12000),
(26, 22, 'Nasi Goreng dfag', 1, 12000),
(27, 23, 'Nasi Goreng dfag', 1, 12000),
(28, 24, 'Nasi Goreng dfag', 1, 12000),
(29, 25, 'Nasi Goreng dfag', 1, 12000),
(30, 26, 'Nasi Goreng dfag', 1, 12000),
(31, 27, 'Nasi Goreng dfag', 1, 12000),
(32, 28, 'Nasi Goreng dfag', 1, 12000),
(33, 29, 'Nasi Goreng dfag', 1, 12000),
(34, 30, 'Nasi Goreng dfag', 1, 12000),
(35, 31, 'Nasi Goreng dfag', 1, 12000),
(36, 32, 'Nasi Goreng dfag', 1, 12000),
(37, 33, 'Nasi Goreng dfag', 1, 12000),
(38, 34, 'Nasi Goreng dfag', 1, 12000),
(39, 35, 'Nasi Goreng dfag', 1, 12000),
(40, 36, 'Nasi Goreng dfag', 1, 12000),
(41, 37, 'Nasi Goreng dfag', 1, 12000),
(42, 38, 'Nasi Goreng dfag', 1, 12000),
(43, 39, 'Nasi Goreng dfag', 1, 12000),
(44, 40, 'Nasi Goreng dfag', 1, 12000),
(45, 41, 'Nasi Goreng dfag', 1, 12000),
(46, 42, 'Nasi Goreng dfag', 2, 12000),
(47, 43, 'Nasi Goreng dfag', 2, 12000),
(48, 44, 'Nasi Goreng dfag', 2, 12000),
(49, 45, 'Nasi Goreng dfag', 2, 12000),
(50, 47, 'Nasi Goreng dfag', 2, 12000),
(51, 48, 'Nasi Goreng dfag', 2, 12000),
(52, 49, 'Nasi Goreng dfag', 2, 12000),
(53, 50, 'Nasi Goreng dfag', 1, 12000),
(54, 51, 'Nasi Goreng dfag', 2, 12000),
(55, 52, 'Nasi Goreng dfag', 1, 12000),
(56, 53, 'Nasi Goreng dfag', 1, 12000),
(57, 54, 'Nasi Goreng dfag', 1, 12000),
(58, 55, 'Nasi Goreng dfag', 1, 12000),
(59, 56, 'Nasi Goreng dfag', 1, 12000),
(60, 57, 'Nasi Goreng dfag', 1, 12000),
(61, 58, 'Nasi Goreng dfag', 1, 12000),
(62, 59, 'Nasi Goreng dfag', 1, 12000),
(63, 60, 'Nasi Goreng dfag', 1, 12000),
(64, 61, 'Nasi Goreng dfag', 1, 12000),
(65, 62, 'Nasi Goreng dfag', 1, 12000),
(66, 63, 'Nasi Goreng dfag', 1, 12000),
(67, 64, 'Nasi Goreng dfag', 1, 12000),
(68, 65, 'Nasi Goreng dfag', 1, 12000),
(69, 66, 'Nasi Goreng dfag', 1, 12000),
(70, 67, 'Nasi Goreng dfag', 1, 12000),
(71, 69, 'Nasi Goreng dfag', 1, 12000),
(72, 70, 'Nasi Goreng dfag', 1, 12000),
(73, 71, 'Nasi Goreng dfag', 1, 12000),
(74, 72, 'Nasi Goreng dfag', 1, 12000),
(75, 73, 'Nasi Goreng dfag', 1, 12000),
(76, 74, 'Nasi Goreng dfag', 1, 12000),
(77, 75, 'Nasi Goreng dfag', 1, 12000),
(78, 77, 'Nasi Goreng dfag', 1, 12000),
(79, 78, 'Nasi Goreng dfag', 1, 12000),
(80, 79, 'Nasi Goreng dfag', 1, 12000),
(81, 80, 'Nasi Goreng dfag', 1, 12000),
(82, 81, 'Nasi Goreng dfag', 1, 12000),
(83, 82, 'Nasi Goreng dfag', 1, 12000),
(84, 83, 'Nasi Goreng dfag', 2, 12000),
(85, 84, 'Mei Goreng', 2, 12500),
(86, 84, 'Nasi Goreng dfag', 1, 12000),
(87, 86, 'Nasi Goreng dfag', 1, 12000),
(88, 86, 'Mei Goreng', 1, 12500),
(89, 87, 'Nasi Goreng dfag', 1, 12000),
(90, 87, 'Mei Goreng', 1, 12500),
(91, 88, 'Mei Goreng', 1, 12500),
(92, 89, 'Mei Goreng', 1, 12500),
(93, 90, 'Nasi Goreng dfag', 1, 12000),
(94, 90, 'Mei Goreng', 1, 12500),
(95, 91, 'Nasi Goreng dfag', 1, 12000),
(96, 91, 'Mei Goreng', 1, 12500),
(97, 92, 'Nasi Goreng dfag', 1, 12000),
(98, 92, 'Mei Goreng', 1, 12500),
(99, 93, 'Nasi Goreng dfag', 1, 12000),
(100, 93, 'Mei Goreng', 1, 12500),
(101, 94, 'Nasi Goreng dfag', 1, 12000),
(102, 94, 'Mei Goreng', 1, 12500),
(103, 95, 'Nasi Goreng dfag', 1, 12000),
(104, 95, 'Mei Goreng', 1, 12500),
(105, 96, 'Nasi Goreng dfag', 1, 12000),
(106, 96, 'Mei Goreng', 1, 12500),
(107, 97, 'Nasi Goreng dfag', 1, 12000),
(108, 97, 'Mei Goreng', 1, 12500),
(109, 98, 'Nasi Goreng dfag', 1, 12000),
(110, 98, 'Mei Goreng', 1, 12500),
(111, 99, 'Nasi Goreng dfag', 1, 12000),
(112, 99, 'Mei Goreng', 1, 12500),
(113, 100, 'Nasi Goreng dfag', 1, 12000),
(114, 100, 'Mei Goreng', 1, 12500),
(115, 101, 'Nasi Goreng dfag', 1, 12000),
(116, 101, 'Mei Goreng', 1, 12500),
(117, 102, 'Nasi Goreng dfag', 1, 12000),
(118, 102, 'Mei Goreng', 1, 12500),
(119, 103, 'Nasi Goreng dfag', 2, 12000),
(120, 103, 'Mei Goreng', 1, 12500);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
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
-- Table structure for table `tb_histori`
--

CREATE TABLE `tb_histori` (
  `id_histori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `Tipe` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_histori`
--

INSERT INTO `tb_histori` (`id_histori`, `id_user`, `Tipe`, `tanggal`, `waktu`, `jumlah`) VALUES
(1, 7, 'Tunai', '2023-01-16', '16:54:20', 10000),
(2, 7, 'Tunai', '2023-01-17', '23:46:39', 1000000),
(3, 7, 'Non-Tunai', '2023-01-18', '10:42:16', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `id_stand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `harga`, `kategori`, `gambar`, `id_stand`) VALUES
(3, 'Nasi Goreng dfag', 12000, 'Makanan', 'WhatsApp_Image_2023-01-08_at_22_36_15.jpeg', 6),
(5, 'Mei Goreng', 19500, 'Makanan', 'OBerry_Jam1.jpg', 7),
(6, 'Mei Goreng', 12500, 'Makanan', 'p.png', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
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
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `waktu` time NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `id_stand` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `waktu`, `id_pengunjung`, `id_stand`, `tanggal`, `jumlah`, `total`, `status`) VALUES
(1, '17:19:14', 7, 0, '2023-01-17', 4, 51, 'Selesai'),
(2, '17:23:59', 7, 0, '2023-01-17', 4, 51, 'Selesai'),
(3, '17:24:14', 7, 0, '2023-01-17', 4, 51, 'Selesai'),
(4, '17:24:59', 7, 0, '2023-01-17', 4, 51, 'Selesai'),
(5, '17:25:10', 7, 0, '2023-01-17', 4, 51, 'Selesai'),
(6, '17:25:33', 7, 0, '2023-01-17', 4, 51, 'Selesai'),
(7, '17:35:11', 7, 0, '2023-01-17', 2, 24, 'Selesai'),
(8, '17:36:28', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(9, '17:36:45', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(10, '17:38:46', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(11, '17:40:56', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(12, '17:41:07', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(13, '17:41:23', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(14, '18:37:40', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(15, '18:38:01', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(16, '18:44:56', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(17, '18:45:51', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(18, '18:47:43', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(19, '18:47:59', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(20, '18:48:09', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(21, '18:48:47', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(22, '18:49:39', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(23, '18:50:02', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(24, '18:50:11', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(25, '18:51:26', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(26, '18:52:18', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(27, '18:53:33', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(28, '18:54:09', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(29, '18:54:28', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(30, '18:55:15', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(31, '18:56:26', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(32, '19:29:50', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(33, '19:30:55', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(34, '19:31:05', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(35, '19:33:53', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(36, '19:35:22', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(37, '19:41:09', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(38, '19:41:24', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(39, '19:43:04', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(40, '19:45:35', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(41, '19:45:51', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(42, '19:46:06', 7, 0, '2023-01-17', 2, 24, 'Selesai'),
(43, '19:47:36', 7, 0, '2023-01-17', 2, 24, 'Selesai'),
(44, '19:49:21', 7, 0, '2023-01-17', 2, 24, 'Selesai'),
(45, '19:51:58', 7, 0, '2023-01-17', 2, 24, 'Selesai'),
(46, '19:52:15', 7, 0, '2023-01-17', 2, 24, 'Selesai'),
(47, '19:52:40', 7, 0, '2023-01-17', 2, 24, 'Selesai'),
(48, '19:53:12', 7, 0, '2023-01-17', 2, 24, 'Selesai'),
(49, '19:53:37', 7, 0, '2023-01-17', 2, 24, 'Selesai'),
(50, '19:54:04', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(51, '19:54:48', 7, 0, '2023-01-17', 2, 24, 'Selesai'),
(52, '19:56:37', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(53, '19:57:33', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(54, '19:57:42', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(55, '20:00:21', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(56, '20:00:53', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(57, '20:01:27', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(58, '20:03:50', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(59, '20:04:12', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(60, '20:04:33', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(61, '20:05:15', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(62, '20:05:55', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(63, '20:06:45', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(64, '20:08:12', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(65, '20:08:43', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(66, '20:09:12', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(67, '20:09:34', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(68, '20:09:49', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(69, '20:10:01', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(70, '20:10:41', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(71, '20:11:50', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(72, '20:12:05', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(73, '20:12:20', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(74, '20:12:31', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(75, '20:12:50', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(76, '20:12:59', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(77, '20:13:26', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(78, '20:13:45', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(79, '20:14:21', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(80, '20:15:29', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(81, '20:15:43', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(82, '20:18:18', 7, 0, '2023-01-17', 1, 12, 'Selesai'),
(83, '00:47:18', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(84, '00:50:14', 7, 6, '2023-01-18', 3, 37, 'Selesai'),
(85, '00:51:42', 7, 6, '2023-01-18', 3, 37, 'Selesai'),
(86, '00:51:53', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(87, '00:52:58', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(88, '00:53:41', 7, 6, '2023-01-18', 1, 12, 'Selesai'),
(89, '00:54:57', 7, 6, '2023-01-18', 1, 12, 'Selesai'),
(90, '00:57:58', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(91, '00:59:07', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(92, '01:00:52', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(93, '01:01:19', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(94, '01:01:53', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(95, '01:03:19', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(96, '01:06:54', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(97, '01:07:44', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(98, '01:08:09', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(99, '01:08:47', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(100, '01:09:09', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(101, '01:09:40', 7, 6, '2023-01-18', 2, 24, 'Selesai'),
(102, '01:12:14', 7, 6, '2023-01-18', 2, 25, 'Selesai'),
(103, '01:15:21', 7, 6, '2023-01-18', 3, 36500, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendapatan`
--

CREATE TABLE `tb_pendapatan` (
  `id_pendapatan` int(11) NOT NULL,
  `sumber` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `pendapatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendapatan`
--

INSERT INTO `tb_pendapatan` (`id_pendapatan`, `sumber`, `tanggal`, `waktu`, `pendapatan`) VALUES
(1, 'Top-Up', '2023-01-16', '12:54:28', '1000'),
(2, 'Top-Up', '2023-01-16', '16:54:20', '1000'),
(3, 'Top-Up', '2023-01-17', '23:46:39', '1000'),
(4, 'Tiket', '2023-01-18', '09:32:50', '10000'),
(5, 'Tiket', '2023-01-18', '09:32:50', '10000'),
(6, 'Top-Up', '2023-01-18', '10:41:13', '1000'),
(7, 'Top-Up', '2023-01-18', '10:41:34', '1000'),
(8, 'Top-Up', '2023-01-18', '10:42:16', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyewaan`
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
-- Table structure for table `tb_saldo`
--

CREATE TABLE `tb_saldo` (
  `id_saldo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `saldo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_saldo`
--

INSERT INTO `tb_saldo` (`id_saldo`, `id_user`, `username`, `saldo`) VALUES
(1, 7, 'testpengunjung', '5185000'),
(2, 8, 'nightshadow', '55000'),
(3, 9, 'gilang', '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stand`
--

CREATE TABLE `tb_stand` (
  `id_stand` int(11) NOT NULL,
  `nama_stand` varchar(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `tipe_stand` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stand`
--

INSERT INTO `tb_stand` (`id_stand`, `nama_stand`, `nama_pemilik`, `tipe_stand`, `keterangan`, `gambar`) VALUES
(3, 'O\'tella Chocolate', 'Andre', 'Resto', 'Minuman Coklat', 'Promo2.png'),
(4, 'Hinata Clothes', 'Surya Risky', 'Resto', 'Toko Pakaian', 'standbaju2.jpg'),
(5, 'Surfing Mania', 'Julkifli', 'Resto', 'Alat Selancar', 'surping3.jpg'),
(6, 'Omelette Waw', 'Yandi', 'Resto', 'Warung telur', 'omelete2.jpg'),
(7, 'coba', 'cobaaa', 'Resto', 'Tidak Ada', '1_(1)1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tiket`
--

CREATE TABLE `tb_tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `tiket` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tiket`
--

INSERT INTO `tb_tiket` (`id_tiket`, `id_user`, `tanggal`, `waktu`, `tiket`, `status`) VALUES
(1, 0, '2023-01-16', '01:09:49', 'test', 'Invalid'),
(2, 0, '2023-01-16', '01:09:49', 'test', 'Invalid'),
(3, 0, '2023-01-16', '01:09:50', 'test', 'Invalid'),
(4, 0, '2023-01-16', '01:09:50', 'test', 'Invalid'),
(5, 0, '2023-01-16', '01:09:51', 'test', 'Invalid'),
(6, 0, '2023-01-16', '01:09:51', 'test', 'Invalid'),
(7, 0, '2023-01-16', '01:09:52', 'test', 'Invalid'),
(8, 0, '2023-01-16', '01:09:53', 'test', 'Invalid'),
(9, 0, '2023-01-16', '01:09:54', 'test', 'Invalid'),
(10, 0, '2023-01-16', '01:09:54', 'test', 'Invalid'),
(11, 0, '2023-01-16', '01:09:56', 'test', 'Invalid'),
(12, 0, '2023-01-16', '01:09:57', 'test', 'Invalid'),
(13, 0, '2023-01-16', '01:10:10', 'test', 'Invalid'),
(14, 0, '2023-01-16', '01:10:10', 'test', 'Invalid'),
(15, 0, '2023-01-16', '01:10:10', 'test', 'Invalid'),
(16, 0, '2023-01-16', '01:10:11', 'test', 'Invalid'),
(17, 0, '2023-01-16', '01:10:14', 'test', 'Invalid'),
(18, 0, '2023-01-16', '01:10:14', 'test', 'Invalid'),
(19, 0, '2023-01-16', '01:11:08', 'test', 'Invalid'),
(20, 0, '2023-01-16', '01:11:08', 'test', 'Invalid'),
(21, 0, '2023-01-16', '01:11:08', 'test', 'Invalid'),
(22, 0, '2023-01-16', '01:11:09', 'test', 'Invalid'),
(23, 0, '2023-01-16', '01:11:12', 'test', 'Invalid'),
(24, 0, '2023-01-16', '01:11:13', 'test', 'Invalid'),
(25, 0, '2023-01-16', '01:12:17', 'test', 'Invalid'),
(26, 0, '2023-01-16', '01:12:18', 'test', 'Invalid'),
(27, 0, '2023-01-16', '01:12:42', 'test', 'Invalid'),
(28, 0, '2023-01-16', '01:12:42', 'test', 'Invalid'),
(29, 0, '2023-01-16', '01:13:57', 'test', 'Invalid'),
(30, 0, '2023-01-16', '01:13:58', 'test', 'Invalid'),
(31, 0, '2023-01-16', '01:14:58', 'test', 'Invalid'),
(32, 0, '2023-01-16', '01:14:59', 'test', 'Invalid'),
(33, 0, '2023-01-16', '01:15:12', 'test', 'Invalid'),
(34, 0, '2023-01-16', '01:15:12', 'test', 'Invalid'),
(35, 0, '2023-01-16', '01:15:13', 'test', 'Invalid'),
(36, 0, '2023-01-16', '01:15:13', 'test', 'Invalid'),
(37, 0, '2023-01-16', '01:17:18', 'test', 'Invalid'),
(38, 0, '2023-01-16', '01:17:18', 'test', 'Invalid'),
(39, 0, '2023-01-16', '01:17:27', 'test', 'Invalid'),
(40, 0, '2023-01-16', '01:17:27', 'test', 'Invalid'),
(41, 0, '2023-01-16', '01:17:28', 'test', 'Invalid'),
(42, 0, '2023-01-16', '01:17:28', 'test', 'Invalid'),
(43, 0, '2023-01-16', '01:17:28', 'test', 'Invalid'),
(44, 0, '2023-01-16', '01:17:28', 'test', 'Invalid'),
(45, 0, '2023-01-16', '01:22:46', 'test', 'Invalid'),
(46, 0, '2023-01-16', '01:22:46', 'test', 'Invalid'),
(47, 0, '2023-01-16', '01:26:13', 'test', 'Invalid'),
(48, 0, '2023-01-16', '01:26:13', 'test', 'Invalid'),
(49, 0, '2023-01-16', '01:27:24', 'test', 'Invalid'),
(50, 0, '2023-01-16', '01:27:24', 'test', 'Invalid'),
(51, 0, '2023-01-16', '01:27:28', 'test', 'Invalid'),
(52, 0, '2023-01-16', '01:27:28', 'test', 'Invalid'),
(53, 0, '2023-01-16', '01:27:28', 'test', 'Invalid'),
(54, 0, '2023-01-16', '01:27:28', 'test', 'Invalid'),
(55, 0, '2023-01-16', '01:27:35', 'test', 'Invalid'),
(56, 0, '2023-01-16', '01:27:35', 'test', 'Invalid'),
(57, 0, '2023-01-16', '01:27:35', 'test', 'Invalid'),
(58, 0, '2023-01-16', '01:27:35', 'test', 'Invalid'),
(59, 0, '2023-01-16', '01:27:35', 'test', 'Invalid'),
(60, 0, '2023-01-16', '01:27:35', 'test', 'Invalid'),
(61, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(62, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(63, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(64, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(65, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(66, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(67, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(68, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(69, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(70, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(71, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(72, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(73, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(74, 0, '2023-01-16', '01:28:07', 'test', 'Invalid'),
(75, 0, '2023-01-16', '01:28:54', 'test', 'Invalid'),
(76, 0, '2023-01-16', '01:28:54', 'test', 'Invalid'),
(77, 0, '2023-01-16', '01:28:54', 'test', 'Invalid'),
(78, 0, '2023-01-16', '01:28:54', 'test', 'Invalid'),
(79, 0, '2023-01-16', '01:28:54', 'test', 'Invalid'),
(80, 0, '2023-01-16', '01:28:54', 'test', 'Invalid'),
(81, 0, '2023-01-16', '01:31:45', 'test', 'Invalid'),
(82, 0, '2023-01-16', '01:31:45', 'test', 'Invalid'),
(83, 0, '2023-01-16', '01:31:54', 'test', 'Invalid'),
(84, 0, '2023-01-16', '01:31:54', 'test', 'Invalid'),
(85, 0, '2023-01-16', '01:32:33', 'test', 'Invalid'),
(86, 0, '2023-01-16', '01:32:33', 'test', 'Invalid'),
(87, 0, '2023-01-16', '01:34:02', 'test', 'Invalid'),
(88, 0, '2023-01-16', '01:34:02', 'test', 'Invalid'),
(89, 0, '2023-01-16', '01:34:41', 'test', 'Invalid'),
(90, 0, '2023-01-16', '01:34:41', 'test', 'Invalid'),
(91, 0, '2023-01-16', '01:35:51', 'test', 'Invalid'),
(92, 0, '2023-01-16', '01:35:51', 'test', 'Invalid'),
(93, 0, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(94, 0, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(95, 0, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(96, 0, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(97, 0, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(98, 0, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(99, 0, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(100, 0, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(101, 0, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(102, 0, '2023-01-16', '01:36:17', 'test', 'Invalid'),
(103, 0, '2023-01-16', '01:39:31', 'test', 'Invalid'),
(104, 0, '2023-01-16', '01:39:31', 'test', 'Invalid'),
(105, 0, '2023-01-16', '01:39:44', 'test', 'Invalid'),
(106, 0, '2023-01-16', '01:39:44', 'test', 'Invalid'),
(107, 0, '2023-01-16', '01:39:44', 'test', 'Invalid'),
(108, 0, '2023-01-16', '01:39:44', 'test', 'Invalid'),
(109, 0, '2023-01-16', '01:40:01', 'test', 'Invalid'),
(110, 0, '2023-01-16', '01:40:01', 'test', 'Invalid'),
(111, 0, '2023-01-16', '01:40:01', 'test', 'Invalid'),
(112, 0, '2023-01-16', '01:40:01', 'test', 'Invalid'),
(113, 0, '2023-01-16', '01:44:55', 'test', 'Invalid'),
(114, 0, '2023-01-16', '01:44:55', 'test', 'Invalid'),
(115, 0, '2023-01-16', '01:46:09', 'test', 'Invalid'),
(116, 0, '2023-01-16', '01:46:09', 'test', 'Invalid'),
(117, 0, '2023-01-16', '01:55:32', 'test', 'Invalid'),
(118, 0, '2023-01-16', '01:55:32', 'test', 'Invalid'),
(119, 0, '2023-01-16', '01:55:35', 'test', 'Invalid'),
(120, 0, '2023-01-16', '01:55:35', 'test', 'Invalid'),
(121, 0, '2023-01-16', '01:58:15', 'test', 'Invalid'),
(122, 0, '2023-01-16', '01:58:15', 'test', 'Invalid'),
(123, 0, '2023-01-16', '01:58:15', 'test', 'Invalid'),
(124, 0, '2023-01-16', '01:58:15', 'test', 'Invalid'),
(125, 0, '2023-01-16', '01:58:36', 'test', 'Invalid'),
(126, 0, '2023-01-16', '01:58:36', 'test', 'Invalid'),
(127, 0, '2023-01-16', '01:58:43', 'test', 'Invalid'),
(128, 0, '2023-01-16', '01:58:43', 'test', 'Invalid'),
(129, 0, '2023-01-16', '01:58:43', 'test', 'Invalid'),
(130, 0, '2023-01-16', '01:58:43', 'test', 'Invalid'),
(131, 0, '2023-01-16', '01:58:43', 'test', 'Invalid'),
(132, 0, '2023-01-16', '01:58:43', 'test', 'Invalid'),
(133, 0, '2023-01-16', '01:58:48', 'test', 'Invalid'),
(134, 0, '2023-01-16', '01:58:48', 'test', 'Invalid'),
(135, 0, '2023-01-16', '01:58:51', 'test', 'Invalid'),
(136, 0, '2023-01-16', '01:58:51', 'test', 'Invalid'),
(137, 0, '2023-01-16', '02:00:30', 'test', 'Invalid'),
(138, 0, '2023-01-16', '02:00:30', 'test', 'Invalid'),
(139, 0, '2023-01-16', '02:00:32', 'test', 'Invalid'),
(140, 0, '2023-01-16', '02:00:32', 'test', 'Invalid'),
(141, 0, '2023-01-16', '02:01:27', 'test', 'Invalid'),
(142, 0, '2023-01-16', '02:01:27', 'test', 'Invalid'),
(143, 0, '2023-01-16', '02:02:43', 'test', 'Invalid'),
(144, 0, '2023-01-16', '02:02:43', 'test', 'Invalid'),
(145, 0, '2023-01-16', '02:02:46', 'test', 'Invalid'),
(146, 0, '2023-01-16', '02:02:46', 'test', 'Invalid'),
(147, 0, '2023-01-16', '02:03:16', 'test', 'Invalid'),
(148, 0, '2023-01-16', '02:03:16', 'test', 'Invalid'),
(149, 0, '2023-01-16', '02:03:20', 'test', 'Invalid'),
(150, 0, '2023-01-16', '02:03:20', 'test', 'Invalid'),
(151, 0, '2023-01-16', '02:03:37', 'test', 'Invalid'),
(152, 0, '2023-01-16', '02:04:15', 'test', 'Invalid'),
(153, 0, '2023-01-16', '02:04:18', 'test', 'Invalid'),
(154, 0, '2023-01-16', '02:04:20', 'test', 'Invalid'),
(155, 0, '2023-01-16', '02:05:45', 'test', 'Invalid'),
(156, 0, '2023-01-16', '02:06:14', 'test', 'Invalid'),
(157, 0, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(158, 0, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(159, 0, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(160, 0, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(161, 0, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(162, 0, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(163, 0, '2023-01-16', '02:07:11', 'test', 'Invalid'),
(164, 0, '2023-01-16', '02:07:11', 'test', 'Valid'),
(165, 0, '2023-01-16', '02:07:11', 'test', 'Valid'),
(166, 0, '2023-01-16', '02:07:11', 'test', 'Valid'),
(167, 0, '2023-01-16', '02:07:36', 'test', 'Valid'),
(168, 0, '2023-01-16', '02:10:57', 'test', 'Valid'),
(169, 0, '2023-01-16', '02:12:25', 'test', 'Valid'),
(170, 0, '2023-01-16', '02:12:25', 'test', 'Valid'),
(171, 0, '2023-01-16', '02:12:25', 'test', 'Valid'),
(172, 0, '2023-01-16', '02:12:25', 'test', 'Valid'),
(173, 0, '2023-01-16', '02:12:25', 'test', 'Valid'),
(174, 0, '2023-01-16', '02:12:25', 'test', 'Valid'),
(175, 0, '2023-01-16', '02:12:25', 'test', 'Valid'),
(176, 0, '2023-01-16', '02:12:25', 'test', 'Valid'),
(177, 7, '2023-01-18', '09:32:50', 'test', 'Invalid'),
(178, 7, '2023-01-18', '09:32:50', 'test', 'Invalid');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
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
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `level`, `type`) VALUES
(1, 'admintolol', 'jago', 'adminjago123@gmail.com', 'admin', 'b18e948191620cea7803d0733584eee9', 1, ''),
(3, 'Admin', 'Ganteng', 'adminganteng123@gmail.com', 'adminkeren', 'b18e948191620cea7803d0733584eee9', 1, ''),
(4, 'Admin', 'Cantik', 'admincantik123@gmail.com', 'admincans', 'b18e948191620cea7803d0733584eee9', 1, ''),
(5, 'Surving', 'Mania', 'survingmania@gmail.com', 'survingmania', 'ab97df09055c55e6e57aac6d8f2c1360', 2, 'Penyewaan'),
(6, 'Resto', 'Vegan', 'restoveganenak@gmail.com', 'vegansehat', '63f0c927d2d314f8f2cbdb1f41f62153', 2, 'Resto'),
(7, 'pengunjung', 'testdong', 'pengunjungcoba@gmail.com', 'testpengunjung', '098f6bcd4621d373cade4e832627b4f6', 3, ''),
(8, 'Andre', 'Prasetya', 'andreseptaprasetya06@gmail.com', 'nightshadow', '7a7b46be978bf4b68bf74f39978e96ab', 3, ''),
(9, 'Gilang', 'wkwkwk', 'gilang@gmail.com', 'gilang', 'c37fddfb7b3f538674c6e9a77e7bf486', 3, ''),
(10, 'testnambah', '', '', 'testnambah', '51fb409ebaf3c8ecec80194f98d74961', 2, 'Resto'),
(11, 'coba', '', '', 'coba', 'c3ec0f7b054e729c5a716c8125839829', 2, 'Resto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_buktibayar`
--
ALTER TABLE `tb_buktibayar`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `tb_detailpesanan`
--
ALTER TABLE `tb_detailpesanan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tb_histori`
--
ALTER TABLE `tb_histori`
  ADD PRIMARY KEY (`id_histori`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_user` (`id_stand`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  ADD PRIMARY KEY (`id_pendapatan`);

--
-- Indexes for table `tb_penyewaan`
--
ALTER TABLE `tb_penyewaan`
  ADD PRIMARY KEY (`id_penyewaan`);

--
-- Indexes for table `tb_saldo`
--
ALTER TABLE `tb_saldo`
  ADD PRIMARY KEY (`id_saldo`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_stand`
--
ALTER TABLE `tb_stand`
  ADD PRIMARY KEY (`id_stand`);

--
-- Indexes for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_buktibayar`
--
ALTER TABLE `tb_buktibayar`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_detailpesanan`
--
ALTER TABLE `tb_detailpesanan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_histori`
--
ALTER TABLE `tb_histori`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  MODIFY `id_pendapatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_penyewaan`
--
ALTER TABLE `tb_penyewaan`
  MODIFY `id_penyewaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_saldo`
--
ALTER TABLE `tb_saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_stand`
--
ALTER TABLE `tb_stand`
  MODIFY `id_stand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD CONSTRAINT `tb_menu_ibfk_1` FOREIGN KEY (`id_stand`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_saldo`
--
ALTER TABLE `tb_saldo`
  ADD CONSTRAINT `tb_saldo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
