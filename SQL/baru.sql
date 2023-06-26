-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 22 Jun 2023 pada 15.46
-- Versi server: 8.0.30
-- Versi PHP: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `foto_destinasi` varchar(255) NOT NULL,
  `sejarah` longtext NOT NULL,
  `keunggulan` longtext NOT NULL,
  `alamat_destinasi` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama_destinasi`, `foto_destinasi`, `sejarah`, `keunggulan`, `alamat_destinasi`, `harga`, `created_at`, `updated_at`) VALUES
(3, 'Ketapang', 'foto/1686930392alam.jpg', 'mdmd', 'mdmdd', 'mdmdm', 1700000, '2023-06-06 22:41:54', '2023-06-16 08:46:32'),
(8, 'Nusantara', 'foto/1686930465gambar1.jpg', 'Ibu Kota baru', 'Masih Hijau dan Segar', 'Kalimantan', 1570000, '2023-06-16 08:47:45', '2023-06-16 08:47:45'),
(9, 'Jawa Timur', 'foto/1686960206bg.jpg', 'Jawa Timur', 'Salah satu wisata favorit', 'Jawa', 50000, '2023-06-16 17:03:26', '2023-06-16 17:03:50'),
(13, 'Jawa Timur', 'foto/1687158105allah.jpg', 'baru', 'keunggulan', 'alamat', 70000, '2023-06-19 00:01:45', '2023-06-19 00:01:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int NOT NULL,
  `id_destinasi` int NOT NULL,
  `id_user` int NOT NULL,
  `kode_pesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `tanggal_pesanan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_destinasi`, `id_user`, `kode_pesanan`, `status`, `bukti_bayar`, `tanggal_pesanan`, `created_at`, `updated_at`) VALUES
(27, 9, 7, 'PS-230617-955', 'Proses', NULL, '2023-06-21', '2023-06-16 17:01:35', '2023-06-16 17:04:24'),
(33, 13, 9, 'PS-230619-465', 'batal', NULL, '2023-06-21', '2023-06-19 00:02:42', '2023-06-19 00:02:42'),
(36, 13, 12, 'PS-230621-415', 'Proses', NULL, '2023-06-13', '2023-06-21 11:07:49', '2023-06-21 11:07:49'),
(41, 13, 10, 'PS-230621-351', 'Lunas', 'upload/1687371615Bukti_Bayar.pdf', '2023-06-12', '2023-06-21 11:20:15', '2023-06-21 11:20:15'),
(42, 8, 12, 'PS-230622-340', 'Proses', NULL, '2023-06-23', '2023-06-22 03:03:17', '2023-06-22 03:03:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int NOT NULL,
  `id_pesanan` int NOT NULL,
  `foto_testi` varchar(255) NOT NULL,
  `komentar` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `id_pesanan`, `foto_testi`, `komentar`, `created_at`, `updated_at`) VALUES
(7, 41, 'foto/1687371688alam.jpg', 'Tempatnya bagus', '2023-06-21 11:21:28', '2023-06-21 11:21:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `profil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `profil`, `alamat`, `no_hp`, `password`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(7, 'Malik', 'contoh1@gmail.com', 'admin', 'img/1687171470allah.jpg', 'mdmdmdm', '085751111111', '$2y$10$WG3v.UiqUv481NRqZvhTEOJrCLR.EbcQV89A4NRtLO7VklY8BaxGS', NULL, NULL, '2023-06-08 00:56:04', '2023-06-19 03:44:30'),
(8, 'Anggi', 'contoh2@gmail.com', 'admin', NULL, 'kkkk', '08123456789', '$2y$10$Cg4bgALCI61urdyB2khX9.m92Fq82nYcOgBIYWQaQOwz6OGFUvsRq', NULL, NULL, '2023-06-09 00:34:55', '2023-06-09 11:41:56'),
(9, 'User1', 'contoh3@gmail.com', 'user', NULL, 'mmm', '+62000000000000000', '$2y$10$REbeBqZqpsxDH7zZYVUR1.WBWd8mcESTVjy4iqkqr3ttxkaXbgtpa', NULL, NULL, '2023-06-09 00:39:22', '2023-06-09 12:32:41'),
(10, 'User2', 'contoh4@gmail.com', 'user', NULL, 'mmmm', '+62000000000000000', '$2y$10$fzPoO4DQS6GAfCyoCENAK.Ibn8ug84VmiACyejl4LN//tUPa2k2Fa', NULL, NULL, '2023-06-09 01:13:45', '2023-06-09 01:13:45'),
(12, 'admin', 'admin@localhost.com', 'admin', 'img/1687377455Mikro.png', 'mklml', '000000000000', '$2y$10$G8IkPdziT9XGbroITJT23OjxbqsGVZ6JB0Sqznyd4m8XkPVMF5/qu', NULL, NULL, '2023-06-09 01:15:51', '2023-06-21 12:57:35'),
(18, 'Fauzzi', 'contoh5@gmail.com', 'user', NULL, 'Jalan cempaka', NULL, '$2y$10$bLRl2yK9mye0v1tXo1hNJO5CQTLBaDL2L8KVna9LEo0nccttlJ/Um', NULL, NULL, '2023-06-16 20:54:42', '2023-06-16 20:54:42'),
(19, 'User5', 'contoh6@gmail.com', 'user', NULL, 'Jalan Tanpa Nama, Beginci Darat, Hulu Sungai, Kabupaten Ketapang, Kalimantan Barat 78871, Indonesia', NULL, '$2y$10$hHcEL/d0BLUMi2np0bI9YubL3pOQMAMQj87hwTy/nIPy085qERyHy', NULL, NULL, '2023-06-16 20:56:16', '2023-06-16 20:56:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_destinasi` (`id_destinasi`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pesanan` (`id_pesanan`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_destinasi`) REFERENCES `destinasi` (`id`);

--
-- Ketidakleluasaan untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
