-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2022 pada 02.14
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahpkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `jumlahpinjaman` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama`, `nik`, `nohp`, `jumlahpinjaman`) VALUES
(51, 'Pak Zul', '1301082112730002', '-', '500.000'),
(52, 'Buk El', '1301084904810002', '-', '700.000'),
(50, 'Buk Yarni', '1301084304740004', '-', '200.000'),
(49, 'Pak Acin', '1412011054840001', '-', '700.000'),
(53, 'Buk Yeni', '3216074605780014', '-', '400.000');

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
-- Struktur dari tabel `nasabah`
--

CREATE TABLE `nasabah` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `usia` varchar(255) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `tunjangananak` int(11) NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `statuskawin` enum('belum','sudah','janda','duda') NOT NULL,
  `jumlahpinjaman` varchar(225) NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nasabah`
--

INSERT INTO `nasabah` (`id`, `nama`, `nik`, `nohp`, `usia`, `alamat`, `tunjangananak`, `pendapatan`, `pekerjaan`, `statuskawin`, `jumlahpinjaman`, `bukti`) VALUES
(15, 'Pak Acin', '1412011054840001', '-', '68', 'jln.Pasir Nan Panjang', 3, 650000, 'Buru Gambir ', 'sudah', '700.000', 'pak acin.jpg'),
(16, 'Buk Yarni', '1301084304740004', '-', '48', 'Dusun Labuh', 4, 500000, 'Ibu RT', 'sudah', '200.000', 'IMG-20220119-WA0044.jpg'),
(17, 'Pak Zul', '1301082112730002', '-', '40', 'jln.Pasir Nan Panjang', 4, 350000, 'Pedagang Ikan', 'sudah', '500.000', 'kk pak zul.jpg'),
(18, 'Buk El', '1301084904810002', '-', '30', 'jln.Pasir Nan Panjang', 2, 600000, 'konter pulsa,kuota dan token', 'sudah', '700.000', 'buk el.jpg'),
(19, 'Buk Yeni', '3216074605780014', '-', '33', 'jln.Pasir Nan Panjang', 5, 450000, 'Buru Tani', 'sudah', '400.000', 'IMG-20220119-WA0041.jpg'),
(20, 'Buk Nenan', '1301084107700099', '-', '52', 'jln.Pasir Nan Panjang', 1, 500000, 'Jualan', 'sudah', '600.000', 'IMG-20220119-WA0045.jpg'),
(22, 'Buk Yumerti', '1301086502790001', '+6282271562081', '46', 'ujung Air', 3, 500000, 'Guru Honor', 'sudah', '500000', 'yumerti.jpeg'),
(23, 'Buk Yanti', '13010084202790002', '+6282280473621', '43', 'Jln. silaut', 3, 550000, 'jualan', 'sudah', '700000', 'yaspri.jpeg'),
(24, 'Pak Bustam', '1301082108600001', '082376431200', '62', 'Koto Baru', 5, 1200000, 'Guru', 'sudah', '1000000', 'bustamm.jpeg'),
(25, 'Buk Mardhana', '1301084704720004', '082200915529', '50', 'Pasir Nan Panjang', 4, 700000, 'Petani', 'sudah', '500000', 'mardhanaa.jpeg');

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
(248, 49, 53, 41, 2),
(249, 50, 51, 41, 5),
(250, 50, 52, 41, 3),
(251, 50, 53, 41, 5),
(252, 51, 52, 41, 1),
(253, 51, 53, 41, 0.5),
(254, 52, 53, 41, 2),
(255, 49, 50, 42, 1),
(256, 49, 51, 42, 1),
(257, 49, 52, 42, 1),
(258, 49, 53, 42, 1),
(259, 50, 51, 42, 1),
(260, 50, 52, 42, 1),
(261, 50, 53, 42, 1),
(262, 51, 52, 42, 1),
(263, 51, 53, 42, 1),
(264, 52, 53, 42, 1),
(265, 49, 50, 43, 0.333333),
(266, 49, 51, 43, 0.5),
(267, 49, 52, 43, 0.333333),
(268, 49, 53, 43, 0.333333),
(269, 50, 51, 43, 2),
(270, 50, 52, 43, 0.333333),
(271, 50, 53, 43, 0.333333),
(272, 51, 52, 43, 0.5),
(273, 51, 53, 43, 0.333333),
(274, 52, 53, 43, 2),
(275, 49, 50, 44, 0.2),
(276, 49, 51, 44, 3),
(277, 49, 52, 44, 1),
(278, 49, 53, 44, 1),
(279, 50, 51, 44, 5),
(280, 50, 52, 44, 5),
(281, 50, 53, 44, 2),
(282, 51, 52, 44, 0.5),
(283, 51, 53, 44, 0.5),
(284, 52, 53, 44, 2),
(285, 49, 50, 45, 0.2),
(286, 49, 51, 45, 3),
(287, 49, 52, 45, 1),
(288, 49, 53, 45, 0.333333),
(289, 50, 51, 45, 5),
(290, 50, 52, 45, 5),
(291, 50, 53, 45, 5),
(292, 51, 52, 45, 0.5),
(293, 51, 53, 45, 0.5),
(294, 52, 53, 45, 0.5);

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
(174, 49, 41, 0.167514),
(175, 50, 41, 0.35978),
(176, 51, 41, 0.092211),
(177, 52, 41, 0.121196),
(178, 53, 41, 0.103542),
(179, 49, 42, 0.166667),
(180, 50, 42, 0.166667),
(181, 51, 42, 0.166667),
(182, 52, 42, 0.166667),
(183, 53, 42, 0.166667),
(184, 49, 43, 0.0819221),
(185, 50, 43, 0.146458),
(186, 51, 43, 0.114235),
(187, 52, 43, 0.270052),
(188, 53, 43, 0.231535),
(189, 49, 44, 0.132843),
(190, 50, 44, 0.367388),
(191, 51, 44, 0.076758),
(192, 52, 44, 0.14316),
(193, 53, 44, 0.127808),
(194, 49, 45, 0.117874),
(195, 50, 45, 0.526435),
(196, 51, 45, 0.0682211),
(197, 52, 45, 0.107035),
(198, 53, 45, 0.180434);

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
(49, 0.139595),
(50, 0.388576),
(51, 0.0910551),
(52, 0.133252),
(53, 0.150716);

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
(3, 'jely', 'User', 'jely', '12345', '2022-01-18 14:42:42'),
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
-- Indeks untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perbandingan_alternatif`
--
ALTER TABLE `perbandingan_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT untuk tabel `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
