-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 06:12 AM
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
-- Database: `si_aglonema`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_obat`
--

CREATE TABLE `data_obat` (
  `id_obat` int(11) NOT NULL,
  `jenis_obat` varchar(100) NOT NULL,
  `kegunaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_obat`
--

INSERT INTO `data_obat` (`id_obat`, `jenis_obat`, `kegunaan`) VALUES
(9, 'Fungisida', 'jamur'),
(10, 'Petisida', 'hama'),
(11, '-', 'hama');

-- --------------------------------------------------------

--
-- Table structure for table `data_tanaman`
--

CREATE TABLE `data_tanaman` (
  `id_tanaman` int(11) NOT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `ciri_khas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_tanaman`
--

INSERT INTO `data_tanaman` (`id_tanaman`, `id_jenis`, `ciri_khas`) VALUES
(9, 24, 'Aglaonema dengan daun berwarna putih halus'),
(10, 19, 'Aglaonema dengan daun bewarna merah pekat'),
(11, 20, 'Aglaonema dengan daun bewarna merah mudah'),
(12, 21, 'Aglaonema dengan daun bewarna merah sedikit keunguan'),
(13, 23, 'Aglaonema dengan daun bewarna hijau muda dengan tangkai bewarna hijau terang'),
(14, 24, 'Aglaonema dengan daun bewarna putih menyeluruh'),
(15, 25, 'Aglaonema dengan daun bewarna merah '),
(16, 26, 'Aglaonema dengan daun perpaduan warna hitam dan merah'),
(17, 27, 'Aglaonema dengan daun bewarna merah dengan bentuk memanjang'),
(18, 28, 'Aglaonema dengan daun bewarna merah bercampur putih dengan bentuk memanjang'),
(19, 29, 'Aglaonema dengan daun bewarna hijau muda dengan bentuk melebar'),
(20, 30, 'Aglaonema dengan daun bewarna hijau muda berpadu putih'),
(21, 31, 'Aglaonema dengan daun bewarna orange berpadu coklat'),
(22, 32, 'Aglaonema dengan  daun bewarna orange '),
(23, 33, 'Aglaonema dengan daun bewarna orange muda'),
(24, 34, 'Aglaonema dengan daun bewarna pink dengan titik bewarna hitam'),
(25, 35, 'Aglaonema dengan daun bewarna hijau muda'),
(26, 36, 'Aglaonema dengan 3 warna putih hijau dan coklat'),
(27, 37, 'Aglaonema dengan daun bewarna hijau terang dengan ukuran daun yang besar'),
(28, 38, 'Aglaonema dengan daun kecil bewarna hijau muda'),
(29, 39, 'Aglaonema dengan daun kecil bewarna hijau muda berpadu dengan warna putih'),
(30, 40, 'Aglaonema dengan daun kecil bewarna putih dan merah'),
(31, 41, 'Aglaonema dengan daun kecil bewarna putih dan hijau muda'),
(32, 42, 'Aglaonema dengan daun memanjang bewarna merah dan hijau tua'),
(33, 43, 'Aglaonema dengan bentuk daun memanjang dengan warna hijau tua'),
(34, 44, 'Aglaonema dengan bentuk daun memanjang dengan warna hijau tua dan coklat'),
(35, 45, 'Aglaonema dengan bentuk daun kecil bewarna putih sedikit coklat'),
(36, 46, 'Aglaonema dengan daun kecil bewarna putih pucat'),
(37, 47, 'Aglaonema dengan daun kecil bewarna putih dan hijau muda'),
(38, 48, 'Aglaonema dengan bentuk daun memanjang bewarna hijau muda'),
(39, 49, 'Aglaonema dengan bentuk daun melebar dengan warna hijau dan coklat'),
(40, 50, 'Aglaonema dengan bentuk daun melebar bewarna hijau dan coklat'),
(41, 51, 'Aglaonema dengan bentuk daun kecil dengan warna merah tua dan coklat'),
(42, 52, 'Aglaonema dengan bentuk daun melebar dengan warna hijau pekat berpadu coklat'),
(43, 53, 'Aglaonema dengan bentuk daun melebar bewarna hijau muda dengan garis coklat'),
(44, 54, 'Aglaonema dengan daun melebar bewarna merah kehijauan'),
(45, 55, 'Aglaonema dengan warna kuning keemasan dan hijau muda'),
(46, 56, 'Aglaonema dengan daun bewarna merah dengan bercak hijau tua'),
(47, 57, 'Aglaonema dengan bentuk memanjang bertangkai merah dengan warna bercorak hijau muda '),
(48, 58, 'Aglaonema dengan daun melebar dengan warna kuning keemasan bercorak sedikit hijau muda');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_aglonema`
--

