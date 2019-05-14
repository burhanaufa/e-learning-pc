-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2019 pada 03.57
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-learning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_guru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapels_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_guru` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_siswa`
--

CREATE TABLE `guru_siswa` (
  `guru_id` bigint(20) UNSIGNED DEFAULT NULL,
  `siswa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawabans`
--

CREATE TABLE `jawabans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaans_id` bigint(20) UNSIGNED DEFAULT NULL,
  `isi_jawaban` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapels`
--

CREATE TABLE `mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mapel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mapels`
--

INSERT INTO `mapels` (`id`, `nama_mapel`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', '2019-04-28 11:40:04', '2019-04-28 11:40:04'),
(2, 'Bahasa Indonesia', '2019-04-28 11:40:09', '2019-04-28 11:40:09'),
(3, 'Bahasa Inggris', '2019-04-28 11:40:13', '2019-04-28 11:40:13'),
(4, 'Biologi', '2019-04-28 11:40:18', '2019-04-28 11:40:18'),
(5, 'Fisika', '2019-04-28 11:40:23', '2019-04-28 11:40:23'),
(6, 'Kimia', '2019-04-28 11:40:27', '2019-04-28 11:40:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_siswa`
--

CREATE TABLE `mapel_siswa` (
  `mapel_id` bigint(20) UNSIGNED DEFAULT NULL,
  `siswa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materis`
--

CREATE TABLE `materis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_materi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapels_id` bigint(20) UNSIGNED DEFAULT NULL,
  `konten_materi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `materis`
--

INSERT INTO `materis` (`id`, `nama_materi`, `mapels_id`, `konten_materi`, `created_at`, `updated_at`) VALUES
(1, 'Fungsi Eksponensial dan logaritma', 1, '<p>.</p>', '2019-04-28 12:26:15', '2019-04-28 12:26:15'),
(2, 'Sistem Persamaan Linier dan Kuadrat Dua Variabel', 1, '<p>.</p>', '2019-04-28 12:26:44', '2019-04-28 12:26:44'),
(3, 'Sistem Pertidaksamaan Kuadrat Dua Variabel', 1, '<p>.</p>', '2019-04-28 12:26:58', '2019-04-28 12:26:58'),
(4, 'Pertidaksamaan Mutlak, Pecahan, dan Irrasional', 1, '<p>.</p>', '2019-04-28 12:27:24', '2019-04-28 12:27:24'),
(5, 'Geometri Bidang Datar', 1, '<p>.</p>', '2019-04-28 12:27:47', '2019-04-28 12:27:47'),
(6, 'Persamaan Trigonometri', 1, '<p>.</p>', '2019-04-28 12:28:04', '2019-04-28 12:28:04'),
(7, 'Ruang Lingkup Biologi, Kerja ilmiah dan Keselamatan Kerja, serta Karir berbasis Biologi', 4, '<p>.</p>', '2019-04-28 12:31:18', '2019-04-28 12:31:18'),
(8, 'Berbagai Tingkat Keaneragaman Hayati Indonesia', 4, '<p>.</p>', '2019-04-28 12:32:00', '2019-04-28 12:32:00'),
(9, 'Virus, ciri dan Peranannya dalam Kehidupan', 4, '<p>.</p>', '2019-04-28 12:32:42', '2019-04-28 12:32:42'),
(10, 'Archaebacteria dan Eubacteria, ciri, Karakter dan Peranannya', 4, '<p>.</p>', '2019-04-28 12:34:09', '2019-04-28 12:34:09'),
(11, 'Protista, Ciri dan Karakteristik dan Peranannya dalam Kehidupan', 4, '<p>.</p>', '2019-04-28 12:35:28', '2019-04-28 12:35:28'),
(12, 'Jamur, Ciri dan Karakteristik, serta Peranannya dalam Kehidupan', 4, '<p>.</p>', '2019-04-28 12:36:34', '2019-04-28 12:36:34'),
(13, 'Tumbuhan, Ciri-ciri Morfologis, Metagenesis dan Peranannya dalam Keberlangsungan Hidup di Bumi', 4, '<p>.</p>', '2019-04-28 12:37:47', '2019-04-28 12:37:47'),
(14, 'Invertebrata', 4, '<p>.</p>', '2019-04-28 12:38:13', '2019-04-28 12:38:13'),
(15, 'Ekologi : Ekosistem, Aliran Energi, Siklus/Daur Biogeokimia dan Interaksi dalam Ekosistem', 4, '<p>.</p>', '2019-04-28 12:39:28', '2019-04-28 12:39:28'),
(16, 'Perubahan Lingkungan/Iklim dan Daun Ulang Limbah', 4, '<p>.</p>', '2019-04-28 12:40:00', '2019-04-28 12:40:00'),
(17, 'Pengukuran', 5, '<p>.</p>', '2019-04-28 12:45:04', '2019-04-28 12:45:04'),
(18, 'Penjumlahan Vektor', 5, '<p>.</p>', '2019-04-28 12:45:40', '2019-04-28 12:45:40'),
(19, 'Gerak Lurus dengan Kecepatan dan Percepatan Konstan', 5, '<p>.</p>', '2019-04-28 12:46:16', '2019-04-28 12:46:16'),
(20, 'Hukum Newton dan Penerapannya', 5, '<p>.</p>', '2019-04-28 12:46:40', '2019-04-28 12:46:40'),
(21, 'Gerak Melingkar dengan Laju Konstan', 5, '<p>.</p>', '2019-04-28 12:47:10', '2019-04-28 12:47:10'),
(22, 'Elastisitas dan Hukum Hooke', 5, '<p>.</p>', '2019-04-28 12:47:52', '2019-04-28 12:47:52'),
(23, 'Fluida Statik', 5, '<p>.</p>', '2019-04-28 12:48:09', '2019-04-28 12:48:09'),
(24, 'Suhu, Kalor dan Perpindahan Kalor', 5, '<p>.</p>', '2019-04-28 12:48:37', '2019-04-28 12:48:37'),
(25, 'Alat-alat Optik', 5, '<p>,</p>', '2019-04-28 12:49:08', '2019-04-28 12:49:08'),
(26, 'Peran Kimia dalam Kehidupan', 6, '<p>.</p>', '2019-04-28 12:50:09', '2019-04-28 12:50:09'),
(27, 'Perkembangan Model Atom', 6, '<p>.</p>', '2019-04-28 12:52:14', '2019-04-28 12:52:14'),
(28, 'Struktur Lewis', 6, '<p>.</p>', '2019-04-28 12:52:34', '2019-04-28 12:52:34'),
(29, 'Bentuk Molekul', 6, '<p>.</p>', '2019-04-28 12:52:53', '2019-04-28 12:52:53'),
(30, 'Larutan Elektrolit dan Nanoelektrolit', 6, '<p>.</p>', '2019-04-28 12:53:33', '2019-04-28 12:53:33'),
(31, 'Konsep Reaksi Oksidasi - Reduksi', 6, '<p>.</p>', '2019-04-28 12:53:58', '2019-04-28 12:53:58'),
(32, 'Tata Nama Senyawa', 6, '<p>.</p>', '2019-04-28 12:54:17', '2019-04-28 12:54:17'),
(33, 'Massa Atom Relatif (Ar) dan Massa Molekul Relatif (Mr)', 6, '<p>.</p>', '2019-04-28 12:55:06', '2019-04-28 12:55:06'),
(34, 'Introducing Oneself and Other', 3, '<p>.</p>', '2019-04-28 18:36:33', '2019-04-28 18:36:33'),
(35, 'Greetings', 3, '<p>.</p>', '2019-04-28 18:36:56', '2019-04-28 18:36:56'),
(36, 'Partings/Leave-Takings', 3, '<p>.</p>', '2019-04-28 18:37:26', '2019-04-28 18:37:26'),
(37, 'Recount Text', 3, '<p>.</p>', '2019-04-28 18:37:53', '2019-04-28 18:37:53'),
(38, 'Expressing Happiness', 3, '<p>.</p>', '2019-04-28 18:38:21', '2019-04-28 18:38:21'),
(39, 'Exprresion of Showing Care and Sympathy', 3, '<p>.</p>', '2019-04-28 18:39:06', '2019-04-28 18:39:06'),
(40, 'Expression of Sympathy', 3, '<p>.</p>', '2019-04-28 18:40:55', '2019-04-28 18:40:55'),
(41, 'Narrative Text', 3, '<p>.</p>', '2019-04-28 18:41:16', '2019-04-28 18:41:16'),
(42, 'Expressing an Invitation', 3, '<p>.</p>', '2019-04-28 18:41:44', '2019-04-28 18:41:44'),
(43, 'Making, Accepting and Declining an Appointment', 3, '<p>.</p>', '2019-04-28 18:42:46', '2019-04-28 18:42:46'),
(44, 'Procedure Text', 3, '<p>.</p>', '2019-04-28 18:43:30', '2019-04-28 18:43:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_22_153330_create_signatures_table', 1),
(4, '2019_03_22_163723_create_siswas_table', 1),
(5, '2019_03_22_181003_create_mapels_table', 1),
(6, '2019_03_23_072657_create_gurus_table', 1),
(7, '2019_03_24_122745_create_materis_table', 1),
(8, '2019_03_27_053926_create_pertanyaans_table', 1),
(9, '2019_03_27_054039_create_jawabans_table', 1),
(10, '2019_04_07_033627_create_mapel_siswa_table', 1),
(11, '2019_04_08_060534_create_guru_siswa_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materis_id` bigint(20) UNSIGNED DEFAULT NULL,
  `isi_pertanyaan` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `signatures`
--

CREATE TABLE `signatures` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `flagged_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_siswa` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gurus_email_unique` (`email`),
  ADD KEY `gurus_mapels_id_foreign` (`mapels_id`);

--
-- Indeks untuk tabel `guru_siswa`
--
ALTER TABLE `guru_siswa`
  ADD KEY `guru_siswa_guru_id_foreign` (`guru_id`),
  ADD KEY `guru_siswa_siswa_id_foreign` (`siswa_id`);

--
-- Indeks untuk tabel `jawabans`
--
ALTER TABLE `jawabans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawabans_pertanyaans_id_foreign` (`pertanyaans_id`);

--
-- Indeks untuk tabel `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  ADD KEY `mapel_siswa_mapel_id_foreign` (`mapel_id`),
  ADD KEY `mapel_siswa_siswa_id_foreign` (`siswa_id`);

--
-- Indeks untuk tabel `materis`
--
ALTER TABLE `materis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materis_mapels_id_foreign` (`mapels_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaans_materis_id_foreign` (`materis_id`);

--
-- Indeks untuk tabel `signatures`
--
ALTER TABLE `signatures`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_email_unique` (`email`);

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
-- AUTO_INCREMENT untuk tabel `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jawabans`
--
ALTER TABLE `jawabans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `materis`
--
ALTER TABLE `materis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pertanyaans`
--
ALTER TABLE `pertanyaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `signatures`
--
ALTER TABLE `signatures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gurus`
--
ALTER TABLE `gurus`
  ADD CONSTRAINT `gurus_mapels_id_foreign` FOREIGN KEY (`mapels_id`) REFERENCES `mapels` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `guru_siswa`
--
ALTER TABLE `guru_siswa`
  ADD CONSTRAINT `guru_siswa_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `gurus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `guru_siswa_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jawabans`
--
ALTER TABLE `jawabans`
  ADD CONSTRAINT `jawabans_pertanyaans_id_foreign` FOREIGN KEY (`pertanyaans_id`) REFERENCES `pertanyaans` (`id`);

--
-- Ketidakleluasaan untuk tabel `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  ADD CONSTRAINT `mapel_siswa_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mapel_siswa_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `materis`
--
ALTER TABLE `materis`
  ADD CONSTRAINT `materis_mapels_id_foreign` FOREIGN KEY (`mapels_id`) REFERENCES `mapels` (`id`);

--
-- Ketidakleluasaan untuk tabel `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD CONSTRAINT `pertanyaans_materis_id_foreign` FOREIGN KEY (`materis_id`) REFERENCES `materis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
