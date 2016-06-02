-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2016 г., 11:43
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `strprinter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catridges`
--

CREATE TABLE IF NOT EXISTS `catridges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `current_id` int(11) NOT NULL,
  `manifacture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `master` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `auxiliary` text COLLATE utf8_unicode_ci,
  `notice` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `catridges_current_id_unique` (`current_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

--
-- Дамп данных таблицы `catridges`
--

INSERT INTO `catridges` (`id`, `current_id`, `manifacture`, `model`, `type`, `location`, `master`, `auxiliary`, `notice`, `created_at`, `updated_at`) VALUES
(1, 2041050, 'HP', 'CE505XC', 'I', 'Списан', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(2, 2041021, 'HP', 'CE505XC', 'I', 'Склад', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(3, 2041031, 'HP', 'CE505XC', 'I', 'Склад', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(4, 2041019, 'HP', 'Q6511A', 'A', 'Склад', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(5, 2041046, 'Canon', '103/303/703', 'B', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(6, 2041062, 'HP', 'Q2612A', 'B', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(7, 2041055, 'HP', 'CB435A', 'C', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(8, 2041030, 'Other', '01805-322462', 'A', 'Склад', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(9, 2041041, 'Canon', 'FX10', 'D', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(10, 2041056, 'Canon', 'FX10', 'D', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(11, 2041034, 'Canon', 'FX10', 'D', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(12, 2041048, 'Canon', 'CE285A', 'G', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(13, 2041010, 'Canon', 'CE285A', 'G', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(14, 2041011, 'Canon', 'CE285A', 'G', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(15, 2041043, 'HP', '36A', 'E', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(16, 2041069, 'Other', 'PL-CB435/436A/712/713', 'E', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(17, 2041061, 'HP', 'Q2612A', 'B', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(18, 2041027, 'Canon', '103/303/703', 'B', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(19, 2041022, 'HP', 'Q2612A', 'B', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(20, 2041052, 'HP', '103/303/703', 'B', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(21, 2041035, 'HP', 'Q6511', 'A', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(22, 2041017, 'HP', 'Q6511X', 'A', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(23, 2041051, 'HP', 'Q6511X', 'A', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(24, 2041029, 'HP', 'Q6511X', 'A', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(25, 2041032, 'HP', 'Q6511X', 'A', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(26, 2041015, 'HP', 'Q6511X', 'A', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(27, 2041037, 'HP', 'CE505XС', 'I', 'Не работают', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(28, 2041042, 'HP', 'CE505XС', 'I', 'Склад', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(29, 2041045, 'HP', 'CE505XС', 'I', 'Склад', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(30, 2041093, 'HP', 'CE255X', 'W', 'Склад', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(31, 2041080, 'Canon', '724', 'W', 'Склад', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(32, 2041014, 'HP', 'Q1338A', 'F', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(33, 20111143, 'HP', 'Q6511X', 'A', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(34, 2041081, 'HP', 'CE255X', 'W', 'Склад', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(35, 2041025, 'HP', '436A', 'E', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(36, 2041071, 'Other', 'PL-CB435/436A/712/713', 'C', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(37, 2041083, 'Canon', '724H', 'W', 'Склад', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(38, 2041033, 'HP', 'CE505XC', 'I', 'Склад', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(39, 2041082, 'Canon', '724', 'W', 'Склад', 'Максим', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(40, 2041036, 'HP', 'CB435A', 'C', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(41, 2041057, 'HP', 'Q2612A', 'B', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(42, 2041040, 'Canon', '703', 'B', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(43, 2041070, 'Canon', '712', 'C', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(44, 2041068, 'HP', 'CB435A', 'C', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(45, 2041039, 'HP', 'CE285A', 'G', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(46, 2041018, 'HP', 'Q6511X', 'A', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(47, 2041078, 'HP', 'Q6511X', 'A', 'Склад', 'Владимир', NULL, 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29');

-- --------------------------------------------------------

--
-- Структура таблицы `check`
--

CREATE TABLE IF NOT EXISTS `check` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catridge_current_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `type_of_repair` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `master` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `catridge_model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `influence` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `displacement`
--

CREATE TABLE IF NOT EXISTS `displacement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catridge_current_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `to_place` text COLLATE utf8_unicode_ci NOT NULL,
  `notice` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `manifacture`
--

CREATE TABLE IF NOT EXISTS `manifacture` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `manifacture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `manifacture`
--

INSERT INTO `manifacture` (`id`, `manifacture`, `created_at`, `updated_at`) VALUES
(1, 'Canon', '2016-05-25 08:38:28', '2016-05-25 08:38:28'),
(2, 'HP', '2016-05-25 08:38:28', '2016-05-25 08:38:28');

-- --------------------------------------------------------

--
-- Структура таблицы `master`
--

CREATE TABLE IF NOT EXISTS `master` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `master_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `master`
--

INSERT INTO `master` (`id`, `master_name`, `created_at`, `updated_at`) VALUES
(1, 'ИП Попов', '2016-05-25 08:38:28', '2016-05-25 08:38:28'),
(2, 'Володя', '2016-05-25 08:38:28', '2016-05-25 08:38:28');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_13_124820_create_printers_table', 1),
('2016_03_13_124846_create_catridges_table', 1),
('2016_03_15_212809_create_table_type', 1),
('2016_03_16_191415_create_table_manifacture', 1),
('2016_03_16_210847_create_table_place', 1),
('2016_03_16_223456_create_table_master', 1),
('2016_04_05_215304_crete_table_storage_location_catridges', 1),
('2016_04_18_204011_create_table_displacement', 1),
('2016_04_18_214750_create_table_check', 1),
('2016_04_26_124226_create_table_office', 1),
('2016_04_27_064915_create_table_wifi', 1),
('2016_04_28_095839_create_table_paper_counters', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `office`
--

CREATE TABLE IF NOT EXISTS `office` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `office_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `paper_counters`
--

CREATE TABLE IF NOT EXISTS `paper_counters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number_of` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `influence` int(11) DEFAULT NULL,
  `notice` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_pointer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `place`
--

INSERT INTO `place` (`id`, `name_place`, `end_pointer`, `created_at`, `updated_at`) VALUES
(1, 'Немига', 'Хиневич', '2016-05-25 08:38:28', '2016-05-25 08:38:28'),
(2, 'Бухгалтерия', 'Грабко', '2016-05-25 08:38:28', '2016-05-25 08:38:28');

-- --------------------------------------------------------

--
-- Структура таблицы `printers`
--

CREATE TABLE IF NOT EXISTS `printers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `current_id` int(11) NOT NULL,
  `manifacture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `person` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `catridge_has` int(11) DEFAULT NULL,
  `master` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `auxiliary` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `printers`
--

INSERT INTO `printers` (`id`, `current_id`, `manifacture`, `model`, `type`, `place`, `room`, `person`, `ip`, `catridge_has`, `master`, `auxiliary`, `created_at`, `updated_at`) VALUES
(1, 2044029, 'HP', '4200dn', 'F', 'Старажевская', '', '', '192.168.2.29', NULL, 'Владимир', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(2, 2044026, 'HP', '2055dn', 'I', 'Старажевская', 'Библиотека', '', '192.168.2.26', NULL, 'Максим', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(3, 2044027, 'HP', '2055dn', 'I', 'Старажевская', 'Библиотека', '', '192.168.2.27', NULL, 'Максим', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(4, 2044030, 'HP', '2055dn', 'I', 'Старажевская', 'Библиотека', '', '192.168.2.30', NULL, 'Максим', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(5, 2031001, 'Canon', 'LBP6750dn', 'W', 'Старажевская', 'Toefl', '', '192.168.2.11', NULL, 'Максим', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(6, 2031002, 'Canon', 'LBP6750dn', 'W', 'Старажевская', 'Toefl', '', '192.168.2.12', NULL, 'Максим', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(7, 0, 'Canon', '3010B', 'C', 'Старажевская', 'Юридический', '', '', NULL, 'Владимир', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(8, 0, 'Canon', '3010B', 'C', 'Старажевская', 'Бухгалтерия', 'Наталия Николаевна', '', NULL, 'Владимир', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(9, 2043004, 'Canon', 'MF4350D', 'D', 'Старажевская', 'Бухгалтерия', '', '', NULL, 'Владимир', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(10, 2043006, 'Canon', 'MF4350D', 'D', 'Старажевская', 'ОРП', 'Бирюк', '', NULL, 'Владимир', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(11, 2043005, 'HP', 'P1522nf', 'E', 'Старажевская', 'Методисты', '', '', NULL, 'Владимир', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(12, 2044019, 'HP', '1018', 'B', 'Старажевская', 'Резерв', '', '', NULL, 'Владимир', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(13, 2044012, 'Canon', 'LBP2900B', 'B', 'Старажевская', 'Резерв', '', '', NULL, 'Владимир', '', '2016-05-25 08:38:29', '2016-05-25 08:38:29');

-- --------------------------------------------------------

--
-- Структура таблицы `storage_location_catridges`
--

CREATE TABLE IF NOT EXISTS `storage_location_catridges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `storage_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `storage_location_catridges`
--

INSERT INTO `storage_location_catridges` (`id`, `category_name`, `storage_id`, `created_at`, `updated_at`) VALUES
(1, 'Принтер', 2, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(2, 'Склад', 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(3, 'В списанные', 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29'),
(4, 'Не работают', 0, '2016-05-25 08:38:29', '2016-05-25 08:38:29');

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'A', '2016-05-25 08:38:28', '2016-05-25 08:38:28'),
(2, 'B', '2016-05-25 08:38:28', '2016-05-25 08:38:28'),
(3, 'C', '2016-05-25 08:38:28', '2016-05-25 08:38:28'),
(4, 'D', '2016-05-25 08:38:28', '2016-05-25 08:38:28'),
(5, 'F', '2016-05-25 08:38:28', '2016-05-25 08:38:28');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$97qnabXD7/hVF.PXox6Q8.HDjLAQPCaNMEg9F0ga.QH2Zyl5Zmk3W', 'e73f35d54853a3a23a3ab82b30af70c2', '2016-05-25 08:38:29', '2016-05-25 08:38:29');

-- --------------------------------------------------------

--
-- Структура таблицы `wifi`
--

CREATE TABLE IF NOT EXISTS `wifi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `voucher_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sliced` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `person_used` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flag` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
