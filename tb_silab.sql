-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2020 pada 04.50
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_silab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_aset`
--

CREATE TABLE `tb_aset` (
  `kode_aset` int(20) NOT NULL,
  `id_lokasi` int(20) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `spesifikasi` text NOT NULL,
  `jumlah` int(20) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_aset`
--

INSERT INTO `tb_aset` (`kode_aset`, `id_lokasi`, `nama_barang`, `spesifikasi`, `jumlah`, `satuan`, `keterangan`, `foto`) VALUES
(1, 1, 'Channel AC Voltmeter Trio VT-165', 'Merek Jennen', 1, 'Buah', 'Baik', '1.jpg'),
(2, 2, 'Programmable DC Power Supply AN510 Series(F)', 'Merek Ainou', 1, 'Buah', 'Baik', '2.jpg'),
(3, 3, 'Lenovo IdeaCentre AIO 520 22', 'Merek Lenovo', 2, 'Buah', 'Baik', '3.jpg'),
(4, 4, 'Tekiro Kunci L Panjang', 'Panjang 08 mm', 1, 'Buah', 'Baik', '4.jpg'),
(5, 5, 'PC All In One', 'Merk Dell', 3, 'Buah', 'Baik', '5.jpg'),
(6, 6, 'Intense To Last Pen Eyeliner', 'Merek Pixy', 10, 'Set', 'Baik', '6.jpg'),
(7, 7, 'Juki DDL 8100E ', 'Merek Juki', 1, 'Buah', 'Buruk', '7.jpg'),
(8, 8, 'Mesin 3D Printer KS10 V3', 'Merek K10', 1, 'Buah', 'Baik', '8.jpg'),
(9, 9, 'Piring dan Mangkok Melanin', 'Merek Donyku', 10, 'set', 'Baik', '9.jpg'),
(10, 10, 'Distributor', 'Merek COPLEY', 1, 'Buah', 'Baik', '10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(10) NOT NULL,
  `id_prodi` int(10) NOT NULL,
  `nama_lab` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `id_prodi`, `nama_lab`) VALUES
(1, 1, 'LAB 1 ELEKTRONIKA'),
(2, 2, 'LAB 2 LISTRIK'),
(3, 3, 'LAB 2 MULTIMEDIA'),
(4, 4, 'WORKSHOP 1 (BENGKEL)'),
(5, 5, 'WORKSHOP 1 (LAB KOMPUTER)'),
(6, 6, 'LAB KECANTIKAN'),
(7, 7, 'LAB BUSANA ATAS'),
(8, 8, 'LAB BUSANA BAWAH'),
(9, 9, 'LAB PRODUKSI '),
(10, 10, 'LAB HIDANG'),
(11, 11, 'LAB CNC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelaporan`
--

CREATE TABLE `tb_pelaporan` (
  `id_pelaporan` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tgl_lapor` date NOT NULL,
  `kode_aset` int(20) NOT NULL,
  `deskripsi_laporan` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggapan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(10) NOT NULL,
  `nama_prodi` varchar(200) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `fakultas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `password`, `jabatan`) VALUES
(1, 'indah', '123', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_aset`
--
ALTER TABLE `tb_aset`
  ADD PRIMARY KEY (`kode_aset`);

--
-- Indeks untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `tb_pelaporan`
--
ALTER TABLE `tb_pelaporan`
  ADD PRIMARY KEY (`id_pelaporan`);

--
-- Indeks untuk tabel `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_aset`
--
ALTER TABLE `tb_aset`
  MODIFY `kode_aset` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_pelaporan`
--
ALTER TABLE `tb_pelaporan`
  MODIFY `id_pelaporan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
