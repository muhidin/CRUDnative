-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2020 at 09:02 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mwi_pustaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(5) NOT NULL,
  `nama` varchar(70) DEFAULT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tgabung` date DEFAULT NULL,
  `status` enum('Aktif','Non aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `hp`, `alamat`, `tgabung`, `status`) VALUES
(1, 'Muhamad Akmal Hidayat', '0812232323224', 'Jl. Citatah Cibinong Bogor', '2019-06-03', 'Non aktif'),
(2, 'Alan Firdaus', '08222222222222', 'Depok', '2019-07-07', 'Aktif'),
(3, 'Kemal Nazhif Ramadhan', '08333333333333', 'Cimanggis Depok', '2019-07-07', 'Aktif'),
(4, 'Niko Dwicahyo Widiyanto', '08444444444', 'Cileungsi Bogor', '2019-07-07', 'Aktif'),
(5, 'Muhammad Adzlan Alfarizi', '085555555555', 'Gn Putri Bogor', '2019-07-07', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(5) NOT NULL,
  `idanggota` int(5) DEFAULT NULL,
  `tpinjam` date DEFAULT NULL,
  `thkembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `idanggota`, `tpinjam`, `thkembali`) VALUES
(1, 1, '2020-02-01', '2020-02-08'),
(2, 2, '2020-02-08', '2020-02-15'),
(3, 3, '2020-02-07', '2020-02-14'),
(4, 4, '2020-02-06', '2020-02-13'),
(5, 5, '2020-02-04', '2020-02-11'),
(6, 1, '2020-02-08', '2020-02-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
