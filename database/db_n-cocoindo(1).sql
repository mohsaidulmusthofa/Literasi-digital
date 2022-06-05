-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 04:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
-- Table structure for table `tb_auth`
--

CREATE TABLE `tb_auth` (
  `ID_USER` int(2) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_auth`
--

INSERT INTO `tb_auth` (`ID_USER`, `NAMA`, `EMAIL`, `PASSWORD`, `CREATED_AT`, `UPDATED_AT`) VALUES
(3, 'Admin N-CocoIndo', 'info.ncocoindo@gmail.com', '$2y$10$CZ9wkjSbUfNNEO3s2EwTJuihN4AlnPrtgwhnv3u3EaThXiIG6hg3O', '2021-11-21 05:11:17', '2021-11-21 05:10:05');

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
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bisnis`
--

INSERT INTO `tb_bisnis` (`ID_BISNIS`, `NAMA_BISNIS`, `SLOGAN`, `CONTACT_PERSON`, `IG`, `FB`, `EMAIL`, `ABOUT_US`, `ALAMAT`, `FOTO`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Nusantara Coco Indo', 'A Company of Coconut Derivate Product', '+628820093516', '', '', 'info.ncocoindo@gmail.com', 'Nusantara Coco Indo adalah perusahaan ekspor produk pertanian Indonesia. Didirikan pada tahun 2021, Nusantara Coco Indo berkomitmen untuk meningkatkan kualitas, kuantitas, dan kontinuitas produk unggulan Indonesia.', 'Kecamatan Ambulu, Kabupaten Jember, Jawa Timur', 'profile.jpg', '2021-11-19 13:03:29', '2022-06-05 14:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_counter`
--

CREATE TABLE `tb_counter` (
  `ID_COUNTER` int(1) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `JUMLAH` int(4) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_counter`
--

INSERT INTO `tb_counter` (`ID_COUNTER`, `NAMA`, `JUMLAH`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Kapasitas Produksi Ton', 400, '2022-06-05 02:06:45', '2022-06-05 02:06:45'),
(2, 'Hektar Lahan yang Digarap', 500, '2022-06-05 02:06:02', '2022-06-05 02:06:02'),
(3, 'Proyek Berjalan', 3, '2022-06-05 02:06:24', '2022-06-05 02:06:24'),
(4, 'Kolaborasi Negara', 5, '2022-06-05 02:06:58', '2022-06-05 02:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `ID_JABATAN` int(2) NOT NULL,
  `JABATAN` varchar(50) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`ID_JABATAN`, `JABATAN`, `CREATED_AT`, `UPDATED_AT`) VALUES
(5, 'Founder', '2021-11-18 03:21:55', '0000-00-00 00:00:00'),
(6, 'Co-Founder', '2021-11-18 03:21:55', '0000-00-00 00:00:00'),
(7, 'Business Development', '2021-11-18 03:21:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ourmission`
--

CREATE TABLE `tb_ourmission` (
  `ID_OURMISSION` int(2) NOT NULL,
  `FOTO` varchar(30) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ourmission`
--

INSERT INTO `tb_ourmission` (`ID_OURMISSION`, `FOTO`, `DESCRIPTION`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'relations.png', 'Menciptakan ekosistem ekspor yang terintegrasi antar pemangku kepentingan', '2022-06-05 02:06:38', '2022-06-05 02:06:38'),
(2, 'fist.png', 'Pemberdayaan produksi dalam negeri Meningkatkan kualitas, kuantitas, dan kesinambungan melalui kerjasama antar pemangku kepentingan', '2022-06-05 02:06:11', '2022-06-05 02:06:11'),
(3, 'growth.png', 'Meningkatkan lapangan kerja dan pertumbuhan ekonomi yang inklusif', '2022-06-05 02:06:44', '2022-06-05 02:06:44'),
(4, 'relationship.png', 'Hubungan Terbaik<br>menjadi pembeli saudara kita', '2022-06-05 02:06:16', '2022-06-05 02:06:16'),
(5, 'Priority.png', 'Prioritas<br>Waktu kami adalah prioritas pembeli', '2022-06-05 02:06:49', '2022-06-05 02:06:49'),
(6, 'work_fast.png', 'Bekerja Cepat<br>Kami mendapatkan pre order (PO) dari pembeli, jadi kami bersiap untuk pengiriman cepat', '2022-06-05 02:06:22', '2022-06-05 02:06:22');

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
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `ID_PRODUK` int(3) NOT NULL,
  `NAMA_PRODUK` varchar(100) NOT NULL,
  `FOTO` varchar(50) NOT NULL,
  `RINCIAN` text NOT NULL,
  `DESKRIPSI` text NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`ID_PRODUK`, `NAMA_PRODUK`, `FOTO`, `RINCIAN`, `DESKRIPSI`, `CREATED_AT`, `UPDATED_AT`) VALUES
(3, 'Cocofibre', 'cocofibre.jpg', '1. Color : White<br>2. Moisture : 10%-20%<br>3. Length : 12-35 cm<br>4. Impurity : +/- 5%<br>5. Weight : 100 kg/bale<br>6. Container :<br>- 20 feet = 170-180 bales<br>- 40 feet = 240-250 bales<br>- 40 feet high cube = 260-270 bales<br>Shipping : FOB International Port of Perak, Surabaya, Indonesia \r\n', 'Coconut fiber, is a natural fiber extracted from the husk of coconut and used in products such as floor mats, doormats, brushes and mattresses. Coir is the fibrous material found between the hard, internal shell and the outer coat of a coconut. Other uses', '2021-11-18 03:49:21', '2021-11-18 03:44:21'),
(4, 'Cocopot', 'cocopot.jpg', '1. Color : White<br>2. Moisture : 10%-20%<br>3. Length : 12 cm all models<br>4. Impurity : +/- 5%<br>5. Weight : 1 kg/pack\r\n6. Container :<br>- 20 feet = 1700-1800 packs<br>- 40 feet = 2400-2500 packs<br>- 40 feet high cube = 2600-2700 packs<br>Shipping : FOB International Port of Perak, Surabaya, Indonesia \r\n', 'Eco-friendly pots made of well pressed coconut coir, not easily broken, durable in sunlight and able to absorb water for soil availability. One of the main benefits of Coir Pot is beautifying plants, a source of organic material for planting media and bei', '2021-11-18 03:53:52', '2021-11-18 03:53:25'),
(5, 'Cocopeat', 'cocopeat.jpg', '1. Color : Brown<br>2. Moisture : 12%-40%<br>3. Impurity : +/- 5%<br>4. Weight : 15 kg/bag<br>5. Container :<br>- 20 feet = 1000-1200 bags<br>- 40 feet = 1500-1666 bags<br>- 40 feet high cube = 1700-1800 bags<br>Shipping : FOB International Port of Perak, Surabaya, Indonesia \r\n', 'Cocopeat is considered an ideal growing medium. The obtained cocopeat powder is filtered, washed, dried and finally compacted into blocks. Blocks can be used for a variety of planting needs. Coir is known for its natural rooting hormone and anti-fungal pr', '2021-11-18 03:54:10', '2021-11-18 03:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_team`
--

CREATE TABLE `tb_team` (
  `ID_MEMBER` int(11) NOT NULL,
  `ID_JABATAN` int(2) NOT NULL,
  `NAMA_MEMBER` varchar(100) NOT NULL,
  `FOTO` varchar(100) NOT NULL,
  `MOTTO` varchar(200) NOT NULL,
  `FACEBOOK` varchar(200) NOT NULL COMMENT 'Masukkan username http://www.facebook.com/USERNAME',
  `IG` varchar(200) NOT NULL COMMENT 'Masukkan username https://www.instagram.com/USERNAME',
  `LINKEDIN` varchar(200) NOT NULL COMMENT 'HARUS LINK',
  `EMAIL` varchar(200) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_team`
--

INSERT INTO `tb_team` (`ID_MEMBER`, `ID_JABATAN`, `NAMA_MEMBER`, `FOTO`, `MOTTO`, `FACEBOOK`, `IG`, `LINKEDIN`, `EMAIL`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 5, 'asdasd', 'foto_kavin-min1.jpg', 'Whatever you are, be a good one', 'tes', 'Rachmankavin', 'halo', 'kavin@gmail.com', '2021-11-21 04:42:37', '2021-11-21 16:04:14'),
(2, 6, 'M. Ulul Fauzi, S.Pd.', 'foto_ulul-min1.jpg', 'World is a while, but afterlife is forever', '', '', '', 'tulityosih@gmail.com', '2021-11-21 04:42:37', '2021-11-21 16:03:16'),
(6, 3, 'asdasd', 'asd.jpg', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd@gmail.com', '2022-06-05 13:33:21', '2022-06-05 13:33:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_auth`
--
ALTER TABLE `tb_auth`
  ADD PRIMARY KEY (`ID_USER`);

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
-- Indexes for table `tb_team`
--
ALTER TABLE `tb_team`
  ADD PRIMARY KEY (`ID_MEMBER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_auth`
--
ALTER TABLE `tb_auth`
  MODIFY `ID_USER` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_bisnis`
--
ALTER TABLE `tb_bisnis`
  MODIFY `ID_BISNIS` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_counter`
--
ALTER TABLE `tb_counter`
  MODIFY `ID_COUNTER` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `ID_JABATAN` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_ourmission`
--
ALTER TABLE `tb_ourmission`
  MODIFY `ID_OURMISSION` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `ID_PESAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `ID_PRODUK` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_team`
--
ALTER TABLE `tb_team`
  MODIFY `ID_MEMBER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
