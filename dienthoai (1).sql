-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 06:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dienthoai`
--

-- --------------------------------------------------------

--
-- Table structure for table `baohanh`
--

CREATE TABLE `baohanh` (
  `MaBH` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaSP` varchar(50) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `SDTKH` bigint(20) NOT NULL,
  `NgayBD` date NOT NULL DEFAULT current_timestamp(),
  `NgayKT` date NOT NULL,
  `MoTa` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `baohanh`
--

INSERT INTO `baohanh` (`MaBH`, `MaKH`, `MaSP`, `MaHD`, `SDTKH`, `NgayBD`, `NgayKT`, `MoTa`) VALUES
(1, 1, 'IP732', 11, 778923743, '2023-12-31', '2024-12-31', 'Chính sách bảo hành 2 năm về phần cứng điện thoại'),
(2, 1, 'SSGLA70', 11, 778923743, '2023-12-31', '2024-12-31', 'Chính sách bảo hành 2 năm về phần cứng điện thoại'),
(3, 1, 'SSGLS10', 11, 778923743, '2023-12-31', '2024-12-31', 'Chính sách bảo hành 2 năm về phần cứng điện thoại'),
(7, 1, 'VivoV1564', 20, 778923743, '2023-12-31', '2024-12-31', 'Chính sách bảo hành 2 năm về phần cứng điện thoại');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBL` int(11) NOT NULL,
  `MaSP` varchar(50) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `NoiDung` varchar(1000) NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`MaBL`, `MaSP`, `MaKH`, `NoiDung`, `ThoiGian`) VALUES
(2, 'IP6PLUS16', 2, 'ok', '2023-05-03 10:09:15'),
(3, 'IP6PLUS16', 6, '', '2023-05-02 19:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` varchar(100) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` int(11) NOT NULL,
  `KM` decimal(10,0) DEFAULT NULL,
  `ThanhTien` decimal(10,0) DEFAULT NULL,
  `Mau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `DonGia`, `KM`, `ThanhTien`, `Mau`) VALUES
(11, 'IP732', 2, 9900000, 0, 19800000, 'Đồng'),
(11, 'SSGLA70', 2, 8790000, 1500000, 16080000, 'Đồng'),
(11, 'SSGLS10', 1, 20990000, 750000, 20240000, 'Trắng'),
(12, 'IP732', 1, 9900000, 0, 9900000, 'Đồng'),
(13, 'IP732', 5, 9900000, 0, 49500000, 'Đồng'),
(13, 'SSGSN10', 5, 22990000, 3750000, 111200000, 'Đen'),
(13, 'SSGSN10', 3, 22990000, 2250000, 66720000, 'Đồng'),
(14, 'IP6PLUS16', 2, 7990000, 400000, 15580000, 'Đen'),
(14, 'SSGSN10', 2, 22990000, 1500000, 44480000, 'Đồng'),
(15, 'OppoA5s', 1, 3690000, 200000, 3490000, 'Đồng'),
(16, 'IP6PLUS16', 2, 7990000, 400000, 15580000, 'Đen'),
(17, 'IP732', 1, 9900000, 200000, 9700000, 'Đen'),
(17, 'SSGLA50', 1, 6490000, 750000, 5740000, 'Đen'),
(18, 'OppoA9', 1, 6990000, 200000, 6790000, 'Đen'),
(19, 'OppoA5s', 1, 3690000, 200000, 3490000, 'Đen'),
(20, 'VivoV1564', 1, 5490000, 0, 5490000, 'Đồng'),
(21, 'IP864', 1, 12990000, 200000, 12790000, 'Trắng');

-- --------------------------------------------------------

--
-- Table structure for table `chitietmausp`
--

