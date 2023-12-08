-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 07, 2023 lúc 01:35 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(21, 'hàng này còn ko ạ', 2, 82, '11:18:30am 07/12/2023'),
(22, 'sanpham nay dẹp ', 2, 85, '11:18:39am 07/12/2023'),
(23, 'sanpham nay dẹp ', 2, 85, '11:18:51am 07/12/2023'),
(24, 'mùi thơm lâu', 2, 86, '11:19:05am 07/12/2023'),
(25, 'sản phẩm đáng mua ah', 4, 86, '11:20:00am 07/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id_cart` int NOT NULL,
  `id_dh` int NOT NULL,
  `id_pr` int NOT NULL,
  `soluong` int NOT NULL,
  `dongia` double(10,2) NOT NULL DEFAULT '0.00',
  `tensp` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `trangthai` varchar(250) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id_cart`, `id_dh`, `id_pr`, `soluong`, `dongia`, `tensp`, `img`, `trangthai`) VALUES
(168, 164, 86, 1, 953000.00, ' Versace Eros ', ' ../upload/3.jpg', '0'),
(169, 164, 85, 6, 989000.00, ' Armaf Club De ', ' ../upload/1.jpg', '0'),
(170, 165, 81, 1, 882000.00, ' Armaf Club De', ' ../upload/g.jpg', '0'),
(171, 166, 83, 1, 560000.00, ' Dior Miss Dior', ' ../upload/2_b.jpg', '0'),
(172, 167, 82, 3, 986000.00, ' Nuit EDP', ' ../upload/1_b.jpg', '0'),
(173, 168, 81, 1, 882000.00, ' Armaf Club De', ' ../upload/g.jpg', '0'),
(174, 170, 85, 1, 989000.00, ' Armaf Club De ', ' ../upload/1.jpg', '0'),
(175, 171, 79, 4, 434000.00, ' nước hoa slc', ' ../upload/3_b.jpg', '0'),
(176, 172, 81, 1, 882000.00, ' Armaf Club De', ' ../upload/g.jpg', '0'),
(177, 173, 82, 1, 986000.00, ' Nuit EDP', ' ../upload/1_b.jpg', '0'),
(178, 174, 80, 1, 625000.00, ' Afnan 9PM EDP', ' ../upload/2.jpg', '0'),
(179, 174, 79, 1, 434000.00, ' nước hoa slc', ' ../upload/3_b.jpg', '0'),
(180, 174, 84, 1, 653000.00, ' Blooming Bouquet', ' ../upload/1_b.jpg', '0'),
(181, 175, 80, 1, 625000.00, ' Afnan 9PM EDP', ' ../upload/2.jpg', '0'),
(182, 175, 1, 1, 163000.00, ' Nước hoa Cooc SiLiYa', ' ../upload/a.jpg', '0'),
(183, 176, 85, 1, 989000.00, ' Armaf Club De ', ' ../upload/1.jpg', '0'),
(184, 177, 87, 1, 89999.00, ' thamxg', ' ../upload/1_b.jpg', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `namedm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `namedm`) VALUES
(16, '  Nước hoa nam'),
(17, 'Nươc hoa nữ'),
(18, 'Chanel'),
(19, 'Lancome'),
(20, 'Chloe'),
(21, 'D&G'),
(22, 'Gucci'),
(23, ' Marc Jacobs'),
(24, 'Estee Lauder');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_dh` int NOT NULL,
  `madh` varchar(10) NOT NULL,
  `tongdonhang` varchar(10) NOT NULL DEFAULT '0',
  `pthuctt` varchar(50) NOT NULL,
  `id_tk` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `trangthai` varchar(10) NOT NULL DEFAULT '0',
  `ngaymua` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_dh`, `madh`, `tongdonhang`, `pthuctt`, `id_tk`, `name`, `email`, `diachi`, `tel`, `trangthai`, `ngaymua`) VALUES
