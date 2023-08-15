-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2023 pada 14.54
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipbasin-app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_sitaans`
--

CREATE TABLE `barang_sitaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `id_pelaku` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang_sitaans`
--

INSERT INTO `barang_sitaans` (`id`, `no_barang`, `nama_barang`, `jenis_barang`, `deskripsi`, `id_pelaku`, `created_at`, `updated_at`) VALUES
(1, 'BS-20230815-1', 'Pulpen', 'Motor', 'MIGHTY Apparel brand lokal asli serang-banten', 1, '2023-08-14 18:30:30', '2023-08-14 18:30:30');

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
(5, '2023_08_11_165001_create_pelakus_table', 1),
(6, '2023_08_11_165016_create_barang_sitaans_table', 1),
(7, '2023_08_11_165944_create_penyimpanans_table', 1),
(8, '2023_08_11_170017_create_perkaras_table', 1);

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
-- Struktur dari tabel `pelakus`
--

CREATE TABLE `pelakus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama_pelaku` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelakus`
--

INSERT INTO `pelakus` (`id`, `nik`, `nama_pelaku`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '1321213', 'Fariz', 'GSI', '2023-08-14 17:59:03', '2023-08-14 17:59:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyimpanans`
--

CREATE TABLE `penyimpanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `alamat_lokasi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penyimpanans`
--

INSERT INTO `penyimpanans` (`id`, `nama_lokasi`, `alamat_lokasi`, `created_at`, `updated_at`) VALUES
(1, 'Kepolisian', 'Serang', '2023-08-14 18:13:32', '2023-08-14 18:13:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkaras`
--

CREATE TABLE `perkaras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_perkara` varchar(255) NOT NULL,
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `id_penyimpanan` bigint(20) UNSIGNED NOT NULL,
  `tanggal_perkara` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perkaras`
--

INSERT INTO `perkaras` (`id`, `no_perkara`, `id_barang`, `id_penyimpanan`, `tanggal_perkara`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PK-20230815-1', 1, 1, '2023-08-04', 'Waiting', '2023-08-14 19:05:27', '2023-08-14 19:05:27');

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
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'irfan fadillah', 'admin@gmail.com', NULL, '$2y$10$Rt7p1zsOVYLabP2KE5hAfO2OqQU9nRwMPBvMb/USfnkLyhdh8HjS2', 'admin', NULL, '2023-08-14 19:09:28', '2023-08-14 19:13:35'),
(2, 'kasur', 'echa@gmail.com', NULL, '$2y$10$KzGB5yG/Bck.jv434OXO7ez9sryHeGfFesprEnANnnAxyK4evDdTW', 'Admin', NULL, '2023-08-14 19:10:40', '2023-08-14 19:10:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_sitaans`
--
ALTER TABLE `barang_sitaans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barang_sitaans_no_barang_unique` (`no_barang`),
  ADD KEY `barang_sitaans_id_pelaku_foreign` (`id_pelaku`);

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
-- Indeks untuk tabel `pelakus`
--
ALTER TABLE `pelakus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelakus_nik_unique` (`nik`);

--
-- Indeks untuk tabel `penyimpanans`
--
ALTER TABLE `penyimpanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perkaras`
--
ALTER TABLE `perkaras`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perkaras_no_perkara_unique` (`no_perkara`),
  ADD KEY `perkaras_id_barang_foreign` (`id_barang`),
  ADD KEY `perkaras_id_penyimpanan_foreign` (`id_penyimpanan`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang_sitaans`
--
ALTER TABLE `barang_sitaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pelakus`
--
ALTER TABLE `pelakus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penyimpanans`
--
ALTER TABLE `penyimpanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perkaras`
--
ALTER TABLE `perkaras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang_sitaans`
--
ALTER TABLE `barang_sitaans`
  ADD CONSTRAINT `barang_sitaans_id_pelaku_foreign` FOREIGN KEY (`id_pelaku`) REFERENCES `pelakus` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `perkaras`
--
ALTER TABLE `perkaras`
  ADD CONSTRAINT `perkaras_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barang_sitaans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `perkaras_id_penyimpanan_foreign` FOREIGN KEY (`id_penyimpanan`) REFERENCES `penyimpanans` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
