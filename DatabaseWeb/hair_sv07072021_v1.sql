-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 01:03 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hair_sv`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idEmp` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `service` int(10) UNSIGNED NOT NULL,
  `finish` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `idUser`, `idEmp`, `date`, `time`, `index`, `created_at`, `updated_at`, `service`, `finish`) VALUES
(11, 15, 14, '2021-07-01', '8:30', 0, '2021-07-01 04:47:24', '2021-07-01 04:47:24', 1, 0),
(12, 13, 14, '2021-07-03', '20:30', 74, '2021-07-01 04:48:52', '2021-07-01 04:48:52', 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `idPro` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `idCate` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idCate`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Tạo Kiểu Tóc', NULL, NULL),
(2, 'Chăm Sóc Tóc', '2021-04-19 05:51:57', '2021-04-19 05:51:57'),
(3, 'Chăm Sóc Da', '2021-04-19 05:52:51', '2021-04-19 05:52:51'),
(4, 'Chăm Sóc Cơ Thể', '2021-04-19 05:53:12', '2021-04-19 05:53:12'),
(5, 'Phụ Kiện', '2021-04-19 05:53:33', '2021-04-19 05:53:33'),
(6, 'Thực phẩm chức năng', '2021-04-19 05:53:52', '2021-04-19 05:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idEmp` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `idUser`, `idEmp`, `content`, `created_at`, `updated_at`) VALUES
(6, 15, 14, 'lelamhai', '2021-07-01 04:48:03', '2021-07-01 04:48:03'),
(7, 13, 14, 'hớt như qq', '2021-07-01 06:03:10', '2021-07-01 06:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_04_145652_create_categories_table', 1),
(5, '2021_04_07_150801_create_user', 1),
(6, '2021_04_11_020549_add_token_to_user', 1),
(7, '2021_04_13_133825_create_services_table', 1),
(8, '2021_04_13_141356_add_human_rights_to_user_table', 1),
(9, '2021_04_13_141715_add_priceandimg_to_services_table', 1),
(10, '2021_04_28_125324_create_options_table', 1),
(11, '2021_04_29_070447_create_models_hots_table', 1),
(12, '2021_05_02_074303_create_products_table', 1),
(13, '2021_05_02_074407_create_service__details_table', 1),
(14, '2021_05_02_074447_create_carts_table', 1),
(15, '2021_05_02_074726_create_orders_table', 1),
(16, '2021_05_02_074757_create_order__details_table', 1),
(17, '2021_05_08_074132_create_books_table', 1),
(18, '2021_05_10_153217_create_comments_table', 1),
(19, '2021_05_25_163934_create_payments_table', 1),
(20, '2021_06_08_115246_create_rates_table', 1),
(21, '2021_06_12_150218_add_service_to_books_table', 1),
(22, '2021_06_18_181325_add_finish_to_books', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modesl_hair__hots`
--

CREATE TABLE `modesl_hair__hots` (
  `id` int(10) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modesl_hair__hots`
--

INSERT INTO `modesl_hair__hots` (`id`, `thumbnail`, `created_at`, `updated_at`, `title`) VALUES
(5, 'http://localhost:8000/storage/photos/13/3.jpg', NULL, '2021-07-06 23:52:04', 'hinh 5000'),
(6, 'http://localhost:8000/storage/photos/13/4.jpg', NULL, '2021-07-06 23:51:45', 'Huy'),
(8, 'http://localhost:8000/storage/photos/13/6666.jpg', NULL, '2021-07-06 23:51:22', 'hinh 7'),
(13, 'http://localhost:8000/storage/photos/13/sss.png', NULL, '2021-07-06 23:51:09', 'hinh 8'),
(20, 'http://localhost:8000/storage/photos/13/TrungDuc-2274 - Copy.jpg', '2021-06-29 07:58:08', '2021-07-06 23:50:07', 'Khang'),
(21, 'http://localhost:8000/storage/photos/13/2.jpg', '2021-07-06 23:52:25', '2021-07-06 23:52:25', 'Hinh dep'),
(22, 'http://localhost:8000/storage/photos/13/1.jpg', '2021-07-06 23:52:48', '2021-07-06 23:52:48', 'Hinh dep lam');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `idOrder` int(10) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalMoney` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order__details`
--

CREATE TABLE `order__details` (
  `idOrder` int(10) UNSIGNED NOT NULL,
  `idPro` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `idOrder` int(10) UNSIGNED NOT NULL,
  `vnp_Amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_BankCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_BankTranNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_CardType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_OrderInfo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_PayDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_ResponseCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_TmnCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_TransactionNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_TxnRef` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_SecureHashType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_SecureHash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idPro` int(10) UNSIGNED NOT NULL,
  `idCate` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_Description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detailed_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idPro`, `idCate`, `title`, `price`, `thumbnail`, `short_Description`, `detailed_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'XỊT TẠO KIỂU FARCOM SCULPT & FREEZE', 359000, 'http://localhost:8000/storage/photos/13/270.png', '', '<p>Dung t&iacute;ch: 500ml Xịt tạo kiểu v&agrave; gi&uacute;p t&oacute;c v&agrave;o nếp. Duy tr&igrave; kiểu t&oacute;c suốt ng&agrave;y d&agrave;i. Sản phẩm l&yacute; tưởng cho ph&eacute;p thỏa sức s&aacute;ng tạo kiểu t&oacute;c như mong muốn, kết cấu si&ecirc;u nhẹ kh&ocirc;ng g&acirc;y kh&ocirc; cứng t&oacute;c. Th&agrave;nh phần c&ocirc;ng thức độc đ&aacute;o c&ugrave;ng dưỡng chất Vitamin B3 v&agrave; Provitamin B5 chăm s&oacute;c s&acirc;u cho t&oacute;c. C&aacute;ch sử dụng: Bước 1: Lắc đều chai g&ocirc;m xịt t&oacute;c Bước 2: Xịt l&ecirc;n t&oacute;c c&aacute;ch khoảng 20cm. C&oacute; thể xịt gần ch&acirc;n t&oacute;c để tạo t&oacute;c dụng đứng nếu t&oacute;c bạn kh&ocirc;ng l&ecirc;n được. Khi xịt nhiều g&ocirc;m sẽ c&oacute; độ b&oacute;ng, nếu xịt 1 lượng vừa phải sẽ tạo cảm gi&aacute;c rất tự nhi&ecirc;n.</p>', '2021-04-19 15:02:03', '2021-07-07 03:33:40'),
(2, 1, 'GÔM XỊT GIỮ NẾP SIÊU BÓNG TIGI MASTERPIECE 340ml', 406000, 'http://localhost:8000/storage/photos/13/tao_kieu-01_5fedfd32a10245c684c68396ce2d39ab_1024x1024.PNG', '', '<p>&bull; G&ocirc;m xịt giữ nếp si&ecirc;u b&oacute;ng Masterpiece của Bed Head: C&ocirc;ng thức tăng cường độ b&oacute;ng, gi&uacute;p t&oacute;c giữ nếp mạnh mẽ, kh&ocirc;ng chỉ được ph&aacute;t triển m&agrave; c&ograve;n được tin d&ugrave;ng tại c&aacute;c salon chuy&ecirc;n nghiệp. Mang tới kết quả v&agrave; trải nghiệm như ở salon ngay tại nh&agrave;. Với khả năng giữ nếp cực cao v&agrave; tạo hiệu ứng si&ecirc;u b&oacute;ng, g&ocirc;m xịt Masterpiece của Bed Head sẽ biến m&aacute;i t&oacute;c của bạn trở th&agrave;nh t&aacute;c phẩm nghệ thuật! Loại g&ocirc;m xịt n&agrave;y tăng độ b&oacute;ng s&aacute;ng, cho kiểu t&oacute;c cực ấn tượng. &bull; G&ocirc;m xịt với khả năng giữ nếp đ&aacute;ng gờm, với độ giữ nếp đạt 4/5 v&agrave; chống lại t&oacute;c vểnh x&ugrave; với bất k&igrave; kiểu t&oacute;c n&agrave;o. &bull; C&ocirc;ng thức với Trimethicone cho m&aacute;i t&oacute;c b&oacute;ng mượt đến kh&oacute; tin, v&agrave; Polymers gi&uacute;p giữ nếp cực bền cho bất k&igrave; kiểu t&oacute;c n&agrave;o. Ph&ugrave; hợp tạo kiểu cho mọi loại t&oacute;c. HƯỚNG DẪN SỬ DỤNG: Xịt to&agrave;n bộ l&ecirc;n nền t&oacute;c kh&ocirc; để gi&uacute;p t&oacute;c v&agrave;o nếp v&agrave; tăng cường độ b&oacute;ng đến ch&oacute;i l&oacute;a. Ph&ugrave; hợp cho mọi kiểu t&oacute;c v&agrave; mọi độ d&agrave;i. LƯU &Yacute;: NẾU V&Ograve;I XỊT BỊ TẮC, H&Atilde;Y RỬA BẰNG NƯỚC ẤM. TR&Aacute;NH H&Iacute;T TRỰC TIẾP SẢN PHẨM. SỬ DỤNG THEO TỪNG QU&Atilde;NG XỊT NGẮN TRONG KH&Ocirc;NG GIAN THO&Aacute;NG KH&Iacute;, TR&Aacute;NH XỊT QU&Aacute; L&Acirc;U. SỬ DỤNG THEO CHỈ DẪN. KH&Ocirc;NG ĐƯỢC SỬ DỤNG GẦN MẮT.</p>', '2021-04-19 15:05:47', '2021-07-07 03:34:19'),
(3, 2, '[Coming soon] DẦU XẢ TIGI RESURRECTION 400ml - Phiên bản mới 2021', 410000, 'http://localhost:8000/storage/photos/13/270270.png', '', '<p>DẦU XẢ RESURRECTION M&Ocirc; TẢ: &bull; Dầu xả ResurrectionTM mới của Bed Head: Một c&ocirc;ng thức si&ecirc;u phục hồi, kh&ocirc;ng chỉ được thiết kế ri&ecirc;ng m&agrave; c&ograve;n được sử dụng bởi c&aacute;c người thợ l&agrave;m t&oacute;c chuy&ecirc;n nghiệp. Mang lại kết quả v&agrave; trải nghiệm như salon ngay tại nh&agrave;. &bull; D&ograve;ng sản phẩm sửa chữa Bed Head đ&atilde; được tạo ra để gi&uacute;p t&oacute;c hư tổn đ&agrave;n hồi tốt hơn, mềm mượt v&agrave; tr&ocirc;ng khỏe mạnh hơn. Dầu xả phục hồi hư tổn n&agrave;y n&agrave;y được sạc si&ecirc;u t&oacute;c với phức hợp dưỡng t&oacute;c ở cấp độ cao nhất của TIGI để cung cấp độ ẩm phi thường v&agrave; những lợi &iacute;ch được chăm s&oacute;c. Dầu xả gi&uacute;p phục hồi t&oacute;c hư tổn, n&oacute; cũng nu&ocirc;i dưỡng, giữ ẩm v&agrave; dưỡng t&oacute;c. &bull; C&ocirc;ng thức với Amodimethicone để gi&uacute;p phục hồi t&oacute;c hư tổn để t&oacute;c tr&ocirc;ng khỏe mạnh v&agrave; mượt m&agrave; hơn, Behentrimonium Chloride để dưỡng v&agrave; nu&ocirc;i dưỡng t&oacute;c kh&ocirc; hư tổn v&agrave; Selaginella Lepidophylla Extract, c&ograve;n được gọi l&agrave; &#39;c&acirc;y phục sinh&#39; với đặc t&iacute;nh duy tr&igrave; độ ẩm. &bull; Hương thơm tr&aacute;i c&acirc;y ngọt ng&agrave;o. Lựa chọn tuyệt vời cho m&aacute;i t&oacute;c kh&ocirc; xơ hư tổn v&agrave; an to&agrave;n với m&agrave;u nhuộm HDSD: Thoa dầu xả từ phần th&acirc;n đến ngọn tr&ecirc;n nền t&oacute;c ướt, để trong 3-5 ph&uacute;t v&agrave; xả sạch. Để c&oacute; kết quả tốt nhất, h&atilde;y sử dụng c&ugrave;ng với Dầu gội dưỡng ẩm Resurrection.</p>', '2021-04-19 15:07:57', '2021-07-07 03:36:26'),
(4, 2, 'Kem Dưỡng Ủ Tóc KAYAN Keratin Care dành cho tóc hư tổn và bị xỉn màu', 190000, 'http://localhost:8000/storage/photos/13/138701683_3635314256545155_5649322487684057757_o_d18ab2d48299499b9da83ea493a302ce_master.png', '', '<p>DẦU GỘI - XẢ - DƯỠNG KAYAN - M&Aacute;I T&Oacute;C ĐẸP CHUẨN SALON Bạn muốn c&oacute; m&aacute;i t&oacute;c khỏe, đẹp rạng rỡ? Việc đầu ti&ecirc;n l&agrave; phải sử dụng dầu gội ph&ugrave; hợp. V&agrave; thật may mắn, ch&uacute;ng t&ocirc;i c&oacute; giải ph&aacute;p dầu gội cho mọi loại t&oacute;c, để bạn cảm thấy sảng kho&aacute;i chuẩn salon mỗi ng&agrave;y. M&aacute;i t&oacute;c sẽ mượt hơn, b&oacute;ng hơn, khỏe hơn chỉ nhờ gội đầu nếu bạn chọn đ&uacute;ng loại dầu gội ph&ugrave; hợp. Cho d&ugrave; bạn muốn th&ecirc;m độ phồng, kiểm so&aacute;t xơ rối, giữ lọn uốn xoăn, hoặc chỉ đơn giản l&agrave; muốn c&oacute; m&aacute;i t&oacute;c sạch sẽ, dầu gội #KAYAN được đặc chế theo c&ocirc;ng thức salon chuy&ecirc;n nghiệp mang lại cho bạn giải ph&aacute;p l&agrave;m sạch t&oacute;c dễ d&agrave;ng. Chọn dầu gội ph&ugrave; hợp l&agrave; yếu tố then chốt để c&oacute; kiểu t&oacute;c đẹp, v&igrave; vậy h&atilde;y d&agrave;nh thời gian nghĩ về loại t&oacute;c của bạn hoặc kiểu t&oacute;c bạn muốn c&oacute;, v&agrave; khi mua dầu gội h&atilde;y chọn đ&uacute;ng loại dầu gội KAYAN tốt đ&aacute;p ứng c&aacute;c nhu cầu n&agrave;y. Kayan Keratin Care d&agrave;nh cho t&oacute;c hư tổn v&agrave; sỉn m&agrave;u Kayan Rich Oil d&agrave;nh cho t&oacute;c kh&ocirc; v&agrave; hư tổn Kayan Hyaluron Hair d&agrave;nh cho t&oacute;c mỏng, mảnh Kayan BB Silk Hair d&agrave;nh cho t&oacute;c nhuộm Kem Dưỡng Ủ T&oacute;c KAYAN Keratin Care dành cho tóc hư t&ocirc;̉n và bị xỉn màu Dung t&iacute;ch: 250ml Xuất xứ: Ch&acirc;u &Acirc;u Th&agrave;nh phần: KERATIN, COLLAGEN BI&Ecirc;̉N, PROTEIN LÚA MÌ VÀ SỮA, D&Acirc;̀U SHEA VÀ D&Acirc;̀U HẠNH NH&Acirc;N C&ocirc;ng dụng: + Dưỡng &acirc;̉m và giúp tóc chắc khỏe + Nu&ocirc;i dưỡng tóc đ&ecirc;́n t&acirc;̣n ngọn + Ngăn ngừa tóc bị chẻ ngọn + Giúp tóc vào n&ecirc;́p và d&ecirc;̃ chải C&aacute;ch sử dụng: Sau khi gội đầu sạch, lấy một lượng vừa đủ kem ủ t&oacute;c Keratin Care xoa đều l&ecirc;n t&oacute;c. Sau đ&oacute; quấn khăn ủ.Bạn c&oacute; thể để tự nhi&ecirc;n hoặc d&ugrave;ng m&aacute;y k&iacute;ch nhiệt khoảng 10 &ndash; 20 ph&uacute;t. Sau đ&oacute; xả sạch, rồi sấy kh&ocirc;, tạo kiểu. Sử dụng tốt nhất 2-3 lần/tuần</p>', '2021-04-19 15:09:42', '2021-07-07 03:36:46'),
(5, 3, 'Combo \"Thần Dược\" Trị Mụn ACSYS SNP cho mọi loại da', 899000, 'http://localhost:8000/storage/photos/13/161717766_310267110433665_3643638853093292844_n_546a6e8ee20c4c82a77a295cd271e533_1024x1024.png', '', '<p>Combo &quot;Thần Dược&quot; Trị Mụn SNP gồm 3 sản phẩm: - Sữa rửa mặt Acsys trị mụn - Tẩy tế b&agrave;o chết Acsys - Gel b&ocirc;i mụn D&ograve;ng sản phẩm SNP ACSYS For Men được sản xuất tại H&agrave;n Quốc, l&agrave; d&ograve;ng sản phẩm được thiết kế ri&ecirc;ng cho da mụn của nam giới. Với c&aacute;c th&agrave;nh phần dịu nhẹ, giữ ẩm kh&ocirc;ng l&agrave;m thương tổn da, gi&uacute;p kh&aacute;ng khuẩn, bảo vệ da trước c&aacute;c t&aacute;c động b&ecirc;n ngo&agrave;i v&agrave; giảm c&aacute;c vấn đề về mụn. Hướng dẫn sử dụng bộ sản phẩm ACSYS Bước 1: Rửa mặt với sữa rửa mặt ACSYS. Cho một lượng vừa phải v&agrave;o l&ograve;ng b&agrave;n tay đ&atilde; l&agrave;m ướt để tạo bọt cho đến khi bọt nhiều v&agrave; mịn, sau đ&oacute; xoa đều v&agrave; m&aacute;t-xa khắp mặt. Rửa sạch mặt bằng nước ấm v&agrave; tr&aacute;ng lại bằng nước lạnh Bước 2: Lau kh&ocirc; mặt, lấy một lượng vừa đủ thoa đều l&ecirc;n to&agrave;n bộ khu&ocirc;n mặt, trừ v&ugrave;ng quanh mắt v&agrave; miệng. Massage từ 1-2 ph&uacute;t v&agrave; rửa lại bằng nước ấm. Bước 3: Với l&agrave;n da c&oacute; mụn, sử dụng Gel đặc trị mụn ACSYS b&ocirc;i l&ecirc;n c&aacute;c nốt mụn. Gel sẽ kh&ocirc; lại v&agrave; tạo th&agrave;nh một lớp bảo vệ mụn khỏi bụi bẩn từ tay khi chạm v&agrave;o hay yếu tố m&ocirc;i trường. Sử dụng Gel đặc trị gi&uacute;p cho mụn nhanh l&agrave;nh v&agrave; tr&aacute;nh để lại vết th&acirc;m.</p>', '2021-04-19 15:11:41', '2021-07-07 03:37:11'),
(6, 3, 'Combo 3 Sản Phẩm Làm sạch - Dưỡng Trắng Hiệu Quả Cho Nam Giới', 599000, 'http://localhost:8000/storage/photos/13/combo_2_03f5c99fc3e24ad199722fbedd4029ca_1024x1024.png', '', '<p>Sữa Dưỡng Da Grinif All In One ch&iacute;nh l&agrave; giải ph&aacute;p l&agrave;m đẹp nhanh gọn d&agrave;nh cho ph&aacute;i mạnh, từ người mới bước v&agrave;o c&ocirc;ng cuộc chăm s&oacute;c da cho đến những người bận rộn, kh&ocirc;ng c&oacute; nhiều thời gian m&agrave; vẫn muốn c&oacute; một l&agrave;n da trẻ trung mịn m&agrave;ng, đủ ẩm, trắng s&aacute;ng. Sữa rửa mặt than hoạt t&iacute;nh Skin&amp;Dr với th&agrave;nh phần thi&ecirc;n nhi&ecirc;n, c&ocirc;ng nghệ l&ecirc;n men hiện đại gi&uacute;p đ&aacute;nh bay mọi bụi bẩn, dưỡng chất thẩm thấu s&acirc;u gi&uacute;p l&agrave;n da trắng s&aacute;ng, khoẻ mạnh, kh&ocirc;ng c&ograve;n dấu hiệu của mụn. White Truffle HD Turn Over Peeling/ Gel Tẩy Tế B&agrave;o Chết l&agrave; sản phẩm nằm trong Bộ sản phẩm White Truffle HD. Sản phẩm gi&uacute;p l&agrave;m sạch s&acirc;u da mang lại một l&agrave;n da sạch ho&agrave;n hảo để tiến h&agrave;nh c&aacute;c bước dưỡng tiếp theo. Người d&ugrave;ng sẽ cảm nhận ngay một l&agrave;n da sạch, s&aacute;ng, nhẵn mịn thấy r&otilde; chỉ sau 2 ph&uacute;t sử dụng sản phẩm. Sữa Dưỡng Da Grinif All In One ch&iacute;nh l&agrave; giải ph&aacute;p l&agrave;m đẹp nhanh gọn d&agrave;nh cho ph&aacute;i mạnh, từ người mới bước v&agrave;o c&ocirc;ng cuộc chăm s&oacute;c da cho đến những người bận rộn, kh&ocirc;ng c&oacute; nhiều thời gian m&agrave; vẫn muốn c&oacute; một l&agrave;n da trẻ trung mịn m&agrave;ng, đủ ẩm, trắng s&aacute;ng. Sữa rửa mặt than hoạt t&iacute;nh Skin&amp;Dr với th&agrave;nh phần thi&ecirc;n nhi&ecirc;n, c&ocirc;ng nghệ l&ecirc;n men hiện đại gi&uacute;p đ&aacute;nh bay mọi bụi bẩn, dưỡng chất thẩm thấu s&acirc;u gi&uacute;p l&agrave;n da trắng s&aacute;ng, khoẻ mạnh, kh&ocirc;ng c&ograve;n dấu hiệu của mụn. Loại bỏ tế b&agrave;o chết hiệu quả: Kh&ocirc;ng chỉ l&agrave; sữa rửa mặt, Skin&amp;Dr c&ograve;n c&oacute; khả năng loại bỏ tế b&agrave;o chết - nguy&ecirc;n nh&acirc;n khiến cho da sần s&ugrave;i v&agrave; kh&ocirc;ng đều m&agrave;u, đem lại một l&agrave;n da mịn m&agrave;ng, trắng s&aacute;ng L&agrave;m sạch s&acirc;u: Với th&agrave;nh phần than hoạt t&iacute;nh, Skin&amp;Dr c&oacute; khả năng l&agrave;m sạch s&acirc;u, len lỏi đến từng lỗ ch&acirc;n l&ocirc;ng lấy đi bụi bẩn, gi&uacute;p l&agrave;n da th&ocirc;ng tho&aacute;ng, sạch sẽ. Thẩm thấu dưỡng da s&acirc;u: Với c&ocirc;ng nghệ l&ecirc;n men từ thực vật, sản phẩm c&oacute; khả năng thẩm thấu s&acirc;u, đưa dưỡng chất v&agrave;o trong da gi&uacute;p cấp ẩm, gi&uacute;p da trở n&ecirc;n trắng s&aacute;ng, mịn m&agrave;ng, ngăn ngừa l&atilde;o ho&aacute;. Kiềm dầu, ngừa mụn: Skin&amp;Dr c&ograve;n c&oacute; c&ocirc;ng dụng kiềm dầu, gi&uacute;p da lu&ocirc;n sạch tho&aacute;ng. Ngo&agrave;i ra c&ograve;n c&oacute; khả năng kh&aacute;ng mụn tốt, bảo vệ l&agrave;n da kh&ocirc;ng bị mụn tấn c&ocirc;ng. Grinif All In One 4 Gentleman chiết xuất từ 17 thảo dược thi&ecirc;n nhi&ecirc;n, bao gồm dương hồi, cam thảo &acirc;u, chanh, hương thảo, cam, đu đủ, wild cherry, gạo, việt quất, tr&agrave; xanh, lựu, cam chanh Nhật Bản, rượu sake, hoa c&uacute;c, cốt kh&iacute; củ, ho&agrave;ng cầm v&agrave; dầu c&aacute;m gạo. - Giảm thiểu sự xuất hiện của c&aacute;c nếp nhăn, chảy xệ mang đến l&agrave;n da mềm mại, mịn m&agrave;ng. - Cung cấp độ ẩm cho da, ngăn chặn t&igrave;nh trạng da kh&ocirc; r&aacute;p, thiếu nước, mang đến l&agrave;n da ẩm mượt. - L&agrave;m dịu tức th&igrave; những v&ugrave;ng bị k&iacute;ch ứng mẩn đỏ v&agrave; chấm dứt hiện tượng bong tr&oacute;c, nứt nẻ sau khi cạo r&acirc;u. - Gi&uacute;p t&aacute;i sinh v&agrave; trẻ h&oacute;a da hiệu quả, tăng độ đ&agrave;n hồi v&agrave; giữ lại n&eacute;t tươi s&aacute;ng tr&ecirc;n da, đẩy l&ugrave;i l&atilde;o h&oacute;a. - Th&uacute;c đẩy qu&aacute; tr&igrave;nh t&aacute;i tạo tế b&agrave;o, ngăn ngừa h&igrave;nh th&agrave;nh nếp nhăn, tăng độ săn chắc, cải thiện t&igrave;nh trạng mụn v&agrave; k&iacute;ch ứng da, loại bỏ sạm n&aacute;m, x&oacute;a mờ c&aacute;c vết th&acirc;m do mụn - C&acirc;n bằng độ pH tr&ecirc;n da sau khi d&ugrave;ng sữa rửa mặt, dưỡng ẩm s&acirc;u, cung cấp dưỡng chất cho da khỏe mạnh White Truffle HD Turn Over Peeling/ Gel Tẩy Tế B&agrave;o Chết - Sản phẩm chứa c&ocirc;ng thức 2 t&aacute;c động từ Cellulose tự nhi&ecirc;n v&agrave; hạt mơ gi&uacute;p l&agrave;m bong tr&oacute;c tế b&agrave;o chết, bụi bẩn tr&ecirc;n bề mặt da nhanh ch&oacute;ng &amp; nhẹ nh&agrave;ng, mang lại một l&agrave;n da sạch ho&agrave;n hảo. - L&agrave;m bong v&agrave; lấy sạch đi những tế b&agrave;o chết, bụi bẩn tr&ecirc;n da - K&iacute;ch th&iacute;ch t&aacute;i tạo tế b&agrave;o mới gi&uacute;p da trơn mịn, mềm mại - L&agrave;m se kh&iacute;t lỗ ch&acirc;n l&ocirc;ng, da trắng s&aacute;ng - Chứa 83.02 % tinh chất nh&acirc;n s&acirc;m c&ugrave;ng c&aacute;c th&agrave;nh phần RESMELINtm v&agrave; INFLAX tm sẽ l&agrave;m se kh&iacute;t lỗ ch&acirc;n l&ocirc;ng, trắng s&aacute;ng. K&iacute;ch th&iacute;ch t&aacute;i tạo tế b&agrave;o mới gi&uacute;p da trơn mịn, mềm mại. - Bạn sẽ cảm nhận ngay một l&agrave;n da sạch, s&aacute;ng, nhẵn mịn thấy r&otilde; sau 2 ph&uacute;t sử dụng sản phẩm. - Kh&ocirc;ng chứa 9 th&agrave;nh phần độc hại (Paraben, Ethanol, Pigment, Fragrance tổng hợp, benzophenone, DEA, Silicone, Th&agrave;nh phần c&oacute; nguồn gốc động vật, dầu kho&aacute;ng v&agrave; PEG) An to&agrave;n cho mọi loại da. Hướng dẫn sử dụng: Bước 1: Lấy 1 lượng nhỏ sữa rửa mặt ra tay, tạo bọt Bước 2: Xoa đều l&ecirc;n mặt, m&aacute;t-xa khoảng 2-3 ph&uacute;t Bước 3: Rửa sạch mặt với nước Bước 4: D&ugrave;ng Gel tẩy da chết 1 - 2 lần / tuần để c&oacute; l&agrave;n da đẹp, tr&aacute;nh v&ugrave;ng viền mắt Bước 5: Xoa b&oacute;p l&agrave;m theo đường v&ograve;ng tr&ograve;n ra ph&iacute;a ngo&agrave;i từ giữa khu&ocirc;n mặt Bước 6: Rửa sạch với nước ấm Trước khi đi ngủ Bước 1: Thoa một lớp mỏng sữa dưỡng l&ecirc;n da Bước 2: Massage nhẹ nh&agrave;ng cho đến khi sản phẩm thấm đều tr&ecirc;n da. C&oacute; thể d&ugrave;ng đầu ng&oacute;n tay vỗ đều v&agrave; nhẹ khắp mặt để sản phẩm hấp thụ nhanh hơn. Lưu &yacute;: Sử dụng 1-2 lần/ ng&agrave;y để đạt hiệu quả tốt nhất. Tốt nhất n&ecirc;n sử dụng v&agrave;o buổi tối trước khi đi ngủ.</p>', '2021-04-19 15:13:12', '2021-07-07 03:37:30'),
(7, 4, 'Gel vệ sinh nam Winmen 110ml - khử mùi, kháng khuẩn, giữ ẩm hương bạc hà mát lạnh', 55000, 'http://localhost:8000/storage/photos/13/e659405709a2f8fca1b3_4d05745894f249b1bb70ef207054e025_master.png', '', '<p>Thương hiệu: Winmen Xuất xứ: Việt Nam Dung t&iacute;ch: 110ml C&ocirc;ng dụng: - Vệ sinh v&ugrave;ng k&iacute;n nam giới, gi&uacute;p khử m&ugrave;i h&ocirc;i, l&agrave;m sạch da v&ugrave;ng k&iacute;n. - Kh&ocirc;ng k&iacute;ch th&iacute;ch ni&ecirc;m mạc, kh&ocirc;i phục c&acirc;n bằng độ ẩm, độ PH da. - C&oacute; chất s&aacute;t khuẩn c&oacute; t&aacute;c dụng tr&ecirc;n nhiều loại vi khuẩn kh&aacute;c nhau. - Dịch chiết c&acirc;y L&ocirc; Hội&hellip;: L&agrave;m mềm v&agrave; dưỡng ẩm da - Lấy lại sự tự tin cho qu&yacute; &ocirc;ng trong cuộc sống. Vệ sinh &ldquo;v&ugrave;ng k&iacute;n&rdquo; ở nam giới rất quan trọng trong việc g&igrave;n giữ &ldquo;bản lĩnh&rdquo; của qu&yacute; &ocirc;ng tuy nhi&ecirc;n, phần lớn nam giới vẫn chưa vệ sinh đ&uacute;ng c&aacute;ch. Điều n&agrave;y đ&atilde; khiến kh&ocirc;ng &iacute;t qu&yacute; &ocirc;ng gặp phải rắc rối ở &ldquo;v&ugrave;ng nhạy cảm&rdquo; nhất cơ thể, v&agrave; kh&oacute; c&oacute; thể chia sẻ c&ugrave;ng người kh&aacute;c. Để c&aacute;c qu&yacute; &ocirc;ng kh&ocirc;ng phải &acirc;m thầm chịu đựng sự kh&oacute; chịu đ&oacute; nữa. H&atilde;y để Winmen dạng gel mỹ phẩm vệ sinh v&ugrave;ng k&iacute;n lấy lại sự tự tin cho qu&yacute; &ocirc;ng trong cuộc sống. Winmen rất th&iacute;ch hợp trong việc vệ sinh v&ugrave;ng k&iacute;n nam giới, gi&uacute;p khử m&ugrave;i h&ocirc;i, l&agrave;m sạch da v&ugrave;ng k&iacute;n, kh&ocirc;ng c&oacute; cồn g&acirc;y k&iacute;ch th&iacute;ch ni&ecirc;m mạc, c&oacute; axit sữa gi&uacute;p kh&ocirc;i phục c&acirc;n bằng độ ẩm, độ PH da.</p>', '2021-04-19 15:15:20', '2021-07-07 03:38:10'),
(8, 4, 'DCR Gillette Mach 3 Basic', 99000, 'http://localhost:8000/storage/photos/13/dds_6cef00856283463abd13a4806f4f2dd8_1024x1024.jpg', '', '<p>Được thiết kế với hệ dao cạo 3 lưỡi ti&ecirc;n tiến cho đường cạo s&aacute;t v&agrave; &ecirc;m, gi&uacute;p bạn dễ d&agrave;ng cạo sạch r&acirc;u một c&aacute;ch nhanh ch&oacute;ng v&agrave; hiệu quả.</p>', '2021-04-19 15:17:13', '2021-07-07 03:47:36'),
(9, 5, 'Cây Gạt Mụn (Bộ 5 Cây)', 15000, 'http://localhost:8000/storage/photos/13/1_5feca8f5dfc64eca84701bdcc58a65dd_1024x1024.png', '', '<p>Xuất xứ: Việt Nam C&acirc;y nặn mụn sử dụng để nặn mụn trứng c&aacute;. Đ&acirc;y l&agrave; sản phẩm th&ocirc;ng dụng được sử dụng phổ biến v&agrave; rộng r&atilde;i trong tất cả salon của 30shine. Khi mụn c&aacute;m v&agrave; mụn đầu đen qu&aacute; nhiều khiến bạn kh&ocirc;ng kiểm so&aacute;t được th&igrave; n&ecirc;n d&ugrave;ng c&acirc;y nặn mụn n&agrave;y để gột bớt đi mụn c&aacute;m mụn đầu đen đ&aacute;ng gh&eacute;t. KH&Ocirc;NG d&ugrave;ng tay trực tiếp nặn mụn sẽ để lại sẹo, bẩn v&agrave; đỏ r&aacute;t v&ugrave;ng bị mụn. C&aacute;ch Nặn mụn đầu mũi đ&uacute;ng c&aacute;ch: Bước 1: Trước ti&ecirc;n bạn cần l&agrave;m sạch mũi v&agrave; d&ugrave;ng một miếng khăn ấm đắp l&ecirc;n trong khoảng 3 ph&uacute;t để lỗ ch&acirc;n l&ocirc;ng được mở rộng hơn. Bước 2: Lấy chiếc c&acirc;y nặn mụn chuy&ecirc;n dụng c&oacute; một đầu kim v&agrave; một đầu c&oacute; h&igrave;nh tr&ograve;n mảnh tẩy tr&ugrave;ng sạch bằng miếng b&ocirc;ng g&ograve;n thấm rượu. Bước 3: D&ugrave;ng que nặn để đẩy mụn ra theo lỗ ch&acirc;n l&ocirc;ng. Nhớ chỉ chọn những nốt mụn đ&atilde; gi&agrave; v&agrave; c&oacute; hướng mở để mụn dễ d&agrave;ng bị đẩy ra. Đối với phần 2 b&ecirc;n c&aacute;nh mũi th&igrave; đặt que nặn theo hướng đầu nhọn đi xuống dưới khi nặn Bước 4: Với mụn ở v&ugrave;ng tr&ecirc;n mũi th&igrave; đặt c&acirc;y nặn c&oacute; hướng đầu nhọn chếch l&ecirc;n ph&iacute;a tr&ecirc;n. Bước 5: Sau khi nặn mụn xong th&igrave; d&ugrave;ng sữa rửa mặt v&agrave; l&agrave;m sạch v&ugrave;ng da vừa nặn xong.</p>', '2021-04-19 15:20:00', '2021-07-07 03:39:04'),
(10, 5, 'Máy Rửa Mặt Facial Cleansing Brush For Men', 399000, 'http://localhost:8000/storage/photos/13/dad_0f85b64a2d7b432eb41f2fbb8f3fc6c0_1024x1024.png', '', '<p>Xuất xứ: Trung Quốc Trọng lượng: 65g M&ocirc; tả sản phẩm: Rung 8.000 lần/ ph&uacute;t l&agrave;m sạch s&acirc;u cho da. Đầu chải silicone gi&uacute;p tạo cảm gi&aacute;c mềm mại khi rửa mặt v&agrave; m&aacute;t xa. Kh&ocirc;ng cần thay thế đầu cọ, kh&ocirc;ng đau, an to&agrave;n hơn c&aacute;c loại cọ rửa mặt kh&aacute;c. Thiết kế đầu silicon chống nước an to&agrave;n khi sử dụng trong nh&agrave; tắm. Thiết kế nhỏ gọn, dễ d&agrave;ng sử dụng hoặc mang theo khi đi du lịch. C&oacute; 2 mặt cọ thiết kế kh&aacute;c nhau, một mặt để rửa mặt, một mặt để m&aacute;t xa da. Nhiều mức tốc độ dễ dang t&ugrave;y chỉnh, ph&ugrave; hợp với c&aacute;c loại da kh&aacute;c nhau. Ph&ugrave; hợp cho tất cả loại da. D&ugrave;ng 2 lần 1 ng&agrave;y cho v&ugrave;ng mặt, cổ, v&ugrave;ng chữ T hoặc body. Sử dụng đ&egrave;n chống l&atilde;o h&oacute;a khi sử dụng kem dưỡng da, serum nếu muốn. Lợi &iacute;ch của sản phẩm: - Gi&uacute;p rửa sạch s&acirc;u, trắng s&aacute;ng da v&agrave; cải thiện l&agrave;n da. - loại bỏ bụi/ dầu, tế b&agrave;o chết v&agrave; lớp make up tr&ecirc;n da. - Cải thiện mụn, th&uacute;c đẩy tuần ho&agrave;n m&aacute;u. - Th&uacute;c đẩy sự thẩm thấu của c&aacute;c sản phẩm chăm s&oacute;c da, loại bỏ nếp nhăn. - Gi&uacute;p gương mặt tr&ocirc;ng tươi trẻ, mềm mịn hơn. Lưu &yacute;: Vui l&ograve;ng đọc kỹ hướng dẫn sử dụng trước khi d&ugrave;ng để đảm bảo an to&agrave;n. Chỉ được sử dụng thiết bị theo hướng dẫn. Vui l&ograve;ng kh&ocirc;ng th&aacute;o rời hoặc tự &yacute; sửa chữa. Chỉ được sử dụng thiết bị cho c&aacute;c mục đ&iacute;ch được viết ra trong m&ocirc; tả Kh&ocirc;ng để thiết bị hay sử dụng thiết bị ở m&ocirc;i trường nhiệt độ cao hay độ ẩm cao. Tr&aacute;nh xa tầm tay của trẻ em, nếu người sử dụng dưới 18 tuổi cần c&oacute; sự gi&aacute;m s&aacute;t của người lớn. Kh&ocirc;ng n&ecirc;n sử dụng cho phụ nữ mang thai hoặc người c&oacute; tiền sử hoặc bệnh về tim mạch v&agrave; phổi. Để tr&aacute;nh c&aacute;c sự cố hoặc hỏa hoạn vui l&ograve;ng ngưng sử dụng khi thiết bị trở n&ecirc;n n&oacute;ng bất thường. Tr&aacute;nh rơi, đập hoặc t&aacute;c động mạnh đến thiết bị. Kh&ocirc;ng sử dụng khi d&acirc;y c&aacute;p bị hở hoặc hư hỏng. Kh&ocirc;ng sử dụng m&aacute;y cho người bị bệnh tim, sốt, bệnh truyền nhiễm, ung thư, vết thương hở, c&oacute; bẹnh ngo&agrave;i da hoặc ch&aacute;y nắng. Vui l&ograve;ng tham khảo &yacute; kiến của b&aacute;c sỹ trong trường hợp bạn đang điều trị hoặc sử dụng c&aacute;c sản phẩm dưới sự hướng dẫn của b&aacute;c sỹ. Hướng dẫn sử dụng Trong lần sạc đầu ti&ecirc;n vui l&ograve;ng sạc trong v&ograve;ng 3 tiếng rưỡi. Để sạc vui l&ograve;ng cắm đầu USB v&agrave;o thiết bị v&agrave; đầu c&ograve;n lại kết nối với cục sạc v&agrave;o nguồn điện. L&agrave;m ướt mặt sau đ&oacute; thoa sửa rữa mặt của bạn l&ecirc;n mặt v&agrave; cổ&hellip; Khởi động m&aacute;y v&agrave; để ở chế độ thấp nhất. Điều chỉnh mức tốc đố bằng c&aacute;ch nhấn v&agrave;o n&uacute;t nguồn để ph&ugrave; hợp cho việc massage hoặc rửa mặt. Nhấn 1 lần cho tốc độ trung b&igrave;nh. Nhấn th&ecirc;m 1 lần cho tốc độ nhanh hơn. Nhấn v&agrave;o n&uacute;t nguồn th&ecirc;m 1 lần nữa để tắt m&aacute;y. Rửa sơ, l&agrave;m kh&ocirc; mặt v&agrave; sử dụng sản phẩm dưỡng da. Nhấn l&acirc;u khoản 3 gi&acirc;y để tắt mở chế độ đ&egrave;n chống l&atilde;o h&oacute;a. Điều kiện bảo h&agrave;nh C&aacute;m ơn bạn đ&atilde; tin tưởng v&agrave; sử dụng c&aacute;c sản phẩm của ch&uacute;ng t&ocirc;i! Sau khi mua h&agrave;ng qu&yacute; kh&aacute;ch sẽ nhận được chế độ bảo h&agrave;nh trong v&ograve;ng 01 th&aacute;ng kể từ ng&agrave;y mua. Để hỗ trợ bảo tr&igrave; miễn ph&iacute;, qu&yacute; kh&aacute;ch vui l&ograve;ng giữ lại thẻ bảo h&agrave;nh v&agrave; h&oacute;a đơn mua h&agrave;ng. Trong thời gian bảo h&agrave;nh, nếu xuất hiện c&aacute;c lỗi do nh&agrave; sản xuất qu&yacute; kh&aacute;ch h&agrave;ng sẽ được hỗ trợ sửa chữa miễn ph&iacute;. Tuy nhi&ecirc;n, trong trường hợp xuất hiện lỗi do t&aacute;c động b&ecirc;n ngo&agrave;i như rơi, vỡ&hellip; ch&uacute;ng t&ocirc;i xin ph&eacute;p được từ chối bảo h&agrave;nh. Do vậy vui l&ograve;ng tham khảo c&aacute;c th&ocirc;ng tin mua h&agrave;ng v&agrave; lưu &yacute; mang thẻ bảo h&agrave;nh khi đến trung t&acirc;m bảo h&agrave;nh &ndash; bảo tr&igrave; khi cần sửa chữa sản phẩm.</p>', '2021-04-19 15:21:23', '2021-07-07 03:43:09'),
(11, 6, 'Nước uống cải thiện đàn hồi da Kinohimitsu Collagen Diamond (Hộp 16 chai 50ml)', 1590000, 'http://localhost:8000/storage/photos/13/dsc01522_copy_5ae845a247d04efd9f40f6cef270b201_master.png', '', '<p>Nước Uống Kinohimitsu Đẹp Da, Giảm Dầu J&#39;Pan Collagen Men 50ml x 16 Kinohimitsu Collagen Men Drink l&agrave; thức uống collagen đầu ti&ecirc;n được thiết kế để đ&aacute;p ứng nhu cầu cụ thể của l&agrave;n da nam giới. Th&agrave;nh Phần Ch&iacute;nh v&agrave; C&ocirc;ng Dụng: - Perilla Seed Extract &ndash; WSP (Chiết xuất hạt t&iacute;a t&ocirc;) l&agrave; một chất chống Oxy ho&aacute; mạnh mẽ đ&atilde; được đăng k&yacute; cấp bằng s&aacute;ng chế độc quyền tại Mỹ, v&agrave; Aloe Vera (Chiết xuất nha đam) gi&uacute;p giảm vi&ecirc;m tế b&agrave;o v&agrave; tăng cường khả năng hồi phục tế b&agrave;o, do đ&oacute; tăng cường khả năng hấp thu dinh dưỡng của c&aacute;c tế b&agrave;o. - Cactus Extract &ndash; Opuntia Dillenii (Chiết xuất xương rồng) rất gi&agrave;u kho&aacute;ng chất, pectin v&agrave; flavonoid c&oacute; t&iacute;nh chất dưỡng ẩm tuyệt vời. Nghi&ecirc;n cứu cho thấy n&oacute; giảm k&iacute;ch ứng da v&agrave; mẩn đỏ đ&atilde; được g&acirc;y ra bởi một trong hai tia UV hoặc việc cạo r&acirc;u (qu&aacute; tr&igrave;nh cạo r&acirc;u l&agrave; một việc l&agrave;m g&acirc;y tổn hại lặp đi lặp lại cho l&agrave;n da). - Hyaluronic Acid (từ sụn g&agrave;) c&oacute; chức năng như một miếng bọt biển để h&uacute;t v&agrave; giữ nước trong c&aacute;c tế b&agrave;o gi&uacute;p ngăn ngừa da khỏi bị kh&ocirc;. Hyaluronic Acid cũng gi&uacute;p duy tr&igrave; c&acirc;n bằng nước v&agrave; dầu tr&ecirc;n da, gi&uacute;p da mượt m&agrave; hơn. - Wheat Dextrin (NUTRIOSE&reg;) l&agrave; một chất tiền sinh học nhằm th&uacute;c đẩy sự ph&aacute;t triển của vi khuẩn c&oacute; &iacute;ch v&agrave; gi&uacute;p giải độc ruột một c&aacute;ch hiệu quả. - Với 5300mg Collagen Peptide v&agrave; c&aacute;c th&agrave;nh phần dưỡng ẩm tuyệt vời, Kinohimitsu Collagen Men Drink gi&uacute;p tăng cường sự đ&agrave;n hồi, l&agrave;m mịn nếp nhăn, điều tiết tiết b&atilde; nhờn, chữa l&agrave;nh c&aacute;c vết sẹo tr&ecirc;n khu&ocirc;n mặt v&agrave; phục hồi sức sống trẻ trung cho l&agrave;n da. Cảm thấy l&agrave;n da mịn m&agrave;ng hơn, mượt m&agrave; hơn v&agrave; r&otilde; r&agrave;ng hơn chỉ trong 6 ng&agrave;y *! - Kinohimitsu khai th&aacute;c collagen peptide của c&aacute; biển Nhật Bản cao cấp. Được chiết xuất th&ocirc;ng qua c&ocirc;ng nghệ ti&ecirc;n tiến, collagen peptide c&oacute; chất lượng v&agrave; độ tinh khiết cao, kh&ocirc;ng chứa chất b&eacute;o v&agrave; cholesterol. - Ph&acirc;n tử peptid collagen nhỏ. - Mỗi ph&acirc;n tử collagen peptide nhỏ v&agrave; dễ d&agrave;ng hấp thụ qua da. N&oacute; gi&uacute;p khởi động qu&aacute; tr&igrave;nh tổng hợp collagen ở lớp hạ b&igrave; một c&aacute;ch hiệu quả. - Gi&agrave;u c&oacute; chất chống oxy h&oacute;a mạnh mẽ gi&uacute;p l&agrave;m chậm sự l&atilde;o h&oacute;a của da. Chiết xuất hạt Perilla được cấp bằng s&aacute;ng chế độc quyền của Hoa Kỳ gi&uacute;p tăng cường vẻ đẹp của da bằng c&aacute;ch sửa chữa c&aacute;c tế b&agrave;o bị tổn thương v&agrave; giảm vi&ecirc;m . - Kh&ocirc;ng c&oacute; chất phụ gia. - 100% tự nhi&ecirc;n v&agrave; an to&agrave;n, kh&ocirc;ng th&ecirc;m đường, kh&ocirc;ng c&oacute; chất bảo quản, kh&ocirc;ng c&oacute; m&agrave;u nh&acirc;n tạo hoặc hương liệu. Hormones, steroid v&agrave; h&oacute;a chất được thử nghiệm miễn ph&iacute; bởi SGS (Global Benchmark Recognisation về Chất lượng v&agrave; Li&ecirc;m ch&iacute;nh). - C&ocirc;ng thức dạng lỏng cho ph&eacute;p cơ thể hấp thu ngay lập tức. Thuận tiện: Uống ngay lập tức, sẵn s&agrave;ng để ti&ecirc;u thụ ngay lập tức v&agrave; hưởng thụ mọi l&uacute;c, mọi nơi. - L&agrave;m săn chắc da. - Giảm tiết dầu v&agrave; ngăn sự b&oacute;ng nhờn da. - Se kh&iacute;t lỗ ch&acirc;n l&ocirc;ng cho da mịn m&agrave;ng. - Giảm sự xuất hiện của nếp nhăn v&agrave; gi&uacute;p liền sẹo. - Tăng độ đ&agrave;n hồi v&agrave; duy tr&igrave; độ ẩm cho da. Xuất xứ Đ&agrave;i Loan Hướng dẫn sử dụng 1 chai mỗi lần, d&ugrave;ng tốt nhất l&agrave; trước bữa ăn s&aacute;ng hoặc trước khi đi ngủ. Lắc đều trước khi uống. Hương vị thơm ngon hơn khi uống lạnh. -Người sử dụng lần đầu: 1 chai/ng&agrave;y trong li&ecirc;n tục 6 ng&agrave;y Liều duy tr&igrave;: 1 chai mỗi 2 ng&agrave;y Th&agrave;nh phần &bull; Perilla Seed Extract &ndash; WSP (Chiết xuất hạt t&iacute;a t&ocirc;) l&agrave; một chất chống Oxy ho&aacute; mạnh mẽ đ&atilde; được đăng k&yacute; cấp bằng s&aacute;ng chế độc quyền tại Mỹ, v&agrave; Aloe Vera (Chiết xuất nha đam) gi&uacute;p giảm vi&ecirc;m tế b&agrave;o v&agrave; tăng cường khả năng hồi phục tế b&agrave;o, do đ&oacute;&hellip;</p>', '2021-04-19 15:22:38', '2021-07-07 03:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idEmp` int(10) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `idUser`, `idEmp`, `rate`, `created_at`, `updated_at`) VALUES
(4, 15, 14, 3, '2021-07-01 04:48:03', '2021-07-01 04:48:03'),
(5, 13, 14, 5, '2021-07-01 06:03:10', '2021-07-01 06:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `oldPrice` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `price`, `created_at`, `updated_at`, `oldPrice`, `thumbnail`) VALUES
(1, 'COMBO CẮT GỘI 10 BƯỚC', 100, NULL, NULL, 0, 'https://www.google.com/search?q=meme+cute&client=opera&hs=TyI&sxsrf=ALeKk02WmErzHjQmQkM2cF2u923sIRXiaw:1618385550021&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjW28X-m_3vAhXPPXAKHVJ7BdMQ_AUoAXoECAEQAw&biw=1496&bih=764#imgrc=DqNZL1nn86H8yM'),
(4, 'DỊCH VỤ UỐN', 100, '2021-04-24 22:51:12', '2021-04-24 22:51:12', 100, ''),
(5, 'DỊCH VỤ NHUỘM', 0, '2021-04-24 22:52:10', '2021-04-24 22:52:10', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `service__details`
--

CREATE TABLE `service__details` (
  `id` int(10) UNSIGNED NOT NULL,
  `step` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idService` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service__details`
--

INSERT INTO `service__details` (`id`, `step`, `title`, `content`, `thumbnail`, `idService`, `created_at`, `updated_at`) VALUES
(1, 'Bước 1', 'Massage khai huyệt điều hòa (mới)', '<p>Đầu ti&ecirc;n khi mới bắt đầu, anh sẽ được massage khai huyệt điều h&ograve;a, gi&uacute;p anh thư gi&atilde;n v&agrave; lưu th&ocirc;ng mạch m&aacute;u. Skinner sẽ ấn v&agrave;o c&aacute;c huyệt ngủ để bắt đầu qu&aacute; tr&igrave;nh thư gi&atilde;n tại c&aacute;c bước sau</p>\r\n\r\n<p>///////////////////////////---------------------------------------------------------------------------</p>', 'http://localhost:8000/storage/photos/13/b1.jpg', 1, '2021-05-12 04:29:45', '2021-07-07 00:49:47'),
(3, 'Bước 2', 'Rửa mặt – massage tinh chất nha đam thẩm thấu', 'Đây là bước làm sạch mặt anh sau một ngày dài tiếp xúc với bụi bẩn. Tiếp đó, các bạn skinner sẽ massage mặt bằng tinh chất nha đam thẩm thấu. Những động tác uyển chuyển, mềm mại sẽ giúp da anh trở nên căng mọng và sảng khoái', 'http://localhost:8000/storage/photos/13/b2.jpg', 1, '2021-05-12 04:29:53', '2021-07-07 00:50:05'),
(5, 'Bước 3', 'Hút mụn – phun nước hoa hồng công nghệ cao', 'Sau khi được massage êm ái, bạn Skinner sẽ giúp anh hút hết các bã mụn nhờn trên mặt bằng máy hút mụn khử trùng. Tiếp đó là phun nước hoa hồng công nghệ cao giúp se nhỏ lỗ chân lông, bổ sung dưỡng chất cho da', 'http://localhost:8000/storage/photos/13/b3.jpg', 1, '2021-05-12 04:29:59', '2021-07-07 00:50:17'),
(7, 'Bước 4', 'Gội đầu massage bấm huyệt', 'Khi đã có một khuôn mặt đẹp trai, sạch sẽ, anh sẽ được skinner gội và massage đầu bấm huyệt một cách kỹ càng. Sử dụng dầu gội đầu chuẩn salon, không gây gàu, hư tổn cho tóc. Massage bấm huyệt đánh bay cơn đau đầu, giúp đầu nhẹ bẫng và có cảm giác thư thái nhất', 'http://localhost:8000/storage/photos/13/b4.jpg', 1, '2021-05-12 04:30:06', '2021-07-07 00:50:35'),
(9, 'Bước 5', 'Massage rửa tai bọt sảng khoái (mới)', 'Anh sẽ được massage rửa tai sạch sâu và sảng khoái tột đỉnh. Đầu tiên các bạn sẽ cho bọt nhẹ nhàng vào tai anh, dùng tay để làm sạch tai của anh. Sau đó, Skinner sẽ sử dụng kỹ thuật massage tạo tiếng nổ giúp anh thư giãn giống lúc nghe ASRM. Cuối cùng, anh sẽ được xối nước qua tay Skinner để làm sạch sâu tai, loại bỏ hết bụi bẩn và bọt trong tai', 'http://localhost:8000/storage/photos/13/b5.jpg', 1, '2021-05-12 04:30:12', '2021-07-07 00:50:58'),
(11, 'Bước 6', 'Kéo khăn giãn cơ cổ - xối nước thác đổ (mới)', 'Phù hợp với những anh hay phải ngồi nhiều, thường xuyên bị đau cổ, mỏi cổ. Skinner sẽ sử dụng khăn ấm để kéo giãn cơ cổ cho anh, trong bước này, anh chỉ cần thả lỏng và tận hưởng, đừng dùng lực cứng cổ lại nhé!\r\nTiếp theo là động tác xối nước quanh mắt. Động tác này sẽ giúp giải tỏa sự căng thẳng, mệt mỏi của cơ mắt và trán sau một ngày dài nhìn vào các màn hình máy tính', 'http://localhost:8000/storage/photos/13/b6.jpg', 1, '2021-05-12 04:30:17', '2021-07-07 00:51:19'),
(13, 'Bước 7', 'Tư vấn kiểu tóc hợp khuôn mặt', 'Trước khi cắt tóc cho anh, Stylist sẽ hỏi về nghề nghiệp, sở thích và nhìn kiểu tóc, khuôn mặt để tư vấn cho anh kiểu tóc phù hợp nhất', 'http://localhost:8000/storage/photos/13/b7.jpg', 1, '2021-05-12 04:30:26', '2021-07-07 00:51:30'),
(15, 'Bước 8', 'Cắt tóc tạo kiểu bởi stylist hàng đầu', 'Anh sẽ được cắt tóc tạo kiểu một cách tỉ mỉ, tận tình. Các vật dụng phục vụ cho việc cắt tóc đều đầy đủ, có sẵn và thay thế định kỳ', 'http://localhost:8000/storage/photos/13/b8.jpg', 1, '2021-05-12 04:30:35', '2021-07-07 00:53:56'),
(16, 'Bước 9', 'Cạo mặt êm ái – xả sạch tóc con', 'Sau khi cắt xong, Stylist sẽ cạo mặt, râu, các đoạn tóc thừa cho anh. Với tay nghề cao, cẩn thận, đảm bảo cho việc cạo thật êm ái, không đau. Tiếp đó sẽ là một lần xả tóc giúp sạch tóc con', 'http://localhost:8000/storage/photos/13/b9.jpg', 1, '2021-05-12 04:30:40', '2021-07-07 00:54:09'),
(17, 'Bước 10', 'Vuốt sáp – xịt gôm tạo kiểu cao cấp', 'Cuối cùng, anh sẽ được sấy khô tóc, vuốt sáp tạo kiểu và xịt gôm để giữ kiểu tóc đẹp trai suốt cả ngày dài', 'http://localhost:8000/storage/photos/13/b10.jpg', 1, '2021-05-12 04:30:46', '2021-07-07 00:54:48'),
(19, NULL, 'Uốn cao cấp', 'Uốn phồng là bí quyết để mái tóc luôn bồng bềnh vào nếp, đẹp như được vuốt tại salon. Chỉ cần làm một lần, form tóc đẹp giữ được vài tháng. Uốn phồng cao cấp được tăng cường thành phần Collagen và Keratin đem lại độ suôn mượt và độ bóng hoàn hảo cho tóc, phục hồi tóc hư tổn.', 'http://localhost:8000/storage/photos/13/1-uon-cao-cap.jpg', 4, '2021-04-24 22:53:34', '2021-07-07 03:59:13'),
(20, NULL, 'Uốc tiêu chuẩn', 'Uốn tạo kiểu là bí quyết để mái tóc luôn bồng bềnh vào nếp, đẹp như được vuốt tại salon. Chỉ cần làm một lần, form tóc đẹp giữ được vài tháng. Nếu anh sở hữu một mái tóc thưa, mỏng, uốn tóc sẽ giúp mái tóc trở nên bồng bềnh, tạo hiệu ứng trông dày hơn.', 'http://localhost:8000/storage/photos/13/2-uon-tieu-chuan.jpg', 4, '2021-04-24 22:56:21', '2021-07-07 03:59:43'),
(21, NULL, 'Uốn con sâu', 'Là kiểu uốn hoàn toàn mới đang tạo trend khắp châu Á. Uốn con sâu đem lại hình tượng thời trang, hiện đại, khỏe khoắn. Giúp mái tóc trở nên bồng bềnh, dày dặn hơn. Uốn con sâu giúp tóc luôn vào nếp dù không cần vuốt sáp tạo kiểu.', 'http://localhost:8000/storage/photos/13/3-uon-con-sau.jpg', 4, '2021-04-24 22:57:33', '2021-07-07 04:00:17'),
(22, NULL, 'Prenmlock', 'Là kiểu uốn tóc làm mưa làm gió trên khắp thế giới. Đây là kiểu tóc độc đáo, khác lạ đem lại phong cách khỏe khoắn, nam tính và hiện đại Châu Âu. Khi sở hữu Premlock anh sẽ không cần vuốt tóc tạo kiểu mỗi buổi sáng mà tóc vẫn luôn vào form chuẩn đẹp.', 'http://localhost:8000/storage/photos/13/4-uon-prem-lock.jpg', 4, '2021-04-24 22:58:16', '2021-07-07 04:00:50'),
(23, NULL, 'Nhuộm đen, phủ bạc', '\"Tóc bạc sớm: Cách nào để lấy lại phong độ đàn ông đích thực?\"\r\nMột người đàn ông có trong tay sức khỏe, sự thành đạt trong sự nghiệp, hạnh phúc gia đình… liệu có đã hoàn hảo? Thực ra đó là “đủ” chứ chưa thể “đầy” nếu như họ chưa hài lòng về ngoại hình, một nhu cầu thực tế trong thời hiện đại. Vì vậy, đối với đàn ông, tóc bạc sớm sẽ mang đến cảm giác giảm phong độ rõ đi trông thấy. Ái ngại, tự ti sẽ thay thế cho sự tự tin, mạnh mẽ khi đứng trước người đối diện.\r\nHÀNH TRÌNH ĐI TÌM \"MÀU\" CHO NAM GIỚI VIỆT NAM\r\nHiểu được điều đó - 30Shine đã không ngừng suy nghĩ, nghiên cứu 10 triệu lượt khách hàng trên khắp cả nước để tìm được những màu phổ biến, phù hợp và tăng vẻ đẹp trai cho Nam giới Việt Nam.\r\nDu hành các nước nổi tiếng về màu nhuộm như Ý, Pháp, Mỹ, Hàn Quốc,... để tìm nguồn cung cấp màu nhuộm chất lượng cao, chuẩn màu, giữ màu lâu nhất. Và tới cuối cùng, 30Shine đã tìm ra được thương hiệu Echosline nổi tiếng của Ý để hợp tác, cùng nhau phát triển để đem đến trải nghiệm tốt nhất cho khách hàng.\r\nSau thời gian dài miệt mài nghiên cứu, học hỏi từ nước ngoài, 30Shine đã tạo ra:\r\n\"BẢNG MÀU NHUỘM ĐỘC QUYỀN DÀNH CHO NAM GIỚI VIỆT NAM\"\r\nBảng màu mới chia làm 4 gói nhuộm theo tone màu khác nhau phù hợp với từng đối tượng đặc biệt: Elegant Black, Modern Man, Lady Killah và Fashionisto (Cái phần 4 gói này, trên web có backlink cho 3 gói còn lại)\r\nVới gói màu Elegant Black này, 30Shine muốn hướng tới một màu đen classic, đem đến sự thanh lịch, tút lại phong độ cho người đàn ông Việt Nam.\r\n\"HƯỚNG TỚI VẺ ĐẸP CỦA NGƯỜI ĐÀN ÔNG THÀNH ĐẠT\"\r\n', 'http://localhost:8000/storage/photos/13/1-Elegant-black.jpg', 5, '2021-04-24 22:59:18', '2021-07-07 04:01:29'),
(24, NULL, 'Nhuộm nâu cao cấp', '\"Cắt tóc giúp nam giới gọn gàng hơn, nhưng màu tóc mới là điều quan trọng định hình phong cách của người đó\"\r\nĐàn ông Việt khi trưởng thành thường không thích nhuộm tóc, và có quan điểm: người Á Đông thì tóc phải đen, hay trẻ con thì mới nhuộm tóc. Quan điểm này không đúng cũng chẳng sai. Quan trọng là chọn đúng màu, đúng kiểu thì không những vẻ ngoài được nâng cấp mà còn trở nên bắt mắt và mới mẻ hơn.\r\nHÀNH TRÌNH ĐI TÌM \"MÀU\" CHO NAM GIỚI VIỆT NAM\r\nHiểu được điều đó - 30Shine đã không ngừng suy nghĩ, nghiên cứu 10 triệu lượt khách hàng trên khắp cả nước để tìm được những màu phổ biến, phù hợp và tăng vẻ đẹp trai cho Nam giới Việt Nam.\r\nDu hành các nước nổi tiếng về màu nhuộm như Ý, Pháp, Mỹ, Hàn Quốc,... để tìm nguồn cung cấp màu nhuộm chất lượng cao, chuẩn màu, giữ màu lâu nhất. Và tới cuối cùng, 30Shine đã tìm ra được thương hiệu Echosline nổi tiếng của Ý để hợp tác, cùng nhau phát triển để đem đến trải nghiệm tốt nhất cho khách hàng.\r\nSau thời gian dài miệt mài nghiên cứu, học hỏi từ nước ngoài, 30Shine đã tạo ra:\r\n\"BẢNG MÀU NHUỘM ĐỘC QUYỀN DÀNH CHO NAM GIỚI VIỆT NAM\"\r\nBảng màu mới chia làm 4 gói nhuộm theo tone màu khác nhau phù hợp với từng đối tượng đặc biệt: Elegant Black, Modern Man, Lady Killah và Fashionisto (Cái phần 4 gói này, trên web có backlink cho 3 gói còn lại)\r\nVới gói màu Modern Man này, 30Shine muốn hướng tới một màu đen classic, đem đến sự thanh lịch, tút lại phong độ cho người đàn ông Việt Nam.\r\n\"HƯỚNG TỚI VẺ ĐẸP CỦA NGƯỜI ĐÀN ÔNG HIỆN ĐẠI\"\r\n', 'http://localhost:8000/storage/photos/13/2-Modern-man.jpg', 5, '2021-04-24 23:01:27', '2021-07-07 04:01:49'),
(25, NULL, 'Nhuộm thời trang không tẩy', '\"Cắt tóc giúp nam giới gọn gàng hơn, nhưng màu tóc mới là điều quan trọng định hình phong cách của người đó\"\r\n\"Cái răng cái tóc là góc con người\". Định kiến nhuộm tóc màu sáng là phản cảm, đua đòi nay chẳng còn, thay vào đó, nó lại trở thành một trend của giới trẻ. Đúng vậy, nếu bạn là một người phong cách, đừng ngần ngại trang bị cho mình 1 màu tóc thật nổi bật, cá tính phù hợp với khuôn mặt của bản thân.\r\nHÀNH TRÌNH ĐI TÌM \"MÀU\" CHO NAM GIỚI VIỆT NAM\r\nHiểu được điều đó - 30Shine đã không ngừng suy nghĩ, nghiên cứu 10 triệu lượt khách hàng trên khắp cả nước để tìm được những màu phổ biến, phù hợp và tăng vẻ đẹp trai cho Nam giới Việt Nam.\r\nDu hành các nước nổi tiếng về màu nhuộm như Ý, Pháp, Mỹ, Hàn Quốc,... để tìm nguồn cung cấp màu nhuộm chất lượng cao, chuẩn màu, giữ màu lâu nhất. Và tới cuối cùng, 30Shine đã tìm ra được thương hiệu Echosline nổi tiếng của Ý để hợp tác, cùng nhau phát triển để đem đến trải nghiệm tốt nhất cho khách hàng.\r\nSau thời gian dài miệt mài nghiên cứu, học hỏi từ nước ngoài, 30Shine đã tạo ra:\r\n\"BẢNG MÀU NHUỘM ĐỘC QUYỀN DÀNH CHO NAM GIỚI VIỆT NAM\"\r\nBảng màu mới chia làm 4 gói nhuộm theo tone màu khác nhau phù hợp với từng đối tượng đặc biệt: Elegant Black, Modern Man, Lady Killah và Fashionisto (Cái phần 4 gói này, trên web có backlink cho 3 gói còn lại)\r\nVới gói màu Lady Killah này, 30Shine muốn hướng tới một màu đen classic, đem đến sự thanh lịch, tút lại phong độ cho người đàn ông Việt Nam.\r\n\"HƯỚNG TỚI VẺ ĐẸP CỦA NGƯỜI ĐÀN ÔNG LÃNG TỬ\"', 'http://localhost:8000/storage/photos/13/3-Lady-Killer.jpg', 5, '2021-04-24 23:03:07', '2021-07-07 04:02:22'),
(26, NULL, 'Nhuộm thời trang cần tẩy', '\"Cắt tóc giúp nam giới gọn gàng hơn, nhưng màu tóc mới là điều quan trọng định hình phong cách của người đó\"\r\n\"Cái răng cái tóc là góc con người\". Định kiến nhuộm tóc màu sáng là phản cảm, đua đòi nay chẳng còn, thay vào đó, nó lại trở thành một trend của giới trẻ. Đúng vậy, nếu bạn là một người phong cách, đừng ngần ngại trang bị cho mình 1 màu tóc thật nổi bật, cá tính phù hợp với khuôn mặt của bản thân.\r\nHÀNH TRÌNH ĐI TÌM \"MÀU\" CHO NAM GIỚI VIỆT NAM\r\nHiểu được điều đó - 30Shine đã không ngừng suy nghĩ, nghiên cứu 10 triệu lượt khách hàng trên khắp cả nước để tìm được những màu phổ biến, phù hợp và tăng vẻ đẹp trai cho Nam giới Việt Nam.\r\nDu hành các nước nổi tiếng về màu nhuộm như Ý, Pháp, Mỹ, Hàn Quốc,... để tìm nguồn cung cấp màu nhuộm chất lượng cao, chuẩn màu, giữ màu lâu nhất. Và tới cuối cùng, 30Shine đã tìm ra được thương hiệu Echosline nổi tiếng của Ý để hợp tác, cùng nhau phát triển để đem đến trải nghiệm tốt nhất cho khách hàng.\r\nSau thời gian dài miệt mài nghiên cứu, học hỏi từ nước ngoài, 30Shine đã tạo ra:\r\n\"BẢNG MÀU NHUỘM ĐỘC QUYỀN DÀNH CHO NAM GIỚI VIỆT NAM\"\r\nBảng màu mới chia làm 4 gói nhuộm theo tone màu khác nhau phù hợp với từng đối tượng đặc biệt: Elegant Black, Modern Man, Lady Killah và Fashionisto (Cái phần 4 gói này, trên web có backlink cho 3 gói còn lại)\r\nVới gói màu Modern Man này, 30Shine muốn hướng tới một màu đen classic, đem đến sự thanh lịch, tút lại phong độ cho người đàn ông Việt Nam.\r\n\"HƯỚNG TỚI VẺ ĐẸP CỦA NGƯỜI ĐÀN ÔNG PHONG CÁCH\"', 'http://localhost:8000/storage/photos/13/4-Fashionisto.jpg', 5, '2021-04-24 23:04:19', '2021-07-07 04:02:47'),
(29, NULL, 'dsdsd', '<p>test editor content</p>', NULL, 1, '2021-06-25 09:08:05', '2021-06-25 09:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `human_rights` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `avata`, `password`, `remember_token`, `created_at`, `updated_at`, `token`, `human_rights`) VALUES
(13, 'admin', 'admin@gmail.com', '0961111111', '1625139371-admin.png', '$2y$10$frY5yZLavAA718RYH0xUMeN8jfK7LCC3fDZQ4QUvEbjOuCg6WBjai', NULL, '2021-07-01 04:36:11', '2021-07-01 04:36:11', 'fzRs96Il0LDawCN1625644114', '0'),
(14, 'lelamhai', 'lelamhai@gmail.com', '0962222222', '1625139516-lelamhai.jpg', '$2y$10$osJjKOKA2FCTXZFQlVulburj6DPZ/ZL7ZDHt05y/J7YHei6CD0NBa', NULL, '2021-07-01 04:38:36', '2021-07-01 04:38:36', 'sfkinKmTEYwa4A51625139908', '1'),
(15, 'haitho', 'haitho@gmail.com', '0963333333', '1625140016-haitho.jpg', '$2y$10$hCvwbAk/6pGZj6t2cpn1n.9vhHXCioXaRa2Y3du0d1ja9zs0jxVJ2', NULL, '2021-07-01 04:46:56', '2021-07-01 04:46:56', 'fbFB8Wn1zd60s5r1625140031', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_idemp_foreign` (`idEmp`),
  ADD KEY `books_iduser_foreign` (`idUser`),
  ADD KEY `books_service_foreign` (`service`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD KEY `carts_idpro_foreign` (`idPro`),
  ADD KEY `carts_iduser_foreign` (`idUser`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCate`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_idemp_foreign` (`idEmp`),
  ADD KEY `comments_iduser_foreign` (`idUser`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modesl_hair__hots`
--
ALTER TABLE `modesl_hair__hots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `orders_iduser_foreign` (`idUser`);

--
-- Indexes for table `order__details`
--
ALTER TABLE `order__details`
  ADD KEY `order__details_idpro_foreign` (`idPro`),
  ADD KEY `order__details_idorder_foreign` (`idOrder`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_idorder_foreign` (`idOrder`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idPro`),
  ADD KEY `products_idcate_foreign` (`idCate`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rates_idemp_foreign` (`idEmp`),
  ADD KEY `rates_iduser_foreign` (`idUser`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service__details`
--
ALTER TABLE `service__details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service__details_idservice_foreign` (`idService`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD UNIQUE KEY `user_phone_unique` (`phone`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCate` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `modesl_hair__hots`
--
ALTER TABLE `modesl_hair__hots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idOrder` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idPro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service__details`
--
ALTER TABLE `service__details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_idemp_foreign` FOREIGN KEY (`idEmp`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_service_foreign` FOREIGN KEY (`service`) REFERENCES `service__details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_idpro_foreign` FOREIGN KEY (`idPro`) REFERENCES `products` (`idPro`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_idemp_foreign` FOREIGN KEY (`idEmp`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order__details`
--
ALTER TABLE `order__details`
  ADD CONSTRAINT `order__details_idorder_foreign` FOREIGN KEY (`idOrder`) REFERENCES `orders` (`idOrder`) ON DELETE CASCADE,
  ADD CONSTRAINT `order__details_idpro_foreign` FOREIGN KEY (`idPro`) REFERENCES `products` (`idPro`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_idorder_foreign` FOREIGN KEY (`idOrder`) REFERENCES `orders` (`idOrder`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_idcate_foreign` FOREIGN KEY (`idCate`) REFERENCES `categories` (`idCate`) ON DELETE CASCADE;

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_idemp_foreign` FOREIGN KEY (`idEmp`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rates_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service__details`
--
ALTER TABLE `service__details`
  ADD CONSTRAINT `service__details_idservice_foreign` FOREIGN KEY (`idService`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
