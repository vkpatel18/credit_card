-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 07:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credit_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit_cards`
--

CREATE TABLE `credit_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `expire_date` varchar(255) DEFAULT NULL,
  `cvv` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `card_type` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `is_delete` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_24_024329_add_phone_number_users_table', 2),
(6, '2024_02_24_024636_add_is_lock_users_table', 3),
(7, '2024_03_03_165004_create_credit_cards_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL COMMENT '1 is super_admin 2 is admin',
  `is_lock` varchar(255) NOT NULL DEFAULT '0' COMMENT '0 is unlock 1 is lock',
  `is_delete` varchar(255) NOT NULL DEFAULT '0' COMMENT '0 is note delete 1 is delete',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone_number`, `email`, `email_verified_at`, `start_date`, `end_date`, `password`, `role`, `is_lock`, `is_delete`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '+917874319733', 'superadmin@gmail.com', NULL, '2024-02-26 ', '2024-02-28 ', '$2y$10$7hXWATEciJixcIMKzj2.UO3PXuEMMWTdyhMsHGB5xRZmzge7IT3Ae', '1', '0', '0', NULL, '2024-02-26 11:27:12', '2024-02-26 11:27:12'),
(2, 'Admin', '+917874319733', 'admin@gmail.com', NULL, '2024-02-10', '2024-02-15 ', '$2y$10$7hXWATEciJixcIMKzj2.UO3PXuEMMWTdyhMsHGB5xRZmzge7IT3Ae', '2', '0', '0', NULL, '2024-02-26 11:27:12', '2024-03-13 12:59:55'),
(5, 'karan', '4545435345', 'vorakaran83@gmail.com', NULL, '2024-03-13', '2024-03-18', '$2y$10$N0cRfdDxtpHh0lhg3WDaieWFL1GJXXNKCdn5wm2N5HAXhBXEEgI1O', '2', '0', '0', NULL, '2024-03-13 11:42:39', '2024-03-13 13:06:31'),
(6, 'vora', '3454354352', 'karan@gmail.com33', NULL, '2024-03-13', '2024-03-17', '$2y$10$EOWAGFfHA0iSLneudz0chulH7TNa/TrVU.uPWN/zgKfGCtukdnWdW', '2', '0', '0', NULL, '2024-03-13 11:44:23', '2024-03-13 12:56:04'),
(7, 'pppppppp', '8238517548', 'viratkohli18@gmail.com', NULL, '2024-03-06', '2024-03-15', '$2y$10$uaLOEC7JRFVtC/cEIP1Btesox7E.0Us0fSZn/bJFv6Am6LPR6ZzVO', '2', '0', '0', NULL, '2024-03-13 11:45:09', '2024-03-13 13:05:29'),
(9, 'addwdwe', '3453454354', 'Admin@gmail.com11', NULL, '2024-03-14', '2024-03-20', '$2y$10$D3bf5LdOU5flj0w5wwvjzOgFTKJCSdArQ1ZynsKS1BImAS/0h.JF6', '2', '0', '0', NULL, '2024-03-13 11:46:02', '2024-03-13 12:56:12'),
(10, 'addwdwe', '343242342', 'karan@gmail.com4534', NULL, '2024-03-08', '2024-03-22', '$2y$10$SXn8Ru6CUZAV4B1P96k2iOaih9rqAipEvWzgtRqwK8hE5XLWCWhRS', '2', '1', '0', NULL, '2024-03-13 11:47:07', '2024-03-13 13:07:32'),
(12, 'fbththersr', '23423', 'viratkohli18@gmail.com77', NULL, '2024-03-16', '2024-03-07', '$2y$10$Nj9w3tCAM.0HztSWnnYcPuV0mdq7CXCqcY4ZiqtDLrsbJDMOCCHJS', '2', '0', '0', NULL, '2024-03-13 11:59:33', '2024-03-13 13:06:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit_cards`
--
ALTER TABLE `credit_cards`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `credit_cards`
--
ALTER TABLE `credit_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
