-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 11:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rath-samrith`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `publish_year` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `publish_year`, `created_at`, `updated_at`) VALUES
(1, 'Vitae quia pariatur et aliquam et voluptas.', 'Jocelyn O\'Keefe', 'Rodolfo Thompson', '2006', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(2, 'Neque aperiam possimus sed sapiente aut.', 'Mabel Rempel', 'Ena Larkin', '1977', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(3, 'Impedit autem et optio nostrum dolores.', 'Leanne Russel Jr.', 'Vivianne Ebert', '1971', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(4, 'Et nihil dignissimos rerum ullam neque id.', 'Prof. Leatha Sanford', 'Claudine Olson PhD', '1988', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(5, 'Consequatur eius aliquam sit sunt.', 'Garfield Nolan', 'Lori Kuhn', '2019', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(6, 'Distinctio et aut similique.', 'Eric Wisozk', 'Stefan Feil', '1992', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(7, 'Sapiente nisi sequi aut eligendi minima.', 'Mariah Huels', 'Aida Tromp', '1977', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(8, 'Labore ut est hic.', 'Dena Friesen', 'Antonia Mueller', '2009', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(9, 'Quaerat suscipit qui totam quo at.', 'Laurianne Mann', 'Isabella King', '2012', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(10, 'Et quis debitis et fuga et porro et.', 'Deshawn Krajcik', 'Vance Fay', '2011', '2024-06-07 00:05:19', '2024-06-07 00:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_records`
--

CREATE TABLE `borrow_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrow_records`
--

INSERT INTO `borrow_records` (`id`, `book_id`, `user_id`, `borrow_date`, `return_date`, `created_at`, `updated_at`) VALUES
(1, 4, 10, '2024-06-07', '2024-06-21', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(2, 6, 9, '2024-06-07', '2024-06-21', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(3, 5, 7, '2024-06-07', '2024-06-21', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(4, 2, 3, '2024-06-07', '2024-06-21', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(5, 6, 9, '2024-06-07', '2024-06-21', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(6, 3, 7, '2024-06-07', '2024-06-21', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(7, 4, 9, '2024-06-07', '2024-06-21', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(8, 1, 4, '2024-06-07', '2024-06-21', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(9, 5, 7, '2024-06-07', '2024-06-21', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(10, 2, 10, '2024-06-07', '2024-06-21', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(11, 1, 10, '2024-06-04', '2024-04-23', '2024-06-07 01:34:57', '2024-06-07 01:34:57'),
(12, 1, 10, '2024-06-04', '2024-04-23', '2024-06-07 02:09:19', '2024-06-07 02:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_07_065528_create_books_table', 1),
(6, '2024_06_07_065538_create_borrow_records_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marilie Ritchie', 'ndare@example.org', '2024-06-07 00:05:19', '$2y$12$W4Gp/1/PLabYCu94O1HE0.f4QSTMXACZOD0CRVRvn910g9D0yhiee', 'Xt7BoBqTgp', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(2, 'Eudora Bayer', 'csmith@example.org', '2024-06-07 00:05:19', '$2y$12$W4Gp/1/PLabYCu94O1HE0.f4QSTMXACZOD0CRVRvn910g9D0yhiee', 'OL69uhrMgI', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(3, 'Genesis Muller', 'qmohr@example.com', '2024-06-07 00:05:19', '$2y$12$W4Gp/1/PLabYCu94O1HE0.f4QSTMXACZOD0CRVRvn910g9D0yhiee', 'Fityp2RVSh', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(4, 'Ms. Kenya Waters Jr.', 'jailyn.blick@example.net', '2024-06-07 00:05:19', '$2y$12$W4Gp/1/PLabYCu94O1HE0.f4QSTMXACZOD0CRVRvn910g9D0yhiee', 'dSI61kPVGS', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(5, 'Moses Abbott', 'xzemlak@example.net', '2024-06-07 00:05:19', '$2y$12$W4Gp/1/PLabYCu94O1HE0.f4QSTMXACZOD0CRVRvn910g9D0yhiee', 'vVHXltybXH', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(6, 'Llewellyn Greenholt', 'shayne.murphy@example.org', '2024-06-07 00:05:19', '$2y$12$W4Gp/1/PLabYCu94O1HE0.f4QSTMXACZOD0CRVRvn910g9D0yhiee', 'bUkWxsClNv', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(7, 'Dr. Joyce Kautzer', 'kade.ondricka@example.com', '2024-06-07 00:05:19', '$2y$12$W4Gp/1/PLabYCu94O1HE0.f4QSTMXACZOD0CRVRvn910g9D0yhiee', '6w1VpWDJ7f', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(8, 'Franz Padberg', 'gibson.lavina@example.net', '2024-06-07 00:05:19', '$2y$12$W4Gp/1/PLabYCu94O1HE0.f4QSTMXACZOD0CRVRvn910g9D0yhiee', 'MdGBviHAFg', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(9, 'Kavon Ruecker', 'mazie.kassulke@example.net', '2024-06-07 00:05:19', '$2y$12$W4Gp/1/PLabYCu94O1HE0.f4QSTMXACZOD0CRVRvn910g9D0yhiee', 'X02YXknUdo', '2024-06-07 00:05:19', '2024-06-07 00:05:19'),
(10, 'Prof. Deonte Mayer V', 'estefania70@example.com', '2024-06-07 00:05:19', '$2y$12$W4Gp/1/PLabYCu94O1HE0.f4QSTMXACZOD0CRVRvn910g9D0yhiee', 'l0MQlzYv51', '2024-06-07 00:05:19', '2024-06-07 00:05:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow_records`
--
ALTER TABLE `borrow_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrow_records_book_id_foreign` (`book_id`),
  ADD KEY `borrow_records_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `borrow_records`
--
ALTER TABLE `borrow_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow_records`
--
ALTER TABLE `borrow_records`
  ADD CONSTRAINT `borrow_records_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `borrow_records_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
