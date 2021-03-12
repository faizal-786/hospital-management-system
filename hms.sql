-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2021 at 12:18 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `wallet` bigint(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`, `email`, `mobile`, `wallet`, `status`) VALUES
(1, 'admin', 'admin', 0, 'saurabhkm1223@gmail.com', '9110131563', 99999, 1),
(2, 'vendor1', 'vendor1', 1, 'vendor1@gmail.com', '1111111111', 10000, 1),
(3, 'vendor2', 'vendor2', 1, 'vendor2@gmail.com', '2222222222', 9240, 1),
(4, 'vendor3', 'vendor3', 1, 'vendor3@gmail.com', '3333333333', 10000, 1),
(5, 'vendor4', 'vendor4', 1, 'vendor4@gmail.com', '5555555555', 10000, 1),
(6, 'vendor5', 'vendor5', 1, 'vendor5@gmail.com', '6666666666', 10000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(256) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(10, 'sabgi bajaar', 1),
(11, 'fish', 0),
(12, 'Groceries', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(1, 'Saurabh Kumar 20 8', 'saurabhkm122@gmail.com', '9110131563', 'hii', '2020-11-11 06:26:05'),
(3, 'Saurabh Kumar 20 8', 'kousik.mathur@gmail.com', '9110131563', 'lulu', '2020-11-11 06:34:59');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_master`
--

CREATE TABLE `coupon_master` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_value` int(11) NOT NULL,
  `coupon_type` varchar(10) NOT NULL,
  `cart_min_value` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon_master`
--

INSERT INTO `coupon_master` (`id`, `coupon_code`, `coupon_value`, `coupon_type`, `cart_min_value`, `status`) VALUES
(1, 'first100', 100, 'Rupee', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `total_price` float NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `order_status` int(20) NOT NULL,
  `length` float NOT NULL,
  `breadth` float NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `mihpayid` varchar(20) NOT NULL,
  `ship_order_id` int(11) NOT NULL,
  `ship_shipment_id` int(11) NOT NULL,
  `payu_status` varchar(10) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `coupon_value` varchar(50) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `address`, `city`, `pincode`, `payment_type`, `total_price`, `payment_status`, `order_status`, `length`, `breadth`, `height`, `weight`, `txnid`, `mihpayid`, `ship_order_id`, `ship_shipment_id`, `payu_status`, `coupon_id`, `coupon_value`, `coupon_code`, `added_on`) VALUES
(2, 1, 'Rajnagar Madhubani', 'MADHUBANI', 847235, 'COD', 20, 'pending', 2, 0, 0, 0, 0, 'ebb690c7b96dd8fce596', '', 0, 0, '', 0, '', '', '2020-11-11 04:45:35'),
(3, 1, 'Rajnagar Madhubani', 'MADHUBANI', 847235, 'COD', 30, 'pending', 1, 0, 0, 0, 0, 'b477c6f3d307e297fe29', '', 0, 0, '', 0, '', '', '2020-11-11 04:49:09'),
(4, 1, 'Rajnagar Madhubani', 'MADHUBANI', 847235, 'COD', 50, 'pending', 1, 0, 0, 0, 0, 'ed05ffc716f44ffd29c7', '', 0, 0, '', 0, '', '', '2020-11-11 07:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `qty`, `price`, `added_on`) VALUES
(1, 2, 38, 1, 20, '0000-00-00 00:00:00'),
(2, 3, 37, 1, 30, '0000-00-00 00:00:00'),
(3, 4, 37, 1, 30, '0000-00-00 00:00:00'),
(4, 4, 38, 1, 20, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'shipped'),
(4, 'Cancelled'),
(5, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `best_seller` int(11) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `sub_categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `best_seller`, `meta_title`, `meta_desc`, `status`, `meta_keyword`, `added_by`) VALUES
(30, 10, 3, 'Potato', 40, 35, 10, '340290279_product-1.png', 'Eating anything in excess is harmful. Moderation is the key!', 'According to the book \'Healing Foods\' the \"Alkalising and anti-inflammatory, potatoes soothe stomach and duodenum ulcers and reduce stomach acidity. They may also relieve the inflammation associated with arthritis.\"', 1, '', '', 0, '', 2),
(31, 10, 3, 'Onion', 55, 50, 10, '997083641_product-2.png', 'Vitamin A, C, and K in onion helps to get rid of pigmentation and protects you from harmful UV rays as well.', 'The flavonoids in onion help in reducing bad cholesterol in the body and thiosulfinates are known to keep the consistency of the blood right as they make the blood thinner. Due to this, the risk of heart attack and stroke reduces.', 1, '', '', 1, '', 2),
(33, 10, 3, 'Cabbage', 30, 27, 10, '141673650_product-4.png', 'Cabbage is loaded with vitamins and minerals.', 'just 1 cup (89 grams) of raw green cabbage contains :\r\nCalories: 22   Protein: 1 gram  Fiber: 2 grams  Vitamin K: 85% of the RDI  Vitamin C: 54% of the RDI  Folate: 10% of the RDI  Manganese: 7% of the RDI   Vitamin B6: 6% of the RDI  Calcium: 4% of the RDI  Potassium: 4% of the RDI  Magnesium: 3% of the RDI', 0, '', '', 0, '', 2),
(34, 10, 3, 'Brinjal', 25, 20, 10, '661851385_product-5.png', 'Provides a good amount of fiber, vitamins and minerals in few calories.', 'Versatile ingredient that can be prepared and enjoyed in a variety of different ways.', 0, '', '', 1, '', 2),
(35, 10, 3, 'Chilli', 12, 10, 10, '701083866_product-6.png', '1 unit equals 100 gm.\r\n1 = 100gm', 'Health Benefits of Green ChilliesGreat for a healthy diet. ...Improve your skin regime. ...The perfect cure for a stressful week. ...Lower your body temperature. ...Natural source of iron. ...Balance blood sugar levels. ...Improve your immune system. ...Pain reliever, digestive and ulcer preventative.', 1, '', '', 0, '', 2),
(36, 10, 3, 'Carrot', 50, 45, 10, '386788652_product-7.png', '\"Raw carrots daily address the problem of constipation\"', 'Carrots are rich in beta-carotene, a compound your body changes into vitamin A, which helps keep your eyes healthy. And beta-carotene helps protect your eyes from the sun and lowers your chances of cataracts and other eye problems.', 0, '', '', 1, '', 2),
(37, 10, 3, 'Tomato', 35, 30, 10, '851950545_product-8.png', 'Good for the Skin and Hair .', 'Tomatoes are loaded with a substance called lycopene. It gives them their bright red color and helps protect them from the ultraviolet rays of the sun. In much the same way, it can help protect your cells from damage. Tomatoes also have potassium, vitamins B and E, and other nutrients.', 0, '', '', 1, '', 2),
(38, 10, 4, 'Potato', 20, 20, 6, '378299627_product-1.png', 'abcd', 'abcd', 1, '', '', 1, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `shiprocket_token`
--

CREATE TABLE `shiprocket_token` (
  `id` int(11) NOT NULL,
  `token` varchar(500) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shiprocket_token`
--

INSERT INTO `shiprocket_token` (`id`, `token`, `added_on`) VALUES
(1, 'randomtoken', '2020-11-03 00:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `sub_categories`, `status`) VALUES
(3, 10, 'GreenVeg', 1),
(4, 10, 'DailyUse', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `referral_code` varchar(20) NOT NULL,
  `refer_from` varchar(20) NOT NULL,
  `wallet` bigint(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `mobile`, `referral_code`, `refer_from`, `wallet`, `added_on`) VALUES
(1, 'Saurabh Kumar', 'saurabh', 'saurabhkm122@gmail.com', '9110131563', 'dukan', '', 600, '2020-11-07 05:28:15'),
(2, 'test2', 'test2', 'test2@gmail.com', '222222222', 'bbbb', 'dukan', 0, '2020-10-31 00:00:00'),
(3, 'test3', 'test3', 'test3@gmail.com', '333333333', 'cccc', 'dukan', 0, '2020-10-31 00:00:00'),
(4, 'test4', 'test4', 'test4@gmail.com', '444444444', 'dddd', 'dukan', 0, '2020-10-31 00:00:00'),
(5, 'test5', 'test5', 'test5@gmail.com', '555555555', 'eeee', 'dukan', 0, '2020-10-31 00:00:00'),
(6, 'test6', 'test6', 'test6@gmail.com', '666666666', 'ffff', 'dukan', 0, '2020-10-31 00:00:00'),
(7, 'test7', 'test7', 'test7@gmail.com', '777777777', 'gggg', 'dukan', 0, '2020-10-31 00:00:00'),
(8, 'test8', 'test8', 'test8@gmail.com', '888888888', 'hhhh', 'dukan', 0, '2020-10-31 00:00:00'),
(9, 'test9', 'test9', 'test9@gmail.com', '999999999', 'iiii', 'dukan', 0, '2020-10-31 00:00:00'),
(10, 'test10', 'test10', 'test10@gmail.com', '1010101010', 'jjjj', 'dukan', 0, '2020-10-31 00:00:00'),
(11, 'test11', 'test11', 'test11@gmail.com', '1111101111', 'kkkk', 'dukan', 0, '2020-10-31 00:00:00'),
(12, 'test12', 'test12', 'test12@gmail.com', '1212121212', 'llll', 'dukan', 0, '2020-10-31 00:00:00'),
(13, 'test13', 'test13', 'test13@gmail.com', '1313131313', 'mmmm', 'dukan', 0, '2020-10-31 00:00:00'),
(14, 'test1', 'test1', 'test1@gmail.com', '1111111111', 'aaaa', 'dukan', 0, '2020-10-31 00:00:00'),
(15, 'faizal', 'faizal', 'saurabhkm1223@gmail.com', '7633031942', 'gdyi', 'dukan', 0, '2020-11-07 05:31:26'),
(16, 'test16', 'test16', 'test16@gmail.com', '1616161616', 'nnnn', 'dukan', 0, '2020-10-31 00:00:00'),
(17, 'munna bhau', 'munna', 'saurabhm9110131563@gmail.com', '9471985732', 'hzze', 'gdyi', 0, '2020-11-08 09:29:03'),
(18, 'shambhu', 'shambhu', 'shambhukumar1sk1@gmail.com', '7004760318', 'ongz', 'gdyi', 60, '2020-11-08 12:47:26'),
(19, 'test19', 'test19', 'test19@gmsil.com', '1919191919', 'oooo', 'dukan', 0, '2020-10-31 00:00:00'),
(20, '000', '000000', '0000', '00000', 'kfoo', '', 0, '2021-03-08 11:29:12'),
(21, '1', '1', '1', '1', 'drtz', '', 0, '2021-03-08 11:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `added_on`) VALUES
(1, 1, 34, '2020-11-06 03:23:32'),
(2, 1, 38, '2020-11-11 10:19:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_master`
--
ALTER TABLE `coupon_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `coupon_master`
--
ALTER TABLE `coupon_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
