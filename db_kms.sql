-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2016 at 02:50 PM
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
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `id_user`, `id_kategori_berita`, `judul`, `isi`, `gambar`, `tanggal`) VALUES
(1, 7, 7, 'LAN Kembali Gelar Temu Inovasi Administrasi Negara', '<p>Jakarta &ndash; Lembaga Administrasi Negara (LAN) akan menyelenggarakan Temu Inovasi Administrasi Negara (Inagara), Selasa (27/9) hingga Rabu (28/9) mendatang, di Gedung Makarti Bhakti Nagari, Kampus PPLPN LAN Pejompongan, Jakarta.</p><p>Temu Inovasi Administrasi Negara yang kedua kalinya digelar ini bertujuan untuk semakin menginspirasi para aparatur sipil negara di lingkungan Kementerian/Lembaga/Pemda untuk mengembangkan inovasi-inovasi di bidang pelayanan publik.</p><p>Koordinator acara dari Pusat Promosi Inovasi dan Pengembangan Kapasitas, Sabrina mengatakan, kegiatan Temu Inovasi Administrasi Negara (Inagara) ini akan berlangsung selama dua hari dengan dihadiri sejumlah tokoh yang dinilai memiliki komitmen tinggi dalam mendorong inovasi di wilayahnya.</p><p>&ldquo;Sejumlah Bupati/Walikota dipastikan akan hadir dalam Temu Inagara. Mereka yang hadir juga akan dianugerahi Ingara Award sebagai penghargaan atas komitmennya membuka ruang inovasi di sektor publik dalam pemerintahannya,&rdquo; jelasnya.</p><p>Tidak hanya itu saja, lanjut dia, Temu Inagara ini juga akan diisi dengan talkshow terkait masalah inovasi. Sejumlah<em>best practices</em>&nbsp;inovasi dan laboratorium inovasi yang saat ini sudah berjalan juga akan diperbincangkan untuk mengulas lebih jauh tantangan dan kendala yang dihadapi saat melakukan inovasi sektor publik.</p><p>&ldquo;Lembaga Administrasi Negara juga akan mengundang beberapa narasumber dari Kemenpan &amp; RB serta Kemendagri. Para narasumber itu akan mengulas berbagai hal terkait dengan inovasi di sektor publik,&rdquo; ujarnya.</p><p>Sabrina merinci, tema-tema yang akan diusung antara lain : Deputi Inovasi Administrasi Negara LAN Tri Widodo akan berbicara mengenai Pengembangan Laboratorium Inovasi untuk memperkuat sistem Inagara, Deputi Pelayan Publik Kemenpan dan RB Diah Natalisa dengan tema Gerakan Inovasi Massive dalam Reformasi Birokrasi, serta Sekjen Kementerian Dalam Negeri Yuswandi A Temenggung dengan tema Strategi Kebijakan Akselerasi Inovasi Pemerintah Daerah.</p><p>&ldquo;Acara Temu Inagara yang kedua ini juga akan diisi dengan Penandatanganan Deklarasi Tri Satya Inagara sebagai wujud komitmen bersama para kepala daerah dalam membumikan inovasi di sektor pemerintah,&rdquo; tutupnya. (Humas)</p>', 'jadwal_akademik_smt_ganjil.png', '2016-09-25'),
(2, 7, 8, 'LAN Serahkan Sertifikat Akreditasi Kepada 18 Lembaga Diklat', '<p>Jakarta &ndash; Sebanyak 18 Lembaga Diklat Pemerintah memperoleh sertifikat akreditasi dari Lembaga Administrasi Negara selaku instansi pembina diklat aparatur. Akreditasi ini dimaksudkan untuk menjaga kualitas mutu dan penyelenggaraan diklat.</p><p>Kepala Lembaga Administrasi Negara (LAN) Dr. Adi Suryanto, Msi mengatakan, akreditasi yang dilakukan oleh LAN terhadap Lembaga Diklat itu dimaksudkan untuk mengukur sejauh mana profesionalisme Lembaga Diklat selaku penyelenggara.</p><p>&ldquo;Ada banyak komponen yang kita asses terkait akreditasi, baik itu dari kelembagaan diklat, tenaga kediklatan, fasilitas diklat, pengelola, tenaga pengajar, serta pengelola sistem informasi diklat. Jadi semua komponen kita nilai untuk menjamin mutunya,&rdquo; jelasnya saat memberikan sambutan dalam acara penyerahan Sertifikat Akreditasi Lembaga Diklat Pemerintah, di Aula Makarti Bhakti Nagari, Gedung A Lantai II, LAN Pusat, Vetaran, Jakarta, Jumat (16/9).</p><p>Kepala LAN mengatakan, profesionalisme Aparatur Sipil Negara (ASN) saat ini menjadi tuntutan yang tidak bisa dihindari. UU ASN juga memiliki filosofi pegawai ASN sebagai aset dan bukan merupakan beban negara. Dengan demikian, profesionalisme dan kompetensinya harus ditingkatkan.</p><p>&ldquo;Perubahan paradigma ASN sebagai asset organisasi menuntut organisasi untuk senantiasa memelihara dan mengembangkan secara terus-menerus aparatur sipil di lingkungannya. Disinilah lembaga diklat pemerintah memiliki peran yang sangat strategis,&rdquo; jelasnya.</p><p>Dalam kesempatan itu, Kepala LAN juga menyinggung PP No. 18 Tahun 2016 tentang Organisasi Perangkat Daerah yang menempatkan lembaga diklat Kab/Kota tidak lagi menjadi lembaga diklat yang mandiri. Dengan posisi ini, Kepala LAN meminta agar Badan Diklat Provinsi memainkan peran lebih besar untuk mengatur pengembangan kompetensi ASN di tingkat Kabupaten/Kota.</p><p>Selain itu, lanjut dia, juga perlu ada sertifikasi pada setiap program diklat yang diselenggarakan oleh lembaga diklat. Dengan demikian ada kesamaan standar kompetensi di setiap daerah.</p><p>&ldquo;Saya menghimbau agar setiap Badan Diklat Kementerian/Lembaga dapat mengambil alih pembinaan untuk program-program diklat yang ada dibawah pengelolaannya,&rdquo; tutupnya. (choky/humas)</p><p>Adapun ke-18 Lembaga Diklat yang memperoleh sertifikat akreditasi antara lain :</p><p>1. Badan Diklat Provinsi Kalimantan Tengah</p><p>2. Badan Diklat Provinsi Sumatera Barat</p><p>3. Badan Diklat Provinsi Sumatera Utara</p><p>4. Badan Diklat Provinsi NTB</p><p>5. Badan Diklat Provinsi Gorontalo</p><p>6. Pusdiklat BPS</p><p>7. Pusdiklat Kementerian Sekretariat Negara</p><p>8. Pusat Pengembangan SDM Aparatur Perhubungan Kementerian Perhubungan</p><p>9. Pusdiklat Industri Kementerian Perindustrian</p><p>10. Pusdiklat Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta</p><p>11. Pusdiklat SDM Lingkungan Hidup dan Kehutanan Kementerian Lingkungan Hidup dan Kehutanan</p><p>12. BPSDM Kementerian Dalam Negeri&nbsp;</p><p>13. Pusdikat Pemerintah Provinsi Jambi</p><p>14. Pusdiklat Kepemimpinan Magelang Kementerian Keuangan</p><p>15. Pusdiklat Pengembangan SDM Kementerian Keuangan</p><p>16. Pusdiklat Manajemen dan Kepemimpinan Mahkamah Agung</p><p>17. Badan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan Kementerian Kesehatan</p><p>18. Pusdiklat Kementerian Riset Teknologi dan Pendidikan Tinggi&nbsp;</p>', 'jadwal_akademik_smt_ganjil1.png', '2016-09-16');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_diskusi`
--

INSERT INTO `tbl_diskusi` (`id_diskusi`, `id_pegawai`, `id_kategori`, `judul_diskusi`, `isi_diskusi`, `tanggal`) VALUES
(1, 1, 1, 'teknologi internet', 'internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah ', '2016-07-29'),
(2, 1, 2, 'vpn adalah', 'vpn adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah internet adalah ', '2016-07-29'),
(3, 1, 1, 'teknologi komputer', 'bagaimana menjalankan komputer', '2016-09-19'),
(4, 4, 3, 'ini adalah diskusi tentang inovasi', 'inovasi adalah bla bla bla bla bla blabla bla blabla bla blabla bla blabla bla bla', '2016-09-28');

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
  `file` text
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokumen`
--

