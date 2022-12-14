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
(1, 'trinhquangduy', 'Tr???nh Quang Duy', '123456789', 'duy.jpg', '0763383442', 'CEO, Managing Director');

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
(5, 'Canon 700D', 120, 'R???t ?????p', 'Canon700D_1.jpg', 'canon700d-2.jpg', 1),
(6, 'Canon 50D', 50, 'Ph?? h???p: Ng?????i d??ng c?? kinh nghi???m!', 'canon50d-1.jpg', 'canon50d-2.jpg', 1),
(7, 'Sony A6400', 1000, 'Kh??? n??ng t??i t???o m??u s???c r???t t???t\r\nKh??? n??ng l???y n??t r???t nhanh v?? ch??nh x??c ??? h???u h???t m???i tr?????ng h???p ??nh s??ng,\r\nKh??? n??ng x??? l?? noise t???t khi ??? ??i???u ki???n thi???u s??ng k??? c??? khi t??ng l??n ?????n ISO 102400.', 'sonyA6400-1.jpg', 'A6400-2.png', 1),
(8, 'Nikon D750', 900, 'Nikon D750 s??? d???ng c???m bi???n 24 tri???u ??i???m ???nh. Cho ???nh n??t h??n c??c m??y ?????i c?? nh?? Nikon D700/D3s. Theo m??nh, ????? ph??n gi???i 24 MPX ho??n h???o trong n??m 2021. Nikon D750 c??n b???ng gi???a ????? n??t, dung l?????ng v?? kh??? nhi???u.', 'nikon-d750-1.jpg', 'NIKON_D750_2.jpg', 1),
(9, 'Nikon D3200', 180, 'Nikon D3200 l?? chi???c m??y ???nh DSLR 24MP v???i c???m bi???n 23.5 x 15.6mm CMOS.', 'nikon3200-1.png', 'nikon3200-2.jpg', 1),
(10, 'Canon 6D', 800, '6D l?? chi???c m??y ???nh full-frame nh??? nh???t, nh??? nh???t c???a Canon t??nh ?????n th???i ??i???m 2015. 6D cho m??u s???c tuy???t v???i, s???ng ?????ng, ph?? h???p g???n nh?? m???i th??? lo???i ch???p ???nh, ????p ???ng h???u h???t m???i nhu c???u c???a ng?????i d??ng b??nh th?????ng.', 'canon6d-1.jpg', 'canon6d-2.jpg', 1),
(11, 'Sony A6300', 450, 'Sony g???i A6300 l?? s???n ph???m flagship trong ph??n kh??c m??y ???nh APS-C c???a m??nh v???i nh???ng t??? b??n ngo??i ?????n nh???ng th??nh ph???n b??n trong: bao g???m th??n m??y, c???m bi???n, kh??? n??ng l???y n??t, quay phim???', 'Sony-A6300-1.jpg', 'a6300-2.jpg', 1),
(12, 'Yamaha YZF R1', 42000, 'Sport Bike ?????u b???ng ?????n t??? nh?? Yamaha', 'yamha-yzf-r1-1.jpg', 'yzf-r1-2.jpg', 2),
(13, 'Yamaha MT09', 35000, 'Yamaha MT09, m???t trong nh???ng super naked bike n???i ti???ng tr??n th??? gi???i', 'mt09-1.jpg', 'mt09-2.jpg', 2),
(14, 'Honda CBR 1000RR', 51000, '\"Chi???n Th???n\" moto GP nay ???????c ra m???t phi??n b???n ph??? th??ng cho ng?????i d??ng!!', 'cbr1000-1.png', 'cbr1000-2.png', 2),
(15, 'Honda CB 650R', 22000, 'M???t chi???c moto ch???y ph??? v?? ??i Tour c???c t???t nh??? thi???t k??? lai c???c ?????nh.', 'cb650r-1.jpg', 'cb650r-2.jpg', 2),
(16, 'Play Station 4', 180, 'M??y ch??i game PS4 l?? s???n ph???m Game Console ph??? bi???n nh???t th??? gi???i hi???n t???i.', 'ps4-1.jpg', 'ps4-2.jpg', 3),
(17, 'Play Station 5', 1000, 'Th??? h??? ti???p theo c???a d??ng m??y Play Station n???i ti???ng c???a nh?? Sony.', 'ps5-1.jpg', 'ps5-2.jpg', 3),
(18, 'Nintendo Switch', 300, 'Ch??? c?? 1 t??? ????? di???n t???: \"Ngon\"', 'switch-1.jpg', 'switch-2.jpg', 3),
(19, 'Airpods 2', 100, 'Tai nghe bluetooth ph??? bi???n nh???t th??? tr?????ng!!', 'airpod2-1.jpg', 'airpods2-2.jpg', 7),
(20, 'Airpods 3', 200, 'S???n ph???m tai nghe m???i nh???t c???a nh?? T??o!', 'airpods3-1.jpg', 'airpods3-2.jpg', 7),
(21, 'Apple Watch Series 7', 500, 'M???u ?????ng h??? th??ng minh x???n nh???t th??? gi???i hi???n t???i!', 'ap7-1.jpg', 'ap7-2.jpg', 7),
(22, 'D??y S???c Apple Lightning', 30, 'D??y s???c d??nh cho Iphone ch??nh h??ng Apple.', 'daysacip-1.jpg', 'daysacip-2.jpg', 7),
(23, 'D??y s???c Type C', 15, 'D??y s???c nhanh 30W d??nh cho ??i???n tho???i Android.', 'typec-1.jpg', 'typec-2.jpg', 7),
(24, 'S???a r???a m???t Nivia d??nh cho Nam', 5, 'S???a r???a m???t s??? 1 Vi???t Nam', 'nivia-1.jpg', 'nivia-2.jpg', 5),
(25, 'M???t N??? D?????ng ???m cho Nam', 3, 'M???t n??? d?????ng ???m l??m m??t da m???t, s???ch s??u t???n g???c l??? ch??n l??ng.', 'matna-1.jpg', 'matna-2.jpg', 5),
(26, 'Dung d???ch v??? sinh Nam', 10, 'Dung d???ch v??? sinh cho nam gi???i s??? 1 th??? tr?????ng.', 'vsn-1.jpg', 'vsn-2.jpg', 5),
(27, 'L???u c???m tr???i', 100, 'L???u c???m tr???i 1 ng?????i d??nh cho ng?????i b???n l??nh.', 'leu-1.jpg', 'leu-2.jpg', 8),
(28, 'D???ng c??? ????nh l???a Ch??y T???i', 5, '????nh l???a ch??y to nh?? v??? tr??? c???a MU tr??n BXH.', 'danhlua-1.png', 'danhlua-2.jpg', 8),
(29, 'L???u C??u C??', 80, 'L???u c??u c?? n??y c??u ???????c r???t nhi???u c??.', 'cauca-14.jpg', 'cauca-2.jpg', 8),
(30, 'Whey T??ng C??', 70, 'Whey t??ng l???c u???ng ????? to nh?? The Rock!', 'whey-1.jpg', 'whey-2.jpg', 6),
(32, 'Tinh D???u C?? Omega 3', 10, 'U???ng d?? m???t s??ng h??n T??n Ng??? Kh??ng', 'dauca-1.jpg', 'dauca-2.jpg', 6),
(33, 'N?????c C???t G?? Brands', 5, 'C???t g?? l??m t??? c?? th??? c???a Ba G??!', 'nuocga-1.jpg', 'nuocga-2.jpg', 6),
(34, '??o Kho??c Nike', 50, '?????p l???m mua ??i!!', 'nike-1.jpg', 'nike-2.jpg', 4),
(35, '??o kho??c Adidas', 60, 'M???c ?????p nh?? Messi.', 'adidas-1.png', 'adidas-2.jpg', 4),
(36, '??o Kho??c Under Armour', 50, '??o ?????p nh?? NYC c???a b???n!', 'undera-1.jpg', 'undera-2.jpg', 4),
(37, '??o Kho??c Puma', 50, 'M???c v??o ch???y nhanh nh?? B??o ?????m!', 'puma-1.jpg', 'puma-2.jpg', 4);

CREATE TABLE IF NOT EXISTS `tbreviews` (
  `reviewID` int(11) NOT NULL AUTO_INCREMENT,
  `reviewerName` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  PRIMARY KEY (`reviewID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbreviews` (`reviewID`, `reviewerName`, `review`) VALUES
(2, 'An Danh', 'Moto m???c qu??');

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