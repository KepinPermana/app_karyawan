-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2021 at 11:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_divisi`
--

CREATE TABLE `data_divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_divisi`
--

INSERT INTO `data_divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'Staff Operasional'),
(2, 'Staff Admin'),
(3, 'HRGA'),
(4, 'Staff Manager');

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_karyawan` varchar(225) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `email`, `nama_karyawan`, `username`, `password`, `alamat`, `no_tlp`, `divisi`, `hak_akses`) VALUES
(1, 'kepinpermana1983@gmail.com', 'Kepin Permana 1234', 'kepin', '81dc9bdb52d04dc20036dbd8313ed055', 'Cipondoh, Tangerang', '08561723050', 'Staff IT', 1),
(3, 'Kepinpermana13@gmail.com', 'Kepin2', 'kepin2', '81dc9bdb52d04dc20036dbd8313ed055', 'Jakarta Barat', '0867767789989', 'Staff Magang', 2),
(5, 'Dodi1998@gmail.com', 'Dodi', 'Dodi', '81dc9bdb52d04dc20036dbd8313ed055', 'Tangerang, Cipondoh', '00987878', 'Staff Admin', 2),
(6, 'Adi@gmail.com', 'Adi Kusnandar', '', '', 'Jakarta Barat', '0865657888999', 'Staff Marketing', 1),
(7, 'indah@gmail.com', 'Indah', 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Jakarta Timur', '0876767676767', 'Staff IT', 1),
(8, 'Dhea@gmail.com', 'Dhea', 'Dhea', '81dc9bdb52d04dc20036dbd8313ed055', 'Jogja', '086767557788', 'Staff Penghibur', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'karyawan', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_divisi`
--
ALTER TABLE `data_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_divisi`
--
ALTER TABLE `data_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
