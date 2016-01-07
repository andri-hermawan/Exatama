-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2016 at 11:19 AM
-- Server version: 5.6.25-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_exatama`
--

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
`kode_blog` int(4) NOT NULL,
  `judul_blog` text,
  `deskripsi_blog` text,
  `limit_content` int(3) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `facebook_fans_page` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `g_plus` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `information` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`kode_blog`, `judul_blog`, `deskripsi_blog`, `limit_content`, `facebook`, `facebook_fans_page`, `twitter`, `g_plus`, `email`, `information`) VALUES
(1, 'exatamacard.com', 'Ini Deskripsinya', 3, 'https://www.facebook.com/andri.b.hermawan', 'https://www.facebook.com/Devlotech-168927536577637/?ref=hl', 'https://twitter.com/baduy121', 'https://plus.google.com/114802804318431660453', 'andri.hermawan.skom@gmail.com', '<p>Telp : 082113933140</p>\r\n\r\n<p>Prabu Residence Blok C no 2 03/05, Sawangan, Bedahan, Depok, 16519</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
`id_kat` int(2) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tgl_input_kat` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kat`, `kategori`, `tgl_input_kat`) VALUES
(4, 'Mesin Emboss', '2016-01-04 14:57:31'),
(5, 'Printer Kartu', '2016-01-04 14:57:40'),
(6, 'Scanner', '2016-01-04 14:58:08'),
(7, 'Printer Label', '2016-01-04 14:58:26'),
(8, 'Kartu', '2016-01-04 14:58:35'),
(9, 'Ribbon & Supply', '2016-01-04 14:58:47'),
(10, 'Aksesoris ID Card', '2016-01-04 14:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
`id_user` int(2) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `pass_user` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_user`, `nama_user`, `pass_user`, `nama`, `level`, `status`) VALUES
(1, 'admin', 'admin', 'Exatama Card', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_merk`
--

CREATE TABLE IF NOT EXISTS `tb_merk` (
`id_merk` int(2) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tgl_input_merk` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_merk`
--

INSERT INTO `tb_merk` (`id_merk`, `merk`, `tgl_input_merk`) VALUES
(1, 'HP', '2015-06-13 11:14:49'),
(2, 'Canon', '2015-06-13 14:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE IF NOT EXISTS `tb_produk` (
`id_produk` int(2) NOT NULL,
  `judul` varchar(220) NOT NULL,
  `harga` int(20) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `id_merk` int(2) NOT NULL,
  `id_kat` int(2) NOT NULL,
  `ket` text NOT NULL,
  `status` enum('publish','draft') NOT NULL,
  `counter` int(5) NOT NULL,
  `tgl_input_pro` datetime NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `judul`, `harga`, `jumlah`, `kondisi`, `id_merk`, `id_kat`, `ket`, `status`, `counter`, `tgl_input_pro`, `foto`) VALUES
(1, 'Baju Cewek', 6000009, '5', 'Baju Cewek', 2, 5, 'Barang bagus, mantap barang', 'publish', 0, '2015-06-13 13:48:35', 'blebeau.jpg'),
(2, 'Power Bank', 1200000, '10', 'Power Bank', 2, 4, 'Mantap lah pokoknya', 'publish', 0, '2015-06-13 15:10:57', 'banjar.jpg'),
(3, 'Celan Dalam', 1234555, '3', 'Celan Dalam', 1, 5, 'Hahahaha', 'publish', 2, '2015-06-13 15:11:38', 'ungu.jpg'),
(4, 'Sapu Tangan', 3000000, '4', 'Sapu Tangan', 1, 4, 'Bagus kok', 'publish', 1, '2015-06-13 15:12:16', 'ba4.jpg'),
(5, 'Tas Eigeer', 40000000, '3', 'Tas Eigeer', 2, 5, 'Bolong dikit', 'publish', 1, '2015-06-13 15:12:57', 'ba3.jpg'),
(6, 'iPhone 8', 2147483647, '1', 'iPhone 8', 1, 5, 'Ada akiknya looo', 'publish', 1, '2015-06-13 15:13:49', 'ba11.jpg'),
(7, 'HTC 5', 600000, '223', 'HTC 5', 1, 5, 'Batrai drop', 'publish', 0, '2015-06-13 15:14:23', 'ba2.jpg'),
(8, 'Tas Consina', 400000, '33', 'Tas Consina', 1, 5, 'Bolong banya, sering di pake naik gunung ini mah', 'publish', 2, '2015-06-13 15:15:16', 'ba1.jpg'),
(9, 'Helm GM', 453333330, '4', 'Helm GM', 1, 5, 'Banyak ni numpuk', 'publish', 2, '2015-06-13 15:16:10', 'ba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visitor`
--

CREATE TABLE IF NOT EXISTS `tb_visitor` (
`no` int(7) NOT NULL,
  `ip` varchar(40) DEFAULT NULL,
  `os` varchar(40) DEFAULT NULL,
  `browser` varchar(40) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_visitor`
--

INSERT INTO `tb_visitor` (`no`, `ip`, `os`, `browser`, `tanggal`) VALUES
(15, '::1', 'Unknown Windows OS', 'Chrome 43.0.2357.124', '2015-06-14 14:31:32'),
(16, '::1', 'Unknown Windows OS', 'Firefox 22.0', '2015-06-14 14:32:35'),
(17, '127.0.0.1', 'Linux', 'Chrome 44.0.2403.130', '2016-01-05 13:56:47'),
(18, '127.0.0.1', 'Linux', 'Chrome 44.0.2403.130', '2016-01-06 14:20:03'),
(19, '127.0.0.1', 'Linux', 'Chrome 44.0.2403.130', '2016-01-06 14:20:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
 ADD PRIMARY KEY (`kode_blog`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
 ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_merk`
--
ALTER TABLE `tb_merk`
 ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
 ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_visitor`
--
ALTER TABLE `tb_visitor`
 ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
MODIFY `kode_blog` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
MODIFY `id_kat` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_merk`
--
ALTER TABLE `tb_merk`
MODIFY `id_merk` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
MODIFY `id_produk` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_visitor`
--
ALTER TABLE `tb_visitor`
MODIFY `no` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
