-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 12:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siwikode`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kuliner`
--

CREATE TABLE `jenis_kuliner` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_kuliner`
--

INSERT INTO `jenis_kuliner` (`id`, `nama`) VALUES
(1, 'Tidak ada data'),
(2, 'Restaurant'),
(3, 'Pasar '),
(4, 'Cafe'),
(6, 'Mini Market');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_wisata`
--

CREATE TABLE `jenis_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_wisata`
--

INSERT INTO `jenis_wisata` (`id`, `nama`) VALUES
(1, 'Tidak ada'),
(2, 'Kuliner'),
(4, 'Museum'),
(6, 'Kolam Renang'),
(10, 'Taman Wisata');

-- --------------------------------------------------------

--
-- Table structure for table `profesi`
--

CREATE TABLE `profesi` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profesi`
--

INSERT INTO `profesi` (`id`, `nama`) VALUES
(1, 'Artist'),
(2, 'Pejabat'),
(3, 'Mahasiswa'),
(4, 'Pegawai Swasta'),
(5, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `wisata_id` int(11) NOT NULL,
  `profesi_id` int(11) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `komentar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(7, 'Nurul', '3fc0a7acf087f549ac2b266baf94b8b1');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis_wisata_id` int(11) NOT NULL,
  `fasilitas` text DEFAULT NULL,
  `bintang` smallint(6) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `latlong` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `jenis_kuliner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `deskripsi`, `jenis_wisata_id`, `fasilitas`, `bintang`, `kontak`, `alamat`, `latlong`, `email`, `web`, `jenis_kuliner_id`) VALUES
(5, 'Kolam Renang', 'erer', 1, 'gfgdf', 5, 'dfsdf', 'sdfsdf', 'sdfsdfgdg', 'dsfsdfsdfsdfs', 'sdfsf', 1),
(17, 'Mie Ayam', 'Warung Mie Ayam', 1, 'Test', 5, '+62', 'Test', 'Test', 'user@gmail.com', 'Test', 2),
(19, 'Kenbun Raya Bogor', 'Kebun', 10, 'Bagus', 5, '+62', 'Bogor', 'Test', 'user@gmail.com', 'Test', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profesi`
--
ALTER TABLE `profesi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_testimoni_wisata1_idx` (`wisata_id`),
  ADD KEY `fk_testimoni_profesi1_idx` (`profesi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wisata_jenis_wisata_idx` (`jenis_wisata_id`),
  ADD KEY `fk_wisata_jenis_kuliner1_idx` (`jenis_kuliner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `fk_testimoni_profesi1` FOREIGN KEY (`profesi_id`) REFERENCES `profesi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_testimoni_wisata1` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `fk_wisata_jenis_kuliner1` FOREIGN KEY (`jenis_kuliner_id`) REFERENCES `jenis_kuliner` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wisata_jenis_wisata` FOREIGN KEY (`jenis_wisata_id`) REFERENCES `jenis_wisata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
