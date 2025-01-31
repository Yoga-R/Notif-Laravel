-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2025 pada 09.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, 'database', 'default', '{\"uuid\":\"555dfa03-1161-4143-a6ea-ee1f7ea740f8\",\"displayName\":\"App\\\\Jobs\\\\sendEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\sendEmail\",\"command\":\"O:18:\\\"App\\\\Jobs\\\\sendEmail\\\":9:{s:2:\\\"id\\\";s:1:\\\"2\\\";s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'ErrorException: Trying to get property \'Judul_Pekerjaan\' of non-object in C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\app\\Jobs\\sendEmail.php:40\nStack trace:\n#0 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\app\\Jobs\\sendEmail.php(40): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Trying to get p...\', \'C:\\\\xampp\\\\htdocs...\', 40, Array)\n#1 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\sendEmail->handle()\n#2 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(37): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#3 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#4 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#5 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#6 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)\n#7 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\sendEmail))\n#8 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\sendEmail))\n#9 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#10 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(83): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\sendEmail), false)\n#11 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\sendEmail))\n#12 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\sendEmail))\n#13 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(85): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#14 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(59): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\sendEmail))\n#15 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#16 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(356): Illuminate\\Queue\\Jobs\\Job->fire()\n#17 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(306): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#18 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(132): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(112): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(96): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#21 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#22 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(37): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#23 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#24 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#25 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#26 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(134): Illuminate\\Container\\Container->call(Array)\n#27 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#29 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\symfony\\console\\Application.php(1015): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\symfony\\console\\Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(93): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\Pskripsi\\bahanaapp\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 {main}', '2025-01-17 00:40:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
(4, '2022_01_06_065740_create_tbladmins_table', 1),
(5, '2022_01_06_070220_create_tbltenagakerjas_table', 1),
(6, '2022_01_06_070742_create_tblkeahlians_table', 1),
(7, '2022_02_03_080451_create_tbl_pekerjaans_table', 2),
(8, '2022_04_01_081508_create_tblfirebases_table', 3),
(9, '2022_04_07_065737_create_jobs_table', 4);

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
-- Struktur dari tabel `tbladmins`
--

CREATE TABLE `tbladmins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbladmins`
--

INSERT INTO `tbladmins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'yoga@test.com', '$2y$10$4RR1IZHdvl6lWOz0rNafAuMpLvzsdrZs0QVBItK3POkv1pazg78ly', NULL, NULL),
(2, 'yoga123@test.com', '$2y$10$HohJhOZrzlJ/pavSAWwKX.96w6VfH3HLO3TlKMguds8tH9zoGt4oS', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblfirebases`
--

CREATE TABLE `tblfirebases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyfirebase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tblfirebases`
--

