-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2020 pada 14.51
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `IDLink` int(5) NOT NULL,
  `kode_rapor` int(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `LinkRaport` varchar(228) NOT NULL,
  `StatusDownload` enum('B','L') NOT NULL,
  `jam_download` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_rapor2`
--

CREATE TABLE `file_rapor2` (
  `IDLink` int(11) NOT NULL,
  `kode_rapor` int(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `LinkRaport` varchar(255) NOT NULL,
  `StatusDownload` enum('B','L') NOT NULL,
  `jam_download` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 1, 'Rapor Akademik'),
(2, 0, 'Rapoor Speaking');

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
(2, '2020-10-28', '12:34', 'A', 'A');

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
(1, '2134', 'Abdul Aziz', 'X TBSM');

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
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`IDLink`);

--
-- Indeks untuk tabel `file_rapor2`
--
ALTER TABLE `file_rapor2`
  ADD PRIMARY KEY (`IDLink`);

--
-- Indeks untuk tabel `jenis_rapor`
--
ALTER TABLE `jenis_rapor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `IDLink` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `file_rapor2`
--
ALTER TABLE `file_rapor2`
  MODIFY `IDLink` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_rapor`
--
ALTER TABLE `jenis_rapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