(164, 'ABCD9334', '6887000', 'Thanh toán khi nhận hàng', 4, 'thamnt1612@gmail.com', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-01-07'),
(165, 'ABCD147', '882000', 'atm', 4, 'tuoi', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-02-07'),
(166, 'ABCD2934', '560000', 'Thanh toán khi nhận hàng', 4, 'thamnt1612@gmail.com', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-03-07'),
(167, 'ABCD2872', '2958000', 'Thanh toán khi nhận hàng', 4, 'thamnt1612@gmail.com', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-04-07'),
(168, 'ABCD5655', '882000', 'Thanh toán khi nhận hàng', 4, 'thamnt1612@gmail.com', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-05-07'),
(169, 'ABCD3871', '0', 'Thanh toán khi nhận hàng', 4, 'thamnt1612@gmail.com', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-06-07'),
(170, 'ABCD9238', '989000', 'Thanh toán khi nhận hàng', 4, 'thamnt1612@gmail.com', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-07-07'),
(171, 'ABCD4038', '1736000', 'Thanh toán khi nhận hàng', 4, 'thamnt1612@gmail.com', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-08-07'),
(172, 'ABCD3054', '882000', 'Momo', 4, 'thamnt1612@gmail.com', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-09-07'),
(173, 'ABCD8596', '986000', 'Thanh toán khi nhận hàng', 4, 'thamnt1612@gmail.com', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-10-07'),
(174, 'ABCD8539', '1712000', 'Thanh toán khi nhận hàng', 4, 'tham', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-11-07'),
(175, 'ABCD994', '788000', 'Thanh toán khi nhận hàng', 4, 'manh', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-12-07'),
(176, 'ABCD5957', '989000', 'Thanh toán khi nhận hàng', 4, 'thamnt1612@gmail.com', 'thamnt1612@gmail.com', 'nha 2', '0987890', '2', '2023-12-07'),
(177, 'ABCD9625', '89999', 'Thanh toán khi nhận hàng', 4, 'thamnt1612@gmail.com', 'thamnt1612@gmail.com', 'nha 2', '0987890', '0', '2023-12-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_pr` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` double(10,2) DEFAULT '0.00',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mota` text,
  `luotxem` int DEFAULT '0',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_pr`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(1, 'Nước hoa Cooc SiLiYa', 163000.00, 'a.jpg', 'Nước hoa Cooc SiLiYa 50 ml Với 3 màu tự nhiên \r\nCooc Mademoiselle với hương thơm mới mẻ phá vỡ mọi quy tắc, hương thơm dành riêng cho những phụ nữ mạnh mẽ, can đảm, và hiện đại cùng sang trọng, quý phái.\r\n\r\nmàu Cam: Hương thơm đầu tiên mà bạn cảm nhận đó là hương thơm của các loại trái cây có múi  bao gồm: cam Sicilia, cam bergamot Calabria và bưởi Sicilia. Những hương vị thơm ngọt dịu, chứa 1 chút cay nồng nhẹ nhàng để tạo nên sự tươi mát, dịu dàng cho phái đẹp.\r\n\r\nMàu hồng: Tiếp đến bạn sẽ cảm nhận được sự hòa quyện của hương hoa nhài tinh khiết, cùng hương trái vải ngọt thanh , kết hợp cây hoắc hương Indonesia ấm áp để làm nên vẻ đẹp nhẹ nhàng, đầm ấm của cô gái phương đông.\r\n\r\nMàu đen: Cuối cùng bạn sẽ hòa quyện cùng hương hoa vetiver nhẹ nhàng tươi mát, pha chút hương vị đầm ấm của đất, kết hợp với hương vani Bourbon trắng và xạ hương thơm ngọt.\r\n \r\nMàu xanh: \r\nNhững hương thơm đậm đà quyến rũ mà ngọt ngào kết h', 0, 17),
(63, 'Kilian Good Girl ', 270000.00, '1_b.jpg', 'THÔNG TIN SẢN PHẨM:\r\n- Xuất xứ: Pháp\r\n- Năm phát hành: 2012\r\n- Nhóm hương: Hoa mộc tê, Hoa huệ trắng, Hoa nhài\r\n- Phong cách: Sang trọng, Tinh tế, Quyến rũ\r\n- Lưu Hương : 10-12h\r\n- Hương đầu: Hoa nhài, Hoa mộc tê, Hoa hồng tháng 5\r\n- Hương giữa: Hoa huệ, Hoa thủy tiên\r\n- Hương cuối: Hổ Phách, Gỗ tuyết tùng\r\n', 0, 17),
(64, 'Nước Hoa Nữ D&G Anthology', 350000.00, '2.jpg', '\r\n\r\nNước Hoa Nữ Chính Hãng L’Imperatrice 3 là sự bùng nổ của những tầng hương thanh thoát, sảng khoái và tươi mới của ngày hè ngập nắng. Mở màn với vẻ ngọt thanh, xanh mơn mởn của Kiwi và Cây đại hoàng, nhấn nhá chút ít nồng say từ Tiêu hồng, chuyến du ngoạn được xuất phát với vẻ ngoài nhẹ nhàng đến tinh tế\r\n\r\n1. THÔNG TIN SẢN PHẨM\r\n- Thương hiệu : Dolce & Gabbana\r\n- Xuất xứ : Pháp, Anh , Đức\r\n- Năm phát hành : 2009\r\n- Nhóm hương : Dưa hấu, Quả kiwi, Cây đại hoàng, Hoa tiên khách lai\r\n- Phong cách : Tươi mới, Nữ tính, Dễ thương\r\n- Nồng độ: Eau De Parfum (EDP)\r\n- Dung tích: 2ml, 5ml, 10ml\r\n- Dạng sản phẩm: Dạng xịt', 0, 17),
(65, ' nước hoa  Maycreate', 485000.00, '1.jpg', 'Set 3 chai nước hoa  Maycreate với 3 hương thơm độc đáo,kết hợp từ những\r\n\r\n hương hoa tinh tế của tự nhiên và công thức pha chế độc quyền giúp lưu \r\n\r\nhương thật lâu làm lên 1 quý cô bí ẩn nhưng vô cùng quyến rũ\r\n\r\nMaycreate thương hiệu quá nổi tiếng luôn rùi nhak chị em\r\n\r\nSet 3 chai gọn gàng xinh xắn thơm tho sang chảnh làm quà tặng quá là \r\n\r\ntoẹt vời luôn\r\n\r\nDung tích mỗi chai 30ml', 0, 18),
(66, 'Nước hoa nơ ASL', 485000.00, '3_b.jpg', 'Xuất xứ: Trung quốc \r\nShop cam kết 100% hàng của shop là hàng nội địa trung quốc\r\nShop changchang24488 chuyên kinh doanh sỉ lẻ các mặt hàng mỹ phẩm trung quốc \r\nKết bạn zl để nhận báo giá sỉ.\r\nĐịa chỉ: Ngõ 2 đường quang trung – hà đông – Hà Nội\r\n#myphamgiare #hangnoidia #bansi', 0, 17),
(67, 'Nước hoa Jiopoian coco', 499000.00, '2_b.jpg', 'Xuất xứ: Trung quốc \r\nShop cam kết 100% hàng của shop là hàng nội địa trung quốc\r\nShop changchang24488 chuyên kinh doanh sỉ lẻ các mặt hàng mỹ phẩm trung quốc \r\nKết bạn zl để nhận báo giá sỉ.\r\nĐịa chỉ: Ngõ 2 đường quang trung – hà đông – Hà Nội\r\n#myphamgiare #hangnoidia #bansi\r\n\r\nBạn liên hệ với zl để được tư vấn phí ship tốt nhất\r\n#MYPHAMGIARE\r\n#myphamtrungquoc\r\n#myphamnoidiatrung', 0, 19),
(68, 'Nước hoa estee', 470000.00, '3.jpg', '', 0, 24),
(69, 'Nước hoa D&G', 750000.00, '2.jpg', 'Xuất xứ tại Ý, tuy chỉ mới gia nhập làng “hương thơm” trong khoảng 35 năm, nhưng Dolce & Gabbana (D&G) đã nhanh chóng trở thành một trong những nhãn hiệu nước hoa nổi tiếng, đứng cạnh những anh lớn như Chanel, Gucci.', 0, 21),
(70, 'Navats', 495000.00, '4_b.jpg', 'Marc Jacobs là thương hiệu nước hoa có xuất xứ tại Mỹ, được ra mắt bởi một nhà thiết kế đầy tài ba cùng tên. Xuất thân từ thương hiệu thời trang đình đám, nhưng với niềm đam mê nước hoa mãnh liệt, Marc Jacobs dần được khách hàng ưa chuộng và tin tưởng sở hữu.', 0, 23),
(71, 'Yves Saint Laurent YSL Y Eau De Parfum', 1080000.00, 'n.jpg', '', 0, 16),
(72, 'Nautica Voyage EDT', 690000.00, 'l.jpg', 'Hương thơm lâu', 0, 16),
(73, 'Nước Hoa Issey Miyake L’Eau', 1465000.00, 'j.jpg', 'Mùi thơm quyến rũ', 0, 24),
(74, 'nước hoa thanh lịch', 795000.00, '1.jpg', 'lưu hương', 0, 24),
(75, ' Giorgio Armani Acqua Di', 550000.00, '1_b.jpg', 'mùi thơm', 0, 24),
(76, 'Dolce & Gabbana', 843000.00, '3.jpg', 'hoa thơm', 0, 24),
(77, 'Bvlgari Aqva', 789000.00, '1.jpg', 'lưu hương', 0, 23),
(78, 'Pour Homme EDT', 987000.00, '2.jpg', 'ngát thơm', 0, 23),
(79, 'nước hoa slc', 434000.00, '3_b.jpg', 'qưdfgh', 0, 23),
(80, 'Afnan 9PM EDP', 625000.00, '2.jpg', 'Xuất xứ: Trung quốc Shop cam kết 100% hàng của shop là hàng nội địa trung quốc Shop changchang24488 chuyên kinh doanh sỉ lẻ các mặt hàng mỹ phẩm trung quốc Kết bạn zl để nhận báo giá sỉ. Địa chỉ: Ngõ 2 đường quang trung – hà đông – Hà Nội #myphamgiare #hangnoidia #bansi Bạn liên hệ với zl để được tư vấn phí ship tốt nhất #MYPHAMGIARE #myphamtrungquoc #myphamnoidiatrung', 0, 23),
(81, 'Armaf Club De', 882000.00, 'g.jpg', 'Xuất xứ: Trung quốc Shop cam kết 100% hàng của shop là hàng nội địa trung quốc Shop changchang24488 chuyên kinh doanh sỉ lẻ các mặt hàng mỹ phẩm trung quốc Kết bạn zl để nhận báo giá sỉ. Địa chỉ: Ngõ 2 đường quang trung – hà đông – Hà Nội #myphamgiare #hangnoidia #bansi Bạn liên hệ với zl để được tư vấn phí ship tốt nhất #MYPHAMGIARE #myphamtrungquoc #myphamnoidiatrung', 0, 24),
(82, 'Nuit EDP', 986000.00, '1_b.jpg', 'Nuit EDP', 0, 23),
(83, 'Dior Miss Dior', 560000.00, '2_b.jpg', 'Xuất xứ: Trung quốc Shop cam kết 100% hàng của shop là hàng nội địa trung quốc Shop changchang24488 chuyên kinh doanh sỉ lẻ các mặt hàng mỹ phẩm trung quốc Kết bạn zl để nhận báo giá sỉ. Địa chỉ: Ngõ 2 đường quang trung – hà đông – Hà Nội #myphamgiare #hangnoidia #bansi Bạn liên hệ với zl để được tư vấn phí ship tốt nhất #MYPHAMGIARE #myphamtrungquoc #myphamnoidiatrung', 0, 24),
(84, 'Blooming Bouquet', 653000.00, '1_b.jpg', 'Blooming Bouquet', 0, 24),
(85, 'Armaf Club De ', 989000.00, '1.jpg', 'Armaf Club De ', 0, 24),
(86, 'Versace Eros ', 953000.00, '3.jpg', 'Versace Eros ', 0, 24),
(87, 'thamxg', 89999.00, '1_b.jpg', 'ggg', 0, 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `user`, `pass`, `email`, `diachi`, `tel`, `role`) VALUES
(2, 'admin', '123', 'tham@gmail.com', NULL, NULL, 1),
(3, 'tham', '456', 'tham1@gmail.com', 'qq', '2345', 0),
(4, 'thamnt1612@gmail.com', '123', 'thamnt1612@gmail.com', 'nha 2', '0987890', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `lk_binhluan_sanpham` (`idpro`),
  ADD KEY `lk_binhluan_taikhoan` (`iduser`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `lk_cart_donhang` (`id_dh`),
  ADD KEY `lk_cart_sp` (`id_pr`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_dh`),
  ADD KEY `lk_dơnhang` (`id_tk`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_pr`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id_cart` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_dh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_pr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_binhluan_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id_pr`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_binhluan_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id_tk`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `lk_cart_donhang` FOREIGN KEY (`id_dh`) REFERENCES `donhang` (`id_dh`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_cart_sp` FOREIGN KEY (`id_pr`) REFERENCES `sanpham` (`id_pr`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `lk_dơnhang` FOREIGN KEY (`id_tk`) REFERENCES `taikhoan` (`id_tk`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
