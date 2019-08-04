-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2019 at 09:14 AM
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
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `name`, `description`) VALUES
('CTP', 'Cetaphil', 'Originally dubbed \"Cetaphil Cleansing Lotion,\" the first product was invented by a pharmacist in 1947 for dermatology needs. In its early years, Cetaphil Cleansing Lotion was only available from select pharmacists but quickly became a highly recommended product by dermatologists, pediatricians, and other healthcare professionals for common skin conditions. Due to consumer demand, more drugstores began selling the increasingly popular cleanser and by the 1980s it was available at all major retail stores across North America.<br>\r\n<br>\r\nCetaphil® Gentle Skin Cleanser still uses the original formula developed in 1947. It remains in high demand, with about one bottle sold every minute - proving the popularity of our Gentle Power!'),
('EMN', 'Emina', 'Emina, everyday is a chance to play, try new things, shared laughter and happiness. Emina understand that pretty are simple and fun. You could be more beautiful not only in your happiness but by choosing the right makeup for your skin.<br>\r\n<br>\r\nEmina also understand the unique needs of your skin. That is why Emina presents a complete range of care products and cosmetics are safe to use and easy to apply for you. “Because you were born to beloved”'),
('ER', 'Erha ', ''),
('EW', 'Everwhite', ''),
('FNB', 'Fanbo', ''),
('INSF', 'Innisfree', ''),
('MCK', 'MakanCirikLalok', ''),
('MCKS', 'MakanCirikLalokSakit', ''),
('MO', 'Make Over', ''),
('MS', 'Mashami Shouko', ''),
('MYB', 'Maybelline ', ''),
('ND', 'NEOGEN DERMALOGY', ''),
('NTRE', 'Nature E', ''),
('NV', 'Nivea', ''),
('NYX', 'NYX PROFESSIONAL MAK', '<p><b>NYX PROFESSIONAL MAKEUP</b>, named after the ancient Greek goddess who ruled the night, uniquely offers a permanent collection of special-occasion makeup in addition to a solid selection of every day basics and on-trend shades.<br>\r\n\r\n<b>NYX PR'),
('PXY', 'Pixy', ''),
('SF', 'Safi', ''),
('tes', 'tes', ''),
('TO', 'The Ordinary', ''),
('tst', 'test ajah', ''),
('USC', 'UTAMA SPICE', ''),
('VSL', 'Vaseline', ''),
('WH', 'Wardah', ''),
('yeee', 'yeee', '');

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

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `name`) VALUES
('ID', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `detail_products`
--

CREATE TABLE `detail_products` (
  `id_detail_product` varchar(20) NOT NULL,
  `code_product` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_products`
--

INSERT INTO `detail_products` (`id_detail_product`, `code_product`) VALUES
('BAREPRM', 'BAREPRM'),
('CML', 'CML'),
('GSC', 'GSC'),
('NDRCMCO', 'NDRCMCO'),
('WHA', 'WHA');

-- --------------------------------------------------------

--
-- Table structure for table `detail_variants`
--

CREATE TABLE `detail_variants` (
  `id_detail_product` varchar(20) NOT NULL,
  `color_id` int(11) NOT NULL,
  `shade_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `weight_id` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `photo_url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_variants`
--

INSERT INTO `detail_variants` (`id_detail_product`, `color_id`, `shade_id`, `size_id`, `weight_id`, `discount`, `price`, `stock`, `photo_url`) VALUES
('NDRCMCO', 0, 0, 0, 6, 30, 445500, 10, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/8/2/4/6/28246-large_default.jpg'),
('GSC', 0, 0, 6, 0, 25, 419000, 50, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/4/6/8/2/14682-large_default.jpg'),
('GSC', 0, 0, 7, 0, 40, 125000, 50, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/6/7/3/1/16731-large_default.jpg'),
('GSC', 0, 0, 8, 0, 0, 164000, 50, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/4/6/8/0/14680-large_default.jpg'),
('GSC', 0, 0, 9, 0, 30, 238000, 50, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/4/6/8/1/14681-large_default.jpg'),
('GSC', 0, 0, 10, 0, 35, 59000, 50, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/6/7/3/1/16731-large_default.jpg'),
('WHA', 0, 0, 11, 0, 0, 87000, 24, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/9/6/3/8/19638-large_default.jpg'),
('WHA', 0, 0, 12, 0, 0, 191000, 24, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/9/6/4/0/19640-large_default.jpg'),
('CML', 9, 7, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/9/4/8/3/19483-large_default.jpg'),
('CML', 10, 8, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/9/4/8/4/19484-large_default.jpg'),
('CML', 11, 9, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/9/0/0/3/9003-large_default.jpg'),
('CML', 12, 10, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/9/4/8/5/19485-large_default.jpg'),
('CML', 13, 11, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/9/4/8/7/19487-large_default.jpg'),
('CML', 14, 13, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/9/4/8/9/19489-large_default.jpg'),
('CML', 15, 14, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/9/0/0/4/9004-large_default.jpg'),
('CML', 16, 15, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/9/0/0/6/9006-large_default.jpg'),
('CML', 17, 16, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/9/0/0/5/9005-large_default.jpg'),
('CML', 18, 17, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/9/0/0/3/9003-large_default.jpg'),
('CML', 19, 18, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/9/0/0/7/9007-large_default.jpg'),
('CML', 20, 19, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/9/0/1/3/9013-large_default.jpg'),
('CML', 21, 20, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/9/4/8/6/19486-large_default.jpg'),
('CML', 22, 21, 0, 0, 0, 47500, 100, 'https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/9/0/0/8/9008-large_default.jpg');

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
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `brand_id` varchar(11) NOT NULL,
  `id_subcategory` varchar(11) NOT NULL,
  `discount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`code_product`, `name`, `description`, `brand_id`, `id_subcategory`, `discount`) VALUES
('BAREPRM', 'Bare With Me Prime Set Refresh', '<p>Put on a fresh face dengan Bare With Me Prime. Set. Refresh. Multitasking Spray. Mengandung ekstrak Aloe Vera & Cucumber, sehingga friendly untuk kulit sensitif. Hanya dengan beberapa semprotan untuk hasil complexion lebih fresh. Spray multiguna i', 'NYX', 'PR', NULL),
('CML', 'Creamatte Lipstick', 'Creamatte Lipstick adalah lipstik dari brand lokal asal Indonesia yang digemari oleh para remaja!<br>\n\nEmina Creamatte merupakan liquid lip cream dengan efek matte namun tidak membuat bibir kiring karena mengandung vitamin E. Teksturnya yang soft dan velvety, membuat Emina Creamatte mudah dioleskan pada bibir. Krim bibir yang luar biasa dan tak tertahankan dengan finishing matte intens yang akan membuat Anda menempel. Dengan ekstrak macadamia, krim bibir ini mudah diaplikasikan namun tetap menjaga kelembaban bibir Anda. Emina Creamatte memiliki tekstur creamy yang cukup thick tapi tetap mudah diaplikasikan karena dapat glide perfectly di bibir. Tekstur creamy-nya akan terasa lembut dan nyaman ketika diaplikasikan dan akan berubah menjadi dry soft setelah set di bibir. Teksturnya yang tidak akan membuat lip cream nya menggumpal di bibirmu karena terlalu tebal. Diperkaya dengan vitamin E yang akan membuat bibirmu tetap lembab ketika terlihat matte.<br>\n<br>\n<b>Cara Pemakaian :</b>\n<br>\nA', 'EMN', 'LCRM', NULL),
('GSC', 'Gentle Skin Cleanser', 'Pembersih wajah dan tubuh yang lembut, mampu menenangkan dan membersihkan kulit tanpa menyebabkan iritasi.<br>\n<br>\nFormulanya yang bebas sabun telah memenangkan banyak penghargaan dari orang-orang dalam industri kecantikan dan komunitas perawatan kesehatan. Sifatnya yang lembut dan tidak menyebabkan iritasi menenangkan kulit Anda saat membersihkan. Cetaphil Gentle Skin Cleanser diformulasikan untuk bekerja pada semua jenis kulit, bahkan untuk bayi.<br>\n<br>\nCocok untuk semua jenis kulit Ideal untuk wajah dan tubuh. Bekerja tanpa menyebabkan iritasi kulit, formulasi pH non-sabun yang seimbang. Dapat digunakan dengan atau tanpa air.<br>\n<br>\nHOW TO USE :<br>\n<br>\n\nAmbil secukupnya dan aplikasikan kepada wajah, bilas dengan air hingga bersih. Dipakai pagi dan malam hari.', 'CTP', 'CLS', NULL),
('NDRCMCO', 'Neogen Dermalogy Real Cica Micellar Cleansing Oil', 'Neogen Dermalogy Real Cica Micellar Cleansing Oil merupakan pembersih wajah yang mengandung Centella Asiatica dan madecassoside, yang memiliki manfaat untuk meredakan inflamasi dan menghidrasi kulit.<br>\n<br>\nIngredient<br>\nIsopropyl Palmitate, Caprylic/Capric Triglyceride, PEG-20 Glyceryl Triisostearate, Glycine Soja (Soybean) Oil, Ethylhexylglycerin, Olea Europaea (Olive) Fruit Oil, Water, Ceramide NP, Allantoin, Panthenol, Centella Asiatica Extract, Butylene Glycol, Asiaticoside, Madecassic Acid, Asiatic Acid, 1,2-Hexanediol, Hyaluronic Acid, Madecassoside, Hydrolyzed Hyaluronic Acid, Sodium Hyaluronate, Citrus Aurantium Bergamia (Bergamot) Fruit Oil.', 'ND', 'CO', NULL),
('WHA', 'Witch Hazel Astringent', 'Produk multiguna ini sangat bermanfaat bagi kulit. Tidak mengandung bahan-bahan kimia atau sintetis, kandungan anti-inflamasi alaminya dapat membantu menenangkan dan meredakan kerusakan kulit, seperti eczema, kulit terbakar dan jerawat.<br>\n<br>\nWitch hazel mengandung natural tannins dan polyphenols yang mampu mengurangi tanda-tanda penuaan, sekaligus melindungi sel-sel kulit dari kerusakan akibat sinar matahari. <br>\n<br>\nCara Penggunaan:<br>\n<br>\nDapat digunakan sebagai facial toner yang mampu menghilangkan racun, menyerap minyak berlebih dan mengurangi tanda-tanda penuaan. \nTuangkan pada kapas, lalu usapkan pada wajah secara rutin. <br>', 'USC', 'OTHR', NULL);

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
('CL', 'Cleanser', 'SC'),
('CLB2', 'Cleanser', 'BB'),
('EYE', 'Eyes', 'MU'),
('FC', 'Face', 'MU'),
('HT', 'Hair Treatments', 'HC'),
('HTOOL', 'Hair Tools', 'HC'),
('LPS', 'Lips', 'MU'),
('LSH', 'Lashes', 'MU'),
('MRM', 'Makeup Remover', 'MU'),
('MS', 'Moisturizer', 'SC'),
('MSB2', 'Moisturizer', 'BB'),
('NA', 'Nail Arts', 'NL'),
('NKS', 'Nail Kits & Sets', 'NL'),
('NP', 'Nail Polish', 'NL'),
('NT', 'Nail Treament', 'NL'),
('OTHR', 'Other', 'SC'),
('OTHRB2', 'Other', 'BB'),
('OTHRHC', 'Other', 'HC'),
('PLTS', 'Pallete & Sets', 'MU'),
('PR', 'Polish Remover', 'NL'),
('SHMP', 'Shampoo', 'HC'),
('STY', 'Styling', 'HC'),
('TL', 'Tools', 'MU'),
('TR', 'Treatment', 'BB'),
('TRT', 'Treatment', 'SC');

-- --------------------------------------------------------

--
-- Table structure for table `product_subcategories`
--

CREATE TABLE `product_subcategories` (
  `id_subcategory` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_category` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_subcategories`
--

INSERT INTO `product_subcategories` (`id_subcategory`, `name`, `id_category`) VALUES
('ABT', 'Acne & Blemish Treat', 'TRT'),
('BCC', 'BB & CC Cream', 'FC'),
('BL', 'Blush', 'FC'),
('BR', 'Bronzer', 'FC'),
('BS', 'Brush Sets', 'BRSH'),
('BTC', 'Base & Top Coat', 'NP'),
('CLR', 'Concealer', 'FC'),
('CLS', 'Cleanser', 'CL'),
('CND', 'Conditioner', 'SHMP'),
('CO', 'Cleansing Oil', 'CL'),
('COLR', 'Colour', 'NP'),
('DS', 'Dry Shampoo', 'SHMP'),
('EB', 'Eye Brushes', 'BRSH'),
('ET', 'Eye Treatment', 'TRT'),
('FB', 'Face Brushes', 'BRSH'),
('FCH', 'Flat Irons, Curling ', 'HTOOL'),
('FM', 'Face Mask', 'TRT'),
('FMST', 'face Mist', 'TRT'),
('FND', 'Foundation', 'FC'),
('FO', 'Face Oil', 'MS'),
('FP', 'Face Peels', 'TRT'),
('FS', 'Face Serum', 'TRT'),
('HA', 'Hair Ampule', 'HT'),
('HBC', 'Hair Brushes & Combs', 'HTOOL'),
('HC', 'Hair Color', 'STY'),
('HD', 'Hair Dryers', 'HTOOL'),
('HM', 'Hair Mask', 'HT'),
('HO', 'Hair Oil', 'HT'),
('HP', 'Heat Protectant', 'STY'),
('HS', 'Hair Serum', 'HT'),
('HSCS', 'Hair Styling Cream &', 'STY'),
('ILL', 'Illuminator', 'FC'),
('LB', 'Lip Balm', 'LPS'),
('LBRSH', 'Lip Brushes', 'BRSH'),
('LC', 'LipCaryon', 'LPS'),
('LCRM', 'Lip Cream', 'LPS'),
('LG', 'Lip Gloss', 'LPS'),
('LL', 'Lip Liner', 'LPS'),
('LP', 'Lip Primer', 'LPS'),
('LPSCK', 'Lipstick', 'LPS'),
('LPW', 'Loose Powder', 'FC'),
('MR', 'Makeup Remover', 'CL'),
('MS', 'Moisturizer', 'MS'),
('MULTI', 'Multi-Use', 'BRSH'),
('naillss', 'yayayaa', 'NA'),
('NS', 'Nail Stickers', 'NA'),
('OTHR', 'Other', 'OTHR'),
('OTHRNKS', 'Other', 'NKS'),
('OTHRNT', 'Other', 'NT'),
('OTHRPR', 'Other', 'PR'),
('PPW', 'Pressed Powder', 'FC'),
('PR', 'Primer', 'FC'),
('SCR', 'Scrubs', 'TRT'),
('SHMP', 'Shampoo', 'SHMP'),
('SPA', 'Sponge & Applicators', 'BRSH'),
('TM', 'Tinted Moisturizer', 'FC'),
('TMS', 'Tinted Moisturizer', 'MS'),
('TN', 'Toner', 'CL'),
('WGP', 'Wax, Gel, Pomade', 'STY');

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
('ACC', 'Accessories'),
('BB', 'Bath & Body'),
('FR', 'Fragrance'),
('HC', 'Hair Care'),
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
-- Table structure for table `variant_colors`
--

CREATE TABLE `variant_colors` (
  `color_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `value` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variant_colors`
--

INSERT INTO `variant_colors` (`color_id`, `name`, `value`) VALUES
(0, 'Tidak ada varian', ''),
(9, '08 Pumpkin Spice', '#b8777b'),
(10, '09 Baby Fox', '#c37568'),
(11, '10 Star Fish', '#c35f61'),
(12, '11 Amaze Balls', '#b86e6f'),
(13, '13 Beet Bites', '#985869'),
(14, '15 Choco Puff', '#8e6d66'),
(15, 'Chocolava', '#7c4739'),
(16, 'Flamingo', '#ba293a'),
(17, 'Frostbite', '#e06d8e'),
(18, 'Fuzzy Wuzzy', '#b36865'),
(19, 'Jellybean', '#810f0e'),
(20, 'Mauvelous', '#b3595b'),
(21, 'Perky Plum.', '#ffffff'),
(22, 'Tumbleweed', '#d75b5b');

-- --------------------------------------------------------

--
-- Table structure for table `variant_shades`
--

CREATE TABLE `variant_shades` (
  `shade_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `value` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variant_shades`
--

INSERT INTO `variant_shades` (`shade_id`, `name`, `value`) VALUES
(0, 'Tidak ada varian', ''),
(7, '08 Pumpkin Spice', '08 Pumpkin Spice'),
(8, '09 Baby Fox', '09 Baby Fox'),
(9, '10 Star Fish', '10 Star Fish'),
(10, '11 Amaze Balls', '11 Amaze Balls'),
(11, ' 13 Beet Bites', ' 13 Beet Bites'),
(12, '14 Ginger Ale', '14 Ginger Ale'),
(13, '15 Choco Puff', '15 Choco Puff'),
(14, ' Chocolava', ' Chocolava'),
(15, 'Flamingo', 'Flamingo'),
(16, 'Frostbite', 'Frostbite'),
(17, 'Fuzzy Wuzzy', 'Fuzzy Wuzzy'),
(18, 'Jellybean', 'Jellybean'),
(19, 'Mauvelous', 'Mauvelous'),
(20, 'Perky Plum.', 'Perky Plum.'),
(21, 'Tumbleweed', 'Tumbleweed');

-- --------------------------------------------------------

--
-- Table structure for table `variant_size`
--

CREATE TABLE `variant_size` (
  `size_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `value` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variant_size`
--

INSERT INTO `variant_size` (`size_id`, `name`, `value`) VALUES
(0, 'Tidak ada varian', ''),
(6, 'Size 1', '1000 ml'),
(7, 'Size 2', '125 ml'),
(8, 'Size 3', '250 ml'),
(9, 'Size 4', '500 ml'),
(10, 'Size 5', '59 ml'),
(11, 'Size 6', '100 ml'),
(12, 'Size 7', '230 ml');

-- --------------------------------------------------------

--
-- Table structure for table `variant_weight`
--

CREATE TABLE `variant_weight` (
  `weight_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `value` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variant_weight`
--

INSERT INTO `variant_weight` (`weight_id`, `name`, `value`) VALUES
(0, 'Tidak ada varian', ''),
(6, 'Size 1', '300 gr');

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
  ADD KEY `code_product` (`code_product`);

--
-- Indexes for table `detail_variants`
--
ALTER TABLE `detail_variants`
  ADD PRIMARY KEY (`color_id`,`shade_id`,`size_id`,`weight_id`,`id_detail_product`) USING BTREE,
  ADD KEY `id_detail_product` (`id_detail_product`),
  ADD KEY `size_variant` (`size_id`),
  ADD KEY `shade_variant` (`shade_id`),
  ADD KEY `weight_variant` (`weight_id`),
  ADD KEY `color_id` (`color_id`);

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
-- Indexes for table `variant_colors`
--
ALTER TABLE `variant_colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `variant_shades`
--
ALTER TABLE `variant_shades`
  ADD PRIMARY KEY (`shade_id`);

--
-- Indexes for table `variant_size`
--
ALTER TABLE `variant_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `variant_weight`
--
ALTER TABLE `variant_weight`
  ADD PRIMARY KEY (`weight_id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`kode_voucher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `variant_colors`
--
ALTER TABLE `variant_colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `variant_shades`
--
ALTER TABLE `variant_shades`
  MODIFY `shade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `variant_size`
--
ALTER TABLE `variant_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `variant_weight`
--
ALTER TABLE `variant_weight`
  MODIFY `weight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `detail_products_ibfk_1` FOREIGN KEY (`code_product`) REFERENCES `products` (`code_product`);

--
-- Constraints for table `detail_variants`
--
ALTER TABLE `detail_variants`
  ADD CONSTRAINT `color_variant` FOREIGN KEY (`color_id`) REFERENCES `variant_colors` (`color_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_variants_ibfk_1` FOREIGN KEY (`id_detail_product`) REFERENCES `detail_products` (`id_detail_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shade_variant` FOREIGN KEY (`shade_id`) REFERENCES `variant_shades` (`shade_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `size_variant` FOREIGN KEY (`size_id`) REFERENCES `variant_size` (`size_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `weight_variant` FOREIGN KEY (`weight_id`) REFERENCES `variant_weight` (`weight_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
