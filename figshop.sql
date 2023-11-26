-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 02, 2023 lúc 10:05 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `figshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `name_bill` varchar(255) NOT NULL,
  `address_bill` varchar(255) NOT NULL,
  `phone_bill` int(11) NOT NULL,
  `email_bill` varchar(255) NOT NULL,
  `paymethod_bill` tinyint(1) NOT NULL COMMENT '1. COD  2.Chuyển khoản',
  `order_date` varchar(255) NOT NULL,
  `total_bill` int(11) NOT NULL DEFAULT 0,
  `status_bill` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Đơn hàng mới  1.Đang xử lý  2.Đang giao hàng   3.Đã giao hàng '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `name_bill`, `address_bill`, `phone_bill`, `email_bill`, `paymethod_bill`, `order_date`, `total_bill`, `status_bill`) VALUES
(1, '', '', 0, '', 1, '07:06:06pm 02/03/23', 1141616, 0),
(2, '', '', 0, '', 1, '07:13:26pm 02/03/23', 1141616, 0),
(3, '', '', 0, '', 1, '07:14:18pm 02/03/23', 1141616, 0),
(4, '', '', 0, '', 1, '07:14:43pm 02/03/23', 1141616, 0),
(5, '', '', 0, '', 1, '07:15:59pm 02/03/23', 1141616, 0),
(6, '', '', 0, '', 1, '07:18:29pm 02/03/23', 1141616, 0),
(7, 'Thái Anh ', '', 0, '', 1, '07:19:27pm 02/03/23', 1141616, 0),
(8, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '07:20:36pm 02/03/23', 1141616, 0),
(9, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '07:21:18pm 02/03/23', 1141616, 0),
(10, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '07:21:47pm 02/03/23', 1141616, 0),
(11, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '07:23:06pm 02/03/23', 1141616, 0),
(12, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '07:26:23pm 02/03/23', 1141616, 0),
(13, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '07:34:48pm 02/03/23', 1141616, 0),
(14, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '07:34:54pm 02/03/23', 1141616, 0),
(15, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '07:39:42pm 02/03/23', 1141616, 0),
(16, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '07:41:28pm 02/03/23', 1141616, 0),
(17, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '07:41:31pm 02/03/23', 1141616, 0),
(18, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '07:41:45pm 02/03/23', 1141616, 0),
(19, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '07:46:16pm 02/03/23', 1141616, 0),
(20, 'Ẩn danh', '', 0, 'admin@gmail.com', 1, '07:53:23pm 02/03/23', 4211212, 0),
(21, 'Ẩn danh', '', 0, 'admin@gmail.com', 1, '07:54:14pm 02/03/23', 4211212, 0),
(22, 'Ẩn danh', '', 0, 'admin@gmail.com', 1, '08:09:56pm 02/03/23', 4211212, 0),
(23, 'Ẩn danh', '', 0, 'admin@gmail.com', 1, '08:12:25pm 02/03/23', 4211212, 0),
(24, 'Ẩn danh', '', 0, 'admin@gmail.com', 1, '08:13:15pm 02/03/23', 4211212, 0),
(25, 'Ẩn danh', '', 0, 'admin@gmail.com', 1, '08:13:30pm 02/03/23', 4211212, 0),
(26, 'Ẩn danh', '', 0, 'admin@gmail.com', 1, '08:14:19pm 02/03/23', 4211212, 0),
(27, 'Ẩn danh', '', 0, 'admin@gmail.com', 1, '08:15:11pm 02/03/23', 4211212, 0),
(28, 'Ẩn danh', '', 0, 'admin@gmail.com', 1, '08:18:15pm 02/03/23', 4211212, 0),
(29, 'Ẩn danh', '', 0, 'admin@gmail.com', 1, '08:18:35pm 02/03/23', 4211212, 0),
(30, 'Ẩn danh', '', 0, 'admin@gmail.com', 1, '08:20:56pm 02/03/23', 4211212, 0),
(31, 'Ẩn danh', '', 0, 'admin@gmail.com', 1, '08:24:34pm 02/03/23', 4211212, 0),
(32, 'asdasdas', 'drtgdgdgfdgdfgdfg', 2652525, 'admin@gmail.com', 2, '08:25:34pm 02/03/23', 4211212, 0),
(33, 'Thái Anh ', 'Seoul Korea a a ', 36547854, '1@gmail.com', 2, '08:26:42pm 02/03/23', 341616, 0),
(34, 'Thái Anh ', 'Seoul Korea a a ', 36547854, '1@gmail.com', 2, '08:30:34pm 02/03/23', 341616, 0),
(35, 'Thái Anh ', 'Seoul Korea a a ', 36547854, '1@gmail.com', 2, '08:31:00pm 02/03/23', 341616, 0),
(36, 'Thái Anh ', 'Seoul Korea a a ', 36547854, '1@gmail.com', 2, '08:31:39pm 02/03/23', 341616, 0),
(37, 'Thái Anh ', 'Seoul Korea a a ', 36547854, '1@gmail.com', 2, '08:32:37pm 02/03/23', 341616, 0),
(38, 'Thái Anh ', 'Seoul Korea a a ', 36547854, '1@gmail.com', 2, '08:33:18pm 02/03/23', 341616, 0),
(39, 'Thái Anh ', 'Seoul Korea a a ', 36547854, '1@gmail.com', 2, '08:34:39pm 02/03/23', 341616, 0),
(40, 'Thái Anh ', 'Seoul Korea a a ', 36547854, '1@gmail.com', 2, '08:35:25pm 02/03/23', 341616, 0),
(41, 'Thái Anh ', 'Seoul Korea a a ', 36547854, '1@gmail.com', 2, '08:42:07pm 02/03/23', 341616, 0),
(42, 'Thái Anh ', 'Seoul Korea a a ', 36547854, '1@gmail.com', 2, '08:46:38pm 02/03/23', 341616, 0),
(43, 'Thái Anh ', 'Seoul Korea a a ', 36547854, '1@gmail.com', 2, '08:47:03pm 02/03/23', 341616, 0),
(44, 'Thái Anh ', 'Seoul Korea a a ', 36547854, '1@gmail.com', 2, '08:47:10pm 02/03/23', 341616, 0),
(45, 'Thái Anh ', 'Seoul Korea ', 36547854, '1@gmail.com', 1, '08:48:33pm 02/03/23', 341616, 0),
(46, 'Hàn Thư Văn', 'Bắc Kinh', 916457218, 'admin@gmail.com', 1, '08:55:00pm 02/03/23', 170808, 0),
(47, 'Ẩn danh', '', 0, 'nose@gmail.com', 1, '09:00:20pm 02/03/23', 247373647, 0),
(48, 'Hàn Thư Văn', 'Bắc Kinh Trung Quốc', 916457218, 'admin@gmail.com', 2, '09:37:51pm 02/03/23', 890000, 0),
(49, 'Hàn Thư Văn', 'Bắc Kinh Trung Quốc', 916457218, 'admin@gmail.com', 2, '09:39:46pm 02/03/23', 890000, 0),
(50, 'Hàn Thư Văn', 'Bắc Kinh Trung Quốc', 916457218, 'admin@gmail.com', 2, '09:40:52pm 02/03/23', 890000, 0),
(51, 'Hàn Thư Văn', 'Bắc Kinh Trung Quốc', 916457218, 'admin@gmail.com', 2, '09:41:09pm 02/03/23', 890000, 0),
(52, 'Hàn Thư Văn', 'Bắc Kinh Trung Quốc', 916457218, 'admin@gmail.com', 2, '09:46:59pm 02/03/23', 890000, 0),
(53, 'Hàn Thư Văn', 'Bắc Kinh Trung Quốc', 916457218, 'admin@gmail.com', 1, '09:47:50pm 02/03/23', 890000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user_cart` int(11) NOT NULL,
  `id_product_cart` int(11) NOT NULL,
  `img_cart` varchar(255) DEFAULT NULL,
  `name_cart` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `quantity` int(3) NOT NULL,
  `total` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id_user_cart`, `id_product_cart`, `img_cart`, `name_cart`, `price`, `quantity`, `total`, `idbill`) VALUES
(1, 4, 21, 'kaori-1.png', 'Kaori', 4040404, 1, 4040404, 22),
(2, 4, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 1, 80808, 22),
(3, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 22),
(4, 4, 21, 'kaori-1.png', 'Kaori', 4040404, 1, 4040404, 23),
(5, 4, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 1, 80808, 23),
(6, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 23),
(7, 4, 21, 'kaori-1.png', 'Kaori', 4040404, 1, 4040404, 24),
(8, 4, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 1, 80808, 24),
(9, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 24),
(10, 4, 21, 'kaori-1.png', 'Kaori', 4040404, 1, 4040404, 25),
(11, 4, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 1, 80808, 25),
(12, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 25),
(13, 4, 21, 'kaori-1.png', 'Kaori', 4040404, 1, 4040404, 26),
(14, 4, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 1, 80808, 26),
(15, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 26),
(16, 4, 21, 'kaori-1.png', 'Kaori', 4040404, 1, 4040404, 27),
(17, 4, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 1, 80808, 27),
(18, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 27),
(19, 4, 21, 'kaori-1.png', 'Kaori', 4040404, 1, 4040404, 28),
(20, 4, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 1, 80808, 28),
(21, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 28),
(22, 4, 21, 'kaori-1.png', 'Kaori', 4040404, 1, 4040404, 29),
(23, 4, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 1, 80808, 29),
(24, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 29),
(25, 4, 21, 'kaori-1.png', 'Kaori', 4040404, 1, 4040404, 30),
(26, 4, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 1, 80808, 30),
(27, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 30),
(28, 4, 21, 'kaori-1.png', 'Kaori', 4040404, 1, 4040404, 31),
(29, 4, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 1, 80808, 31),
(30, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 31),
(31, 4, 21, 'kaori-1.png', 'Kaori', 4040404, 1, 4040404, 32),
(32, 4, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 1, 80808, 32),
(33, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 32),
(34, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 33),
(35, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 33),
(36, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 34),
(37, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 34),
(38, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 35),
(39, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 35),
(40, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 36),
(41, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 36),
(42, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 37),
(43, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 37),
(44, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 38),
(45, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 38),
(46, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 39),
(47, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 39),
(48, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 40),
(49, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 40),
(50, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 41),
(51, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 41),
(52, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 42),
(53, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 42),
(54, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 43),
(55, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 43),
(56, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 44),
(57, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 44),
(58, 1, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 2, 161616, 45),
(59, 1, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 2, 180000, 45),
(60, 4, 22, 'fatezero-vol6.jpg', 'Fate/Zero vol 6', 80808, 1, 80808, 46),
(61, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 46),
(62, 3, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 47),
(63, 3, 14, '279588634_2899778710322488_3791036427267464670_n.jpg', 'Mina Beauty', 243243243, 1, 243243243, 47),
(64, 3, 21, 'kaori-1.png', 'Kaori', 4040404, 1, 4040404, 47),
(65, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 48),
(66, 4, 19, 'anya-1.jpg', 'Anya', 800000, 1, 800000, 48),
(67, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 49),
(68, 4, 19, 'anya-1.jpg', 'Anya', 800000, 1, 800000, 49),
(69, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 50),
(70, 4, 19, 'anya-1.jpg', 'Anya', 800000, 1, 800000, 50),
(71, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 51),
(72, 4, 19, 'anya-1.jpg', 'Anya', 800000, 1, 800000, 51),
(73, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 52),
(74, 4, 19, 'anya-1.jpg', 'Anya', 800000, 1, 800000, 52),
(75, 4, 23, 'thanchet300yen.jpg', 'Thần chết làm thêm 300 yên/giờ', 90000, 1, 90000, 53),
(76, 4, 19, 'anya-1.jpg', 'Anya', 800000, 1, 800000, 53);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_cate` int(11) NOT NULL,
  `name_cate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_cate`, `name_cate`) VALUES
