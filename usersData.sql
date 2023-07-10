-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 أبريل 2023 الساعة 05:28
-- إصدار الخادم: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address_` varchar(255) NOT NULL,
  `password_` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `image_` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`full_name`, `user_name`, `birthdate`, `phone`, `address_`, `password_`, `confirm_password`, `image_`, `email`) VALUES
('dina', 'dina', '2002-09-21', '01100725368', 'manial', '2192101973', '2192101973', 'FB_IMG_1678574712222.jpg', 'dinaosman581@gmail.com'),
('habiba ayman', 'habiba', '2002-05-05', '01121324687', 'maadi', '2525252525', '2525252525', 'filename.jpg', 'pandatoma55@gmail.com'),
('reem ayman', 'reem', '2023-05-18', '01098834555', 'maadi', '12345678', '12345678', 'filename.jpg', 'reemayman55@gmail.com'),
('salma sherif', 'salma', '2002-12-15', '01098844444', 'maadi', '219219219', '219219219', 'FB_IMG_1678574712222.jpg', 'salmasherif55@gmail.com'),
('rahma', 'rahma', '2002-02-02', '01092498744', 'manial', '987654321', '987654321', 'FB_IMG_1678574712222.jpg', 'rahmaelsaeed558@gmail.com'),
('hasnaa', 'hasnaa', '2002-10-02', '01092284376', 'manial', '002885002', '002885002', 'filename.jpg', 'hasnaagamil558@gmail.com'),
('radwa', 'radwa', '2002-09-21', '01100725369', 'manial', 'radwa2192101973', 'radwa2192101973', 'tree-736885_960_720.jpg', 'radwaosman219@gmail.com'),
('asala ehab', 'asala', '2002-05-16', '01100755442', '6october', '16516588', '16516588', 'tree-736885_960_720.jpg', 'asalaehab165@gmail.com'),
('esraa osama', 'esraa', '2001-10-17', '01265827542', '6october', '55217102', '55217102', '22-3-404-Maximilian.jpg', 'esraaosama1710@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
