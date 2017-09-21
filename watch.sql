-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 10:13 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watch`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Omega', '1491583338logoomega.png', '2017-09-12 16:58:53', '2017-09-12 16:58:53'),
(5, 'Rolex', '1491582650logorolex.jpg', '2017-09-12 17:01:28', '2017-09-12 17:01:28'),
(6, 'TagHeuer', '1491583630tagheuer.jpg', '2017-09-12 17:01:49', '2017-09-12 17:01:49'),
(7, 'Movado', '1491583500logomovado.png', '2017-09-12 17:02:06', '2017-09-12 17:02:06'),
(8, 'Citizen', '1491585327citizen.jpg', '2017-09-12 17:02:23', '2017-09-12 17:02:23'),
(9, 'Hublot', '1491585170hublot.jpg', '2017-09-12 17:02:50', '2017-09-12 17:02:50'),
(10, 'Tissot', '1491717302noimage.jpg', '2017-09-12 17:05:42', '2017-09-12 17:05:42'),
(11, 'Casio', '1491501698logo.png', '2017-09-12 17:05:50', '2017-09-12 17:05:50'),
(14, 'Ok', 'logovimaru1_0 copy.png', '2017-09-19 02:18:56', '2017-09-19 02:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đồng hồ nam', NULL, NULL),
(2, 'Đồng hồ nữ', NULL, NULL),
(3, 'Đồng hồ đôi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` char(200) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_05_001323_create_categories_table', 1),
(4, '2017_09_05_001457_create_branches_table', 1),
(5, '2017_09_06_234058_create_products_table', 1),
(6, '2017_09_08_005354_add_cost_to_products_table', 2),
(7, '2017_09_11_102409_create_images_table', 3),
(8, '2017_09_12_085438_add_image_to_products_table', 4),
(9, '2017_09_15_144406_create_orders_table', 5),
(10, '2017_09_15_164554_create_orders_table', 6),
(11, '2017_09_15_165046_create_order_details_table', 7),
(12, '2017_09_15_183923_create_products_orders_table', 8),
(13, '2017_09_16_075037_create_products_orders_table', 9),
(14, '2017_09_16_080016_add_price_to_products_orders_table', 10),
(15, '2017_09_17_102307_add_status_to_orders_table', 11),
(16, '2017_09_17_105715_create_product_orders_table', 12),
(17, '2017_09_19_002101_create_shoppingcart_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `nameCustomer` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `emailCustomer` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneCustomer` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `totalCost` double NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('đang vận chuyển','đã giao hàng','hủy bỏ') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nameCustomer`, `emailCustomer`, `address`, `phoneCustomer`, `totalCost`, `note`, `created_at`, `updated_at`, `status`) VALUES
(7, 'Ok', 'huyhienhoacnt@gmail.com', 'tòa nhà văn phòng MD Complex, Nguyễn Cơ Thạch,Cầu Diễn, Từ Liêm, Hà Nội, Việt Nam', '974023401', 10000000, NULL, '2017-09-19 02:59:42', '2017-09-19 06:17:37', 'đã giao hàng'),
(8, 'Phạm Văn Huy', 'huypv@nal.vn', 'tòa nhà văn phòng MD Complex, Nguyễn Cơ Thạch,Cầu Diễn, Từ Liêm, Hà Nội, Việt Nam', '974023401', 11000000, NULL, '2017-09-19 03:01:03', '2017-09-19 06:20:07', 'đang vận chuyển'),
(9, 'Phạm Văn Huy', 'huyhienhoacnt@gmail.com', 'tòa nhà văn phòng MD Complex, Nguyễn Cơ Thạch', '974023401', 7100000, NULL, '2017-09-19 03:11:15', '2017-09-19 03:11:15', 'đang vận chuyển'),
(10, 'huy', 'thuhoai54a.spt@gmail.com', 'An Lão', '0974023401', 11900000, 'asdfgh', '2017-09-19 03:14:49', '2017-09-19 03:14:49', 'đang vận chuyển');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('còn hàng','hết hàng') COLLATE utf8_unicode_ci NOT NULL,
  `descriptionSummary` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `hot` tinyint(4) NOT NULL,
  `betterSale` tinyint(4) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cost` double NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `quantity`, `name`, `status`, `descriptionSummary`, `description`, `hot`, `betterSale`, `category_id`, `branch_id`, `created_at`, `updated_at`, `cost`, `image`) VALUES
(27, 2, 'ltp-1392l-9avdf', 'còn hàng', 'ChánT', 'Thế nhỉ', 1, 1, 2, 11, '2017-09-12 02:59:59', '2017-09-12 17:17:33', 100000, '14917548621692873064dong-ho-casio-ltp-1392l-9avdf.jpg'),
(28, 2, 'stuhrling-original', 'còn hàng', 'sản phẩm chất lượng', 'Giá thành phải chăng', 1, 1, 1, 4, '2017-09-12 17:10:24', '2017-09-12 17:10:24', 5000000, '1491763867stuhrling-original-tourbillon.png'),
(29, 4, 'casio-ltp-1392l', 'còn hàng', 'rất đẹp', 'ok', 1, 1, 1, 11, '2017-09-12 17:12:30', '2017-09-12 17:12:30', 18800000, '14917548101692873064dong-ho-casio-ltp-1392l-9avdf.jpg'),
(30, 1, 'casio-ltp', 'còn hàng', 'rất tuyệt vời', NULL, 1, 1, 2, 4, '2017-09-12 17:13:54', '2017-09-12 17:13:54', 5000000, '1492021047casio-ltp.jpg'),
(31, 3, 'efr-539sg-1avudf', 'còn hàng', 'đẹp', NULL, 1, 0, 1, 4, '2017-09-12 17:15:41', '2017-09-12 17:15:41', 6000000, '1491748133efr-539sg-1avudf.jpg'),
(32, 1, 'citizen-ny4051-51e', 'còn hàng', NULL, NULL, 1, 1, 1, 8, '2017-09-12 17:16:34', '2017-09-12 17:16:34', 700000, '1491763434citizen-ny4051-51e.jpg'),
(33, 1, 'aries-gold-l9003-s-wmop', 'còn hàng', NULL, NULL, 1, 1, 1, 4, '2017-09-12 17:18:43', '2017-09-12 17:18:43', 6900000, '1491764326683084387dong-ho-aries-gold-l9003-s-wmop.png'),
(34, 2, 'casio-efr-106d-1avudf', 'còn hàng', NULL, NULL, 1, 1, 1, 11, '2017-09-12 17:19:36', '2017-09-12 17:19:36', 6500000, '1491747976casio-efr-106d-1avudf.jpg'),
(35, 1, 'Bruno', 'còn hàng', NULL, NULL, 1, 1, 1, 11, '2017-09-12 17:36:10', '2017-09-12 17:36:10', 6000000, '1492020334bruno.jpg'),
(36, 1, 'diamon', 'còn hàng', NULL, NULL, 1, 1, 2, 11, '2017-09-12 17:37:01', '2017-09-12 17:37:01', 1000000, '1492020025diamon.jpg'),
(37, 1, 'diamon-d5', 'còn hàng', NULL, NULL, 1, 1, 2, 4, '2017-09-12 17:38:13', '2017-09-12 17:38:13', 6000000, '1492020822diamon-d5.jpg'),
(38, 1, 'diamond-dm', 'còn hàng', NULL, NULL, 1, 1, 2, 4, '2017-09-12 17:39:18', '2017-09-12 17:39:18', 7000000, '1492020568diamond-dm.jpg'),
(39, 3, 'citizen-bm6772-05aew', 'còn hàng', NULL, NULL, 1, 1, 3, 8, '2017-09-12 17:40:58', '2017-09-12 17:40:58', 15000000, '1491757567dong-ho-doi-citizen-bm6772-05aew1582-03a.jpg'),
(40, 1, 'atlantic', 'còn hàng', NULL, NULL, 1, 1, 3, 11, '2017-09-12 17:41:32', '2017-09-12 17:41:32', 100000, '1491841939atlantic.jpg'),
(41, 2, 'mtp-1302d', 'còn hàng', NULL, NULL, 1, 1, 3, 4, '2017-09-12 17:42:12', '2017-09-12 17:42:12', 1000000, '1491882623mtp-1302d.jpg'),
(42, 2, 'citizen-bh1652', 'còn hàng', NULL, NULL, 1, 1, 3, 8, '2017-09-12 17:42:58', '2017-09-12 17:42:58', 6500000, '1492021555citizen-bh1652.jpg'),
(43, 1, 'tag-heur', 'còn hàng', NULL, NULL, 1, 1, 3, 6, '2017-09-12 17:43:29', '2017-09-12 17:43:29', 9000000, '1492021852tag-heur.jpg'),
(44, 1, 'citizenar0074', 'còn hàng', NULL, NULL, 1, 1, 3, 8, '2017-09-12 17:44:01', '2017-09-12 17:44:01', 700000, '1492022032citizenar0074.jpg'),
(45, 1, 'epos-344', 'còn hàng', NULL, NULL, 1, 1, 3, 8, '2017-09-12 17:44:50', '2017-09-12 17:44:50', 9000000, '1492022226epos-344.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_orders`
--

CREATE TABLE `product_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `price` double DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_orders`
--

INSERT INTO `product_orders` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(6, 28, 7, 5000000, 2, '2017-09-19 02:59:43', '2017-09-19 02:59:43'),
(7, 37, 8, 6000000, 1, '2017-09-19 03:01:03', '2017-09-19 03:01:03'),
(8, 30, 8, 5000000, 1, '2017-09-19 03:01:03', '2017-09-19 03:01:03'),
(9, 44, 9, 700000, 3, '2017-09-19 03:11:15', '2017-09-19 03:11:15'),
(10, 30, 9, 5000000, 1, '2017-09-19 03:11:15', '2017-09-19 03:11:15'),
(11, 33, 10, 6900000, 1, '2017-09-19 03:14:49', '2017-09-19 03:14:49'),
(12, 28, 10, 5000000, 1, '2017-09-19 03:14:49', '2017-09-19 03:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`identifier`, `instance`, `content`, `created_at`, `updated_at`) VALUES
('huyhienhoa', 'default', 'O:29:"Illuminate\\Support\\Collection":1:{s:8:"\0*\0items";a:2:{s:32:"30acb283bfa3c13a3fc2b9a54efe02bb";O:32:"Gloudemans\\Shoppingcart\\CartItem":8:{s:5:"rowId";s:32:"30acb283bfa3c13a3fc2b9a54efe02bb";s:2:"id";s:2:"37";s:3:"qty";i:1;s:4:"name";s:9:"diamon-d5";s:5:"price";d:6000000;s:7:"options";O:39:"Gloudemans\\Shoppingcart\\CartItemOptions":1:{s:8:"\0*\0items";a:1:{s:3:"img";s:23:"1492020822diamon-d5.jpg";}}s:49:"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel";N;s:41:"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate";i:0;}s:32:"93bb79c37996088c53df9d3a0fe210d6";O:32:"Gloudemans\\Shoppingcart\\CartItem":8:{s:5:"rowId";s:32:"93bb79c37996088c53df9d3a0fe210d6";s:2:"id";s:2:"36";s:3:"qty";i:1;s:4:"name";s:6:"diamon";s:5:"price";d:1000000;s:7:"options";O:39:"Gloudemans\\Shoppingcart\\CartItemOptions":1:{s:8:"\0*\0items";a:1:{s:3:"img";s:20:"1492020025diamon.jpg";}}s:49:"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel";N;s:41:"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate";i:0;}}}', NULL, NULL),
('ok', 'wishlist', 'O:29:"Illuminate\\Support\\Collection":1:{s:8:"\0*\0items";a:0:{}}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@xin.com', '$2y$10$/E/siGPtpDk7rN9b7r3TAuXRE43CJDE18cyLjyWAjjihPoEkU4Wai', NULL, '2017-09-15 04:11:17', '2017-09-15 04:11:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_orders_product_id_foreign` (`product_id`),
  ADD KEY `product_orders_order_id_foreign` (`order_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

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
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD CONSTRAINT `product_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `product_orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
