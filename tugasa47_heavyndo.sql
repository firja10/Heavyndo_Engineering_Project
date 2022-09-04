-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 04 Sep 2022 pada 10.38
-- Versi server: 10.3.35-MariaDB-cll-lve
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasa47_heavyndo`
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
  `jenis_projek_id` bigint(20) UNSIGNED DEFAULT NULL,
  `urgensitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aktivitas_projeks`
--

INSERT INTO `aktivitas_projeks` (`id`, `nama_aktivitas`, `nama_projek`, `status_notifikasi`, `penanggung_jawab`, `persentase_progress`, `tanggal_awal`, `tanggal_akhir`, `durasi_aktivitas`, `status_aktivitas`, `foto_aktivitas`, `created_at`, `updated_at`, `jenis_projek_id`, `urgensitas`) VALUES
(13, 'Permintaan harga dan Penawaran harga dari Customer', NULL, NULL, 'Departemen Marketing', '100', '2023-01-01', '2023-01-04', '3', 'on_going', 'Screenshot (1976).png', '2022-07-11 18:53:48', '2022-08-12 07:04:42', 7, NULL),
(14, 'Klasifikasi Teknik dan Negosiasi', NULL, NULL, 'Departemen Marketing', '100', '2021-07-16', '2021-07-18', '2', 'on_going', 'Screenshot 2022-07-08 223803.png', '2022-07-12 18:58:04', '2022-09-02 08:07:53', 7, 'Ya'),
(15, 'Purchase Order dari konsumen', NULL, NULL, 'Departemen Purchasing', '100', '2021-07-18', '2021-07-20', '2', 'finished', 'Screenshot 2022-07-08 223803.png', '2022-07-12 18:59:14', '2022-08-11 21:18:08', 7, NULL),
(16, 'Pembelian Material', NULL, NULL, 'Departemen Purchasing', '100', '2021-07-20', '2021-07-21', '1', 'finished', 'Screenshot 2022-07-08 223803.png', '2022-07-12 19:03:53', '2022-09-02 08:06:50', 7, NULL),
(17, 'Pembuatan Desain dan Detail Drawing', NULL, NULL, 'Departemen Engineering', '100', '2021-07-21', '2021-07-30', '9', 'on_going', 'Cetakan Beton.PNG', '2022-08-12 02:46:55', '2022-08-25 05:05:51', 7, 'Ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggarans`
--

