-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 08:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_n-cocoindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bisnis`
--

CREATE TABLE `tb_bisnis` (
  `ID_BISNIS` int(1) NOT NULL,
  `NAMA_BISNIS` varchar(50) NOT NULL,
  `SLOGAN` varchar(255) NOT NULL,
  `CONTACT_PERSON` varchar(13) NOT NULL,
  `IG` varchar(255) NOT NULL,
  `FB` varchar(255) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `ABOUT_US` longtext NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `FOTO` varchar(30) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bisnis`
--

INSERT INTO `tb_bisnis` (`ID_BISNIS`, `NAMA_BISNIS`, `SLOGAN`, `CONTACT_PERSON`, `IG`, `FB`, `EMAIL`, `ABOUT_US`, `ALAMAT`, `FOTO`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Nusantara Cocoindo.Inc', 'Lorem ipsum dolor sit amet queque el toro malaguena como tocar a', '087362728192', 'asdasd', 'asdasd', 'info.ncocoindo@gmail.com', 'asdasdasd', 'Ambulu - Jember.', 'Seven-Inc.png', '2021-11-12 08:01:29', '2021-11-12 02:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `ID_JABATAN` int(2) NOT NULL,
  `JABATAN` varchar(50) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`ID_JABATAN`, `JABATAN`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'CEO', '2021-11-07 17:00:00', '0000-00-00 00:00:00'),
(2, 'CFO', '2021-11-07 17:00:00', '2021-11-07 17:00:00'),
(3, 'CTO', '2021-11-07 17:00:00', '2021-11-07 17:00:00'),
(4, 'Marketing', '2021-11-09 08:42:48', '2021-11-09 02:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keunggulan`
--

CREATE TABLE `tb_keunggulan` (
  `ID_KEUNGGULAN` int(2) NOT NULL,
  `ICON` varchar(30) NOT NULL COMMENT 'Input class icon fontawesome',
  `KEUNGGULAN` varchar(255) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `ID_LAYANAN` int(2) NOT NULL,
  `ICON` varchar(30) NOT NULL COMMENT 'Input class icon fontawesome',
  `LAYANAN` varchar(255) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `ID_PESAN` int(11) NOT NULL,
  `NAMA_PENGIRIM` varchar(100) NOT NULL,
  `EMAIL_PENGIRIM` varchar(100) NOT NULL,
  `SUBJECT` varchar(50) NOT NULL,
  `PESAN` longtext NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `ID_PRODUK` int(3) NOT NULL,
  `NAMA_PRODUK` varchar(100) NOT NULL,
  `FOTO` varchar(50) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`ID_PRODUK`, `NAMA_PRODUK`, `FOTO`, `DESKRIPSI`, `CREATED_AT`, `UPDATED_AT`) VALUES
(0, 'Serabut Kelapa', '16367859821.jpg', 'Serabut kelapa merupakan bagian dari kelapa yang dapat dimanfaatkan untuk kebutuhan bahan bakar dsb', '2021-11-13 07:40:53', '2021-11-13 01:11:53'),
(2, 'Batok Kelapa', '1636786530.jpg', 'Batok kelapa merupakan salah satu bagian dari kelapa yang dapat dimanfaatkan sebagai kerajinan', '2021-11-13 00:11:29', '2021-11-13 00:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `ID_USER` int(2) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `FOTO` varchar(50) NOT NULL,
  `ID_JABATAN` int(2) NOT NULL,
  `FB` varchar(255) NOT NULL,
  `IG` varchar(255) NOT NULL,
  `NO_HP` varchar(13) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`ID_USER`, `NAMA`, `USERNAME`, `EMAIL`, `PASSWORD`, `FOTO`, `ID_JABATAN`, `FB`, `IG`, `NO_HP`, `ALAMAT`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Andrea Santana A', 'andrea03', 'andrea@gmail.com', '$2y$10$J6dxmxDjVN6TVnz9AnV.HeBGnvrUCYDu1NDwCcIUACQZvu4IgElWO', 'andre-jogja.jpeg', 1, 'qweqwe', 'qweqwe', '085257423236', 'asdasd', '2021-11-08 13:41:08', '2021-11-07 19:11:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bisnis`
--
ALTER TABLE `tb_bisnis`
  ADD PRIMARY KEY (`ID_BISNIS`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`ID_JABATAN`);

--
-- Indexes for table `tb_keunggulan`
--
ALTER TABLE `tb_keunggulan`
  ADD PRIMARY KEY (`ID_KEUNGGULAN`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`ID_LAYANAN`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`ID_PESAN`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`ID_PRODUK`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bisnis`
--
ALTER TABLE `tb_bisnis`
  MODIFY `ID_BISNIS` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `ID_JABATAN` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_keunggulan`
--
ALTER TABLE `tb_keunggulan`
  MODIFY `ID_KEUNGGULAN` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `ID_LAYANAN` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `ID_PESAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `ID_PRODUK` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `ID_USER` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
