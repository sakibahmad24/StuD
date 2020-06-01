-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2020 at 03:47 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technqm3_stud`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `brand_category` varchar(255) DEFAULT NULL,
  `brand_image` text,
  `brand_active` varchar(255) DEFAULT NULL,
  `brand_created_at` varchar(255) DEFAULT NULL,
  `brand_updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_category`, `brand_image`, `brand_active`, `brand_created_at`, `brand_updated_at`) VALUES
(1, 'Madchef', 'food', 'madchef.jpg', 'active', NULL, 'March 8, 2020, 7:00 pm'),
(2, 'Stubborn Goat', 'food', 'stub_goat.png', 'active', 'March 27, 2020, 11:04 pm', 'March 8, 2020, 6:57 pm'),
(4, 'Yellow', 'fashion', 'yellow-clothing-gulshan1.jpg', 'active', 'March 28, 2020, 11:30 pm', NULL),
(5, 'Fitness Plus BD', 'health', 'fplus.png', 'active', 'March 30, 2020, 5:05 pm', NULL),
(6, 'Astorion', 'fashion', 'astorion.png', 'active', 'April 23, 2020, 9:00 pm', NULL),
(7, 'Persona', 'beauty', 'persona.png', 'active', 'April 24, 2020, 12:10 pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_id` int(11) NOT NULL,
  `offer_name` varchar(255) DEFAULT NULL,
  `offer_details` text,
  `offer_brand` varchar(255) DEFAULT NULL,
  `offer_category` varchar(255) DEFAULT NULL,
  `offer_isFeatured` int(11) DEFAULT NULL,
  `offer_image` text,
  `offer_created_at` varchar(255) DEFAULT NULL,
  `offer_updated_at` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offer_id`, `offer_name`, `offer_details`, `offer_brand`, `offer_category`, `offer_isFeatured`, `offer_image`, `offer_created_at`, `offer_updated_at`) VALUES
(2, '40% Cashback offer at Madchef', 'Get exciting flat 40% cashback on purchases of BDT 500 or above at any shop of MadChef! Applicable for StuD users only.', NULL, 'food', 1, 'madchef14.jpg', 'March 11, 2020, 6:44 pm', 0),
(3, 'Hot Deals at Stubborn Goat', 'Get buy 1 get 2 free at Stubborn Goat for StuD premium users only', 'Stubborn Goat', 'food', 1, 'stubborn_goat.png', 'March 11, 2020, 10:42 pm', 0),
(4, 'Flash sales!!', 'Astorion Exclusive flash sales at half price', NULL, 'fashion', 1, 'astorion.png', 'March 11, 2020, 10:44 pm', NULL),
(5, 'Upto 100% Discount', 'Get upto 100% discount of the eve of Mujib Borsho!', 'Stubborn Goat', 'food', 1, 'code.png', 'March 11, 2020, 10:46 pm', 0),
(6, 'Independece Sale - 22% Cashback', 'Get exciting flat 22% cashback on purchases of BDT 1000 or above at any shop of Yellow! Applicable for StuD users only.', 'Yellow', 'fashion', 1, 'yellow-clothing-gulshan.jpg', 'March 15, 2020, 1:03 am', 0),
(7, 'Mujib Borsho Special', 'Get buy 1 get 3 free at Madchef on the eve of Mujib Borsho for StuD premium users only! #JoyBangla', 'Stubborn Goat', 'food', 1, 'madchef24.jpg', 'March 16, 2020, 5:14 pm', 0),
(8, 'Madchef Reopening', 'Get 5% instant cashback on your purchase from 8th to 10 April. Available for any item and at any outlet', 'Madchef', 'food', 1, 'mad.jpg', 'March 30, 2020, 1:48 am', 0),
(9, 'Persona Offer', '35% Cashback offer at Persona', 'Persona', 'beauty', 1, 'persona.png', 'April 24, 2020, 12:12 pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `report_review_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `report_userphone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `report_username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_reported` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `report_review_id`, `report_userphone`, `report_username`, `is_reported`, `updated_at`) VALUES
(2, '20', '01676451865', 'Kazi Sakib Ahmad', '1', 'May 29, 2020, 3:04 am'),
(3, '10', '01676451865', 'Kazi Sakib Ahmad', '1', 'May 29, 2020, 3:05 am'),
(4, '18', '01676451865', 'Kazi Sakib Ahmad', '1', 'May 30, 2020, 7:39 pm'),
(5, '6', '01676451865', 'Kazi Sakib Ahmad', '1', 'May 30, 2020, 7:40 pm');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review_sale_id` int(11) DEFAULT NULL,
  `review_sale_cat` varchar(255) DEFAULT NULL,
  `review_rating` int(11) DEFAULT NULL,
  `review_title` text,
  `review_subtitle` mediumtext,
  `review_body` longtext,
  `review_user_phone` varchar(255) DEFAULT NULL,
  `review_image` text,
  `review_created_at` varchar(255) DEFAULT NULL,
  `review_updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `review_sale_id`, `review_sale_cat`, `review_rating`, `review_title`, `review_subtitle`, `review_body`, `review_user_phone`, `review_image`, `review_created_at`, `review_updated_at`) VALUES
(5, 2, 'food', 2, 'MadChef', 'MadChef MadChef', 'MadChef MadChef MadChef MadChef', '01624585608', 'madchef1.jpg', '2020-03-02 12:46:22', '0000-00-00 00:00:00'),
(6, 3, 'food', 5, 'My first visit at Stubborn Goat', 'I just loved their foods', 'aSDASFFGHJFTHDSFDFHFGJGHJGHJFJHG', '01676451865', 'stub_goat2.png', '2020-03-02 12:47:05', '0000-00-00 00:00:00'),
(10, 6, 'food', 4, 'Good Food', 'Juicy Burger', 'Their burger was just amazing.Loved it.', '01777977297', 'burger.jpg', '2020-03-04 14:18:44', '0000-00-00 00:00:00'),
(15, 10, 'fashion', 5, 'What is Lorem Ipsum?', 'NULL', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '01624585608', 'mens-casual2.jpg', '0000-00-00 00:00:00', NULL),
(16, 14, 'fashion', 4, 'Bought a shirt', 'NULL', 'Just liked the fabric and overall quality', '01624585608', 'shirt21.jpg', '0000-00-00 00:00:00', NULL),
(17, 15, 'health', 5, 'Excellent fitness center', 'NULL', 'Hello guys, I\'m here to introduce you to an excellent fitness center I just visited here in Gulshan. Their services are just outstanding. I am giving a 5 star rating', '01624585608', 'firness1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 16, 'food', 5, 'Madchef is good', 'NULL', 'Madchef iasdasfdsdfgf', '01624585608', 'burger.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 15, 'health', 3, 'Best ever experience ', 'NULL', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '01624585608', 'fbd1.jpg', 'May 11, 2020, 9:12 pm', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id` int(11) NOT NULL,
  `sale_brand_name` varchar(255) DEFAULT NULL,
  `sale_sold_by` varchar(255) DEFAULT NULL,
  `sale_brand_category` varchar(255) DEFAULT NULL,
  `sale_phone_number` varchar(255) DEFAULT NULL,
  `sale_promocode` varchar(255) DEFAULT NULL,
  `sale_time` varchar(255) DEFAULT NULL,
  `sale_review` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sale_id`, `sale_brand_name`, `sale_sold_by`, `sale_brand_category`, `sale_phone_number`, `sale_promocode`, `sale_time`, `sale_review`) VALUES
(2, 'Madchef', NULL, 'food', '01624585608', 'stud_65432', '2020-03-01 12:51:25', 1),
(3, 'Stubborn Goat', NULL, 'food', '01676451865', 'stud_12456', '2020-03-01 13:43:03', 1),
(5, 'Stubborn Goat', NULL, 'food', '01888057177', 'stud_2f403', '2020-03-03 00:56:42', 1),
(6, 'Madchef', NULL, 'food', '01777977297', 'stud_f2885', '2020-03-04 14:15:22', 1),
(7, 'Yellow', NULL, 'fashion', '01888057177', 'stud_2f403', '2020-03-16 05:40:13', 1),
(8, 'Fitness Plus BD', NULL, 'health', '01888057177', 'stud_2f403', '2020-04-22 14:07:52', 1),
(9, 'Stubborn Goat', NULL, 'food', '0167645186598', 'sdfsdf', '2020-04-23 08:28:54', NULL),
(13, 'Fitness Plus BD', NULL, 'health', '01624585608', 'stud_3666e', '2020-04-21 17:04:27', 1),
(14, 'Yellow', NULL, 'fashion', '01624585608', 'stud_3666e', '2020-04-23 18:04:25', 1),
(15, 'Fitness Plus BD', NULL, 'health', '01624585608', 'stud_3666e', '2020-04-23 18:06:51', 1),
(16, 'Madchef', NULL, 'food', '01624585608', 'stud_3666e', '2020-04-24 00:18:39', 1),
(17, 'Stubborn Goat', NULL, 'food', '01624585608', 'stud_3666e', '2020-04-24 00:21:57', NULL),
(18, 'Yellow', NULL, 'fashion', '01624585608', 'stud_3666e', '2020-05-14 01:28:22', NULL),
(21, 'Madchef', NULL, 'food', '01624585608', 'stud_3666e', '2020-05-15 04:35:42', NULL),
(24, 'Yellow', NULL, 'fashion', '01912844995', 'stud_58934', 'May 16, 2020, 12:57 am', NULL),
(25, 'Persona', NULL, 'beauty', '01912844995', 'stud_58934', 'May 16, 2020, 1:30 am', NULL),
(26, 'Yellow', NULL, 'fashion', '01912844995', 'stud_58934', 'May 16, 2020, 1:31 am', NULL),
(27, 'Persona', NULL, 'beauty', '01912844995', 'stud_58934', 'May 16, 2020, 1:31 am', NULL),
(28, 'Madchef', NULL, 'food', '01912844995', 'stud_58934', 'May 16, 2020, 2:16 am', NULL),
(30, 'Persona', 'madchef@gmail.com', 'beauty', '01676451865', 'stud_3666r', 'May 31, 2020, 6:05 pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) DEFAULT NULL,
  `slider_title` varchar(500) DEFAULT NULL,
  `slider_subtitle` varchar(500) DEFAULT NULL,
  `slider_image` varchar(255) DEFAULT NULL,
  `slider_isActive` int(11) DEFAULT NULL,
  `slider_brand_category` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_title`, `slider_subtitle`, `slider_image`, `slider_isActive`, `slider_brand_category`, `created_at`, `updated_at`) VALUES
