-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2021 lúc 03:28 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

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
  `mamh` int(20) UNSIGNED NOT NULL,
  `id_baigiang` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baigiang`
--

INSERT INTO `baigiang` (`ngay`, `ten_bg`, `slide`, `bai_tap`, `ghichu`, `mamh`, `id_baigiang`) VALUES
('2021-11-11', 'buổi 1', '../slide_lesson/Bài tập 2-TK Mô tả (3).pdf', '../slide_lesson/Bài tập 3- Ước lượng Kiểm định cho 1 tổng thể (5).pdf', '', 15, 3),
('2021-11-19', 'buổi 1', '../slide_lesson/Bài tập 5- Kiểm định phi tham số   KĐ Chi bình phương   Hồi quy tuyến tính.pdf', '../slide_lesson/Bài tập 2-TK Mô tả (3).pdf', '', 16, 4),
('2021-11-03', 'buoi 3', '../slide_lesson/Phan02_K61_sv.pdf', '../slide_lesson/Phan01.pdf', '', 13, 5),
('2021-11-03', 'Buổi 2', '../slide_lesson/2021_Web Programming Projects (1).pdf', '../slide_lesson/Bài tập 3- Ước lượng Kiểm định cho 1 tổng thể (5).pdf', '2', 14, 7),
('2021-11-19', 'Bài giảng 13', '../slide_lesson/baigiang1.pdf', '../slide_lesson/baitap1.pdf', 'các em làm bt mai ktra', 16, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(20) UNSIGNED NOT NULL,
  `content` varchar(250) NOT NULL,
  `date_com` datetime NOT NULL DEFAULT current_timestamp(),
  `masv` int(20) UNSIGNED NOT NULL,
  `mamh` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `content`, `date_com`, `masv`, `mamh`) VALUES
(18, 'chào các bạn!\r\n', '2021-11-05 20:37:35', 5, 13),
(19, 'Mình tên là Huy', '2021-11-05 20:37:58', 5, 13),
(20, 'Chào các bạn!', '2021-11-05 20:39:17', 5, 14),
(21, 'Chào các bạn!', '2021-11-05 20:39:43', 5, 15),
(22, ' bài này khó quá thầy ơi!', '2021-11-05 20:40:41', 5, 16),
(23, 'chào ceo huy \r\n', '2021-11-05 21:07:23', 6, 13),
(24, 'bạn giúp mình hiểu hơn về bài giảng này được không ', '2021-11-05 21:07:55', 6, 13),
(25, 'bài này khó quá bạn huy ạ \r\n', '2021-11-05 21:08:55', 6, 14),
(26, 'thày giảng lại bài này được không ạ \r\n', '2021-11-05 21:09:26', 6, 16),
(27, 'tri tuệ nhân tạo khó quá ', '2021-11-05 21:10:08', 6, 15),
(28, 'Em không mở dc file này !', '2021-11-05 21:22:34', 7, 14),
(29, 'Cô gửi cho em thêm file bài tập em làm !\r\n', '2021-11-05 21:23:34', 7, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `file_diem` varchar(100) NOT NULL,
  `mamh` int(20) UNSIGNED NOT NULL,
  `id_diem` int(20) UNSIGNED NOT NULL,
  `malop` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`file_diem`, `mamh`, `id_diem`, `malop`) VALUES
('../file/DSNV.csv', 15, 17, 1),
('../file/DSNV.xlsx', 13, 18, 2),
('../file/DSNV.csv', 15, 19, 2),
('../file/DSNV.xlsx', 13, 20, 3),
('../file/DSNV.xlsx', 16, 21, 2),
('../file/DSNV (2).xlsx', 13, 22, 1),
('../file/DSNV.csv', 14, 23, 2);

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
  `status_gv` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`magv`, `tengv`, `chucvu`, `khoa`, `sdt_gv`, `email_gv`, `pass_gv`, `registration_date_gv`, `status_gv`) VALUES
(1, 'Nguyễn Văn Phúc', 'Giảng Viên', 'Công nghệ thông tin', '02898738738', 'phuc@gmail.com', '$2a$04$m23hv0oTw9QWxd4ZwkH0cOFeXy5Zs/LM6O9Eq0Cql4ARfIPPtO1CC', '2021-10-29 20:58:35', 1),
(2, 'Nguyễn Thảo Mai', 'Giảng Viên', 'Khoa công nghệ thông tin', '01275993882', 'tranthaomai@gmail.com', '$2a$04$m23hv0oTw9QWxd4ZwkH0cOFeXy5Zs/LM6O9Eq0Cql4ARfIPPtO1CC', '2021-10-29 20:58:35', 1);

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
  `magv` int(20) UNSIGNED NOT NULL,
  `page_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `avatar_mh`, `tenmh`, `bomon`, `thoiluong`, `giaotrinh`, `magv`, `page_link`) VALUES
