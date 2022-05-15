-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 07:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hang`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Bánh ngọt'),
(2, 'Bánh mì'),
(3, 'Bánh sinh nhật');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `content`, `create_at`) VALUES
(1, 0, 0, 0, '2022-05-18 16:59:57'),
(2, 0, 0, 0, '2022-05-18 17:01:00'),
(3, 0, 0, 0, '2022-05-18 17:01:41'),
(4, 0, 0, 0, '2022-05-18 17:01:44'),
(5, 0, 0, 0, '2022-05-18 17:01:50'),
(6, 0, 0, 0, '2022-05-18 17:03:54'),
(7, 0, 0, 0, '2022-05-18 17:04:07'),
(8, 0, 0, 0, '2022-05-18 17:04:12'),
(9, 0, 0, 0, '2022-05-18 17:04:30'),
(10, 0, 0, 0, '2022-05-18 17:05:34'),
(11, 0, 0, 0, '2022-05-18 17:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `due_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `start_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `value`, `due_date`, `start_date`, `count`) VALUES
('giam10', '10', '2022-05-15 07:49:11', '2022-05-15 07:49:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `introduces`
--

CREATE TABLE `introduces` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `introduces`
--

INSERT INTO `introduces` (`id`, `title`, `content`, `image`) VALUES
(1, 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur uis autem vel eum.', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever un', '');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(28, 118, 4, 2),
(72, 1, 4, 2),
(98, 189, 4, 2),
(99, 190, 4, 2),
(100, 191, 4, 2),
(101, 192, 4, 2),
(102, 193, 4, 2),
(104, 195, 4, 2),
(105, 201, 4, 2),
(106, 202, 4, 2),
(107, 214, 4, 1),
(108, 216, 2, 1),
(109, 217, 5, 1),
(110, 218, 2, 1),
(111, 218, 5, 2),
(112, 218, 4, 1),
(113, 218, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `address` int(11) NOT NULL,
  `cost` float NOT NULL,
  `discount_id` varchar(255) NOT NULL,
  `shipping` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `address`, `cost`, `discount_id`, `shipping`) VALUES
(194, 1, 1, 0, 6, '', 1),
(195, 1, 1, 0, 6, '', 1),
(196, 1, 1, 0, 6, '', 1),
(201, 1, 1, 0, 6, '', 1),
(202, 1, 1, 0, 6, '', 1),
(214, 1, 1, 0, 3, '', 1),
(216, 1, 1, 0, 5, '', 1),
(217, 1, 1, 0, 8, '', 1),
(218, 1, 1, 0, 89, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `sold` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `category_id`, `created_at`, `updated_at`, `description`, `quantity`, `sold`) VALUES
(2, 'Bánh mì hà nội', 5, 'public/img/cake-feature/c-feature-1.jpg', 2, '2022-05-10 12:22:58', '0000-00-00 00:00:00', 'Bánh mì hà nội thơm ngon nóng giòn', 2, 2),
(3, 'Bánh sinh nhật 1', 65, 'public/img/cake-feature/c-feature-1.jpg', 3, '2022-05-07 17:18:37', '2022-05-07 17:18:37', 'Bánh sinh nhật đặc biệt rất ngon', 0, 1),
(4, 'Bánh kem 1', 3, 'public/img/cake-feature/c-feature-1.jpg', 1, '2022-05-07 17:19:01', '2022-05-07 17:19:01', 'Bánh kem đặc biệt rất ngon', 3, 1),
(5, 'Bánh mì sài gòn', 8, 'public/img/cake-feature/c-feature-1.jpg', 2, '2022-05-07 17:24:02', '2022-05-07 17:24:02', 'Bánh mì sài gòn thơm ngon nóng giòn', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Thanh toán Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `statusorders`
--

CREATE TABLE `statusorders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statusorders`
--

INSERT INTO `statusorders` (`id`, `name`) VALUES
(1, 'Đang xử lý'),
(2, 'Đang giao hàng'),
(3, 'Hoàn thành');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `create_at`, `update_at`, `password`) VALUES
(1, 'thivu888', 'vu@gmail.com', '0345475176', '2022-05-09 16:06:01', '2022-05-09 16:06:01', '123'),
(2, 'vuvip198', 'bopy197xx@gmail.com', '0932023992', '2022-05-10 14:18:07', '2022-05-10 14:18:07', '123'),
(3, 'thivu88811', 'bopy1972xx@gmail.com', '0345475143', '2022-05-15 10:56:45', '2022-05-15 10:56:45', '123'),
(4, 'vuvip198123', 'bopy197x3x@gmail.com', '0932023932', '2022-05-15 14:46:58', '2022-05-15 14:46:58', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introduces`
--
ALTER TABLE `introduces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statusorders`
--
ALTER TABLE `statusorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `introduces`
--
ALTER TABLE `introduces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statusorders`
--
ALTER TABLE `statusorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
