-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 10:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcsforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `member_id`, `service_id`, `batch_id`, `phone_number`, `office_name`, `designation`, `email`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(29, 'rashed', '424234', '4234', '543', '01256478955', 'afsdfasdfsda', 'fasdfasdfsdf', 'sdf@gmail.com', 'profile_png.png', 'gdfgdfsgdfsge34', '2019-04-29 02:58:55', '2019-04-29 02:58:55'),
(30, 'Adar', '123465', '104', '204', '+8801798266861', 'Spectrum', 'Develper', 'za@asdf.com', 'profile_png.png', NULL, '2019-04-30 06:09:02', '2019-04-30 06:09:02'),
(32, 'Amir Hossain', '4234234', '4234', 'F423', '+8801839133665', 'fasfsd', 'fasdfsd', 'rashed@gmail.com', 'profile_png.png', 'sdfasdfsdf', '2019-05-02 00:50:56', '2019-05-02 04:57:37'),
(33, 'jony', '4234234', '4234', 'F423', '+8801839133665', 'fasfsd', 'fasdfsd', 'jony@gmail.com', 'online-order.png', 'sdfasdfsdf', '2019-05-02 03:03:07', '2019-05-02 03:03:07'),
(34, 'Adar', '123465', '104', '204', '+8801798266860', 'Spectrum', 'Develper', 'wasisadman.cse@gmail.com', 'profile_png.png', NULL, '2019-05-02 05:47:16', '2019-05-02 05:47:16'),
(35, 'Shaikh', '123465', '104', '204', '+8801798266862', 'Spectrum IT Solutions', 'Develper', 'wasisadmanadar@asdf.com', 'new.jpg', NULL, '2019-05-18 03:55:14', '2019-05-18 03:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_23_063750_create_members_table', 2),
(4, '2019_04_24_101429_create_transactions_table', 3),
(5, '2019_04_25_111000_create_paytypes_table', 4),
(6, '2019_04_28_110227_create_notifications_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `message`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Yearly', 'Yearly Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'yearly', '2019-04-28 06:20:04', '2019-05-08 22:31:56'),
(2, 'Monthly', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'monthly', '2019-04-28 06:37:48', '2019-04-28 06:37:48'),
(5, 'Picnic', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'monthly', '2019-04-28 06:37:48', '2019-04-28 06:37:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paytypes`
--

CREATE TABLE `paytypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paytypes`
--

INSERT INTO `paytypes` (`id`, `cname`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Monthly Fee', 'Active', '2019-04-24 18:00:00', '2019-04-24 18:00:00'),
(2, 'Yearly Fee', 'Active', NULL, NULL),
(3, 'Annual Picnic Fee', 'Active', NULL, '2019-05-09 01:49:31'),
(6, 'weekly', 'Inactive', '2019-05-09 00:42:24', '2019-05-09 01:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mid` int(11) NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_trans_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_paid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `single_amount` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trans_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `mid`, `transaction_id`, `bank_trans_id`, `total_paid`, `store_amount`, `single_amount`, `category`, `category_details`, `paid_by`, `trans_date`, `created_at`, `updated_at`) VALUES
(1, 3, '2755FSD', 'FSD56465464FS', '200', '10.5', '', 'Yearly Fee', '1', 'bkash', '2019-04-09', '2019-04-23 18:00:00', '2019-04-23 18:00:00'),
(2, 2, 'DFDS342342', 'FSDFQ423432423', '50', '15', '', 'Yearly Fee', 'dfsdf', 'dfsdf', '2019-04-23', '2019-04-23 18:00:00', '2019-04-24 06:27:50'),
(3, 3, 'DFDS342342', 'FSDFQ423432423', '100', '443', '', 'Monthly Fee', 'dfsdf', 'dfsdf', '2019-04-23', '2019-04-24 06:19:00', '2019-04-24 06:19:00'),
(4, 3, '23423432', 'sadfsdfsd', '80', '20', '', 'Annual Picnic Fee', 'dfsdf', 'dfsdf', '2019-04-23', '2019-04-24 06:19:00', '2019-04-24 06:19:00'),
(8, 9, 'CA66FW5MBT', '1904301240170yv2IyYo8flop2S', '10.00', '9.75', '', 'Yearly Fee', 'May, August', 'MOBILEBANKING', '2019-04-30 12:40:07', '2019-05-14 18:00:00', '2019-04-30 00:37:25'),
(9, 9, 'S6LSN3UC5F', '1904301247191UTDvvtzcy3gQda', '10.00', '9.75', '', 'Yearly Fee', 'May, August', 'MASTER-Dutch Bangla', '2019-04-30 12:47:08', '2019-04-30 00:44:23', '2019-04-30 00:44:23'),
(10, 9, 'M4R9BTBXLY', '190430183147Dl0LziDfKMvQ2Lm', '10.00', '9.75', '', 'Monthly Fee', 'June, August', 'BKASH-BKash', '2019-04-30 18:31:21', '2019-04-30 06:29:06', '2019-04-30 06:29:06'),
(12, 35, 'VX8E8BUV4O', 'BGW72012019050109434', '10.00', '9.75', '', 'Monthly Fee', 'July', 'BKASH-BKash', '2019-05-01 13:34:57', '2019-05-01 01:35:43', '2019-05-01 01:35:43'),
(14, 31, 'PEQ2SOP6JK', '190502164836gWS2bthWhqcyO51', '10.00', '9.75', '', 'Yearly Fee', 'Yearly Fee', 'BKASH-BKash', '2019-05-02 16:48:18', '2019-05-02 04:45:40', '2019-05-02 04:45:40'),
(15, 31, '8MB7K9C8NT', '190502164915KbrvpsavvSdVNrF', '10.00', '9.75', '', 'Monthly Fee', 'May, August', 'BKASH-BKash', '2019-05-02 16:49:08', '2019-05-02 04:46:19', '2019-05-02 04:46:19'),
(16, 31, '767TP5FYX3', '1905021650350juHDiU0KiUGVUe', '10.00', '9.75', '', 'Annual Picnic Fee', 'Annual Picnic Fee', 'BKASH-BKash', '2019-05-02 16:50:28', '2019-05-02 04:47:40', '2019-05-02 04:47:40'),
(17, 31, '2QFXR2LWWV', '1905021704161MeWYVQ5nFgJTkg', '10.00', '9.75', '', 'Yearly Fee', 'Yearly Fee', 'BKASH-BKash', '2019-05-02 17:04:05', '2019-05-02 05:01:20', '2019-05-02 05:01:20'),
(24, 48, '9LXI0Q9SS2', '190505173707tnAad2y1cajl9zk', '55.00', '53.625', '10.0', 'Yearly Fee', 'Yearly Fee ( 2019 )', 'BKASH-BKash', '2019-05-05 17:36:56', '2019-05-05 05:34:11', '2019-05-05 05:34:11'),
(25, 48, '9LXI0Q9SS2', '190505173707tnAad2y1cajl9zk', '55.00', '53.625', '25.0', 'Monthly Fee', 'February, April, June, August, October ( 2019 )', 'BKASH-BKash', '2019-05-05 17:36:56', '2019-05-05 05:34:11', '2019-05-05 05:34:11'),
(26, 48, '9LXI0Q9SS2', '190505173707tnAad2y1cajl9zk', '55.00', '53.625', '10.0', 'Yearly Fee', 'Yearly Fee ( 2021 )', 'BKASH-BKash', '2019-05-05 17:36:56', '2019-05-05 05:34:11', '2019-05-05 05:34:11'),
(27, 48, '9LXI0Q9SS2', '190505173707tnAad2y1cajl9zk', '55.00', '53.625', '10.0', 'Annual Picnic Fee', 'Annual Picnic Fee ( 2019 )', 'BKASH-BKash', '2019-05-05 17:36:56', '2019-05-05 05:34:11', '2019-05-05 05:34:11'),
(28, 49, 'OWQ8JTX23O', '190505180346KIPfA6eAX3fjJ0m', '10.00', '9.75', '10.0', 'Annual Picnic Fee', 'Annual Picnic Fee ( 2017 )', 'BKASH-BKash', '2019-05-05 18:03:19', '2019-05-05 06:00:50', '2019-05-05 06:00:50'),
(29, 49, 'KQCO8L0N3P', '1905051804040bG3Y7D4Egg44Oi', '10.00', '9.75', '10.0', 'Annual Picnic Fee', 'Annual Picnic Fee ( 2017 )', 'BKASH-BKash', '2019-05-05 18:03:54', '2019-05-05 06:01:08', '2019-05-05 06:01:08'),
(30, 49, 'P1Z4WSCVS9', 'BGW33332019050518831', '25.00', '24.37', '5.0', 'Monthly Fee', 'May ( 2019 )', 'BKASH-BKash', '2019-05-05 18:49:01', '2019-05-05 06:49:39', '2019-05-05 06:49:39'),
(31, 49, 'P1Z4WSCVS9', 'BGW33332019050518831', '25.00', '24.37', '10.0', 'Yearly Fee', 'Yearly Fee ( 2019 )', 'BKASH-BKash', '2019-05-05 18:49:01', '2019-05-05 06:49:39', '2019-05-05 06:49:39'),
(32, 49, 'P1Z4WSCVS9', 'BGW33332019050518831', '25.00', '24.37', '10.0', 'Annual Picnic Fee', 'Annual Picnic Fee ( 2018 )', 'BKASH-BKash', '2019-05-05 18:49:01', '2019-05-05 06:49:39', '2019-05-05 06:49:39'),
(33, 49, 'C5CRL7HGVW', 'BGW66292019050609551', '10.00', '9.75', '10.0', 'Monthly Fee', 'May, June ( 2019 )', 'BKASH-BKash', '2019-05-06 10:50:03', '2019-05-05 22:50:47', '2019-05-05 22:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rashed', 'roketvai16@gmail.com', NULL, '$2y$10$c.DGxHyBVTEe.wAkHxfynudu5bwtwfURgHanNXQmIrkDQg99Epagm', NULL, '2019-04-22 23:15:59', '2019-05-14 00:35:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `paytypes`
--
ALTER TABLE `paytypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paytypes`
--
ALTER TABLE `paytypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
