-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2024 pada 03.52
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myiventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barangs`
--

CREATE TABLE `data_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `data_ruangan_id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `merk_barang` varchar(255) DEFAULT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `satuan_barang` varchar(255) NOT NULL,
  `foto_barang` varchar(255) DEFAULT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `kondisi_barang` varchar(255) NOT NULL,
  `status_barang` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_barangs`
--

INSERT INTO `data_barangs` (`id`, `kode_barang`, `data_ruangan_id`, `nama_barang`, `merk_barang`, `jenis_barang`, `satuan_barang`, `foto_barang`, `jumlah_barang`, `kondisi_barang`, `status_barang`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '1234567', 1, 'Komputer', 'Acer', 'Elektronik', 'Pcs', 'zo2tPBeNBMQTb0W1izz2NasBtLxxcBR5qXD6IC19.jpg', 10, 'Baik', 'Tesedia', 'Komputer Acer memiliki spesifikasi dengan ram 8gb dan penyimpanan internal 500Gb dilengkapi juga dengan mouse dan keyboard sebagai pelengkap.', '2024-08-14 02:18:27', '2024-08-15 18:48:15'),
(2, '782427', 2, 'Raket', 'Yonex', 'Alat olahraga', 'Pcs', '6V2NHG5tJtayBB3EihFxOEJaUdBplyvegzBXXBgi.jpg', 2, 'Bagus', 'Tersedia', 'Raket Yonex memiliki ketahanan yang lebih dibandingkan raket lainnya, raket juga menjadi alat wajib ketika melakukan olahraga bulutangkis', '2024-08-14 02:20:52', '2024-08-15 06:44:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peminjaman`
--

CREATE TABLE `data_peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `kode_barang` bigint(20) UNSIGNED NOT NULL,
  `kode_ruangan` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_peminjaman`
--

INSERT INTO `data_peminjaman` (`id`, `tgl_peminjaman`, `tgl_pengembalian`, `nama_peminjam`, `kode_barang`, `kode_ruangan`, `jumlah`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(24, '2024-08-16', '2024-08-16', '1', 1, 1, 1, 'Dikembalikan', '2024-08-15 18:40:09', '2024-08-15 18:48:15', '2024-08-15 18:48:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ruangans`
--

CREATE TABLE `data_ruangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_ruangan` varchar(255) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL,
  `kondisi_ruangan` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_ruangans`
--

INSERT INTO `data_ruangans` (`id`, `kode_ruangan`, `nama_ruangan`, `kondisi_ruangan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'G2021', 'Kurikulum 3', 'Tersedia', 'Ruangan Kurikulum 3 ini biasa digunakan untuk praktikum mahasiswa untuk mata kuliah pemrograman web.', '2024-08-14 02:14:33', '2024-08-14 02:14:33'),
(2, 'G2022', 'Ruangan Olahraga 1', 'Tersedia', 'Ruangan Olahraga ini biasa digunakan untuk aktifitas mahasiswa berolahraga dan melakukan kesenian.', '2024-08-14 02:15:35', '2024-08-14 23:16:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_14_005812_create_data_ruangans_table', 1),
(6, '2024_08_14_030646_create_data_barangs_table', 1),
(7, '2024_08_14_060558_create_pengadaans_table', 1),
(8, '2024_08_14_073703_create_data_peminjaman_table', 1),
(9, '2024_08_14_232600_add_deleted_at_to_data_peminjaman_table', 2),
(10, '2024_08_15_090407_add_profile_picture_to_users_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengadaans`
--

CREATE TABLE `pengadaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_penerimaan` date NOT NULL,
  `kode_barang` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_picture`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '2024-08-14 02:13:20', 0, '$2y$10$qK651b7NtTQ4YTYBQQHfbu4DkqwzVOLwgtEIBlORLED/v1tunLbBm', NULL, '2024-08-14 02:13:20', '2024-08-15 02:52:48', 'public/profile_pictures/jBdWfrpt0qGve2Sc3blxF5RrR8rTEWk8IEiwJeHo.jpg'),
(3, 'kaka', 'kaka', 'kaka@gmail.com', NULL, 0, '$2y$10$jTTNsLHklA31WDnmPM42QeEXJ8cxRdLUYf0Ksz6UD2h21jnSelya6', NULL, '2024-08-15 03:20:32', '2024-08-15 17:32:43', 'public/profile_pictures/FT63sf05PAdtkNwrvg36ypWrpqILCzVKz7bvN0HZ.png'),
(4, 'kiki', 'kiki', 'kiki@gmail.com', NULL, 0, '$2y$10$VLlat/aJObbT14JHXFQmleEMI6Yln0I3yBb3w3BflgQiylFv2GJ0a', NULL, '2024-08-15 03:40:25', '2024-08-15 17:34:44', 'public/profile_pictures/gVeHPW3EZAUUFcHiahjuDAgh0SPyQQBnSXFySB5J.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barangs`
--
ALTER TABLE `data_barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_barangs_kode_barang_unique` (`kode_barang`),
  ADD KEY `data_barangs_data_ruangan_id_foreign` (`data_ruangan_id`);

--
-- Indeks untuk tabel `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_peminjaman_kode_barang_foreign` (`kode_barang`),
  ADD KEY `data_peminjaman_kode_ruangan_foreign` (`kode_ruangan`);

--
-- Indeks untuk tabel `data_ruangans`
--
ALTER TABLE `data_ruangans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_ruangans_kode_ruangan_unique` (`kode_ruangan`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pengadaans`
--
ALTER TABLE `pengadaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengadaans_kode_barang_foreign` (`kode_barang`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_barangs`
--
ALTER TABLE `data_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `data_ruangans`
--
ALTER TABLE `data_ruangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengadaans`
--
ALTER TABLE `pengadaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_barangs`
--
ALTER TABLE `data_barangs`
  ADD CONSTRAINT `data_barangs_data_ruangan_id_foreign` FOREIGN KEY (`data_ruangan_id`) REFERENCES `data_ruangans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  ADD CONSTRAINT `data_peminjaman_kode_barang_foreign` FOREIGN KEY (`kode_barang`) REFERENCES `data_barangs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_peminjaman_kode_ruangan_foreign` FOREIGN KEY (`kode_ruangan`) REFERENCES `data_ruangans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengadaans`
--
ALTER TABLE `pengadaans`
  ADD CONSTRAINT `pengadaans_kode_barang_foreign` FOREIGN KEY (`kode_barang`) REFERENCES `data_barangs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