CREATE TABLE `chitietmausp` (
  `MaSP` varchar(50) NOT NULL,
  `Mau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `chitietmausp`
--

INSERT INTO `chitietmausp` (`MaSP`, `Mau`) VALUES
('IP6PLUS16', 'Đen'),
('IP6PLUS16', 'Đỏ'),
('IP6PLUS16', 'Đồng'),
('IP6PLUS16', 'Trắng'),
('IP732', 'Đen'),
('IP732', 'Đồng'),
('IP732', 'Trắng'),
('IP7PLUS32', 'Đen'),
('IP7PLUS32', 'Đồng'),
('IP7PLUS32', 'Trắng'),
('IP864', 'Đen'),
('IP864', 'Đồng'),
('IP864', 'Trắng'),
('IP8PLUS64', 'Đen'),
('IP8PLUS64', 'Đồng'),
('IP8PLUS64', 'Trắng'),
('IPX111', 'Đen'),
('IPX111', 'Đồng'),
('IPX111', 'Trắng'),
('IPX64', 'Đen'),
('IPX64', 'Đồng'),
('IPX64', 'Trắng'),
('IPXSMAX64', 'Đen'),
('IPXSMAX64', 'Đồng'),
('IPXSMAX64', 'Trắng'),
('OppoA5s', 'Đen'),
('OppoA5s', 'Đồng'),
('OppoA5s', 'Trắng'),
('OppoA9', 'Đen'),
('OppoA9', 'Đồng'),
('OppoA9', 'Trắng'),
('OppoF11', 'Đen'),
('OppoF11', 'Đồng'),
('OppoF11', 'Trắng'),
('OppoF11Pro', 'Đen'),
('OppoF11Pro', 'Đồng'),
('OppoF11Pro', 'Trắng'),
('OppoF9', 'Đồng'),
('OppoK3', 'Đen'),
('OppoK3', 'Đồng'),
('OppoK3', 'Trắng'),
('OppoReno', 'Đen'),
('OppoReno', 'Đồng'),
('OppoReno', 'Trắng'),
('OppoReno10x', 'Đen'),
('OppoReno10x', 'Đồng'),
('OppoReno10x', 'Trắng'),
('OppoReno2F', 'Đen'),
('OppoReno2F', 'Đồng'),
('OppoReno2F', 'Trắng'),
('SSGLA50', 'Đen'),
('SSGLA50', 'Đồng'),
('SSGLA50', 'Trắng'),
('SSGLA70', 'Đen'),
('SSGLA70', 'Đồng'),
('SSGLA70', 'Trắng'),
('SSGLA80', 'Đen'),
('SSGLA80', 'Đồng'),
('SSGLA80', 'Trắng'),
('SSGLA9', 'Đen'),
('SSGLA9', 'Đồng'),
('SSGLA9', 'Trắng'),
('SSGLN9', 'Đen'),
('SSGLN9', 'Đồng'),
('SSGLN9', 'Trắng'),
('SSGLS10', 'Đen'),
('SSGLS10', 'Trắng'),
('SSGLS10+', 'Đen'),
('SSGLS10+', 'Đồng'),
('SSGLS10+', 'Trắng'),
('SSGS10+512', 'Đen'),
('SSGS10+512', 'Đồng'),
('SSGS10+512', 'Trắng'),
('SSGSN10', 'Đen'),
('SSGSN10', 'Đồng'),
('SSGSN10', 'Trắng'),
('SSGSN10+', 'Đen'),
('SSGSN10+', 'Đồng'),
('SSGSN10+', 'Trắng'),
('VivoV1564', 'Đồng'),
('VivoV17Pro', 'Đen'),
('VivoV17Pro', 'Đồng'),
('VivoV17Pro', 'Trắng'),
('VivoV9', 'Đen'),
('VivoV9', 'Đồng'),
('VivoV9', 'Trắng'),
('VivoY12', 'Đồng'),
('VivoY17', 'Đồng'),
('VivoY19', 'Đen'),
('VivoY19', 'Đồng'),
('VivoY19', 'Trắng'),
('VivoY91', 'Đồng'),
('VivoY91c', 'Đen'),
('VivoY91c', 'Trắng'),
('VivoY93', 'Đen'),
('VivoY93', 'Đồng'),
('VivoY93', 'Trắng'),
('Xiaomi7', 'Đen'),
('Xiaomi7', 'Đồng'),
('Xiaomi7', 'Trắng'),
('Xiaomi7A', 'Đen'),
('Xiaomi7A', 'Trắng'),
('Xiaomi8A', 'Đen'),
('Xiaomi8A', 'Đồng'),
('Xiaomi8A', 'Trắng'),
('Xiaomi9SE', 'Đen'),
('Xiaomi9SE', 'Đồng'),
('Xiaomi9SE', 'Trắng'),
('Xiaomi9T', 'Đen'),
('Xiaomi9T', 'Đồng'),
('Xiaomi9T', 'Trắng'),
('XiaomiA3', 'Đen'),
('XiaomiA3', 'Đồng'),
('XiaomiA3', 'Trắng'),
('XiaomiGo', 'Đen'),
('XiaomiGo', 'Đồng'),
('XiaomiGo', 'Trắng'),
('XiaomiN7', 'Đen'),
('XiaomiN7', 'Đồng'),
('XiaomiN7', 'Trắng'),
('XiaomiN8', 'Đen'),
('XiaomiN8', 'Đồng'),
('XiaomiN8', 'Trắng'),
('XiaomiN8Pro', 'Đen'),
('XiaomiN8Pro', 'Đồng'),
('XiaomiN8Pro', 'Trắng');

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieunhap`
--

CREATE TABLE `chitietphieunhap` (
  `MaPN` int(11) NOT NULL,
  `MaSP` varchar(100) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
(1, 'Sản Phẩm Mới'),
(2, 'Sản Phẩm Bán Chạy'),
(3, 'Sản Phẩm Nổi Bật');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `MaSP` varchar(100) NOT NULL,
  `H1` varchar(100) DEFAULT NULL,
  `H2` varchar(100) DEFAULT NULL,
  `H3` varchar(100) DEFAULT NULL,
  `H4` varchar(100) DEFAULT NULL,
  `H5` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` varchar(50) DEFAULT NULL,
  `NgayDat` datetime DEFAULT current_timestamp(),
  `NgayGiao` datetime DEFAULT NULL,
  `TinhTrang` varchar(20) DEFAULT NULL,
  `TongTien` decimal(10,0) NOT NULL,
  `MaNVGH` varchar(50) DEFAULT NULL,
  `TenNN` varchar(100) DEFAULT NULL,
  `SDTNN` varchar(100) DEFAULT NULL,
  `DiaChiNN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `MaNV`, `NgayDat`, `NgayGiao`, `TinhTrang`, `TongTien`, `MaNVGH`, `TenNN`, `SDTNN`, `DiaChiNN`) VALUES
(11, 1, 'NV1', '2019-12-08 20:18:49', '0000-00-00 00:00:00', 'Đã duyệt', 56120000, NULL, 'Nguyễn Nam Cường', '0778923743', 'Đà Nẵng'),
(12, 1, 'NV1', '2019-12-08 20:23:02', '2019-12-13 14:55:02', 'hoàn thành', 9900000, 'NV1', 'Nguyễn Nam Cường', '778923743', 'Đà Nẵng'),
(13, 1, 'NV1', '2019-12-08 20:30:49', '2019-12-13 14:32:41', 'hoàn thành', 227420000, 'NV1', 'Nguyễn Nam Cường', '778923743', 'Đà Nẵng'),
(14, 1, 'NV1', '2019-12-12 14:18:35', '2019-12-13 14:31:34', 'hoàn thành', 60060000, 'NV1', 'Nguyễn Nam Cường', '778923743', 'Đà Nẵng'),
(15, 1, 'NV1', '2019-12-12 14:54:48', '2019-12-13 14:55:01', 'hoàn thành', 3490000, 'NV1', 'Nguyễn Nam Cường', '778923743', 'Đà Nẵng'),
(16, 1, 'NV1', '2019-12-31 13:41:50', '0000-00-00 00:00:00', 'Đã duyệt', 15580000, NULL, 'Nguyễn Nam Cường', '778923743', 'Đà Nẵng'),
(17, 1, 'NV1', '2019-12-31 14:00:59', '0000-00-00 00:00:00', 'Đã duyệt', 15440000, NULL, 'Nguyễn Nam Cường', '778923743', 'Đà Nẵng'),
(18, 1, 'NV1', '2019-12-31 14:04:06', '0000-00-00 00:00:00', 'Đã duyệt', 6790000, NULL, 'Nguyễn Nam Cường', '778923743', 'Đà Nẵng'),
(19, 1, 'NV1', '2019-12-31 14:06:45', '0000-00-00 00:00:00', 'Đã duyệt', 3490000, NULL, 'Nguyễn Nam Cường', '778923743', 'Đà Nẵng'),
(20, 1, 'NV1', '2019-12-31 14:30:23', '0000-00-00 00:00:00', 'Đã duyệt', 5490000, NULL, 'Nguyễn Nam Cường', '778923743', 'Đà Nẵng'),
(21, 6, NULL, '2023-05-02 18:51:19', NULL, 'chưa duyệt', 12790000, NULL, 'Nguyễn Bình Trọng', '328000672', 'TPHCM');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(100) NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `SDT` int(12) NOT NULL,
  `MatKhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `DiaChi`, `Email`, `SDT`, `MatKhau`) VALUES
(6, 'Nguyễn Bình Trọng', 'TPHCM', 'andurec.mg@gmail.com', 328000672, '123456'),
(2, 'Nguyễn Thái An', 'TPHCM', 'anguyen.mg@gmail.com', 328006072, '123456'),
(1, 'Nguyễn Nam Cường', 'TPHCM', 'cuongdola@gmail.com', 123456789, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(100) NOT NULL,
  `TriGia` bigint(20) NOT NULL,
  `MoTa` varchar(300) DEFAULT NULL,
  `NgayBD` date NOT NULL,
  `NgayKT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `TriGia`, `MoTa`, `NgayBD`, `NgayKT`) VALUES
