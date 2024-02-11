-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 06:08 PM
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
(5, 'Robert', 'Bang', 'Ryan', 'Robert Bang Ryan', 'g.aldrich.buenavente@gmail.com', 'abc', '1994-03-16', '09568402542', 'blk 1 lot 1 forest park', 'BulacanCity', 'PH', NULL, '2024-01-07 07:48:21', '2024-02-04 05:36:03', NULL),
(6, 'Cait', 'Mcdo', 'Crosby', 'Cait Mcdo Crosby', 'bacarrashiane15@gmail.com', 'abc', '1992-03-25', '09184315672', 'blk 2 lot 2 senate phase 1', 'Makati', 'PH', NULL, '2024-01-07 07:50:23', '2024-02-04 02:53:29', NULL),
(7, 'Yolan', 'Dag', 'Pogi', 'Yolan Dag Pogi', 'jhaycrisp@gmail.com', 'abc123456', '1995-12-06', '09176541246', 'blk 1 lot 2 carissa brgy 101', 'Malabon', 'PH', NULL, '2024-01-21 06:51:12', '2024-02-04 00:07:55', NULL),
(8, 'Rona', 'D.L', 'Cab', 'Rona D.L Cab', 'Rona@gmail.com', '123456abc', '2024-01-18', '09181234521', 'blk 1 lot 2 Carissa Brgy 170', 'Caloocan', 'PH', NULL, '2024-01-21 07:09:49', '2024-01-21 07:09:49', 12),
(9, 'Staff', 'Staff', 'Staff', 'Staff Staff Staff', 'staff@gmail.com', 'Staff123', '2024-02-07', '09273812940', 'Blk 5 Lot 5, Kamagong st, nangka, Marikina city', 'Marikina City', 'PH', NULL, '2024-01-29 00:29:31', '2024-02-07 06:58:11', 13);

-- --------------------------------------------------------

--
-- Table structure for table `breezy_sessions`
--

