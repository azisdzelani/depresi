-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2016 at 08:26 PM
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
-- Table structure for table `tbl_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(3) NOT NULL,
  `id_kategori_berita` int(11) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tbl_dokumen`
--

CREATE TABLE IF NOT EXISTS `tbl_dokumen` (
  `id_dokumen` int(3) NOT NULL,
  `id_kategori_dokumen` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
  `id_jabatan` int(2) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kepala Bagian Humas'),
(2, 'Kepala Sub Bagian Publikasi'),
(3, 'Kepala Sub Bagian TI'),
(4, 'Staff');

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
-- Table structure for table `tbl_kategori_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori_berita` (
  `id_kategori_berita` int(11) NOT NULL,
  `slug_kategori_berita` varchar(100) DEFAULT NULL,
  `nama_ketagori_berita` varchar(100) NOT NULL,
  `keterangan` text,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_berita`
--

INSERT INTO `tbl_kategori_berita` (`id_kategori_berita`, `slug_kategori_berita`, `nama_ketagori_berita`, `keterangan`, `urutan`) VALUES
(1, 'ini adalah perjuangan', 'teknologi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_dokumen`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori_dokumen` (
  `id_kategori_dokumen` int(3) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_dokumen`
--

INSERT INTO `tbl_kategori_dokumen` (`id_kategori_dokumen`, `nama_kategori`) VALUES
(2, 'Notulensi'),
(3, 'Lakip'),
(5, 'SOP'),
(9, 'Jadwal Pelatihan'),
(12, 'Hasil Inovasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `id_komentar` int(3) NOT NULL,
  `id_diskusi` int(3) NOT NULL,
  `id_pegawai` int(3) NOT NULL,
  `isi_komentar` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_diskusi`, `id_pegawai`, `isi_komentar`, `date`) VALUES
(1, 1, 44, 'Hello World', '0000-00-00'),
(2, 1, 45, 'hello 2', '0000-00-00'),
(3, 1, 64, 'hello 3', '0000-00-00'),
(4, 1, 1, '', '0000-00-00'),
(5, 2, 1, '', '0000-00-00'),
(6, 2, 1, 'hjhjasa', '0000-00-00'),
(7, 2, 1, 'asasas', '0000-00-00'),
(8, 1, 1, 'dededed', '0000-00-00'),
(9, 1, 1, 'testis', '0000-00-00'),
(10, 1, 1, 'cek cek', '0000-00-00');

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
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_pegawai`, `level_user`, `username`, `password`, `status`) VALUES
(37, 39, 'Admin', 'admin', 'admin', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD UNIQUE KEY `slug_berita` (`slug_berita`);

--
-- Indexes for table `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
  ADD PRIMARY KEY (`id_diskusi`);

--
-- Indexes for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

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
-- Indexes for table `tbl_kategori_berita`
--
ALTER TABLE `tbl_kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`),
  ADD UNIQUE KEY `slug_kategori_berita` (`slug_kategori_berita`);

--
-- Indexes for table `tbl_kategori_dokumen`
--
ALTER TABLE `tbl_kategori_dokumen`
  ADD PRIMARY KEY (`id_kategori_dokumen`);

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
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
  MODIFY `id_diskusi` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  MODIFY `id_dokumen` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_kategori_berita`
--
ALTER TABLE `tbl_kategori_berita`
  MODIFY `id_kategori_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_kategori_dokumen`
--
ALTER TABLE `tbl_kategori_dokumen`
  MODIFY `id_kategori_dokumen` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
