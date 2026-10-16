-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2026 pada 06.15
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
-- Database: `laravel-praktikum-c050425033-db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `prodi` varchar(255) NOT NULL,
  `semester` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`nim`, `nama`, `email`, `prodi`, `semester`, `no_hp`, `created_at`, `updated_at`) VALUES
('2024010001', 'Ahmad Fauzi', NULL, 'Teknik Informatika', '3', '', '2026-09-20 07:47:05', '2026-10-03 22:14:00'),
('2024010002', 'Siti Aminah', NULL, 'Sistem Informasi', '1', '081234567890', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024010261', 'Casandra Kunde MD', NULL, 'Teknik Informatika', '3', '088152721916', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024020848', 'Dr. Brody Mann III', NULL, 'Teknik Informatika', '1', '086268871593', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024030494', 'Ms. Cassandre Sawayn', NULL, 'Sistem Informasi', '8', '085468772401', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024030538', 'Delbert Hackett', NULL, 'Teknik Komputer', '7', '086065584384', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024050602', 'Katrina King', NULL, 'Sistem Informasi', '7', '', '2026-09-20 07:47:05', '2026-10-03 22:14:18'),
('2024090182', 'Raheem Kohler', NULL, 'Teknik Informatika', '3', '085244093032', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024090324', 'Dr. Jorge Carroll DVM', NULL, 'Teknik Informatika', '1', '081261583692', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024090678', 'Sigrid Dietrich', NULL, 'Teknik Informatika', '1', '082282190839', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024100529', 'Prof. Freeda Maggio', NULL, 'Teknik Informatika', '2', '084928280470', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024190291', 'Joana Swift', NULL, 'Sistem Informasi', '5', '089390751672', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024200728', 'Davin Abshire', NULL, 'Teknik Informatika', '4', '080179787033', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024230535', 'Emmanuelle Brekke', NULL, 'Sistem Informasi', '8', '081247917401', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024260685', 'Tomas Ward', NULL, 'Teknik Informatika', '2', '082817504421', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024280081', 'Bobby Dach', NULL, 'Sistem Informasi', '7', '088690989303', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024290011', 'Violet Kunze', NULL, 'Teknik Informatika', '1', '082246080375', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024300687', 'Myles Morar', NULL, 'Sistem Informasi', '2', '086728077468', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024330244', 'Mr. Monroe Roberts III', NULL, 'Teknik Komputer', '2', '083994553183', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024330694', 'Ayden Wolff', NULL, 'Sistem Informasi', '6', '082403921846', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024410446', 'Carolyn Muller', NULL, 'Teknik Informatika', '5', '087690308019', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024410822', 'Camron Quitzon PhD', NULL, 'Teknik Informatika', '3', '085274310815', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024420967', 'Art Wilkinson', NULL, 'Teknik Komputer', '2', '080605607138', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024430376', 'Dr. Mallory Watsica', NULL, 'Sistem Informasi', '5', '081869097137', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024440902', 'Mireille Hoeger', NULL, 'Teknik Komputer', '7', '087600946241', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024460411', 'Bobby Kerluke', NULL, 'Sistem Informasi', '2', '086334582573', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024480841', 'Reyna Hansen', NULL, 'Sistem Informasi', '1', '081870456008', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024490636', 'Wilmer Turner', NULL, 'Sistem Informasi', '8', '083372274081', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024500544', 'Floyd Lebsack', NULL, 'Teknik Informatika', '3', '083127455474', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024520359', 'Mr. Jovany Bogisich V', NULL, 'Teknik Informatika', '5', '083400481743', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024530745', 'Heaven Hudson', NULL, 'Teknik Komputer', '1', '083562767015', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024540539', 'Mr. Trace Willms I', NULL, 'Teknik Komputer', '4', '085716992702', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024540769', 'Marcellus Heaney', NULL, 'Sistem Informasi', '1', '080108746882', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024560071', 'Weston Casper', NULL, 'Teknik Informatika', '3', '086956893385', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024600536', 'Blair Hartmann', NULL, 'Teknik Komputer', '2', '083166377965', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024650000', 'Ericka Abbott', NULL, 'Sistem Informasi', '3', '081969270789', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024690226', 'Jess Goldner DDS', NULL, 'Sistem Informasi', '5', '081662065380', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024720939', 'Dr. Itzel Waelchi', NULL, 'Teknik Informatika', '1', '083821857814', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024730943', 'Diana Flatley II', NULL, 'Sistem Informasi', '7', '081113821721', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024770288', 'Mae Wintheiser Sr.', NULL, 'Teknik Komputer', '2', '089975584816', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024790710', 'Prof. Ervin Turcotte', NULL, 'Teknik Informatika', '8', '084402883274', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024800147', 'Ocie Renner', NULL, 'Sistem Informasi', '1', '082613603808', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024800357', 'Paul Weber', NULL, 'Teknik Informatika', '8', '089323298124', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024800750', 'Roxanne Schroeder', NULL, 'Teknik Informatika', '6', '080522883904', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024840386', 'Dr. Humberto Muller', NULL, 'Teknik Informatika', '7', '081503661065', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024840749', 'Jameson Carter', NULL, 'Sistem Informasi', '7', '085500541620', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024880956', 'Dave Schinner', NULL, 'Teknik Informatika', '2', '080933455421', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024910620', 'Dr. Efrain Schoen Sr.', NULL, 'Teknik Informatika', '8', '082794742668', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024910984', 'Prof. Marty Fisher', NULL, 'Teknik Informatika', '6', '084969577248', '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
('2024980991', 'Minerva Aufderhar', NULL, 'Sistem Informasi', '5', '087906532416', '2026-09-20 07:47:05', '2026-09-20 07:47:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliahs`
--

