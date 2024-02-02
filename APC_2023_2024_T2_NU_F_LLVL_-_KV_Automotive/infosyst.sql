-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 11:25 AM
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
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `first_name`, `middle_name`, `last_name`, `full_name`, `email`, `password`, `birthdate`, `phone_number`, `address`, `city`, `country`, `remember_token`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Percival', 'Frias', 'Lasquety', 'Percival Frias Lasquety', 'Val@gmail.com', 'admin', '1965-02-14', '09174515361', 'Blk 6 lot 18 senate phase 2 brgy 173', 'Caloocan City', 'PH', NULL, '2024-01-07 06:57:29', '2024-01-21 06:07:35', NULL),
(5, 'Robert', 'Bang', 'Ryan', 'Robert Bang Ryan', 'Robert@gmail.com', 'abc', '1994-03-16', '09568402542', 'blk 1 lot 1 forest park', 'Bulacan City', 'PH', NULL, '2024-01-07 07:48:21', '2024-01-21 06:09:00', NULL),
(6, 'Cait', 'Mcdo', 'Crosby', 'Cait Mcdo Crosby', 'Cait@gmail.com', 'abc', '1992-03-25', '09184315672', 'blk 2 lot 2 senate phase 1', 'Makati', 'PH', NULL, '2024-01-07 07:50:23', '2024-01-21 06:10:02', NULL),
(7, 'Yolan', 'Dag', 'Pogi', 'Yolan Dag Pogi', 'Yolan@gmail.com', 'abc123456', '1995-12-06', '09176541246', 'blk 1 lot 2 carissa brgy 101', 'Malabon', 'PH', NULL, '2024-01-21 06:51:12', '2024-01-21 06:51:12', NULL),
(8, 'Rona', 'D.L', 'Cab', 'Rona D.L Cab', 'Rona@gmail.com', '123456abc', '2024-01-18', '09181234521', 'blk 1 lot 2 Carissa Brgy 170', 'Caloocan', 'PH', NULL, '2024-01-21 07:09:49', '2024-01-21 07:09:49', NULL),
(9, 'Staff', 'Staff', 'Staff', 'Staff Staff Staff', 'staff@gmail.com', 'Staff123', NULL, '09273812940', 'Blk 5 Lot 5, Kamagong st, nangka, Marikina city', 'Marikina City', 'PH', NULL, '2024-01-29 00:29:31', '2024-01-29 00:29:31', 13);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `job_order_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `product_name`, `description`, `quantity`, `price`, `created_at`, `updated_at`, `job_order_id`) VALUES
(1, 'Petron Engine oil', 'Synthetic', 16, '1000.00', '2024-01-18 01:01:56', '2024-01-31 17:49:16', NULL),
(2, 'Shell Engine oil', 'Synthetic Blend', 16, '700.00', '2024-01-20 23:12:53', '2024-01-31 17:49:16', NULL),
(3, 'Honda Engine oil', 'Mineral', 494, '500.00', '2024-01-21 06:34:11', '2024-01-31 17:49:16', NULL),
(4, 'Body Repair Kit Set', 'for Toyota Cars', 16, '1500.00', '2024-01-21 06:35:02', '2024-01-31 17:49:16', NULL),
(5, 'Wheel Truck', 'Rim type for Isuzu', 1, '5000.00', '2024-01-21 06:36:12', '2024-01-31 17:49:16', NULL),
(6, 'Prestone Coolant', 'Prestone 50/50 Prediluted Coolant Blue - 1 Gallon', 95, '1499.00', '2024-01-30 21:09:40', '2024-01-31 17:49:16', NULL);

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
(1, 6, '01HMP86HGP6P8SFJ0B7KYKCWK8.jpg', 'Jose', 9000, 51, '![](http://localhost:8000/storage/tU7tPA1BsgvSNbqERd946BkZMrSXvbbwexbC8ZNy.jpg)', '2024-01-17 19:40:38', '2024-01-21 06:53:37'),
(6, 7, NULL, 'Jose', 9000, 52, 'basta bayad na to wala pa pic', '2024-01-21 06:52:20', '2024-01-21 06:52:20'),
(7, 8, NULL, 'Jose', 10000, 53, 'Fully paid cash service', '2024-01-21 07:26:41', '2024-01-21 07:26:41'),
(8, 7, NULL, 'Jose', 500, 52, NULL, '2024-01-30 07:16:05', '2024-01-30 07:16:05');

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
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `inventory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity_used` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_orders`
--

