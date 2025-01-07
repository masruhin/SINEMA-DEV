-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 08:36 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mas`
--

-- --------------------------------------------------------

--
-- Table structure for table `bentuk_kerjasama`
--

CREATE TABLE `bentuk_kerjasama` (
  `id_bkerja` int(11) NOT NULL,
  `bkerja_nama` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bentuk_kerjasama`
--

INSERT INTO `bentuk_kerjasama` (`id_bkerja`, `bkerja_nama`, `date_created`, `date_updated`) VALUES
(11, 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', '2023-03-06 08:21:41', NULL),
(12, 'Pelaksanaan Tridharma PT dalam Pengembangan Pembinaan, dan Perlindungan Kebahasaan serta Kesastraan', '2023-03-06 08:22:49', NULL),
(13, 'Program MBKM Lahan Praktik Mahasiswa Fakultas Ekonomi dan Bisnis Tridharma PT', '2023-03-06 08:25:07', NULL),
(14, 'Upaya Percepatan Penurunan Stunting Terintegrasi melalui Tridharma PT Penguatan Program Pembangunan Keluarga Kependudukan dan KB', '2023-03-06 08:25:49', NULL),
(15, 'Tri Dharma PT', '2023-03-06 08:26:22', NULL),
(16, 'Lahan Praktik Mahasiswa Prodi D3 Kebidanan', '2023-03-06 08:29:58', NULL),
(17, 'Pelaksanaan Pendidikan, Penelitian dan Pengabdian Masyarakat Prodi D3 Keperawatan Fakultas Ilmu Kesehatan', '2023-03-06 08:30:26', NULL),
(18, 'Tempat Penyelenggaraan uji kompetensi Keselamatan dan Kesehatan Kerja (K3)', '2023-03-06 08:32:35', NULL),
(19, 'Tri Dharma', '2023-03-06 08:33:24', NULL),
(20, 'Program  Merdeka Belajar Kampus Merdeka (MBKM) Lahan Praktik Mahasiswa Fakultas Ekonomi dan Bisnis, Tridharma PT', '2023-03-06 08:34:18', NULL),
(21, 'Lahan Praktik Mahasiswa Prodi DIV K3', '2023-03-06 08:35:30', NULL),
(22, 'Program  MBKM Lahan Praktik Mahasiswa Fakultas Ekonomi dan Bisnis, Tridharma PT', '2023-03-06 08:36:16', NULL),
(23, 'Internship', '2023-03-06 08:36:47', NULL),
(24, 'Pemasangan Iklan', '2023-03-06 08:37:17', NULL),
(25, 'Lahan Praktik Mahasiswa D3 Keperawatan S1 Keperawatan', '2023-03-06 08:38:01', NULL),
(26, 'Lahan Praktik Mahasiswa D3 Keperawatan', '2023-03-06 08:40:11', NULL),
(27, 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan Prodi S1 Keperawatan dan Prodi Profesi Ners', '2023-03-06 08:41:07', NULL),
(28, 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan, Prodi S1 Keperawatan Prodi S1 Farmasi S1 Informatika S1 Bisnis Digital', '2023-03-06 08:41:53', NULL),
(29, 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan', '2023-03-06 08:42:55', NULL),
(30, 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan, Prodi S1 Keperawatan, Prodi S1 Farmasi', '2023-03-06 08:45:02', NULL),
(31, 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan', '2023-03-06 08:45:42', NULL),
(32, 'Program MBKM Tempat Program Praktek Lapangan Penelitian dan Pengabdian Kepada Masyarakat Fakultas Ilmu Komputer', '2023-03-06 08:46:35', NULL),
(34, 'Exchange of Faculty members, Join research activities, Jurnal Publication, Staff development projects', '2023-03-06 08:53:17', NULL),
(35, 'MOA: Students Mobility  & Visiting Lecturer Program', '2023-03-06 08:54:00', NULL),
(36, 'MOA: Joint Research, Publication, and Seminar/Conference', '2023-03-06 08:54:20', NULL),
(37, 'Program MBKM, Publikasi bersama, Seminar nasional/Internasional, Nara sumber kegiatan, Tridharma PT Prodi DIV K3', '2023-03-06 08:54:48', NULL),
(38, 'Bimbingan Pembuatan Kurikulum', '2023-03-06 08:55:03', NULL),
(39, 'Joint Conferences, Seminar, Workshop', '2023-03-06 08:55:33', NULL),
(40, 'Pengembangan potensi diri dalam Profesi Keperawatan', '2023-03-06 08:56:00', NULL),
(41, 'Kegiatan Penyaluran Tenaga Kerja Terampil ke Luar Negeri', '2023-03-06 08:56:20', NULL),
(42, 'Kerjasama Aplikasi Satu Pintu POCILIB', '2023-03-06 08:56:41', NULL),
(43, 'Pemberdayaan dan Pemanfaatan Perpustakaan di Lingkungan FPPTI Wilayah Jawa Tengah', '2023-03-06 08:56:52', NULL),
(44, 'Kerjasama Perpustakaan di lingkup FPPTI Wilayah Jawa Tengah', '2023-03-06 08:57:18', NULL),
(45, 'Kerjasama Perpustakaan ', '2023-03-06 08:57:41', NULL),
(46, 'Pemanfaatan fasilitas perpustakaan bagi sivitas akademika kedua belah pihak', '2023-03-06 08:58:28', NULL),
(47, 'Tridharma', '2023-03-06 08:58:52', NULL),
(48, 'Pemberian akses informasi dan layanan perpustakaan serta kepustakaan untuk pengembangan akademik, Tridharma', '2023-03-06 08:59:28', NULL),
(49, 'Penggunaan Aplikasi Program Perpustakaan Digital', '2023-03-06 09:00:53', NULL),
(50, 'Kerja Sama Perpustakaan', '2023-03-06 09:01:19', NULL),
(51, 'Pelatihan Kegawatdaruratan', '2023-03-06 09:01:47', NULL),
(52, 'Tridharma Perguruan Tinggi', '2023-03-06 09:02:06', NULL),
(53, 'Pengambilan data persepsi responden internal dan eksternal yang digunakan untuk pengukuran Indeks tata kelola berbasis online (ITK-O) pada Polres Tegal', '2023-03-06 09:02:38', NULL),
(54, 'Bantuan biaya pendidikan PIP Pendidikan Tinggi Tahun 2022', '2023-03-06 09:02:54', NULL),
(55, 'Lahan Praktik Fakultas Ekonomi Bisnis', '2023-03-06 09:03:12', NULL),
(56, 'Lahan Praktik Prodi DIV K3', '2023-03-06 09:03:34', NULL),
(57, 'Pengembangan Sumber Daya Manusia Progrram Persiapan Kerja di Jepang', '2023-03-06 09:03:47', NULL),
(58, 'Pemberdayaan, Pengembangan Program Pelatihan, Pemagangan dan Penempatan tenaga Kerja', '2023-03-06 09:03:58', NULL),
(59, 'D3 Kebidanan', '2023-03-06 09:04:09', NULL),
(60, 'Tri Dharma Prodi  K3', '2023-03-08 02:38:32', NULL),
(61, 'Lahan Praktik Mahasiswa D3 Keperawatan, S1 Keperawatan dan Profesi Ners', '2023-03-08 03:02:07', NULL),
(63, 'Joint conference, seminars, and workshops. Exchange of professor and researcher, lectures, and discussions. Exchange of information including the exchange library materials and research. Joint management and publication of the journal. Joint e-learning. ', '2024-03-25 06:25:45', '2024-03-25 12:05:31'),
(64, 'Exchange of student, Joint international conference, seminars, workshops, research and publication, Exchange of faculty members, teaching personnel, and researchers for research, lectures, and academic discussions, Exchange of information', '2024-03-25 06:35:26', '2024-03-25 12:06:11'),
(65, 'Joint research, teaching and discussions; Joint and dual degrees; exchange of information pertaining to teaching, ICT proficiency and certification training programs', '2024-03-25 12:09:21', NULL),
(66, 'Faculty, researchers, academic and student; Educational lierature and journal; Join seminar, workshops for nursing and other health, extend academic qualification for lecturer; Participant in the double degree program', '2024-03-25 12:11:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fak` int(11) NOT NULL,
  `fak_kode` varchar(20) NOT NULL,
  `fak_nama` varchar(100) NOT NULL,
  `fak_ket` text NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fak`, `fak_kode`, `fak_nama`, `fak_ket`, `date_created`, `date_updated`) VALUES
(1, 'FIKES', 'Fakultas Ilmu kesehatan', '', '2022-11-25 17:00:00', '2023-01-12 21:14:49'),
(2, 'FIKOM', 'Fakultas Ilmu Komputer', '', '2022-11-25 17:00:00', '2023-01-12 21:14:56'),
(3, 'FEB', 'Fakultas Ekonomi dan Bisnis', '', '2022-11-25 17:00:00', '2023-01-12 21:15:08'),
(4, 'FIKES01', 'Ilmu Keperawatan (S1)', '                                                                                          ', '2023-05-20 01:20:17', '2023-05-20 01:35:05'),
(5, 'FIKES02', 'Farmasi (S1)', '                                                                                                                        ', '2023-05-20 01:27:43', '2023-05-20 01:35:12'),
(6, 'FIKES03', 'Kebidanan (D3)', '                                                            ', '2023-05-20 01:28:48', '2023-05-20 01:35:17'),
(7, 'FIKES04', 'Keperawatan (D3)', '                                                            ', '2023-05-20 01:29:11', '2023-05-20 01:35:23'),
(8, 'FIKES05', 'Keselamatan dan Kesehatan Kerja (D4)', '                                                            ', '2023-05-20 01:29:30', '2023-05-20 01:35:29'),
(9, 'FIKES06', 'Profesi Ners', '                              ', '2023-05-20 01:31:29', '2023-05-20 01:35:35'),
(10, 'FEB01', 'Bisnis Digital (S1)', '                              ', '2023-05-20 01:34:18', NULL),
(11, 'FEB02', 'Kewirausahaan (S1)', '                              ', '2023-05-20 01:34:29', NULL),
(12, 'FIKOM01', 'Informatika (S1)', '                              ', '2023-05-20 01:36:06', NULL),
(14, 'HMKS01', 'Humas dan Kerja Sama', '                                                            ', '2024-03-22 04:04:48', '2024-03-24 01:31:16'),
(15, 'LPPM01', 'Lembaga Penelitian dan Pengabdian Masyarakat', '                              ', '2024-03-24 01:32:17', NULL),
(16, 'PERPUS01', 'Unit Perpustakaan', '                              ', '2024-03-24 01:33:32', NULL),
(17, 'BDG01', 'Bidang Akademik', '                              ', '2024-03-24 01:34:13', NULL),
(18, 'BDG02', 'Bidang Keuangan', '                              ', '2024-03-24 01:34:33', NULL),
(19, 'BDG03', 'Bidang Kemahasiswaan', '                              ', '2024-03-24 01:35:04', NULL),
(20, 'LPM02', 'Lembaga Penjaminan Mutu', '                                                            ', '2024-12-20 01:56:48', '2024-12-20 01:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `judul_file` varchar(120) NOT NULL,
  `nama_file` varchar(120) NOT NULL,
  `tipe_file` varchar(20) NOT NULL,
  `ukuran_file` varchar(30) NOT NULL,
  `file` varchar(255) NOT NULL,
  `tgl_entry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `judul_file`, `nama_file`, `tipe_file`, `ukuran_file`, `file`, `tgl_entry`) VALUES
(1, 'dokumen pendukung', 'data.xls', 'xls', '300mb', 'img', '2022-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, '', '', '722-WhatsApp Image 2024-03-26 at 11.58.10 AM.jpeg'),
(2, '', '', '789-WhatsApp Image 2024-03-26 at 12.03.19 PM.jpeg'),
(3, '', '', '818-WhatsApp Image 2024-03-26 at 12.08.05 PM.jpeg'),
(4, '', '', '289-WhatsApp Image 2024-03-26 at 12.09.09 PM.jpeg'),
(5, '', '', '85-WhatsApp Image 2024-03-26 at 12.10.14 PM.jpeg'),
(6, '', '', '895-WhatsApp Image 2024-03-26 at 12.16.57 PM.jpeg'),
(7, '', '', '338-WhatsApp Image 2024-03-26 at 12.18.19 PM.jpeg'),
(8, '', '', '549-WhatsApp Image 2024-03-26 at 12.20.30 PM.jpeg'),
(9, '', '', '155-WhatsApp Image 2024-03-26 at 12.26.06 PM.jpeg'),
(10, '', '', '811-WhatsApp Image 2024-03-26 at 12.30.09 PM.jpeg'),
(11, '', '', '277-WhatsApp Image 2024-03-26 at 12.45.08 PM.jpeg'),
(12, '', '', '451-WhatsApp Image 2024-03-26 at 1.15.29 PM.jpeg'),
(13, '', '', '894-WhatsApp Image 2024-03-26 at 1.14.03 PM.jpeg'),
(14, '', '', '511-WhatsApp Image 2024-03-26 at 12.50.30 PM.jpeg'),
(15, '', '', '563-WhatsApp Image 2024-03-26 at 1.17.59 PM.jpeg'),
(16, '', '', '2024-03-30_WhatsApp Image 2024-03-26 at 1.20.59 PM.jpeg'),
(17, '', '', '2024-03-30_WhatsApp Image 2024-03-26 at 12.42.35 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `situs_instansi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `situs_instansi`) VALUES
(1, 'LLDIKTI', 'https://lldikti6.kemdikbud.go.id/'),
(2, 'LAPORKERMA', 'https://laporankerma.kemdikbud.go.id/');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_dok`
--

CREATE TABLE `jenis_dok` (
  `id_jenis_dok` int(11) NOT NULL,
  `jenis_dok` varchar(255) NOT NULL,
  `jenis_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_dok`
--

INSERT INTO `jenis_dok` (`id_jenis_dok`, `jenis_dok`, `jenis_ket`) VALUES
(1, 'MOU', 'MEMORANDUM OF UNDERSTANDING / NOTA KESEPAHAMAN                                                       '),
(2, 'IA', 'IMPLEMENTATION OF AGREEMENT / PETUNJUK PELAKSANAAN TEKNIS                                                      '),
(3, 'MOA', 'MEMORANDUM OF AGREEMENT / PERJANJIAN KERJASAMA');

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama`
--

CREATE TABLE `kerjasama` (
  `id_kerjasama` int(11) NOT NULL,
  `tingkat` enum('LOKAL','NATIONAL','INTERNATIONAL') DEFAULT NULL,
  `id_negara` int(11) DEFAULT NULL,
  `negara_kat` enum('LOKAL','NASIONAL','INTERNASIONAL') CHARACTER SET latin1 DEFAULT NULL,
  `pendidikan` tinyint(4) DEFAULT '0',
  `penelitian` tinyint(4) DEFAULT '0',
  `pkm` tinyint(4) DEFAULT '0',
  `id_jenis_dok` int(11) NOT NULL,
  `id_fak` int(11) DEFAULT NULL,
  `id_unit` int(11) DEFAULT NULL,
  `id_bkerja` int(11) DEFAULT NULL,
  `judul_kerjasama` varchar(500) CHARACTER SET latin1 NOT NULL,
  `deskripsi_kerjasama` text CHARACTER SET latin1,
  `status_kerjasama` enum('aktif','nonaktif') CHARACTER SET latin1 NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `no_ref_kerjasama` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `file` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerjasama`
--

INSERT INTO `kerjasama` (`id_kerjasama`, `tingkat`, `id_negara`, `negara_kat`, `pendidikan`, `penelitian`, `pkm`, `id_jenis_dok`, `id_fak`, `id_unit`, `id_bkerja`, `judul_kerjasama`, `deskripsi_kerjasama`, `status_kerjasama`, `tanggal_awal`, `tanggal_akhir`, `no_ref_kerjasama`, `file`, `date_created`, `date_updated`) VALUES
(1, NULL, 1, 'LOKAL', 1, 1, 1, 3, 1, 1, 11, 'Apotek A-24 Kota Tegal', 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', 'aktif', '2021-11-16', '2026-11-15', '031/Univ.BHAMADA/KL/XI/2021', '560-031. Apotek A-24 Kota Tegal (PKS).pdf', '2023-01-05 13:56:51', '2024-08-16 03:59:51'),
(2, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 11, 'Apotek Banjaran Sehat Kab. Tegal', 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', 'aktif', '2021-11-16', '2026-11-15', '027/Univ.BHAMADA/KL/XI/2021', '714-027. Apotek Banjaran Sehat Kab. Tegal (PKS).pdf', '2023-01-05 14:27:22', '2024-04-25 03:11:49'),
(3, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 11, 'Apotek Budi Farma Pangkah Kab. Tegal', 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', 'aktif', '2021-11-16', '2026-11-15', '027/Univ.BHAMADA/KL/XI/2021', '229-025. Apotek Budi Farma Pangkah Kab. Tegal (PKS).pdf', '2023-01-05 14:36:36', '2024-04-25 03:12:22'),
(4, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 11, 'Apotek Budi Farma Putra Kab. Tegal', 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', 'aktif', '2021-11-16', '2026-11-15', '029/Univ.BHAMADA/KL/XI/2021', '229-029. Apotek Budi Farma Putra Kab. Tegal (PKS).pdf', '2023-01-05 14:36:36', '2024-04-25 03:12:52'),
(5, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 11, 'Apotek Injaya Kab.Tegal', 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', 'aktif', '2021-11-16', '2026-11-15', '028/Univ.BHAMADA/KL/XI/2021', '505-028. Apotek Injaya Kab. Tegal (PKS).pdf', '2023-01-05 15:02:12', '2024-04-25 03:13:27'),
(6, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 11, 'Apotek Jenggul Tarub Kab.Tegal', 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', 'aktif', '2021-11-16', '2026-11-15', '021/Univ.BHAMADA/KL/XI/2021', '346-021. Apotek Jenggul Tarub Kab. Tegal (PKS).pdf', '2023-01-05 15:02:12', '2024-04-25 03:14:02'),
(7, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 11, 'Apotek Nurani Kagok Kab. Tegal', 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', 'aktif', '2021-11-16', '2026-11-15', '022/Univ.BHAMADA/KL/XI/2021', '923-022. Apotek Nurani Kagok Kab. Tegal (PKS).pdf', '2023-01-05 15:02:12', '2024-08-16 03:46:48'),
(8, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 11, 'Apotek Nurani Kota Tegal', 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', 'aktif', '2021-11-16', '2026-11-15', '032/Univ.BHAMADA/KL/XI/2021', '408-032. Apotek Nurani Tegal (PKS).pdf', '2023-01-05 15:02:12', '2024-04-25 03:15:16'),
(9, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 11, 'Apotek Perintis Kab. Tegal', 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', 'aktif', '2021-11-16', '2026-11-15', '026/Univ.BHAMADA/KL/XI/2021', '167-026. Apotek Perintis Kab. Tegal (PKS).pdf', '2023-01-05 15:02:12', '2024-04-25 03:16:49'),
(10, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 11, 'Apotek Putri Dukuhwaru', 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', 'aktif', '2021-11-16', '2021-11-15', '023/Univ.BHAMADA/KL/XI/2021', NULL, '2023-01-05 15:02:12', '2024-01-09 03:50:07'),
(11, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 11, 'Apotek Saras Sehat Kab. Tegal', 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', 'aktif', '2021-11-16', '2026-11-15', '024/Univ.BHAMADA/KL/XI/2021', '363-024. Apotek Saras Sehat Kab. Tegal (PKS).pdf', '2023-01-05 15:31:26', '2024-04-25 03:18:32'),
(12, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 11, 'Apotek Sugih Waras Kab. Tegal', 'Lahan Praktik Mahasiswa Prodi S1 Farmasi', 'aktif', '2021-11-16', '2026-11-15', '030/Univ.BHAMADA/KL/XI/2021', '608-030. Apotek Sugih Waras Kab. Tegal (PKS).pdf', '2023-01-05 15:31:26', '2024-08-16 03:47:48'),
(13, NULL, 1, 'NASIONAL', 1, 1, 1, 3, 0, 0, 12, 'Badan Pengembangan dan Pembinaan Bahasa Kementrian Pendidikan, Kebudayaan, Riset dan Teknologi', 'Pelaksanaan Tridharma PT dalam Pengembangan, Pembinaan, dan Perlindungan Kebahasaan serta Kesastraan', 'aktif', '2022-04-19', '2026-04-18', '012/Univ.BHAMADA/KL/IV/2022', '625-012. Badan Pengembangan dan Pembinaan Bahasa Kementrian Pendidikan, Kebudayaan, Riset dan Teknologi (PKS).pdf', '2023-01-05 15:31:26', '2024-04-25 03:19:31'),
(15, NULL, 1, '', 1, 1, 1, 3, 8, 0, 19, 'Balai Keselamatan dan Kesehatan Kerja Provinsi Jawa Tengah', 'Lahan Praktik Mahasiswa Prodi D4 K3', 'aktif', '2023-12-13', '2026-12-12', '092/Univ.BHAMADA/KL/XII/2023', '856-092. Balai K2 Provinsi Jawa Tengah (PKS).pdf', '2023-01-05 15:31:26', '2024-08-16 03:54:12'),
(20, NULL, 1, 'LOKAL', 1, 1, 1, 3, 3, 0, 13, 'CV. Pucuk Daun Lestari', '', 'aktif', '2022-01-18', '2027-01-17', '001/Univ.BHAMADA/KL/I/2022', '554-001. CV. Pucuk Daun Lestari (PKS).pdf', '2023-01-05 15:31:26', '2025-01-07 07:22:18'),
(22, NULL, 1, 'NASIONAL', 1, 1, 1, 3, 0, 0, 14, 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak serta Pengendalian Penduduk dan Keluarga Berencana Kabupaten Tegal', 'Upaya Percepatan Penurunan Stunting Terintegrasi melalui Tridharma PT Penguatan Program Pembangunan Keluarga, Kependudukan dan KB', 'aktif', '2022-03-01', '2022-02-28', '010/Univ.BHAMADA/KL/II/2022', '730-Dinas Pemberdayaan Perempuan dan Perlindungan Anak serta Pengendalian Penduduk dan Keluarga Berencana Kabupaten Tegal.pdf', '2023-01-05 15:48:37', '2024-01-09 03:50:07'),
(23, NULL, 1, 'NASIONAL', 1, 1, 1, 3, 0, 0, 15, 'Dinkes Kabupaten Tegal', 'Tri Dharma PT', 'aktif', '2020-12-23', '2023-12-22', '215/STIKES-BMD/KL/XII/2020', '732-Dinkes Kabupaten Tegal.pdf', '2023-01-05 15:48:37', '2024-01-09 03:50:07'),
(25, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 16, 'Griya Hamil Sehat', 'Lahan Praktik Mahasiswa Prodi D3 Kebidanan', 'aktif', '2021-11-10', '2026-11-09', '020/Univ.BHAMADA/KL/XI/2021', '616-020. Griya Hamil Sehat (PKS).pdf', '2023-01-05 15:48:37', '2024-04-25 03:24:06'),
(26, NULL, 1, 'NASIONAL', 1, 1, 1, 3, 0, 0, 15, 'Imus Institute of Science and Technology (IIST) Philippines', 'Lahan Praktik Mahasiswa Prodi D3 Kebidanan', 'aktif', '2021-11-10', '2026-11-09', '019/Univ.BHAMADA/KL/XI/2021', NULL, '2023-01-05 15:48:37', '2024-01-09 03:50:07'),
(27, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 17, 'KBIT Siti Khodijah Slawi', 'Pelaksanaan Pendidikan, Penelitian dan Pengabdian Masyarakat Prodi D3 Keperawatan Fakultas Ilmu Kesehatan', 'aktif', '2022-02-11', '2027-02-10', '009/Univ.BHAMADA.KL/II/2022', '884-009. KBIT Siti Khodijah Slawi (PKS).pdf', '2023-01-05 15:48:37', '2024-04-25 03:43:48'),
(28, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 16, 'Klinik Pratama Hibatullah Harjawinangun ', 'Lahan Praktik Mahasiswa Prodi D3 Kebidanan', 'aktif', '2021-10-01', '2026-09-30', '006/Univ.BHAMADA/KL/X/2021', '604-006. Klinik Pratama Hibatullah Harjawinangun (PKS).pdf', '2023-01-05 15:48:37', '2024-04-25 03:44:27'),
(29, NULL, 1, 'NASIONAL', 1, 1, 1, 3, 0, 0, 0, 'Lembaga Sertifikasi Profesi K3 Industri Buana Lestari', 'Tempat Penyelenggaraan uji kompetensi Keselamatan dan Kesehatan Kerja (K3)', 'nonaktif', '2021-12-06', '2024-12-05', '033/Univ.BHAMADA/KL/XII/2021', '397-Lembaga Sertifikasi Profesi K3 Industri Buana Lestari.pdf', '2023-01-05 15:48:37', '2024-01-09 03:50:07'),
(30, NULL, 1, 'INTERNASIONAL', 1, 1, 1, 1, 0, 0, 63, 'Lyceum  of  the  Philippines  University (LPU) Philippines', 'Lyceum  of  the  Philippines  University (LPU) Philippines', 'aktif', '2019-01-17', '2024-01-16', '', '115-Lyceum of the Philippnes University-Philippnes.pdf', '2023-01-05 15:48:37', '2024-03-25 06:26:28'),
(32, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 17, 'PAUD Bina Prestasi', 'Pelaksanaan Pendidikan, Penelitian dan Pengabdian Masyarakat Prodi D3 Keperawatan Fakultas Ilmu Kesehatan', 'aktif', '2022-03-11', '2027-03-10', '011/Univ.BHAMADA/KL/III/2022', '349-011. PAUD Bina Prestasi (PKS).pdf', '2023-01-06 08:22:36', '2024-04-25 03:45:09'),
(33, NULL, 1, 'NASIONAL', 1, 1, 1, 3, 0, 0, 60, 'Pemerintah Kab. Tegal', 'Tri Dharma Prodi  K3', 'aktif', '2020-12-22', '2025-12-21', '213/STIKES-BMD/KL/XII/2020', '646-Pemerintah Kab. Tegal.pdf', '2023-01-06 08:22:36', '2024-01-09 03:50:07'),
(34, NULL, 1, 'NASIONAL', 1, 1, 1, 3, 0, 0, 19, 'Pemerintah Kota Cirebon', 'Tri Dharma ', 'aktif', '2020-12-22', '2025-12-21', '220/STIKES-BMD/KL/I/2021', '779-Pemerintah Kota Cirebon.pdf', '2023-01-06 08:22:36', '2024-01-09 03:50:07'),
(35, NULL, 1, 'NASIONAL', 1, 1, 1, 3, 0, 0, 19, 'Pemerintah Kota Tegal', 'Tri Dharma ', 'aktif', '2021-07-16', '2026-07-15', '221/STIKES-BMD/KL/VII/2021', '938-PEMERINTAHAN KOTA TEGAL.pdf', '2023-01-06 08:22:36', '2024-01-09 03:50:07'),
(36, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 20, 'Perhimpunan Bank Pengkreditan Rakyat Indonesia Jawa Tengah', 'Program  Merdeka Belajar Kampus Merdeka (MBKM), Lahan Praktik Mahasiswa Fakultas Ekonomi dan Bisnis, Tridharma PT', 'aktif', '2022-01-24', '2027-01-23', '006/Univ.BHAMADA/KL/2022', '347-016. Perhimpunan Bank Pengkreditan Rakyat Indonesia Jawa Tengah (PKS).pdf', '2023-01-06 08:22:36', '2024-04-25 03:47:44'),
(37, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 16, 'Praktik Mandiri Bidan (Neni Kus A)', 'Lahan Praktik Mahasiswa Prodi D3 Kebidanan', 'aktif', '2021-11-08', '2026-11-07', '018/Univ.BHAMADA/KL/XI/2021', '586-018. Praktik Mandiri Bidan (Neni Kus A) (PKS).pdf', '2023-01-06 08:22:36', '2024-08-16 04:05:44'),
(38, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 16, 'Praktik Mandiri Bidan (R. Siti Iva R)', 'Lahan Praktik Mahasiswa Prodi D3 Kebidanan', 'aktif', '2021-11-08', '2026-11-07', '017/Univ.BHAMADA/KL/XI/2021', '224-017. Praktik Mandiri Bidan (R. Siti Iva R) (PKS).pdf', '2023-01-06 08:22:36', '2024-08-16 04:07:56'),
(39, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 16, 'Praktik Mandiri Bidan (Yeti Nurul S)', 'Lahan Praktik Mahasiswa Prodi D3 Kebidanan', 'aktif', '2021-11-08', '2026-11-07', '016/Univ.BHAMADA/KL/XI/2021', '614-016. Praktik Mandiri Bidan (Yeti Nurul S) (PKS).pdf', '2023-01-06 08:22:36', '2024-08-16 04:08:39'),
(40, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 21, 'PT Amarilys Karisma Gemilang', '', 'aktif', '2021-11-08', '2026-11-07', '016/Univ.BHAMADA/KL/XI/2021', '794-Amarilys Karisma Gemilang.pdf', '2023-01-06 08:22:36', '2024-01-09 03:50:07'),
(42, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 22, 'PT Kasyr Sibernetika Indonesia', 'Program MBKM, Lahan Praktik Mahasiswa Fakultas Ekonomi dan Bisnis, Tridharma PT', 'aktif', '2022-01-18', '2027-01-17', '002/Univ.BHAMADA/KL/IV/2022', '821-002. PT Kasyr Sibernetika Indonesia (PKS).pdf', '2023-01-06 08:36:32', '2024-08-16 04:10:45'),
(43, NULL, 1, 'LOKAL', 1, 1, 1, 3, 3, 0, 20, 'PT Nibras Berkah Mullia', 'Program  MBKM, Lahan Praktik Mahasiswa Fakultas Ekonomi dan Bisnis, Tridharma PT', 'aktif', '2022-01-18', '2027-01-17', '003/Univ.BHAMADA/KL/I/2022', '749-PT Nibras Berkah Mulia.pdf', '2023-01-06 08:36:32', '2025-01-07 07:24:42'),
(44, NULL, 1, 'LOKAL', 1, 1, 1, 3, NULL, NULL, 0, 'PT Putra Bungsu\r\n', '-', 'nonaktif', '2022-01-18', '2027-01-17', '015/Univ.BHAMADA/KL/IV/2022\r\n', NULL, '2023-01-06 08:36:32', '2023-05-31 03:19:39'),
(45, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 23, 'PT Shinzou ', 'Internship', 'aktif', '2021-10-18', '2024-10-17', '013/Univ.BHAMADA/KL/X/2021', '655-013. PT. Shinzou Panca Indonesia (PKS).pdf', '2023-01-06 08:36:32', '2024-08-16 04:19:03'),
(46, NULL, 1, 'LOKAL', 1, 1, 1, 3, NULL, NULL, 0, 'PT Somatra Polareka Sarana\r\n', 'Tri Dharma Prodi  K3\r\n', 'aktif', '2018-07-11', '2023-07-10', '182/STIKES-BMD/KL/VII/2018\r\n', NULL, '2023-01-06 08:36:32', '2023-05-31 03:19:39'),
(47, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 17, 'RA Siti Khodijah Slawi', 'Pelaksanaan Pendidikan, Penelitian dan Pengabdian Masyarakat Prodi D3 Keperawatan Fakultas Ilmu Kesehatan', 'aktif', '2022-02-11', '2027-02-10', '008/Univ.BHAMADA/KL/II/2022', '223-008. RA Siti Khodijah Slawi (PKS).pdf', '2023-01-06 08:36:32', '2024-04-25 04:24:41'),
(48, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 24, 'Radar Tegal', 'Pemasangan Iklan', 'aktif', '2021-10-19', '2022-10-19', '014/Univ.BHAMADA/KL/X/2021', '15-Radar Tegal.pdf', '2023-01-06 08:36:32', '2023-05-31 03:19:39'),
(49, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 26, 'RS Mitra Siaga Tegal', 'Lahan Praktik Mahasiswa D3 Keperawatan, S1 Keperawatan', 'aktif', '2021-09-29', '2024-09-28', '004/Univ.BHAMADA/KL/IX/2021', '475-RS Mitra Siaga Tegal.pdf', '2023-01-06 08:36:32', '2023-05-31 03:19:39'),
(50, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 0, 'RSI Al Ikhlas Pemalang', 'Lahan Praktik Mahasiswa D3 Keperawatan', 'aktif', '2021-10-15', '2024-10-14', '011/Univ.BHAMADA/KL/X/2021', '226-011. RSI Al-Ikhlas Pemalang (PKS).pdf', '2023-01-06 08:36:32', '2024-04-25 04:00:00'),
(51, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 26, 'RSI Bhakti Asih Brebes', 'Lahan Praktik Mahasiswa D3 Keperawatan', 'aktif', '2023-10-13', '2025-10-12', '076/Univ.BHAMADA/KL/X/2023', '635-076. RS Bhakti Asih Brebes (PKS).pdf', '2023-01-06 08:51:50', '2024-04-25 03:57:52'),
(52, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 61, 'RSI PKU Muhammadiyah Kab. Tegal', 'Lahan Praktik Mahasiswa D3 Keperawatan, S1 Keperawatan dan Profesi Ners', 'aktif', '2019-12-12', '2022-12-11', '205/STIKES-BMD/KL/XII/2019', '584-RSI PKU Muhamadiyah Kab. tegal.pdf', '2023-01-06 08:51:50', '2023-05-31 03:19:39'),
(53, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 61, 'RSJD Dr. Amino Gondohutomo Semarang', 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan, Prodi S1 Keperawatan dan Prodi Profesi Ners', 'aktif', '2023-12-01', '2024-04-25', '082/Univ.BHAMADA/KL/XII/2023', '393-082. RSJD Dr. Amino Gondhohutomo Semarang (PKS).pdf', '2023-01-06 08:51:50', '2024-04-25 03:55:10'),
(54, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 61, 'RSJD Surakarta', 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan, Prodi S1 Keperawatan dan Prodi Profesi Ners', 'aktif', '2021-09-23', '2024-09-22', '002/Univ.BHAMADA/KL/I/2021', '174-002. RSJD Surakarta (PKS).pdf', '2023-01-06 08:51:50', '2024-04-25 03:50:22'),
(55, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 61, 'RSU Muhammadiyah Siti Aminah Bumiayu', 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan, Prodi S1 Keperawatan, Prodi S1 Farmasi, S1 Informatika, S1 Bisnis Digital', 'aktif', '2022-08-03', '2024-08-03', '022/Univ.BHAMADA/KL/VIII/2022', '998-022. RSU Muhammadiyah Siti Aminah Bumiayu (PKS).pdf', '2023-01-06 08:51:50', '2024-04-25 03:49:34'),
(56, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 30, 'RSUD Brebes', 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan, Prodi S1 Keperawatan, Prodi S1 Farmasi', 'aktif', '2023-10-11', '2025-10-10', '075/Univ.BHAMADA/KL/X/2023', '206-075. RSUD Brebes (PKS).pdf', '2023-01-06 08:51:50', '2024-03-23 14:00:18'),
(57, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 31, 'RSUD Bumiayu', 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan', 'aktif', '2021-10-11', '2023-10-10', '018/Univ.BHAMADA/KL/V/2022', '782-018. RSUD Bumiayu (PKS).pdf', '2023-01-06 08:51:50', '2024-04-25 03:48:22'),
(58, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 30, 'RSUD Dokter Soeselo Kab. Tegal', 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan, Prodi S1 Keperawatan, Prodi D3 Kebidanan, Prodi S1 Farmasi', 'aktif', '2020-12-23', '2023-12-22', '214/STIKES-BMD/KL/XII/2020', '959-RSUD Dr. Soeselo Kabupaten Tegal.pdf', '2023-01-06 08:51:50', '2023-05-31 03:19:39'),
(59, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 29, 'RSUD Dr. M. Ashari Pemalang', 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan', 'aktif', '2021-09-28', '2026-09-27', '015/Univ.BHAMADA/KL/X/2021', '36-RSUD Dr. Ashari Pemalang.pdf', '2023-01-06 08:51:50', '2023-05-31 03:19:39'),
(60, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 61, 'RSUD Gunung Jati Cirebon', 'Lahan Praktik Mahasiswa Prodi Profesi Ners', 'aktif', '2021-09-28', '2024-09-27', '001/Univ.BHAMADA/KL/IX/2021', '64-001. RSUD Gunung Jati Cirebon (PKS).pdf', '2023-01-06 08:51:50', '2024-04-25 04:01:02'),
(61, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 30, 'RSUD Kardinah Kota Tegal', 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan, Prodi S1 Keperawatan, Prodi D3 Kebidanan, Prodi S1 Farmasi', 'aktif', '2022-05-31', '2027-05-30', '019/Univ.BHAMADA/KL/VI/2022', '640-019. RSUD Kardinah (Revisi) (PKS).pdf', '2023-01-06 09:04:17', '2024-04-25 03:32:06'),
(62, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 30, 'RSUD Suradadi Kabupaten Tegal', 'Lahan Praktik Mahasiswa Prodi D3 Keperawatan, Prodi S1 Keperawatan, Prodi S1 Farmasi', 'aktif', '2020-12-21', '2025-12-20', '216/STIKES-BMD/KL/XII/2020', '570-RSUD Suradadi Kabupaten Tegal.pdf', '2023-01-06 09:04:17', '2023-05-31 03:19:39'),
(64, NULL, 1, '', 1, 1, 1, 3, 2, 0, 32, 'SMK Bina Nusa Slawi', 'Program MBKM, Tempat Program Praktek Lapangan, Penelitian dan Pengabdian Kepada Masyarakat Fakultas Ilmu Komputer', 'aktif', '2022-01-18', '2027-01-17', '004/Univ.BHAMADA/KL/II/2022', '538-004. SMK Bina Nusa Slawi (PKS).pdf', '2023-01-06 09:04:17', '2025-01-07 07:19:34'),
(65, NULL, 1, 'INTERNASIONAL', 1, 1, 1, 3, 0, 0, 34, 'Systems Plus College Foundation (SPCF) - College of Nursing Philippines', 'Exchange of Faculty members, Join research activities, Jurnal Publication, Staff development projects', 'aktif', '2022-06-02', '2027-06-01', '-', '416-System Plus College Foundation (SPCF) – College of Nursing Philippines.pdf', '2023-01-06 09:04:17', '2023-05-31 03:19:39'),
(69, NULL, 1, 'INTERNASIONAL', 1, 1, 1, 1, 0, 0, 63, 'Tarlac Agricultural University (TAU) Philippines', 'Tri Dharma ', 'aktif', '2019-01-17', '2024-01-16', '-', '136-Tarlac Agricultural University-Philippines.pdf', '2023-01-06 09:04:17', '2024-03-25 06:27:20'),
(70, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 37, 'Universitas Balikpapan', 'Program MBKM, Publikasi bersama, Seminar nasional/Internasional, Nara sumber kegiatan, Tridharma PT Prodi DIV K3', 'aktif', '2021-10-25', '2026-10-24', '002/Univ.BHAMADA/MoU/X/2021', '108-Universitas Balikpapan.pdf', '2023-01-06 09:04:17', '2023-05-31 03:19:39'),
(71, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 38, 'Universitas Dian Nuswantoro (UDINUS)', 'Bimbingan Pembuatan Kurikulum', 'aktif', '2022-06-24', '2023-06-23', '016/UNIV-BMD/FIKOM/V/2022', '999-udinus.pdf', '2023-01-06 09:17:43', '2023-05-31 03:19:39'),
(72, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 19, 'Universitas Muhadi Setiabudi Brebes', 'Tri Dharma ', 'aktif', '2019-06-25', '2024-06-24', '194/STIKES-BMD/KL/VI/2019', '82-universitas muhadi setiabudi.pdf', '2023-01-06 09:17:43', '2023-05-31 03:19:39'),
(73, NULL, 1, 'LOKAL', 1, 1, 1, 3, 0, 0, 0, 'Universitas Muhammadiyah Surakarta', 'Tri Dharma ', 'aktif', '2019-05-02', '2024-05-01', '193/STIKES-BMD/KL/IV/2019', '15-univ muhammadiyah surakarta.pdf', '2023-01-06 09:17:43', '2023-05-31 03:19:39'),
(74, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 39, 'Universitas Panca Sakti ', 'Joint Conferences, Seminar, Workshop', 'aktif', '2021-11-25', '2025-11-24', '-', '217-Universitas Panca Sakti 1.pdf', '2023-01-06 09:17:43', '0000-00-00 00:00:00'),
(75, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 15, 'Universitas Setia Budi ', 'Tri Dharma PT', 'aktif', '2019-10-17', '2023-10-16', '200/STIKES-BMD/KL/X/2019', NULL, '2023-01-06 09:17:43', '2023-05-19 06:13:01'),
(76, NULL, NULL, 'LOKAL', 1, 1, 1, 3, NULL, NULL, 0, 'Universitas Swadaya Gunung Jati Cirebon\r\n', '-', 'aktif', '2019-01-17', '2023-01-16', '188/STIKES-BMD/KL/I/2019\r\n', NULL, '2023-01-06 09:17:43', '2023-05-19 06:13:39'),
(77, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 20, 'Universitas Trilogi', 'Merdeka Belajar, Kelas Merdeka, dan Tri Dharma PT', 'aktif', '2021-12-16', '2024-12-15', '003/Univ.BHAMADA/MoU/XII/2021', '31-Universitas Trilogi.pdf', '2023-01-06 09:17:43', '2023-05-19 06:13:43'),
(79, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 40, 'LPK Kokorono Siji', 'Pengembangan potensi diri dalam Profesi Keperawatan', 'aktif', '2022-07-12', '2025-07-11', '020/Univ.BHAMADA/KL/VII/2022', '243-LPK Kokorono Siji.pdf', '2023-01-06 09:17:43', '2023-05-19 06:13:53'),
(80, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 41, 'PT Mitra Sinergi Sukses', 'Kegiatan Penyaluran Tenaga Kerja Terampil ke Luar Negeri', 'aktif', '2022-08-22', '2024-08-21', '024/Univ.BHAMADA/KL/VIII/2022', '51-PT. Mitra .pdf', '2023-01-06 09:17:43', '2023-05-19 06:13:59'),
(81, NULL, NULL, 'NASIONAL', 1, 1, 1, 3, 0, 0, 42, 'Perpustakaan Dinas Kearsipan dan Perpustakaan Kabupaten Tegal', 'Kerjasama Aplikasi Satu Pintu ', 'aktif', '2019-01-14', '2024-01-13', '041/10/…./2021', '870-Perpustakaan Dinas Kearsipan dan Perpustakaan Kabupaten Tegal 1.pdf', '2023-01-06 10:19:59', '2023-05-19 06:14:05'),
(82, NULL, NULL, 'NASIONAL', 1, 1, 1, 3, 0, 0, 43, 'Forum Perpustakaan Perguruan Tinggi Jawa Tengah - FPPTI Wilayah Jawa Tengah', 'Pemberdayaan dan Pemanfaatan Perpustakaan di Lingkungan FPPTI Wilayah Jawa Tengah', 'aktif', '2020-02-14', '2022-02-13', '50/Perpus-BMD/II/2020', '558-Forum Perpustakaan Perguruan Tinggi Jawa Tengah (FPPTI Wilayah Jawa Tengah1.pdf', '2023-01-06 10:21:17', '2023-05-19 06:14:10'),
(83, NULL, NULL, 'NASIONAL', 1, 1, 1, 3, 0, 0, 44, 'Forum Perpustakaan Perguruan Tinggi Jawa Tengah FPPTI Wilayah Jawa Tengah', 'Kerjasama Perpustakaan di lingkup FPPTI Wilayah Jawa Tengah', 'aktif', '2020-04-14', '2023-04-13', '043/PERPUS-BMD/IV/2020', '237-Forum Perpustakaan Perguruan Tinggi Jawa Tengah (FPPTI Wilayah Jawa Tengah2.pdf', '2023-01-06 10:22:10', '2023-05-19 06:14:15'),
(84, NULL, NULL, 'NASIONAL', 1, 1, 1, 3, 0, 0, 45, 'Ikatan Perpustakaan Provinsi Jawa Tengah', 'Kerjasama Perpustakaan ', 'aktif', '2019-11-06', '2024-11-05', '45/PERPUS/PKGT/XI/2019', '962-Ikatan Perpustakaan.pdf', '2023-01-06 10:22:41', '2023-05-19 06:14:20'),
(85, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 46, 'Perpustakaan Cemara SMK N 1 Tegal', 'Pemanfaatan fasilitas perpustakaan bagi sivitas akademika kedua belah pihak', 'aktif', '2018-08-07', '2023-08-06', '-', '507-Perpustakaan Cemara SMK N 1 Tegal.pdf', '2023-01-06 10:23:26', '2023-05-19 06:14:24'),
(86, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 46, 'Perpustakaan SMK N 2 Adiwerna', 'Pemanfaatan fasilitas perpustakaan bagi sivitas akademika kedua belah pihak', 'aktif', '2020-08-24', '2025-08-23', '-', '60-Perpustakaan SMK N 2 Adiwerna.pdf', '2023-01-06 10:24:47', '2023-05-19 06:14:30'),
(87, NULL, NULL, 'NASIONAL', 1, 1, 1, 3, 0, 0, 19, 'Kantor Dinas Kearsipan dan Perpustakaan Kabupaten Tegal', 'Tridharma', 'aktif', '2019-12-02', '2022-12-01', '47/PERPUST-BMD/XII/2019', '550-Kantor Dinas Kearsipan dan Perpustakaan Kabupaten Tegal.pdf', '2023-01-06 10:25:34', '2023-05-19 06:14:34'),
(88, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 46, 'Universitas Panca Sakti ', 'Pemanfaatan fasilitas perpustakaan bagi sivitas akademika kedua belah pihak', 'aktif', '2019-11-08', '2024-11-07', '042/PERPUS.BMD/X/2019', '120-Universitas Panca Sakti 2.pdf', '2023-01-06 10:26:10', '2023-05-19 06:14:39'),
(89, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 48, 'Politeknik Harapan Bersama', 'Pemberian akses informasi dan layanan perpustakaan serta kepustakaan untuk pengembangan akademik, Tridharma', 'aktif', '2018-08-15', '2023-08-14', '032/Perpus/LL/VIII/2018', '734-Politeknik Harapan Bersama.pdf', '2023-01-06 10:27:58', '2023-05-19 06:14:45'),
(90, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 48, 'Poltekes Kemenkes Semarang', 'Pemberian akses informasi dan layanan perpustakaan serta kepustakaan untuk pengembangan akademik, Tridharma', 'aktif', '2019-10-10', '2024-10-09', '042/PERPUS.BMD/X/2019', '217-Poltekes Kemenkes Semarang.pdf', '2023-01-06 10:29:00', '2023-05-19 06:14:51'),
(91, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 48, 'Perpustakaan Politeknik Keselamatan Transportasi Jalan Tegal ', 'Pemberian akses informasi dan layanan perpustakaan serta kepustakaan untuk pengembangan akademik, Tridharma', 'aktif', '2019-11-26', '2024-11-25', '46/PERPUS BMD/XI/2019', '6-Perpustakaan Politeknik keselamatan Transportasi Jalan Tegal.pdf', '2023-01-06 10:29:36', '2023-05-19 06:14:55'),
(92, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 49, 'PT Enam KUBUKU Indonesia', 'Penggunaan Aplikasi Program Perpustakaan Digital', 'aktif', '2021-04-21', '2026-04-20', '', '258-PT Enam KUBUKU Indonesia.pdf', '2023-01-06 10:30:11', '2023-05-19 06:15:01'),
(93, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 50, 'Perpustakaan Nasional RI', 'Kerja Sama Perpustakaan', 'aktif', '2019-12-16', '2024-12-15', '171/STIKES-BMD/KL/XII/2019', '513-Perpustakaan Nasional RI.pdf', '2023-01-06 10:31:02', '2023-05-19 06:15:08'),
(94, NULL, NULL, 'LOKAL', 1, 1, 1, 3, 0, 0, 51, 'Gadar Medik Indonesia', '-', 'aktif', '2022-10-11', '2025-12-10', '-', '447-Gadar Medik Indonesia.pdf', '2023-01-06 03:31:46', '2023-05-19 06:15:13'),
(95, NULL, 0, 'NASIONAL', 1, 1, 1, 1, 0, 0, 16, 'Indonesian Holistic Care Association (IHCA)', '', 'aktif', '2021-11-10', '2026-11-09', '019/Univ.BHAMADA/KL/XI/2021', '952-019. Indonesian Holistic Care Association (IHCA) (PKS).pdf', '2023-03-08 02:35:38', '2024-08-16 03:55:33'),
(97, NULL, 0, 'LOKAL', 1, 0, 0, 3, 5, 0, 19, 'RSUD Kajen Pekalongan', 'Kuliah Kerja Nyata Mahasiswa', 'aktif', '2023-01-03', '2028-01-31', '001/Univ-BHAMADA/KL/I/2023', '2023-11-30_001. RSUD Kajen (PKS).pdf', '2023-11-30 03:49:02', '2023-11-30 03:50:35'),
(98, NULL, 0, 'LOKAL', 1, 1, 1, 1, 1, 0, 52, 'Universitas Widya Husada Semarang', '', 'aktif', '2023-01-31', '2028-01-30', '002/Univ.BHAMADA/KL/I/2023', '2023-11-30_002. Universitas Widya Husada Semarang (MoU).pdf', '2023-11-30 03:53:08', '2023-11-30 03:58:01'),
(99, NULL, 0, 'LOKAL', 1, 1, 1, 1, 0, 0, 52, 'STIKes Muhammadiyah Tegal', '', 'aktif', '2023-05-10', '2028-05-09', '007/Univ.BHAMADA/MOU/V/2023', '2023-11-30_007. STIKes Muhammadiyah Tegal (MoU).pdf', '2023-11-30 03:55:58', '2023-11-30 04:08:47'),
(100, NULL, 1, 'LOKAL', 1, 0, 0, 1, 0, 0, 27, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan Rumah Sakit Umum Daerah Kajen Kabupaten Pekalongan', '', 'aktif', '2022-01-03', '2025-12-31', '011/Univ-BHAMADA/KL/I/2023', '2023-12-14_001. RSUD Kajen (PKS).pdf', '2023-12-14 02:22:59', NULL),
(101, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 11, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan Apotek Kimia Farma Unit Bisnis Pekalongan ', '', 'aktif', '2023-10-16', '2028-10-16', '079/Univ-BHAMADA/KL/X/2023', '2023-12-14_079. Apotek Kimia Farma Unit Bisnis Pekalongan (PKS).pdf', '2023-12-14 02:30:11', '2023-12-14 03:11:15'),
(102, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 17, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan RS Bhakti Asih Brebes', '', 'aktif', '2023-10-13', '2025-10-13', '076/Univ.BHAMADA/KL/X/2023', '2023-12-14_076. RS Bhakti Asih Brebes (PKS).pdf', '2023-12-14 03:02:42', NULL),
(103, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 56, 'Perjanjian kerjasama antara Prodi Keselamatan dan Kesehatan kerja (D-IV) Universitas Bhamada Slawi dengan PT. Hamana Works Indonesia', '', 'aktif', '2023-05-15', '2026-05-15', '064/Univ.BHAMADA/KL/V/2023', '2023-12-14_064. PT Hamana Works Indonesia (PKS).pdf', '2023-12-14 04:07:24', NULL),
(104, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 15, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan STIKes Bethesda Yakkum', '', 'aktif', '2023-05-12', '2026-05-12', '061/Univ.BHAMADA/KL/V/2023', '2023-12-14_061. STIKes Bethesda Yakkum Yogyakarta (PKS).pdf', '2023-12-14 04:10:45', NULL),
(105, NULL, 0, 'LOKAL', 1, 1, 1, 1, 0, 0, 17, 'Perjanjian Kerjasama antara Fakultas Ilmu kesehatan Universitas Bhamada Slawi dengan RS Amanah Mahmudah Brebes ', '', 'aktif', '2023-05-10', '2024-05-10', '053/Univ.BHAMADA/KL/V/2023', '2023-12-14_053. RS Amanah Mahmudah Brebes (PKS).pdf', '2023-12-14 04:14:32', NULL),
(106, NULL, 1, 'LOKAL', 1, 1, 1, 0, 0, 0, 48, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan STIKes Brebes', '', 'aktif', '2023-03-09', '2028-03-09', '050/Univ.BHAMADA/KL/III/2023', '2023-12-14_050. STIKes Brebes (PKS).pdf', '2023-12-14 04:17:15', NULL),
(107, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 52, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan PT. Sampharindo Perdana Semarang', '', 'aktif', '2023-06-15', '2025-06-15', '063/Univ.BHAMADA/KL/VI/2023', '2023-12-14_063. PT Sampharindo Perdana Semarang.pdf', '2023-12-14 04:21:31', NULL),
(108, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 52, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan RSJD Dr. Amino Gondohutomo Provinsi Jateng', '', 'aktif', '2023-12-01', '2026-12-01', '082/Univ.BHAMADA/KL/XII/2023', '2023-12-14_082. RSJD Dr. Amino Gondhohutomo Semarang (PKS).pdf', '2023-12-14 04:24:13', NULL),
(109, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 52, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan CV. Graha Ilmu', '', 'aktif', '2023-10-10', '2024-10-10', '078/Univ.BHAMADA/KL/X/2023', '2023-12-14_078. CV Graha Ilmu (PKS).pdf', '2023-12-14 04:26:43', NULL),
(110, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 27, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan RSUD Brebes', '', 'aktif', '2023-10-11', '2025-10-11', '075/Univ.BHAMDA/KL/X/2023', '2023-12-14_075. RSUD Brebes (PKS).pdf', '2023-12-14 04:48:46', NULL),
(111, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 52, 'Perjanjian Kerjasama antara Universitas Bhamada dengan PT. Anugerah Argon Medica', '', 'aktif', '2023-07-27', '2028-07-27', '071/Univ.BHAMADA/KL/VII/2023', '2023-12-14_071. PT Anugrah Argon Medica (PKS).pdf', '2023-12-14 07:41:35', NULL),
(112, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 0, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan Puskesmas Pangkah', '', 'aktif', '2023-08-01', '2024-08-01', '070/Univ.BHAMADA/KL/VIII/2023', '2023-12-14_070. Puskesmas Pangkah (PKS).pdf', '2023-12-14 07:44:46', NULL),
(113, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 0, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan Lembaga Farmasi TNI Angkatan Laut Drs. Moch. Kamal', '', 'aktif', '2023-08-10', '2024-08-10', '069/Univ.BHAMADA/KL/VIII/2023', '2023-12-14_069 Lembaga Farmasi TNI AL Drs. Moch Kamal (PKS).pdf', '2023-12-14 07:47:52', NULL),
(115, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 27, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan RS Harapan Sehat Slawi', '', 'aktif', '2023-05-10', '2028-05-10', '058/Univ.BHAMADA/KL/V/2023', '2023-12-14_058. RS Harapan Sehat Slawi (FIKES) (PKS).pdf', '2023-12-14 07:57:35', NULL),
(116, NULL, 1, 'LOKAL', 1, 1, 1, 1, 3, 0, 13, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan Badan Usaha Milik Desa (BUMDES) Desa Dukuhwringin Slawi Tegal', '', 'aktif', '2023-05-10', '2028-05-10', '057/Univ.BHAMADA/KL/V/2023', '2023-12-14_057. Bumdes Wringin Sejahtera Slawi (PKS).pdf', '2023-12-14 08:00:04', '2025-01-07 07:29:43'),
(117, NULL, 1, '', 1, 1, 1, 1, 0, 0, 0, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan STKIP NU TEGAL', '', 'aktif', '2023-05-10', '2028-05-10', '056/Univ.BHAMADA/KL/V/2023', '2023-12-14_056. Sekolah Tinggi Ilmu Keguruan dan Pendidikan NU Tegal (PKS).pdf', '2023-12-14 08:02:19', '2025-01-07 07:17:37'),
(118, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 0, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan STIKES Muhammadiyah Tegal', '', 'aktif', '2023-05-10', '2028-05-10', '054/Univ.BHAMADA/KL/V/2023', '2023-12-14_054. STIKes Muhammadiyah Tegal (PKS).pdf', '2023-12-14 08:04:08', NULL),
(119, NULL, 0, 'LOKAL', 1, 1, 1, 1, 0, 0, 0, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan RS Hawari Essa Lebaksiu Tegal', '', 'aktif', '2023-05-10', '2026-05-10', '052/Univ.BHAMADA/KL/V/2023', '2023-12-14_052. RS Hawari  Essa Slawi (PKS).pdf', '2023-12-14 08:06:32', NULL),
(120, NULL, 1, 'LOKAL', 1, 1, 1, 1, 3, 0, 20, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan SMA N 3 Slawi', '', 'aktif', '2023-05-08', '2028-05-08', '051/Univ.BHAMADA/KL/V/2023', '2023-12-14_051 SMA Negeri 3 Slawi (PKS).pdf', '2023-12-14 08:09:17', '2025-01-07 07:29:15'),
(121, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 52, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan Universitas Widya Husada Semarang', '', 'aktif', '2023-01-31', '2028-01-31', '002/Univ.BHAMADA/KL/I/2023', '2023-12-14_002. Universitas Widya Husada Semarang (MoU).pdf', '2023-12-14 08:12:53', NULL),
(122, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 52, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan Bagian Farmasi Kepolisian', '', 'aktif', '2023-06-22', '2028-06-22', '068/Univ.BHAMADA/KL/VI/2023', '2023-12-14_068. Bagian Farmasi Kepolisian (PKS).pdf', '2023-12-14 08:16:10', NULL),
(123, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 52, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan PT. Bhineka Mitra Sejati Semarang', '', 'aktif', '2023-06-19', '2028-06-19', '066/Univ.BHAMADA/KL/VI/2023', '2023-12-14_066. PT Bhineka Mitra Sejati Semarang (PKS).pdf', '2023-12-14 08:18:01', NULL),
(124, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 60, 'Perjanjian Kerjasama antara Unversitas Bhamada Slawi dengan PT. Adhikarilab Indonesia', '', 'aktif', '2023-05-10', '2028-05-10', '060/Univ.BHAMADA/KL/V/2023', '2023-12-14_060. PT Adhikarilab Indonesia (PKS).pdf', '2023-12-14 08:20:37', NULL),
(125, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 0, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan TPS3R Pratama Jaya Kabupaten Tegal', '', 'aktif', '2023-07-27', '2024-07-27', '059/Univ.BHAMADA/KL/VIII/2023', '2023-12-14_059a. TPS3R Pratama Jaya Kab Tegal (PKS).pdf', '2023-12-14 08:22:34', NULL),
(126, NULL, 1, 'LOKAL', 0, 0, 0, 1, 0, 0, 0, 'Perjanjian Kerjasama antara Universitas Bhamada Slawi dengan PT. POS Indonesia (PERSERO) Kantor Pos Tegal', '', 'aktif', '2023-02-27', '2025-02-27', '046/Univ.BHAMADA/KL/II/2023', '2023-12-14_046. PT Kantor Pos Tegal (PKS).pdf', '2023-12-14 08:25:04', NULL),
(127, NULL, 1, 'LOKAL', 1, 1, 1, 1, 0, 0, 52, 'Perjanjian kerjasama antara Universitas Bhamada Slawi dengan STKIP NU Tegal', '', 'aktif', '2023-05-10', '2028-05-10', '009/Univ.BHAMADA/MOU/V/2023', '2023-12-14_009. Sekolah Tinggi Ilmu Keguruan Pendidikan NU Tegal (MoU).pdf', '2023-12-14 08:27:34', NULL),
(129, NULL, 140, 'INTERNASIONAL', 1, 1, 1, 1, 0, 0, 64, 'University of Economy and Pedagogy, Uzbekistan', '', 'aktif', '2023-03-11', '2028-03-10', '-', '2024-03-25_University of Economy and Pedagogy-Uzbekistan.pdf', '2024-03-25 05:43:02', '2024-03-25 06:36:30'),
(130, NULL, 31, 'INTERNASIONAL', 1, 1, 1, 1, 0, 0, 64, 'Eastern Institute for Integrated Learning in Management (EIILM)-Kolkata- India', '', 'aktif', '2023-03-11', '2028-03-10', '-', '2024-03-25_Eastern Institute For Integrated Learning-India.pdf', '2024-03-25 05:46:07', '2024-03-25 06:37:05'),
(131, NULL, 140, 'INTERNASIONAL', 1, 1, 1, 1, 0, 0, 64, 'Kimyo International University in Tashkent, Uzbekistan', '', 'aktif', '2023-03-11', '2028-03-10', '-', '2024-03-25_Kimyo International University in Tashkent-Uzbekistan.pdf', '2024-03-25 05:50:46', '2024-03-25 06:37:28'),
(132, NULL, 140, 'INTERNASIONAL', 1, 1, 1, 1, 0, 0, 64, 'Tashkent State Transport University', '', 'aktif', '2023-03-11', '2028-03-10', '-', '2024-03-25_Tashkent State Transport University-Uzbekistan.pdf', '2024-03-25 05:53:17', '2024-03-25 06:38:15'),
(133, NULL, 125, 'INTERNASIONAL', 1, 1, 1, 1, 0, 0, 65, 'University Malaysia of Computer Science and Engineering Malaysia', '', 'aktif', '2023-11-13', '2028-11-12', '-', '2024-03-25_University Malaysia of Computer Science and Engineering (UNIMY).pdf', '2024-03-25 05:55:50', '2024-03-25 12:15:26'),
(134, NULL, 42, 'INTERNASIONAL', 1, 1, 1, 1, 0, 0, 66, 'ST. Bernadette of Lourdes College Quezon City, Philippines', '', 'aktif', '2023-05-25', '2026-05-24', '-', '2024-03-25_ST. Bernadette of Lourdes College Quezon City.pdf', '2024-03-25 06:00:56', '2024-03-25 12:17:39'),
(135, NULL, 31, 'INTERNASIONAL', 1, 1, 1, 1, 0, 0, 64, 'RV University, India', '', 'aktif', '2023-03-11', '2028-03-10', '-', '2024-03-25_RV University- India.pdf', '2024-03-25 06:02:46', '2024-03-25 06:39:10'),
(136, NULL, 42, 'INTERNASIONAL', 1, 1, 1, 1, 0, 0, 63, 'University of Perpetual Help System DALTA (UPHSD), Calamba, Laguna, Philippines', '', 'aktif', '2019-07-31', '2024-07-30', '-', '2024-03-25_University of Peptual Help System Dalta (UPHSD)-Phillipines.pdf', '2024-03-25 06:30:30', NULL),
(140, NULL, 1, 'NASIONAL', 1, 1, 1, 0, 1, 0, 0, 'UNIVERSITAS SARI MUTIARA INDONESIA', '', 'aktif', '2023-05-17', '2028-05-16', '015/Univ.BHAMADA/Mou/V/2023', '2024-08-21_015. Universitas Sari Mutiara (MoU).pdf', '2024-08-21 02:38:09', NULL),
(141, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'UNIVERSITAS AL- IRSYAD CILACAP', '', 'aktif', '2023-11-16', '2028-11-15', '020/Univ.BHAMADA/MOU/XI/2023', '2024-08-21_020. Universitas Al-Irsyad Cilacap (MOU).pdf', '2024-08-21 02:43:56', NULL),
(142, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'AKADEMI KEPERAWATAN PELNI', '', 'aktif', '2023-11-16', '2028-11-15', '021/Univ.BHAMADA/MOU/XI/2023', '2024-08-21_021. Akademi Keperawatan Pelni (Mou).pdf', '2024-08-21 02:46:47', NULL),
(143, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'STIKES AHMAD DAHLAN ', '', 'aktif', '2023-12-04', '2028-12-03', '023/Univ.BHAMADA/MOU/XII/2023', '2024-08-21_023. STIKes Ahmad Dahlan Cirebon (MOU).pdf', '2024-08-21 02:49:33', NULL),
(144, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'UNIVERSITAS PANCASAKTI TEGAL', '', 'aktif', '2023-12-19', '2028-12-18', '024/Univ>BHAMADA/MOU/XII/2023', '2024-08-21_024 UPS (MOU).pdf', '2024-08-21 02:52:24', NULL),
(145, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'UNIVERSITAS SWADAYA GUNUNG JATI CIREBON', '', 'aktif', '2023-12-19', '2028-12-18', '025/Univ.BHAMADA/MOU/XII/2023', '2024-08-21_025 MOU UniversitasSwadaya Gunung Jati Cirebon.pdf', '2024-08-21 02:55:25', NULL),
(146, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'UNIVERSITAS MUHAMMADIYAH PURWOREJO', '', 'aktif', '2023-12-19', '2028-12-18', '027/Univ.BHAMADA/MOU/XII/2023', '2024-08-21_027 Universitas Muhammadiyah Purworejo (Mou).pdf', '2024-08-21 02:58:14', NULL),
(147, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'PT. DIAN NUSWANTORO TEKNOLOGI & INFORMASI', '', 'aktif', '2023-03-03', '2024-03-02', '048/Univ.BHAMADA/KL/III/2023', '2024-08-21_048. PT Dian Nuswantoro Teknologi dan Informasi (PKS).pdf', '2024-08-21 03:08:37', NULL),
(148, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'SMA NEGERI 3 SLAWI', '', 'aktif', '2023-05-08', '2028-05-07', '051/Univ.BHAMADA/KL/V2023', '2024-08-21_051 SMA Negeri 3 Slawi (PKS).pdf', '2024-08-21 03:12:04', NULL),
(149, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'RUMAH SAKIT HAWARI ESSA SLAWI', '', 'aktif', '2023-05-10', '2025-05-09', '052/Univ.BHAMADA/KL/V/2023', '2024-08-21_052. RS Hawari  Essa Slawi (PKS).pdf', '2024-08-21 03:17:08', NULL),
(150, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'RUMAH SAKIT AMANAH MAHMUDAH BREBES', '', 'aktif', '2023-05-10', '2024-05-09', '053/Univ.BHAMADA/KL/V2023', '2024-08-21_053. RS Amanah Mahmudah Brebes (PKS).pdf', '2024-08-21 03:20:46', NULL),
(151, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'RUMAH SAKIT HARAPAN SEHAT SLAWI', '', 'aktif', '2023-05-10', '2028-05-09', '058/Univ.BHAMADA/KL/V/2023', '2024-08-21_058. RS Harapan Sehat Slawi (FIKES) (PKS).pdf', '2024-08-21 03:25:23', NULL),
(152, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'UNIVERSITAS SARI MUTIARA ', '', 'aktif', '2023-05-17', '2026-05-16', '065/.BHAMADA/KL/V/2023', '2024-08-21_065. Universitas Sari Mutiara (PKS).pdf', '2024-08-21 03:32:05', NULL),
(153, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'PT ANUGRAH ARGON MEDICA', '', 'aktif', '2023-07-27', '2028-07-26', '071/Univ.BHMADA/KL/VII/2023', '2024-08-21_071. PT Anugrah Argon Medica (PKS).pdf', '2024-08-21 03:34:45', NULL),
(154, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'PT ESTU ADIRTA (INIKARIR GLOBAL)', '', 'aktif', '2023-08-08', '2026-08-07', '073/Univ.BHAMADA/KL/VIII/2023', '2024-08-21_073. PT Estu Adiarta (Inikarir Global) (PKS).pdf', '2024-08-21 03:38:37', NULL),
(155, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'RUMAH SAKIT DAERAH BREBES', '', 'aktif', '2023-10-11', '2025-10-10', '075/Univ.BHAMADA/KL/X/2023', '2024-08-21_075. RSUD Brebes (PKS).pdf', '2024-08-21 03:43:34', NULL),
(156, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'FFPTI JATENG', '', 'aktif', '2023-08-26', '2024-08-25', '081/Univ.BHAMADA/KL/XI/2023', '2024-08-21_081 FPPTI Jateng (Turnitin Similarity).pdf', '2024-08-21 03:47:51', NULL),
(157, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'STIKES BAKTI UTAMA PATI', '', 'aktif', '2023-08-30', '2026-08-29', '080/Univ.BHAMADA/KL/XI/2023', '2024-08-21_080. STIKes Bakti Utama Pati (PKS).pdf', '2024-08-21 03:53:01', NULL),
(158, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'RSJD DR. AMINO GONDOHUTOMO', '', 'aktif', '2023-12-01', '2026-11-30', '082/Univ.BHMADA/KL/XII/2023', '2024-08-21_082. RSJD Dr. Amino Gondhohutomo Semarang (PKS).pdf', '2024-08-21 04:01:10', NULL),
(159, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'UNIVERSITAS AL IRSYAD CILACAP', '', 'aktif', '2023-11-16', '2026-11-15', '083/Univ.BHMADA/KL/XI/2023', '2024-08-21_083. Universitas Al-Irsyad Cilacap (Fakultas Farmasi Sains) (PKS).pdf', '2024-08-21 04:06:31', NULL),
(160, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'UNIVERSITAS AL- IRSYAD CILACAP', '', 'aktif', '2023-11-16', '2026-11-15', '084/Univ.BHAMADA/KL/XI/2023', '2024-08-21_084. Universitas Al- Irsyad Cilacap (Fakultas Ilmu Kesehatan) (PKS).pdf', '2024-08-21 04:10:34', NULL),
(161, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'UNIVERSITAS AL- IRSYAD CILACAP', '', 'aktif', '2022-11-16', '0025-02-15', '085/Univ.BHAMADA/KL/XI/2023', '2024-08-21_085. Universitas Al-Irsyad Cilacap (Fakultas Ilmu Sosial) (PKS).pdf', '2024-08-21 04:13:24', NULL),
(162, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'AKADEMI KEPERAWATAN PELNI', '', 'aktif', '2023-12-11', '2025-12-10', '090/Univ.BHAMADA/KL/XII/2023', '2024-08-21_090. Akademi Keperawatan Pelni (PKS).pdf', '2024-08-21 04:17:58', NULL),
(163, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'STIKES AHMAD DAHLAN CIREBON', '', 'aktif', '2023-12-07', '2026-12-06', '091/Univ.BHAMADA/KL/XII/2023', '2024-08-21_091. STIKes Ahmad Dahlan Cirebon (PKS).pdf', '2024-08-21 04:21:36', NULL),
(164, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 2, 0, 0, 'UNIVERSITAS ALMA ATA', '', 'aktif', '2023-12-19', '2028-12-18', '093/Univ.BHAMADA/KL/XII/2023', '2024-08-21_093 Universitas Alma Ata (PKS).pdf', '2024-08-21 04:25:40', '2025-01-07 07:08:34'),
(166, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'UNIVERSITAS PERADABAN', '', 'aktif', '2024-01-08', '2027-01-07', '0011/Univ.BHAMADA/KL/I/2024', '2024-08-22_001 Universitas Peradaban (Fakultas Sains dan Teknologi) (PKS).pdf', '2024-08-22 01:01:17', NULL),
(167, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'UNIVERSITAS PERADABAN', '', 'aktif', '2024-01-08', '2027-01-07', '002/Univ.BHAMADA/KL/I/2024', '2024-08-22_002 Universitas Peradaban (FIKES) (PKS).pdf', '2024-08-22 01:04:05', NULL),
(168, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 3, 0, 13, 'PT. SMARTFREN TELECOM Tbk', '', 'aktif', '2024-06-25', '2029-06-24', '002/Univ.BHAMADA/MOU/VI/2024', '2024-08-22_002. PT Smartfren Telecom TBk (MOU).pdf', '2024-08-22 01:07:28', '2025-01-07 07:35:29'),
(169, NULL, 1, 'NASIONAL', 1, 1, 1, 0, 0, 0, 0, 'PERPUSTAKAAN POLITEKNIK KESELAMATAN TRANSPORTASI JALAN', '', 'aktif', '2024-02-23', '2029-02-22', '006/Univ.BHAMADA/KL/II/2024', '2024-08-22_Perpustakaan Politeknik Keselamatan Transportasi Jalan.pdf', '2024-08-22 01:15:28', NULL),
(170, NULL, 1, 'NASIONAL', 1, 1, 1, 0, 0, 0, 0, 'PEMERINTAH KAB TEGAL', '', 'aktif', '2024-06-20', '2029-06-19', '013/Univ.BHAMADA/KL/VI/2024', '2024-08-22_013. Dinas Kesehatan Kab Tegal (PKS).pdf', '2024-08-22 01:20:11', NULL),
(171, NULL, 1, 'NASIONAL', 1, 1, 1, 0, 0, 0, 0, 'RUMAH SAKIT AMANAH MAHMUDAH BREBES', '', 'aktif', '2024-07-15', '2025-07-14', '018/Univ.BHAMADA/KL/VII/2024', '2024-08-22_018. RS Amanah Mahmudah Brebes (2024).pdf', '2024-08-22 01:23:25', NULL),
(172, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'SD KHALIFA IMS TEGAL', '', 'aktif', '2024-07-02', '2029-07-01', '017/Univ.BHAMADA/KL/VII/2024', '2024-08-22_SD Khalifah.pdf', '2024-08-22 01:30:59', NULL),
(173, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'TOKO ALAT KESEHATAN', '', 'aktif', '2024-01-05', '2029-01-04', '005/Univ.BHAMADA/MOU/I/2024', '2024-08-22_005 Toko Alat Kesehatan (MoU) 2024.pdf', '2024-08-22 01:33:56', NULL),
(174, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'MI ALAM ANANDA MANDIRI KECAMATAN SLAWI', '', 'aktif', '2024-02-05', '2029-02-04', '005/Univ.BHAMADA/KL/II/2024', '2024-08-22_005. MI Alam Ananda Mandiri (PKS).pdf', '2024-08-22 01:36:53', NULL),
(175, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'PT.BARATA INDONESIA (PERSERO)', '', 'aktif', '2024-05-27', '2029-05-26', '008/VUniv>BHAMADA/KL/V/2024', '2024-08-22_PT Barata Indonesia.pdf', '2024-08-22 01:41:03', NULL),
(176, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'PT. DESTEKNOLOGI INFORMASI', '', 'aktif', '2023-11-01', '2025-10-31', '053D/DESNET/DESACCESS/UNIVBHAMADA/XI/2023', '2024-08-22_PT Des Teknologi Informasi.pdf', '2024-08-22 01:46:55', NULL),
(177, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 3, 0, 13, 'TB NUSA JAYA', '', 'aktif', '2023-09-04', '2028-09-03', '016/Univ.BHAMADA/MOU/IX/2023', '2024-08-22_TB Nusa Jaya.pdf', '2024-08-22 01:49:21', '2025-01-07 07:32:39'),
(178, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'PT CERDAS DIGITAL NUSANTARA', '', 'aktif', '2023-11-22', '2026-11-21', '087/Univ.BHAMADA/KL/XI/2023', '2024-08-22_087. PT Cerdas Digital Nusantara.pdf', '2024-08-22 01:59:40', NULL),
(179, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'UNIVERSITAS PANCASAKTI TEGAL', '', 'aktif', '2023-12-19', '2026-12-18', '094/Univ.BHAMADA/KL/XII/2023', '2024-08-22_094 UPS (Fakultas Ekonomi Bisnis).pdf', '2024-08-22 02:03:27', NULL),
(180, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 2, 0, 0, 'UNIVERSITAS PANCASAKTI TEGAL ', '', 'aktif', '2023-12-19', '2026-12-18', '095/Univ.BHAMADA/KL/XII/2023', '2024-08-22_095 UPS (Fakultas Teknik dan Ilmu Komputer).pdf', '2024-08-22 02:06:09', '2025-01-07 07:09:16'),
(182, NULL, 1, 'NASIONAL', 1, 1, 1, 1, 0, 0, 0, 'PT INDOMOBIL EDUKASI UTAMA', '', 'aktif', '2024-01-15', '2029-01-14', '-', '2024-08-22_PT INDOMOBIL EDUKASI UTAMA PKS.pdf', '2024-08-22 02:39:53', NULL),
(183, NULL, 1, '', 1, 1, 1, 3, 2, 0, 32, 'SMK Telekomunikasi Adi Karya Dukuhwaru Kab Tegal', '', 'aktif', '2023-08-02', '2028-08-02', '072/Univ.BHAMADA/KL/VIII/2023', '2024-11-09_004 SMK Telekomunikasi Adi Karya Dukuhwaru  (PKS).pdf', '2024-11-09 06:34:49', NULL),
(184, NULL, 1, '', 1, 1, 0, 3, 2, 0, 32, 'SD Madinah Slawi', '', 'aktif', '2023-06-15', '2028-06-15', '062/Univ.BHAMADA/KL/VI/2023', '2024-11-09_062. SD Madinah (PKS).pdf', '2024-11-09 06:39:09', NULL),
(185, NULL, 1, '', 1, 1, 1, 3, 2, 0, 32, 'BPS Kabupaten Tegal', '', 'aktif', '2022-11-21', '2027-11-21', '038/Univ.BHAMADA/KL/XI/2022', '2024-11-09_BPS Kab Tegal FIX (1).pdf', '2024-11-09 06:54:19', '2025-01-07 07:18:50'),
(186, NULL, 1, '', 1, 1, 1, 1, 2, 0, 32, 'SMK AN Nur Slawi Kab Tegal', '', 'aktif', '2029-01-17', '2029-01-17', '003/Univ.BHAMADA/KL/I/2024', '2024-11-09_003 SMK An Nur Slawi Kab Tegal (PKS).pdf', '2024-11-09 07:13:29', '2025-01-07 07:14:35'),
(187, NULL, 1, '', 1, 1, 1, 1, 2, 0, 32, 'Program MBKM, Program Praktek Lapangan, Penelitian dan Pengabdian kepada Masyarakat', '', 'aktif', '2022-05-12', '2027-05-12', '015/Univ.BHAMADA/KL/V/2022', NULL, '2025-01-07 06:54:04', NULL),
(188, NULL, 1, '', 1, 1, 1, 1, 2, 0, 32, 'Program MBKM, Program Praktek Lapangan, Penelitian dan Pengabdian kepada Masyarakat', '', 'aktif', '2022-07-06', '2027-07-06', '021/Univ.BHAMADA/KL/VII/2022', NULL, '2025-01-07 06:56:07', NULL),
(189, NULL, 1, '', 1, 1, 1, 1, 2, 0, 32, 'BPS Provinsi Jawa Tengah', 'Penyediaan, Pemanfaatan, serta Pengembangan Data dan Informasi Statistik dalam rangka pengembangan Tridharma PT', 'aktif', '2022-12-09', '2027-12-09', '003/Univ.BHAMADA/MOU/XII/2022', NULL, '2025-01-07 06:59:14', NULL),
(190, NULL, 1, '', 1, 1, 1, 1, 2, 0, 32, 'SMA Negeri 3 Tegal', 'Program MBKM, Program Praktek Lapangan, Penelitian dan Pengabdian kepada Masyarakat', 'aktif', '2022-11-19', '2027-12-19', '044/Univ.BHAMADA/KL/XII/2022', NULL, '2025-01-07 07:07:26', '2025-01-07 07:18:14'),
(191, NULL, 1, '', 1, 1, 1, 1, 2, 0, 32, 'Fakultas Ilmu Komputer Universitas Peradaban ', 'Program MBKM, Program Praktek Lapangan, Penelitian dan Pengabdian kepada Masyarakat', 'aktif', '2024-01-08', '2027-01-08', '001/Univ.BHAMADA/KL/I/2024', NULL, '2025-01-07 07:11:03', '2025-01-07 07:15:18'),
(193, NULL, 0, '', 1, 1, 1, 1, 2, 0, 32, 'SD Khalifa IMS Tegal', 'Program MBKM, Program Praktek Lapangan, Penelitian dan Pengabdian kepada Masyarakat', 'aktif', '2024-07-02', '2029-07-02', '021/Univ.BHAMADA/KL/VII/2024', NULL, '2025-01-07 07:13:27', NULL),
(194, NULL, 1, '', 1, 1, 1, 3, 3, 0, 13, 'PT Kasyr Sibernetika Indonesia', 'Program MBKM, Tempat Program Praktek Lapangan, Penelitian dan Pengabdian kepada Masyarakat', 'aktif', '2022-01-18', '2027-01-17', '002/Univ.BHAMADA/KL/I/2022', NULL, '2025-01-07 07:24:12', NULL),
(195, NULL, 1, '', 1, 1, 1, 3, 3, 0, 13, 'Perbarindo (Perhimpunan Bank Perkreditan Rakyat Indonesia) ', 'Program MBKM, Tempat Program Praktek Lapangan, Penelitian dan Pengabdian kepada Masyarakat', 'aktif', '2022-01-24', '2027-01-23', '016/Univ/BHAMADA/KL/I/2022', NULL, '2025-01-07 07:26:05', NULL),
(196, NULL, 1, '', 1, 1, 1, 3, 3, 0, 13, 'PT Gunung Slamat', 'Program MBKM, Tempat Program Praktek Lapangan, Penelitian dan Pengabdian kepada Masyarakat', 'aktif', '2022-11-20', '2027-11-09', '025/Univ.BHAMADA/KL/X/2022', NULL, '2025-01-07 07:27:31', NULL),
(197, NULL, 1, '', 1, 1, 1, 3, 3, 0, 13, 'SMA Negeri 2 Slawi', 'Program MBKM, Tempat Program Praktek Lapangan, Penelitian dan Pengabdian kepada Masyarakat', 'aktif', '2022-10-10', '2027-10-09', '031/Univ.BHAMADA/KL/X/2022', NULL, '2025-01-07 07:28:45', NULL),
(198, NULL, 0, '', 1, 1, 1, 3, 3, 0, 32, 'CV Alisa', 'Penyelenggaraan Tridharma PT', 'aktif', '2024-01-05', '2029-01-04', '005/Univ.BHAMADA/KL/I/2024', NULL, '2025-01-07 07:31:09', NULL),
(199, NULL, 1, '', 1, 1, 1, 3, 0, 0, 13, 'Institut Teknologi Bisnis dan Bahasa (ITBA) Dian Cipta Cendekia', 'Program MBKM, Tempat Program Praktek Lapangan, Penelitian dan Pengabdian kepada Masyarakat', 'aktif', '2024-05-29', '2024-05-28', '010/Univ.BHAMADA/KL/V/2024', NULL, '2025-01-07 07:34:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(11) NOT NULL,
  `telpon` bigint(13) NOT NULL,
  `email` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL,
  `alamat` text NOT NULL,
  `judul` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL,
  `banner` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `telpon`, `email`, `instagram`, `alamat`, `judul`, `deskripsi`, `banner`, `logo`) VALUES
(1, 89876543210, 'anp@gmail.com', 'anp', '<p>Jl. Anugerah Niagatama Perkasa</p>', 'PT. Anugrah Niagatama Perkasa', 'Hakshdkjahsdkjhashdkj', '', '29986_apple-touch-icon.png'),
(1, 89876543210, 'anp@gmail.com', 'anp', '<p>Jl. Anugerah Niagatama Perkasa</p>', 'PT. Anugrah Niagatama Perkasa', 'Hakshdkjahsdkjhashdkj', '', '29986_apple-touch-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `lapker_bid_akademik`
--

CREATE TABLE `lapker_bid_akademik` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_bid_akademik`
--

INSERT INTO `lapker_bid_akademik` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(26, 'Sosialisasi UKBI Adaptif Merdeka ', 17, 'Badan Pengembangan dan Pembinaan Bahasa Kemenristekdikbud', 'Pendidikan', '2022-2023', NULL, '2024-03-24_22-23 GENAP Laporan Kerja Sama Unniveritas_Badan Pengembanga & Pembinaan Bahasa.pdf', '2024-03-24 03:36:43', NULL),
(27, 'Sosialisasi SI JAGO & SISTER bagi Dosen STIKes Muhammadiyah Tegal', 17, 'STIKes Muhammadiyah Tegal', 'Pendidikan', '2023-2024', NULL, '2024-03-24_22-23 GANJIL Laporan Kerja Sama STIKes Muhammadiyah Tegal.pdf', '2024-03-24 03:40:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lapker_bid_keuangan`
--

CREATE TABLE `lapker_bid_keuangan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lapker_bid_mhs`
--

CREATE TABLE `lapker_bid_mhs` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_bid_mhs`
--

INSERT INTO `lapker_bid_mhs` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(25, 'International Student Mobility', 19, 'Universitas Pancasakti Tegal, RV University India, Tarlac Argicultural University Philippines, University of Economy and Pedagogy Uzbekistan', 'Pendidikan', '2023-2024 GENAP', NULL, '2024-12-20_23-24 Laporan Implementasi ISM 2024.pdf', '2024-12-20 02:01:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lapker_feb_bisdig`
--

CREATE TABLE `lapker_feb_bisdig` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_feb_bisdig`
--

INSERT INTO `lapker_feb_bisdig` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(25, 'Laporan Kegiatan Kerja Sama', 10, 'CV Pucuk Daun Lestari', 'Pendidikan', 'GANJIL 2021-2022', NULL, '2024-03-10_21-22G~1.PDF', '2024-03-10 03:11:51', '2024-03-10 03:22:13'),
(26, 'Laporan Kegiatan Kerja Sama', 10, 'PT Gunung Slamat', 'Pendidikan', '2022-2023 GANJIL', NULL, '2024-03-10_22-23 GANJIL_Laporan Kerja Sama Pendidikan_PT Gunung Slamat.pdf', '2024-03-10 03:13:30', '2024-03-10 03:22:57'),
(27, 'Laporan Kegiatan Kerja Sama', 10, 'SMA Negeri 2 Slawi', 'Pendidikan', '2022-2023 GANJIL', NULL, '2024-03-10_22-23 GANJIL_Laporan Kerja Sama Pendidikan_SMA Negeri 2 Slawi.pdf', '2024-03-10 03:16:10', '2024-03-10 03:23:19'),
(28, 'Laporan Kegiatan Kerja Sama', 10, 'SMA Negeri 3 Slawi', 'Pendidikan', '2022-2023 GANJIL', NULL, '2024-03-10_22-23 GENAP Laporan Kerja Sama Pendidikan_SMA Negeri Slawi.pdf', '2024-03-10 03:17:06', '2024-03-10 03:23:40'),
(30, 'Laporan Kegiatan Kerja Sama', 10, 'PT Smartfren Telecom Tbk', 'Pendidikan', '2023-2024 GENAP', NULL, '2024-12-19_23-24 GENAP_Laporan Kerja Sama Pendidikan_PT Smartfren Telecom Tbk (Pelatihan Public Speaking Skill).pdf', '2024-12-19 06:40:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lapker_feb_kwu`
--

CREATE TABLE `lapker_feb_kwu` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_feb_kwu`
--

INSERT INTO `lapker_feb_kwu` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(26, 'Laporan Kegiatan Kerja Sama', 11, 'CV Pucuk Daun Lestari', 'Pendidikan', '2021-2022 GANJIL', NULL, '2023-11-28_21-22G~1.PDF', '2023-11-28 05:52:53', NULL),
(27, 'Laporan Kegiatan Kerja Sama ', 11, 'PT Gunung Slamat', 'Pendidikan', '2022-2023 GANJIL', NULL, '2024-03-10_22-23 GANJIL_Laporan Kerja Sama Pendidikan_PT Gunung Slamat.pdf', '2024-03-10 03:28:30', NULL),
(28, 'Laporan Kegiatan Kerja Sama', 11, 'SMA Negeri 2 Slawi', 'Pendidikan', '2022-2023 GANJIL', NULL, '2024-03-10_22-23 GANJIL_Laporan Kerja Sama Pendidikan_SMA Negeri 2 Slawi.pdf', '2024-03-10 03:29:56', NULL),
(29, 'Laporan Kegiatan Kerja Sama', 11, 'SMA Negeri 3 Slawi', 'Pendidikan', '2022-2023 GANJIL', NULL, '2024-03-10_22-23 GENAP Laporan Kerja Sama Pendidikan_SMA Negeri 3 Slawi.pdf', '2024-03-10 03:30:42', '2024-03-10 03:32:30'),
(30, 'Laporan Kegiatan Kerja Sama (a.n M Wahab)', 11, 'CV Pucuk Daun Lestari', 'Penelitian', '2022-2023', NULL, '322-22-23L~1.PDF', '2024-03-10 03:31:17', '2024-03-10 03:32:51'),
(31, 'Laporan Kegiatan Kerja Sama', 11, 'TB Nusa Jaya', 'Penelitian', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 Laporan Kerja Sama Penelitian (Muthiatul_TB Nusa Jaya).pdf', '2024-12-19 06:42:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lapker_fikes_bid`
--

CREATE TABLE `lapker_fikes_bid` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_fikes_bid`
--

INSERT INTO `lapker_fikes_bid` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(25, 'Laporan Kegiatan Kerja Sama', 6, 'Praktek Mandiri Bidan (PMB)', 'Pendidikan', '2021-2022 GANJIL', NULL, '2023-11-21_21-22G~1.PDF', '2023-11-21 01:34:11', '2023-11-28 05:01:52'),
(26, 'Laporan Kegiatan Kerja Sama', 6, 'Rumah Sakit', 'Pendidikan', '2021-2022 GANJIL', NULL, '2023-11-21_21-22 GANJIL_Laporan Kerja Sama Pendidikan (Prodi D III Kebidanan)_Rumah Sakit.pdf', '2023-11-21 01:35:23', '2023-11-28 05:01:20'),
(27, 'Laporan Kegiatan Kerja Sama', 6, 'Dinas Kesehatan Kab Tegal', 'Pendidikan', '2021-2022 GENAP ', NULL, '2023-11-21_21-22 GENAP_Laporan Kerja Sama Pendidikan (Prodi D III Kebidanan)_Dinkes Kab Tegal.pdf', '2023-11-21 01:40:44', '2023-11-28 02:48:18'),
(28, 'Laporan Kegiatan Kerja Sama', 6, 'IHCA', 'Pendidikan', '2021-2022 GENAP ', NULL, '2023-11-21_21-22 GENAP_Laporan Kerja Sama Pendidikan (Prodi D III Kebidanan)_IHCA.pdf', '2023-11-21 01:41:47', '2023-11-28 02:56:56'),
(30, 'Laporan Kegiatan Kerja Sama (a.n Adrestia)', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Dukuhwaru)', 'Penelitian', '2021-2022', NULL, '2023-11-21_21-22L~1.PDF', '2023-11-21 01:50:40', '2023-11-28 02:51:05'),
(31, 'Laporan Kegiatan Kerja Sama (a.n Ika Esti)', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Slawi)', 'Penelitian', '2021-2022', NULL, '2023-11-21_21-22L~2.PDF', '2023-11-21 01:52:21', '2023-11-28 02:57:14'),
(32, 'Laporan Kegiatan Kerja Sama (a.n Masturoh)', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Pangkah)', 'Penelitian', '2021-2022', NULL, '2023-11-28_21-22L~3.PDF', '2023-11-28 04:22:08', '2023-11-28 04:38:13'),
(33, 'Laporan Kegiatan Kerja Sama (a.n Yuni Fitriana)', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Dukuhwaru)', 'Penelitian', '2021-2022', NULL, '2023-11-28_21-22L~4.PDF', '2023-11-28 04:41:16', NULL),
(34, 'Laporan Kegiatan Kerja Sama (a.n Adrestia)', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Dukuhwaru)', 'PKM', '2021-2022', NULL, '2023-11-28_219746~1.PDF', '2023-11-28 04:45:07', NULL),
(35, 'Laporan Kegiatan Kerja Sama (a.n Sri Tanjung)', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Dukuhwaru)', 'PKM', '2021-2022', NULL, '2023-11-28_215E5F~1.PDF', '2023-11-28 04:55:36', NULL),
(36, 'Laporan Kegiatan Kerja Sama', 6, 'Praktek Mandiri Bidan (PMB) Iva Rifda C', 'Pendidikan', '2022-2023 GENAP', NULL, '2023-11-28_22-23 GENAP Laporan Kerja Sama Pendidikan_Praktik Mandiri Bidan Iva Rifda C.pdf', '2023-11-28 04:59:59', '2023-11-28 05:02:28'),
(37, 'Laporan Kegiatan Kerja Sama', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Kaladawa)', 'Pendidikan', '2022-2023 GENAP', NULL, '2023-11-28_22-23 GENAP_Laporan Kerja Sama Pendidikan_Dinkes Kab Tegal_Puskesmas Kaladawa.pdf', '2023-11-28 05:04:59', NULL),
(38, 'Laporan Kegiatan Kerja Sama', 6, 'Griya Hamil Sehat', 'Pendidikan', '2022-2023 GENAP ', NULL, '2023-11-28_22-23 GENAP_Laporan Kerja Sama Pendidikan_Griya Hamil Sehat.pdf', '2023-11-28 05:05:57', '2023-11-28 05:09:41'),
(39, 'Laporan Kegiatan Kerja Sama', 6, 'Klinik Hj Sumiyati', 'Pendidikan', '2022-2023 GENAP ', NULL, '2023-11-28_22-23 GENAP_Laporan Kerja Sama Pendidikan_Klinik Hj Sumiyati.pdf', '2023-11-28 05:07:22', '2023-11-28 05:09:55'),
(40, 'Laporan Kegiatan Kerja Sama', 6, 'Klinik Mitra Bunda', 'Pendidikan', '2022-2023 GENAP ', NULL, '2023-11-28_22-23 GENAP_Laporan Kerja Sama Pendidikan_Klinik Mitra Bunda.pdf', '2023-11-28 05:11:05', NULL),
(41, 'Laporan Kegiatan Kerja Sama', 6, 'Klinik Pratama Bregas Mulya', 'Pendidikan', '2022-2023 GENAP ', NULL, '2023-11-28_22-23 GENAP_Laporan Kerja Sama Pendidikan_Klinik Pratama Bregas Mulya.pdf', '2023-11-28 05:12:50', NULL),
(42, 'Laporan Kegiatan Kerja Sama', 6, 'RSI PKU Muhammadiyah Kab Tegal', 'Pendidikan', '2022-2023 GENAP ', NULL, '2023-11-28_22-23 GENAP_Laporan Kerja Sama Pendidikan_RSI PKU Muhammadiyah Kab Tegal.pdf', '2023-11-28 05:13:53', NULL),
(43, 'Laporan Kegiatan Kerja Sama', 6, 'RSUD Kardinah', 'Pendidikan', '2022-2023 GENAP ', NULL, '2023-11-28_22-23 GENAP_Laporan Kerja Sama Pendidikan_RSUD Kardinah.pdf', '2023-11-28 05:14:28', NULL),
(44, 'Laporan Kegiatan Kerja Sama (a.n Natiqotul)', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Slawi)', 'Penelitian', '2022-2023', NULL, '274-22-23 Laporan Kerja Sama Penelitian (Natiqo_Dinkes Kab Tegal_Puskesmas Slawi).pdf', '2024-03-09 04:05:14', '2024-03-09 04:09:07'),
(45, 'Laporan Kegiatan Kerja Sama (a.n Siswati)', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Pagerbarang)', 'Penelitian', '2022-2023', NULL, '2024-03-09_22-23 Laporan Kerja Sama Penelitian (Siswat_Dinkes Kab Tegal_Pusk Pagerbarang).pdf', '2024-03-09 04:08:00', '2024-03-09 05:50:05'),
(46, 'Laporan Kegiatan Kerja Sama (a.n Adrestia)', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Kaladawa)', 'PKM', '2022-2023', NULL, '2024-03-09_22-23 Laporan Kerja Sama PKM (Adrestia_Dinkes Kab Tegal_Puskesmas Kaladawa).pdf', '2024-03-09 05:51:24', NULL),
(47, 'Laporan Kegiatan Kerja Sama (a.n Ika Esti)', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Kaladawa)', 'PKM', '2022-2023', NULL, '2024-03-09_22-23 Laporan Kerja Sama PKM (Ika Esti_Dinkes Kab Tegal_Puskesmas Kaladawa).pdf', '2024-03-09 05:52:37', NULL),
(48, 'Laporan Kegiatan Kerja Sama (a.n Ike Putri)', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Pagerbarang)', 'PKM', '2022-2023', NULL, '2024-03-09_22-23 Laporan Kerja Sama PKM (Ike P_Dinkes Kab Tegal_Puskesmas Pagerbarang).pdf', '2024-03-09 05:54:12', NULL),
(49, 'Laporan Kegiatan Kerja Sama (a.n Yuni Fitriani)', 6, 'Dinas Kesehatan Kab Tegal (Puskesmas Kaladawa)', 'PKM', '2022-2023', NULL, '2024-03-09_22-23 Laporan Kerja Sama PKM (Yuni_Dinkes Kab Tegal_Puskesmas Kaladawa).pdf', '2024-03-09 05:55:19', NULL),
(50, 'Laporan Kegiatan Kerja Sama', 6, 'Dinas Kesehatan Kab Tegal', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_Dinkes Kab Tegal.pdf', '2024-12-19 03:37:59', NULL),
(51, 'Laporan Kegiatan Kerja Sama', 6, 'Griya Hamil Sehat ', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_Griya Hamil Sehat.pdf', '2024-12-19 03:40:33', '2024-12-19 03:44:20'),
(52, 'Laporan Kegiatan Kerja Sama', 6, 'Klinik Hj Sumiyati ', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_Klinik Hj Sumiyati.pdf', '2024-12-19 03:43:08', '2024-12-19 03:44:59'),
(53, 'Laporan Kegiatan Kerja Sama', 6, 'Klinik Mitra Bunda ', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_Klinik Mitra Bunda.pdf', '2024-12-19 03:46:32', NULL),
(54, 'Laporan Kegiatan Kerja Sama (RSUD Kardinah Tegal dan RSUD dr. Soeselo Kab Tegal', 6, 'Rumah Sakit ', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_RS (PKK Kebidanan III).pdf', '2024-12-19 03:49:44', '2024-12-19 03:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `lapker_fikes_far`
--

CREATE TABLE `lapker_fikes_far` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_fikes_far`
--

INSERT INTO `lapker_fikes_far` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(25, 'Laporan Kegiatan Kerja Sama', 5, 'Apotek', 'Pendidikan', 'GANJIL 2021-2022', NULL, '2023-11-21_21-22 GANJIL_Laporan Kerja Sama Pendidikan (Prodi S1 Farmasi)_Apotek.pdf', '2023-11-21 01:24:47', '2023-11-28 02:41:29'),
(26, 'Laporan Kegiatan Kerja Sama', 5, 'Rumah Sakit', 'Pendidikan', 'GANJIL 2021-2022', NULL, '2023-11-21_21-22 GANJIL_Laporan Kerja Sama Pendidikan (Prodi S1 Farmasi)_Rumah Sakit.pdf', '2023-11-21 01:25:54', '2023-11-28 02:42:29'),
(27, 'Laporan Kegiatan Kerja Sama', 5, 'Apotek', 'Pendidikan', 'GANJIL 2022-2023', NULL, '427-22-23 GANJIL_Laporan Kerja Sama Pendidikan (Prodi S1 Farmasi)_Apotek.pdf', '2023-11-21 01:30:31', '2023-11-28 02:44:39'),
(28, 'Laporan Kegiatan Kerja Sama', 5, 'Rumah Sakit', 'Pendidikan', 'GANJIL 2022-2023', NULL, '2023-11-21_22-23 GANJIL_Laporan Kerja Sama Pendidikan (Prodi S1 Farmasi)_Rumah Sakit.pdf', '2023-11-21 01:32:09', '2023-11-28 02:44:53'),
(29, 'Laporan Kegiatan Kerja Sama', 5, 'Apotek', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_Apotek.pdf', '2024-12-19 04:45:44', NULL),
(30, 'Laporan Kegiatan Kerja Sama', 5, 'Farmasi Kepolisian Jakarta', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_Bagian Farmasi Kepolisian Jakarta.pdf', '2024-12-19 04:47:07', NULL),
(31, 'Laporan Kegiatan Kerja Sama', 5, 'Rumah Sakit', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_Rumah Sakit.pdf', '2024-12-19 04:48:14', NULL),
(32, 'Laporan Kegiatan Kerja Sama (A.n Arifina Fahamsya)', 5, 'MI Alam Ananda Mandiri Slawi ', 'PKM', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 Laporan Kerja Sama PKM (Arifina_MI Alam Ananda Mandiri Slawi).pdf', '2024-12-19 04:54:53', '2024-12-19 06:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `lapker_fikes_ik`
--

CREATE TABLE `lapker_fikes_ik` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_fikes_ik`
--

INSERT INTO `lapker_fikes_ik` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(25, 'Laporan Kegiatan Kerja Sama', 4, 'Dinas Kesehatan Kab Tegal (Puskesmas Pangkah)', 'PKM', '2021-2022', NULL, '654-21-22 Laporan Kerja Sama PKM (Prodi S1 Keperawatan-Deni)_Dinkes Kab Tegal_Pangkah.pdf', '2024-03-09 03:51:45', '2024-07-03 02:02:21'),
(26, 'Laporan Kegiatan Kerja Sama', 4, 'Dinas Kesehatan Kab Tegal (Puskesmas Kedung Banteng)', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL _Laporan Kerja Sama Pendidikan_Dinkes Kab Tegal_Pusk Kedung Banteng (S1 Kep).pdf', '2024-12-19 03:57:23', '2024-12-19 03:58:40'),
(27, 'Laporan Kegiatan Kerja Sama', 4, 'RSJD Dr. Amino Gondohutomo Provinsi Jawa Tengah ', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_RSJD Dr Amino Gondohutomo Prov Jateng (S1 Kep).pdf', '2024-12-19 04:00:03', NULL),
(28, 'Laporan Kegiatan Kerja Sama ( RSUD Brebes, RSUD Kardinah Tegal, RSI PKU Muhammadiyah Kab Tegal, RS Mitra Siaga Tegal, RSUD Dr. Soeselo Kab Tegal)', 4, 'Rumah Sakit ', 'Pendidikan', '2023-2024 GANJIL', NULL, '703-23-24 GANJIL_Laporan Kerja Sama Pendidikan_Rumah Sakit 1 (Gadar)  (S1 Kep).pdf', '2024-12-19 04:11:35', '2024-12-19 04:16:57'),
(29, 'Laporan Kegiatan Kerja Sama (RSUD Brebes, RSUD Kardinah Tegal, RSI PKU Muhammadiyah Kab.Tegal, RS Mitra Siaga Tegal, RSUD Suradadi, RS Amanah Mahmudah Brebes)', 4, 'Rumah Sakit ', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_Rumah Sakit 2 (KMB, Anak, Maternitas) (S1 Kep).pdf', '2024-12-19 04:15:43', '2024-12-19 04:17:31'),
(30, 'Laporan Kegiatan Kerja Sama ( RSUD  dr.Soeselo Kab Tegal, RSUD Suradadi, RSUD Kardinah Tegal, RSUD Brebes, RS Mitra Siaga Tegal, RSI PKU Muhammadiyah Kab Tegal, RS Harapan Sehat Slawi, RS Hawari Esa, RS Bhakti Asih Brebes)', 4, 'Rumah Sakit', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_Rumah Sakit 3 (KD) (S1 Kep).pdf', '2024-12-19 04:20:50', NULL),
(31, 'Laporan Kegiatan Kerja Sama', 4, 'SLB N Slawi ', 'Pendidikan', '2023-2024 GENAP', NULL, '2024-12-19_23-24 GENAP_Laporan Kerja Sama Pendidikan_SLB Negeri Slawi (S1 Kep).pdf', '2024-12-19 04:25:15', '2024-12-19 04:29:47'),
(32, 'Laporan Kegiatan Kerja Sama ', 4, 'Universitas Sari Mutiara Indonesia', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 Laporan Implementasi Universitas Sari Mutiara Indonesia.pdf', '2024-12-19 04:29:13', '2024-12-19 04:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `lapker_fikes_k3`
--

CREATE TABLE `lapker_fikes_k3` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_fikes_k3`
--

INSERT INTO `lapker_fikes_k3` (`id`, `judul`, `id_fak`, `tahun_lap`, `dok`, `date_created`, `date_updated`, `mitra`, `kegiatan`) VALUES
(3, 'Laporan Kegiatan Kerja Sama', 8, '2021-2022', '2023-11-28_21-22 Laporan Kerja Sama PKM (Prodi D4 K3)_RS Harapan Sehat Slawi.pdf', '2023-11-28 05:50:45', NULL, 'RS Harapan Sehat Slawi', 'PKM'),
(4, 'Laporan Kegiatan Kerja Sama', 8, '2022-2023 GANJIL', '2024-03-09_22-23 GANJIL_Laporan Kerja Sama Pendidikan_RSUD Kardinah.pdf', '2024-03-09 06:25:32', NULL, 'RSUD Kardinah', 'Pendidikan'),
(5, 'Laporan Kegiatan Kerja Sama', 8, '2022-2023 GENAP', '2024-03-09_22-23 GENAP_Laporan Kerja Sama Pendidikan_PT Gunung Slamat.pdf', '2024-03-09 06:40:45', NULL, 'PT Gunung Slamat', 'Pendidikan'),
(6, 'Laporan Kegiatan Kerja Sama', 8, '2023-2024 GANJIL', '2024-12-19_2023-2024 GANJIL_Laporan Kerja Sama Pendidikan_PT Hamana Works Indonesia.pdf', '2024-12-19 06:25:26', NULL, 'PT Hamana Works Indonesia', 'Pendidikan'),
(7, 'Laporan Kegiatan Kerja Sama', 8, '2023-2024 GENAP', '2024-12-19_2023-2024 GENAP_Laporan Kerja Sama Pendidikan_PT  Barata Indonesia.pdf', '2024-12-19 06:27:04', '2024-12-19 06:31:00', 'PT Barata Indonesia Divisi Sumber Daya Air', 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `lapker_fikes_ners`
--

CREATE TABLE `lapker_fikes_ners` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_fikes_ners`
--

INSERT INTO `lapker_fikes_ners` (`id`, `judul`, `id_fak`, `tahun_lap`, `dok`, `date_created`, `date_updated`, `mitra`, `kegiatan`) VALUES
(2, 'Laporan Kegiatan Kerja Sama (RSUD dr Soeselo Kab Tegal & RS Mitra Siaga Tegal)', 9, '2022-2023', '278-22-23 Laporan Kerja Sama Pendidikan_RS Mitra Siaga & RSUD Soeselo.pdf', '2024-03-09 11:39:12', '2024-07-03 01:47:05', 'Rumah Sakit', 'Pendidikan'),
(3, 'Laporan Kegiatan Kerja Sama (RSD Gunung Jati Cirebon)', 9, '2022-2023', '696-22-23 Laporan Kerja Sama Pendidikan_RSD Gunung Jati Cirebon.pdf', '2024-03-09 11:41:32', '2024-07-03 01:46:40', 'Rumah Sakit', 'Pendidikan'),
(4, 'Laporan Kegiatan Kerja Sama (RSUD Kardinah)', 9, '2022-2023', '135-22-23 Laporan Kerja Sama Pendidikan_RSUD Kardinah.pdf', '2024-03-09 11:42:33', '2024-07-03 01:47:53', 'Rumah Sakit', 'Pendidikan'),
(5, 'Laporan Kegiatan Kerja Sama', 9, '2023-2024 GANJIL', '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_Gadar Medik Indonesia (Ners).pdf', '2024-12-19 06:32:40', NULL, 'Gadar Medik Indonesia (GDMI)', 'Pendidikan'),
(6, 'Laporan Kegiatan Kerja Sama', 9, '2023-2024 GANJIL', '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_RSD Gunung Jati Cirebon (Ners).pdf', '2024-12-19 06:33:47', NULL, 'RSD Gunung Jati Cirebon', 'Pendidikan'),
(7, 'Laporan Kegiatan Kerja Sama', 9, '2023-2024 GANJIL', '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_RSJD Dr Amino Gondohutomo Prov Jateng (Ners).pdf', '2024-12-19 06:34:58', NULL, 'RSJD Dr. Amino Gondohutomo Provinsi Jawa Tengah', 'Pendidikan'),
(8, 'Laporan Kegiatan Kerja Sama', 9, '2023-2024 GANJIL', '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_RSUD dr Soeselo Kab. Tegal (Ners).pdf', '2024-12-19 06:36:05', NULL, 'RSUD dr.Soeselo Kab Tegal ', 'Pendidikan'),
(9, 'Laporan Kegiatan Kerja Sama', 9, '2023-2024 GANJIL', '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_RSUD Kardinah Tegal (Ners).pdf', '2024-12-19 06:37:11', NULL, 'RSUD Kardinah Tegal ', 'Pendidikan'),
(10, 'Laporan Kegiatan Kerja Sama', 9, '2023-2024 GENAP', '2024-12-19_23-24 GENAP_Laporan Kerja Sama Pendidikan_Dinkes Kab Tegal_Pusk Kambangan (Ners).pdf', '2024-12-19 06:38:21', '2024-12-20 02:58:19', 'Dinas Kesehatan Kab Tegal (Puskesmas Kambangan)', 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `lapker_fikes_per`
--

CREATE TABLE `lapker_fikes_per` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) DEFAULT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_fikes_per`
--

INSERT INTO `lapker_fikes_per` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `dok`, `date_created`, `date_updated`) VALUES
(1, 'Laporan Kegiatan Kerja Sama ', 7, 'Dinas Kesehatan Kab Tegal', 'Pendidikan', '2021-2022 GENAP ', '2023-05-27_21-22 GENAP_Laporan Kegiatan Kerja Sama Bhamada (Prodi D III Keperawatan)_Dinkes Kab Tegal.pdf', '2023-05-27 06:25:52', '2023-11-28 05:21:14'),
(2, 'Laporan Kegiatan Kerja Sama ', 7, 'PAUD Bina Prestasi', 'Pendidikan', '2021-2022 GENAP ', '2023-05-27_21-22 GENAP_Laporan Kegiatan Kerja Sama Bhamada (Prodi D III Keperawatan)_PAUD Bina Prestasi.pdf', '2023-05-27 06:26:48', '2023-11-28 05:21:48'),
(4, 'Laporan Kegiatan Kerja Sama ', 7, 'RA-KBIT Siti Khodijah', 'Pendidikan', '2021-2022 GENAP ', '2023-05-27_21-22 GENAP_Laporan Kegiatan Kerja Sama Bhamada (Prodi D III Keperawatan-Pendidikan)_RA-KBIT Siti Khodijah.pdf', '2023-05-27 06:29:38', '2023-11-28 05:24:51'),
(10, 'Laporan Kegiatan Kerja Sama', 7, 'Rumah Sakit', 'Pendidikan', '2021-2022 GENAP ', '2023-11-28_21-22 GENAP_Laporan Kerja Sama Pendidikan (Prodi D III Keperawatan)_Rumah Sakit.pdf', '2023-11-28 05:28:45', NULL),
(11, 'Laporan Kegiatan Kerja Sama (a.n Ani Ratnaningsih)', 7, 'RA-KBIT Siti Khodijah', 'Penelitian', '2021-2022  ', '2023-11-28_21-22L~1.PDF', '2023-11-28 05:30:31', '2023-11-28 05:32:50'),
(12, 'Laporan Kegiatan Kerja Sama (a.n Arriani)', 7, 'Dinas Kesehatan Kab Tegal (Puskesmas Dukuhturi)', 'PKM', '2021-2022', '2023-11-28_21-22L~2.PDF', '2023-11-28 05:32:18', NULL),
(13, 'Laporan Kegiatan Kerja Sama (a.n Ita Nur Itsna)', 7, 'RA-KBIT Siti Khodijah', 'PKM', '2021-2022', '2023-11-28_21-22L~3.PDF', '2023-11-28 05:35:53', NULL),
(14, 'Laporan Kegiatan Kerja Sama (a.n Ramadhan)', 7, 'Dinas Kesehatan Kab Tegal (Puskesmas Balapulang)', 'PKM', '2021-2022', '2023-11-28_21-22L~4.PDF', '2023-11-28 05:37:41', '2023-11-28 05:46:45'),
(15, 'Laporan Kegiatan Kerja Sama', 7, 'Gadar Medik Indonesia', 'Pendidikan', '2022-2023', '2024-03-09_22-23 GANJIL_Laporan Kerja Sama Pendidikan_Gadar Medik Indonesia.pdf', '2024-03-09 06:05:30', NULL),
(16, 'Laporan Kegiatan Kerja Sama (RSUD Kardinah, RSUD dr Ashari Pemalang, RS Mitra Siaga Tegal)', 7, 'Rumah Sakit', 'Penelitian', '2022-2023', '2024-03-09_22-23 GANJIL_Laporan Kerja Sama Pendidikan_Rumah Sakit.pdf', '2024-03-09 06:09:24', NULL),
(17, 'Laporan Kegiatan Kerja Sama', 7, 'PAUD Bina Prestasi', 'Pendidikan', '2022-2023', '2024-03-09_22-23 GENAP_Laporan Kerja Sama Pendidikan_PAUD Bina Prestasi.pdf', '2024-03-09 06:10:46', NULL),
(18, 'Laporan Kegiatan Kerja Sama', 7, 'RB/KBIT Siti Khodijah', 'Pendidikan', '2022-2023', '2024-03-09_22-23 Laporan Kerja Sama Pendidikan_RB-KBIT Siti Khodijah.pdf', '2024-03-09 06:11:31', NULL),
(19, 'Laporan Kegiatan Kerja Sama (a.n Risnanto)', 7, 'Dinas Kesehatan Kab Tegal (Puskesmas Slawi)', 'Penelitian', '2022-2023', '2024-03-09_22-23 Laporan Kerja Sama Penelitian (Risnanto_Dinkes Kab Tegal_Pusk Slawi).pdf', '2024-03-09 06:13:38', NULL),
(20, 'Laporan Kegiatan Kerja Sama (RSUD Kardinah, RSUD Suradadi, RS Mitra Siaga) (a.n Sri HIdayati)', 7, 'Rumah Sakit ', 'Penelitian', '2022-2023', '2024-03-09_22-23 Laporan Kerja Sama Penelitian (Sri H_Rumah Sakit).pdf', '2024-03-09 06:15:23', '2024-03-09 06:17:26'),
(21, 'Laporan Kegiatan Kerja Sama (a.n Ani Ratnaningsih)', 7, 'Dinas Kesehatan Kab Tegal (Puskesmas Lebaksiu)', 'PKM', '2022-2023', '2024-03-09_22-23 Laporan Kerja Sama PKM (Ani_Dinkes Kab Tegal_Puskesmas Lebaksiu).pdf', '2024-03-09 06:18:46', NULL),
(22, 'Laporan Kegiatan Kerja Sama (a.n Anisa Oktiawati)', 7, 'Dinas Kesehatan Kab Tegal (Puskesmas Penusupan)', 'PKM', '2022-2023', '2024-03-09_22-23 Laporan Kerja Sama PKM (Anisa_Dinkes Kab Tegal_Puskesmas Penusupan).pdf', '2024-03-09 06:19:37', NULL),
(23, 'Laporan Kegiatan Kerja Sama (a.n Ramadhan)', 7, 'Dinas Kesehatan Kab Tegal (Puskesmas Adiwerna)', 'PKM', '2022-2023', '2024-03-09_22-23 Laporan Kerja Sama PKM (Rama_Dinkes Kab Tegal_Puskesmas Adiwerna).pdf', '2024-03-09 06:20:45', NULL),
(24, 'Laporan Kegiatan Kerja Sama', 7, 'Dinas Kesehatan Kab Tegal', 'Pendidikan', '2023-2024 GENAP', '2024-12-19_23-24 GENAP_Laporan Kerja Sama Pendidikan_Dinkes Kab Tegal (PKK Puskesmas).pdf', '2024-12-19 06:12:43', NULL),
(25, 'Laporan Kegiatan Kerja Sama', 7, 'Rumah Sakit', 'Pendidikan', '2023-2024 GENAP', '2024-12-19_23-24 GENAP_Laporan Kerja Sama Pendidikan_Rumah Sakit 1 (Anak & Maternitas).pdf', '2024-12-19 06:13:43', NULL),
(26, 'Laporan Kegiatan Kerja Sama', 7, 'Dinas Kesehatan Kab Tegal (Puskesmas Suradadi)', 'Pendidikan', '2023-2024 GENAP', '2024-12-19_23-24 GENAP_Laporan Kerja Sama Pendidikan_Wilayah Puskesmas Suradadi.pdf', '2024-12-19 06:15:08', NULL),
(27, 'Laporan Kegiatan Kerja Sama', 7, 'Gadar Medik Indonesia (GDMI)', 'Pendidikan', '2023-2024 GANJIL', '681-23-24 Laporan Kerja Sama Pendidikan_Gadar Medik Indonesia.pdf', '2024-12-19 06:17:09', '2024-12-19 06:17:37'),
(28, 'Laporan Kegiatan Kerja Sama', 7, 'Rumah Sakit', 'Pendidikan', '2023-2024 GANJIL', '2024-12-19_23-24_GANJIL_Laporan Kerja Sama Pendidikan_Rumah Sakit 2 (Gadar & KMB II).pdf', '2024-12-19 06:18:39', NULL),
(29, 'Laporan Kegiatan Kerja Sama', 7, 'RSJD Dr. Arif Zainudin', 'Pendidikan', '2023-2024 GANJIL', '2024-12-19_23-24_GANJIL_Laporan Kerja Sama Pendidikan_Rumah Sakit 3 (Jiwa Surakarta).pdf', '2024-12-19 06:20:46', NULL),
(30, 'Laporan Kegiatan Kerja Sama', 7, 'RSJD Dr. Amino Gondohutomo Provinsi Jawa Tengah', 'Pendidikan', '2023-2024 GANJIL', '2024-12-19_23-24_GANJIL_Laporan Kerja Sama Pendidikan_Rumah Sakit 4 (Jiwa Semarang).pdf', '2024-12-19 06:22:04', NULL),
(31, 'Laporan Kegiatan Kerja Sama', 7, 'Rumah Sakit', 'Pendidikan', '2023-2024 GANJIL', '2024-12-19_23-24_GANJIL_Laporan Kerja Sama Pendidikan_Rumah Sakit 5 (KD & KMB I).pdf', '2024-12-19 06:23:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lapker_fikom_it`
--

CREATE TABLE `lapker_fikom_it` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_fikom_it`
--

INSERT INTO `lapker_fikom_it` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(26, 'Laporan Kegiatan Kerja Sama (a.n Haries Anom)', 12, 'SMA Negeri 3 Tegal', 'Penelitian', '2021-2022', NULL, '2023-11-28_21-22L~1.PDF', '2023-11-28 05:56:23', '2024-03-10 02:58:32'),
(27, 'Laporan Kegiatan Kerja Sama (a.n Sri Hartati)', 12, 'STMIK YMI Tegal', 'Penelitian', '2021-2022', NULL, '2023-11-28_21-22L~2.PDF', '2023-11-28 05:58:21', NULL),
(28, 'Laporan Kegiatan Kerja Sama (a.n Ulumuddin)', 12, 'SMK Bina Nusa Slawi', 'PKM', '2021-2022', NULL, '2023-11-28_21-22 Laporan Kerja Sama PKM (Prodi S1 Informatika-Ulumudin)_SMK Bina Nusa Slawi.pdf', '2023-11-28 05:59:10', NULL),
(29, 'Laporan Kegiatan Kerja Sama', 12, 'SMK Astrindo Tegal', 'Pendidikan', '2022-2023 GANJIL', NULL, '2024-03-10_22-23 GANJIL_Laporan Kerja Sama Pendidikan_SMK Astrindo Kota Tegal.pdf', '2024-03-10 03:02:35', NULL),
(31, 'Laporan Kegiatan Kerja Sama (a.n Haries Anom)', 12, 'SMA Negeri 3 Tegal', 'PKM', '2022-2023', NULL, '2024-03-10_22-23 Laporan Kerja Sama PKM_(a.n Haries Anom_SMA NegerI 3 Tegal).pdf', '2024-03-10 03:07:19', NULL),
(32, 'Laporan Kegiatan Kerja Sama', 12, 'SMK Astrindo Tegal', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_ SMK Astrindo Tegal.pdf', '2024-12-19 06:44:05', '2024-12-19 07:03:13'),
(33, 'Laporan Kegiatan Kerja Sama', 12, 'Badan Pusat Statistik Kab Tegal', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_BPS Kab Tegal (FGD & AGEN POJOK STATISTIK).pdf', '2024-12-19 06:45:16', '2024-12-19 07:07:11'),
(34, 'Laporan Kegiatan Kerja Sama', 12, 'Universitas Alma Ata Yogyakarta ', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 GANJIL_Laporan Kerja Sama Pendidikan_Universitas Alma Ata Yogyakarta (Kuliah Umum).pdf', '2024-12-19 06:46:38', '2024-12-19 07:07:37'),
(35, 'Laporan Kegiatan Kerja Sama (a.n Rito Cipto Sigitta)', 12, 'STMIK YMI Tegal', 'Penelitian', '2023-2024 GENAP', NULL, '2024-12-19_23-24 Laporan Kerja Sama Penelitian (Rito Cipta_STMIK YMI Tegal).pdf', '2024-12-19 06:54:04', '2024-12-19 07:06:48'),
(36, 'Laporan Kegiatan Kerja Sama (a.n Rito Cipto Sigitta)', 12, 'STKIP NU Tegal ', 'PKM', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 Laporan Kerja Sama PKM (Rito Cipta_STKIP NU Tegal).pdf', '2024-12-19 06:55:16', '2024-12-19 07:07:56'),
(37, 'Laporan Kegiatan Kerja Sama (a.n Sri Hartati)', 12, 'SD Madinah Slawi', 'PKM', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 Laporan Kerja Sama PKM (Sri Hartati_SD Madinah Slawi).pdf', '2024-12-19 06:57:00', '2024-12-19 07:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `lapker_ik`
--

CREATE TABLE `lapker_ik` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_fak` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lapker_unit_baak`
--

CREATE TABLE `lapker_unit_baak` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lapker_unit_bau`
--

CREATE TABLE `lapker_unit_bau` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lapker_unit_humas`
--

CREATE TABLE `lapker_unit_humas` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_unit_humas`
--

INSERT INTO `lapker_unit_humas` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(26, 'Sosialisasi Program Intership Jepang', 14, 'PT Shinzou Panca Indonesia', 'Pendidikan', '2021-2022', NULL, '2024-03-24_21-22 GANJIL_Laporan Kerja Sama Unit Kerja Sama_PT Shinzou.pdf', '2024-03-24 02:44:01', '2024-03-24 03:52:18'),
(27, 'Sosialisasi Prosedur Operasional dan Evaluasi Kerja Sama di Lingkungan Balai Bahasa', 14, 'Badan Pengembangan dan Pembinaan Bahasa Kemenristekdikbud', 'Pendidikan', '2021-2022', NULL, '2024-03-24_21-22G~2.PDF', '2024-03-24 02:46:41', NULL),
(28, 'Sosialisasi Open Recruitment Kaigo ke Jepang', 14, 'LPK Kokorono Siji', 'Pendidikan', '2021-2022', NULL, '2024-03-24_21-22 GENAP_Laporan Kerja Sama Unit Kerja Sama_LPK Kokorono Siji.pdf', '2024-03-24 02:49:35', NULL),
(29, 'Sosialisasi Peluang Kerja Perawat di Luar Negeri', 14, 'PT Mitra Sinergi Sukses  ', 'Pendidikan', '2022-2023', NULL, '2024-03-24_22-23 GANJIL Laporan Kerja Sama Unit Kerja Sama_PT Mitra Sinergi Sukses.pdf', '2024-03-24 03:08:37', NULL),
(30, 'Sosialisasi Peluang Magang dan Pelatiahan Kerja di Jepang', 14, 'Os. Selnajaya', 'Pendidikan', '2022-2023', NULL, '2024-03-24_22-23 GANJIL Laporan Kerja Sama Unit Kerja Sama_Os Selnajaya Indonesia.pdf', '2024-03-24 03:17:25', NULL),
(31, 'Sosialisasi Program Intership Jepang', 14, 'PT Shinzou Panca Indonesia', 'Pendidikan', '2022-2023', NULL, '2024-03-24_22-23 GENAP Laporan Kerja Sama Unit Kerja Sama_PT Shinzou (1).pdf', '2024-03-24 03:19:32', NULL),
(32, 'Sosialisasi Program Ryuugkusei Kaigo Jepang', 14, 'PT Shinzou Panca Indonesia', 'Pendidikan', '2022-2023', NULL, '2024-03-24_22-23 GENAP Laporan Kerja Sama Unit Kerja Sama_PT Shinzou (2).pdf', '2024-03-24 03:21:21', NULL),
(33, 'Sosialisasi Peluang Kerja di Luar Negeri', 14, 'LPK Kokorono Siji dan PT Infomedia Solusi Humanika', 'Pendidikan', '2022-2023', NULL, '2024-03-24_22-23 GENAP Laporan Kerja Sama Unit Kerja Sama_PT ISH & LPK Kokorono Siji.pdf', '2024-03-24 03:22:54', NULL),
(34, 'Co Host Seminar Internasional', 14, 'STIKes Bethesda Yakkum Yogyakarta', 'Pendidikan', '2022-2023', NULL, '', '2024-03-24 03:25:07', NULL),
(35, 'International Guest Lecture', 14, 'RV University India', 'Pendidikan', '2023-2024', NULL, '2024-03-24_23-24 Laporan Implementasi Guest Lecture.pdf', '2024-03-24 03:50:39', NULL),
(36, 'International Student Mobility', 14, 'Universitas Pancasakti Tegal, RV University India, Tarlac Argicultural University Philippines, University of Economy and Pedagogy Uzbekistan ', 'Pendidikan', '2023-2024 GENAP', NULL, '2024-12-20_23-24 Laporan Implementasi ISM 2024.pdf', '2024-12-20 01:50:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lapker_unit_lab`
--

CREATE TABLE `lapker_unit_lab` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lapker_unit_lp2m`
--

CREATE TABLE `lapker_unit_lp2m` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_unit_lp2m`
--

INSERT INTO `lapker_unit_lp2m` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(30, 'Pengambilan Data Persepsi Responden Internal dan Eksternal untuk Pengukuran Indeks tata Kelola berbasis Online ', 15, 'Resor Tegal', 'Penelitian', '2022-2023', NULL, '2024-03-24_22-23 Laporan Kerja Sama Penelitian (LPPM)_Resor Tegal.pdf', '2024-03-24 03:27:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lapker_unit_lpm`
--

CREATE TABLE `lapker_unit_lpm` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_unit_lpm`
--

INSERT INTO `lapker_unit_lpm` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(25, 'Kegiatan Benchmarking LPM', 20, 'Universitas Muhammadiyah Surakarta ', 'Pendidikan', '2023-2024 GENAP', NULL, '2024-12-20_23-24 Laporan Kegiatan Kerja Sama_Universitas Muhammadiyah Surakarta.pdf', '2024-12-20 01:59:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lapker_unit_lppm`
--

CREATE TABLE `lapker_unit_lppm` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_unit` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lapker_unit_perpus`
--

CREATE TABLE `lapker_unit_perpus` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_unit_perpus`
--

INSERT INTO `lapker_unit_perpus` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(24, 'Aplikasi Turnitin Similarity', 16, 'FPPTI Jawa Tengah', 'Pendidikan', '2021-2022', NULL, '2024-03-24_21-22 Laporan Kerja Sama Perpustakaan_FPPTI Jawa Tengah.pdf', '2024-03-24 03:29:39', NULL),
(25, 'Layanan Perpustakaan (Promosi Katalog Induk Pocilib)', 16, 'Dinas Kearsipan & Perpustakaan Daerah Kab Tegal', 'Pendidikan', '2021-2022', NULL, '2024-03-24_21-22 Laporan Kerja Sama Perpustakaan_Dinas Kearsipan&Perpustakaan Kab Tegal (Policip).pdf', '2024-03-24 03:31:10', '2024-03-24 03:32:56'),
(26, 'Layanan Perpustakaan (Layanan Ekstensi)', 14, 'Dinas Kearsipan & Perpustakaan Daerah Kab Tegal', 'Pendidikan', '2021-2022', NULL, '2024-03-24_21-22L~1.PDF', '2024-03-24 03:32:04', '2024-03-24 03:33:34'),
(27, 'Layanan Perpustakaan (Penyediaan Aplikasi Perpustakaan Digital)', 14, 'PT Enam KUBUKU Indonesia', 'Pendidikan', '2021-2022', NULL, '2024-03-24_21-22 Laporan Kerja Sama Perpustakaan_PT Enam Kubuku (e-library cendekia bhamada).pdf', '2024-03-24 03:34:54', NULL),
(28, 'Layanan Perpustakaan (E-Journal)', 16, 'Forum Perpustakaan Perguruan Tinggi Indonesia (FPPTI) Wilayah Jawa Tengah', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 Laporan Kerja Sama Perpustakaan_FPPTI Jateng (e-Journal).pdf', '2024-12-19 07:13:03', '2024-12-19 07:14:23'),
(29, 'Layanan Perpustakaan (Aplikasi turnitin similarity)', 16, 'Forum Perpustakaan Perguruan Tinggi Indonesia (FPPTI) Wilayah Jawa Tengah', 'Pendidikan', '2023-2024 GANJIL', NULL, '2024-12-19_23-24 Laporan Kerja Sama Perpustakaan_FPPTI Jateng (Turnitin Similarity).pdf', '2024-12-19 07:16:22', NULL),
(30, 'Layanan Perpustakaan (Sharing Website)', 16, 'Politeknik Keselamatan Transportasi Jalan', 'Pendidikan', '2023-2024 GENAP', NULL, '2024-12-19_23-24 Laporan Kerja Sama Perpustakaan_Politeknik Keselamatan Transportasi Jalan.pdf', '2024-12-19 07:18:20', NULL),
(31, 'Penyedia Aplikasi Perpustakaan Digital ', 16, 'PT Enam Kubuku Indonesia', 'Pendidikan', '2023-2024 GENAP', NULL, '2024-12-19_23-24 Laporan Kerja Sama Perpustakaan_PT Enam KUBUKU Indonesia.pdf', '2024-12-19 07:19:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lapker_unit_pmb`
--

CREATE TABLE `lapker_unit_pmb` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lapker_unit_sarpras`
--

CREATE TABLE `lapker_unit_sarpras` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lapker_univ`
--

CREATE TABLE `lapker_univ` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_fak` int(11) NOT NULL,
  `mitra` varchar(250) NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_univ` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapker_univ`
--

INSERT INTO `lapker_univ` (`id`, `judul`, `id_fak`, `mitra`, `kegiatan`, `tahun_lap`, `id_univ`, `dok`, `date_created`, `date_updated`) VALUES
(25, 'asdas', 1, 'aa', 'Pendidikan', '2091', NULL, '', '2023-11-21 15:59:26', '2023-11-21 15:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kerjasama`
--

CREATE TABLE `laporan_kerjasama` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun_lap` varchar(255) NOT NULL,
  `id_fak` int(11) DEFAULT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_kerjasama`
--

INSERT INTO `laporan_kerjasama` (`id`, `judul`, `tahun_lap`, `id_fak`, `dok`, `date_created`, `date_updated`) VALUES
(7, 'Prodi D III Kebidanan_Praktek Mandiri Bidan', 'GANJIL 2021-2022', 0, '2023-05-13_21-22 GANJIL _Laporan Kegiatan Kerja Sama Bhamada (Prodi D III Kebidanan)_Praktek Mandiri Bidan.pdf', '2023-05-13 14:51:37', '2023-05-13 14:55:20'),
(8, 'Prodi D III Kebidanan_Rumah Sakit', 'GANJIL 2021-2022', 1, '2023-05-13_21-22 GANJIL_Laporan Kegiatan Kerja Sama Bhamada (Prodi D III Kebidanan)_Rumah Sakit.pdf', '2023-05-13 14:54:18', NULL),
(9, 'Prodi S1 Farmasi_Apotek', 'GANJIL 2021-2022', 1, '2023-05-13_21-22 GANJIL_Laporan Kegiatan Kerja Sama Bhamada (Prodi S1 Farmasi)_Apotek.pdf', '2023-05-13 14:57:43', NULL),
(10, 'Prodi S1 Farmasi_Rumah Sakit', 'GANJIL 2021-2022', 1, '2023-05-13_21-22 GANJIL_Laporan Kegiatan Kerja Sama Bhamada (Prodi S1 Farmasi)_Rumah Sakit.pdf', '2023-05-13 14:58:45', NULL),
(11, 'Prodi S1 Kewirausahaan_CV Pucuk Daun Lestari', 'GANJIL 2021-2022', 3, '2023-05-13_21-22 GANJIL_Laporan Kegiatan Kerja Sama Bhamada (Prodi S1 Kewirausahaan)_CV Pucuk Daun Lestari.pdf', '2023-05-13 15:00:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lap_ami`
--

CREATE TABLE `lap_ami` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun_lap` varchar(100) NOT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_ami`
--

INSERT INTO `lap_ami` (`id`, `judul`, `tahun_lap`, `dok`, `date_created`, `date_updated`) VALUES
(8, 'Laporan Audit Mutu Internal dan RTM', '2023', '404-Laporan AMI & RTM Kerja Sama Tahun 2023.pdf', '2024-04-22 12:52:37', '2024-07-03 01:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `lap_kep_mitra`
--

CREATE TABLE `lap_kep_mitra` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun_lap` varchar(100) NOT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_kep_mitra`
--

INSERT INTO `lap_kep_mitra` (`id`, `judul`, `tahun_lap`, `dok`, `date_created`, `date_updated`) VALUES
(5, 'Laporan Monitoring & Evaluasi Kepuasaan Mitra Kerja Sama TA 2021-2022', '2021-2022', '775-Laporan Monitoring & Evaluasi Survei Kepuasan Mitra Kerja Sama TA 2021-2022.pdf', '2023-11-21 01:21:04', '2024-07-03 01:48:35'),
(6, 'Laporan Monitoring & Evaluasi Kepuasaan Mitra Kerja Sama TA 2022-2023', '2022-2023', '903-Laporan Monitoring & Evaluasi Survei Kepuasan Kerja Sama TA 2022-2023.pdf', '2023-11-21 01:21:43', '2024-07-03 01:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `lap_kerjasama`
--

CREATE TABLE `lap_kerjasama` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lap_kinerja`
--

CREATE TABLE `lap_kinerja` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun_lap` varchar(100) NOT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_kinerja`
--

INSERT INTO `lap_kinerja` (`id`, `judul`, `tahun_lap`, `dok`, `date_created`, `date_updated`) VALUES
(2, 'Laporan Kinerja TA 2021-2022', '2021-2022', '2023-07-12_Laporan Kinerja TA 2021-2022.pdf', '2023-07-12 04:57:12', '2023-07-31 07:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `lap_monev`
--

CREATE TABLE `lap_monev` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun_lap` varchar(100) NOT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_monev`
--

INSERT INTO `lap_monev` (`id`, `judul`, `tahun_lap`, `dok`, `date_created`, `date_updated`) VALUES
(4, 'Laporan Monitoring & Evaluasi Pelaksanaan Kerja Sama TA 2021-2022', '2021-2022  ', '484-Laporan Monitoring & Evaluasi Pelaksanaan Kerja Sama TA 2021-2022.pdf', '2024-04-22 12:48:56', '2024-07-03 01:49:23'),
(5, 'Laporan Monitoring & Evaluasi Pelaksanaan Kerja Sama TA 2022-2023', '2022-2023', '351-Laporan Monitoring & Evaluasi Pelaksanaan Kerja Sama TA 2022-2023.pdf', '2024-04-22 12:51:07', '2024-07-03 01:49:45'),
(6, 'Laporan Monev Standar Kerja Sama', '2023', '737-Laporan Monev Standar Kerja Sama Tahun 2023 (LPM).pdf', '2024-04-22 12:54:34', '2024-07-03 01:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `lembaga`
--

CREATE TABLE `lembaga` (
  `id_lembaga` int(11) NOT NULL,
  `lembaga_kode` varchar(20) NOT NULL,
  `lembaga_nama` varchar(255) NOT NULL,
  `lembaga_ket` text NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lembaga`
--

INSERT INTO `lembaga` (`id_lembaga`, `lembaga_kode`, `lembaga_nama`, `lembaga_ket`, `date_created`, `date_updated`) VALUES
(6, 'LPDN', 'LEMBAGA PENDIDIKAN (DALAM NEGERI)', '', '2022-11-22 02:35:40', NULL),
(7, 'LPLN', 'LEMBAGA PENDIDIKAN (LUAR NEGERI)', '', '2022-11-22 02:35:40', NULL),
(8, 'DKDILN', 'DUNIA KERJA DAN INDUSTRI (LUAR NEGERI)', '', '2022-11-22 02:35:40', NULL),
(9, 'ODN', 'ORGANISASI (DALAM NEGERI)', '', '2022-11-22 02:35:40', NULL),
(10, 'OLN', 'ORGANISASI (LUAR NEGERI)', '', '2022-11-22 02:35:40', NULL),
(11, 'LPDN', 'LEMBAGA PEMERINTAHAN (DALAM NEGERI)', '', '2022-11-22 02:35:40', NULL),
(12, 'LPLN', 'LEMBAGA PEMERINTAHAN (LUAR NEGERI)', '', '2022-11-22 02:35:40', NULL),
(13, 'IKDN', 'INSTANSI KESEHATAN (DALAM NEGERI)', '', '2022-11-22 02:35:40', NULL),
(14, 'IKLN', 'INSTANSI KESEHATAN (LUAR NEGERI)', '', '2022-11-22 02:35:40', NULL),
(15, 'PDLIDN', 'PESANTREN DAN LEMBAGA ISLAM (DALAM NEGERI)', '', '2022-11-22 02:35:40', NULL),
(16, 'PDLILN', 'PESANTREN DAN LEMBAGA ISLAM (LUAR NEGERI)', '', '2022-11-22 02:35:40', NULL),
(17, 'KDJDLN', 'KONSORSIUM DAN JEJARING (DALAM DAN LUAR NEGERI)', '', '2022-11-22 02:35:40', NULL),
(18, 'DKDIDN', 'DUNIA KERJA DAN INDUSTRI (DALAM NEGERI)', '                                                                              ', '2022-11-22 02:35:40', '2022-11-22 03:04:16'),
(19, 'LSKDN', 'LEMBAGA SERIFIKASI KEAHLIAN (DALAM NEGERI)', '', '2022-11-22 02:35:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `id_negara` int(11) NOT NULL,
  `negara_nama` varchar(100) NOT NULL,
  `negara_kat` enum('INTERNATIONAL','NATIONAL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id_negara`, `negara_nama`, `negara_kat`) VALUES
(1, 'Indonesia', 'NATIONAL'),
(2, 'Monako', 'INTERNATIONAL'),
(3, 'Singapura', 'INTERNATIONAL'),
(4, 'Hong Kong', 'INTERNATIONAL'),
(5, 'Gibraltar', 'INTERNATIONAL'),
(6, 'Jalur Gaza', 'INTERNATIONAL'),
(7, 'Vatikan', 'INTERNATIONAL'),
(8, 'Malta', 'INTERNATIONAL'),
(9, 'Bermuda', 'INTERNATIONAL'),
(10, 'Maladewa', 'INTERNATIONAL'),
(11, 'Bahrain', 'INTERNATIONAL'),
(12, 'Bangladesh', 'INTERNATIONAL'),
(13, 'Guernsey', 'INTERNATIONAL'),
(14, 'Jersey', 'INTERNATIONAL'),
(15, 'Barbados', 'INTERNATIONAL'),
(16, 'Republik Cina (Taiwan)', 'INTERNATIONAL'),
(17, 'Nauru', 'INTERNATIONAL'),
(18, 'Mauritius', 'INTERNATIONAL'),
(19, 'Mayotte', 'INTERNATIONAL'),
(20, 'Korea Selatan', 'INTERNATIONAL'),
(21, 'San Marino', 'INTERNATIONAL'),
(22, 'Tuvalu', 'INTERNATIONAL'),
(23, 'Puerto Riko', 'INTERNATIONAL'),
(24, 'Tepi Barat', 'INTERNATIONAL'),
(25, 'Belanda', 'INTERNATIONAL'),
(26, 'Martinique', 'INTERNATIONAL'),
(27, 'Aruba', 'INTERNATIONAL'),
(28, 'Lebanon', 'INTERNATIONAL'),
(29, 'Belgia', 'INTERNATIONAL'),
(30, 'Jepang', 'INTERNATIONAL'),
(31, 'India', 'INTERNATIONAL'),
(32, 'Kepulauan Marshall', 'INTERNATIONAL'),
(33, 'Rwanda', 'INTERNATIONAL'),
(34, 'El Salvador', 'INTERNATIONAL'),
(35, 'Komoro', 'INTERNATIONAL'),
(36, 'Kepulauan Virgin', 'INTERNATIONAL'),
(37, 'Reunion', 'INTERNATIONAL'),
(38, 'Guam', 'INTERNATIONAL'),
(39, 'Sri Lanka', 'INTERNATIONAL'),
(40, 'Israel', 'INTERNATIONAL'),
(41, 'Saint Vincent dan Grenadines', 'INTERNATIONAL'),
(42, 'Filipina', 'INTERNATIONAL'),
(43, 'Haiti', 'INTERNATIONAL'),
(44, 'Samoa Amerika', 'INTERNATIONAL'),
(45, 'Saint Lucia', 'INTERNATIONAL'),
(46, 'Grenada', 'INTERNATIONAL'),
(47, 'Vietnam', 'INTERNATIONAL'),
(48, 'Guadeloupe', 'INTERNATIONAL'),
(49, 'Jamaika', 'INTERNATIONAL'),
(50, 'Britania Raya', 'INTERNATIONAL'),
(51, 'Jerman', 'INTERNATIONAL'),
(52, 'Antillen Belanda', 'INTERNATIONAL'),
(53, 'Burundi', 'INTERNATIONAL'),
(54, 'Trinidad dan Tobago', 'INTERNATIONAL'),
(55, 'Liechtenstein', 'INTERNATIONAL'),
(56, 'Pakistan', 'INTERNATIONAL'),
(57, 'Nepal', 'INTERNATIONAL'),
(58, 'Italia', 'INTERNATIONAL'),
(59, 'Korea Utara', 'INTERNATIONAL'),
(60, 'Sao Tome dan Principe', 'INTERNATIONAL'),
(61, 'Republik Dominika', 'INTERNATIONAL'),
(62, 'Swiss', 'INTERNATIONAL'),
(63, 'Luxembourg', 'INTERNATIONAL'),
(64, 'Seychelles', 'INTERNATIONAL'),
(65, 'Kepulauan Cayman', 'INTERNATIONAL'),
(66, 'Kepulauan Mariana Utara', 'INTERNATIONAL'),
(67, 'Antigua dan Barbuda', 'INTERNATIONAL'),
(68, 'Mikronesia', 'INTERNATIONAL'),
(69, 'Andorra', 'INTERNATIONAL'),
(70, 'Tonga', 'INTERNATIONAL'),
(71, 'Saint Kitts dan Nevis', 'INTERNATIONAL'),
(72, 'Kepulauan Virgin Inggris', 'INTERNATIONAL'),
(73, 'Atol Johnston', 'INTERNATIONAL'),
(74, 'Gambia', 'INTERNATIONAL'),
(75, 'Tokelau', 'INTERNATIONAL'),
(76, 'Nigeria', 'INTERNATIONAL'),
(77, 'Republik Rakyat Cina', 'INTERNATIONAL'),
(78, 'Guatemala', 'INTERNATIONAL'),
(79, 'Moldavia', 'INTERNATIONAL'),
(80, 'Kuwait', 'INTERNATIONAL'),
(81, 'Pulau Man', 'INTERNATIONAL'),
(82, 'Ceko', 'INTERNATIONAL'),
(83, 'Anguilla', 'INTERNATIONAL'),
(84, 'Thailand', 'INTERNATIONAL'),
(85, 'Kiribati', 'INTERNATIONAL'),
(86, 'Makau', 'INTERNATIONAL'),
(87, 'Denmark', 'INTERNATIONAL'),
(88, 'Albania', 'INTERNATIONAL'),
(89, 'Polandia', 'INTERNATIONAL'),
(90, 'Uganda', 'INTERNATIONAL'),
(91, 'Portugal', 'INTERNATIONAL'),
(92, 'Uni Eropa', 'INTERNATIONAL'),
(93, 'Slowakia', 'INTERNATIONAL'),
(94, 'Perancis (Metropolitan)', 'INTERNATIONAL'),
(95, 'Hongaria', 'INTERNATIONAL'),
(96, 'Serbia dan Montenegro', 'INTERNATIONAL'),
(97, 'Tanjung Verde', 'INTERNATIONAL'),
(98, 'Malawi', 'INTERNATIONAL'),
(99, 'Kuba', 'INTERNATIONAL'),
(100, 'Armenia', 'INTERNATIONAL'),
(101, 'Togo', 'INTERNATIONAL'),
(102, 'Suriah', 'INTERNATIONAL'),
(103, 'Slovenia', 'INTERNATIONAL'),
(104, 'Austria', 'INTERNATIONAL'),
(105, 'Romania', 'INTERNATIONAL'),
(106, 'Dominika', 'INTERNATIONAL'),
(107, 'Azerbaijan', 'INTERNATIONAL'),
(108, 'Montserrat', 'INTERNATIONAL'),
(109, 'Turki', 'INTERNATIONAL'),
(110, 'Kepulauan Cook', 'INTERNATIONAL'),
(111, 'Ghana', 'INTERNATIONAL'),
(112, 'Spanyol', 'INTERNATIONAL'),
(113, 'Siprus', 'INTERNATIONAL'),
(114, 'Sierra Leone', 'INTERNATIONAL'),
(115, 'Yunani', 'INTERNATIONAL'),
(116, 'Makedonia', 'INTERNATIONAL'),
(117, 'Kroasia', 'INTERNATIONAL'),
(118, 'Bosnia Herzegovina', 'INTERNATIONAL'),
(119, 'Kosta Rika', 'INTERNATIONAL'),
(120, 'Ukraina', 'INTERNATIONAL'),
(121, 'Mesir', 'INTERNATIONAL'),
(122, 'Qatar', 'INTERNATIONAL'),
(123, 'Kamboja', 'INTERNATIONAL'),
(124, 'Maroko', 'INTERNATIONAL'),
(125, 'Malaysia', 'INTERNATIONAL'),
(126, 'Timor Leste', 'INTERNATIONAL'),
(127, 'Swaziland', 'INTERNATIONAL'),
(128, 'Bulgaria', 'INTERNATIONAL'),
(129, 'Georgia', 'INTERNATIONAL'),
(130, 'Benin', 'INTERNATIONAL'),
(131, 'Ethiopia', 'INTERNATIONAL'),
(132, 'Brunei', 'INTERNATIONAL'),
(133, 'Polinesia Perancis', 'INTERNATIONAL'),
(134, 'Myanmar', 'INTERNATIONAL'),
(135, 'Yordania', 'INTERNATIONAL'),
(136, 'Honduras', 'INTERNATIONAL'),
(137, 'Tunisia', 'INTERNATIONAL'),
(138, 'Lesotho', 'INTERNATIONAL'),
(139, 'Samoa', 'INTERNATIONAL'),
(140, 'Uzbekistan', 'INTERNATIONAL'),
(141, 'Irak', 'INTERNATIONAL'),
(142, 'Kenya', 'INTERNATIONAL'),
(143, 'Wallis dan Futuna', 'INTERNATIONAL'),
(144, 'Irlandia', 'INTERNATIONAL'),
(145, 'Senegal', 'INTERNATIONAL'),
(146, 'Lithuania', 'INTERNATIONAL'),
(147, 'Meksiko', 'INTERNATIONAL'),
(148, 'Pantai Gading', 'INTERNATIONAL'),
(149, 'Pulau Norfolk', 'INTERNATIONAL'),
(150, 'Burkina Faso', 'INTERNATIONAL'),
(151, 'Tajikistan', 'INTERNATIONAL'),
(152, 'Belarus', 'INTERNATIONAL'),
(153, 'Fiji', 'INTERNATIONAL'),
(154, 'Bhutan', 'INTERNATIONAL'),
(155, 'Ekuador', 'INTERNATIONAL'),
(156, 'Kepulauan Turks dan Caicos', 'INTERNATIONAL'),
(157, 'Afganistan', 'INTERNATIONAL'),
(158, 'Palau', 'INTERNATIONAL'),
(159, 'Kepulauan Cocos', 'INTERNATIONAL'),
(160, 'Nikaragua', 'INTERNATIONAL'),
(161, 'Iran', 'INTERNATIONAL'),
(162, 'Yaman', 'INTERNATIONAL'),
(163, 'Guinea Bissau', 'INTERNATIONAL'),
(164, 'Tanzania', 'INTERNATIONAL'),
(165, 'Panama', 'INTERNATIONAL'),
(166, 'Guinea', 'INTERNATIONAL'),
(167, 'Kolombia', 'INTERNATIONAL'),
(168, 'Eritrea', 'INTERNATIONAL'),
(169, 'Afrika Selatan', 'INTERNATIONAL'),
(170, 'Latvia', 'INTERNATIONAL'),
(171, 'Kamerun', 'INTERNATIONAL'),
(172, 'Kepulauan Faroe', 'INTERNATIONAL'),
(173, 'Zimbabwe', 'INTERNATIONAL'),
(174, 'Liberia', 'INTERNATIONAL'),
(175, 'Uni Emirat Arab', 'INTERNATIONAL'),
(176, 'Madagaskar', 'INTERNATIONAL'),
(177, 'Amerika Serikat', 'INTERNATIONAL'),
(178, 'Estonia', 'INTERNATIONAL'),
(179, 'Saint Pierre dan Miquelon', 'INTERNATIONAL'),
(180, 'Venezuela', 'INTERNATIONAL'),
(181, 'Laos', 'INTERNATIONAL'),
(182, 'Kirgizia', 'INTERNATIONAL'),
(183, 'Republik Demokratik Kongo', 'INTERNATIONAL'),
(184, 'Mozambik', 'INTERNATIONAL'),
(185, 'Brasil', 'INTERNATIONAL'),
(186, 'Peru', 'INTERNATIONAL'),
(187, 'Bahama', 'INTERNATIONAL'),
(188, 'Chili', 'INTERNATIONAL'),
(189, 'Djibouti', 'INTERNATIONAL'),
(190, 'Swedia', 'INTERNATIONAL'),
(191, 'Uruguay', 'INTERNATIONAL'),
(192, 'Guinea Khatulistiwa', 'INTERNATIONAL'),
(193, 'Solomon', 'INTERNATIONAL'),
(194, 'Saint Helena', 'INTERNATIONAL'),
(195, 'Vanuatu', 'INTERNATIONAL'),
(196, 'Sudan', 'INTERNATIONAL'),
(197, 'Paraguay', 'INTERNATIONAL'),
(198, 'Finlandia', 'INTERNATIONAL'),
(199, 'Selandia Baru', 'INTERNATIONAL'),
(200, 'Zambia', 'INTERNATIONAL'),
(201, 'Argentina', 'INTERNATIONAL'),
(202, 'Norwegia', 'INTERNATIONAL'),
(203, 'Oman', 'INTERNATIONAL'),
(204, 'Aljazair', 'INTERNATIONAL'),
(205, 'Arab Saudi', 'INTERNATIONAL'),
(206, 'Somalia', 'INTERNATIONAL'),
(207, 'Belize', 'INTERNATIONAL'),
(208, 'Papua Nugini', 'INTERNATIONAL'),
(209, 'Kaledonia Baru', 'INTERNATIONAL'),
(210, 'Turkmenistan', 'INTERNATIONAL'),
(211, 'Mali', 'INTERNATIONAL'),
(212, 'Niger', 'INTERNATIONAL'),
(213, 'Angola', 'INTERNATIONAL'),
(214, 'Republik Kongo', 'INTERNATIONAL'),
(215, 'Rusia', 'INTERNATIONAL'),
(216, 'Bolivia', 'INTERNATIONAL'),
(217, 'Chad', 'INTERNATIONAL'),
(218, 'Libya', 'INTERNATIONAL'),
(219, 'Kazakhstan', 'INTERNATIONAL'),
(220, 'Gabon', 'INTERNATIONAL'),
(221, 'Guyana', 'INTERNATIONAL'),
(222, 'Kanada', 'INTERNATIONAL'),
(223, 'Rep Afrika Tengah', 'INTERNATIONAL'),
(224, 'Mauritania', 'INTERNATIONAL'),
(225, 'Islandia', 'INTERNATIONAL'),
(226, 'Botswana', 'INTERNATIONAL'),
(227, 'Suriname', 'INTERNATIONAL'),
(228, 'Australia', 'INTERNATIONAL'),
(229, 'Namibia', 'INTERNATIONAL'),
(230, 'Pulau Natal', 'INTERNATIONAL'),
(231, 'Guyana Perancis', 'INTERNATIONAL'),
(232, 'Mongolia', 'INTERNATIONAL'),
(233, 'Sahara Barat', 'INTERNATIONAL'),
(234, 'Kepulauan Pitcairn', 'INTERNATIONAL'),
(235, 'Kepulauan Falkland', 'INTERNATIONAL'),
(236, 'Svalbard', 'INTERNATIONAL'),
(237, 'Greenland', 'INTERNATIONAL');

-- --------------------------------------------------------

--
-- Table structure for table `negara_kategori`
--

CREATE TABLE `negara_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negara_kategori`
--

INSERT INTO `negara_kategori` (`id_kategori`, `kategori_nama`) VALUES
(1, 'DALAM NEGERI'),
(2, 'LUAR NEGERI');

-- --------------------------------------------------------

--
-- Table structure for table `panduan`
--

CREATE TABLE `panduan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `dok` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panduan`
--

INSERT INTO `panduan` (`id`, `judul`, `dok`, `date_created`, `date_updated`) VALUES
(4, 'Pedoman Kerja Sama', '2023-11-10_Pedoman Kerja Sama.pdf', '2023-11-10 13:43:37', NULL),
(5, 'Panduan Survei Kepuasan Mitra', '2023-11-10_Panduan Survei Kepuasan.pdf', '2023-11-10 13:45:02', NULL),
(7, 'Pedoman Pengembangan Jejaring Mitra Kerja Sama', '2024-04-22_Pedoman Jejaring Mitra Kerja Sama.pdf', '2024-04-22 13:02:10', NULL),
(8, 'SOP Standar Kerja Sama', '2024-04-22_SOP Standar Kerja Sama 2023.pdf', '2024-04-22 13:04:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tanswer`
--

CREATE TABLE `tanswer` (
  `Id` int(11) NOT NULL,
  `descriptionId` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `companyId` varchar(50) NOT NULL,
  `jawaban` varchar(1) NOT NULL,
  `jawabanA` int(11) NOT NULL,
  `jawabanB` int(11) NOT NULL,
  `jawabanC` int(11) NOT NULL,
  `jawabanD` int(11) NOT NULL,
  `jawabanE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanswer`
--

INSERT INTO `tanswer` (`Id`, `descriptionId`, `groupId`, `companyId`, `jawaban`, `jawabanA`, `jawabanB`, `jawabanC`, `jawabanD`, `jawabanE`) VALUES
(255, 42, 1, '20230701 110112', 'C', 0, 0, 1, 0, 0),
(256, 43, 1, '20230701 110112', 'C', 0, 0, 1, 0, 0),
(257, 44, 1, '20230701 110112', 'C', 0, 0, 1, 0, 0),
(258, 45, 1, '20230701 110112', 'C', 0, 0, 1, 0, 0),
(259, 46, 1, '20230701 110112', 'C', 0, 0, 1, 0, 0),
(260, 47, 1, '20230701 110112', 'C', 0, 0, 1, 0, 0),
(261, 48, 1, '20230701 110112', 'C', 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tcompany`
--

CREATE TABLE `tcompany` (
  `companyId` varchar(50) NOT NULL,
  `companyName` varchar(30) NOT NULL,
  `companyAddress` text NOT NULL,
  `companyPhoneHp` varchar(30) NOT NULL,
  `dateSurvey` varchar(30) NOT NULL,
  `suggestion` text NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `b_kerjasama` varchar(255) NOT NULL,
  `suggestion1` text NOT NULL,
  `suggestion2` text NOT NULL,
  `product` varchar(20) NOT NULL,
  `pendidikan` tinyint(4) NOT NULL DEFAULT '0',
  `penelitian` tinyint(4) NOT NULL DEFAULT '0',
  `pkm` tinyint(4) NOT NULL DEFAULT '0',
  `seminar` tinyint(4) NOT NULL DEFAULT '0',
  `umum` tinyint(4) NOT NULL DEFAULT '0',
  `workshop` tinyint(4) NOT NULL DEFAULT '0',
  `lainya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcompany`
--

INSERT INTO `tcompany` (`companyId`, `companyName`, `companyAddress`, `companyPhoneHp`, `dateSurvey`, `suggestion`, `nama`, `jabatan`, `instansi`, `b_kerjasama`, `suggestion1`, `suggestion2`, `product`, `pendidikan`, `penelitian`, `pkm`, `seminar`, `umum`, `workshop`, `lainya`) VALUES
('20230701 110112', '', '', '', '2023-07-01', 'coba', 'coba', 'coba', 'coba', '', 'cobaco', 'coba', '', 1, 0, 0, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tdescription`
--

CREATE TABLE `tdescription` (
  `descriptionId` int(11) NOT NULL,
  `description` text NOT NULL,
  `groupId` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `CreatedUser` int(11) NOT NULL,
  `ModifiedDate` datetime NOT NULL,
  `ModifiedUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tdescription`
--

INSERT INTO `tdescription` (`descriptionId`, `description`, `groupId`, `CreatedDate`, `CreatedUser`, `ModifiedDate`, `ModifiedUser`) VALUES
(42, 'Staff kerja sama Universitas Bhamada Slawi menanggapi kebutuhan dengan tepat dalam usaha menjalin kerja sama\r\n(The cooperation staff of Bhamada Slawi University responds to the exact needs in an effort to establish cooperation)', 1, '2023-02-28 23:19:08', 0, '2023-07-01 21:14:47', 0),
(43, 'Penyusunan  nota kesepahaman (MoU) cepat dan sesuai harapan\r\n(Preparation of a Memorandum of Understanding (MoU) is quickly and as expected)', 1, '2023-02-28 23:19:45', 0, '2023-07-01 21:15:18', 0),
(44, 'Administrasi dalam proses kerja sama dilakukan dengan mudah dan jelas\r\n(Administration in the collaboration process is carried out easily and clearly)\r\n', 1, '2023-02-28 23:20:37', 0, '2023-07-01 21:15:39', 0),
(45, 'Staff kerja sama Universitas Bhamada Slawi memberi pendampingan terbaik dalam memenuhi kebutuhan kami\r\n(The cooperation staff of Bhamada Slawi University provides the best assistance in fulfilling our needs)', 1, '2023-02-28 23:21:31', 0, '2023-07-01 21:15:58', 0),
(46, 'Kerja sama dengan Universitas Bhamada Slawi berjalan sesuai harapan\r\n(The collaboration with Bhamada Slawi University goes as expected)', 1, '2023-02-28 23:22:35', 0, '2023-07-01 21:16:15', 0),
(47, 'Kerja sama dengan Universitas Bhamada Slawi sudah memberi manfaat yang sesuai dengan yang diharapkan\r\n(The collaboration with Bhamada Slawi University has provided the expected benefits)\r\n', 1, '2023-02-28 23:23:46', 0, '2023-07-01 21:16:39', 0),
(48, 'Implementasi kerjasama telah sesuai dengan tujuan program (MoU) yang telah disepakati\r\n(Implementation of cooperation is in accordance with the agreed program objectives (MoU))', 1, '2023-02-28 23:24:46', 0, '2023-07-01 21:16:58', 0),
(49, 'Kerjasama yang dilakukan memenuhi harapan kami\r\n(The cooperation we have made has met our expectations)', 1, '2023-07-01 21:17:17', 0, '0000-00-00 00:00:00', 0),
(50, 'Pelaporan hasil akhir dari hasil kegiatan kerjasama telah dibuat dan dikomunikasikan\r\n(The final report of the results of cooperation activities has been made and communicated)', 1, '2023-07-01 21:17:43', 0, '0000-00-00 00:00:00', 0),
(51, 'Berdasar manfaat yang diperoleh maka kerja sama dengan Universitas Bhamada Slawi akan dilakukan kembali pada masa mendatang\r\n(Based on the benefits obtained, the future collaboration with Bhamada Slawi University will be taken place)', 1, '2023-07-01 21:18:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tgroup`
--

CREATE TABLE `tgroup` (
  `groupId` int(11) NOT NULL,
  `groupName` varchar(255) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `CreatedUser` int(11) NOT NULL,
  `ModifiedDate` datetime NOT NULL,
  `ModifiedUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tgroup`
--

INSERT INTO `tgroup` (`groupId`, `groupName`, `CreatedDate`, `CreatedUser`, `ModifiedDate`, `ModifiedUser`) VALUES
(1, 'Pelayanan', '2023-02-28 23:16:58', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tikm`
--

CREATE TABLE `tikm` (
  `id_ikm` int(11) NOT NULL,
  `puas` int(5) NOT NULL,
  `cukup` int(5) NOT NULL,
  `kurang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tikm`
--

INSERT INTO `tikm` (`id_ikm`, `puas`, `cukup`, `kurang`) VALUES
(1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `userId` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`userId`, `username`, `password`, `fullname`, `email`, `level`) VALUES
(1, 'wahyu', '32c9e71e866ecdbc93e497482aa6779f', 'wahyu budiman', 'wahyu@gmail.com', 'Super');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `unit_nama` varchar(255) NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `unit_nama`, `status`, `date_created`, `date_updated`) VALUES
(1, 'BAAK', 'Y', '2022-11-25 17:00:00', '2022-12-01 07:13:24'),
(2, 'BAU', 'Y', '2022-11-25 17:00:00', '2022-12-01 07:13:27'),
(3, 'Laboratorium', 'Y', '2022-11-25 17:00:00', '2022-12-01 07:13:30'),
(4, 'Perpustakaan', 'Y', '2022-11-25 17:00:00', '2022-12-01 07:13:32'),
(5, 'LP2M', 'Y', '2022-11-25 17:00:00', '2022-12-01 07:13:34'),
(6, 'LPM', 'Y', '2022-11-25 17:00:00', '2022-12-01 07:13:35'),
(7, 'Sarana dan Prasarana', 'Y', '2022-11-25 17:00:00', '2022-12-01 07:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id_univ` int(11) NOT NULL,
  `univ_nama` varchar(255) NOT NULL,
  `univ_alamat` text NOT NULL,
  `univ_telp` varchar(20) NOT NULL,
  `univ_wa` varchar(20) NOT NULL,
  `univ_email` varchar(50) NOT NULL,
  `univ_fax` varchar(50) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universitas`
--

INSERT INTO `universitas` (`id_univ`, `univ_nama`, `univ_alamat`, `univ_telp`, `univ_wa`, `univ_email`, `univ_fax`, `date_created`, `date_updated`) VALUES
(1, 'universitas TRISAKTI', 'Jalan Kyai Tapa No. 1 Grogol\r\nJakarta Barat, Indonesia                                              ', '(62-21) 566 3232', '(+62) 882 1948 5674', 'humas@trisakti.ac.id', '(62-21) 564 4270', '2022-11-20 12:21:20', '2022-11-20 14:39:54'),
(2, 'udinus', 'semarang', '08232323', '0090232322', 'udinus@.gmail.com', '232323', '2022-11-20 13:23:50', NULL),
(3, 'Universitas Panca Sakti', 'Tegal', '02202022', '08232323232', 'user@gmail.com', '232323', '2022-11-25 05:30:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `level` enum('admin','superadmin','user') NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') NOT NULL DEFAULT 'N',
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_user`, `level`, `blokir`, `status`) VALUES
(1, 'member', '17c4520f6cfd1ab53d8745e84681eb49', 'member', 'user', 'Y', 1),
(2, 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin', 'admin', 'Y', 1),
(10, 'unit_lab', '081c49b8c66a69aad79f4bca8334e0ef', 'unit laboratorium', 'user', 'N', 1),
(11, 'unit_pmb', '91ab11a598a3b656ec9efa5925c8c6b3', 'unit pmb & promosi', 'user', 'N', 1),
(12, 'unit_perpus', '9d78092eb2f1e20dcf07aa231b1bb682', 'unit perpustakaan', 'user', 'N', 1),
(13, 'unit_sarpras', '95a8737e55c30e8274148921b48aebc1', 'unit sarana & prasarana', 'user', 'N', 1),
(14, 'unit_baak', '96d1d5f66af5133b7df24f3eb4fff380', 'unit BAAK', 'user', 'N', 1),
(15, 'unit_bau', 'a6261764d898a9df92b5723890dfd196', 'unit BAU', 'user', 'N', 1),
(16, 'bid_akademik', '1d975547d8ae5c05522b24b9f4af094e', 'bidang akademik', 'user', 'N', 1),
(17, 'bid_keu', '9a11926d7e137bda3f35e087adda91ce', 'bidang Keuangan', 'user', 'N', 1),
(18, 'bid_mhs', '935aab32c19f394cbd0189605ffb5b49', 'bidang Kemahasiswaan', 'user', 'N', 1),
(19, 'lpm', '2233426e3218e32d5e0a2d143d8399f4', 'Lembaga Penjamin Mutu', 'user', 'N', 1),
(20, 'lppm', '1f66aca21829390dc303fb1b88196056', 'lppm', 'user', 'N', 1),
(21, 'ilmu_keperawatan', '88302402fc4986121efe4a68ba6f5706', 'ilmu keperawatan', 'user', 'N', 1),
(22, 'farmasi', 'ab5b5f8e9b15685db78734f9dbaa2b44', 'farmasi', 'user', 'N', 1),
(23, 'kebidanan', '4f787a6b0663bcf8fdc3a83916f5a3c6', 'kebidanan', 'user', 'N', 1),
(24, 'keperawatand3', 'dc7fe0608cd96e40af55e34bd57bc6e9', 'keperawatan D3', 'user', 'N', 1),
(25, 'k3', 'f7ab469d1dc79166fc874dadcc0dd854', 'Keselamatan dan Kesehatan', 'user', 'N', 1),
(26, 'ners', '148af7418261eb92243a00b667e35201', 'Profesi Ners', 'user', 'N', 1),
(27, 'bisdig', 'f376556b365c0985a00cfb3145b670a0', 'Bisnis dan Digital', 'user', 'N', 1),
(28, 'kwu', '2b6a34eef5a30dfadff23fc4e021206d', 'Kewirausahaan', 'user', 'N', 1),
(29, 'informatika', 'caa420c305cedd335dbebb739cc94bfc', 'Fakultas Informatika', 'user', 'N', 1),
(30, 'bhamada', '8f2155de4c9f3bfa059a8f316fd394bd', 'bhamada', 'user', 'N', 1),
(31, 'sri_hartati', 'bb2a9b64b63cd94159aff4bbaea8d43b', 'Sri Hartati', 'user', 'N', 0);

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `wa` varchar(20) NOT NULL,
  `telpon` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` text,
  `instagram` varchar(100) DEFAULT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id`, `judul`, `deskripsi`, `wa`, `telpon`, `email`, `alamat`, `instagram`, `gambar`) VALUES
(1, 'SINEMA', 'Sistem Informasi Kerjasama', '082251705756', '02836197570', 'bhamadahumas@gmail.com', 'Jl. Cut Nyak Dhien No.16, Desa Kalisapu, Kecamatan Slawi, Kabupaten Tegal 52416', '@humasbhamadaslawi', '2023-01-14_2023-01-06_logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bentuk_kerjasama`
--
ALTER TABLE `bentuk_kerjasama`
  ADD PRIMARY KEY (`id_bkerja`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fak`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `jenis_dok`
--
ALTER TABLE `jenis_dok`
  ADD PRIMARY KEY (`id_jenis_dok`);

--
-- Indexes for table `kerjasama`
--
ALTER TABLE `kerjasama`
  ADD PRIMARY KEY (`id_kerjasama`);

--
-- Indexes for table `lapker_bid_akademik`
--
ALTER TABLE `lapker_bid_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_bid_keuangan`
--
ALTER TABLE `lapker_bid_keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_bid_mhs`
--
ALTER TABLE `lapker_bid_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_feb_bisdig`
--
ALTER TABLE `lapker_feb_bisdig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_feb_kwu`
--
ALTER TABLE `lapker_feb_kwu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_fikes_bid`
--
ALTER TABLE `lapker_fikes_bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_fikes_far`
--
ALTER TABLE `lapker_fikes_far`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_fikes_ik`
--
ALTER TABLE `lapker_fikes_ik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_fikes_k3`
--
ALTER TABLE `lapker_fikes_k3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_fikes_ners`
--
ALTER TABLE `lapker_fikes_ners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_fikes_per`
--
ALTER TABLE `lapker_fikes_per`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_fikom_it`
--
ALTER TABLE `lapker_fikom_it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_ik`
--
ALTER TABLE `lapker_ik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_unit_baak`
--
ALTER TABLE `lapker_unit_baak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_unit_bau`
--
ALTER TABLE `lapker_unit_bau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_unit_humas`
--
ALTER TABLE `lapker_unit_humas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_unit_lab`
--
ALTER TABLE `lapker_unit_lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_unit_lp2m`
--
ALTER TABLE `lapker_unit_lp2m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_unit_lpm`
--
ALTER TABLE `lapker_unit_lpm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_unit_lppm`
--
ALTER TABLE `lapker_unit_lppm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_unit_perpus`
--
ALTER TABLE `lapker_unit_perpus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_unit_pmb`
--
ALTER TABLE `lapker_unit_pmb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_unit_sarpras`
--
ALTER TABLE `lapker_unit_sarpras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapker_univ`
--
ALTER TABLE `lapker_univ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_kerjasama`
--
ALTER TABLE `laporan_kerjasama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_ami`
--
ALTER TABLE `lap_ami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_kep_mitra`
--
ALTER TABLE `lap_kep_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_kinerja`
--
ALTER TABLE `lap_kinerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_monev`
--
ALTER TABLE `lap_monev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lembaga`
--
ALTER TABLE `lembaga`
  ADD PRIMARY KEY (`id_lembaga`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`id_negara`);

--
-- Indexes for table `negara_kategori`
--
ALTER TABLE `negara_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `panduan`
--
ALTER TABLE `panduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanswer`
--
ALTER TABLE `tanswer`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `descriptionId` (`descriptionId`),
  ADD KEY `groupId` (`groupId`),
  ADD KEY `groupId_2` (`groupId`),
  ADD KEY `companyId` (`companyId`),
  ADD KEY `groupId_3` (`groupId`),
  ADD KEY `companyId_2` (`companyId`);

--
-- Indexes for table `tcompany`
--
ALTER TABLE `tcompany`
  ADD PRIMARY KEY (`companyId`);

--
-- Indexes for table `tdescription`
--
ALTER TABLE `tdescription`
  ADD PRIMARY KEY (`descriptionId`),
  ADD KEY `groupId` (`groupId`);

--
-- Indexes for table `tgroup`
--
ALTER TABLE `tgroup`
  ADD PRIMARY KEY (`groupId`),
  ADD KEY `CreatedUser` (`CreatedUser`,`ModifiedUser`),
  ADD KEY `CreatedUser_2` (`CreatedUser`);

--
-- Indexes for table `tikm`
--
ALTER TABLE `tikm`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id_univ`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bentuk_kerjasama`
--
ALTER TABLE `bentuk_kerjasama`
  MODIFY `id_bkerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kerjasama`
--
ALTER TABLE `kerjasama`
  MODIFY `id_kerjasama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `lapker_bid_akademik`
--
ALTER TABLE `lapker_bid_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `lapker_bid_keuangan`
--
ALTER TABLE `lapker_bid_keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lapker_bid_mhs`
--
ALTER TABLE `lapker_bid_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lapker_feb_bisdig`
--
ALTER TABLE `lapker_feb_bisdig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `lapker_feb_kwu`
--
ALTER TABLE `lapker_feb_kwu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `lapker_fikes_bid`
--
ALTER TABLE `lapker_fikes_bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `lapker_fikes_far`
--
ALTER TABLE `lapker_fikes_far`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `lapker_fikes_ik`
--
ALTER TABLE `lapker_fikes_ik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `lapker_fikes_k3`
--
ALTER TABLE `lapker_fikes_k3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lapker_fikes_ners`
--
ALTER TABLE `lapker_fikes_ners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lapker_fikes_per`
--
ALTER TABLE `lapker_fikes_per`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `lapker_fikom_it`
--
ALTER TABLE `lapker_fikom_it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `lapker_ik`
--
ALTER TABLE `lapker_ik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lapker_unit_baak`
--
ALTER TABLE `lapker_unit_baak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lapker_unit_bau`
--
ALTER TABLE `lapker_unit_bau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lapker_unit_humas`
--
ALTER TABLE `lapker_unit_humas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `lapker_unit_lab`
--
ALTER TABLE `lapker_unit_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `lapker_unit_lp2m`
--
ALTER TABLE `lapker_unit_lp2m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `lapker_unit_lpm`
--
ALTER TABLE `lapker_unit_lpm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lapker_unit_lppm`
--
ALTER TABLE `lapker_unit_lppm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lapker_unit_perpus`
--
ALTER TABLE `lapker_unit_perpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `lapker_unit_pmb`
--
ALTER TABLE `lapker_unit_pmb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `lapker_unit_sarpras`
--
ALTER TABLE `lapker_unit_sarpras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `lapker_univ`
--
ALTER TABLE `lapker_univ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `laporan_kerjasama`
--
ALTER TABLE `laporan_kerjasama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lap_ami`
--
ALTER TABLE `lap_ami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lap_kep_mitra`
--
ALTER TABLE `lap_kep_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lap_kinerja`
--
ALTER TABLE `lap_kinerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lap_monev`
--
ALTER TABLE `lap_monev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `panduan`
--
ALTER TABLE `panduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tanswer`
--
ALTER TABLE `tanswer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `tdescription`
--
ALTER TABLE `tdescription`
  MODIFY `descriptionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tgroup`
--
ALTER TABLE `tgroup`
  MODIFY `groupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tanswer`
--
ALTER TABLE `tanswer`
  ADD CONSTRAINT `tanswer_ibfk_1` FOREIGN KEY (`companyId`) REFERENCES `tcompany` (`companyId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanswer_ibfk_3` FOREIGN KEY (`groupId`) REFERENCES `tgroup` (`groupId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanswer_ibfk_4` FOREIGN KEY (`descriptionId`) REFERENCES `tdescription` (`descriptionId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tdescription`
--
ALTER TABLE `tdescription`
  ADD CONSTRAINT `tdescription_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `tgroup` (`groupId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
