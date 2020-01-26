-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2020 at 01:59 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test-pu2`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(200) DEFAULT NULL,
  `menu_icon` varchar(100) DEFAULT NULL,
  `menu_info` varchar(1000) DEFAULT NULL,
  `menu_parent_id` int(11) DEFAULT NULL,
  `menu_link` varchar(200) DEFAULT NULL,
  `menu_order` int(11) DEFAULT NULL,
  `enabled` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_name`, `menu_icon`, `menu_info`, `menu_parent_id`, `menu_link`, `menu_order`, `enabled`) VALUES
(1, 'Instansi', 'fa fa-home', 'menus', 0, '', 0, 'Y'),
(2, 'Utility', 'fa fa-bars', 'Menus', 1, 'Menus', 1, 'Y'),
(3, 'Unit Pengguna', '', 'C_unit', 1, 'C_unit', 2, 'Y'),
(4, 'Berkas Anggaran', 'fa fa-file', 'C_subdit_1', 0, '', 4, 'N'),
(5, 'Tahap Verifikasi', '', 'C_verifikasi', 4, 'C_verifikasi', 5, 'Y'),
(6, 'Tahap Asisten PPK', '', 'Asisten PPK', 4, 'C_asisten_ppk', 6, 'Y'),
(7, 'Anggaran Baru', 'fa fa-pencil-square', 'C_subdit', 0, 'C_subdit', 3, 'Y'),
(8, 'Tahap PPK', '', 'PPK', 4, 'C_ppk', 7, 'Y'),
(10, 'Tahap PPSPM', '', 'PPSPM', 4, 'C_ppspm', 8, 'Y'),
(11, 'Tahap Bendahara', '', 'C_bendahara', 4, 'C_bendahara', 9, 'Y'),
(12, 'Monitoring Berkas', 'fa fa-laptop', 'C_visit', 0, 'C_visit', 15, 'Y'),
(13, 'PPK', 'fa fa-book', 'C_ppk', 0, 'C_ppk', 12, 'Y'),
(14, 'Asisten PPK', 'fa fa-book', 'C_asisten_ppk', 0, 'C_asisten_ppk', 11, 'Y'),
(15, 'Verifikasi', 'fa fa-book', 'C_verifikasi', 0, 'C_verifikasi', 10, 'Y'),
(16, 'PPSPM', 'fa fa-book', 'C_ppspm', 0, 'C_ppspm', 13, 'Y'),
(17, 'Bendahara', 'fa fa-book', 'C_bendahara', 0, 'C_bendahara', 14, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkas`
--

CREATE TABLE `tbl_berkas` (
  `kd_pembebanan` int(100) NOT NULL,
  `untuk_pembayaran` varchar(100) NOT NULL,
  `subdit` int(11) NOT NULL,
  `tggl` varchar(30) NOT NULL,
  `id_penerima` varchar(30) NOT NULL,
  `id_status` int(30) NOT NULL DEFAULT '1',
  `jenisanggaran` varchar(100) NOT NULL,
  `id_kelengkapan` int(11) NOT NULL,
  `catatan` varchar(300) NOT NULL,
  `idh1` int(11) NOT NULL,
  `idh2` int(11) NOT NULL,
  `idh3` int(11) NOT NULL,
  `idh4` int(11) NOT NULL,
  `idh5` int(11) NOT NULL,
  `idh6` int(11) NOT NULL,
  `idh7` int(11) NOT NULL,
  `idh8` int(11) NOT NULL,
  `idh9` int(11) NOT NULL,
  `idh10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berkas`
--

INSERT INTO `tbl_berkas` (`kd_pembebanan`, `untuk_pembayaran`, `subdit`, `tggl`, `id_penerima`, `id_status`, `jenisanggaran`, `id_kelengkapan`, `catatan`, `idh1`, `idh2`, `idh3`, `idh4`, `idh5`, `idh6`, `idh7`, `idh8`, `idh9`, `idh10`) VALUES
(2, 'Anggaran Belanja ATK', 1, '2019-11-12', '', 6, '112', 99, '', 1, 2, 3, 4, 0, 0, 0, 0, 0, 0),
(888, 'Outbone', 1, '2019-11-20', '', 6, '110', 99, '', 1, 2, 3, 4, 0, 0, 0, 0, 0, 0),
(12312114, 'Rapat Koordinator Anggaran 2020', 1, '2019-12-25', '3', 4, '', 1, '', 1, 2, 3, 4, 0, 0, 0, 0, 0, 0),
(2147483647, 'Pembayaran kegiatan planning assurance', 1, '2019-11-20', '1', 1, '55', 1, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_date`
--

CREATE TABLE `tbl_date` (
  `id_date` int(11) NOT NULL,
  `kd_pembebanan` varchar(35) DEFAULT NULL,
  `r_date1` varchar(30) NOT NULL,
  `n_date1` varchar(30) NOT NULL,
  `r_date2` varchar(30) NOT NULL,
  `n_date2` varchar(30) NOT NULL,
  `r_date3` varchar(30) NOT NULL,
  `n_date3` varchar(30) NOT NULL,
  `r_date4` varchar(30) NOT NULL,
  `n_date4` varchar(30) NOT NULL,
  `r_date5` varchar(30) NOT NULL,
  `n_date5` varchar(30) NOT NULL,
  `r_date6` varchar(30) NOT NULL,
  `n_date6` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_date`
--

INSERT INTO `tbl_date` (`id_date`, `kd_pembebanan`, `r_date1`, `n_date1`, `r_date2`, `n_date2`, `r_date3`, `n_date3`, `r_date4`, `n_date4`, `r_date5`, `n_date5`, `r_date6`, `n_date6`) VALUES
(7, '542356', '2019-11-05', '2019-11-08', '2019-11-08', '2019-11-08', '2019-11-08', '', '', '', '', '', '', ''),
(8, '2542346', '2019-11-09', '', '', '', '', '', '', '', '', '', '', ''),
(9, '32142', '2019-11-05', '2019-11-08', '2019-11-08', '2019-11-08', '2019-11-08', '', '', '', '', '', '', ''),
(10, '5213`112', '2019-11-30', '', '', '', '', '', '', '', '', '', '', ''),
(11, '23454675', '2019-11-08', '2019-11-08', '2019-11-08', '2019-11-08', '2019-11-08', '', '', '', '', '', '', ''),
(12, '7654327', '2019-11-16', '2019-11-16', '2019-11-16', '2019-11-16', '2019-11-16', '', '', '', '', '', '', ''),
(13, '2', '2019-11-12', '2019-11-19', '2019-11-19', '2019-11-19', '2019-11-19', '', '', '', '', '', '', '2019-11-20'),
(14, '1243532', '2019-11-19', '2019-11-19', '2019-11-19', '2019-11-19', '2019-11-19', '', '', '', '', '', '', '2019-11-20'),
(15, '09058239058', '2019-11-20', '', '', '', '', '', '', '', '', '', '', ''),
(16, '89090', '2019-11-21', '2019-11-20', '2019-11-20', '2019-11-20', '2019-11-20', '', '', '', '', '', '', '2019-11-20'),
(17, '888', '2019-11-20', '2019-11-23', '2019-11-23', '2019-12-26', '2019-12-26', '', '', '', '', '', '', '2019-12-26'),
(18, '12312114', '2019-12-25', '2019-12-25', '2019-12-25', '2019-12-26', '2019-12-26', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kendali`
--

CREATE TABLE `tbl_kendali` (
  `kd_pembebanan` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `jenisanggaran` int(11) NOT NULL,
  `kepada_alamat` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `untuk_pembayaran` varchar(100) NOT NULL,
  `jumlah_tagihan` varchar(100) NOT NULL,
  `ppn` varchar(100) NOT NULL,
  `pph` varchar(100) NOT NULL,
  `jumlah_potongan` varchar(100) NOT NULL,
  `net` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kendali`
--

INSERT INTO `tbl_kendali` (`kd_pembebanan`, `jenisanggaran`, `kepada_alamat`, `npwp`, `untuk_pembayaran`, `jumlah_tagihan`, `ppn`, `pph`, `jumlah_potongan`, `net`) VALUES
('09058239058', 55, 'Solo', '9', 'Pembayaran kegiatan planning assurance', '9000000', '8', '8', '8', '8'),
('12312114', 56, 'jakarta', '0094582912', 'Rapat Koordinator Anggaran 2020', '100.000.000', '10.000.000', '-', '9000000', '-'),
('2', 56, 'Bandung', '90000', 'Anggaran Belanja ATK', '1000000', '900000', '8', '', '8'),
('5213`112', 55, 'Brebes', '078654657898', 'Rapat Pimpinan', '8', '8', '8', '8000000', '8'),
('888', 55, '8', '8', 'Outbone', '9', '9', '9', '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status1`
--

CREATE TABLE `tbl_status1` (
  `kd_pembebanan` int(100) NOT NULL,
  `ps1` int(11) NOT NULL,
  `ps2` int(11) NOT NULL,
  `ps3` int(11) NOT NULL,
  `ps4` int(11) NOT NULL,
  `ps5` int(11) NOT NULL,
  `ps6` int(11) NOT NULL,
  `ps7` int(11) NOT NULL,
  `ps8` int(11) NOT NULL,
  `ps9` int(11) NOT NULL,
  `ps10` int(11) NOT NULL,
  `ps11` int(11) NOT NULL,
  `ps12` int(11) NOT NULL,
  `ps13` int(11) NOT NULL,
  `ps14` int(11) NOT NULL,
  `ps15` int(11) NOT NULL,
  `ps16` int(11) NOT NULL,
  `ps17` int(11) NOT NULL,
  `ps18` int(11) NOT NULL,
  `ps19` int(11) NOT NULL,
  `ps20` int(11) NOT NULL,
  `ps21` int(11) NOT NULL,
  `ps22` int(11) NOT NULL,
  `ps23` int(11) NOT NULL,
  `ps24` int(11) NOT NULL,
  `ps25` int(11) NOT NULL,
  `ps26` int(11) NOT NULL,
  `ps27` int(11) NOT NULL,
  `ps28` int(11) NOT NULL,
  `ps29` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status1`
--

INSERT INTO `tbl_status1` (`kd_pembebanan`, `ps1`, `ps2`, `ps3`, `ps4`, `ps5`, `ps6`, `ps7`, `ps8`, `ps9`, `ps10`, `ps11`, `ps12`, `ps13`, `ps14`, `ps15`, `ps16`, `ps17`, `ps18`, `ps19`, `ps20`, `ps21`, `ps22`, `ps23`, `ps24`, `ps25`, `ps26`, `ps27`, `ps28`, `ps29`) VALUES
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(888, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12312114, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2147483647, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status2`
--

CREATE TABLE `tbl_status2` (
  `id_srt2` int(100) NOT NULL,
  `ps1` int(11) NOT NULL,
  `ps2` int(11) NOT NULL,
  `ps3` int(11) NOT NULL,
  `ps4` int(11) NOT NULL,
  `ps5` int(11) NOT NULL,
  `ps6` int(11) NOT NULL,
  `ps7` int(11) NOT NULL,
  `ps8` int(11) NOT NULL,
  `ps9` int(11) NOT NULL,
  `ps10` int(11) NOT NULL,
  `ps11` int(11) NOT NULL,
  `ps12` int(11) NOT NULL,
  `ps13` int(11) NOT NULL,
  `ps14` int(11) NOT NULL,
  `ps15` int(11) NOT NULL,
  `ps16` int(11) NOT NULL,
  `ps17` int(11) NOT NULL,
  `ps18` int(11) NOT NULL,
  `ps19` int(11) NOT NULL,
  `ps20` int(11) NOT NULL,
  `ps21` int(11) NOT NULL,
  `ps22` int(11) NOT NULL,
  `ps23` int(11) NOT NULL,
  `ps24` int(11) NOT NULL,
  `ps25` int(11) NOT NULL,
  `ps26` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_status2`
--

INSERT INTO `tbl_status2` (`id_srt2`, `ps1`, `ps2`, `ps3`, `ps4`, `ps5`, `ps6`, `ps7`, `ps8`, `ps9`, `ps10`, `ps11`, `ps12`, `ps13`, `ps14`, `ps15`, `ps16`, `ps17`, `ps18`, `ps19`, `ps20`, `ps21`, `ps22`, `ps23`, `ps24`, `ps25`, `ps26`) VALUES
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(888, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12312114, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2147483647, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status3`
--

CREATE TABLE `tbl_status3` (
  `kd_pembebanan` int(100) NOT NULL,
  `ps1` int(11) NOT NULL,
  `ps2` int(11) NOT NULL,
  `ps3` int(11) NOT NULL,
  `ps4` int(11) NOT NULL,
  `ps5` int(11) NOT NULL,
  `ps6` int(11) NOT NULL,
  `ps7` int(11) NOT NULL,
  `ps8` int(11) NOT NULL,
  `ps9` int(11) NOT NULL,
  `ps10` int(11) NOT NULL,
  `ps11` int(11) NOT NULL,
  `ps12` int(11) NOT NULL,
  `ps13` int(11) NOT NULL,
  `ps14` int(11) NOT NULL,
  `ps15` int(11) NOT NULL,
  `ps16` int(11) NOT NULL,
  `ps17` int(11) NOT NULL,
  `ps18` int(11) NOT NULL,
  `ps19` int(11) NOT NULL,
  `ps20` int(11) NOT NULL,
  `ps21` int(11) NOT NULL,
  `ps22` int(11) NOT NULL,
  `ps23` int(11) NOT NULL,
  `ps24` int(11) NOT NULL,
  `ps25` int(11) NOT NULL,
  `ps26` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_status3`
--

INSERT INTO `tbl_status3` (`kd_pembebanan`, `ps1`, `ps2`, `ps3`, `ps4`, `ps5`, `ps6`, `ps7`, `ps8`, `ps9`, `ps10`, `ps11`, `ps12`, `ps13`, `ps14`, `ps15`, `ps16`, `ps17`, `ps18`, `ps19`, `ps20`, `ps21`, `ps22`, `ps23`, `ps24`, `ps25`, `ps26`) VALUES
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(888, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12312114, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2147483647, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status4`
--

CREATE TABLE `tbl_status4` (
  `kd_pembebanan` int(100) NOT NULL,
  `ps1` int(11) NOT NULL,
  `ps2` int(11) NOT NULL,
  `ps3` int(11) NOT NULL,
  `ps4` int(11) NOT NULL,
  `ps5` int(11) NOT NULL,
  `ps6` int(11) NOT NULL,
  `ps7` int(11) NOT NULL,
  `ps8` int(11) NOT NULL,
  `ps9` int(11) NOT NULL,
  `ps10` int(11) NOT NULL,
  `ps11` int(11) NOT NULL,
  `ps12` int(11) NOT NULL,
  `ps13` int(11) NOT NULL,
  `ps14` int(11) NOT NULL,
  `ps15` int(11) NOT NULL,
  `ps16` int(11) NOT NULL,
  `ps17` int(11) NOT NULL,
  `ps18` int(11) NOT NULL,
  `ps19` int(11) NOT NULL,
  `ps20` int(11) NOT NULL,
  `ps21` int(11) NOT NULL,
  `ps22` int(11) NOT NULL,
  `ps23` int(11) NOT NULL,
  `ps24` int(11) NOT NULL,
  `ps25` int(11) NOT NULL,
  `ps26` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_status4`
--

INSERT INTO `tbl_status4` (`kd_pembebanan`, `ps1`, `ps2`, `ps3`, `ps4`, `ps5`, `ps6`, `ps7`, `ps8`, `ps9`, `ps10`, `ps11`, `ps12`, `ps13`, `ps14`, `ps15`, `ps16`, `ps17`, `ps18`, `ps19`, `ps20`, `ps21`, `ps22`, `ps23`, `ps24`, `ps25`, `ps26`) VALUES
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(888, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12312114, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2147483647, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status5`
--

CREATE TABLE `tbl_status5` (
  `kd_pembebanan` int(100) NOT NULL,
  `ps1` int(11) NOT NULL,
  `ps2` int(11) NOT NULL,
  `ps3` int(11) NOT NULL,
  `ps4` int(11) NOT NULL,
  `ps5` int(11) NOT NULL,
  `ps6` int(11) NOT NULL,
  `ps7` int(11) NOT NULL,
  `ps8` int(11) NOT NULL,
  `ps9` int(11) NOT NULL,
  `ps10` int(11) NOT NULL,
  `ps11` int(11) NOT NULL,
  `ps12` int(11) NOT NULL,
  `ps13` int(11) NOT NULL,
  `ps14` int(11) NOT NULL,
  `ps15` int(11) NOT NULL,
  `ps16` int(11) NOT NULL,
  `ps17` int(11) NOT NULL,
  `ps18` int(11) NOT NULL,
  `ps19` int(11) NOT NULL,
  `ps20` int(11) NOT NULL,
  `ps21` int(11) NOT NULL,
  `ps22` int(11) NOT NULL,
  `ps23` int(11) NOT NULL,
  `ps24` int(11) NOT NULL,
  `ps25` int(11) NOT NULL,
  `ps26` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_status5`
--

INSERT INTO `tbl_status5` (`kd_pembebanan`, `ps1`, `ps2`, `ps3`, `ps4`, `ps5`, `ps6`, `ps7`, `ps8`, `ps9`, `ps10`, `ps11`, `ps12`, `ps13`, `ps14`, `ps15`, `ps16`, `ps17`, `ps18`, `ps19`, `ps20`, `ps21`, `ps22`, `ps23`, `ps24`, `ps25`, `ps26`) VALUES
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(888, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12312114, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2147483647, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status6`
--

CREATE TABLE `tbl_status6` (
  `kd_pembebanan` int(100) NOT NULL,
  `ps1` int(11) NOT NULL,
  `ps2` int(11) NOT NULL,
  `ps3` int(11) NOT NULL,
  `ps4` int(11) NOT NULL,
  `ps5` int(11) NOT NULL,
  `ps6` int(11) NOT NULL,
  `ps7` int(11) NOT NULL,
  `ps8` int(11) NOT NULL,
  `ps9` int(11) NOT NULL,
  `ps10` int(11) NOT NULL,
  `ps11` int(11) NOT NULL,
  `ps12` int(11) NOT NULL,
  `ps13` int(11) NOT NULL,
  `ps14` int(11) NOT NULL,
  `ps15` int(11) NOT NULL,
  `ps16` int(11) NOT NULL,
  `ps17` int(11) NOT NULL,
  `ps18` int(11) NOT NULL,
  `ps19` int(11) NOT NULL,
  `ps20` int(11) NOT NULL,
  `ps21` int(11) NOT NULL,
  `ps22` int(11) NOT NULL,
  `ps23` int(11) NOT NULL,
  `ps24` int(11) NOT NULL,
  `ps25` int(11) NOT NULL,
  `ps26` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_status6`
--

INSERT INTO `tbl_status6` (`kd_pembebanan`, `ps1`, `ps2`, `ps3`, `ps4`, `ps5`, `ps6`, `ps7`, `ps8`, `ps9`, `ps10`, `ps11`, `ps12`, `ps13`, `ps14`, `ps15`, `ps16`, `ps17`, `ps18`, `ps19`, `ps20`, `ps21`, `ps22`, `ps23`, `ps24`, `ps25`, `ps26`) VALUES
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(888, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12312114, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2147483647, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tusergroup`
--

CREATE TABLE `tusergroup` (
  `autono` int(11) NOT NULL,
  `group_name` varchar(100) DEFAULT NULL,
  `description` text,
  `ordering` int(11) DEFAULT NULL,
  `enabled` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tusergroup`
--

INSERT INTO `tusergroup` (`autono`, `group_name`, `description`, `ordering`, `enabled`) VALUES
(1, 'Administrator', 'Administrator', 1, 'N'),
(2, 'verifikasi', 'verifikasi', 5, 'Y'),
(3, 'asistenppk', 'asisten ppk', 3, 'Y'),
(4, 'PPK', 'PPK', 4, 'Y'),
(5, 'PPSPM', 'PPSPM', 5, 'Y'),
(6, 'Bendahara', 'Bendahara', 6, 'Y'),
(7, 'spm/spp', 'spm/spp', 7, 'Y'),
(8, 'subdit', 'subdit', 8, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tusermenu`
--

CREATE TABLE `tusermenu` (
  `usermenu_id` int(11) NOT NULL,
  `grup_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `menu_id` int(11) NOT NULL,
  `permission_r` char(1) NOT NULL DEFAULT '0',
  `permission_w` char(1) NOT NULL DEFAULT '0',
  `permission_d` char(1) NOT NULL DEFAULT '0',
  `permission_a` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tusermenu`
--

INSERT INTO `tusermenu` (`usermenu_id`, `grup_id`, `user_id`, `menu_id`, `permission_r`, `permission_w`, `permission_d`, `permission_a`) VALUES
(1, 4, 0, 1, '1', '1', '1', '1'),
(2, 4, 0, 7, '0', '0', '0', '0'),
(3, 4, 0, 12, '1', '0', '0', '0'),
(4, 4, 0, 2, '1', '0', '0', '0'),
(5, 4, 0, 13, '1', '0', '0', '0'),
(6, 3, 0, 14, '1', '0', '0', '0'),
(7, 3, 0, 1, '1', '1', '1', '1'),
(8, 3, 0, 12, '1', '0', '0', '0'),
(9, 2, 0, 12, '1', '0', '0', '0'),
(10, 2, 0, 1, '1', '1', '1', '1'),
(11, 2, 0, 15, '1', '0', '0', '0'),
(12, 5, 0, 16, '1', '0', '0', '0'),
(13, 5, 0, 1, '1', '1', '1', '0'),
(14, 5, 0, 12, '1', '0', '0', '0'),
(15, 6, 0, 17, '1', '0', '0', '0'),
(16, 6, 0, 1, '1', '0', '0', '0'),
(17, 6, 0, 12, '1', '0', '0', '0'),
(18, 6, 0, 12, '1', '0', '0', '0'),
(19, 8, 0, 7, '1', '0', '0', '0'),
(20, 8, 0, 12, '1', '0', '0', '0'),
(21, 8, 0, 1, '1', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(255) DEFAULT NULL,
  `unit_direktorat` text,
  `unit_parent` int(11) DEFAULT '0',
  `unit_label` enum('y','n') DEFAULT 'y',
  `createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_name`, `unit_direktorat`, `unit_parent`, `unit_label`, `createddate`) VALUES
(1, 'Sub Direktorat Kerjasama', 'Direktorat Kerjasama dan Pemberdayaan', 0, 'y', '2019-08-21 03:23:23'),
(2, 'Sub Direktorat Tata Usaha', 'Direktorat Kerjasama dan Pemberdayaan', 0, 'y', '2019-08-21 03:23:23'),
(3, 'Sub Direktorat Wilayah I', 'Direktorat Kerjasama dan Pemberdayaan', 0, 'y', '2019-08-21 03:23:23'),
(4, 'Sub Direktorat Wilayah II', 'Direktorat Kerjasama dan Pemberdayaan', 0, 'y', '2019-08-21 03:23:23'),
(5, 'Sub Direktorat Wilayah III', 'Direktorat Kerjasama dan Pemberdayaan', 0, 'y', '2019-08-21 03:23:23'),
(6, 'Satuan Kerja (Satker)', 'Direktorat Kerjasama dan Pemberdayaan', 2, 'y', '2019-10-30 13:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_fullname` varchar(255) DEFAULT NULL,
  `user_password` varchar(32) DEFAULT NULL,
  `role_id` varchar(100) DEFAULT NULL,
  `unit_id` varchar(15) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `profpict` varchar(100) DEFAULT 'M.jpg',
  `gender` varchar(20) DEFAULT NULL,
  `createddate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `notelp` varchar(20) DEFAULT NULL,
  `alamat` text,
  `email` varchar(100) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `pekerjaan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_fullname`, `user_password`, `role_id`, `unit_id`, `active`, `profpict`, `gender`, `createddate`, `notelp`, `alamat`, `email`, `created_id`, `pekerjaan`) VALUES
(1, 'admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', '1', '0', 1, '20191102_3eresha-logo.jpg', 'Laki-Laki', '2019-02-27 13:59:49', '', 'Jalan Duren Sari Kota Depok', 'asa', 1, 'asa'),
(77, 'asistenppk', 'Asisten PPK', 'c0ab01c9623e008d3e1c5fec37e703a2', '3', '6', 1, '20191226_49img20190928wa0034.jpeg', 'Laki-Laki', '2019-11-02 13:43:06', '08755667689', 'Jakarta', 'andihw11@gmail.com', 1, 'staf'),
(78, 'ppk123', 'Pejabat PPK', '55b47f79c5209d908269a13a6cdc4711', '4', '6', 1, '20191103_34img_20190331_134837.jpg', 'Laki-Laki', '2019-11-03 01:40:35', '08572149000', 'Jakarta', 'ppk@gmail.com', 1, 'PNS'),
(79, 'userwil1', 'Admin wilayah 1', '9341a3209cedf34b02114de2e285c909', '8', '3', 1, 'M.jpg', 'Laki-Laki', '2019-11-03 05:34:27', '0896750000', 'Jakarta', 'aku@gmail.com', 1, 'PNS'),
(80, 'verifikasi123', 'Muhamad Iqbal', 'ab7fdd5b2cadf3a004afa8bd88ba8b15', '2', '6', 1, '20191116_10ayam-cabe-ijo-2.jpg', 'Perempuan', '2019-11-04 03:42:28', '08572149000', 'Jakarta', 'aku@gmail.com', 1, 'administrasi'),
(81, 'ppspm123', 'Aisyah', 'a0f6bc50f07001f06a4b349ff2f98c32', '5', '6', 1, 'M.jpg', 'Perempuan', '2019-11-04 04:22:50', '08572149000', 'Jakarta', 'aku@gmail.com', 1, 'Staf Administrasi'),
(82, 'bendahara123', 'Reni Anjani', '62f7dec74b78ba0398e6a9f317f55126', '6', '6', 1, '20200125_96img_20191006_061347.jpg', 'Perempuan', '2019-11-04 04:31:20', '08572149000', 'Jakarta', 'aku@gmail.com', 1, 'PNS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`kd_pembebanan`);

--
-- Indexes for table `tbl_date`
--
ALTER TABLE `tbl_date`
  ADD PRIMARY KEY (`id_date`);

--
-- Indexes for table `tbl_kendali`
--
ALTER TABLE `tbl_kendali`
  ADD PRIMARY KEY (`kd_pembebanan`);

--
-- Indexes for table `tbl_status1`
--
ALTER TABLE `tbl_status1`
  ADD PRIMARY KEY (`kd_pembebanan`);

--
-- Indexes for table `tbl_status2`
--
ALTER TABLE `tbl_status2`
  ADD PRIMARY KEY (`id_srt2`);

--
-- Indexes for table `tbl_status3`
--
ALTER TABLE `tbl_status3`
  ADD PRIMARY KEY (`kd_pembebanan`);

--
-- Indexes for table `tbl_status4`
--
ALTER TABLE `tbl_status4`
  ADD PRIMARY KEY (`kd_pembebanan`);

--
-- Indexes for table `tbl_status5`
--
ALTER TABLE `tbl_status5`
  ADD PRIMARY KEY (`kd_pembebanan`);

--
-- Indexes for table `tbl_status6`
--
ALTER TABLE `tbl_status6`
  ADD PRIMARY KEY (`kd_pembebanan`);

--
-- Indexes for table `tusergroup`
--
ALTER TABLE `tusergroup`
  ADD PRIMARY KEY (`autono`);

--
-- Indexes for table `tusermenu`
--
ALTER TABLE `tusermenu`
  ADD PRIMARY KEY (`usermenu_id`),
  ADD KEY `umgrup_fkey` (`grup_id`),
  ADD KEY `ummenu_fkey` (`menu_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `kd_pembebanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tbl_date`
--
ALTER TABLE `tbl_date`
  MODIFY `id_date` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_status1`
--
ALTER TABLE `tbl_status1`
  MODIFY `kd_pembebanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tbl_status2`
--
ALTER TABLE `tbl_status2`
  MODIFY `id_srt2` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tbl_status3`
--
ALTER TABLE `tbl_status3`
  MODIFY `kd_pembebanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tbl_status4`
--
ALTER TABLE `tbl_status4`
  MODIFY `kd_pembebanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tbl_status5`
--
ALTER TABLE `tbl_status5`
  MODIFY `kd_pembebanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tbl_status6`
--
ALTER TABLE `tbl_status6`
  MODIFY `kd_pembebanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tusergroup`
--
ALTER TABLE `tusergroup`
  MODIFY `autono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tusermenu`
--
ALTER TABLE `tusermenu`
  MODIFY `usermenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tusermenu`
--
ALTER TABLE `tusermenu`
  ADD CONSTRAINT `umgrup_fkey` FOREIGN KEY (`grup_id`) REFERENCES `tusergroup` (`autono`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ummenu_fkey` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
