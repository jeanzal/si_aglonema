-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 05:53 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `si_aglonema`
--
-- --------------------------------------------------------
--
-- Table structure for table `jenis_aglonema`
--
CREATE TABLE `jenis_aglonema` (
  `id` int(11) NOT NULL,
  `jenis_aglonema` varchar(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `user`
--
INSERT INTO
  `user` (
    `id`,
    `name`,
    `email`,
    `gambar`,
    `password`,
    `role_id`,
    `is_active`,
    `date_created`
  )
VALUES
  (
    1,
    'admin',
    'admin@gmail.com',
    'default.jpg',
    '$2y$10$4R6Cwcp30mBuTXjW2CJfDu2InCfwC1zCgaIl.U/g7vAS/P7pg7EQi',
    2,
    1,
    '0000-00-00'
  );

-- --------------------------------------------------------
--
-- Table structure for table `user_role`
--
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `user_role`
--
INSERT INTO
  `user_role` (`id`, `role`)
VALUES
  (1, 'Superadmin'),
  (2, 'Admin');

--
-- Indexes for dumped tables
--
--
-- Indexes for table `jenis_aglonema`
--
ALTER TABLE
  `jenis_aglonema`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE
  `user`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE
  `user_role`
ADD
  PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `jenis_aglonema`
--
ALTER TABLE
  `jenis_aglonema`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE
  `user`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE
  `user_role`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;