CREATE TABLE `anggarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_projek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projek_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `detail_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggarans`
--

INSERT INTO `anggarans` (`id`, `nama_projek`, `rab`, `projek_id`, `created_at`, `updated_at`, `detail_nama`) VALUES
(2, 'Uni Soviet', '230000', 5, '2022-07-14 05:59:31', '2022-07-14 05:59:31', 'Semen2'),
(3, 'Projek 2', '120000', 4, '2022-07-14 05:59:50', '2022-07-14 05:59:50', 'Semen'),
(4, 'Projek 1', '200000', 1, '2022-07-14 06:02:12', '2022-07-14 07:51:08', 'Palu'),
(5, 'Projek 1', '100000', 1, '2022-07-14 06:14:14', '2022-07-14 06:14:14', 'Botol Projek'),
(10, 'Proyek Cetakan Beton (Cone)', '2497000', 7, '2022-08-12 02:34:43', '2022-08-12 02:34:43', 'Pekerjaan Marking dan Cutting'),
(11, 'Proyek Cetakan Beton (Cone)', '2560000', 7, '2022-08-12 02:34:59', '2022-08-12 02:34:59', 'Pekerjaan Rolling'),
(12, 'Proyek Cetakan Beton (Cone)', '2240000', 7, '2022-08-12 02:35:15', '2022-08-12 02:35:15', 'Pekerjaan Bavelling'),
(13, 'Proyek Cetakan Beton (Cone)', '2410000', 7, '2022-08-12 02:35:31', '2022-08-12 02:35:31', 'Pekerjaan Full Welding Ring'),
(14, 'Proyek Cetakan Beton (Cone)', '2312000', 7, '2022-08-12 02:36:00', '2022-08-12 02:36:00', 'Pekerjaan Fit Up-Tack Weld Ring plat 20'),
(15, 'Proyek Cetakan Beton (Cone)', '3145000', 7, '2022-08-12 02:36:40', '2022-08-12 02:36:40', 'Pekerjaan Full Welding Shell Plate'),
(16, 'Proyek Cetakan Beton (Cone)', '2027000', 7, '2022-08-12 02:36:54', '2022-08-12 02:36:54', 'Pekerjaan Fit Up-Tack Weld Shell Plate'),
(17, 'Proyek Cetakan Beton (Cone)', '4125000', 7, '2022-08-12 02:37:07', '2022-08-12 02:37:07', 'Pekerjaan Joint Assembly (Fit up-Tack Weld antar komponen Shell & Ring)'),
(18, 'Proyek Cetakan Beton (Cone)', '3625000', 7, '2022-08-12 02:37:18', '2022-08-12 02:37:18', 'Pekerjaan Fit Up-Tack Weld Horizontal Stiffner'),
(19, 'Proyek Cetakan Beton (Cone)', '3215000', 7, '2022-08-12 02:37:32', '2022-08-12 02:37:32', 'Pekerjaan Joint Assembly (Fit Up-Tack Weld all bottom component)'),
(20, 'Proyek Cetakan Beton (Cone)', '3245000', 7, '2022-08-12 02:37:46', '2022-08-12 02:37:46', 'Pekerjaan Full Welding Cone Plate'),
(21, 'Proyek Cetakan Beton (Cone)', '4789000', 7, '2022-08-12 02:38:12', '2022-08-12 02:38:12', 'Pekerjaan Fit Up-Tack Weld Cone Plate'),
(22, 'Proyek Cetakan Beton (Cone)', '6842000', 7, '2022-08-12 02:38:28', '2022-08-12 02:38:28', 'Pekerjaan Joint Assembly (Fit Up-Tack Weld Cone & Bottom Component)'),
(23, 'Proyek Cetakan Beton (Cone)', '2789000', 7, '2022-08-12 02:38:42', '2022-08-12 02:38:42', 'Pekerjaan Fit Up-Tack Weld Cover'),
(24, 'Proyek Cetakan Beton (Cone)', '2899000', 7, '2022-08-12 02:38:55', '2022-08-12 02:38:55', 'Pekerjaan Full Welding Cover'),
(25, 'Proyek Cetakan Beton (Cone)', '3000000', 7, '2022-08-12 02:39:06', '2022-08-12 02:39:06', 'Pekerjaan Fit Up-Tack Weld Ring plat 10'),
(26, 'Proyek Cetakan Beton (Cone)', '2176000', 7, '2022-08-12 02:39:21', '2022-08-12 02:39:21', 'Pekerjaan  Full Welding Ring Plat 10'),
(27, 'Proyek Cetakan Beton (Cone)', '2209000', 7, '2022-08-12 02:39:33', '2022-08-12 02:39:33', 'Pekerjaan  Joint Assembly (Fit Up-Tack Weld antar komponen Cover dan Ring 10)'),
(28, 'Proyek Cetakan Beton (Cone)', '4310000', 7, '2022-08-12 02:39:46', '2022-08-12 02:39:46', 'Pekerjaan  Joint Assembly (Fit Up-Tack Weld antar komponen Siku A dan Cover-Ring)'),
(29, 'Proyek Cetakan Beton (Cone)', '4100000', 7, '2022-08-12 02:39:58', '2022-08-12 02:39:58', 'Pekerjaan  Joint Assembly (Fit Up-Tack Weld antar komponen Siku B dan Cover-Ring)'),
(30, 'Proyek Cetakan Beton (Cone)', '7655000', 7, '2022-08-12 02:40:13', '2022-08-12 02:40:13', 'Pekerjaan  Joint Assembly (Fit Up-Tack Weld antar komponen Vertikal Stifner dan Cover-Ring-Siku)'),
(31, 'Proyek Cetakan Beton (Cone)', '14420000', 7, '2022-08-12 02:40:28', '2022-08-12 02:40:28', 'Joint Assembly (Fit Up-Tack Weld antar komponen Top & Mid-Bottom Component)'),
(32, 'Proyek Cetakan Beton (Cone)', '3500000', 7, '2022-08-12 02:40:42', '2022-08-12 02:40:42', 'Pekerjaan Pickling'),
(33, 'Proyek Cetakan Beton (Cone)', '5000000', 7, '2022-08-12 02:40:56', '2022-08-12 02:40:56', 'Pekerjaan Packing'),
(34, 'Proyek Cetakan Beton (Cone)', '39172000', 7, '2022-08-12 02:41:13', '2022-08-12 02:41:13', 'Consumabel'),
(35, 'Proyek Cetakan Beton (Cone)', '10000000', 7, '2022-08-12 02:41:28', '2022-08-12 02:41:28', 'NDE (Non Destructive Examination)'),
(36, 'Proyek Cetakan Beton (Cone)', '42000000', 7, '2022-08-12 02:41:42', '2022-08-12 02:41:42', 'Material');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_verif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis__projeks`
--

