-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 05:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapromo`
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
(1, 'Tabel Referensi', 'fa fa-home', 'menus', 0, '', 1, 'Y'),
(4, 'Utility', 'fa fa-home', 'utility', 0, 'javascript:;', 4, 'N'),
(21, 'Tabel Unit', '', 'unit', 1, 'unit', 1, 'Y'),
(29, 'Data Promo', 'fa fa-users', 'kelas1', 0, '', 5, 'Y'),
(30, 'Data Promo', 'fa fa-users', 'data_promo', 29, 'Data_promo', 5, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `image`, `description`) VALUES
(5, '123', 2000, '5.png', 'asa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promo`
--

CREATE TABLE `tbl_promo` (
  `idpromo` int(11) NOT NULL,
  `ket` varchar(400) NOT NULL,
  `gender` enum('P','W') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `kd_agama` varchar(2) NOT NULL,
  `foto` text NOT NULL,
  `id_rombel` int(11) NOT NULL,
  `tggl` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_promo`
--

INSERT INTO `tbl_promo` (`idpromo`, `ket`, `gender`, `tanggal_lahir`, `tempat_lahir`, `kd_agama`, `foto`, `id_rombel`, `tggl`) VALUES
(12456847, 'asas', '', '0000-00-00', '', '', '', 0, ''),
(12456848, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456851, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456853, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456854, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456856, '', '', '0000-00-00', '', '', '', 0, ''),
(12456862, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456863, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456864, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456866, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456867, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456868, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456869, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456870, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456871, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456872, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456873, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456874, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456875, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456876, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456877, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456878, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456879, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456880, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456881, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456882, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456883, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456884, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456885, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456886, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456887, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456888, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456889, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456890, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456891, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456892, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456893, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456894, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456895, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456896, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456897, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456898, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456899, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456900, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456901, '', 'P', '0000-00-00', '', '', '', 0, ''),
(12456902, '', 'P', '0000-00-00', '', '', '', 0, '');

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
(1, 'Administrator', '', 1, 'Y'),
(15, 'Pelanggan', 'Pelnaggan', 4, 'Y');

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
(189, 15, 0, 1, '0', '0', '0', '0'),
(190, 15, 0, 21, '0', '0', '0', '0'),
(198, 15, 0, 4, '0', '0', '0', '0'),
(199, 15, 0, 29, '1', '0', '0', '0'),
(200, 15, 0, 30, '1', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(255) DEFAULT NULL,
  `unit_address` text,
  `unit_parent` int(11) DEFAULT '0',
  `unit_label` enum('y','n') DEFAULT 'y',
  `createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_name`, `unit_address`, `unit_parent`, `unit_label`, `createddate`) VALUES
(8, 'Transmart Carrefour', 'Tangerang', 0, 'y', '2017-09-24 02:04:01');

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
  `gender` enum('M','F') DEFAULT NULL,
  `createddate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `notelp` varchar(20) DEFAULT NULL,
  `alamat` text,
  `email` varchar(100) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_fullname`, `user_password`, `role_id`, `unit_id`, `active`, `profpict`, `gender`, `createddate`, `notelp`, `alamat`, `email`, `created_id`) VALUES
(30, 'admin', 'heru_bambang', '21232f297a57a5a743894a0e4a801fc3', '1', '8', 1, '20190303_28anonymousicon.png', NULL, '2019-02-27 13:59:49', '', NULL, 'kelas1', 1),
(47, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '15', '8', 1, 'M.jpg', NULL, '2019-03-03 09:03:56', '', NULL, 'user', 30),
(48, 'pelanggan', 'Pelanggan', '7f78f06d2d1262a0a222ca9834b15d9d', '15', '8', 1, 'M.jpg', NULL, '2019-03-03 10:36:40', '', NULL, 'pelanggan', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  ADD PRIMARY KEY (`idpromo`);

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
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  MODIFY `idpromo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12456903;

--
-- AUTO_INCREMENT for table `tusergroup`
--
ALTER TABLE `tusergroup`
  MODIFY `autono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tusermenu`
--
ALTER TABLE `tusermenu`
  MODIFY `usermenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

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
