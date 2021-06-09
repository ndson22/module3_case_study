-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2021 at 05:07 PM
-- Server version: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_delivery_web_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`, `image`) VALUES
(1, 'appetizer', '2021-05-31 03:40:03', '2021-05-31 03:40:03', '/image/category/cuisine-1.jpg'),
(2, 'salad', '2021-05-31 03:40:03', '2021-05-31 03:40:03', '/image/category/cuisine-1.jpg'),
(3, 'pizza', '2021-05-31 03:40:03', '2021-05-31 03:40:03', '/image/category/cuisine-1.jpg'),
(4, 'fast food', '2021-05-31 03:40:03', '2021-05-31 03:40:03', '/image/category/cuisine-1.jpg'),
(5, 'breakfast', '2021-05-31 03:40:03', '2021-05-31 03:40:03', '/image/category/cuisine-1.jpg'),
(6, 'lunch & dinner', '2021-05-31 03:40:03', '2021-05-31 03:40:03', '/image/category/cuisine-1.jpg'),
(7, 'bread', '2021-05-31 03:40:03', '2021-05-31 03:40:03', '/image/category/cuisine-1.jpg'),
(8, 'noodles', '2021-05-31 03:40:03', '2021-05-31 03:40:03', '/image/category/cuisine-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 'An Giang', '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(2, 'Hà Nam', '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(3, 'Hà Tĩnh', '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(4, 'Hải Dương', '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(5, 'Hậu Giang', '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(6, 'Hòa Bình', '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(7, 'Hà Nội', '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(8, 'TP HCM', '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(9, 'Hải Phòng', '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(10, 'Đà Nẵng', '2021-05-31 03:40:03', '2021-05-31 03:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `communes`
--

CREATE TABLE `communes` (
  `id` int(11) NOT NULL,
  `commune_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communes`
--

INSERT INTO `communes` (`id`, `commune_name`, `district_id`, `created_at`, `updated_at`) VALUES
(1, 'Phú Lộc', 1, '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(2, 'Phú Lộc', 1, '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(3, 'Phú Lộc', 1, '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(4, 'Phú Lộc', 1, '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(5, 'Phú Lộc', 1, '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(6, 'Phus a', 2, '2021-05-31 03:41:16', '2021-05-31 03:41:16'),
(7, 'Phus a', 2, '2021-05-31 03:41:16', '2021-05-31 03:41:16'),
(8, 'Phus a', 2, '2021-05-31 03:41:16', '2021-05-31 03:41:16'),
(9, 'Phus a', 2, '2021-05-31 03:41:16', '2021-05-31 03:41:16'),
(10, 'Phus a', 2, '2021-05-31 03:41:16', '2021-05-31 03:41:16'),
(11, 'Phus a', 2, '2021-06-01 20:58:19', '2021-06-01 20:58:19'),
(12, 'Phus a', 2, '2021-06-01 20:58:19', '2021-06-01 20:58:19'),
(13, 'Phus a', 2, '2021-06-01 20:58:19', '2021-06-01 20:58:19'),
(14, 'Phus a', 2, '2021-06-01 20:58:19', '2021-06-01 20:58:19'),
(15, 'Phus a', 2, '2021-06-01 20:58:19', '2021-06-01 20:58:19'),
(16, 'Phus a', 2, '2021-06-01 20:59:13', '2021-06-01 20:59:13'),
(17, 'Phus a', 2, '2021-06-01 20:59:13', '2021-06-01 20:59:13'),
(18, 'Phus a', 2, '2021-06-01 20:59:13', '2021-06-01 20:59:13'),
(19, 'Phus a', 2, '2021-06-01 20:59:13', '2021-06-01 20:59:13'),
(20, 'Phus a', 2, '2021-06-01 20:59:13', '2021-06-01 20:59:13'),
(21, 'Phus a', 2, '2021-06-01 20:59:44', '2021-06-01 20:59:44'),
(22, 'Phus a', 2, '2021-06-01 20:59:44', '2021-06-01 20:59:44'),
(23, 'Phus a', 2, '2021-06-01 20:59:44', '2021-06-01 20:59:44'),
(24, 'Phus a', 2, '2021-06-01 20:59:44', '2021-06-01 20:59:44'),
(25, 'Phus a', 2, '2021-06-01 20:59:44', '2021-06-01 20:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Duy Son', 'sonnd@gmail.com', '$2y$10$uVRgRhEdvgrX/H74zNbjj.Qts9yFhrWx3VisW0mRZIWjoMCwfmcda', '2021-05-31 03:40:03', '2021-05-31 03:40:03', 'admin'),
(2, 'Pierce Kessler', 'murray.bert@example.org', '$2y$10$67byWinaDHXmdxYU1vYGy.qJ9.Ll7Iux9bqxPZP12VB4xafvj2DB6', '2021-05-31 03:40:03', '2021-05-31 03:40:03', 'guest'),
(3, 'Marlin Jaskolski', 'giovanni.hartmann@example.org', '$2y$10$xeQ..NtrverxpKPZIfzP8eH9iqlSx7AWiiq3rg577z.E80Er8iHTS', '2021-05-31 03:40:03', '2021-05-31 03:40:03', 'guest'),
(4, 'Otilia Cremin', 'dee54@example.org', '$2y$10$TClsOc4PjE7nM4tlkhhLfuhiHvV7I8yc56uO5QuxvDD/5pgWT/wUe', '2021-05-31 03:40:03', '2021-05-31 03:40:03', 'guest'),
(5, 'Dr. Xavier Goodwin', 'bartoletti.ashly@example.net', '$2y$10$MCZbQIzDbygibXiMAVm32O0hUNh/U9fQ8MSv.8pU3TN762x7jmkhO', '2021-05-31 03:40:03', '2021-05-31 03:40:03', 'guest'),
(6, 'Matilde Altenwerth', 'ceasar.greenfelder@example.com', '$2y$10$G3SulmScrpcPaqZATQKYx.D.kFSxJjUSBcMNcRKKMCJ05symLn4Gq', '2021-05-31 03:40:03', '2021-05-31 03:40:03', 'guest'),
(7, 'Miss Anais White MD', 'jkeeling@example.net', '$2y$10$k1HRz1eLI1Sae7bIH1WPW.ckNqfGceXqmlV21oCjinJs2K9r9aGRe', '2021-05-31 03:40:03', '2021-05-31 03:40:03', 'guest'),
(8, 'Rosalinda Hackett', 'quinn.kunde@example.net', '$2y$10$dKkZb1448sOHg3xqyU/E/uyiyU7V9irRkl.CMnFY99wpor5GJ4jr.', '2021-05-31 03:40:03', '2021-05-31 03:40:03', 'guest'),
(9, 'Fatima Lueilwitz', 'mable.dubuque@example.net', '$2y$10$H1xSk6qtmRWSlywHnP6Mze.QgwH9LZ97Y6nbQVKj3NAWztbZS7ddi', '2021-05-31 03:40:03', '2021-05-31 03:40:03', 'guest'),
(10, 'Pierre Wuckert', 'terry.shaun@example.org', '$2y$10$pVUS6eyhvUPOPRJQCpdhj.iD2PPnp8jhRNHd.dcV7m2uJqyPYHqdy', '2021-05-31 03:40:03', '2021-05-31 03:40:03', 'guest'),
(11, 'sonnd', 'sonnd2@gmail.com', '$2y$10$VVXZNim8qgivOwZQGEvGuutXasddvIP8NU3O.i8xg1sjWD8O0g4Km', '2021-06-08 01:45:09', '2021-06-08 01:45:09', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'Tân Châu', 1, '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(2, 'Tân Châu', 1, '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(3, 'Tân Châu', 1, '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(4, 'Tân Châu', 1, '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(5, 'Tân Châu', 1, '2021-05-31 03:40:03', '2021-05-31 03:40:03'),
(6, 'Tân Châu 2', 2, '2021-05-31 03:41:16', '2021-05-31 03:41:16'),
(7, 'Tân Châu 2', 2, '2021-05-31 03:41:16', '2021-05-31 03:41:16'),
(8, 'Tân Châu 2', 2, '2021-05-31 03:41:16', '2021-05-31 03:41:16'),
(9, 'Tân Châu 2', 2, '2021-05-31 03:41:16', '2021-05-31 03:41:16'),
(10, 'Tân Châu 2', 2, '2021-05-31 03:41:16', '2021-05-31 03:41:16'),
(11, 'Tân Châu 2', 2, '2021-06-01 20:58:19', '2021-06-01 20:58:19'),
(12, 'Tân Châu 2', 2, '2021-06-01 20:58:19', '2021-06-01 20:58:19'),
(13, 'Tân Châu 2', 2, '2021-06-01 20:58:19', '2021-06-01 20:58:19'),
(14, 'Tân Châu 2', 2, '2021-06-01 20:58:19', '2021-06-01 20:58:19'),
(15, 'Tân Châu 2', 2, '2021-06-01 20:58:19', '2021-06-01 20:58:19'),
(16, 'Tân Châu 2', 2, '2021-06-01 20:59:13', '2021-06-01 20:59:13'),
(17, 'Tân Châu 2', 2, '2021-06-01 20:59:13', '2021-06-01 20:59:13'),
(18, 'Tân Châu 2', 2, '2021-06-01 20:59:13', '2021-06-01 20:59:13'),
(19, 'Tân Châu 2', 2, '2021-06-01 20:59:13', '2021-06-01 20:59:13'),
(20, 'Tân Châu 2', 2, '2021-06-01 20:59:13', '2021-06-01 20:59:13'),
(21, 'Tân Châu 2', 2, '2021-06-01 20:59:44', '2021-06-01 20:59:44'),
(22, 'Tân Châu 2', 2, '2021-06-01 20:59:44', '2021-06-01 20:59:44'),
(23, 'Tân Châu 2', 2, '2021-06-01 20:59:44', '2021-06-01 20:59:44'),
(24, 'Tân Châu 2', 2, '2021-06-01 20:59:44', '2021-06-01 20:59:44'),
(25, 'Tân Châu 2', 2, '2021-06-01 20:59:44', '2021-06-01 20:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `sale_price` double(8,2) NOT NULL,
  `fee` double(8,2) NOT NULL,
  `explain_fee` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepare_food` double(8,2) NOT NULL,
  `view` bigint(20) NOT NULL DEFAULT 0,
  `order` bigint(20) NOT NULL DEFAULT 0,
  `nominated` tinyint(1) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `promotion_food` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `restaurant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `image`, `description`, `price`, `sale_price`, `fee`, `explain_fee`, `type_of_fee`, `prepare_food`, `view`, `order`, `nominated`, `category_id`, `promotion_food`, `created_at`, `updated_at`, `restaurant_id`) VALUES
(29, 'Pizzaaa', 'images/foods/1623232501-Pizzaaa.jpg', 'Fast food', 120000.00, 150000.00, 10.00, 'VAT', NULL, 30.00, 0, 0, NULL, 3, NULL, '2021-06-08 07:39:00', '2021-06-09 02:55:01', 6),
(30, 'Fruit Cake', 'images/foods/1623222839-FruitCake.jpg', 'Sweet cake', 50000.00, 40000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 07:41:34', '2021-06-09 00:13:59', 8),
(31, 'Bisqu', 'images/foods/1623166815-Bisqu.jpg', 'Dinner pretty', 80000.00, 70000.00, 10.00, 'VAT', NULL, 30.00, 0, 0, NULL, 6, NULL, '2021-06-08 08:15:18', '2021-06-08 08:40:15', 7),
(32, 'Sticky finger join', 'images/foods/1623165480-Stickyfingerjoin.jpg', 'Fast food', 30000.00, 25000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:18:00', '2021-06-08 08:18:00', 6),
(33, 'Shake Shack', 'images/foods/1623165555-ShakeShack.jpg', 'Fast food', 50000.00, 40000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:19:15', '2021-06-08 08:19:15', 6),
(34, 'Taco bell', 'images/foods/1623165623-Tacobell.jpg', 'Fast food', 50000.00, 50000.00, 10.00, 'VAT', NULL, 30.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:20:23', '2021-06-08 08:20:23', 6),
(35, 'Good mojo', 'images/foods/1623165724-Goodmojo.jpg', 'Fast food', 90000.00, 70000.00, 10.00, 'VAT', NULL, 30.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:21:40', '2021-06-08 08:22:04', 6),
(36, 'pizza', 'images/foods/1623165799-pizza.jpg', 'Fast food', 30000.00, 20000.00, 10.00, 'VAT', NULL, 30.00, 0, 0, NULL, 3, NULL, '2021-06-08 08:23:19', '2021-06-08 08:23:19', 6),
(37, 'Pizzaaa', 'images/foods/1623166509-Pizzaaa.jpg', 'Fast food', 120000.00, 150000.00, 10.00, 'VAT', NULL, 30.00, 0, 0, NULL, 3, NULL, '2021-06-08 07:39:00', '2021-06-08 08:35:09', 6),
(40, 'Sticky finger join', 'images/foods/1623165480-Stickyfingerjoin.jpg', 'Fast food', 30000.00, 25000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:18:00', '2021-06-08 08:18:00', 6),
(41, 'Shake Shack', 'images/foods/1623165555-ShakeShack.jpg', 'Fast food', 50000.00, 40000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:19:15', '2021-06-08 08:19:15', 6),
(42, 'Taco bell', 'images/foods/1623165623-Tacobell.jpg', 'Fast food', 50000.00, 50000.00, 10.00, 'VAT', NULL, 30.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:20:23', '2021-06-08 08:20:23', 6),
(46, 'Fruit Cake', 'images/foods/1623222755-FruitCake.jpg', 'Sweet cake', 50000.00, 40000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 07:41:34', '2021-06-09 00:12:35', 8),
(48, 'Sticky finger join', 'images/foods/1623232166-Stickyfingerjoin.jpg', 'Fast food', 30000.00, 25000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:18:00', '2021-06-09 02:49:26', 6),
(49, 'Shake Shack', 'images/foods/1623165555-ShakeShack.jpg', 'Fast food', 50000.00, 40000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:19:15', '2021-06-08 08:19:15', 6),
(50, 'Pizzaaa', 'images/foods/1623166624-Pizzaaa.jpg', 'Fast food', 120000.00, 150000.00, 10.00, 'VAT', NULL, 30.00, 0, 0, NULL, 3, NULL, '2021-06-08 07:39:00', '2021-06-08 08:37:04', 6),
(53, 'Sticky finger join', 'images/foods/1623165480-Stickyfingerjoin.jpg', 'Fast food', 30000.00, 25000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:18:00', '2021-06-08 08:18:00', 6),
(54, 'Shake Shack', 'images/foods/1623165555-ShakeShack.jpg', 'Fast food', 50000.00, 40000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:19:15', '2021-06-08 08:19:15', 6),
(55, 'Pizzaaa', 'images/foods/1623166664-Pizzaaa.jpg', 'Fast food', 120000.00, 150000.00, 10.00, 'VAT', NULL, 30.00, 0, 0, NULL, 3, NULL, '2021-06-08 07:39:00', '2021-06-08 08:37:44', 6),
(58, 'Sticky finger join', 'images/foods/1623165480-Stickyfingerjoin.jpg', 'Fast food', 30000.00, 25000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:18:00', '2021-06-08 08:18:00', 6),
(59, 'Shake Shack', 'images/foods/1623165555-ShakeShack.jpg', 'Fast food', 50000.00, 40000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:19:15', '2021-06-08 08:19:15', 6),
(60, 'Pizzaaa', 'images/foods/1623166701-Pizzaaa.jpg', 'Fast food', 120000.00, 150000.00, 10.00, 'VAT', NULL, 30.00, 0, 0, NULL, 3, NULL, '2021-06-08 07:39:00', '2021-06-08 08:38:21', 6),
(63, 'Sticky finger join', 'images/foods/1623165480-Stickyfingerjoin.jpg', 'Fast food', 30000.00, 25000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:18:00', '2021-06-08 08:18:00', 6),
(64, 'Shake Shack', 'images/foods/1623165555-ShakeShack.jpg', 'Fast food', 50000.00, 40000.00, 10.00, 'VAT', NULL, 20.00, 0, 0, NULL, 4, NULL, '2021-06-08 08:19:15', '2021-06-08 08:19:15', 6),
(65, 'pizza', 'images/foods/1623232278-pizza.jpg', 'sadgf', 120000.00, 50000.00, 10.00, 'vat', NULL, 20.00, 0, 0, NULL, 3, NULL, '2021-06-09 02:51:18', '2021-06-09 02:51:18', 9);

-- --------------------------------------------------------

--
-- Table structure for table `food_tag`
--

CREATE TABLE `food_tag` (
  `tag_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_tag`
--

INSERT INTO `food_tag` (`tag_id`, `food_id`, `created_at`, `updated_at`) VALUES
(30, 29, NULL, NULL),
(30, 30, NULL, NULL),
(30, 32, NULL, NULL),
(30, 33, NULL, NULL),
(30, 34, NULL, NULL),
(30, 35, NULL, NULL),
(30, 41, NULL, NULL),
(30, 42, NULL, NULL),
(30, 48, NULL, NULL),
(30, 50, NULL, NULL),
(30, 55, NULL, NULL),
(30, 60, NULL, NULL),
(31, 29, NULL, NULL),
(31, 36, NULL, NULL),
(31, 37, NULL, NULL),
(31, 40, NULL, NULL),
(31, 65, NULL, NULL),
(38, 31, NULL, NULL),
(39, 46, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_30_012344_create_customers_table', 1),
(5, '2021_05_30_020501_create_restaurants_table', 2),
(6, '2021_05_30_133141_add_role_to_customers_table', 2),
(7, '2021_05_30_135507_add_customer_id_to_restaurants_table', 2),
(8, '2021_05_31_045103_create_categories_table', 2),
(9, '2021_05_31_045304_create_tags_table', 2),
(10, '2021_05_31_045438_create_foods_table', 2),
(11, '2021_05_31_045605_create_foods_tags_table', 2),
(12, '2021_05_31_074017_add_image_to_categories_table', 2),
(13, '2021_05_31_092419_create_cities_table', 3),
(14, '2021_05_31_092508_create_districts_table', 3),
(15, '2021_05_31_092525_create_communes_table', 3),
(16, '2021_05_31_093226_update_restaurants_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `address`, `commune_id`, `district_id`, `city_id`, `open_time`, `close_time`, `image`, `created_at`, `updated_at`, `customer_id`) VALUES
(6, 'Fast', 'No 22, My Dinh Street', 1, 1, 1, '08:00:00', '22:00:00', 'images/restaurants/1623162423-Fast.jpg', '2021-06-08 07:27:03', '2021-06-08 07:27:03', 1),
(7, 'Luxury Restaurant', 'No 3, Tran Hung Dao Street', 1, 1, 1, '08:00:00', '22:00:00', 'images/restaurants/1623162580-LuxuryRestaurant.jpg', '2021-06-08 07:29:40', '2021-06-08 07:29:40', 1),
(8, 'Sweet cake', 'No 10', 1, 1, 1, '20:00:00', '22:00:00', 'images/restaurants/1623162949-Sweetcake.jpg', '2021-06-08 07:35:49', '2021-06-08 07:35:49', 1),
(9, 'Store', 'no22', 1, 1, 1, '16:50:00', '16:49:00', 'images/restaurants/1623232224-Store.jpg', '2021-06-09 02:50:24', '2021-06-09 02:50:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `slug`, `extra`, `created_at`, `updated_at`) VALUES
(12, 'newtag', 'new-tag', 1, '2021-06-02 02:16:30', '2021-06-03 03:06:27'),
(13, 'newnew', 'new-new', 5, '2021-06-02 02:16:30', '2021-06-06 19:58:38'),
(14, 'new', 'new', 3, '2021-06-02 02:16:52', '2021-06-03 07:25:28'),
(15, 'newnewtag', 'new-new-tag', 1, '2021-06-02 02:16:52', '2021-06-02 02:20:49'),
(16, 'lan nua', 'lan-nua', 1, '2021-06-02 02:20:49', '2021-06-02 02:21:44'),
(17, 'thu lan nua', 'thu-lan-nua', 1, '2021-06-02 02:21:44', '2021-06-02 02:25:19'),
(30, 'fastfood', 'fastfood', 73, '2021-06-03 07:12:52', '2021-06-09 02:55:01'),
(31, 'pizza', 'pizza', 53, '2021-06-06 19:58:38', '2021-06-09 02:55:01'),
(32, 'lan', 'lan', 0, '2021-06-07 01:33:19', '2021-06-07 01:33:19'),
(33, '31', '31', 1, '2021-06-07 05:15:32', '2021-06-07 07:41:01'),
(36, '30', '30', 0, '2021-06-07 07:41:24', '2021-06-07 07:41:24'),
(37, '32', '32', 0, '2021-06-07 07:41:24', '2021-06-07 07:41:24'),
(38, 'dinner', 'dinner', 1, '2021-06-08 08:15:18', '2021-06-08 08:40:15'),
(39, 'cake', 'cake', 1, '2021-06-09 00:12:24', '2021-06-09 00:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communes_district_id_foreign` (`district_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_city_id_foreign` (`city_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foods_restaurant_id_foreign` (`restaurant_id`),
  ADD KEY `foods_category_id_foreign` (`category_id`);

--
-- Indexes for table `food_tag`
--
ALTER TABLE `food_tag`
  ADD PRIMARY KEY (`tag_id`,`food_id`),
  ADD KEY `foods_tags_food_id_foreign` (`food_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurants_customer_id_foreign` (`customer_id`),
  ADD KEY `restaurants_commune_id_foreign` (`commune_id`),
  ADD KEY `restaurants_district_id_foreign` (`district_id`),
  ADD KEY `restaurants_city_id_foreign` (`city_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `communes`
--
ALTER TABLE `communes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `communes`
--
ALTER TABLE `communes`
  ADD CONSTRAINT `communes_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `foods_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);

--
-- Constraints for table `food_tag`
--
ALTER TABLE `food_tag`
  ADD CONSTRAINT `foods_tags_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`),
  ADD CONSTRAINT `foods_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `restaurants_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`id`),
  ADD CONSTRAINT `restaurants_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `restaurants_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
