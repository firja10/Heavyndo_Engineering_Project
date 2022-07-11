-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2022 pada 04.38
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heavyndo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitas_projeks`
--

CREATE TABLE `aktivitas_projeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_aktivitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_projek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_notifikasi` int(11) DEFAULT NULL,
  `penanggung_jawab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentase_progress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_awal` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `durasi_aktivitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_aktivitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_aktivitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_projek_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aktivitas_projeks`
--

INSERT INTO `aktivitas_projeks` (`id`, `nama_aktivitas`, `nama_projek`, `status_notifikasi`, `penanggung_jawab`, `persentase_progress`, `tanggal_awal`, `tanggal_akhir`, `durasi_aktivitas`, `status_aktivitas`, `foto_aktivitas`, `created_at`, `updated_at`, `jenis_projek_id`) VALUES
(3, 'Kerja', NULL, NULL, NULL, '85', '2022-05-03', '2022-05-27', '24', 'on_going', 'Screenshot (1976).png', '2022-05-21 02:09:01', '2022-06-01 22:05:16', 1),
(4, 'Ngulay 2', NULL, NULL, 'Andre Jibral R', NULL, '2022-05-01', '2022-05-07', '6', 'finished', 'Screenshot (1991).png', '2022-05-21 02:10:26', '2022-05-21 02:10:26', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis__projeks`
--

CREATE TABLE `jenis__projeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_projek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `durasi_projek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_projek` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_projek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_projek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anggaran_projek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis__projeks`
--

