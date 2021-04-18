-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th4 18, 2021 lúc 03:04 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id15078750_laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tran van ngang', 'admin12@gmail.com', '123456', '156', '2021-03-02 07:57:42', '2021-03-04 07:57:42'),
(2, 'tran van kang', 'admin321@gmail.com', '123456', '16', '2021-03-09 08:18:02', '2021-03-04 08:18:02'),
(3, '', '666', '666', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `idcart` int(11) NOT NULL,
  `content` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`idcart`, `content`) VALUES
(32, '[{\"id\":\"1\",\"name\":\"test\",\"qty\":1,\"price\":999,\"weight\":0,\"options\":{\"image\":\"ao1.jpg\",\"size\":\"L\"}},{\"id\":\"1\",\"name\":\"test\",\"qty\":1,\"price\":999,\"weight\":0,\"options\":{\"image\":\"ao1.jpg\",\"size\":\"XL\"}},{\"id\":\"6\",\"name\":\"v\\u00e1y ng\\u1eafn\",\"qty\":1,\"price\":75000,\"weight\":0,\"options\":{\"image\":\"vay4.jpg\",\"size\":\"M\"}},{\"id\":\"3\",\"name\":\"\\u00e1o ahegao\",\"qty\":1,\"price\":70000,\"weight\":0,\"options\":{\"image\":\"ao3.jpg\",\"size\":\"XL\"}},{\"id\":\"11\",\"name\":\"qu\\u1ea7n nh\\u01b0ng n\\u00f3 m\\u00e0u \\u0111\\u1ecf\",\"qty\":1,\"price\":70000,\"weight\":0,\"options\":{\"image\":\"quan3.jpg\",\"size\":\"S\"}}]'),
(34, '[{\"id\":\"1\",\"name\":\"test\",\"qty\":1,\"price\":9999,\"weight\":0,\"options\":{\"image\":\"ao1.jpg\",\"size\":\"M\"}},{\"id\":\"6\",\"name\":\"v\\u00e1y ng\\u1eafn\",\"qty\":1,\"price\":75000,\"weight\":0,\"options\":{\"image\":\"vay4.jpg\",\"size\":\"M\"}}]'),
(35, '[{\"id\":\"1\",\"name\":\"test\",\"qty\":1,\"price\":9999,\"weight\":0,\"options\":{\"image\":\"ao1.jpg\",\"size\":\"XXL\",\"thuonghieusp\":\"mescerdes\"}}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongsp`
--

CREATE TABLE `dongsp` (
  `brandid` int(10) UNSIGNED NOT NULL,
  `name_dongSP` varchar(255) NOT NULL,
  `desc_dongSP` varchar(255) NOT NULL,
  `status_dongSP` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dongsp`
--

INSERT INTO `dongsp` (`brandid`, `name_dongSP`, `desc_dongSP`, `status_dongSP`, `created_at`, `updated_at`) VALUES
(13, 'GUCHIs', 'quần áo giàu dép', 0, NULL, NULL),
(14, 'mescerdes', 'xe buggg', 1, NULL, NULL),
(15, 'adidas', 'giày buss s1', 1, NULL, NULL),
(16, 'adult shops', '789456123sdffgsadfsdzxczc', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int(11) NOT NULL,
  `idcart` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `total` double NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `ngaylap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`idhd`, `idcart`, `content`, `total`, `address`, `city`, `ngaylap`) VALUES
(1, 32, '[{\"id\":\"1\",\"name\":\"test\",\"qty\":1,\"price\":999,\"weight\":0,\"options\":{\"image\":\"ao1.jpg\",\"size\":\"XL\"}},{\"id\":\"1\",\"name\":\"test\",\"qty\":1,\"price\":999,\"weight\":0,\"options\":{\"image\":\"ao1.jpg\",\"size\":\"L\"}},{\"id\":\"1\",\"name\":\"test\",\"qty\":1,\"price\":999,\"weight\":0,\"options\":{\"image\":\"ao1.jpg\",\"size\":\"XNXX\"}}]', 3, 'sdf', 'sdfsd', '2021-04-05 10:02:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `cateid` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`cateid`, `name`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(12, 'áo phông', 'ấm ám cám', 1, NULL, NULL),
(13, 'sơ mi', 'nóng vào mùa hè', 1, NULL, NULL),
(14, 'thung', 'thaori mái', 0, NULL, NULL),
(15, 'jean', 'cách điệu', 1, NULL, NULL),
(18, 'pantsu', 'wibu', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `showproduct`
--

CREATE TABLE `showproduct` (
  `id` int(10) UNSIGNED NOT NULL,
  `cateid` int(10) UNSIGNED NOT NULL,
  `brandid` int(10) UNSIGNED NOT NULL,
  `namesp` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `content` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `showproduct`
--

INSERT INTO `showproduct` (`id`, `cateid`, `brandid`, `namesp`, `desc`, `content`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 14, 'test', 'test\r\n                                        sss', 'test', '9999', 'ao1.jpg', 1, NULL, NULL),
(3, 18, 16, 'áo ahegao', '13213', '3216', '70000', 'Haystack_PNG_Clip_Art_Image.png', 1, NULL, NULL),
(5, 18, 14, 'váy hở đùi', 'asdasss', 'dasdzxcx', '56000', 'vay1.jpg', 1, NULL, NULL),
(6, 18, 16, 'váy ngắn', 'sdfsdfsdfc', 'scvcxvxcvx', '75000', 'vay4.jpg', 1, NULL, NULL),
(7, 15, 15, 'quần jean ngắn tới háng', '136246894', 'asdasd\r\n                                        asd51a1', '61000', 'quan4.jpg', 1, NULL, NULL),
(8, 13, 13, 'quần rộng', 'asdas', 'zzxc85xd526636', '100000', 'quan6.jpg', 1, NULL, NULL),
(9, 15, 15, 'quần', 'asdas', 'thik thì mua', '200000', 'quan1.jpg', 1, NULL, NULL),
(10, 14, 13, 'quần quần', 'asdasd', '0121632', '90000', 'quan7.jpg', 1, NULL, NULL),
(11, 15, 13, 'quần nhưng nó màu đỏ', 'asdasdas', 'asdasd', '70000', 'quan3.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gt` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `ngaytao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `email`, `password`, `name`, `gt`, `phone`, `ngaytao`) VALUES
(32, 'dh51700502@student.stu.edu.vn', '123', '123', 'Nam', '123', '2021-04-05 09:53:20'),
(34, 'promocodewarframe@yahoo.com.vn', '123', 'SUPREME GOD', 'UK', '123', '2021-04-07 21:12:12'),
(35, 'nguyenvantoan1072@gmail.com', '123', 'nguyễn văn toàn', 'Nam', '990', '2021-04-07 21:14:26');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idcart`);

--
-- Chỉ mục cho bảng `dongsp`
--
ALTER TABLE `dongsp`
  ADD PRIMARY KEY (`brandid`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhd`),
  ADD KEY `cartid` (`idcart`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`cateid`);

--
-- Chỉ mục cho bảng `showproduct`
--
ALTER TABLE `showproduct`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `cateid` (`cateid`),
  ADD KEY `brandid` (`brandid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `dongsp`
--
ALTER TABLE `dongsp`
  MODIFY `brandid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `cateid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `showproduct`
--
ALTER TABLE `showproduct`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`idcart`) REFERENCES `users` (`userid`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`idcart`) REFERENCES `cart` (`idcart`);

--
-- Các ràng buộc cho bảng `showproduct`
--
ALTER TABLE `showproduct`
  ADD CONSTRAINT `showproduct_ibfk_1` FOREIGN KEY (`cateid`) REFERENCES `product` (`cateid`),
  ADD CONSTRAINT `showproduct_ibfk_2` FOREIGN KEY (`brandid`) REFERENCES `dongsp` (`brandid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
