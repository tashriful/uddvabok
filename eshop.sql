-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 10:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Home Appliance', NULL, NULL),
(2, 'Electronics', '2019-08-19 13:48:54', '2019-08-19 13:48:54'),
(3, 'Gadjets', '2019-08-19 13:52:03', '2019-08-19 13:52:03'),
(4, 'Cloth Items', '2019-08-19 13:52:18', '2019-08-19 13:52:18'),
(5, 'Jwelery', '2019-08-19 13:52:47', '2019-08-19 13:52:47'),
(6, 'Fashions', '2019-08-19 13:53:13', '2019-08-19 13:53:13');

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
(6, '2019_08_16_043124_add_category_to_users_table', 2),
(7, '2019_08_17_155859_create_categories_table', 2),
(8, '2019_08_17_155933_create_products_table', 2),
(22, '2019_08_17_161535_create_product_images_table', 3),
(23, '2019_09_06_085951_add_user_type_to_products', 4),
(33, '2019_09_06_090729_add_my_price_to_products', 5),
(34, '2019_09_06_174544_add_status_to_products', 6),
(35, '2019_09_10_050532_create_orders_table', 6),
(36, '2019_09_18_160141_create_suppliers_table', 6),
(37, '2019_09_18_161555_add_user_id_to_products', 7),
(38, '2019_09_20_143106_create_supers_table', 7),
(39, '2019_09_21_123451_add_uploader_id_to_orders_table', 7),
(40, '2019_09_22_185955_add_is_paid_to_orders_table', 8),
(41, '2019_09_23_144551_add_company_name_to_users_table', 9),
(42, '2019_09_24_153702_add_status_to_suppliers_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `uploader_id` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_canceled` tinyint(1) NOT NULL DEFAULT '0',
  `is_delivered` tinyint(1) NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `uploader_id`, `product_id`, `quantity`, `price`, `name`, `number`, `address`, `is_canceled`, `is_delivered`, `is_paid`, `created_at`, `updated_at`) VALUES
