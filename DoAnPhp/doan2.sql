-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2023 lúc 04:08 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(20, 'T-Shirt', 'fewg', '2023-12-22 16:20:28', '2023-12-22 11:10:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `isFeatured` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`, `isFeatured`) VALUES
(5, 'Áo sơ mi tay ngắn', 'okfewf', 20, '/storage/f1.jpg', '2023-12-22 16:35:17', '2023-12-22 16:35:17', NULL),
(6, 'Áo sơ mi tay ngắn hoạ tiết hoa', 'okkkkk', 100, '/storage/f2.jpg', '2023-12-22 16:36:50', '2023-12-22 16:36:50', NULL),
(7, 'Áo sơ mi tay ngắn', 'ssadsad', 14, '/storage/f4.jpg', '2023-12-22 16:37:13', '2023-12-22 16:37:13', NULL),
(8, 'Áo sơ mi tay ngắn hoạ tiết hoa', 'kewnjfke', 25, '/storage/f3.jpg', '2023-12-22 16:37:35', '2023-12-22 10:37:49', NULL),
(9, 'Áo sơ mi tay ngắn', 'khkhhi', 25, '/storage/f5.jpg', '2023-12-22 16:39:29', '2023-12-22 16:39:29', NULL),
(10, 'Áo sơ mi tay ngắn', '', 15, '/storage/n5.jpg', '2023-12-22 16:48:26', '2023-12-22 16:48:26', NULL),
(11, 'Áo sơ mi tay ngắn hoạ tiết', 'helooo', 15, '/storage/n4.jpg', '2023-12-22 17:08:18', '2023-12-22 17:08:18', NULL),
(12, 'quần ', 'mô tả', 1000, '/storage/n6.jpg', '2023-12-22 17:08:48', '2023-12-22 17:08:48', NULL),
(13, 'sơ mi đen', 'tốttt', 10, '/storage/n8.jpg', '2023-12-22 17:09:43', '2023-12-22 17:09:43', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usename` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `usename`, `email`, `password`, `created_at`, `updated_at`, `role`) VALUES
(0, 'mèwv', 'kietlac410@gmail.com', '123456', '2023-12-22 10:55:07', '2023-12-22 19:36:47', 0),
(1, 'kine', 'hq1204@gmail.com', '123456', '2023-12-26 09:17:22', '2023-12-26 09:17:22', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