INSERT INTO `jenis__projeks` (`id`, `nama_projek`, `durasi_projek`, `deskripsi_projek`, `status_projek`, `gambar_projek`, `anggaran_projek`, `created_at`, `updated_at`, `status_verif`) VALUES
(7, 'Proyek Cetakan Beton (Cone)', '2 Bulan', 'Proyek Cetakan beton merupakan proyek yang dipesan oleh PT.Wijaya Karya untuk pembuatan Jembatan', NULL, 'Screenshot (349).png', '205000000', '2022-07-11 04:28:35', '2022-08-12 07:00:07', NULL);

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
(10, 'H - 3 Deadline Aktivitas Pemodelan Bangunan', NULL, '1', 13, 'Andre Jibral', '1.PNG', 'Pemodelan Bangunan', 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa Aktivitas H - 3 Deadline Aktivitas Pemodelan Bangunan harus sudah selesai H - 3 atau  3 Hari Lagi. Diharapkan untuk segera diselesaikan, dengan deadline lebih tepatnya pada 17 Agustus 2022. Terima kasih', '2022-07-13', '2022-08-17', '2022-07-01', '2022-07-12 18:51:18', '2022-08-25 05:38:41'),
(11, 'H - 7 Deadline Aktivitas Pembelian Material', NULL, '1', 16, 'Andre Jibral', '1.PNG', 'Pembelian Material', 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa Aktivitas H - 7 Deadline Aktivitas Pembelian Material harus sudah selesai H - 7 atau  7 Hari Lagi. Diharapkan untuk segera diselesaikan, dengan deadline lebih tepatnya pada 21 Juli 2023. Terima kasih', '2022-07-13', '2023-07-21', '2023-07-20', '2022-07-12 19:04:11', '2022-08-25 05:37:22'),
(12, 'H - 8 Deadline Aktivitas Pembelian Material', NULL, '1', 16, 'Andre Jibral', '1.PNG', 'Pembelian Material', 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa Aktivitas H - 8 Deadline Aktivitas Pembelian Material harus sudah selesai H - 8 atau  8 Hari Lagi. Diharapkan untuk segera diselesaikan, dengan deadline lebih tepatnya pada 21 Juli 2023. Terima kasih', '2022-08-12', '2023-07-21', '2023-07-20', '2022-08-11 21:19:01', '2022-08-25 05:37:14'),
(13, 'H - 8 Deadline Aktivitas Pembelian Material', NULL, '1', 16, 'Andre Jibral', '1.PNG', 'Pembelian Material', 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa Aktivitas H - 8 Deadline Aktivitas Pembelian Material harus sudah selesai H - 8 atau  8 Hari Lagi. Diharapkan untuk segera diselesaikan, dengan deadline lebih tepatnya pada 21 Juli 2023. Terima kasih', '2022-08-12', '2023-07-21', '2023-07-20', '2022-08-12 02:43:07', '2022-08-12 05:05:08'),
(14, 'H - 22 Deadline Aktivitas Permintaan harga dan Penawaran harga dari Customer', NULL, '1', 13, 'Andre Jibral', '1.PNG', 'Permintaan harga dan Penawaran harga dari Customer', 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa Aktivitas H - 22 Deadline Aktivitas Permintaan harga dan Penawaran harga dari Customer harus sudah selesai H - 22 atau  22 Hari Lagi. Diharapkan untuk segera diselesaikan, dengan deadline lebih tepatnya pada 04 Januari 2023. Terima kasih', '2022-08-12', '2023-01-04', '2023-01-01', '2022-08-12 07:06:31', '2022-08-23 19:06:07'),
(15, 'H - 131 Deadline Aktivitas Permintaan harga dan Penawaran harga dari Customer', NULL, '1', 13, 'Andre Jibral', '1.PNG', 'Permintaan harga dan Penawaran harga dari Customer', 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa Aktivitas H - 131 Deadline Aktivitas Permintaan harga dan Penawaran harga dari Customer harus sudah selesai H - 131 atau  131 Hari Lagi. Diharapkan untuk segera diselesaikan, dengan deadline lebih tepatnya pada 04 Januari 2023. Terima kasih', '2022-08-25', '2023-01-04', '2023-01-01', '2022-08-25 05:24:09', '2022-08-25 05:37:31');

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
(4, 'Andre Jibral', '2513181056.unjani@gmail.com', NULL, '$2a$12$l//R00traKpCBc9EfVGy7egI6queVDxeEVNdews3QC0lGOkwCuTBG', 1, NULL, NULL, NULL, 'C88D7ED0-7FA6-44E2-A858-5AF359BD6BE4.jpeg', NULL, NULL, '2022-05-18 06:14:54', '2022-09-02 08:29:11'),
(5, 'Ibu Hermita', 'jibral.oasi@gmail.com', NULL, '$2a$12$l//R00traKpCBc9EfVGy7egI6queVDxeEVNdews3QC0lGOkwCuTBG', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2022-05-18 07:15:32', '2022-05-18 07:15:32'),
(6, 'PT.Heavyndo', 'andrejibralrielando30@gmail.com', NULL, '$2a$12$l//R00traKpCBc9EfVGy7egI6queVDxeEVNdews3QC0lGOkwCuTBG', NULL, NULL, 1, NULL, 'Screenshot 2022-07-08 223803.png', NULL, NULL, '2022-05-18 07:27:38', '2022-07-11 04:47:01');

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
-- Indeks untuk tabel `anggarans`
--
ALTER TABLE `anggarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggarans_projek_id_foreign` (`projek_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `anggarans`
--
ALTER TABLE `anggarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis__projeks`
--
ALTER TABLE `jenis__projeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
