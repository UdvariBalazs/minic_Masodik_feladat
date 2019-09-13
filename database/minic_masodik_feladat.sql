-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 01:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minic_masodik_feladat`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(1, 'Iron Bank of Braavos', NULL, 'storage/app/public/logos/1567694689_iron-bank_logo.png', NULL, NULL, '2019-09-12 14:17:48'),
(2, 'International Business Machines', 'contact@ibm.com', 'storage/app/public/logos/1567700939_IBM_logo.png', 'https://www.ibm.com/', NULL, NULL),
(3, 'Ival Limited', 'ivylawson@ivalglobal.com', NULL, 'www.ivalglobal.com', '2019-09-05 08:51:44', '2019-09-05 08:51:44'),
(4, 'Safeway Estates Ltd.', NULL, NULL, 'www.safewayestates.com', '2019-09-05 08:53:26', '2019-09-05 08:53:26'),
(5, 'JPMorgan Chase', NULL, 'storage/app/public/logos/1567700982_jpmorgan-chase.jpg', 'www.jpmorganchase.com', '2019-09-05 08:57:10', '2019-09-05 08:57:10'),
(6, 'China Construction Bank', NULL, 'storage/app/public/logos/1567701002_china-construction-bank.jpg', 'http://www.ccb.com', '2019-09-05 08:59:25', '2019-09-05 08:59:25'),
(8, 'Apple', NULL, 'storage/app/public/logos/1567701080_apple.png', 'www.apple.com', '2019-09-05 09:07:57', '2019-09-05 09:07:57'),
(9, 'Royal Dutch Shell', NULL, 'storage/app/public/logos/1567701129_royal-dutch-shell.jpg', 'www.shell.com', '2019-09-05 09:08:59', '2019-09-05 09:08:59'),
(10, 'Samsung Electronics', NULL, 'storage/app/public/logos/1567701152_samsung.jpg', 'www.samsung.com', '2019-09-05 09:11:31', '2019-09-05 09:11:31'),
(12, 'Microsoft', NULL, 'storage/app/public/logos/1567701209_microsoft.jpg', 'www.microsoft.com', '2019-09-05 09:14:20', '2019-09-05 09:14:20'),
(13, 'Amazon', NULL, 'storage/app/public/logos/1567701271_amazon.png', 'www.amazon.com', '2019-09-05 09:15:11', '2019-09-05 09:15:11'),
(14, 'Volkswagen Group', NULL, 'storage/app/public/logos/1567760398_volkswagen.png', 'www.volkswagenag.com', '2019-09-06 05:59:58', '2019-09-06 05:59:58'),
(15, 'Berkshire Hathaway', NULL, NULL, 'https://www.berkshirehathaway.com', '2019-09-06 06:00:38', '2019-09-06 06:00:38'),
(16, 'China Mobile', 'ca@chinamobilehk.com', NULL, 'https://www.chinamobileltd.com', '2019-09-06 06:10:06', '2019-09-06 06:10:06'),
(17, 'Intel', NULL, NULL, 'www.intel.com', '2019-09-06 06:20:30', '2019-09-06 06:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `email`, `phone`, `created_at`, `updated_at`, `company`) VALUES
(1, 'Tycho', 'Nestoris', NULL, NULL, NULL, '2019-09-12 14:13:34', 1),
(3, 'Richard', 'Belding', 'richard.belding@ibm.com', '+1-202-555-0156', '2019-09-04 02:29:48', '2019-09-04 02:29:48', 2),
(4, 'Zachary', 'Morris', 'zachary.morris@ibm.com', '+1-202-555-0129', NULL, NULL, 2),
(5, 'Kiyana', 'Peat', '', NULL, '2019-09-04 02:43:37', '2019-09-04 02:43:37', 1),
(6, 'Ashter', 'Allyrion', NULL, NULL, '2019-09-04 02:50:27', '2019-09-04 02:50:27', 1),
(7, 'Kylis', 'Cantell', NULL, NULL, '2019-09-04 08:51:39', '2019-09-04 08:51:39', 1),
(8, 'Kimberley', 'Swanson', 'kimberley.swanson@gmail.com', '+1-202-555-0138', '2019-09-05 06:22:23', '2019-09-05 06:22:23', 13),
(9, 'Hugh', 'Marks', 'hugh.marks@gmail.com', '+1-202-555-0167', '2019-09-05 06:23:34', '2019-09-12 14:07:28', NULL),
(10, 'Mae', 'Vazquez', 'mae.vazquez@gmail.com', '+1-202-555-0147', '2019-09-05 06:24:18', '2019-09-05 06:24:18', 12),
(11, 'Maya', 'Patel', 'maya.patel@gmail.com', '+1-202-555-0157', '2019-09-05 06:25:26', '2019-09-05 06:25:26', 13),
(12, 'Penelope', 'Church', 'penelope.church@yahoo.com', '+1-202-555-0120', '2019-09-05 06:26:25', '2019-09-12 13:44:01', NULL),
(13, 'Courtney', 'Salas', 'courtney.salas@yahoo.com', '+1-202-555-0134', '2019-09-05 06:27:17', '2019-09-05 06:27:17', 10),
(14, 'Harvey', 'Davenport', 'harvey.davenport@yahoo.com', '+1-202-555-0176', '2019-09-05 06:28:00', '2019-09-05 06:28:00', 9),
(15, 'Alina', 'Fuentes', 'alina.fuentes@gmail.com', '+1-202-555-0155', '2019-09-05 06:28:41', '2019-09-05 06:28:41', 9),
(16, 'Rachael', 'Kent', 'rachael.kent@gmail.com', '+1-202-555-0124', '2019-09-05 06:29:17', '2019-09-05 06:29:17', 8),
(17, 'Arthur', 'Cooke', 'arthur.cooke@yahoo.com', '+1-202-555-0155', '2019-09-05 06:30:01', '2019-09-05 06:30:01', 3),
(18, 'Matthew', 'Berry', 'matthew.berry@gmail.com', '+1-202-555-0120', '2019-09-05 06:30:34', '2019-09-05 06:30:34', 2),
(19, 'Euan', 'Barker', 'euan.barker@yahoo.com', '+1-202-555-0156', '2019-09-05 06:31:08', '2019-09-05 06:31:08', 4),
(20, 'Julian', 'Ali', 'julian.ali@hotmail.com', '+1-202-555-0114', '2019-09-05 06:31:49', '2019-09-05 06:31:49', 4),
(21, 'Amira', 'Villarreal', 'a.villarreal@hotmail.com', '+1-202-555-0149', '2019-09-05 06:32:42', '2019-09-05 06:32:42', 5),
(22, 'Jessie', 'Wagner', 'jessie.wagner@yahoo.com', '+1-202-555-0156', '2019-09-05 06:33:17', '2019-09-05 06:33:17', 6),
(23, 'Stephen', 'Ramos', 'stephen.ramos@gmail.com', '+1-202-555-0124', '2019-09-05 06:33:48', '2019-09-12 14:07:28', NULL),
(24, 'Terry', 'Li', 'terry.li@gmail.com', '+1-202-555-0125', '2019-09-05 06:34:27', '2019-09-05 06:34:27', 6),
(25, 'Ruby', 'Rivas', 'ruby.rivas@hotmail.com', '+1-202-555-0169', '2019-09-05 06:35:43', '2019-09-12 13:44:01', NULL),
(26, 'Marzanna', 'Liza', 'marzanna.liza@yahoo.com', '+1-202-555-0137', '2019-09-06 02:39:39', '2019-09-12 13:44:01', NULL),
(27, 'Paschalis', 'Germana', 'paschalis.germana@gmail.com', '+1-202-555-0161', '2019-09-06 02:58:35', '2019-09-06 02:58:35', 6),
(28, 'Curtis', 'Lacy', 'curtis.lacy@gmail.com', '+1-202-555-0139', '2019-09-06 03:06:42', '2019-09-06 03:06:42', 14),
(29, 'Władysław', 'Tria', 'władysław.tria@gmail.com', '+1-202-555-0152', '2019-09-06 03:16:04', '2019-09-06 03:16:04', 15),
(30, 'Phyllis Winifrid', 'Phyllis Winifrid', 'phyllis.winifrid@hotmail.com', '+1-202-555-0183', '2019-09-06 03:39:01', '2019-09-06 03:39:01', 15),
(31, 'Willoughby', 'Bulut ', 'willoughby.bulut@yahoo.com', '+1-202-555-0131', '2019-09-06 05:01:40', '2019-09-06 05:01:40', 17);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_09_03_083851_create_companies_table', 1),
(4, '2019_09_06_151203_create_users_table', 2),
(5, '2019_09_03_083907_create_employees_table', 3),
(6, '2019_09_03_094835_update_employees_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@admin.com', '$2y$10$hD.AaJVwNUaPzlARgq88GuWy5bYFDUoB2Ne/sQLXXIRtrIBbxUnFu', NULL, '2019-09-06 13:01:26', '2019-09-06 13:01:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_company_foreign` (`company`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_company_foreign` FOREIGN KEY (`company`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
