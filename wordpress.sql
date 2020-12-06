-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 07 déc. 2020 à 00:29
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wordpress`
--

-- --------------------------------------------------------

--
-- Structure de la table `boutique`
--

CREATE TABLE `boutique` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_actionscheduler_actions`
--

CREATE TABLE `wp_actionscheduler_actions` (
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `hook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scheduled_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `scheduled_date_local` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `args` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `attempts` int(11) NOT NULL DEFAULT 0,
  `last_attempt_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_attempt_local` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `claim_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `extended_args` varchar(8000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_actionscheduler_actions`
--

INSERT INTO `wp_actionscheduler_actions` (`action_id`, `hook`, `status`, `scheduled_date_gmt`, `scheduled_date_local`, `args`, `schedule`, `group_id`, `attempts`, `last_attempt_gmt`, `last_attempt_local`, `claim_id`, `extended_args`) VALUES
(37, 'woocommerce_run_update_callback', 'complete', '2020-11-30 13:13:42', '2020-11-30 14:13:42', '[\"wc_admin_update_110_remove_facebook_note\"]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1606742022;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1606742022;}', 2, 1, '2020-11-30 13:13:48', '2020-11-30 14:13:48', 0, NULL),
(38, 'woocommerce_run_update_callback', 'complete', '2020-11-30 13:13:44', '2020-11-30 14:13:44', '[\"wc_admin_update_110_db_version\"]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1606742024;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1606742024;}', 2, 1, '2020-11-30 13:13:48', '2020-11-30 14:13:48', 0, NULL),
(39, 'woocommerce_run_update_callback', 'complete', '2020-11-30 13:13:45', '2020-11-30 14:13:45', '[\"wc_admin_update_130_remove_dismiss_action_from_tracking_opt_in_note\"]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1606742025;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1606742025;}', 2, 1, '2020-11-30 13:13:49', '2020-11-30 14:13:49', 0, NULL),
(40, 'woocommerce_run_update_callback', 'complete', '2020-11-30 13:13:46', '2020-11-30 14:13:46', '[\"wc_admin_update_130_db_version\"]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1606742026;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1606742026;}', 2, 1, '2020-11-30 13:13:49', '2020-11-30 14:13:49', 0, NULL),
(41, 'woocommerce_run_update_callback', 'complete', '2020-11-30 13:13:47', '2020-11-30 14:13:47', '[\"wc_admin_update_140_change_deactivate_plugin_note_type\"]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1606742027;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1606742027;}', 2, 1, '2020-11-30 13:13:49', '2020-11-30 14:13:49', 0, NULL),
(42, 'woocommerce_run_update_callback', 'complete', '2020-11-30 13:13:48', '2020-11-30 14:13:48', '[\"wc_admin_update_140_db_version\"]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1606742028;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1606742028;}', 2, 1, '2020-11-30 13:13:50', '2020-11-30 14:13:50', 0, NULL),
(43, 'woocommerce_run_update_callback', 'complete', '2020-11-30 13:13:49', '2020-11-30 14:13:49', '[\"wc_admin_update_160_remove_facebook_note\"]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1606742029;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1606742029;}', 2, 1, '2020-11-30 13:13:50', '2020-11-30 14:13:50', 0, NULL),
(44, 'woocommerce_run_update_callback', 'complete', '2020-11-30 13:13:50', '2020-11-30 14:13:50', '[\"wc_admin_update_160_db_version\"]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1606742030;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1606742030;}', 2, 1, '2020-11-30 13:13:51', '2020-11-30 14:13:51', 0, NULL),
(45, 'woocommerce_run_update_callback', 'complete', '2020-12-03 21:10:06', '2020-12-03 22:10:06', '{\"update_callback\":\"wc_update_440_insert_attribute_terms_for_variable_products\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1607029806;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1607029806;}', 2, 1, '2020-12-03 21:10:42', '2020-12-03 22:10:42', 0, NULL),
(46, 'woocommerce_run_update_callback', 'complete', '2020-12-03 21:10:08', '2020-12-03 22:10:08', '{\"update_callback\":\"wc_update_440_db_version\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1607029808;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1607029808;}', 2, 1, '2020-12-03 21:10:42', '2020-12-03 22:10:42', 0, NULL),
(47, 'woocommerce_run_update_callback', 'complete', '2020-12-03 21:10:09', '2020-12-03 22:10:09', '{\"update_callback\":\"wc_update_450_sanitize_coupons_code\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1607029809;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1607029809;}', 2, 1, '2020-12-03 21:10:42', '2020-12-03 22:10:42', 0, NULL),
(48, 'woocommerce_run_update_callback', 'complete', '2020-12-03 21:10:10', '2020-12-03 22:10:10', '{\"update_callback\":\"wc_update_450_db_version\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1607029810;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1607029810;}', 2, 1, '2020-12-03 21:10:42', '2020-12-03 22:10:42', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `wp_actionscheduler_claims`
--

CREATE TABLE `wp_actionscheduler_claims` (
  `claim_id` bigint(20) UNSIGNED NOT NULL,
  `date_created_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_actionscheduler_groups`
--

CREATE TABLE `wp_actionscheduler_groups` (
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_actionscheduler_groups`
--

INSERT INTO `wp_actionscheduler_groups` (`group_id`, `slug`) VALUES
(1, 'action-scheduler-migration'),
(2, 'woocommerce-db-updates');

-- --------------------------------------------------------

--
-- Structure de la table `wp_actionscheduler_logs`
--

CREATE TABLE `wp_actionscheduler_logs` (
  `log_id` bigint(20) UNSIGNED NOT NULL,
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `log_date_local` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_actionscheduler_logs`
--

INSERT INTO `wp_actionscheduler_logs` (`log_id`, `action_id`, `message`, `log_date_gmt`, `log_date_local`) VALUES
(94, 37, 'action créée', '2020-11-30 13:13:43', '2020-11-30 14:13:43'),
(95, 38, 'action créée', '2020-11-30 13:13:43', '2020-11-30 14:13:43'),
(96, 39, 'action créée', '2020-11-30 13:13:43', '2020-11-30 14:13:43'),
(97, 40, 'action créée', '2020-11-30 13:13:43', '2020-11-30 14:13:43'),
(98, 41, 'action créée', '2020-11-30 13:13:43', '2020-11-30 14:13:43'),
(99, 42, 'action créée', '2020-11-30 13:13:43', '2020-11-30 14:13:43'),
(100, 43, 'action créée', '2020-11-30 13:13:43', '2020-11-30 14:13:43'),
(101, 44, 'action créée', '2020-11-30 13:13:43', '2020-11-30 14:13:43'),
(102, 37, 'action lancée via Async Request', '2020-11-30 13:13:47', '2020-11-30 14:13:47'),
(103, 37, 'action terminée via Async Request', '2020-11-30 13:13:47', '2020-11-30 14:13:47'),
(104, 38, 'action lancée via Async Request', '2020-11-30 13:13:48', '2020-11-30 14:13:48'),
(105, 38, 'action terminée via Async Request', '2020-11-30 13:13:48', '2020-11-30 14:13:48'),
(106, 39, 'action lancée via Async Request', '2020-11-30 13:13:48', '2020-11-30 14:13:48'),
(107, 39, 'action terminée via Async Request', '2020-11-30 13:13:48', '2020-11-30 14:13:48'),
(108, 40, 'action lancée via Async Request', '2020-11-30 13:13:49', '2020-11-30 14:13:49'),
(109, 40, 'action terminée via Async Request', '2020-11-30 13:13:49', '2020-11-30 14:13:49'),
(110, 41, 'action lancée via Async Request', '2020-11-30 13:13:49', '2020-11-30 14:13:49'),
(111, 41, 'action terminée via Async Request', '2020-11-30 13:13:49', '2020-11-30 14:13:49'),
(112, 42, 'action lancée via Async Request', '2020-11-30 13:13:50', '2020-11-30 14:13:50'),
(113, 42, 'action terminée via Async Request', '2020-11-30 13:13:50', '2020-11-30 14:13:50'),
(114, 43, 'action lancée via Async Request', '2020-11-30 13:13:50', '2020-11-30 14:13:50'),
(115, 43, 'action terminée via Async Request', '2020-11-30 13:13:50', '2020-11-30 14:13:50'),
(116, 44, 'action lancée via Async Request', '2020-11-30 13:13:50', '2020-11-30 14:13:50'),
(117, 44, 'action terminée via Async Request', '2020-11-30 13:13:51', '2020-11-30 14:13:51'),
(118, 45, 'action créée', '2020-12-03 21:10:06', '2020-12-03 22:10:06'),
(119, 46, 'action créée', '2020-12-03 21:10:07', '2020-12-03 22:10:07'),
(120, 47, 'action créée', '2020-12-03 21:10:07', '2020-12-03 22:10:07'),
(121, 48, 'action créée', '2020-12-03 21:10:07', '2020-12-03 22:10:07'),
(122, 45, 'action lancée via WP Cron', '2020-12-03 21:10:41', '2020-12-03 22:10:41'),
(123, 45, 'action terminée via WP Cron', '2020-12-03 21:10:42', '2020-12-03 22:10:42'),
(124, 46, 'action lancée via WP Cron', '2020-12-03 21:10:42', '2020-12-03 22:10:42'),
(125, 46, 'action terminée via WP Cron', '2020-12-03 21:10:42', '2020-12-03 22:10:42'),
(126, 47, 'action lancée via WP Cron', '2020-12-03 21:10:42', '2020-12-03 22:10:42'),
(127, 47, 'action terminée via WP Cron', '2020-12-03 21:10:42', '2020-12-03 22:10:42'),
(128, 48, 'action lancée via WP Cron', '2020-12-03 21:10:42', '2020-12-03 22:10:42'),
(129, 48, 'action terminée via WP Cron', '2020-12-03 21:10:42', '2020-12-03 22:10:42'),
(130, 45, 'action ignorée via Admin List Table', '2020-12-03 21:10:42', '2020-12-03 22:10:42');

-- --------------------------------------------------------

--
-- Structure de la table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT 0,
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Un commentateur WordPress', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2020-03-27 10:19:57', '2020-03-27 09:19:57', 'Bonjour, ceci est un commentaire.\nPour débuter avec la modération, la modification et la suppression de commentaires, veuillez visiter l’écran des Commentaires dans le Tableau de bord.\nLes avatars des personnes qui commentent arrivent depuis <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', 'comment', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `link_rating` int(11) NOT NULL DEFAULT 0,
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost', 'yes'),
(2, 'home', 'http://localhost', 'yes'),
(3, 'blogname', 'Dev', 'yes'),
(4, 'blogdescription', 'Un site utilisant WordPress', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'romuald.lewandoski@yandex.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '0', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j F Y', 'yes'),
(24, 'time_format', 'G \\h i \\m\\i\\n', 'yes'),
(25, 'links_updated_date_format', 'j F Y G \\h i \\m\\i\\n', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:177:{s:6:\"^cgu/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:13:\"^api/update/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:23:\"^api/users/changepass/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:20:\"^api/suppliers/add/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:21:\"^api/suppliers/edit/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:23:\"^api/suppliers/delete/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:13:\"^api/delete/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:17:\"^api/logs/getId/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:11:\"^api/logs/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:16:\"^api/suppliers/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:12:\"^api/users/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:12:\"^api/perms/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:11:\"^api/main/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:6:\"^api/?\";s:47:\"index.php?param1=$matches[1]&param2=$matches[2]\";s:24:\"^wc-auth/v([1]{1})/(.*)?\";s:63:\"index.php?wc-auth-version=$matches[1]&wc-auth-route=$matches[2]\";s:22:\"^wc-api/v([1-3]{1})/?$\";s:51:\"index.php?wc-api-version=$matches[1]&wc-api-route=/\";s:24:\"^wc-api/v([1-3]{1})(.*)?\";s:61:\"index.php?wc-api-version=$matches[1]&wc-api-route=$matches[2]\";s:11:\"boutique/?$\";s:27:\"index.php?post_type=product\";s:41:\"boutique/feed/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?post_type=product&feed=$matches[1]\";s:36:\"boutique/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?post_type=product&feed=$matches[1]\";s:28:\"boutique/page/([0-9]{1,})/?$\";s:45:\"index.php?post_type=product&paged=$matches[1]\";s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:32:\"category/(.+?)/wc-api(/(.*))?/?$\";s:54:\"index.php?category_name=$matches[1]&wc-api=$matches[3]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:29:\"tag/([^/]+)/wc-api(/(.*))?/?$\";s:44:\"index.php?tag=$matches[1]&wc-api=$matches[3]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:56:\"categorie-produit/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?product_cat=$matches[1]&feed=$matches[2]\";s:51:\"categorie-produit/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?product_cat=$matches[1]&feed=$matches[2]\";s:32:\"categorie-produit/(.+?)/embed/?$\";s:44:\"index.php?product_cat=$matches[1]&embed=true\";s:44:\"categorie-produit/(.+?)/page/?([0-9]{1,})/?$\";s:51:\"index.php?product_cat=$matches[1]&paged=$matches[2]\";s:26:\"categorie-produit/(.+?)/?$\";s:33:\"index.php?product_cat=$matches[1]\";s:58:\"etiquette-produit/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?product_tag=$matches[1]&feed=$matches[2]\";s:53:\"etiquette-produit/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?product_tag=$matches[1]&feed=$matches[2]\";s:34:\"etiquette-produit/([^/]+)/embed/?$\";s:44:\"index.php?product_tag=$matches[1]&embed=true\";s:46:\"etiquette-produit/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?product_tag=$matches[1]&paged=$matches[2]\";s:28:\"etiquette-produit/([^/]+)/?$\";s:33:\"index.php?product_tag=$matches[1]\";s:35:\"produit/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:45:\"produit/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:65:\"produit/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:60:\"produit/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:60:\"produit/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:41:\"produit/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:24:\"produit/([^/]+)/embed/?$\";s:40:\"index.php?product=$matches[1]&embed=true\";s:28:\"produit/([^/]+)/trackback/?$\";s:34:\"index.php?product=$matches[1]&tb=1\";s:48:\"produit/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:46:\"index.php?product=$matches[1]&feed=$matches[2]\";s:43:\"produit/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:46:\"index.php?product=$matches[1]&feed=$matches[2]\";s:36:\"produit/([^/]+)/page/?([0-9]{1,})/?$\";s:47:\"index.php?product=$matches[1]&paged=$matches[2]\";s:43:\"produit/([^/]+)/comment-page-([0-9]{1,})/?$\";s:47:\"index.php?product=$matches[1]&cpage=$matches[2]\";s:33:\"produit/([^/]+)/wc-api(/(.*))?/?$\";s:48:\"index.php?product=$matches[1]&wc-api=$matches[3]\";s:39:\"produit/[^/]+/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:50:\"produit/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:32:\"produit/([^/]+)(?:/([0-9]+))?/?$\";s:46:\"index.php?product=$matches[1]&page=$matches[2]\";s:24:\"produit/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:34:\"produit/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:54:\"produit/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:49:\"produit/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:49:\"produit/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:30:\"produit/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:12:\"robots\\.txt$\";s:18:\"index.php?robots=1\";s:13:\"favicon\\.ico$\";s:19:\"index.php?favicon=1\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:17:\"wc-api(/(.*))?/?$\";s:29:\"index.php?&wc-api=$matches[2]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:26:\"comments/wc-api(/(.*))?/?$\";s:29:\"index.php?&wc-api=$matches[2]\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:29:\"search/(.+)/wc-api(/(.*))?/?$\";s:42:\"index.php?s=$matches[1]&wc-api=$matches[3]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:32:\"author/([^/]+)/wc-api(/(.*))?/?$\";s:52:\"index.php?author_name=$matches[1]&wc-api=$matches[3]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:54:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/wc-api(/(.*))?/?$\";s:82:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&wc-api=$matches[5]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:41:\"([0-9]{4})/([0-9]{1,2})/wc-api(/(.*))?/?$\";s:66:\"index.php?year=$matches[1]&monthnum=$matches[2]&wc-api=$matches[4]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:28:\"([0-9]{4})/wc-api(/(.*))?/?$\";s:45:\"index.php?year=$matches[1]&wc-api=$matches[3]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:62:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/wc-api(/(.*))?/?$\";s:99:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&wc-api=$matches[6]\";s:62:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:73:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:25:\"(.?.+?)/wc-api(/(.*))?/?$\";s:49:\"index.php?pagename=$matches[1]&wc-api=$matches[3]\";s:28:\"(.?.+?)/order-pay(/(.*))?/?$\";s:52:\"index.php?pagename=$matches[1]&order-pay=$matches[3]\";s:33:\"(.?.+?)/order-received(/(.*))?/?$\";s:57:\"index.php?pagename=$matches[1]&order-received=$matches[3]\";s:25:\"(.?.+?)/orders(/(.*))?/?$\";s:49:\"index.php?pagename=$matches[1]&orders=$matches[3]\";s:29:\"(.?.+?)/view-order(/(.*))?/?$\";s:53:\"index.php?pagename=$matches[1]&view-order=$matches[3]\";s:28:\"(.?.+?)/downloads(/(.*))?/?$\";s:52:\"index.php?pagename=$matches[1]&downloads=$matches[3]\";s:31:\"(.?.+?)/edit-account(/(.*))?/?$\";s:55:\"index.php?pagename=$matches[1]&edit-account=$matches[3]\";s:31:\"(.?.+?)/edit-address(/(.*))?/?$\";s:55:\"index.php?pagename=$matches[1]&edit-address=$matches[3]\";s:34:\"(.?.+?)/payment-methods(/(.*))?/?$\";s:58:\"index.php?pagename=$matches[1]&payment-methods=$matches[3]\";s:32:\"(.?.+?)/lost-password(/(.*))?/?$\";s:56:\"index.php?pagename=$matches[1]&lost-password=$matches[3]\";s:34:\"(.?.+?)/customer-logout(/(.*))?/?$\";s:58:\"index.php?pagename=$matches[1]&customer-logout=$matches[3]\";s:37:\"(.?.+?)/add-payment-method(/(.*))?/?$\";s:61:\"index.php?pagename=$matches[1]&add-payment-method=$matches[3]\";s:40:\"(.?.+?)/delete-payment-method(/(.*))?/?$\";s:64:\"index.php?pagename=$matches[1]&delete-payment-method=$matches[3]\";s:45:\"(.?.+?)/set-default-payment-method(/(.*))?/?$\";s:69:\"index.php?pagename=$matches[1]&set-default-payment-method=$matches[3]\";s:31:\".?.+?/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:42:\".?.+?/attachment/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:2:{i:0;s:25:\"TijaraShop/TijaraShop.php\";i:1;s:27:\"woocommerce/woocommerce.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:3:{i:0;s:60:\"C:\\xampp\\htdocs/wp-content/plugins/TijaraShop/TijaraShop.php\";i:1;s:54:\"C:\\xampp\\htdocs/wp-content/plugins/akismet/akismet.php\";i:2;s:0:\"\";}', 'no'),
(40, 'template', 'storefront', 'yes'),
(41, 'stylesheet', 'storefront', 'yes'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '48748', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '0', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'posts', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:0:{}', 'yes'),
(80, 'widget_rss', 'a:0:{}', 'yes'),
(81, 'uninstall_plugins', 'a:1:{s:25:\"TijaraShop/TijaraShop.php\";a:2:{i:0;s:10:\"TijaraShop\";i:1;s:9:\"uninstall\";}}', 'no'),
(82, 'timezone_string', 'Europe/Paris', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '0', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'wp_page_for_privacy_policy', '3', 'yes'),
(92, 'show_comments_cookies_opt_in', '1', 'yes'),
(93, 'admin_email_lifespan', '1616958093', 'yes'),
(94, 'initial_db_version', '45805', 'yes'),
(95, 'wp_user_roles', 'a:7:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:114:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;s:18:\"manage_woocommerce\";b:1;s:24:\"view_woocommerce_reports\";b:1;s:12:\"edit_product\";b:1;s:12:\"read_product\";b:1;s:14:\"delete_product\";b:1;s:13:\"edit_products\";b:1;s:20:\"edit_others_products\";b:1;s:16:\"publish_products\";b:1;s:21:\"read_private_products\";b:1;s:15:\"delete_products\";b:1;s:23:\"delete_private_products\";b:1;s:25:\"delete_published_products\";b:1;s:22:\"delete_others_products\";b:1;s:21:\"edit_private_products\";b:1;s:23:\"edit_published_products\";b:1;s:20:\"manage_product_terms\";b:1;s:18:\"edit_product_terms\";b:1;s:20:\"delete_product_terms\";b:1;s:20:\"assign_product_terms\";b:1;s:15:\"edit_shop_order\";b:1;s:15:\"read_shop_order\";b:1;s:17:\"delete_shop_order\";b:1;s:16:\"edit_shop_orders\";b:1;s:23:\"edit_others_shop_orders\";b:1;s:19:\"publish_shop_orders\";b:1;s:24:\"read_private_shop_orders\";b:1;s:18:\"delete_shop_orders\";b:1;s:26:\"delete_private_shop_orders\";b:1;s:28:\"delete_published_shop_orders\";b:1;s:25:\"delete_others_shop_orders\";b:1;s:24:\"edit_private_shop_orders\";b:1;s:26:\"edit_published_shop_orders\";b:1;s:23:\"manage_shop_order_terms\";b:1;s:21:\"edit_shop_order_terms\";b:1;s:23:\"delete_shop_order_terms\";b:1;s:23:\"assign_shop_order_terms\";b:1;s:16:\"edit_shop_coupon\";b:1;s:16:\"read_shop_coupon\";b:1;s:18:\"delete_shop_coupon\";b:1;s:17:\"edit_shop_coupons\";b:1;s:24:\"edit_others_shop_coupons\";b:1;s:20:\"publish_shop_coupons\";b:1;s:25:\"read_private_shop_coupons\";b:1;s:19:\"delete_shop_coupons\";b:1;s:27:\"delete_private_shop_coupons\";b:1;s:29:\"delete_published_shop_coupons\";b:1;s:26:\"delete_others_shop_coupons\";b:1;s:25:\"edit_private_shop_coupons\";b:1;s:27:\"edit_published_shop_coupons\";b:1;s:24:\"manage_shop_coupon_terms\";b:1;s:22:\"edit_shop_coupon_terms\";b:1;s:24:\"delete_shop_coupon_terms\";b:1;s:24:\"assign_shop_coupon_terms\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}s:8:\"customer\";a:2:{s:4:\"name\";s:8:\"Customer\";s:12:\"capabilities\";a:1:{s:4:\"read\";b:1;}}s:12:\"shop_manager\";a:2:{s:4:\"name\";s:12:\"Shop manager\";s:12:\"capabilities\";a:92:{s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:4:\"read\";b:1;s:18:\"read_private_pages\";b:1;s:18:\"read_private_posts\";b:1;s:10:\"edit_posts\";b:1;s:10:\"edit_pages\";b:1;s:20:\"edit_published_posts\";b:1;s:20:\"edit_published_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"edit_private_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:17:\"edit_others_pages\";b:1;s:13:\"publish_posts\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_posts\";b:1;s:12:\"delete_pages\";b:1;s:20:\"delete_private_pages\";b:1;s:20:\"delete_private_posts\";b:1;s:22:\"delete_published_pages\";b:1;s:22:\"delete_published_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:19:\"delete_others_pages\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:17:\"moderate_comments\";b:1;s:12:\"upload_files\";b:1;s:6:\"export\";b:1;s:6:\"import\";b:1;s:10:\"list_users\";b:1;s:18:\"edit_theme_options\";b:1;s:18:\"manage_woocommerce\";b:1;s:24:\"view_woocommerce_reports\";b:1;s:12:\"edit_product\";b:1;s:12:\"read_product\";b:1;s:14:\"delete_product\";b:1;s:13:\"edit_products\";b:1;s:20:\"edit_others_products\";b:1;s:16:\"publish_products\";b:1;s:21:\"read_private_products\";b:1;s:15:\"delete_products\";b:1;s:23:\"delete_private_products\";b:1;s:25:\"delete_published_products\";b:1;s:22:\"delete_others_products\";b:1;s:21:\"edit_private_products\";b:1;s:23:\"edit_published_products\";b:1;s:20:\"manage_product_terms\";b:1;s:18:\"edit_product_terms\";b:1;s:20:\"delete_product_terms\";b:1;s:20:\"assign_product_terms\";b:1;s:15:\"edit_shop_order\";b:1;s:15:\"read_shop_order\";b:1;s:17:\"delete_shop_order\";b:1;s:16:\"edit_shop_orders\";b:1;s:23:\"edit_others_shop_orders\";b:1;s:19:\"publish_shop_orders\";b:1;s:24:\"read_private_shop_orders\";b:1;s:18:\"delete_shop_orders\";b:1;s:26:\"delete_private_shop_orders\";b:1;s:28:\"delete_published_shop_orders\";b:1;s:25:\"delete_others_shop_orders\";b:1;s:24:\"edit_private_shop_orders\";b:1;s:26:\"edit_published_shop_orders\";b:1;s:23:\"manage_shop_order_terms\";b:1;s:21:\"edit_shop_order_terms\";b:1;s:23:\"delete_shop_order_terms\";b:1;s:23:\"assign_shop_order_terms\";b:1;s:16:\"edit_shop_coupon\";b:1;s:16:\"read_shop_coupon\";b:1;s:18:\"delete_shop_coupon\";b:1;s:17:\"edit_shop_coupons\";b:1;s:24:\"edit_others_shop_coupons\";b:1;s:20:\"publish_shop_coupons\";b:1;s:25:\"read_private_shop_coupons\";b:1;s:19:\"delete_shop_coupons\";b:1;s:27:\"delete_private_shop_coupons\";b:1;s:29:\"delete_published_shop_coupons\";b:1;s:26:\"delete_others_shop_coupons\";b:1;s:25:\"edit_private_shop_coupons\";b:1;s:27:\"edit_published_shop_coupons\";b:1;s:24:\"manage_shop_coupon_terms\";b:1;s:22:\"edit_shop_coupon_terms\";b:1;s:24:\"delete_shop_coupon_terms\";b:1;s:24:\"assign_shop_coupon_terms\";b:1;}}}', 'yes'),
(96, 'fresh_site', '0', 'yes'),
(97, 'WPLANG', 'fr_FR', 'yes'),
(98, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(103, 'sidebars_widgets', 'a:8:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:8:\"header-1\";a:0:{}s:8:\"footer-1\";a:0:{}s:8:\"footer-2\";a:0:{}s:8:\"footer-3\";a:0:{}s:8:\"footer-4\";a:0:{}s:13:\"array_version\";i:3;}', 'yes'),
(104, 'cron', 'a:17:{i:1607294848;a:1:{s:26:\"action_scheduler_run_queue\";a:1:{s:32:\"0d04ed39571b55704c122d726248bbac\";a:3:{s:8:\"schedule\";s:12:\"every_minute\";s:4:\"args\";a:1:{i:0;s:7:\"WP Cron\";}s:8:\"interval\";i:60;}}}i:1607296799;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1607298115;a:1:{s:33:\"wc_admin_process_orders_milestone\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1607298121;a:1:{s:29:\"wc_admin_unsnooze_admin_notes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1607298142;a:1:{s:32:\"woocommerce_cancel_unpaid_orders\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:2:{s:8:\"schedule\";b:0;s:4:\"args\";a:0:{}}}}i:1607308906;a:1:{s:28:\"woocommerce_cleanup_sessions\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1607330513;a:1:{s:14:\"wc_admin_daily\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1607330516;a:2:{s:33:\"woocommerce_cleanup_personal_data\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:30:\"woocommerce_tracker_send_event\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1607332798;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1607332799;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1607332807;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1607332808;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1607341306;a:1:{s:24:\"woocommerce_cleanup_logs\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1607371570;a:1:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}i:1607378400;a:1:{s:27:\"woocommerce_scheduled_sales\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1607848966;a:1:{s:25:\"woocommerce_geoip_updater\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:11:\"fifteendays\";s:4:\"args\";a:0:{}s:8:\"interval\";i:1296000;}}}s:7:\"version\";i:2;}', 'yes'),
(105, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(115, 'recovery_keys', 'a:2:{s:22:\"36nLy3zI6ozWBNpGhH5qVp\";a:2:{s:10:\"hashed_key\";s:34:\"$P$BEiAU65Luc89nS5LsFpC7EnVxdTDhD/\";s:10:\"created_at\";i:1607200780;}s:22:\"wOvilGmVsYL2BsIXIGUk2D\";a:2:{s:10:\"hashed_key\";s:34:\"$P$BzQXkFWWdlei/nRFKYbyurWt6OJlEu.\";s:10:\"created_at\";i:1607289007;}}', 'yes'),
(117, 'theme_mods_twentytwenty', 'a:4:{s:18:\"custom_css_post_id\";i:-1;s:16:\"background_color\";s:3:\"fff\";s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1585833756;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";}s:9:\"sidebar-2\";a:3:{i:0;s:10:\"archives-2\";i:1;s:12:\"categories-2\";i:2;s:6:\"meta-2\";}}}s:18:\"nav_menu_locations\";a:0:{}}', 'yes'),
(149, 'recently_activated', 'a:0:{}', 'yes'),
(153, 'recovery_mode_email_last_sent', '1607289007', 'yes'),
(199, 'action_scheduler_hybrid_store_demarkation', '5', 'yes'),
(200, 'schema-ActionScheduler_StoreSchema', '3.0.1585816888', 'yes'),
(201, 'schema-ActionScheduler_LoggerSchema', '2.0.1585816888', 'yes'),
(204, 'woocommerce_store_address', 'Appt 29 Tour FOURIER Rue de FECAMP', 'yes'),
(205, 'woocommerce_store_address_2', '', 'yes'),
(206, 'woocommerce_store_city', 'LENS', 'yes'),
(207, 'woocommerce_default_country', 'FR', 'yes'),
(208, 'woocommerce_store_postcode', '62300', 'yes'),
(209, 'woocommerce_allowed_countries', 'all', 'yes'),
(210, 'woocommerce_all_except_countries', '', 'yes'),
(211, 'woocommerce_specific_allowed_countries', '', 'yes'),
(212, 'woocommerce_ship_to_countries', '', 'yes'),
(213, 'woocommerce_specific_ship_to_countries', '', 'yes'),
(214, 'woocommerce_default_customer_address', 'base', 'yes'),
(215, 'woocommerce_calc_taxes', 'no', 'yes'),
(216, 'woocommerce_enable_coupons', 'yes', 'yes'),
(217, 'woocommerce_calc_discounts_sequentially', 'no', 'no'),
(218, 'woocommerce_currency', 'EUR', 'yes'),
(219, 'woocommerce_currency_pos', 'left', 'yes'),
(220, 'woocommerce_price_thousand_sep', '.', 'yes'),
(221, 'woocommerce_price_decimal_sep', ',', 'yes'),
(222, 'woocommerce_price_num_decimals', '2', 'yes'),
(223, 'woocommerce_shop_page_id', '6', 'yes'),
(224, 'woocommerce_cart_redirect_after_add', 'no', 'yes'),
(225, 'woocommerce_enable_ajax_add_to_cart', 'yes', 'yes'),
(226, 'woocommerce_placeholder_image', '5', 'yes'),
(227, 'woocommerce_weight_unit', 'kg', 'yes'),
(228, 'woocommerce_dimension_unit', 'cm', 'yes'),
(229, 'woocommerce_enable_reviews', 'yes', 'yes'),
(230, 'woocommerce_review_rating_verification_label', 'yes', 'no'),
(231, 'woocommerce_review_rating_verification_required', 'no', 'no'),
(232, 'woocommerce_enable_review_rating', 'yes', 'yes'),
(233, 'woocommerce_review_rating_required', 'yes', 'no'),
(234, 'woocommerce_manage_stock', 'yes', 'yes'),
(235, 'woocommerce_hold_stock_minutes', '60', 'no'),
(236, 'woocommerce_notify_low_stock', 'yes', 'no'),
(237, 'woocommerce_notify_no_stock', 'yes', 'no'),
(238, 'woocommerce_stock_email_recipient', 'romuald.lewandoski@yandex.com', 'no'),
(239, 'woocommerce_notify_low_stock_amount', '2', 'no'),
(240, 'woocommerce_notify_no_stock_amount', '0', 'yes'),
(241, 'woocommerce_hide_out_of_stock_items', 'no', 'yes'),
(242, 'woocommerce_stock_format', '', 'yes'),
(243, 'woocommerce_file_download_method', 'force', 'no'),
(244, 'woocommerce_downloads_require_login', 'no', 'no'),
(245, 'woocommerce_downloads_grant_access_after_payment', 'yes', 'no'),
(246, 'woocommerce_downloads_add_hash_to_filename', 'yes', 'yes'),
(247, 'woocommerce_prices_include_tax', 'no', 'yes'),
(248, 'woocommerce_tax_based_on', 'shipping', 'yes'),
(249, 'woocommerce_shipping_tax_class', 'inherit', 'yes'),
(250, 'woocommerce_tax_round_at_subtotal', 'no', 'yes'),
(251, 'woocommerce_tax_classes', '', 'yes'),
(252, 'woocommerce_tax_display_shop', 'excl', 'yes'),
(253, 'woocommerce_tax_display_cart', 'excl', 'yes'),
(254, 'woocommerce_price_display_suffix', '', 'yes'),
(255, 'woocommerce_tax_total_display', 'itemized', 'no'),
(256, 'woocommerce_enable_shipping_calc', 'yes', 'no'),
(257, 'woocommerce_shipping_cost_requires_address', 'no', 'yes'),
(258, 'woocommerce_ship_to_destination', 'billing', 'no'),
(259, 'woocommerce_shipping_debug_mode', 'no', 'yes'),
(260, 'woocommerce_enable_guest_checkout', 'yes', 'no'),
(261, 'woocommerce_enable_checkout_login_reminder', 'no', 'no'),
(262, 'woocommerce_enable_signup_and_login_from_checkout', 'no', 'no'),
(263, 'woocommerce_enable_myaccount_registration', 'no', 'no'),
(264, 'woocommerce_registration_generate_username', 'yes', 'no'),
(265, 'woocommerce_registration_generate_password', 'yes', 'no'),
(266, 'woocommerce_erasure_request_removes_order_data', 'no', 'no'),
(267, 'woocommerce_erasure_request_removes_download_data', 'no', 'no'),
(268, 'woocommerce_allow_bulk_remove_personal_data', 'no', 'no'),
(269, 'woocommerce_registration_privacy_policy_text', 'Vos données personnelles seront utilisées pour vous accompagner au cours de votre visite du site web, gérer l’accès à votre compte, et pour d’autres raisons décrites dans notre [privacy_policy].', 'yes'),
(270, 'woocommerce_checkout_privacy_policy_text', 'Vos données personnelles seront utilisées pour le traitement de votre commande, vous accompagner au cours de votre visite du site web, et pour d’autres raisons décrites dans notre [privacy_policy].', 'yes'),
(271, 'woocommerce_delete_inactive_accounts', 'a:2:{s:6:\"number\";s:0:\"\";s:4:\"unit\";s:6:\"months\";}', 'no'),
(272, 'woocommerce_trash_pending_orders', '', 'no'),
(273, 'woocommerce_trash_failed_orders', '', 'no'),
(274, 'woocommerce_trash_cancelled_orders', '', 'no'),
(275, 'woocommerce_anonymize_completed_orders', 'a:2:{s:6:\"number\";s:0:\"\";s:4:\"unit\";s:6:\"months\";}', 'no'),
(276, 'woocommerce_email_from_name', 'Dev', 'no'),
(277, 'woocommerce_email_from_address', 'romuald.lewandoski@yandex.com', 'no'),
(278, 'woocommerce_email_header_image', '', 'no'),
(279, 'woocommerce_email_footer_text', '{site_title} &mdash; Built with {WooCommerce}', 'no'),
(280, 'woocommerce_email_base_color', '#96588a', 'no'),
(281, 'woocommerce_email_background_color', '#f7f7f7', 'no'),
(282, 'woocommerce_email_body_background_color', '#ffffff', 'no'),
(283, 'woocommerce_email_text_color', '#3c3c3c', 'no'),
(284, 'woocommerce_cart_page_id', '7', 'no'),
(285, 'woocommerce_checkout_page_id', '8', 'no'),
(286, 'woocommerce_myaccount_page_id', '9', 'no'),
(287, 'woocommerce_terms_page_id', '', 'no'),
(288, 'woocommerce_force_ssl_checkout', 'no', 'yes'),
(289, 'woocommerce_unforce_ssl_checkout', 'no', 'yes'),
(290, 'woocommerce_checkout_pay_endpoint', 'order-pay', 'yes'),
(291, 'woocommerce_checkout_order_received_endpoint', 'order-received', 'yes'),
(292, 'woocommerce_myaccount_add_payment_method_endpoint', 'add-payment-method', 'yes'),
(293, 'woocommerce_myaccount_delete_payment_method_endpoint', 'delete-payment-method', 'yes'),
(294, 'woocommerce_myaccount_set_default_payment_method_endpoint', 'set-default-payment-method', 'yes'),
(295, 'woocommerce_myaccount_orders_endpoint', 'orders', 'yes'),
(296, 'woocommerce_myaccount_view_order_endpoint', 'view-order', 'yes'),
(297, 'woocommerce_myaccount_downloads_endpoint', 'downloads', 'yes'),
(298, 'woocommerce_myaccount_edit_account_endpoint', 'edit-account', 'yes'),
(299, 'woocommerce_myaccount_edit_address_endpoint', 'edit-address', 'yes'),
(300, 'woocommerce_myaccount_payment_methods_endpoint', 'payment-methods', 'yes'),
(301, 'woocommerce_myaccount_lost_password_endpoint', 'lost-password', 'yes'),
(302, 'woocommerce_logout_endpoint', 'customer-logout', 'yes'),
(303, 'woocommerce_api_enabled', 'no', 'yes'),
(304, 'woocommerce_allow_tracking', 'no', 'no'),
(305, 'woocommerce_show_marketplace_suggestions', 'yes', 'no'),
(306, 'woocommerce_single_image_width', '600', 'yes'),
(307, 'woocommerce_thumbnail_image_width', '300', 'yes'),
(308, 'woocommerce_checkout_highlight_required_fields', 'yes', 'yes'),
(309, 'woocommerce_demo_store', 'no', 'no'),
(311, 'woocommerce_permalinks', 'a:5:{s:12:\"product_base\";s:7:\"produit\";s:13:\"category_base\";s:17:\"categorie-produit\";s:8:\"tag_base\";s:17:\"etiquette-produit\";s:14:\"attribute_base\";s:0:\"\";s:22:\"use_verbose_page_rules\";b:0;}', 'yes'),
(312, 'current_theme_supports_woocommerce', 'yes', 'yes'),
(313, 'woocommerce_queue_flush_rewrite_rules', 'no', 'yes'),
(316, 'default_product_cat', '15', 'yes'),
(317, 'woocommerce_admin_notices', 'a:2:{i:0;s:6:\"update\";i:1;s:20:\"no_secure_connection\";}', 'yes'),
(320, 'woocommerce_version', '4.7.1', 'yes'),
(321, 'woocommerce_db_version', '4.5.0', 'yes'),
(322, 'action_scheduler_lock_async-request-runner', '1607290829', 'yes'),
(323, 'woocommerce_maxmind_geolocation_settings', 'a:1:{s:15:\"database_prefix\";s:32:\"4GPva4JtJxL3eDCGmuegDTTz5bHcDzDq\";}', 'yes'),
(324, '_transient_woocommerce_webhook_ids_status_active', 'a:0:{}', 'yes'),
(325, 'widget_woocommerce_widget_cart', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(326, 'widget_woocommerce_layered_nav_filters', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(327, 'widget_woocommerce_layered_nav', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(328, 'widget_woocommerce_price_filter', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(329, 'widget_woocommerce_product_categories', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(330, 'widget_woocommerce_product_search', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(331, 'widget_woocommerce_product_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(332, 'widget_woocommerce_products', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(333, 'widget_woocommerce_recently_viewed_products', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(334, 'widget_woocommerce_top_rated_products', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(335, 'widget_woocommerce_recent_reviews', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(336, 'widget_woocommerce_rating_filter', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(337, 'woocommerce_onboarding_opt_in', 'yes', 'yes'),
(342, 'woocommerce_admin_install_timestamp', '1585816917', 'yes'),
(347, '_transient_wc_count_comments', 'O:8:\"stdClass\":7:{s:14:\"total_comments\";i:1;s:3:\"all\";i:1;s:8:\"approved\";s:1:\"1\";s:9:\"moderated\";i:0;s:4:\"spam\";i:0;s:5:\"trash\";i:0;s:12:\"post-trashed\";i:0;}', 'yes'),
(348, 'woocommerce_meta_box_errors', 'a:0:{}', 'yes'),
(350, 'woocommerce_setup_ab_wc_admin_onboarding', 'b', 'yes'),
(351, 'woocommerce_onboarding_profile', 'a:9:{s:9:\"completed\";b:1;s:7:\"plugins\";s:7:\"skipped\";s:12:\"setup_client\";b:0;s:8:\"industry\";a:1:{i:0;a:1:{s:4:\"slug\";s:5:\"other\";}}s:13:\"product_types\";a:2:{i:0;s:8:\"physical\";i:1;s:9:\"downloads\";}s:13:\"product_count\";s:1:\"0\";s:14:\"selling_venues\";s:2:\"no\";s:19:\"business_extensions\";a:0:{}s:5:\"theme\";s:10:\"storefront\";}', 'yes'),
(352, 'woocommerce_admin_last_orders_milestone', '0', 'yes'),
(366, '_transient_woocommerce_reports-transient-version', '1606742024', 'yes'),
(376, 'current_theme', 'Storefront', 'yes'),
(377, 'theme_switched', '', 'yes'),
(378, 'woocommerce_maybe_regenerate_images_hash', '27acde77266b4d2a3491118955cb3f66', 'yes'),
(384, 'woocommerce_task_list_welcome_modal_dismissed', '1', 'yes'),
(388, 'theme_mods_storefront', 'a:3:{s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1593893000;s:4:\"data\";a:7:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:8:\"header-1\";a:0:{}s:8:\"footer-1\";a:0:{}s:8:\"footer-2\";a:0:{}s:8:\"footer-3\";a:0:{}s:8:\"footer-4\";a:0:{}}}}', 'yes'),
(389, 'woocommerce_catalog_rows', '4', 'yes'),
(390, 'woocommerce_catalog_columns', '3', 'yes'),
(392, 'storefront_nux_fresh_site', '0', 'yes'),
(430, '_transient_product_query-transient-version', '1607031679', 'yes'),
(447, 'storefront_nux_dismissed', '1', 'yes'),
(474, 'db_upgraded', '', 'yes'),
(1157, '_transient_health-check-site-status-result', '{\"good\":\"10\",\"recommended\":\"8\",\"critical\":\"1\"}', 'yes'),
(1746, 'action_scheduler_migration_status', 'complete', 'yes'),
(5237, 'auto_core_update_notified', 'a:4:{s:4:\"type\";s:7:\"success\";s:5:\"email\";s:29:\"romuald.lewandoski@yandex.com\";s:7:\"version\";s:5:\"5.4.4\";s:9:\"timestamp\";i:1606741045;}', 'no'),
(5440, '_transient_product-transient-version', '1591346160', 'yes'),
(6809, 'product_cat_children', 'a:0:{}', 'yes'),
(8611, 'theme_mods_twentynineteen', 'a:4:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1593893029;s:4:\"data\";a:2:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}}', 'yes'),
(8621, 'theme_mods_twentyseventeen', 'a:4:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1593893078;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(13788, '_transient_timeout_wc_featured_products', '1609332903', 'no'),
(13789, '_transient_wc_featured_products', 'a:0:{}', 'no'),
(13790, '_transient_timeout_wc_products_onsale', '1609332904', 'no'),
(13791, '_transient_wc_products_onsale', 'a:0:{}', 'no'),
(13792, '_transient_timeout_wc_product_loop_6147550c3f3af9236789687d89ed040c', '1609627618', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(13793, '_transient_wc_product_loop_6147550c3f3af9236789687d89ed040c', 'a:2:{s:7:\"version\";s:10:\"1607031679\";s:5:\"value\";O:8:\"stdClass\":5:{s:3:\"ids\";a:1:{i:0;i:14;}s:5:\"total\";i:1;s:11:\"total_pages\";i:1;s:8:\"per_page\";i:2;s:12:\"current_page\";i:1;}}', 'no'),
(13794, '_transient_timeout_wc_term_counts', '1609332904', 'no'),
(13795, '_transient_wc_term_counts', 'a:1:{i:15;s:1:\"1\";}', 'no'),
(13796, '_transient_timeout_wc_product_loop_cd4ceb08a6a3e9bac7f4260a4e03a47f', '1609627618', 'no'),
(13797, '_transient_wc_product_loop_cd4ceb08a6a3e9bac7f4260a4e03a47f', 'a:2:{s:7:\"version\";s:10:\"1607031679\";s:5:\"value\";O:8:\"stdClass\":5:{s:3:\"ids\";a:1:{i:0;i:14;}s:5:\"total\";i:1;s:11:\"total_pages\";i:1;s:8:\"per_page\";i:4;s:12:\"current_page\";i:1;}}', 'no'),
(13800, '_site_transient_timeout_browser_8d3fec2581d3961f3037851d5cc0039c', '1607345719', 'no'),
(13801, '_site_transient_browser_8d3fec2581d3961f3037851d5cc0039c', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:13:\"86.0.4240.198\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(13802, '_site_transient_timeout_php_check_3dbf48b9658abaee82651209c2ca7be3', '1607345720', 'no'),
(13803, '_site_transient_php_check_3dbf48b9658abaee82651209c2ca7be3', 'a:5:{s:19:\"recommended_version\";s:3:\"7.4\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(13804, '_transient_timeout_wc_low_stock_count', '1609332921', 'no'),
(13805, '_transient_wc_low_stock_count', '0', 'no'),
(13806, '_transient_timeout_wc_outofstock_count', '1609332921', 'no'),
(13807, '_transient_wc_outofstock_count', '0', 'no'),
(13840, 'disallowed_keys', '', 'no'),
(13841, 'comment_previously_approved', '1', 'yes'),
(13842, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(13843, 'finished_updating_comment_type', '1', 'yes'),
(13846, 'can_compress_scripts', '1', 'no'),
(13864, 'woocommerce_schema_version', '430', 'yes'),
(13868, '_transient_wc_attribute_taxonomies', 'a:0:{}', 'yes'),
(13869, 'wc_admin_note_home_screen_feedback_homescreen_accessed', '1606742015', 'yes'),
(13873, 'wc_blocks_db_schema_version', '260', 'yes'),
(13874, 'wc_remote_inbox_notifications_stored_state', 'O:8:\"stdClass\":2:{s:22:\"there_were_no_products\";b:0;s:22:\"there_are_now_products\";b:1;}', 'yes'),
(13881, 'woocommerce_admin_version', '1.6.3', 'yes'),
(14066, 'wc_remote_inbox_notifications_specs', 'a:5:{s:37:\"ecomm-need-help-setting-up-your-store\";O:8:\"stdClass\":8:{s:4:\"slug\";s:37:\"ecomm-need-help-setting-up-your-store\";s:4:\"type\";s:4:\"info\";s:6:\"status\";s:10:\"unactioned\";s:12:\"is_snoozable\";i:0;s:6:\"source\";s:15:\"woocommerce.com\";s:7:\"locales\";a:1:{i:0;O:8:\"stdClass\":3:{s:6:\"locale\";s:5:\"en_US\";s:5:\"title\";s:32:\"Need help setting up your Store?\";s:7:\"content\";s:350:\"Schedule a free 30-min <a href=\"https://wordpress.com/support/concierge-support/\">quick start session</a> and get help from our specialists. We’re happy to walk through setup steps, show you around the WordPress.com dashboard, troubleshoot any issues you may have, and help you the find the features you need to accomplish your goals for your site.\";}}s:7:\"actions\";a:1:{i:0;O:8:\"stdClass\":6:{s:4:\"name\";s:16:\"set-up-concierge\";s:7:\"locales\";a:1:{i:0;O:8:\"stdClass\":2:{s:6:\"locale\";s:5:\"en_US\";s:5:\"label\";s:21:\"Schedule free session\";}}s:3:\"url\";s:34:\"https://wordpress.com/me/concierge\";s:18:\"url_is_admin_query\";b:0;s:10:\"is_primary\";b:1;s:6:\"status\";s:8:\"actioned\";}}s:5:\"rules\";a:1:{i:0;O:8:\"stdClass\":2:{s:4:\"type\";s:17:\"plugins_activated\";s:7:\"plugins\";a:3:{i:0;s:35:\"woocommerce-shipping-australia-post\";i:1;s:32:\"woocommerce-shipping-canada-post\";i:2;s:30:\"woocommerce-shipping-royalmail\";}}}}s:20:\"woocommerce-services\";O:8:\"stdClass\":8:{s:4:\"slug\";s:20:\"woocommerce-services\";s:4:\"type\";s:4:\"info\";s:6:\"status\";s:10:\"unactioned\";s:12:\"is_snoozable\";i:0;s:6:\"source\";s:15:\"woocommerce.com\";s:7:\"locales\";a:1:{i:0;O:8:\"stdClass\":3:{s:6:\"locale\";s:5:\"en_US\";s:5:\"title\";s:26:\"WooCommerce Shipping & Tax\";s:7:\"content\";s:255:\"WooCommerce Shipping & Tax helps get your store “ready to sell” as quickly as possible. You create your products. We take care of tax calculation, payment processing, and shipping label printing! Learn more about the extension that you just installed.\";}}s:7:\"actions\";a:1:{i:0;O:8:\"stdClass\":6:{s:4:\"name\";s:10:\"learn-more\";s:7:\"locales\";a:1:{i:0;O:8:\"stdClass\":2:{s:6:\"locale\";s:5:\"en_US\";s:5:\"label\";s:10:\"Learn more\";}}s:3:\"url\";s:84:\"https://docs.woocommerce.com/document/woocommerce-shipping-and-tax/?utm_source=inbox\";s:18:\"url_is_admin_query\";b:0;s:10:\"is_primary\";b:1;s:6:\"status\";s:10:\"unactioned\";}}s:5:\"rules\";a:2:{i:0;O:8:\"stdClass\":2:{s:4:\"type\";s:17:\"plugins_activated\";s:7:\"plugins\";a:1:{i:0;s:20:\"woocommerce-services\";}}i:1;O:8:\"stdClass\":3:{s:4:\"type\";s:18:\"wcadmin_active_for\";s:9:\"operation\";s:1:\"<\";s:4:\"days\";i:2;}}}s:32:\"ecomm-unique-shopping-experience\";O:8:\"stdClass\":8:{s:4:\"slug\";s:32:\"ecomm-unique-shopping-experience\";s:4:\"type\";s:4:\"info\";s:6:\"status\";s:10:\"unactioned\";s:12:\"is_snoozable\";i:0;s:6:\"source\";s:15:\"woocommerce.com\";s:7:\"locales\";a:1:{i:0;O:8:\"stdClass\":3:{s:6:\"locale\";s:5:\"en_US\";s:5:\"title\";s:53:\"For a shopping experience as unique as your customers\";s:7:\"content\";s:274:\"Product Add-Ons allow your customers to personalize products while they’re shopping on your online store. No more follow-up email requests—customers get what they want, before they’re done checking out. Learn more about this extension that comes included in your plan.\";}}s:7:\"actions\";a:1:{i:0;O:8:\"stdClass\":6:{s:4:\"name\";s:43:\"learn-more-ecomm-unique-shopping-experience\";s:7:\"locales\";a:1:{i:0;O:8:\"stdClass\":2:{s:6:\"locale\";s:5:\"en_US\";s:5:\"label\";s:10:\"Learn more\";}}s:3:\"url\";s:71:\"https://docs.woocommerce.com/document/product-add-ons/?utm_source=inbox\";s:18:\"url_is_admin_query\";b:0;s:10:\"is_primary\";b:1;s:6:\"status\";s:8:\"actioned\";}}s:5:\"rules\";a:2:{i:0;O:8:\"stdClass\":2:{s:4:\"type\";s:17:\"plugins_activated\";s:7:\"plugins\";a:3:{i:0;s:35:\"woocommerce-shipping-australia-post\";i:1;s:32:\"woocommerce-shipping-canada-post\";i:2;s:30:\"woocommerce-shipping-royalmail\";}}i:1;O:8:\"stdClass\":3:{s:4:\"type\";s:18:\"wcadmin_active_for\";s:9:\"operation\";s:1:\"<\";s:4:\"days\";i:2;}}}s:19:\"wcpay-promo-2020-11\";O:8:\"stdClass\":8:{s:4:\"slug\";s:19:\"wcpay-promo-2020-11\";s:4:\"type\";s:9:\"marketing\";s:6:\"status\";s:10:\"unactioned\";s:12:\"is_snoozable\";i:0;s:6:\"source\";s:15:\"woocommerce.com\";s:7:\"locales\";a:1:{i:0;O:8:\"stdClass\":3:{s:6:\"locale\";s:5:\"en_US\";s:5:\"title\";s:54:\"Manage subscriber payments from your store\'s dashboard\";s:7:\"content\";s:856:\"<a href=\"https://woocommerce.com/payments/?utm_medium=notification&utm_source=product&utm_campaign=wcpay_exp20\" target=\"_blank\">WooCommerce Payments</a> now supports <a href=\"https://woocommerce.com/products/woocommerce-subscriptions/?utm_medium=notification&utm_source=product&utm_campaign=wcpay_exp20\" target=\"_blank\">WooCommerce Subscriptions</a>. <strong>Get 50% off transaction fees</strong> and make the most out of your holiday sales by adding WooCommerce Payments to your store. Limited-time offer. <br/><br/><em>By clicking \"Install now,\" you agree to our general <a href=\"https://wordpress.com/tos/\" target=\"_blank\">Terms of Service</a> and promotional <a href=\"https://woocommerce.com/terms-conditions/woocommerce-payments-promotion/?utm_medium=notification&utm_source=product&utm_campaign=wcpay_exp20\" target=\"_blank\">Terms of Service</a>.</em>\";}}s:7:\"actions\";a:1:{i:0;O:8:\"stdClass\":6:{s:4:\"name\";s:11:\"install-now\";s:7:\"locales\";a:1:{i:0;O:8:\"stdClass\":2:{s:6:\"locale\";s:5:\"en_US\";s:5:\"label\";s:11:\"Install now\";}}s:3:\"url\";s:57:\"admin.php?page=wc-admin&action=setup-woocommerce-payments\";s:18:\"url_is_admin_query\";b:0;s:10:\"is_primary\";b:1;s:6:\"status\";s:8:\"actioned\";}}s:5:\"rules\";a:9:{i:0;O:8:\"stdClass\":2:{s:4:\"type\";s:17:\"plugins_activated\";s:7:\"plugins\";a:1:{i:0;s:17:\"woocommerce-admin\";}}i:1;O:8:\"stdClass\":4:{s:4:\"type\";s:14:\"plugin_version\";s:6:\"plugin\";s:17:\"woocommerce-admin\";s:8:\"operator\";s:2:\">=\";s:7:\"version\";s:5:\"1.7.0\";}i:2;O:8:\"stdClass\":2:{s:4:\"type\";s:3:\"not\";s:7:\"operand\";O:8:\"stdClass\":2:{s:4:\"type\";s:17:\"plugins_activated\";s:7:\"plugins\";a:2:{i:0;s:20:\"woocommerce-payments\";i:1;s:26:\"woocommerce-gateway-stripe\";}}}i:3;O:8:\"stdClass\":2:{s:4:\"type\";s:3:\"not\";s:7:\"operand\";O:8:\"stdClass\":4:{s:4:\"type\";s:18:\"onboarding_profile\";s:5:\"index\";s:8:\"industry\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:31:\"cbd-other-hemp-derived-products\";}}i:4;O:8:\"stdClass\":3:{s:4:\"type\";s:11:\"order_count\";s:9:\"operation\";s:2:\">=\";s:5:\"value\";i:10;}i:5;O:8:\"stdClass\":2:{s:4:\"type\";s:18:\"publish_after_time\";s:13:\"publish_after\";s:19:\"2020-11-18 14:00:00\";}i:6;O:8:\"stdClass\":2:{s:4:\"type\";s:19:\"publish_before_time\";s:14:\"publish_before\";s:19:\"2021-01-01 00:00:00\";}i:7;O:8:\"stdClass\":3:{s:4:\"type\";s:21:\"base_location_country\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"US\";}i:8;O:8:\"stdClass\":2:{s:4:\"type\";s:2:\"or\";s:8:\"operands\";a:26:{i:0;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"CO\";}i:1;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"DE\";}i:2;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"FL\";}i:3;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"HI\";}i:4;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"ID\";}i:5;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"IN\";}i:6;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"KS\";}i:7;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"KY\";}i:8;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"LA\";}i:9;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"MA\";}i:10;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"MN\";}i:11;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"MT\";}i:12;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"NE\";}i:13;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"NV\";}i:14;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"NH\";}i:15;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"NM\";}i:16;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"ND\";}i:17;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"OH\";}i:18;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"OR\";}i:19;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"PA\";}i:20;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"SD\";}i:21;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"TN\";}i:22;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"TX\";}i:23;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"VA\";}i:24;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"WA\";}i:25;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"WI\";}}}}}s:27:\"wcpay-subscriptions-2020-11\";O:8:\"stdClass\":8:{s:4:\"slug\";s:27:\"wcpay-subscriptions-2020-11\";s:4:\"type\";s:9:\"marketing\";s:6:\"status\";s:10:\"unactioned\";s:12:\"is_snoozable\";i:0;s:6:\"source\";s:15:\"woocommerce.com\";s:7:\"locales\";a:1:{i:0;O:8:\"stdClass\":3:{s:6:\"locale\";s:5:\"en_US\";s:5:\"title\";s:54:\"Manage subscriber payments from your store\'s dashboard\";s:7:\"content\";s:643:\"Securely accept cards and manage transactions right from your dashboard with <a href=\"https://woocommerce.com/payments/?utm_medium=notification&utm_source=product&utm_campaign=wcpay_ctrl20\" target=\"_blank\">WooCommerce Payments</a>  – now supporting <a href=\"https://woocommerce.com/products/woocommerce-subscriptions/?utm_medium=notification&utm_source=product&utm_campaign=wcpay_ctrl20\" target=\"_blank\">WooCommerce Subscriptions</a>! <br/><br/><em>By clicking \"Install now,\" you agree to our <a href=\"https://wordpress.com/tos/?utm_medium=notification&utm_source=product&utm_campaign=wcpay_ctrl20\" target=\"_blank\">Terms of Service</a>.</em>\";}}s:7:\"actions\";a:1:{i:0;O:8:\"stdClass\":6:{s:4:\"name\";s:11:\"install-now\";s:7:\"locales\";a:1:{i:0;O:8:\"stdClass\":2:{s:6:\"locale\";s:5:\"en_US\";s:5:\"label\";s:11:\"Install now\";}}s:3:\"url\";s:57:\"admin.php?page=wc-admin&action=setup-woocommerce-payments\";s:18:\"url_is_admin_query\";b:0;s:10:\"is_primary\";b:1;s:6:\"status\";s:8:\"actioned\";}}s:5:\"rules\";a:9:{i:0;O:8:\"stdClass\":2:{s:4:\"type\";s:17:\"plugins_activated\";s:7:\"plugins\";a:1:{i:0;s:17:\"woocommerce-admin\";}}i:1;O:8:\"stdClass\":4:{s:4:\"type\";s:14:\"plugin_version\";s:6:\"plugin\";s:17:\"woocommerce-admin\";s:8:\"operator\";s:2:\">=\";s:7:\"version\";s:5:\"1.7.0\";}i:2;O:8:\"stdClass\":2:{s:4:\"type\";s:3:\"not\";s:7:\"operand\";O:8:\"stdClass\":2:{s:4:\"type\";s:17:\"plugins_activated\";s:7:\"plugins\";a:2:{i:0;s:20:\"woocommerce-payments\";i:1;s:26:\"woocommerce-gateway-stripe\";}}}i:3;O:8:\"stdClass\":2:{s:4:\"type\";s:3:\"not\";s:7:\"operand\";O:8:\"stdClass\":4:{s:4:\"type\";s:18:\"onboarding_profile\";s:5:\"index\";s:8:\"industry\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:31:\"cbd-other-hemp-derived-products\";}}i:4;O:8:\"stdClass\":3:{s:4:\"type\";s:11:\"order_count\";s:9:\"operation\";s:2:\">=\";s:5:\"value\";i:10;}i:5;O:8:\"stdClass\":2:{s:4:\"type\";s:18:\"publish_after_time\";s:13:\"publish_after\";s:19:\"2020-11-18 14:00:00\";}i:6;O:8:\"stdClass\":2:{s:4:\"type\";s:19:\"publish_before_time\";s:14:\"publish_before\";s:19:\"2021-01-01 00:00:00\";}i:7;O:8:\"stdClass\":3:{s:4:\"type\";s:21:\"base_location_country\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"US\";}i:8;O:8:\"stdClass\":2:{s:4:\"type\";s:2:\"or\";s:8:\"operands\";a:24:{i:0;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"AL\";}i:1;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"AK\";}i:2;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"AZ\";}i:3;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"AR\";}i:4;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"CA\";}i:5;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"CT\";}i:6;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"DC\";}i:7;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"IL\";}i:8;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"IA\";}i:9;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"ME\";}i:10;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"MD\";}i:11;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"MI\";}i:12;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"MS\";}i:13;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"MO\";}i:14;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"NJ\";}i:15;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"NY\";}i:16;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"NC\";}i:17;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"OK\";}i:18;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"RI\";}i:19;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"SC\";}i:20;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"UT\";}i:21;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"VT\";}i:22;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"WV\";}i:23;O:8:\"stdClass\":3:{s:4:\"type\";s:19:\"base_location_state\";s:9:\"operation\";s:1:\"=\";s:5:\"value\";s:2:\"WY\";}}}}}}', 'yes'),
(14227, '_transient_timeout_orders-all-statuses', '1607526230', 'no'),
(14228, '_transient_orders-all-statuses', 'a:2:{s:7:\"version\";s:10:\"1606742024\";s:5:\"value\";a:0:{}}', 'no'),
(14585, '_transient_is_multi_author', '0', 'yes'),
(15105, '_transient_timeout__woocommerce_helper_updates', '1607290640', 'no'),
(15106, '_transient__woocommerce_helper_updates', 'a:4:{s:4:\"hash\";s:32:\"d751713988987e9331980363e24189ce\";s:7:\"updated\";i:1607247440;s:8:\"products\";a:0:{}s:6:\"errors\";a:1:{i:0;s:10:\"http-error\";}}', 'no'),
(15196, '_transient_timeout__woocommerce_helper_subscriptions', '1607290615', 'no'),
(15197, '_transient__woocommerce_helper_subscriptions', 'a:0:{}', 'no'),
(15198, '_site_transient_timeout_theme_roots', '1607291515', 'no'),
(15199, '_site_transient_theme_roots', 'a:4:{s:10:\"storefront\";s:7:\"/themes\";s:14:\"twentynineteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:12:\"twentytwenty\";s:7:\"/themes\";}', 'no'),
(15201, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:65:\"https://downloads.wordpress.org/release/fr_FR/wordpress-5.5.3.zip\";s:6:\"locale\";s:5:\"fr_FR\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:65:\"https://downloads.wordpress.org/release/fr_FR/wordpress-5.5.3.zip\";s:10:\"no_content\";s:0:\"\";s:11:\"new_bundled\";s:0:\"\";s:7:\"partial\";s:0:\"\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:5:\"5.5.3\";s:7:\"version\";s:5:\"5.5.3\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.3\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1607289721;s:15:\"version_checked\";s:5:\"5.5.3\";s:12:\"translations\";a:0:{}}', 'no'),
(15202, '_site_transient_update_themes', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1607289722;s:7:\"checked\";a:4:{s:10:\"storefront\";s:5:\"2.5.5\";s:14:\"twentynineteen\";s:3:\"1.4\";s:15:\"twentyseventeen\";s:3:\"2.2\";s:12:\"twentytwenty\";s:3:\"1.1\";}s:8:\"response\";a:4:{s:10:\"storefront\";a:6:{s:5:\"theme\";s:10:\"storefront\";s:11:\"new_version\";s:5:\"2.9.0\";s:3:\"url\";s:40:\"https://wordpress.org/themes/storefront/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/theme/storefront.2.9.0.zip\";s:8:\"requires\";b:0;s:12:\"requires_php\";s:5:\"5.6.0\";}s:14:\"twentynineteen\";a:6:{s:5:\"theme\";s:14:\"twentynineteen\";s:11:\"new_version\";s:3:\"1.7\";s:3:\"url\";s:44:\"https://wordpress.org/themes/twentynineteen/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/theme/twentynineteen.1.7.zip\";s:8:\"requires\";s:5:\"4.9.6\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:15:\"twentyseventeen\";a:6:{s:5:\"theme\";s:15:\"twentyseventeen\";s:11:\"new_version\";s:3:\"2.4\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentyseventeen/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentyseventeen.2.4.zip\";s:8:\"requires\";s:3:\"4.7\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:12:\"twentytwenty\";a:6:{s:5:\"theme\";s:12:\"twentytwenty\";s:11:\"new_version\";s:3:\"1.5\";s:3:\"url\";s:42:\"https://wordpress.org/themes/twentytwenty/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/theme/twentytwenty.1.5.zip\";s:8:\"requires\";s:3:\"4.7\";s:12:\"requires_php\";s:5:\"5.2.4\";}}s:9:\"no_update\";a:0:{}s:12:\"translations\";a:0:{}}', 'no'),
(15203, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1607289723;s:7:\"checked\";a:4:{s:19:\"akismet/akismet.php\";s:5:\"4.1.7\";s:9:\"hello.php\";s:5:\"1.7.2\";s:25:\"TijaraShop/TijaraShop.php\";s:3:\"1.4\";s:27:\"woocommerce/woocommerce.php\";s:5:\"4.7.1\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:3:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.1.7\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.1.7.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}}s:9:\"hello.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:5:\"1.7.2\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855\";s:2:\"1x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:66:\"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855\";}s:11:\"banners_rtl\";a:0:{}}s:27:\"woocommerce/woocommerce.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/woocommerce\";s:4:\"slug\";s:11:\"woocommerce\";s:6:\"plugin\";s:27:\"woocommerce/woocommerce.php\";s:11:\"new_version\";s:5:\"4.7.1\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/woocommerce/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/woocommerce.4.7.1.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/woocommerce/assets/icon-256x256.png?rev=2366418\";s:2:\"1x\";s:64:\"https://ps.w.org/woocommerce/assets/icon-128x128.png?rev=2366418\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:67:\"https://ps.w.org/woocommerce/assets/banner-1544x500.png?rev=2366418\";s:2:\"1x\";s:66:\"https://ps.w.org/woocommerce/assets/banner-772x250.png?rev=2366418\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no'),
(15210, '_transient_timeout_tijarashop_upgrade_TijaraShop', '1607290165', 'no'),
(15211, '_transient_tijarashop_upgrade_TijaraShop', 'a:6:{s:7:\"headers\";O:42:\"Requests_Utility_CaseInsensitiveDictionary\":1:{s:7:\"\0*\0data\";a:23:{s:14:\"content-length\";s:3:\"545\";s:12:\"content-type\";s:25:\"text/plain; charset=utf-8\";s:13:\"cache-control\";s:11:\"max-age=300\";s:23:\"content-security-policy\";s:54:\"default-src \'none\'; style-src \'unsafe-inline\'; sandbox\";s:4:\"etag\";s:68:\"W/\"1479a99d57de39f83b380492c747488da3c15f976c2a35adc2c464b4c681af63\"\";s:25:\"strict-transport-security\";s:16:\"max-age=31536000\";s:22:\"x-content-type-options\";s:7:\"nosniff\";s:15:\"x-frame-options\";s:4:\"deny\";s:16:\"x-xss-protection\";s:13:\"1; mode=block\";s:3:\"via\";s:38:\"1.1 varnish (Varnish/6.0), 1.1 varnish\";s:16:\"content-encoding\";s:4:\"gzip\";s:19:\"x-github-request-id\";s:32:\"35D0:FBB8:7D9690:84604B:5FCD4152\";s:13:\"accept-ranges\";s:5:\"bytes\";s:4:\"date\";s:29:\"Sun, 06 Dec 2020 21:28:24 GMT\";s:11:\"x-served-by\";s:18:\"cache-cdg20746-CDG\";s:7:\"x-cache\";s:9:\"MISS, HIT\";s:12:\"x-cache-hits\";s:4:\"0, 1\";s:7:\"x-timer\";s:28:\"S1607290104.334103,VS0,VE181\";s:4:\"vary\";s:46:\"Authorization,Accept-Encoding, Accept-Encoding\";s:27:\"access-control-allow-origin\";s:1:\"*\";s:19:\"x-fastly-request-id\";s:40:\"c0b5dc064cb15fb6e7f5b0ddb4380debb7134eef\";s:7:\"expires\";s:29:\"Sun, 06 Dec 2020 21:33:24 GMT\";s:10:\"source-age\";s:1:\"0\";}}s:4:\"body\";s:1014:\"{\n  \"version\": \"1.4\",\n  \"download_url\": \"https://github.com/RomualdLewandoski/TijaraShop-WP-Plugin/raw/master/TijaraShop.zip\",\n  \"required\": \"5.0\",\n  \"tested\": \"5.4\",\n  \"requires_php\": \"5.3\",\n  \"last_updated\": \"2020-05-20 16:10:00\",\n  \"sections\": {\n    \"description\": \"This is the plugin to connect TijaraShop App to TijaraShop Wordpress\",\n    \"instalation\": \"Upload the plugin, activate it and it\'s done, you also need to configure the plugin the first time\",\n    \"changelog\": \"<h4>1.4 - 20 Mai 2020</h4><ul><li>Supplier manager</li><li>Add/edit/delete supplier</li><li>List suplier</li><li>Api for Supplier</li><li>Update Thread Api for pending action if software is not connected on internet</li></ul><br><h4>1.3 - 21 Avril 2020</h4><ul><li>Install script</li><li>Base for API</li><li>know bug fixed</li></ul><br><h4>1.2 - 21 Avril 2020</h4><ul><li>Auto update directly from Wordpress Panel</li></ul><br><h4>1.1 - 16 Avril 2020</h4><ul><li>Add MVC mode</li><li>Edit Api</li><li>Edit perms model</li></ul>\"\n  }\n}\";s:8:\"response\";a:2:{s:4:\"code\";i:200;s:7:\"message\";s:2:\"OK\";}s:7:\"cookies\";a:0:{}s:8:\"filename\";N;s:13:\"http_response\";O:25:\"WP_HTTP_Requests_Response\":5:{s:11:\"\0*\0response\";O:17:\"Requests_Response\":10:{s:4:\"body\";s:1014:\"{\n  \"version\": \"1.4\",\n  \"download_url\": \"https://github.com/RomualdLewandoski/TijaraShop-WP-Plugin/raw/master/TijaraShop.zip\",\n  \"required\": \"5.0\",\n  \"tested\": \"5.4\",\n  \"requires_php\": \"5.3\",\n  \"last_updated\": \"2020-05-20 16:10:00\",\n  \"sections\": {\n    \"description\": \"This is the plugin to connect TijaraShop App to TijaraShop Wordpress\",\n    \"instalation\": \"Upload the plugin, activate it and it\'s done, you also need to configure the plugin the first time\",\n    \"changelog\": \"<h4>1.4 - 20 Mai 2020</h4><ul><li>Supplier manager</li><li>Add/edit/delete supplier</li><li>List suplier</li><li>Api for Supplier</li><li>Update Thread Api for pending action if software is not connected on internet</li></ul><br><h4>1.3 - 21 Avril 2020</h4><ul><li>Install script</li><li>Base for API</li><li>know bug fixed</li></ul><br><h4>1.2 - 21 Avril 2020</h4><ul><li>Auto update directly from Wordpress Panel</li></ul><br><h4>1.1 - 16 Avril 2020</h4><ul><li>Add MVC mode</li><li>Edit Api</li><li>Edit perms model</li></ul>\"\n  }\n}\";s:3:\"raw\";s:1932:\"HTTP/1.1 200 OK\r\nConnection: close\r\nContent-Length: 545\r\nContent-Type: text/plain; charset=utf-8\r\nCache-Control: max-age=300\r\nContent-Security-Policy: default-src \'none\'; style-src \'unsafe-inline\'; sandbox\r\nETag: W/\"1479a99d57de39f83b380492c747488da3c15f976c2a35adc2c464b4c681af63\"\r\nStrict-Transport-Security: max-age=31536000\r\nX-Content-Type-Options: nosniff\r\nX-Frame-Options: deny\r\nX-XSS-Protection: 1; mode=block\r\nVia: 1.1 varnish (Varnish/6.0), 1.1 varnish\r\nContent-Encoding: gzip\r\nX-GitHub-Request-Id: 35D0:FBB8:7D9690:84604B:5FCD4152\r\nAccept-Ranges: bytes\r\nDate: Sun, 06 Dec 2020 21:28:24 GMT\r\nX-Served-By: cache-cdg20746-CDG\r\nX-Cache: MISS, HIT\r\nX-Cache-Hits: 0, 1\r\nX-Timer: S1607290104.334103,VS0,VE181\r\nVary: Authorization,Accept-Encoding, Accept-Encoding\r\nAccess-Control-Allow-Origin: *\r\nX-Fastly-Request-ID: c0b5dc064cb15fb6e7f5b0ddb4380debb7134eef\r\nExpires: Sun, 06 Dec 2020 21:33:24 GMT\r\nSource-Age: 0\r\n\r\n{\n  \"version\": \"1.4\",\n  \"download_url\": \"https://github.com/RomualdLewandoski/TijaraShop-WP-Plugin/raw/master/TijaraShop.zip\",\n  \"required\": \"5.0\",\n  \"tested\": \"5.4\",\n  \"requires_php\": \"5.3\",\n  \"last_updated\": \"2020-05-20 16:10:00\",\n  \"sections\": {\n    \"description\": \"This is the plugin to connect TijaraShop App to TijaraShop Wordpress\",\n    \"instalation\": \"Upload the plugin, activate it and it\'s done, you also need to configure the plugin the first time\",\n    \"changelog\": \"<h4>1.4 - 20 Mai 2020</h4><ul><li>Supplier manager</li><li>Add/edit/delete supplier</li><li>List suplier</li><li>Api for Supplier</li><li>Update Thread Api for pending action if software is not connected on internet</li></ul><br><h4>1.3 - 21 Avril 2020</h4><ul><li>Install script</li><li>Base for API</li><li>know bug fixed</li></ul><br><h4>1.2 - 21 Avril 2020</h4><ul><li>Auto update directly from Wordpress Panel</li></ul><br><h4>1.1 - 16 Avril 2020</h4><ul><li>Add MVC mode</li><li>Edit Api</li><li>Edit perms model</li></ul>\"\n  }\n}\";s:7:\"headers\";O:25:\"Requests_Response_Headers\":1:{s:7:\"\0*\0data\";a:23:{s:14:\"content-length\";a:1:{i:0;s:3:\"545\";}s:12:\"content-type\";a:1:{i:0;s:25:\"text/plain; charset=utf-8\";}s:13:\"cache-control\";a:1:{i:0;s:11:\"max-age=300\";}s:23:\"content-security-policy\";a:1:{i:0;s:54:\"default-src \'none\'; style-src \'unsafe-inline\'; sandbox\";}s:4:\"etag\";a:1:{i:0;s:68:\"W/\"1479a99d57de39f83b380492c747488da3c15f976c2a35adc2c464b4c681af63\"\";}s:25:\"strict-transport-security\";a:1:{i:0;s:16:\"max-age=31536000\";}s:22:\"x-content-type-options\";a:1:{i:0;s:7:\"nosniff\";}s:15:\"x-frame-options\";a:1:{i:0;s:4:\"deny\";}s:16:\"x-xss-protection\";a:1:{i:0;s:13:\"1; mode=block\";}s:3:\"via\";a:1:{i:0;s:38:\"1.1 varnish (Varnish/6.0), 1.1 varnish\";}s:16:\"content-encoding\";a:1:{i:0;s:4:\"gzip\";}s:19:\"x-github-request-id\";a:1:{i:0;s:32:\"35D0:FBB8:7D9690:84604B:5FCD4152\";}s:13:\"accept-ranges\";a:1:{i:0;s:5:\"bytes\";}s:4:\"date\";a:1:{i:0;s:29:\"Sun, 06 Dec 2020 21:28:24 GMT\";}s:11:\"x-served-by\";a:1:{i:0;s:18:\"cache-cdg20746-CDG\";}s:7:\"x-cache\";a:1:{i:0;s:9:\"MISS, HIT\";}s:12:\"x-cache-hits\";a:1:{i:0;s:4:\"0, 1\";}s:7:\"x-timer\";a:1:{i:0;s:28:\"S1607290104.334103,VS0,VE181\";}s:4:\"vary\";a:1:{i:0;s:46:\"Authorization,Accept-Encoding, Accept-Encoding\";}s:27:\"access-control-allow-origin\";a:1:{i:0;s:1:\"*\";}s:19:\"x-fastly-request-id\";a:1:{i:0;s:40:\"c0b5dc064cb15fb6e7f5b0ddb4380debb7134eef\";}s:7:\"expires\";a:1:{i:0;s:29:\"Sun, 06 Dec 2020 21:33:24 GMT\";}s:10:\"source-age\";a:1:{i:0;s:1:\"0\";}}}s:11:\"status_code\";i:200;s:16:\"protocol_version\";d:1.1;s:7:\"success\";b:1;s:9:\"redirects\";i:0;s:3:\"url\";s:89:\"https://raw.githubusercontent.com/RomualdLewandoski/TijaraShop-WP-Plugin/master/info.json\";s:7:\"history\";a:0:{}s:7:\"cookies\";O:19:\"Requests_Cookie_Jar\":1:{s:10:\"\0*\0cookies\";a:0:{}}}s:11:\"\0*\0filename\";N;s:4:\"data\";N;s:7:\"headers\";N;s:6:\"status\";N;}}', 'no');

-- --------------------------------------------------------

--
-- Structure de la table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 5, '_wp_attached_file', 'woocommerce-placeholder.png'),
(4, 5, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1200;s:6:\"height\";i:1200;s:4:\"file\";s:27:\"woocommerce-placeholder.png\";s:5:\"sizes\";a:7:{s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:35:\"woocommerce-placeholder-324x324.png\";s:5:\"width\";i:324;s:6:\"height\";i:324;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:18:\"woocommerce_single\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-416x416.png\";s:5:\"width\";i:416;s:6:\"height\";i:416;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:37:\"woocommerce-placeholder-1024x1024.png\";s:5:\"width\";i:1024;s:6:\"height\";i:1024;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-768x768.png\";s:5:\"width\";i:768;s:6:\"height\";i:768;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(5, 14, '_edit_last', '1'),
(6, 14, '_edit_lock', '1594797442:1'),
(7, 15, '_wp_attached_file', '2020/06/1040-1920x1080-blur_2.jpg'),
(8, 15, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1920;s:6:\"height\";i:1080;s:4:\"file\";s:33:\"2020/06/1040-1920x1080-blur_2.jpg\";s:5:\"sizes\";a:11:{s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:33:\"1040-1920x1080-blur_2-324x324.jpg\";s:5:\"width\";i:324;s:6:\"height\";i:324;s:9:\"mime-type\";s:10:\"image/jpeg\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:33:\"1040-1920x1080-blur_2-100x100.jpg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:18:\"woocommerce_single\";a:4:{s:4:\"file\";s:33:\"1040-1920x1080-blur_2-416x234.jpg\";s:5:\"width\";i:416;s:6:\"height\";i:234;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:33:\"1040-1920x1080-blur_2-300x169.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:169;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:34:\"1040-1920x1080-blur_2-1024x576.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:576;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:33:\"1040-1920x1080-blur_2-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:33:\"1040-1920x1080-blur_2-768x432.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:432;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"1536x1536\";a:4:{s:4:\"file\";s:34:\"1040-1920x1080-blur_2-1536x864.jpg\";s:5:\"width\";i:1536;s:6:\"height\";i:864;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"shop_catalog\";a:5:{s:4:\"file\";s:33:\"1040-1920x1080-blur_2-324x324.jpg\";s:5:\"width\";i:324;s:6:\"height\";i:324;s:9:\"mime-type\";s:10:\"image/jpeg\";s:9:\"uncropped\";b:0;}s:11:\"shop_single\";a:4:{s:4:\"file\";s:33:\"1040-1920x1080-blur_2-416x234.jpg\";s:5:\"width\";i:416;s:6:\"height\";i:234;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:33:\"1040-1920x1080-blur_2-100x100.jpg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(9, 14, 'total_sales', '0'),
(10, 14, '_tax_status', 'taxable'),
(11, 14, '_tax_class', ''),
(12, 14, '_manage_stock', 'yes'),
(13, 14, '_backorders', 'no'),
(14, 14, '_sold_individually', 'no'),
(15, 14, '_virtual', 'no'),
(16, 14, '_downloadable', 'no'),
(17, 14, '_download_limit', '-1'),
(18, 14, '_download_expiry', '-1'),
(19, 14, '_stock', '19'),
(20, 14, '_stock_status', 'instock'),
(21, 14, '_wc_average_rating', '0'),
(22, 14, '_wc_review_count', '0'),
(23, 14, '_product_version', '4.0.1'),
(24, 14, '_thumbnail_id', '15'),
(25, 14, '_regular_price', '20'),
(26, 14, '_low_stock_amount', '5'),
(27, 14, '_price', '20'),
(28, 6, '_edit_lock', '1594797283:1');

-- --------------------------------------------------------

--
-- Structure de la table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2020-03-27 10:19:57', '2020-03-27 09:19:57', '<!-- wp:paragraph -->\n<p>Bienvenue sur WordPress. Ceci est votre premier article. Modifiez-le ou supprimez-le, puis commencez à écrire !</p>\n<!-- /wp:paragraph -->', 'Bonjour tout le monde !', '', 'publish', 'open', 'open', '', 'bonjour-tout-le-monde', '', '', '2020-03-27 10:19:57', '2020-03-27 09:19:57', '', 0, 'http://localhost/?p=1', 0, 'post', '', 1),
(2, 1, '2020-03-27 10:19:57', '2020-03-27 09:19:57', '<!-- wp:paragraph -->\n<p>Ceci est une page d’exemple. C’est différent d’un article de blog parce qu’elle restera au même endroit et apparaîtra dans la navigation de votre site (dans la plupart des thèmes). La plupart des gens commencent par une page « À propos » qui les présente aux visiteurs du site. Cela pourrait ressembler à quelque chose comme cela :</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Bonjour ! Je suis un mécanicien qui aspire à devenir acteur, et voici mon site. J’habite à Bordeaux, j’ai un super chien baptisé Russell, et j’aime la vodka-ananas (ainsi qu’être surpris par la pluie soudaine lors de longues balades sur la plage au coucher du soleil).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>... ou quelque chose comme cela :</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>La société 123 Machin Truc a été créée en 1971, et n’a cessé de proposer au public des machins-trucs de qualité depuis lors. Située à Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson, 123 Machin Truc emploie 2 000 personnes, et fabrique toutes sortes de bidules super pour la communauté bouzemontoise.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>En tant que nouvel utilisateur ou utilisatrice de WordPress, vous devriez vous rendre sur <a href=\"http://localhost/wp-admin/\">votre tableau de bord</a> pour supprimer cette page et créer de nouvelles pages pour votre contenu. Amusez-vous bien !</p>\n<!-- /wp:paragraph -->', 'Page d’exemple', '', 'publish', 'closed', 'open', '', 'page-d-exemple', '', '', '2020-03-27 10:19:57', '2020-03-27 09:19:57', '', 0, 'http://localhost/?page_id=2', 0, 'page', '', 0),
(3, 1, '2020-03-27 10:19:57', '2020-03-27 09:19:57', '<!-- wp:heading --><h2>Qui sommes-nous ?</h2><!-- /wp:heading --><!-- wp:paragraph --><p>L’adresse de notre site Web est : http://localhost.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Utilisation des données personnelles collectées</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Commentaires</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Quand vous laissez un commentaire sur notre site web, les données inscrites dans le formulaire de commentaire, mais aussi votre adresse IP et l’agent utilisateur de votre navigateur sont collectés pour nous aider à la détection des commentaires indésirables.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Une chaîne anonymisée créée à partir de votre adresse de messagerie (également appelée hash) peut être envoyée au service Gravatar pour vérifier si vous utilisez ce dernier. Les clauses de confidentialité du service Gravatar sont disponibles ici : https://automattic.com/privacy/. Après validation de votre commentaire, votre photo de profil sera visible publiquement à coté de votre commentaire.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Médias</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Si vous êtes un utilisateur ou une utilisatrice enregistré·e et que vous téléversez des images sur le site web, nous vous conseillons d’éviter de téléverser des images contenant des données EXIF de coordonnées GPS. Les visiteurs de votre site web peuvent télécharger et extraire des données de localisation depuis ces images.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Formulaires de contact</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Si vous déposez un commentaire sur notre site, il vous sera proposé d’enregistrer votre nom, adresse de messagerie et site web dans des cookies. C’est uniquement pour votre confort afin de ne pas avoir à saisir ces informations si vous déposez un autre commentaire plus tard. Ces cookies expirent au bout d’un an.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Si vous vous rendez sur la page de connexion, un cookie temporaire sera créé afin de déterminer si votre navigateur accepte les cookies. Il ne contient pas de données personnelles et sera supprimé automatiquement à la fermeture de votre navigateur.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Lorsque vous vous connecterez, nous mettrons en place un certain nombre de cookies pour enregistrer vos informations de connexion et vos préférences d’écran. La durée de vie d’un cookie de connexion est de deux jours, celle d’un cookie d’option d’écran est d’un an. Si vous cochez « Se souvenir de moi », votre cookie de connexion sera conservé pendant deux semaines. Si vous vous déconnectez de votre compte, le cookie de connexion sera effacé.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>En modifiant ou en publiant une publication, un cookie supplémentaire sera enregistré dans votre navigateur. Ce cookie ne comprend aucune donnée personnelle. Il indique simplement l’ID de la publication que vous venez de modifier. Il expire au bout d’un jour.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contenu embarqué depuis d’autres sites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet autre site.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur site web.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Statistiques et mesures d’audience</h3><!-- /wp:heading --><!-- wp:heading --><h2>Utilisation et transmission de vos données personnelles</h2><!-- /wp:heading --><!-- wp:heading --><h2>Durées de stockage de vos données</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Si vous laissez un commentaire, le commentaire et ses métadonnées sont conservés indéfiniment. Cela permet de reconnaître et approuver automatiquement les commentaires suivants au lieu de les laisser dans la file de modération.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Pour les utilisateurs et utilisatrices qui s’enregistrent sur notre site (si cela est possible), nous stockons également les données personnelles indiquées dans leur profil. Tous les utilisateurs et utilisatrices peuvent voir, modifier ou supprimer leurs informations personnelles à tout moment (à l’exception de leur nom d’utilisateur·ice). Les gestionnaires du site peuvent aussi voir et modifier ces informations.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Les droits que vous avez sur vos données</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Si vous avez un compte ou si vous avez laissé des commentaires sur le site, vous pouvez demander à recevoir un fichier contenant toutes les données personnelles que nous possédons à votre sujet, incluant celles que vous nous avez fournies. Vous pouvez également demander la suppression des données personnelles vous concernant. Cela ne prend pas en compte les données stockées à des fins administratives, légales ou pour des raisons de sécurité.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Transmission de vos données personnelles</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Les commentaires des visiteurs peuvent être vérifiés à l’aide d’un service automatisé de détection des commentaires indésirables.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Informations de contact</h2><!-- /wp:heading --><!-- wp:heading --><h2>Informations supplémentaires</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comment nous protégeons vos données</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Procédures mises en œuvre en cas de fuite de données</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Les services tiers qui nous transmettent des données</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Opérations de marketing automatisé et/ou de profilage réalisées à l’aide des données personnelles</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Affichage des informations liées aux secteurs soumis à des régulations spécifiques</h3><!-- /wp:heading -->', 'Politique de confidentialité', '', 'draft', 'closed', 'open', '', 'politique-de-confidentialite', '', '', '2020-03-27 10:19:57', '2020-03-27 09:19:57', '', 0, 'http://localhost/?page_id=3', 0, 'page', '', 0),
(5, 1, '2020-04-02 10:41:46', '2020-04-02 08:41:46', '', 'woocommerce-placeholder', '', 'inherit', 'open', 'closed', '', 'woocommerce-placeholder', '', '', '2020-04-02 10:41:46', '2020-04-02 08:41:46', '', 0, 'http://localhost/wp-content/uploads/2020/04/woocommerce-placeholder.png', 0, 'attachment', 'image/png', 0),
(6, 1, '2020-04-02 15:19:56', '2020-04-02 13:19:56', '', 'Boutique', '', 'publish', 'closed', 'closed', '', 'boutique', '', '', '2020-04-02 15:19:56', '2020-04-02 13:19:56', '', 0, 'http://localhost/boutique/', 0, 'page', '', 0),
(7, 1, '2020-04-02 15:19:57', '2020-04-02 13:19:57', '<!-- wp:shortcode -->[woocommerce_cart]<!-- /wp:shortcode -->', 'Panier', '', 'publish', 'closed', 'closed', '', 'panier', '', '', '2020-04-02 15:19:57', '2020-04-02 13:19:57', '', 0, 'http://localhost/panier/', 0, 'page', '', 0),
(8, 1, '2020-04-02 15:19:57', '2020-04-02 13:19:57', '<!-- wp:shortcode -->[woocommerce_checkout]<!-- /wp:shortcode -->', 'Validation de la commande', '', 'publish', 'closed', 'closed', '', 'commande', '', '', '2020-04-02 15:19:57', '2020-04-02 13:19:57', '', 0, 'http://localhost/commande/', 0, 'page', '', 0),
(9, 1, '2020-04-02 15:19:57', '2020-04-02 13:19:57', '<!-- wp:shortcode -->[woocommerce_my_account]<!-- /wp:shortcode -->', 'Mon compte', '', 'publish', 'closed', 'closed', '', 'mon-compte', '', '', '2020-04-02 15:19:57', '2020-04-02 13:19:57', '', 0, 'http://localhost/mon-compte/', 0, 'page', '', 0),
(14, 1, '2020-06-05 10:35:58', '2020-06-05 08:35:58', 'Ceci est donc une description pour le produit', 'testWooCommerce', '', 'publish', 'open', 'closed', '', 'testwoocommerce', '', '', '2020-06-05 10:36:00', '2020-06-05 08:36:00', '', 0, 'http://localhost/?post_type=product&#038;p=14', 0, 'product', '', 0),
(15, 1, '2020-06-05 10:34:06', '2020-06-05 08:34:06', '', '1040-1920x1080-blur_2', '', 'inherit', 'open', 'closed', '', '1040-1920x1080-blur_2', '', '', '2020-06-05 10:34:06', '2020-06-05 08:34:06', '', 14, 'http://localhost/wp-content/uploads/2020/06/1040-1920x1080-blur_2.jpg', 0, 'attachment', 'image/jpeg', 0),
(21, 1, '2020-12-03 22:41:19', '0000-00-00 00:00:00', '', 'Brouillon auto', '', 'auto-draft', 'open', 'open', '', '', '', '', '2020-12-03 22:41:19', '0000-00-00 00:00:00', '', 0, 'http://localhost/?p=21', 0, 'post', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_termmeta`
--

INSERT INTO `wp_termmeta` (`meta_id`, `term_id`, `meta_key`, `meta_value`) VALUES
(1, 15, 'product_count_product_cat', '1');

-- --------------------------------------------------------

--
-- Structure de la table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Non classé', 'non-classe', 0),
(2, 'simple', 'simple', 0),
(3, 'grouped', 'grouped', 0),
(4, 'variable', 'variable', 0),
(5, 'external', 'external', 0),
(6, 'exclude-from-search', 'exclude-from-search', 0),
(7, 'exclude-from-catalog', 'exclude-from-catalog', 0),
(8, 'featured', 'featured', 0),
(9, 'outofstock', 'outofstock', 0),
(10, 'rated-1', 'rated-1', 0),
(11, 'rated-2', 'rated-2', 0),
(12, 'rated-3', 'rated-3', 0),
(13, 'rated-4', 'rated-4', 0),
(14, 'rated-5', 'rated-5', 0),
(15, 'Non classé', 'non-classe', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(14, 2, 0),
(14, 15, 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'product_type', '', 0, 1),
(3, 3, 'product_type', '', 0, 0),
(4, 4, 'product_type', '', 0, 0),
(5, 5, 'product_type', '', 0, 0),
(6, 6, 'product_visibility', '', 0, 0),
(7, 7, 'product_visibility', '', 0, 0),
(8, 8, 'product_visibility', '', 0, 0),
(9, 9, 'product_visibility', '', 0, 0),
(10, 10, 'product_visibility', '', 0, 0),
(11, 11, 'product_visibility', '', 0, 0),
(12, 12, 'product_visibility', '', 0, 0),
(13, 13, 'product_visibility', '', 0, 0),
(14, 14, 'product_visibility', '', 0, 0),
(15, 15, 'product_cat', '', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'admin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'plugin_editor_notice'),
(15, 1, 'show_welcome_panel', '1'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '21'),
(18, 1, '_woocommerce_tracks_anon_id', 'woo:Iv1ROHIQVt4Tbu4QfPyc3z2X'),
(19, 1, 'last_update', '1585833762'),
(20, 1, 'woocommerce_admin_activity_panel_inbox_last_read', '1585833758448'),
(21, 1, 'wc_last_active', '1607212800'),
(22, 1, '_order_count', '0'),
(24, 1, 'dismissed_no_secure_connection_notice', '1'),
(31, 1, 'session_tokens', 'a:1:{s:64:\"0e3d5f772ae5e571efdd4080e895a3cecd00fa8d3435309167c0f975f58d3688\";a:4:{s:10:\"expiration\";i:1608320286;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36\";s:5:\"login\";i:1607110686;}}'),
(35, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:11:\"192.168.1.0\";}'),
(41, 1, 'wp_user-settings', 'libraryContent=browse&mfold=o'),
(42, 1, 'wp_user-settings-time', '1606917584');

-- --------------------------------------------------------

--
-- Structure de la table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$Bi5J0sErQY2SbOfJAdfweD9qCaMYPX1', 'admin', 'romuald.lewandoski@yandex.com', '', '2020-03-27 09:19:56', '', 0, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_admin_notes`
--

CREATE TABLE `wp_wc_admin_notes` (
  `note_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'info',
  `content_data` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_reminder` datetime DEFAULT NULL,
  `is_snoozable` tinyint(1) NOT NULL DEFAULT 0,
  `layout` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_wc_admin_notes`
--

INSERT INTO `wp_wc_admin_notes` (`note_id`, `name`, `type`, `locale`, `title`, `content`, `icon`, `content_data`, `status`, `source`, `date_created`, `date_reminder`, `is_snoozable`, `layout`, `image`, `is_deleted`) VALUES
(4, 'wc-admin-wc-helper-connection', 'info', 'en_US', 'Se connecter à WooCommerce.com', 'Connectez-vous pour obtenir des notifications et des mises à jour importantes sur les produits.', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-04-02 08:41:56', NULL, 0, '', NULL, 0),
(5, 'wc-admin-add-first-product', 'info', 'en_US', 'Ajouter votre premier produit', 'Augmentez vos revenus en ajoutant des produits à votre boutique. Ajoutez des produits manuellement, importez-les à partir d\'une feuille de calcul ou migrez-les à partir d\'une autre plateforme', 'product', '{}', 'unactioned', 'woocommerce-admin', '2020-04-02 08:41:58', NULL, 0, '', NULL, 0),
(6, 'wc-admin-onboarding-profiler-reminder', 'update', 'en_US', 'Bienvenue dans WooCommerce ! Configurer votre boutique et commencer à vendre', 'Notre objectif est de vous aider tout au long des étapes les plus importantes du lancement de votre boutique.', 'info', '{}', 'actioned', 'woocommerce-admin', '2020-04-02 09:19:02', NULL, 0, '', NULL, 0),
(8, 'wc-admin-mobile-app', 'info', 'en_US', 'Installer l\'application mobile Woo', 'Installez l\'application mobile WooCommerce pour gérer les commandes, recevoir des notifications de vente et afficher les statistiques principales où que vous soyez.', 'phone', '{}', 'unactioned', 'woocommerce-admin', '2020-04-05 19:43:48', NULL, 0, '', NULL, 0),
(9, 'wc-admin-onboarding-email-marketing', 'info', 'en_US', 'Astuces, mises à jour des produits et inspiration', 'Nous sommes à votre disposition. Profitez de conseils, de mises à jour des produits et de sources d\'inspiration directement dans votre boîte de messagerie.', 'mail', '{}', 'unactioned', 'woocommerce-admin', '2020-04-05 19:43:48', NULL, 0, '', NULL, 0),
(10, 'wc-admin-usage-tracking-opt-in', 'info', 'en_US', 'Aider WooCommerce à améliorer ses services grâce au suivi de l\'utilisation', 'Récupérer les données d\'utilisation nous permet d\'améliorer WooCommerce. Votre boutique sera prise en compte lors de l\'évaluation des nouvelles fonctionnalités et de la qualité d\'une mise à jour, ou pour déterminer l\'intérêt d\'une amélioration. Vous pouvez toujours consulter les <a href=\"http://localhost/wp-admin/admin.php?page=wc-settings&#038;tab=advanced&#038;section=woocommerce_com\" target=\"_blank\">Paramètres</a> et choisir d\'interrompre le partage des données. <a href=\"https://woocommerce.com/usage-tracking\" target=\"_blank\">En savoir plus</a> sur les données que nous collectons.', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-04-09 19:15:38', NULL, 0, '', NULL, 0),
(12, 'wc-update-db-reminder', 'update', 'en_US', 'Mise à jour de la base de données de WooCommerce effectuée', 'Mise à jour des données WooCommerce effectuée. Merci d’avoir installé la dernière version !', 'info', '{}', 'unactioned', 'woocommerce-core', '2020-11-22 03:16:31', NULL, 0, 'plain', '', 0),
(13, 'wc-admin-onboarding-payments-reminder', 'info', 'en_US', 'Commencer à accepter les paiements sur votre boutique !', 'Accepter les paiements avec le fournisseur qui vous convient, parmi plus de 100 passerelles de paiement pour WooCommerce.', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-12-01 08:42:09', NULL, 0, 'plain', '', 0),
(14, 'wc-admin-marketing-intro', 'info', 'en_US', 'Connectez-vous à votre audience', 'Faites croître votre base clients et augmentez vos ventes avec les outils marketing créés pour WooCommerce.', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-12-01 08:42:09', NULL, 0, 'plain', '', 0),
(15, 'wc-admin-store-notice-giving-feedback-2', 'info', 'en_US', 'Donner des commentaires', 'Maintenant que vous nous avez choisis comme partenaire, notre objectif est de nous assurer que nous vous fournissons les bons outils pour répondre à vos besoins. Nous sommes impatients de recevoir vos commentaires sur votre expérience de conception de la boutique pour que nous puissions l’améliorer à l’avenir.', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-12-01 08:42:09', NULL, 0, 'plain', '', 0),
(16, 'wc-admin-insight-first-sale', 'survey', 'en_US', 'Le saviez-vous ?', 'Une boutique optimisée par WooCommerce nécessite en moyenne 31 jours pour réaliser sa première vente. Vous êtes sur la bonne voie ! Trouvez-vous ce type d’information utile ?', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-12-01 08:42:09', NULL, 0, 'plain', '', 0),
(17, 'wc-admin-real-time-order-alerts', 'info', 'en_US', 'Obtenir des alertes de commande en temps réel n’importe où', 'Obtenez des notifications sur l’activité de votre boutique, notamment des nouvelles commandes et des avis sur vos produits, directement sur vos appareils mobiles grâce à l’application Woo.', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-12-01 08:42:09', NULL, 0, 'plain', '', 0),
(18, 'wc-admin-customize-store-with-blocks', 'info', 'en_US', 'Personnalisez votre boutique en ligne avec les blocs WooCommerce', 'Nos blocs vous permettent de sélectionner et d’afficher des produits, catégories, filtres et plus encore, pratiquement partout sur votre site. Pas besoin d’utiliser des codes courts ni de modifier des lignes de code. En savoir plus sur l’utilisation de chacun de ces blocs.', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-12-01 08:42:09', NULL, 0, 'plain', '', 0),
(19, 'ecomm-need-help-setting-up-your-store', 'info', 'en_US', 'Need help setting up your Store?', 'Schedule a free 30-min <a href=\"https://wordpress.com/support/concierge-support/\">quick start session</a> and get help from our specialists. We’re happy to walk through setup steps, show you around the WordPress.com dashboard, troubleshoot any issues you may have, and help you the find the features you need to accomplish your goals for your site.', 'info', '{}', 'pending', 'woocommerce.com', '2020-12-01 03:42:10', NULL, 0, 'plain', '', 0),
(20, 'woocommerce-services', 'info', 'en_US', 'WooCommerce Shipping & Tax', 'WooCommerce Shipping &amp; Tax helps get your store “ready to sell” as quickly as possible. You create your products. We take care of tax calculation, payment processing, and shipping label printing! Learn more about the extension that you just installed.', 'info', '{}', 'pending', 'woocommerce.com', '2020-12-01 03:42:10', NULL, 0, 'plain', '', 0),
(21, 'ecomm-unique-shopping-experience', 'info', 'en_US', 'For a shopping experience as unique as your customers', 'Product Add-Ons allow your customers to personalize products while they’re shopping on your online store. No more follow-up email requests—customers get what they want, before they’re done checking out. Learn more about this extension that comes included in your plan.', 'info', '{}', 'pending', 'woocommerce.com', '2020-12-01 03:42:10', NULL, 0, 'plain', '', 0),
(22, 'wcpay-promo-2020-11', 'marketing', 'en_US', 'Manage subscriber payments from your store\'s dashboard', '<a href=\"https://woocommerce.com/payments/?utm_medium=notification&amp;utm_source=product&amp;utm_campaign=wcpay_exp20\" target=\"_blank\">WooCommerce Payments</a> now supports <a href=\"https://woocommerce.com/products/woocommerce-subscriptions/?utm_medium=notification&amp;utm_source=product&amp;utm_campaign=wcpay_exp20\" target=\"_blank\">WooCommerce Subscriptions</a>. <strong>Get 50% off transaction fees</strong> and make the most out of your holiday sales by adding WooCommerce Payments to your store. Limited-time offer. <br /><br /><em>By clicking \"Install now,\" you agree to our general <a href=\"https://wordpress.com/tos/\" target=\"_blank\">Terms of Service</a> and promotional <a href=\"https://woocommerce.com/terms-conditions/woocommerce-payments-promotion/?utm_medium=notification&amp;utm_source=product&amp;utm_campaign=wcpay_exp20\" target=\"_blank\">Terms of Service</a>.</em>', 'info', '{}', 'pending', 'woocommerce.com', '2020-12-01 03:42:10', NULL, 0, 'plain', '', 0),
(23, 'wcpay-subscriptions-2020-11', 'marketing', 'en_US', 'Manage subscriber payments from your store\'s dashboard', 'Securely accept cards and manage transactions right from your dashboard with <a href=\"https://woocommerce.com/payments/?utm_medium=notification&amp;utm_source=product&amp;utm_campaign=wcpay_ctrl20\" target=\"_blank\">WooCommerce Payments</a>  – now supporting <a href=\"https://woocommerce.com/products/woocommerce-subscriptions/?utm_medium=notification&amp;utm_source=product&amp;utm_campaign=wcpay_ctrl20\" target=\"_blank\">WooCommerce Subscriptions</a>! <br /><br /><em>By clicking \"Install now,\" you agree to our <a href=\"https://wordpress.com/tos/?utm_medium=notification&amp;utm_source=product&amp;utm_campaign=wcpay_ctrl20\" target=\"_blank\">Terms of Service</a>.</em>', 'info', '{}', 'pending', 'woocommerce.com', '2020-12-01 03:42:11', NULL, 0, 'plain', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_admin_note_actions`
--

CREATE TABLE `wp_wc_admin_note_actions` (
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `note_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `query` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT 0,
  `actioned_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_wc_admin_note_actions`
--

INSERT INTO `wp_wc_admin_note_actions` (`action_id`, `note_id`, `name`, `label`, `query`, `status`, `is_primary`, `actioned_text`) VALUES
(4, 4, 'connect', 'Connecter', '?page=wc-addons&section=helper', 'actioned', 0, ''),
(5, 5, 'add-a-product', 'Ajouter un produit', 'http://localhost/wp-admin/post-new.php?post_type=product', 'actioned', 1, ''),
(6, 6, 'continue-profiler', 'Poursuivre la configuration de la boutique', 'http://localhost/wp-admin/admin.php?page=wc-admin&enable_onboarding=1', 'unactioned', 1, ''),
(7, 6, 'skip-profiler', 'Ignorer la configuration', 'http://localhost/wp-admin/admin.php?page=wc-admin&reset_profiler=0', 'actioned', 0, ''),
(9, 8, 'learn-more', 'Lire plus', 'https://woocommerce.com/mobile/', 'actioned', 0, ''),
(10, 9, 'yes-please', 'Oui, s’il vous plait !', 'https://woocommerce.us8.list-manage.com/subscribe/post?u=2c1434dc56f9506bf3c3ecd21&amp;id=13860df971&amp;SIGNUPPAGE=plugin', 'actioned', 0, ''),
(12, 10, 'tracking-opt-in', 'Activer le suivi de l\'utilisation', '', 'actioned', 1, ''),
(99, 13, 'view-payment-gateways', 'En savoir plus', 'https://woocommerce.com/product-category/woocommerce-extensions/payment-gateways/', 'actioned', 1, ''),
(100, 14, 'open-marketing-hub', 'Espace marketing', 'http://localhost/wp-admin/admin.php?page=wc-admin&path=/marketing', 'actioned', 0, ''),
(101, 15, 'share-feedback', 'Partager des commentaires', 'https://automattic.survey.fm/new-onboarding-survey', 'actioned', 0, ''),
(102, 16, 'affirm-insight-first-sale', 'Oui', '', 'actioned', 0, 'Merci pour vos retours'),
(103, 16, 'deny-insight-first-sale', 'Non', '', 'actioned', 0, 'Merci pour vos retours'),
(104, 17, 'learn-more', 'En savoir plus', 'https://woocommerce.com/mobile/?utm_source=inbox', 'actioned', 0, ''),
(105, 18, 'customize-store-with-blocks', 'En savoir plus', 'https://woocommerce.com/posts/how-to-customize-your-online-store-with-woocommerce-blocks/?utm_source=inbox', 'actioned', 1, ''),
(385, 19, 'set-up-concierge', 'Schedule free session', 'https://wordpress.com/me/concierge', 'actioned', 1, ''),
(386, 20, 'learn-more', 'Learn more', 'https://docs.woocommerce.com/document/woocommerce-shipping-and-tax/?utm_source=inbox', 'unactioned', 1, ''),
(387, 21, 'learn-more-ecomm-unique-shopping-experience', 'Learn more', 'https://docs.woocommerce.com/document/product-add-ons/?utm_source=inbox', 'actioned', 1, ''),
(388, 22, 'install-now', 'Install now', 'admin.php?page=wc-admin&action=setup-woocommerce-payments', 'actioned', 1, ''),
(389, 23, 'install-now', 'Install now', 'admin.php?page=wc-admin&action=setup-woocommerce-payments', 'actioned', 1, ''),
(406, 12, 'update-db_done', 'Merci !', 'http://localhost/wp-admin/admin.php?page=TijaraShop%2Ftest&wc-hide-notice=update&_wc_notice_nonce=85e5c8a6cc', 'actioned', 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_category_lookup`
--

CREATE TABLE `wp_wc_category_lookup` (
  `category_tree_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_wc_category_lookup`
--

INSERT INTO `wp_wc_category_lookup` (`category_tree_id`, `category_id`) VALUES
(15, 15);

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_customer_lookup`
--

CREATE TABLE `wp_wc_customer_lookup` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_active` timestamp NULL DEFAULT NULL,
  `date_registered` timestamp NULL DEFAULT NULL,
  `country` char(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `postcode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `state` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_download_log`
--

CREATE TABLE `wp_wc_download_log` (
  `download_log_id` bigint(20) UNSIGNED NOT NULL,
  `timestamp` datetime NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_ip_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_order_coupon_lookup`
--

CREATE TABLE `wp_wc_order_coupon_lookup` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `discount_amount` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_order_product_lookup`
--

CREATE TABLE `wp_wc_order_product_lookup` (
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `variation_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `product_qty` int(11) NOT NULL,
  `product_net_revenue` double NOT NULL DEFAULT 0,
  `product_gross_revenue` double NOT NULL DEFAULT 0,
  `coupon_amount` double NOT NULL DEFAULT 0,
  `tax_amount` double NOT NULL DEFAULT 0,
  `shipping_amount` double NOT NULL DEFAULT 0,
  `shipping_tax_amount` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_order_stats`
--

CREATE TABLE `wp_wc_order_stats` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_created_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `num_items_sold` int(11) NOT NULL DEFAULT 0,
  `total_sales` double NOT NULL DEFAULT 0,
  `tax_total` double NOT NULL DEFAULT 0,
  `shipping_total` double NOT NULL DEFAULT 0,
  `net_total` double NOT NULL DEFAULT 0,
  `returning_customer` tinyint(1) DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_order_tax_lookup`
--

CREATE TABLE `wp_wc_order_tax_lookup` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `shipping_tax` double NOT NULL DEFAULT 0,
  `order_tax` double NOT NULL DEFAULT 0,
  `total_tax` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_product_meta_lookup`
--

CREATE TABLE `wp_wc_product_meta_lookup` (
  `product_id` bigint(20) NOT NULL,
  `sku` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `virtual` tinyint(1) DEFAULT 0,
  `downloadable` tinyint(1) DEFAULT 0,
  `min_price` decimal(19,4) DEFAULT NULL,
  `max_price` decimal(19,4) DEFAULT NULL,
  `onsale` tinyint(1) DEFAULT 0,
  `stock_quantity` double DEFAULT NULL,
  `stock_status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'instock',
  `rating_count` bigint(20) DEFAULT 0,
  `average_rating` decimal(3,2) DEFAULT 0.00,
  `total_sales` bigint(20) DEFAULT 0,
  `tax_status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'taxable',
  `tax_class` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_wc_product_meta_lookup`
--

INSERT INTO `wp_wc_product_meta_lookup` (`product_id`, `sku`, `virtual`, `downloadable`, `min_price`, `max_price`, `onsale`, `stock_quantity`, `stock_status`, `rating_count`, `average_rating`, `total_sales`, `tax_status`, `tax_class`) VALUES
(14, '', 0, 0, '20.0000', '20.0000', 0, 20, 'instock', 0, '0.00', 0, 'taxable', '');

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_reserved_stock`
--

CREATE TABLE `wp_wc_reserved_stock` (
  `order_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `stock_quantity` double NOT NULL DEFAULT 0,
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `expires` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_tax_rate_classes`
--

CREATE TABLE `wp_wc_tax_rate_classes` (
  `tax_rate_class_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_wc_tax_rate_classes`
--

INSERT INTO `wp_wc_tax_rate_classes` (`tax_rate_class_id`, `name`, `slug`) VALUES
(1, 'Taux réduit', 'taux-reduit'),
(2, 'Taux zéro', 'taux-zero');

-- --------------------------------------------------------

--
-- Structure de la table `wp_wc_webhooks`
--

CREATE TABLE `wp_wc_webhooks` (
  `webhook_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `delivery_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_created_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `api_version` smallint(4) NOT NULL,
  `failure_count` smallint(10) NOT NULL DEFAULT 0,
  `pending_delivery` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_api_keys`
--

CREATE TABLE `wp_woocommerce_api_keys` (
  `key_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumer_key` char(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumer_secret` char(43) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nonces` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `truncated_key` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_access` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_attribute_taxonomies`
--

CREATE TABLE `wp_woocommerce_attribute_taxonomies` (
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_label` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_orderby` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_public` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_downloadable_product_permissions`
--

CREATE TABLE `wp_woocommerce_downloadable_product_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `download_id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `order_key` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `downloads_remaining` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_granted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `access_expires` datetime DEFAULT NULL,
  `download_count` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_log`
--

CREATE TABLE `wp_woocommerce_log` (
  `log_id` bigint(20) UNSIGNED NOT NULL,
  `timestamp` datetime NOT NULL,
  `level` smallint(4) NOT NULL,
  `source` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_order_itemmeta`
--

CREATE TABLE `wp_woocommerce_order_itemmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_order_items`
--

CREATE TABLE `wp_woocommerce_order_items` (
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `order_item_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_item_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `order_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_payment_tokenmeta`
--

CREATE TABLE `wp_woocommerce_payment_tokenmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `payment_token_id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_payment_tokens`
--

CREATE TABLE `wp_woocommerce_payment_tokens` (
  `token_id` bigint(20) UNSIGNED NOT NULL,
  `gateway_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_sessions`
--

CREATE TABLE `wp_woocommerce_sessions` (
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `session_key` char(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_expiry` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_woocommerce_sessions`
--

INSERT INTO `wp_woocommerce_sessions` (`session_id`, `session_key`, `session_value`, `session_expiry`) VALUES
(41, '1', 'a:7:{s:4:\"cart\";s:6:\"a:0:{}\";s:11:\"cart_totals\";s:367:\"a:15:{s:8:\"subtotal\";i:0;s:12:\"subtotal_tax\";i:0;s:14:\"shipping_total\";i:0;s:12:\"shipping_tax\";i:0;s:14:\"shipping_taxes\";a:0:{}s:14:\"discount_total\";i:0;s:12:\"discount_tax\";i:0;s:19:\"cart_contents_total\";i:0;s:17:\"cart_contents_tax\";i:0;s:19:\"cart_contents_taxes\";a:0:{}s:9:\"fee_total\";i:0;s:7:\"fee_tax\";i:0;s:9:\"fee_taxes\";a:0:{}s:5:\"total\";i:0;s:9:\"total_tax\";i:0;}\";s:15:\"applied_coupons\";s:6:\"a:0:{}\";s:22:\"coupon_discount_totals\";s:6:\"a:0:{}\";s:26:\"coupon_discount_tax_totals\";s:6:\"a:0:{}\";s:21:\"removed_cart_contents\";s:6:\"a:0:{}\";s:8:\"customer\";s:743:\"a:26:{s:2:\"id\";s:1:\"1\";s:13:\"date_modified\";s:25:\"2020-04-02T15:22:42+02:00\";s:8:\"postcode\";s:0:\"\";s:4:\"city\";s:0:\"\";s:9:\"address_1\";s:0:\"\";s:7:\"address\";s:0:\"\";s:9:\"address_2\";s:0:\"\";s:5:\"state\";s:0:\"\";s:7:\"country\";s:2:\"FR\";s:17:\"shipping_postcode\";s:0:\"\";s:13:\"shipping_city\";s:0:\"\";s:18:\"shipping_address_1\";s:0:\"\";s:16:\"shipping_address\";s:0:\"\";s:18:\"shipping_address_2\";s:0:\"\";s:14:\"shipping_state\";s:0:\"\";s:16:\"shipping_country\";s:2:\"FR\";s:13:\"is_vat_exempt\";s:0:\"\";s:19:\"calculated_shipping\";s:0:\"\";s:10:\"first_name\";s:0:\"\";s:9:\"last_name\";s:0:\"\";s:7:\"company\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:5:\"email\";s:29:\"romuald.lewandoski@yandex.com\";s:19:\"shipping_first_name\";s:0:\"\";s:18:\"shipping_last_name\";s:0:\"\";s:16:\"shipping_company\";s:0:\"\";}\";}', 1607283550);

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_shipping_zones`
--

CREATE TABLE `wp_woocommerce_shipping_zones` (
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `zone_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_order` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_shipping_zone_locations`
--

CREATE TABLE `wp_woocommerce_shipping_zone_locations` (
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `location_code` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_type` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_shipping_zone_methods`
--

CREATE TABLE `wp_woocommerce_shipping_zone_methods` (
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `instance_id` bigint(20) UNSIGNED NOT NULL,
  `method_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_order` bigint(20) UNSIGNED NOT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_tax_rates`
--

CREATE TABLE `wp_woocommerce_tax_rates` (
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_country` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tax_rate_state` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tax_rate` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tax_rate_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tax_rate_priority` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_compound` int(1) NOT NULL DEFAULT 0,
  `tax_rate_shipping` int(1) NOT NULL DEFAULT 1,
  `tax_rate_order` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_class` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_woocommerce_tax_rate_locations`
--

CREATE TABLE `wp_woocommerce_tax_rate_locations` (
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `location_code` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `location_type` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp__shop_apicredentials`
--

CREATE TABLE `wp__shop_apicredentials` (
  `idApiCredentials` int(11) NOT NULL,
  `privateKey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `wp__shop_apicredentials`
--

INSERT INTO `wp__shop_apicredentials` (`idApiCredentials`, `privateKey`) VALUES
(1, 'HCWOVWAZ');

-- --------------------------------------------------------

--
-- Structure de la table `wp__shop_brand`
--

CREATE TABLE `wp__shop_brand` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `wp__shop_brand`
--

INSERT INTO `wp__shop_brand` (`id`, `nom`, `position`) VALUES
(1, 'Apple', 1),
(2, 'Samsung', 2),
(3, 'Xiaomi', 3),
(4, 'Wiko', 4),
(5, 'Huawei', 5),
(6, 'test', 6);

-- --------------------------------------------------------

--
-- Structure de la table `wp__shop_categorie`
--

CREATE TABLE `wp__shop_categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `wp__shop_categorie`
--

INSERT INTO `wp__shop_categorie` (`id`, `nom`, `position`, `parent`) VALUES
(1, 'testCat01', 1, -1),
(2, 'testSubCat01', 1, 1),
(3, 'testSubSub01', 1, 2),
(4, 'testCat02', 2, -1),
(5, 'testSubSubSub01', 1, 3),
(6, 'testSubSub02', 2, 2),
(7, 'testCat03', 3, -1);

-- --------------------------------------------------------

--
-- Structure de la table `wp__shop_config`
--

CREATE TABLE `wp__shop_config` (
  `idConfig` int(11) NOT NULL,
  `host` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `step` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `wp__shop_config`
--

INSERT INTO `wp__shop_config` (`idConfig`, `host`, `method`, `step`) VALUES
(1, 'http://localhost', 'install', 1);

-- --------------------------------------------------------

--
-- Structure de la table `wp__shop_delete`
--

CREATE TABLE `wp__shop_delete` (
  `id` int(11) NOT NULL,
  `typeDelete` varchar(255) NOT NULL,
  `targetId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `wp__shop_delete`
--

INSERT INTO `wp__shop_delete` (`id`, `typeDelete`, `targetId`) VALUES
(1, 'SupplierModel', 10),
(2, 'SupplierModel', 8),
(3, 'SupplierModel', 7),
(4, 'SupplierModel', 41),
(5, 'SupplierModel', 40),
(6, 'SupplierModel', 39),
(7, 'SupplierModel', 43),
(8, 'SupplierModel', 44),
(9, 'SupplierModel', 45),
(10, 'SupplierModel', 42),
(11, 'UserModel', 7),
(12, 'PermissionModel', 7),
(13, 'CatModel', 8),
(14, 'CatModel', 9),
(15, 'CatModel', 8),
(16, 'BrandModel', 5);

-- --------------------------------------------------------

--
-- Structure de la table `wp__shop_log`
--

CREATE TABLE `wp__shop_log` (
  `idLog` int(11) NOT NULL,
  `userLog` varchar(255) NOT NULL,
  `dateLog` datetime NOT NULL DEFAULT current_timestamp(),
  `typeLog` varchar(255) NOT NULL,
  `actionLog` varchar(255) NOT NULL,
  `targetIdLog` int(11) DEFAULT NULL,
  `beforeLog` text DEFAULT NULL,
  `afterLog` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `wp__shop_log`
--

INSERT INTO `wp__shop_log` (`idLog`, `userLog`, `dateLog`, `typeLog`, `actionLog`, `targetIdLog`, `beforeLog`, `afterLog`) VALUES
(37, 'admin(site)', '2020-05-28 13:29:08', 'PermissionModel', 'Create', 5, '', '{\"namePermissionModel\":\"test3\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0}'),
(38, 'admin(site)', '2020-05-28 13:29:16', 'PermissionModel', 'Edit', 5, '{\"namePermissionModel\":\"test3\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0}', '{\"namePermissionModel\":\"test3\",\"hasAdmin\":1,\"hasCompta\":1,\"hasProductManagement\":1,\"hasSupplierManagement\":1,\"hasStock\":1,\"hasCaisse\":1}'),
(39, 'admin(site)', '2020-05-28 13:29:20', 'PermissionModel', 'Delete', 5, '{\"idPermissionModel\":\"5\",\"namePermissionModel\":\"test3\",\"hasAdmin\":\"1\",\"hasCompta\":\"1\",\"hasProductManagement\":\"1\",\"hasSupplierManagement\":\"1\",\"hasStock\":\"1\",\"hasCaisse\":\"1\"}', NULL),
(40, 'admin(site)(RB)', '2020-05-28 13:29:37', 'PermissionModel', 'Create', 5, NULL, '{\"idPermissionModel\":\"5\",\"namePermissionModel\":\"test3\",\"hasAdmin\":\"1\",\"hasCompta\":\"1\",\"hasProductManagement\":\"1\",\"hasSupplierManagement\":\"1\",\"hasStock\":\"1\",\"hasCaisse\":\"1\"}'),
(41, 'admin(site)(RB)', '2020-05-28 13:29:49', 'PermissionModel', 'Edit', 5, '{\"namePermissionModel\":\"test3\",\"hasAdmin\":1,\"hasCompta\":1,\"hasProductManagement\":1,\"hasSupplierManagement\":1,\"hasStock\":1,\"hasCaisse\":1}', '{\"namePermissionModel\":\"test3\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0}'),
(42, 'admin(site)(RB)', '2020-05-28 13:29:59', 'PermissionModel', 'Delete', 5, '{\"namePermissionModel\":\"test3\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0}', NULL),
(43, 'admin(site)', '2020-05-28 14:58:50', 'UserModel', 'Create', 4, '', '{\"usernameShopLogin\":\"Kaoutiz\",\"passwordShopLogin\":\"2bHTC9Mb\",\"hasAdmin\":1,\"hasCompta\":1,\"hasProductManagement\":1,\"hasSupplierManagement\":1,\"hasStock\":1,\"hasCaisse\":1,\"isDefaultPass\":1}'),
(44, 'admin(site)', '2020-05-28 14:59:11', 'USerModel', 'Delete', 4, '{\"idShopLogin\":\"4\",\"usernameShopLogin\":\"Kaoutiz\",\"passwordShopLogin\":\"2bHTC9Mb\",\"hasAdmin\":\"1\",\"hasCompta\":\"1\",\"hasProductManagement\":\"1\",\"hasSupplierManagement\":\"1\",\"hasStock\":\"1\",\"hasCaisse\":\"1\",\"isDefaultPass\":\"1\"}', NULL),
(45, 'admin(site)', '2020-06-01 00:38:19', 'SupplierModel', 'Edit', 1, '{\"isSociety\":1,\"societyName\":\"HazielDev\",\"gender\":\"Mr\",\"firstName\":\"Romuald2\",\"lastName\":\"Lewandoski2\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Romuald Lewandoski\\\",\\n    \\\"directionMail\\\": \\\"romuald.lewandoski@yandex.com\\\",\\n    \\\"directionPhone\\\": \\\"0699592756\\\",\\n    \\\"comptaName\\\": \\\"Toto test\\\",\\n    \\\"comptaMail\\\": \\\"toto@test.fr\\\",\\n    \\\"comptaPhone\\\": \\\"0600000001\\\",\\n    \\\"comName\\\": \\\"Test plop\\\",\\n    \\\"comMail\\\": \\\"plop@commercial.fr\\\",\\n    \\\"comPhone\\\": \\\"0327568945\\\"\\n}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1}', '{\"isSociety\":1,\"societyName\":\"HazielDev\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Romuald Lewandoski\\\",\\n    \\\"directionMail\\\": \\\"romuald.lewandoski@yandex.com\\\",\\n    \\\"directionPhone\\\": \\\"0699592756\\\",\\n    \\\"comptaName\\\": \\\"Toto test\\\",\\n    \\\"comptaMail\\\": \\\"toto@test.fr\\\",\\n    \\\"comptaPhone\\\": \\\"0600000001\\\",\\n    \\\"comName\\\": \\\"Test plop\\\",\\n    \\\"comMail\\\": \\\"plop@commercial.fr\\\",\\n    \\\"comPhone\\\": \\\"0327568945\\\"\\n}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1}'),
(46, 'admin(site)', '2020-06-01 18:37:47', 'UserModel', 'Edit', 1, '{\"usernameShopLogin\":\"test\",\"passwordShopLogin\":\"bWOxhs0D\",\"hasAdmin\":0,\"hasCompta\":1,\"hasProductManagement\":1,\"hasSupplierManagement\":1,\"hasStock\":1,\"hasCaisse\":0,\"isDefaultPass\":1}', '{\"usernameShopLogin\":\"test\",\"passwordShopLogin\":\"bWOxhs0D\",\"hasAdmin\":1,\"hasCompta\":1,\"hasProductManagement\":1,\"hasSupplierManagement\":1,\"hasStock\":1,\"hasCaisse\":0,\"isDefaultPass\":1}'),
(47, 'test', '2020-06-01 18:39:54', 'UserModel', 'ChangePass', 1, NULL, NULL),
(48, 'admin(site)', '2020-06-01 18:42:34', 'USerModel', 'ResetPass', 1, NULL, NULL),
(49, 'test', '2020-06-01 18:43:05', 'UserModel', 'ChangePass', 1, NULL, NULL),
(50, 'admin(site)', '2020-06-01 18:47:45', 'USerModel', 'ResetPass', 1, NULL, NULL),
(51, 'test', '2020-06-01 18:48:07', 'UserModel', 'ChangePass', 1, NULL, NULL),
(52, 'admin(site)', '2020-06-01 18:48:34', 'USerModel', 'ResetPass', 1, NULL, NULL),
(53, 'test', '2020-06-01 18:50:44', 'UserModel', 'ChangePass', 1, NULL, NULL),
(54, 'admin(site)', '2020-06-01 18:52:26', 'USerModel', 'ResetPass', 1, NULL, NULL),
(55, 'test', '2020-06-01 18:52:50', 'UserModel', 'ChangePass', 1, NULL, NULL),
(56, 'admin(site)', '2020-06-01 18:54:13', 'USerModel', 'ResetPass', 1, NULL, NULL),
(57, 'test', '2020-06-01 18:54:50', 'UserModel', 'ChangePass', 1, NULL, NULL),
(58, 'admin(site)', '2020-06-01 18:55:25', 'UserModel', 'Create', 5, '', '{\"usernameShopLogin\":\"toto\",\"passwordShopLogin\":\"Sq4CghbT\",\"hasAdmin\":1,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":1,\"isDefaultPass\":1}'),
(59, 'toto', '2020-06-01 18:55:52', 'UserModel', 'ChangePass', 5, NULL, NULL),
(60, 'HazielKaos', '2020-06-04 14:31:43', 'SupplierModel', 'Create', 19, '', '{\"isSociety\":\"0\",\"societyName\":\"testLog\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"plop\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\\"directionName\\\":\\\"\\\",\\\"directionMail\\\":\\\"\\\",\\\"directionPhone\\\":\\\"\\\",\\\"comptaName\\\":\\\"\\\",\\\"comptaMail\\\":\\\"\\\",\\\"comptaPhone\\\":\\\"\\\",\\\"comName\\\":\\\"\\\",\\\"comMail\\\":\\\"\\\",\\\"comPhone\\\":\\\"\\\"}\",\"notes\":\"\",\"isActive\":\"1\"}'),
(61, 'HazielKaos', '2020-06-04 15:50:44', 'SupplierModel', 'Edit', 19, '{\"isSociety\":0,\"societyName\":\"testLog\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"plop\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}', '{\"isSociety\":\"0\",\"societyName\":\"testLogEdited\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"plop\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\\"directionName\\\":\\\"\\\",\\\"directionMail\\\":\\\"\\\",\\\"directionPhone\\\":\\\"\\\",\\\"comptaName\\\":\\\"\\\",\\\"comptaMail\\\":\\\"\\\",\\\"comptaPhone\\\":\\\"\\\",\\\"comName\\\":\\\"\\\",\\\"comMail\\\":\\\"\\\",\\\"comPhone\\\":\\\"\\\"}\",\"notes\":\"\",\"isActive\":\"1\"}'),
(62, 'HazielKaos', '2020-06-04 15:52:01', 'SupplierModel', 'Delete', 19, '{\"idSupplier\":\"19\",\"isSociety\":\"0\",\"societyName\":\"testLogEdited\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"plop\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(63, ' (UpdateThread)', '2020-06-04 15:54:58', 'SupplierModel', 'Create', 20, '', '{\"isSociety\":0,\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"Toto\",\"lastName\":\"Tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"France\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(65, 'admin(site)', '2020-06-04 15:58:06', 'SupplierModel', 'Delete', 20, '{\"idSupplier\":\"20\",\"isSociety\":\"0\",\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"Toto\",\"lastName\":\"Tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"France\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(66, 'HazielKaos (UpdateThread)', '2020-06-04 17:22:24', 'SupplierModel', 'Create', 21, '', '{\"isSociety\":0,\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(67, 'HazielKaos (UpdateThread)', '2020-06-04 17:22:53', 'SupplierModel', 'Create', 22, '', '{\"isSociety\":0,\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(68, 'HazielKaos (UpdateThread)', '2020-06-04 17:23:23', 'SupplierModel', 'Create', 23, '', '{\"isSociety\":0,\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(69, 'HazielKaos', '2020-06-04 17:23:25', 'SupplierModel', 'Create', 24, '', '{\"isSociety\":\"0\",\"societyName\":\"testOnline\",\"gender\":\"ND\",\"firstName\":\"Toto\",\"lastName\":\"tutu\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\\"directionName\\\":\\\"\\\",\\\"directionMail\\\":\\\"\\\",\\\"directionPhone\\\":\\\"\\\",\\\"comptaName\\\":\\\"\\\",\\\"comptaMail\\\":\\\"\\\",\\\"comptaPhone\\\":\\\"\\\",\\\"comName\\\":\\\"\\\",\\\"comMail\\\":\\\"\\\",\\\"comPhone\\\":\\\"\\\"}\",\"notes\":\"\",\"isActive\":\"1\"}'),
(70, 'HazielKaos (UpdateThread)', '2020-06-04 17:23:53', 'SupplierModel', 'Create', 25, '', '{\"isSociety\":0,\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(71, 'HazielKaos (UpdateThread)', '2020-06-04 17:24:23', 'SupplierModel', 'Create', 26, '', '{\"isSociety\":0,\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(72, 'HazielKaos (UpdateThread)', '2020-06-04 17:24:54', 'SupplierModel', 'Create', 27, '', '{\"isSociety\":0,\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(73, 'admin(site)', '2020-06-04 20:13:11', 'SupplierModel', 'Delete', 27, '{\"idSupplier\":\"27\",\"isSociety\":\"0\",\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(74, 'admin(site)', '2020-06-04 20:13:14', 'SupplierModel', 'Delete', 22, '{\"idSupplier\":\"22\",\"isSociety\":\"0\",\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(75, 'admin(site)', '2020-06-04 20:13:17', 'SupplierModel', 'Delete', 23, '{\"idSupplier\":\"23\",\"isSociety\":\"0\",\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(76, 'admin(site)', '2020-06-04 20:13:19', 'SupplierModel', 'Delete', 24, '{\"idSupplier\":\"24\",\"isSociety\":\"0\",\"societyName\":\"testOnline\",\"gender\":\"ND\",\"firstName\":\"Toto\",\"lastName\":\"tutu\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(77, 'admin(site)', '2020-06-04 20:13:21', 'SupplierModel', 'Delete', 25, '{\"idSupplier\":\"25\",\"isSociety\":\"0\",\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(78, 'admin(site)', '2020-06-04 20:13:24', 'SupplierModel', 'Delete', 26, '{\"idSupplier\":\"26\",\"isSociety\":\"0\",\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(79, 'HazielKaos(UpdateThread)', '2020-06-04 21:19:46', 'SupplierModel', 'Edit', 21, '{\"isSociety\":0,\"societyName\":\"testOffline\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}', '{\"isSociety\":0,\"societyName\":\"testOffline2\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\\"directionName\\\":\\\"\\\",\\\"directionMail\\\":\\\"\\\",\\\"directionPhone\\\":\\\"\\\",\\\"comptaName\\\":\\\"\\\",\\\"comptaMail\\\":\\\"\\\",\\\"comptaPhone\\\":\\\"\\\",\\\"comName\\\":\\\"\\\",\\\"comMail\\\":\\\"\\\",\\\"comPhone\\\":\\\"\\\"}\",\"notes\":\"\",\"isActive\":1}'),
(80, 'admin(site)', '2020-06-05 09:35:47', 'UserModel', 'Create', 6, '', '{\"usernameShopLogin\":\"testUpdate\",\"passwordShopLogin\":\"oi3372Dk\",\"hasAdmin\":1,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0,\"isDefaultPass\":1}'),
(81, 'testUpdate', '2020-06-05 09:36:26', 'UserModel', 'ChangePass', 6, NULL, NULL),
(82, 'admin(site)', '2020-06-05 09:38:15', 'USerModel', 'ResetPass', 6, NULL, NULL),
(83, 'testUpdate', '2020-06-05 09:38:44', 'UserModel', 'ChangePass', 6, NULL, NULL),
(84, 'admin(site)', '2020-06-05 09:38:56', 'USerModel', 'ResetPass', 6, NULL, NULL),
(85, 'testUpdate', '2020-06-05 09:39:31', 'UserModel', 'ChangePass', 6, NULL, NULL),
(86, 'HazielKaos (UpdateThread)', '2020-06-05 09:59:59', 'SupplierModel', 'Create', 28, '', '{\"isSociety\":1,\"societyName\":\"testUpdateThread (new version)\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"France\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(87, 'HazielKaos(UpdateThread)', '2020-06-05 10:06:39', 'SupplierModel', 'Edit', 28, '{\"isSociety\":1,\"societyName\":\"testUpdateThread (new version)\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"France\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}', '{\"isSociety\":1,\"societyName\":\"testUpdateThread (new version)\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"France\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\\"directionName\\\":\\\"\\\",\\\"directionMail\\\":\\\"\\\",\\\"directionPhone\\\":\\\"\\\",\\\"comptaName\\\":\\\"\\\",\\\"comptaMail\\\":\\\"\\\",\\\"comptaPhone\\\":\\\"\\\",\\\"comName\\\":\\\"\\\",\\\"comMail\\\":\\\"\\\",\\\"comPhone\\\":\\\"\\\"}\",\"notes\":\"Edit with new Update system\",\"isActive\":1}'),
(88, 'HazielKaos', '2020-06-05 10:15:15', 'SupplierModel', 'Delete', 28, '{\"idSupplier\":\"28\",\"isSociety\":\"1\",\"societyName\":\"testUpdateThread (new version)\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"France\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"Edit with new Update system\",\"isActive\":\"1\"}', NULL),
(89, 'HazielKaos(UpdateThread)', '2020-06-05 21:43:26', 'SupplierModel', 'Edit', 3, '{\"isSociety\":1,\"societyName\":\"SARL Desruisseaux\",\"gender\":\"Mr\",\"firstName\":\"Soren \",\"lastName\":\"Desruisseaux\",\"address\":\"26, rue des Soeurs\",\"zipCode\":\"93120 \",\"city\":\"LA COURNEUVE\",\"country\":\"France\",\"phone\":\"0108677214\",\"mobilePhone\":\"\",\"mail\":\"sorendesruisseaux@jourrapide.com\",\"refCode\":\"535\",\"webSite\":\"https:\\/\\/picburner.fr\",\"paymentType\":\"1\",\"iban\":\"FR9210096000402983354915F17\",\"bic\":\"\",\"tva\":\"17447785\",\"siret\":\"6017426518\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Jean Saisrien\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"James Lefrique\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}', '{\"isSociety\":1,\"societyName\":\"SARL Desruisseaux\",\"gender\":\"Mr\",\"firstName\":\"Soren \",\"lastName\":\"Desruisseaux\",\"address\":\"26, rue des Soeurs\",\"zipCode\":\"93120 \",\"city\":\"LA COURNEUVE\",\"country\":\"France\",\"phone\":\"0108677214\",\"mobilePhone\":\"\",\"mail\":\"sorendesruisseaux@jourrapide.com\",\"refCode\":\"535\",\"webSite\":\"https:\\/\\/picburner.fr\",\"paymentType\":\"1\",\"iban\":\"FR9210096000402983354915F17\",\"bic\":\"\",\"tva\":\"17447785\",\"siret\":\"6017426518\",\"contact\":\"{\\\"directionName\\\":\\\"Jean Saisrien\\\",\\\"directionMail\\\":\\\"\\\",\\\"directionPhone\\\":\\\"\\\",\\\"comptaName\\\":\\\"James Lefrique\\\",\\\"comptaMail\\\":\\\"\\\",\\\"comptaPhone\\\":\\\"\\\",\\\"comName\\\":\\\"\\\",\\\"comMail\\\":\\\"\\\",\\\"comPhone\\\":\\\"\\\"}\",\"notes\":\"\",\"isActive\":0}'),
(90, 'admin(site)', '2020-06-05 22:34:44', 'UserModel', 'Edit', 1, '{\"usernameShopLogin\":\"test\",\"passwordShopLogin\":\"$2b$10$sBJkzxSDM8z8jnD.FWkgX.lU6aBhJpPCmMzYNmzsu3OdaL3\\/MIzSq\",\"hasAdmin\":1,\"hasCompta\":1,\"hasProductManagement\":1,\"hasSupplierManagement\":1,\"hasStock\":1,\"hasCaisse\":0,\"isDefaultPass\":0}', '{\"usernameShopLogin\":\"test\",\"passwordShopLogin\":\"$2b$10$sBJkzxSDM8z8jnD.FWkgX.lU6aBhJpPCmMzYNmzsu3OdaL3\\/MIzSq\",\"hasAdmin\":0,\"hasCompta\":1,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":1,\"hasCaisse\":1,\"isDefaultPass\":0}'),
(91, 'admin(site)', '2020-06-05 22:38:32', 'PermissionModel', 'Create', 6, '', '{\"namePermissionModel\":\"Caissier\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":1,\"hasCaisse\":1}'),
(92, 'admin(site)', '2020-06-05 22:38:59', 'UserModel', 'Create', 7, '', '{\"usernameShopLogin\":\"axel\",\"passwordShopLogin\":\"DJIerik2\",\"hasAdmin\":\"0\",\"hasCompta\":\"0\",\"hasProductManagement\":\"0\",\"hasSupplierManagement\":\"0\",\"hasStock\":\"1\",\"hasCaisse\":\"1\",\"isDefaultPass\":1}'),
(93, 'admin(site)', '2020-06-05 22:39:26', 'UserModel', 'ResetPass', 6, NULL, NULL),
(94, 'axel', '2020-06-05 22:40:19', 'UserModel', 'ChangePass', 7, NULL, NULL),
(95, 'admin(site)', '2020-06-06 00:04:02', 'SupplierModel', 'Edit', 3, '{\"isSociety\":1,\"societyName\":\"SARL Desruisseaux\",\"gender\":\"Mr\",\"firstName\":\"Soren \",\"lastName\":\"Desruisseaux\",\"address\":\"26, rue des Soeurs\",\"zipCode\":\"93120 \",\"city\":\"LA COURNEUVE\",\"country\":\"France\",\"phone\":\"0108677214\",\"mobilePhone\":\"\",\"mail\":\"sorendesruisseaux@jourrapide.com\",\"refCode\":\"535\",\"webSite\":\"https:\\/\\/picburner.fr\",\"paymentType\":\"1\",\"iban\":\"FR9210096000402983354915F17\",\"bic\":\"\",\"tva\":\"17447785\",\"siret\":\"6017426518\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Jean Saisrien\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"James Lefrique\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":0}', '{\"isSociety\":1,\"societyName\":\"SARL Desruisseaux2\",\"gender\":\"Mr\",\"firstName\":\"Soren \",\"lastName\":\"Desruisseaux\",\"address\":\"26, rue des Soeurs\",\"zipCode\":\"93120 \",\"city\":\"LA COURNEUVE\",\"country\":\"France\",\"phone\":\"0108677214\",\"mobilePhone\":\"\",\"mail\":\"sorendesruisseaux@jourrapide.com\",\"refCode\":\"535\",\"webSite\":\"https:\\/\\/picburner.fr\",\"paymentType\":\"1\",\"iban\":\"FR9210096000402983354915F17\",\"bic\":\"\",\"tva\":\"17447785\",\"siret\":\"6017426518\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Jean Saisrien\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"James Lefrique\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":0}'),
(96, 'admin(site)(RB)', '2020-06-06 00:06:37', 'SupplierModel', 'Edit', 3, '{\"isSociety\":1,\"societyName\":\"SARL Desruisseaux\",\"gender\":\"Mr\",\"firstName\":\"Soren \",\"lastName\":\"Desruisseaux\",\"address\":\"26, rue des Soeurs\",\"zipCode\":\"93120 \",\"city\":\"LA COURNEUVE\",\"country\":\"France\",\"phone\":\"0108677214\",\"mobilePhone\":\"\",\"mail\":\"sorendesruisseaux@jourrapide.com\",\"refCode\":\"535\",\"webSite\":\"https:\\/\\/picburner.fr\",\"paymentType\":\"1\",\"iban\":\"FR9210096000402983354915F17\",\"bic\":\"\",\"tva\":\"17447785\",\"siret\":\"6017426518\",\"contact\":\"{\\\"directionName\\\":\\\"Jean Saisrien\\\",\\\"directionMail\\\":\\\"\\\",\\\"directionPhone\\\":\\\"\\\",\\\"comptaName\\\":\\\"James Lefrique\\\",\\\"comptaMail\\\":\\\"\\\",\\\"comptaPhone\\\":\\\"\\\",\\\"comName\\\":\\\"\\\",\\\"comMail\\\":\\\"\\\",\\\"comPhone\\\":\\\"\\\"}\",\"notes\":\"\",\"isActive\":0}', '{\"isSociety\":1,\"societyName\":\"SARL Desruisseaux\",\"gender\":\"Mr\",\"firstName\":\"Soren \",\"lastName\":\"Desruisseaux\",\"address\":\"26, rue des Soeurs\",\"zipCode\":\"93120 \",\"city\":\"LA COURNEUVE\",\"country\":\"France\",\"phone\":\"0108677214\",\"mobilePhone\":\"\",\"mail\":\"sorendesruisseaux@jourrapide.com\",\"refCode\":\"535\",\"webSite\":\"https:\\/\\/picburner.fr\",\"paymentType\":\"1\",\"iban\":\"FR9210096000402983354915F17\",\"bic\":\"\",\"tva\":\"17447785\",\"siret\":\"6017426518\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Jean Saisrien\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"James Lefrique\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(97, 'admin(site)(RB)', '2020-06-06 00:07:10', 'SupplierModel', 'Edit', 3, '{\"isSociety\":1,\"societyName\":\"SARL Desruisseaux\",\"gender\":\"Mr\",\"firstName\":\"Soren \",\"lastName\":\"Desruisseaux\",\"address\":\"26, rue des Soeurs\",\"zipCode\":\"93120 \",\"city\":\"LA COURNEUVE\",\"country\":\"France\",\"phone\":\"0108677214\",\"mobilePhone\":\"\",\"mail\":\"sorendesruisseaux@jourrapide.com\",\"refCode\":\"535\",\"webSite\":\"https:\\/\\/picburner.fr\",\"paymentType\":\"1\",\"iban\":\"FR9210096000402983354915F17\",\"bic\":\"\",\"tva\":\"17447785\",\"siret\":\"6017426518\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Jean Saisrien\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"James Lefrique\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}', '{\"isSociety\":1,\"societyName\":\"SARL Desruisseaux\",\"gender\":\"Mr\",\"firstName\":\"Soren \",\"lastName\":\"Desruisseaux\",\"address\":\"26, rue des Soeurs\",\"zipCode\":\"93120 \",\"city\":\"LA COURNEUVE\",\"country\":\"France\",\"phone\":\"0108677214\",\"mobilePhone\":\"\",\"mail\":\"sorendesruisseaux@jourrapide.com\",\"refCode\":\"535\",\"webSite\":\"https:\\/\\/picburner.fr\",\"paymentType\":\"1\",\"iban\":\"FR9210096000402983354915F17\",\"bic\":\"\",\"tva\":\"17447785\",\"siret\":\"6017426518\",\"contact\":\"{\\\"directionName\\\":\\\"Jean Saisrien\\\",\\\"directionMail\\\":\\\"\\\",\\\"directionPhone\\\":\\\"\\\",\\\"comptaName\\\":\\\"James Lefrique\\\",\\\"comptaMail\\\":\\\"\\\",\\\"comptaPhone\\\":\\\"\\\",\\\"comName\\\":\\\"\\\",\\\"comMail\\\":\\\"\\\",\\\"comPhone\\\":\\\"\\\"}\",\"notes\":\"\",\"isActive\":0}'),
(98, 'HazielKaos (UpdateThread)', '2020-06-06 00:21:13', 'SupplierModel', 'Create', 29, '', '{\"isSociety\":0,\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(99, 'HazielKaos', '2020-06-08 09:12:35', 'SupplierModel', 'Delete', 29, '{\"isSociety\":0,\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}', NULL),
(100, 'HazielKaos', '2020-06-08 09:46:46', 'SupplierModel', 'Create', 29, NULL, '{\"isSociety\":0,\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(101, 'HazielKaos', '2020-06-08 09:46:51', 'SupplierModel', 'Create', 29, NULL, '{\"isSociety\":0,\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(102, 'HazielKaos', '2020-06-08 09:48:54', 'SupplierModel', 'Create', 29, NULL, '{\"isSociety\":0,\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(103, 'HazielKaos', '2020-06-08 09:53:11', 'SupplierModel', 'Create', 29, NULL, '{\"isSociety\":0,\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(104, 'HazielKaos', '2020-06-08 09:54:05', 'SupplierModel', 'Create', 29, NULL, '{\"isSociety\":0,\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(105, 'HazielKaos', '2020-06-08 09:55:26', 'SupplierModel', 'Create', 29, NULL, '{\"isSociety\":0,\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(106, 'HazielKaos(UpdateThread)', '2020-06-08 09:56:56', 'SupplierModel', 'Delete', 35, '{\"idSupplier\":\"35\",\"isSociety\":\"0\",\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(107, 'HazielKaos(UpdateThread)', '2020-06-08 09:57:21', 'SupplierModel', 'Delete', 34, '{\"idSupplier\":\"34\",\"isSociety\":\"0\",\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(108, 'HazielKaos(UpdateThread)', '2020-06-08 09:57:31', 'SupplierModel', 'Delete', 33, '{\"idSupplier\":\"33\",\"isSociety\":\"0\",\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(109, 'HazielKaos(UpdateThread)', '2020-06-08 09:57:41', 'SupplierModel', 'Delete', 32, '{\"idSupplier\":\"32\",\"isSociety\":\"0\",\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(110, 'HazielKaos(UpdateThread)', '2020-06-08 09:57:50', 'SupplierModel', 'Delete', 31, '{\"idSupplier\":\"31\",\"isSociety\":\"0\",\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(111, 'HazielKaos(UpdateThread)', '2020-06-08 09:58:00', 'SupplierModel', 'Delete', 30, '{\"idSupplier\":\"30\",\"isSociety\":\"0\",\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(112, 'HazielKaos', '2020-06-08 09:58:39', 'SupplierModel', 'Create', 30, NULL, '{\"idSupplier\":\"30\",\"isSociety\":\"0\",\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}'),
(113, 'HazielKaos', '2020-06-08 10:05:58', 'SupplierModel', 'Create', 31, NULL, '{\"idSupplier\":\"31\",\"isSociety\":\"0\",\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}');
INSERT INTO `wp__shop_log` (`idLog`, `userLog`, `dateLog`, `typeLog`, `actionLog`, `targetIdLog`, `beforeLog`, `afterLog`) VALUES
(114, 'HazielKaos', '2020-06-08 10:06:31', 'SupplierModel', 'Delete', 31, '{\"idSupplier\":\"31\",\"isSociety\":\"0\",\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(115, 'HazielKaos (UpdateThread)', '2020-06-08 10:08:32', 'SupplierModel', 'Create', 36, '', '{\"isSociety\":0,\"societyName\":\"testDeleteByRollback\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"aaa\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(116, 'HazielKaos', '2020-06-08 10:08:50', 'SupplierModel', 'Delete', 36, '{\"isSociety\":0,\"societyName\":\"testDeleteByRollback\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"aaa\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}', NULL),
(117, 'HazielKaos', '2020-06-08 10:13:44', 'SupplierModel', 'Create', 36, NULL, '{\"isSociety\":0,\"societyName\":\"testDeleteByRollback\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"aaa\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(118, 'HazielKaos(UpdateThread)', '2020-06-08 10:14:35', 'SupplierModel', 'Delete', 37, '{\"idSupplier\":\"37\",\"isSociety\":\"0\",\"societyName\":\"testDeleteByRollback\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"aaa\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}', NULL),
(119, 'HazielKaos', '2020-06-15 10:09:33', 'SupplierModel', 'Create', 37, NULL, '{\"idSupplier\":\"37\",\"isSociety\":\"0\",\"societyName\":\"testDeleteByRollback\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"aaa\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\"}'),
(120, 'HazielKaos(UpdateThread)', '2020-06-15 10:10:20', 'SupplierModel', 'Delete', 37, '{\"idSupplier\":\"37\",\"isSociety\":\"0\",\"societyName\":\"testDeleteByRollback\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"aaa\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-15 10:09:33\"}', NULL),
(121, 'HazielKaos', '2020-06-15 10:10:52', 'SupplierModel', 'Create', 37, NULL, '{\"idSupplier\":\"37\",\"isSociety\":\"0\",\"societyName\":\"testDeleteByRollback\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"aaa\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-15 10:09:33\"}'),
(122, 'HazielKaos(UpdateThread)', '2020-06-15 10:16:07', 'SupplierModel', 'Delete', 37, '{\"idSupplier\":\"37\",\"isSociety\":\"0\",\"societyName\":\"testDeleteByRollback\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"aaa\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-15 10:09:33\"}', NULL),
(123, 'HazielKaos', '2020-06-15 10:18:55', 'SupplierModel', 'Create', 37, NULL, '{\"idSupplier\":\"37\",\"isSociety\":\"0\",\"societyName\":\"testDeleteByRollback\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"aaa\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-15 10:09:33\"}'),
(124, 'HazielKaos(UpdateThread)', '2020-06-15 10:23:51', 'SupplierModel', 'Delete', 37, '{\"idSupplier\":\"37\",\"isSociety\":\"0\",\"societyName\":\"testDeleteByRollback\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"aaa\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-15 10:09:33\"}', NULL),
(125, 'admin(site)', '2020-06-15 16:22:21', 'SupplierModel', 'Edit', 30, '{\"isSociety\":0,\"societyName\":\"test sans connexion\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1,\"version\":\"2020-06-10 10:41:21\"}', '{\"isSociety\":0,\"societyName\":\"test sans connexion2\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(126, 'admin(site)', '2020-06-17 10:09:26', 'SupplierModel', 'Delete', 30, '{\"idSupplier\":\"30\",\"isSociety\":\"0\",\"societyName\":\"test sans connexion2\",\"gender\":\"ND\",\"firstName\":\"romuald\",\"lastName\":\"detrait\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-15 16:22:21\"}', NULL),
(127, 'admin(site)', '2020-06-17 10:22:47', 'SupplierModel', 'Edit', 21, '{\"isSociety\":0,\"societyName\":\"testOffline2\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1,\"version\":\"2020-06-10 10:41:21\"}', '{\"isSociety\":0,\"societyName\":\"testOffline21\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(128, 'admin(site)', '2020-06-17 10:23:12', 'SupplierModel', 'Delete', 21, '{\"idSupplier\":\"21\",\"isSociety\":\"0\",\"societyName\":\"testOffline21\",\"gender\":\"ND\",\"firstName\":\"toto\",\"lastName\":\"tata\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-17 10:22:47\"}', NULL),
(129, 'admin(site)', '2020-06-17 10:38:26', 'SupplierModel', 'Delete', 10, '{\"idSupplier\":\"10\",\"isSociety\":\"0\",\"societyName\":\"Test avec nouvel idWp\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Kaos\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-10 10:41:21\"}', NULL),
(130, 'admin(site)(RB)', '2020-06-17 10:38:51', 'SupplierModel', 'Create', 10, NULL, '{\"idSupplier\":\"10\",\"isSociety\":\"0\",\"societyName\":\"Test avec nouvel idWp\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Kaos\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-10 10:41:21\"}'),
(131, 'admin(site)', '2020-06-17 15:24:33', 'SupplierModel', 'Delete', 10, '{\"idSupplier\":\"10\",\"isSociety\":\"0\",\"societyName\":\"Test avec nouvel idWp\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Kaos\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-10 10:41:21\"}', NULL),
(132, 'admin(site)', '2020-06-17 15:32:35', 'SupplierModel', 'Delete', 8, '{\"idSupplier\":\"8\",\"isSociety\":\"0\",\"societyName\":\"testDemo\",\"gender\":\"Mme\",\"firstName\":\"Jhona\",\"lastName\":\"Doe\",\"address\":\"quelque part\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0611223344\",\"mobilePhone\":\"0644556677\",\"mail\":\"test@demo.fr\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"1\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"note sur l\\\\\'utilisateur\",\"isActive\":\"1\",\"version\":\"2020-06-10 10:41:21\"}', NULL),
(133, 'admin(site)', '2020-06-17 15:43:31', 'SupplierModel', 'Delete', 7, '{\"idSupplier\":\"7\",\"isSociety\":\"0\",\"societyName\":\"test4\",\"gender\":\"ND\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"Afghanistan\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-10 10:41:21\"}', NULL),
(134, 'admin(site)', '2020-06-18 16:15:10', 'PermissionModel', 'Edit', 3, '{\"namePermissionModel\":\"test2\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":1,\"version\":\"2020-06-10 10:41:21\"}', '{\"namePermissionModel\":\"test23\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":1}'),
(135, 'admin(site)', '2020-06-24 13:44:26', 'SupplierModel', 'Create', 38, '', '{\"isSociety\":1,\"societyName\":\"test4\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(136, 'HazielKaos(UpdateThread)', '2020-06-25 14:43:08', 'SupplierModel', 'Edit', 1, '{\"isSociety\":1,\"societyName\":\"HazielDev\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Romuald Lewandoski\\\",\\n    \\\"directionMail\\\": \\\"romuald.lewandoski@yandex.com\\\",\\n    \\\"directionPhone\\\": \\\"0699592756\\\",\\n    \\\"comptaName\\\": \\\"Toto test\\\",\\n    \\\"comptaMail\\\": \\\"toto@test.fr\\\",\\n    \\\"comptaPhone\\\": \\\"0600000001\\\",\\n    \\\"comName\\\": \\\"Test plop\\\",\\n    \\\"comMail\\\": \\\"plop@commercial.fr\\\",\\n    \\\"comPhone\\\": \\\"0327568945\\\"\\n}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1,\"version\":\"2020-06-10 10:41:21\"}', '{\"isSociety\":1,\"societyName\":\"HazielDev2\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\\"directionName\\\":\\\"Romuald Lewandoski\\\",\\\"directionMail\\\":\\\"romuald.lewandoski@yandex.com\\\",\\\"directionPhone\\\":\\\"0699592756\\\",\\\"comptaName\\\":\\\"Toto test\\\",\\\"comptaMail\\\":\\\"toto@test.fr\\\",\\\"comptaPhone\\\":\\\"0600000001\\\",\\\"comName\\\":\\\"Test plop\\\",\\\"comMail\\\":\\\"plop@commercial.fr\\\",\\\"comPhone\\\":\\\"0327568945\\\"}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1}'),
(137, 'HazielKaos(UpdateThread)', '2020-06-25 14:52:38', 'SupplierModel', 'Edit', 1, '{\"isSociety\":1,\"societyName\":\"HazielDev2\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Romuald Lewandoski\\\",\\n    \\\"directionMail\\\": \\\"romuald.lewandoski@yandex.com\\\",\\n    \\\"directionPhone\\\": \\\"0699592756\\\",\\n    \\\"comptaName\\\": \\\"Toto test\\\",\\n    \\\"comptaMail\\\": \\\"toto@test.fr\\\",\\n    \\\"comptaPhone\\\": \\\"0600000001\\\",\\n    \\\"comName\\\": \\\"Test plop\\\",\\n    \\\"comMail\\\": \\\"plop@commercial.fr\\\",\\n    \\\"comPhone\\\": \\\"0327568945\\\"\\n}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1,\"version\":\"2020-06-25 14:43:08\"}', '{\"isSociety\":1,\"societyName\":\"HazielDev\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\\"directionName\\\":\\\"Romuald Lewandoski\\\",\\\"directionMail\\\":\\\"romuald.lewandoski@yandex.com\\\",\\\"directionPhone\\\":\\\"0699592756\\\",\\\"comptaName\\\":\\\"Toto test\\\",\\\"comptaMail\\\":\\\"toto@test.fr\\\",\\\"comptaPhone\\\":\\\"0600000001\\\",\\\"comName\\\":\\\"Test plop\\\",\\\"comMail\\\":\\\"plop@commercial.fr\\\",\\\"comPhone\\\":\\\"0327568945\\\"}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1}'),
(138, 'HazielKaos(UpdateThread)', '2020-06-25 15:48:48', 'SupplierModel', 'Edit', 1, '{\"isSociety\":1,\"societyName\":\"HazielDev\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Romuald Lewandoski\\\",\\n    \\\"directionMail\\\": \\\"romuald.lewandoski@yandex.com\\\",\\n    \\\"directionPhone\\\": \\\"0699592756\\\",\\n    \\\"comptaName\\\": \\\"Toto test\\\",\\n    \\\"comptaMail\\\": \\\"toto@test.fr\\\",\\n    \\\"comptaPhone\\\": \\\"0600000001\\\",\\n    \\\"comName\\\": \\\"Test plop\\\",\\n    \\\"comMail\\\": \\\"plop@commercial.fr\\\",\\n    \\\"comPhone\\\": \\\"0327568945\\\"\\n}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1,\"version\":\"2020-06-25 14:52:38\"}', '{\"isSociety\":1,\"societyName\":\"HazielDev2\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\\"directionName\\\":\\\"Romuald Lewandoski\\\",\\\"directionMail\\\":\\\"romuald.lewandoski@yandex.com\\\",\\\"directionPhone\\\":\\\"0699592756\\\",\\\"comptaName\\\":\\\"Toto test\\\",\\\"comptaMail\\\":\\\"toto@test.fr\\\",\\\"comptaPhone\\\":\\\"0600000001\\\",\\\"comName\\\":\\\"Test plop\\\",\\\"comMail\\\":\\\"plop@commercial.fr\\\",\\\"comPhone\\\":\\\"0327568945\\\"}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1}'),
(139, 'HazielKaos(UpdateThread)', '2020-06-26 01:26:32', 'SupplierModel', 'Edit', 1, '{\"isSociety\":1,\"societyName\":\"HazielDev2\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Romuald Lewandoski\\\",\\n    \\\"directionMail\\\": \\\"romuald.lewandoski@yandex.com\\\",\\n    \\\"directionPhone\\\": \\\"0699592756\\\",\\n    \\\"comptaName\\\": \\\"Toto test\\\",\\n    \\\"comptaMail\\\": \\\"toto@test.fr\\\",\\n    \\\"comptaPhone\\\": \\\"0600000001\\\",\\n    \\\"comName\\\": \\\"Test plop\\\",\\n    \\\"comMail\\\": \\\"plop@commercial.fr\\\",\\n    \\\"comPhone\\\": \\\"0327568945\\\"\\n}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1,\"version\":\"2020-06-25 15:48:48\"}', '{\"isSociety\":1,\"societyName\":\"HazielDev\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\\"directionName\\\":\\\"Romuald Lewandoski\\\",\\\"directionMail\\\":\\\"romuald.lewandoski@yandex.com\\\",\\\"directionPhone\\\":\\\"0699592756\\\",\\\"comptaName\\\":\\\"Toto test\\\",\\\"comptaMail\\\":\\\"toto@test.fr\\\",\\\"comptaPhone\\\":\\\"0600000001\\\",\\\"comName\\\":\\\"Test plop\\\",\\\"comMail\\\":\\\"plop@commercial.fr\\\",\\\"comPhone\\\":\\\"0327568945\\\"}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1}'),
(140, 'HazielKaos(UpdateThread)', '2020-06-26 01:26:32', 'SupplierModel', 'Edit', 1, '{\"isSociety\":1,\"societyName\":\"HazielDev\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Romuald Lewandoski\\\",\\n    \\\"directionMail\\\": \\\"romuald.lewandoski@yandex.com\\\",\\n    \\\"directionPhone\\\": \\\"0699592756\\\",\\n    \\\"comptaName\\\": \\\"Toto test\\\",\\n    \\\"comptaMail\\\": \\\"toto@test.fr\\\",\\n    \\\"comptaPhone\\\": \\\"0600000001\\\",\\n    \\\"comName\\\": \\\"Test plop\\\",\\n    \\\"comMail\\\": \\\"plop@commercial.fr\\\",\\n    \\\"comPhone\\\": \\\"0327568945\\\"\\n}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1,\"version\":\"2020-06-26 01:26:32\"}', '{\"isSociety\":1,\"societyName\":\"HazielDev\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\\"directionName\\\":\\\"Romuald Lewandoski\\\",\\\"directionMail\\\":\\\"romuald.lewandoski@yandex.com\\\",\\\"directionPhone\\\":\\\"0699592756\\\",\\\"comptaName\\\":\\\"Toto test\\\",\\\"comptaMail\\\":\\\"toto@test.fr\\\",\\\"comptaPhone\\\":\\\"0600000001\\\",\\\"comName\\\":\\\"Test plop\\\",\\\"comMail\\\":\\\"plop@commercial.fr\\\",\\\"comPhone\\\":\\\"0327568945\\\"}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1}'),
(141, 'HazielKaos(UpdateThread)', '2020-06-26 01:28:29', 'SupplierModel', 'Edit', 1, '{\"isSociety\":1,\"societyName\":\"HazielDev\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Romuald Lewandoski\\\",\\n    \\\"directionMail\\\": \\\"romuald.lewandoski@yandex.com\\\",\\n    \\\"directionPhone\\\": \\\"0699592756\\\",\\n    \\\"comptaName\\\": \\\"Toto test\\\",\\n    \\\"comptaMail\\\": \\\"toto@test.fr\\\",\\n    \\\"comptaPhone\\\": \\\"0600000001\\\",\\n    \\\"comName\\\": \\\"Test plop\\\",\\n    \\\"comMail\\\": \\\"plop@commercial.fr\\\",\\n    \\\"comPhone\\\": \\\"0327568945\\\"\\n}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1,\"version\":\"2020-06-26 01:26:32\"}', '{\"isSociety\":1,\"societyName\":\"HazielDev2\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\\"directionName\\\":\\\"Romuald Lewandoski\\\",\\\"directionMail\\\":\\\"romuald.lewandoski@yandex.com\\\",\\\"directionPhone\\\":\\\"0699592756\\\",\\\"comptaName\\\":\\\"Toto test\\\",\\\"comptaMail\\\":\\\"toto@test.fr\\\",\\\"comptaPhone\\\":\\\"0600000001\\\",\\\"comName\\\":\\\"Test plop\\\",\\\"comMail\\\":\\\"plop@commercial.fr\\\",\\\"comPhone\\\":\\\"0327568945\\\"}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1}'),
(142, 'HazielKaos(UpdateThread)', '2020-06-26 01:28:48', 'SupplierModel', 'Edit', 1, '{\"isSociety\":1,\"societyName\":\"HazielDev2\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"Romuald Lewandoski\\\",\\n    \\\"directionMail\\\": \\\"romuald.lewandoski@yandex.com\\\",\\n    \\\"directionPhone\\\": \\\"0699592756\\\",\\n    \\\"comptaName\\\": \\\"Toto test\\\",\\n    \\\"comptaMail\\\": \\\"toto@test.fr\\\",\\n    \\\"comptaPhone\\\": \\\"0600000001\\\",\\n    \\\"comName\\\": \\\"Test plop\\\",\\n    \\\"comMail\\\": \\\"plop@commercial.fr\\\",\\n    \\\"comPhone\\\": \\\"0327568945\\\"\\n}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1,\"version\":\"2020-06-26 01:28:29\"}', '{\"isSociety\":1,\"societyName\":\"HazielDev\",\"gender\":\"Mr\",\"firstName\":\"Romuald\",\"lastName\":\"Lewandoski\",\"address\":\"Appt 29 Tour FOURIER Rue de FECAMP\",\"zipCode\":\"62300\",\"city\":\"LENS\",\"country\":\"France\",\"phone\":\"0689785468\",\"mobilePhone\":\"0699592756\",\"mail\":\"romuald.lewandoski@yandex.fr\",\"refCode\":\"RL01\",\"webSite\":\"https:\\/\\/moonly.fr\",\"paymentType\":\"1\",\"iban\":\"FRxx xxx xxx xxx xxx\",\"bic\":\"xxxxxxx\",\"tva\":\"01268744\",\"siret\":\"154596874894768489\",\"contact\":\"{\\\"directionName\\\":\\\"Romuald Lewandoski\\\",\\\"directionMail\\\":\\\"romuald.lewandoski@yandex.com\\\",\\\"directionPhone\\\":\\\"0699592756\\\",\\\"comptaName\\\":\\\"Toto test\\\",\\\"comptaMail\\\":\\\"toto@test.fr\\\",\\\"comptaPhone\\\":\\\"0600000001\\\",\\\"comName\\\":\\\"Test plop\\\",\\\"comMail\\\":\\\"plop@commercial.fr\\\",\\\"comPhone\\\":\\\"0327568945\\\"}\",\"notes\":\"Ceci est un test de fournisseur\",\"isActive\":1}'),
(143, 'HazielKaos (UpdateThread)', '2020-06-26 08:51:55', 'SupplierModel', 'Create', 39, '', '{\"isSociety\":0,\"societyName\":\"toto\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(144, 'HazielKaos (UpdateThread)', '2020-06-26 08:52:07', 'SupplierModel', 'Create', 40, '', '{\"isSociety\":0,\"societyName\":\"toto\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(145, 'HazielKaos (UpdateThread)', '2020-06-26 08:52:37', 'SupplierModel', 'Create', 41, '', '{\"isSociety\":0,\"societyName\":\"toto\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(146, 'admin(site)', '2020-06-26 08:53:26', 'SupplierModel', 'Delete', 41, '{\"idSupplier\":\"41\",\"isSociety\":\"0\",\"societyName\":\"toto\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-26 08:52:37\"}', NULL),
(147, 'admin(site)', '2020-06-26 08:53:31', 'SupplierModel', 'Delete', 40, '{\"idSupplier\":\"40\",\"isSociety\":\"0\",\"societyName\":\"toto\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-26 08:52:07\"}', NULL),
(148, 'admin(site)', '2020-06-26 08:53:35', 'SupplierModel', 'Delete', 39, '{\"idSupplier\":\"39\",\"isSociety\":\"0\",\"societyName\":\"toto\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-26 08:51:55\"}', NULL),
(149, 'HazielKaos (UpdateThread)', '2020-06-26 08:54:20', 'SupplierModel', 'Create', 42, '', '{\"isSociety\":0,\"societyName\":\"toto\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(150, 'HazielKaos (UpdateThread)', '2020-06-26 08:55:07', 'SupplierModel', 'Create', 43, '', '{\"isSociety\":0,\"societyName\":\"toto\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(151, 'HazielKaos (UpdateThread)', '2020-06-26 08:55:23', 'SupplierModel', 'Create', 44, '', '{\"isSociety\":0,\"societyName\":\"toto\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(152, 'admin(site)', '2020-06-26 08:55:53', 'SupplierModel', 'Delete', 43, '{\"idSupplier\":\"43\",\"isSociety\":\"0\",\"societyName\":\"toto\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-26 08:55:07\"}', NULL),
(153, 'admin(site)', '2020-06-26 08:55:57', 'SupplierModel', 'Delete', 44, '{\"idSupplier\":\"44\",\"isSociety\":\"0\",\"societyName\":\"toto\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-26 08:55:23\"}', NULL),
(154, 'HazielKaos (UpdateThread)', '2020-06-26 08:59:03', 'SupplierModel', 'Create', 45, '', '{\"isSociety\":0,\"societyName\":\"tutu\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(155, 'HazielKaos(UpdateThread)', '2020-06-26 08:59:36', 'SupplierModel', 'Delete', 45, '{\"idSupplier\":\"45\",\"isSociety\":\"0\",\"societyName\":\"tutu\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-26 08:59:03\"}', NULL),
(156, 'HazielKaos(UpdateThread)', '2020-06-26 08:59:51', 'SupplierModel', 'Delete', 42, '{\"idSupplier\":\"42\",\"isSociety\":\"0\",\"societyName\":\"toto\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":\"1\",\"version\":\"2020-06-26 08:54:20\"}', NULL),
(157, 'testUpdate', '2020-06-26 09:27:02', 'UserModel', 'ChangePass', 6, NULL, NULL),
(158, 'admin(site)', '2020-06-26 09:30:19', 'UserModel', 'Delete', 7, '{\"idShopLogin\":\"7\",\"usernameShopLogin\":\"axel\",\"passwordShopLogin\":\"$2b$10$Sum4pjJ1M3kOizu8aB\\/JjuAYla2x87bUGEhX588X7RWeOjfbYGqxi\",\"hasAdmin\":\"0\",\"hasCompta\":\"0\",\"hasProductManagement\":\"0\",\"hasSupplierManagement\":\"0\",\"hasStock\":\"1\",\"hasCaisse\":\"1\",\"isDefaultPass\":\"0\",\"version\":\"2020-06-10 10:41:21\"}', NULL),
(159, 'admin(site)', '2020-06-26 09:30:24', 'UserModel', 'ResetPass', 6, NULL, NULL),
(160, 'admin(site)', '2020-06-26 09:54:38', 'UserModel', 'ResetPass', 6, NULL, NULL),
(161, 'admin(site)', '2020-06-26 09:56:00', 'UserModel', 'ResetPass', 6, NULL, NULL),
(162, 'admin(site)', '2020-06-26 09:57:32', 'UserModel', 'ResetPass', 6, NULL, NULL),
(163, 'admin(site)', '2020-06-26 09:59:18', 'UserModel', 'ResetPass', 6, NULL, NULL),
(164, 'admin(site)', '2020-06-26 10:01:57', 'UserModel', 'ResetPass', 6, NULL, NULL),
(165, 'testUpdate', '2020-06-26 10:02:31', 'UserModel', 'ChangePass', 6, NULL, NULL),
(166, 'testUpdate', '2020-06-26 10:02:33', 'UserModel', 'ChangePass', 6, NULL, NULL),
(167, 'testUpdate', '2020-06-26 10:02:36', 'UserModel', 'ChangePass', 6, NULL, NULL),
(168, 'admin(site)', '2020-06-26 10:03:04', 'UserModel', 'ResetPass', 6, NULL, NULL),
(169, 'testUpdate', '2020-06-26 10:03:40', 'UserModel', 'ChangePass', 6, NULL, NULL),
(170, 'admin(site)', '2020-06-26 10:05:05', 'UserModel', 'ResetPass', 6, NULL, NULL),
(171, 'testUpdate', '2020-06-26 10:05:37', 'UserModel', 'ChangePass', 6, NULL, NULL),
(172, 'admin(site)', '2020-07-04 22:11:14', 'SupplierModel', 'Create', 46, '', '{\"isSociety\":0,\"societyName\":\"test5\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}');
INSERT INTO `wp__shop_log` (`idLog`, `userLog`, `dateLog`, `typeLog`, `actionLog`, `targetIdLog`, `beforeLog`, `afterLog`) VALUES
(173, 'HazielKaos (UpdateThread)', '2020-07-04 22:12:35', 'SupplierModel', 'Create', 47, '', '{\"isSociety\":0,\"societyName\":\"plop01\",\"gender\":\"ND\",\"firstName\":\"\",\"lastName\":\"\",\"address\":\"\",\"zipCode\":\"\",\"city\":\"\",\"country\":\"null\",\"phone\":\"\",\"mobilePhone\":\"\",\"mail\":\"\",\"refCode\":\"\",\"webSite\":\"\",\"paymentType\":\"0\",\"iban\":\"\",\"bic\":\"\",\"tva\":\"\",\"siret\":\"\",\"contact\":\"{\\n    \\\"directionName\\\": \\\"\\\",\\n    \\\"directionMail\\\": \\\"\\\",\\n    \\\"directionPhone\\\": \\\"\\\",\\n    \\\"comptaName\\\": \\\"\\\",\\n    \\\"comptaMail\\\": \\\"\\\",\\n    \\\"comptaPhone\\\": \\\"\\\",\\n    \\\"comName\\\": \\\"\\\",\\n    \\\"comMail\\\": \\\"\\\",\\n    \\\"comPhone\\\": \\\"\\\"\\n}\",\"notes\":\"\",\"isActive\":1}'),
(174, 'admin(site)', '2020-09-10 12:06:20', 'PermissionModel', 'Create', 7, '', '{\"namePermissionModel\":\"testController\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0}'),
(175, 'admin(site)', '2020-09-10 12:07:26', 'PermissionModel', 'Edit', 7, '{\"namePermissionModel\":\"testController\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0,\"version\":\"2020-09-10 12:06:20\"}', '{\"namePermissionModel\":\"testController2\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0}'),
(176, 'admin(site)', '2020-09-10 12:07:32', 'PermissionModel', 'Edit', 7, '{\"namePermissionModel\":\"testController2\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0,\"version\":\"2020-09-10 12:07:26\"}', '{\"namePermissionModel\":\"testController\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0}'),
(177, 'admin(site)', '2020-09-10 12:07:36', 'PermissionModel', 'Edit', 7, '{\"namePermissionModel\":\"testController\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0,\"version\":\"2020-09-10 12:07:32\"}', '{\"namePermissionModel\":\"testController\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":1}'),
(178, 'admin(site)', '2020-09-10 12:07:38', 'PermissionModel', 'Edit', 7, '{\"namePermissionModel\":\"testController\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":1,\"version\":\"2020-09-10 12:07:36\"}', '{\"namePermissionModel\":\"testController\",\"hasAdmin\":0,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0}'),
(179, 'admin(site)', '2020-09-10 12:10:26', 'PermissionModel', 'Delete', 7, '{\"idPermissionModel\":\"7\",\"namePermissionModel\":\"testController\",\"hasAdmin\":\"0\",\"hasCompta\":\"0\",\"hasProductManagement\":\"0\",\"hasSupplierManagement\":\"0\",\"hasStock\":\"0\",\"hasCaisse\":\"0\",\"version\":\"2020-09-10 12:07:39\"}', NULL),
(180, 'admin(site)', '2020-11-30 15:30:21', 'CatModel', 'Create', 1, '', '{\"nom\":\"testCat01\",\"position\":\"1\",\"parent\":null}'),
(181, 'admin(site)', '2020-11-30 15:34:20', 'CatModel', 'Create', 2, '', '{\"nom\":\"testSubCat01\",\"position\":\"1\",\"parent\":\"1\"}'),
(182, 'admin(site)', '2020-12-01 09:25:20', 'CatModel', 'Create', 3, '', '{\"nom\":\"testSubSub01\",\"position\":\"1\",\"parent\":\"2\"}'),
(183, 'admin(site)', '2020-12-01 09:25:54', 'CatModel', 'Create', 4, '', '{\"nom\":\"testCat02\",\"position\":\"2\",\"parent\":-1}'),
(184, 'admin(site)', '2020-12-01 09:47:52', 'CatModel', 'Create', 5, '', '{\"nom\":\"testSubSubSub01\",\"position\":\"1\",\"parent\":\"3\"}'),
(185, 'admin(site)', '2020-12-01 09:48:47', 'CatModel', 'Create', 6, '', '{\"nom\":\"testSubSub02\",\"position\":\"2\",\"parent\":\"2\"}'),
(186, 'admin(site)', '2020-12-02 14:49:05', 'CatModel', 'Create', 7, '', '{\"nom\":\"testCat03\",\"position\":\"3\",\"parent\":-1}'),
(187, 'admin(site)', '2020-12-02 14:50:07', 'CatModel', 'Create', 8, '', '{\"nom\":\"testCat04\",\"position\":\"4\",\"parent\":-1}'),
(190, 'admin(site)', '2020-12-02 15:04:18', 'CatModel', 'Edit', 1, '{\"nom\":\"testCat01\",\"position\":1,\"parent\":-1}', '{\"nom\":\"testCat01Edit\",\"position\":\"1\",\"parent\":-1}'),
(191, 'admin(site)', '2020-12-02 15:05:08', 'CatModel', 'Edit', 1, '{\"nom\":\"testCat01Edit\",\"position\":1,\"parent\":-1}', '{\"nom\":\"testCat01\",\"position\":\"1\",\"parent\":-1}'),
(192, 'admin(site)', '2020-12-02 15:05:21', 'CatModel', 'Edit', 2, '{\"nom\":\"testSubCat01\",\"position\":1,\"parent\":1}', '{\"nom\":\"testSubCat01\",\"position\":\"5\",\"parent\":-1}'),
(193, 'admin(site)', '2020-12-02 15:05:49', 'CatModel', 'Edit', 2, '{\"nom\":\"testSubCat01\",\"position\":5,\"parent\":-1}', '{\"nom\":\"testSubCat01\",\"position\":\"1\",\"parent\":\"1\"}'),
(194, 'admin(site)', '2020-12-02 15:18:04', 'CatModel', 'Delete', 8, '{\"id\":\"8\",\"nom\":\"testCat04\",\"position\":\"4\",\"parent\":\"-1\"}', NULL),
(196, 'admin(site)(RB)', '2020-12-02 15:20:01', 'CatModel', 'Create', 8, NULL, '{\"id\":\"8\",\"nom\":\"testCat04\",\"position\":\"4\",\"parent\":\"-1\"}'),
(197, 'admin(site)', '2020-12-02 15:22:42', 'CatModel', 'Create', 9, '', '{\"nom\":\"test\",\"position\":\"1\",\"parent\":\"8\"}'),
(198, 'admin(site)', '2020-12-02 15:22:52', 'CatModel', 'Delete', 9, '{\"id\":\"9\",\"nom\":\"test\",\"position\":\"1\",\"parent\":\"8\"}', NULL),
(199, 'admin(site)', '2020-12-02 15:22:55', 'CatModel', 'Delete', 8, '{\"id\":\"8\",\"nom\":\"testCat04\",\"position\":\"4\",\"parent\":\"-1\"}', NULL),
(200, 'admin(site)', '2020-12-02 16:43:16', 'BrandModel', 'Create', 1, '', '{\"nom\":\"Apple\",\"position\":1}'),
(201, 'admin(site)', '2020-12-02 16:43:26', 'BrandModel', 'Create', 2, '', '{\"nom\":\"Samsung\",\"position\":1}'),
(202, 'admin(site)', '2020-12-02 16:43:32', 'BrandModel', 'Create', 3, '', '{\"nom\":\"Xiaomi\",\"position\":1}'),
(203, 'admin(site)', '2020-12-02 16:53:02', 'BrandModel', 'Edit', 1, '{\"nom\":\"Apple\",\"position\":1}', '{\"nom\":\"Apple1\",\"position\":\"1\"}'),
(204, 'admin(site)', '2020-12-02 16:53:06', 'BrandModel', 'Edit', 1, '{\"nom\":\"Apple1\",\"position\":1}', '{\"nom\":\"Apple\",\"position\":\"1\"}'),
(205, 'admin(site)', '2020-12-02 16:57:27', 'BrandModel', 'Create', 4, '', '{\"nom\":\"Wiko\",\"position\":1}'),
(206, 'admin(site)', '2020-12-02 16:57:50', 'BrandModel', 'Edit', 2, '{\"nom\":\"Samsung\",\"position\":1}', '{\"nom\":\"Samsung\",\"position\":\"2\"}'),
(207, 'admin(site)', '2020-12-02 16:57:54', 'BrandModel', 'Edit', 3, '{\"nom\":\"Xiaomi\",\"position\":1}', '{\"nom\":\"Xiaomi\",\"position\":\"3\"}'),
(208, 'admin(site)', '2020-12-02 16:57:57', 'BrandModel', 'Edit', 4, '{\"nom\":\"Wiko\",\"position\":1}', '{\"nom\":\"Wiko\",\"position\":\"4\"}'),
(209, 'admin(site)', '2020-12-02 16:58:05', 'BrandModel', 'Create', 5, '', '{\"nom\":\"Huawei\",\"position\":\"5\"}'),
(210, 'admin(site)', '2020-12-02 16:58:09', 'BrandModel', 'Delete', 5, '{\"id\":\"5\",\"nom\":\"Huawei\",\"position\":\"5\"}', NULL),
(211, 'admin(site)(RB)', '2020-12-02 16:58:31', 'BrandModel', 'Create', 5, NULL, '{\"id\":\"5\",\"nom\":\"Huawei\",\"position\":\"5\"}'),
(212, 'admin(site)', '2020-12-03 22:15:01', 'PermissionModel', 'Edit', 2, '{\"namePermissionModel\":\"test\",\"hasAdmin\":0,\"hasCompta\":1,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":1,\"version\":\"2020-06-10 10:41:21\"}', '{\"namePermissionModel\":\"test\",\"hasAdmin\":1,\"hasCompta\":1,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":1}'),
(213, 'admin(site)', '2020-12-03 22:15:06', 'PermissionModel', 'Edit', 2, '{\"namePermissionModel\":\"test\",\"hasAdmin\":1,\"hasCompta\":1,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":1,\"version\":\"2020-12-03 22:15:01\"}', '{\"namePermissionModel\":\"test\",\"hasAdmin\":0,\"hasCompta\":1,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":1}'),
(214, 'admin(site)', '2020-12-06 10:54:02', 'BrandModel', 'Create', 6, '', '{\"nom\":\"test\",\"position\":\"6\"}'),
(215, 'admin(site)', '2020-12-06 10:57:01', 'PermissionModel', 'Edit', 2, '{\"namePermissionModel\":\"test\",\"hasAdmin\":0,\"hasCompta\":1,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":1,\"version\":\"2020-12-03 22:15:06\"}', '{\"namePermissionModel\":\"test\",\"hasAdmin\":1,\"hasCompta\":1,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":1}'),
(216, 'admin(site)', '2020-12-06 10:57:10', 'UserModel', 'Edit', 6, '{\"usernameShopLogin\":\"testUpdate\",\"passwordShopLogin\":\"$2b$10$Xy3cU\\/9LpI7kLxzKPUi3g.QUqYxJxN9hy9x9fZVt9wBQOzUcPjkxS\",\"hasAdmin\":1,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0,\"isDefaultPass\":0,\"version\":\"2020-06-26 10:05:37\"}', '{\"usernameShopLogin\":\"testUpdate\",\"passwordShopLogin\":\"$2b$10$Xy3cU\\/9LpI7kLxzKPUi3g.QUqYxJxN9hy9x9fZVt9wBQOzUcPjkxS\",\"hasAdmin\":1,\"hasCompta\":0,\"hasProductManagement\":0,\"hasSupplierManagement\":0,\"hasStock\":0,\"hasCaisse\":0,\"isDefaultPass\":0}'),
(217, 'admin(site)', '2020-12-06 10:57:17', 'UserModel', 'ResetPass', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `wp__shop_migration`
--

CREATE TABLE `wp__shop_migration` (
  `id` int(11) NOT NULL,
  `version` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `wp__shop_migration`
--

INSERT INTO `wp__shop_migration` (`id`, `version`) VALUES
(139, 1),
(144, 2),
(145, 3),
(146, 4),
(147, 5),
(148, 6),
(156, 7);

-- --------------------------------------------------------

--
-- Structure de la table `wp__shop_permissionmodel`
--

CREATE TABLE `wp__shop_permissionmodel` (
  `idPermissionModel` int(11) NOT NULL,
  `namePermissionModel` varchar(255) NOT NULL,
  `hasAdmin` tinyint(1) DEFAULT NULL,
  `hasCompta` tinyint(1) DEFAULT NULL,
  `hasProductManagement` tinyint(1) DEFAULT NULL,
  `hasSupplierManagement` tinyint(1) DEFAULT NULL,
  `hasStock` tinyint(1) DEFAULT NULL,
  `hasCaisse` tinyint(1) DEFAULT NULL,
  `version` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `wp__shop_permissionmodel`
--

INSERT INTO `wp__shop_permissionmodel` (`idPermissionModel`, `namePermissionModel`, `hasAdmin`, `hasCompta`, `hasProductManagement`, `hasSupplierManagement`, `hasStock`, `hasCaisse`, `version`) VALUES
(2, 'test', 1, 1, 0, 0, 0, 1, '2020-12-06 09:57:01'),
(3, 'test23', 0, 0, 0, 0, 0, 1, '2020-06-18 14:15:10'),
(6, 'Caissier', 0, 0, 0, 0, 1, 1, '2020-06-10 08:41:21');

-- --------------------------------------------------------

--
-- Structure de la table `wp__shop_shop`
--

CREATE TABLE `wp__shop_shop` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `isSending` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `wp__shop_shoplogin`
--

CREATE TABLE `wp__shop_shoplogin` (
  `idShopLogin` int(11) NOT NULL,
  `usernameShopLogin` varchar(255) NOT NULL,
  `passwordShopLogin` text NOT NULL,
  `hasAdmin` tinyint(1) DEFAULT NULL,
  `hasCompta` tinyint(1) DEFAULT NULL,
  `hasProductManagement` tinyint(1) DEFAULT NULL,
  `hasSupplierManagement` tinyint(1) DEFAULT NULL,
  `hasStock` tinyint(1) DEFAULT NULL,
  `hasCaisse` tinyint(1) DEFAULT NULL,
  `isDefaultPass` tinyint(1) DEFAULT NULL,
  `version` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `wp__shop_shoplogin`
--

INSERT INTO `wp__shop_shoplogin` (`idShopLogin`, `usernameShopLogin`, `passwordShopLogin`, `hasAdmin`, `hasCompta`, `hasProductManagement`, `hasSupplierManagement`, `hasStock`, `hasCaisse`, `isDefaultPass`, `version`) VALUES
(1, 'test', '$2b$10$sBJkzxSDM8z8jnD.FWkgX.lU6aBhJpPCmMzYNmzsu3OdaL3/MIzSq', 0, 1, 0, 0, 1, 1, 0, '2020-06-10 08:41:21'),
(2, 'HazielKaos', '$2y$10$VmNkeugnyMLDeRVk2u1D6OfMSwoeJyrdpNVAtlo4N0uijjUt9.gp.', 1, 1, 1, 1, 1, 1, 0, '2020-06-10 08:41:21'),
(5, 'toto', '$2b$10$o9IVp2rri5fKSJCYbHWfN.Ao23jSis3.rgD02hav7z2mOJ5adDWeG', 1, 0, 0, 0, 0, 1, 0, '2020-06-10 08:41:21'),
(6, 'testUpdate', 'a6FkQ5yZ', 1, 0, 0, 0, 0, 0, 1, '2020-12-06 09:57:17');

-- --------------------------------------------------------

--
-- Structure de la table `wp__shop_shoploginlog`
--

CREATE TABLE `wp__shop_shoploginlog` (
  `idShopLoginLog` int(11) NOT NULL,
  `idShopLogin` int(11) NOT NULL,
  `dateShopLoginLog` varchar(255) DEFAULT NULL,
  `statusShopLoginLog` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `wp__shop_supplier`
--

CREATE TABLE `wp__shop_supplier` (
  `idSupplier` int(11) NOT NULL,
  `isSociety` tinyint(1) DEFAULT NULL,
  `societyName` varchar(255) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zipCode` varchar(50) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(140) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mobilePhone` varchar(100) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `refCode` varchar(100) DEFAULT NULL,
  `webSite` varchar(255) DEFAULT NULL,
  `paymentType` int(11) DEFAULT NULL,
  `iban` varchar(255) DEFAULT NULL,
  `bic` varchar(255) DEFAULT NULL,
  `tva` varchar(255) DEFAULT NULL,
  `siret` varchar(255) DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `version` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `wp__shop_supplier`
--

INSERT INTO `wp__shop_supplier` (`idSupplier`, `isSociety`, `societyName`, `gender`, `firstName`, `lastName`, `address`, `zipCode`, `city`, `country`, `phone`, `mobilePhone`, `mail`, `refCode`, `webSite`, `paymentType`, `iban`, `bic`, `tva`, `siret`, `contact`, `notes`, `isActive`, `version`) VALUES
(1, 1, 'HazielDev', 'Mr', 'Romuald', 'Lewandoski', 'Appt 29 Tour FOURIER Rue de FECAMP', '62300', 'LENS', 'France', '0689785468', '0699592756', 'romuald.lewandoski@yandex.fr', 'RL01', 'https://moonly.fr', 1, 'FRxx xxx xxx xxx xxx', 'xxxxxxx', '01268744', '154596874894768489', '{\"directionName\":\"Romuald Lewandoski\",\"directionMail\":\"romuald.lewandoski@yandex.com\",\"directionPhone\":\"0699592756\",\"comptaName\":\"Toto test\",\"comptaMail\":\"toto@test.fr\",\"comptaPhone\":\"0600000001\",\"comName\":\"Test plop\",\"comMail\":\"plop@commercial.fr\",\"comPhone\":\"0327568945\"}', 'Ceci est un test de fournisseur', 1, '2020-06-25 23:28:49'),
(3, 1, 'SARL Desruisseaux', 'Mr', 'Soren ', 'Desruisseaux', '26, rue des Soeurs', '93120 ', 'LA COURNEUVE', 'France', '0108677214', '', 'sorendesruisseaux@jourrapide.com', '535', 'https://picburner.fr', 1, 'FR9210096000402983354915F17', '', '17447785', '6017426518', '{\"directionName\":\"Jean Saisrien\",\"directionMail\":\"\",\"directionPhone\":\"\",\"comptaName\":\"James Lefrique\",\"comptaMail\":\"\",\"comptaPhone\":\"\",\"comName\":\"\",\"comMail\":\"\",\"comPhone\":\"\"}', '', 0, '2020-06-10 08:41:21'),
(4, 1, 'Test', 'ND', 'Romuald', 'Lewandoski', '', '', '', 'Afghanistan', '', '', '', '', '', 0, '', '', '', '', '{\"directionName\":\"Romuald Lewandoski\",\"directionMail\":\"romuald.lewandoski@yandex.com\",\"directionPhone\":\"0699592756\",\"comptaName\":\"\",\"comptaMail\":\"\",\"comptaPhone\":\"\",\"comName\":\"\",\"comMail\":\"\",\"comPhone\":\"\"}', '', 1, '2020-06-10 08:41:21'),
(5, 1, 'test2', 'ND', 'Romuald', 'Lewandoski', '', '', '', 'Afghanistan', '', '', '', '', '', 0, '', '', '', '', '{\"directionName\":\"toto test\",\"directionMail\":\"plop@lol.fr\",\"directionPhone\":\"0699592756\",\"comptaName\":\"\",\"comptaMail\":\"\",\"comptaPhone\":\"\",\"comName\":\"\",\"comMail\":\"\",\"comPhone\":\"\"}', '', 1, '2020-06-10 08:41:21'),
(6, 1, 'test3', 'ND', 'Romuald', 'Lewandoski', '', '', '', 'Afghanistan', '', '', '', '', '', 0, '', '', '', '', '{\"directionName\":\"\",\"directionMail\":\"\",\"directionPhone\":\"\",\"comptaName\":\"\",\"comptaMail\":\"\",\"comptaPhone\":\"\",\"comName\":\"\",\"comMail\":\"\",\"comPhone\":\"\"}', '', 1, '2020-06-10 08:41:21'),
(38, 1, 'test4', 'ND', '', '', '', '', '', 'null', '', '', '', '', '', 0, '', '', '', '', '{\n    \"directionName\": \"\",\n    \"directionMail\": \"\",\n    \"directionPhone\": \"\",\n    \"comptaName\": \"\",\n    \"comptaMail\": \"\",\n    \"comptaPhone\": \"\",\n    \"comName\": \"\",\n    \"comMail\": \"\",\n    \"comPhone\": \"\"\n}', '', 1, '2020-06-24 11:44:26'),
(46, 0, 'test5', 'ND', '', '', '', '', '', 'null', '', '', '', '', '', 0, '', '', '', '', '{\n    \"directionName\": \"\",\n    \"directionMail\": \"\",\n    \"directionPhone\": \"\",\n    \"comptaName\": \"\",\n    \"comptaMail\": \"\",\n    \"comptaPhone\": \"\",\n    \"comName\": \"\",\n    \"comMail\": \"\",\n    \"comPhone\": \"\"\n}', '', 1, '2020-07-04 20:11:14'),
(47, 0, 'plop01', 'ND', '', '', '', '', '', 'null', '', '', '', '', '', 0, '', '', '', '', '{\n    \"directionName\": \"\",\n    \"directionMail\": \"\",\n    \"directionPhone\": \"\",\n    \"comptaName\": \"\",\n    \"comptaMail\": \"\",\n    \"comptaPhone\": \"\",\n    \"comName\": \"\",\n    \"comMail\": \"\",\n    \"comPhone\": \"\"\n}', '', 1, '2020-07-04 20:12:35');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp_actionscheduler_actions`
--
ALTER TABLE `wp_actionscheduler_actions`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `hook` (`hook`),
  ADD KEY `status` (`status`),
  ADD KEY `scheduled_date_gmt` (`scheduled_date_gmt`),
  ADD KEY `args` (`args`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `last_attempt_gmt` (`last_attempt_gmt`),
  ADD KEY `claim_id` (`claim_id`);

--
-- Index pour la table `wp_actionscheduler_claims`
--
ALTER TABLE `wp_actionscheduler_claims`
  ADD PRIMARY KEY (`claim_id`),
  ADD KEY `date_created_gmt` (`date_created_gmt`);

--
-- Index pour la table `wp_actionscheduler_groups`
--
ALTER TABLE `wp_actionscheduler_groups`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `slug` (`slug`(191));

--
-- Index pour la table `wp_actionscheduler_logs`
--
ALTER TABLE `wp_actionscheduler_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `action_id` (`action_id`),
  ADD KEY `log_date_gmt` (`log_date_gmt`);

--
-- Index pour la table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10)),
  ADD KEY `woo_idx_comment_type` (`comment_type`);

--
-- Index pour la table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Index pour la table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Index pour la table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Index pour la table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Index pour la table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Index pour la table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Index pour la table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- Index pour la table `wp_wc_admin_notes`
--
ALTER TABLE `wp_wc_admin_notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Index pour la table `wp_wc_admin_note_actions`
--
ALTER TABLE `wp_wc_admin_note_actions`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `note_id` (`note_id`);

--
-- Index pour la table `wp_wc_category_lookup`
--
ALTER TABLE `wp_wc_category_lookup`
  ADD PRIMARY KEY (`category_tree_id`,`category_id`);

--
-- Index pour la table `wp_wc_customer_lookup`
--
ALTER TABLE `wp_wc_customer_lookup`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `email` (`email`);

--
-- Index pour la table `wp_wc_download_log`
--
ALTER TABLE `wp_wc_download_log`
  ADD PRIMARY KEY (`download_log_id`),
  ADD KEY `permission_id` (`permission_id`),
  ADD KEY `timestamp` (`timestamp`);

--
-- Index pour la table `wp_wc_order_coupon_lookup`
--
ALTER TABLE `wp_wc_order_coupon_lookup`
  ADD PRIMARY KEY (`order_id`,`coupon_id`),
  ADD KEY `coupon_id` (`coupon_id`),
  ADD KEY `date_created` (`date_created`);

--
-- Index pour la table `wp_wc_order_product_lookup`
--
ALTER TABLE `wp_wc_order_product_lookup`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `date_created` (`date_created`);

--
-- Index pour la table `wp_wc_order_stats`
--
ALTER TABLE `wp_wc_order_stats`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `date_created` (`date_created`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `status` (`status`(191));

--
-- Index pour la table `wp_wc_order_tax_lookup`
--
ALTER TABLE `wp_wc_order_tax_lookup`
  ADD PRIMARY KEY (`order_id`,`tax_rate_id`),
  ADD KEY `tax_rate_id` (`tax_rate_id`),
  ADD KEY `date_created` (`date_created`);

--
-- Index pour la table `wp_wc_product_meta_lookup`
--
ALTER TABLE `wp_wc_product_meta_lookup`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `virtual` (`virtual`),
  ADD KEY `downloadable` (`downloadable`),
  ADD KEY `stock_status` (`stock_status`),
  ADD KEY `stock_quantity` (`stock_quantity`),
  ADD KEY `onsale` (`onsale`),
  ADD KEY `min_max_price` (`min_price`,`max_price`);

--
-- Index pour la table `wp_wc_reserved_stock`
--
ALTER TABLE `wp_wc_reserved_stock`
  ADD PRIMARY KEY (`order_id`,`product_id`);

--
-- Index pour la table `wp_wc_tax_rate_classes`
--
ALTER TABLE `wp_wc_tax_rate_classes`
  ADD PRIMARY KEY (`tax_rate_class_id`),
  ADD UNIQUE KEY `slug` (`slug`(191));

--
-- Index pour la table `wp_wc_webhooks`
--
ALTER TABLE `wp_wc_webhooks`
  ADD PRIMARY KEY (`webhook_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `wp_woocommerce_api_keys`
--
ALTER TABLE `wp_woocommerce_api_keys`
  ADD PRIMARY KEY (`key_id`),
  ADD KEY `consumer_key` (`consumer_key`),
  ADD KEY `consumer_secret` (`consumer_secret`);

--
-- Index pour la table `wp_woocommerce_attribute_taxonomies`
--
ALTER TABLE `wp_woocommerce_attribute_taxonomies`
  ADD PRIMARY KEY (`attribute_id`),
  ADD KEY `attribute_name` (`attribute_name`(20));

--
-- Index pour la table `wp_woocommerce_downloadable_product_permissions`
--
ALTER TABLE `wp_woocommerce_downloadable_product_permissions`
  ADD PRIMARY KEY (`permission_id`),
  ADD KEY `download_order_key_product` (`product_id`,`order_id`,`order_key`(16),`download_id`),
  ADD KEY `download_order_product` (`download_id`,`order_id`,`product_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `user_order_remaining_expires` (`user_id`,`order_id`,`downloads_remaining`,`access_expires`);

--
-- Index pour la table `wp_woocommerce_log`
--
ALTER TABLE `wp_woocommerce_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `level` (`level`);

--
-- Index pour la table `wp_woocommerce_order_itemmeta`
--
ALTER TABLE `wp_woocommerce_order_itemmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `order_item_id` (`order_item_id`),
  ADD KEY `meta_key` (`meta_key`(32));

--
-- Index pour la table `wp_woocommerce_order_items`
--
ALTER TABLE `wp_woocommerce_order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Index pour la table `wp_woocommerce_payment_tokenmeta`
--
ALTER TABLE `wp_woocommerce_payment_tokenmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `payment_token_id` (`payment_token_id`),
  ADD KEY `meta_key` (`meta_key`(32));

--
-- Index pour la table `wp_woocommerce_payment_tokens`
--
ALTER TABLE `wp_woocommerce_payment_tokens`
  ADD PRIMARY KEY (`token_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `wp_woocommerce_sessions`
--
ALTER TABLE `wp_woocommerce_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD UNIQUE KEY `session_key` (`session_key`);

--
-- Index pour la table `wp_woocommerce_shipping_zones`
--
ALTER TABLE `wp_woocommerce_shipping_zones`
  ADD PRIMARY KEY (`zone_id`);

--
-- Index pour la table `wp_woocommerce_shipping_zone_locations`
--
ALTER TABLE `wp_woocommerce_shipping_zone_locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `location_type_code` (`location_type`(10),`location_code`(20));

--
-- Index pour la table `wp_woocommerce_shipping_zone_methods`
--
ALTER TABLE `wp_woocommerce_shipping_zone_methods`
  ADD PRIMARY KEY (`instance_id`);

--
-- Index pour la table `wp_woocommerce_tax_rates`
--
ALTER TABLE `wp_woocommerce_tax_rates`
  ADD PRIMARY KEY (`tax_rate_id`),
  ADD KEY `tax_rate_country` (`tax_rate_country`),
  ADD KEY `tax_rate_state` (`tax_rate_state`(2)),
  ADD KEY `tax_rate_class` (`tax_rate_class`(10)),
  ADD KEY `tax_rate_priority` (`tax_rate_priority`);

--
-- Index pour la table `wp_woocommerce_tax_rate_locations`
--
ALTER TABLE `wp_woocommerce_tax_rate_locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `tax_rate_id` (`tax_rate_id`),
  ADD KEY `location_type_code` (`location_type`(10),`location_code`(20));

--
-- Index pour la table `wp__shop_apicredentials`
--
ALTER TABLE `wp__shop_apicredentials`
  ADD PRIMARY KEY (`idApiCredentials`);

--
-- Index pour la table `wp__shop_brand`
--
ALTER TABLE `wp__shop_brand`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp__shop_categorie`
--
ALTER TABLE `wp__shop_categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp__shop_config`
--
ALTER TABLE `wp__shop_config`
  ADD PRIMARY KEY (`idConfig`);

--
-- Index pour la table `wp__shop_delete`
--
ALTER TABLE `wp__shop_delete`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp__shop_log`
--
ALTER TABLE `wp__shop_log`
  ADD PRIMARY KEY (`idLog`);

--
-- Index pour la table `wp__shop_migration`
--
ALTER TABLE `wp__shop_migration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp__shop_permissionmodel`
--
ALTER TABLE `wp__shop_permissionmodel`
  ADD PRIMARY KEY (`idPermissionModel`);

--
-- Index pour la table `wp__shop_shop`
--
ALTER TABLE `wp__shop_shop`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp__shop_shoplogin`
--
ALTER TABLE `wp__shop_shoplogin`
  ADD PRIMARY KEY (`idShopLogin`);

--
-- Index pour la table `wp__shop_shoploginlog`
--
ALTER TABLE `wp__shop_shoploginlog`
  ADD PRIMARY KEY (`idShopLoginLog`);

--
-- Index pour la table `wp__shop_supplier`
--
ALTER TABLE `wp__shop_supplier`
  ADD PRIMARY KEY (`idSupplier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `boutique`
--
ALTER TABLE `boutique`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_actionscheduler_actions`
--
ALTER TABLE `wp_actionscheduler_actions`
  MODIFY `action_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `wp_actionscheduler_claims`
--
ALTER TABLE `wp_actionscheduler_claims`
  MODIFY `claim_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19418;

--
-- AUTO_INCREMENT pour la table `wp_actionscheduler_groups`
--
ALTER TABLE `wp_actionscheduler_groups`
  MODIFY `group_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `wp_actionscheduler_logs`
--
ALTER TABLE `wp_actionscheduler_logs`
  MODIFY `log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT pour la table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15222;

--
-- AUTO_INCREMENT pour la table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `wp_wc_admin_notes`
--
ALTER TABLE `wp_wc_admin_notes`
  MODIFY `note_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `wp_wc_admin_note_actions`
--
ALTER TABLE `wp_wc_admin_note_actions`
  MODIFY `action_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;

--
-- AUTO_INCREMENT pour la table `wp_wc_customer_lookup`
--
ALTER TABLE `wp_wc_customer_lookup`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_wc_download_log`
--
ALTER TABLE `wp_wc_download_log`
  MODIFY `download_log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_wc_tax_rate_classes`
--
ALTER TABLE `wp_wc_tax_rate_classes`
  MODIFY `tax_rate_class_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `wp_wc_webhooks`
--
ALTER TABLE `wp_wc_webhooks`
  MODIFY `webhook_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_api_keys`
--
ALTER TABLE `wp_woocommerce_api_keys`
  MODIFY `key_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_attribute_taxonomies`
--
ALTER TABLE `wp_woocommerce_attribute_taxonomies`
  MODIFY `attribute_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_downloadable_product_permissions`
--
ALTER TABLE `wp_woocommerce_downloadable_product_permissions`
  MODIFY `permission_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_log`
--
ALTER TABLE `wp_woocommerce_log`
  MODIFY `log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_order_itemmeta`
--
ALTER TABLE `wp_woocommerce_order_itemmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_order_items`
--
ALTER TABLE `wp_woocommerce_order_items`
  MODIFY `order_item_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_payment_tokenmeta`
--
ALTER TABLE `wp_woocommerce_payment_tokenmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_payment_tokens`
--
ALTER TABLE `wp_woocommerce_payment_tokens`
  MODIFY `token_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_sessions`
--
ALTER TABLE `wp_woocommerce_sessions`
  MODIFY `session_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_shipping_zones`
--
ALTER TABLE `wp_woocommerce_shipping_zones`
  MODIFY `zone_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_shipping_zone_locations`
--
ALTER TABLE `wp_woocommerce_shipping_zone_locations`
  MODIFY `location_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_shipping_zone_methods`
--
ALTER TABLE `wp_woocommerce_shipping_zone_methods`
  MODIFY `instance_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_tax_rates`
--
ALTER TABLE `wp_woocommerce_tax_rates`
  MODIFY `tax_rate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_woocommerce_tax_rate_locations`
--
ALTER TABLE `wp_woocommerce_tax_rate_locations`
  MODIFY `location_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp__shop_apicredentials`
--
ALTER TABLE `wp__shop_apicredentials`
  MODIFY `idApiCredentials` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `wp__shop_brand`
--
ALTER TABLE `wp__shop_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `wp__shop_categorie`
--
ALTER TABLE `wp__shop_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `wp__shop_config`
--
ALTER TABLE `wp__shop_config`
  MODIFY `idConfig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `wp__shop_delete`
--
ALTER TABLE `wp__shop_delete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `wp__shop_log`
--
ALTER TABLE `wp__shop_log`
  MODIFY `idLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT pour la table `wp__shop_migration`
--
ALTER TABLE `wp__shop_migration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT pour la table `wp__shop_permissionmodel`
--
ALTER TABLE `wp__shop_permissionmodel`
  MODIFY `idPermissionModel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `wp__shop_shop`
--
ALTER TABLE `wp__shop_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp__shop_shoplogin`
--
ALTER TABLE `wp__shop_shoplogin`
  MODIFY `idShopLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `wp__shop_shoploginlog`
--
ALTER TABLE `wp__shop_shoploginlog`
  MODIFY `idShopLoginLog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp__shop_supplier`
--
ALTER TABLE `wp__shop_supplier`
  MODIFY `idSupplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `wp_wc_download_log`
--
ALTER TABLE `wp_wc_download_log`
  ADD CONSTRAINT `fk_wp_wc_download_log_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `wp_woocommerce_downloadable_product_permissions` (`permission_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
