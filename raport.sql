-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2020 pada 14.06
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raport`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akademik`
--

CREATE TABLE `akademik` (
  `IDLink` int(5) NOT NULL,
  `kode_rapor` int(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `LinkRaport` varchar(228) NOT NULL,
  `StatusDownload` enum('B','L') NOT NULL,
  `jam_download` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akademik`
--

INSERT INTO `akademik` (`IDLink`, `kode_rapor`, `nis`, `LinkRaport`, `StatusDownload`, `jam_download`) VALUES
(14, 1, '1122', '1122_Afrizal_Setyo_Wibisono_Rapor_Akademik1.pdf', 'L', '2020-12-20 12:32:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aqliyah`
--

CREATE TABLE `aqliyah` (
  `IDLink` int(5) NOT NULL,
  `kode_rapor` int(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `LinkRaport` varchar(228) NOT NULL,
  `StatusDownload` enum('B','L') NOT NULL,
  `jam_download` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aqliyah`
--

INSERT INTO `aqliyah` (`IDLink`, `kode_rapor`, `nis`, `LinkRaport`, `StatusDownload`, `jam_download`) VALUES
(2, 5, '1122', '1122_Afrizal_Setyo_Wibisono_Rapor_Aqliyah2.pdf', 'L', '2020-12-20 12:38:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `integral`
--

CREATE TABLE `integral` (
  `IDLink` int(5) NOT NULL,
  `kode_rapor` int(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `LinkRaport` varchar(228) NOT NULL,
  `StatusDownload` enum('B','L') NOT NULL,
  `jam_download` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `integral`
--

INSERT INTO `integral` (`IDLink`, `kode_rapor`, `nis`, `LinkRaport`, `StatusDownload`, `jam_download`) VALUES
(1, 3, '1122', '1122_Afrizal_Setyo_Wibisono_Rapor_Integral1.pdf', 'L', '2020-12-20 12:42:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_rapor`
--

CREATE TABLE `jenis_rapor` (
  `id` int(11) NOT NULL,
  `kode_rapor` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_rapor`
--

INSERT INTO `jenis_rapor` (`id`, `kode_rapor`, `keterangan`) VALUES
(1, 1, 'akademik'),
(2, 2, 'speaking'),
(3, 3, 'integral'),
(4, 4, 'ruhiyah'),
(5, 5, 'aqliyah'),
(6, 6, 'jismiyah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jismiyah`
--

CREATE TABLE `jismiyah` (
  `IDLink` int(5) NOT NULL,
  `kode_rapor` int(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `LinkRaport` varchar(228) NOT NULL,
  `StatusDownload` enum('B','L') NOT NULL,
  `jam_download` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jismiyah`
--

INSERT INTO `jismiyah` (`IDLink`, `kode_rapor`, `nis`, `LinkRaport`, `StatusDownload`, `jam_download`) VALUES
(1, 6, '1122', '1122_Afrizal_Setyo_Wibisono_Rapor_Jismiyah1.pdf', 'L', '2020-12-20 12:41:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_walikelas`
--

CREATE TABLE `password_walikelas` (
  `Kelas` char(20) NOT NULL,
  `Password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `password_walikelas`
--

INSERT INTO `password_walikelas` (`Kelas`, `Password`) VALUES
('X TBSM', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruhiyah`
--

CREATE TABLE `ruhiyah` (
  `IDLink` int(5) NOT NULL,
  `kode_rapor` int(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `LinkRaport` varchar(228) NOT NULL,
  `StatusDownload` enum('B','L') NOT NULL,
  `jam_download` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruhiyah`
--

INSERT INTO `ruhiyah` (`IDLink`, `kode_rapor`, `nis`, `LinkRaport`, `StatusDownload`, `jam_download`) VALUES
(2, 4, '1122', '1122_Afrizal_Setyo_Wibisono_Rapor_Ruhiyah2.pdf', 'L', '2020-12-20 12:50:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(1) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `NamaSekolah` varchar(128) NOT NULL,
  `AlamatSekolah` varchar(255) NOT NULL,
  `LogoSekolah` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `Judul`, `NamaSekolah`, `AlamatSekolah`, `LogoSekolah`) VALUES
(1, 'DAFTAR HADIR PENGAMBILAN RAPORT', 'SMK NEGERI 1 BANGSRI', 'Jalan Raya Jepara Bangsri KM. 07 Telp (0291) 787878 email : username@mail.com', 'atas.png'),
(2, '2020-12-16', '16:18', 'A', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `ID` int(5) NOT NULL,
  `nis` char(20) NOT NULL,
  `NamaLengkap` varchar(128) NOT NULL,
  `Kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`ID`, `nis`, `NamaLengkap`, `Kelas`) VALUES
(0, '1122', 'Afrizal Setyo Wibisono', 'X TBSM'),
(1, '2134', 'Abdul Aziz', 'X TBSM'),
(2, '2222', 'Ahmad Fathullah', 'X TBSM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `speaking`
--

CREATE TABLE `speaking` (
  `IDLink` int(5) NOT NULL,
  `kode_rapor` int(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `LinkRaport` varchar(228) NOT NULL,
  `StatusDownload` enum('B','L') NOT NULL,
  `jam_download` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `speaking`
--

INSERT INTO `speaking` (`IDLink`, `kode_rapor`, `nis`, `LinkRaport`, `StatusDownload`, `jam_download`) VALUES
(4, 2, '1122', '1122_Afrizal_Setyo_Wibisono_Rapor_Speaking1.pdf', 'L', '2020-12-20 12:43:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `akses` enum('P','O') NOT NULL DEFAULT 'P',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_user`, `akses`, `created`, `updated`) VALUES
(1, 'root', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'O', '2020-03-19 20:15:47', '2020-10-25 08:09:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akademik`
--
ALTER TABLE `akademik`
  ADD PRIMARY KEY (`IDLink`);

--
-- Indeks untuk tabel `aqliyah`
--
ALTER TABLE `aqliyah`
  ADD PRIMARY KEY (`IDLink`);

--
-- Indeks untuk tabel `integral`
--
ALTER TABLE `integral`
  ADD PRIMARY KEY (`IDLink`);

--
-- Indeks untuk tabel `jenis_rapor`
--
ALTER TABLE `jenis_rapor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jismiyah`
--
ALTER TABLE `jismiyah`
  ADD PRIMARY KEY (`IDLink`);

--
-- Indeks untuk tabel `ruhiyah`
--
ALTER TABLE `ruhiyah`
  ADD PRIMARY KEY (`IDLink`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `speaking`
--
ALTER TABLE `speaking`
  ADD PRIMARY KEY (`IDLink`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akademik`
--
ALTER TABLE `akademik`
  MODIFY `IDLink` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `aqliyah`
--
ALTER TABLE `aqliyah`
  MODIFY `IDLink` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `integral`
--
ALTER TABLE `integral`
  MODIFY `IDLink` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jenis_rapor`
--
ALTER TABLE `jenis_rapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jismiyah`
--
ALTER TABLE `jismiyah`
  MODIFY `IDLink` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ruhiyah`
--
ALTER TABLE `ruhiyah`
  MODIFY `IDLink` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `speaking`
--
ALTER TABLE `speaking`
  MODIFY `IDLink` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