INSERT INTO `tblfirebases` (`id`, `keyfirebase`, `created_at`, `updated_at`) VALUES
(1, '12222', '2022-04-05 00:35:54', '2022-04-05 00:35:54'),
(2, '122221', '2022-04-05 00:37:24', '2022-04-05 00:37:24'),
(3, 'dVI21XX9ihxcmayRw8EeiZ:APA91bGU_KLfHNc0DIX0xxZ4ebcBmDTG8Jbb-A1ySpPg2hm1Il9me3sK71zTJFUWSb8xcfr1mER1QW5tsHcTuLjvxbxTw5mcpBHav5eQP0pQ1pK5yPTj4U1wQJ3EbsVOrEXWUxDKFS61', '2022-04-05 00:37:36', '2022-04-05 00:37:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkeahlians`
--

CREATE TABLE `tblkeahlians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tblkeahlians`
--

INSERT INTO `tblkeahlians` (`id`, `keahlian`, `created_at`, `updated_at`) VALUES
(1, 'Elektrikal', NULL, NULL),
(2, 'Plumbing', NULL, NULL),
(3, 'Sipil', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbltenagakerjas`
--

CREATE TABLE `tbltenagakerjas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbltenagakerjas`
--

INSERT INTO `tbltenagakerjas` (`id`, `name`, `email`, `notelpon`, `keahlian`, `created_at`, `updated_at`) VALUES
(1, 'Yoga Risky Ananda', 'yoga.27@students.amikom.ac.id', '081283770609', '1', '2022-02-09 00:48:27', '2022-02-09 00:48:27'),
(2, 'M Novianto Nugroho', 'viantotech@gmail.com', '081275616752', '2', '2022-04-13 23:50:19', '2022-04-13 23:50:19'),
(3, 'Budi', 'Budi@gmail.com', '0856541616', '3', '2024-12-17 03:54:45', '2024-12-17 03:54:45'),
(4, 'Andi Saputra', 'andi.saputraBTT@gmail.com', '089659887854', '2', '2025-01-06 23:15:06', '2025-01-06 23:15:06'),
(5, 'Jusantara', 'nogiatlak@gmail.com', '0213451671', '3', '2025-01-17 00:59:11', '2025-01-17 00:59:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pekerjaans`
--

CREATE TABLE `tbl_pekerjaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Judul_Pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Detail_Pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibutuhkan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Urgent',
  `File` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_pekerjaans`
--

INSERT INTO `tbl_pekerjaans` (`id`, `Judul_Pekerjaan`, `Detail_Pekerjaan`, `dibutuhkan`, `File`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Pekerjaan RSU Bekasi', 'Pemasangan Gas Central Medis dan Instalasi elktronik penunjang', 'Urgent', 'rpkun0Wd9hqKfYXfNLvQ5WBVp8SrC2dn816DGvYz.pdf', 1, '2025-01-06 23:07:33', '2025-01-17 00:39:31'),
(6, 'Renovasi Ruko Imperial', 'Pekerjaan meliputi interior dan plumbing', 'Urgent', '5YgKAemNZFMvYuvfWMtVGS1vsrPkCjhnaItpFpkY.png', 1, '2025-01-17 00:52:16', '2025-01-17 00:52:28'),
(7, 'Instalasi Elektrikal', 'Instalasi Elektrikal 2 lantai', 'Urgent', 'l7WaNwm3StlB2H4mnm0H8zwbnonX50zvRU5856VS.png', 1, '2025-01-17 01:00:29', '2025-01-17 01:00:42'),
(8, 'Instalasi Elektrikal', 'instalasi 3 lantai', 'Urgent', 'r2b8xWO90lpQLgnF55BZnZxmCSwynjLN3nnarlS8.png', 1, '2025-01-17 01:06:21', '2025-01-17 01:06:49');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yoga Risky', 'yogariski27@gmail.com', NULL, '$2y$10$4RR1IZHdvl6lWOz0rNafAuMpLvzsdrZs0QVBItK3POkv1pazg78ly', NULL, '2022-01-29 02:17:26', '2022-01-29 02:17:26'),
(2, 'Jusantara', 'nogiatlak@gmail.com', NULL, '$2y$10$nZNiXKEauaUR4Oo12oJKo.ar8a9xzOwZFM1uMeuwUH1UfsNUVNGNq', NULL, '2025-01-17 01:15:24', '2025-01-17 01:15:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- Indeks untuk tabel `tbladmins`
--
ALTER TABLE `tbladmins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbladmins_email_unique` (`email`);

--
-- Indeks untuk tabel `tblfirebases`
--
ALTER TABLE `tblfirebases`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblkeahlians`
--
ALTER TABLE `tblkeahlians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbltenagakerjas`
--
ALTER TABLE `tbltenagakerjas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbltenagakerjas_email_unique` (`email`);

--
-- Indeks untuk tabel `tbl_pekerjaans`
--
ALTER TABLE `tbl_pekerjaans`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbladmins`
--
ALTER TABLE `tbladmins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tblfirebases`
--
ALTER TABLE `tblfirebases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tblkeahlians`
--
ALTER TABLE `tblkeahlians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbltenagakerjas`
--
ALTER TABLE `tbltenagakerjas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_pekerjaans`
--
ALTER TABLE `tbl_pekerjaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
