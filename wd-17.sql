-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 17, 2024 lúc 11:05 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wd-17`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
--

CREATE TABLE `address` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `address_type` enum('home','office','other') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'home',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `payment_method_id` bigint UNSIGNED NOT NULL,
  `address_id` bigint UNSIGNED NOT NULL,
  `total_price` int UNSIGNED NOT NULL,
  `name_nguoi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tien_ship` int UNSIGNED NOT NULL,
  `ngay_nhan` date NOT NULL,
  `ngay_thanh_toan` date NOT NULL,
  `shipping_type` enum('giao hang tieu chuan','giao hang nhanh','giao hang quoc te','giao hang mien phi') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'giao hang nhanh',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id` bigint UNSIGNED NOT NULL,
  `bill_id` bigint UNSIGNED NOT NULL,
  `product_detail_id` bigint UNSIGNED NOT NULL,
  `don_gia` int UNSIGNED NOT NULL,
  `so_luong` int UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Airpod', NULL, '2024-10-02 03:14:59', '2024-10-02 17:02:13'),
(2, 'Samsung', NULL, '2024-10-02 03:15:14', '2024-10-02 03:15:14'),
(3, 'Oppo', NULL, '2024-10-02 03:15:24', '2024-10-02 03:15:24'),
(4, 'HP', NULL, '2024-10-02 03:17:41', '2024-10-02 03:42:28'),
(5, 'Mac', NULL, '2024-10-02 11:11:18', '2024-10-02 11:11:18'),
(6, 'Apple', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, NULL, NULL, NULL),
(2, 4, NULL, NULL, NULL),
(3, 5, NULL, NULL, NULL),
(4, 3, NULL, NULL, NULL),
(5, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_details`
--

CREATE TABLE `cart_details` (
  `id` bigint UNSIGNED NOT NULL,
  `cart_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `don_gia` int UNSIGNED NOT NULL,
  `so_luong` int UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_details`
--

INSERT INTO `cart_details` (`id`, `cart_id`, `product_id`, `don_gia`, `so_luong`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 52, 6, NULL, NULL, NULL),
(2, 5, 5, 40, 3, NULL, NULL, NULL),
(3, 5, 5, 6, 6, NULL, NULL, NULL),
(4, 5, 2, 12, 7, NULL, NULL, NULL),
(5, 5, 2, 71, 10, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Thiết bị điện tử', NULL, '2024-10-02 02:13:22', '2024-10-03 06:05:50'),
(2, 'Mr. Newton Wilkinson', NULL, '2024-10-02 02:13:22', '2024-10-02 02:13:22'),
(3, 'Celestine Grady', NULL, '2024-10-02 02:13:22', '2024-10-02 02:13:22'),
(4, 'Phu kien', NULL, '2024-10-02 02:13:22', '2024-10-16 09:17:55'),
(5, 'thiet bi choi game', NULL, '2024-10-02 02:13:22', '2024-10-16 09:09:22'),
(6, 'Thiet bi thong minh', NULL, '2024-10-03 07:33:04', NULL),
(7, 'playgame', NULL, '2024-10-03 17:30:04', NULL),
(8, 'thiet bi gia dung', NULL, '2024-10-15 14:48:13', '2024-10-15 14:48:13'),
(9, 'thiet bi don nha', NULL, '2024-10-15 15:09:18', '2024-10-15 15:37:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hex_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `colors`
--

INSERT INTO `colors` (`id`, `name`, `hex_color`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'red', '#FF0000', NULL, NULL, NULL),
(2, 'green', '#008000', NULL, NULL, NULL),
(3, 'blue', '#0000FF', NULL, NULL, NULL),
(4, 'yellow', '#FFFF00', NULL, NULL, NULL),
(5, 'orange', '#FFA500', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `userId` bigint UNSIGNED NOT NULL,
  `product_detail_id` bigint UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_comment` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `ctsp_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_02_082957_create_categories_table', 1),
(6, '2024_10_02_083010_create_brands_table', 1),
(7, '2024_10_02_083340_create_products_table', 1),
(8, '2024_10_02_083512_create_colors_table', 1),
(9, '2024_10_02_083522_create_sizes_table', 1),
(10, '2024_10_02_083531_create_ram_sizes_table', 1),
(11, '2024_10_02_083543_create_product_details_table', 1),
(12, '2024_10_02_083553_create_images_table', 1),
(13, '2024_10_02_083623_create_carts_table', 1),
(14, '2024_10_02_083633_create_cart_details_table', 1),
(15, '2024_10_02_083725_create_address_table', 1),
(16, '2024_10_02_083833_create_comments_table', 2),
(17, '2024_10_02_085021_create_payment_methods_table', 2),
(18, '2024_10_02_085030_create_bills_table', 3),
(19, '2024_10_02_085036_create_bill_details_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint UNSIGNED NOT NULL,
  `payment_type` enum('the tin dung','ngan hang','khi nhan hang') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'khi nhan hang',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int UNSIGNED NOT NULL,
  `ton_kho` int UNSIGNED NOT NULL,
  `brand_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`, `ton_kho`, `brand_id`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'iphone15 promax', 'products/1728985664_apple-iphone-15-pro-max-256gb-titan-xanh-duong_ead6ddb3.png', 'rat dep', 30000000, 20, 5, 6, '2024-10-15 09:47:44', '2024-10-15 09:47:44', NULL),
(2, 'macbook', 'products/1728993160_macbook-pro-14-inch-pre-order.png', 'abcd', 30000000, 20, 5, 1, '2024-10-15 11:52:40', '2024-10-15 11:52:40', NULL),
(3, 'macbook air', 'products/1728993181_5-17-image-657.jpg', 'rat dep', 200000, 100, 5, 6, '2024-10-15 11:53:01', '2024-10-15 11:53:01', NULL),
(4, 'Airpod pro', 'products/1728993345_tai-nghe-airpods-pro-le__4_.jpg', 'abcd', 200000, 20, 5, 1, '2024-10-15 11:55:45', '2024-10-15 11:55:45', NULL),
(5, 'iphone 16', 'products/1728993455_iPhone 15 Pro và iPhone 15 Pro Max Audio LAB.jpeg', 'rat dep', 50000000, 10, 6, 6, '2024-10-15 11:57:35', '2024-10-16 10:06:14', NULL),
(6, 'macbook 17 pro', 'products/1729006252.jpg', 'rat dep', 50000000, 100, 1, 2, '2024-10-15 15:30:52', '2024-10-15 15:34:39', '2024-10-15 15:34:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `color_id` bigint UNSIGNED NOT NULL,
  `size_id` bigint UNSIGNED NOT NULL,
  `ram_size_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `color_id`, `size_id`, `ram_size_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 2, 2, NULL, NULL, NULL),
(2, 1, 5, 2, 1, NULL, NULL, NULL),
(3, 2, 4, 1, 1, NULL, NULL, NULL),
(4, 1, 2, 1, 2, NULL, NULL, NULL),
(5, 4, 4, 2, 2, NULL, NULL, NULL),
(9, 2, 2, 2, 2, '2024-10-16 16:42:47', '2024-10-16 16:46:39', NULL),
(10, 2, 4, 1, 2, NULL, NULL, NULL),
(11, 2, 1, 2, 2, NULL, NULL, NULL),
(12, 4, 2, 2, 2, NULL, NULL, NULL),
(13, 3, 3, 2, 1, NULL, NULL, NULL),
(14, 2, 3, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ram_sizes`
--

CREATE TABLE `ram_sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ram_sizes`
--

INSERT INTO `ram_sizes` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DIMM', NULL, NULL, NULL),
(2, ' SO-DIMM', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'pro', NULL, NULL, NULL),
(2, 'pro_max', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Santino Beer', 'kavon39@hotmail.com', NULL, '$2y$10$Ouorsgr4ppCfu08am.nz6u7c7JahvXGAhBoZ7EmVcIL7P30ALktXO', NULL, NULL, NULL),
(2, 'Ansel Christiansen', 'hdare@yahoo.com', NULL, '$2y$10$ri1Y248aH165JCejM2nRRunD5bsB4OxBHqcoPJGRsmToWFIA85uj2', NULL, NULL, NULL),
(3, 'Jovany Willms', 'tevin.eichmann@armstrong.com', NULL, '$2y$10$BVDKr3N9Pa8KlBijq/dGD.oDOaZ7tFk5yI04FjeGPkWnE/WHxdraO', NULL, NULL, NULL),
(4, 'Lauriane O\'Connell', 'felicity.gutkowski@brakus.biz', NULL, '$2y$10$BHbFMShVVmSilPSeF5TNje.HCXWANp4UfZ.Bd1YN.eDsSE6GHB/.S', NULL, NULL, NULL),
(5, 'Rosalinda Hintz', 'lori.bauch@ferry.com', NULL, '$2y$10$BnDyjaviE5ynGXxZODqiFuS0pnSjdC1t/1h9PvyD01ZYA65MDl85W', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_user_id_foreign` (`user_id`),
  ADD KEY `bills_payment_method_id_foreign` (`payment_method_id`),
  ADD KEY `bills_address_id_foreign` (`address_id`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_bill_id_foreign` (`bill_id`),
  ADD KEY `bill_details_product_detail_id_foreign` (`product_detail_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_details_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_details_id_product_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_userid_foreign` (`userId`),
  ADD KEY `comments_product_detail_id_foreign` (`product_detail_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_ctsp_id_foreign` (`ctsp_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_details_product_id_foreign` (`product_id`),
  ADD KEY `product_details_color_id_foreign` (`color_id`),
  ADD KEY `product_details_size_id_foreign` (`size_id`),
  ADD KEY `product_details_ram_size_id_foreign` (`ram_size_id`);

--
-- Chỉ mục cho bảng `ram_sizes`
--
ALTER TABLE `ram_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `address`
--
ALTER TABLE `address`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ram_sizes`
--
ALTER TABLE `ram_sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `bills_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`),
  ADD CONSTRAINT `bills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `bill_details_product_detail_id_foreign` FOREIGN KEY (`product_detail_id`) REFERENCES `product_variants` (`id`);

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_details_id_product_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_detail_id_foreign` FOREIGN KEY (`product_detail_id`) REFERENCES `product_variants` (`id`),
  ADD CONSTRAINT `comments_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ctsp_id_foreign` FOREIGN KEY (`ctsp_id`) REFERENCES `product_variants` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_details_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`),
  ADD CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_details_ram_size_id_foreign` FOREIGN KEY (`ram_size_id`) REFERENCES `ram_sizes` (`id`),
  ADD CONSTRAINT `product_details_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
