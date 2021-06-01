-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 09:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `nama`, `harga`, `jumlah_kamar`, `gambar`) VALUES
(1, 'Hotel Mulia', 10000000, 18, 'mulia.jpg'),
(5, 'Hotel Srikandi', 15000000, 15, 'srikandi.jpg'),
(6, 'Hotel Sukamandi', 12000000, 0, 'sukamandi.jpg'),
(8, 'Hotel Puri', 9000000, 50, 'puri.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_user`, `id_hotel`, `jumlah_hari`, `jumlah_kamar`, `total_harga`, `rating`) VALUES
(1, 8, 1, 1, 1, 10000000, 1),
(2, 8, 1, 1, 1, 10000000, 1),
(3, 8, 5, 4, 2, 120000000, 5),
(4, 8, 1, 3, 2, 60000000, 4),
(5, 8, 1, 4, 6, 240000000, 3),
(7, 8, 1, 12, 2, 20000000, 5),
(8, 8, 5, 1, 1, 15000000, 1),
(9, 8, 1, 1, 20, 200000000, 3),
(10, 8, 1, 1, 2, 20000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `namadepan` varchar(50) NOT NULL,
  `namabelakang` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `email` varchar(128) NOT NULL,
  `profilepic` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `namadepan`, `namabelakang`, `tanggallahir`, `email`, `profilepic`, `password`, `role_id`) VALUES
(1, 'Admin', 'Admin', '2000-07-12', 'admin@gmail.com', 'default.png', '$2y$10$upa9B7ya8wtHVp2RC3H4NOeu.WcJfe6Xu8H6gYyfxoCqecTWrS3Z2', 1),
(2, 'Kevin', 'Bobby', '2000-07-12', 'Kevin.bobby69@gmail.com', 'Profile.png', '$2y$10$XRMbc6Icts0dsmaSXQdopup.13ytnXrKmuhmemnDxBBdQFsQiqgXO', 2),
(3, 'Test', 'Notif', '2020-05-29', 'test@yahoo.com', 'default.png', '$2y$10$N./wA3NRQ37r0fZQXlVUHufj1pD48ftYqDrcz0Gk1VYWg.gZHtJZy', 2),
(4, 'Test', 'Hotel', '2020-05-28', 'uas_a@gmail.com', 'default.png', '$2y$10$6owCgRhBfbQ.Cr0eQbruSuUzSLJQUydCZR5TOsdAzujD2M2ss8rMG', 2),
(5, 'Kevin', 'Admin', '2020-05-22', 'kasir@yahoo.com', 'Profile1.png', '$2y$10$aqJRvmD2iF/XxNCDUq/CEup8U6ljM/BEpYauCuZALFv3crRNXUt5C', 2),
(6, 'Test', 'message', '2020-05-30', 'admin@umn.ac.id', 'default.jpg', '$2y$10$/gtrjl4YCbI5mxZZZDpYlOurTU/GBJehw0gbX2kJhsG3uIiqbe7cm', 2),
(7, 'test', 'success', '2020-05-30', 'success@gmail.com', 'default.jpg', '$2y$10$cZMx86eWZljDiAciYvBPGOTUo.gHWcGUlngGxbG/p9wKJg9bx3JfK', 2),
(8, 'Bobby', 'Tanujaya', '2020-06-04', 'Kevinbobby89@gmail.com', 'default.png', '$2y$10$iz61YNyWt8yYyKEcf0G0UOl8yuWVn1OkKZObYrDgoDu.7S7tbr0j2', 2),
(9, 'Kevin', 'Bobby', '2020-05-21', 'skyboo212@gmail.com', 'Screenshot_(3).png', '$2y$10$GpVTrkkG54DooyDp2qDdjet1JJd3qBNfx2Z0kxviJ3JFumqsnCCx2', 2),
(10, 'Adrian', 'Bobby', '2020-04-30', 'kevin@gmail.com', 'default.png', '$2y$10$EX9JCxPj7fWlE0Ps271uee5/18HpSEAFh/6a2oljZXP22jwwlUfUO', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
