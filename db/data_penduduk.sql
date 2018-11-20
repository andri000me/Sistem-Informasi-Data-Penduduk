-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 08:28 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_akta`
--

CREATE TABLE `data_akta` (
  `id_akta` int(11) NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_akta`
--

INSERT INTO `data_akta` (`id_akta`, `no_akta`, `nama_lengkap`, `tanggal_lahir`, `tempat_lahir`, `nama_ayah`, `jk`) VALUES
(5, '348731664389', 'Sofiah Jamilah', '1998-05-12', 'Bandung', 'H.Sabarna', 'Perempuan'),
(6, '46735628685', 'Salwa Annisa', '1998-05-12', 'Bandung', 'Asep', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `data_datang`
--

CREATE TABLE `data_datang` (
  `id_datang` int(11) NOT NULL,
  `tanggal_datang` date NOT NULL,
  `nik` varchar(50) NOT NULL,
  `asal` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_kematian`
--

CREATE TABLE `data_kematian` (
  `id_kematian` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tempat_mati` varchar(30) NOT NULL,
  `tanggal_mati` date NOT NULL,
  `umur` int(5) NOT NULL,
  `sebab_mati` varchar(35) NOT NULL,
  `makam` varchar(35) NOT NULL,
  `nama_pelapor` varchar(35) NOT NULL,
  `hubungan_pelapor` varchar(35) NOT NULL,
  `id_ktp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_kk`
--

CREATE TABLE `data_kk` (
  `id_kk` int(11) NOT NULL,
  `no_kk` varchar(15) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `rt_rw` varchar(10) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kk`
--

INSERT INTO `data_kk` (`id_kk`, `no_kk`, `nik`, `dusun`, `rt_rw`, `kelurahan`, `kecamatan`, `provinsi`) VALUES
(1, '321404270', '3214042209094884', 'Empang Sari', '10/01', 'Plered', 'Plered', 'Jawa Barat'),
(2, '3132478346', '3214042705970008', 'Empang Sari', '20/09', 'Plered', 'Plered', 'Jawa Barat'),
(4, '1342243434', '32948754756982', 'Citeko Kaler', '10/02', 'Plered', 'Plered', 'Jawa Barat'),
(5, '4565657321334', '3214042705970003', 'Empang Sari', '12/04', 'Plered', 'Plered', 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `data_ktp`
--

CREATE TABLE `data_ktp` (
  `id_ktp` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `goldar` enum('A','B','AB','O') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt_rw` varchar(10) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `agama` enum('Islam','Kristen','Budha','Hindu') NOT NULL,
  `status` varchar(35) NOT NULL,
  `pekerjaan` varchar(35) NOT NULL,
  `kewarganegaraan` varchar(35) NOT NULL,
  `masa` date NOT NULL,
  `keterangan` enum('masih hidup','sudah meninggal','pindah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_ktp`
--

INSERT INTO `data_ktp` (`id_ktp`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `goldar`, `alamat`, `rt_rw`, `kelurahan`, `kecamatan`, `agama`, `status`, `pekerjaan`, `kewarganegaraan`, `masa`, `keterangan`) VALUES
(6, '3214042209094884', 'Sofiah Jamilah', 'Bandung', '1998-05-12', 'Perempuan', 'AB', 'Kp.Empang Sari', '10/02', 'Plered', 'Plered', 'Islam', 'Belum Menikah', 'Mahasiswi', 'Indonesia', '2018-08-11', 'masih hidup'),
(7, '3214042705970008', 'Salwa annisa', 'Purwakarta', '1998-05-12', 'Perempuan', 'AB', 'Kp.Empang Sari', '10/02', 'Plered', 'Plered', 'Islam', 'Belum Menikah', 'Mahasiswi', 'Indonesia', '2018-08-11', 'masih hidup'),
(8, '32948754756982', 'Resti Asfiani', 'Purwakarta', '1997-02-11', 'Perempuan', 'B', 'Kp. Rawa Bogo', '20/02', 'Rawa Sari', 'Rawa Sari', 'Islam', 'Belum Menikah', 'Mahasiswi', 'Indonesia', '2018-08-11', 'pindah'),
(10, '3214042705970003', 'Aqkly Hermawan', 'Jakarta', '1998-05-12', 'Laki-Laki', 'AB', 'Kp.Empang Sari', '12/04', 'Plered', 'Plered', 'Islam', 'Belum Menikah', 'Mahasiswa', 'Indonesia', '2018-08-11', 'masih hidup');

-- --------------------------------------------------------

--
-- Table structure for table `data_pindah`
--

CREATE TABLE `data_pindah` (
  `id_pindah` int(11) NOT NULL,
  `tanggal_pindah` date NOT NULL,
  `nik` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `id_ktp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pindah`
--

INSERT INTO `data_pindah` (`id_pindah`, `tanggal_pindah`, `nik`, `keterangan`, `id_ktp`) VALUES
(5, '2018-07-11', '32948754756982', 'Sudah Tidak Nayaman Lagi', 8);

-- --------------------------------------------------------

--
-- Table structure for table `detail_kk`
--

CREATE TABLE `detail_kk` (
  `id_detail_kk` int(11) NOT NULL,
  `no_kk` varchar(15) NOT NULL,
  `nik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kk`
--

INSERT INTO `detail_kk` (`id_detail_kk`, `no_kk`, `nik`) VALUES
(1, '3132478346', '3214042705970008'),
(3, '321404270', '3214042209094884');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`) VALUES
('2', 'Aqkly Herma', 'aqkly', '9fb358aa8e8a4ea512a8e8e317c2c1f9753bec59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_akta`
--
ALTER TABLE `data_akta`
  ADD PRIMARY KEY (`id_akta`);

--
-- Indexes for table `data_datang`
--
ALTER TABLE `data_datang`
  ADD PRIMARY KEY (`id_datang`);

--
-- Indexes for table `data_kematian`
--
ALTER TABLE `data_kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indexes for table `data_kk`
--
ALTER TABLE `data_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `data_ktp`
--
ALTER TABLE `data_ktp`
  ADD PRIMARY KEY (`id_ktp`);

--
-- Indexes for table `data_pindah`
--
ALTER TABLE `data_pindah`
  ADD PRIMARY KEY (`id_pindah`);

--
-- Indexes for table `detail_kk`
--
ALTER TABLE `detail_kk`
  ADD PRIMARY KEY (`id_detail_kk`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_akta`
--
ALTER TABLE `data_akta`
  MODIFY `id_akta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_datang`
--
ALTER TABLE `data_datang`
  MODIFY `id_datang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_kematian`
--
ALTER TABLE `data_kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_kk`
--
ALTER TABLE `data_kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_ktp`
--
ALTER TABLE `data_ktp`
  MODIFY `id_ktp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_pindah`
--
ALTER TABLE `data_pindah`
  MODIFY `id_pindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_kk`
--
ALTER TABLE `detail_kk`
  MODIFY `id_detail_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
