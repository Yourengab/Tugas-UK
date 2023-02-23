-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2023 pada 11.02
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp_surya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `idkelas` int(4) NOT NULL,
  `kelas` varchar(8) NOT NULL,
  `nominalspp` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`idkelas`, `kelas`, `nominalspp`) VALUES
(1, 'VII', 300000),
(2, 'VIII', 350000),
(3, 'IX', 400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `nip` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`nip`, `nama`, `alamat`, `notelp`, `level`, `password`) VALUES
(5645, 'Komang Rama', 'Jalan Pulau Bungin', '081338716566', 'petugas', 'petugasbaranaya'),
(6550, 'I Nyoman Suryadana', 'Jalan Pulau Bungin', '081776180091', 'petugas', 'petugasbaranaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `idkelas` int(4) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `idkelas`, `alamat`, `notelp`, `level`, `password`) VALUES
(5000, 'Alita Ayuning Tyas', 1, 'Jalan Panjer', '081998177191', 'siswa', 'siswabaranaya'),
(5001, 'Ryan Wiranatha', 1, 'Jalan Sesetan', '081781918991', 'siswa', 'siswabaranaya'),
(5002, 'Rizky Ryan', 1, 'Jalan Pulau Moyo', '081909188810', 'siswa', 'siswabaranaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spp`
--

CREATE TABLE `tb_spp` (
  `id` int(10) NOT NULL,
  `nis` int(4) NOT NULL,
  `petugas` varchar(25) DEFAULT NULL,
  `bulan` varchar(20) NOT NULL,
  `angkatan` varchar(10) NOT NULL,
  `totaltagihan` double NOT NULL,
  `totalbayar` double DEFAULT NULL,
  `tglbayar` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_spp`
--

INSERT INTO `tb_spp` (`id`, `nis`, `petugas`, `bulan`, `angkatan`, `totaltagihan`, `totalbayar`, `tglbayar`) VALUES
(253, 5000, 'Komang Rama', 'Juni 2023', 'I', 0, 300000, '2023-02-23 08:16:53'),
(254, 5000, '', 'Juli 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(255, 5000, '', 'Agustus 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(256, 5000, '', 'September 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(257, 5000, '', 'Oktober 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(258, 5000, '', 'November 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(259, 5000, '', 'Desember 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(260, 5000, '', 'Januari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(261, 5000, '', 'Februari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(262, 5000, '', 'Maret 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(263, 5000, '', 'April 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(264, 5000, '', 'Mei 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(265, 5000, '', 'Juni 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(266, 5000, '', 'Juli 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(267, 5000, '', 'Agustus 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(268, 5000, '', 'September 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(269, 5000, '', 'Oktober 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(270, 5000, '', 'November 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(271, 5000, '', 'Desember 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(272, 5000, '', 'Januari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(273, 5000, '', 'Februari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(274, 5000, '', 'Maret 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(275, 5000, '', 'April 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(276, 5000, '', 'Mei 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(277, 5000, 'Komang Rama', 'Juni 2025', 'III', 0, 300000, '2023-02-21 22:17:09'),
(278, 5000, 'I Nyoman Suryadana', 'Juli 2025', 'III', 0, 300000, '2023-02-21 22:19:20'),
(279, 5000, '', 'Agustus 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(280, 5000, '', 'September 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(281, 5000, '', 'Oktober 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(282, 5000, '', 'November 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(283, 5000, '', 'Desember 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(284, 5000, '', 'Januari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(285, 5000, '', 'Februari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(286, 5000, '', 'Maret 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(287, 5000, '', 'April 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(288, 5000, '', 'Mei 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(289, 5001, '', 'Juni 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(290, 5001, '', 'Juli 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(291, 5001, '', 'Agustus 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(292, 5001, '', 'September 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(293, 5001, '', 'Oktober 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(294, 5001, '', 'November 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(295, 5001, '', 'Desember 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(296, 5001, '', 'Januari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(297, 5001, '', 'Februari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(298, 5001, '', 'Maret 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(299, 5001, '', 'April 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(300, 5001, '', 'Mei 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(301, 5001, '', 'Juni 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(302, 5001, '', 'Juli 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(303, 5001, '', 'Agustus 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(304, 5001, '', 'September 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(305, 5001, '', 'Oktober 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(306, 5001, '', 'November 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(307, 5001, '', 'Desember 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(308, 5001, '', 'Januari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(309, 5001, '', 'Februari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(310, 5001, '', 'Maret 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(311, 5001, '', 'April 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(312, 5001, '', 'Mei 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(313, 5001, '', 'Juni 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(314, 5001, '', 'Juli 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(315, 5001, '', 'Agustus 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(316, 5001, '', 'September 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(317, 5001, '', 'Oktober 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(318, 5001, '', 'November 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(319, 5001, '', 'Desember 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(320, 5001, '', 'Januari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(321, 5001, '', 'Februari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(322, 5001, '', 'Maret 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(323, 5001, '', 'April 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(324, 5001, '', 'Mei 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(325, 5002, 'Komang Rama', 'Juni 2023', 'I', 0, 300000, '2023-02-22 08:25:56'),
(326, 5002, 'I Nyoman Suryadana', 'Juli 2023', 'I', 0, 300000, '2023-02-22 08:29:00'),
(327, 5002, 'I Nyoman Suryadana', 'Agustus 2023', 'I', 0, 300000, '2023-02-22 08:29:05'),
(328, 5002, 'I Nyoman Suryadana', 'September 2023', 'I', 0, 300000, '2023-02-22 08:29:12'),
(329, 5002, '', 'Oktober 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(330, 5002, '', 'November 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(331, 5002, '', 'Desember 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(332, 5002, '', 'Januari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(333, 5002, '', 'Februari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(334, 5002, '', 'Maret 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(335, 5002, '', 'April 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(336, 5002, '', 'Mei 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(337, 5002, '', 'Juni 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(338, 5002, '', 'Juli 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(339, 5002, '', 'Agustus 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(340, 5002, '', 'September 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(341, 5002, '', 'Oktober 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(342, 5002, '', 'November 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(343, 5002, '', 'Desember 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(344, 5002, '', 'Januari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(345, 5002, '', 'Februari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(346, 5002, '', 'Maret 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(347, 5002, '', 'April 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(348, 5002, '', 'Mei 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(349, 5002, 'Komang Rama', 'Juni 2025', 'III', 0, 300000, '2023-02-22 08:26:00'),
(350, 5002, 'Komang Rama', 'Juli 2025', 'III', 0, 300000, '2023-02-22 08:26:04'),
(351, 5002, 'Komang Rama', 'Agustus 2025', 'III', 0, 300000, '2023-02-22 08:26:10'),
(352, 5002, '', 'September 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(353, 5002, '', 'Oktober 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(354, 5002, '', 'November 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(355, 5002, '', 'Desember 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(356, 5002, '', 'Januari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(357, 5002, '', 'Februari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(358, 5002, '', 'Maret 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(359, 5002, '', 'April 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(360, 5002, '', 'Mei 2026', 'III', 400000, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(4) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `level`) VALUES
(1, 'admin'),
(2, 'petugas'),
(3, 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD KEY `fk_level_petugas` (`level`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `fk_level_siswa` (`level`),
  ADD KEY `fk_kelas` (`idkelas`);

--
-- Indeks untuk tabel `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nis_spp` (`nis`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `idkelas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=361;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `fk_level_petugas` FOREIGN KEY (`level`) REFERENCES `tb_user` (`level`);

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `fk_kelas` FOREIGN KEY (`idkelas`) REFERENCES `tb_kelas` (`idkelas`),
  ADD CONSTRAINT `fk_level_siswa` FOREIGN KEY (`level`) REFERENCES `tb_user` (`level`);

--
-- Ketidakleluasaan untuk tabel `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD CONSTRAINT `fk_nis_spp` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
