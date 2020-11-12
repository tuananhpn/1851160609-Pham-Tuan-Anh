-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2020 lúc 09:42 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'album', 0, NULL, NULL),
(2, 'Bảng Giá', 0, NULL, NULL),
(3, 'Kỷ Yếu Miền Bắc', 0, NULL, NULL),
(4, 'TOUR Kỷ Yếu', 0, NULL, NULL),
(5, 'Thuê Trang Phục', 0, NULL, NULL),
(6, 'Góc Tư Vấn', 0, NULL, NULL),
(7, 'CHỤP ẢNH KỶ YẾU', 1, NULL, NULL),
(8, 'CHỤP ẢNH PHÓNG SỰ CƯỚI', 1, NULL, NULL),
(9, 'BẢNG GIÁ CHỤP ẢNH KỶ YẾU', 2, NULL, NULL),
(10, 'BẢNG GIÁ CHỤP ẢNH PHÓNG SỰ CƯỚI', 2, NULL, NULL),
(11, 'CHỤP ẢNH KỶ YẾU - TỔNG HỢP 1000 CONCEPT HOT 2020', 7, NULL, NULL),
(12, 'CHỤP ẢNH KỶ YẾU - CONCEPT BOHEMIAN', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `name`, `categories_id`, `created_at`, `updated_at`) VALUES
(1, 'http://congstudio.com.vn/chup-anh-ky-yeu', 7, NULL, NULL),
(2, 'http://congstudio.com.vn/chup-anh-phong-su-cuoi', 8, NULL, NULL),
(3, 'http://congstudio.com.vn/bang-gia-chup-anh-ky-yeu', 9, NULL, NULL),
(4, 'http://congstudio.com.vn/bang-gia-chup-anh-phong-su-cuoi', 10, NULL, NULL),
(5, 'http://congstudio.com.vn/chup-anh-ky-yeu-tong-hop-1000-concept-hot-2020', 11, NULL, NULL),
(6, 'http://congstudio.com.vn/chup-anh-ky-yeu-concept-bohemian', 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `categories_id`, `created_at`, `updated_at`) VALUES
(1, 'CỘNG STUDIO - MỘT LẦN LƯU GIỮ - TRỌN ĐỜI KHẮC GHI', '✪ Trong mỗi bước ngoặt của cuộc đời, bạn sẽ mong muốn có những bức ảnh đẹp để lưu giữ kỷ niệm, dấu ấn của mình. Để 10 năm hay 20 năm nữa khi lật những trang album bạn vẫn luôn nhớ những dấu mốc ấy. Cộng Studio là địa chỉ tin cậy để ghi lại những dấu ấn đáng nhớ và hạnh phúc nhất của bạn qua từng bức ảnh. Chúng tôi hiểu khoảnh khắc trong những sự kiện hay mốc thời gian của từng người là khác nhau trong cuộc sống này, bởi vậy tấm hình không chỉ là tấm hình mà trong đó chứa cả những câu chuyện đằng sau đó nữa.\r\n\r\n✪ Cộng Studio là địa chỉ tin cậy để ghi lại những dấu ấn đáng nhớ và hạnh phúc của bạn qua từng bức ảnh. Với kinh nghiệm hơn 10 năm trong nghề dịch vụ, chúng tôi luôn luôn tự hào là điểm lựa chọn của nhiều khách hàng miền Bắc, miền Trung. Vì vậy, bạn hoàn toàn có thể tin tưởng vào dịch vụ cũng như chất lượng sản phẩm mà Cộng Studio mang đến cho bạn.\r\n\r\n✪ Cộng Studio tiên phong trong ngành dịch vụ chụp ảnh đẹp khi đưa những thiết bị chụp tiên tiến vào làm việc, không chỉ dừng lại đó chúng tôi khắt khe đến tay nghề người chụp cho đến hậu kì luôn được kiểm duyệt kỹ lưỡng để đưa ra những sản phẩm độc đáo. Ngoài ra, Cộng có đa dạng những gói chụp dịch vụ để khách hàng có nhiều sự lựa chọn phù hợp với túi tiền. Chúng tôi, cam kết mang tới cho khách hàng sự Chuyên nghiệp - Uy tín - Giá rẻ, trọn gói.', 1, NULL, NULL),
(2, 'CỘNG STUDIO | BẢNG GIÁ DỊCH VỤ CỘNG STUDIO\r\n\r\n MỘT LẦN LƯU GIỮ - TRỌN ĐỜI KHẮC GHI', '✪ Thời gian qua đi ai cũng muốn lưu lại cho mình những khoảnh khắc đẹp nhất trong cuộc đời. Để năm sau nhìn lại thấy 1 năm qua đi thật nhiều thay đổi.. Để 5 năm sau, 10 năm sau hay lâu hơn thế nữa, nhìn lại cùng đám bạn để thấy mình đã trải qua 1 mùa kỷ yếu nhiều cảm xúc...Hay để mãi về sau cùng ngắm nhìn những khoảnh khắc trong ngày lễ trọng đại của mình với phóng sự cưới cùng Cộng Studio. Hoặc chỉ đơn giản là những bức hình thời trang cùng gia đình, cùng những người bạn thân yêu.\r\n\r\n✪ Trong mỗi khoảnh khắc, bước ngoặt của cuộc đời ai cũng muốn lưu giữ cho riêng mình những tấm ảnh đẹp nhất làm kỷ niệm về sau. Cộng Studio là địa chỉ tin cậy để ghi lại những dấu ấn đáng nhớ và hạnh phúc của bạn qua từng bức ảnh. Chúng tôi luôn luôn tự hào là điểm lựa chọn chụp ảnh kỷ yếu hàng đầu Miền Bắc và Miền Trung trong những năm qua dành cho các bạn học sinh, sinh viên khi mùa tan trường đã đến vì vậy, Bạn hoàn toàn có thể lựa chọn được các gói chụp ảnh phù hợp với khả năng tài chính của mình.\r\n\r\n✪ Với nhiều năm kinh nghiệm trong nghề cùng Ekip chụp ảnh chuyên nghiệp, được đào tạo bài bản với quy trình làm việc chuyên nghiệp, tận tâm, Cộng tin tưởng sẽ mang đến cho các bạn những tấm hình đẹp nhất và thể hiện rõ nét dấu ấn riêng của từng cá nhân, tập thể được lưu lại trong mỗi bức hình và còn mãi theo thời gian.\r\n\r\n✪ Hiểu cả những gửi gắm của bạn, Cộng Studio – thương hiệu chụp ảnh, quay phim uy tín số 1 Hà Nội không ngừng nỗ lực để mang đến bạn những bức hình hoàn hảo nhất, những xúc cảm lắng đọng nhất cùng ekip phục vụ chuyên nghiệp, được đào tạo bài bản, song song với việc đó, chúng tôi đầu tư hệ thống trang thiết bị hiện đại nhằm mang đến khách hàng những sản phẩm với chất lượng tốt nhất !', 2, NULL, NULL),
(3, 'CỘNG STUDIO - CHỤP ẢNH KỶ YẾU UY TÍN SỐ 1 HÀ NỘI', 'Mỗi người đều có thời học sinh, sinh viên với những kỷ niệm đáng nhớ. Bạn muốn lưu giữ lại những điều tuyệt vời ấy cùng năm tháng? Bạn muốn sau này luôn nhớ tới những gương mặt thân quen của người bạn cùng lớp? Bạn muốn lớp mình sở hữu album kỷ yếu ấn tượng, độc đáo với chi phí hợp lý? Hãy để Cộng Studio đồng hành cùng quãng thời gian học trò của các bạn.\r\n\r\n✪ Quãng thời gian ngồi trên ghế nhà trường, giảng đường đại học là quãng thời gian tuổi thanh xuân tươi đẹp nhất của mỗi người. Chúng ta cùng nhau chia sẻ mọi chuyện, cùng nhau vui đùa, cùng nhau mơ mộng. Tình cảm từ những người xa lạ bỗng trở nên thân thiết, gắn bó sau quãng thời gian 3 - 4 năm. Rồi chuyển cấp và tốt nghiệp đại học, mọi người đều cùng tâm trạng hụt hẫng, bâng khuâng. Bởi vậy, dịch vụ chụp ảnh kỷ yếu của Cộng Studio ra đời nhằm giúp các bạn ghi lại hình ảnh thân thương của cả lớp.\r\n\r\n✪ Cộng Studio luôn nắm bắt được những xu hướng mới, tạo nên phong cách riêng, độc đáo của mỗi lớp. Với ekip chụp hình và trang điểm nhiều năm kinh nghiệm, chúng tôi đã đồng hành với nhiều lớp trong mùa kỷ yếu. Không chỉ vậy, đội ngũ nhân viên tư vấn, xây dựng hình ảnh, concept của Cộng luôn hướng đến sự trẻ trung, tươi mới, độc đáo, mang bản sắc riêng của mỗi lớp. Đến với chúng tôi, bạn sẽ mang đến cho lớp mình một trải nghiệm chụp hình kỷ yếu độc đáo - ấn tượng cùng những phút giây thoải mái, thăng hoa. Hãy biến buổi chụp kỷ yếu cùng sự đồng hành của Cộng thành một kỷ niệm khó quên trong quãng thời gian thanh xuân của mình với lớp học thân yêu.\r\n\r\n✪ Cộng Studio đưa ra những gói chụp với chi phí rẻ nhưng hấp dẫn tại những địa điểm đẹp, ấn tượng nhất hiện nay. Chúng tôi, sẽ mang đến cho lớp bạn những bức hình đẹp hoàn hảo cùng với những khuyến mại siêu hấp dẫn. Vậy, lớp bạn còn chần chừ gì mà không đến với Cộng - thương hiệu uy tín, tận tâm đi kèm với chất lượng tuyệt vời.', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'xxxxxxxxx',
  `birthday` date DEFAULT NULL,
  `level` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `address`, `birthday`, `level`, `created_at`, `updated_at`) VALUES
(1, 'nguyen van cao', 'cao20cm@gmail.com', '123', 'ha noi', '0000-00-00', 1, NULL, NULL),
(2, 'nguyen thi thom', 'user02@gmail.com', '123', 'ho chi minh', '0000-00-00', 0, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_categories_id_foreign` (`categories_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_categories_id_foreign` (`categories_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
