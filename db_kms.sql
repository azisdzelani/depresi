-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2016 at 08:50 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diskusi`
--

CREATE TABLE IF NOT EXISTS `tbl_diskusi` (
  `id_diskusi` int(3) NOT NULL,
  `id_pegawai` int(3) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `judul_diskusi` varchar(50) NOT NULL,
  `isi_diskusi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_diskusi`
--

INSERT INTO `tbl_diskusi` (`id_diskusi`, `id_pegawai`, `id_kategori`, `judul_diskusi`, `isi_diskusi`, `tanggal`) VALUES
(1, 1, 1, 'teknologi internet', 'internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah ', '2016-07-29'),
(2, 1, 2, 'vpn adalah', 'vpn adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah ', '2016-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
  `id_jabatan` int(2) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kepala Bagian'),
(2, 'Kepala Sub Bagian'),
(3, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'teknologi'),
(2, 'jurnalistik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `id_komentar` int(3) NOT NULL,
  `id_diskusi` int(3) NOT NULL,
  `id_pegawai` int(3) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_diskusi`, `id_pegawai`, `isi_komentar`) VALUES
(1, 1, 1, 'Hello World'),
(2, 1, 1, 'hello 2'),
(3, 1, 1, 'hello 3'),
(4, 1, 1, ''),
(5, 2, 1, ''),
(6, 2, 1, 'hjhjasa'),
(7, 2, 1, 'asasas'),
(8, 1, 1, 'dededed'),
(9, 1, 1, 'testis'),
(10, 1, 1, 'cek cek');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `id_pegawai` int(3) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `id_jabatan` int(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat_rumah` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nip`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `id_jabatan`, `email`, `alamat_rumah`, `telepon`) VALUES
(2, '11110930000', 'tes', 'tes', '2016-09-08', 'perempuan', 'kristen', 3, 'azisdzelani@gmail.com', 'jalan hankam', '08670238232'),
(12, 'admin', 'admin', 'bekasi', '2016-09-17', 'perempuan', 'islam', 3, 'azisdzelani@gmail.com', 'jalan raya ka', '085693677158'),
(13, '11110930000', 'tes', 'bekasi', '2016-09-23', 'laki-laki', 'islam', 1, 'azisdzelani@gmail.com', 'jalan raya hankam', '085693677158'),
(14, 'admin', 'admin', 'bekasi', '2016-09-16', 'laki-laki', 'islam', 2, 'azisdzelani@gmail.com', 'asasas', '08670238232'),
(15, 'kabag', 'kabag', 'bekasi', '2016-09-22', 'perempuan', 'islam', 3, 'azisdzelani@yahoo.com', 'zasasas', '085693677158'),
(16, '1111093000034', 'bedul', 'bekasi', '1993-12-04', 'perempuan', 'hindu', 3, 'bedul@gmail.com', 'jalan raya hankam', '085693677158');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(3) NOT NULL,
  `id_pegawai` int(3) NOT NULL,
  `level_user` enum('Admin','Kepala Bagian','Kepala Sub Bagian','Staff') NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` set('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_pegawai`, `level_user`, `username`, `password`, `status`) VALUES
(11, 12, 'Staff', '11110930000', '11110930000', 'Aktif'),
(12, 13, 'Kepala Bagian', '11110930000', '11110930000', 'Aktif'),
(13, 14, 'Kepala Sub Bagian', 'admin', 'admin', 'Aktif'),
(14, 15, 'Staff', 'kabag', 'kabag', 'Aktif'),
(15, 16, 'Staff', '', '', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
  ADD PRIMARY KEY (`id_diskusi`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
  MODIFY `id_diskusi` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
