-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2013 at 05:00 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_admin`, `username`, `password`) VALUES
(1, 'admins', 'admins');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `ID_barang` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` int(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `keterangan` longtext NOT NULL,
  PRIMARY KEY (`ID_barang`),
  KEY `jenis` (`jenis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_barang`, `jenis`, `waktu`, `status`, `keterangan`) VALUES
(31, 8, '2013-06-16 10:55:40', 2, '<p>warna pink merk vaio</p>\r\n'),
(32, 1, '2013-06-16 12:00:00', 1, '<p>Merk Alto</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `ID_detail` int(11) NOT NULL AUTO_INCREMENT,
  `no_subjek` int(11) NOT NULL,
  `no_barang` int(11) NOT NULL,
  `no_lokasi` int(11) NOT NULL,
  PRIMARY KEY (`ID_detail`),
  KEY `ID_pengilang` (`no_subjek`),
  KEY `ID_brg_ilang` (`no_barang`),
  KEY `ID_lokasi` (`no_lokasi`),
  KEY `ID_subjek` (`no_subjek`),
  KEY `ID_barang` (`no_barang`),
  KEY `ID_lokasi_2` (`no_lokasi`),
  KEY `no_subjek` (`no_subjek`),
  KEY `no_barang` (`no_barang`),
  KEY `no_lokasi` (`no_lokasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`ID_detail`, `no_subjek`, `no_barang`, `no_lokasi`) VALUES
(22, 38, 31, 3),
(23, 39, 32, 2);

-- --------------------------------------------------------

--
-- Table structure for table `finish`
--

CREATE TABLE IF NOT EXISTS `finish` (
  `ID_finish` int(11) NOT NULL AUTO_INCREMENT,
  `pelapor` int(11) NOT NULL,
  `terlapor` int(11) NOT NULL,
  PRIMARY KEY (`ID_finish`),
  KEY `pelapor` (`pelapor`),
  KEY `terlapor` (`terlapor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `finish`
--

INSERT INTO `finish` (`ID_finish`, `pelapor`, `terlapor`) VALUES
(9, 22, 40);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `ID_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID_kategori`, `jenis`) VALUES
(1, 'tas ransel'),
(2, 'baju kaca'),
(3, 'jam tangan'),
(5, 'helm motor'),
(6, 'headset laptop'),
(7, 'notebooks'),
(8, 'laptop'),
(9, 'jam kaca'),
(10, 'cool pad'),
(12, 'remote proyektor');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `ID_lokasi` int(11) NOT NULL AUTO_INCREMENT,
  `lat` varchar(30) NOT NULL,
  `att` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_lokasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`ID_lokasi`, `lat`, `att`, `nama`) VALUES
(1, '-7.956071325935928', '112.61624937548049', 'Tempat Nongkrong Poltek'),
(2, '-7.952588553137637', '112.61437358993533', 'Bundaran UB'),
(3, '-7.9529004333752615', '112.6138858312654', 'Perpustakaan'),
(4, '-7.952711251305582', '112.612523265047', 'Kantin FIB'),
(5, '-7.955847613302229', '112.61569288649082', 'Rektorat UB'),
(6, '-7.95232047880059', '112.61304180968284', 'Griya Brawijaya'),
(7, '-7.952748199951896', '112.61190519129752', 'Kantin PTIIK'),
(8, '-7.955864643779427', '112.61560968832589', 'Hotel UB'),
(9, '-7.955854682306668', '112.61561035887814', 'jalan veteran');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `ID_msg` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` longtext NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`ID_msg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`ID_msg`, `judul`, `nama`, `email`, `isi`, `waktu`) VALUES
(53, 'Kehilangan', 'Jaimie Scott', 'jaimiemie@gmail.com', 'Hilang laptop', '2013-06-14 03:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE IF NOT EXISTS `subjek` (
  `ID_subjek` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `RT` varchar(50) NOT NULL,
  `RW` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `no_kontak` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`ID_subjek`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `subjek`
--

INSERT INTO `subjek` (`ID_subjek`, `nama`, `no_ktp`, `alamat`, `RT`, `RW`, `kelurahan`, `kecamatan`, `jenis_kelamin`, `pekerjaan`, `no_kontak`, `status`) VALUES
(38, 'Jaimie Scott', '357111000888', 'Jl. Bantaran 10D', '2', '5', 'Pulosari', 'Puloasri', 'P', 'Dosen', '0341341341', 0),
(39, 'Angela Lynch', '359898989898', 'Jl. Kedawung 10X', '4', '7', 'Tulusrejo', 'Lowokwaru', 'P', 'Staff', '0878787878', 0),
(40, 'Jason DeRulo', '3333344444444', 'Jl Malang Utara', '3', '8', 'kedungkandang', 'karanglo', 'L', 'Mahasiswa', '03413413419', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `kategori` (`ID_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`no_subjek`) REFERENCES `subjek` (`ID_subjek`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_ibfk_2` FOREIGN KEY (`no_barang`) REFERENCES `barang` (`ID_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_ibfk_3` FOREIGN KEY (`no_lokasi`) REFERENCES `lokasi` (`ID_lokasi`);

--
-- Constraints for table `finish`
--
ALTER TABLE `finish`
  ADD CONSTRAINT `finish_ibfk_2` FOREIGN KEY (`terlapor`) REFERENCES `subjek` (`ID_subjek`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `finish_ibfk_4` FOREIGN KEY (`pelapor`) REFERENCES `detail` (`ID_detail`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
