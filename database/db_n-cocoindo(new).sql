-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 05:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
(1, 'Nusantara Coco Indo', 'A Company of Coconut Derivate Product', '+628820093516', '', '', 'info.ncocoindo@gmail.com', 'Nusantara Coco Indo is an Indonesian agricultural product export company. Established in 2021, Nusantara Coco Indo is committed to improving the quality, quantity, and continuity of Indonesia\'s superior products.', 'Kecamatan Ambulu, Kabupaten Jember, Jawa Timur', 'profile.jpg', '2021-11-19 13:03:29', '2021-11-12 02:11:28');

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
(1, 'Tons Production Capacity', 400, '2021-11-17 21:18:22', '2021-11-17 21:18:22'),
(2, 'Hectars Cultivated Land', 500, '2021-11-17 21:18:22', '2021-11-17 21:18:22'),
(3, 'Projects Running', 3, '2021-11-17 21:19:50', '2021-11-17 21:19:50'),
(4, 'Countries Collaberate', 5, '2021-11-17 21:19:50', '2021-11-17 21:19:50');

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
(1, 'relations.png', 'Creating an integrated export ecosystem between stakeholders', '2021-11-18 03:26:47', '0000-00-00 00:00:00'),
(2, 'fist.png', 'Empowering domestic production Improve quality, quantity, and continuity through collaboration between stakeholders', '2021-11-18 03:26:47', '0000-00-00 00:00:00'),
(3, 'growth.png', 'Increase employment and inclusive economic growth', '2021-11-18 03:26:47', '0000-00-00 00:00:00'),
(4, 'relationship.png', 'Best Relation<br>becoming buyer our sibling\r\n', '2021-11-21 14:10:46', '2021-11-21 14:10:46'),
(5, 'Priority.png', 'Priority<br>Our time is buyer’s priority\r\n', '2021-11-21 14:10:46', '2021-11-21 14:10:46'),
(6, 'work_fast.png', 'Work Fast<br>We get pre order (PO) from buyer, so we prepare to deliver fast\r\n', '2021-11-21 14:12:06', '2021-11-21 14:11:40');

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
(1, 5, 'Rachman Kavin', 'foto_kavin-min1.jpg', 'Whatever you are, be a good one', 'tes', 'Rachmankavin', 'halo', 'kavin@gmail.com', '2021-11-21 04:42:37', '2021-11-21 16:04:14'),
(2, 6, 'M. Ulul Fauzi, S.Pd.', 'foto_ulul-min1.jpg', 'World is a while, but afterlife is forever', '', '', '', 'tulityosih@gmail.com', '2021-11-21 04:42:37', '2021-11-21 16:03:16'),
(5, 7, 'Nur Lailah, B.Ed.', '1637510507.jpg', 'Live with honor or die with dignity', '', '', '', 'lailahtes@gmail.com', '2021-11-21 16:01:47', '2021-11-21 16:01:47');

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
  MODIFY `ID_MEMBER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
