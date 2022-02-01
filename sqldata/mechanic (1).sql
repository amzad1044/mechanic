-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 07:06 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mechanic`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Dhanmondi', 'A quick brown fox jumps over the lazy dog.', 1, '2021-11-16 04:19:40', '2021-11-27 09:56:21'),
(5, 'Mirpur', 'jumps over the lazy dog.', 1, '2021-11-16 04:20:29', '2021-11-20 11:24:50'),
(6, 'Mohakhali', 'Lorem Ipsum has been the industry\'s standard', 0, '2021-11-16 04:25:48', '2021-11-20 11:25:02'),
(7, 'Gulistan', 'fox jumps over the lazy dog.', 1, '2021-11-16 04:55:42', '2021-11-20 11:21:02'),
(11, 'Khilgaon', 'simply dummy text of the printing and typesetting industry.', 1, '2021-11-16 05:17:44', '2021-11-20 11:21:05'),
(12, 'Zigatola', 'Good for accomodation', 1, '2021-11-20 07:36:48', '2021-11-20 11:24:51'),
(13, 'Mirpur 10', 'A quick brown fox jumps over the lazy dog.', 1, '2021-11-20 11:25:59', '2021-11-20 11:30:33'),
(15, 'Firmgate', 'A quick brown fox jumps over the lazy dog.', 0, '2021-11-20 11:31:03', '2021-12-02 09:24:06'),
(16, 'Gulshan', 'A quick brown fox jumps over the lazy dog.', 1, '2021-11-20 11:31:13', '2021-11-21 11:16:17'),
(18, 'Hatirpool', 'A quick brown fox jumps over the lazy dog.', 1, '2021-11-20 11:31:34', '2021-12-02 09:23:54'),
(19, 'Badda', 'fox jumps over the lazy dog.', 1, '2021-11-23 10:50:14', '2021-12-02 09:23:40'),
(20, 'Mirpur 2', 'A quick brown fox jumps over the lazy dog.', 1, '2021-11-27 00:41:31', '2021-12-02 09:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `img`, `status`, `created_at`, `updated_at`) VALUES
(16, 'Home Cleaning Up', 'fox jumps over the lazy dog.', 'img/1637491665Content-1.2012181439550.jpg', 1, '2021-11-21 04:47:45', '2021-12-02 09:12:54'),
(17, 'Painting', 'Painting is more than just splashing paint on your walls.', 'img/1637496429types-of-tape-thumbnail.jpg', 1, '2021-11-21 06:07:09', '2021-11-21 07:20:51'),
(18, 'Plumber', 'Pplumbing and Sanitary-related problems will be taken care of by \"Mechanic Lagbe\" marketplace', 'img/1637686025product-500x500.jpeg', 1, '2021-11-21 06:09:34', '2021-11-23 10:47:05'),
(19, 'Ac Repair', 'A quick brown fox jumps over the lazy dog.', 'img/1638457660Urban-Clap-04-03-2019226718.jpg', 1, '2021-12-02 09:07:42', '2021-12-02 09:12:51'),
(20, 'Fridge Repair', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'img/1638457720istockphoto-928076872-612x612.jpg', 1, '2021-12-02 09:08:40', '2021-12-02 09:12:51'),
(21, 'Electrician', 'A quick brown fox jumps over the lazy dog.', 'img/1638457888trade-illustrations_electrician_750x750-750x750.jpg', 1, '2021-12-02 09:11:28', '2021-12-02 09:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `verification_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` int(11) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `phone`, `email`, `email_verified_at`, `verification_code`, `is_verified`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(40, 'amzad', 'hossain', '01627335800', 'amzad1044@gmail.com', NULL, '993f1e1944f9117098fe293a42e53a30282c0b6f', 1, '$2y$10$GOMK6Ufxr.sqefeaoI4o6.MrGKVwhNGx5/8V3n3gS5B0nKNpIPWdW', NULL, '2021-12-28 07:14:01', '2021-12-28 07:14:56'),
(41, 'Gracious', 'Zad', '01727335800', 'amzad1044@protonmail.com', NULL, 'f2c4204a3faa133b5251c7945b227f46261dd2a6', 1, '$2y$10$OcHGOZE6xOb7p.Qh8ln1Q.AO4oB1vsP/0ZNYDeVkZTgts1rkF3GUe', NULL, '2022-01-03 11:32:10', '2022-01-03 11:32:46'),
(42, 'Md', 'faysal', '01927335800', 'mdfaisal60004@gmail.com', NULL, 'aa14995bfc2857034cfd7e96a55fc3e1c2bc7e29', 1, '$2y$10$BjhZ.GTPq3gR8.upccIuLe7stiPNAaBdKt0CBDhQv4FyRH3KG/dUK', NULL, '2022-01-09 22:52:37', '2022-01-09 22:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hiredlabours`
--

CREATE TABLE `hiredlabours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mech_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `seen` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hiredlabours`
--

