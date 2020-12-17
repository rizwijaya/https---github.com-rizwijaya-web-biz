-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2020 pada 02.16
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizcar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `id_user`, `date_created`, `data_updated`) VALUES
(1, 1, '2020-10-24 05:00:17', '2020-10-24 05:00:17'),
(2, 9, '2020-11-17 09:24:03', '2020-11-17 09:24:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `grup`
--

CREATE TABLE `grup` (
  `id_grup` int(11) NOT NULL,
  `nama_grup` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `grup`
--

INSERT INTO `grup` (`id_grup`, `nama_grup`, `date_created`, `date_updated`) VALUES
(1, 'admin', '2020-10-22 22:49:31', '2020-10-22 22:49:31'),
(2, 'pegawai', '2020-10-22 22:49:47', '2020-10-22 22:49:47'),
(3, 'pelanggan', '2020-10-22 22:49:47', '2020-10-22 22:49:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `kode_type` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `denda` int(11) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `kilometer` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `anti_lock` int(11) NOT NULL,
  `music_player` int(11) NOT NULL,
  `video_player` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_type`, `merk`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `lokasi`, `denda`, `transmission`, `kilometer`, `ac`, `anti_lock`, `music_player`, `video_player`, `gambar`) VALUES
(6, 'SUV', 'Nissan X Trail', 'AE 4556 RG', 'Merah', '2020', '1', 500000, 'Madiun', 100000, 'Manual', 1100, 0, 0, 0, 0, '9634Nissan X-Trail.jpg'),
(7, 'SUV', 'Toyota Fortuner', 'AD 56778 EY', 'Hitam', '2020', '0', 600000, 'Madiun', 50000, 'Auto', 1250, 0, 0, 0, 0, '7799Toyota Fortuner TRD.jpg'),
(8, 'SUV', 'Xpander Cross Black', 'AE 56778 SD', 'Hitam', '2020', '1', 650000, 'Surabaya', 100000, 'Auto', 900, 0, 0, 0, 0, '2747xpander cross black edition.jpg'),
(10, 'MPV', 'Toyota Cahya', 'AB 2456 ZA', 'Hitam', '2020', '0', 700000, 'Madiun', 50000, 'Manual', 1000, 0, 0, 0, 0, '3739Toyota Calya.jpg'),
(11, 'MPV', 'Daihatsu Sigra', 'AG 2456 AY', 'Putih', '2019', '1', 450000, 'Yogyakarta', 50000, 'Auto', 1200, 1, 0, 0, 0, '9151Daihatsu Sigra.jpg'),
(12, 'SUV', 'Toyota Land Cruiser', 'AB 1145 DA', 'Silver', '2020', '1', 800000, 'Madiun', 100000, 'Manual', 1500, 0, 0, 0, 0, '6658Toyota Land Cruiser.jpg'),
(13, 'HAE', 'Toyota Alphard', 'AG 4526 GG', 'Putih', '2020', '1', 1500000, 'Yogyakarta', 200000, 'Auto', 800, 1, 0, 0, 1, '2374Toyota Alphard.jpg'),
(14, 'WG', 'Nissan Avenir', 'AE 5672 VC', 'Hitam', '2015', '1', 300000, 'Jakarta', 50000, 'Manual', 1500, 0, 0, 0, 0, '4860Nissan Avenir.jpg'),
(15, 'WG', 'Volvo 240 GL', 'AD 6782 ZB', 'Putih', '2017', '1', 450000, 'Surabaya', 100000, 'Manual', 1700, 0, 0, 0, 0, '6856Volvo 240 GL.jpg'),
(16, 'HAE', 'Toyota Hiace 2020', 'AG 1982 ZZ', 'Putih', '2020', '0', 750000, 'Surabaya', 150000, 'Auto', 500, 0, 0, 0, 0, '1828Toyota Hiace 2020.jpg'),
(20, 'MPV', 'Toyota Sienta', 'AG 1233 CV', 'Putih', '2019', '1', 450000, 'Madiun', 75000, 'Auto', 500, 1, 1, 1, 0, '8883Toyota Sienta.jpg'),
(21, 'SPR', 'Aston Marti DB11', 'AE 6722 GC', 'Biru Muda', '2020', '1', 1800000, 'Jakarta', 250000, 'Auto', 700, 1, 1, 1, 1, '7031Aston-Martin-DB11.jpg'),
(22, 'SPR', 'Mercedez AMG GT', 'AE 3329 CD', 'Hitam', '2018', '1', 2500000, 'Madiun', 500000, 'Auto', 300, 1, 1, 1, 1, '1341Mercedes-AMG-GT.jpg'),
(23, 'SDN', 'Nissan GT R', 'AG 3324 ZC', 'Putih', '2020', '1', 2300000, 'Madiun', 450000, 'Auto', 860, 1, 1, 1, 1, '967Nissan-GT-R.jpg'),
(24, 'BUS', 'Mercedez Benz OH516', 'AE 3672 BB', 'Abu-abu', '2020', '1', 6300000, 'Madiun', 750000, 'Auto', 740, 1, 1, 1, 1, '7407Mercedes-Benz OH516.jpg'),
(25, 'BUS', 'Scania K360l1', 'AG 3522 CG', 'Hitam', '2020', '1', 5600000, 'Madiun', 650000, 'Auto', 900, 1, 1, 1, 1, '6270Scania K360I1.jpg'),
(26, 'PCK', 'Daihatsu Grand Max', 'AE 7839 ZB', 'Putih', '2019', '0', 450000, 'Madiun', 75000, 'Auto', 870, 1, 1, 1, 0, '7064Daihatsu_Gran_max_PU.jpg'),
(27, 'PCK', 'Mitsubishi L300', 'AG 3627', 'Hitam', '2019', '1', 400000, 'Madiun', 50000, 'Manual', 950, 1, 1, 1, 0, '7276Mitsubishi_L300_pikap.jpg'),
(28, 'PCK', 'Suzuki Mega Carry', 'AG 3562 FF', 'Putih', '2020', '1', 350000, 'Madiun', 50000, 'Auto', 850, 1, 1, 1, 0, '5539suzuki_mega_carry1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_user`) VALUES
(1, 2),
(2, 8),
(3, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `photo` varchar(250) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_user`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `photo`) VALUES
(8, 12, 'Madiun, Jawa Timur', 'Laki-laki', '085606394242', '352232422221113', '4614team-1.jpg'),
(9, 13, '', '', '', '', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `bukti_bayar` varchar(120) NOT NULL,
  `status_rental` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rental`
--

INSERT INTO `rental` (`id_rental`, `id_pelanggan`, `id_mobil`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `tanggal_pengembalian`, `bukti_bayar`, `status_rental`) VALUES
(7, 8, 16, '2020-12-17', '2020-12-21', '750000', '150000', '0000-00-00', '5336bukti.jpg', '2'),
(8, 8, 6, '2020-12-17', '2020-12-25', '500000', '100000', '2020-12-27', '4736bukti2.jpg', '6'),
(9, 8, 10, '2020-12-18', '2020-12-23', '700000', '50000', '0000-00-00', '', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `status_rental` int(11) NOT NULL,
  `nama_status` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`status_rental`, `nama_status`, `date_created`, `date_updated`) VALUES
(0, 'Belum bayar', '2020-11-21', '2020-11-21'),
(1, 'Menunggu Konfirmasi', '2020-11-21', '2020-11-21'),
(2, 'Pembayaran Dikonfirmasi', '2020-11-21', '2020-11-21'),
(3, 'Pembayaran ditolak', '2020-11-27', '2020-11-27'),
(4, 'Belum diambil', '2020-11-21', '2020-11-21'),
(5, 'Sedang disewa', '2020-11-21', '2020-11-21'),
(6, 'Selesai', '2020-11-21', '2020-11-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(10) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(3, 'SUV', 'Mobil SUV'),
(4, 'MPV', 'Mobil MPV'),
(5, 'WG', 'Mobil Wagon'),
(6, 'SPO', 'Mobil Sport'),
(7, 'OFR', 'Mobil Offroad'),
(9, 'BUS', 'BUS'),
(10, 'TRK', 'Truck'),
(11, 'HAE', 'Mobil Hiace'),
(12, 'SDN', 'Mobil Sedan'),
(13, 'SPR', 'Mobil Sports'),
(14, 'PCK', 'Mobil PickUp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `id_grup` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `id_grup`, `username`, `password`, `nama`, `email`, `date_created`) VALUES
(1, 1, 'admin', '$2y$10$DQ9Lsof.Gp237mMQzUkeGe.fWjMcOZQUtgYgUvTqVltsbzEIU/RuC', 'Rizwijaya', 'admin@gmail.com', '2020-10-24 05:00:17'),
(2, 2, 'pegawai', '$2y$10$DQ9Lsof.Gp237mMQzUkeGe.fWjMcOZQUtgYgUvTqVltsbzEIU/RuC', 'Pegawai 1', 'pegawai@gmail.com', '2020-10-24 05:01:38'),
(8, 2, 'userpegawai', '$2y$10$DQ9Lsof.Gp237mMQzUkeGe.fWjMcOZQUtgYgUvTqVltsbzEIU/RuC', 'Pegawai 2', 'userpegawai@gmail.com', '2020-11-17 09:22:43'),
(9, 1, 'useradmin', '$2y$10$DQ9Lsof.Gp237mMQzUkeGe.fWjMcOZQUtgYgUvTqVltsbzEIU/RuC', 'Admin', 'useradmin@gmail.com', '2020-11-17 09:24:03'),
(12, 3, 'pelanggan', '$2y$10$DQ9Lsof.Gp237mMQzUkeGe.fWjMcOZQUtgYgUvTqVltsbzEIU/RuC', 'Pelanggan 1', 'pelanggan@gmail.com', '2020-12-16 23:49:08'),
(13, 3, 'testpelanggan', '$2y$10$74tKM8fTYCn6Qg69v7Sg1e4VTjFMAg6BU0qtNLaqa244ClJDuoFQa', 'Pelanggan 2', 'testpelanggan@gmail.com', '2020-12-17 01:07:12'),
(14, 2, 'pegawai3', '$2y$10$XBoAeUNhSutU5B8Oo2fohusO0Ul90TMliZR9.Eok1j/s3mSh0iXz6', 'Pegawai 3', 'pegawai3@gmail.com', '2020-12-17 01:14:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `grup`
--
ALTER TABLE `grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_rental`);

--
-- Indeks untuk tabel `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `grup`
--
ALTER TABLE `grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `status_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
