-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 07:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `nisn` int(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(30) NOT NULL,
  `anak_ke` varchar(12) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `asal_sekolah` varchar(70) NOT NULL,
  `pilihan_jurusan` enum('tkj','rpl','tsm','tgb') NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `pend_terakhir_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pend_terakhir_ibu` varchar(30) NOT NULL,
  `pekerjaan_ayah` enum('wirausaha','nelayan','petani','pedagang','karyawan','buruh','pns') NOT NULL,
  `pekerjaan_ibu` enum('wirausaha','nelayan','petani','pedagang','karyawan','buruh','pns') NOT NULL,
  `penghasilan_ortu` enum('>Rp.500-1.000.000','>Rp.1,000.000-5.000.000','<Rp.5.000.000','') NOT NULL,
  `alamat_ortu` varchar(70) NOT NULL,
  `no_tlp_ortu` varchar(13) NOT NULL,
  `status_peserta` varchar(13) NOT NULL,
  `status_verifikasi` varchar(13) NOT NULL,
  `id_kartu_siswa` int(13) NOT NULL,
  `id_piagam` int(13) NOT NULL,
  `id_user` int(13) NOT NULL,
  `id_nilai` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`nisn`, `foto`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `anak_ke`, `alamat`, `asal_sekolah`, `pilihan_jurusan`, `nama_ayah`, `pend_terakhir_ayah`, `nama_ibu`, `pend_terakhir_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ortu`, `alamat_ortu`, `no_tlp_ortu`, `status_peserta`, `status_verifikasi`, `id_kartu_siswa`, `id_piagam`, `id_user`, `id_nilai`) VALUES
(4534, 'laki-laki', 'mujaddidi', 'laki-laki', 'labuan', '2021-04-07', 'Islam', '3', 'babadan', 'Sd Negeri Limbo', 'tkj', 'ledi', 'smp', 'lia', 'sd', 'nelayan', 'nelayan', '', 'babadan', '96958795', 'calon siswa b', 'diproses', 0, 0, 0, 0),
(4546456, 'OUTPUT CALON SISWA 123.png', 'mujaddidi', 'laki-laki', 'sonit', '2021-04-20', 'Islam', '3', 'jalan babadan Banguntapan', 'Sd Negeri Limbo', 'tkj', 'Burhan', 'smp', 'nurbia', 'SD', 'nelayan', 'petani', '', 'Limbo ', '45645645', 'calon Siswa', 'diterima', 0, 0, 0, 0),
(45645, 'LAPORAN  CALON SISWA 123.png', 'elaa', 'perempuan', 'limbo', '2021-05-21', 'islam', '3', 'desalimbo', 'SMPnegeri 3 Taliabu', 'tsm', 'edo', 'sd', 'eda', 'sd', 'nelayan', 'nelayan', '', 'desalimbo', '546546', 'diproses', 'diterima', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(255) NOT NULL,
  `nama_jurusan` enum('tkj','rpl','tsm','tgb') NOT NULL,
  `penilaian` varchar(255) NOT NULL,
  `id_standar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(12) NOT NULL,
  `nilai_raport` int(12) NOT NULL,
  `nilai_uas` int(12) NOT NULL,
  `nilai_un` int(12) NOT NULL,
  `nilai_piagam` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nilai_raport`, `nilai_uas`, `nilai_un`, `nilai_piagam`) VALUES
(343, 89, 87, 67, 90),
(2242, 67, 65, 89, 90);

-- --------------------------------------------------------

--
-- Table structure for table `piagam`
--

CREATE TABLE `piagam` (
  `no` int(11) NOT NULL,
  `id_piagam` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nama_piagam` varchar(30) NOT NULL,
  `nilai` varchar(20) NOT NULL,
  `tingkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `piagam`
--

INSERT INTO `piagam` (`no`, `id_piagam`, `nisn`, `nama_piagam`, `nilai`, `tingkat`) VALUES
(2, 2, 45346645, 'kejuaraan takwondo walikota', '76', 'nasional'),
(0, 3543, 4546456, 'lempar lembing', '87', 'provinsi');

-- --------------------------------------------------------

--
-- Table structure for table `standar_penilaian`
--

CREATE TABLE `standar_penilaian` (
  `id` int(255) NOT NULL,
  `nilai_raport` int(12) NOT NULL,
  `nilai_uas` int(12) NOT NULL,
  `nilai_un` int(12) NOT NULL,
  `nilai_piagam` int(12) NOT NULL,
  `id_nilai` int(255) NOT NULL,
  `id_jurusan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`) VALUES
(4, 'mujadh', '$2y$10$8b8pNS7beQIf9tMqhBydueosG/N8grGpnvJ6tnUahe3120k13sqRy', 'oncobong46@gmail.com', 'admin'),
(5, 'didi', '$2y$10$3cuY1tFHLTZh9qS7WcUHoOKwxAQXoIebsHqTM38WcI9rQbAPlmPl6', 'didi34@gmail.com', 'user'),
(6, 'jadh', '$2y$10$g.Y7U2mfgletEsmGK5dG5.y4/fOSL3eQ7onIz0S9faVClmTBbvELC', 'jadh@GMIL.COM', 'user'),
(7, 'ida', '$2y$10$kwY3lTlTtpYci.Da9UDEr.aE/r5js36tc.zcuuPKNpiuGXQs.v90i', 'ida@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standar_penilaian`
--
ALTER TABLE `standar_penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2243;

--
-- AUTO_INCREMENT for table `standar_penilaian`
--
ALTER TABLE `standar_penilaian`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
