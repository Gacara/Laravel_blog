-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 24 nov. 2018 à 13:11
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `content` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `content`, `author`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'Lorem Ipsum je trouve !', 1, 1, '2018-11-18 10:18:25', NULL),
(3, 1, 'Salut les gars', 3, 1, '2018-11-18 10:18:25', NULL),
(4, 2, 'Salut les gars', 2, 1, '2018-11-18 10:18:25', NULL),
(5, 4, 'Bonjour tout le monde', 2, 1, '2018-11-18 10:18:25', NULL),
(6, 5, 'Hello les gens.', 2, 1, '2018-11-18 10:18:25', NULL),
(7, 2, 'Hello les gens.', 3, 1, '2018-11-18 10:18:25', NULL),
(8, 3, 'Hello les gens.', 3, 1, '2018-11-18 10:18:25', NULL),
(9, 3, 'Pas terrible comme article, sinon le blog est sympa :)', 3, 1, '2018-11-18 10:18:25', NULL),
(10, 5, 'Pas terrible comme article, sinon le blog est sympa :)', 4, 1, '2018-11-18 10:18:25', NULL),
(11, 1, 'Je peux poster un com !', 2, 1, '2018-11-18 10:18:25', NULL),
(16, 1, 'Moi aussi !', 1, 1, '2018-11-24 10:43:05', '2018-11-24 10:43:05'),
(14, 2, 'Yo !', 1, 1, '2018-11-24 09:46:31', '2018-11-24 09:46:31'),
(15, 25, 'aze', 1, 1, '2018-11-24 09:47:13', '2018-11-24 09:47:13'),
(17, 3, 'Merci quand même @Terter !', 1, 1, '2018-11-24 10:43:59', '2018-11-24 10:43:59'),
(27, 29, 'null', 1, 1, '2018-11-24 10:55:36', '2018-11-24 10:55:36'),
(46, 21, 'Merci testitest !', 8, 1, '2018-11-24 11:53:08', '2018-11-24 11:53:08');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_12_115121_create_comments_table', 1),
(4, '2018_11_14_072356_create_posts_table', 1),
(5, '2018_11_14_072433_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL DEFAULT '1',
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '4',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `image`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test 1', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean maximus gravida vehicula. Morbi vel justo nibh. Proin feugiat, est at varius lobortis, justo mauris aliquam sem, sit amet euismod tortor ligula ac diam. Maecenas tristique libero sagittis, venenatis velit nec, porttitor erat. Nunc consectetur tortor egestas massa elementum gravida.', 2, NULL, '2018-11-19 06:53:05'),
(3, 1, 'Test 2', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean maximus gravida vehicula. Morbi vel justo nibh. Proin feugiat, est at varius lobortis, justo mauris aliquam sem, sit amet euismod tortor ligula ac diam. Maecenas tristique libero sagittis, venenatis velit nec, porttitor erat. Nunc consectetur tortor egestas massa elementum gravida.\r\nazeaze', 1, '2018-11-17 10:14:15', '2018-11-24 11:40:48'),
(21, 1, 'test 11', NULL, '  @foreach($users as $u)\r\n                @if ($u->id == $post->user_id)\r\n                    <div>Par {{ $u->name }}</div>\r\n\r\n                @endif\r\n            @endforeach', 6, '2018-11-24 02:03:19', '2018-11-24 02:03:19');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Romain', 'rom.goulet@gmail.com', NULL, '$2y$10$bu4/yMl1a4EhLjxVlPMrv.doOt1FAXJuEBz/FifjdDPffo0omlrU6', 'CTJu3ZN0NXJ5ubmpdJZtvQFPXOnEcLmvEDkh50WtQVaeBUuANBQ2xr9uXxOw', '2018-11-17 10:13:49', '2018-11-17 10:13:49'),
(2, 'Rom2', 'rom2@gmail.com', NULL, '$2y$10$bu4/yMl1a4EhLjxVlPMrv.doOt1FAXJuEBz/FifjdDPffo0omlrU6', NULL, '2018-11-17 10:13:49', '2018-11-17 10:13:49'),
(3, 'Terter', 'terter@gmail.com', NULL, '$2y$10$bu4/yMl1a4EhLjxVlPMrv.doOt1FAXJuEBz/FifjdDPffo0omlrU6', NULL, '2018-11-17 10:13:49', '2018-11-17 10:13:49'),
(4, 'Default', 'default@default.com', NULL, '$2y$10$bu4/yMl1a4EhLjxVlPMrv.doOt1FAXJuEBz/FifjdDPffo0omlrU6', NULL, '2018-11-17 10:13:49', '2018-11-17 10:13:49'),
(5, 'Rominou', 'alibaba@ali.com', NULL, '$2y$10$dkY7YcQeY.twTNarfvPEo.ucwSpVMwxtN689xXEHSgZWct/Fj0pfO', NULL, '2018-11-24 01:20:35', '2018-11-24 01:20:35'),
(6, 'Testitest', 'test@test.com', NULL, '$2y$10$Z8KxNx8gTuZ3VlCn0iAiYOVweXauLCzsyHRoHecUs4L0nDUdJNDRa', NULL, '2018-11-24 02:01:32', '2018-11-24 02:01:32'),
(7, 'Test', 'testo@test.com', NULL, '$2y$10$3uv79XY6XhNPAW4Rjn6YYevRtaKXvD.JohzrKdlynYKq2xPeJznBW', 'FofIyrCW0XBDKRoxekFg0cb7aJy6i3836Jl7dAx9AcRoN3hZh4fFo4K4VqDV', '2018-11-24 11:47:35', '2018-11-24 11:47:35'),
(8, 'azerty', 'aze@aze.com', NULL, '$2y$10$UkKKpC5G7x3mNdpwvHAO..2cJgT6gy.KMNb2O4KTYT8YdHe.unFf6', 'SmYYZn702aFk7bjU2QGe8rcwoAAPETjABFHjiDdHergZlKdkO3QWbSYDq9R8', '2018-11-24 11:51:42', '2018-11-24 11:51:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
