-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2016 at 08:17 AM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_eoq`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `kd_admin` char(10) NOT NULL,
  `nm_lengkap` varchar(25) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `notlp` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`kd_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kd_admin`, `nm_lengkap`, `alamat`, `notlp`, `username`, `password`) VALUES
('01', 'afrima', 'Jl.Raya jhbjd', '08763473', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE IF NOT EXISTS `beli` (
  `kd_beli` char(10) NOT NULL,
  `tgl_beli` date NOT NULL,
  `kd_obat` char(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`kd_beli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`kd_beli`, `tgl_beli`, `kd_obat`, `jumlah`) VALUES
('12345', '2016-12-27', 'KB001', 2);

-- --------------------------------------------------------

--
-- Table structure for table `eoq`
--

CREATE TABLE IF NOT EXISTS `eoq` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_obat` char(10) NOT NULL,
  `k_tahun` int(11) NOT NULL,
  `b_simpan` int(11) NOT NULL,
  `b_pesan` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `eoq`
--

INSERT INTO `eoq` (`id`, `kd_obat`, `k_tahun`, `b_simpan`, `b_pesan`) VALUES
(1, 'KB001', 90000, 45000, 45000),
(2, 'KB001', 300, 200, 500);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `kd_obat` char(10) NOT NULL,
  `nm_obat` varchar(25) NOT NULL,
  `jenis_obat` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(5) NOT NULL,
  PRIMARY KEY (`kd_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kd_obat`, `nm_obat`, `jenis_obat`, `harga`, `stok`) VALUES
('KB001', 'Maksit', 'ASS', 5600, 10);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `nofaktur` char(10) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `kd_obat` char(10) NOT NULL,
  `jumlah_beli` int(5) NOT NULL,
  PRIMARY KEY (`nofaktur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`nofaktur`, `tgl_faktur`, `kd_obat`, `jumlah_beli`) VALUES
('NF001', '2016-10-29', 'KB001', 5);