INSERT INTO `hiredlabours` (`id`, `mech_id`, `cust_id`, `cust_name`, `cust_email`, `cust_phone`, `status`, `seen`, `created_at`, `updated_at`) VALUES
(9, '7', '40', 'amzad', 'amzad1044@gmail.com', '01627335800', 0, 1, '2021-12-28 07:15:39', '2022-01-09 22:48:37'),
(10, '6', '40', 'amzad', 'amzad1044@gmail.com', '01627335800', 0, 1, '2021-12-28 07:16:19', '2022-01-09 23:45:03'),
(11, '5', '42', 'Md', 'mdfaisal60004@gmail.com', '01927335800', 0, 1, '2022-01-09 22:54:31', '2022-01-10 00:01:41'),
(12, '3', '42', 'Md', 'mdfaisal60004@gmail.com', '01927335800', 0, 1, '2022-01-09 22:54:54', '2022-01-10 00:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `mechanics`
--

CREATE TABLE `mechanics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mech_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_work` int(11) NOT NULL DEFAULT '0',
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mechanics`
--

INSERT INTO `mechanics` (`id`, `mech_name`, `nid`, `phone`, `email`, `cat_id`, `area_id`, `rate`, `total_work`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Amzad Hossain', '6906297210', '01627335800', 'amzad1044@gmail.com', 18, 4, '2000', 10, 'img/mechanics/16387199302020-11-05 16.23.jpg', 1, '2021-11-22 11:09:01', '2021-12-05 09:58:53'),
(2, 'Md faysal', '45454151213', '01854698712', 'faysal@gmail.com', 18, 11, '500', 1, 'img/mechanics/163760109981583770_2546530268962441_8986538615211294720_n.jpg', 1, '2021-11-22 11:11:40', '2021-12-27 09:00:19'),
(3, 'Rimon Dewan', '7879845452', '01954785490', 'rimon@gmail.com', 18, 7, '100', 2, 'img/mechanics/1637683800257434990_1878756535644771_5119010050634151750_n.jpg', 0, '2021-11-22 11:12:53', '2022-01-09 22:54:54'),
(4, 'Md Rony', '19977518313000278', '01447335800', 'rony@gmail.com', 19, 13, '1000', 0, 'img/mechanics/1638458024117307475_2598204710493631_8717966045100108836_n.jpg', 1, '2021-11-23 23:18:40', '2021-12-05 09:59:24'),
(5, 'Ashikur Rahman', '8257329683', '01666335800', 'ashik@gmail.com', 17, 11, '1000', 0, 'img/mechanics/1638457964245702178_1969596376521446_1482049682062760447_n.jpg', 0, '2021-11-23 23:32:11', '2022-01-09 22:54:31'),
(6, 'Akash Sarker', '34343434', '01958746987', 'akash@gmail.com', 21, 16, '3500', 2, 'img/mechanics/1638458152258859912_1937628416414805_7664910051102559306_n.jpg', 1, '2021-12-02 09:15:53', '2022-01-09 22:50:27'),
(7, 'AL Raihan', '55454545455', '01765872495', 'raihan@gmail.com', 16, 20, '1500', 0, 'img/mechanics/1638458742117180988_2603973189854792_1814191289314210972_n.jpg', 1, '2021-12-02 09:25:42', '2022-01-09 22:45:04');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_16_093657_create_areas_table', 2),
(5, '2021_11_20_173842_create_categories_table', 3),
(9, '2021_11_21_160933_create_mechanics_table', 4),
(11, '2021_12_22_130531_create_customers_table', 5),
(13, '2021_12_27_131451_create_hiredlabours_table', 6),
(16, '2022_01_03_134509_create_reviews_table', 7);

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cust_id` int(11) NOT NULL,
  `mech_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `cust_id`, `mech_id`, `rating`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(2, 40, 1, 5, 'he is good worker', 0, '2022-01-03 10:09:53', '2022-01-03 10:09:53'),
(3, 40, 1, 2, 'not bad', 0, '2022-01-03 10:15:24', '2022-01-03 10:15:24'),
(4, 40, 1, 3, 'ffdsfsdfdsf', 0, '2022-01-03 10:27:31', '2022-01-03 10:27:31'),
(5, 40, 5, 2, 'gggggg', 0, '2022-01-03 10:44:58', '2022-01-03 10:44:58'),
(6, 41, 1, 4, 'Hard worker', 0, '2022-01-03 11:33:36', '2022-01-03 11:33:36'),
(7, 41, 3, 3, 'well done', 0, '2022-01-04 02:37:25', '2022-01-04 02:37:25'),
(8, 41, 3, 1, 'brilliant', 0, '2022-01-04 02:40:09', '2022-01-04 02:40:09'),
(9, 41, 3, 1, 'dfdfdf', 0, '2022-01-04 03:12:07', '2022-01-04 03:12:07'),
(10, 41, 3, 2, 'htytyty', 0, '2022-01-04 03:18:27', '2022-01-04 03:18:27'),
(11, 41, 3, 3, 'ssss', 0, '2022-01-04 03:21:27', '2022-01-04 03:21:27'),
(12, 41, 3, 1, 'fffffffff', 0, '2022-01-04 03:22:55', '2022-01-04 03:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'foisal', 'foisal@gmail.com', NULL, '$2y$10$of3tlqXSn.S4yrg/48ViPeNsYx5oBRHI9zEKHMVD1/COJChLwE07.', NULL, '2021-11-15 08:15:42', '2021-11-15 08:15:42'),
(2, 'Rimon', 'rimon@gmail.com', NULL, '$2y$10$o1Fo8Vm9JhtcoGaoPT7lcufuF2essLhxlFKjFzjEsSOt9aHLuXoyi', NULL, '2021-11-15 10:01:26', '2021-11-15 10:01:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiredlabours`
--
ALTER TABLE `hiredlabours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanics`
--
ALTER TABLE `mechanics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mechanics_nid_unique` (`nid`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hiredlabours`
--
ALTER TABLE `hiredlabours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mechanics`
--
ALTER TABLE `mechanics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
