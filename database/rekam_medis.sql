-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 03:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_coba`
--

CREATE TABLE `db_coba` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `id_hewan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_coba`
--

INSERT INTO `db_coba` (`id`, `nama`, `id_hewan`) VALUES
(1, 'ramadhan', 'br001'),
(2, 'ramadhan', 'br002'),
(3, 'ramadhan', 'br003'),
(4, 'mulzahrian', 'br004'),
(5, 'mulzahrian', 'br005');

-- --------------------------------------------------------

--
-- Table structure for table `db_diagnosa`
--

CREATE TABLE `db_diagnosa` (
  `id` int(11) NOT NULL,
  `diagnosa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_diagnosa`
--

INSERT INTO `db_diagnosa` (`id`, `diagnosa`) VALUES
(3, 'Tidak Ada'),
(6, 'BFF Helminthiasis'),
(7, 'Myasis'),
(8, 'Thelaziasis'),
(9, 'Anorexia'),
(10, 'Helminthiasis'),
(11, 'Scabies');

-- --------------------------------------------------------

--
-- Table structure for table `db_hewan`
--

CREATE TABLE `db_hewan` (
  `id` int(11) NOT NULL,
  `id_hewan` varchar(128) NOT NULL,
  `jenis_hewan` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `umur` int(11) NOT NULL,
  `id_peternak` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `daerah` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_hewan`
--

INSERT INTO `db_hewan` (`id`, `id_hewan`, `jenis_hewan`, `jenis_kelamin`, `umur`, `id_peternak`, `nama`, `daerah`, `pekerjaan`, `alamat`) VALUES
(15, 'S141', 'Sapi', 'Jantan', 2, '100102', 'An Nuh', 'Kec.Sabak Auh', 'Wirausaha', 'Bandar Perdada'),
(16, 'S173', 'Sapi', 'Jantan', 4, '100112', 'Anhar', 'Kec.Sabak Auh', 'Buruh', 'Bandar Perdada'),
(17, 'S166', 'Sapi', 'Jantan', 4, '100110', 'Habib', 'Kec.Sabak Auh', 'Guru', 'Bandar Perdada'),
(18, 'S177', 'Sapi', 'Jantan', 3, '100109', 'Ismail', 'Kec.Sabak Auh', 'Wirausaha', 'Bandar Perdada'),
(19, 'S189', 'Sapi', 'Jantan', 4, '100111', 'Aldo', 'Kec.Sabak Auh', 'Wirausaha', 'Bandar Perdada'),
(20, 'K981', 'Kambing', 'Betina', 1, '100112', 'Anhar', 'Kec.Sabak Auh', 'Buruh', 'Bandar Perdada'),
(21, 'H111', 'Kambing', 'Jantan', 2, 'D111', 'ramadhan', 'Kec.Kandis', 'Wirausaha', 'Bandar Perdada');

-- --------------------------------------------------------

--
-- Table structure for table `db_hewan2`
--

