-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 05:26 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afqami_laravel_lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_cms_pages`
--

CREATE TABLE `afqami_laravel_lib_cms_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_contact_us`
--

CREATE TABLE `afqami_laravel_lib_contact_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_countries`
--

CREATE TABLE `afqami_laravel_lib_countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `afqami_laravel_lib_countries`
--

INSERT INTO `afqami_laravel_lib_countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'INDIA', '2018-09-17 11:20:23', '2018-09-17 05:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_districts`
--

CREATE TABLE `afqami_laravel_lib_districts` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_email_templates`
--

CREATE TABLE `afqami_laravel_lib_email_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `afqami_laravel_lib_email_templates`
--

INSERT INTO `afqami_laravel_lib_email_templates` (`id`, `name`, `subject`, `value`, `template_key`, `validate`, `parameter`, `created_at`, `updated_at`) VALUES
(1, 'Registration Successful', 'Registration Successful', '', 'registration-successful', 'required', '{{$USER_NAME}},{{$SITE_EMAIL}},{{$SITE_TITLE}}', NULL, NULL),
(2, 'Contact Us Thanks', 'Contact Us', '', 'contact-us-thanks', 'required', '{{$USER_NAME}},{{$SITE_EMAIL}},{{$SITE_TITLE}}', NULL, NULL),
(3, 'Contact Us Reply', 'Contact Us Reply', '', 'contact-us-reply', 'required', '{{$SITE_EMAIL}},{{$SITE_TITLE}},{{$MESSAGE}}', NULL, NULL),
(4, 'Registration Successful', 'Registration Successful', '', 'registration-successful', 'required', '{{$USER_NAME}},{{$SITE_EMAIL}},{{$SITE_TITLE}}', NULL, NULL),
(5, 'Contact Us Thanks', 'Contact Us', '', 'contact-us-thanks', 'required', '{{$USER_NAME}},{{$SITE_EMAIL}},{{$SITE_TITLE}}', NULL, NULL),
(6, 'Contact Us Reply', 'Contact Us Reply', '', 'contact-us-reply', 'required', '{{$SITE_EMAIL}},{{$SITE_TITLE}},{{$MESSAGE}}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_faqs`
--

CREATE TABLE `afqami_laravel_lib_faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_global_values`
--

CREATE TABLE `afqami_laravel_lib_global_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `afqami_laravel_lib_global_values`
--

INSERT INTO `afqami_laravel_lib_global_values` (`id`, `name`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(1, 'contact', 'contact', '9028285332', NULL, NULL),
(2, 'site email', 'site-email', 'aamir@mail.com', NULL, NULL),
(3, 'facebook link', 'facebook', 'www.facebook.com', NULL, NULL),
(4, 'twiter link', 'twitter', 'twitter.com', NULL, NULL),
(5, 'site title', 'site-title', 'Afqami Tech', NULL, '2018-06-03 05:38:49'),
(6, 'google plus', 'google-plus', 'plus.google.com', NULL, NULL),
(7, 'Site Logo', 'site-logo', '1528023672.png', NULL, '2018-06-03 05:31:12'),
(8, 'contact', 'contact', '9028285332', NULL, NULL),
(9, 'site email', 'site-email', 'aamir@mail.com', NULL, NULL),
(10, 'facebook link', 'facebook', 'www.facebook.com', NULL, NULL),
(11, 'twiter link', 'twitter', 'twitter.com', NULL, NULL),
(12, 'site title', 'site-title', 'Afqami', NULL, NULL),
(13, 'google plus', 'google-plus', 'plus.google.com', NULL, NULL),
(14, 'Site Logo', 'site-logo', '', NULL, NULL),
(15, 'contact', 'contact', '9028285332', NULL, NULL),
(16, 'site email', 'site-email', 'aamir@mail.com', NULL, NULL),
(17, 'facebook link', 'facebook', 'www.facebook.com', NULL, NULL),
(18, 'twiter link', 'twitter', 'twitter.com', NULL, NULL),
(19, 'site title', 'site-title', 'Afqami', NULL, NULL),
(20, 'google plus', 'google-plus', 'plus.google.com', NULL, NULL),
(21, 'Site Logo', 'site-logo', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_migrations`
--

CREATE TABLE `afqami_laravel_lib_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `afqami_laravel_lib_migrations`
--

INSERT INTO `afqami_laravel_lib_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_01_194524_create_global_values_table', 1),
(4, '2018_06_01_204217_create_cms_table', 1),
(5, '2018_06_01_205906_create_email_templates_table', 1),
(6, '2018_06_01_212525_create_permissions_table', 1),
(7, '2018_06_01_212525_create_role_and_permissions_table', 1),
(8, '2018_06_01_212525_create_roles_table', 1),
(9, '2018_06_01_212525_create_user_roles_table', 1),
(10, '2018_06_01_213546_create_contact_uses_table', 1),
(11, '2018_06_01_214658_create_faqs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_password_resets`
--

CREATE TABLE `afqami_laravel_lib_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_permissions`
--

CREATE TABLE `afqami_laravel_lib_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `module_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `afqami_laravel_lib_permissions`
--

INSERT INTO `afqami_laravel_lib_permissions` (`id`, `module_name`, `permission`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Global Values', 'View Global Values', 'view.global.values', NULL, NULL),
(2, 'Global Values', 'Update Global Values', 'update.global.values', NULL, NULL),
(3, 'Standards', 'View Standards', 'view.standards', NULL, NULL),
(4, 'Standards', 'Create Standards', 'create.standards', NULL, NULL),
(5, 'Standards', 'Update Standards', 'update.standards', NULL, NULL),
(6, 'Standards', 'Delete Standards', 'delete.standards', NULL, NULL),
(7, 'Roles', 'View Roles', 'view.roles', NULL, NULL),
(8, 'Roles', 'Create Roles', 'create.roles', NULL, NULL),
(9, 'Roles', 'Update Roles', 'update.roles', NULL, NULL),
(10, 'Roles', 'Delete Roles', 'delete.roles', NULL, NULL),
(11, 'Roles', 'Set Permissions', 'set.permissions', NULL, NULL),
(12, 'Competitive Exams', 'View Exams', 'view.exams', NULL, NULL),
(13, 'Competitive Exams', 'Create Exams', 'create.exams', NULL, NULL),
(14, 'Competitive Exams', 'Update Exams', 'update.exams', NULL, NULL),
(15, 'Competitive Exams', 'Delete Exams', 'delete.exams', NULL, NULL),
(16, 'Boards', 'View Boards', 'view.boards', NULL, NULL),
(17, 'Boards', 'Create Boards', 'create.boards', NULL, NULL),
(18, 'Boards', 'Update Boards', 'update.boards', NULL, NULL),
(19, 'Boards', 'Delete Boards', 'delete.boards', NULL, NULL),
(20, 'Users', 'View Users', 'view.users', NULL, NULL),
(21, 'Users', 'Create Users', 'create.users', NULL, NULL),
(22, 'Users', 'Update Users', 'update.users', NULL, NULL),
(23, 'Users', 'Delete Users', 'delete.users', NULL, NULL),
(24, 'Email Templates', 'View Email Templates', 'view.emailtemplates', NULL, NULL),
(25, 'Email Templates', 'Update Email Templates', 'update.emailtemplates', NULL, NULL),
(26, 'Cms', 'View Cms', 'view.cms', NULL, NULL),
(27, 'Cms', 'Update Cms', 'update.cms', NULL, NULL),
(28, 'Contact Us', 'View Contact Us', 'view.contactus', NULL, NULL),
(29, 'Contact Us', 'ReplyContact Us', 'reply.contactus', NULL, NULL),
(30, 'Faqs', 'View Faqs', 'view.faqs', NULL, NULL),
(31, 'Faqs', 'Create Faqs', 'create.faqs', NULL, NULL),
(32, 'Faqs', 'Update Faqs', 'update.faqs', NULL, NULL),
(33, 'Faqs', 'Delete Faqs', 'delete.faqs', NULL, NULL),
(34, 'Global Values', 'View Global Values', 'view.global.values', NULL, NULL),
(35, 'Global Values', 'Update Global Values', 'update.global.values', NULL, NULL),
(36, 'Standards', 'View Standards', 'view.standards', NULL, NULL),
(37, 'Standards', 'Create Standards', 'create.standards', NULL, NULL),
(38, 'Standards', 'Update Standards', 'update.standards', NULL, NULL),
(39, 'Standards', 'Delete Standards', 'delete.standards', NULL, NULL),
(40, 'Roles', 'View Roles', 'view.roles', NULL, NULL),
(41, 'Roles', 'Create Roles', 'create.roles', NULL, NULL),
(42, 'Roles', 'Update Roles', 'update.roles', NULL, NULL),
(43, 'Roles', 'Delete Roles', 'delete.roles', NULL, NULL),
(44, 'Roles', 'Set Permissions', 'set.permissions', NULL, NULL),
(45, 'Competitive Exams', 'View Exams', 'view.exams', NULL, NULL),
(46, 'Competitive Exams', 'Create Exams', 'create.exams', NULL, NULL),
(47, 'Competitive Exams', 'Update Exams', 'update.exams', NULL, NULL),
(48, 'Competitive Exams', 'Delete Exams', 'delete.exams', NULL, NULL),
(49, 'Boards', 'View Boards', 'view.boards', NULL, NULL),
(50, 'Boards', 'Create Boards', 'create.boards', NULL, NULL),
(51, 'Boards', 'Update Boards', 'update.boards', NULL, NULL),
(52, 'Boards', 'Delete Boards', 'delete.boards', NULL, NULL),
(53, 'Users', 'View Users', 'view.users', NULL, NULL),
(54, 'Users', 'Create Users', 'create.users', NULL, NULL),
(55, 'Users', 'Update Users', 'update.users', NULL, NULL),
(56, 'Users', 'Delete Users', 'delete.users', NULL, NULL),
(57, 'Email Templates', 'View Email Templates', 'view.emailtemplates', NULL, NULL),
(58, 'Email Templates', 'Update Email Templates', 'update.emailtemplates', NULL, NULL),
(59, 'Cms', 'View Cms', 'view.cms', NULL, NULL),
(60, 'Cms', 'Update Cms', 'update.cms', NULL, NULL),
(61, 'Contact Us', 'View Contact Us', 'view.contactus', NULL, NULL),
(62, 'Contact Us', 'ReplyContact Us', 'reply.contactus', NULL, NULL),
(63, 'Faqs', 'View Faqs', 'view.faqs', NULL, NULL),
(64, 'Faqs', 'Create Faqs', 'create.faqs', NULL, NULL),
(65, 'Faqs', 'Update Faqs', 'update.faqs', NULL, NULL),
(66, 'Faqs', 'Delete Faqs', 'delete.faqs', NULL, NULL),
(67, 'Global Values', 'View Global Values', 'view.global.values', NULL, NULL),
(68, 'Global Values', 'Update Global Values', 'update.global.values', NULL, NULL),
(69, 'Standards', 'View Standards', 'view.standards', NULL, NULL),
(70, 'Standards', 'Create Standards', 'create.standards', NULL, NULL),
(71, 'Standards', 'Update Standards', 'update.standards', NULL, NULL),
(72, 'Standards', 'Delete Standards', 'delete.standards', NULL, NULL),
(73, 'Roles', 'View Roles', 'view.roles', NULL, NULL),
(74, 'Roles', 'Create Roles', 'create.roles', NULL, NULL),
(75, 'Roles', 'Update Roles', 'update.roles', NULL, NULL),
(76, 'Roles', 'Delete Roles', 'delete.roles', NULL, NULL),
(77, 'Roles', 'Set Permissions', 'set.permissions', NULL, NULL),
(78, 'Competitive Exams', 'View Exams', 'view.exams', NULL, NULL),
(79, 'Competitive Exams', 'Create Exams', 'create.exams', NULL, NULL),
(80, 'Competitive Exams', 'Update Exams', 'update.exams', NULL, NULL),
(81, 'Competitive Exams', 'Delete Exams', 'delete.exams', NULL, NULL),
(82, 'Boards', 'View Boards', 'view.boards', NULL, NULL),
(83, 'Boards', 'Create Boards', 'create.boards', NULL, NULL),
(84, 'Boards', 'Update Boards', 'update.boards', NULL, NULL),
(85, 'Boards', 'Delete Boards', 'delete.boards', NULL, NULL),
(86, 'Users', 'View Users', 'view.users', NULL, NULL),
(87, 'Users', 'Create Users', 'create.users', NULL, NULL),
(88, 'Users', 'Update Users', 'update.users', NULL, NULL),
(89, 'Users', 'Delete Users', 'delete.users', NULL, NULL),
(90, 'Email Templates', 'View Email Templates', 'view.emailtemplates', NULL, NULL),
(91, 'Email Templates', 'Update Email Templates', 'update.emailtemplates', NULL, NULL),
(92, 'Cms', 'View Cms', 'view.cms', NULL, NULL),
(93, 'Cms', 'Update Cms', 'update.cms', NULL, NULL),
(94, 'Contact Us', 'View Contact Us', 'view.contactus', NULL, NULL),
(95, 'Contact Us', 'ReplyContact Us', 'reply.contactus', NULL, NULL),
(96, 'Faqs', 'View Faqs', 'view.faqs', NULL, NULL),
(97, 'Faqs', 'Create Faqs', 'create.faqs', NULL, NULL),
(98, 'Faqs', 'Update Faqs', 'update.faqs', NULL, NULL),
(99, 'Faqs', 'Delete Faqs', 'delete.faqs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_roles`
--

CREATE TABLE `afqami_laravel_lib_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_role_and_permission`
--

CREATE TABLE `afqami_laravel_lib_role_and_permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_states`
--

CREATE TABLE `afqami_laravel_lib_states` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_talukas`
--

CREATE TABLE `afqami_laravel_lib_talukas` (
  `id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_users`
--

CREATE TABLE `afqami_laravel_lib_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1=>admin,2=>user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `afqami_laravel_lib_users`
--

INSERT INTO `afqami_laravel_lib_users` (`id`, `email`, `name`, `mobile`, `password`, `city`, `state`, `address`, `activation_code`, `user_status`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aamirkazi47@gmail.com', 'Super Admin', '9028285332', '$2y$10$2zBi1JYcQ/Gr7wqtD.zy6OSNXJa13FgI56BG9zxxv7se.g/qjEkaS', 'pune', 'maharashtra', '', '', '1', '1', 'VzKviSKlrzD6nPUfDAeLrHBKufdSkfhvQEw1fr7OcyAWRqd0V13SerBfU12o', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `afqami_laravel_lib_user_roles`
--

CREATE TABLE `afqami_laravel_lib_user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afqami_laravel_lib_cms_pages`
--
ALTER TABLE `afqami_laravel_lib_cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_contact_us`
--
ALTER TABLE `afqami_laravel_lib_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_countries`
--
ALTER TABLE `afqami_laravel_lib_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_districts`
--
ALTER TABLE `afqami_laravel_lib_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_email_templates`
--
ALTER TABLE `afqami_laravel_lib_email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_faqs`
--
ALTER TABLE `afqami_laravel_lib_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_global_values`
--
ALTER TABLE `afqami_laravel_lib_global_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_migrations`
--
ALTER TABLE `afqami_laravel_lib_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_permissions`
--
ALTER TABLE `afqami_laravel_lib_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_roles`
--
ALTER TABLE `afqami_laravel_lib_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_role_and_permission`
--
ALTER TABLE `afqami_laravel_lib_role_and_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_states`
--
ALTER TABLE `afqami_laravel_lib_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_talukas`
--
ALTER TABLE `afqami_laravel_lib_talukas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_users`
--
ALTER TABLE `afqami_laravel_lib_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afqami_laravel_lib_user_roles`
--
ALTER TABLE `afqami_laravel_lib_user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_cms_pages`
--
ALTER TABLE `afqami_laravel_lib_cms_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_contact_us`
--
ALTER TABLE `afqami_laravel_lib_contact_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_countries`
--
ALTER TABLE `afqami_laravel_lib_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_districts`
--
ALTER TABLE `afqami_laravel_lib_districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_email_templates`
--
ALTER TABLE `afqami_laravel_lib_email_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_faqs`
--
ALTER TABLE `afqami_laravel_lib_faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_global_values`
--
ALTER TABLE `afqami_laravel_lib_global_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_migrations`
--
ALTER TABLE `afqami_laravel_lib_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_permissions`
--
ALTER TABLE `afqami_laravel_lib_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_roles`
--
ALTER TABLE `afqami_laravel_lib_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_role_and_permission`
--
ALTER TABLE `afqami_laravel_lib_role_and_permission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_states`
--
ALTER TABLE `afqami_laravel_lib_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_talukas`
--
ALTER TABLE `afqami_laravel_lib_talukas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_users`
--
ALTER TABLE `afqami_laravel_lib_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `afqami_laravel_lib_user_roles`
--
ALTER TABLE `afqami_laravel_lib_user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