(3, 'Madchef', 'Madchef Slider', 'Madchef  New Subtitle', 'madchef11.jpg', 0, 'food', '2020-03-07 18:44:17', 'May 15, 2020, 11:13 pm'),
(4, 'Stubborn Goat', 'Stubborn Goat', '15% OFF', 'stubborn_goat3.png', 1, 'food', '2020-03-07 18:45:37', 'May 30, 2020, 8:09 pm'),
(5, 'Astorion', 'Winter Sale', '35% flat discount', 'astorion.png', 1, 'fashion', '2020-03-07 20:48:08', '0000-00-00 00:00:00'),
(8, 'Yellow', 'Reopening Cashback', 'Get 5% instant cashback on your total bill once we resume our service', 'yellow.jpg', 1, 'fashion', 'March 30, 2020, 1:41 am', 'March 30, 2020, 1:44 am'),
(9, 'Fitness Plus BD', '30% Discount', 'Flat 25% discount available for fitness lover students', 'firness.jpg', 1, 'health', 'April 24, 2020, 6:20 am', 'May 15, 2020, 11:20 pm'),
(10, 'Madchef', 'Takeway Discount', 'Get 10% takeway discount on any purchase', 'ezgif_com-webp-to-jpg.jpg', 1, 'food', 'May 29, 2020, 10:14 pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_isApproved` int(11) DEFAULT NULL,
  `user_status` int(11) DEFAULT NULL,
  `user_verification_key` varchar(255) DEFAULT NULL,
  `user_is_email_verified` int(11) DEFAULT NULL,
  `promocode` varchar(255) DEFAULT NULL,
  `user_password` varchar(1000) DEFAULT NULL,
  `user_profile_pic` text,
  `user_sid_pic` text,
  `user_created_at` varchar(255) DEFAULT NULL,
  `user_modified_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fullname`, `user_email`, `user_phone`, `user_isApproved`, `user_status`, `user_verification_key`, `user_is_email_verified`, `promocode`, `user_password`, `user_profile_pic`, `user_sid_pic`, `user_created_at`, `user_modified_at`) VALUES
