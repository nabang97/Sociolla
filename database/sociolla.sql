-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 03:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sociolla`
--

-- --------------------------------------------------------

--
-- Table structure for table `bags`
--

CREATE TABLE `bags` (
  `id_detail_product` varchar(20) NOT NULL,
  `order_number` varchar(11) NOT NULL,
  `quantity` int(6) NOT NULL,
  `subtotal` int(12) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beauty_point`
--

CREATE TABLE `beauty_point` (
  `user` varchar(20) NOT NULL,
  `order_num` varchar(11) NOT NULL,
  `income_point` int(12) NOT NULL,
  `outcome_point` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `name`, `description`) VALUES
('CTP', 'Cetaphil', ''),
('ER', 'Erha ', ''),
('EW', 'Everwhite', ''),
('FNB', 'Fanbo', ''),
('INSF', 'Innisfree', ''),
('MO', 'Make Over', ''),
('MS', 'Mashami Shouko', ''),
('MYB', 'Maybelline ', ''),
('NTRE', 'Nature E', ''),
('NV', 'Nivea', ''),
('PXY', 'Pixy', ''),
('SF', 'Safi', ''),
('TO', 'The Ordinary', ''),
('VSL', 'Vaseline', ''),
('WH', 'Wardah', '');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `province_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_products`
--

