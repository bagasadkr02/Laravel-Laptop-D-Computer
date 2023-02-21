-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 12:51 PM
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
-- Database: `service_laptop`
--

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
(2, '2022_06_23_112750_data_laptop', 1),
(3, '2022_07_19_081702_create_transactions_table', 1),
(4, '2023_02_19_110503_create_tokos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tokos`
--

CREATE TABLE `tokos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokos`
--

INSERT INTO `tokos` (`id`, `nama_toko`, `description`, `notes`, `address`, `phone_number`, `created_at`, `updated_at`) VALUES
(3, 'STORE azxcxvb', 'you always', 'j rabbit', 'Kota bandung komplek spotify 3 no 91', '085724252039', '2023-02-20 20:35:53', '2023-02-20 23:42:08'),
(5, 'STORE E', 'dalcom dalcom', 'cafe cafean', 'Kawarang kota baru new tech no 122', '085283022587', '2023-02-20 20:36:50', '2023-02-20 23:42:46'),
(6, 'STORE G', 'enjoy being pro', 'couger geming', 'Tasikmalaya jl kartu remi 1 no 12 rt 02 rw 04', '08989027175', '2023-02-20 20:38:04', '2023-02-20 23:43:59'),
(7, 'STORE M', 'OFFICIAL STORE KELLER K JL. PASIR KALIKI NO 53-55, BANDUNG (24 HOURS)', 'WELCOME TO OFFICIAL STORE KELLER M', 'Bandung jl mencester united 2 no 81 rt 4 rw 1', '081214444884', '2023-02-20 20:40:03', '2023-02-20 20:40:03'),
(8, 'STORE Z', 'a song nobodasdy knows', 'a', 'bandung a', '085162682920', '2023-02-20 21:25:34', '2023-02-20 23:44:22'),
(9, 'STOREN', 'sd', 'asd', 'Kota Bandung Jupentos Jl.Mekarharum2 No 88 rt 01 rw 05', '087744648778', '2023-02-20 21:26:01', '2023-02-20 23:44:37'),
(10, 'asdasd', 'asdasd', 'asdasd', 'asdasdasd', '081741852693', '2023-02-20 22:47:05', '2023-02-20 22:47:05'),
(15, 'toko mesjid', 'mesjid', 'mesjid', 'mesjid annur 21', '08165498765', '2023-02-21 01:50:28', '2023-02-21 01:50:28'),
(16, 'batman gaul', 'batman', 'batman', 'gotham no 85', '081214444884', '2023-02-21 01:54:45', '2023-02-21 01:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'admin', 'admin', 'admin@gmail.com', '$2y$10$90xtK8Q9hCQ1vWwYvOwwN.0ZU6hgs1z1CCxoOiJDiE0lhtJKG4qcm', 0, NULL, '2023-02-20 23:41:03', '2023-02-20 23:41:03'),
(14, 'admin1', 'admin1', 'admin1@gmail.com', '$2y$10$vSuWRYsMR5CB7v35y9c2yef6TqXzmSiMGsiF6dykNYq25w/euKwFS', 1, NULL, '2023-02-20 23:41:18', '2023-02-20 23:41:40'),
(15, 'admin2', 'admin2', 'admin2@gmail.com', '$2y$10$G1xzmB2H7xco7pS3vNzwnODL/HM1br/.ALCfT8B53aloo9J847Jo6', 0, NULL, '2023-02-20 23:41:25', '2023-02-20 23:41:25'),
(16, 'bagas', 'bagas', 'bagas@gmail.com', '$2y$10$ZqRqZg92ljt2RWITSv4bL.9tXowaHkYpXkXtyrN0fA6BUI2z700i6', 0, NULL, '2023-02-21 01:05:01', '2023-02-21 01:05:01'),
(17, 'xcvxcv', 'xcvxcv', 'xcvxcv@gmail.com', '$2y$10$gAitos4/2.1VoEawhgTPtO/K//CzXM6u4gjqrqBZ1OZWSoYup67G2', 0, NULL, '2023-02-21 01:14:15', '2023-02-21 01:14:15'),
(18, 'bagas1', 'bagas1', 'bagas1@gmail.com', '$2y$10$xmfcBMGu1FOB.XOYTX2ti.AI8vGSDPx9uRbMpcg.7Mbq8rSI4tQ6m', 0, NULL, '2023-02-21 01:25:22', '2023-02-21 01:25:22'),
(19, 'rendy', 'rendy', 'rendy@gmail.com', '$2y$10$fiInmIsAakPU0IXMjmRsO.SBP8tD/ZITkskTKpzJ7bG0/a.IbURZG', 0, NULL, '2023-02-21 01:29:18', '2023-02-21 01:29:18'),
(20, 'dhio', 'dhio', 'dhio@gmail.com', '$2y$10$qFeRHaAI7CB0GC244cnCFO51ZWNmp1QzP/zhCRShWxT1l6F3sg1mO', 0, NULL, '2023-02-21 01:41:36', '2023-02-21 01:41:36'),
(21, 'toko1', 'toko1', 'toko1@gmail.com', '$2y$10$Kmf3hhfF8pfGiTwJukk17uCNM6MPZsi2UiXgJmPbr.O1aJV5ip9Si', 0, NULL, '2023-02-21 01:47:39', '2023-02-21 01:49:54'),
(23, 'batman', 'batman', 'batman123@gmail.com', '$2y$10$trA7zq12KYoJ1ZJJplv5KetOqeqhVJvv/vhLWPrN2XkgcVkAcVWfS', 0, NULL, '2023-02-21 01:53:55', '2023-02-21 01:53:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokos`
--
ALTER TABLE `tokos`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tokos`
--
ALTER TABLE `tokos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
