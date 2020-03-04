-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2020 at 07:13 AM
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
  `brand_promo_pct` int(11) DEFAULT NULL,
  `brand_sub_heading` text,
  `brand_image` text,
  `brand_valid_till` varchar(255) DEFAULT NULL,
  `brand_active` varchar(255) DEFAULT NULL,
  `brand_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `brand_updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_promo_pct`, `brand_sub_heading`, `brand_image`, `brand_valid_till`, `brand_active`, `brand_created_at`, `brand_updated_at`) VALUES
(1, 'Madchef', 30, 'Get 30% exciting discount on any branch of Madchef', 'madchef.png', '2020-03-31', 'active', NULL, NULL),
(2, 'Stubborn Goat', 25, 'Get 25% flat cut off on your bill for students', 'stub_goat.png', '2020-03-10', 'active', NULL, NULL);

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
(9, 5, 4, 'My first visit at Stubborn Goat', 'I just loved their foods', 'Stubborn Goat sooooo goooddd', '01888057177', 'stub_goat3.png', '2020-03-03 07:57:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id` int(11) NOT NULL,
  `sale_brand_id` int(11) DEFAULT NULL,
  `sale_brand_name` varchar(255) DEFAULT NULL,
  `sale_phone_number` varchar(255) DEFAULT NULL,
  `sale_promocode` varchar(255) DEFAULT NULL,
  `sale_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `sale_review` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sale_id`, `sale_brand_id`, `sale_brand_name`, `sale_phone_number`, `sale_promocode`, `sale_time`, `sale_review`) VALUES
(2, 1, 'Madchef', '01624585608', 'stud_65432', '2020-03-01 19:51:25', 1),
(3, 2, 'Stubborn Goat', '01676451865', 'stud_12456', '2020-03-01 20:43:03', 1),
(5, NULL, 'Stubborn Goat', '01888057177', 'stud_2f403', '2020-03-03 07:56:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `promocode` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_profile_pic` text,
  `user_sid_pic` text,
  `user_created_at` varchar(255) DEFAULT NULL,
  `user_modified_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fullname`, `user_email`, `user_phone`, `promocode`, `user_password`, `user_profile_pic`, `user_sid_pic`, `user_created_at`, `user_modified_at`) VALUES
(9, 'Kazi Sakib Ahmad', 'kazi.sakib@technometrics.net', '01676451865', 'stud_12345', '26031971', '141942.jpg', '14194.jpg', '2020-02-29 01:15:49am', NULL),
(14, 'Kazi Sakib Ahmad', 'kazi.sakib@northsouth.edu', '01888057177', 'stud_2f403', '26031971', 'stub_goat1.png', 'madchef1.png', '2020-03-03 01:54:26pm', NULL),
(15, 'Admin', 'admin@stud.com', '01753609454', 'stud_4592a', '11111111', 'code.png', 'robi.png', '2020-03-03 05:28:54pm', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

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
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