CREATE TABLE `detail_products` (
  `id_detail_product` varchar(20) NOT NULL,
  `code_product` varchar(15) NOT NULL,
  `id_variant` varchar(11) NOT NULL,
  `variant` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_variants`
--

CREATE TABLE `detail_variants` (
  `id_detail_product` varchar(20) NOT NULL,
  `id_type` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_number` varchar(11) NOT NULL,
  `date_order` date NOT NULL,
  `customer` varchar(20) NOT NULL,
  `shipping_address` varchar(11) NOT NULL,
  `payment_method` varchar(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `savings` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_confirmation`
--

CREATE TABLE `payment_confirmation` (
  `order_number` varchar(11) NOT NULL,
  `confirm_date` date NOT NULL,
  `account_number` varchar(12) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `bank_transfer` varchar(11) NOT NULL,
  `payment_proof` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_system`
--

CREATE TABLE `payment_system` (
  `id_payment` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_types` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id_type` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `code_product` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  `brand_id` varchar(11) NOT NULL,
  `id_subcategory` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products_gallery`
--

CREATE TABLE `products_gallery` (
  `photo_url` varchar(100) NOT NULL,
  `id_detail_products` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id_category` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id_category`, `name`, `id_type`) VALUES
('BRSH', 'Brushes', 'MU'),
('BRW', 'Brows', 'MU'),
('EYE', 'Eyes', 'MU'),
('FC', 'Face', 'MU'),
('LPS', 'Lips', 'MU'),
('LSH', 'Lashes', 'MU'),
('MRM', 'Makeup Remover', 'MU'),
('PLTS', 'Pallete & Sets', 'MU'),
('TL', 'Tools', 'MU');

-- --------------------------------------------------------

--
-- Table structure for table `product_subcategories`
--

CREATE TABLE `product_subcategories` (
  `id_subcategory` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_category` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id_type` varchar(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id_type`, `name`) VALUES
('MU', 'Makeup'),
('NL', 'Nails'),
('SC', 'Skincare');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `province_id` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `country_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `id_address` varchar(11) NOT NULL,
  `customer` varchar(20) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `subdistrict` int(11) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `address_title` varchar(12) NOT NULL,
  `default_address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subdistricts`
--

CREATE TABLE `subdistricts` (
  `id_subdistrict` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_city` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(20) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `variant_types`
--

CREATE TABLE `variant_types` (
  `id_type` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `kode_voucher` varchar(12) NOT NULL,
  `description` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status_voucher` int(2) NOT NULL,
  `discount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bags`
--
ALTER TABLE `bags`
  ADD PRIMARY KEY (`id_detail_product`,`order_number`),
  ADD KEY `id_detail_product` (`id_detail_product`,`order_number`),
  ADD KEY `order_number` (`order_number`);

--
-- Indexes for table `beauty_point`
--
ALTER TABLE `beauty_point`
  ADD PRIMARY KEY (`user`,`order_num`),
  ADD KEY `user` (`user`,`order_num`),
  ADD KEY `order_num` (`order_num`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `detail_products`
--
ALTER TABLE `detail_products`
  ADD PRIMARY KEY (`id_detail_product`),
  ADD KEY `code_product` (`code_product`,`id_variant`),
  ADD KEY `id_variant` (`id_variant`);

--
-- Indexes for table `detail_variants`
--
ALTER TABLE `detail_variants`
  ADD PRIMARY KEY (`id_detail_product`,`id_type`),
  ADD KEY `id_detail_product` (`id_detail_product`,`id_type`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_number`),
  ADD KEY `customer` (`customer`),
  ADD KEY `payment_method` (`payment_method`),
  ADD KEY `shipping_address` (`shipping_address`);

--
-- Indexes for table `payment_confirmation`
--
ALTER TABLE `payment_confirmation`
  ADD PRIMARY KEY (`order_number`,`confirm_date`),
  ADD KEY `order_number` (`order_number`);

--
-- Indexes for table `payment_system`
--
ALTER TABLE `payment_system`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `id_types` (`id_types`);

--
-- Indexes for table `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`code_product`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `id_subcategory` (`id_subcategory`);

--
-- Indexes for table `products_gallery`
--
ALTER TABLE `products_gallery`
  ADD PRIMARY KEY (`photo_url`),
  ADD KEY `id_detail_products` (`id_detail_products`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `product_subcategories`
--
ALTER TABLE `product_subcategories`
  ADD PRIMARY KEY (`id_subcategory`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`province_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`id_address`),
  ADD KEY `subdistrict` (`subdistrict`),
  ADD KEY `customer` (`customer`);

--
-- Indexes for table `subdistricts`
--
ALTER TABLE `subdistricts`
  ADD PRIMARY KEY (`id_subdistrict`),
  ADD KEY `id_city` (`id_city`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `variant_types`
--
ALTER TABLE `variant_types`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`kode_voucher`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bags`
--
ALTER TABLE `bags`
  ADD CONSTRAINT `bags_ibfk_1` FOREIGN KEY (`order_number`) REFERENCES `orders` (`order_number`),
  ADD CONSTRAINT `bags_ibfk_2` FOREIGN KEY (`id_detail_product`) REFERENCES `detail_products` (`id_detail_product`);

--
-- Constraints for table `beauty_point`
--
ALTER TABLE `beauty_point`
  ADD CONSTRAINT `beauty_point_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `beauty_point_ibfk_2` FOREIGN KEY (`order_num`) REFERENCES `orders` (`order_number`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`province_id`);

--
-- Constraints for table `detail_products`
--
ALTER TABLE `detail_products`
  ADD CONSTRAINT `detail_products_ibfk_2` FOREIGN KEY (`code_product`) REFERENCES `products` (`code_product`),
  ADD CONSTRAINT `detail_products_ibfk_3` FOREIGN KEY (`id_variant`) REFERENCES `variant_types` (`id_type`);

--
-- Constraints for table `detail_variants`
--
ALTER TABLE `detail_variants`
  ADD CONSTRAINT `detail_variants_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `variant_types` (`id_type`),
  ADD CONSTRAINT `detail_variants_ibfk_2` FOREIGN KEY (`id_detail_product`) REFERENCES `detail_products` (`id_detail_product`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`payment_method`) REFERENCES `payment_system` (`id_payment`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`shipping_address`) REFERENCES `shipping_address` (`id_address`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`customer`) REFERENCES `users` (`email`);

--
-- Constraints for table `payment_confirmation`
--
ALTER TABLE `payment_confirmation`
  ADD CONSTRAINT `payment_confirmation_ibfk_1` FOREIGN KEY (`order_number`) REFERENCES `orders` (`order_number`);

--
-- Constraints for table `payment_system`
--
ALTER TABLE `payment_system`
  ADD CONSTRAINT `payment_system_ibfk_1` FOREIGN KEY (`id_types`) REFERENCES `payment_types` (`id_type`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_subcategory`) REFERENCES `product_subcategories` (`id_subcategory`);

--
-- Constraints for table `products_gallery`
--
ALTER TABLE `products_gallery`
  ADD CONSTRAINT `products_gallery_ibfk_1` FOREIGN KEY (`id_detail_products`) REFERENCES `detail_products` (`id_detail_product`);

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `product_types` (`id_type`);

--
-- Constraints for table `product_subcategories`
--
ALTER TABLE `product_subcategories`
  ADD CONSTRAINT `product_subcategories_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `product_categories` (`id_category`);

--
-- Constraints for table `provinces`
--
ALTER TABLE `provinces`
  ADD CONSTRAINT `provinces_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`);

--
-- Constraints for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD CONSTRAINT `shipping_address_ibfk_1` FOREIGN KEY (`subdistrict`) REFERENCES `subdistricts` (`id_subdistrict`);

--
-- Constraints for table `subdistricts`
--
ALTER TABLE `subdistricts`
  ADD CONSTRAINT `subdistricts_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `cities` (`city_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
