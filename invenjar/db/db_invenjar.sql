-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 06:02 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_invenjar`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kd_barang` varchar(20) NOT NULL,
  `nm_barang` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `tgl_inventaris` date NOT NULL,
  `tahun` char(4) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `musnah` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kd_barang`, `nm_barang`, `satuan`, `tgl_inventaris`, `tahun`, `kondisi`, `id_ruang`, `musnah`) VALUES
(2, 'INV/JAR/000001', 'Sierra IBM, 94.6 FLOPS', 'Unit', '2020-02-07', '2020', 'Baik', 2, '0'),
(4, 'INV/JAR/000002', 'Monitor LG 20 inc', 'Unit', '2019-02-08', '2019', 'Rusak Ringan', 2, '1'),
(5, 'INV/JAR/000003', 'Netgear XS748T 48 Port 10 ', 'Unit', '2022-02-02', '2019', 'Baik', 2, '0'),
(6, 'INV/JAR/000004', 'Kabel LAN 2 M', 'Set', '2019-02-08', '2019', 'Rusak Ringan', 3, '0');

-- --------------------------------------------------------

--
-- Table structure for table `berita_acara`
--

CREATE TABLE `berita_acara` (
  `id_berita_acara` varchar(20) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_acara`
--

INSERT INTO `berita_acara` (`id_berita_acara`, `no_surat`, `tanggal`, `jenis`) VALUES
('620490888c5c0', '678943', '2022-02-11', 'Pemusnahan Inventaris');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `kondisi_awal` varchar(20) NOT NULL,
  `cek_kondisi` varchar(20) NOT NULL,
  `tgl_cek` date NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `id_barang`, `kondisi_awal`, `cek_kondisi`, `tgl_cek`, `catatan`) VALUES
(2, 4, 'Baik', 'Rusak Ringan', '2022-02-01', 'Lecet ditengah layar '),
(3, 6, 'Baik', 'Rusak Ringan', '2022-02-01', 'kabel mulai berkarat');

-- --------------------------------------------------------

--
-- Table structure for table `musnah`
--

CREATE TABLE `musnah` (
  `id_musnah` int(11) NOT NULL,
  `tgl_musnah` date NOT NULL,
  `id_barang` int(11) NOT NULL,
  `ket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musnah`
--

INSERT INTO `musnah` (`id_musnah`, `tgl_musnah`, `id_barang`, `ket`) VALUES
(4, '2022-02-11', 4, 'OKE');

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_ruang_lama` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `tgl_mutasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mutasi`
--

INSERT INTO `mutasi` (`id_mutasi`, `no_surat`, `id_barang`, `id_ruang_lama`, `id_ruang`, `tgl_mutasi`) VALUES
(3, '243565555555', 4, 3, 2, '2022-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `nm_ruang` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nm_ruang`, `ket`) VALUES
(2, 'Ruang Server', 'Ruangan untuk penyimpanan Server'),
(3, 'Ruang Instalasi', 'Tempat Pendung Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `sub_berita_acara`
--

CREATE TABLE `sub_berita_acara` (
  `id_sub_berita_acara` int(11) NOT NULL,
  `id_berita_acara` varchar(20) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_berita_acara`
--

INSERT INTO `sub_berita_acara` (`id_sub_berita_acara`, `id_berita_acara`, `id_barang`, `ket`) VALUES
(1, '620490888c5c0', 5, 'OK'),
(2, '620490888c5c0', 6, 'lorem');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(2, 'Kepala DISKOMINFOTIK', 'kadiskominfotik', '6261acf33d849e66b9cdaf0ed8032e0d', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_ruang` (`id_ruang`);

--
-- Indexes for table `berita_acara`
--
ALTER TABLE `berita_acara`
  ADD PRIMARY KEY (`id_berita_acara`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `musnah`
--
ALTER TABLE `musnah`
  ADD PRIMARY KEY (`id_musnah`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_ruang` (`id_ruang`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `sub_berita_acara`
--
ALTER TABLE `sub_berita_acara`
  ADD PRIMARY KEY (`id_sub_berita_acara`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `musnah`
--
ALTER TABLE `musnah`
  MODIFY `id_musnah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sub_berita_acara`
--
ALTER TABLE `sub_berita_acara`
  MODIFY `id_sub_berita_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD CONSTRAINT `kondisi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `musnah`
--
ALTER TABLE `musnah`
  ADD CONSTRAINT `musnah_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD CONSTRAINT `mutasi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mutasi_ibfk_2` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
