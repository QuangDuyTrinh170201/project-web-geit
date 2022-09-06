CREATE DATABASE IF NOT EXISTS `websitegeit` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `websitegeit`;

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `tbadmins` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `adminAccount` varchar(50) NOT NULL,
  `adminName` varchar(255) DEFAULT NULL,
  `adminPassword` varchar(255) NOT NULL,
  `adminImage` varchar(255) DEFAULT NULL,
  `adminPhone` varchar(50) NOT NULL,
  `adminPosition` varchar(255) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbadmins` (`adminID`, `adminAccount`, `adminName`, `adminPassword`, `adminImage`, `adminPhone`, `adminPosition`) VALUES
(1, 'trinhquangduy', 'Trịnh Quang Duy', '123456789', 'duy.jpg', '0763383442', 'CEO, Managing Director');

CREATE TABLE IF NOT EXISTS `tbcartdetail` (
  `cartDetailID` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `cartID` int(11) DEFAULT NULL,
  PRIMARY KEY (`cartDetailID`),
  KEY `fk_productId02` (`productID`),
  KEY `fk_cartID` (`cartID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `tbcarts` (
  `cartID` int(11) NOT NULL AUTO_INCREMENT,
  `customerID` int(11) NOT NULL,
  `cartdate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cartID`),
  KEY `fk_customerId02` (`customerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `tbcategories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(50) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbcategories` (`categoryID`, `categoryName`) VALUES
(1, 'Camera'),
(2, 'Motobikes'),
(3, 'Game Consoles'),
(4, 'Clothings Fashion'),
(5, 'Men\'s Cosmetics'),
(6, 'Nutritional\'s food for men'),
(7, 'Electronic Accessories'),
(8, 'Travel Accessories');

CREATE TABLE IF NOT EXISTS `tbcustomers` (
  `customerID` int(11) NOT NULL AUTO_INCREMENT,
  `customerAccount` varchar(50) NOT NULL,
  `customerPassword` varchar(255) DEFAULT NULL,
  `customerName` varchar(50) NOT NULL,
  `customerPhone` varchar(11) NOT NULL,
  `customerImage` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbcustomers` (`customerID`, `customerAccount`, `customerPassword`, `customerName`, `customerPhone`, `customerImage`) VALUES
(5, 'tuandepzai', '$2y$10$DuxG4mQqlXsGNi3zBH7MOeME/LfSYgga7fYyefzh/3SM3w87f/YsS', 'Dong Van Tuan', '0971433101', 'tuangaumeo.jpg'),
(7, 'duytrinh', '$2y$10$tuaHsT3qlpzQqV1DOPe5R.8ssfK.SosasBZhaYNgNqDHCRkbtraNa', 'Trinh Quang Duy', '0763383442', 'duy.jpg');

CREATE TABLE IF NOT EXISTS `tbproducts` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) NOT NULL,
  `productPrice` double NOT NULL,
  `productDetail` varchar(255) DEFAULT NULL,
  `productImage1` varchar(50) NOT NULL,
  `productImage2` varchar(50) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`productID`),
  KEY `fk_categoryID` (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbproducts` (`productID`, `productName`, `productPrice`, `productDetail`, `productImage1`, `productImage2`, `categoryID`) VALUES
(5, 'Canon 700D', 120, 'Rất Đẹp', 'Canon700D_1.jpg', 'canon700d-2.jpg', 1),
(6, 'Canon 50D', 50, 'Phù hợp: Người dùng có kinh nghiệm!', 'canon50d-1.jpg', 'canon50d-2.jpg', 1),
(7, 'Sony A6400', 1000, 'Khả năng tái tạo màu sắc rất tốt\r\nKhả năng lấy nét rất nhanh và chính xác ở hầu hết mọi trường hợp ánh sáng,\r\nKhả năng xử lý noise tốt khi ở điều kiện thiếu sáng kể cả khi tăng lên đến ISO 102400.', 'sonyA6400-1.jpg', 'A6400-2.png', 1),
(8, 'Nikon D750', 900, 'Nikon D750 sử dụng cảm biến 24 triệu điểm ảnh. Cho ảnh nét hơn các máy đời cũ như Nikon D700/D3s. Theo mình, độ phân giải 24 MPX hoàn hảo trong năm 2021. Nikon D750 cân bằng giữa độ nét, dung lượng và khử nhiễu.', 'nikon-d750-1.jpg', 'NIKON_D750_2.jpg', 1),
(9, 'Nikon D3200', 180, 'Nikon D3200 là chiếc máy ảnh DSLR 24MP với cảm biến 23.5 x 15.6mm CMOS.', 'nikon3200-1.png', 'nikon3200-2.jpg', 1),
(10, 'Canon 6D', 800, '6D là chiếc máy ảnh full-frame nhỏ nhất, nhẹ nhất của Canon tính đến thời điểm 2015. 6D cho màu sắc tuyệt vời, sống động, phù hợp gần như mọi thể loại chụp ảnh, đáp ứng hầu hết mọi nhu cầu của người dùng bình thường.', 'canon6d-1.jpg', 'canon6d-2.jpg', 1),
(11, 'Sony A6300', 450, 'Sony gọi A6300 là sản phẩm flagship trong phân khúc máy ảnh APS-C của mình với những từ bên ngoài đến những thành phần bên trong: bao gồm thân máy, cảm biến, khả năng lấy nét, quay phim…', 'Sony-A6300-1.jpg', 'a6300-2.jpg', 1),
(12, 'Yamaha YZF R1', 42000, 'Sport Bike đầu bảng đến từ nhà Yamaha', 'yamha-yzf-r1-1.jpg', 'yzf-r1-2.jpg', 2),
(13, 'Yamaha MT09', 35000, 'Yamaha MT09, một trong những super naked bike nổi tiếng trên thế giới', 'mt09-1.jpg', 'mt09-2.jpg', 2),
(14, 'Honda CBR 1000RR', 51000, '\"Chiến Thần\" moto GP nay được ra mắt phiên bản phổ thông cho người dùng!!', 'cbr1000-1.png', 'cbr1000-2.png', 2),
(15, 'Honda CB 650R', 22000, 'Một chiếc moto chạy phố và đi Tour cực tốt nhờ thiết kế lai cực đỉnh.', 'cb650r-1.jpg', 'cb650r-2.jpg', 2),
(16, 'Play Station 4', 180, 'Máy chơi game PS4 là sản phẩm Game Console phổ biến nhất thế giới hiện tại.', 'ps4-1.jpg', 'ps4-2.jpg', 3),
(17, 'Play Station 5', 1000, 'Thế hệ tiếp theo của dòng máy Play Station nổi tiếng của nhà Sony.', 'ps5-1.jpg', 'ps5-2.jpg', 3),
(18, 'Nintendo Switch', 300, 'Chỉ có 1 từ để diễn tả: \"Ngon\"', 'switch-1.jpg', 'switch-2.jpg', 3),
(19, 'Airpods 2', 100, 'Tai nghe bluetooth phổ biến nhất thị trường!!', 'airpod2-1.jpg', 'airpods2-2.jpg', 7),
(20, 'Airpods 3', 200, 'Sản phẩm tai nghe mới nhất của nhà Táo!', 'airpods3-1.jpg', 'airpods3-2.jpg', 7),
(21, 'Apple Watch Series 7', 500, 'Mẫu đồng hồ thông minh xịn nhất thế giới hiện tại!', 'ap7-1.jpg', 'ap7-2.jpg', 7),
(22, 'Dây Sạc Apple Lightning', 30, 'Dây sạc dành cho Iphone chính hãng Apple.', 'daysacip-1.jpg', 'daysacip-2.jpg', 7),
(23, 'Dây sạc Type C', 15, 'Dây sạc nhanh 30W dành cho điện thoại Android.', 'typec-1.jpg', 'typec-2.jpg', 7),
(24, 'Sữa rửa mặt Nivia dành cho Nam', 5, 'Sữa rửa mặt số 1 Việt Nam', 'nivia-1.jpg', 'nivia-2.jpg', 5),
(25, 'Mặt Nạ Dưỡng Ẩm cho Nam', 3, 'Mặt nạ dưỡng ẩm làm mát da mặt, sạch sâu tận gốc lỗ chân lông.', 'matna-1.jpg', 'matna-2.jpg', 5),
(26, 'Dung dịch vệ sinh Nam', 10, 'Dung dịch vệ sinh cho nam giới số 1 thị trường.', 'vsn-1.jpg', 'vsn-2.jpg', 5),
(27, 'Lều cắm trại', 100, 'Lều cắm trại 1 người dành cho người bản lĩnh.', 'leu-1.jpg', 'leu-2.jpg', 8),
(28, 'Dụng cụ đánh lửa Cháy Tỏi', 5, 'Đánh lửa cháy to như vị trị của MU trên BXH.', 'danhlua-1.png', 'danhlua-2.jpg', 8),
(29, 'Lều Câu Cá', 80, 'Lều câu cá này câu được rất nhiều cá.', 'cauca-14.jpg', 'cauca-2.jpg', 8),
(30, 'Whey Tăng Cơ', 70, 'Whey tăng lực uống để to như The Rock!', 'whey-1.jpg', 'whey-2.jpg', 6),
(32, 'Tinh Dầu Cá Omega 3', 10, 'Uống dô mắt sáng hơn Tôn Ngộ Không', 'dauca-1.jpg', 'dauca-2.jpg', 6),
(33, 'Nước Cốt Gà Brands', 5, 'Cốt gà làm từ cơ thể của Ba Gà!', 'nuocga-1.jpg', 'nuocga-2.jpg', 6),
(34, 'Áo Khoác Nike', 50, 'Đẹp lắm mua đi!!', 'nike-1.jpg', 'nike-2.jpg', 4),
(35, 'Áo khoác Adidas', 60, 'Mặc đẹp như Messi.', 'adidas-1.png', 'adidas-2.jpg', 4),
(36, 'Áo Khoác Under Armour', 50, 'Áo đẹp như NYC của bạn!', 'undera-1.jpg', 'undera-2.jpg', 4),
(37, 'Áo Khoác Puma', 50, 'Mặc vào chạy nhanh như Báo Đốm!', 'puma-1.jpg', 'puma-2.jpg', 4);

CREATE TABLE IF NOT EXISTS `tbreviews` (
  `reviewID` int(11) NOT NULL AUTO_INCREMENT,
  `reviewerName` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  PRIMARY KEY (`reviewID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbreviews` (`reviewID`, `reviewerName`, `review`) VALUES
(2, 'An Danh', 'Moto mắc quá');

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `tbcartdetail`
  ADD CONSTRAINT `fk_cartID` FOREIGN KEY (`cartID`) REFERENCES `tbcarts` (`cartID`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_productId02` FOREIGN KEY (`productID`) REFERENCES `tbproducts` (`productID`) ON DELETE CASCADE;

ALTER TABLE `tbcarts`
  ADD CONSTRAINT `fk_customerId02` FOREIGN KEY (`customerID`) REFERENCES `tbcustomers` (`customerID`) ON DELETE CASCADE;