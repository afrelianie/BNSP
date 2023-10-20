-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Okt 2023 pada 00.41
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
-- Database: `ujian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi`
--

CREATE TABLE `destinasi` (
  `id` char(36) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `foto_destinasi` varchar(255) NOT NULL,
  `sejarah` longtext NOT NULL,
  `keunggulan` longtext NOT NULL,
  `alamat_destinasi` varchar(255) NOT NULL,
  `harga` bigint NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama_destinasi`, `foto_destinasi`, `sejarah`, `keunggulan`, `alamat_destinasi`, `harga`, `created_at`, `updated_at`) VALUES
('99b42917-59c7-4988-a487-ae1027648624', 'Pantai Batu Karas', 'foto/1697675164nikah1.jpg', 'Paket Pernikahan (Foto, Make Up, Busana, dan pembokingan tempat)', 'Mengunjungi Pangandaran, wisatawan bisa menikmati keindahan pantai sambil berenang, surfing, ataupun wisata kuliner di Pantai Batu Karas. Pantai ini terbilang masih cukup sepi, sehingga nyaman untuk dikunjungi.', 'Batukaras, Cijulang, Kabupaten Ciamis, Jawa Barat.', 500000, '2023-07-21 18:50:25', '2023-10-18 17:26:04'),
('99b42c35-81a0-4942-83cb-c72ede639505', 'Taman Bucin', 'foto/1697675295nikah4.jpg', 'Paket Tempat, Busana, Undangan, Alat dll', 'Dengan kapasitas kurang lebih 3.000 orang, kompleks utamanya memiliki luas 900 m². Fungsi situs ini sebelum menjadi tempat prewedding, yang bagus dan cukup luas.', 'Kp. Gunung Padang RT. 01 RW. 08 Ds. Karya Mukti Kec. Campaka.', 700000, '2023-07-21 18:59:08', '2023-10-18 17:28:15'),
('99b42de7-0598-4ede-b2a1-6e8a9269982e', 'Taman Harapan', 'foto/1697675537t1.jpg', 'Paket Lengkap', 'Tempat Pernikahan Paling Luas dan Indah', 'Sukadana, Ketapang Kalimantan Barat', 1500000, '2023-07-21 19:03:52', '2023-10-18 17:32:17'),
('99b42feb-6545-44eb-8f2a-295c48fedeff', 'Hutan Kota', 'foto/1697675362nikah3.jpg', 'Paket Tempat, Busana, Undangan, Alat dll', 'Kebanyakan pengantin ingin memperoleh udara segar dan dinginnya air di pagi hari, atau mengabadikan momen berfoto saat cahaya matahari sampai pada kemiringan yang sempurna dan menembus aliran sungai.', 'Desa Sukasari Kaler, Kecamatan Argapura,.', 1200000, '2023-07-21 19:09:31', '2023-10-18 17:29:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` char(36) NOT NULL,
  `id_destinasi` char(36) NOT NULL,
  `id_user` char(36) NOT NULL,
  `kode_pesanan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `qty` int NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `bukti_bayar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `total_harga` bigint NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_destinasi`, `id_user`, `kode_pesanan`, `status`, `qty`, `tanggal_pesanan`, `bukti_bayar`, `total_harga`, `created_at`, `updated_at`) VALUES
('99c3c3a9-180b-41fc-b012-3701d7699aea', '99b42c35-81a0-4942-83cb-c72ede639505', '99bf6311-7064-481b-8b48-a6a948e8d435', 'PS-230729-682', 'Selesai', 5, '2023-08-05', 'upload/1690660803Bukti_Bayar.pdf', 50000, '2023-07-29 13:00:03', '2023-07-29 23:07:11'),
('99c3c7b3-6df1-429f-8635-e752ea91ccd3', '99b42feb-6545-44eb-8f2a-295c48fedeff', '99bf75d4-d3de-40cb-a9e3-1d0ce810d0d6', 'PS-230729-633', 'Batal', 2, '2023-08-10', NULL, 24000, '2023-07-29 13:11:20', '2023-07-29 13:11:20'),
('99c4d19e-54e4-4029-a3e7-246a818652d3', '99b42feb-6545-44eb-8f2a-295c48fedeff', '99bf6311-7064-481b-8b48-a6a948e8d435', 'PS-230730-356', 'Proses', 3, '2023-09-07', NULL, 36000, '2023-07-30 01:34:54', '2023-07-30 01:34:54'),
('99dacd11-2712-411c-9c48-df6ff43b77fe', '99b42feb-6545-44eb-8f2a-295c48fedeff', '99bf6311-7064-481b-8b48-a6a948e8d435', 'PS-230810-100', 'Selesai', 3, '2023-08-21', 'upload/1691650223Laporan TA Anggita Finis.pdf', 36000, '2023-08-09 23:50:23', '2023-08-09 23:51:37'),
('99e3beff-3565-4956-a4ad-8cf3ffefb677', '99b42917-59c7-4988-a487-ae1027648624', '99bf75d4-d3de-40cb-a9e3-1d0ce810d0d6', 'PS-230729-712', 'Bayar', 5, '2023-08-05', 'upload/1692034409Piagam.pdf', 50000, '2023-08-14 10:33:30', '2023-08-14 10:33:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `image`, `content`, `created_at`, `updated_at`) VALUES
(25, 'Pernikahan Dini', 'public/uploads/1697702758nikah1.jpg', 'mm', '2023-10-19 01:05:58', '2023-10-19 01:05:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_user` char(36) NOT NULL,
  `id_destinasi` char(36) NOT NULL,
  `id_pesanan` char(36) NOT NULL,
  `komentar` longtext NOT NULL,
  `foto_testi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `id_user`, `id_destinasi`, `id_pesanan`, `komentar`, `foto_testi`, `created_at`, `updated_at`) VALUES
('99c4c34c-b218-486e-95f3-95d46af50f2a', '99bf6311-7064-481b-8b48-a6a948e8d435', '99b42c35-81a0-4942-83cb-c72ede639505', '99c3c3a9-180b-41fc-b012-3701d7699aea', 'Pemandangan Bagus, Indah dan bersih', 'foto/1690703692alam.jpg', '2023-07-30 00:54:52', '2023-07-30 00:54:52'),
('99dacdfd-771e-47d2-b961-5793d1ad255c', '99bf6311-7064-481b-8b48-a6a948e8d435', '99b42feb-6545-44eb-8f2a-295c48fedeff', '99dacd11-2712-411c-9c48-df6ff43b77fe', 'Pemandangan Bagus, Indah dan bersih', 'foto/1691650378alam.jpg', '2023-08-09 23:52:58', '2023-08-09 23:52:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `profil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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
('99b1c9c5-1c4c-480d-88c0-a55ebe0d7528', 'Admin', 'admin@localhost.com', 'admin', NULL, 'Jl. Kucing', '1234567', '$2y$10$3gsztrg3t4BOM4B0UxkS/.yfaqEn9xb3IfPS.QKWcXpuHA.BBcQrC', NULL, NULL, '2023-07-20 14:32:14', '2023-07-20 14:38:33'),
('99bf6311-7064-481b-8b48-a6a948e8d435', 'Malik', 'contoh1@gmail.com', 'user', 'img/1690704997neko1.jpg', 'Jl. Jawara', '08123456789', '$2y$10$8S4atXzUw6ARITw6qSHX1uSnAhE4RwhomggsFqzQaf4BD8EvX.Tei', NULL, NULL, '2023-07-27 08:46:38', '2023-07-30 01:16:37'),
('99bf6413-bc26-42d9-9f60-81f40b9fd88b', 'Fauzzi', 'contoh2@gmail.com', 'user', 'img/1690475175kecil.png', 'Jl. Fuji', '12345678', '$2y$10$ma0S7DvVGLwAJqJWqU7HSOXorXvrnAD.nRRmFZo6yOnJMin126Z7G', NULL, NULL, '2023-07-27 08:49:28', '2023-07-27 09:36:06'),
('99bf7566-29d8-4bf8-aba4-4f3e2fe733ad', 'Dandi', 'contoh3@gmail.com', 'user', NULL, 'Jl. Restu', '085750110070', '$2y$10$my3cVqbafaDRn6A0WMyijuNTz6bM2/i4qyzawBb1ioBdx7gjTCxQ.', NULL, NULL, '2023-07-27 09:37:54', '2023-07-27 09:37:54'),
('99bf75d4-d3de-40cb-a9e3-1d0ce810d0d6', 'Asyy', 'contoh4@gmail.com', 'user', NULL, 'Jl. Ibunda', '081200000012', '$2y$10$YXForQ9zLPXbGeHGnGa5JuI7nfhbj4ibkYojThtK1GQJVlWifNyWq', NULL, NULL, '2023-07-27 09:39:06', '2023-07-27 09:39:06');

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
-- Indeks untuk tabel `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
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
-- AUTO_INCREMENT untuk tabel `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
