-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2022 pada 23.09
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ahp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `nagari` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama`, `nik`, `kecamatan`, `nagari`) VALUES
(51, 'Pak Zul', '1301082112730002', '-', '500.000'),
(52, 'Buk El', '1301084904810002', '-', '700.000'),
(50, 'Buk Yarni', '1301084304740004', '-', '200.000'),
(49, 'Pak Acin', '1412011054840001', '-', '700.000'),
(60, 'Buk Yumerti', '1301086502790001', '+6282271562081', '500000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_penerima`
--

CREATE TABLE `calon_penerima` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `nagari` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_penerima`
--

INSERT INTO `calon_penerima` (`id`, `nama`, `nik`, `kecamatan`, `nagari`) VALUES
(15, 'Pak Acin', '1412011054840001', '-', '700.000'),
(16, 'Buk Yarni', '1301084304740004', '-', '200.000'),
(17, 'Pak Zul', '1301082112730002', '-', '500.000'),
(18, 'Buk El', '1301084904810002', '-', '700.000'),
(19, 'Buk Yeni', '3216074605780014', '-', '400.000'),
(20, 'Buk Nenan', '1301084107700099', '-', '600.000'),
(22, 'Buk Yumerti', '1301086502790001', '+6282271562081', '500000'),
(23, 'Buk Yanti', '13010084202790002', '+6282280473621', '700000'),
(24, 'Pak Bustam', '1301082108600001', '082376431200', '1000000'),
(25, 'Buk Mardhana', '1301084704720004', '082200915529', '500000'),
(26, '24234', 'afawef', 'asfsdf', '234324'),
(29, 'Ikan Kakap Merah', '123', 'kakap', 'merah'),
(30, 'anton', '123', 'wfwef', 'wefwe'),
(31, 'anton', 'wer', 'we', 'wrwe'),
(33, '12', '12', '123', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ir`
--