INSERT INTO `tbl_dokumen` (`id_dokumen`, `id_kategori_dokumen`, `id_user`, `judul`, `keterangan`, `tanggal`, `file`) VALUES
(1, 5, 7, 'SOP LAN NO.04.01', 'SOP Penyelenggaraan Sosial, Bimtek dan Advokasi', '2016-02-25', 'SOP-LAN-04_01-PENYELENGGARAN-SOSIALISASI-BIMTEK-DA'),
(2, 5, 7, 'Pengolahan Media Center dan Permohonan Informasi', 'Pedoman dalam Pelaksanaan Pengelolaan Media Center dan Pelayanan Informasi ', '2016-02-25', 'SOP-LAN-04_04-PENGELOLAAN-MEDIA-CENTER-DAN-PERMOHO'),
(3, 5, 7, 'Pelayanan HUMAS dan Informasi', 'Pedoman Pelaksanaan Tugas Pengeloaan Data dan Informasi HUMAS', '2016-02-18', 'SOP-PELAYANAN-INFORMASI-DAN-HUBUNGAN-ANTAR-LEMBAGA'),
(4, 5, 7, 'sop', 'ini adalah SOP', '1993-12-04', 'Form-Konversi.pdf'),
(5, 3, 7, 'lakip', 'ini lakip', '1993-12-10', 'CFM_LAN_09_PENGELOLAAN_TEKNOLOGI_INFORMASI_(1).pdf'),
(6, 2, 7, 'notulen', 'ini notulensi', '2016-09-17', '04062014_Notulensi_Rapat_Pengembangan_Web_LAN.docx'),
(7, 2, 7, 'notulen tes', 'ini notulensi tes', '2016-09-02', '23062014_Notulensi_Rapat_E_office.docx'),
(8, 3, 7, 'lakip', 'lakip', '2016-09-20', '23062014_Notulensi_Rapat_E_office1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
  `id_jabatan` int(2) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kepala Bagian Humas'),
(2, 'Kepala Sub Bagian Publikasi'),
(3, 'Kepala Sub Bagian TI'),
(4, 'Staff IT'),
(5, 'Staff Publikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `keterangan`) VALUES
(1, 'teknologi', 'berisi tentang segala macam diskusi yang berkaitan dengan teknologi'),
(2, 'jurnalistik', 'berisi tentang segala macam diskusi yang berkaitan dengan jurnalistik'),
(3, 'Inovasi', 'Membahasa Semua yang Berhubungan Dengan Inovasi di Bidang Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori_berita` (
  `id_kategori_berita` int(3) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_berita`
--

INSERT INTO `tbl_kategori_berita` (`id_kategori_berita`, `nama_kategori`, `keterangan`) VALUES
(7, 'LAN', 'Berisi Semua Berita yang Berkaitan dengan Kegiatan Seputar LAN'),
(8, 'Lintas Instansi', 'Berisi Semua Berita yang Berhubungan Dengan Instansi yang berada dibawah LAN');

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_diskusi`, `id_pegawai`, `isi_komentar`, `date`) VALUES
(1, 3, 6, 'testis', '2016-09-20 09:40:48');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nip`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `id_jabatan`, `email`, `alamat_rumah`, `telepon`) VALUES
(1, '196609291986022001', 'Hj. Fateha S.IP', 'Bandung', '1986-09-06', 'perempuan', 'islam', 1, 'fateha@gmail.com', 'jalan raya hankam pondok melati', '085693677158'),
(2, '196609291986022002', 'Budi Prayitno, SIP, M.SI', 'Purwokerto', '1989-12-04', 'laki-laki', 'islam', 2, 'prayitno@gmail.com', 'jalan raya perintis', '085693677158'),
(3, '196609291986022003', 'Danang Dwi Cahyono, S.os', 'Banyuwangi', '1980-04-05', 'laki-laki', 'islam', 5, 'danang@gmail.com', 'jalan raya menteng ', '085693677158'),
(5, '196609291986022007', 'Paracoyo Cipto Nugroho, A, Md', 'Bogor', '1979-12-04', 'laki-laki', 'islam', 5, 'pracoyo@gmail.com', 'jalan raya perintis', '085693677158'),
(6, 'admin', 'azis dzelani', 'bekasi', '1993-12-04', 'laki-laki', 'islam', 4, 'azisdzelani@gmail.com', 'jalan raya hankam', '085693677158'),
(7, '1111093000034', 'Ari ', 'Purworejo', '1976-12-04', 'laki-laki', 'islam', 3, 'ari@gmail.com', 'jalan raya pendidikan', '085693677158');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_pegawai`, `level_user`, `username`, `password`, `status`) VALUES
(2, 1, 'Kepala Bagian', '196609291986022001', '196609291986022001', 'Aktif'),
(3, 2, 'Kepala Sub Bagian', '196609291986022002', '196609291986022002', 'Aktif'),
(4, 3, 'Staff', '196609291986022003', '196609291986022003', 'Aktif'),
(6, 5, 'Staff', '196609291986022007', '196609291986022007', 'Aktif'),
(7, 6, 'Admin', 'admin', 'admin', 'Aktif'),
(8, 7, 'Kepala Sub Bagian', '1111093000034', '1111093000034', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

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
  ADD PRIMARY KEY (`id_kategori_berita`);

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
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
  MODIFY `id_diskusi` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  MODIFY `id_dokumen` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_kategori_berita`
--
ALTER TABLE `tbl_kategori_berita`
  MODIFY `id_kategori_berita` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_kategori_dokumen`
--
ALTER TABLE `tbl_kategori_dokumen`
  MODIFY `id_kategori_dokumen` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
