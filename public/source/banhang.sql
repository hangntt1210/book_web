-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 05:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(14, 14, '2017-03-23', 160000, 'COD', 'k', '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(13, 13, '2017-03-21', 400000, 'ATM', 'Vui lòng giao hàng trước 5h', '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(12, 12, '2017-03-21', 520000, 'COD', 'Vui lòng chuyển đúng hạn', '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(11, 11, '2017-03-21', 420000, 'COD', 'không chú', '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(15, 15, '2017-03-24', 220000, 'COD', 'e', '2017-03-24 07:14:32', '2017-03-24 07:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(18, 15, 62, 5, 220000, '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(17, 14, 2, 1, 160000, '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(16, 13, 60, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(15, 13, 59, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(14, 12, 60, 2, 200000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(13, 12, 61, 1, 120000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(12, 11, 61, 1, 120000, '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(11, 11, 57, 2, 150000, '2017-03-21 07:16:09', '2017-03-21 07:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(15, 'ê', 'Nữ', 'huongnguyen@gmail.com', 'e', 'e', 'e', '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(14, 'hhh', 'nam', 'huongnguyen@gmail.com', 'Lê thị riêng', '99999999999999999', 'k', '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(13, 'Hương Hương', 'Nữ', 'huongnguyenak96@gmail.com', 'Lê Thị Riêng, Quận 1', '23456789', 'Vui lòng giao hàng trước 5h', '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(12, 'Khoa phạm', 'Nam', 'khoapham@gmail.com', 'Lê thị riêng', '1234567890', 'Vui lòng chuyển đúng hạn', '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(11, 'Hương Hương', 'Nữ', 'huongnguyenak96@gmail.com', 'Lê Thị Riêng, Quận 1', '234567890-', 'không chú', '2017-03-21 07:16:09', '2017-03-21 07:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `create_at`, `update_at`) VALUES
(1, 'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam \"Bánh trung thu Bơ Sữa HongKong\".', 'Những ý tưởng dưới đây sẽ giúp bạn sắp xếp tủ quần áo trong phòng ngủ chật hẹp của mình một cách dễ dàng và hiệu quả nhất. ', 'sample1.jpg', '2017-03-11 06:20:23', '0000-00-00 00:00:00'),
(2, 'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát', 'Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất. ', 'sample2.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(3, 'Đồ gỗ nội thất và nhu cầu, xu hướng sử dụng của người dùng', 'Đồ gỗ nội thất ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Xu thế của các gia đình hiện nay là muốn đem thiên nhiên vào nhà ', 'sample3.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(4, 'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.', 'Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu ', 'sample4.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(5, 'Phong cách mới trong sử dụng đồ gỗ nội thất gia đình', 'Đồ gỗ nội thất gia đình ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Phong cách sử dụng đồ gỗ hiện nay của các gia đình hầu h ', 'sample5.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `new`, `created_at`, `updated_at`) VALUES
(1, 'Chờ đến mẫu giáo thì đã muộn', 5, 'Sách tự truyện', 150000, 120000, 'cho-den-mau-giao-thi-da-muon.jpg', 'cuốn', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(2, 'Tiếng anh cơ bản', 7, '', 180000, 160000, 'tieng-anh-co-ban.jpg', 'cuốn', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(3, 'Tự học tiếng nhật', 7, '', 150000, 120000, 'tu-hoc-tieng-nhat.png', 'cuốn', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(4, 'Đại số tuyến tính', 6, '', 160000, 0, 'dai-so-tuyen-tinh.jpg', 'cuốn', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(5, 'Bách khoa thai giáo', 5, '', 160000, 0, 'bach-khoa-thai-giao.jpg', 'cuốn', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(6, 'Nuôi dạy bé trai', 5, '', 200000, 180000, 'nuoi-day-be-trai.jpg', 'cuốn', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(7, 'Để con được ốm', 5, '', 160000, 0, 'de-con-duoc-om.jpg', 'cuốn', 1, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(8, 'Dám nghĩ lớn', 4, '', 160000, 150000, 'dam-nghi-lon.jpg', 'cuốn', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(9, 'Đắc nhân tâm', 4, '', 160000, 150000, 'dac-nhan-tam.jpg', 'cuốn', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(11, 'Câu đố hình', 3, '', 250000, 0, 'cau-do-hinh.jpg', 'cuốn', 0, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(12, 'Nguồn gốc sự vật', 3, '', 200000, 180000, 'nguon-goc-su-vat.jpg', 'cuốn', 0, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(13, 'Quê ngoại', 3, '', 300000, 280000, 'que-ngoai.jpg', 'cuốn', 1, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(14, 'Rùa và thỏ', 3, '', 300000, 280000, 'rua-va-tho.jpg', 'cuốn', 0, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(15, 'Tấm cám', 3, '', 350000, 320000, 'tam-cam.jpg', 'cuốn', 1, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(16, 'Thơ thiếu nhi', 3, '', 150000, 120000, 'tho.jpg', 'cuốn', 0, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(17, 'Cây khế', 3, '', 250000, 240000, 'cay-khe.jpg', 'cuốn', 0, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(18, 'Thế giới phẳng', 2, '', 180000, 0, 'the-gioi-phang.jpg', 'cuốn', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(19, 'Khởi nghiệp bán lẻ ', 2, '', 150000, 0, 'khoi-nghiep-ban-le.gif', 'cuốn', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(20, 'Lịch sử đảng phái', 2, '', 150000, 0, 'lich-su-dang-phai.jpg', 'cuốn', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(21, 'Cách nền kinh tế vận hành', 2, '', 160000, 150000, 'cach-nen-kinh-te-van-hanh.jpg', 'cuốn', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(22, 'Bảy bước tới mùa hè', 1, '', 160000, 150000, 'bay-buoc-toi-mua-he.png', 'cuốn', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(23, 'Hoàng tử bé', 1, '', 180000, 0, 'hoang-tu-be.jpg', 'cuốn', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(24, 'Ông già và biển cả', 1, '', 180000, 0, 'ong-gia-va-bien-ca.png', 'cuốn', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(25, 'Văn học dân gian', 1, '', 80000, 70000, 'van-hoc-dan-gian.jpg', 'cuốn', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(26, 'Tôi thấy hoa vàng trên cỏ xanh', 1, '', 50000, 0, 'toi-thay-hoa-vang-tren-co-xanh.jpg', 'cuốn', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`) VALUES
(1, '', 'banner1.jpg'),
(2, '', 'banner2.jpg'),
(3, '', 'banner3.jpg'),
(4, '', 'banner4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sách văn học', 'Sách văn học là loại hình sáng tác đặc biệt tái hiện lại những bình diện của cuộc sống, của xã hội và con người dưới ngòi bút trào phúng và văn hoa. Thông thường, phương thức sáng tạo nên những tác phẩm văn học, đặc biệt là những tác phẩm văn học kinh điển sẽ thông qua một phần hư cấu nhất định cùng phong cách ngôn ngữ do chính tác giả lựa chọn.', 'van-hoc-dan-gian.jpg', NULL, NULL),
(2, 'Sách kinh tế', 'Sách về các vấn đề kinh tế học.', 'cach-nen-kinh-te-van-hanh.jpg', '2016-10-12 02:16:15', '2016-10-13 01:38:35'),
(3, 'Sách thiếu nhi', 'Văn học thiếu nhi bao gồm những câu chuyện, sách, tạp chí và những bài thơ được làm cho trẻ em. Văn học thiếu nhi hiện đại được phân loại theo hai cách khác nhau: thể loại hoặc nhắm tới độ tuổi của đối tượng độc giả.', 'rua-va-tho.jpg', '2016-10-18 00:33:33', '2016-10-15 07:25:27'),
(4, 'Sách kỹ năng sống', 'Sách kỹ năng sống là cuốn sách có nội dung truyền tải cũng như tổng hợp các kỹ năng sống cần thiết dành cho con người để người đọc có thể đối mặt với hiểm nguy mà có thể hạn chế được tối đa rủi ro liên quan đến tính mạng.', 'dac-nhan-tam.jpg', '2016-10-26 03:29:19', '2016-10-26 02:22:22'),
(5, 'Sách bà mẹ - em bé', '“Rỗng” kiến thức về chăm sóc sức khỏe thai kỳ hay nuôi dạy con là điều thường gặp ở nhiều bà mẹ trẻ lần đầu mang thai. Phải làm gì để tốt nhất cho con ngay từ trong bụng mẹ, cách thức nuôi dạy con hiện đại để trẻ ngoan ngoãn, mạnh khỏe và tự lập,…? Mẹ có thể tìm câu trả lời từ những đầu sách hay, bổ ích cho quá trình mang thai, nuôi dạy con hiện đại.', 'cho-den-mau-giao-thi-da-muon.jpg', '2016-10-28 04:00:00', '2016-10-27 04:00:23'),
(6, 'Sách Giáo khoa - Giáo trình', 'Giáo trình là hệ thống chương trình giảng dạy của một môn học.Nó là tài liệu học tập hoặc giảng dạy được thiết kế và biên soạn dựa trên cơ sở chương trình môn học. Mục đích để làm tài liệu giảng dạy chính thức cho giáo viên, hoặc / và làm tài liệu học tập chính thức cho học sinh, sinh viên.', 'dai-so-tuyen-tinh.jpg', '2016-10-25 17:19:00', NULL),
(7, 'Sách học ngoại ngữ', 'Sách học ngoại ngữ là một trong những chìa khóa đắc lực để thành công. Trong thời đại đất nước ngày càng phát triển, tiếng anh là một vũ khí cực kỳ quan trọng để phá vỡ mọi rào cản văn hóa. Học giỏi ngoại ngữ là một lợi thế lớn để ta định vị được bản thân, nổi trội trong công việc và học tập.', 'tieng-anh-co-ban.jpg', '2016-10-25 17:19:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Hương Hương', 'huonghuong08.php@gmail.com', '$2y$10$rGY4KT6ZSMmLnxIbmTXrsu2xdgRxm8x0UTwCyYCAzrJ320kYheSRq', '23456789', 'Hoàng Diệu 2', NULL, '2017-03-23 07:17:33', '2017-03-23 07:17:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
