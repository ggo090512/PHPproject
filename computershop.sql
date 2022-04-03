-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 01:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `category_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `category_slug`) VALUES
(1, 'Laptop Gaming', 1, ''),
(2, 'Laptop văn phòng', 1, '[value-4]'),
(3, 'PC Gaming', 1, '[value-4]'),
(4, 'PC Văn Phòng', 1, '[value-4]'),
(5, 'Linh kiện máy tính', 1, '[value-4]');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `create_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `status`, `create_at`) VALUES
(63, 4, 120100000, 3, '2022-03-22'),
(64, 4, 10300000, 3, '2022-03-22'),
(65, 4, 108000000, 3, '2022-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `originalprice` decimal(10,0) NOT NULL,
  `promotionalprice` decimal(10,0) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `view_count` int(11) NOT NULL,
  `create_at` date DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `image`, `image1`, `image2`, `content`, `originalprice`, `promotionalprice`, `amount`, `status`, `product_slug`, `view_count`, `create_at`, `user_id`, `category_id`) VALUES
(48, 'Laptop Gaming Acer Aspire 7 A715 42G R4XX', 'anh1.1.jpg', 'anh1.2.jpg', 'anh1.3.jpg', '<p>Acer Aspire 7&nbsp;2020 A715 42G&nbsp;t&iacute;ch hợp card đồ họa NVIDIA GTX1650 4GB GDDR6, l&agrave; laptop chơi game tốt nhất ph&acirc;n kh&uacute;c.&nbsp;</p>\r\n', '19990000', '17000000', 10, 1, 'laptop-gaming-acer-aspire-7-a715-42g-r4xx1648884595', 0, '2022-04-02', 4, 1),
(49, 'Laptop Gaming Acer Nitro 5 Eagle AN515 57 5669', 'anh2.1.jpg', 'anh2.2.jpg', 'anh2.3.jpg', '<p>Với sự kết hợp từ CPU Core i5 -11400H v&agrave; GPU&nbsp;NVIDIA&nbsp;GeForce&nbsp;GTX 1650 4GB,&nbsp;Acer Nitro 5 Eagle AN515-57&nbsp;sẽ cho ch&uacute;ng ta hiệu năng tốt để xử l&yacute; c&aacute;c c&ocirc;ng việc&nbsp;đồ họa đơn giản tr&ecirc;n c&aacu', '23990000', '20500000', 15, 1, 'laptop-gaming-acer-nitro-5-eagle-an515-57-56691648884893', 0, '2022-04-02', 4, 1),
(50, 'Máy tính xách tay Acer Nitro 5 AN515 58 52SP', 'anh3.1.jpg', 'anh3.2.jpg', 'anh3.3.jpg', '<p>Thiết kế tinh tế c&ugrave;ng những đường cắt đậm chất gaming. M&agrave;n h&igrave;nh IPS tần số qu&eacute;t cao, tr&agrave;n viền mang lại trải nghiệm game nhập vai ho&agrave;n hảo c&ugrave;ng đ&egrave;n LED RGB 4 Zone thay đổi được 16,7 triệu m&agrave', '28000000', '26000000', 5, 1, 'may-tinh-xach-tay-acer-nitro-5-an515-58-52sp1648970834', 0, '2022-04-03', 4, 1),
(51, 'Máy tính xách tay Acer Predator Triton 300 PT315 53 7440', 'anh4.1.jpg', 'anh4.2.jpg', 'anh4.3.jpg', '<p>Acer Predator Triton 300 PT315 53 7440 l&agrave; một trong những d&ograve;ng laptop gaming&nbsp;mạnh mẽ với bộ vi xử l&yacute; Thế hệ thứ 11 của Intel - với tốc độ l&ecirc;n tới 5.0GHz ở chế độ Turbo. Với 8 l&otilde;i v&agrave; 16 luồng, Triton 300 dễ ', '37000000', '33000000', 3, 1, 'may-tinh-xach-tay-acer-predator-triton-300-pt315-53-74401648970952', 0, '2022-04-03', 4, 1),
(52, 'Laptop gaming Acer Predator Helios 300 PH315 55 76KG', 'anh5.1.jpg', 'anh5.2.jpg', 'anh5.3.jpg', '<p>Kh&ocirc;ng giống với những mẫu laptop&nbsp;trước, kh&ocirc;ng c&ograve;n thiết kế với t&ocirc;ng m&agrave;u đen đỏ chủ đạo &nbsp;m&agrave; đổi sang sắc m&agrave;u xanh &ndash; đen c&aacute; t&iacute;nh. Nổi bật với Logo Predator v&agrave; 2 đường thẳn', '47000000', '45000000', 8, 1, 'laptop-gaming-acer-predator-helios-300-ph315-55-76kg1648971505', 0, '2022-04-03', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sdt` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `image`, `status`, `sdt`, `address`, `role_id`) VALUES
(3, 'số 3', 'vobachtho@gmail.com', '1', 'nen4.jpg', 1, 1211, '21121', 1),
(4, 'số 4', 'admin@gmail.com', '1', '274658461_3228530087464330_6466053791307668599_n.png', 1, 3123, 'dong nia', 0),
(8, 'số 8', 'tho@gmail.com', '1', '', 1, 312, '32131', 2),
(24, '2131313', 'admin@gmail.com', '123', '', 1, 213123, '2133', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_ibfk_1` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_ibfk_1` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_ibfk_1` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
