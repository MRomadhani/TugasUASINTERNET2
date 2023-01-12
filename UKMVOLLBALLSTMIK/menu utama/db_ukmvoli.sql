-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 11:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukmvoli`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'user', '1234'),
(2, 'bagas', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(11) NOT NULL,
  `category_gallery` varchar(50) NOT NULL,
  `pict_gallery` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `category_gallery`, `pict_gallery`) VALUES
(1, 'PERKENALAN UKM VOLI DI AULA BERSUJUD STMIK INDONES', 'fto1.jpg'),
(2, 'FOTO BERSAMA Anggota UKM VOLI STMIK BANJARMASIN', 'fto2.jpg'),
(3, 'FOTO BERSAMA ANGGOTA UKM VOLI STMIK BANJARMASIN', 'fto3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `id_inbox` int(11) NOT NULL,
  `tgl_masuk` datetime DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`id_inbox`, `tgl_masuk`, `nama`, `email`, `komen`) VALUES
(2, '2022-12-26 04:22:41', 'dina', 'dina123@gmail.com', 'aku mau gabung'),
(3, '2022-12-26 04:30:48', 'wahyu', 'wahyu123@gmail.com', 'aku suka bermain voli dan aku ingin bergabung dengan ukm'),
(4, '2022-12-28 09:53:22', 'Dinda', 'Dinda400@gmail.com', 'Kak aku ijin hari kamis nggak latihan karena masih sakit :('),
(5, '2022-12-28 11:59:41', 'sriayu', 'sri@gmail.com', 'hari minggu latihan ngga kah ?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Tgl_lahir` varchar(20) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `No_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id_pendaftaran`, `Nama`, `Alamat`, `Tgl_lahir`, `Jenis_kelamin`, `Email`, `No_hp`) VALUES
(1, 'wahyu', 'Banjarmasin', '11/01/2023', 'Laki-Laki', 'wahyu123@gmail.com', '085820843011'),
(2, 'Agus', 'Banjarmasin', '05/06/2001', 'Laki-Laki', 'Bgs000@gmail.com', '085820843012'),
(3, 'Rian', 'Banjarmasin', '20/02/2000', 'Laki-Laki', 'Ryen9129@gmail.com', '085820843017'),
(4, 'Rudi', 'Banjarmasin', '08/06/2000', 'Laki-Laki', 'Rud1@gmail.com', '085820842155');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id_profile` int(11) NOT NULL,
  `titlewebsite` text NOT NULL,
  `titleparagraf` text NOT NULL,
  `welcomeparagraf` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `copyright` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id_profile`, `titlewebsite`, `titleparagraf`, `welcomeparagraf`, `author`, `copyright`, `description`, `keywords`, `icon`) VALUES
(1, '<em>I</em>UKM VOLI STMIK', '<span>UKM VOLI STMIK </span>', 'Selamat Datang diwebsite UKM VOLi STMIK', 'Mang Adoel', 'UKM VOLI STMIK', 'Web UKM Voli STMIK', 'Melatih kerjasama dan kekompakan tim', 'logovolly.png'),
(2, 'UKM VOLI STMIK BANJARMASIN', 'UKM VOLI', 'UKM YANG MENGEMBANGKAN BAKAT PERMAINAN BOLA VOLI', 'ANTON', 'UKMVOLISTMIK', 'SELAMAT DATANG DI UKM VOLI STMIK', 'LOYALITAS TANPA BATAS !!', 'logovolly.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`id_inbox`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `id_inbox` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
