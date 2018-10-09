-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 04:09 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipkismk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bimbingan`
--

CREATE TABLE `tbl_bimbingan` (
  `kdbimbingan` int(11) NOT NULL,
  `kdpenempatan` int(11) NOT NULL,
  `nip` char(21) NOT NULL,
  `nis` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `catatan` text NOT NULL,
  `file` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `kdfile` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` text NOT NULL,
  `share` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_industri`
--

CREATE TABLE `tbl_industri` (
  `kdind` int(11) NOT NULL,
  `nama_industri` varchar(50) NOT NULL,
  `bidang_kerja` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat_industri` text NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `website` text NOT NULL,
  `email` text NOT NULL,
  `syarat` text NOT NULL,
  `kuota` int(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_industri`
--

INSERT INTO `tbl_industri` (`kdind`, `nama_industri`, `bidang_kerja`, `deskripsi`, `alamat_industri`, `wilayah`, `telepon`, `website`, `email`, `syarat`, `kuota`, `foto`) VALUES
(2, 'PT. Semen Tonasa', 'Perusahaan', 'Produsen semen terbesar di kawasan Indonesia Timur', 'Jl. Biringere, Pangkep, Sulawesi Selatan, 90651', 'Pangkep', '(0410) 312345', 'www.sementonasa.co.id', 'humas.st@semenindonesia.com', '-Bekerja Sesuai Bidang Komptensi\r\n-Rajin dan Rapih', 6, ''),
(7, 'Badan Kesbangpol Provinsi Sulsel', 'Pemerintahan', 'Lembaga yang bertugas melaksanakan penyusunan kebijakan teknis dan pelaksanaan kebijakan Daerah urusan bidang ideologi dan kewaspadaan, wawasan kebangsaan, politik dalam negeri, ketahanan seni, budaya, agama dan ekonomi', 'Jl. Jenderal Urip Sumohararjo No. 269', 'Makassar', '0411453486', 'kesbangpol.sulselprov.go.id', 'kesbangpol@sulselprov.go.id', '-Bekerja Sesuai Bidang Komptensi\r\n-Rajin dan Rapih\r\n', 10, 'Perotta.jpg'),
(4, 'Jaringan Seluler XL (Axiata)', 'Jaringan', 'sebuah perusahaan operator telekomunikasi seluler di Indonesia', 'Jl. A. P. Pettarani No.68', 'Makassar', '(021) 57959926', 'www.xl.co.id', 'corpsec@xl.co.id', '-Bekerja Sesuai Bidang Komptensi\r\n-Rajin dan Rapih', 8, ''),
(5, 'PT. Garuda Indonesia', 'Perusahaan', 'Maskapai penerbangan nasional Indonesia', 'Jl. Budi Utomo No. 652-653 Timika-Papua', 'Papua', '(0901) 323747', 'www.garuda-indonesia.com', 'Garudaindonesia@gmail.com', '-Bekerja Sesuai Bidang Komptensi\r\n-Rajin dan Rapih', 3, ''),
(6, 'Orien Tour & Travel', 'Perusahaan', 'Penyedia jasa tour derah papua', 'Jl. Pemuda No 41, Oyehe, Nabire, Papua', 'Papua', '085213430204', 'orien-travel.business.site', 'orien-travel@gmail.com', '-Bekerja Sesuai Bidang Komptensi\r\n-Rajin dan Rapih', 3, ''),
(8, 'dfsasad', 'asdasd', 'asdasd', 'sadasdas', 'sada', '32423423', 'sdf', 'sdafdsf@gmail.com', 'sdfsfsd', 12, 'totti.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `kdinfo` int(11) NOT NULL,
  `kdlabel` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `penulis` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`kdinfo`, `kdlabel`, `tanggal`, `judul`, `deskripsi`, `gambar`, `penulis`) VALUES
(4, 1, '2017-11-06', 'asff', '<p>sdgdsg</p>', 'foto/info/fb2016.png', 'Anwar-kun'),
(5, 2, '2017-11-06', 'kvkbk', 'kgkbjkbjk', 'foto/info/foto-lastgooglenews-facebookdeepweb21.jpeg', 'Anwar-kun');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurnal`
--

CREATE TABLE `tbl_jurnal` (
  `kdjurnal` int(11) NOT NULL,
  `kdpenempatan` int(11) NOT NULL,
  `nip` char(21) NOT NULL,
  `nis` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kompotensi` varchar(50) NOT NULL,
  `uraian` text NOT NULL,
  `foto_jurnal` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `kdjurusan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kdkelas` int(11) NOT NULL,
  `kdjurusan` char(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_label`
--

CREATE TABLE `tbl_label` (
  `kdlabel` int(11) NOT NULL,
  `nama_label` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_label`
--

INSERT INTO `tbl_label` (`kdlabel`, `nama_label`, `keterangan`) VALUES
(1, 'Pengumuman', '-'),
(2, 'Tips', '-'),
(3, 'Industri', '-'),
(4, 'Sekolah', '-'),
(5, 'Lain-lain', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `kdnilai` int(11) NOT NULL,
  `kdpenempatan` int(11) NOT NULL,
  `keterangan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') NOT NULL,
  `nilai` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemb`
--

CREATE TABLE `tbl_pemb` (
  `kdpemb` int(11) NOT NULL,
  `kdjurusan` char(5) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `nip` char(21) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `wilayah` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penempatan`
--

CREATE TABLE `tbl_penempatan` (
  `kdpenempatan` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `kdpemb` int(11) NOT NULL,
  `kdind` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL,
  `status` enum('-','proses','ditolak','diterima') NOT NULL,
  `surat` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` int(11) NOT NULL,
  `kdkelas` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `foto` text NOT NULL,
  `password` text NOT NULL,
  `kdpemb` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tolak_penempatan`
--

CREATE TABLE `tbl_tolak_penempatan` (
  `kdtolak` int(11) NOT NULL,
  `kdpenempatan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `alasan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `identitas` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `nama_lengkap`, `identitas`, `password`, `status`, `foto`) VALUES
(1, 'admin', 'Hamzaruddin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Kordinator ', 'foto-lastgooglenews-facebookdeepweb2.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bimbingan`
--
ALTER TABLE `tbl_bimbingan`
  ADD PRIMARY KEY (`kdbimbingan`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`kdfile`);

--
-- Indexes for table `tbl_industri`
--
ALTER TABLE `tbl_industri`
  ADD PRIMARY KEY (`kdind`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`kdinfo`);

--
-- Indexes for table `tbl_jurnal`
--
ALTER TABLE `tbl_jurnal`
  ADD PRIMARY KEY (`kdjurnal`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`kdjurusan`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kdkelas`);

--
-- Indexes for table `tbl_label`
--
ALTER TABLE `tbl_label`
  ADD PRIMARY KEY (`kdlabel`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`kdnilai`);

--
-- Indexes for table `tbl_pemb`
--
ALTER TABLE `tbl_pemb`
  ADD PRIMARY KEY (`kdpemb`);

--
-- Indexes for table `tbl_penempatan`
--
ALTER TABLE `tbl_penempatan`
  ADD PRIMARY KEY (`kdpenempatan`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_tolak_penempatan`
--
ALTER TABLE `tbl_tolak_penempatan`
  ADD PRIMARY KEY (`kdtolak`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bimbingan`
--
ALTER TABLE `tbl_bimbingan`
  MODIFY `kdbimbingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `kdfile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_industri`
--
ALTER TABLE `tbl_industri`
  MODIFY `kdind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `kdinfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_jurnal`
--
ALTER TABLE `tbl_jurnal`
  MODIFY `kdjurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `kdjurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `kdkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_label`
--
ALTER TABLE `tbl_label`
  MODIFY `kdlabel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `kdnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pemb`
--
ALTER TABLE `tbl_pemb`
  MODIFY `kdpemb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_penempatan`
--
ALTER TABLE `tbl_penempatan`
  MODIFY `kdpenempatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_tolak_penempatan`
--
ALTER TABLE `tbl_tolak_penempatan`
  MODIFY `kdtolak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