(16, 'Zakuan Twaha', 'zakuan.towaha@gmail.com', '01777977297', 1, NULL, NULL, NULL, 'stud_f2885', '01731871395', '48979337_214715379416839_1621996697141903360_n.jpg', NULL, '2020-03-05 03:12:06am', NULL),
(19, 'User', 'user@stud.com', '01857487634', 0, NULL, NULL, NULL, 'stud_42683', '11111111', 'purple-patch.png', 'live.gif', 'March 13, 2020, 10:44 am', NULL),
(22, 'Ashik Ahmed', 'prithve@live.com', 'prithve@live.com', 0, 0, NULL, NULL, 'stud_78864', 'digimon999', NULL, NULL, 'March 13, 2020, 12:11 pm', 'March 13, 2020, 2:08 pm'),
(24, 'Test User', 'test@stud.com.bd', '01912844996', 1, 1, NULL, NULL, 'stud_f488f', '26031971', '58382547_2121873444516539_3665866020062494720_n.jpg', '57155297_842940506043229_3666991361623588864_n.jpg', 'March 13, 2020, 6:18 pm', 'March 13, 2020, 6:21 pm'),
(25, 'Anim Dog', 'anim@stud.com.bd', '01556697789', 1, 1, NULL, NULL, 'stud_a113c', '123456', '141943.jpg', 'mujib-year-logo-1578660704003.jpg', 'March 14, 2020, 12:35 am', 'March 14, 2020, 12:36 am'),
(35, 'Sheldon Hofstder', 'sheldon@gmail.com', '01708758469', 1, 1, NULL, NULL, 'stud_7e9a3', 'e10adc3949ba59abbe56e057f20f883e', 'shirt2.jpg', 'firness.jpg', 'April 23, 2020, 7:18 pm', 'April 23, 2020, 7:22 pm'),
(36, 'Howard Wolowitz', 'howard@gmail.com', '01555648971', 1, 1, NULL, NULL, 'stud_a9dcd', '827ccb0eea8a706c4c34a16891f84e7b', '_black.PNG', 'stud-removebg-preview.png', 'April 23, 2020, 7:26 pm', NULL),
(37, 'Md Mohaiminul Islam', 'mailtorabid@gmail.com', '01624585608', 1, 1, NULL, NULL, 'stud_3666e', 'be2ec6653c76d0c639b6a5c65cd8ad60', 'rabid3.jpg', 'idCard1.jpg', 'April 23, 2020, 7:31 pm', 'May 8, 2020, 12:52 am'),
(38, 'Kazi Sakib Ahmad', 'kazi.sakib@technometrics.net', '01676451865', 10, 1, NULL, NULL, 'stud_3666r', 'fe04fc6045533c8da744110fc9b7323d', 'kazi.jpg', NULL, 'April 23, 2020, 10:04 pm', NULL),
(39, 'Stud Admin', 'admin@stud.com', '0111111111111', 10, 1, NULL, NULL, '', 'fe04fc6045533c8da744110fc9b7323d', 'logo-footer1.png', NULL, 'April 23, 2020, 10:16 pm', 'May 7, 2020, 3:01 am'),
(40, 'Anim Rahman', 'anim@gmail.com', '01698745621', 1, 1, NULL, NULL, 'stud_61a6b', 'fe04fc6045533c8da744110fc9b7323d', 'firness.jpg', 'shirt2.jpg', 'April 24, 2020, 12:05 pm', 'April 24, 2020, 12:05 pm'),
(41, 'Tanvir', 'tanvir@gmail.com', '01678965412', 1, 1, NULL, NULL, 'stud_ebe36', 'fe04fc6045533c8da744110fc9b7323d', 'firness1.jpg', 'shirt21.jpg', 'April 24, 2020, 12:07 pm', 'April 24, 2020, 12:08 pm'),
(42, 'Seller Madchef', 'madchef@gmail.com', '01XXXXXXXXX', 12, 1, NULL, NULL, NULL, '25d55ad283aa400af464c76d713c07ad', '95749780_725555001518289_7147127473795235840_n.png', NULL, 'May 4, 2020, 11:37 pm', 'May 11, 2020, 8:58 pm'),
(43, 'Abdul Hannan', 'kazi.hannan@gmail.com', '01912844995', 1, 1, NULL, NULL, 'stud_58934', 'fe04fc6045533c8da744110fc9b7323d', 'user-sign-icon-person-symbol-human-avatar-vector-12693218.jpg', 'id.jpg', 'May 14, 2020, 1:31 pm', 'May 14, 2020, 1:32 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
