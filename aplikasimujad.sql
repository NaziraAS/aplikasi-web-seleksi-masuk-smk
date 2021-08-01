-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2021 pada 04.37
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasimujad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nisn` int(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `asal_sekolah` varchar(70) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `pend_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pend_ibu` varchar(30) NOT NULL,
  `pekerjaan_ayah` varchar(128) NOT NULL,
  `pekerjaan_ibu` varchar(128) NOT NULL,
  `penghasilan_ortu` varchar(128) NOT NULL,
  `alamat_ortu` varchar(70) NOT NULL,
  `no_tlp_ortu` varchar(13) NOT NULL,
  `status` varchar(15) NOT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nisn`, `foto`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `agama`, `alamat`, `asal_sekolah`, `nama_ayah`, `pend_ayah`, `nama_ibu`, `pend_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ortu`, `alamat_ortu`, `no_tlp_ortu`, `status`, `jurusan`, `id_user`) VALUES
(12, 99999999, 'where-kabupaten-id1.png', 'atang sasmita', 'laki-laki', ' asdasda 2021-07-20', 'islam', 'gerantung', 'sistem informasi', 'asdas', 'asda', 'asda', 'asda', 'asda', 'asda', '0279879879', 'as', '23', 'aktif', 'rpl', 9),
(13, 23424, 'where-desa-id1.png', 'daniel', 'laki-laki', 'asdasd 2021-07-25', 'islam', 'asdasda', 'dasdas', 'asda', 'asda', 'asda', 'asda', 'asda', 'asda', '234234', 'asdasd', '23423', 'belum aktif', '', 10),
(14, 0, '1.jpg', 'asdasd', 'laki-laki', 'asdasd 2021-07-25', 'islam', 'asdad', 'asdasd', 'asdas', 'asdas', 'asda', 'asda', 'asda', 'asdas', '323424', 'asdas', '2132312', 'aktif', '', 11),
(15, 234234, 'where-kabupaten-id1101.png', 'dina makan', 'perempuan', 'asdkaksd 2021-07-26', 'islam', 'asdasdasd', 'sadsdasd', 'asdasd', 'asdas', 'asdasasd', 'asdas', 'asdas', 'asdas', '34534', 'asda', '45345', 'aktif', '', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(255) NOT NULL,
  `namaJurusan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `namaJurusan`) VALUES
(1, 'Tehnik Komputer Jaringan'),
(2, 'Rekayasa Perangkat Lunak'),
(3, 'Tehnik Sepeda Motor'),
(4, 'Tehnik Gambar Bangunan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(12) NOT NULL,
  `nilai_raport` float NOT NULL,
  `nilai_uas` float NOT NULL,
  `nilai_un` float NOT NULL,
  `nilai_piagam` float NOT NULL,
  `rata_rata` float NOT NULL,
  `status` varchar(15) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_calon_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `nilai_raport`, `nilai_uas`, `nilai_un`, `nilai_piagam`, `rata_rata`, `status`, `id_jurusan`, `id_calon_siswa`) VALUES
(2257, 12, 12, 12, 0, 12, 'Lulus', 1, 9),
(2258, 80, 80, 80, 0, 80, 'Lulus', 2, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `piagam`
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
-- Dumping data untuk tabel `piagam`
--

INSERT INTO `piagam` (`no`, `id_piagam`, `nisn`, `nama_piagam`, `nilai`, `tingkat`) VALUES
(2, 2, 45346645, 'kejuaraan takwondo walikota', '76', 'nasional'),
(0, 3543, 4546456, 'lempar lembing', '87', 'provinsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `standar_penilaian`
--

CREATE TABLE `standar_penilaian` (
  `id` int(255) NOT NULL,
  `s_penilaian` float NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `standar_penilaian`
--

INSERT INTO `standar_penilaian` (`id`, `s_penilaian`, `id_jurusan`) VALUES
(7, 8.5, 1),
(8, 8.25, 2),
(9, 8, 3),
(10, 7.75, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`) VALUES
(8, 'mujad', '$2y$10$BSSBnM6AUFe0fqDfYnhQc.RXg/sue7t/uKb4EhLnnykv33IfR9h.G', 'mujad@gmail.com', 'admin'),
(9, 'meliawati', '$2y$10$JDclIGl3Quo7ZBNxiW1fVuFTVXHhGlQpESlgNiQtPzOzACyMuV2jW', 'mel@gmail.com', 'siswa'),
(10, 'mbape', '$2y$10$LgslRupL2wYRDWiyPdpQXuDcQNZJsDa6P5KJcNPduVJBlfQx0vgK.', 'mbape@gmail.com', 'siswa'),
(11, 'dani', '$2y$10$gpDiiyWD6jGE07x8PNAp0OH334CRukDVixbPgOE3/5TXywH5SK8kq', 'dani@gmail.com', 'siswa'),
(12, 'dina', '$2y$10$yXAsH6kKXUZdT9IYoZORZeHcOzbegCMlPeitauNic4zEKHEeBjnIC', 'dina@gmail.com', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `standar_penilaian`
--
ALTER TABLE `standar_penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2259;

--
-- AUTO_INCREMENT untuk tabel `standar_penilaian`
--
ALTER TABLE `standar_penilaian`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