(1, 'Phiếu mua hàng Samsung trị giá 300.000đ', 300000, 'Phiếu mua hàng Samsung trị giá 300.000đ', '2023-12-06', '2024-01-31'),
(2, 'Ưu đãi quà tặng độc quyền Galaxy trị giá đến 450.000đ', 450000, 'Ưu đãi quà tặng độc quyền Galaxy trị giá đến 450.000đ', '2023-12-06', '2024-01-31'),
(7, 'Khuyễn mãi OPPO SƠN TÙNG MTP', 200000, 'OPPO đi cùng MTP', '2023-12-11', '2024-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `mau`
--

CREATE TABLE `mau` (
  `TenMau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `mau`
--

INSERT INTO `mau` (`TenMau`) VALUES
('Đen'),
('Đỏ'),
('Đồng'),
('Trắng'),
('Xanh');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(100) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `DiaChi` varchar(200) DEFAULT NULL,
  `SDT` int(12) DEFAULT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `Quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `HoTen`, `DiaChi`, `SDT`, `MatKhau`, `Quyen`) VALUES
('admin', 'Nhân viên 1', NULL, NULL, 'admin', 1),
('NV1', 'Nhân viên A', NULL, NULL, '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE `phieunhap` (
  `MaPN` int(11) NOT NULL,
  `MaNV` varchar(100) NOT NULL,
  `NgayNhap` date NOT NULL,
  `TongTien` decimal(10,0) NOT NULL,
  `MaTH` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(50) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `MoTa` varchar(1000) NOT NULL,
  `AnhNen` varchar(100) NOT NULL,
  `MaTH` int(11) NOT NULL,
  `MaDM` int(10) DEFAULT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MoTa`, `AnhNen`, `MaTH`, `MaDM`, `DonGia`, `SoLuong`) VALUES
('IP6PLUS16', 'Điện thoại iPhone 6 Plus 16GB', 'Được đổi mới mạnh mẽ về thiết kế, cấu hình cùng một màn hình kích thước lớn đi cùng mang đến nhiều thích thú hơn trong sử dụng.', 'ip6plus.png', 1, 3, 7990000, 100),
('IP732', 'Điện thoại iPhone 7 32GB', 'iPhone 7 32GB vẫn mang trên mình thiết kế quen thuộc của từ thời iPhone 6 nhưng có nhiều thay đổi lớn về phần cứng, dàn loa stereo và cấu hình cực mạnh.', 'ip7.png', 1, 3, 9900000, 100),
('IP7PLUS32', 'Điện thoại iPhone 7 Plus 32GB', 'Mặc dù giữ nguyên vẻ bề ngoài so với dòng điện thoại iPhone đời trước, bù lại iPhone 7 Plus 32GB lại được trang bị nhiều nâng cấp đáng giá như camera kép đầu tiên cũng như cấu hình mạnh mẽ.', 'ip7plus.png', 1, 3, 11990000, 100),
('IP864', 'Điện thoại iPhone 8 64GB', 'iPhone 8 64GB nổi bật với điểm nhấn mặt lưng kính và mặt trước giữ nguyên thiết kế như iPhone 7, cùng với đó là hàng loạt công nghệ đáng mong đợi như sạc nhanh, không dây hay hỗ trợ thực tế ảo AR.', 'ip8.png', 1, 3, 12990000, 100),
('IP8PLUS64', 'Điện thoại iPhone 8 Plus 64GB', 'Thừa hưởng những thiết kế đã đạt đến độ chuẩn mực, thế hệ iPhone 8 Plus thay đổi phong cách bóng bẩy hơn và bổ sung hàng loạt tính năng cao cấp cho trải nghiệm sử dụng vô cùng tuyệt vời.', 'ip8plus.png', 1, 3, 15990000, 100),
('IPX111', 'Điện thoại Iphone X', '1', 'ip6.png', 1, 3, 1, 0),
('IPX64', 'Điện thoại iPhone X 64GB', 'iPhone X 64 GB là cụm từ được rất nhiều người mong chờ muốn biết và tìm kiếm trên Google bởi đây là chiếc điện thoại mà Apple kỉ niệm 10 năm iPhone đầu tiên được bán ra.', 'ip10.png', 1, 2, 10000000, 100),
('IPXSMAX64', 'Điện thoại iPhone Xs Max 64GB', 'Hoàn toàn xứng đáng với những gì được mong chờ, phiên bản cao cấp nhất iPhone Xs Max 64 GB của Apple năm nay nổi bật với chip A12 Bionic mạnh mẽ, màn hình rộng đến 6.5 inch, cùng camera kép trí tuệ nhân tạo và Face ID được nâng cấp.', 'ipxsmax.png', 1, NULL, 25990000, 100),
('OppoA5s', 'Điện thoại OPPO A5s', 'OPPO A5s là một chiếc máy giá rẻ và vẫn giữ được cho mình những ưu điểm mà người dùng yêu thích của một chiếc smartphone tới từ OPPO.', 'OppoA5s.png', 4, NULL, 3690000, 100),
('OppoA9', 'Điện thoại OPPO A9', 'Đặc điểm nổi bật của OPPO A9 (2020)\r\n\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nBộ sản phẩm chuẩn: Sạc,Tai nghe,Hộp,Cây lấy sim,Ốp lưng,Sách hướng dẫn\r\n\r\nKế thừa phiên bản OPPO A7 đã từng gây hot trước đó, OPPO A9 (2020) có nhiều sự cải tiến hơn về màn hình, camera và hiệu năng trải nghiệm.', 'oppoa9.png', 4, NULL, 6990000, 100),
('OppoF11', 'Điện thoại OPPO F11', 'OPPO F11 gây ấn tượng với người dùng bởi thiết kế màn hình tràn viền hình giọt nước và camera sau khủng đến 48 MP.', 'oppof11.png', 4, NULL, 6290000, 100),
('OppoF11Pro', 'Điện thoại OPPO F11 Pro 128GB', 'Lâu nay, những chiếc điện thoại của OPPO thường được đánh giá cao ở camera selfie và với OPPO F11 Pro 128GB thì ngoài thế mạnh về camera trước với hệ thống trượt, OPPO làm người ta phải ấn tượng thêm cả về camera sau.', 'oppof11pro.png', 4, NULL, 7490000, 100),
('OppoF9', 'Điện thoại OPPO F9', 'Là chiếc điện thoại OPPO mới nhất sở hữu công nghệ sạc VOOC đột phá, OPPO F9 còn được ưu ái nhiều tính năng nổi trội như thiết kế mặt lưng chuyển màu độc đáo, màn hình tràn viền giọt nước và camera chụp chân dung tích hợp trí tuệ nhân tạo A.I hoàn hảo.', 'OppoF9.png', 4, NULL, 4490000, 100),
('OppoK3', 'Điện thoại OPPO K3', 'Đặc điểm nổi bật của OPPO K3\r\n\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nBộ sản phẩm chuẩn: Hộp, Sạc, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng\r\n\r\nOPPO K3 là một chiếc smartphone tầm trung với khá nhiều tính năng cao cấp như màn hình không \"tai thỏ\" hay cảm biến vân tay bên trong màn hình.', 'oppok3.png', 4, NULL, 5990000, 100),
('OppoReno', 'Điện thoại OPPO Reno', 'Những năm gần đây OPPO luôn tạo được dấu ấn trên các sản phẩm mới của mình và smartphone vừa ra mắt OPPO Reno là một ví dụ điển hình.', 'Oppo1.png', 4, NULL, 9990000, 100),
('OppoReno10x', 'Điện thoại OPPO Reno 10x Zoom Edition\r\n\r\n', 'Những chiếc flagship trong năm 2019 không chỉ có một camera chụp ảnh đẹp, chụp xóa phông ảo diệu mà còn phải \"chụp thật xa\" và với chiếc OPPO Reno 10x Zoom Edition chính thức gia nhập thị trường \"smartphone có camera siêu zoom\".', 'Oppo10x.png', 4, NULL, 16990000, 100),
('OppoReno2', 'Điện thoại OPPO Reno2', 'Sau sự thành công của chiếc OPPO Reno với thiết kế mới lạ, camera chất lượng thì mới đây OPPO tiếp tục giới thiệu phiên bản nâng cấp của chiếc smartphone này là chiếc OPPO Reno2.', 'Oppo2.png', 4, NULL, 14990000, 100),
('OppoReno2F', 'Điện thoại OPPO Reno2 F', 'OPPO Reno2 F là một trong 3 chiếc smartphone thuộc dòng OPPO Reno2 vừa được OPPO giới thiệu với thiết kế thời trang cùng nhiều nâng cấp mạnh mẽ về camera.', 'oppo2f.png', 4, NULL, 8990000, 100),
('SSGLA50', 'Điện thoại Samsung Galaxy A50 128GB', 'Samsung Galaxy A50 128GB là mẫu smartphone dòng A mới trong năm 2019 và đặc biệt máy sở hữu công nghệ cảm biến vân tay trong màn hình lần đầu tiên xuất hiện trên một chiếc máy tầm trung tới từ Samsung.', 'SSGLA50.png', 3, NULL, 6490000, 100),
('SSGLA70', 'Điện thoại Samsung Galaxy A70', 'Samsung Galaxy A70 là một phiên bản phóng to của chiếc Samsung Galaxy A50 đã ra mắt trước đó với nhiều cải tiến tới từ bên trong.', 'SSGLA70.png', 3, NULL, 8790000, 100),
('SSGLA80', 'Điện thoại Samsung Galaxy A80', 'Samsung Galaxy A80 là chiếc smartphone mang trong mình rất nhiều đột phá của Samsung và hứa hẹn sẽ là \"ngọn cờ đầu\" cho những chiếc smartphone sở hữu một màn hình tràn viền thật sự.', 'SSa80.png', 3, NULL, 14990000, 100),
('SSGLA9', 'Điện thoại Samsung Galaxy A9', 'Samsung Galaxy A9 (2018) là chiếc điện thoại đầu tiên của Samsung sở hữu hệ thống camera ấn tượng với 4 thấu kính cùng hàng loạt các nâng cấp đáng giá về cấu hình và tính năng hiện đại khác.', 'SSa9.png', 3, NULL, 10990000, 100),
('SSGLN9', 'Điện thoại Samsung Galaxy Note 9', 'Mang lại sự cải tiến đặc biệt trong cây bút S Pen, siêu phẩm Samsung Galaxy Note 9 còn sở hữu dung lượng pin khủng lên tới 4.000 mAh cùng hiệu năng mạnh mẽ vượt bậc, xứng đáng là một trong những chiếc điện thoại cao cấp nhất của Samsung.', 'SSN9.png', 3, NULL, 22990000, 100),
('SSGLS10', 'Điện thoại Samsung Galaxy S10', 'Samsung Galaxy S10 là chiếc smartphone kỉ niệm 10 năm ngày kể từ ngày đầu tiên Samsung ra mắt chiếc Galaxy S và không phụ sự chờ đợi của người dùng thì Samsung Galaxy S10 thực sự rất ấn tượng.', 'SSs10.png', 3, NULL, 20990000, 100),
('SSGLS10+', 'Điện thoại Samsung Galaxy S10+', 'Samsung Galaxy S10+ 128GB là một trong những chiếc smartphone được trông chờ nhiều nhất trong năm 2019 và không phụ sự kỳ vọng của mọi người thì chiếc Galaxy S thứ 10 của Samsung thực sự gây ấn tượng mạnh cho người dùng.', 'SSs10+.png', 3, NULL, 22990000, 100),
('SSGS10+512', 'Samsung Galaxy S10+ (512GB)', 'Samsung Galaxy S10+ 512GB - phiên bản kỷ niệm 10 năm chiếc Galaxy S đầu tiên ra mắt, là một chiếc smartphone hội tủ đủ các yếu tố mà bạn cần ở một chiếc máy cao cấp trong năm 2019.', 'ssgs10+.PNG', 3, NULL, 28900000, 100),
('SSGSN10', 'Điện thoại Samsung Galaxy Note 10', 'Nếu như từ trước tới nay dòng Galaxy Note của Samsung thường ít được các bạn nữ sử dụng bởi kích thước màn hình khá lớn khiến việc cầm nắm trở nên khó khăn thì Samsung Galaxy Note 10 sẽ là chiếc smartphone nhỏ gọn, phù hợp với cả những bạn có bàn tay nhỏ.', 'SSN10.png', 3, NULL, 22990000, 100),
('SSGSN10+', 'Điện thoại Samsung Galaxy Note 10+', 'Đặc điểm nổi bật của Samsung Galaxy Note 10+\r\n\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nBộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng, Viết\r\n\r\nTrông ngoại hình khá giống nhau, tuy nhiên Samsung Galaxy Note 10+ sở hữu khá nhiều điểm khác biệt so với Galaxy Note 10 và đây được xem là một trong những chiếc máy đáng mua nhất trong năm 2019, đặc biệt dành cho những người thích một chiếc máy màn hình lớn, camera chất lượng hàng đầu.', 'SSN10+.png', 3, NULL, 26990000, 100),
('VivoV1564', 'Điện thoại Vivo V15 64GB', 'Vivo V15 64GB là sản phẩm mới nhất của nhà Vivo với rất nhiều điểm nhấn đáng giá như màn hình siêu tràn viền, cụm 3 camera và đặc biệt là camera trước có khả năng \"tàng hình\".', 'vivov1564.png', 2, NULL, 5490000, 100),
('VivoV17Pro', 'Điện thoại Vivo V17 Pro', 'Bắt kịp xu thế smartphone có nhiều camera thì Vivo đã nhanh chóng giới thiệu chiếc Vivo V17 Pro với tổng cộng tới 6 camera trên một chiếc máy.', 'vivov17.png', 2, NULL, 9990000, 100),
('VivoV9', 'Điện thoại Vivo V9', 'Vivo V9 là chiếc smartphone tầm trung cận cao cấp với điểm nhấn là máy có camera kép phía sau và camera selfie độ phân giải cao 24 MP.', 'vivov9.png', 2, NULL, 4990000, 100),
('VivoY12', 'Điện thoại Vivo Y12', 'Vivo Y12 là chiếc smartphone tầm trung của Vivo vừa mới ra mắt, cấu hình ổn cũng như mức giá tốt vẫn là tiêu chí hàng đầu của chiếc máy này.', 'vivoy12.png', 2, NULL, 3590000, 100),
('VivoY17', 'Điện thoại Vivo Y17', 'Vivo Y17 là một chiếc máy tầm trung với nhiều trang bị khá đáng giá như cụm 3 camera sau hay dung lượng pin thoải mái dùng 2 ngày.', 'vivoy17.png', 2, NULL, 4390000, 100),
('VivoY19', 'Điện thoại Vivo Y19', 'Vivo Y19 là chiếc smartphone tập trung mạnh vào khả năng chụp ảnh ở camera chính lẫn camera selfie với công nghệ AI, hứa hẹn sẽ nhận được sự đón nhận tới từ người dùng là những bạn trẻ năng động và cá tính.', 'vivoy19.png', 2, NULL, 4990000, 100),
('VivoY91', 'Điện thoại Vivo Y91', 'Dù thuộc phân khúc điện thoại tầm trung giá rẻ nhưng Vivo Y91 vẫn sẽ khiến bạn phải mê mẩn trước vẻ đẹp bên ngoài cùng khả năng chụp hình ấn tượng bên trong, đặc biệt là viên pin có dung lượng siêu khủng được Vivo ưu ái trang bị.', 'vivoy91.png', 2, NULL, 3490000, 100),
('VivoY91c', 'Điện thoại Vivo Y91C', 'Sở hữu thiết kế trẻ trung, năng động cùng kiểu màn hình Halo Fullview độc đáo với mức giá \"hạt dẻ\", chiếc điện thoại Vivo Y91C hứa hẹn sẽ tạo cơn sốt trong thời gian tới.', 'vivoy91c.png', 2, NULL, 2590000, 100),
('VivoY93', 'Điện thoại Vivo Y93', 'Vivo Y93 32GB là chiếc smartphone giá rẻ, nhưng vẫn sở hữu nhiều ưu điểm mới nhất cho người dùng hiện nay như pin khủng, màn hình tràn giọt nước hay camera kép xoá phông.', 'vivoy93.png', 2, NULL, 2990000, 100),
('Xiaomi7', 'Điện thoại Xiaomi Redmi 7', 'Nếu bạn đang tìm kiếm một smartphone có mức giá rẻ nhưng cũng phải đáp ứng tốt nhu cầu sử dụng hằng ngày và phải có một thiết kế thời trang thì không có sự lựa chọn nào hợp lý hơn Xiaomi Redmi 7 3GB/32GB.', 'Xiaomi7.png', 5, NULL, 3290000, 100),
('Xiaomi7A', 'Điện thoại Xiaomi Redmi 7A', 'Xiaomi Redmi 7A 2GB/32GB  là một chiếc smartphone theo phong cách truyền thống của Xiaomi, mang tới người dùng trải nghiệm Android ổn trên một chiếc máy có mức giá rất hấp dẫn.', 'Xiaomi7A.png', 5, NULL, 2190000, 100),
('Xiaomi8A', 'Điện thoại Xiaomi Redmi 8A', 'Xiaomi Redmi 8A là một chiếc smartphone nổi bật trong phân khúc giá rẻ với nhiều ưu điểm như pin khủng, chip Snapdragon mới, camera AI và màn hình giọt nước thời thượng.', 'Xiaomi8A.png', 5, NULL, 2590000, 100),
('Xiaomi9SE', 'Điện thoại Xiaomi Mi 9 SE', 'Vẫn như thường lệ thì bên cạnh chiếc flagship Xiaomi Mi 9 cao cấp của mình thì Xiaomi cũng giới thiệu thêm phiên bản rút gọn là chiếc Xiaomi Mi 9 SE. Máy vẫn sở hữu cho mình nhiều trang bị cao cấp tương tự đàn anh.', 'Xiaomi9SE.png', 5, NULL, 7490000, 100),
('Xiaomi9T', 'Điện thoại Xiaomi Mi 9T2', 'Xiaomi Mi 9T (tên khác là Redmi K20) là chiếc smartphone vừa được giới thiệu gây rất nhiều chú ý với người dùng bởi nó hội tụ đủ 3 yếu tố \"ngon bổ rẻ\".', 'Xiaomi9T.png', 5, NULL, 7990000, 100),
('XiaomiA3', 'Điện thoại Xiaomi Mi A3', 'Xiaomi đã và đang khá thành công với các sản phẩm thuộc dòng Mi A của mình và mới đây hãng đã tiếp tục cho ra mắt phiên bản nâng cấp là chiếc Xiaomi Mi A3 (Mi CC9e) với cải tiến mạnh mẽ về camera và hiệu năng bên trong.', 'XiaomiA3.png', 5, NULL, 4490000, 100),
('XiaomiGo', 'Điện thoại Xiaomi Redmi Go 16GB\r\n\r\n', 'Xiaomi Redmi Go 16GB là một trong những chiếc smartphone giá rẻ nhất tới từ Xiaomi nhưng vẫn mang lại cho bạn một trải nghiệm mượt mà đến \"khó tin\".', 'XiaomiGo.png', 5, NULL, 1590000, 100),
('XiaomiN7', 'Điện thoại Xiaomi Redmi Note 7', 'Xiaomi Redmi Note 7 4GB/64GB là chiếc smartphone giá rẻ mới được giới thiệu vào đầu năm 2019 với nhiều trang bị đáng giá như thiết kế notch giọt nước hay camera lên tới 48 MP.', 'XiaomiN7.png', 5, NULL, 4490000, 100),
('XiaomiN8', 'Điện thoại Xiaomi Redmi Note 8', 'Vào đầu tháng 10/2019 Xiaomi đã ra mắt một smartphone tầm trung mới nhất của họ mang tên Xiaomi Redmi Note 8 4GB/128GB. Chiếc điện thoại gây ấn tượng với thiết kế màn hình giọt nước thời trang, bộ 4 camera chất lượng cao, vi xử lý hiệu năng tốt đi kèm giá bán vô cùng hấp dẫn.', 'XiaomiN8.png', 5, NULL, 5290000, 100),
('XiaomiN8Pro', 'Điện thoại Xiaomi Redmi Note 8 Pro', 'Là phiên bản nâng cấp của chiếc Xiaomi Redmi Note 7 Pro đã \"làm mưa làm gió\" trên thị trường trước đó, chiếc Xiaomi Redmi Note 8 Pro (6GB/128GB) sẽ là sự lựa chọn hàng đầu dành cho người dùng quan tâm nhiều về hiệu năng và camera của một chiếc máy tầm trung.', 'XiaomiN8pro.png', 5, NULL, 6490000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `sanphamkhuyenmai`
--

CREATE TABLE `sanphamkhuyenmai` (
  `MaSP` varchar(50) NOT NULL,
  `MaKM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `sanphamkhuyenmai`
--

INSERT INTO `sanphamkhuyenmai` (`MaSP`, `MaKM`) VALUES
('IP6PLUS16', 1),
('IP6PLUS16', 7),
('IP732', 7),
('IP7PLUS32', 7),
('IP864', 7),
('IP8PLUS64', 7),
('IPX111', 7),
('IPX64', 7),
('IPXSMAX64', 7),
('OppoA5s', 7),
('OppoA9', 7),
('OppoF11', 7),
('OppoF11Pro', 7),
('OppoF9', 7),
('OppoK3', 7),
('OppoReno', 7),
('OppoReno10x', 7),
('OppoReno2', 7),
('OppoReno2F', 7),
('SSGLA50', 1),
('SSGLA50', 2),
('SSGLA70', 1),
('SSGLA70', 2),
('SSGLA80', 1),
('SSGLA80', 2),
('SSGLA9', 1),
('SSGLA9', 2),
('SSGLN9', 1),
('SSGLN9', 2),
('SSGLS10', 1),
('SSGLS10', 2),
('SSGLS10+', 1),
('SSGLS10+', 2),
('SSGS10+512', 1),
('SSGS10+512', 2),
('SSGSN10', 1),
('SSGSN10', 2),
('SSGSN10+', 1),
('SSGSN10+', 2);

-- --------------------------------------------------------

--
-- Table structure for table `thongtinsp`
--

CREATE TABLE `thongtinsp` (
  `MaSP` varchar(100) NOT NULL,
  `ManHinh` varchar(100) DEFAULT NULL,
  `HDH` varchar(100) NOT NULL,
  `CameraS` varchar(100) DEFAULT NULL,
  `CameraT` varchar(100) DEFAULT NULL,
  `CPU` varchar(100) DEFAULT NULL,
  `Ram` varchar(100) DEFAULT NULL,
  `BoNhoTrong` varchar(100) DEFAULT NULL,
  `Sim` varchar(100) DEFAULT NULL,
  `Pin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `thongtinsp`
--

INSERT INTO `thongtinsp` (`MaSP`, `ManHinh`, `HDH`, `CameraS`, `CameraT`, `CPU`, `Ram`, `BoNhoTrong`, `Sim`, `Pin`) VALUES
('IP6PLUS16', 'LED-backlit IPS LCD, 5.5', 'iOS 9', '8 MP', '1.2 MP', 'Apple A8 2 nhân 64-bit', '1 GB', '16 GB', '1 Nano SIM, Hỗ trợ 4G', '2915 mAh'),
('IP732', 'LED-backlit IPS LCD, 4.7\", Retina HD', 'iOS 12', '12 MP', '7 MP', 'Apple A10 Fusion 4 nhân 64-bit', '2 GB', '32 GB', '1 Nano SIM, Hỗ trợ 4G', '1960 mAh'),
('IP7PLUS32', 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 12', 'Chính 12 MP & Phụ 12 MP', '7 MP', 'Apple A10 Fusion 4 nhân', '3 GB', '32 GB', '1 Nano SIM, Hỗ trợ 4G', '2900 mAh'),
('IP864', 'LED-backlit IPS LCD, 4.7\", Retina HD', 'iOS 12', '12 MP', '7 MP', 'Apple A11 Bionic 6 nhân', '2 GB', '64 GB', '1 Nano SIM, Hỗ trợ 4G', '1821 mAh có sạc nhanh'),
('IP8PLUS64', 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 12', 'Chính 12 MP & Phụ 12 MP', '7 MP', 'Apple A11 Bionic 6 nhân', '3 GB', '64 GB', '1 Nano SIM, Hỗ trợ 4G', '2691 mAh, có sạc nhanh'),
('IPX111', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('IPX64', 'OLED, 5.8\\\", Super Retina', 'iOS 12', 'Chính 12 MP & Phụ 12 MP', '7 MP', 'Apple A11 Bionic 6 nhân', '3 GB', '64 GB', '1 Nano SIM\',\' Hỗ trợ 4G', '2716 mAh\', \'có sạc nhanh'),
('IPXSMAX64', 'OLED, 6.5\\\", Super Retina', 'iOS 12', 'Chính 12 MP & Phụ 12 MP', '7 MP', 'Apple A12 Bionic 6 nhân', '4 GB', '64 GB', 'Nano SIM & eSIM, Hỗ trợ 4G', '3174 mAh, có sạc nhanh'),
('OppoA5s', 'IPS LCD, 6.2\", HD+', 'Android 8.1 (Oreo)', 'Chính 13 MP & Phụ 2 MP', '8 MP', 'MediaTek Helio P35 8 nhân 64-bit', '3 GB', '32 GB', '2 Nano SIM, Hỗ trợ 4G', '4230 mAh'),
('OppoA9', 'TFT, 6.5\", HD+', '	Android 9.0 (Pie)', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', '16 MP', 'Snapdragon 665 8 nhân', '	8 GB', '	128 GB', '\r\n2 Nano SIM, Hỗ trợ 4G', '5000 mAh'),
('OppoF11', '	LTPS LCD, 6.5\", Full HD+', 'Android 9.0 (Pie)', 'Chính 48 MP & Phụ 5 MP', '	16 MP', '	MediaTek Helio P70 8 nhân', '	6 GB', '	64 GB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '4020 mAh, có sạc nhanh'),
('OppoF11Pro', 'LTPS LCD, 6.5\", Full HD+', '	Android 9.0 (Pie)', 'Chính 48 MP & Phụ 5 MP', '16 MP', '	MediaTek Helio P70 8 nhân', '	6 GB', '	128 GB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '4000 mAh, có sạc nhanh'),
('OppoF9', '	LTPS LCD, 6.3\", Full HD+', 'ColorOS 5.2 (Android 8.1)', 'Chính 16 MP & Phụ 2 MP', '25 MP', 'MediaTek Helio P60 8 nhân 64-bit', '4 GB', '64 GB', '\r\n2 Nano SIM, Hỗ trợ 4G', '3500 mAh, có sạc nhanh'),
('OppoK3', 'AMOLED, 6.5\", Full HD+', '	Android 9.0 (Pie)', 'Chính 16 MP & Phụ 2 MP', '16 MP', 'Snapdragon 710 8 nhân 64-bit', '	6 GB', '64 GB', '2 Nano SIM, Hỗ trợ 4G', '	3765 mAh, có sạc nhanh'),
('OppoReno', '	AMOLED, 6.4\", Full HD+', 'Android 9.0 (Pie)', '	Chính 48 MP & Phụ 5 MP', '16 MP', 'Snapdragon 710 8 nhân 64-bit', '	6 GB', '	256 GB', '2 Nano SIM, Hỗ trợ 4G', '	3765 mAh, có sạc nhanh'),
('OppoReno10x', 'AMOLED, 6.6\", Full HD+', 'Android 9.0 (Pie)', 'Chính 48 MP & Phụ 13 MP, 8 MP', '16 MP', 'Snapdragon 855 8 nhân', '8 GB', '256 GB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '4065 mAh, có sạc nhanh'),
('OppoReno2', 'Sunlight AMOLED, 6.55\", Full HD+', 'Android 9.0 (Pie)', 'Chính 48 MP & Phụ 13 MP, 8 MP, 2 MP', '	16 MP', '	Snapdragon 730G 8 nhân', '	8 GB', '256 GB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '4000 mAh, có sạc nhanh'),
('OppoReno2F', 'AMOLED, 6.5\", Full HD+', '	Android 9.0 (Pie)', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', '16 MP', 'MediaTek Helio P70 8 nhân', '8 GB', '	128 GB', '\r\n2 Nano SIM, Hỗ trợ 4G', '	4000 mAh, có sạc nhanh'),
('SSGLA50', 'Super AMOLED, 6.4\", Full HD+', 'Android 9.0 (Pie)', 'Chính 25 MP & Phụ 8 MP, 5 MP', '25 MP', 'Exynos 9610 8 nhân 64-bit', '6 GB', '128 GB', '2 Nano SIM, Hỗ trợ 4G', '4000 mAh, có sạc nhanh'),
('SSGLA70', 'Super AMOLED, 6.7\", Full HD+', 'Android 9.0 (Pie)', 'Chính 32 MP & Phụ 8 MP, 5 MP', '32 MP', 'Snapdragon 675 8 nhân', '6 GB', '128 GB', '\r\n2 Nano SIM, Hỗ trợ 4G', '4500 mAh, có sạc nhanh'),
('SSGLA80', 'Super AMOLED, 6.7\", Full HD+', 'Android 9.0 (Pie)', 'Chính 48 MP & Phụ 8 MP, TOF 3D', 'Chính 48 MP & Phụ 8 MP, TOF 3D', 'Snapdragon 730 8 nhân', '8 GB', '128 GB', '\r\n2 Nano SIM, Hỗ trợ 4G', '3700 mAh, có sạc nhanh'),
('SSGLA9', 'Super AMOLED, 6.3\", Full HD+', 'Android 8.0 (Oreo)', 'Chính 24 MP & Phụ 10 MP, 8 MP, 5 MP', '24 MP', 'Snapdragon 660 8 nhân', '6 GB', '128 GB', '2 Nano SIM, Hỗ trợ 4G', '3800 mAh, có sạc nhanh'),
('SSGLN9', 'Super AMOLED, 6.4\", Quad HD+ (2K+)', 'Android 8.1 (Oreo)', 'Chính 12 MP & Phụ 12 MP', '8 MP', 'Exynos 9810 8 nhân 64-bit', '6 GB', '128 GB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '4000 mAh, có sạc nhanh'),
('SSGLS10', 'Dynamic AMOLED, 6.1\", Quad HD+ (2K+)', 'Android 9.0 (Pie)', 'Chính 12 MP & Phụ 12 MP, 16 MP', '10 MP', 'Exynos 9820 8 nhân 64-bit', '8 GB', '128 GB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '3400 mAh, có sạc nhanh'),
('SSGLS10+', 'Dynamic AMOLED, 6.4\", Quad HD+ (2K+)', 'Android 9.0 (Pie)', 'Chính 12 MP & Phụ 12 MP, 16 MP', 'Chính 10 MP & Phụ 8 MP', 'Exynos 9820 8 nhân 64-bit', '8 GB', '128 GB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '4100 mAh, có sạc nhanh'),
('SSGS10+512', 'Dynamic AMOLED, 6.8\", Quad HD+ (2K+)', 'Android 9.0 (Pie)', 'Chính 12 MP & Phụ 12 MP, 16 MP, TOF 3D', '10 MP', 'Exynos 9825 8 nhân', '12 GB', '256 GB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '4300 mAh, có sạc nhanh'),
('SSGSN10', 'Dynamic AMOLED, 6.3\", Full HD+', 'Android 9.0 (Pie)', 'Chính 12 MP & Phụ 12 MP, 16 MP', '10 MP', 'Exynos 9825 8 nhân', '8 GB', '256 GB', '2 Nano SIM, Hỗ trợ 4G', '3500 mAh, có sạc nhanh'),
('SSGSN10+', 'Dynamic AMOLED, 6.8\", Quad HD+ (2K+)', 'Android 9.0 (Pie)', 'Chính 12 MP & Phụ 12 MP, 16 MP, TOF 3D', '10 MP', 'Exynos 9825 8 nhân', '12 GB', '256 GB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '4300 mAh, có sạc nhanh'),
('VivoV1564', 'PS LCD, 6.53\", Full HD+', 'Android 9.0 (Pie)', 'Chính 12 MP & Phụ 8 MP, 5 MP', '32 MP', 'MediaTek Helio P70 8 nhân', '6 GB', '64 GB', '\r\n2 Nano SIM, Hỗ trợ 4G', '4000 mAh, có sạc nhanh'),
('VivoV17Pro', 'Super AMOLED, 6.44\", Full HD+', 'Android 9.0 (Pie)', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Chính 32 MP & Phụ 8 MP', 'Snapdragon 675 8 nhân 64-bit', '8 GB', '128 GB', '128 GB', '4100 mAh, có sạc nhanh'),
('VivoV9', 'IPS LCD, 6.3\", Full HD+', 'Android 8.1 (Oreo)', 'Chính 16 MP & Phụ 5 MP', '24 MP', 'Snapdragon 626 8 nhân', '4 GB', '64 GB', '2 Nano SIM, Hỗ trợ 4G', '3260 mAh'),
('VivoY12', 'IPS LCD, 6.35\", HD+', 'Android 9.0 (Pie)', 'Chính 13 MP & Phụ 8 MP, 2 MP', '8 MP', 'MediaTek MT6762 8 nhân 64-bit (Helio P22)', '3 GB', '64 GB', '2 Nano SIM, Hỗ trợ 4G', '5000 mAh'),
('VivoY17', 'IPS LCD, 6.35\", HD+', 'Android 9.0 (Pie)', 'Chính 13 MP & Phụ 8 MP, 2 MP', '20 MP', 'MediaTek Helio P35 8 nhân 64-bit', '4 GB', '128 GB', '2 Nano SIM, Hỗ trợ 4G', '5000 mAh, có sạc nhanh'),
('VivoY19', 'IPS LCD, 6.53\", Full HD+', 'Android 9.0 (Pie)', 'Chính 16 MP & Phụ 8 MP, 2 MP', '16 MP', 'MediaTek MT6768 8 nhân (Helio P65)', '6 GB', '128 GB', '2 Nano SIM, Hỗ trợ 4G', '5000 mAh, có sạc nhanh'),
('VivoY91', 'IPS LCD, 6.22\", HD+', 'Android 8.1 (Oreo)', 'Chính 13 MP & Phụ 2 MP', '8 MP', 'MediaTek MT6762R 8 nhân', '3 GB', '64 GB', '2 Nano SIM, Hỗ trợ 4G', '4030 mAh'),
('VivoY91c', 'IPS LCD, 6.22\", HD+', 'Android 8.1 (Oreo)', '13 MP', '5 MP', 'MediaTek MT6762R 8 nhân', '2 GB', '32 GB', '2 Nano SIM, Hỗ trợ 4G', '4030 mAh'),
('VivoY93', 'IPS LCD, 6.2\", HD+', '	Android 8.1 (Oreo)', '	Chính 13 MP & Phụ 2 MP', '	8 MP', 'Qualcomm Snapdragon 439 8 nhân 64-bit', '3 GB', '32 GB', '2 Nano SIM, Hỗ trợ 4G', '4030 mAh'),
('Xiaomi7', 'IPS LCD, 6.26\", HD+', '	Android 9.0 (Pie)', 'Chính 12 MP & Phụ 2 MP', '	8 MP', '	Qualcomm Snapdragon 632 8 nhân 64-bit', '	3 GB', '32 GB', '\r\n2 Nano SIM, Hỗ trợ 4G', '	4000 mAh'),
('Xiaomi7A', '	IPS LCD, 5.45\", HD+', '	Android 9.0 (Pie)', '	12 MP', '5 MP', 'Qualcomm Snapdragon 439 8 nhân 64-bit', '	2 GB', '	32 GB', '2 Nano SIM, Hỗ trợ 4G', '4000 mAh'),
('Xiaomi8A', 'IPS LCD, 6.22\", HD+', 'Android 9.0 (Pie)', '	12 MP', '	8 MP', 'Qualcomm Snapdragon 439 8 nhân 64-bit', '2 GB', '32 GB', '2 Nano SIM, Hỗ trợ 4G', '5000 mAh, có sạc nhanh'),
('Xiaomi9SE', 'Super AMOLED, 5.97\", Full HD+', 'Android 9.0 (Pie)', 'Chính 48 MP & Phụ 13 MP, 8 MP', '	20 MP', 'Snapdragon 712 8 nhân 64-bit', '	6 GB', '	64 GB', '2 Nano SIM, Hỗ trợ 4G', '	3070 mAh, có sạc nhanh'),
('Xiaomi9T', 'AMOLED, 6.39', '	Android 9.0 (Pie)', 'Chính 48 MP & Phụ 13 MP, 8 MP', '20 MP', 'Snapdragon 730 8 nhân', '6 GB', '	64 GB', '2 Nano SIM, Hỗ trợ 4G', '4000 mAh, có sạc nhanh'),
('XiaomiA3', 'AMOLED, 6.01\", HD+', '	Android 9 Pie (Android One)', 'Chính 48 MP & Phụ 8 MP, 2 MP', '32 MP', 'Qualcomm Snapdragon 665 8 nhân', '4 GB', '64 GB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '	4030 mAh, có sạc nhanh'),
('XiaomiGo', '	IPS LCD, 5\", HD', '	Android 8 Oreo (Go Edition)', '	8 MP', '5 MP', 'Qualcomm Snapdragon 425 4 nhân 64-bit', '	1 GB', '	16 GB', '\r\n2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '	3000 mAh'),
('XiaomiN7', 'IPS LCD, 6.3\", Full HD+', 'Android 9.0 (Pie)', 'Chính 48 MP & Phụ 5 MP', '13 MP', 'Qualcomm Snapdragon 660 8 nhân', '4 GB', '	64 GB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '	4000 mAh, có sạc nhanh'),
('XiaomiN8', 'IPS LCD, 6.3\", Full HD+', 'Android 9.0 (Pie)', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', '	13 MP', '	Qualcomm Snapdragon 665 8 nhân', '	4 GB', '128 GB', '2 Nano SIM, Hỗ trợ 4G', '	4000 mAh, có sạc nhanh'),
('XiaomiN8Pro', 'IPS LCD, 6.53\", Full HD+', '	Android 9.0 (Pie)', 'Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP', '	20 MP', 'Mediatek Helio G90T 8 nhân', '	6 GB', '128 GB', '\r\n2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '	4500 mAh, có sạc nhanh');

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `MaTH` int(11) NOT NULL,
  `TenTH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`MaTH`, `TenTH`) VALUES
(1, 'IPHONE'),
(2, 'VIVO'),
(3, 'SAMSUNG'),
(4, 'OPPO'),
(5, 'XIAOMI'),
(6, 'NOKIA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baohanh`
--
ALTER TABLE `baohanh`
  ADD PRIMARY KEY (`MaBH`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBL`,`MaSP`,`MaKH`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaHD`,`MaSP`,`Mau`),
  ADD KEY `MaSP` (`MaSP`),
  ADD KEY `Mau` (`Mau`);

--
-- Indexes for table `chitietmausp`
--
ALTER TABLE `chitietmausp`
  ADD PRIMARY KEY (`MaSP`,`Mau`),
  ADD KEY `Mau` (`Mau`);

--
-- Indexes for table `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD PRIMARY KEY (`MaPN`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`MaSP`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `MaKH` (`MaKH`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`);

--
-- Indexes for table `mau`
--
ALTER TABLE `mau`
  ADD PRIMARY KEY (`TenMau`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Indexes for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`MaPN`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaTH` (`MaTH`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Indexes for table `sanphamkhuyenmai`
--
ALTER TABLE `sanphamkhuyenmai`
  ADD PRIMARY KEY (`MaSP`,`MaKM`),
  ADD KEY `MaKM` (`MaKM`);

--
-- Indexes for table `thongtinsp`
--
ALTER TABLE `thongtinsp`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`MaTH`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baohanh`
--
ALTER TABLE `baohanh`
  MODIFY `MaBH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  MODIFY `MaPN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `MaPN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `MaTH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baohanh`
--
ALTER TABLE `baohanh`
  ADD CONSTRAINT `baohanh_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `baohanh_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitiethoadon_ibfk_3` FOREIGN KEY (`Mau`) REFERENCES `mau` (`TenMau`);

--
-- Constraints for table `chitietmausp`
--
ALTER TABLE `chitietmausp`
  ADD CONSTRAINT `chitietmausp_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitietmausp_ibfk_2` FOREIGN KEY (`Mau`) REFERENCES `mau` (`TenMau`);

--
-- Constraints for table `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD CONSTRAINT `chitietphieunhap_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaTH`) REFERENCES `thuonghieu` (`MaTH`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`);

--
-- Constraints for table `sanphamkhuyenmai`
--
ALTER TABLE `sanphamkhuyenmai`
  ADD CONSTRAINT `sanphamkhuyenmai_ibfk_1` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`),
  ADD CONSTRAINT `sanphamkhuyenmai_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `thongtinsp`
--
ALTER TABLE `thongtinsp`
  ADD CONSTRAINT `thongtinsp_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
