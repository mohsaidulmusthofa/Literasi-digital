-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 04:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bisnis`
--

INSERT INTO `tb_bisnis` (`ID_BISNIS`, `NAMA_BISNIS`, `SLOGAN`, `CONTACT_PERSON`, `IG`, `FB`, `EMAIL`, `ABOUT_US`, `ALAMAT`, `FOTO`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Nusantara Cocoindo.Inc', 'Lorem ipsum dolor sit amet queque el toro malaguena como tocar a', '087362728192', 'asdasd', 'asdasd', 'info.ncocoindo@gmail.com', 'asdasdasd', 'Ambulu - Jember.', 'Seven-Inc.png', '2021-11-12 08:01:29', '2021-11-12 02:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_counter`
--

CREATE TABLE `tb_counter` (
  `ID_COUNTER` int(1) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `JUMLAH` int(4) NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `ID_JABATAN` int(2) NOT NULL,
  `JABATAN` varchar(50) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
-- Table structure for table `tb_ourmission`
--

CREATE TABLE `tb_ourmission` (
  `ID_OURMISSION` int(2) NOT NULL,
  `FOTO` varchar(30) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`ID_PRODUK`, `NAMA_PRODUK`, `FOTO`, `DESKRIPSI`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Serabut Kelapa', '16367859821.jpg', 'Serabut kelapa merupakan bagian dari kelapa yang dapat dimanfaatkan untuk kebutuhan bahan bakar dsb', '2021-11-14 09:31:35', '2021-11-13 01:11:53'),
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
  `MOTTO` varchar(255) NOT NULL,
  `ID_JABATAN` int(2) NOT NULL,
  `FB` varchar(255) NOT NULL,
  `IG` varchar(255) NOT NULL,
  `NO_HP` varchar(13) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`ID_USER`, `NAMA`, `USERNAME`, `EMAIL`, `PASSWORD`, `FOTO`, `MOTTO`, `ID_JABATAN`, `FB`, `IG`, `NO_HP`, `ALAMAT`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Andrea Santana A', 'andrea03', 'andrea@gmail.com', '$2y$10$J6dxmxDjVN6TVnz9AnV.HeBGnvrUCYDu1NDwCcIUACQZvu4IgElWO', 'andre-jogja.jpeg', '', 1, 'qweqwe', 'qweqwe', '085257423236', 'asdasd', '2021-11-08 13:41:08', '2021-11-07 19:11:08'),
(2, 'Joko', 'joko034', 'joko@gmail.com', '$2y$10$km2GvCdlXqD.xSjZvCQ05e09LmLnq9Ija0v.rKkeAXLvnXbh00dgu', '1636883367.png', '', 4, 'asdasdasd', 'asdasdasd', '087362728192', 'asdasdasd', '2021-11-14 03:11:26', '2021-11-14 03:11:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bisnis`
--
ALTER TABLE `tb_bisnis`
  ADD PRIMARY KEY (`ID_BISNIS`);

--
-- Indexes for table `tb_counter`
--
ALTER TABLE `tb_counter`
  ADD PRIMARY KEY (`ID_COUNTER`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`ID_JABATAN`);

--
-- Indexes for table `tb_ourmission`
--
ALTER TABLE `tb_ourmission`
  ADD PRIMARY KEY (`ID_OURMISSION`);

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
-- AUTO_INCREMENT for table `tb_counter`
--
ALTER TABLE `tb_counter`
  MODIFY `ID_COUNTER` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `ID_JABATAN` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_ourmission`
--
ALTER TABLE `tb_ourmission`
  MODIFY `ID_OURMISSION` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `ID_PESAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `ID_PRODUK` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `ID_USER` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
