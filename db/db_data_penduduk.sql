-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Feb 2020 pada 03.53
-- Versi server: 5.7.24
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_data_penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_akta`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_datang`
--

CREATE TABLE `data_datang` (
  `id_datang` int(11) NOT NULL,
  `tanggal_datang` date NOT NULL,
  `nik` varchar(50) NOT NULL,
  `asal` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kematian`
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
-- Struktur dari tabel `data_kk`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ktp`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pindah`
--

CREATE TABLE `data_pindah` (
  `id_pindah` int(11) NOT NULL,
  `tanggal_pindah` date NOT NULL,
  `nik` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `id_ktp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kk`
--

CREATE TABLE `detail_kk` (
  `id_detail_kk` int(11) NOT NULL,
  `no_kk` varchar(15) NOT NULL,
  `nik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`) VALUES
('2', 'Aqkly', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_akta`
--
ALTER TABLE `data_akta`
  ADD PRIMARY KEY (`id_akta`);

--
-- Indeks untuk tabel `data_datang`
--
ALTER TABLE `data_datang`
  ADD PRIMARY KEY (`id_datang`);

--
-- Indeks untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indeks untuk tabel `data_kk`
--
ALTER TABLE `data_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indeks untuk tabel `data_ktp`
--
ALTER TABLE `data_ktp`
  ADD PRIMARY KEY (`id_ktp`);

--
-- Indeks untuk tabel `data_pindah`
--
ALTER TABLE `data_pindah`
  ADD PRIMARY KEY (`id_pindah`);

--
-- Indeks untuk tabel `detail_kk`
--
ALTER TABLE `detail_kk`
  ADD PRIMARY KEY (`id_detail_kk`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_akta`
--
ALTER TABLE `data_akta`
  MODIFY `id_akta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_datang`
--
ALTER TABLE `data_datang`
  MODIFY `id_datang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_kk`
--
ALTER TABLE `data_kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_ktp`
--
ALTER TABLE `data_ktp`
  MODIFY `id_ktp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_pindah`
--
ALTER TABLE `data_pindah`
  MODIFY `id_pindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `detail_kk`
--
ALTER TABLE `detail_kk`
  MODIFY `id_detail_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
