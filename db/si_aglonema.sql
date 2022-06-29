-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2022 pada 21.27
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

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
-- Struktur dari tabel `data_obat`
--

CREATE TABLE `data_obat` (
  `id_obat` int(11) NOT NULL,
  `jenis_obat` varchar(100) NOT NULL,
  `kegunaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_obat`
--

INSERT INTO `data_obat` (`id_obat`, `jenis_obat`, `kegunaan`) VALUES
(9, 'Fungisida', 'jamur'),
(10, 'Insektisida', 'hama'),
(11, 'Hibrida', 'hama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tanaman`
--

CREATE TABLE `data_tanaman` (
  `id_tanaman` int(11) NOT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `ciri_khas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_tanaman`
--

INSERT INTO `data_tanaman` (`id_tanaman`, `id_jenis`, `ciri_khas`) VALUES
(4, 19, 'Daun berwarna merahhhh'),
(5, 20, 'Daun berwarna Kuning'),
(6, 21, 'Daun berwarna merah ke pink'),
(7, 22, 'Daun berwarna pink'),
(8, 23, 'Daun berwarna hijau dengan tangkai kuning'),
(9, 24, 'Daun bewarna putih ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_aglonema`
--

CREATE TABLE `jenis_aglonema` (
  `id_jenis` int(11) NOT NULL,
  `jenis_aglonema` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_aglonema`
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
(56, 'Venus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_gejala`
--

CREATE TABLE `jenis_gejala` (
  `id_gejala` int(11) NOT NULL,
  `id_penyakit` int(11) DEFAULT NULL,
  `id_obat` int(11) DEFAULT NULL,
  `karakteristik_gejala` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_gejala`
--

INSERT INTO `jenis_gejala` (`id_gejala`, `id_penyakit`, `id_obat`, `karakteristik_gejala`) VALUES
(1, 13, 9, 'Daun Membusuk'),
(2, 11, NULL, 'Daun keringvfefef'),
(4, 14, 11, 'Oke egegefe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_penyakit`
--

CREATE TABLE `jenis_penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `jenis_penyakit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_penyakit`
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
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `gambar`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$4R6Cwcp30mBuTXjW2CJfDu2InCfwC1zCgaIl.U/g7vAS/P7pg7EQi', 2, 1, '2022-06-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Superadmin'),
(2, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `data_tanaman`
--
ALTER TABLE `data_tanaman`
  ADD PRIMARY KEY (`id_tanaman`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `jenis_aglonema`
--
ALTER TABLE `jenis_aglonema`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `jenis_gejala`
--
ALTER TABLE `jenis_gejala`
  ADD PRIMARY KEY (`id_gejala`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indeks untuk tabel `jenis_penyakit`
--
ALTER TABLE `jenis_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_obat`
--
ALTER TABLE `data_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_tanaman`
--
ALTER TABLE `data_tanaman`
  MODIFY `id_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jenis_aglonema`
--
ALTER TABLE `jenis_aglonema`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `jenis_gejala`
--
ALTER TABLE `jenis_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis_penyakit`
--
ALTER TABLE `jenis_penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_tanaman`
--
ALTER TABLE `data_tanaman`
  ADD CONSTRAINT `id_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_aglonema` (`id_jenis`);

--
-- Ketidakleluasaan untuk tabel `jenis_gejala`
--
ALTER TABLE `jenis_gejala`
  ADD CONSTRAINT `id_obat` FOREIGN KEY (`id_obat`) REFERENCES `data_obat` (`id_obat`),
  ADD CONSTRAINT `id_penyakit` FOREIGN KEY (`id_penyakit`) REFERENCES `jenis_penyakit` (`id_penyakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
