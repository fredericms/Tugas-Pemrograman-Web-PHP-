-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 10:46 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL COMMENT 'ID pesan',
  `nama` text NOT NULL COMMENT 'Nama Lengkap pengguna',
  `jk` varchar(50) NOT NULL COMMENT 'Jenis Kelamin',
  `umur` int(11) NOT NULL COMMENT 'Umur Pengguna',
  `email` varchar(50) NOT NULL COMMENT 'Email Pengguna',
  `pesan` longtext NOT NULL COMMENT 'Pesan',
  `gambar` varchar(100) NOT NULL COMMENT 'Upload Gambar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `jk`, `umur`, `email`, `pesan`, `gambar`) VALUES
(15, 'Roger', 'Laki-Laki', 31, 'roger@yahoo.com ', 'Beta suka website ini.', ''),
(18, 'Raihan', 'Laki-Laki', 20, 'raihan@gmail.com', 'Boleh aja lah.', ''),
(19, 'Roger', 'Laki-Laki', 29, 'fredericmsaragih@yahoo.com', 'Aku cinta dia.', ''),
(22, 'Frederic Morado Saragih', 'Laki-Laki', 20, 'fredericmsaragih@yahoo.com', 'Aku manusia.', '2-26689_web-clipart.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT 'ID User',
  `namaDepan` varchar(50) NOT NULL COMMENT 'Nama Depan',
  `namaBelakang` varchar(50) NOT NULL COMMENT 'Nama Belakang',
  `username` varchar(50) NOT NULL COMMENT 'Username',
  `password` varchar(255) NOT NULL COMMENT 'Password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `namaDepan`, `namaBelakang`, `username`, `password`) VALUES
(4, 'Eric', 'ms', 'squidward', 'c049279df3cab6ac4d43ff50620e7af2'),
(6, 'Frederic', 'Saragih', 'fredericms', '$2y$10$GYVUH8yFi9g3ib6AfVzLTupCHvQnX4rCs7QDdfyPngkd0LX6hDdDS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID pesan', AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID User', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