CREATE TABLE `matakuliahs` (
  `kode_mk` varchar(10) NOT NULL,
  `nama_mk` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dosen_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matakuliahs`
--

INSERT INTO `matakuliahs` (`kode_mk`, `nama_mk`, `sks`, `semester`, `created_at`, `updated_at`, `dosen_id`) VALUES
('MK-018', 'Pemrograman Web', 2, 4, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-062', 'Basis Data', 3, 5, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-103', 'Basis Data', 3, 4, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-114', 'Pemrograman Web', 2, 1, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-150', 'Jaringan Komputer', 3, 8, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-186', 'Jaringan Komputer', 1, 7, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-313', 'Pemrograman Web', 3, 5, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-407', 'Basis Data', 1, 4, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-416', 'Pemrograman Web', 3, 1, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-487', 'Pemrograman Web', 3, 4, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-636', 'Basis Data', 4, 6, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-758', 'Jaringan Komputer', 4, 5, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-856', 'Basis Data', 1, 2, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-883', 'Pemrograman Web', 2, 8, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-900', 'Basis Data', 4, 7, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-914', 'Jaringan Komputer', 2, 1, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-944', 'Pemrograman Web', 4, 3, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-951', 'Pemrograman Web', 2, 6, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-982', 'Basis Data', 4, 1, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1),
('MK-994', 'Pemrograman Web', 4, 1, '2026-09-20 07:47:05', '2026-09-20 07:47:05', 1);

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_09_08_053022_create_mahasiswas_table', 1),
(5, '2026_09_15_035232_create_artikels_table', 1),
(6, '2026_09_15_074306_add_email_to_mahasiswas_table', 1),
(7, '2026_09_17_165029_create_matakuliahs_table', 1),
(8, '2026_09_17_165256_add_dosen_id_to_matakuliahs_table', 1),
(9, '2026_09_20_125948_create_nilai_matakuliahs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_matakuliahs`
--

CREATE TABLE `nilai_matakuliahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` varchar(10) NOT NULL,
  `matakuliah_id` varchar(10) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai_matakuliahs`
--

INSERT INTO `nilai_matakuliahs` (`id`, `mahasiswa_id`, `matakuliah_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, '2024420967', 'MK-103', 72, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(2, '2024800147', 'MK-636', 53, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(3, '2024280081', 'MK-103', 93, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(4, '2024720939', 'MK-914', 82, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(5, '2024490636', 'MK-758', 87, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(6, '2024480841', 'MK-982', 55, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(7, '2024330244', 'MK-103', 71, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(8, '2024600536', 'MK-407', 50, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(9, '2024100529', 'MK-636', 59, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(10, '2024410822', 'MK-150', 81, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(11, '2024530745', 'MK-186', 70, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(12, '2024910984', 'MK-900', 97, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(13, '2024010261', 'MK-407', 72, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(14, '2024720939', 'MK-313', 66, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(15, '2024030494', 'MK-313', 77, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(16, '2024090678', 'MK-951', 91, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(17, '2024410446', 'MK-114', 94, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(18, '2024650000', 'MK-636', 80, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(19, '2024840749', 'MK-982', 95, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(20, '2024790710', 'MK-407', 93, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(21, '2024090182', 'MK-313', 61, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(22, '2024500544', 'MK-951', 90, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(23, '2024460411', 'MK-062', 64, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(24, '2024330694', 'MK-416', 58, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(25, '2024420967', 'MK-150', 74, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(26, '2024430376', 'MK-856', 65, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(27, '2024010261', 'MK-416', 71, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(28, '2024090678', 'MK-900', 66, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(29, '2024730943', 'MK-994', 75, '2026-09-20 07:47:05', '2026-09-20 07:47:05'),
(30, '2024090678', 'MK-487', 70, '2026-09-20 07:47:05', '2026-09-20 07:47:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1WSld5mQSJPaEmD5PwZEmRSIM7yzcI9xCkE7Wwgo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.139.1 Chrome/150.0.7871.250 Electron/43.6.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVW1HVTNDRFg0bk5DVWF1V1RCT1VtanB6Ym1FenFjeG5FMUY3eFJmcSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdGF0aXN0aWsiO3M6NToicm91dGUiO047fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1791054444),
('5eRvLvFuJZxkoGPONd0JfX4IwfJMWcIWNPFIc1L2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.139.1 Chrome/150.0.7871.250 Electron/43.6.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSHVHVHB0QkRHMXd4aUFuZTlzejg4NUFaRXFqTnVBdDhnVDU1TWFHSiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ha2FkZW1pay9tYWhhc2lzd2EvMjAyNDAxMDAwMSI7czo1OiJyb3V0ZSI7czoxNDoibWFoYXNpc3dhLnNob3ciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790662275),
('aZKRpN2EKjEhfWHVxeOmbrsXnWOpOYaH1IfYSKcZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.140.0 Chrome/150.0.7871.250 Electron/43.7.3 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRHFqZGpZR0E1YzF4Q2djT3B3OEJLZTNVVm5sZlNwM1dUVjZNMk5hRiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ha2FkZW1pay9tYXRha3VsaWFoL01LLTAxOCI7czo1OiJyb3V0ZSI7czoxNToibWF0YWt1bGlhaC5zaG93Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1791100319),
('BE1DlGrwPAny5vyxnLJa1h2THhFf2R3Ze26mcJ3A', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.139.1 Chrome/150.0.7871.250 Electron/43.6.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaFFpVW1kc1VRUU5rRThvN2xTNUxxNmJ4ckxsSE5KTW03UE5rdXBhYiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zYXBhIjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1791014595),
('hMhj0FK9W2t4N5CWH455CybeKvND5jsCCErFPZUD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.139.1 Chrome/150.0.7871.250 Electron/43.6.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOVdyMFNRTHJHcGVhRm9NcGtlMGJVWm9hOEM1NTZpRlFJNDRIV2lCbSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ha2FkZW1pay9tYXRha3VsaWFoL01LLTk0NCI7czo1OiJyb3V0ZSI7czoxNToibWF0YWt1bGlhaC5zaG93Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790681890),
('lG7SL0ykP5b4prwPyWt4hbA3cHvVBthkXQApcG8y', NULL, '127.0.0.1', 'Thunder Client (https://www.thunderclient.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjZpZU9IZExSekhOU1p4WnBleEZFMlpxNUR2QU1PRndIQXE4ODN0ZSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ha2FkZW1pay9tYWhhc2lzd2EvMjAyNDAxMDAwMSI7czo1OiJyb3V0ZSI7czoxNDoibWFoYXNpc3dhLnNob3ciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1791052132),
('PuAwZfDmtMDsiofXAgSoSAD23gJBuxqDoEykO1ah', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.140.0 Chrome/150.0.7871.250 Electron/43.7.3 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidlNNeU53MFhBb01qMVdYeFhxUVkzekhlODRTRDNGMjdYNlZKdHRjYyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ha2FkZW1pay9tYXRha3VsaWFoIjtzOjU6InJvdXRlIjtzOjE2OiJtYXRha3VsaWFoLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1791173400);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2026-09-20 07:47:04', '$2y$12$eSkdnSz1VsR3F9kF7TgQJuhicU6F1obBjpupdfgXDJLvxvxmTIYTW', 'frzw4HJj06', '2026-09-20 07:47:05', '2026-09-20 07:47:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `matakuliahs`
--
ALTER TABLE `matakuliahs`
  ADD PRIMARY KEY (`kode_mk`),
  ADD KEY `matakuliahs_dosen_id_foreign` (`dosen_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_matakuliahs`
--
ALTER TABLE `nilai_matakuliahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_matakuliahs_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `nilai_matakuliahs_matakuliah_id_foreign` (`matakuliah_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT untuk tabel `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `nilai_matakuliahs`
--
ALTER TABLE `nilai_matakuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `matakuliahs`
--
ALTER TABLE `matakuliahs`
  ADD CONSTRAINT `matakuliahs_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `nilai_matakuliahs`
--
ALTER TABLE `nilai_matakuliahs`
  ADD CONSTRAINT `nilai_matakuliahs_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswas` (`nim`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_matakuliahs_matakuliah_id_foreign` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliahs` (`kode_mk`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