INSERT INTO `jenis__projeks` (`id`, `nama_projek`, `durasi_projek`, `deskripsi_projek`, `status_projek`, `gambar_projek`, `anggaran_projek`, `created_at`, `updated_at`) VALUES
(1, 'Projek 1', '10 tahun', 'Lorem Ipsum', 'on_going', 'abaranger.jpg', '150000', '2022-05-12 23:41:37', '2022-07-07 05:25:16'),
(2, 'Projek 3', '20 tahun', 'Hallo', 'on_going', 'Screenshot (1977).png', '200000', '2022-05-19 06:19:12', '2022-05-21 00:07:35'),
(4, 'Projek 2', '10 tahun', NULL, 'finished', 'fai.png', '3000000', '2022-05-19 07:21:31', '2022-07-07 05:25:25'),
(5, 'Uni Soviet', '70 tahun', NULL, 'on_going', 'mesin-hammer.png', '1500000', '2022-06-18 17:45:15', '2022-07-07 19:41:57'),
(6, 'Projek 4', '10 tahun', NULL, 'on_going', 'fai.png', '20000', '2022-06-21 06:14:41', '2022-06-21 06:14:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_messages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `isi_messages` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_messages` date DEFAULT NULL,
  `nama_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_05_09_093315_create_jenis__projeks_table', 1),
(6, '2022_05_19_154442_add_description_to_jenis__projeks', 2),
(7, '2022_05_19_155838_create_aktivitas_projeks_table', 3),
(8, '2022_05_19_161447_add_fk_to_aktivitas_projeks', 4),
(9, '2022_05_21_071437_add_nama_projek_to_aktivitas_projeks', 5),
(10, '2022_05_21_090238_add_pj_to_aktivitas_projeks', 6),
(11, '2022_06_02_020422_add_persentase_to_aktivitas_projeks', 7),
(12, '2022_06_02_042329_create_notifikasis_table', 8),
(13, '2022_06_02_050001_add_fk_to_notifikasis', 9),
(14, '2022_06_02_052301_add_status_notif_to_aktivitas_projeks', 9),
(15, '2022_06_19_013736_add_status_to_notifikasis', 10),
(16, '0000_00_00_000000_create_websockets_statistics_entries_table', 11),
(17, '2022_07_01_155948_create_messages_table', 12),
(18, '2022_07_01_160617_add_fk_to_messages', 12),
(19, '2022_07_09_123419_add_user_id_to_notifikasis', 13),
(20, '2022_07_10_020659_add_message_to_messages', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasis`
--

CREATE TABLE `notifikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_notifikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktivitas_projek_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pengirim_notifikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_notifikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_aktivitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_notifikasi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_notifikasi` date DEFAULT NULL,
  `tanggal_akhir_aktivitas` date DEFAULT NULL,
  `tanggal_awal_aktivitas` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `notifikasis`
--

INSERT INTO `notifikasis` (`id`, `nama_notifikasi`, `user_id`, `status`, `aktivitas_projek_id`, `pengirim_notifikasi`, `icon_notifikasi`, `nama_aktivitas`, `deskripsi_notifikasi`, `tanggal_notifikasi`, `tanggal_akhir_aktivitas`, `tanggal_awal_aktivitas`, `created_at`, `updated_at`) VALUES
(6, 'H - 7 Deadline Aktivitas Kerja', NULL, '1', 3, NULL, 'fai.png', 'Kerja', 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa Aktivitas H - 7 Deadline Aktivitas Kerja harus sudah selesai H - 7 atau  7 Hari Lagi. Diharapkan untuk segera diselesaikan. Terima kasih', '2022-06-03', '2022-05-27', '2022-05-03', '2022-06-02 18:04:54', '2022-06-21 06:13:51'),
(7, 'H - 7 Deadline Aktivitas Kerja', NULL, '1', 3, NULL, 'fai.png', 'Kerja', 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa Aktivitas H - 7 Deadline Aktivitas Kerja harus sudah selesai H - 7 atau  7 Hari Lagi. Diharapkan untuk segera diselesaikan. Terima kasih', '2022-06-03', '2022-05-27', '2022-05-03', '2022-06-02 18:15:39', '2022-06-18 22:14:25'),
(8, 'H - 5 Deadline Aktivitas Ngulay 2', NULL, '1', 4, 'Tsubasa', 'fai.png', 'Ngulay 2', 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa Aktivitas H - 5 Deadline Aktivitas Ngulay 2 harus sudah selesai H - 5 atau  5 Hari Lagi. Diharapkan untuk segera diselesaikan. Terima kasih', '2022-06-12', '2022-05-07', '2022-05-01', '2022-06-12 00:44:31', '2022-06-20 07:13:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `is_user` int(11) DEFAULT NULL,
  `is_manager` int(11) DEFAULT NULL,
  `is_supervisor` int(11) DEFAULT NULL,
  `gambar_profil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `is_user`, `is_manager`, `is_supervisor`, `gambar_profil`, `jabatan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fairuz Firjatullah', 'fairuzfirjatullah3@gmail.com', NULL, '$2y$10$xEsowqRIp4Hbnk8Wkjl5Qe08qCnBj9h290JDkNk/UcPi66MUkI0.y', 1, NULL, NULL, NULL, 'fai.png', NULL, NULL, '2022-05-09 04:36:40', '2022-05-21 00:01:59'),
(3, 'Andreal Iniesta', 'kmtctasik@gmail.com', NULL, '$2y$10$Q2Q0UJxbBysnBQhojwTkXuYbmrYa8qetup1MmsgU0RkS/LbuLWknS', NULL, NULL, 1, NULL, 'workshop.png', NULL, NULL, '2022-05-11 08:10:54', '2022-05-25 22:43:41'),
(4, 'Andre Jibral', '2513181056.unjani@gmail.com', NULL, '$2a$12$l//R00traKpCBc9EfVGy7egI6queVDxeEVNdews3QC0lGOkwCuTBG', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-18 06:14:54', '2022-05-18 06:14:54'),
(5, 'Ibu Hermita', 'jibral.oasi@gmail.com', NULL, '$2a$12$l//R00traKpCBc9EfVGy7egI6queVDxeEVNdews3QC0lGOkwCuTBG', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2022-05-18 07:15:32', '2022-05-18 07:15:32'),
(6, 'PT.Heavyndo', 'andrejibralrielando30@gmail.com', NULL, '$2a$12$l//R00traKpCBc9EfVGy7egI6queVDxeEVNdews3QC0lGOkwCuTBG', NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-05-18 07:27:38', '2022-05-18 07:27:38'),
(9, 'Zulfikar', 'fairuzf1010@gmail.com', NULL, '$2y$10$TeeoKNFRIz4BgQ4Pc2529OYS2U.FS9a1R8vypMQF.XPp5iWpg29xG', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2022-05-19 06:21:24', '2022-05-19 06:21:24'),
(10, 'Tsubasa', 'seiryuu80@yahoo.com', NULL, '$2y$10$okbEKta8pZCsTRPElT9/MeSrvpznYtu/y8U/3VOsGhVhB8CtLTIRa', 1, NULL, NULL, NULL, 'fai.png', NULL, NULL, '2022-05-19 07:34:58', '2022-05-19 07:34:58'),
(11, 'Matoi', 'dte07111840000121@gmail.com', NULL, '$2y$10$NjbXswkIrT0663sJ6WklBuvQ4hG2WfRcFzhLTAfftB/c44/b8/5yC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-15 18:57:17', '2022-06-15 18:57:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aktivitas_projeks`
--
ALTER TABLE `aktivitas_projeks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aktivitas_projeks_jenis_projek_id_foreign` (`jenis_projek_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jenis__projeks`
--
ALTER TABLE `jenis__projeks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifikasis`
--
ALTER TABLE `notifikasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifikasis_aktivitas_projek_id_foreign` (`aktivitas_projek_id`),
  ADD KEY `notifikasis_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indeks untuk tabel `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aktivitas_projeks`
--
ALTER TABLE `aktivitas_projeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis__projeks`
--
ALTER TABLE `jenis__projeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `notifikasis`
--
ALTER TABLE `notifikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aktivitas_projeks`
--
ALTER TABLE `aktivitas_projeks`
  ADD CONSTRAINT `aktivitas_projeks_jenis_projek_id_foreign` FOREIGN KEY (`jenis_projek_id`) REFERENCES `jenis__projeks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `notifikasis`
--
ALTER TABLE `notifikasis`
  ADD CONSTRAINT `notifikasis_aktivitas_projek_id_foreign` FOREIGN KEY (`aktivitas_projek_id`) REFERENCES `aktivitas_projeks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifikasis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
