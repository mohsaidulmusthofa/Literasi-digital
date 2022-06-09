-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2022 pada 14.23
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

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
-- Struktur dari tabel `tb_auth`
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
-- Dumping data untuk tabel `tb_auth`
--

INSERT INTO `tb_auth` (`ID_USER`, `NAMA`, `EMAIL`, `PASSWORD`, `CREATED_AT`, `UPDATED_AT`) VALUES
(3, 'Admin N-CocoIndo', 'info.ncocoindo@gmail.com', '$2y$10$CZ9wkjSbUfNNEO3s2EwTJuihN4AlnPrtgwhnv3u3EaThXiIG6hg3O', '2021-11-21 05:11:17', '2021-11-21 05:10:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bisnis`
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
-- Dumping data untuk tabel `tb_bisnis`
--

INSERT INTO `tb_bisnis` (`ID_BISNIS`, `NAMA_BISNIS`, `SLOGAN`, `CONTACT_PERSON`, `IG`, `FB`, `EMAIL`, `ABOUT_US`, `ALAMAT`, `FOTO`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Nusantara Coco Indo', 'A Company of Coconut Derivate Product', '+628820093516', '', '', 'info.ncocoindo@gmail.com', 'Nusantara Coco Indo adalah perusahaan ekspor produk pertanian Indonesia. Didirikan pada tahun 2021, Nusantara Coco Indo berkomitmen untuk meningkatkan kualitas, kuantitas, dan kontinuitas produk unggulan Indonesia.', 'Kecamatan Ambulu, Kabupaten Jember, Jawa Timur', 'profile.jpg', '2021-11-19 13:03:29', '2022-06-05 14:28:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_counter`
--

CREATE TABLE `tb_counter` (
  `ID_COUNTER` int(1) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `JUMLAH` int(4) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_counter`
--

INSERT INTO `tb_counter` (`ID_COUNTER`, `NAMA`, `JUMLAH`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Kapasitas Produksi Ton', 400, '2022-06-05 02:06:45', '2022-06-05 02:06:45'),
(2, 'Hektar Lahan yang Digarap', 500, '2022-06-05 02:06:02', '2022-06-05 02:06:02'),
(3, 'Proyek Berjalan', 3, '2022-06-05 02:06:24', '2022-06-05 02:06:24'),
(4, 'Kolaborasi Negara', 5, '2022-06-05 02:06:58', '2022-06-05 02:06:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `ID_JABATAN` int(2) NOT NULL,
  `JABATAN` varchar(50) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`ID_JABATAN`, `JABATAN`, `CREATED_AT`, `UPDATED_AT`) VALUES
(5, 'Founder', '2021-11-18 03:21:55', '0000-00-00 00:00:00'),
(6, 'Co-Founder', '2021-11-18 03:21:55', '0000-00-00 00:00:00'),
(7, 'Business Development', '2021-11-18 03:21:55', '0000-00-00 00:00:00'),
(8, 'Mahasiswa', '2022-06-08 16:19:36', '2022-06-08 16:22:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ourmission`
--

CREATE TABLE `tb_ourmission` (
  `ID_OURMISSION` int(2) NOT NULL,
  `FOTO` varchar(30) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ourmission`
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
-- Struktur dari tabel `tb_pesan`
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
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `ID_PRODUK` int(3) NOT NULL,
  `NAMA_PRODUK` varchar(100) NOT NULL,
  `FOTO` varchar(50) NOT NULL,
  `RINCIAN` text NOT NULL,
  `DESKRIPSI` text NOT NULL,
  `link` varchar(200) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`ID_PRODUK`, `NAMA_PRODUK`, `FOTO`, `RINCIAN`, `DESKRIPSI`, `link`, `CREATED_AT`, `UPDATED_AT`) VALUES
(3, 'Cocofibre', 'cocofibre.jpg', '<div>1. Warna: Putih</div><div>2. Kelembaban : 10%-20%</div><div>3. Panjang : 12-35 cm</div><div>4. Kotoran : +/- 5%</div><div>5. Berat : 100 kg/bal</div><div>6. Wadah:</div><div>- 20 kaki = 170-180 bal</div><div>- 40 kaki = 240-250 bal</div><div>- kubus setinggi 40 kaki = 260-270 bal</div><div>Pengiriman : FOB International Port of Perak, Surabaya,&nbsp; &nbsp; &nbsp; &nbsp; Indonesia</div>', '<div style=\"text-align: justify;\">Sabut kelapa, adalah serat alami yang diekstrak dari sabut kelapa dan digunakan dalam produk seperti keset lantai, keset, kuas dan kasur. Sabut adalah bahan berserat yang ditemukan di antara cangkang keras, bagian dalam dan lapisan luar kelapa. Penggunaan lainnya</div>', 'https://shopee.co.id/product/560896596/18208677326?smtt=0.560916181-1654437583.3', '2022-06-09 05:06:20', '2022-06-09 05:06:20'),
(4, 'Cocopot', 'cocopot.jpg', '<div>1. Warna: Putih</div><div>2. Kelembaban : 10%-20%</div><div>3. Panjang: 12 cm semua model</div><div>4. Kotoran : +/- 5%</div><div>5. Berat : 1 kg/bungkus 6. Wadah :</div><div>- 20 kaki = 1700-1800 bungkus</div><div>- 40 kaki = 2400-2500 bungkus</div><div>- Kubus setinggi 40 kaki = 2600-2700 bungkus</div><div>Pengiriman : FOB International Port of Perak, Surabaya, Indonesia</div>', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Pot ramah lingkungan terbuat dari sabut kelapa yang dipres dengan baik, tidak mudah pecah, tahan lama di bawah sinar matahari dan mampu menyerap air untuk ketersediaan tanah. Salah satu manfaat utama dari Coir Pot adalah mempercantik tanaman, sumber bahan organik untuk media tanam dan bei.</span></div>', 'https://shopee.co.id/product/560896596/18708678812?smtt=0.560916181-1654438568.3', '2022-06-09 05:06:33', '2022-06-09 05:06:33'),
(5, 'Cocopeat', 'cocopeat.jpg', '<div style=\"text-align: left;\">1. Warna : Coklat</div><div style=\"text-align: left;\">2. Kelembaban : 12%-40%</div><div style=\"text-align: left;\">3. Kotoran : +/- 5%</div><div style=\"text-align: left;\">4. Berat : 15 kg/tas</div><div style=\"text-align: left;\">5. Wadah:</div><div style=\"text-align: left;\">- 20 kaki = 1000-1200 tas</div><div style=\"text-align: left;\">- 40 kaki = 1500-1666 tas</div><div style=\"text-align: left;\">- kubus setinggi 40 kaki = 1700-1800 tas</div><div style=\"text-align: left;\">Pengiriman : FOB International Port of Perak, Surabaya, Indonesia</div>', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Cocopeat dianggap sebagai media tanam yang ideal. Serbuk cocopeat yang diperoleh disaring, dicuci, dikeringkan dan terakhir dipadatkan menjadi balok. Balok dapat digunakan untuk berbagai kebutuhan penanaman. Sabut dikenal dengan hormon akar alami dan bahan antijamurnya.</span></div>', 'https://shopee.co.id/product/560896596/15886679794?smtt=0.560916181-1654438515.3', '2022-06-09 05:06:57', '2022-06-09 05:06:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_team`
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
-- Dumping data untuk tabel `tb_team`
--

INSERT INTO `tb_team` (`ID_MEMBER`, `ID_JABATAN`, `NAMA_MEMBER`, `FOTO`, `MOTTO`, `FACEBOOK`, `IG`, `LINKEDIN`, `EMAIL`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 8, 'Moh Saidul Musthofa', 'sayyid.jpg', '\"Dalam batas kemampuanmu, membantu seseorang adalah sebuah tanggung jawab\"', '', '', 'https://www.linkedin.com/in/moh-saidul-musthofa-7608801a7', 'mohsaidulmusthofa@gmail.com', '2021-11-21 04:42:37', '2022-06-08 16:26:33'),
(2, 8, 'Andrea Santana Adzani', 'andre.jpg', '\"Setiap perjuang akan berujung kemenangan yang gemilang\"', '', '', 'https://www.linkedin.com/mwlite/in/andrea-santana-adzani-7577691a6', 'andrea.santana986@gmail.com', '2021-11-21 04:42:37', '2022-06-08 16:22:34'),
(6, 3, 'asdasd', 'asd.jpg', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd@gmail.com', '2022-06-05 13:33:21', '2022-06-05 13:33:21'),
(7, 8, 'Ratna Dwi Kristina Sari', '1654705425.jpg', '\"Hidup harus penuh tantangan untuk menuju hari yang gemilang\"', '', '', 'www.linkedin.com/in/ratna-dwi-3b80961a9/', 'ratnadwikristinasari27@gmail.com', '2022-06-08 16:23:44', '2022-06-08 16:23:44'),
(8, 8, 'M Al-Ghazali', '1654705543.jpg', '\"Berhentilan malas karena waktu tidak menunggumu untuk malas-malasan\"', '', '', 'https://www.linkedin.com/in/m-al-ghazali-si-17b7a721b/', 'unyinga@gmail.com', '2022-06-08 16:25:43', '2022-06-08 16:25:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_auth`
--
ALTER TABLE `tb_auth`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Indeks untuk tabel `tb_bisnis`
--
ALTER TABLE `tb_bisnis`
  ADD PRIMARY KEY (`ID_BISNIS`);

--
-- Indeks untuk tabel `tb_counter`
--
ALTER TABLE `tb_counter`
  ADD PRIMARY KEY (`ID_COUNTER`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`ID_JABATAN`);

--
-- Indeks untuk tabel `tb_ourmission`
--
ALTER TABLE `tb_ourmission`
  ADD PRIMARY KEY (`ID_OURMISSION`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`ID_PESAN`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`ID_PRODUK`);

--
-- Indeks untuk tabel `tb_team`
--
ALTER TABLE `tb_team`
  ADD PRIMARY KEY (`ID_MEMBER`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_auth`
--
ALTER TABLE `tb_auth`
  MODIFY `ID_USER` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_bisnis`
--
ALTER TABLE `tb_bisnis`
  MODIFY `ID_BISNIS` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_counter`
--
ALTER TABLE `tb_counter`
  MODIFY `ID_COUNTER` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `ID_JABATAN` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_ourmission`
--
ALTER TABLE `tb_ourmission`
  MODIFY `ID_OURMISSION` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `ID_PESAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `ID_PRODUK` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_team`
--
ALTER TABLE `tb_team`
  MODIFY `ID_MEMBER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
