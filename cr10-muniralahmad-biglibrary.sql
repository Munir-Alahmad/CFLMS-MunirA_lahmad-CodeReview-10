-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 12:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10-muniralahmad-biglibrary`
--

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `ISBN_code`, `name`, `image`, `description`, `type`, `available`, `author_fn`, `author_ln`, `publish_date`, `Publisher`, `publisher_fn`, `publisher_ln`, `publisher_adrs`, `size`, `price`) VALUES
(1, 1236912582, 'Deutsch NMS 2', '61d9fd73a1252.jpg', 'Vielfach Deutsch erste klasse Mittelschule', 'book', 'available', 'Mick', 'Arther', '0000-00-00 00:00:00', 'Cornelson', 'alfred', 'wolfgang', 'Praterstrasse, 338, 1020 Wien', 'big', '9.75'),
(2, 236985232, 'Deutsch 63', 'product.png', 'Vielfach Deutsch zweite klasse Mittelschule', 'book', 'available', 'Mick', 'Arther', '0000-00-00 00:00:00', 'Cornelson', 'alfred', 'wolfgang', 'Praterstrasse, 338, 1020 Wien', 'big', '10.50'),
(3, 312589875, 'Deutsch 3', 'product.png', 'Vielfach Deutsch dritte klasse Mittelschule', 'book', 'available', 'Mick', 'Arther', '2022-01-06 21:16:16', 'Cornelson', 'alfred', 'wolfgang', 'Praterstrasse, 338, 1020 Wien', 'big', '11.20'),
(4, 452136985, 'Deutsch 4', 'product.png', 'Vielfach Deutsch vierte klasse Mittelschule', 'book', 'available', 'Mick', 'Arther', '2022-01-06 21:17:18', 'Cornelson', 'alfred', 'wolfgang', 'Praterstrasse, 338, 1020 Wien', 'big', '10.00'),
(5, 921345862, 'Mathe 1', 'product.png', 'Mathe erste klasse Mittelschule', 'book', 'available', 'eva', 'hofbauer', '2022-01-06 21:19:15', 'Meldenberger', 'carolina', 'zulus', 'favoritenstrasse, 652, 1100 Wien', 'medium', '8.20'),
(6, 856521436, 'Mathe 2', 'product.png', 'Mathe zweite klasse Mittelschule', 'book', 'available', 'eva', 'hofbauer', '2022-01-06 21:25:45', 'Meldenberger', 'carolina', 'zulus', 'favoritenstrasse, 652, 1100 Wien', 'medium', '9.75'),
(7, 825642568, 'Mathe 3', 'product.png', 'Mathe dritte klasse Mittelschule', 'book', 'available', 'eva', 'hofbauer', '2022-01-06 21:27:01', 'Meldenberger', 'carolina', 'zulus', 'favoritenstrasse, 652, 1100 Wien', 'medium', '9.60'),
(8, 523985476, 'Mathe 4', 'product.png', 'Mathe vierte klasse Mittelschule', 'book', 'available', 'eva', 'hofbauer', '2022-01-06 21:28:16', 'Meldenberger', 'carolina', 'zulus', 'favoritenstrasse, 652, 1100 Wien', 'medium', '12.00'),
(9, 412596548, 'Deutsch Starter 1', 'product.png', 'Deutsch 1 Hören erste klasse Mittelschule', 'DVD', 'available', 'sandria', 'roman', '2022-01-06 21:32:40', 'Cornelson', 'alfred', 'wolfgang', 'Praterstrasse, 338, 1020 Wien', 'big', '6.50'),
(10, 615208462, 'Deutsch 2', 'product.png', 'Deutsch 2 Hören zweite klasse Mittelschule', 'DVD', 'available', 'sandria', 'roman', '2022-01-06 21:34:20', 'Cornelson', 'alfred', 'wolfgang', 'Praterstrasse, 338, 1020 Wien', 'big', '8.00'),
(11, 618530253, 'Deutsch Starter 3', 'product.png', 'Deutsch 3 Hören dritte klasse Mittelschule', 'DVD', 'available', 'sandria', 'roman', '2022-01-06 21:35:35', 'Cornelson', 'alfred', 'wolfgang', 'Praterstrasse, 338, 1020 Wien', 'big', '10.30'),
(12, 912068954, 'Deutsch Starter 4', 'product.png', 'Deutsch 4 Hören vierte klasse Mittelschule', 'DVD', 'available', 'sandria', 'roman', '2022-01-06 21:36:37', 'Cornelson', 'alfred', 'wolfgang', 'Praterstrasse, 338, 1020 Wien', 'big', '11.20'),
(13, 502369852, 'Mathe Starter 1', 'product.png', 'Mathe Starter erste klasse Mittelschule', 'CD', 'available', 'john', 'mark', '2022-01-06 21:37:54', 'Meldenberger', 'carolina', 'zulus', 'favoritenstrasse, 652, 1100 Wien', 'medium', '9.65'),
(14, 402368564, 'Mathe Starter 2', 'product.png', 'Mathe Starter zweite klasse Mittelschule', 'CD', 'available', 'john', 'mark', '2022-01-06 21:39:25', 'Meldenberger', 'carolina', 'zulus', 'Praterstrasse, 338, 1020 Wien', 'medium', '10.80'),
(15, 632014587, 'Mathe Starter 3', 'product.png', 'Mathe Starter dritte klasse Mittelschule', 'CD', 'available', 'john', 'mark', '2022-01-06 21:40:21', 'Meldenberger', 'carolina', 'zulus', 'favoritenstrasse, 652, 1100 Wien', 'medium', '10.55'),
(16, 802569874, 'Mathe Starter 4', 'product.png', 'Mathe Starter vierte klasse Mittelschule', 'CD', 'available', 'john', 'mark', '2022-01-06 21:41:15', 'Meldenberger', 'carolina', 'zulus', 'favoritenstrasse, 652, 1100 Wien', 'medium', '12.30'),
(20, 205286543, 'Deutsch NMS1', '61d87a8e9cc45.jpg', '', 'book', 'available', '', '', NULL, '', '', '', '', NULL, '10.40'),
(38, 502010488, 'Vielfach Deutsch 2', '61d9e5d3d8c53.jpg', '', 'book', 'available', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '10.50'),
(44, 805021202, 'Geschichte 32', '61d9f5ae6352e.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore rerum commodi et voluptatibus molestias animi sunt assumenda provident adipisci. V', 'book', '', 'sdfg', 'cdsdfw', '2021-06-09 00:00:00', 'Cornelson', 'Alfred', 'Wolfgang', 'praterstrasse 338, 1020 Wien', 'big', '6.50'),
(45, 203021305, 'Deutsch 3 Sprachbuch', '61d9f68b16cbd.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore rerum commodi et voluptatibus molestias animi sunt assumenda provident adipisci. V', 'book', '', 'gtfsdsa', 'rfvfhgdfwf', '2021-05-15 00:00:00', 'Cornelson', 'Alfred', 'Wolfgang', 'praterstrasse 338, 1020 Wien', 'big', '9.60'),
(46, 406508475, 'Deutsch NMS3', '61d9f8bdde7cf.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore rerum commodi et voluptatibus molestias animi sunt assumenda provident adipisci. V', 'book', '', 'edcrfvtgb', 'rdxtfcgv', '2021-02-08 00:00:00', 'Cornelson', 'Alfred', 'Wolfgang', 'praterstrasse 338, 1020 Wien', 'big', '8.40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
