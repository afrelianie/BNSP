-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2023 pada 11.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_compro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int(11) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `foto_destinasi` varchar(255) NOT NULL,
  `sejarah` longtext NOT NULL,
  `keunggulan` longtext NOT NULL,
  `alamat_destinasi` varchar(255) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama_destinasi`, `foto_destinasi`, `sejarah`, `keunggulan`, `alamat_destinasi`, `create_at`, `update_at`) VALUES
(1, 'Jawa Timur Park 1', 'jatimpark1.jpg', 'Jatim Park 1 adalah salah satu taman rekreasi yang terletak di Kota Batu, Jawa Timur, Indonesia. Jatim Park 1 didirikan pada tanggal 16 Juli 2002 oleh Bapak Ir. Soekarwo, yang saat itu menjabat sebagai Bupati Malang. Taman rekreasi ini didirikan dengan tujuan untuk memberikan hiburan dan edukasi kepada masyarakat, terutama anak-anak dan keluarga. Seiring berjalannya waktu, Jatim Park 1 mengalami berbagai pengembangan dan penambahan atraksi. Berbagai wahana dan fasilitas ditambahkan untuk memberikan pengalaman yang lebih menarik bagi pengunjung. Taman rekreasi ini juga terus meningkatkan kualitas layanan dan fasilitasnya. Taman rekreasi ini juga telah meraih berbagai penghargaan dan sertifikat, seperti \"The Best Tourism Object\" dari Pemerintah Provinsi Jawa Timur.\r\n\r\n', 'Keunggulan Jatim Park 1 yaitu mengusung konsep edukasi dan rekreasi, menawarkan beragam atraksi yang dapat dinikmati oleh pengunjung dari segala usia dan taman rekreasi ini dikelilingi oleh lingkungan alam yang indah. Dengan pepohonan hijau dan pemandangan alam yang menawan, Jatim Park 1 menciptakan atmosfer yang menyegarkan dan nyaman bagi pengunjung.\r\n', 'Jl. Kartika No.2, Kota Wisata Batu, Ngaglik, Batu, Jawa Timur, Indonesia.\r\n\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `kode_pesanan` varchar(255) NOT NULL,
  `tanggal_pesanan` datetime NOT NULL,
  `harga` double NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `alamat`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Malik', 'admin', 'admin@gmail.com', 'Jl.Sepakat', '1212', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