CREATE TABLE `ir` (
  `jumlah` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ir`
--

INSERT INTO `ir` (`jumlah`, `nilai`) VALUES
(1, 0),
(2, 0),
(3, 0.58),
(4, 0.9),
(5, 1.12),
(6, 1.24),
(7, 1.32),
(8, 1.41),
(9, 1.45),
(10, 1.49),
(11, 1.51),
(12, 1.48),
(13, 1.56),
(14, 1.57),
(15, 1.59);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`) VALUES
(45, 'Jumlah Pinjaman'),
(44, 'Jumlah Anak'),
(43, 'Usia'),
(42, 'Status Pernikahan'),
(41, 'Pendapatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `userid` text NOT NULL,
  `nama` text NOT NULL,
  `sandi` varchar(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbandingan_alternatif`
--

CREATE TABLE `perbandingan_alternatif` (
  `id` int(11) NOT NULL,
  `alternatif1` int(11) NOT NULL,
  `alternatif2` int(11) NOT NULL,
  `pembanding` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perbandingan_alternatif`
--

INSERT INTO `perbandingan_alternatif` (`id`, `alternatif1`, `alternatif2`, `pembanding`, `nilai`) VALUES
(245, 49, 50, 41, 0.333333),
(246, 49, 51, 41, 2),
(247, 49, 52, 41, 2),
(339, 52, 60, 45, 1),
(249, 50, 51, 41, 5),
(250, 50, 52, 41, 3),
(338, 51, 60, 45, 1),
(252, 51, 52, 41, 1),
(337, 50, 60, 45, 1),
(336, 49, 60, 45, 1),
(255, 49, 50, 42, 1),
(256, 49, 51, 42, 1),
(257, 49, 52, 42, 1),
(335, 52, 60, 44, 1),
(259, 50, 51, 42, 1),
(260, 50, 52, 42, 1),
(334, 51, 60, 44, 1),
(262, 51, 52, 42, 0.7),
(333, 50, 60, 44, 1),
(332, 49, 60, 44, 1),
(265, 49, 50, 43, 0.333333),
(266, 49, 51, 43, 0.5),
(267, 49, 52, 43, 0.333333),
(331, 52, 60, 43, 1),
(269, 50, 51, 43, 2),
(270, 50, 52, 43, 0.333333),
(330, 51, 60, 43, 1),
(272, 51, 52, 43, 0.5),
(329, 50, 60, 43, 1),
(328, 49, 60, 43, 1),
(275, 49, 50, 44, 1),
(276, 49, 51, 44, 3),
(277, 49, 52, 44, 1),
(327, 52, 60, 42, 0.5),
(279, 50, 51, 44, 3),
(280, 50, 52, 44, 3),
(326, 51, 60, 42, 1),
(282, 51, 52, 44, 1),
(325, 50, 60, 42, 1),
(324, 49, 60, 42, 1),
(285, 49, 50, 45, 0.2),
(286, 49, 51, 45, 1),
(287, 49, 52, 45, 1),
(323, 52, 60, 41, 1),
(289, 50, 51, 45, 2),
(290, 50, 52, 45, 2),
(322, 51, 60, 41, 1),
(292, 51, 52, 45, 0.5),
(321, 50, 60, 41, 1),
(320, 49, 60, 41, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbandingan_kriteria`
--

CREATE TABLE `perbandingan_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria1` int(11) NOT NULL,
  `kriteria2` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perbandingan_kriteria`
--

INSERT INTO `perbandingan_kriteria` (`id`, `kriteria1`, `kriteria2`, `nilai`) VALUES
(36, 41, 42, 5),
(37, 41, 43, 7),
(38, 41, 44, 5),
(39, 41, 45, 1),
(40, 42, 43, 2),
(41, 42, 44, 2),
(42, 42, 45, 0.2),
(43, 43, 44, 3),
(44, 43, 45, 0.142857),
(45, 44, 45, 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pv_alternatif`
--

CREATE TABLE `pv_alternatif` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pv_alternatif`
--

INSERT INTO `pv_alternatif` (`id`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(174, 49, 41, 0.186589),
(175, 50, 41, 0.384768),
(176, 51, 41, 0.11562),
(177, 52, 41, 0.124922),
(208, 60, 45, 0.189657),
(179, 49, 42, 0.196374),
(180, 50, 42, 0.196374),
(181, 51, 42, 0.185848),
(182, 52, 42, 0.189942),
(207, 60, 44, 0.191493),
(184, 49, 43, 0.107866),
(185, 50, 43, 0.216877),
(186, 51, 43, 0.159491),
(187, 52, 43, 0.327554),
(206, 60, 43, 0.188213),
(189, 49, 44, 0.235937),
(190, 50, 44, 0.29308),
(191, 51, 44, 0.12436),
(192, 52, 44, 0.155129),
(205, 60, 42, 0.231462),
(194, 49, 45, 0.139657),
(195, 50, 45, 0.343481),
(196, 51, 45, 0.140225),
(197, 52, 45, 0.186979),
(204, 60, 41, 0.188101);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pv_kriteria`
--

CREATE TABLE `pv_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pv_kriteria`
--

INSERT INTO `pv_kriteria` (`id_kriteria`, `nilai`) VALUES
(45, 0.383906),
(44, 0.0561402),
(43, 0.0798437),
(42, 0.0962043),
(41, 0.383906);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranking`
--

CREATE TABLE `ranking` (
  `id_alternatif` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ranking`
--

INSERT INTO `ranking` (`id_alternatif`, `nilai`) VALUES
(49, 0.165998),
(50, 0.332241),
(51, 0.135816),
(52, 0.172876),
(60, 0.193069);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `jabatan`, `username`, `password`, `created_at`) VALUES
(3, 'jely', 'User', 'jely@gmail.com', '12345', '2022-01-18 14:42:42'),
(4, 'Elfiyanti', 'Staff', 'Enti', '54321', '2022-01-24 17:55:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `calon_penerima`
--
ALTER TABLE `calon_penerima`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ir`
--
ALTER TABLE `ir`
  ADD PRIMARY KEY (`jumlah`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perbandingan_alternatif`
--
ALTER TABLE `perbandingan_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pv_kriteria`
--
ALTER TABLE `pv_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `calon_penerima`
--
ALTER TABLE `calon_penerima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perbandingan_alternatif`
--
ALTER TABLE `perbandingan_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT untuk tabel `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
