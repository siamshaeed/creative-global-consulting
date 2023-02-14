-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 10:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creative-global-consultancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category Name',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inActive, 1=Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `edu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `edu_name`, `gpa`, `group`, `institute`, `board`, `pass_year`, `created_at`, `updated_at`) VALUES
(1, 1, 'SSC', '4.50', 'Science', 'Ideal School', 'Dhaka', '2021', '2022-11-17 00:16:14', '2022-11-17 00:16:14'),
(3, 2, 'SSC', '4.50', 'Science', 'Dhaka International University', 'Dhaka', '2018', '2022-11-17 01:14:25', '2022-11-17 01:14:25');

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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `email`, `phone`, `partner`, `created_at`, `updated_at`) VALUES
(1, 'Siam', 'siamshaeed@gmail.com', '01787972797', '1', '2022-11-17 01:09:01', '2022-11-17 01:09:01'),
(2, 'Ridoy', 'ridoy@gmail.com', '01787973737', '2', '2022-11-17 01:10:20', '2022-11-17 01:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `lang_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publications` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_12_164245_create_categories_table', 1),
(6, '2022_10_19_055528_create_permission_tables', 1),
(16, '2022_10_25_081214_create_educations_table', 3),
(20, '2022_10_25_081326_create_languages_table', 4),
(23, '2022_10_27_094939_create_universities_table', 6),
(25, '2014_10_12_000000_create_users_table', 7),
(27, '2022_11_03_112811_create_files_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 3),
(1, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 6),
(10, 'App\\Models\\User', 1),
(11, 'App\\Models\\User', 5);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user_view', 'web', '2022-10-23 01:35:05', '2022-10-28 21:54:56'),
(2, 'user_creare', 'web', '2022-10-23 01:35:16', '2022-10-23 01:35:16'),
(3, 'user_delete', 'web', '2022-10-23 01:35:25', '2022-10-23 01:35:25'),
(11, 'user_update', 'web', '2022-10-29 22:41:15', '2022-10-29 22:41:15'),
(12, 'permission_create', 'web', '2022-10-29 22:44:02', '2022-10-29 22:44:02'),
(13, 'permission_edit', 'web', '2022-10-29 22:44:24', '2022-10-29 22:44:24'),
(14, 'permission_view', 'web', '2022-10-29 22:44:35', '2022-10-29 22:44:35'),
(15, 'permission_delete', 'web', '2022-10-29 22:44:43', '2022-10-30 06:07:46'),
(16, 'role_create', 'web', '2022-10-29 22:45:03', '2022-10-29 22:45:03'),
(17, 'role_edit', 'web', '2022-10-29 22:45:11', '2022-10-29 22:45:11'),
(18, 'role_update', 'web', '2022-10-29 22:46:10', '2022-10-29 22:46:10'),
(19, 'role_delete', 'web', '2022-10-29 22:46:20', '2022-10-29 22:46:20'),
(20, 'role_view', 'web', '2022-10-29 22:46:38', '2022-10-29 22:46:38'),
(21, 'user_edit', 'web', '2022-10-29 22:47:13', '2022-10-29 22:47:13'),
(22, 'dashboard', 'web', '2022-10-29 23:05:19', '2022-10-29 23:05:19'),
(23, 'user_list', 'web', '2022-10-29 23:11:34', '2022-10-29 23:11:34'),
(24, 'settings', 'web', '2022-10-29 23:15:14', '2022-10-29 23:15:14'),
(25, 'university', 'web', '2022-11-17 02:06:38', '2022-11-17 02:06:38'),
(26, 'file', 'web', '2022-11-17 02:10:51', '2022-11-17 02:10:51'),
(27, 'profile', 'web', '2022-12-01 01:13:58', '2022-12-01 01:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'User', 'web', '2022-10-23 01:34:39', '2022-10-23 02:07:56'),
(10, 'Admin', 'web', '2022-10-29 22:39:23', '2022-10-29 22:39:23'),
(11, 'Executive', 'web', '2022-11-20 03:12:42', '2022-11-20 03:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 10),
(2, 10),
(3, 1),
(3, 10),
(11, 1),
(11, 10),
(12, 10),
(13, 10),
(14, 10),
(15, 10),
(16, 10),
(17, 10),
(18, 10),
(19, 10),
(20, 10),
(21, 1),
(21, 10),
(22, 10),
(22, 11),
(23, 10),
(23, 11),
(24, 10),
(25, 10),
(25, 11),
(26, 10),
(26, 11),
(27, 10),
(27, 11);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pathway_provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ug_ac_req_education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ug_ac_req_gpa` decimal(8,2) DEFAULT NULL,
  `ug_ac_req_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ug_is_active` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `ug_ielts_start` decimal(8,2) DEFAULT NULL,
  `ug_ielts_end` decimal(8,2) DEFAULT NULL,
  `pg_ac_req_education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pg_ac_req_cgpa` decimal(8,2) DEFAULT NULL,
  `pg_ac_req_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pg_is_active` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `pg_ielts_start` decimal(8,2) DEFAULT NULL,
  `pg_ielts_end` decimal(8,2) DEFAULT NULL,
  `oietc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internal_test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duolingo_is_active` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `duolingo_start` int(11) DEFAULT NULL,
  `duolingo_end` int(11) DEFAULT NULL,
  `pg_study_gap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tution_fees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scholarships` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `pathway_provider`, `ug_ac_req_education`, `ug_ac_req_gpa`, `ug_ac_req_group`, `ug_is_active`, `ug_ielts_start`, `ug_ielts_end`, `pg_ac_req_education`, `pg_ac_req_cgpa`, `pg_ac_req_group`, `pg_is_active`, `pg_ielts_start`, `pg_ielts_end`, `oietc`, `internal_test`, `moi`, `duolingo_is_active`, `duolingo_start`, `duolingo_end`, `pg_study_gap`, `tution_fees`, `scholarships`, `remarks`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka International University', 'Study Group', 'HSC', '4.00', 'Science', 'active', '5.00', '6.00', 'Foundation', '3.50', 'Science', 'active', '5.00', '6.50', 'No', NULL, NULL, 'active', 70, 100, '2year', '500000', '100000', 'No Remarks', 1, '2022-11-17 00:36:01', '2022-11-17 00:36:01'),
(2, 'Daffodil International University', 'Direct', 'HSC', '3.50', 'Science', 'active', '6.00', '7.00', 'HSC', '3.50', 'Science', 'active', '6.00', '7.00', 'No', 'No', 'No', 'active', 90, 150, '3year', '700000', '100000', 'No Remarks', 1, '2022-11-17 00:56:40', '2022-11-17 00:56:40'),
(3, 'BRACK university', 'Direct', 'Foundation', '5.00', 'Science', 'active', '7.00', '8.00', 'Foundation', '4.00', 'Science', 'active', '6.50', '8.00', 'No', 'No', 'No', 'active', 100, 150, '3year', '900000', '200000', 'No Remarks', 1, '2022-11-17 01:03:32', '2022-11-17 01:03:32'),
(4, 'DU', 'Direct', 'HSC', '2.50', 'Commerce', 'active', '4.00', '6.00', 'Foundation', '2.50', 'Science', 'active', '4.50', '6.50', 'No', 'No', 'No', 'inactive', NULL, NULL, 'No', '400000', '100000', 'No Remarks', 1, '2022-11-17 01:05:57', '2022-11-17 01:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_exam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_num` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ielts` tinyint(4) DEFAULT NULL,
  `ielts_score` double(8,2) DEFAULT NULL,
  `douling` tinyint(4) DEFAULT NULL,
  `douling_score` double(8,2) DEFAULT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `runiversity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expsubject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gurdian_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peraddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ielts_publication` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toefl` tinyint(4) DEFAULT NULL,
  `toefl_score` double(8,2) DEFAULT NULL,
  `toefl_publication` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `douling_publication` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `nid`, `birth`, `gender`, `graduation_level`, `name_of_exam`, `institute`, `gpa`, `cgpa`, `group`, `pass_year`, `passport`, `passport_num`, `ielts`, `ielts_score`, `douling`, `douling_score`, `blood`, `religion`, `father`, `mother`, `reference`, `facebook`, `runiversity`, `expsubject`, `gurdian_phone`, `paddress`, `peraddress`, `ielts_publication`, `toefl`, `toefl_score`, `toefl_publication`, `douling_publication`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '01787000000', '3457654332', '2021-04-05', '1', '1', '1', 'Ideal College', '4.50', NULL, 'Science', '2021', '23456792', '23456734', 1, 5.00, NULL, NULL, '7', '1', 'A, Hossain', 'M, Naher', 'Nasim', 'facebook.com/admin', 'Dhaka International University', 'CSE', '01787000000', 'Kathalbagan, Dhaka, Bangladesh', 'Kurigram, Rangpur', NULL, NULL, NULL, NULL, NULL, '$2y$10$i7gsX2PkPuT8pkkqqV8kN.9183fz8g.UhzEIRI.N3aN6BXdvvXNAa', NULL, '2022-11-17 00:03:25', '2022-12-01 02:03:59'),
(2, 'Siam', 'siam@gmail.com', NULL, '01787972797', '65434676544', '2010-01-01', '1', '1', '1', 'Dhaka College', '5', NULL, 'Science', '2018', '236784343', '65434566', 1, 6.00, NULL, NULL, '7', '1', 'D, Hossain', 'S, Naher', 'Not Reference', 'facebook.com/siamshaeed', 'Dhaka International University', 'CSE', '01787972799', 'Kathalbagan, Dhaka', 'Kurigram, Rangpur', NULL, NULL, NULL, NULL, NULL, '$2y$10$wgDkrtwcPhZjD1UzUjHu6.MOOEO0tnbsWu1wZTVNjD.QQN2GYO7/y', NULL, '2022-11-17 00:42:50', '2022-11-17 01:14:25'),
(3, 'Liza', 'liza@gmail.com', NULL, '01787989898', '45333333336', '2019-06-18', '2', '2', '2', 'Daffodil International University', NULL, '3.50', 'CSE', '2020', '1', '54322222', 1, 6.00, 1, 80.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$ZID8EZw9dKSm2/TvKOerG.ecEe/sQuqlEMAviDkHfKK4dv2.uwltO', NULL, '2022-11-17 00:44:57', '2022-11-17 00:44:57'),
(4, 'Saif', 'saif@gmail.com', NULL, '01787972798', '6543', '2022-11-15', '1', '1', '1', 'UIU', '4', NULL, 'Science', '2018', '1', '6543', 1, 5.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Ea7UZf2YMLkHq7Tivmb/3uLj7uv3DeTevf7gpCFbkBpaNijCz.iNC', NULL, '2022-11-17 03:28:50', '2022-11-17 03:28:50'),
(5, 'Executive', 'executive@gmail.com', NULL, '01787000000', NULL, '2022-11-18', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Ovt3mY0xImpl0/oRP.5BjOtGTiFdSrRwkR9QwJ190wIQE/IOW0.5S', NULL, '2022-11-20 01:29:04', '2022-11-20 03:13:59'),
(6, 'Arif', 'arif@gmail.com', NULL, '01787987676', '2345432', '2022-11-15', '1', '2', '2', 'NSU', NULL, '3.50', 'CSE', '2016', '1', '6786545434', 1, 7.50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$jyqqUIH/ZAICH47JoW8s1eMgibS1EXaYqS5nS6Kfkg7emXwop2aCy', NULL, '2022-11-20 22:51:47', '2022-11-20 22:51:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
