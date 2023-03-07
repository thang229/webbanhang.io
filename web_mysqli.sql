-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2022 lúc 04:21 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_cart`
--

CREATE TABLE `db_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(20) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_cart_list`
--

CREATE TABLE `db_cart_list` (
  `id_cart_details` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `code_cart` varchar(20) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_cart_list`
--

INSERT INTO `db_cart_list` (`id_cart_details`, `id_sanpham`, `code_cart`, `soluongmua`) VALUES
(10, 68, '56', 1),
(11, 69, '56', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_dangki`
--

CREATE TABLE `db_dangki` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sodienthoai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_dangki`
--

INSERT INTO `db_dangki` (`id_user`, `email`, `password`, `hoten`, `diachi`, `sodienthoai`) VALUES
(29, 'hongthang22@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'hong thang', 'cantho', 1111111),
(31, 'anhkiet123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Anh kiệt', 'Thành phố hồ chi minh', 12345);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_danhmuc`
--

CREATE TABLE `db_danhmuc` (
  `id_dmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_danhmuc`
--

INSERT INTO `db_danhmuc` (`id_dmuc`, `tendanhmuc`, `thutu`) VALUES
(38, 'Ốp lưng', 1),
(39, 'Kính cường lực', 2),
(40, 'Tai nghe', 3),
(41, 'Loa', 4),
(42, 'Phụ kiện khác', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_sanpham`
--

CREATE TABLE `db_sanpham` (
  `id_sanpham` int(100) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `mota` varchar(255) DEFAULT NULL,
  `giasp` varchar(100) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_dmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_sanpham`
--

INSERT INTO `db_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `mota`, `giasp`, `hinh`, `soluong`, `id_dmuc`, `tendanhmuc`) VALUES
(68, 'Ốp lưng IphoneX', 'TN01', 'Đẹp và bền', '350000', 'images (2).jpg', 10, 38, ''),
(69, 'Ốp lưng Doremon', 'TN02', 'Đẹp,hình Doremon', '40000', 'images (1).jpg', 11, 38, ''),
(70, 'Ốp lưng Trái bơ', 'TN03', 'Hình Bơ', '53000', 'images (4).jpg', 3, 38, ''),
(72, 'Ốp lưng Doremon', 'TN010', 'Bền ', '34000', 'images.jpg', 5, 38, ''),
(73, 'Ốp lưng Shin', 'TN012', 'Shin bút chi', '32000', 'images (5).jpg', 14, 38, ''),
(74, 'Kính cường lực con voi', 'KC11', 'Bền', '60000', 'images (7).jpg', 19, 39, ''),
(75, 'Kính cường lực con trâu', 'KC10', 'Khó vỡ', '45000', 'thuong-hieu-kinh-cuong-luc-2.jpg', 20, 39, ''),
(76, 'Kính cường lực 10D', 'KC12', 'Bền', '20000', 'images (6).jpg', 14, 39, ''),
(77, 'Kính cường lực Kingkong', 'KC01', 'Bền', '67000', 'tải xuống.jpg', 28, 39, ''),
(78, 'Tai nghe 1', 'TC101', 'Sang xịn ', '300000', 'ES19.png', 28, 40, ''),
(79, 'tai nghe 2', 'TC111', 'Âm thanh tốt', '205000', 'LpwxGR.jpg', 21, 40, ''),
(80, 'Loa Sony', 'LO12', 'Âm thanh tốt', '235000', 'tải xuống (3).jpg', 12, 41, ''),
(81, 'Loa JBL', 'LO01', 'To rõ', '230000', 'tải xuống (2).jpg', 18, 41, ''),
(82, 'Loa Mini', 'LO05', 'Nhỏ có võ', '150000', 'images (9).jpg', 10, 41, ''),
(83, 'Loa Anker', 'LO07', 'To rõ', '205000', 'images (8).jpg', 30, 41, ''),
(84, 'Thẻ nhớ DSS', 'TH20', '32GB', '250000', 'images (10).jpg', 40, 42, ''),
(85, 'Thẻ nhớ Sandisk', 'TH01', 'Thẻ nhớ 16gb', '150000', 'tải xuống (7).jpg', 20, 42, ''),
(86, 'Thẻ nhớ Sandisk 200GB', 'TH10', 'Thẻ nhớ 200gb', '500000', 'tải xuống (8).jpg', 30, 42, ''),
(87, 'Giá đỡ 01', 'GD01', 'Thích hợp cho các dòng điện thoại', '30000', 'tải xuống (4).jpg', 10, 42, ''),
(89, 'Giá đỡ cho xe máy', 'GD11', 'thích hơp cho xe', '33000', 'tải xuống (6).jpg', 10, 42, ''),
(90, 'Bao da 01', 'BD12', 'đẹp bền', '34000', 'Thiết kế chưa có tên.png', 10, 43, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ad`
--

CREATE TABLE `tbl_ad` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_ad`
--

INSERT INTO `tbl_ad` (`id_admin`, `username`, `password`) VALUES
(2, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_cart`
--
ALTER TABLE `db_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `db_cart_list`
--
ALTER TABLE `db_cart_list`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `db_dangki`
--
ALTER TABLE `db_dangki`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `db_danhmuc`
--
ALTER TABLE `db_danhmuc`
  ADD PRIMARY KEY (`id_dmuc`);

--
-- Chỉ mục cho bảng `db_sanpham`
--
ALTER TABLE `db_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_ad`
--
ALTER TABLE `tbl_ad`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_cart`
--
ALTER TABLE `db_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `db_cart_list`
--
ALTER TABLE `db_cart_list`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `db_dangki`
--
ALTER TABLE `db_dangki`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `db_danhmuc`
--
ALTER TABLE `db_danhmuc`
  MODIFY `id_dmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `db_sanpham`
--
ALTER TABLE `db_sanpham`
  MODIFY `id_sanpham` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `tbl_ad`
--
ALTER TABLE `tbl_ad`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
