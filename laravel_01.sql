-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 06:58 PM
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
-- Database: `laravel_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `cat_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(5, 1, 'Md Sagor Hossain', '1909194819.JPG', '2023-03-08 10:46:27', '2023-03-08 10:46:27'),
(6, 2, 'AC Socket', '1824300064.JPG', '2023-03-08 10:55:50', '2023-03-08 10:55:50'),
(7, 2, 'Led Light', '81285590.png', '2023-03-08 11:06:57', '2023-03-08 11:06:57'),
(8, 1, 'Head Phone', '71967794.JPG', '2023-03-08 11:45:44', '2023-03-08 11:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `brand__galleries`
--

CREATE TABLE `brand__galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand__galleries`
--

INSERT INTO `brand__galleries` (`id`, `brand_id`, `images`, `created_at`, `updated_at`) VALUES
(2, 2, '665930402.JPG', '2023-03-06 12:03:21', '2023-03-06 12:03:21'),
(3, 2, '1325120142.JPG', '2023-03-06 12:03:23', '2023-03-06 12:03:23'),
(10, 2, '298643644.JPG', '2023-03-07 13:16:33', '2023-03-07 13:16:33'),
(19, 5, '1201021321.png', '2023-03-08 10:46:27', '2023-03-08 10:46:27'),
(20, 5, '121064675.gif', '2023-03-08 10:46:27', '2023-03-08 10:46:27'),
(21, 5, '805623476.jpg', '2023-03-08 10:46:28', '2023-03-08 10:46:28'),
(22, 5, '132096182.jpg', '2023-03-08 10:46:30', '2023-03-08 10:46:30'),
(23, 5, '897652505.jpg', '2023-03-08 10:46:31', '2023-03-08 10:46:31'),
(24, 6, '1530440710.jpg', '2023-03-08 10:55:52', '2023-03-08 10:55:52'),
(25, 6, '2015200714.jpg', '2023-03-08 10:55:54', '2023-03-08 10:55:54'),
(26, 6, '787931413.jpg', '2023-03-08 10:55:56', '2023-03-08 10:55:56'),
(27, 6, '496870094.jpg', '2023-03-08 10:55:57', '2023-03-08 10:55:57'),
(28, 7, '113109911.jpg', '2023-03-08 11:06:57', '2023-03-08 11:06:57'),
(29, 7, '132436406.jpg', '2023-03-08 11:06:57', '2023-03-08 11:06:57'),
(30, 7, '734633926.jpg', '2023-03-08 11:06:57', '2023-03-08 11:06:57'),
(31, 8, '1691625319.png', '2023-03-08 11:45:44', '2023-03-08 11:45:44'),
(32, 8, '1751714240.jpg', '2023-03-08 11:45:44', '2023-03-08 11:45:44'),
(33, 8, '1439926900.jpg', '2023-03-08 11:45:44', '2023-03-08 11:45:44'),
(34, 8, '673004920.jpg', '2023-03-08 11:45:45', '2023-03-08 11:45:45'),
(35, 8, '1371120710.JPG', '2023-03-08 11:45:45', '2023-03-08 11:45:45'),
(36, 8, '1365386407.jpg', '2023-03-08 11:45:45', '2023-03-08 11:45:45'),
(37, 8, '1092251767.png', '2023-03-08 11:45:46', '2023-03-08 11:45:46'),
(38, 8, '1776221007.jpg', '2023-03-08 11:45:46', '2023-03-08 11:45:46'),
(39, 8, '748349297.jpg', '2023-03-08 11:45:46', '2023-03-08 11:45:46'),
(40, 8, '1330429683.jpg', '2023-03-08 11:45:47', '2023-03-08 11:45:47'),
(41, 8, '1597436994.JPG', '2023-03-08 11:45:47', '2023-03-08 11:45:47'),
(42, 8, '694986289.jpg', '2023-03-08 11:45:47', '2023-03-08 11:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `des`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mobile phone', 'Smart Phone', '1', '2023-03-05 12:41:02', '2023-03-06 00:10:44'),
(2, 'Coffice', 'Drinks', '2', '2023-03-05 13:50:42', '2023-03-06 09:57:29'),
(5, 'dwg3wf', 'asafcazrfdw', '1', '2023-03-05 14:25:56', '2023-03-06 09:57:25');

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
(5, '2023_03_02_173855_create_products_table', 1),
(6, '2023_03_05_051252_create_categories_table', 2),
(7, '2023_03_06_160626_create_brands_table', 3),
(8, '2023_03_06_160655_create_brand__galleries_table', 3);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 for active. 2 for inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `des`, `price`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Head Phone 1', 'Head Phone 3.5m Jack', 5000.00, 1, 1, '2023-03-02 14:39:07', '2023-03-04 13:08:41'),
(9, 'Led Light', 'Led Light 220V', 500.00, 1, 2, '2023-03-02 21:42:07', '2023-03-02 21:42:07'),
(10, 'Neck Band', 'Head Phone 3.5m Jack', 550.00, 1, 2, '2023-03-02 21:42:25', '2023-03-02 21:42:25'),
(12, 'Head Phone', 'Head Phone 3.5m Jack', 5000.00, 1, 1, '2023-03-04 12:57:44', '2023-03-04 13:08:54'),
(13, 'Head Phone', 'Head Phone 3.5m Jack', 5000.00, 1, 1, '2023-03-04 13:05:01', '2023-03-04 13:05:01'),
(14, 'Neck Band 2', 'Neck Band 2 for all edition', 1250.00, 1, 1, '2023-03-05 07:35:39', '2023-03-05 07:36:00'),
(15, 'Md Sagor Hossain', 'Head Phone 3.5m Jack 5362', 150000.00, 1, 1, '2023-03-05 09:37:10', '2023-03-05 09:37:24');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand__galleries`
--
ALTER TABLE `brand__galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brand__galleries`
--
ALTER TABLE `brand__galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
