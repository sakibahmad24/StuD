-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2020 at 04:45 PM
-- Server version: 5.7.29-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mirabidc_stud`
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
(5, 'Fitness Plus BD', 'health', 'fplus.png', 'active', 'March 30, 2020, 5:05 pm', NULL);

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
(8, 'Madchef Reopening', 'Get 5% instant cashback on your purchase from 8th to 10 April. Available for any item and at any outlet', 'Madchef', 'food', 1, 'mad.jpg', 'March 30, 2020, 1:48 am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review_sale_id` int(11) DEFAULT NULL,
  `review_rating` int(11) DEFAULT NULL,
  `review_title` text,
  `review_subtitle` mediumtext,
  `review_body` longtext,
  `review_user_phone` varchar(255) DEFAULT NULL,
  `review_image` text,
  `review_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `review_updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `review_sale_id`, `review_rating`, `review_title`, `review_subtitle`, `review_body`, `review_user_phone`, `review_image`, `review_created_at`, `review_updated_at`) VALUES
(2, 2, 5, 'MadChef', 'MadChef MadChef ', 'MadChef MadChef MadChef MadChef MadChef', '01624585608', 'madchef.jpg', '2020-03-02 19:25:38', NULL),
(5, 2, 3, 'MadChef', 'MadChef MadChef', 'MadChef MadChef MadChef MadChef', '01624585608', 'madchef1.jpg', '2020-03-02 19:46:22', NULL),
(6, 3, 5, 'My first visit at Stubborn Goat', 'I just loved their foods', 'aSDASFFGHJFTHDSFDFHFGJGHJGHJFJHG', '01676451865', 'stub_goat2.png', '2020-03-02 19:47:05', NULL),
(9, 5, 4, 'My first visit at Stubborn Goat', 'I just loved their foods', 'Stubborn Goat sooooo goooddd', '01888057177', 'stub_goat3.png', '2020-03-03 07:57:23', NULL),
(10, 6, 4, 'Good Food', 'Juicy Burger', 'Their burger was just amazing.Loved it.', '01777977297', 'burger.jpg', '2020-03-04 21:18:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id` int(11) NOT NULL,
  `sale_brand_id` int(11) DEFAULT NULL,
  `sale_brand_name` varchar(255) DEFAULT NULL,
  `sale_brand_category` varchar(255) DEFAULT NULL,
  `sale_phone_number` varchar(255) DEFAULT NULL,
  `sale_promocode` varchar(255) DEFAULT NULL,
  `sale_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `sale_review` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sale_id`, `sale_brand_id`, `sale_brand_name`, `sale_brand_category`, `sale_phone_number`, `sale_promocode`, `sale_time`, `sale_review`) VALUES
(2, 1, 'Madchef', NULL, '01624585608', 'stud_65432', '2020-03-01 19:51:25', 1),
(3, 2, 'Stubborn Goat', NULL, '01676451865', 'stud_12456', '2020-03-01 20:43:03', 1),
(5, NULL, 'Stubborn Goat', NULL, '01888057177', 'stud_2f403', '2020-03-03 07:56:42', 1),
(6, NULL, 'Madchef', NULL, '01777977297', 'stud_f2885', '2020-03-04 21:15:22', 1),
(7, NULL, 'Yellow', NULL, '01888057177', 'stud_2f403', '2020-03-16 11:40:13', NULL);

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
(3, NULL, 'Madchef Slider', 'Madchef  New Subtitle', 'madchef11.jpg', 0, 'food', '2020-03-07 18:44:17', 'March 30, 2020, 1:32 am'),
(4, 'Stubborn Goat', 'Stubborn Goat', '15% OFF', 'stubborn_goat3.png', 1, 'food', '2020-03-07 18:45:37', 'March 30, 2020, 12:48 pm'),
(5, 'Astorion', 'Winter Sale', '35% flat discount', 'astorion.png', 1, 'fashion', '2020-03-07 20:48:08', '0000-00-00 00:00:00'),
(8, 'Yellow', 'Reopening Cashback', 'Get 5% instant cashback on your total bill once we resume our service', 'yellow.jpg', 1, 'fashion', 'March 30, 2020, 1:41 am', 'March 30, 2020, 1:44 am');

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
(14, 'Kazi Sakib Ahmad', 'kazi.sakib@northsouth.edu', '01888057177', 1, NULL, NULL, NULL, 'stud_2f403', '26031971', 'stub_goat1.png', 'madchef1.png', '2020-03-03 01:54:26pm', NULL),
(15, 'Admin', 'admin@stud.com', '01753609454', 10, 1, NULL, NULL, 'stud_4592a', '11111111', 'code.png', 'robi.png', '2020-03-03 05:28:54pm', 'March 13, 2020, 12:32 pm'),
(16, 'Zakuan Twaha', 'zakuan.towaha@gmail.com', '01777977297', 1, NULL, NULL, NULL, 'stud_f2885', '01731871395', '48979337_214715379416839_1621996697141903360_n.jpg', NULL, '2020-03-05 03:12:06am', NULL),
(18, 'Rabid Islam', 'rabidislam@hotmail.com', '01624585608', 1, 1, NULL, NULL, 'stud_884f1', '11111111', 'rabid.jpg', 'code.png', 'March 12, 2020, 2:57 pm', 'March 13, 2020, 2:07 pm'),
(19, 'User', 'user@stud.com', '01857487634', 0, NULL, NULL, NULL, 'stud_42683', '11111111', 'purple-patch.png', 'live.gif', 'March 13, 2020, 10:44 am', NULL),
(21, 'Admin 2', 'admin2@stud.com', '01624587659', 10, 1, NULL, NULL, NULL, '11111111', 'gr.png', NULL, 'March 13, 2020, 11:25 am', 'March 13, 2020, 12:28 pm'),
(22, 'Ashik Ahmed', 'prithve@live.com', 'prithve@live.com', 0, 0, NULL, NULL, 'stud_78864', 'digimon999', NULL, NULL, 'March 13, 2020, 12:11 pm', 'March 13, 2020, 2:08 pm'),
(24, 'Test User', 'test@stud.com.bd', '01912844995', 1, 1, NULL, NULL, 'stud_f488f', '26031971', '58382547_2121873444516539_3665866020062494720_n.jpg', '57155297_842940506043229_3666991361623588864_n.jpg', 'March 13, 2020, 6:18 pm', 'March 13, 2020, 6:21 pm'),
(25, 'Anim Dog', 'anim@stud.com.bd', '01556697789', 1, 1, NULL, NULL, 'stud_a113c', '123456', '141943.jpg', 'mujib-year-logo-1578660704003.jpg', 'March 14, 2020, 12:35 am', 'March 14, 2020, 12:36 am'),
(34, 'Md Mohaiminul Islam', 'mailtorabid@gmail.com', '01711268787', 1, 1, NULL, NULL, 'stud_5d6a8', '11111111', 'logo-footer.png', 'logo-header.png', 'March 15, 2020, 2:27 pm', 'March 15, 2020, 2:27 pm');

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
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
