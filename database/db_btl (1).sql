-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2021 lúc 11:32 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baigiang`
--

CREATE TABLE `baigiang` (
  `ngay` date NOT NULL,
  `ten_bg` varchar(250) NOT NULL,
  `slide` varchar(250) NOT NULL,
  `bai_tap` varchar(250) DEFAULT NULL,
  `ghichu` varchar(250) DEFAULT NULL,
  `mamh` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `lop` varchar(100) NOT NULL,
  `file_diem` varchar(100) NOT NULL,
  `mamh` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `magv` int(20) UNSIGNED NOT NULL,
  `tengv` varchar(200) NOT NULL,
  `chucvu` varchar(200) NOT NULL,
  `khoa` varchar(200) DEFAULT NULL,
  `sdt_gv` varchar(200) NOT NULL,
  `email_gv` varchar(200) NOT NULL,
  `pass_gv` varchar(200) NOT NULL,
  `registration_date_gv` datetime NOT NULL DEFAULT current_timestamp(),
  `status_gv` tinyint(1) DEFAULT 0,
  `code_gv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`magv`, `tengv`, `chucvu`, `khoa`, `sdt_gv`, `email_gv`, `pass_gv`, `registration_date_gv`, `status_gv`, `code_gv`) VALUES
(1, 'Nguyễn Văn Phúc', 'Giảng Viên', 'Công nghệ thông tin', '02898738738', 'phuc@gmail.com', '123', '2021-10-29 20:58:35', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoc`
--

CREATE TABLE `hoc` (
  `masv` int(20) UNSIGNED NOT NULL,
  `mamh` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `malop` int(20) UNSIGNED NOT NULL,
  `tenlop` varchar(100) NOT NULL,
  `magv` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`malop`, `tenlop`, `magv`) VALUES
(1, '61HT', 1),
(2, '61PM1', 1),
(3, '61PM2', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `mamh` int(20) UNSIGNED NOT NULL,
  `avatar_mh` varchar(250) DEFAULT NULL,
  `tenmh` varchar(250) NOT NULL,
  `bomon` varchar(250) NOT NULL,
  `thoiluong` varchar(100) DEFAULT NULL,
  `giaotrinh` varchar(250) DEFAULT NULL,
  `magv` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `avatar_mh`, `tenmh`, `bomon`, `thoiluong`, `giaotrinh`, `magv`) VALUES
(13, 'assets/images/download-dev-c-5.9.2-moi-nhat.png', 'Ngôn ngữ lập trình', 'Hệ thống thông tin', '45 tiết lý thuyết, 15x2 tiết bài tập (4TC)', 'C++ toàn tập (Phạm Văn Tùng dịch), NXB Khoa học tự nhiên và công nghệ, 2013', 1),
(14, 'assets/images/1547524099_php-laravel.png', 'Công nghệ web', 'Hệ thống thông tin', '30 tiết lý thuyết, 15x2 tiết bài tập (4TC)', 'PHP toàn tập (Phạm Văn Tùng dịch), NXB Khoa học tự nhiên và công nghệ, 2013', 1),
(15, 'assets/images/ai.png', 'Trí tuệ nhân tạo', 'Hệ thống thông tin', '45 tiết lý thuyết, 15x2 tiết bài tập (4TC)', 'Ai toàn tập (Phạm Văn Tùng dịch), NXB Khoa học tự nhiên và công nghệ, 2013', 1),
(16, 'assets/images/he-dieu-hanh-la-gi (3).jpg', 'Hệ điều hành', 'Hệ thống thông tin', '25 tiết lý thuyết, 15x2 tiết bài tập (3TC)', 'hệ điều hành toàn tập (Phạm Văn Tùng dịch), NXB Khoa học tự nhiên và công nghệ, 2013', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` int(20) UNSIGNED NOT NULL,
  `tensv` varchar(250) NOT NULL,
  `sodt_sv` varchar(200) DEFAULT NULL,
  `email_sv` varchar(250) NOT NULL,
  `pass_sv` varchar(250) NOT NULL,
  `registration_date_sv` datetime NOT NULL DEFAULT current_timestamp(),
  `status_sv` tinyint(1) DEFAULT 0,
  `code_sv` varchar(255) NOT NULL,
  `malop` int(20) UNSIGNED NOT NULL,
  `magv` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`masv`, `tensv`, `sodt_sv`, `email_sv`, `pass_sv`, `registration_date_sv`, `status_sv`, `code_sv`, `malop`, `magv`) VALUES
(2, 'Nguyễn Quang Huy', '09389392000', 'huyn67811@gmail.com', '$2y$10$plszG/.KhQcehVN.deEP6OMRhEOZ9yHzmXSYDKVfyFyaVJq6Z9T/O', '2021-10-30 16:28:37', 1, 'a2edcc7d34d711803ade0cd6fda764f5', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieu`
--

CREATE TABLE `tailieu` (
  `id_tl` int(20) UNSIGNED NOT NULL,
  `ten_tl` varchar(200) NOT NULL,
  `avatar_tl` varchar(200) NOT NULL,
  `mamh` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `matb` int(20) UNSIGNED NOT NULL,
  `noi_dung` varchar(500) NOT NULL,
  `malop` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baigiang`
--
ALTER TABLE `baigiang`
  ADD KEY `mamh` (`mamh`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD KEY `mamh` (`mamh`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`magv`);

--
-- Chỉ mục cho bảng `hoc`
--
ALTER TABLE `hoc`
  ADD KEY `masv` (`masv`),
  ADD KEY `mamh` (`mamh`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`malop`),
  ADD KEY `magv` (`magv`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamh`),
  ADD KEY `magv` (`magv`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`),
  ADD KEY `malop` (`malop`),
  ADD KEY `magv` (`magv`);

--
-- Chỉ mục cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD PRIMARY KEY (`id_tl`),
  ADD KEY `mamh` (`mamh`);

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`matb`),
  ADD KEY `malop` (`malop`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `magv` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `malop` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `mamh` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `masv` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  MODIFY `id_tl` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `matb` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baigiang`
--
ALTER TABLE `baigiang`
  ADD CONSTRAINT `baigiang_ibfk_1` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);

--
-- Các ràng buộc cho bảng `hoc`
--
ALTER TABLE `hoc`
  ADD CONSTRAINT `hoc_ibfk_1` FOREIGN KEY (`masv`) REFERENCES `sinhvien` (`masv`),
  ADD CONSTRAINT `hoc_ibfk_2` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`magv`) REFERENCES `giaovien` (`magv`);

--
-- Các ràng buộc cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`magv`) REFERENCES `giaovien` (`magv`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`malop`) REFERENCES `lop` (`malop`),
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`magv`) REFERENCES `giaovien` (`magv`);

--
-- Các ràng buộc cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD CONSTRAINT `tailieu_ibfk_1` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);

--
-- Các ràng buộc cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD CONSTRAINT `thongbao_ibfk_1` FOREIGN KEY (`malop`) REFERENCES `lop` (`malop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