CREATE TABLE `jenis_aglonema` (
  `id_jenis` int(11) NOT NULL,
  `jenis_aglonema` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_aglonema`
--

INSERT INTO `jenis_aglonema` (`id_jenis`, `jenis_aglonema`) VALUES
(19, 'Suksomm'),
(20, 'Red Anjamani'),
(21, 'Red Cathrina'),
(22, 'Pink Cathrina'),
(23, 'Gadjah Mada'),
(24, 'Super White'),
(25, 'Red Majesty'),
(26, 'Black Sumatera'),
(27, 'Red Sumatera'),
(28, 'Red Sumatera Mutasi'),
(29, 'Bigpapa'),
(30, 'Bigroy'),
(31, 'Kochin'),
(32, 'Kochin Tembaga'),
(33, 'Sultan Brunei'),
(34, 'Pink Dalmation'),
(35, 'Serena'),
(36, 'Trhee Colour'),
(37, 'Mahazety'),
(38, 'Legacy'),
(39, 'White Legacy'),
(40, 'Red Legacy'),
(41, 'Green Legacy'),
(42, 'Red Lipstick'),
(43, 'Lipstick '),
(44, 'Greek Peterpan'),
(45, 'Snow White'),
(46, 'Snow White Mutasi'),
(47, 'Frozen'),
(48, 'Yohana'),
(49, 'Red Stardust'),
(50, 'Stardust'),
(51, 'Black Maroon'),
(52, 'Ayu Green'),
(53, 'Striptis'),
(54, 'Ayunindi'),
(55, 'Moonlight'),
(56, 'Venus'),
(57, 'Hot Lady'),
(58, 'Tequila Sunrise');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_gejala`
--

CREATE TABLE `jenis_gejala` (
  `id_gejala` int(11) NOT NULL,
  `id_penyakit` int(11) DEFAULT NULL,
  `id_obat` int(11) DEFAULT NULL,
  `karakteristik_gejala` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_gejala`
--

INSERT INTO `jenis_gejala` (`id_gejala`, `id_penyakit`, `id_obat`, `karakteristik_gejala`) VALUES
(2, 11, NULL, 'Daun keringvfefef'),
(5, 4, 9, 'Daun Membusuk'),
(6, 4, 9, 'Tangkai / Batang Membusuk'),
(7, 4, 9, 'Daun dan Tangkai Membusuk'),
(8, 7, 9, 'Akar Membusuk'),
(9, 9, 9, 'Daun Tanaman Layu'),
(10, 9, 9, 'Daun dan Tangkai Tanaman Layu'),
(11, 10, 10, 'Bintik Putih Halus Pada Daun Tanaman'),
(12, 10, 10, 'Bintik Putih Halus Pada Batang'),
(13, 10, 10, 'Bintik Putih Halus Pada Batang Dan Daun'),
(14, 11, 10, 'Bintik Putih Halus Pada Daun'),
(15, 12, 10, 'Daun Aglaonema Berlubang halus'),
(16, 13, 10, 'Daun Aglaonema Berlubang '),
(17, 14, 10, 'Daun Aglaonema Berlubang'),
(18, 6, 9, 'Bercak Merah Pada Daun Aglaonema'),
(19, 6, 9, 'Bercak Daun Seperti Terbakar'),
(20, 5, 9, 'Daun dan Tangkai Aglaonema Berjamur '),
(21, 8, 9, 'Daun Aglaonema Mengeriput'),
(22, 8, 9, 'Daun Tanaman Mengeriting'),
(23, 4, 9, 'Daun bewarna kecoklatan'),
(24, 12, 10, 'Daun Aglaonema Berlubang');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_penyakit`
--

CREATE TABLE `jenis_penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `jenis_penyakit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_penyakit`
--

INSERT INTO `jenis_penyakit` (`id_penyakit`, `jenis_penyakit`) VALUES
(4, 'Botrystis'),
(5, 'Leaf Spot'),
(6, 'Fusarium Stem Root'),
(7, 'Jamur Phytium'),
(8, 'Wrinkled Leaves'),
(9, 'Layu Bakteri'),
(10, 'Mealy Bugs'),
(11, 'Root Mealy Bugs'),
(12, 'Ulat'),
(13, 'Belalang'),
(14, 'Keong');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `gambar`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$4R6Cwcp30mBuTXjW2CJfDu2InCfwC1zCgaIl.U/g7vAS/P7pg7EQi', 2, 1, '2022-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Superadmin'),
(2, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `data_tanaman`
--
ALTER TABLE `data_tanaman`
  ADD PRIMARY KEY (`id_tanaman`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `jenis_aglonema`
--
ALTER TABLE `jenis_aglonema`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `jenis_gejala`
--
ALTER TABLE `jenis_gejala`
  ADD PRIMARY KEY (`id_gejala`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `jenis_penyakit`
--
ALTER TABLE `jenis_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_obat`
--
ALTER TABLE `data_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_tanaman`
--
ALTER TABLE `data_tanaman`
  MODIFY `id_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `jenis_aglonema`
--
ALTER TABLE `jenis_aglonema`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `jenis_gejala`
--
ALTER TABLE `jenis_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `jenis_penyakit`
--
ALTER TABLE `jenis_penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_tanaman`
--
ALTER TABLE `data_tanaman`
  ADD CONSTRAINT `id_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_aglonema` (`id_jenis`);

--
-- Constraints for table `jenis_gejala`
--
ALTER TABLE `jenis_gejala`
  ADD CONSTRAINT `id_obat` FOREIGN KEY (`id_obat`) REFERENCES `data_obat` (`id_obat`),
  ADD CONSTRAINT `id_penyakit` FOREIGN KEY (`id_penyakit`) REFERENCES `jenis_penyakit` (`id_penyakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
