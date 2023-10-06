-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2023 pada 14.05
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kel03_shiplog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'adminshiplog@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_kapallogistik`
--

CREATE TABLE `tiket_kapallogistik` (
  `id_schedule` int(11) NOT NULL,
  `name_ship` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `route` varchar(100) NOT NULL,
  `date_dep` date NOT NULL,
  `time_dep` time NOT NULL,
  `date_dest` date NOT NULL,
  `time_dest` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket_kapallogistik`
--

INSERT INTO `tiket_kapallogistik` (`id_schedule`, `name_ship`, `class`, `type`, `quantity`, `price`, `route`, `date_dep`, `time_dep`, `date_dest`, `time_dest`) VALUES
(1, 'Sangiang', 'Reguler', 'Kendaraan', 10, 45000, 'Pel. Tanjung Priok, Jakarta', '2023-02-06', '17:00:00', '2023-02-08', '23:30:00'),
(2, 'Labobar', 'Eksklusif', 'Kendaraan', 10, 50000, 'Pel. Tanjung Priok, Jakarta', '2023-02-06', '08:30:00', '2023-02-08', '19:30:00'),
(3, 'Sinabung', 'Reguler', 'Kendaraan', 10, 40000, 'Pel. Gilimanuk, Bali', '2023-02-06', '17:00:00', '2023-02-07', '15:00:00'),
(4, 'Sangiang', 'Ekslusif', 'Kendaraan', 10, 75000, 'Pel. Gilimanuk, Bali', '2023-02-06', '12:30:00', '2023-02-07', '10:00:00'),
(5, 'Tatamailau', 'Reguler', 'Barang', 10, 20000, 'Pel. Tanjung Priok, Jakarta', '2023-02-06', '08:00:00', '2023-02-08', '08:30:00'),
(6, 'Labobar', 'Ekslusif', 'Barang', 10, 40000, 'Pel. Tanjung Priok, Jakarta', '2023-02-06', '16:00:00', '2023-02-08', '02:00:00'),
(7, 'Sangiang', 'Reguler', 'Barang', 10, 20000, 'Pel. Gilimanuk, Bali', '2023-02-06', '14:30:00', '2023-02-07', '01:00:00'),
(8, 'Bitung', 'Ekslusif', 'Barang', 10, 45000, 'Pel. Gilimanuk, Bali', '2023-02-06', '20:00:00', '2023-02-07', '05:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_kapaltransportasi`
--

CREATE TABLE `tiket_kapaltransportasi` (
  `id_schedule` int(11) NOT NULL,
  `name_ship` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` float NOT NULL,
  `route` varchar(100) NOT NULL,
  `date_dep` date NOT NULL,
  `time_dep` time NOT NULL,
  `date_dest` date NOT NULL,
  `time_dest` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket_kapaltransportasi`
--

INSERT INTO `tiket_kapaltransportasi` (`id_schedule`, `name_ship`, `class`, `capacity`, `price`, `route`, `date_dep`, `time_dep`, `date_dest`, `time_dest`) VALUES
(1, 'Nggapulu', 'Ekonomi', 50, 25000, 'Pel. Kamal, Madura', '2023-02-06', '08:00:00', '2023-02-06', '09:30:00'),
(2, 'Dobonsolo', 'Ekonomi', 50, 20000, 'Pel. Kamal, Madura', '2023-02-06', '08:30:00', '2023-02-06', '10:00:00'),
(3, 'Sinabung', 'Ekonomi', 50, 25000, 'Pel. Kamal, Madura', '2023-02-06', '18:00:00', '2023-02-07', '19:30:00'),
(4, 'Nggapulu', 'Ekonomi', 50, 100000, 'Pel. Tanjung Priok, Jakarta', '2023-02-06', '09:00:00', '2023-02-08', '15:00:00'),
(5, 'Ciremai', 'Ekonomi', 50, 120000, 'Pel. Tanjung Priok, Jakarta', '2023-02-06', '05:00:00', '2023-02-08', '14:00:00'),
(6, 'Tidar', 'Eksekutif', 50, 45000, 'Pel. Kamal, Madura', '2023-02-06', '07:00:00', '2023-02-06', '08:30:00'),
(7, 'Labobar', 'Eksekutif', 50, 50000, 'Pel. Kamal, Madura', '2023-02-06', '18:00:00', '2023-02-06', '19:30:00'),
(8, 'Umsini', 'Eksekutif', 50, 50000, 'Pel. Kamal, Madura', '2023-02-06', '10:00:00', '2023-02-06', '11:30:00'),
(9, 'Ciremai', 'Eksekutif', 50, 200000, 'Pel. Tanjung Priok, Jakarta', '2023-02-06', '17:00:00', '2023-02-07', '23:30:00'),
(10, 'Bukit Raya', 'Eksekutif', 50, 240000, 'Pel. Tanjung Priok, Jakarta', '2023-02-06', '12:30:00', '2023-02-07', '21:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_logistik`
--

CREATE TABLE `transaksi_logistik` (
  `id_transaksi` int(11) NOT NULL,
  `total` float DEFAULT NULL,
  `id_schedule` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_transportasi`
--

CREATE TABLE `transaksi_transportasi` (
  `id_transaksi` int(11) NOT NULL,
  `total` float DEFAULT NULL,
  `id_schedule` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `phone`, `password`, `c_password`, `photo`) VALUES
(2, 'rahayu nur rochmah', 'ayu@gmail.com', '08127485959', 'ayu', '', ''),
(3, 'natasya amelia', 'natasya@gmail.com', '081738394748', '54441c4a71791c1636efc9fb991b07e5', 'natasya', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tiket_kapallogistik`
--
ALTER TABLE `tiket_kapallogistik`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indeks untuk tabel `tiket_kapaltransportasi`
--
ALTER TABLE `tiket_kapaltransportasi`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indeks untuk tabel `transaksi_logistik`
--
ALTER TABLE `transaksi_logistik`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_schedule` (`id_schedule`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `transaksi_transportasi`
--
ALTER TABLE `transaksi_transportasi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_schedule` (`id_schedule`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tiket_kapallogistik`
--
ALTER TABLE `tiket_kapallogistik`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tiket_kapaltransportasi`
--
ALTER TABLE `tiket_kapaltransportasi`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi_logistik`
--
ALTER TABLE `transaksi_logistik`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_transportasi`
--
ALTER TABLE `transaksi_transportasi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi_logistik`
--
ALTER TABLE `transaksi_logistik`
  ADD CONSTRAINT `transaksi_logistik_ibfk_1` FOREIGN KEY (`id_schedule`) REFERENCES `tiket_kapallogistik` (`id_schedule`),
  ADD CONSTRAINT `transaksi_logistik_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `transaksi_transportasi`
--
ALTER TABLE `transaksi_transportasi`
  ADD CONSTRAINT `transaksi_transportasi_ibfk_1` FOREIGN KEY (`id_schedule`) REFERENCES `tiket_kapaltransportasi` (`id_schedule`),
  ADD CONSTRAINT `transaksi_transportasi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