CREATE TABLE `breezy_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authenticatable_type` varchar(255) NOT NULL,
  `authenticatable_id` bigint(20) UNSIGNED NOT NULL,
  `panel_id` varchar(255) DEFAULT NULL,
  `guard` varchar(255) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breezy_sessions`
--

INSERT INTO `breezy_sessions` (`id`, `authenticatable_type`, `authenticatable_id`, `panel_id`, `guard`, `ip_address`, `user_agent`, `expires_at`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\User', 13, NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6InRLcWJsblZBdTZRM0wzQ0p2eU9xVGc9PSIsInZhbHVlIjoibnZQZzEvQ0lMZjhMU1J2ZjhZdis0Vm1pYTlNY3JHeVhpZkk5MXlsMlVhUT0iLCJtYWMiOiI0MzJlYjVjMGUwZGRlZjYxZDQxYTcwMjhhYzg4Zjc0N2I1MWJkMDI0NTkxOGMyMGNkYWNiMDdhYjkyMWE0OWVkIiwidGFnIjoiIn0=', 'eyJpdiI6IjY1WTlUUDkwNkhtenY2WHoxUElnYXc9PSIsInZhbHVlIjoiRU9uaXRYY1MwSHl6MklMN3ZyaS8wVEpCWGdtT01obXNveFpvWnZBejRQL0JHeXFUb2FKTTNqczhSVVBwK3BtUkZYbEVEeTFwYzgwTDFta08zd0Q4bUZyNWYvWjhIUi9VL1hsM056TjZHZVV1VGNmMm9uV1ZHcCtKc214dTlCSGRWaldOVTBnSFg5RVl5QWlQMGFlL2xmRndpTGl2cVVPMXhSeG1Ic0RUZTZucGtMdkZHcnRSVVJFcGdxUnl6TnowaXp2aGVkQlp3Tjh4YWxDb1JNRlhrazN0RzhLNTJQRkZ1Y2IrZWVqcFNWemVDTnRRNG9jVEtJakx5VjRXS0NHbU54YXd4cnhwMXNqbmJCN2YrL2Ixa2c9PSIsIm1hYyI6Ijc4ZjFmYmQxODYwNGU1MTQ4ZjdiZjg0M2YyMWI5NjAyMTJjNzU1MmQ2OTRiZjgzY2YwOGQ3YTEwNjY2OWMwYWIiLCJ0YWciOiIifQ==', NULL, '2024-02-10 03:18:44', '2024-02-10 03:18:44'),
(4, 'App\\Models\\User', 15, NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6ImZvQmJjRUVneUV2QTlxOEo4M0M0aWc9PSIsInZhbHVlIjoiK0Q3Nk9xQmRPNnBjTlp1SjhHTDZ0aFJURWJsbDNhSTVTLy8wMlVSb2tQRT0iLCJtYWMiOiIxNjZhMjZkMDAzZTllMjAyNTQwN2YyNjY0MjUxNmVkNGYxNGI3OTBkZDkxYmQ2NDExYzAyNjBkNDhiNmRkOGI1IiwidGFnIjoiIn0=', 'eyJpdiI6IkNQSkRPcEk2UmFleHBuSUlDSGxmRmc9PSIsInZhbHVlIjoiYllHOUI0aUZuaURPaEdWWEhHT3dDK3hERlNST3hSVzExcEF5MHBmbGttY29wcWlpYjYxbnE0amlJaE9nVjN0MVNZWExlZ3ZpNTcxODI4aEZsakQrMXErcHAvWnBNeCtjN25wdk1uZXdPS0xPYTQzMFN5Tmh5d1ZqOTZGaVdjaDUzbHJybElsY1FZZW8reGNXMkZxR2hVSk1iREt5U24vT1JFWFdUcklGMVFpOXQ1Y0dxdXVWRWp1OTl5L29FZXZuT1Rka1ZBZTBYZDQ2a2JVaGNYbmZpM3UzQ2VhcVZaZzM5aGx1NGRpZDdUN21PcU1Vd2ROQnFNTDV1R0pyR0pGeFRqM2Y5NTY5cWJhOFNucCtHMGpzdUE9PSIsIm1hYyI6IjYyNzAzYTAyOTFmNGZkZDUwNGE1ZGExM2E4OTgwZjk5NDYyNzE1ZmRlZDZhMmYwNDkxYzcyZjI2ZGY3Y2UxN2UiLCJ0YWciOiIifQ==', '2024-02-10 03:27:36', '2024-02-10 03:25:56', '2024-02-10 03:27:36');

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
(6, 'Prestone Coolant', 'Prestone 50/50 Prediluted Coolant Blue - 1 Gallon', 94, '1499.00', '2024-01-30 21:09:40', '2024-02-04 05:36:42', NULL);

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
(1, 6, '01HPAAA9EXBD17VDX11BQSJC48.jpg', 'Jose', 9000, 51, 'Payed via cash ', '2024-01-17 19:40:38', '2024-02-10 12:11:21'),
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
(47, 4, 'pending', '2024-01-31 17:49:16', '2024-01-31 17:49:16', 7, 5, 1),
(48, 2, 'pending', '2024-02-04 05:36:42', '2024-02-04 05:36:42', 5, 6, 1);

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
(32, '2024_01_31_232801_add_foreign_key_to_inventories', 19),
(37, '2024_01_24_142331_create_permission_tables', 20),
(38, '2024_02_04_153550_add_engine_no_to_vehicles_table', 21),
(39, '2024_02_05_191233_add_notes_to_vehicle_history_table', 22),
(40, '2024_02_10_110925_create_breezy_sessions_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 13),
(4, 'App\\Models\\User', 12),
(5, 'App\\Models\\User', 12);

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
('fd308146-f373-43d2-ae0b-994685c5854c', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 13, '{\"actions\":[{\"name\":\"Mark as Read\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"Mark as read\",\"shouldClose\":false,\"shouldMarkAsRead\":true,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":null,\"view\":\"filament-actions::link-action\"}],\"body\":\"The service for Lancer is in progress.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-information-circle\",\"iconColor\":\"primary\",\"status\":null,\"title\":\"Vehicle Update\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-01-31 16:38:17', '2024-01-31 16:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('g.aldrich.buenavente@gmail.com', '$2y$12$Lvidx9XgsDclmhaREFfnNu/b0CbdGxlSEctahDmcZ37vGNnhvhsRa', '2024-02-04 06:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_account', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(2, 'view_any_account', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(3, 'create_account', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(4, 'update_account', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(5, 'restore_account', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(6, 'restore_any_account', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(7, 'replicate_account', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(8, 'reorder_account', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(9, 'delete_account', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(10, 'delete_any_account', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(11, 'force_delete_account', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(12, 'force_delete_any_account', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(13, 'view_inventory', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(14, 'view_any_inventory', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(15, 'create_inventory', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(16, 'update_inventory', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(17, 'restore_inventory', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(18, 'restore_any_inventory', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(19, 'replicate_inventory', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(20, 'reorder_inventory', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(21, 'delete_inventory', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(22, 'delete_any_inventory', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(23, 'force_delete_inventory', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(24, 'force_delete_any_inventory', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(25, 'view_invoice', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(26, 'view_any_invoice', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(27, 'create_invoice', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(28, 'update_invoice', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(29, 'restore_invoice', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(30, 'restore_any_invoice', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(31, 'replicate_invoice', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(32, 'reorder_invoice', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(33, 'delete_invoice', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(34, 'delete_any_invoice', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(35, 'force_delete_invoice', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(36, 'force_delete_any_invoice', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(37, 'view_job::order', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(38, 'view_any_job::order', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(39, 'create_job::order', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(40, 'update_job::order', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(41, 'restore_job::order', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(42, 'restore_any_job::order', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(43, 'replicate_job::order', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(44, 'reorder_job::order', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(45, 'delete_job::order', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(46, 'delete_any_job::order', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(47, 'force_delete_job::order', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(48, 'force_delete_any_job::order', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(49, 'view_role', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(50, 'view_any_role', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(51, 'create_role', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(52, 'update_role', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(53, 'delete_role', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(54, 'delete_any_role', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(55, 'view_user', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(56, 'view_any_user', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(57, 'create_user', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(58, 'update_user', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(59, 'restore_user', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(60, 'restore_any_user', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(61, 'replicate_user', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(62, 'reorder_user', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(63, 'delete_user', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(64, 'delete_any_user', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(65, 'force_delete_user', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(66, 'force_delete_any_user', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(67, 'view_vehicle', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(68, 'view_any_vehicle', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(69, 'create_vehicle', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(70, 'update_vehicle', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(71, 'restore_vehicle', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(72, 'restore_any_vehicle', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(73, 'replicate_vehicle', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(74, 'reorder_vehicle', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(75, 'delete_vehicle', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(76, 'delete_any_vehicle', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(77, 'force_delete_vehicle', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(78, 'force_delete_any_vehicle', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(79, 'view_vehicle::history', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(80, 'view_any_vehicle::history', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(81, 'create_vehicle::history', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(82, 'update_vehicle::history', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(83, 'restore_vehicle::history', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(84, 'restore_any_vehicle::history', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(85, 'replicate_vehicle::history', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(86, 'reorder_vehicle::history', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(87, 'delete_vehicle::history', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(88, 'delete_any_vehicle::history', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(89, 'force_delete_vehicle::history', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(90, 'force_delete_any_vehicle::history', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(91, 'page_MyProfilePage', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(92, 'page_DetailAccount', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(93, 'widget_UserStatWidget', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(94, 'widget_VehicleType', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(95, 'widget_TotalRevenue', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50'),
(96, 'widget_JobOrderWidget', 'web', '2024-02-02 03:18:50', '2024-02-02 03:18:50');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'web', '2024-02-02 03:18:49', '2024-02-02 03:18:49'),
(2, 'View:Inventory', 'web', '2024-02-02 03:39:43', '2024-02-02 03:39:43'),
(3, 'View:information', 'web', '2024-02-07 07:11:18', '2024-02-07 07:11:18'),
(4, 'Vehicle', 'web', '2024-02-11 07:43:59', '2024-02-11 07:43:59'),
(5, 'Account', 'web', '2024-02-11 07:45:40', '2024-02-11 07:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 5),
(2, 1),
(2, 5),
(3, 1),
(3, 5),
(4, 1),
(4, 5),
(5, 1),
(5, 5),
(6, 1),
(6, 5),
(7, 1),
(7, 5),
(8, 1),
(8, 5),
(9, 1),
(9, 5),
(10, 1),
(10, 5),
(11, 1),
(11, 5),
(12, 1),
(12, 5),
(13, 1),
(13, 2),
(13, 3),
(14, 1),
(14, 2),
(14, 3),
(15, 1),
(15, 2),
(15, 3),
(16, 1),
(16, 2),
(16, 3),
(17, 1),
(17, 2),
(17, 3),
(18, 1),
(18, 2),
(18, 3),
(19, 1),
(19, 2),
(19, 3),
(20, 1),
(20, 2),
(20, 3),
(21, 1),
(21, 2),
(21, 3),
(22, 1),
(22, 2),
(22, 3),
(23, 1),
(23, 2),
(23, 3),
(24, 1),
(24, 2),
(24, 3),
(25, 1),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 1),
(37, 3),
(37, 4),
(38, 1),
(38, 3),
(38, 4),
(39, 1),
(39, 3),
(39, 4),
(40, 1),
(40, 3),
(40, 4),
(41, 1),
(41, 3),
(41, 4),
(42, 1),
(42, 3),
(42, 4),
(43, 1),
(43, 3),
(43, 4),
(44, 1),
(44, 3),
(44, 4),
(45, 1),
(45, 3),
(45, 4),
(46, 1),
(46, 3),
(46, 4),
(47, 1),
(47, 3),
(47, 4),
(48, 1),
(48, 3),
(48, 4),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(67, 3),
(67, 4),
(68, 1),
(68, 3),
(68, 4),
(69, 1),
(69, 3),
(69, 4),
(70, 1),
(70, 3),
(70, 4),
(71, 1),
(71, 3),
(71, 4),
(72, 1),
(72, 3),
(72, 4),
(73, 1),
(73, 3),
(73, 4),
(74, 1),
(74, 3),
(74, 4),
(75, 1),
(75, 3),
(75, 4),
(76, 1),
(76, 3),
(76, 4),
(77, 1),
(77, 3),
(77, 4),
(78, 1),
(78, 3),
(78, 4),
(79, 1),
(79, 3),
(80, 1),
(80, 3),
(81, 1),
(81, 3),
(82, 1),
(82, 3),
(83, 1),
(83, 3),
(84, 1),
(84, 3),
(85, 1),
(85, 3),
(86, 1),
(86, 3),
(87, 1),
(87, 3),
(88, 1),
(88, 3),
(89, 1),
(89, 3),
(90, 1),
(90, 3),
(91, 1),
(91, 5),
(92, 1),
(92, 5),
(93, 1),
(94, 1),
(95, 1),
(96, 1);

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
('TPyk5qXI8KRpK8sFxFOBWwU3Xyt6lAhjk5IaxNZB', 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidzgybTFPeWJINGdEZHQzd3Q4Mk02cTZtMzU2Z0tSOU5sUkczUlJHWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkWGJZU2lwaEVWUEN6OFV0L01sZmNhdU9ES1JNaFEzMDVhNjNZWGtrUVBhcENCbEt5amtEVDYiO30=', 1707671191),
('xw0y99ndCPQy5LrNJYU2fk8hs5C6hd7hiKz2fH2u', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRTE0WkRCbTRlY210dDBhaFhFTWcwUTRDYktVTTl2R2ttbWtpZDU1UyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi91c2VycyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRpdUthWGhqUUZVQlg5NXc5dzJDTUdPalBubVJVWUZ6TDhycTlmR1pKUXpNaFd1UzVteWFDLiI7czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1707671162);

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
(12, 'Rona', 'rona@gmail.com', NULL, '$2y$12$XbYSiphEVPCz8Ut/MlfcauODKRMhQ305a63YXkkQPapCBlKyjkDT6', NULL, NULL, NULL, NULL, '2024-01-21 06:37:00', '2024-02-11 09:03:55', 'USER'),
(13, 'staff', 'staff123@gmail.com', NULL, '$2y$12$lbn72UmRRFDNIjDk33VWHeLQY2vT2xP4K3Te6DgCqYvFHlC.gZRyy', NULL, NULL, NULL, NULL, '2024-01-22 00:39:41', '2024-02-11 08:58:22', 'USER'),
(14, 'sample', 'sample@gmail.com', NULL, '$2y$12$goDDy/yKhPqhuGhOpJy0rOyS17rdrINxhPNjBDf4Q5vrDNqOb8NQi', NULL, NULL, NULL, NULL, '2024-01-22 01:02:39', '2024-01-22 01:02:39', 'USER'),
(15, 'glenn', 'jhaycrisp@gmail.com', NULL, '$2y$12$RA0eF2JgdZBZJVyJffy2Bu9akZfit0OgL4rOHXlOSQlKNzvBkKuxy', NULL, NULL, NULL, NULL, '2024-02-04 06:43:22', '2024-02-10 03:21:27', 'USER');

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
  `miles_per_gallon` decimal(8,2) UNSIGNED DEFAULT NULL,
  `engine_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `account_id`, `image`, `make`, `model`, `year`, `license_plate`, `color`, `chassis_no`, `fuel_type`, `transmission`, `notes`, `created_at`, `updated_at`, `miles_per_gallon`, `engine_no`) VALUES
