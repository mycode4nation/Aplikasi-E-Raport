-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2021 pada 03.03
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
(6, 6, 'jismiyah'),
(7, 7, 'quran');

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
('10 IPS', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quran`
--

CREATE TABLE `quran` (
  `IDLink` int(5) NOT NULL,
  `kode_rapor` int(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `LinkRaport` varchar(228) NOT NULL,
  `StatusDownload` enum('B','L') NOT NULL,
  `jam_download` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `quran`
--

INSERT INTO `quran` (`IDLink`, `kode_rapor`, `nis`, `LinkRaport`, `StatusDownload`, `jam_download`) VALUES
(14, 1, '1122', '1122_Afrizal_Setyo_Wibisono_Rapor_Akademik1.pdf', 'L', '2020-12-20 12:32:50'),
(15, 7, '0055783773', '0055783773_Ahmad_Fakhar_Zahran_Rapor_Madrosatul_Quran.pdf', 'B', '0000-00-00 00:00:00');

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
(101, '0051395315', 'Ahmad Fadgham Yafie Mawazi', '10 MIPA 1'),
(102, '0048431458', 'Ahmadhana Nichola Adzkaa', '10 MIPA 1'),
(103, '0052025192', 'Akmal Rusydian Efendi ', '10 MIPA 1'),
(104, '0054068885', 'Ananda Nouval Aryanta', '10 MIPA 1'),
(105, '0052058003', 'Bagus Ahmad Najm', '10 MIPA 1'),
(106, '0052734712', 'Bagus Subekti', '10 MIPA 1'),
(107, '0055884658', 'Dama Islamy Wina Hitana', '10 MIPA 1'),
(108, '0045467296', 'Daniel Mario Rizqy Syawal', '10 MIPA 1'),
(109, '0055408344', 'Hafizh Izzudin Ramadhana', '10 MIPA 1'),
(110, '0058111278', 'Hasbiyallah Nur Muhammad', '10 MIPA 1'),
(111, '0044200239', 'Krisna Winata', '10 MIPA 1'),
(112, '0068202183', 'Maulana Ahmad Zahiri', '10 MIPA 1'),
(113, '0051779814', 'Muhammad Alhafiz Arya Wardhana', '10 MIPA 1'),
(114, '0049175619', 'Muhammad Arbyan Hidayat', '10 MIPA 1'),
(115, '0049754211', 'Muhammad Navil Abror Fachrozi', '10 MIPA 1'),
(116, '0057950173', 'Muhammad Ravenza Adinata', '10 MIPA 1'),
(117, '0054380195', 'Muhammad Rezky Faiz ', '10 MIPA 1'),
(118, '0051784652', 'Muhammad Zahid Alfairruzy Fathma Haq', '10 MIPA 1'),
(119, '0043494526', 'Muhammad Zamzami Sholih Mufti', '10 MIPA 1'),
(120, '0052492477', 'Muhtafi Nasir', '10 MIPA 1'),
(121, '0059965492', 'Naufal Muhammad Rakhanova', '10 MIPA 1'),
(122, '00552834019', 'Nurwahyu Alfidinata', '10 MIPA 1'),
(123, '0050659112', 'Renaldi Agustyan', '10 MIPA 1'),
(124, '0045490089', 'Riza Atqani Azra', '10 MIPA 1'),
(125, '0044935744', 'Rofid Hisyam Ramadhan', '10 MIPA 1'),
(126, '0053209906', 'Saiful Anam', '10 MIPA 1'),
(127, '0047415641', 'Sibromulisy', '10 MIPA 1'),
(128, '0042688037', 'Sufyan Said', '10 MIPA 1'),
(129, '0060217529', 'Ulil Amry Ghovary', '10 MIPA 1'),
(130, '0046572985', 'Zackaria Bimo Arjasa', '10 MIPA 1'),
(201, '0050715704', 'Afriel Hardwi Nurrahman', '10 MIPA 2'),
(202, '0062503843', 'Ahmad Naufal Firdaus', '10 MIPA 2'),
(203, '0047075252', 'Azzaka Yusuf Saputra', '10 MIPA 2'),
(204, '0046505772', 'Farhan Dany Putra Panuju', '10 MIPA 2'),
(205, '0041209301', 'Farras Maula Abrar', '10 MIPA 2'),
(206, '0056352691', 'Haidar Ammar Syahputra', '10 MIPA 2'),
(207, '0054349596', 'Irnanda Alif Septiadi Nugraha', '10 MIPA 2'),
(208, '0058738981', 'Isa Al Fathi', '10 MIPA 2'),
(209, '0051239046', 'Ivan Nafata Atmajaya', '10 MIPA 2'),
(210, '0051018838', 'Louis Ibnu Aqil', '10 MIPA 2'),
(211, '0055389468', 'Mochammad Hafidz Ar Rajfah', '10 MIPA 2'),
(212, '0057448039', 'Muhammad Alimuddin Al Bimawy', '10 MIPA 2'),
(213, '0059116805', 'Muhammad Daffa Pardinansyah', '10 MIPA 2'),
(214, '0054621960', 'Muhammad Dzakwan Dzakiy M', '10 MIPA 2'),
(215, '0056158735', 'Muhammad Erik Febrian', '10 MIPA 2'),
(216, '0051131447', 'Muhammad Fadhil Naufal', '10 MIPA 2'),
(217, '0047161277', 'Muhammad Ikmal Azam Hekmatyar', '10 MIPA 2'),
(218, '0051458355', 'Muhammad Rafli Irhamna', '10 MIPA 2'),
(219, '0050715723', 'Muhammad Rafli Kayana', '10 MIPA 2'),
(220, '0053296307', 'Nasem Ahmad Pahrevi', '10 MIPA 2'),
(221, '0054121555', 'Oase Bimasena Ilhamaziiz', '10 MIPA 2'),
(222, '0063097430', 'Rafidhia Priastantyo', '10 MIPA 2'),
(223, '0049465978', 'Rafif Athallah Ramadhan', '10 MIPA 2'),
(224, '0054084400', 'Rasya Fariansyah Busra', '10 MIPA 2'),
(225, '0042366916', 'Reno Satya Sanubari', '10 MIPA 2'),
(226, '0053723715', 'Salasa Heryansyah', '10 MIPA 2'),
(227, '0059443915', 'Sharlyf Shaquille Syani', '10 MIPA 2'),
(228, '005685426', 'Shoultan Rashid Alahuddin', '10 MIPA 2'),
(229, '0057756079', 'Sulthon Syarif Firmansyah', '10 MIPA 2'),
(230, '0051676087', 'Zarrar Adhi Mahyar', '10 MIPA 2'),
(231, '0058185454', 'Zefarhansyah Rizky Afifie', '10 MIPA 2'),
(301, '0055783773', 'Ahmad Fakhar Zahran', '10 IPS'),
(302, '0054524659', 'Ahmad Yusqi Al Farisy', '10 IPS'),
(303, '0052759605', 'Athallah Muhammad Risam Rendra', '10 IPS'),
(304, '0053151671', 'Faiq Rajendra Putra', '10 IPS'),
(305, '0052390376', 'Muhamad Bayid Maulana Putra', '10 IPS'),
(306, '0058479767', 'Muhammad Fikrul Azka', '10 IPS'),
(307, '0054077821', 'Muhammad Hildan Nasrullah', '10 IPS'),
(308, '0051499830', 'Muhammad Rafif Ar Rizqi', '10 IPS'),
(309, '0049528812', 'Muhammad Susilo Ihlasul Ashar Kelas', '10 IPS'),
(310, '0051658025', 'Muhammad Tadzky', '10 IPS'),
(311, '0043366292', 'Ragil Ferdiansyah Maulana', '10 IPS'),
(312, '0048753263', 'Raheal Rangga Sefian', '10 IPS'),
(313, '0052577173', 'Rizki Cakra Prawira', '10 IPS'),
(314, '0055734138', 'Rizky Ardian Adityara', '10 IPS'),
(315, '0045532421', 'Safiul Bekti Nugroho', '10 IPS'),
(316, '0052336442', 'Sayyaf Syaddad Al Fathinullah', '10 IPS'),
(317, '0043244471', 'Thoriq Dzulfikar Hafizh', '10 IPS'),
(401, '0035800147', 'ADEL KHALIFA ICHWAN', '11 MIPA 1'),
(402, '0033096858	', 'AHMAD ADANI THIRAFI YUSUF', '11 MIPA 1'),
(403, '0044251703', 'AHMAD FADHILAH MAPPISARA', '11 MIPA 1'),
(404, '0040439506', 'ASYRAF SULTHAN ZAKY', '11 MIPA 1'),
(405, '0046509845', 'DIMAS SURYA WICAKSONO', '11 MIPA 1'),
(406, '0036515748', 'FAHMI REIHAN AKBARUDIN', '11 MIPA 1'),
(407, '0048923954', 'FARHAT FALFALLA AHKMAD', '11 MIPA 1'),
(408, '0043539968', 'FATHURRAHMAN NASUTION', '11 MIPA 1'),
(409, '0043712765', 'HANIF HAFIDH FARHANI', '11 MIPA 1'),
(410, '0043498496', 'IHSAN PRIA DARMAWAN', '11 MIPA 1'),
(411, '0043593409	', 'LAZUARDI HISYAM', '11 MIPA 1'),
(412, '0041490325', 'M ATHAR GHIFFARI', '11 MIPA 1'),
(413, '0046797406', 'M FAHMI ALAUDDIN AZMY', '11 MIPA 1'),
(414, '0042898522', 'MOCH SURYA ADHITAMA', '11 MIPA 1'),
(415, '0046548735', 'MUH UBAIDILLAH ALLAM', '11 MIPA 1'),
(416, '0044093942', 'MUHAMMAD ABDUL AZIZ ALGHIFFARI', '11 MIPA 1'),
(417, '0068616618', 'MUHAMMAD ABDUR GHOFUR HIDAYATULLOH', '11 MIPA 1'),
(418, '0037157080	', 'MUHAMMAD FADIEL PRATAMA URVEL', '11 MIPA 1'),
(419, '0035159978', 'MUHAMMAD FAHREZA', '11 MIPA 1'),
(420, '0042195695', 'MUHAMMAD FARIS KHIAR CALOSA', '11 MIPA 1'),
(421, '0036031108	', 'MUHAMMAD FITHRA DHIYAUL HAQ', '11 MIPA 1'),
(422, '0046131988', 'MUHAMMAD MIRZA FAKHRUDDIN ATHMAR', '11 MIPA 1'),
(423, '0042197804', 'NAUFAL DAFFA ZAIDAN ANWAR', '11 MIPA 1'),
(424, '0039311690', 'NOVAL AKBAR ARIYANTO', '11 MIPA 1'),
(425, '0036778033', 'NUR KHALIS', '11 MIPA 1'),
(426, '0036835983', 'PANJI SATYA WIRABAKTI', '11 MIPA 1'),
(427, '0036250434', 'RAFHAEL BINTANG ASHIILA', '11 MIPA 1'),
(428, '0035997514', 'RAMADHAN ZHAFRAN LILLAH ILHAM', '11 MIPA 1'),
(429, '0048847749', 'ROLANDA RUMAVEA RULIFF FAIKAR', '11 MIPA 1'),
(430, '0042873271	', 'SATRIO WIBOWO', '11 MIPA 1'),
(431, '0049511526', 'SULTHON ARIF IMADUDIN', '11 MIPA 1'),
(432, '0041373802', 'ZIKRI FADILLAH', '11 MIPA 1'),
(501, '0042713335', 'ACHMAD FAIZUR RAHMAN', '11 MIPA 2'),
(502, '0038449858', 'ADZKA SYA\'BANI MAS\'UD', '11 MIPA 2'),
(503, '0035779045', 'AJRUL RAIS ANANDA', '11 MIPA 2'),
(504, '0044378278', 'ALFITO EVANDHIKA NAUFALDI RUUNG', '11 MIPA 2'),
(505, '0043050448	', 'ATHALLAH ZAKKI MAHARDIKA', '11 MIPA 2'),
(506, '0044534887	', 'DIMAS HANIF SYAFIIULLAH', '11 MIPA 2'),
(507, '0041835165', 'FAISHAL SEPTIANSYAH', '11 MIPA 2'),
(508, '0036835975', 'FARREL FHELIA WIDODO', '11 MIPA 2'),
(509, '0036345322', 'GILANG PUTRA PRATAMA', '11 MIPA 2'),
(510, '0044591788', 'HUSSEIN MUHAMMAD IBRAHIM', '11 MIPA 2'),
(511, '0035873447', 'IMAM RIFQI WICAKSONO', '11 MIPA 2'),
(512, '0014662373', 'JELANG RAMADHAN', '11 MIPA 2'),
(513, '0035416253', 'MOCHAMMAD FARREL AZZUDUDDIN KHOIRON', '11 MIPA 2'),
(514, '0049703203', 'MUHAMMAD ALIEF DZAKWAN AMMAR', '11 MIPA 2'),
(515, '0041669624', 'MUHAMMAD ARSYADANI DHIAULHAQ', '11 MIPA 2'),
(516, '0044275506	', 'MUHAMMAD GADING SETYADI', '11 MIPA 2'),
(517, '0034776878	', 'MUHAMMAD GHAZY ROBBANI', '11 MIPA 2'),
(518, '0041739076', 'MUHAMMAD ILHAMSYAH MAULANA SETIAWAN', '11 MIPA 2'),
(519, '0043269976', 'MUHAMMAD JABIR', '11 MIPA 2'),
(520, '0041018709', 'MUHAMMAD RAFFI ADIPRANA', '11 MIPA 2'),
(521, '0049245884	', 'MUHAMMAD RAFLY RASYA', '11 MIPA 2'),
(522, '0043712760	', 'MUHAMMAD RAIHAN', '11 MIPA 2'),
(523, '0040974774', 'MUHAMMAD RAMZI SATRIA WIBAWA', '11 MIPA 2'),
(524, '0036953809', 'MUHAMMAD RAYYAN FAHREZA', '11 MIPA 2'),
(525, '0037174977', 'MUHAMMAD SADDAM FAUZI ARYATAMA PUTRAERDI', '11 MIPA 2'),
(526, '0038477791', 'MUHAMMAD YASIR', '11 MIPA 2'),
(527, '0037983227', 'NAUFAL FIRZA RAMADHAN', '11 MIPA 2'),
(528, '0042270151', 'NAUFAL RAKHA RAMDHANI', '11 MIPA 2'),
(529, '0033582900', 'SATRIO WICAKSONO', '11 MIPA 2'),
(530, '0049977903', 'SRI PAKSI BAGASTYO KARNOSIWI', '11 MIPA 2'),
(531, '0041833340', 'SYAFIQ PUTRA ADIYATMA', '11 MIPA 2'),
(532, '0044415382	', 'WISNU WARDANA WIDYATMOKO', '11 MIPA 2'),
(533, '0035775642	', 'YAFI\' ERISYAH RIZA', '11 MIPA 2'),
(601, '0043775027', 'AKBAR DWI HUTOMO', '11 IPS'),
(602, '0043593639	', 'ARYA AMIN PRASETYA', '11 IPS'),
(603, '0041998903	', 'BIRUNI AHMAD SAFIN', '11 IPS'),
(604, '0043954569	', 'CEVIN VALENTINO FERDIANSYAH FAJAR', '11 IPS'),
(605, '0042230500', 'DANANJA KRISNA WYDAN', '11 IPS'),
(606, '0044207410	', 'DIO IRSA AGUS RIANSAH', '11 IPS'),
(607, '0040511777', 'DZAKY BRATASENA SARAGIH', '11 IPS'),
(608, '0048291340	', 'HAFIZ FALL HILMAWAN', '11 IPS'),
(609, '0043000558', 'HAFIZ SENO PAMUNGKAS', '11 IPS'),
(610, '0037341001	', 'HUSSEIN ZIBRAN ATHALLAH', '11 IPS'),
(611, '0012398701', 'KHANSA ATHAULLAH ARMANSYAH', '11 IPS'),
(612, '0039653135', 'M HAFIDZ AUFA ALFATHIH', '11 IPS'),
(613, '0041167109	', 'MOHAMMAD JA\'FAR ANAS', '11 IPS'),
(614, '0044058200', 'MUHAMMAD ABDUL AZIZ', '11 IPS'),
(615, '0036835969', 'MUHAMMAD BIMO FADHILLAH', '11 IPS'),
(616, '0048792672	', 'MUHAMMAD DARWIS', '11 IPS'),
(617, '0036836011', 'MUHAMMAD EGAR WIBISONO', '11 IPS'),
(618, '0027213081', 'MUHAMMAD FARHAN AL GHIFARI', '11 IPS'),
(619, '0047208491', 'MUHAMMAD FARIS AZKA', '11 IPS'),
(620, '0043114043', 'MUHAMMAD REZA ARSYAD FANANI', '11 IPS'),
(621, '0049649632', 'MUHAMMAD SYAAMIL HIDAYAT', '11 IPS'),
(622, '0043130507', 'MUSLIH SHOBIR', '11 IPS'),
(623, '0036275445', 'NAUFAL ASKARIL AKBAR', '11 IPS'),
(624, '0041246755', 'RAFLY PERDANA KUSUMA', '11 IPS'),
(625, '0036210861', 'RAY HAQQI WAFDA', '11 IPS'),
(626, '0039313709', 'SAIF', '11 IPS'),
(627, '0039313709', 'SATRYA NIKA ARYA DYTA', '11 IPS'),
(628, '0036173537', 'USAMAH ABDULLAH AL AMUDI', '11 IPS'),
(629, '0043130527', 'ZAMIR ZATA AMANI MAHAWIRA', '11 IPS'),
(701, '0029019410', 'ACHMAD HAFIDZ SHEKTI AJI', '12 MIPA 1'),
(702, '0025582841', 'AFIF FITRA KUSUMA', '12 MIPA 1'),
(703, '0032937600', 'AGUNG CENDEKIA PUTRA NUSANTARA ', '12 MIPA 1'),
(704, '0033837254', 'AHMAD RIZAL RIFAI ', '12 MIPA 1'),
(705, '0037423721', 'ALANA AKMAL YUAR ', '12 MIPA 1'),
(706, '0033435437', 'ALFIN NUR MUHAMMAD ', '12 MIPA 1'),
(707, '00032830491', 'AL-GHOZI MUH FATUR RAHMAN ', '12 MIPA 1'),
(708, '0032592443', 'ARAYA PUTRA SURYANTO ', '12 MIPA 1'),
(709, '0034751223', 'ARDYA WAHYU WIBOWO ', '12 MIPA 1'),
(710, '0026538041', 'ARIF HIDAYAT ', '12 MIPA 1'),
(711, '0032818596', 'DZAKY ALIF ARKANANTA ', '12 MIPA 1'),
(712, '0034672710', 'FADHIL ABDURRAHMAN ', '12 MIPA 1'),
(713, '0037684549', 'FARROS AMMAR ', '12 MIPA 1'),
(714, '0023242732', 'GISFAN AZKA RISQI MAULANI ', '12 MIPA 1'),
(715, '0037279974', 'MARCELLINO AZHAR KARTIKO ', '12 MIPA 1'),
(716, '0024350130', 'MOCH RIKZA LUCKY ARDIANSYAH ', '12 MIPA 1'),
(717, '0033092441', 'MOCHAMMAD RAFFI ARDHANI ', '12 MIPA 1'),
(718, '0040036023', 'MUHAMMAD DAFFA NAUFAL MUZAKI ', '12 MIPA 1'),
(719, '0024739674', 'MUHAMMAD DZIKYAN ', '12 MIPA 1'),
(720, '0026998200', 'MUHAMMAD GAFA ZAKI HAYDARULLAH ', '12 MIPA 1'),
(721, '0033796106', 'MUHAMMAD IN\'AMUL FADLY ', '12 MIPA 1'),
(722, '0030754986', 'MUHAMMAD RAIHAN FADHILAH ', '12 MIPA 1'),
(723, '0024682887', 'MUHAMMAD RAMADHANI', '12 MIPA 1'),
(724, '0035347641', 'MUHAMMAD RIZKHI ANDHIKA S ', '12 MIPA 1'),
(725, '0034944623', 'NASYWA ROZMI AMIRUL MUMTAZ ', '12 MIPA 1'),
(726, '0023683073', 'NAUFAL DWI ABDIKA RAMADHAN  ', '12 MIPA 1'),
(727, '0035188242', 'WILDAN ABDILLAH FAUZAN ', '12 MIPA 1'),
(801, '0039173112', 'ADIEL ILMAN SYACHBANI', '12 MIPA 2'),
(802, '0033412500', 'AHMAD FADHIL UBAIDILLAH ', '12 MIPA 2'),
(803, '0035077088', 'AIDAN AZIZ ', '12 MIPA 2'),
(804, '0034436771', 'AL BILAL HAKIM SYUHADA', '12 MIPA 2'),
(805, '0024638486', 'ARETOZA RAMADHAN ', '12 MIPA 2'),
(806, '0034672689', 'AYMAN HASAN RAMLI ', '12 MIPA 2'),
(807, '0039362642', 'BAYU ISMAIL NUGROHO ', '12 MIPA 2'),
(808, '0030459806', 'BRIAN AULIA PRATAMA ', '12 MIPA 2'),
(809, '0028920286', 'DUTA RAMDHANI ', '12 MIPA 2'),
(810, '0034902649', 'FAATIHAH ZURRAHMAN WAHYUDI ', '12 MIPA 2'),
(811, '0036717170', 'FAIQ HAWAARI AHMAD PRAMUJI ', '12 MIPA 2'),
(812, '0037614803', 'FAIRUS VAVANG FISABILILLAH ', '12 MIPA 2'),
(813, '0024718423', 'FUDAIL  FAUZAN RAHMAN ', '12 MIPA 2'),
(814, '0024413720', 'GILANG PAMBUDI WIBAWANTO ', '12 MIPA 2'),
(815, '0025538157', 'MAHATMA HABIB BIMA MUKTI ', '12 MIPA 2'),
(816, '0037279952', 'MOCH FASICH ARBAY DAYANU ', '12 MIPA 2'),
(817, '0030459804', 'MUHAMMAD', '12 MIPA 2'),
(818, '0033083319', 'MUHAMMAD ABYAN AR-ROYYAN FAHMIANSYAH ', '12 MIPA 2'),
(819, '0032818506', 'MUHAMMAD DAWNSON PUTRA AGUSTA ', '12 MIPA 2'),
(820, '0033784748', 'MUHAMMAD GHIFARI RAHMAN PUTRA ANUGRAH ', '12 MIPA 2'),
(821, '0031558399', 'MUHAMMAD LUTHFAN PRAVIRA ARIFIN ', '12 MIPA 2'),
(822, '0033092430', 'MUHAMMAD MUFID ROIHAN ', '12 MIPA 2'),
(823, '0032721209', 'MUHAMMAD NAUFAL DAFFANI TYSA LUBIS ', '12 MIPA 2'),
(824, '0034358359', 'MUHAMMAD RIZKY PRATAMA', '12 MIPA 2'),
(825, '0030473602', 'RHEINARD ERGHOZA ', '12 MIPA 2'),
(826, '0039381969', 'RIKZA NORFAUZI ', '12 MIPA 2'),
(827, '0043449752', 'TEUKU MOHAMMAD FADHIL ', '12 MIPA 2'),
(901, '0025773084', 'ABDULLAH ARROZAQ ', '12 IPS'),
(902, '0031999336', 'AFFAN NUR IZZA ', '12 IPS'),
(903, '0025232875', 'AHMAD FIRMANSYAH ', '12 IPS'),
(904, '0029642045', 'ANDRES NOVRIL RAMADHAN ', '12 IPS'),
(905, '0032798079', 'ARIF RAHMAN KHAWARIZMI ', '12 IPS'),
(906, '0032032336', 'DAFFA ARDHANI YULFINANDA ', '12 IPS'),
(907, '0037022879', 'DZULSEVA WUQUF NUGROHO ', '12 IPS'),
(908, '0033678364', 'ELANG GARDA SAMUDERA ', '12 IPS'),
(909, '0033194419', 'ERLANGGA FIRDAUS RIFQI NUGROHO', '12 IPS'),
(910, '0025696505', 'HATA BAIHAQI GARDA PRATAMA ', '12 IPS'),
(911, '0026856223', 'HILMI DZAKI MUHAMMAD ', '12 IPS'),
(912, '0025198181', 'MOCH BACHRUL ALAM ', '12 IPS'),
(913, '0032171115', 'MUHAMMAD AFFAN ', '12 IPS'),
(914, '0039465184', 'MUHAMMAD FARHAN ABI PASCAL', '12 IPS'),
(915, '0033557909', 'MUHAMMAD FARHAN HIDAYAT', '12 IPS'),
(916, '0037279958', 'MUHAMMAD FARHAN TSALITSUL ABROR ', '12 IPS'),
(917, '0037087668', 'MUHAMMAD HANIF ISMUJIWANTO ', '12 IPS'),
(918, '0033003195', 'MUHAMMAD JAHFAL EPRYAWAN ', '12 IPS'),
(919, '0039187988', 'MUHAMMAD NABIL JULIANTO ', '12 IPS'),
(920, '0034114496', 'MUHAMMAD RAGIL HERMAWAN ', '12 IPS'),
(921, '0039111291', 'MUHAMMAD SAYYID KAMAL ADAM ', '12 IPS'),
(922, '0039457126', 'MUHAMMAD SAYYID KAMIL ADAM ', '12 IPS'),
(923, '0038287053', 'MUHAMMAD ZAIN AL-FATIHUL HAQ ', '12 IPS'),
(924, '0033092412', 'NAUFAL RIZALDY ', '12 IPS'),
(925, '0033754528', 'NUH MARSHA SAMUDRA PURWONO ', '12 IPS'),
(926, '0031557967', 'OSWIN PRASETYO WIDODO ', '12 IPS'),
(927, '0039993493', 'PANDYA RASENDRIA ', '12 IPS'),
(928, '0034232904', 'RADHITYA MUHAMMAD PRAYOGO ', '12 IPS'),
(929, '0033678338', 'RAFI RADITYA ROZAK ', '12 IPS'),
(930, '0025991308', 'RAIHAN FAHRIMZA AMANTA ', '12 IPS'),
(931, '0026536243', 'RAYHAN ERLANGGA SURYAATMAJA ', '12 IPS'),
(932, '0038295880', 'THEON REINALDO RIDWAN ', '12 IPS'),
(933, '0030459810', 'TITO NURKAFI RIJALI ', '12 IPS'),
(934, '0031013400', 'WILDAN AHSANUR RIZKY', '12 IPS');

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
-- Indeks untuk tabel `quran`
--
ALTER TABLE `quran`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jismiyah`
--
ALTER TABLE `jismiyah`
  MODIFY `IDLink` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `quran`
--
ALTER TABLE `quran`
  MODIFY `IDLink` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