CREATE TABLE `db_hewan2` (
  `id` int(11) NOT NULL,
  `id_hewan` varchar(128) NOT NULL,
  `id_hewan2` varchar(128) NOT NULL,
  `jenis_hewan` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `umur` varchar(11) NOT NULL,
  `id_peternak` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `daerah` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `no_telpon` int(12) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_hewan2`
--

INSERT INTO `db_hewan2` (`id`, `id_hewan`, `id_hewan2`, `jenis_hewan`, `jenis_kelamin`, `umur`, `id_peternak`, `nama`, `daerah`, `pekerjaan`, `no_telpon`, `alamat`) VALUES
(1, 'BR001', 'BR001', 'Sapi', 'Jantan', '2', 'PT001', 'Mulzahrian', 'Bukit Batu', 'Bos', 23, 'Bukit Batu');

-- --------------------------------------------------------

--
-- Table structure for table `db_peternak`
--

CREATE TABLE `db_peternak` (
  `id` int(11) NOT NULL,
  `id_peternak` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `daerah` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_peternak`
--

INSERT INTO `db_peternak` (`id`, `id_peternak`, `nama`, `daerah`, `pekerjaan`, `alamat`) VALUES
(16, '100102', 'An Nuh', 'Kec.Sabak Auh', 'Wirausaha', 'Bandar Perdada'),
(17, '100112', 'Anhar', 'Kec.Sabak Auh', 'Buruh', 'Bandar Perdada'),
(18, '100110', 'Habib', 'Kec.Sabak Auh', 'Guru', 'Bandar Perdada'),
(19, '100109', 'Ismail', 'Kec.Sabak Auh', 'Wirausaha', 'Bandar Perdada'),
(20, '100111', 'Aldo', 'Kec.Sabak Auh', 'Wirausaha', 'Bandar Perdada'),
(21, 'D111', 'ramadhan', 'Kec.Kandis', 'Wirausaha', 'Bandar Perdada');

-- --------------------------------------------------------

--
-- Table structure for table `db_rekam_medis`
--

CREATE TABLE `db_rekam_medis` (
  `id` int(11) NOT NULL,
  `id_hewan` varchar(128) NOT NULL,
  `jenis_hewan` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `umur` int(15) NOT NULL,
  `id_peternak` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `daerah` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `gejala` varchar(128) NOT NULL,
  `diagnosa` varchar(128) NOT NULL,
  `diagnosa1` varchar(130) NOT NULL,
  `vaksin` varchar(128) NOT NULL,
  `vaksin1` varchar(130) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `tahun` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_rekam_medis`
--

INSERT INTO `db_rekam_medis` (`id`, `id_hewan`, `jenis_hewan`, `jenis_kelamin`, `umur`, `id_peternak`, `nama`, `daerah`, `pekerjaan`, `alamat`, `gejala`, `diagnosa`, `diagnosa1`, `vaksin`, `vaksin1`, `tanggal`, `tahun`) VALUES
(42, 'S177', 'Sapi', 'Jantan', 3, '100109', 'Ismail', 'Kec.Sabak Auh', 'Wirausaha', 'Bandar Perdada', '', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', '2020-09-15', '2019'),
(43, 'S177', 'Sapi', 'Jantan', 3, '100109', 'Ismail', 'Kec.Sabak Auh', 'Wirausaha', 'Bandar Perdada', 'kurang nafsu makan, suhu 40 derajat', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', '2020-09-16', '2019'),
(44, 'S173', 'Sapi', 'Jantan', 4, '100112', 'Anhar', 'Kec.Sabak Auh', 'Buruh', 'Bandar Perdada', 'test aja', 'Myasis', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', '2020-09-16', '2019'),
(47, 'S166', 'Sapi', 'Jantan', 4, '100110', 'Habib', 'Kec.Sabak Auh', 'Guru', 'Bandar Perdada', 'tidak ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', '2020-09-17', '2018'),
(48, 'K981', 'Kambing', 'Betina', 1, '100112', 'Anhar', 'Kec.Sabak Auh', 'Buruh', 'Bandar Perdada', 'tidak ada gejala ', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', '2020-09-17', '2019'),
(49, 'S177', 'Sapi', 'Jantan', 3, '100109', 'Ismail', 'Kec.Sabak Auh', 'Wirausaha', 'Bandar Perdada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', '2020-09-18', '2017'),
(50, 'H111', 'Kambing', 'Jantan', 2, 'D111', 'ramadhan', 'Kec.Kandis', 'Wirausaha', 'Bandar Perdada', 'Tidak Ada', 'BFF Helminthiasis', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', '2020-09-23', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_pembuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id`, `nama`, `email`, `gambar`, `password`, `role_id`, `is_active`, `tanggal_pembuat`) VALUES
(3, 'ramadhan24', 'ramadhan17tk@mahasiswa.pcr.ac.id', 'default.jpg', '$2y$10$eFNM4sGoUVMXk4tU8l9tveDvOl1uauWuHmRXNmGB1b.JgiOftPh7e', 1, 1, 1580670729),
(4, 'mulzahrian1', 'mulzahrian1@gmail.com', 'caltex2.png', '$2y$10$ouufPmd3e89Lgu3eQ0KwBuKnOxoL2YlnFfH5.nci1UwFjWwbArn7q', 3, 1, 1580963585),
(13, 'teknikkomputer', '17teknik.komputer@gmail.com', 'caltex1.png', '$2y$10$YiLB0LWpmtwjrbofCJ7ig.YKAqnrqBnYsX.2pzoTT.DToKjU7qE6y', 2, 1, 1582870979),
(15, 'ramacuy', 'ramadhanindopeople@gmail.com', 'default.jpg', '$2y$10$54BDAzHQBvkSaaDvuQCAZOBBvdBFUgqwe2GXLMkSMMkOHWUMF/OdO', 2, 1, 1583255538),
(17, 'mulzahrianone', 'mulzahrianone@gmail.com', 'ari.jpg', '$2y$10$mse3u7K7YGxh08BIauUQ0OLKbqpoJySXuZKhpda/Of9WUpBnCB7hK', 3, 1, 1595154596),
(19, 'user', 'user@gmail.com', 'buyan.png', '$2y$10$B7DpWR5T/8JV9PvouXY4UOAJWzReZgJvEeTBJVrQyF2MvEcLa/tR6', 2, 1, 1599698331),
(20, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$N/xL8z96Gygn7wotAVP/x.cHYLid4gRHcUotIOkkwfeOr0N3KytXq', 1, 1, 1599698542),
(21, 'marza', 'marza20tk@mahasiswa.pcr.ac.id', 'default.jpg', '$2y$10$0Uj4dlUd/Ypl0OUV.VwqlOcBa2PJwasUyewLH0LyvE4jkYFuKvGn.', 2, 1, 1600077693);

-- --------------------------------------------------------

--
-- Table structure for table `db_user_access_menu`
--

CREATE TABLE `db_user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user_access_menu`
--

INSERT INTO `db_user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 3, 5),
(8, 3, 8),
(9, 3, 9),
(10, 3, 10),
(11, 2, 1),
(12, 3, 11),
(13, 2, 11),
(15, 3, 2),
(16, 1, 10),
(17, 1, 8),
(18, 1, 9),
(19, 1, 12),
(20, 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `db_user_menu`
--

CREATE TABLE `db_user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user_menu`
--

INSERT INTO `db_user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'test'),
(5, 'Dokter'),
(6, 'Medis'),
(8, 'Vaksin'),
(9, 'Diagnosa'),
(10, 'Laporan'),
(11, 'Grafik'),
(12, 'Management_User'),
(13, 'Report');

-- --------------------------------------------------------

--
-- Table structure for table `db_user_role`
--

CREATE TABLE `db_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user_role`
--

INSERT INTO `db_user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member'),
(3, 'Dokter');

-- --------------------------------------------------------

--
-- Table structure for table `db_user_sub_menu`
--

CREATE TABLE `db_user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user_sub_menu`
--

INSERT INTO `db_user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-tachometer-alt', 1),
(2, 2, 'Profile Saya', 'user', 'fas fa-user-alt', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-folder', 0),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-folder-open', 0),
(6, 1, 'coba', 'coba/coba', 'fab fa-youtube', 0),
(7, 5, 'Peternak', 'dokter', 'fas fa-users', 1),
(8, 5, 'Hewan Ternak', 'dokter/hewan', 'fas fa-hippo', 1),
(9, 6, 'Rekam Medis', 'medis', 'fas fa-first-aid', 0),
(10, 5, 'Rekam Medis', 'dokter/medis', 'fas fa-first-aid', 1),
(12, 8, 'Vaksin', 'vaksin', 'fas fa-syringe', 1),
(13, 9, 'Diagnosa', 'diagnosa', 'fas fa-vial', 1),
(14, 10, 'Laporan', 'laporan', 'fas fa-book', 1),
(15, 11, 'Grafik Data', 'grafik', 'fas fa-chart-pie', 1),
(16, 12, 'User Management', 'usermanage', 'fas fa-user-alt', 1),
(17, 13, 'Report', 'report', 'fas fa-book', 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_vaksin`
--

CREATE TABLE `db_vaksin` (
  `id` int(11) NOT NULL,
  `vaksin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_vaksin`
--

INSERT INTO `db_vaksin` (`id`, `vaksin`) VALUES
(4, 'Tidak Ada'),
(5, 'Limoxin LA'),
(6, 'Novaldon'),
(7, 'Gusanex'),
(8, 'Injectamin'),
(9, 'B-Complex'),
(10, 'Fluxcidae'),
(11, 'Limoxine'),
(12, 'Bio'),
(13, 'Intermectin');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'user@gmail.com', 'e02150ab5d2d6807e7bc30134bab017d23599a5b5f90b66b1603659f6e6bf29b', 1599387569),
(2, 'user@gmail.com', 'ae3ef0ed4874ec488c8cd70379ad66c3b002296598583cfe90f67d4e50161a4b', 1599698331),
(3, 'admin@gmail.com', '7618188c1bb43ada1f36c63992542ae48da667a9dd065dfe93c52f3076a42f9f', 1599698542);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_coba`
--
ALTER TABLE `db_coba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_diagnosa`
--
ALTER TABLE `db_diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_hewan`
--
ALTER TABLE `db_hewan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_hewan2`
--
ALTER TABLE `db_hewan2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_peternak`
--
ALTER TABLE `db_peternak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_rekam_medis`
--
ALTER TABLE `db_rekam_medis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user_access_menu`
--
ALTER TABLE `db_user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user_menu`
--
ALTER TABLE `db_user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user_role`
--
ALTER TABLE `db_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user_sub_menu`
--
ALTER TABLE `db_user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_vaksin`
--
ALTER TABLE `db_vaksin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_coba`
--
ALTER TABLE `db_coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `db_diagnosa`
--
ALTER TABLE `db_diagnosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `db_hewan`
--
ALTER TABLE `db_hewan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `db_hewan2`
--
ALTER TABLE `db_hewan2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_peternak`
--
ALTER TABLE `db_peternak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `db_rekam_medis`
--
ALTER TABLE `db_rekam_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `db_user_access_menu`
--
ALTER TABLE `db_user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `db_user_menu`
--
ALTER TABLE `db_user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `db_user_role`
--
ALTER TABLE `db_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_user_sub_menu`
--
ALTER TABLE `db_user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `db_vaksin`
--
ALTER TABLE `db_vaksin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