(1, 5, '\"01HNA2QVHH7Y4NQKK234B5MNQ3.png\"', 'Honda', 'civic', 2010, '1', 'black', 'asd151', 'Diesel', 'Manual', 'Fully paid done change oil - Jan 22, 2024\n\nTire change - jan 23, 2023 - Jose', '2024-01-07 07:59:07', '2024-02-06 06:30:20', NULL, '52ABC104280'),
(2, 5, '\"01HPAA02Y7FWC3E2HTHP7EPCYF.jpg\"', 'mitsubishi', 'adventure', 2015, '2', 'white', 'asd124', 'Unleaded', 'Automatic', 'Kotse ni VP-Sara', '2024-01-07 08:12:27', '2024-02-10 12:05:33', NULL, '52ABC420280'),
(3, 6, NULL, 'Honda', 'Corolla', 1991, '123asd', 'green', 'asd123gasd123', 'Diesel', 'Manual', 'Kotse ng babae', '2024-01-12 01:17:56', '2024-02-10 12:04:27', NULL, '52XYZ104281'),
(4, 7, NULL, 'Ford', 'Raptor', 2005, '16', 'blue', 'asd123sd1a41', 'Diesel', 'Manual', 'kotse ni sk chairman', '2024-01-21 07:01:26', '2024-02-05 18:54:27', '26.00', '52WVC10338'),
(5, 8, NULL, 'Ford', 'Ranger', 2016, '10', 'Purple', 'abc123asd123', 'Diesel', 'Manual', 'Kotse ni idle', '2024-01-21 07:12:57', '2024-02-05 19:33:11', NULL, '52GHJ10620'),
(6, 8, NULL, 'Honda', 'city', 2023, '2020', 'blac', '12315641', 'Unleaded', 'Manual', NULL, '2024-01-22 18:56:24', '2024-02-05 19:33:23', NULL, '52JKL104280'),
(7, 9, NULL, 'mitsubishi', 'Lancer', 2002, '3', 'black', '10', 'Diesel', 'Manual', NULL, '2024-01-29 00:31:00', '2024-02-05 19:33:34', NULL, '52ERT104280');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_history`
--

INSERT INTO `vehicle_history` (`id`, `account_id`, `vehicle_id`, `task_performed`, `performed_by`, `created_at`, `updated_at`, `notes`) VALUES
(2, 5, 1, '[{\"task\":\"Change Oil\",\"date_performed\":\"2024\\/01\\/31\",\"mileage\":\"30000\"},{\"task\":\"Wheel ailgnment\",\"date_performed\":\"2024\\/01\\/31\",\"mileage\":\"30000\"}]', 'Jose ', '2024-01-31 07:38:51', '2024-01-31 08:57:22', NULL),
(3, 7, 4, '[{\"task\":\"ECU RESET\",\"mileage\":\"1000\",\"date_performed\":\"2024\\/02\\/04\"},{\"task\":\"Tune-Up \",\"mileage\":\"1000\",\"date_performed\":\"2024\\/02\\/04\"}]', 'Jose ', '2024-02-04 07:27:10', '2024-02-05 11:14:56', 'Recommedations:\n\nchange tire - Date');

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
-- Indexes for table `breezy_sessions`
--
ALTER TABLE `breezy_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `breezy_sessions_authenticatable_type_authenticatable_id_index` (`authenticatable_type`,`authenticatable_id`);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `breezy_sessions`
--
ALTER TABLE `breezy_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle_history`
--
ALTER TABLE `vehicle_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

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