(1, 23, 1, 27, '5', 1000, 'atu', 5, 'g', 1, 1, 0, '2019-09-21 14:36:18', '2019-10-01 05:32:29'),
(2, 31, 0, 35, '5', 444, 'lakman', 3333, 'samoly', 0, 0, 0, '2019-09-25 14:39:46', '2019-09-25 14:39:46'),
(3, 23, 2, 37, '4', 566, 'lakmal', 1551806084, 'rrrrrrrrryr', 0, 1, 0, '2019-09-25 22:09:56', '2019-09-25 22:13:56'),
(4, 23, 2, 36, '6', 5443, 'rahim miya', 5564332, 'rert', 0, 0, 0, '2019-09-25 22:11:05', '2019-09-25 22:11:05'),
(5, 23, 0, 35, '5', 566, 'niyon', 565554, 'ttrr', 0, 0, 0, '2019-09-25 22:19:30', '2019-09-25 22:19:30'),
(6, 23, 0, 35, '5', 544, 'lourt', 4, 'ffffffff', 0, 0, 0, '2019-09-25 22:21:03', '2019-09-25 22:21:03'),
(7, 23, 2, 38, '5', 5, 'noile', 444, 'ttttttttt', 0, 0, 0, '2019-09-25 22:27:31', '2019-09-25 22:27:31'),
(8, 23, 2, 37, '9', 609, 'anto', 34332, 'ttt', 0, 0, 0, '2019-09-25 22:28:37', '2019-09-25 22:28:37'),
(9, 34, 2, 38, '5', 900, 'kamal', 7767, 'mirpur', 0, 0, 0, '2019-10-01 05:34:09', '2019-10-01 05:34:09');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `category_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_Type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `My_Price` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `title`, `User_Type`, `description`, `quantity`, `status`, `price`, `My_Price`, `created_at`, `updated_at`) VALUES
(16, 0, 1, 'Programmable DC Power Supply', '', 'Programmable DC Power Supply good product', 10, 0, 999, 0, '2019-08-18 09:55:49', '2019-08-18 09:55:49'),
(22, 0, 1, 'ESP8266 WiFi 4 Channel IoT Smart Switch', '', 'ESP8266 WiFi 4 Channel IoT Smart Switch good product', 55, 0, 444, 0, '2019-08-20 00:07:20', '2019-08-20 00:07:20'),
(23, 0, 1, 'WiFi IoT Switch Sonoff Pow', '', 'WiFi IoT Switch Sonoff Pow good', 20, 0, 599, 0, '2019-08-20 00:09:10', '2019-08-20 00:09:10'),
(24, 0, 6, 'Arduino Nano V3.0 (China)', 'Admin', 'Arduino Nano V3.0 (China)', 30, 0, 230, 0, '2019-08-20 00:11:00', '2019-09-09 08:44:44'),
(25, 0, 1, 'ESP8266 NodeMCU V2 Development Board with CP2102', '', 'ESP8266 NodeMCU V2 Development Board with CP2102  good product', 30, 0, 699, 0, '2019-08-20 00:12:22', '2019-08-20 00:12:22'),
(26, 0, 6, 'Electric Kettle', 'Admin', 'tt', 10, 0, 899, 1000, '2019-09-07 10:20:28', '2019-09-12 03:09:01'),
(27, 1, 6, 'watch rolex', 'Admin', 'yyyyyyyyyyy', 68, 0, 699, 900, '2019-09-20 14:30:01', '2019-09-20 15:00:59'),
(29, 0, 2, 'plastic bulti', 'Admin', 'ffffffff', 60, 1, 877, 0, '2019-09-25 12:00:40', '2019-09-25 12:00:40'),
(30, 0, 3, 'spoon', 'Admin', 'oioi', 9, 1, 234, 0, '2019-09-25 12:04:10', '2019-09-25 12:04:10'),
(31, 0, 1, 'light', 'Admin', 'yt', 5, 0, 544, 0, '2019-09-25 12:07:19', '2019-09-25 12:07:19'),
(32, 0, 2, 'cosmetics', 'Admin', 'jhjhjh', 60, 1, 909, 0, '2019-09-25 12:11:23', '2019-09-25 12:11:23'),
(33, 0, 6, 'makeup box', 'Admin', 'sds', 3, 1, 240, 0, '2019-09-25 12:33:47', '2019-09-25 12:33:47'),
(34, 0, 6, 'makeup box items', 'Admin', 'rr', 60, 1, 6000, 0, '2019-09-25 12:36:58', '2019-09-25 12:38:31'),
(35, 0, 3, 'lakme', 'Admin', 'f', 60, 1, 456, 0, '2019-09-25 12:40:57', '2019-09-25 12:40:57'),
(36, 2, 5, 'huda', 'Supplier', 'fd', 444, 1, 4444, 0, '2019-09-25 21:52:23', '2019-09-25 21:52:23'),
(37, 2, 6, 'eyeshdow Package', 'Supplier', 'feee', 4, 1, 1000, 0, '2019-09-25 22:02:00', '2019-09-25 22:03:42'),
(38, 2, 6, 'lakme', 'Admin', 'r', 4, 1, 567, 600, '2019-09-25 22:26:16', '2019-10-01 05:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(5, 27, 'kettle.jpg', NULL, NULL),
(6, 29, 'plastic.jpg', '2019-09-25 12:00:41', '2019-09-25 12:00:41'),
(7, 30, 'spoon.jpg', '2019-09-25 12:04:10', '2019-09-25 12:04:10'),
(8, 31, 'light.jpg', '2019-09-25 12:07:19', '2019-09-25 12:07:19'),
(9, 32, 'comsetics.jpg', '2019-09-25 12:11:23', '2019-09-25 12:11:23'),
(10, 33, 'makeup box.jpg', '2019-09-25 12:33:47', '2019-09-25 12:33:47'),
(11, 34, 'makeup box goods.jpg', '2019-09-25 12:36:58', '2019-09-25 12:36:58'),
(13, 35, 'lakne.jpg', '2019-09-25 12:40:58', '2019-09-25 12:40:58'),
(14, 36, 'huda.jpg', '2019-09-25 21:52:23', '2019-09-25 21:52:23'),
(15, 37, 'eyeshadow.jpg', '2019-09-25 22:02:01', '2019-09-25 22:02:01'),
(16, 38, 'lakne.jpg', '2019-09-25 22:26:17', '2019-09-25 22:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `supers`
--

CREATE TABLE `supers` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `company_name`, `business_category`, `name`, `email`, `number`, `address`, `status`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'g', 'g', 'rasel', 'r@gmail.com', 2, 'f', 1, 'rasel', '$2y$10$xiT3bhj7NurUqFTH72z4MeOKXYRZpgffpsPTGWwMHaoc49uSGJOCO', NULL, NULL, '2019-09-24 11:44:31'),
(2, 'at2click', 'E-commerce', 'tashriful', 't@gmail.com', 4444, 'ghghg', 1, 'tashrif', '$2y$10$xiT3bhj7NurUqFTH72z4MeOKXYRZpgffpsPTGWwMHaoc49uSGJOCO', NULL, NULL, NULL),
(3, 'at2click', 'E-commerce', 'kamal khan', 'kamal@gmail.com', 4444, 'ghghg', 1, 'kamal', '$2y$10$xiT3bhj7NurUqFTH72z4MeOKXYRZpgffpsPTGWwMHaoc49uSGJOCO', NULL, NULL, NULL),
(4, 'uddvabok', 'E-commerce', 'Jamal khan', 'j@gmail.com', 4444, 'ghghg', 1, 'jamal', '$2y$10$xiT3bhj7NurUqFTH72z4MeOKXYRZpgffpsPTGWwMHaoc49uSGJOCO', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `business_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `business_category`, `company_name`, `category`, `name`, `email`, `number`, `status`, `address`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(23, '', '', 'Teacher', 'Kamal Khan', 'tashrifniloy@gmail.com', 33, 1, '', 'kamal', '$2y$10$xiT3bhj7NurUqFTH72z4MeOKXYRZpgffpsPTGWwMHaoc49uSGJOCO', 'vvBIXg1UADpbytr0Xd3f0xNWIRlYdX3CENhV8YhME08caVnornh0WsrRAoj9', '2019-08-19 23:29:12', '2019-08-19 23:29:12'),
(25, '', '', 'Supplier', 'imran khan', 'im@gmail.com', 6655656, 0, '', 'imran', '1234', NULL, NULL, NULL),
(26, '', '', 'Admin', 'tashriful', 'tii@gmail.com', 444, 0, '', 'tashrif', '1234', NULL, NULL, NULL),
(28, '', '', 'hhh', 'atuu', 'atu@gmail.com', 444, 0, '', 'atu', '1234', NULL, NULL, NULL),
(29, '', '', 'Teacher', 'lama', 'lama@gmail.com', 444, 0, '', 'lama', '$2y$10$AIG.OjIm2En1uP7dnbcnsOah7pa3lhYiVglACqzFcRPM2d9ehturK', NULL, '2019-09-20 09:10:50', '2019-09-20 09:10:50'),
(30, 'atu', 'r', 'Reseller', 'atu', 'rre@gmail.com', 4, 1, 'g', 'd4', '$2y$10$fVAEGFvL8CSywKrei3DcjOlwdwRJogiAyYgmgt7MmzHZO0vHci4I.', NULL, '2019-09-23 09:52:38', '2019-09-25 09:24:56'),
(31, 'E-Commerce', 'rt', 'Reseller', 'ewe', 'jew@gmail.com', 3, 1, 'f', 'reew', '$2y$10$YzSya4TRL9sT15u9OYPLeuU093q.Q0YbHgVZIcE.cAIx2P/Dwok5u', NULL, '2019-09-23 10:15:11', '2019-09-23 10:15:11'),
(32, 'E-Commerce', 'ree', 'Reseller', 'f', 'reew@gmail.com', 44, 0, 'f', 'r', '$2y$10$OGBBKRBrDlkarKXHv7M4U.Asqs6PyMmsAdGUdDW8VJyK.r6irSLzO', NULL, '2019-09-23 10:22:56', '2019-09-25 11:52:17'),
(33, 'E-Commerce', 'at2click', 'Reseller', 'tonmoy khan', 'tonmoy@gmail.com', 3333, 1, 'f', 'tonmoy', '$2y$10$VUfrXfU8Wx2H2xBb5bFnu.heqr67w8kw77yXMb27FmmXiXOyuKs2G', NULL, '2019-09-23 10:27:21', '2019-10-01 05:25:58'),
(34, 'E-Commerce', 'bikkhato', 'Reseller', 'sajid', 'sajid@gmail.com', 7777, 1, 'yyy', 'sajid', '$2y$10$v94w9fR5XvrWRvLMJHLKte4Ny6QGyoRvMOpfBKgmJTOF7t/syL4M.', NULL, '2019-10-01 05:20:16', '2019-10-01 05:21:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supers`
--
ALTER TABLE `supers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supers_email_unique` (`email`),
  ADD UNIQUE KEY `supers_username_unique` (`username`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_email_unique` (`email`),
  ADD UNIQUE KEY `suppliers_username_unique` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `supers`
--
ALTER TABLE `supers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