(13, '../images/download-dev-c-5.9.2-moi-nhat.png', 'Ngôn ngữ lập trình', 'Hệ thống thông tin', '45 tiết lý thuyết, 15x2 tiết bài tập (4TC)', 'C++ toàn tập (Phạm Văn Tùng dịch), NXB Khoa học tự nhiên và công nghệ, 2013', 1, 'page-subject/NGLT.php'),
(14, '../images/1547524099_php-laravel.png', 'Công nghệ web', 'Hệ thống thông tin', '45 tiết lý thuyết, 15x2 tiết bài tập (4TC)', 'PH toàn tập (Phạm Văn Tùng dịch), NXB Khoa học tự nhiên và công nghệ, 2013', 1, 'page-subject/LT_php.php'),
(15, '../images/ai.png', 'Trí tuệ nhân tạo', 'Hệ thống thông tin', '45 tiết lý thuyết, 15x2 tiết bài tập (4TC)', 'Ai toàn tập (Phạm Văn Tùng dịch), NXB Khoa học tự nhiên và công nghệ, 2013', 1, 'page-subject/Ai.php'),
(16, '../images/he-dieu-hanh-la-gi (3).jpg', 'Hệ điều hành', 'Hệ thống thông tin', '25 tiết lý thuyết, 15x2 tiết bài tập (3TC)', 'hệ điều hành toàn tập (Phạm Văn Tùng dịch), NXB Khoa học tự nhiên và công nghệ, 2013', 1, 'page-subject/hdh.php');

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
(4, 'Nguyễn Quang Hùng', '938928302332', 'sjsdjhdjkdsskdd@gmail.com', '$2y$10$ohxu/MqG4Va4C2KrNwHewOGfAVVox2Uxrwyvx3E4T8zmjf514jyM6', '2021-11-04 20:09:42', 0, '10f85a6eeee7c102d55e9a95ba87460e', 1, 1),
(5, 'Nguyễn Quang Huy', '09389392001', 'huyn67811@gmail.com', '$2y$10$cvSYFAsBgMgJl/anbBPGW.q6LGn11VVor6EYkLn6c1Wy3axljyJkK', '2021-11-05 20:18:19', 1, '2351fe37fd0a9b9b44f7103f241e6b0f', 2, 1),
(6, 'Nguyễn Văn Phúc ', '0367673934', 'nguyenthitham140304@gmail.com', '$2y$10$L2r6XOdS.az7kWubOIm9sOEpuc/R6FwMrmkDOuad0/uYpAPWTyzE6', '2021-11-05 21:06:03', 1, 'f582c9a94b0feb47b32e1d550179b3c5', 1, 1),
(7, 'Trần Quang Minh', '0865094021', 'active@daoquyenminh.onmicrosoft.com', '$2y$10$5Fvdes6WfRwlUXhJmXRlYeqSByk79cX2SyOql0Bm8kBMmPRDiE8zO', '2021-11-05 21:20:49', 1, 'bfd3df26e72a03f6b367d82cee3ab971', 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieu`
--

CREATE TABLE `tailieu` (
  `id_tl` int(20) UNSIGNED NOT NULL,
  `ten_tl` varchar(200) NOT NULL,
  `avatar_tl` varchar(200) NOT NULL,
  `mamh` int(20) UNSIGNED NOT NULL,
  `link_tailieu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tailieu`
--

INSERT INTO `tailieu` (`id_tl`, `ten_tl`, `avatar_tl`, `mamh`, `link_tailieu`) VALUES
(15, ' Code dạo ký sự - Lập trình viên đâu chỉ biết code', '../images/code-dao-ki-su-sach-hay-it.jpg', 13, '../images/28_Nguyễn Quang Huy_61HT.pdf'),
(16, ' Gián điệp mạng', '../images/sach-gian-diep-mang-sach-hay-ve-it-lap-trinh-cong-nghe.jpg', 16, '../images/Bài tập kiểm tra bế tắc.pdf'),
(17, ' Giáo Trình Máy Tính & Mạng máy tính (NXB Giáo Dục 2013)', '../images/mang may tinh.png', 16, '../images/Bài tập kiểm tra bế tắc.pdf'),
(18, ' Lập trình Web từ cơ bản đến nâng cao (NXB Giáo Dục 2018)', '../images/php.jpg', 14, '../images/Bài tập kiểm tra bế tắc.pdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `matb` int(20) UNSIGNED NOT NULL,
  `noi_dung` varchar(500) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `mamh` int(20) UNSIGNED NOT NULL,
  `date_mes` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`matb`, `noi_dung`, `link`, `mamh`, `date_mes`) VALUES
(6, 'Các em nộp bài tập trên đây vào đường link dưới đây.', 'http://tlu.edu.vn/', 14, '2021-11-04 20:05:38'),
(7, 'chào phúc mình đứng đây từ chiều', '', 13, '2021-11-04 20:06:42'),
(8, 'chào phúc đẹp trai', 'http://tlu.edu.vn/', 16, '2021-11-04 20:12:21'),
(9, 'Các em nộp bài tập vào đường link dưới đây nhé!', 'http://tlu.edu.vn/', 15, '2021-11-05 20:45:24'),
(10, 'Các em nhớ làm bài tập đầy đủ.', '', 14, '2021-11-05 20:45:52'),
(11, 'các em làm bài tập nhé ', '', 13, '2021-11-05 21:13:12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baigiang`
--
ALTER TABLE `baigiang`
  ADD PRIMARY KEY (`id_baigiang`),
  ADD KEY `mamh` (`mamh`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `masv` (`masv`),
  ADD KEY `mamh` (`mamh`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`id_diem`),
  ADD KEY `mamh` (`mamh`),
  ADD KEY `malop` (`malop`);

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
  ADD KEY `mamh` (`mamh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baigiang`
--
ALTER TABLE `baigiang`
  MODIFY `id_baigiang` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `diem`
--
ALTER TABLE `diem`
  MODIFY `id_diem` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `magv` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `malop` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `mamh` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `masv` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  MODIFY `id_tl` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `matb` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baigiang`
--
ALTER TABLE `baigiang`
  ADD CONSTRAINT `baigiang_ibfk_1` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`masv`) REFERENCES `sinhvien` (`masv`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`malop`) REFERENCES `lop` (`malop`);

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
  ADD CONSTRAINT `thongbao_ibfk_1` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
