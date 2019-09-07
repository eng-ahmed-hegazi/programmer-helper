-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2019 at 05:39 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `programmer_helper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed', 'ahmed@gmail.com', '$2y$10$b7fHjRfWedvIedtqJPt5Y.CnnWxzgM96aoQAqCwY.ktAW8Su0bIrS', 'KsXS6dUZ4h9MNg44liUP0HdpTZbKu1i5G2InNZayCQddTNCT4LtgIwaWqwLf', '2019-07-11 19:17:28', '2019-07-11 19:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_language_id_foreign` (`language_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web', '2019-07-11 20:39:13', '2019-07-13 12:54:00'),
(2, 'Design', '2019-07-11 20:39:31', '2019-07-11 20:39:31'),
(3, 'Desktop Application', '2019-07-13 19:48:40', '2019-07-13 19:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `resource_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_resources_id_foreign` (`resource_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contacts_language_id_foreign` (`language_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fqas`
--

DROP TABLE IF EXISTS `fqas`;
CREATE TABLE IF NOT EXISTS `fqas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fqas_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

DROP TABLE IF EXISTS `interviews`;
CREATE TABLE IF NOT EXISTS `interviews` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `interviews_language_id_foreign` (`language_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `languages_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Html', 'Hyper Text Markup Language', 2, '2019-07-11 20:40:05', '2019-07-13 20:20:39'),
(2, 'Css', 'this is my love', 2, '2019-07-12 22:11:14', '2019-07-13 14:00:27'),
(3, 'Javascript', 'Mohamemd', 2, '2019-07-13 09:33:08', '2019-07-13 14:00:37'),
(4, 'JQuery', 'jQuery is a lightweight, \"write less, do more\", JavaScript library.\r\n\r\nThe purpose of jQuery is to make it much easier to use JavaScript on your website.\r\n\r\njQuery takes a lot of common tasks that require many lines of JavaScript code to accomplish, and wraps them into methods that you can call with a single line of code.\r\n\r\njQuery also simplifies a lot of the complicated things from JavaScript, like AJAX calls and DOM manipulation.\r\n\r\nThe jQuery library contains the following features:', 2, '2019-07-13 20:21:34', '2019-07-13 20:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `languages_tags`
--

DROP TABLE IF EXISTS `languages_tags`;
CREATE TABLE IF NOT EXISTS `languages_tags` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `language_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `languages_tags_language_id_foreign` (`language_id`),
  KEY `languages_tags_tag_id_foreign` (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_resets_table', 1),
(37, '2019_06_14_084334_create_categories_table', 1),
(38, '2019_06_14_084355_create_languages_table', 1),
(39, '2019_06_15_130846_create_resources_table', 1),
(40, '2019_06_15_130901_create_interviews_table', 1),
(41, '2019_06_15_130909_create_articles_table', 1),
(42, '2019_06_15_130924_create_tags_table', 1),
(43, '2019_06_15_130935_create_comments_table', 1),
(44, '2019_06_15_130940_create_rates_table', 1),
(45, '2019_06_15_131001_create_admins_table', 1),
(46, '2019_06_15_131007_create_profiles_table', 1),
(47, '2019_06_15_131015_create_settings_table', 1),
(48, '2019_06_15_143544_create_languages_tags_table', 1),
(49, '2019_06_16_094829_create_types_table', 1),
(50, '2019_06_16_164822_create_contacts_table', 1),
(51, '2019_06_16_225053_create_fqas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

DROP TABLE IF EXISTS `rates`;
CREATE TABLE IF NOT EXISTS `rates` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `stars` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `resource_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rates_user_id_foreign` (`user_id`),
  KEY `rates_resources_id_foreign` (`resource_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `resources_type_id_foreign` (`type_id`),
  KEY `resources_language_id_foreign` (`language_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `name`, `description`, `url`, `slug`, `type_id`, `language_id`, `created_at`, `updated_at`) VALUES
(1, 'Interodiction To Web Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad excepturi explicabo id labore minus molestias nam nobis perspiciatis, porro quo rerum sint sunt temporibus veritatis vitae. Ab accusamus animi debitis dolore dolores ex, exercitationem fuga illum, ipsam laboriosam mollitia nesciunt nisi nobis nulla optio quos ratione repellendus veniam veritatis, vero.', 'http://www.google.com', 'interodiction-to-web-design', 1, 1, '2019-07-12 22:15:15', '2019-07-13 12:16:13'),
(2, 'Responisive Design in Bootstrap', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad excepturi explicabo id labore minus molestias nam nobis perspiciatis, porro quo rerum sint sunt temporibus veritatis vitae. Ab accusamus animi debitis dolore dolores ex, exercitationem fuga illum, ipsam laboriosam mollitia nesciunt nisi nobis nulla optio quos ratione repellendus veniam veritatis, vero.', 'http://www.google.com', 'responisive-design-in-bootstrap', 2, 1, '2019-07-12 22:15:44', '2019-07-13 12:17:30'),
(3, 'HTML Tags', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad excepturi explicabo id labore minus molestias nam nobis perspiciatis, porro quo rerum sint sunt temporibus veritatis vitae. Ab accusamus animi debitis dolore dolores ex, exercitationem fuga illum, ipsam laboriosam mollitia nesciunt nisi nobis nulla optio quos ratione repellendus veniam veritatis, vero.', 'http://www.google.com', 'html-tags', 1, 1, '2019-07-13 00:24:21', '2019-07-13 16:31:23'),
(4, 'Css Background', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad excepturi explicabo id labore minus molestias nam nobis perspiciatis, porro quo rerum sint sunt temporibus veritatis vitae. Ab accusamus animi debitis dolore dolores ex, exercitationem fuga illum, ipsam laboriosam mollitia nesciunt nisi nobis nulla optio quos ratione repellendus veniam veritatis, vero.', 'http://www.google.com', 'css-background', 2, 2, '2019-07-13 00:29:12', '2019-07-13 16:31:04'),
(5, 'Introdiction To DOM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad excepturi explicabo id labore minus molestias nam nobis perspiciatis, porro quo rerum sint sunt temporibus veritatis vitae. Ab accusamus animi debitis dolore dolores ex, exercitationem fuga illum, ipsam laboriosam mollitia nesciunt nisi nobis nulla optio quos ratione repellendus veniam veritatis, vero.', 'http://www.google.com', 'introdiction-to-dom', 2, 3, '2019-07-13 09:33:33', '2019-07-13 16:29:50'),
(6, 'DOM Elements Parent , Child', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad excepturi explicabo id labore minus molestias nam nobis perspiciatis, porro quo rerum sint sunt temporibus veritatis vitae. Ab accusamus animi debitis dolore dolores ex, exercitationem fuga illum, ipsam laboriosam mollitia nesciunt nisi nobis nulla optio quos ratione repellendus veniam veritatis, vero.', 'http://www.google.com', 'dom-elements-parent-child', 4, 3, '2019-07-13 09:40:26', '2019-07-13 16:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `contact_number`, `contact_email`, `contact_address`, `contact_facebook`, `contact_twitter`, `contact_youtube`, `about`, `created_at`, `updated_at`) VALUES
(1, 'PROGRAMMER HELPER', '+20 0111 783 5451', 'ahemdhegazy214@gmail.com', 'Eqy - Sohag - gehena', 'facebook.com', 'twitter.com', 'youtube.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti, labore?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti, labore? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti, labore?', '2019-07-11 19:17:27', '2019-07-11 19:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web', '2019-07-11 20:39:39', '2019-07-11 20:39:39'),
(2, 'Design', '2019-07-11 22:26:57', '2019-07-11 22:27:03'),
(3, 'Programming', '2019-07-11 22:27:11', '2019-07-11 22:27:11'),
(4, 'Coding', '2019-07-11 22:27:18', '2019-07-11 22:27:18'),
(5, 'Famouse', '2019-07-11 22:27:32', '2019-07-11 22:27:32'),
(6, 'Rocky', '2019-07-11 22:27:41', '2019-07-11 22:27:41'),
(7, 'Semantic', '2019-07-11 22:28:00', '2019-07-11 22:28:00'),
(8, 'Framwork', '2019-07-11 22:28:07', '2019-07-11 22:28:07'),
(9, 'Libirary', '2019-07-11 22:28:18', '2019-07-11 22:28:18');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Books', '2019-07-11 20:40:15', '2019-07-11 20:40:15'),
(2, 'Youtube Playlist', '2019-07-11 20:40:25', '2019-07-13 12:53:47'),
(3, 'Facebook Groups', '2019-07-11 20:41:46', '2019-07-11 20:41:46'),
(4, 'Github Projects', '2019-07-11 20:41:55', '2019-07-11 20:41:55'),
(5, 'Lynda Free Cources', '2019-07-11 20:42:06', '2019-07-11 20:42:06'),
(6, 'Udamy Free Cources', '2019-07-11 20:42:15', '2019-07-11 20:42:15'),
(7, 'Udacity Free Cources', '2019-07-11 20:42:27', '2019-07-11 20:42:27'),
(8, 'Blogs', '2019-07-11 21:40:39', '2019-07-11 21:40:39'),
(10, 'Documentation', '2019-07-11 21:41:05', '2019-07-11 21:41:05'),
(11, 'Websites', '2019-07-11 21:41:17', '2019-07-11 21:41:17'),
(12, 'Tools & Editors', '2019-07-11 21:41:37', '2019-07-11 21:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohammed', 'Mohammed@gmail.com', '01117835451', '$2y$10$8bLDK6FEYcwRHmrCTl/FX.0ob3GsFqqeb8UvW.vQrw7Cw.lI2p9y.', 'FxNNfFz5b1dfdRv0jKii5M3xQOkN3LRycv53tTFEesIgWKQjAxx8I5dE9jtG', '2019-07-11 19:20:06', '2019-07-11 19:20:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
