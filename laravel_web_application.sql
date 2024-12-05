-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2024 at 06:02 AM
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
-- Database: `laravel_web_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
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
-- Table structure for table `job_batches`
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_02_175316_create_products_table', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock_quantity`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Fresh Refined Sugar 1kg', 'It is produced in a fully automated system, using the most modernized processes and state-of-the-art technology to ensure purity.', 40.00, 44, 'image/77VMaY6HvO7y1vuufbCTNKg0FzEaR7eMbOvJYTHh.webp', '2024-12-03 01:35:43', '2024-12-04 22:46:36'),
(2, 'ACI Pure Salt 1kg', 'Salt is the most essential item in the human diet. ACI Pure Salt is pure, free flow, vacuum evaporated', 42.00, 70, 'image/Ua3dTr3kO6igLlI21s1MOTRn6nvxWVCSQKu7cu1R.webp', '2024-12-03 03:47:14', '2024-12-03 23:39:27'),
(3, 'Chashi Aromatic Chinigura Rice 5kg', 'Chashi Aromatic Chinigura Rice is hygienically processed and polished by automated machines', 800.00, 60, 'image/0q4o3xHMowOFJn38UasdJZwzL8OYwiQSXGoXp7pi.webp', '2024-12-03 03:52:18', '2024-12-03 23:44:51'),
(4, 'ACI Pure Nazirshail Rice 5kg', 'ACI Pure Nazirshail Rice is carefully cultivated and processed to ensure its purity and nutritional value.', 470.00, 40, 'image/FesGu9xrgs7rdmTOGy6B0Tch2xYHEsWepVCy3FIB.webp', '2024-12-03 03:56:57', '2024-12-03 23:40:02'),
(5, 'Teer Fortified Soyabean Oil', 'The top-graded imported crude oil goes through a world-class refining process', 334.00, 80, 'image/1Yvnnivq3yES9crrPfrqt1CjsNbbioAY3EhPdd9x.webp', '2024-12-03 04:31:42', '2024-12-03 23:41:54'),
(6, 'Olio Orolio Extra Virgin Olive Oil', 'For the first time ever in the history of Bangladesh, by using Italian technology and European machineries', 1590.00, 50, 'image/OZqZXjqPSOfgt9kBJfj0AWtTIRBtXdFGKvUA1WKz.webp', '2024-12-03 04:34:09', '2024-12-03 23:42:45'),
(7, 'Radhuni Pure Mustard Oil 1litre', 'Radhuni Pure Mustard Oil is manufactured from the finest grade of indigenous mustard seeds and purified in a fully automated plant.', 340.00, 25, 'image/HNMo08nfHvFQVK4LTTI1uU2ImvBhM3d0T1YZxpMF.webp', '2024-12-03 04:35:55', '2024-12-03 23:43:36'),
(8, 'Radhuni Chilli (Morich) Powder 200g', 'Radhuni powdered Chilli is vivid in color, and precious in flavor.', 140.00, 40, 'image/ppMELsG8JnHIH7BaKzRUd3PhcyzLNmkKHWAfQMfF.webp', '2024-12-03 04:37:51', '2024-12-03 23:40:26'),
(9, 'Radhuni Turmeric (Holud) Powder 100gm', 'Radhuni Turmeric (Holud) Powder 100gm', 80.00, 40, 'image/DOgeerxpc5YnPXrtjPRtuodRjBztwU0SWaRuDHmm.webp', '2024-12-03 04:45:05', '2024-12-03 23:40:40'),
(10, 'Ispahani Mirzapore Best Leaf Tea', 'Ispahani Mirzapore Best Leaf is produced by blending the BEST tea leaves', 210.00, 30, 'image/7GBVQkIb7MaAdf4qfmiT90MTg5DTtS7oC8RL9I5c.webp', '2024-12-03 04:46:49', '2024-12-03 23:40:55'),
(13, 'Fresh Refined Sugar', 'Fresh Refined Sugar', 44.00, 55, 'image/pcMU7suUj1Dk36YJCCkRNNR4lIUmn85vw1JtOkfd.webp', '2024-12-04 20:51:20', '2024-12-04 20:51:20'),
(15, 'Nestle Maggi 2-Minute Masala Instant Noodles', 'MAGGI offers tasty and healthy snack options for Bangladeshi families Fortified with Vitamin A, Iron, and Iodine.', 175.00, 45, 'image/BdbmqPOgCDeL8Exe7baKQS9g4wnF9H1AKScmHJ94.webp', '2024-12-04 22:56:02', '2024-12-04 22:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('G0Ct1t4iQ5vrSs0L8nPCbd2tagufLRqFyMQ6Hvuz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU0RHSnNnZ2NZbkgxa2IzVFF6ek9KalNVdzZCdVBrNjkwWUlURmtoWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733374562);

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
(1, 'Md. Mostafizur Rahman', 'mostafizurrahman@gmail.com', NULL, '$2y$12$lUYEeqw92AF1WN7gNR63Re11alEActLpTJb6nZvZ35xRs9rhDLBAG', NULL, '2024-12-02 09:56:04', '2024-12-02 09:56:04'),
(4, 'Md. Mostafizur', 'mostafizur@gmail.com', NULL, '$2y$12$Na2wVs8ktwREr5ND26I5aOObQ.kudgwH3afkLF1AoSb6aUAMgqB9m', NULL, '2024-12-02 10:10:59', '2024-12-02 10:10:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