INSERT INTO `job_orders` (`id`, `vehicle_id`, `status`, `created_at`, `updated_at`, `account_id`, `inventory_id`, `quantity_used`) VALUES
(5, 1, 'in_progress', '2024-01-17 22:25:51', '2024-01-17 22:30:14', 6, NULL, NULL),
(6, 5, 'completed', '2024-01-21 07:27:37', '2024-01-21 07:27:37', 8, NULL, NULL),
(31, 7, 'in_progress', '2024-01-31 16:33:27', '2024-01-31 16:38:16', 9, 6, 1),
(47, 4, 'pending', '2024-01-31 17:49:16', '2024-01-31 17:49:16', 7, 5, 1);

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
(22, '2024_01_18_062426_make_status_nullable_in_job_orders_table', 10),
(23, '2024_01_21_144431_modify_accounts_table', 11),
(25, '2024_01_29_080958_create_notifications_table', 12),
(26, '2024_01_31_060711_add_quantity_used_to_job_orders_table', 13),
(27, '2024_01_31_093217_add_miles_per_gallon_and_mileage_to_vehicles_table', 14),
(28, '2024_01_31_124623_create_vehicle_history_table', 15),
(29, '2024_01_31_145535_change_date_performed_data_type_in_vehicle_history_table', 16),
(30, '2024_01_31_165029_add_mileage_to_vehicle_histories', 17),
(31, '2024_01_31_092339_add_fuel_usage_to_vehicles_table', 18),
(32, '2024_01_31_232801_add_foreign_key_to_inventories', 19);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('5b7c3d19-fbf3-43dd-9e73-44dfb70a5eed', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 13, '{\"actions\":[{\"name\":\"Mark as Read\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"Mark as read\",\"shouldClose\":false,\"shouldMarkAsRead\":true,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":null,\"view\":\"filament-actions::link-action\"}],\"body\":\"Your Lancer is ready for pick up.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-information-circle\",\"iconColor\":\"success\",\"status\":null,\"title\":\"Vehicle Update\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-01-30 22:56:44', '2024-01-30 22:56:44'),
('8a227c64-7dff-4812-9a90-5483da437c3f', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 13, '{\"actions\":[{\"name\":\"Mark as Read\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"Mark as read\",\"shouldClose\":false,\"shouldMarkAsRead\":true,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":null,\"view\":\"filament-actions::link-action\"}],\"body\":\"Your Lancer is ready for pick up.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-information-circle\",\"iconColor\":\"success\",\"status\":null,\"title\":\"Vehicle Update\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-01-30 22:56:20', '2024-01-30 22:56:20'),
('ac587f77-cdb8-4ef0-bba4-902e38e66d96', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 13, '{\"actions\":[{\"name\":\"Mark as Read\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"Mark as read\",\"shouldClose\":false,\"shouldMarkAsRead\":true,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":null,\"view\":\"filament-actions::link-action\"}],\"body\":\"Your Lancer is ready for pick up.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-information-circle\",\"iconColor\":\"success\",\"status\":null,\"title\":\"Vehicle Update\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-01-30 22:55:23', '2024-01-30 22:55:23'),
('fd308146-f373-43d2-ae0b-994685c5854c', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 13, '{\"actions\":[{\"name\":\"Mark as Read\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"Mark as read\",\"shouldClose\":false,\"shouldMarkAsRead\":true,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":null,\"view\":\"filament-actions::link-action\"}],\"body\":\"The service for Lancer is in progress.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-information-circle\",\"iconColor\":\"primary\",\"status\":null,\"title\":\"Vehicle Update\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-01-31 16:38:17', '2024-01-31 16:38:17'),
('ff767974-6450-425e-8be6-91ec7cd8e05f', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[],\"body\":null,\"color\":null,\"duration\":\"persistent\",\"icon\":null,\"iconColor\":null,\"status\":null,\"title\":\"Saved successfully\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-01-31 16:38:16', '2024-01-31 16:38:16');

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
('31va3hpdbHNI22K4beZvruIlLK0I0AUTsbqgwSMS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicExJcU1QMUtveUFkMlQ3SzMwWVRwbE9GaEh4RjNybFB0c3VSdGdmUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRpdUthWGhqUUZVQlg5NXc5dzJDTUdPalBubVJVWUZ6TDhycTlmR1pKUXpNaFd1UzVteWFDLiI7fQ==', 1706869426),
('GO71euaujnm0EvjCaprx5jK5Qat36hkFLjwH0uxq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZjhLekJKbkF5OWJQak5ueWtXdWtXQmtMM1pQZngzUVlxUkg5VnE4QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kZXRhaWwtYWNjb3VudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRpdUthWGhqUUZVQlg5NXc5dzJDTUdPalBubVJVWUZ6TDhycTlmR1pKUXpNaFd1UzVteWFDLiI7czo2OiJ0YWJsZXMiO2E6MTp7czozMToiTGlzdEludmVudG9yaWVzX3RvZ2dsZWRfY29sdW1ucyI7YToyOntzOjEwOiJjcmVhdGVkX2F0IjtiOjA7czoxMDoidXBkYXRlZF9hdCI7YjowO319fQ==', 1706852692);

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
(8, 'Jose', 'Jose@gmail.com', NULL, '$2y$12$SKdruBZj2wW5SSuYxf0PeOwKzJuIbZHk8Nkr3Dv.E3Mq4flLlUquO', NULL, NULL, NULL, NULL, '2024-01-07 21:40:44', '2024-01-21 06:12:45', 'STAFF'),
(9, 'Lotty', 'Lotty@gmail.com', NULL, '$2y$12$G38LehBGhK7qnF/HO5ra..r6EjT6cMQVSkeGyvOHMxiUg9n0wzngq', NULL, NULL, NULL, NULL, '2024-01-07 21:42:37', '2024-01-21 06:12:25', 'STAFF'),
(10, 'Abdol', 'Abdol@gmail.com', NULL, '$2y$12$HocDdsiVjaAA3ibMeA3jM.NBAlJD2pS2Ct7ydyHrhUvrgz4RjVJt.', NULL, NULL, NULL, NULL, '2024-01-12 02:27:03', '2024-01-22 18:46:52', 'STAFF'),
(12, 'Rona', 'rona@gmail.com', NULL, '$2y$12$XbYSiphEVPCz8Ut/MlfcauODKRMhQ305a63YXkkQPapCBlKyjkDT6', NULL, NULL, NULL, NULL, '2024-01-21 06:37:00', '2024-01-21 06:37:00', 'USER'),
(13, 'staff', 'staff@gmail.com', NULL, '$2y$12$pJ2GPRiAZ79OymO8aTivI.B8IP0Dky6YiZPvcCBK3c4bCUsX4pk2S', NULL, NULL, NULL, NULL, '2024-01-22 00:39:41', '2024-01-30 01:40:10', 'STAFF'),
(14, 'sample', 'sample@gmail.com', NULL, '$2y$12$goDDy/yKhPqhuGhOpJy0rOyS17rdrINxhPNjBDf4Q5vrDNqOb8NQi', NULL, NULL, NULL, NULL, '2024-01-22 01:02:39', '2024-01-22 01:02:39', 'USER');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `miles_per_gallon` decimal(8,2) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `account_id`, `image`, `make`, `model`, `year`, `license_plate`, `color`, `chassis_no`, `fuel_type`, `transmission`, `notes`, `created_at`, `updated_at`, `miles_per_gallon`) VALUES
(1, 5, '\"01HNA2QVHH7Y4NQKK234B5MNQ3.png\"', 'honda', 'civic', 2010, '1', 'black', 'asd151', 'Diesel', 'Manual', 'Fully paid done change oil - Jan 22, 2024\n\nTire change - jan 23, 2023 - Jose', '2024-01-07 07:59:07', '2024-01-28 23:43:01', NULL),
(2, 5, NULL, 'mitsubishi', 'adventure', 2015, '2', 'white', 'asd124', 'Unleaded', 'Automatic', 'Kotse ni VP-Sara', '2024-01-07 08:12:27', '2024-01-21 06:57:38', NULL),
(3, 6, NULL, 'Honda', 'Corolla', 1991, '123asd', 'green', 'asd123gasd123', 'Diesel', 'Manual', 'Kotse ng babae', '2024-01-12 01:17:56', '2024-01-21 06:59:50', NULL),
(4, 7, NULL, 'Ford', 'Raptor', 2005, '16', 'blue', 'asd123sd1a41', 'Diesel', 'Manual', 'kotse ni sk chairman', '2024-01-21 07:01:26', '2024-01-21 07:01:26', NULL),
(5, 8, NULL, 'Ford', 'Ranger', 2016, '10', 'Purple', 'abc123asd123', 'Diesel', 'Manual', 'Kotse ni idle', '2024-01-21 07:12:57', '2024-01-21 07:12:57', NULL),
(6, 8, NULL, 'Honda', 'city', 2023, '2020', 'blac', '12315641', 'Unleaded', 'Manual', NULL, '2024-01-22 18:56:24', '2024-01-31 02:17:59', NULL),
(7, 9, NULL, 'mitsubishi', 'Lancer', 2002, '3', 'black', '10', 'Diesel', 'Manual', NULL, '2024-01-29 00:31:00', '2024-01-29 00:31:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_history`
--

CREATE TABLE `vehicle_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `task_performed` text NOT NULL,
  `performed_by` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_history`
--

INSERT INTO `vehicle_history` (`id`, `account_id`, `vehicle_id`, `task_performed`, `performed_by`, `created_at`, `updated_at`) VALUES
(2, 5, 1, '[{\"task\":\"Change Oil\",\"date_performed\":\"2024\\/01\\/31\",\"mileage\":\"30000\"},{\"task\":\"Wheel ailgnment\",\"date_performed\":\"2024\\/01\\/31\",\"mileage\":\"30000\"}]', 'Jose ', '2024-01-31 07:38:51', '2024-01-31 08:57:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accounts_email_unique` (`email`),
  ADD KEY `accounts_user_id_foreign` (`user_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `inventories_job_order_id_foreign` (`job_order_id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `vehicle_history`
--
ALTER TABLE `vehicle_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_history_account_id_foreign` (`account_id`),
  ADD KEY `vehicle_history_vehicle_id_foreign` (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_orders`
--
ALTER TABLE `job_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle_history`
--
ALTER TABLE `vehicle_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `inventories`
--
ALTER TABLE `inventories`
  ADD CONSTRAINT `inventories_job_order_id_foreign` FOREIGN KEY (`job_order_id`) REFERENCES `job_orders` (`id`) ON DELETE CASCADE;

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

--
-- Constraints for table `vehicle_history`
--
ALTER TABLE `vehicle_history`
  ADD CONSTRAINT `vehicle_history_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vehicle_history_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
