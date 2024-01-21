-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 12:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infosyst`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `first_name`, `middle_name`, `last_name`, `full_name`, `email`, `password`, `birthdate`, `phone_number`, `address`, `city`, `country`, `remember_token`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Rosss', 'Vernon Neal', 'Woodard', 'Rosss Vernon Neal Woodard', 'rage@mailinator.com', 'Pa$$w0rd!', '2012-10-04', '09055263328', 'Laudantium facere eum adipisicing eos qui velit deserunt numquam voluptatem In sint sed voluptatem', 'Vero dolorum in aliqua Delectus voluptates distinctio Sed quo eos in quas recusandae Dicta', 'Dolorem accusamus eius eligendi bruh', NULL, '2024-01-07 06:57:29', '2024-01-12 02:26:12', 1),
(5, 'Roberts', 'Dai Fisher', 'Joyner', 'Roberts Dai Fisher Joyner', 'gyzyj@mailinator.com', 'Pa$$w0rd!', '2011-07-05', '+1 (928) 812-8535', 'Saepe dolores neque voluptas fugit laborum', 'Id consequatur quas esse quam provident voluptates dolor odio aperiam ut repellendus Aut consectetur', 'Voluptatem quis voluptatum neque autem at fugit reprehenderit quisquam amet', NULL, '2024-01-07 07:48:21', '2024-01-07 07:55:08', 8),
(6, 'Kait', 'Amy Mccarthy', 'Crosby', 'Kait Amy Mccarthy Crosby', 'vysibutyv@mailinator.com', 'Pa$$w0rd!', '1992-03-25', '+1 (601) 926-4736', 'Dolores aut omnis et quibusdam tempora eius rerum alias iure dolorem non et et magni beatae consequuntur quae cillum doloribus', 'Fugiat est perspiciatis nisi nisi obcaecati quaerat qui modi sint nobis cum', 'Id recusandae Ipsum cupiditate dolorum', NULL, '2024-01-07 07:50:23', '2024-01-07 07:54:04', 9);

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
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `product_name`, `description`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Chain', 'Est nisi eu', 295, '396.00', '2024-01-18 01:01:56', '2024-01-18 01:06:39'),
(2, 'Hilel ', 'Quia magnam reiciendis autem ', 455, '431.00', '2024-01-20 23:12:53', '2024-01-20 23:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `amount` int(30) NOT NULL,
  `invoice_no` int(30) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `account_id`, `image`, `created_by`, `amount`, `invoice_no`, `notes`, `created_at`, `updated_at`) VALUES
(1, 6, NULL, 'Jose', 9000, 1, '![](http://localhost:8000/storage/QVrxoLnWqgCyiqTbMSVkHetdLxbhtsSs8gm10zwj.jpg)', '2024-01-17 19:40:38', '2024-01-18 00:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `job_orders`
--

CREATE TABLE `job_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_orders`
--

INSERT INTO `job_orders` (`id`, `vehicle_id`, `status`, `created_at`, `updated_at`, `account_id`) VALUES
(5, 1, 'in_progress', '2024-01-17 22:25:51', '2024-01-17 22:30:14', 6);

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
(5, '2024_01_07_140115_create_vehicles_table', 2),
(6, '2024_01_07_140116_create_job_orders_table', 2),
(7, '2024_01_07_140117_create_accounts_table', 2),
(8, '2024_01_07_140126_create_inventories_table', 2),
(9, '2024_01_07_141458_add_account_id_to_vehicles_table', 3),
(10, '2024_01_07_144244_add_full_name_and_middle_name_to_accounts_table', 4),
(11, '2024_01_07_145553_remove_job_order_and_vehicle_columns_from_accounts_table', 5),
(12, '2024_01_07_160628_add_account_id_to_job_orders_table', 6),
(18, '2024_01_08_041430_add_role_to_users', 7),
(19, '2014_10_12_200000_add_two_factor_columns_to_users_table', 8),
(20, '2024_01_08_043857_create_sessions_table', 8),
(21, '2024_01_12_134709_add_image_to_vehicles_table', 9),
(22, '2024_01_18_062426_make_status_nullable_in_job_orders_table', 10);

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
('GpiYJhxBi8P4IC9ER4O8fbcGZUp4bmkNwtJYBK7u', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidmxKOG5PRGpXbm5XWGg5WlFXNDVPcG9IUU1WUWRnOTNjR3haZTRQUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1705838367),
('UlpE4iLKkaOPEJWlSciuo7vPafCtna8mH1aznNHX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoieDFVemJJVzhYSFpvNFVXZE00Y2Z5N2VQTW9ianZtTTJONjZNYkUydSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1705836362);

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@admim.com', NULL, '$2y$12$iuKaXhjQFUBX95w9w2CMGOjPnmRUYFzL8rq9fGZJQzMhWuS5myaC.', NULL, NULL, NULL, NULL, '2024-01-07 05:55:58', '2024-01-07 05:55:58', 'ADMIN'),
(8, 'Jose Santos', 'bydivihox@mailinator.com', NULL, '$2y$12$SKdruBZj2wW5SSuYxf0PeOwKzJuIbZHk8Nkr3Dv.E3Mq4flLlUquO', NULL, NULL, NULL, NULL, '2024-01-07 21:40:44', '2024-01-17 22:06:33', 'STAFF'),
(9, 'mama Lott', 'vysevopu@mailinator.com', NULL, '$2y$12$G38LehBGhK7qnF/HO5ra..r6EjT6cMQVSkeGyvOHMxiUg9n0wzngq', NULL, NULL, NULL, NULL, '2024-01-07 21:42:37', '2024-01-07 21:58:28', 'STAFF'),
(10, 'jose', 'cohokaxa@mailinator.com', NULL, '$2y$12$HocDdsiVjaAA3ibMeA3jM.NBAlJD2pS2Ct7ydyHrhUvrgz4RjVJt.', NULL, NULL, NULL, NULL, '2024-01-12 02:27:03', '2024-01-12 03:36:08', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `license_plate` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `chassis_no` varchar(255) DEFAULT NULL,
  `fuel_type` varchar(255) DEFAULT NULL,
  `transmission` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `account_id`, `image`, `make`, `model`, `year`, `license_plate`, `color`, `chassis_no`, `fuel_type`, `transmission`, `notes`, `created_at`, `updated_at`) VALUES
(1, 5, '01HKYZNKM59P0ERNTMDDYZ8N9P.jpg', 'honda', 'civic', 2010, 'Ipsum voluptate et omnis ut aliquip fuga Incididunt consequatur et et velit sunt', 'Enim id ut quia sit sequi do quia incididunt accusantium doloribus saepe est ad voluptatem aut excepturi numquam delectus', 'Labore veniam qui eu dolore laboris vero sit facilis', 'Diesel', 'Automatic', 'Voluptas aliquid sit dolore voluptas similique', '2024-01-07 07:59:07', '2024-01-12 06:02:01'),
(2, 5, '01HKZ0WAWADA6Q4R2B9GPRB14J.png', 'mitsubishi', 'adventure', 2015, 'Non et quos qui rerum magna eos consequat Eius eius eligendi deserunt', 'Quia laboris rerum fugit id voluptatem Cillum', 'Iusto voluptatibus et placeat nostrud ipsum sapiente sunt iusto voluptatem velit eos sed officia delectus sunt neque', 'Diesel', 'Manual', 'Veritatis quis et tempor nisi adipisci facere ut', '2024-01-07 08:12:27', '2024-01-17 22:18:36'),
(3, 6, NULL, 'Et obcaecati enim Nam nobis amet dolore fugit debitis ut', 'Excepteur numquam laudantium ullamco ullamco iste fuga Et', 1991, 'Veritatis ex sint unde adipisicing animi incididunt labore fuga Quisquam voluptas', 'Minus est magni sint qui eveniet adipisci dolore ipsam est dignissimos consectetur eveniet tenetur aliquid inventore voluptates', 'Voluptas vitae ut corrupti corporis totam quisquam aliquam quia deserunt omnis quos consectetur error distinctio Ex cum ullam quod', 'Diesel', 'Manual', 'Non porro anim commodo et omnis temporibus architecto', '2024-01-12 01:17:56', '2024-01-12 01:17:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accounts_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_account_id_foreign` (`account_id`);

--
-- Indexes for table `job_orders`
--
ALTER TABLE `job_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_orders_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `job_orders_account_id_foreign` (`account_id`);

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
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_account_id_foreign` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_orders`
--
ALTER TABLE `job_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_orders`
--
ALTER TABLE `job_orders`
  ADD CONSTRAINT `job_orders_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `job_orders_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