(53, 'Figure'),
(54, 'Manga'),
(55, 'Game'),
(56, 'Anime'),
(57, 'Khác'),
(58, 'Light Novel');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `img_product` varchar(255) DEFAULT NULL,
  `price_product` double DEFAULT 0,
  `ghichu_product` text DEFAULT NULL,
  `view_product` int(11) DEFAULT 0,
  `id_cate_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `img_product`, `price_product`, `ghichu_product`, `view_product`, `id_cate_product`) VALUES
(4, 'Thorns', '6rollBanner Thorn Rerun.png', 666666, 'demonghichu', 624, 55),
(6, 'Ganyu', 'GanyuArtHMMMMMMMMMMMMMMMMMMMMMMMMGE.jpg', 7777777, 'et34t3tertetetet', 6666, 55),
(9, 'Sana cute', '175114753_525056872207191_5300112778096568711_n.png', 989899, 'srdtwetwrwtwtw3', 2912, 53),
(10, 'Chú Thuật Hồi Chiến vol 1', 'jjk-vol1-1.png', 30000, 'sdjfnsjdfnsnfjsnfjsnfjsfafea', 1111, 54),
(13, 'Magallan', 'be04feea99486d8268b0a919ccae6f0b.jpg', 989898, 'srfgsfsdfsfsfsf', 50, 55),
(14, 'Mina Beauty', '279588634_2899778710322488_3791036427267464670_n.jpg', 243243243, 'sdfsdfsfsfsfsfsfsf', 2304, 57),
(15, 'intern', '307258656_156224860386427_4024229025611825387_n.jpg', 989898, 'sfsdfsdfsfsfsfsfsf', 1000, 56),
(16, 'nilow', 'nilou.png', 989899, 'gdfhdhdhdh', 63, 56),
(17, 'Lena', 'lena-1.jpg', 868685, 'fgdfgdgdfgdgdfgdgdg', 86, 53),
(18, 'Chaeyoung', '300977151_628518265303536_2030453512090368278_n.jpg', 234234234, 'soft softsoft softsoft softsoft softsoft softsoft softsoft softsoft softsoft softsoft softsoft softsoft softsoft softsoft soft', 23232, 57),
(19, 'Anya', 'anya-1.jpg', 800000, 'sdfjsnjcsnjcnsjcnjzncjzncjznczczczczc', 2313, 53),
(20, 'Mona', 'mona-1.jpg', 13214123, 'asfsgdfghfhjfghnfghdfghdgdgdfgdgcvxs', 721, 53),
(21, 'Kaori', 'kaori-1.png', 4040404, 'dsfjsdfsd5f4as5f15wsd4f5s4f5s4fsfsfsf', 404, 53),
(22, 'Fate/Zero vol 6', 'fatezero-vol6.jpg', 80808, 'Fate/zero 6 - Ngọn Lửa Luyện Ngục Cuối cùng Kotomine Kirei cũng bộc lộ bản chất. Đối diện với cái bẫy của gã là Emiya Kiritsugu. Saber lúc này đã rơi vào tuyệt vọng. Archer chờ sẵn cô trong ngọn lửa luyện ngục ngùn ngụt. Giờ đây, các anh linh và pháp sư còn lại trong Cuộc chiến Chén Thánh lần IV khốc liệt sẽ dốc hết sức mình, đối diện với trận chiến cuối cùng. Cuộc đối đầu định mệnh đã được khai hỏa. Tất cả sẽ được thể hiện dưới ngòi bút lạnh lùng tài hoa của Urobuchi. Và phần truyện đau thương này là tập cuối của câu chuyện dẫn về khởi điểm!', 706, 58),
(23, 'Thần chết làm thêm 300 yên/giờ', 'thanchet300yen.jpg', 90000, '“Từ giờ, tớ sẽ tuyển cậu làm Thần Chết.\"\r\nMột ngày nọ, học sinh cấp 3 Sakura Shinji được cô bạn cùng lớp Hanamori Yuki mời làm công việc “Thần Chết”, công việc giúp những người chết chưa thể siêu thoát, vẫn còn vấn vương với cuộc sống trần gian trút bỏ hết những luyến tiếc và tiễn họ sang thế giới bên kia.\r\nSakura bán tín bán nghi trước câu chuyện hoang đường này. Tuy nhiên, khi biết rằng “Nếu có thể tiếp tục công việc này trong vòng nửa năm sẽ được thực hiện bất kỳ mong muốn nào.”, dù còn đang nghi ngờ nhưng Sakura vẫn chấp nhận làm công việc này. Ẩn chứa bên trong câu chuyện là sự cảm động về những vấn vương, mong ước rất đỗi xót xa của những người đã mất.', 0, 58),
(24, 'Sakurako Và Bộ Xương Dưới Gốc Anh Đào vol 1', 'Sakurako-vol1.jpg', 90000, 'Căn biệt thự ấy thuộc gia tộc Kujou, và nàng tiểu thư của gia tộc Kujou ấy, Sakurako Kujou, đang mải mê ninh một bộ xương bên trong một cái nồi lớn. Sự kiện ấy đánh dấu cuộc hành trình cùng nhau của Shoutarou và Sakurako để tìm hiểu những bí ẩn chôn giấu bên trong bộ xương, thứ trụ cột vững chắc nhất của một sinh vật sống, và cũng là thứ trung thực nhất, sẽ cho ta mọi câu trả lời nếu biết đặt câu hỏi hợp lý.\r\n\r\nNàng Sakurako xinh đẹp, kỳ quặc và có chút gì đó trẻ con, lùng sục khắp nơi để tìm kiếm những bộ xương và cùng sự thật xoay quanh bí ẩn của những xác chết; cùng với cậu học sinh trung học bình thường Shoutarou, người ít tuổi hơn Sakurako nhiều nhưng luôn phải đóng vai trò bảo mẫu, kìm hãm cái sự khác người có phần tự nhiên thái quá của Sakurako, hứa hẹn sẽ đem tới cho các bạn độc giả những câu chuyện nhẹ nhàng, hài hước nhưng không kém phần kịch tính và cân não!', 0, 58);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(17) NOT NULL,
  `pass` varchar(24) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `email_user` varchar(255) NOT NULL,
  `phone_user` int(12) DEFAULT NULL,
  `name_user` varchar(255) NOT NULL DEFAULT 'Ẩn danh',
  `img_user` varchar(255) DEFAULT 'default-user.png',
  `address_user` varchar(255) DEFAULT NULL,
  `join_date_user` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `username`, `pass`, `role`, `email_user`, `phone_user`, `name_user`, `img_user`, `address_user`, `join_date_user`) VALUES
(1, '123', '123', 0, '1@gmail.com', 36547854, 'Thái Anh ', 'default-user.png', 'Seoul Korea ', '2023-02-25'),
(3, 'bignose', '123', 0, 'nose@gmail.com', NULL, 'Ẩn danh', 'default-user.png', NULL, '2023-02-26'),
(4, 'admin', '123', 1, 'admin@gmail.com', 916457218, 'Hàn Thư Văn', 'default-user.png', 'Bắc Kinh Trung Quốc', '2023-02-28'),
(6, 'sana', '123', 0, 'shiba@gmail.com', 518427516, 'Minatozaki Sana', 'default-user.png', 'Osaka Nhật Bản', '2023-03-03');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `linkcart_to_bill` (`idbill`),
  ADD KEY `linkcart_to_user` (`id_user_cart`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `link_product_to_category` (`id_cate_product`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `linkcart_to_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id_bill`),
  ADD CONSTRAINT `linkcart_to_user` FOREIGN KEY (`id_user_cart`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `link_product_to_category` FOREIGN KEY (`id_cate_product`) REFERENCES `category` (`id_cate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
