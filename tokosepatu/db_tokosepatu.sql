-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2023 pada 17.02
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokosepatu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Raihan', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '081329810268', 'achmadraihan327@gmail.com', 'Giwangan, Umbulharjo, Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(6, 'Sepatu Olahraga'),
(7, 'Sepatu Anak'),
(8, 'Sepatu Dewasa'),
(9, 'Flat Shoes'),
(10, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detailpembayaran`
--

CREATE TABLE `tb_detailpembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `jenis_pembayaran` varchar(50) NOT NULL,
  `kode_pembayaran` int(11) NOT NULL,
  `tgl_pembayaran` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_detailpembayaran`
--

INSERT INTO `tb_detailpembayaran` (`id_pembayaran`, `jenis_pembayaran`, `kode_pembayaran`, `tgl_pembayaran`) VALUES
(1, 'other', 0, '0000-00-00 00:00:00'),
(2, '', 16453, '0000-00-00 00:00:00'),
(3, '', 14567, '0000-00-00 00:00:00'),
(4, '', 12345, '0000-00-00 00:00:00'),
(5, 'card', 162461, '0000-00-00 00:00:00'),
(6, 'card', 162461, '0000-00-00 00:00:00'),
(7, 'cash', 12453, '0000-00-00 00:00:00'),
(8, 'card', 12452, '2023-05-20 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `email_pembeli` varchar(50) NOT NULL,
  `telp_pembeli` varchar(20) NOT NULL,
  `address_pembeli` text NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `username_pembeli` varchar(50) NOT NULL,
  `password_pembeli` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`id_pembeli`, `nama_pembeli`, `email_pembeli`, `telp_pembeli`, `address_pembeli`, `kode_pos`, `username_pembeli`, `password_pembeli`) VALUES
(1, 'Mohammad Fadliansyah', 'fadlikeren@gmail.com', '081214567896', 'Jogja', 19289, 'fadli', 202);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `product_status` tinyint(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_desc`, `product_img`, `product_status`, `date_created`) VALUES
(9, 9, 'Flat Nike', 100000, '<p>-nyaman digunakan</p>\r\n\r\n<p>-anti slip</p>\r\n\r\n<p>-berbahan lembut</p>\r\n', 'produk1684285856.jpg', 1, '2023-05-17 01:10:56'),
(10, 8, 'Vans', 500000, '<p>-trend kekinian</p>\r\n\r\n<p>-nyaman dipakai</p>\r\n\r\n<p>-harga terjangkau</p>\r\n\r\n<p>-100% Original</p>\r\n', 'produk1684285928.jpg', 1, '2023-05-17 01:12:08'),
(11, 7, 'Sepatu Anak Viral', 200000, '<p>-nyaman digunakan untuk anak</p>\r\n\r\n<p>-tidak memberikan lecet pada kaki</p>\r\n\r\n<p>-harga terjangku</p>\r\n\r\n<p>-model kekinian</p>\r\n', 'produk1684285997.jpg', 1, '2023-05-17 01:13:17'),
(12, 6, 'Air Jordan', 10000000, '<p>-Nyaman digunakan untuk basket</p>\r\n\r\n<p>-terasa ringan saat digunakan</p>\r\n', 'produk1684286051.jpg', 1, '2023-05-17 01:14:11'),
(13, 9, 'Sepatu Olahraga', 200000, '<p>-</p>\r\n', 'produk1684571141.jpg', 1, '2023-05-20 08:25:41'),
(14, 10, 'sendal selow', 1000000, '', 'produk1684637967.jpg', 1, '2023-05-21 02:59:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tb_detailpembayaran`
--
ALTER TABLE `tb_detailpembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_detailpembayaran`
--
ALTER TABLE `tb_detailpembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
