-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table exploore.account
CREATE TABLE IF NOT EXISTS `account` (
  `id_account` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `permissions` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_account`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.account: ~0 rows (approximately)
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`id_account`, `email`, `password`, `full_name`, `address`, `phone`, `avatar`, `permissions`, `created_at`, `updated_at`) VALUES
	(1, 'sangnnps07128@fpt.edu.vn', '$2y$10$062IKVyUiypCC2FkN.7G4.bMbPZLSEGocfQGUM0cXzExev9ob2d0m', 'admin', 'Việt nam', 983505309, 'hotel-6.jpg', 0, NULL, NULL);
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

-- Dumping structure for table exploore.booking
CREATE TABLE IF NOT EXISTS `booking` (
  `id_booking` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_room` int(11) DEFAULT NULL,
  `id_tour` int(11) DEFAULT NULL,
  `id_account` int(11) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `day_number` int(11) NOT NULL,
  `people_number` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `start_day` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_day` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.booking: ~0 rows (approximately)
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;

-- Dumping structure for table exploore.comment
CREATE TABLE IF NOT EXISTS `comment` (
  `id_comment` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_account` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_news` int(11) DEFAULT NULL,
  `id_tour` int(11) DEFAULT NULL,
  `id_hotel` int(11) DEFAULT NULL,
  `date_comment` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.comment: ~0 rows (approximately)
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;

-- Dumping structure for table exploore.destination
CREATE TABLE IF NOT EXISTS `destination` (
  `id_destination` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_destination`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.destination: ~0 rows (approximately)
/*!40000 ALTER TABLE `destination` DISABLE KEYS */;
/*!40000 ALTER TABLE `destination` ENABLE KEYS */;

-- Dumping structure for table exploore.hotel
CREATE TABLE IF NOT EXISTS `hotel` (
  `id_hotel` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_account` int(11) NOT NULL,
  `hotel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `hotel_price` int(11) NOT NULL,
  `tmp_name` text COLLATE utf8mb4_unicode_ci,
  `location` int(11) NOT NULL,
  `hotel_describes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_hotel`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.hotel: ~6 rows (approximately)
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` (`id_hotel`, `id_account`, `hotel_name`, `rating`, `hotel_price`, `tmp_name`, `location`, `hotel_describes`, `hotel_img`, `hotel_address`, `sale`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 'MAI HOUSE Saigon', 6, 500, 'MAI HOUSE Saigon', 1, 'Enjoy world-class, world-class service at MAI HOUSE Saigon', '223869171.jpg', '157 Nam Ky Khoi Nghia Street (or 01 Ngo Thoi Nhiem Street), Ward 6, District 3, Quận 3, TP. Hồ Chí Minh, Việt Nam', 20, 1, NULL, NULL),
	(2, 1, 'Icon Saigon - Luxury Design Hotel', 6, 600, 'Icon Saigon - Luxury Design Hotel', 1, 'In the heart of the city. Ho Chi Minh', '225991101.jpg', '65 - 67 Hai Ba Trung, District 01, District 1, TP. Ho Chi Minh City, Vietnam', 20, 1, NULL, NULL),
	(3, 1, 'Caravelle Saigon', 6, 800, 'Caravelle Saigon', 1, 'In the heart of the city. Ho Chi Minh', '214186294.jpg', '19 - 23 Lam Son Square, District 1, TP. Ho Chi Minh City, Vietnam', 20, 1, NULL, NULL),
	(4, 1, 'Hotel Nikko Saigon', 6, 1000, 'Hotel Nikko Saigon', 1, 'Enjoy world-class, world-class service at Hotel Nikko Saigon', '216168941.jpg', '235 Nguyen Van Cu Street, District 1, City. Ho Chi Minh City, Vietnam', 20, 1, NULL, NULL),
	(5, 1, 'Sofitel Saigon Plaza', 6, 260, 'Sofitel Saigon Plaza', 1, 'Enjoy world-class, world-class service at Sofitel Saigon Plaza', '160820655.jpg', '17 Le Duan Boulevard, District 1, City. Ho Chi Minh City, Vietnam', 20, 1, NULL, NULL),
	(6, 1, 'Mia Saigon – Luxury Boutique Hotel ', 6, 580, 'Mia Saigon – Luxury Boutique Hotel ', 1, 'Enjoy world-class, world-class service at Mia Saigon - Luxury Boutique Hotel', '199231782.jpg', ' 2-4 Street 10, An Phu ward, District 2, Quận 2, TP. Hồ Chí Minh, Việt Nam ', 0, 1, NULL, NULL);
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;

-- Dumping structure for table exploore.message
CREATE TABLE IF NOT EXISTS `message` (
  `id_message` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_account` int(11) DEFAULT NULL,
  `message_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.message: ~0 rows (approximately)
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;

-- Dumping structure for table exploore.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.migrations: ~14 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2019_09_29_125806_create_table_tour_table', 1),
	(2, '2019_09_29_131330_create_table_news_table', 1),
	(3, '2019_09_29_131914_create_table_comment_table', 1),
	(4, '2019_09_29_131937_create_table_booking_table', 1),
	(5, '2019_09_29_132015_create_table_destination_table', 1),
	(6, '2019_10_05_035034_create_table_hotel_table', 1),
	(7, '2019_10_05_080002_create_table_account', 1),
	(8, '2019_10_21_153140_create_table_rating_table', 1),
	(9, '2019_10_21_153345_create_table_room_table', 1),
	(10, '2019_10_21_153409_create_table_message_table', 1),
	(11, '2019_10_27_080625_create_table_tags_table', 1),
	(12, '2019_10_27_080737_create_table_sub_tags_table', 1),
	(13, '2019_10_27_124718_create_table_province_table', 1),
	(14, '2019_10_27_153939_create_table_tourday_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table exploore.news
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_account` int(11) NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_describes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_news` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.news: ~5 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id_news`, `id_account`, `news_title`, `news_content`, `news_describes`, `news_img`, `date_news`, `created_at`, `updated_at`) VALUES
	(1, 1, '10 of the best live music pubs in the UK: readers’ travel tips', 'The Backroom venue in the Greystones pub is such a small and intimate venue that the audience can converse with the musicians. Earlier this year we saw a Canadian folk duo Pharis and Romero who blew our socks off with their beautiful harmonies and banjo playing. We have also seen Wreckless Eric there and a singer-songwriter called Sarah Jarosz from Texas whose Americana and contemporary folk also blew us away. The added bonus is that Greystones is the flagship pub for a local brewery, Thornbridge, and so there is a wide range of delicious craft beers and ales to sup while enjoying the tunes.', 'Celtic jams, Americana, jazz and post-punk all get the joint jumping at our tipsters’ favourite pub venues from the Highlands down to Cornwall', '2500.jpg', '27/10/2019', NULL, NULL),
	(2, 1, 'Brilliant winter holidays in Europe: readers’ travel tips', 'The historic city of Deventer, a 1hr 20min train ride from Amsterdam, holds a two-day Dickens Festival every December (weekend of 14-15 this year, free entry, though be prepared to queue). Nearly 1,000 costumed Dickens characters, from gentry to urchins, play their parts with real enthusiasm in the spruce-tree decked streets. You might bump into Bob Cratchit, say hello to Miss Havisham or share a stuffed potato or bag of roasted chestnuts with Scrooge. The picturesque Bergkwartier with its pretty shops twinkles with lights. Orchestras and choirs fill the churches with seasonal music, in addition to the outdoor carol singers.', 'Your wintry wanderings take in a Dickensian Christmas festival, snowshoeing, skiing and digging a snow hole bedroom – plus cosy bars and hotels to warm up in', '4256.jpg', '27/10/2019', NULL, NULL),
	(3, 1, 'Send us a tip about your favourite travel book for the chance to win a £200 hotel voucher', 'Travel books not only broaden the mind and provide inspiration for your own dream journey, they can transport you to another world.', 'Whether it’s an exploration of a local landscape or a tale of an exotic destination, we want to hear about your literary choices', '4479.jpg', '27/10/2019', NULL, NULL),
	(4, 1, 'Send us a tip on a hidden UK gem for the chance to win a £200 hotel voucher', 'Next week’s Guardian Travel section will be dedicated to hidden UK gems – and we want to include some of your recommendations in our roundup. It could be a community-run pub or cinema, a gallery or railway run by volunteers, an out of the way or eccentric attraction that’s worth the trip … anywhere or anything you think is worth shouting about.', 'Whether it’s an unsung museum, pub or shop, a great little place round the corner or somewhere you stumbled upon on your travels, we want you to unearth your hidden gem', '4928.jpg', '27/10/2019', NULL, NULL),
	(5, 1, 'Share your best travel discovery of 2019 in the UK and Europe for the chance of winning a £200 hotel voucher', 'You might have found a beautiful beach, a superb walk, a particularly friendly little cafe, a wonderful bookshop, or finally succeeded in climbing a mountain you’ve always wanted to go up. Perhaps you stumbled across a bar in the middle of nowhere with live music, a friendly, family-run B&B, an unsung museum or had the best meal of your life.', 'Did you come across anywhere brilliant on your travels this year? Whatever and wherever it is in Europe or the UK, we want to hear about it for our end-of-year round up', '5763.jpg', '27/10/2019', NULL, NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table exploore.province
CREATE TABLE IF NOT EXISTS `province` (
  `id_province` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_province`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.province: ~12 rows (approximately)
/*!40000 ALTER TABLE `province` DISABLE KEYS */;
INSERT INTO `province` (`id_province`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Thành phố Hà Nội', NULL, NULL),
	(2, 'Tỉnh Hà Giang', NULL, NULL),
	(3, 'Tỉnh Cao Bằng', NULL, NULL),
	(4, 'Tỉnh Bắc Kạn', NULL, NULL),
	(5, 'Tỉnh Tuyên Quang', NULL, NULL),
	(6, 'Tỉnh Lào Cai', NULL, NULL),
	(7, 'Thành phố Hà Nội', NULL, NULL),
	(8, 'Tỉnh Hà Giang', NULL, NULL),
	(9, 'Tỉnh Cao Bằng', NULL, NULL),
	(10, 'Tỉnh Bắc Kạn', NULL, NULL),
	(11, 'Tỉnh Tuyên Quang', NULL, NULL),
	(12, 'Tỉnh Lào Cai', NULL, NULL);
/*!40000 ALTER TABLE `province` ENABLE KEYS */;

-- Dumping structure for table exploore.rating
CREATE TABLE IF NOT EXISTS `rating` (
  `id_rating` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_hotel` int(11) DEFAULT NULL,
  `id_tour` int(11) DEFAULT NULL,
  `id_news` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `rate_rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_rating`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.rating: ~0 rows (approximately)
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;

-- Dumping structure for table exploore.room
CREATE TABLE IF NOT EXISTS `room` (
  `id_room` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_hotel` int(11) NOT NULL,
  `name_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suitable_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed_room` int(11) NOT NULL,
  `bathroom_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facilities_room` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Smoking_room` int(11) NOT NULL,
  `Parking_room` int(11) NOT NULL,
  `price_room` int(11) NOT NULL,
  `room_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_room` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_room`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.room: ~12 rows (approximately)
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` (`id_room`, `id_hotel`, `name_room`, `suitable_room`, `size_room`, `bed_room`, `bathroom_room`, `facilities_room`, `Smoking_room`, `Parking_room`, `price_room`, `room_img`, `amount_room`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Luxury room', '2', '20m2', 1, ' Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin - Towel', 'Pay TV - Phone - Air conditioner - Wake up service - Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) - Cable television - Flat screen TV - Private entrance - Sofa - Soundproof system - Tile / marble floor - Wardrobe or closet for clothes - Bedspread - The upper floors go up by elevator - Clothes hanger - Clothes horse', 0, 0, 20000, 'http://exploore-travel.test/public/client/img/hotel-view/img-2.png', 20, NULL, NULL),
	(2, 1, 'Family\'s room', '2', '20m2', 1, ' Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin - Towel', 'Pay TV - Phone - Air conditioner - Wake up service - Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) - Cable television - Flat screen TV - Private entrance - Sofa - Soundproof system - Tile / marble floor - Wardrobe or closet for clothes - Bedspread - The upper floors go up by elevator - Clothes hanger - Clothes horse', 0, 0, 20000, 'http://exploore-travel.test/public/client/img/hotel-view/img-2.png', 20, NULL, NULL),
	(3, 2, 'Luxury room', '2', '20m2', 1, ' Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin - Towel', 'Pay TV - Phone - Air conditioner - Wake up service - Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) - Cable television - Flat screen TV - Private entrance - Sofa - Soundproof system - Tile / marble floor - Wardrobe or closet for clothes - Bedspread - The upper floors go up by elevator - Clothes hanger - Clothes horse', 0, 0, 200, 'http://exploore-travel.test/public/client/img/hotel-view/img-2.png', 20, NULL, NULL),
	(4, 2, 'Family\'s room', '2', '20m2', 1, ' Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin - Towel', 'Pay TV - Phone - Air conditioner - Wake up service - Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) - Cable television - Flat screen TV - Private entrance - Sofa - Soundproof system - Tile / marble floor - Wardrobe or closet for clothes - Bedspread - The upper floors go up by elevator - Clothes hanger - Clothes horse', 0, 0, 400, 'http://exploore-travel.test/public/client/img/hotel-view/img-2.png', 20, NULL, NULL),
	(5, 3, 'Luxury room', '2', '20m2', 1, ' Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin - Towel', 'Pay TV - Phone - Air conditioner - Wake up service - Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) - Cable television - Flat screen TV - Private entrance - Sofa - Soundproof system - Tile / marble floor - Wardrobe or closet for clothes - Bedspread - The upper floors go up by elevator - Clothes hanger - Clothes horse', 0, 0, 150, 'http://exploore-travel.test/public/client/img/hotel-view/img-2.png', 20, NULL, NULL),
	(6, 3, 'Family\'s room', '2', '20m2', 1, ' Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin - Towel', 'Pay TV - Phone - Air conditioner - Wake up service - Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) - Cable television - Flat screen TV - Private entrance - Sofa - Soundproof system - Tile / marble floor - Wardrobe or closet for clothes - Bedspread - The upper floors go up by elevator - Clothes hanger - Clothes horse', 0, 0, 308, 'http://exploore-travel.test/public/client/img/hotel-view/img-2.png', 20, NULL, NULL),
	(7, 4, 'Luxury room', '2', '20m2', 1, ' Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin - Towel', 'Pay TV - Phone - Air conditioner - Wake up service - Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) - Cable television - Flat screen TV - Private entrance - Sofa - Soundproof system - Tile / marble floor - Wardrobe or closet for clothes - Bedspread - The upper floors go up by elevator - Clothes hanger - Clothes horse', 0, 0, 250, 'http://exploore-travel.test/public/client/img/hotel-view/img-2.png', 20, NULL, NULL),
	(8, 4, 'Family\'s room', '2', '20m2', 1, ' Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin - Towel', 'Pay TV - Phone - Air conditioner - Wake up service - Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) - Cable television - Flat screen TV - Private entrance - Sofa - Soundproof system - Tile / marble floor - Wardrobe or closet for clothes - Bedspread - The upper floors go up by elevator - Clothes hanger - Clothes horse', 0, 0, 358, 'http://exploore-travel.test/public/client/img/hotel-view/img-2.png', 20, NULL, NULL),
	(9, 5, 'Luxury room', '3', '20m2', 1, ' Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin - Towel', 'Pay TV - Phone - Air conditioner - Wake up service - Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) - Cable television - Flat screen TV - Private entrance - Sofa - Soundproof system - Tile / marble floor - Wardrobe or closet for clothes - Bedspread - The upper floors go up by elevator - Clothes hanger - Clothes horse', 0, 0, 450, 'http://exploore-travel.test/public/client/img/hotel-view/img-2.png', 20, NULL, NULL),
	(10, 5, 'Family\'s room', '4', '20m2', 1, ' Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin - Towel', 'Pay TV - Phone - Air conditioner - Wake up service - Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) - Cable television - Flat screen TV - Private entrance - Sofa - Soundproof system - Tile / marble floor - Wardrobe or closet for clothes - Bedspread - The upper floors go up by elevator - Clothes hanger - Clothes horse', 0, 0, 230, 'http://exploore-travel.test/public/client/img/hotel-view/img-2.png', 30, NULL, NULL),
	(11, 6, 'Luxury room', '2', '20m2', 1, ' Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin - Towel', 'Pay TV - Phone - Air conditioner - Wake up service - Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) - Cable television - Flat screen TV - Private entrance - Sofa - Soundproof system - Tile / marble floor - Wardrobe or closet for clothes - Bedspread - The upper floors go up by elevator - Clothes hanger - Clothes horse', 0, 0, 150, 'http://exploore-travel.test/public/client/img/hotel-view/img-2.png', 20, NULL, NULL),
	(12, 6, 'Family\'s room', '2', '40m2', 1, ' Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin - Towel', 'Pay TV - Phone - Air conditioner - Wake up service - Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) - Cable television - Flat screen TV - Private entrance - Sofa - Soundproof system - Tile / marble floor - Wardrobe or closet for clothes - Bedspread - The upper floors go up by elevator - Clothes hanger - Clothes horse', 0, 0, 238, 'http://exploore-travel.test/public/client/img/hotel-view/img-2.png', 20, NULL, NULL);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;

-- Dumping structure for table exploore.sub_tags
CREATE TABLE IF NOT EXISTS `sub_tags` (
  `id_sub_tags` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_tags` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_sub_tags`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.sub_tags: ~0 rows (approximately)
/*!40000 ALTER TABLE `sub_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `sub_tags` ENABLE KEYS */;

-- Dumping structure for table exploore.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id_tags` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tags`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.tags: ~0 rows (approximately)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping structure for table exploore.tour
CREATE TABLE IF NOT EXISTS `tour` (
  `id_tour` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tour_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_name` text COLLATE utf8mb4_unicode_ci,
  `number_of_people` int(11) NOT NULL,
  `tour_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `tour_price` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `tour_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_tour` int(11) NOT NULL,
  `start_day` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tour`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.tour: ~6 rows (approximately)
/*!40000 ALTER TABLE `tour` DISABLE KEYS */;
INSERT INTO `tour` (`id_tour`, `tour_name`, `tmp_name`, `number_of_people`, `tour_description`, `rating`, `tour_price`, `sale`, `location`, `tour_img`, `duration_tour`, `start_day`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'CHINESE TRAVEL - MUNICIPAL OF THE TET HOLIDAY 2020 [TRUONG GIA GIOI - PHUONG HOANG STOCK - KINH CHAU - VU HAN]', 'CHINESE TRAVEL - MUNICIPAL OF THE TET HOLIDAY 2020 [TRUONG GIA GIOI - PHUONG HOANG STOCK - KINH CHAU - VU HAN]', 20, '<p>Privately guided trips allow you to be in control of all the details of your trip - departure times, accommodations, extra nights, extra activities, extra experiences - what you want and how you want it.</p>', 6, 100, 20, 1, 'the-river-Fenghuang-Hunan_74350603.jpg', 2, '24/10/2019', 1, NULL, NULL),
	(2, 'TOUR - DUBAI [CHRISTMAS - BURJ KHALIFA TOWER - YACHT CRUISE - MIRACLE GARDEN - SA MOLAR SAFARI]', 'TOUR - DUBAI [CHRISTMAS - BURJ KHALIFA TOWER - YACHT CRUISE - MIRACLE GARDEN - SA MOLAR SAFARI]', 20, '<p>Privately guided trips allow you to be in control of all the details of your trip - departure times, accommodations, extra nights, extra activities, extra experiences - what you want and how you want it.</p>', 6, 1200, 20, 1, 'Burj-Al-Arab-in-Dubai_316526648.jpg', 2, '24/10/2019', 1, NULL, NULL),
	(3, 'EUROPEAN TRAVEL - 29 TET DAY IN 2020 [FRANCE - SPAIN - PORTUGAL]', 'EUROPEAN TRAVEL - 29 TET DAY IN 2020 [FRANCE - SPAIN - PORTUGAL]', 20, '<p>Privately guided trips allow you to be in control of all the details of your trip - departure times, accommodations, extra nights, extra activities, extra experiences - what you want and how you want it.</p>', 6, 1000, 20, 1, 'Sagrada-Familia_387745048.jpg', 2, '24/10/2019', 1, NULL, NULL),
	(4, 'TOURISM IN DA NANG - ASIAN PARK - BA NDLA - GOLD BRIDGE - HOI AN', 'TOURISM IN DA NANG - ASIAN PARK - BA NDLA - GOLD BRIDGE - HOI AN', 20, 'w', 6, 120, 20, 1, 'Dragon-River-Bridge_676759177.jpg', 2, '24/10/2019', 1, NULL, NULL),
	(5, 'QATAR TRAVEL WELCOME NEW YEAR 2020 [QATAR - DOHA] 4-star HOTEL', 'QATAR TRAVEL WELCOME NEW YEAR 2020 [QATAR - DOHA] 4-star HOTEL', 20, 'w', 6, 1250, 20, 1, 'NhaTho-State-Grand_1389760331.jpg', 2, '24/10/2019', 1, NULL, NULL),
	(6, 'EUROPEAN TOUR IN TET HOLIDAY 2020 - 27 TET [SWITZERLAND - LIECHTENSTEIN - GERMANY]', 'EUROPEAN TOUR IN TET HOLIDAY 2020 - 27 TET [SWITZERLAND - LIECHTENSTEIN - GERMANY]', 20, 'w', 6, 500, 20, 1, 'Fraumunster-Church_577443817.jpg', 2, '24/10/2019', 1, NULL, NULL);
/*!40000 ALTER TABLE `tour` ENABLE KEYS */;

-- Dumping structure for table exploore.tour_day
CREATE TABLE IF NOT EXISTS `tour_day` (
  `id_tour_day` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_tour` int(11) NOT NULL,
  `tour_day_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_day_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_day_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tour_day`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table exploore.tour_day: ~12 rows (approximately)
/*!40000 ALTER TABLE `tour_day` DISABLE KEYS */;
INSERT INTO `tour_day` (`id_tour_day`, `id_tour`, `tour_day_name`, `tour_day_content`, `tour_day_img`, `created_at`, `updated_at`) VALUES
	(1, 1, 'HCMC - QUANG CHAU - TRUONG GIA Gioi (Snack on board)', 'Gathering at International Departure Station - Tan Son Nhat airport to check in for flight to Shenzhen on flight CZ 374 (15:40 - 19:40). To Guangzhou, get luggage and check-in procedures for flight CZ 3381 (23:10 - 00:55) +1 to Zhangjiajie. Overnight in Zhangjiajie.', 'thien-mon-son-zhangjiajie_398393665.jpg', NULL, NULL),
	(2, 1, 'Truong Gia Gioi (Breakfast, lunch, dinner)', 'Check. Visiting Truong Gia Gioi, the cable car takes the delegation to the mountain to visit Thien Mon Son - walking on the road even though it is only 11km long, the height difference between the beginning and the end is up to 1,100m with 99 bends. Visit Skywalk - the 60m-long crystal-walled crystal road made from transparent glass. Continue taking the escalator to Thien Mon Dong to visit Heaven Gate and eco-car to take the group down the mountain (or vice versa). Visit the gem shop. Check hotel. Overnight in Zhangjiajie.', 'Zhangjiajie-Forest-Park_140065921.jpg', NULL, NULL),
	(3, 2, 'DUBAI - BURJ KHALIFA TOWER (Breakfast, lunch, dinner)', 'Discover Dubai (United Arab Emirates): visit the 150-year-old Al Fahidi Fort, which is now used as the Dubai Museum. Travel by the characteristic Abra-drive to see rich Dubai from the canals; visit and free shopping at Gold Souk (Gold Souk) with more than 200 gold shops displaying all kinds of gold jewelry from ancient to modern and Spice Market (Spice Souk) with many fragrances, spices from agarwood Incense and Herb. Visit the tallest Burj Khalifa in the world to see a spectacular and magnificent view of Dubai from the 124th floor of the Tower. You visit shopping at handmade carpet store. Check in hotel and overnight in Dubai.', 'Burj-Khalifa-tower_631623083.jpg', NULL, NULL),
	(4, 2, 'DUBAI - YATCH CRUISE - SAMAR SAFARI (Breakfast, lunch, dinner)', 'Enjoy Yatch Cruise yacht admire the city of Dubai. Discover Palm Island - a beautiful artificial island shaped like a palm tree. Experience the monorail to see the color of the deep blue ocean, the skyscrapers with modern and fancy designs, in the distance are the luxurious 7-star Burj Al Arab hotel and the remote Atlantis The Palm hotel flower. In the afternoon, experience the unforgettable adventurous feeling of walking into the Safari desert by terrain vehicle (You can join the camel riding program, Hanna hand-drawing experience - a decorative painting of gouache on hands) or very popular legs in the Middle East). Enjoy BBQ dinner in huts constructed with dry palm leaves in the candlelight under the starry sky, watching the unique belly dance performed by talented dancers. Overnight in Dubai.', 'Burj-Khalifa-tower_631623083.jpg', NULL, NULL),
	(5, 3, 'DUBAI – NICE - CANNES – NICE (dinner)', 'Arriving at Dubai airport, the flight connecting EK77 (08:20 - 12:35) to Nice - Queen of the Cote d \'Azur region. 12h35 arrive at Nice airport, the dreamy coastal city is surrounded by hills with a mild climate with more than 2500 hours of sunshine each year. Bus tour to depart for Cannes - the romantic blue seaside. The delegation took a photo outside the Palace of Festivals and Congresses (Palais des Festivals et des Congrès) - the place where the film festivals and the Palme d\'Or logo take place in honor of the world stars. Visit the largest and most beautiful road La Croisette. Stroll around the harbor, relax and enjoy the beautiful seascape in Cannes and watch the scenery of beautiful sailing boats parked close together in the playground for the upper class. Go back to hotel room and spend the night in Nice.', 'Palais-des-Festivals-et-des-Congres_202383739.jpg', NULL, NULL),
	(6, 3, 'NICE – MONACO – EZE - NICE (Breakfast, lunch, dinner)', 'Visit the morning flower market of Marché aux Fleurs Cours Saleya, where visitors will admire all kinds of flowers and ornamental plants. Move to the Principality of Monaco - the most luxurious paradise in the world and one of the richest countries in the world. Admire the outside of the Palais Princier Palace - the residence and work of the monarchist constitutional monarch of Monaco and the famous Monte Carlo casino; Cathédrale de Monaco - the resting place of many celebrities of the Grimaldi royal family, the aristocratic family that has ruled Monaco for 700 years. In the afternoon, the bus will take you to Eze village - a medieval village nestled in a Mediterranean mountain, famous for its botanical garden on a cliff impressing visitors. Diversity of unique tropical plants. The colorful flowers originating mainly from South Africa and the Arabian Peninsula give the garden a seductive scent filled. Visit the Fragonard perfume factory. You move back to Nice to visit the ancient town of the old town with a maze of narrow cobblestone walkways, Masséna Square featuring the strange design of statues sitting on high pillars and statues of Apollo. on the solar fountain. Freedom to walk on the famous "Promenade des Anglais" street, watching the panoramic view of the famous stretching coast of France. Overnight in Nice.', 'Promenade-des-Anglais_267127067.jpg', NULL, NULL),
	(7, 4, 'HO CHI MINH - DA NANG - ASIAN PARK', 'In the morning, you gather at Gate D1, Domestic Departures Station, Tan Son Nhat Airport. HDV Travel Saigontourist welcomes you, helps with procedures. Departure to Danang on flight VN110 at 06:00. Arrive in Da Nang, visit Son Tra peninsula, admire Tien Sa port, visit Linh Ung Bai Bai Pagoda - the largest temple in Da Nang city, admire the tallest statue of Buddha Quan The Am in Vietnam. In the afternoon, the delegation visited Asia Park - Asia Park: Southeast Asia\'s leading amusement park with an international level. You experience "Sun Wheel - SunWheel" enjoy the beautiful scenery of Da Nang with a new perspective from an altitude of 115m. Overnight in Da Nang', 'sun-wheel-_789911887.jpg', NULL, NULL),
	(8, 4, 'DA NANG - KDL Ba Na - GOLD BRIDGE - HCMC (Breakfast, dinner)', 'Freedom to explore Da Nang City. You can go to the Han River to see the Dragon Bridge - one of the largest steel dragons in the world, Tran Thi Ly Bridge - with the architecture like a sailing boat reaching out to the big sea, the statue of Dragon carp transforming - a symbol of bringing bold with art and folk beliefs, the Bridge of Love - a bridge of hearts with cute locks on the bridge is very interesting and romantic. Or go to Han market (or Con market), buy local specialties. You self-sufficient lunch, experience the unique cuisine of Da Nang.', 'cable-car-to-ba-na-hills.jpg', NULL, NULL),
	(9, 5, 'TP.HCM - DOHA (dinner)', 'You are self-sufficient at 2nd floor - Tan Son Nhat International Airport Terminal, with a guide for flight QR973 (08: 55-13: 05) to Doha - Qatar. Arrive at Doha airport, delegation to entry procedures. The bus will take you through Westbay - a newly built West Coast urban area including many of the tallest skyscrapers in Qatar. Visit the Qatar National Museum - a white building with intricate curves inspired by desert roses. Drive along Corniche, the beautiful coastal road of Doha and see the Pearl monument in front of Dhow harbor. You can feel an ancient Doha with mysterious Arab color while freely walking around Souq Waqif - an ancient traditional market with many stalls on the streets and buildings built of attractive mud plaster walls. Many tourists visit. You can find many traditional items such as textiles, spices, crafts, souvenirs and even gold. Especially not to be missed Falcon Market (Falcon Souq), where there are many trained falcons. Check in hotel and overnight in Doha.', 'Doha.jpg', NULL, NULL),
	(10, 5, 'DOHA (Breakfast, lunch,dinner)', 'Continue the journey to explore Qatar. You move to Camel Race Track - the place where the exciting camel race. Visit the Education City mosque with its impressive architecture, covered with embossed Quran verses, surrounded by hundreds of small white windows like mysterious caverns creating a wonderful artistic works; Qatar National Library - a huge library containing over one million books and space for thousands of readers with cooling, artificial lighting and book exchange system. Take a photo outside the Khalifa International Stadium - one of the eight stadiums prepared for the 2022 World Cup. Shopping at Villagio Mall - one of the bustling and modern malls designed uniquely with the sky on the ceiling and the artificial river inside. Overnight in Doha.', 'ThanhDuong-Education-City_1051356008.jpg', NULL, NULL),
	(11, 6, 'TP.HCM – ZURICH -  GENEVA', 'You are self-sufficient at the 2nd floor of International Departure Station - Tan Son Nhat Airport, with the guide of procedures for flight LX8061 (08:00 - 15:15) direct flight to Zurich - the cultural capital of Switzerland. 15:15 meeting at Zurich airport, you entry procedures and connect LX2808 flight (17:00 - 17:50) to Geneva. Pick up at the airport to take you to check in hotel. Overnight in Geneva.', 'Lausanne-Cathedral_706926415.jpg', NULL, NULL),
	(12, 6, 'GENEVA – LAUSANNE (Breakfast, lunch,dinner)', 'Start the journey to discover Geneva - an international city with many important headquarters of the world. Sightseeing and taking photos outside the United Nations Building, Red Cross Museum. Admire the tallest Jet d\'eau in the world - the symbol of Geneve, the Flower Clock Tower and the Anglais garden. In the afternoon, move to Lausanne, which has spectacular views and is also known as the city of fairy dreams. You can wander on Cinderella\'s feel as you walk to the Old Quarter, putting yourself on brilliant coaches and dreaming of your horses. Photographed outside Lausanne Cathedral - the most beautiful church in Switzerland was built in 1175 and is the typical work of Gothic architecture. Check in hotel and overnight at Lausanne.', 'Chapel-bridge_321350090.jpg', NULL, NULL);
/*!40000 ALTER TABLE `tour_day` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
