-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 08:11 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sedot_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(224) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `bis`
--

CREATE TABLE IF NOT EXISTS `bis` (
`id_bis` int(11) NOT NULL,
  `id_terminal` int(11) NOT NULL,
  `nama_bis` varchar(100) NOT NULL,
  `plat_nomer` varchar(225) NOT NULL,
  `jumlah_bangku` int(11) NOT NULL,
  `kelas` enum('patas','ekonomi') NOT NULL,
  `jam_berangkat` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bis`
--

INSERT INTO `bis` (`id_bis`, `id_terminal`, `nama_bis`, `plat_nomer`, `jumlah_bangku`, `kelas`, `jam_berangkat`) VALUES
(3, 3, 'Sahabat1', 'B 1928 AF', 30, 'patas', '08.00'),
(4, 4, 'Sahabat 2', 'B 1928 AF', 40, 'patas', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE IF NOT EXISTS `konfigurasi` (
`id_konfigurasi` int(11) NOT NULL,
  `nama_website` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `icon` varchar(225) NOT NULL,
  `google_map` varchar(225) NOT NULL,
  `tentang` text NOT NULL,
  `metatext` varchar(225) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `telepone` varchar(225) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `nama_website`, `email`, `logo`, `icon`, `google_map`, `tentang`, `metatext`, `keywords`, `facebook`, `telepone`, `alamat`) VALUES
(1, 'sedot kode bus', 'nusofsedot@gmail.com', '', '', '', '<p>sdas</p>', 'dasdasdas', 'asddas', '', '2038402', ''),
(2, 'Test', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
`id_kontak` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subjek` varchar(225) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `subjek`, `isi`) VALUES
(1, 'indra', 'indrkmna@gmail.com', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
`id_kota` int(11) NOT NULL,
  `kd_kota` varchar(100) NOT NULL,
  `nama_kota` varchar(225) NOT NULL,
  `maps` varchar(225) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `kd_kota`, `nama_kota`, `maps`, `id_user`) VALUES
(6, 'DPK1', 'Depok', 'https://www.google.co.id/maps/place/Depok,+Depok+City,+West+Java/@-6.3878438,106.7477568,12z/data=!3m1!4b1!4m5!3m4!1s0x2e69ec0828bcde9f:0x301576d150524f0!8m2!3d-6.4024844!4d106.7942405', 0),
(7, '1231', 'bandung', 'awda', 0),
(8, 'F', 'bogor', 'https://www.google.co.id/maps/place/Bogor,+Jawa+Barat/@-6.545286,106.5338948,10z/data=!3m1!4b1!4m5!3m4!1s0x2e69c3e312798437:0x301576d14feb990!8m2!3d-6.5517758!4d106.6291304', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id_member` int(11) NOT NULL,
  `nama_depan` varchar(225) NOT NULL,
  `nama_belakang` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `telepone` varchar(225) NOT NULL,
  `avatar` varchar(225) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_depan`, `nama_belakang`, `username`, `email`, `password`, `alamat`, `telepone`, `avatar`, `ttl`, `tanggal_daftar`) VALUES
(6, 'sedot', 'kode1', 'awdawdawd', 'awdawdawd@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 'BOGOR', '23094820', '114847.jpg', '2034928', '2017-11-04 07:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
`id_bayar` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `status` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_bayar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `id_member`, `id_tiket`, `status`, `keterangan`, `tanggal_bayar`) VALUES
(4, 6, 5, 'lunas', 'awd', '2017-03-28 12:12:51'),
(5, 6, 5, 'lunas', 'adwda', '2017-03-30 09:18:33'),
(6, 6, 5, 'lunas', 'pl', '2017-11-03 14:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE IF NOT EXISTS `terminal` (
`id_terminal` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nama_terminal` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `berangkat` varchar(225) NOT NULL,
  `tujuan` varchar(225) NOT NULL,
  `berangkat_map` varchar(225) NOT NULL,
  `tujuan_map` varchar(225) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`id_terminal`, `id_kota`, `nama_terminal`, `gambar`, `berangkat`, `tujuan`, `berangkat_map`, `tujuan_map`, `id_user`) VALUES
(3, 6, 'Depok Lama', '', 'Depok Lama', 'Kp.Rambutan', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126881.52702126052!2d106.74775677781447!3d-6.38784381657223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec0828bcde9f%3A0x301576d150524f0!2sDepok%2', 'https://www.google.co.id/maps/place/Terminal+Kampung+Rambutan/@-6.3094794,106.8801153,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ed692b1f9a05:0xc7883789da6ffacc!8m2!3d-6.3094794!4d106.882304', 0),
(4, 6, 'Pocin', '', 'Pondok Cinta', 'Jakarta', 'https://www.google.co.id/maps/place/Depok,+Depok+City,+West+Java/@-6.3878438,106.7477568,12z/data=!3m1!4b1!4m5!3m4!1s0x2e69ec0828bcde9f:0x301576d150524f0!8m2!3d-6.4024844!4d106.7942405', 'https://www.google.co.id/maps/place/Terminal+Kampung+Rambutan/@-6.3094794,106.8801153,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ed692b1f9a05:0xc7883789da6ffacc!8m2!3d-6.3094794!4d106.882304', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE IF NOT EXISTS `tiket` (
`id_tiket` int(11) NOT NULL,
  `id_terminal` int(11) NOT NULL,
  `id_bis` int(11) NOT NULL,
  `kode_tiket` varchar(225) NOT NULL,
  `nama_tiket` varchar(225) NOT NULL,
  `harga_tiket` varchar(225) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_terminal`, `id_bis`, `kode_tiket`, `nama_tiket`, `harga_tiket`, `jumlah_tiket`, `keterangan`, `status`) VALUES
(5, 3, 3, 'A20482390482', 'Multi Trip', 'Rp.100.000,-', 60, 'Testing', 'publish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bis`
--
ALTER TABLE `bis`
 ADD PRIMARY KEY (`id_bis`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
 ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
 ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
 ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
 ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
 ADD PRIMARY KEY (`id_terminal`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
 ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bis`
--
ALTER TABLE `bis`
MODIFY `id_bis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
MODIFY `id_terminal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
