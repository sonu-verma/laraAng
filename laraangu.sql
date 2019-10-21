-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 10:43 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraangu`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'sonu.verma0715@gmail.com', NULL, '$2y$10$hEUPrD.axN4lGsJZMd/rP..MHZiaym1x6aT8MolgijcCb.iJKVmgW', NULL, '2019-01-04 00:21:02', '2019-01-04 00:21:02'),
(2, 'asdfasdf', 'alpeshjoshi2397@gmail.com', NULL, '$2y$10$r4oNK9JEkaZBQ5TAXRZKNurRJe/zq4ZFnTgp72lG4OgnjOcSPjHCa', NULL, '2019-01-04 00:35:34', '2019-01-04 00:35:34'),
(3, 'djMac', 'dj.mac@gmail.com', NULL, '$2y$10$o/mwRsa8blcmEgm1o3zxuurUJ6VSElBqI6gTEMbtxwkm2w2coigOa', NULL, '2019-01-04 00:55:37', '2019-01-04 00:55:37'),
(4, 'ajju', 'ajju@gmail.com', NULL, '$2y$10$X98GGYSLp74/bYyQrG0BgOFqMAtTeXllBbhBzlMjBEm6HphxfbtU.', NULL, '2019-01-04 04:13:06', '2019-01-04 04:13:06'),
(5, 'sonu verma', 'sonu@evolutionco.com', NULL, '$2y$10$VvfK7TOBMO.A/3vt33NK7eTdImwMoscBy6ieAePRx1Ri2KjiucwKO', NULL, '2019-09-29 14:01:18', '2019-09-29 14:01:18'),
(6, 'sonu verma', 'sonu1@evolutionco.com', NULL, '$2y$10$uxqe69bl2RzjpC5/R8h99u6EM1mlbSWXDC6WD231xQdC17/2HituS', NULL, '2019-09-29 14:01:34', '2019-09-29 14:01:34'),
(7, 'sonu verma', 'ram@evolutionco.com', NULL, '$2y$10$QuF1dYGJ4tYDjAKooQymHeV6bc42YtY4fLnRXqft3aE/FYeVb4VKG', NULL, '2019-09-29 14:01:53', '2019-09-29 14:01:53'),
(8, 'ram kumar', 'ram@gmail.com', NULL, '$2y$10$9sM1pFNPnoSnRYFfYRfU7OePtt1eeRr/walwa2fmHSABcVHj8CyQ.', NULL, '2019-09-29 14:03:05', '2019-09-29 14:03:05'),
(9, 'raju', 'raju@gmail.com', NULL, '$2y$10$jmxNfvJH26gCm.LjKwrlEuBnmMklHqIZscq2R5vaBjVThDdjxLNOS', NULL, '2019-09-29 15:14:34', '2019-09-29 15:14:34');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
