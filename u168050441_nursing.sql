-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2025 at 06:48 AM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u168050441_nursing`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_levels`
--

CREATE TABLE `academic_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_levels`
--

INSERT INTO `academic_levels` (`id`, `name`) VALUES
(1, 'A-Level / College'),
(3, 'Master'),
(4, 'Mphil/PhD'),
(2, 'Undergraduate');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Assignment Writing', 'assignment-writing', '2025-03-21 17:27:41', '2025-03-21 17:27:41'),
(2, 'Academic Writing', 'academic-writing', '2025-03-21 17:28:02', '2025-03-21 17:28:02'),
(3, 'Content Writing', 'content-writing', '2025-03-21 16:42:10', '2025-03-21 16:42:10'),
(4, 'Essay Writing', 'essay-writing', '2025-03-21 16:42:10', '2025-03-21 16:42:10'),
(5, 'Research Paper', 'research-paper', '2025-03-21 16:43:22', '2025-03-21 16:43:22'),
(6, 'Admission', 'admission', '2025-03-21 16:43:22', '2025-03-21 16:43:22'),
(7, 'Jobs', 'jobs', '2025-03-21 16:43:22', '2025-03-21 16:43:22'),
(8, 'Tips', 'tips', '2025-03-21 16:43:22', '2025-03-21 16:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `detail` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `country`, `subject`, `phone`, `detail`, `created_at`, `updated_at`) VALUES
(17, 'Hamza', 'hamzakarim786@gmail.com', 'United Kingdom', 'test', '+443413096652', NULL, '2025-12-12 15:04:08', '2025-12-12 15:04:08'),
(18, 'Hamza', 'hamzakarim786@gmail.com', 'United Kingdom', 'testTE\\', '+443413096652', 'TEST', '2025-12-12 15:05:35', '2025-12-12 15:05:35'),
(19, 'Ella Flora', 'ellafloramkt@gmail.com', 'United States', 'Let’s talk about optimizing your website for better results', '+12102102101', 'Hello,\r\n\r\nI reviewed your website briefly and found a few broken links that lead to error pages. This can affect user experience and your Google rankings.\r\n\r\nIf you’d like, I can prepare a free report that highlights these errors and explains how to fix them.\r\n\r\nI’m also available for a short Google Meet call if you prefer to go through the details together.\r\n\r\nWould you like me to send the report?\r\n\r\nKind regards,\r\n\r\nElla', '2025-12-18 05:45:21', '2025-12-18 05:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'AS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and/or Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British lndian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'CA', 'Canada'),
(37, 'KH', 'Cambodia'),
(38, 'CM', 'Cameroon'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'CD', 'Democratic Republic of Congo'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecudaor'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'ID', 'Indonesia'),
(101, 'IR', 'Iran (Islamic Republic of)'),
(102, 'IQ', 'Iraq'),
(103, 'IE', 'Ireland'),
(104, 'IL', 'Israel'),
(105, 'IT', 'Italy'),
(106, 'CI', 'Ivory Coast'),
(107, 'JM', 'Jamaica'),
(108, 'JP', 'Japan'),
(109, 'JO', 'Jordan'),
(110, 'KZ', 'Kazakhstan'),
(111, 'KE', 'Kenya'),
(112, 'KI', 'Kiribati'),
(113, 'KP', 'Korea, Democratic People\'s Republic of'),
(114, 'KR', 'Korea, Republic of'),
(115, 'KW', 'Kuwait'),
(116, 'KG', 'Kyrgyzstan'),
(117, 'LA', 'Lao People\'s Democratic Republic'),
(118, 'LV', 'Latvia'),
(119, 'LB', 'Lebanon'),
(120, 'LS', 'Lesotho'),
(121, 'LR', 'Liberia'),
(122, 'LY', 'Libyan Arab Jamahiriya'),
(123, 'LI', 'Liechtenstein'),
(124, 'LT', 'Lithuania'),
(125, 'LU', 'Luxembourg'),
(126, 'MO', 'Macau'),
(127, 'MK', 'Macedonia'),
(128, 'MG', 'Madagascar'),
(129, 'MW', 'Malawi'),
(130, 'MY', 'Malaysia'),
(131, 'MV', 'Maldives'),
(132, 'ML', 'Mali'),
(133, 'MT', 'Malta'),
(134, 'MH', 'Marshall Islands'),
(135, 'MQ', 'Martinique'),
(136, 'MR', 'Mauritania'),
(137, 'MU', 'Mauritius'),
(138, 'TY', 'Mayotte'),
(139, 'MX', 'Mexico'),
(140, 'FM', 'Micronesia, Federated States of'),
(141, 'MD', 'Moldova, Republic of'),
(142, 'MC', 'Monaco'),
(143, 'MN', 'Mongolia'),
(144, 'MS', 'Montserrat'),
(145, 'MA', 'Morocco'),
(146, 'MZ', 'Mozambique'),
(147, 'MM', 'Myanmar'),
(148, 'NA', 'Namibia'),
(149, 'NR', 'Nauru'),
(150, 'NP', 'Nepal'),
(151, 'NL', 'Netherlands'),
(152, 'AN', 'Netherlands Antilles'),
(153, 'NC', 'New Caledonia'),
(154, 'NZ', 'New Zealand'),
(155, 'NI', 'Nicaragua'),
(156, 'NE', 'Niger'),
(157, 'NG', 'Nigeria'),
(158, 'NU', 'Niue'),
(159, 'NF', 'Norfork Island'),
(160, 'MP', 'Northern Mariana Islands'),
(161, 'NO', 'Norway'),
(162, 'OM', 'Oman'),
(163, 'PK', 'Pakistan'),
(164, 'PW', 'Palau'),
(165, 'PA', 'Panama'),
(166, 'PG', 'Papua New Guinea'),
(167, 'PY', 'Paraguay'),
(168, 'PE', 'Peru'),
(169, 'PH', 'Philippines'),
(170, 'PN', 'Pitcairn'),
(171, 'PL', 'Poland'),
(172, 'PT', 'Portugal'),
(173, 'PR', 'Puerto Rico'),
(174, 'QA', 'Qatar'),
(175, 'SS', 'Republic of South Sudan'),
(176, 'RE', 'Reunion'),
(177, 'RO', 'Romania'),
(178, 'RU', 'Russian Federation'),
(179, 'RW', 'Rwanda'),
(180, 'KN', 'Saint Kitts and Nevis'),
(181, 'LC', 'Saint Lucia'),
(182, 'VC', 'Saint Vincent and the Grenadines'),
(183, 'WS', 'Samoa'),
(184, 'SM', 'San Marino'),
(185, 'ST', 'Sao Tome and Principe'),
(186, 'SA', 'Saudi Arabia'),
(187, 'SN', 'Senegal'),
(188, 'RS', 'Serbia'),
(189, 'SC', 'Seychelles'),
(190, 'SL', 'Sierra Leone'),
(191, 'SG', 'Singapore'),
(192, 'SK', 'Slovakia'),
(193, 'SI', 'Slovenia'),
(194, 'SB', 'Solomon Islands'),
(195, 'SO', 'Somalia'),
(196, 'ZA', 'South Africa'),
(197, 'GS', 'South Georgia South Sandwich Islands'),
(198, 'ES', 'Spain'),
(199, 'LK', 'Sri Lanka'),
(200, 'SH', 'St. Helena'),
(201, 'PM', 'St. Pierre and Miquelon'),
(202, 'SD', 'Sudan'),
(203, 'SR', 'Suriname'),
(204, 'SJ', 'Svalbarn and Jan Mayen Islands'),
(205, 'SZ', 'Swaziland'),
(206, 'SE', 'Sweden'),
(207, 'CH', 'Switzerland'),
(208, 'SY', 'Syrian Arab Republic'),
(209, 'TW', 'Taiwan'),
(210, 'TJ', 'Tajikistan'),
(211, 'TZ', 'Tanzania, United Republic of'),
(212, 'TH', 'Thailand'),
(213, 'TG', 'Togo'),
(214, 'TK', 'Tokelau'),
(215, 'TO', 'Tonga'),
(216, 'TT', 'Trinidad and Tobago'),
(217, 'TN', 'Tunisia'),
(218, 'TR', 'Turkey'),
(219, 'TM', 'Turkmenistan'),
(220, 'TC', 'Turks and Caicos Islands'),
(221, 'TV', 'Tuvalu'),
(222, 'UG', 'Uganda'),
(223, 'UA', 'Ukraine'),
(224, 'AE', 'United Arab Emirates'),
(225, 'GB', 'United Kingdom'),
(226, 'US', 'United States'),
(227, 'UM', 'United States minor outlying islands'),
(228, 'UY', 'Uruguay'),
(229, 'UZ', 'Uzbekistan'),
(230, 'VU', 'Vanuatu'),
(231, 'VA', 'Vatican City State'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Virgin Islands (British)'),
(235, 'VI', 'Virgin Islands (U.S.)'),
(236, 'WF', 'Wallis and Futuna Islands'),
(237, 'EH', 'Western Sahara'),
(238, 'YE', 'Yemen'),
(239, 'YU', 'Yugoslavia'),
(240, 'ZR', 'Zaire'),
(241, 'ZM', 'Zambia'),
(242, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `deadlines`
--

CREATE TABLE `deadlines` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration_in_days` double(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deadlines`
--

INSERT INTO `deadlines` (`id`, `name`, `duration_in_days`) VALUES
(1, '20 Days', 20.00),
(2, '15 Days', 15.00),
(3, '12 Days', 12.00),
(4, '10 Days', 10.00),
(5, '9 Days', 9.00),
(6, '8 Days', 8.00),
(7, '7 Days', 7.00),
(8, '6 Days', 6.00),
(9, '5 Days', 5.00),
(10, '4 Days', 4.00),
(11, '3 Days', 3.00),
(12, '2 Days', 2.00),
(13, '24 Hours', 1.00),
(14, '12 Hours', 0.50),
(15, '6 Hours', 0.25);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fares`
--

CREATE TABLE `fares` (
  `id` int(10) UNSIGNED NOT NULL,
  `academic_level_id` int(10) UNSIGNED NOT NULL,
  `deadline_id` int(10) UNSIGNED NOT NULL,
  `per_page_price` double(6,2) NOT NULL,
  `per_slide_price` double(6,2) NOT NULL,
  `per_poster_price` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fares`
--

INSERT INTO `fares` (`id`, `academic_level_id`, `deadline_id`, `per_page_price`, `per_slide_price`, `per_poster_price`) VALUES
(1, 1, 1, 6.00, 4.00, 20.00),
(2, 1, 2, 7.00, 4.00, 20.00),
(3, 1, 3, 8.00, 4.00, 20.00),
(4, 1, 4, 9.00, 4.00, 20.00),
(5, 1, 5, 10.00, 4.00, 20.00),
(6, 1, 6, 11.00, 4.00, 20.00),
(7, 1, 7, 12.00, 4.00, 20.00),
(8, 1, 8, 13.00, 4.00, 20.00),
(9, 1, 9, 14.00, 4.00, 20.00),
(10, 1, 10, 16.00, 4.00, 20.00),
(11, 1, 11, 18.00, 4.00, 20.00),
(12, 1, 12, 20.00, 4.00, 20.00),
(13, 1, 13, 22.00, 4.00, 20.00),
(14, 1, 14, 24.00, 4.00, 20.00),
(15, 1, 15, 26.00, 4.00, 20.00),
(16, 2, 1, 8.00, 4.00, 20.00),
(17, 2, 2, 9.00, 4.00, 20.00),
(18, 2, 3, 10.00, 4.00, 20.00),
(19, 2, 4, 11.00, 4.00, 20.00),
(20, 2, 5, 12.00, 4.00, 20.00),
(21, 2, 6, 13.00, 4.00, 20.00),
(22, 2, 7, 14.00, 4.00, 20.00),
(23, 2, 8, 15.00, 4.00, 20.00),
(24, 2, 9, 16.00, 4.00, 20.00),
(25, 2, 10, 18.00, 4.00, 20.00),
(26, 2, 11, 20.00, 4.00, 20.00),
(27, 2, 12, 22.00, 4.00, 20.00),
(28, 2, 13, 24.00, 4.00, 20.00),
(29, 2, 14, 26.00, 4.00, 20.00),
(30, 2, 15, 28.00, 4.00, 20.00),
(31, 3, 1, 10.00, 4.00, 20.00),
(32, 3, 2, 11.00, 4.00, 20.00),
(33, 3, 3, 12.00, 4.00, 20.00),
(34, 3, 4, 13.00, 4.00, 20.00),
(35, 3, 5, 14.00, 4.00, 20.00),
(36, 3, 6, 15.00, 4.00, 20.00),
(37, 3, 7, 16.00, 4.00, 20.00),
(38, 3, 8, 17.00, 4.00, 20.00),
(39, 3, 9, 18.00, 4.00, 20.00),
(40, 3, 10, 20.00, 4.00, 20.00),
(41, 3, 11, 22.00, 4.00, 20.00),
(42, 3, 12, 24.00, 4.00, 20.00),
(43, 3, 13, 26.00, 4.00, 20.00),
(44, 3, 14, 28.00, 4.00, 20.00),
(45, 3, 15, 30.00, 4.00, 20.00),
(46, 4, 1, 12.00, 4.00, 20.00),
(47, 4, 2, 13.00, 4.00, 20.00),
(48, 4, 3, 14.00, 4.00, 20.00),
(49, 4, 4, 15.00, 4.00, 20.00),
(50, 4, 5, 16.00, 4.00, 20.00),
(51, 4, 6, 17.00, 4.00, 20.00),
(52, 4, 7, 18.00, 4.00, 20.00),
(53, 4, 8, 19.00, 4.00, 20.00),
(54, 4, 9, 20.00, 4.00, 20.00),
(55, 4, 10, 22.00, 4.00, 20.00),
(56, 4, 11, 24.00, 4.00, 20.00),
(57, 4, 12, 26.00, 4.00, 20.00),
(58, 4, 13, 28.00, 4.00, 20.00),
(59, 4, 14, 30.00, 4.00, 20.00),
(60, 4, 15, 32.00, 4.00, 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `file_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `order_id`, `file_path`) VALUES
(16, 102, 'uploads/693c2f90a957c_1765552016_nursing_assignment_helpers_uk_cover_image_720.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` varchar(255) NOT NULL,
  `gateway` varchar(255) DEFAULT NULL,
  `currency` varchar(255) NOT NULL DEFAULT 'GBP',
  `stripe_id` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL,
  `auto_mail` int(11) NOT NULL DEFAULT 0,
  `status_id` int(10) UNSIGNED NOT NULL DEFAULT 4,
  `user_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `ref_no`, `gateway`, `currency`, `stripe_id`, `amount`, `auto_mail`, `status_id`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(36, 'fd932a19-5857-4b69-ac22-4b653fb48e17', 'stripe', 'GBP', NULL, 6, 0, 4, 51, 102, '2025-12-12 15:06:56', '2025-12-12 15:06:56'),
(37, '76767f6e-3489-4954-9a4c-bba047bc4417', 'stripe', 'GBP', NULL, 6, 0, 4, 54, 103, '2025-12-15 08:06:28', '2025-12-15 08:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_12_11_104107_create_statuses_table', 1),
(4, '2022_05_24_000001_create_permissions_table', 1),
(5, '2022_05_24_000002_create_roles_table', 1),
(6, '2022_05_24_000003_create_users_table', 1),
(7, '2022_05_24_000004_create_permission_role_pivot_table', 1),
(8, '2022_05_24_000005_create_role_user_pivot_table', 1),
(9, '2022_06_08_085252_create_web_settings_table', 1),
(10, '2022_06_09_072430_create_services_table', 1),
(11, '2022_06_09_103559_create_blogs_table', 1),
(12, '2022_06_11_081924_create_contacts_table', 1),
(13, '2022_06_13_085818_create_paper_types_table', 1),
(14, '2022_06_13_100951_create_academic_levels_table', 1),
(15, '2022_06_13_103131_create_deadlines_table', 1),
(16, '2022_06_13_111450_create_fares_table', 1),
(17, '2022_06_15_085659_create_subjects_table', 1),
(18, '2022_06_15_093044_create_refrence_styles_table', 1),
(19, '2022_06_15_101945_create_countries_table', 1),
(20, '2022_06_20_093634_create_orders_table', 1),
(21, '2022_06_20_093817_create_files_table', 1),
(22, '2023_01_13_094552_create_invoices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `paper_type` varchar(255) NOT NULL,
  `paper_topic` text NOT NULL,
  `academic_level` varchar(255) NOT NULL,
  `number_of_pages` varchar(255) NOT NULL,
  `reference_style` varchar(255) NOT NULL,
  `no_of_references` int(11) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `detail` mediumtext DEFAULT NULL,
  `is_complete` tinyint(1) NOT NULL DEFAULT 0,
  `cost_per_page` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `academic_level_id` int(11) DEFAULT NULL,
  `deadline_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `country`, `subject`, `paper_type`, `paper_topic`, `academic_level`, `number_of_pages`, `reference_style`, `no_of_references`, `deadline`, `detail`, `is_complete`, `cost_per_page`, `total_price`, `academic_level_id`, `deadline_id`, `user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(102, 'Hamza', 'hamzakarim786@gmail.com', '+443413096652', 'United States', 'Journalism', 'Essay', 'test', 'A-Level / College', '1', 'APA', 2, '20 Days', 'test', 0, 6, 6, 1, 1, 51, 1, '2025-12-12 15:06:56', '2025-12-12 15:06:56'),
(103, 'Testing', 'dckiran97@gmail.com', '+447403663991', 'United Kingdom', 'Design Analysis', 'Essay', 'Testing', 'A-Level / College', '1', 'APA', 7, '20 Days', 'Testing', 0, 6, 6, 1, 1, 54, 1, '2025-12-15 08:06:28', '2025-12-15 08:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `paper_types`
--

CREATE TABLE `paper_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paper_types`
--

INSERT INTO `paper_types` (`id`, `name`) VALUES
(11, 'Assignment'),
(2, 'Book Report'),
(7, 'Course Work'),
(6, 'Dissertation'),
(10, 'Dissertation Proposal'),
(1, 'Essay'),
(12, 'Other'),
(3, 'Research Paper'),
(9, 'Research Proposal'),
(4, 'Term Paper'),
(5, 'Thesis'),
(8, 'Thesis Proposal');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dc.usmankhaliq@gmail.com', '$2y$10$CK0wYFzdECuaHCSkpomS7uUa.t6Bn3vzDbxx4JyXKSqGQIxcvbUvG', '2023-01-17 16:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('info@nursingassignmenthelpersuk.co.uk', '$2y$12$VeOmCta46o7U0Wi9fcLHW.pTlzDmtTaUjuXZPcht7qoWWWS2bXPN2', '2025-12-06 10:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `reference_styles`
--

CREATE TABLE `reference_styles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reference_styles`
--

INSERT INTO `reference_styles` (`id`, `name`, `active`) VALUES
(1, 'APA', 1),
(2, 'MLA', 1),
(3, 'Chicago', 1),
(4, 'Turabian', 1),
(5, 'Harvard', 1),
(6, 'Oxford', 1),
(7, 'Vancouver', 1),
(8, 'CBE', 1),
(9, 'Other', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(56, 2),
(57, 2),
(58, 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `html` longtext DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `for` varchar(255) NOT NULL,
  `css_class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `slug`, `for`, `css_class`) VALUES
(1, 'Pending', 'pending', 'order', 'badge-warning'),
(2, 'In Progress', 'in-progress', 'order', 'badge-info'),
(3, 'Completed', 'completed', 'order', 'badge-success'),
(4, 'Unpaid', 'unpaid', 'invoice', 'badge-warning'),
(5, 'Paid', 'paid', 'invoice', 'badge-success');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `active`) VALUES
(1, 'Art', 1),
(2, 'Architecture', 1),
(3, 'Dance', 1),
(4, 'Design Analysis', 1),
(5, 'Drama', 1),
(6, 'Movies', 1),
(7, 'Music', 1),
(8, 'Paintings', 1),
(9, 'Theatre', 1),
(10, 'Biology', 1),
(11, 'Chemistry', 1),
(12, 'Communication and Media', 1),
(13, 'Advertising', 1),
(14, 'Communication Strategies', 1),
(15, 'Journalism', 1),
(16, 'Public Relations', 1),
(17, 'Creative Writing', 1),
(18, 'Economics', 1),
(19, 'Accounting', 1),
(20, 'Case Study', 1),
(21, 'Company Analysis', 1),
(22, 'E-Commerce', 1),
(23, 'Finance', 1),
(24, 'Logistics', 1),
(25, 'Trade', 1),
(26, 'Education', 1),
(27, 'Application Essay', 1),
(28, 'Education Theories', 1),
(29, 'Pedogogy', 1),
(30, 'Teacher\'s Career', 1),
(31, 'Engineering', 1),
(32, 'English', 1),
(33, 'Ethics', 1),
(34, 'History', 1),
(35, 'African-American Studies', 1),
(36, 'American History', 1),
(37, 'Asian Studis', 1),
(38, 'Canadian Studies', 1),
(39, 'East European Studies', 1),
(40, 'Holocaust', 1),
(41, 'Latin-American Studies', 1),
(42, 'Native-American Studies', 1),
(43, 'West European Studies', 1),
(44, 'Law', 1),
(45, 'Criminology', 1),
(46, 'Legal Issues', 1),
(47, 'Linguistics', 1),
(48, 'Literature', 1),
(49, 'American Literature', 1),
(50, 'Antique Literature', 1),
(51, 'Asian Literature', 1),
(52, 'English Literature', 1),
(53, 'Shakespeare Studies', 1),
(54, 'Management', 1),
(55, 'Marketing', 1),
(56, 'Mathematics', 1),
(57, 'Medicine and Health', 1),
(58, 'Alternative Medicine', 1),
(59, 'Healthcare', 1),
(60, 'Nursing', 1),
(61, 'Nurtition', 1),
(62, 'Pharmacology', 1),
(63, 'Sport', 1),
(64, 'Nature', 1),
(65, 'Agricultural Studies', 1),
(66, 'Anthropology', 1),
(67, 'Astronomy', 1),
(68, 'Environmental Issues', 1),
(69, 'Geography', 1),
(70, 'Geology', 1),
(71, 'Philosophy', 1),
(72, 'Physics', 1),
(73, 'Political Science', 1),
(74, 'Psychology', 1),
(75, 'Religion and Theology', 1),
(76, 'Sociology', 1),
(77, 'Technology', 1),
(78, 'Aeronautics', 1),
(79, 'Aviation', 1),
(80, 'Computer Science', 1),
(81, 'Internet', 1),
(82, 'IT Management', 1),
(83, 'Web Design', 1),
(84, 'Toursim', 1),
(85, 'Other', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Assignment', NULL, NULL),
(2, 'Thesis', NULL, NULL),
(3, 'Writing', NULL, NULL),
(4, 'Essay', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `provider_name` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `state`, `zip_code`, `city`, `country`, `email_verified_at`, `password`, `provider_id`, `provider_name`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'info@nursingassignmenthelpersuk.co.uk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$12$hJ/mKU1tLyYSawbXwLd/5.O8HDPlkIt6NHPLkr/iWxKr5Y9nfzHoG', NULL, NULL, 'HibKtC732EzeFSbMq0sOEFTshOPbzQ5y6oCcviFdwcOxWwrpGl2eRM7yZ6bo', NULL, NULL, NULL),
(43, 'Seth Baker', 'qogyhosuvu@mailinator.com', '+16577344219', NULL, NULL, NULL, NULL, 'Algeria', NULL, '$2y$12$QFKA42XfcXDqHx2zAaUKoebBaIlECZTHGUN3Bul31fA8kunCLMsU2', NULL, NULL, NULL, '2025-09-17 02:09:05', '2025-09-17 02:09:05', NULL),
(44, 'Jocelyn Zamora', 'jysigevyd@mailinator.com', '+16572862195', NULL, NULL, NULL, NULL, 'Russian Federation', NULL, '$2y$12$lIOBqJ2df/Jrt/ilCgv9jeSBl0Li/yXR/eODFs8933cTgWYSSyD.2', NULL, NULL, NULL, '2025-09-17 02:14:37', '2025-09-17 02:14:37', NULL),
(45, 'India Mcgowan', 'qyjikimumu@mailinator.com', '+19085894952', NULL, NULL, NULL, NULL, 'Colombia', NULL, '$2y$12$s5av3D8LoQxQcYiEKiVrresJoVvwJPdWZWrE72gtVzR5RK0SMi1GW', NULL, NULL, NULL, '2025-09-17 02:16:06', '2025-09-17 02:16:06', NULL),
(46, 'Yuli Stone', 'naxefamic@mailinator.com', '+13239268302', NULL, NULL, NULL, NULL, 'Bermuda', NULL, '$2y$12$BUMtj0av.jIKd9.COBvq7OV5ywYdB0eNqb9BPFwVySj/F0NTBVGRu', NULL, NULL, NULL, '2025-09-17 02:20:48', '2025-09-17 02:20:48', NULL),
(47, 'Ezekiel Davidson', 'digitcreator@outlook.com', '+15598985867', NULL, NULL, NULL, NULL, 'Svalbarn and Jan Mayen Islands', NULL, '$2y$12$QFLMMtV5n2OFzh6ThwMjReIYFBkLvUiMxJopKOGMOPcdm/VrzRc4e', NULL, NULL, NULL, '2025-09-17 03:09:06', '2025-09-17 03:09:06', NULL),
(48, 'Barbara Garcia', 'mahwishali.kingdomvision@gmail.com', '+15673624176', 'Nostrud fuga Volupt', 'Harum enim pariatur', '99083', 'Quas adipisci adipis', 'ET', '2025-09-17 10:07:58', '$2y$12$tCUi/lDqlvayj3o4vWPkYefrMhoPOpww46DNkcWguE1qcHdF358o6', NULL, NULL, '9BeClpOx5TKeFGXcpOZiN406owetHk8mPjy7WI6AkeH9Q1AqcFF9eNdq1E1p', '2025-09-17 05:07:58', '2025-09-22 07:24:32', NULL),
(50, 'bilal', 'bilaalhaider990@gmail.com', '+16574744109', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$12$Mg82y7a.6IW7T/aAszKIh.iLbQB..13VmvxanXE7Aot.kFvMq2gGm', NULL, NULL, NULL, '2025-09-22 08:12:02', '2025-09-22 08:12:02', NULL),
(51, 'Hamz', 'hamzakarim786@gmail.com', '+493413096652', NULL, NULL, NULL, NULL, 'Pakistan', NULL, '$2y$12$Apa5t4P3Mng.qxt6OflMYeWVGNeriRS2zwCELA4FOn8Ya.hUpEI0S', NULL, NULL, NULL, '2025-09-22 11:29:11', '2025-09-22 11:29:11', NULL),
(52, 'riffat mushtaq', 'Mahik6061@gmail.com', '+4974001234567', NULL, NULL, NULL, NULL, 'Georgia', NULL, '$2y$12$6cAXcE63zoCsgoe0qOXSw.epGoHnILTa6zR2zQVa2/Nn6NFOHljzW', NULL, NULL, NULL, '2025-09-24 08:39:55', '2025-09-24 08:39:55', NULL),
(53, 'Ila Fernandez', 'fujorokugo@mailinator.com', '+15447836355', NULL, NULL, NULL, NULL, 'Colombia', NULL, '$2y$12$C0.MQzVc4EJoHoiIsg9NGeE.Orpzt3QG8Wf2cHkmgmP4Yr//BVEAK', NULL, NULL, NULL, '2025-10-13 09:52:19', '2025-10-13 09:52:19', NULL),
(54, 'Testing', 'dckiran97@gmail.com', '+4915772824218', NULL, NULL, NULL, NULL, 'Germany', NULL, '$2y$12$NUq05bOWQlHKo2/janTLm./F0EuvyUZmcfDLMHPRLwK4kx449PQiy', NULL, NULL, NULL, '2025-10-13 11:22:17', '2025-10-13 11:22:17', NULL),
(56, 'Garrison Stout', 'bakesuwaj@mailinator.com', '+447403663991', NULL, NULL, NULL, NULL, 'Brazil', NULL, '$2y$12$0Rf6aaK9lzmSXvcgTsrzl.pyjPWo8u1FIdzl2gUhFuVpMc0blCxAO', NULL, NULL, NULL, '2025-12-06 09:56:35', '2025-12-06 09:56:35', NULL),
(57, 'Brennan Robertson', 'ayeshaaa.6000@gmail.com', '+447403663991', NULL, NULL, NULL, NULL, 'Cameroon', NULL, '$2y$12$RehGw/dV83tmBllDfO.e5ucZjA7eHvpF0u8Mxz86MTxGuFziehyzu', NULL, NULL, 'WMlzkzw9dM3Q5XPsqwQx1xusSyYypmPzEdDPWZDG1AsCgSWxBEtCZLk61oDZ', '2025-12-06 09:58:09', '2025-12-06 10:05:56', NULL),
(58, 'Ayesha', 'maliayesha288@gmail.com', '+447403663991', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$12$ttq9CZlIgSJOYagvYyITm.fzmZhDQmIvOSQ49CAuxo37x6fjgD/U.', NULL, NULL, NULL, '2025-12-06 10:08:08', '2025-12-06 10:08:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_settings`
--

CREATE TABLE `web_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `whatsapp_link` varchar(255) DEFAULT NULL,
  `is_blogs_offers` tinyint(1) NOT NULL DEFAULT 0,
  `is_services_offers` tinyint(1) NOT NULL DEFAULT 0,
  `is_index` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_settings`
--

INSERT INTO `web_settings` (`id`, `name`, `email`, `contact`, `address`, `facebook_link`, `instagram_link`, `twitter_link`, `linkedin_link`, `whatsapp_link`, `is_blogs_offers`, `is_services_offers`, `is_index`) VALUES
(1, 'Nursing Assignment Helper', 'info@nursingassignmenthelpersuk.co.uk', '03365162383', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio dicta voluptate necessitatibus, error autem tenetur fuga eveniet maxime facilis quo aperiam hic, beatae ullam. Iusto, dolorum doloribus. Sed, cum.', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.pinterest.com/', 'null', 'test', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_levels`
--
ALTER TABLE `academic_levels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `academic_levels_name_unique` (`name`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_academic_level_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_name_unique` (`name`);

--
-- Indexes for table `deadlines`
--
ALTER TABLE `deadlines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deadlines_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fares`
--
ALTER TABLE `fares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fares_academic_level_id_foreign` (`academic_level_id`),
  ADD KEY `fares_deadline_id_foreign` (`deadline_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_order_id_foreign` (`order_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoices_ref_no_unique` (`ref_no`),
  ADD KEY `invoices_status_id_foreign` (`status_id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`),
  ADD KEY `invoices_order_id_foreign` (`order_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_status_id_foreign` (`status_id`);

--
-- Indexes for table `paper_types`
--
ALTER TABLE `paper_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paper_types_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_6657804` (`role_id`),
  ADD KEY `permission_id_fk_6657804` (`permission_id`);

--
-- Indexes for table `reference_styles`
--
ALTER TABLE `reference_styles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refrence_styles_name_unique` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_6657813` (`user_id`),
  ADD KEY `role_id_fk_6657813` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statuses_name_unique` (`name`),
  ADD UNIQUE KEY `statuses_slug_unique` (`slug`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `academic_levels`
--
ALTER TABLE `academic_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `deadlines`
--
ALTER TABLE `deadlines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fares`
--
ALTER TABLE `fares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `paper_types`
--
ALTER TABLE `paper_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reference_styles`
--
ALTER TABLE `reference_styles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_academic_level_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `fares`
--
ALTER TABLE `fares`
  ADD CONSTRAINT `fares_academic_level_id_foreign` FOREIGN KEY (`academic_level_id`) REFERENCES `academic_levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fares_deadline_id_foreign` FOREIGN KEY (`deadline_id`) REFERENCES `deadlines` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_6657804` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_6657804` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_6657813` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_6657813` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
