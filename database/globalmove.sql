-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2025 at 10:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `globalmove`
--

-- --------------------------------------------------------

--
-- Table structure for table `spip_articles`
--

CREATE TABLE `spip_articles` (
  `id_article` bigint(21) NOT NULL,
  `surtitre` text NOT NULL DEFAULT '',
  `titre` text NOT NULL DEFAULT '',
  `soustitre` text NOT NULL DEFAULT '',
  `id_rubrique` bigint(21) NOT NULL DEFAULT 0,
  `descriptif` text NOT NULL DEFAULT '',
  `chapo` mediumtext NOT NULL DEFAULT '',
  `texte` longtext NOT NULL DEFAULT '',
  `ps` mediumtext NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `statut` varchar(10) NOT NULL DEFAULT '0',
  `id_secteur` bigint(21) NOT NULL DEFAULT 0,
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `export` varchar(10) DEFAULT 'oui',
  `date_redac` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `visites` int(11) NOT NULL DEFAULT 0,
  `referers` int(11) NOT NULL DEFAULT 0,
  `popularite` double NOT NULL DEFAULT 0,
  `accepter_forum` char(3) NOT NULL DEFAULT '',
  `date_modif` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lang` varchar(10) NOT NULL DEFAULT '',
  `langue_choisie` varchar(3) DEFAULT 'non',
  `id_trad` bigint(21) NOT NULL DEFAULT 0,
  `nom_site` tinytext NOT NULL DEFAULT '',
  `url_site` text NOT NULL DEFAULT '',
  `virtuel` text NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `spip_articles`
--

INSERT INTO `spip_articles` (`id_article`, `surtitre`, `titre`, `soustitre`, `id_rubrique`, `descriptif`, `chapo`, `texte`, `ps`, `date`, `statut`, `id_secteur`, `maj`, `export`, `date_redac`, `visites`, `referers`, `popularite`, `accepter_forum`, `date_modif`, `lang`, `langue_choisie`, `id_trad`, `nom_site`, `url_site`, `virtuel`) VALUES
(1, '', 'Premium Cars', '', 6, '', '', 'Experience the world’s most reliable and efficient relocation solutions.', '', '2025-01-16 08:06:12', 'publie', 1, '2025-01-21 15:17:58', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-21 16:17:58', 'fr', 'non', 0, '', '', ''),
(2, '', 'Ranger Rover', 'Year:2016', 3, '', '', '$55', '', '2025-01-16 08:50:00', 'publie', 3, '2025-01-21 11:36:12', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-21 12:36:12', 'fr', 'non', 0, '', '', ''),
(3, '', 'TXL', 'year:2018', 3, '', '', '$50', '', '2025-01-16 09:00:35', 'publie', 3, '2025-01-22 11:54:24', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-22 12:54:24', 'fr', 'non', 0, '', '', ''),
(4, '', 'Toyota Prado', 'Year:2004/6', 3, '', '', '$50', '', '2025-01-16 09:02:03', 'publie', 3, '2025-01-22 11:54:55', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-22 12:54:55', 'fr', 'non', 0, '', '', ''),
(5, '', 'Coaster', '', 3, '', '', '$50\r\n', '', '2025-01-16 09:03:21', 'publie', 3, '2025-01-22 11:55:13', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-22 12:55:13', 'fr', 'non', 0, '', '', ''),
(6, '', 'Chief Creative Officer', 'Andrew Hamilton', 7, '', '', '', '', '2025-01-16 14:48:09', 'publie', 5, '2025-01-16 13:49:08', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-16 14:49:08', 'fr', 'non', 0, '', '', ''),
(7, '', 'CEO', 'Andrew ', 7, '', '', '', '', '2025-01-16 14:52:25', 'publie', 5, '2025-01-16 13:52:49', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-16 14:52:49', 'fr', 'non', 0, '', '', ''),
(8, '', 'Accountant', 'Akeza Linka', 7, '', '', '', '', '2025-01-16 14:54:22', 'publie', 5, '2025-01-16 13:54:58', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-16 14:54:58', 'fr', 'non', 0, '', '', ''),
(9, '', 'IT Manager', 'Karenzi Edison', 7, '', '', '', '', '2025-01-16 14:57:18', 'publie', 5, '2025-01-16 13:58:52', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-16 14:58:52', 'fr', 'non', 0, '', '', ''),
(10, '', '<h2>At Global Move Solutions, we provide an extensive selection of <span class=\"id-color\">commercial vehicles</span> and <span class=\"id-color\">luxury cars</span> tailored to suit any occasion.</h2>', '', 2, '', '', 'At Global Move Solutions, we are committed to delivering outstanding car rental services to our esteemed clients. Our focus on quality, convenience, and customer satisfaction ensures that every rental experience is smooth, reliable, and enjoyable. We recognize that each customer has unique needs when it comes to car rentals. To meet these varied preferences, we offer a diverse fleet of meticulously maintained vehicles. Whether you\'re a solo traveler looking for a compact car, a family in need of a spacious SUV, or a business professional requiring a premium vehicle, we have the perfect option for you. At Global Move Solutions, we pride ourselves on providing flexible, customer-centric solutions designed to exceed expectations. Let us help you move in comfort, style, and confidence.\r\n', '', '2025-01-17 09:08:57', 'publie', 2, '2025-01-17 08:12:24', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-17 09:12:24', 'fr', 'non', 0, '', '', ''),
(11, '', 'Hyndai Tucson', 'Year:2010', 3, '', '', ' $50\r\n', '', '2025-01-17 09:34:40', 'publie', 3, '2025-01-22 11:55:30', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-22 12:55:30', 'fr', 'non', 0, '', '', ''),
(12, '', 'Toyota CHR', 'Year:2019', 3, '', '', ' $50', '', '2025-01-17 09:43:24', 'publie', 3, '2025-01-22 11:58:05', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-22 12:58:05', 'fr', 'non', 0, '', '', ''),
(13, '', 'Benz ', 'Year:2008', 3, '', '', '$12\r\n', '', '2025-01-17 09:45:28', 'publie', 3, '2025-01-21 11:37:55', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-21 12:37:55', 'fr', 'non', 0, '', '', ''),
(14, '', 'Fortuner', 'Year:2010', 3, '', '', '$50', '', '2025-01-17 09:48:35', 'publie', 3, '2025-01-22 11:58:46', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-22 12:58:46', 'fr', 'non', 0, '', '', ''),
(15, '', 'Toyota Altis', 'Year:2014', 3, '', '', '$16', '', '2025-01-17 09:50:21', 'publie', 3, '2025-01-21 11:38:30', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-21 12:38:30', 'fr', 'non', 0, '', '', ''),
(16, '', 'KIA Sorento', 'Year:2012', 3, '', '', '$50\r\n', '', '2025-01-17 09:53:33', 'publie', 3, '2025-01-22 11:59:25', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-22 12:59:25', 'fr', 'non', 0, '', '', ''),
(17, '', 'KIA K7', 'Year:2014', 3, '', '', ' $14', '', '2025-01-17 09:58:19', 'publie', 3, '2025-01-21 11:39:01', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-21 12:39:01', 'fr', 'non', 0, '', '', ''),
(18, '', 'Ranger Rover', 'Year:2016', 8, 'The 2016 Range Rover combines luxury, performance, and off-road capability, making it one of the best full-size SUVs available. It offers a refined design, powerful engine options, and a sophisticated interior, providing a seamless driving experience whether on or off the road.\r\n\r\nSpecifications:\r\nBody Type: SUV\r\nSeats: 5 seats\r\nDoors: 4 doors\r\nLuggage Capacity: 900 L\r\nFuel Type: Diesel\r\nEngine: 3.0L V6\r\nYear: 2016\r\nMileage: 60,000 miles\r\nTransmission: Automatic\r\nDrive Type: 4WD\r\nFuel Economy: 22 mpg city / 28 mpg highway\r\nExterior Color: British Racing Green\r\nInterior Color: Tan Leather\r\n', '', '<h4>Features</h4>\r\n<ul class=\"ul-style-2\">\r\n    <li>Bluetooth Connectivity</li>\r\n    <li>Touchscreen Navigation System</li>\r\n    <li>Leather Upholstery</li>\r\n    <li>Panoramic Sunroof</li>\r\n    <li>Heated and Ventilated Seats</li>\r\n    <li>Adaptive Cruise Control</li>\r\n    <li>Parking Sensors</li>\r\n</ul>\r\n\r\n', '', '2025-01-17 11:07:55', 'publie', 3, '2025-01-17 10:51:33', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-17 11:51:33', 'fr', 'non', 0, '', '', ''),
(19, '', 'TXL', 'Year:2018', 8, 'The 2018 TXL delivers a perfect blend of luxury, power, and versatility, making it one of the top contenders in the full-size SUV segment. Its sleek design, advanced technology features, and high-performance engine options ensure a thrilling driving experience, whether navigating city streets or tackling rugged terrain. The interior is meticulously crafted for comfort, offering top-notch materials and ample space for passengers and cargo alike. Whether you\'re looking for an elegant daily driver or an adventure-ready SUV, the 2018 TXL offers a refined yet capable solution.', '', '<h4>Features</h4>\r\n<ul class=\"ul-style-2\">\r\n    <li>Bluetooth Connectivity</li>\r\n    <li>Touchscreen Navigation System</li>\r\n    <li>Premium Leather Upholstery</li>\r\n    <li>Panoramic Sunroof</li>\r\n    <li>Heated and Ventilated Seats</li>\r\n    <li>Adaptive Cruise Control</li>\r\n    <li>360° Parking Sensors</li>\r\n    <li>Lane Departure Warning</li>\r\n    <li>Wireless Charging</li>\r\n    <li>Surround Sound System</li>\r\n</ul>\r\n', '', '2025-01-20 10:06:03', 'publie', 3, '2025-01-20 09:06:03', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-17 12:19:32', 'fr', 'non', 0, '', '', ''),
(20, '', 'Toyota Prado', 'Year:2004/6', 8, 'Toyota Prado (2004/6)\r\nThe Toyota Prado is a rugged and reliable 4x4 vehicle, designed for both on-road and off-road adventures. This 2004/6 model offers a perfect blend of luxury, performance, and durability.\r\nEngine: 3.0L Turbo Diesel or 4.0L V6 (depending on the variant)\r\nTransmission: 5-speed automatic or manual\r\nFuel Economy: Excellent fuel efficiency for its class\r\nInterior: Spacious, with comfortable seating for up to 7 passengers. Features include leather upholstery, climate control, and a modern infotainment system.\r\nSafety Features: Includes airbags, anti-lock braking system (ABS), electronic stability control (ESC), and more to ensure a secure driving experience.\r\nOff-Road Capability: Full-time 4WD system with high and low-range gearing, perfect for tackling rough terrains and difficult conditions.\r\nExterior: Bold and muscular styling, with alloy wheels, a large front grille, and roof rails.\r\nAdditional Features: Power windows, cruise control, parking sensors, and towing capacity make it a versatile and reliable option for families and adventurers alike.', '', '<h4>Features</h4>\r\n<ul class=\"ul-style-2\"> \r\n<li>Bluetooth Connectivity</li> \r\n<li>Touchscreen Navigation System</li> \r\n<li>Premium Leather Upholstery</li> \r\n<li>Panoramic Sunroof</li> \r\n<li>Heated and Ventilated Seats</li> \r\n<li>Adaptive Cruise Control</li> \r\n<li>360° Parking Sensors</li> \r\n<li>Lane Departure Warning</li> \r\n<li>Wireless Charging</li>\r\n <li>Surround Sound System</li> \r\n</ul>', '', '2025-01-20 11:29:50', 'publie', 3, '2025-01-20 11:09:53', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-20 12:09:53', 'fr', 'non', 0, '', '', ''),
(21, '', 'First Class', '', 6, '', '', 'Move with ease and elegance, offering you unparalleled comfort and precision in every step of the way.', '', '2025-01-20 13:50:18', 'publie', 1, '2025-01-20 12:51:34', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-20 13:51:34', 'fr', 'non', 0, '', '', ''),
(22, '', 'Save Drivers', '', 6, '', '', 'Our experienced drivers are ready to accompany your journey with seamless, reliable relocation services.', '', '2025-01-20 14:11:05', 'publie', 1, '2025-01-20 13:11:15', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-20 14:11:15', 'fr', 'non', 0, '', '', ''),
(23, '', 'Outstanding Service! Global Move Solutions!', 'I have been using Global Move Solutions for my relocation needs for over 5 years now. I have never had any issues with their service. Their customer support is always quick to respond and extremely helpful. I highly recommend Global Move Solutions to anyone looking for a trustworthy and efficient moving company.', 4, '', '', 'Jovan Reels', '', '2025-01-21 11:41:34', 'publie', 4, '2025-01-21 10:48:19', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-21 11:48:19', 'fr', 'non', 0, '', '', ''),
(24, '', 'Exceptional Service! Global Move Solutions!', 'We have been using Global Move Solutions for our relocation needs for several years now and have always been satisfied with their service. Their customer support is outstanding and they are always ready to assist with any challenges we face. Their rates are also highly competitive.', 4, '', '', 'Stepanie Hutchkiss', '', '2025-01-21 11:46:03', 'publie', 4, '2025-01-21 10:48:32', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-21 11:48:32', 'fr', 'non', 0, '', '', ''),
(25, '', 'Exceptional Moving Services! Global Move Solutions!', 'Endorsed by industry leaders, Global Move Solutions is the moving service you can rely on. With years of experience, we offer fast, secure, and efficient relocation services worldwide.', 4, '', '', 'Kanesha Keyton', '', '2025-01-21 11:53:44', 'publie', 4, '2025-01-21 10:53:55', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-21 11:53:55', 'fr', 'non', 0, '', '', ''),
(26, '', 'First class services', '', 9, '', '', 'Where luxury meets exceptional care, creating unforgettable moments and exceeding your every expectation.', '', '2025-01-22 13:16:30', 'publie', 1, '2025-01-22 12:16:30', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-22 13:16:22', 'fr', 'non', 0, '', '', ''),
(27, '', '24/7 road assistance', '', 9, '', '', ' Reliable support when you need it most, keeping you on the move with confidence and peace of mind.', '', '2025-01-22 13:52:25', 'publie', 1, '2025-01-22 12:52:25', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-22 13:52:18', 'fr', 'non', 0, '', '', ''),
(28, '', 'Free Pick-Up &amp; Drop-Off', '', 9, '', '', ' Enjoy free pickup and drop-off services, adding an extra layer of ease to your car rental experience.', '', '2025-01-22 13:58:33', 'publie', 1, '2025-01-22 12:58:33', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-22 13:58:23', 'fr', 'non', 0, '', '', ''),
(29, '', 'Quality at Minimum Expense', '', 9, '', '', 'Unlocking affordable brilliance with elevating quality while minimizing costs for maximum value.', '', '2025-01-22 13:54:23', 'publie', 1, '2025-01-22 12:54:23', 'oui', '0000-00-00 00:00:00', 0, 0, 0, 'pos', '2025-01-22 13:54:17', 'fr', 'non', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `spip_auteurs`
--

CREATE TABLE `spip_auteurs` (
  `id_auteur` bigint(21) NOT NULL,
  `nom` text NOT NULL DEFAULT '',
  `bio` text NOT NULL DEFAULT '',
  `email` tinytext NOT NULL DEFAULT '',
  `nom_site` tinytext NOT NULL DEFAULT '',
  `url_site` text NOT NULL DEFAULT '',
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `pass` tinytext NOT NULL DEFAULT '',
  `low_sec` tinytext NOT NULL DEFAULT '',
  `statut` varchar(255) NOT NULL DEFAULT '0',
  `webmestre` varchar(3) NOT NULL DEFAULT 'non',
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pgp` text NOT NULL DEFAULT '',
  `htpass` tinytext NOT NULL DEFAULT '',
  `en_ligne` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `alea_actuel` tinytext DEFAULT NULL,
  `alea_futur` tinytext DEFAULT NULL,
  `prefs` text DEFAULT NULL,
  `cookie_oubli` tinytext DEFAULT NULL,
  `source` varchar(10) NOT NULL DEFAULT 'spip',
  `lang` varchar(10) NOT NULL DEFAULT '',
  `imessage` varchar(3) NOT NULL DEFAULT '',
  `backup_cles` mediumtext NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `spip_auteurs`
--

INSERT INTO `spip_auteurs` (`id_auteur`, `nom`, `bio`, `email`, `nom_site`, `url_site`, `login`, `pass`, `low_sec`, `statut`, `webmestre`, `maj`, `pgp`, `htpass`, `en_ligne`, `alea_actuel`, `alea_futur`, `prefs`, `cookie_oubli`, `source`, `lang`, `imessage`, `backup_cles`) VALUES
(1, 'Webmaster', '', 'support@theclickcreations.com', '', '', 'admin', '$2y$10$p52dKY1b8b35udYVuERHme6zO96Y.zUMKg4KH8PmtgXItI04PQZ.C', '', '0minirezo', 'oui', '2025-01-23 09:04:41', '', '', '2025-01-23 10:04:41', '3664143616788f7f9af8352.58612768', '130161999678dfefacc9cc2.13116602', 'a:2:{s:7:\"couleur\";s:1:\"1\";s:3:\"cnx\";s:0:\"\";}', NULL, 'spip', '', 'oui', 'MUOwOja2B0FByuBH+YSTqAC02Q6xb50fDcN6FgBDgnUBIsoR/tqJwv6nrx8Mv3Yf3QK3FrPmDzlaw0b21l42V5NP86yGucNA286GX1iGEqg7hjgUpfzX2WT3GeDXHvcnyA6QRKKdTjdtAPSaePWTB1lKnBeuaYGVJ/r3dBXZfoAnyaSFwfQ4Ale2/jgKKLRZOQalkmomOalRANON1SWk2L52HBcsP5DwHN130qKkvq2Y0IK36kLM+EXxLseaLOpf+DrCOEMj0dU=');

-- --------------------------------------------------------

--
-- Table structure for table `spip_auteurs_liens`
--

CREATE TABLE `spip_auteurs_liens` (
  `id_auteur` bigint(21) NOT NULL DEFAULT 0,
  `id_objet` bigint(21) NOT NULL DEFAULT 0,
  `objet` varchar(25) NOT NULL DEFAULT '',
  `vu` varchar(6) NOT NULL DEFAULT 'non'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `spip_auteurs_liens`
--

INSERT INTO `spip_auteurs_liens` (`id_auteur`, `id_objet`, `objet`, `vu`) VALUES
(1, 1, 'article', 'non'),
(1, 2, 'article', 'non'),
(1, 3, 'article', 'non'),
(1, 4, 'article', 'non'),
(1, 5, 'article', 'non'),
(1, 6, 'article', 'non'),
(1, 7, 'article', 'non'),
(1, 8, 'article', 'non'),
(1, 9, 'article', 'non'),
(1, 10, 'article', 'non'),
(1, 11, 'article', 'non'),
(1, 12, 'article', 'non'),
(1, 13, 'article', 'non'),
(1, 14, 'article', 'non'),
(1, 15, 'article', 'non'),
(1, 16, 'article', 'non'),
(1, 17, 'article', 'non'),
(1, 18, 'article', 'non'),
(1, 19, 'article', 'non'),
(1, 20, 'article', 'non'),
(1, 21, 'article', 'non'),
(1, 22, 'article', 'non'),
(1, 23, 'article', 'non'),
(1, 24, 'article', 'non'),
(1, 25, 'article', 'non'),
(1, 26, 'article', 'non'),
(1, 27, 'article', 'non'),
(1, 28, 'article', 'non'),
(1, 29, 'article', 'non');

-- --------------------------------------------------------

--
-- Table structure for table `spip_depots`
--

CREATE TABLE `spip_depots` (
  `id_depot` bigint(21) NOT NULL,
  `titre` text NOT NULL DEFAULT '',
  `descriptif` text NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `url_serveur` varchar(255) NOT NULL DEFAULT '',
  `url_brouteur` varchar(255) NOT NULL DEFAULT '',
  `url_archives` varchar(255) NOT NULL DEFAULT '',
  `url_commits` varchar(255) NOT NULL DEFAULT '',
  `xml_paquets` varchar(255) NOT NULL DEFAULT '',
  `sha_paquets` varchar(40) NOT NULL DEFAULT '',
  `nbr_paquets` int(11) NOT NULL DEFAULT 0,
  `nbr_plugins` int(11) NOT NULL DEFAULT 0,
  `nbr_autres` int(11) NOT NULL DEFAULT 0,
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_depots_plugins`
--

CREATE TABLE `spip_depots_plugins` (
  `id_depot` bigint(21) NOT NULL,
  `id_plugin` bigint(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_documents`
--

CREATE TABLE `spip_documents` (
  `id_document` bigint(21) NOT NULL,
  `id_vignette` bigint(21) NOT NULL DEFAULT 0,
  `extension` varchar(10) NOT NULL DEFAULT '',
  `titre` text NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `descriptif` text NOT NULL DEFAULT '',
  `fichier` text NOT NULL DEFAULT '',
  `taille` bigint(20) DEFAULT NULL,
  `largeur` int(11) DEFAULT NULL,
  `hauteur` int(11) DEFAULT NULL,
  `duree` int(11) DEFAULT NULL,
  `media` varchar(10) NOT NULL DEFAULT 'file',
  `mode` varchar(10) NOT NULL DEFAULT 'document',
  `distant` varchar(3) DEFAULT 'non',
  `statut` varchar(10) NOT NULL DEFAULT '0',
  `credits` text NOT NULL DEFAULT '',
  `alt` text NOT NULL DEFAULT '',
  `date_publication` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `brise` tinyint(4) DEFAULT 0,
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `spip_documents`
--

INSERT INTO `spip_documents` (`id_document`, `id_vignette`, `extension`, `titre`, `date`, `descriptif`, `fichier`, `taille`, `largeur`, `hauteur`, `duree`, `media`, `mode`, `distant`, `statut`, `credits`, `alt`, `date_publication`, `brise`, `maj`) VALUES
(2, 0, 'jpg', '', '2025-01-16 09:51:07', '', 'logo/range-rover.jpg', 318897, 1920, 1080, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-16 08:50:00', 0, '2025-01-16 07:51:08'),
(11, 0, 'png', '', '2025-01-16 15:48:30', '', 'logo/team_4_.png', 42372, 1159, 1394, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-16 14:48:09', 0, '2025-01-16 13:48:31'),
(12, 0, 'png', '', '2025-01-16 15:52:49', '', 'logo/team_4_-2.png', 42372, 1159, 1394, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-16 14:52:25', 0, '2025-01-16 13:52:50'),
(13, 0, 'png', '', '2025-01-16 15:54:36', '', 'logo/team_4_-3.png', 42372, 1159, 1394, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-16 14:54:22', 0, '2025-01-16 13:54:37'),
(14, 0, 'png', '', '2025-01-16 15:57:37', '', 'logo/team_4_-4.png', 42372, 1159, 1394, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-16 14:57:18', 0, '2025-01-16 13:57:41'),
(23, 0, 'jpg', '', '2025-01-17 12:11:16', '', 'logo/range-rover-2.jpg', 318897, 1920, 1080, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-17 11:07:55', 0, '2025-01-17 10:11:16'),
(24, 0, 'jpg', '', '2025-01-17 13:15:06', '', 'logo/txl2018-2.jpg', 101097, 812, 550, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-20 10:06:03', 0, '2025-01-20 09:06:04'),
(26, 0, 'jpg', '', '2025-01-20 13:03:13', '', 'logo/prado-2.jpg', 7723, 254, 148, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-20 11:29:50', 0, '2025-01-20 11:03:14'),
(27, 0, 'jpg', '', '2025-01-20 13:38:41', '', 'logo/range-rover-3.jpg', 191376, 1920, 1080, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-16 09:00:35', 0, '2025-01-20 11:38:42'),
(28, 0, 'jpg', '', '2025-01-20 13:40:50', '', 'logo/range-rover_1_.jpg', 97445, 1920, 1080, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-16 09:02:03', 0, '2025-01-20 11:40:51'),
(29, 0, 'jpg', '', '2025-01-20 13:48:06', '', 'logo/range-rover_2_.jpg', 73652, 1920, 1080, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-16 09:03:21', 0, '2025-01-20 11:48:07'),
(30, 0, 'jpg', '', '2025-01-20 14:09:39', '', 'logo/tucson_2010_1_.jpg', 9828, 284, 177, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-17 09:34:40', 0, '2025-01-22 12:04:55'),
(31, 0, 'jpg', '', '2025-01-20 14:11:56', '', 'logo/range-rover_4_.jpg', 258766, 1920, 1080, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-17 09:43:24', 0, '2025-01-20 12:11:56'),
(32, 0, 'jpg', '', '2025-01-20 14:14:01', '', 'logo/range-rover_5_.jpg', 107352, 1920, 1080, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-17 09:45:28', 0, '2025-01-20 12:14:02'),
(33, 0, 'jpg', '', '2025-01-20 14:15:32', '', 'logo/range-rover_6_.jpg', 118549, 1920, 1080, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-17 09:48:35', 0, '2025-01-20 12:15:32'),
(34, 0, 'jpg', '', '2025-01-20 14:17:46', '', 'logo/range-rover_7_.jpg', 97998, 1920, 1080, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-17 09:50:21', 0, '2025-01-20 12:17:46'),
(35, 0, 'jpg', '', '2025-01-20 14:19:44', '', 'logo/range-rover_8_.jpg', 87648, 1920, 1080, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-17 09:53:33', 0, '2025-01-20 12:19:44'),
(36, 0, 'jpg', '', '2025-01-20 14:21:09', '', 'logo/range-rover_9_.jpg', 74813, 1920, 1080, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-17 09:58:19', 0, '2025-01-20 12:21:09'),
(37, 0, 'jpg', '', '2025-01-20 14:51:34', '', 'logo/1.jpg', 186588, 1920, 1100, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-20 13:50:18', 0, '2025-01-21 15:04:19'),
(38, 0, 'jpg', '', '2025-01-20 15:11:15', '', 'logo/2-2.jpg', 203227, 1920, 1100, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-20 14:11:05', 0, '2025-01-21 14:15:53'),
(39, 0, 'jpg', '', '2025-01-21 12:41:50', '', 'logo/3-2.jpg', 28213, 500, 750, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-21 11:41:34', 0, '2025-01-21 10:41:51'),
(40, 0, 'jpg', '', '2025-01-21 12:47:14', '', 'logo/3_1_.jpg', 42834, 500, 750, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-21 11:46:03', 0, '2025-01-21 10:47:14'),
(41, 0, 'jpg', '', '2025-01-21 12:53:54', '', 'logo/3_2_.jpg', 51592, 500, 750, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-21 11:53:44', 0, '2025-01-21 10:53:55'),
(45, 0, 'png', '', '2025-01-21 17:17:57', '', 'logo/car-2.png', 1004391, 1500, 778, NULL, 'image', 'logoon', 'non', 'publie', '', '', '2025-01-16 08:06:12', 0, '2025-01-22 11:45:37'),
(46, 0, 'png', '', '2025-01-22 14:35:02', '', 'logo/car-3.png', 721590, 1228, 580, NULL, 'image', 'logoon', 'non', 'prop', '', '', '0000-00-00 00:00:00', 0, '2025-01-22 12:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `spip_documents_liens`
--

CREATE TABLE `spip_documents_liens` (
  `id_document` bigint(21) NOT NULL DEFAULT 0,
  `id_objet` bigint(21) NOT NULL DEFAULT 0,
  `objet` varchar(25) NOT NULL DEFAULT '',
  `vu` enum('non','oui') NOT NULL DEFAULT 'non',
  `rang_lien` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `spip_documents_liens`
--

INSERT INTO `spip_documents_liens` (`id_document`, `id_objet`, `objet`, `vu`, `rang_lien`) VALUES
(2, 2, 'article', 'non', 0),
(11, 6, 'article', 'non', 0),
(12, 7, 'article', 'non', 0),
(13, 8, 'article', 'non', 0),
(14, 9, 'article', 'non', 0),
(23, 18, 'article', 'non', 0),
(24, 19, 'article', 'non', 0),
(26, 20, 'article', 'non', 0),
(27, 3, 'article', 'non', 0),
(28, 4, 'article', 'non', 0),
(29, 5, 'article', 'non', 0),
(30, 11, 'article', 'non', 0),
(31, 12, 'article', 'non', 0),
(32, 13, 'article', 'non', 0),
(33, 14, 'article', 'non', 0),
(34, 15, 'article', 'non', 0),
(35, 16, 'article', 'non', 0),
(36, 17, 'article', 'non', 0),
(37, 21, 'article', 'non', 0),
(38, 22, 'article', 'non', 0),
(39, 23, 'article', 'non', 0),
(40, 24, 'article', 'non', 0),
(41, 25, 'article', 'non', 0),
(45, 1, 'article', 'non', 0),
(46, 9, 'rubrique', 'non', 0);

-- --------------------------------------------------------

--
-- Table structure for table `spip_forum`
--

CREATE TABLE `spip_forum` (
  `id_forum` bigint(21) NOT NULL,
  `id_objet` bigint(21) NOT NULL DEFAULT 0,
  `objet` varchar(25) NOT NULL DEFAULT '',
  `id_parent` bigint(21) NOT NULL DEFAULT 0,
  `id_thread` bigint(21) NOT NULL DEFAULT 0,
  `date_heure` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_thread` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `titre` text NOT NULL DEFAULT '',
  `texte` mediumtext NOT NULL DEFAULT '',
  `auteur` text NOT NULL DEFAULT '',
  `email_auteur` text NOT NULL DEFAULT '',
  `nom_site` text NOT NULL DEFAULT '',
  `url_site` text NOT NULL DEFAULT '',
  `statut` varchar(8) NOT NULL DEFAULT '0',
  `ip` varchar(40) NOT NULL DEFAULT '',
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_auteur` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_groupes_mots`
--

CREATE TABLE `spip_groupes_mots` (
  `id_groupe` bigint(21) NOT NULL,
  `titre` text NOT NULL DEFAULT '',
  `descriptif` text NOT NULL DEFAULT '',
  `texte` longtext NOT NULL DEFAULT '',
  `unseul` varchar(3) NOT NULL DEFAULT '',
  `obligatoire` varchar(3) NOT NULL DEFAULT '',
  `tables_liees` text NOT NULL DEFAULT '',
  `minirezo` varchar(3) NOT NULL DEFAULT '',
  `comite` varchar(3) NOT NULL DEFAULT '',
  `forum` varchar(3) NOT NULL DEFAULT '',
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_jobs`
--

CREATE TABLE `spip_jobs` (
  `id_job` bigint(21) NOT NULL,
  `descriptif` text NOT NULL DEFAULT '',
  `fonction` varchar(255) NOT NULL,
  `args` longblob NOT NULL DEFAULT '',
  `md5args` char(32) NOT NULL DEFAULT '',
  `inclure` varchar(255) NOT NULL,
  `priorite` smallint(6) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `spip_jobs`
--

INSERT INTO `spip_jobs` (`id_job`, `descriptif`, `fonction`, `args`, `md5args`, `inclure`, `priorite`, `date`, `status`) VALUES
(70, 'CRON task optimiser (every 172800 s)', 'optimiser', 0x613a313a7b693a303b693a313733373531313035393b7d, 'b3b94496d30a0c6807128b937d244ea2', 'genie/', -4, '2025-01-24 02:57:39', 1),
(76, 'Tâche CRON svp_actualiser_depots (toutes les 21600 s)', 'svp_actualiser_depots', 0x613a313a7b693a303b693a313733373631353531343b7d, '65ea917d288d649972c5c35337897c5e', 'genie/', 0, '2025-01-23 13:58:34', 1),
(77, 'CRON task queue_watch (every 86400 s)', 'queue_watch', 0x613a313a7b693a303b693a313733373632303238333b7d, 'a1db2b6a6b3fb21a840a05295c8ec4e6', 'genie/', 0, '2025-01-24 09:18:03', 1),
(78, 'CRON task medias_nettoyer_repertoire_upload (every 86400 s)', 'medias_nettoyer_repertoire_upload', 0x613a313a7b693a303b693a313733373632303238343b7d, '2a09360f02d4add81f57ae5674f0af31', 'genie/', 0, '2025-01-24 09:18:04', 1),
(79, 'CRON task bigup_nettoyer_repertoire_upload (every 86400 s)', 'bigup_nettoyer_repertoire_upload', 0x613a313a7b693a303b693a313733373632303238343b7d, '2a09360f02d4add81f57ae5674f0af31', 'genie/', 0, '2025-01-24 09:18:04', 1),
(80, 'CRON task revisions_optimiser_revisions (every 86400 s)', 'revisions_optimiser_revisions', 0x613a313a7b693a303b693a313733373632303238373b7d, '75d1f42a2425c357d897efe4946d0d46', 'genie/', 0, '2025-01-24 09:18:07', 1),
(81, 'Tâche CRON mise_a_jour (toutes les 259200 s)', 'mise_a_jour', 0x613a313a7b693a303b693a313733373632303238373b7d, '75d1f42a2425c357d897efe4946d0d46', 'genie/', 0, '2025-01-26 09:18:07', 1),
(82, 'Tâche CRON maintenance (toutes les 7200 s)', 'maintenance', 0x613a313a7b693a303b693a313733373632323731373b7d, 'a84a2892993edf89a7c1e04553406a27', 'genie/', 0, '2025-01-23 11:58:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spip_jobs_liens`
--

CREATE TABLE `spip_jobs_liens` (
  `id_job` bigint(21) NOT NULL DEFAULT 0,
  `id_objet` bigint(21) NOT NULL DEFAULT 0,
  `objet` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_meta`
--

CREATE TABLE `spip_meta` (
  `nom` varchar(255) NOT NULL,
  `valeur` text DEFAULT '',
  `impt` enum('non','oui') NOT NULL DEFAULT 'oui',
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `spip_meta`
--

INSERT INTO `spip_meta` (`nom`, `valeur`, `impt`, `maj`) VALUES
('accepter_inscriptions', 'non', 'oui', '2025-01-15 11:45:16'),
('accepter_visiteurs', 'non', 'oui', '2025-01-15 11:45:16'),
('activer_captures_referers', 'non', 'oui', '2025-01-15 11:45:21'),
('activer_logos', 'oui', 'oui', '2025-01-15 11:45:14'),
('activer_logos_survol', 'non', 'oui', '2025-01-15 11:45:14'),
('activer_referers', 'oui', 'oui', '2025-01-15 11:45:21'),
('activer_sites', 'non', 'oui', '2025-01-15 11:45:20'),
('activer_statistiques', 'non', 'oui', '2025-01-15 11:45:21'),
('activer_syndic', 'oui', 'oui', '2025-01-15 11:45:21'),
('adresse_neuf', '', 'oui', '2025-01-15 11:45:17'),
('adresse_site', 'http://localhost/globalmovesolutions', 'non', '2025-01-15 11:45:30'),
('adresse_suivi', '', 'oui', '2025-01-15 11:45:16'),
('adresse_suivi_inscription', '', 'oui', '2025-01-15 11:45:17'),
('alea_ephemere', 'cf68d6cd23bf476b17b8a1a2eba7b684', 'non', '2025-01-23 06:59:13'),
('alea_ephemere_ancien', '4ba5067dd4cf8e48d96260c1bd2e10e0', 'non', '2025-01-23 06:59:12'),
('alea_ephemere_date', '1737615553', 'non', '2025-01-23 06:59:13'),
('articles_chapeau', 'non', 'oui', '2025-01-15 11:45:15'),
('articles_descriptif', 'oui', 'oui', '2025-01-17 10:39:53'),
('articles_modif', 'non', 'oui', '2025-01-15 11:45:15'),
('articles_mots', 'non', 'oui', '2025-01-15 11:45:20'),
('articles_ps', 'non', 'oui', '2025-01-15 11:45:15'),
('articles_redac', 'non', 'oui', '2025-01-15 11:45:15'),
('articles_redirection', 'non', 'oui', '2025-01-15 11:45:15'),
('articles_soustitre', 'oui', 'oui', '2025-01-15 11:49:23'),
('articles_surtitre', 'non', 'oui', '2025-01-15 11:45:14'),
('articles_texte', 'oui', 'oui', '2025-01-15 11:45:15'),
('articles_urlref', 'non', 'oui', '2025-01-15 11:45:15'),
('auto_compress_css', 'non', 'oui', '2025-01-15 11:45:21'),
('auto_compress_http', 'non', 'oui', '2025-01-15 11:45:18'),
('auto_compress_js', 'non', 'oui', '2025-01-15 11:45:21'),
('barre_outils_public', 'oui', 'oui', '2025-01-15 11:45:20'),
('bigup', 'a:1:{s:13:\"max_file_size\";i:40;}', 'oui', '2025-01-15 11:45:39'),
('bigup_base_version', '1.0.1', 'oui', '2025-01-15 11:45:39'),
('cache_signature', 'fb177cd54a73cba3b6f819235d0d5f2ea2bd4b7551a4934278cbb79f1beb901c', 'oui', '2025-01-15 11:47:47'),
('charset', 'utf-8', 'oui', '2025-01-15 11:45:01'),
('charset_collation_sql_base', 'utf8_general_ci', 'non', '2025-01-15 11:43:56'),
('charset_sql_base', 'utf8', 'non', '2025-01-15 11:43:56'),
('charset_sql_connexion', 'utf8', 'non', '2025-01-15 11:43:57'),
('compagnon', 'a:2:{s:6:\"config\";a:1:{s:7:\"activer\";s:3:\"oui\";}i:1;a:5:{s:7:\"accueil\";i:1;s:19:\"accueil_publication\";i:1;s:18:\"accueil_configurer\";i:1;s:8:\"rubrique\";i:1;s:17:\"article_redaction\";i:1;}}', 'oui', '2025-01-16 07:06:07'),
('compagnon_base_version', '1.0.0', 'oui', '2025-01-15 11:45:30'),
('config_precise_groupes', 'non', 'oui', '2025-01-15 11:45:20'),
('creer_preview', 'non', 'non', '2025-01-15 11:45:30'),
('derniere_maj_notifiee', '4.3.6', 'oui', '2025-01-20 07:16:06'),
('derniere_modif', '1737550849', 'oui', '2025-01-22 13:00:49'),
('derniere_modif_article', '1737550713', 'oui', '2025-01-22 12:58:33'),
('derniere_modif_document', '1737547496', 'oui', '2025-01-22 12:04:56'),
('derniere_modif_rubrique', '1737550849', 'oui', '2025-01-22 13:00:49'),
('descriptif_site', '', 'oui', '2025-01-15 11:45:13'),
('dir_img', 'IMG/', 'oui', '2025-01-15 11:45:17'),
('documents_date', 'non', 'oui', '2025-01-15 11:45:22'),
('documents_objets', 'spip_articles', 'oui', '2025-01-15 11:45:22'),
('email_envoi', '', 'oui', '2025-01-15 11:45:18'),
('email_webmaster', 'support@theclickcreations.com', 'oui', '2025-01-15 11:45:10'),
('formats_documents_forum', '', 'oui', '2025-01-15 11:45:19'),
('forums_afficher_barre', 'oui', 'oui', '2025-01-15 11:45:19'),
('forums_forcer_previsu', 'oui', 'oui', '2025-01-15 11:45:19'),
('forums_publics', 'posteriori', 'oui', '2025-01-15 11:45:19'),
('forums_texte', 'oui', 'oui', '2025-01-15 11:45:18'),
('forums_titre', 'oui', 'oui', '2025-01-15 11:45:18'),
('forums_urlref', 'non', 'oui', '2025-01-15 11:45:18'),
('forum_base_version', '1.2.2', 'oui', '2025-01-15 11:45:31'),
('forum_prive', 'oui', 'oui', '2025-01-15 11:45:19'),
('forum_prive_admin', 'non', 'oui', '2025-01-15 11:45:20'),
('forum_prive_objets', 'oui', 'oui', '2025-01-15 11:45:19'),
('gerer_trad', 'non', 'oui', '2025-01-15 11:45:17'),
('info_maj_spip', '4.3.5|<a class=\"info_maj_spip\" href=\"https://www.spip.net/fr_update\" title=\"4.3.6\">La mise à jour 4.3.6 de SPIP est disponible</a>', 'non', '2025-01-23 08:18:07'),
('jours_neuf', '', 'oui', '2025-01-15 11:45:17'),
('langues_multilingue', '', 'oui', '2025-01-15 11:45:17'),
('langues_proposees', 'ar,ast,ay,bg,br,bs,ca,co,cpf,cpf_hat,cs,da,de,en,eo,es,eu,fa,fon,fr,fr_fem,fr_tu,gl,he,hr,hu,id,it,it_fem,ja,km,lb,my,nl,oc_auv,oc_gsc,oc_lms,oc_lnc,oc_ni,oc_ni_la,oc_ni_mis,oc_prv,oc_va,pl,pt,pt_br,ro,ru,sk,sv,tr,uk,vi,zh', 'non', '2025-01-15 11:45:13'),
('langues_utilisees', 'fr', 'oui', '2025-01-15 11:45:25'),
('langue_site', 'fr', 'non', '2025-01-15 11:45:13'),
('medias_base_version', '1.8.0', 'oui', '2025-01-15 11:45:41'),
('moderation_sites', 'non', 'oui', '2025-01-15 11:45:21'),
('mots_base_version', '2.1.1', 'oui', '2025-01-15 11:45:33'),
('mots_cles_forums', 'non', 'oui', '2025-01-15 11:45:18'),
('multi_rubriques', 'non', 'oui', '2025-01-15 11:45:17'),
('multi_secteurs', 'non', 'oui', '2025-01-15 11:45:17'),
('nom_site', 'My SPIP site', 'oui', '2025-01-15 11:45:13'),
('nouvelle_install', '1', 'non', '2025-01-15 11:43:58'),
('objets_versions', 'a:0:{}', 'oui', '2025-01-15 11:45:33'),
('optimiser_table', 'i:4;', 'oui', '2025-01-22 07:25:01'),
('pcre_u', 'u', 'oui', '2025-01-15 11:45:01'),
('plugin', 'a:71:{s:4:\"SPIP\";a:5:{s:3:\"nom\";s:4:\"SPIP\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"4.3.5\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:0:\"\";}s:4:\"AIDE\";a:5:{s:3:\"dir\";s:4:\"aide\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:9:\"Aide SPIP\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"3.2.5\";}s:10:\"ARCHIVISTE\";a:5:{s:3:\"dir\";s:10:\"archiviste\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:10:\"Archiviste\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"2.2.3\";}s:9:\"COMPAGNON\";a:5:{s:3:\"dir\";s:9:\"compagnon\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:9:\"Compagnon\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"3.1.5\";}s:4:\"DUMP\";a:5:{s:3:\"dir\";s:4:\"dump\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:4:\"Dump\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"2.1.4\";}s:6:\"IMAGES\";a:5:{s:3:\"dir\";s:14:\"filtres_images\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:6:\"Images\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"4.2.2\";}s:5:\"FORUM\";a:5:{s:3:\"dir\";s:5:\"forum\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:5:\"Forum\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:6:\"3.1.11\";}s:8:\"MEDIABOX\";a:5:{s:3:\"dir\";s:8:\"mediabox\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:8:\"MediaBox\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"3.1.9\";}s:4:\"MOTS\";a:5:{s:3:\"dir\";s:4:\"mots\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:4:\"Mots\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"4.2.2\";}s:4:\"PLAN\";a:5:{s:3:\"dir\";s:4:\"plan\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:35:\"Plan du site dans l’espace privé\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"4.1.4\";}s:11:\"PORTE_PLUME\";a:5:{s:3:\"dir\";s:11:\"porte_plume\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:11:\"Porte plume\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"3.1.8\";}s:9:\"REVISIONS\";a:5:{s:3:\"dir\";s:9:\"revisions\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:10:\"Révisions\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"3.1.9\";}s:8:\"SAFEHTML\";a:5:{s:3:\"dir\";s:8:\"safehtml\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:8:\"SafeHTML\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"3.1.3\";}s:5:\"SITES\";a:5:{s:3:\"dir\";s:5:\"sites\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:5:\"Sites\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"4.2.2\";}s:5:\"STATS\";a:5:{s:3:\"dir\";s:12:\"statistiques\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:12:\"Statistiques\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"3.1.9\";}s:2:\"TW\";a:5:{s:3:\"dir\";s:9:\"textwheel\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:19:\"TextWheel pour SPIP\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"3.2.1\";}s:4:\"URLS\";a:5:{s:3:\"dir\";s:13:\"urls_etendues\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:13:\"Urls Etendues\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"4.1.6\";}s:23:\"SQUELETTES_PAR_RUBRIQUE\";a:5:{s:3:\"dir\";s:34:\"auto/squelettes_par_rubrique-2.2.0\";s:8:\"dir_type\";s:12:\"_DIR_PLUGINS\";s:3:\"nom\";s:23:\"Squelettes par Rubrique\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"2.2.0\";}s:10:\"ITERATEURS\";a:5:{s:3:\"nom\";s:10:\"iterateurs\";s:7:\"version\";s:5:\"1.0.6\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:18:\"procure:iterateurs\";}s:5:\"QUEUE\";a:5:{s:3:\"nom\";s:5:\"queue\";s:7:\"version\";s:5:\"0.6.8\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:13:\"procure:queue\";}s:6:\"JQUERY\";a:5:{s:3:\"nom\";s:6:\"jquery\";s:7:\"version\";s:5:\"3.6.4\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:14:\"procure:jquery\";}s:3:\"PHP\";a:5:{s:3:\"nom\";s:3:\"php\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:11:\"procure:php\";}s:8:\"PHP:CORE\";a:5:{s:3:\"nom\";s:8:\"php:Core\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:16:\"procure:php:Core\";}s:10:\"PHP:BCMATH\";a:5:{s:3:\"nom\";s:10:\"php:bcmath\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:18:\"procure:php:bcmath\";}s:12:\"PHP:CALENDAR\";a:5:{s:3:\"nom\";s:12:\"php:calendar\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:20:\"procure:php:calendar\";}s:9:\"PHP:CTYPE\";a:5:{s:3:\"nom\";s:9:\"php:ctype\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:17:\"procure:php:ctype\";}s:8:\"PHP:DATE\";a:5:{s:3:\"nom\";s:8:\"php:date\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:16:\"procure:php:date\";}s:10:\"PHP:FILTER\";a:5:{s:3:\"nom\";s:10:\"php:filter\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:18:\"procure:php:filter\";}s:8:\"PHP:HASH\";a:5:{s:3:\"nom\";s:8:\"php:hash\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:16:\"procure:php:hash\";}s:9:\"PHP:ICONV\";a:5:{s:3:\"nom\";s:9:\"php:iconv\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:17:\"procure:php:iconv\";}s:8:\"PHP:JSON\";a:5:{s:3:\"nom\";s:8:\"php:json\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:16:\"procure:php:json\";}s:7:\"PHP:SPL\";a:5:{s:3:\"nom\";s:7:\"php:SPL\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:15:\"procure:php:SPL\";}s:8:\"PHP:PCRE\";a:5:{s:3:\"nom\";s:8:\"php:pcre\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:16:\"procure:php:pcre\";}s:12:\"PHP:READLINE\";a:5:{s:3:\"nom\";s:12:\"php:readline\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:20:\"procure:php:readline\";}s:14:\"PHP:REFLECTION\";a:5:{s:3:\"nom\";s:14:\"php:Reflection\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:22:\"procure:php:Reflection\";}s:11:\"PHP:SESSION\";a:5:{s:3:\"nom\";s:11:\"php:session\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:19:\"procure:php:session\";}s:12:\"PHP:STANDARD\";a:5:{s:3:\"nom\";s:12:\"php:standard\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:20:\"procure:php:standard\";}s:11:\"PHP:MYSQLND\";a:5:{s:3:\"nom\";s:11:\"php:mysqlnd\";s:7:\"version\";s:14:\"mysqlnd 8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:19:\"procure:php:mysqlnd\";}s:13:\"PHP:TOKENIZER\";a:5:{s:3:\"nom\";s:13:\"php:tokenizer\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:21:\"procure:php:tokenizer\";}s:7:\"PHP:ZIP\";a:5:{s:3:\"nom\";s:7:\"php:zip\";s:7:\"version\";s:6:\"1.19.5\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:15:\"procure:php:zip\";}s:8:\"PHP:ZLIB\";a:5:{s:3:\"nom\";s:8:\"php:zlib\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:16:\"procure:php:zlib\";}s:10:\"PHP:LIBXML\";a:5:{s:3:\"nom\";s:10:\"php:libxml\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:18:\"procure:php:libxml\";}s:7:\"PHP:DOM\";a:5:{s:3:\"nom\";s:7:\"php:dom\";s:7:\"version\";s:8:\"20031129\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:15:\"procure:php:dom\";}s:7:\"PHP:PDO\";a:5:{s:3:\"nom\";s:7:\"php:PDO\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:15:\"procure:php:PDO\";}s:7:\"PHP:BZ2\";a:5:{s:3:\"nom\";s:7:\"php:bz2\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:15:\"procure:php:bz2\";}s:13:\"PHP:SIMPLEXML\";a:5:{s:3:\"nom\";s:13:\"php:SimpleXML\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:21:\"procure:php:SimpleXML\";}s:7:\"PHP:XML\";a:5:{s:3:\"nom\";s:7:\"php:xml\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:15:\"procure:php:xml\";}s:13:\"PHP:XMLREADER\";a:5:{s:3:\"nom\";s:13:\"php:xmlreader\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:21:\"procure:php:xmlreader\";}s:13:\"PHP:XMLWRITER\";a:5:{s:3:\"nom\";s:13:\"php:xmlwriter\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:21:\"procure:php:xmlwriter\";}s:18:\"PHP:APACHE2HANDLER\";a:5:{s:3:\"nom\";s:18:\"php:apache2handler\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:26:\"procure:php:apache2handler\";}s:11:\"PHP:OPENSSL\";a:5:{s:3:\"nom\";s:11:\"php:openssl\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:19:\"procure:php:openssl\";}s:8:\"PHP:CURL\";a:5:{s:3:\"nom\";s:8:\"php:curl\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:16:\"procure:php:curl\";}s:12:\"PHP:FILEINFO\";a:5:{s:3:\"nom\";s:12:\"php:fileinfo\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:20:\"procure:php:fileinfo\";}s:6:\"PHP:GD\";a:5:{s:3:\"nom\";s:6:\"php:gd\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:14:\"procure:php:gd\";}s:11:\"PHP:GETTEXT\";a:5:{s:3:\"nom\";s:11:\"php:gettext\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:19:\"procure:php:gettext\";}s:12:\"PHP:MBSTRING\";a:5:{s:3:\"nom\";s:12:\"php:mbstring\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:20:\"procure:php:mbstring\";}s:8:\"PHP:EXIF\";a:5:{s:3:\"nom\";s:8:\"php:exif\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:16:\"procure:php:exif\";}s:10:\"PHP:MYSQLI\";a:5:{s:3:\"nom\";s:10:\"php:mysqli\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:18:\"procure:php:mysqli\";}s:13:\"PHP:PDO_MYSQL\";a:5:{s:3:\"nom\";s:13:\"php:pdo_mysql\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:21:\"procure:php:pdo_mysql\";}s:14:\"PHP:PDO_SQLITE\";a:5:{s:3:\"nom\";s:14:\"php:pdo_sqlite\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:22:\"procure:php:pdo_sqlite\";}s:10:\"PHP:SODIUM\";a:5:{s:3:\"nom\";s:10:\"php:sodium\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:18:\"procure:php:sodium\";}s:8:\"PHP:PHAR\";a:5:{s:3:\"nom\";s:8:\"php:Phar\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:16:\"procure:php:Phar\";}s:7:\"PHP:FTP\";a:5:{s:3:\"nom\";s:7:\"php:ftp\";s:7:\"version\";s:6:\"8.0.30\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:14:\"_DIR_RESTREINT\";s:3:\"dir\";s:15:\"procure:php:ftp\";}s:7:\"CSSTIDY\";a:5:{s:3:\"nom\";s:7:\"csstidy\";s:7:\"version\";s:6:\"1.15.1\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"dir\";s:27:\"compresseur/procure:csstidy\";}s:7:\"MINIDOC\";a:5:{s:3:\"nom\";s:7:\"minidoc\";s:7:\"version\";s:5:\"1.0.3\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"dir\";s:22:\"medias/procure:minidoc\";}s:5:\"ORDOC\";a:5:{s:3:\"nom\";s:5:\"ordoc\";s:7:\"version\";s:5:\"1.1.2\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"dir\";s:20:\"medias/procure:ordoc\";}s:4:\"MEJS\";a:5:{s:3:\"nom\";s:4:\"mejs\";s:7:\"version\";s:5:\"4.2.7\";s:4:\"etat\";s:1:\"?\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"dir\";s:19:\"medias/procure:mejs\";}s:5:\"BIGUP\";a:5:{s:3:\"dir\";s:5:\"bigup\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:10:\"Big Upload\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:6:\"3.2.14\";}s:11:\"COMPRESSEUR\";a:5:{s:3:\"dir\";s:11:\"compresseur\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:11:\"Compresseur\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"2.1.7\";}s:6:\"MEDIAS\";a:5:{s:3:\"dir\";s:6:\"medias\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:6:\"Medias\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:5:\"4.3.4\";}s:3:\"SVP\";a:5:{s:3:\"dir\";s:3:\"svp\";s:8:\"dir_type\";s:17:\"_DIR_PLUGINS_DIST\";s:3:\"nom\";s:3:\"SVP\";s:4:\"etat\";s:6:\"stable\";s:7:\"version\";s:6:\"3.1.11\";}}', 'non', '2025-01-15 11:55:46'),
('plugins_interessants', 'a:21:{s:34:\"auto/squelettes_par_rubrique-2.2.0\";i:29;s:4:\"aide\";i:30;s:10:\"archiviste\";i:30;s:5:\"bigup\";i:30;s:9:\"compagnon\";i:30;s:11:\"compresseur\";i:30;s:4:\"dump\";i:30;s:14:\"filtres_images\";i:30;s:5:\"forum\";i:30;s:8:\"mediabox\";i:30;s:6:\"medias\";i:30;s:4:\"mots\";i:30;s:4:\"plan\";i:30;s:11:\"porte_plume\";i:30;s:9:\"revisions\";i:30;s:8:\"safehtml\";i:30;s:5:\"sites\";i:30;s:12:\"statistiques\";i:30;s:3:\"svp\";i:30;s:9:\"textwheel\";i:30;s:13:\"urls_etendues\";i:30;}', 'oui', '2025-01-15 11:55:47'),
('plugin_attente', 'a:0:{}', 'oui', '2025-01-15 11:45:25'),
('plugin_installes', 'a:10:{i:0;s:9:\"compagnon\";i:1;s:5:\"forum\";i:2;s:4:\"mots\";i:3;s:9:\"revisions\";i:4;s:5:\"sites\";i:5;s:12:\"statistiques\";i:6;s:13:\"urls_etendues\";i:7;s:5:\"bigup\";i:8;s:6:\"medias\";i:9;s:3:\"svp\";}', 'oui', '2025-01-15 11:45:42'),
('post_dates', 'non', 'oui', '2025-01-15 11:45:15'),
('prevenir_auteurs', 'non', 'oui', '2025-01-15 11:45:16'),
('preview', ',0minirezo,1comite,', 'oui', '2025-01-15 11:45:17'),
('proposer_sites', '0', 'oui', '2025-01-15 11:45:21'),
('quoi_de_neuf', 'non', 'oui', '2025-01-15 11:45:17'),
('revisions_base_version', '1.2.0', 'oui', '2025-01-15 11:45:34'),
('rubriques_descriptif', 'non', 'oui', '2025-01-15 11:45:16'),
('rubriques_texte', 'oui', 'oui', '2025-01-15 11:45:16'),
('secret_du_site', 'U3GDqG0n9dE/HxQWeNEN8zBBgwrPMW0NA687aWbjXjk=', 'oui', '2025-01-15 11:47:59'),
('sites_base_version', '1.2.0', 'oui', '2025-01-15 11:45:37'),
('slogan_site', '', 'oui', '2025-01-15 11:45:13'),
('stats_base_version', '1.0.1', 'oui', '2025-01-15 11:45:37'),
('suivi_edito', 'non', 'oui', '2025-01-15 11:45:16'),
('svp_base_version', '0.6.2', 'oui', '2025-01-15 11:45:42'),
('syndication_integrale', 'oui', 'oui', '2025-01-15 11:45:17'),
('taille_preview', '150', 'non', '2025-01-15 11:45:30'),
('type_urls', 'page', 'oui', '2025-01-15 11:45:18'),
('urls_base_version', '2.0.1', 'oui', '2025-01-15 11:45:38'),
('url_statique_ressources', '', 'oui', '2025-01-15 11:45:22'),
('version_html_max', 'html4', 'oui', '2025-01-15 11:45:18'),
('version_installee', '2022022303', 'non', '2025-01-15 11:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `spip_mots`
--

CREATE TABLE `spip_mots` (
  `id_mot` bigint(21) NOT NULL,
  `titre` text NOT NULL DEFAULT '',
  `descriptif` text NOT NULL DEFAULT '',
  `texte` longtext NOT NULL DEFAULT '',
  `id_groupe` bigint(21) NOT NULL DEFAULT 0,
  `type` text NOT NULL DEFAULT '',
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_mots_liens`
--

CREATE TABLE `spip_mots_liens` (
  `id_mot` bigint(21) NOT NULL DEFAULT 0,
  `id_objet` bigint(21) NOT NULL DEFAULT 0,
  `objet` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_paquets`
--

CREATE TABLE `spip_paquets` (
  `id_paquet` bigint(21) NOT NULL,
  `id_plugin` bigint(21) NOT NULL,
  `prefixe` varchar(48) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `version` varchar(24) NOT NULL DEFAULT '',
  `version_base` varchar(24) NOT NULL DEFAULT '',
  `compatibilite_spip` varchar(24) NOT NULL DEFAULT '',
  `branches_spip` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL DEFAULT '',
  `auteur` text NOT NULL DEFAULT '',
  `credit` text NOT NULL DEFAULT '',
  `licence` text NOT NULL DEFAULT '',
  `copyright` text NOT NULL DEFAULT '',
  `lien_doc` text NOT NULL DEFAULT '',
  `lien_demo` text NOT NULL DEFAULT '',
  `lien_dev` text NOT NULL DEFAULT '',
  `etat` varchar(16) NOT NULL DEFAULT '',
  `etatnum` int(1) NOT NULL DEFAULT 0,
  `dependances` text NOT NULL DEFAULT '',
  `procure` text NOT NULL DEFAULT '',
  `date_crea` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modif` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_depot` bigint(21) NOT NULL DEFAULT 0,
  `nom_archive` varchar(255) NOT NULL DEFAULT '',
  `nbo_archive` int(11) NOT NULL DEFAULT 0,
  `maj_archive` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `src_archive` varchar(255) NOT NULL DEFAULT '',
  `traductions` text NOT NULL DEFAULT '',
  `actif` varchar(3) NOT NULL DEFAULT 'non',
  `installe` varchar(3) NOT NULL DEFAULT 'non',
  `recent` int(2) NOT NULL DEFAULT 0,
  `maj_version` varchar(255) NOT NULL DEFAULT '',
  `superieur` varchar(3) NOT NULL DEFAULT 'non',
  `obsolete` varchar(3) NOT NULL DEFAULT 'non',
  `attente` varchar(3) NOT NULL DEFAULT 'non',
  `constante` varchar(30) NOT NULL DEFAULT '',
  `signature` varchar(32) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `spip_paquets`
--

INSERT INTO `spip_paquets` (`id_paquet`, `id_plugin`, `prefixe`, `logo`, `version`, `version_base`, `compatibilite_spip`, `branches_spip`, `description`, `auteur`, `credit`, `licence`, `copyright`, `lien_doc`, `lien_demo`, `lien_dev`, `etat`, `etatnum`, `dependances`, `procure`, `date_crea`, `date_modif`, `id_depot`, `nom_archive`, `nbo_archive`, `maj_archive`, `src_archive`, `traductions`, `actif`, `installe`, `recent`, `maj_version`, `superieur`, `obsolete`, `attente`, `constante`, `signature`) VALUES
(1, 1, 'SQUELETTES_PAR_RUBRIQUE', 'squelettes_par_rubrique-32.png', '002.002.000', '', '[4.1.0;4.*]', '4.1,4.2,4.3', '<multi>[ar]دعم الصفحات النموذجية التي تملك لاحقة رقمية و/او لاحقة رمز لغة[de]Unterstützung der Skelette mit Rubriknummer und/oder Sprachcode als Namenszusatz: (-23.html, =23.html, et .en.html)[en]Support of suffixed templates by section number and/or by language code : (-23.html, =23.html, and .en.html)[eo]Subteno por la skeletoj sufiksitaj per rubrikonumero kaj lingvokodo (ekz., -23.html, =23.html, kaj .eo.html)[es]Implementación de esqueletos con sufijo por numero de sección y/o por código de idioma: (-23.html, =23.html, y .en.html)[fa]پشتيبان اسكلت‌هاي پسوندي توسط تعدادي بخش و/يا توسط كدر زبان :  (-23.html, =23.html, et .en.html)[fr]Support des squelettes suffixés par numéro de rubrique et/ou par code de langue : (-23.html, =23.html, et .en.html)[fr_fem]Support des squelettes suffixés par numéro de rubrique et/ou par code de langue : (-23.html, =23.html, et .en.html)[fr_tu]Support des squelettes suffixés par numéro de rubrique et/ou par code de langue : (-23.html, =23.html, et .en.html)[it]Supporto dei modelli con suffisso numero di sezione e/o il codice della lingua: (-23.html, =23.html, et .en.html)[lb]Ënnerstëtzung vun de Skeletter mat engem Suffix fir d’Rubrik an/oder d’Sprooch: (-23.html, =23.html, an .en.html)[nl]Ondersteuning van de suffix ingewijden skeletten (met rubrieknummers en / of taal-code: -23.html, =23.html   en .en.html)[oc_ni_mis]Supouòrt dei esquèletrou sufissat per un nùmero de rùbrica e/o per un code de lenga : (-23.html, =23.html, e .en.html)[pt]Apoio dos modelos com sufixo por número de rubrica e/ou por código de idioma : (-23.html, =23.html, et .en.html)[pt_br]Suporte aos gabaritos com sufixo do númeor da seção e/ou por código de idioma: (-23.html, =23.html, et .en.html)[ru]Позволяет задавать отдельные шаблоны по номеру раздела, статьи, а также языковой версии: (-23.html, =23.html, и .en.html)[sk]Podpora šablón pripojených vo forme prípony podľa čísla rubriky a/lebo kódu jazyka: (-23.html, =23.html a .en.html)[uk]Дозволяє задавати окремі шаблони за номером рубріки, статті, а також мовної версії: (-23.html, =23.html, и .en.html)</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', '', '', 'https://www.spip.net/3445', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'auto/squelettes_par_rubrique-2.2.0', '', 'oui', 'non', 0, '', 'non', 'non', 'non', '_DIR_PLUGINS', '35cd7ce09056892ade1e7a49105d0e6d'),
(2, 2, 'AIDE', 'aide-logo.svg', '003.002.005', '', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]يتيح هذا الملحق إدخال تعليمات فورية على SPIP يُدلّ اليها برمز معين. يمكن تعميم هذه التعليمات على ملاحق أخرى.[de]Dieses Plugin ermöglicht es, in SPIP eine kontextsensitive Hilfe einzufügen, die durch ein Icon gekennzeichnet ist. Diese Hilfe kann auch auf Plugins ausgeweitet werden.[en]This plug-in includes a contextual help in SPIP which is indicated by an icon. This help can be extended to other plug-ins.[es]Este plugin permite que SPIP incluya ayuda contextual marcada con un icono. Esta ayuda también se puede extender a los plugins.[eu]Plugin horri esker, ikono batek hautematen duen testuinguru-laguntza bat sar daiteke SPIPen. Laguntza hori pluginentzat ere izan daiteke.[fr]Ce plugin permet d’inclure dans SPIP une aide contextuelle repérée par un icone. Cette aide peut-être étendue aussi aux plugins.[fr_tu]Ce plugin permet d’inclure dans SPIP une aide contextuelle repérée par une icone. Cette aide peut-être étendue aussi aux plugins.[it]Questo plugin consente a SPIP di includere una guida contestuale contrassegnata da un’icona. Questo aiuto può essere esteso anche ai plugin.[mg]Ce plugin permet d’inclure dans SPIP une aide contextuelle repérée par un icone. Cette aide peut-être étendue aussi aux plugins.[pt]Este plugin permite incluir no SPIP uma ajuda contextual identificada por um ícone. Esta ajuda também pode ser estendida aos plugins.[pt_br]Este plugin permite incluir ajuda contextual no SPIP, acessível por um ícone. Esta ajuda pode ser também extendida aos plugins.</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', 'a:1:{i:1;a:2:{s:3:\"nom\";s:3:\"GPL\";s:3:\"url\";s:40:\"http://www.gnu.org/licenses/gpl-3.0.html\";}}', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'aide', '', 'oui', 'non', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', '8db5aacbaf80b5f729f6328f4e6dbf1e'),
(3, 3, 'ARCHIVISTE', 'prive/themes/spip/images/archiviste.svg', '002.002.003', '', '[4.2.0;4.*]', '4.2,4.3', '<multi>[fr]Permet d’emballer ou déballer des archives de fichiers Zip, Tar, …[pt_br]Permite comprimir ou expandir arquivos Zip, Tar, ...</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', 'a:1:{i:1;a:2:{s:3:\"nom\";s:3:\"GPL\";s:3:\"url\";s:40:\"http://www.gnu.org/licenses/gpl-3.0.html\";}}', '', 'https://git.spip.net/spip/archiviste/src/branch/master/README.md', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'archiviste', '', 'oui', 'non', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', 'a26aa25aa0e4eaf07189d2490306b873'),
(4, 4, 'BIGUP', 'prive/themes/spip/images/bigup-64.png', '003.002.014', '1.0.1', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]تنزيل المستندات بالسحب والرمي[de]... wie der Name schon sagt ...[en]Uploading documents by drag and drop[fr]Téléverser les documents par glisser-déposer[pt_br]Transferir documentos usando arrastar-e-soltar</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:19:\"Matthieu Marcillaud\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', 'a:3:{i:1;a:2:{s:3:\"nom\";s:15:\"Neurovit (logo)\";s:3:\"url\";s:59:\"https://www.iconfinder.com/icons/48761/add_file_upload_icon\";}i:2;a:2:{s:3:\"nom\";s:25:\"23 Company (resumable.js)\";s:3:\"url\";s:22:\"http://resumablejs.com\";}i:3;a:2:{s:3:\"nom\";s:7:\"Flow.js\";s:3:\"url\";s:33:\"https://github.com/flowjs/flow.js\";}}', 'a:1:{i:1;a:2:{s:3:\"nom\";s:7:\"GNU/GPL\";s:3:\"url\";s:0:\"\";}}', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:1:{i:0;a:1:{s:3:\"php\";a:2:{s:3:\"nom\";s:3:\"php\";s:13:\"compatibilite\";s:8:\"[5.4.0;[\";}}}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:1:{i:0;a:1:{s:7:\"saisies\";a:2:{s:3:\"nom\";s:7:\"saisies\";s:13:\"compatibilite\";s:9:\"[2.17.1;]\";}}}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'bigup', '', 'oui', 'oui', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', 'a0fa7e3aa57071374cbf223c2b7497e2'),
(5, 5, 'COMPAGNON', 'prive/themes/spip/images/compagnon-32.png', '003.001.005', '1.0.0', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]يقدم الرفيق مساعدة للمستخدمين\n		لدى أول زيارة لهم الى المجال الخاص في SPIP.[br]An ambrouger a ginnig sikour d’an implijerien\n		da vare ar c’hentañ weladenn el lec’h prevez SPIP.[de]Der Begleiter hilft neuen Benutzern bei ihren ersten Schritten im SPIP Redaktionssystem.[en]The companion provides assistance to users\nduring their first visit to the backoffice of SPIP.[eo]La kompano proponas helpon por uzantoj dum liaj unuaj vizitoj al SPIP privata spaco.[es]El compañero ofrece ayuda a los usuarios durante su primera visita al espacio privado de SPIP.[fa]همراه به كاربران در جريان نخستين ازديدشان از قسمت خصوصي اسپيپ كمك ارايه مي‌كند.[fr]Le compagnon offre une aide aux utilisateurs\n		lors de leur première visite dans l’espace privé de SPIP.[fr_fem]Le compagnon offre une aide aux utilisatrices\n		lors de leur première visite dans l’espace privé de SPIP.[fr_tu]Le compagnon offre une aide aux utilisateurs\n		lors de leur première visite dans l’espace privé de SPIP.[hac]کەسی هامڕا چە یەکەمین سەردانیکەردەو نۋیسنگاو پەشتۊSPIP .خزمەتو بەکاربەرا کەرۊ[it]L’assistente fornisce una guida agli utenti durante la loro prima visita all’area riservata di SPIP.[ja]初めてSPIPの管理エリアをご訪問する時、仲間さんは、援助を提供してくださいます。[lb]De Compagnon bitt de Benotzer Hëllef beim éischte Benotze vum privaten Deel vu SPIP.[nl]De metgezel helpt de gebruikers tijdens\n		hun eerste bezoek in het privé-ruimte van SPIP[oc_ni_mis]Lou coumpàgnou fournisse una adjuda ai utilisaire\n		per la siéu premièra vìsita en l’espaci privat de SPIP.[pt]O guia oferece assistência aos utilizadores durante a sua primeira visita à área privada de SPIP.[pt_br]O Companheiro oferece ajuda aos usuários, na primeira visita à área privada do SPIP.[ru]Плагин выводит справку о системе управления при первом входе пользователя в админку.[sk]Compagnon ponúka pomoc používateľom \n		pri ich prvej návšteve v súkromnej zóne SPIPu.[uk]Плагін виводить довідку про систему управління при першому вході користувача до адміністративної частини.</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:19:\"Matthieu Marcillaud\";s:3:\"url\";s:20:\"http://magraine.net/\";s:4:\"mail\";s:0:\"\";}}', 'a:1:{i:1;a:2:{s:3:\"nom\";s:36:\"Logo par Freepik de www.flaticon.com\";s:3:\"url\";s:40:\"https://www.flaticon.com/authors/freepik\";}}', 'a:1:{i:1;a:2:{s:3:\"nom\";s:7:\"GNU/GPL\";s:3:\"url\";s:0:\"\";}}', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'compagnon', '', 'oui', 'oui', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', '5a1df364b73131f7eb3428bd658d507b'),
(6, 6, 'COMPRESSEUR', 'images/compresseur-32.png', '002.001.007', '', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]ضغط أوراق الأنماط ورموز جافاسكريبت في ترويسة الصفحات في <code>ecrire/</code> و/او الموقع العمومي[br]Gwaskadurez css ha javascript en titouroù ar pajennoù html deus <code>ecrire/</code> ha/pe deus al lec’h publik[de]Kompression von CSS und Javascript-Code im Kopf der Seiten unter <code>ecrire/</code> und/oder auf der öffentlichen Website[en]Compression of css and javascript in the header of the HTML pages of <code>ecrire/</code> and/or of the public site[eo]Densigo de la css kaj javascript en la kaplinio de HTML-paĝoj pri <code>ecrire/</code> kaj / aŭ de la publika retejo[es]Compresión de css y javascript en los encabezados de las páginas HTML de <code>ecrire/</code> y/o del sitio público[fa]و/يا سايت همگاني <code>ecrire/</code> فشرده‌سازي سي.اس.اس‌ها و جاوا اسكريپت در سرصفحه‌ي صفحات اچ.تي.ام.ال‌[fr]Compression des css et javascript dans l’en-tête des pages html de <code>ecrire/</code> et/ou du site public[fr_fem]Compression des css et javascript dans l’en-tête des pages html de <code>ecrire/</code> et/ou du site public[fr_tu]Compression des css et javascript dans l’en-tête des pages html de <code>ecrire/</code> et/ou du site public[hac]دروسکەودەی فشاردریاو سی‌ئێس‌ئێس و جاڤا سکریپتی چە لاو سەری  پەڕەکاۋە چیرو<code>ecrire/</code> و/یا سەرو پەڕەی سەرەكی پەڕیانەكەیۆ[it]Compressione di CSS e javascript \nnell’intestazione delle pagine html di <code>ecrire/</code> e/o del sito pubblico pubblico.[ja]<code>ecrire/</code>と言うhtmlページや公開サイトのヘッダーにあるCSSとjavascriptの圧縮[lb]Compressioun vun CSS a Javascript am Header vun den HTML-Säiten vun <code>ecrire/</code> an/oder dem ëffentleche Site[nl]Compressie van CSS en JavaScript in de heading van HTML-paginas uit <code>ecrire/</code> en/of van het publieke site.[oc_ni_mis]Coumpressioun dei css e javascript en la prima-testa dei pàgina html de <code>ecrire/</code> e/o dóu sit pùblicou[pt]Compressão de css e javascript no cabeçalho das páginas HTML de <code>ecrire/</code> e/ou do sítio público.[pt_br]Compressão dos css e javascript nos cabeçalhos das páginas html de <code>ecrire/</code> e/ou do site público[ru]Сжимает css и javascript файлов на публичной части сайта и в панели управления <code>ecrire/</code>[sk]Kompresia css a javascriptu v hlavičke html stránok <code>ecrire/</code> a/lebo na verejne prístupnej stránke[uk]Стискає css та javascript файли для зменьшення часу завантаження. Використовується як на основному сайті, так і в його адміністративній частині <code>ecrire/</code></multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', 'a:2:{i:1;a:2:{s:3:\"nom\";s:14:\"Cerdic/CSSTidy\";s:3:\"url\";s:33:\"https://github.com/Cerdic/CSSTidy\";}i:2;a:2:{s:3:\"nom\";s:36:\"Icon par Freepik de www.flaticon.com\";s:3:\"url\";s:40:\"https://www.flaticon.com/authors/freepik\";}}', 'a:1:{i:1;a:2:{s:3:\"nom\";s:3:\"GPL\";s:3:\"url\";s:40:\"http://www.gnu.org/licenses/gpl-3.0.html\";}}', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:1:{i:0;a:1:{s:11:\"porte_plume\";a:2:{s:3:\"nom\";s:11:\"porte_plume\";s:13:\"compatibilite\";s:9:\"[1.19.0;]\";}}}}', 'a:1:{s:7:\"CSSTIDY\";s:6:\"1.15.1\";}', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'compresseur', '', 'oui', 'non', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', 'c60a668aef87f279f33d83abfe16a91d'),
(7, 7, 'DUMP', 'prive/themes/spip/images/base-backup-32.png', '002.001.004', '', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]نسخ احتياطي لقاعدة البيانات بتنسيق SQLite واسترجاعها[br]Gwared hag assevel deus an diaz titouroù e SQLite[de]Sicherung und Wiederherstellung der Datenbank im SQLite-Format[en]Backup and restoration of the database in SQLite format[eo]Savkopio de la datumbazo en SQLite kaj restaŭro[es]Copia de seguridad en SQLite y recuperación[fa]بك‌آپ و ذخيره‌سازي پايگاه داده‌ها در فرمت اس.كيو.لايت[fr]Sauvegarde de la base en SQLite et restauration[fr_fem]Sauvegarde de la base de données en SQLite et restauration[fr_tu]Sauvegarde de la base en SQLite et restauration[hac]پاشەکۆتکەرڎەی و ئەۋەگېڵنای داتابەیسی بە فۆرماتو SQLite[it]Backup e ripristino della base dati SQLite[ja]SQLiteにデータベースバックアップと復元[lb]Backup vun der Datebank als SQLite an Zeréckspillen[nl]Backup van de database in SQLite en restauratie[oc_ni_mis]Sauvagarda de la basa en SQLite e restauramen[pt]Cópia de segurança e restauro da base de dados em SQLite[pt_br]Cópia de segurança da base em SQLite e restauro[ru]Резервная копия в SQLite[sk]Záloha databázy v SQLite a jej obnovenie[uk]Резервне копіювання і відновлення бази даних у SQLite форматі</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', 'a:1:{i:1;a:2:{s:3:\"nom\";s:3:\"GPL\";s:3:\"url\";s:40:\"http://www.gnu.org/licenses/gpl-3.0.html\";}}', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'dump', '', 'oui', 'non', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', '0c552672526412f3a8c014861900c585'),
(8, 8, 'IMAGES', 'images/image_filtre-xx.svg', '004.002.002', '', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]مرشحات معالجة الصور والألوان[br]Siloù treuzfurmadur skeudennoù ha livioù[de]Bild- und Farbfilter[en]Images processing and colors filters[eo]Filtriloj de bild- kaj kolor-transformo[es]Filtros de transformación de imágenes y de colores[fa]فيلتر‌هاي پردازش تصوير‌ها و رنگ‌ها[fr]Filtres de transformation d’images et de couleurs[fr_fem]Filtres de transformation d’images et de couleurs[fr_tu]Filtres de transformation d’images et de couleurs[it]Filtri di trasformazione delle immagini e dei colori[ja]画像および色変換フィルタ[lb]Ännerungs-Filteren fir d’Biller an d’Faarwen[nl]Beeld en kleur transformatie filters[oc_ni_mis]Filtre de trasfourmacioun d’image e de coulou[pt]Processamento de imagens e filtros de cores[pt_br]Filtros de transformação de imagens e de cores[ru]Набор фильтров по работе с изображениями[sk]Filtre na transformáciu obrázkov a farieb[uk]Фільтри для обробки зображень і роботи з кольорами</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', 'a:1:{i:1;a:2:{s:3:\"nom\";s:3:\"GPL\";s:3:\"url\";s:40:\"http://www.gnu.org/licenses/gpl-3.0.html\";}}', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'filtres_images', '', 'oui', 'non', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', '804b2389d6eda77c49dc9c24ef762112'),
(9, 9, 'FORUM', 'prive/themes/spip/images/forum-32.png', '003.001.011', '1.2.2', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]منتدى SPIP (الخاص والعمومي)[ast]Foru de SPIP (priváu y públicu)[br]SPIP forum (prevez ha publik)[de]Foren in SPIP (Redaktionsbereich und öffentliche Website)[en]SPIP’s forum (private and public)[eo]SPIP-forumo (privata kaj publika)[es]Foros de SPIP (privado y público)[fa]سخنگاه اسپيپ (خصوصي همگاني)؟[fr]Forum de SPIP (privé et public)[fr_fem]Forum de SPIP (privé et public)[fr_tu]Forum de SPIP (privé et public)[hac]فۆڕومې ئێس‌پی‌ئای‌پی (تایبەتیی و گرڎینەیی)[it]Forum di SPIP (privati e pubblici)[ja]SPIPの掲示板（プライベートと公開）[lb]SPIP-Forum (privat an ëffentlech)[nl]Forum van SPIP (privé en openbaar)[oc_ni_mis]Fòrou de SPIP (privat e pùblicou)[pt]Fórum de SPIP (privado e público)[pt_br]Fórum do SPIP (privado e público)[ru]Форумы и комментарии в SPIP[sk]Diskusné fóra SPIPu (súkromné a verejné)[uk]Форуми у SPIP (загальні і редакційні)</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', '', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'forum', '', 'oui', 'oui', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', '2881a7c25d4fa3bfc7728d9e751b4af9'),
(10, 10, 'MEDIABOX', 'prive/themes/spip/images/mediabox-xx.svg', '003.001.009', '', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]افتراضياً، يتم إضفاء صندوق الفرجة على كل الوصلات الى الصور (لها نوع خاصية يصف mime/type الصورة) إضافة الى الوصلات المزودة بنمط &lt;code&gt;.mediabox&lt;/code&gt;.\n\n\n\nمن الممكن إعداد كل وصلة على حدة من خلال أنماط إضافية:\n\n-* يتيح &lt;code&gt;boxIframe&lt;/code&gt;  فتح الوصلة في إطار iframe\n\n-* يتيج &lt;code&gt;boxWidth-350px&lt;/code&gt; تحديد عرض ٣٥٠ نقطة للإطار\n\n-* يتيح &lt;code&gt;boxHeight-90pc&lt;/code&gt; تحديد ارتفاع ٩٠٪ للإطار\n\n\n\nوتتيح لوحة تحكم تعديل الإعدادات العامة حسب الرغبة كما تتيح اختيار شكل الصندوق من بين الأشكال المتاحة.\n\nيعمل هذا الملحق في الصفحات النموذجية التي تحتوي على علامة <code>#INSERT_HEAD</code>[br]Dre ziouer, an holl liammoù etrezek skeudennoù (gant un astenn o diskrivañ ar mime/stumm ar skeudenn) hag al liammoù gant ar rumm <code>.mediabox</code> a vez astennet gant ar voest miltimedia.\n	\n	Posubl eo kefluniañ pep liamm unan hag unan gant rummadoù ouzhpenn : \n\n-* <code>boxIframe</code> evit goulenn digeriñ al laimm e-barzh ur voest mod iframe ;\n\n-* <code>boxWidth-350px</code> evit spisañ ul ledander a 350px evit ar voest ;\n\n-* <code>boxHeight-90pc</code> evit spisañ un uhelder a 90% evit ar voest.\n	\nGant ur panel kefluniadur e c’hallit kemmañ ar penn-dibarzhoù giz ma plij deoc’h, hag ivez neuz ar voest gant ar stummoù kinniget.\n	\n	Ar plugin-se a ya gant skeledennoù oc’h ober gant an arouez\n <code>#INSERT_HEAD</code>[de]Alle Links zu Bildern (mit einem mime/type für Bilder) sowie Links mit der Klasse <code>.mediabox</code>werden in einer Multimedia-Box angezeigt.\n\nJeder Link kann einzeln um folgende Klassen ergänzt werden:\n\n-* <code>boxIframe</code> öffnet den Link als iFrame in einer Box;\n\n-* <code>boxWidth-350px</code>öffnet eine 350px breite Box;\n\n-* <code>boxHeight-90pc</code> öffnet eine 90% hohe Box;\n\nSie können die Voreinstellungen in einem Konfigurationsdialog einstellen, und das Standarddesign der Boxen auswählen.\n\nDieses Plugin benötigt den Tag <code>#INSERT_HEAD</code> im Kopf des Skeletts.[en]By default, all links to pictures (with a type attribute describing the mime/type of the picture) and\nlinks with the CSS class <code>.mediabox</code> are enriched by multimedia box.\n\nYou can configure each link on a case by case basis with additional classes:\n-* <code>boxIframe</code> enables to open link in iframe box; \n-* <code>boxWidth-350px</code> enables to specify a width of 350px for the box;\n-* <code>boxHeight-90pc</code> enables to specify a height of 90% for the box\n\nA configuration panel lets you edit the general settings to your liking, and the appearance of the box among the available skins.\n\nThis plugin works on skeletons which have the <code>#INSERT_HEAD</code> tag.[eo]Defaŭlte, ĉiujn ligilojn al bildoj (kun atributo „type“, kiu difinas la bildan MIME-tipon) kaj la ligilojn kun la klaso <code>.mediabox</code> pliriĉigas la plurmedia skatolo.\n \n	Eblas agordi ĉiun ligilon unuope per pliaj klasoj :\n	\n-* <code>boxIframe</code>, por ke la ligilo malfermiĝu en IFRAME-skatolo ;\n\n-* <code>boxWidth-350px</code> por skatolo largâ je 350px (px = bilderoj) ;\n\n-* <code>boxHeight-90pc</code> por skatolo alta je 90%.\n\n	Agordilaro ebligas vin modifi plurajn aspektojn laŭvole.\n	\n	Tiu kromprogramo funkcias ĉe la skeletoj, kiuj uzas la markon <code>#INSERT_HEAD</code>.[es]Por defecto, todos los enlaces definidos sobre imágenes (con un atributo tipo que describa el mime/type de la imafen) así como los enlaces con la clase <code>.mediabox</code> son enriquecidos por la caja multimedia.\n	\nEs posible configurar cada enlace, caso por caso, con clases adicionales:\n\n-* <code>boxIframe</code> permite abrir el enlace en una caja en un iframe ;\n\n-* <code>boxWidth-350px</code> permite definir un ancho de 350px para la caja;\n\n-* <code>boxHeight-90pc</code> perite definir un alto de 90% para la caja.\n\nUn panel de configuración permite modificar tanto las especificaciones generales como el aspecto de la caja, a partir de un conjunto de opciones disponibles. \n	\nEste plugin funciona en los esqueletos que incluyen la baliza <code>#INSERT_HEAD</code>[fr]Par défaut, tous les liens vers des images (avec un attribut type décrivant le mime/type de l’image) ainsi que les liens avec la classe <code>.mediabox</code> sont enrichis par la boîte multimédia.\n	\n	Il est possible de configurer chaque lien au cas par cas avec des classes supplémentaires :\n\n-* <code>boxIframe</code> permet de demander à ouvrir le lien dans une boîte en iframe ;\n\n-* <code>boxWidth-350px</code> permet de spécifier une largeur de 350px pour la boîte ;\n\n-* <code>boxHeight-90pc</code> permet de spécifier une hauteur de 90% pour la boîte.\n\n	Un panneau de configuration vous permet de modifier les réglages généraux à votre convenance, ainsi que l’aspect de la boîte parmi les habillages disponibles.\n	\n	Ce plugin fonctionne sur les squelettes disposant de la balise <code>#INSERT_HEAD</code>[fr_fem]Par défaut, tous les liens vers des images (avec un attribut type décrivant le mime/type de l’image) ainsi que les liens avec la classe <code>.mediabox</code> sont enrichis par la boîte multimédia.\n	\n	Il est possible de configurer chaque lien au cas par cas avec des classes supplémentaires :\n\n-* <code>boxIframe</code> permet de demander à ouvrir le lien dans une boîte en iframe ;\n\n-* <code>boxWidth-350px</code> permet de spécifier une largeur de 350px pour la boîte ;\n\n-* <code>boxHeight-90pc</code> permet de spécifier une hauteur de 90% pour la boîte.\n\n	Un panneau de configuration vous permet de modifier les réglages généraux à votre convenance, ainsi que l’aspect de la boîte parmi les habillages disponibles.\n	\n	Ce plugin fonctionne sur les squelettes disposant de la balise <code>#INSERT_HEAD</code>[fr_tu]Par défaut, tous les liens vers des images (avec un attribut type décrivant le mime/type de l’image) ainsi que les liens avec la classe <code>.mediabox</code> sont enrichis par la boîte multimédia.\n	\n	Il est possible de configurer chaque lien au cas par cas avec des classes supplémentaires :\n\n-* <code>boxIframe</code> permet de demander à ouvrir le lien dans une boîte en iframe ;\n\n-* <code>boxWidth-350px</code> permet de spécifier une largeur de 350px pour la boîte ;\n\n-* <code>boxHeight-90pc</code> permet de spécifier une hauteur de 90% pour la boîte.\n\n	Un panneau de configuration te permet de modifier les réglages généraux à ta convenance, ainsi que l’aspect de la boîte parmi les habillages disponibles.\n	\n	Ce plugin fonctionne sur les squelettes disposant de la balise <code>#INSERT_HEAD</code>[it]Per impostazione predefinita, tutti i collegamenti alle immagini (con un attributo che descrive il tipo mime/tipo di foto) e\ncollegamenti con il <code> classe CSS. mediabox </ code> sono arricchite da box multimediale.\n	\nÈ possibile configurare ogni collegamento in una caso per caso con le classi aggiuntive:\n- * <code> BoxIframe </ code> permette di aprire il collegamento nella casella iframe;\n- * <code> Boxwidth-350 pixel </ code> consente di specificare una larghezza di 350 pixel per il box;\n- * <code> BoxHeight-90pc </ code> consente di specificare una altezza di 90% per il box\n\nUn pannello di configurazione permette di modificare le impostazioni generali a proprio piacimento, e l’aspetto tra le skin disponibili.\n\nQuesto plugin funziona su scheletri che hanno la <code> INSERT_HEAD # </ code> tag.[ja]デフォルトでは、<code>.mediabox </code>クラスとのリンクだけでなく、画像へのすべてのリンクは（MIME/イメージタイプ）、マルチメディアボックスによって取り上げられます。\n\n追加のクラスを使用して、各リンクをケースバイケースで設定することができます。\n\n -* <code>boxIframe</code>はiframe内のボックスでリンクを開くように頼むことができます。\n\n -* <code>boxWidth-350px</code>でボックスの幅を350pxに指定できます。\n\n -* <code>boxHeight-90pc</code>では、ボックスの高さを90％に指定できます。\n\nコントロールパネルでは、便利なときに一般設定を変更できるほか、使用可能なスキンの中のボックスの外観も変更できます。\n\nこのプラグインは、<code>#INSERT_HEAD</code>タグを持つレイアウト上で動作します。[lb]Par défaut hunn all Linken op Biller (mat Attribut mime/type) a Linke mat der Klass <code>.mediabox</code> Zougrëff op d’Mediabox.\n\nAll Link ka mat zousätzleche Klassen agestallt ginn:\n-* <code>boxIframe</code> de Link soll an engem Iframe opgemach ginn;\n-* <code>boxWidth-350px</code> d’Box soll eng Breet vun 350 Pixel hun;\n-* <code>boxHeight-90pc</code> d’Box soll eng Héicht vun 90% hun.\n\nD’Astellung erlaabt de generelle Layout festzeleen, op Basis vun e puer Virlagen.\nDëse Plugin fonktionnéiert mat Skeletter déi den Tag <code>#INSERT_HEAD</code> hun.[nl]Standaard worden alle links naar afbeeldingen (met een type attribuut dat de mime/type beschrijft) en de links met een class <code>.mediabox </code> verrijkt door de mediabox.\n\nHet is mogelijk om elke link telkens met extra classes te configureren:\n\n- * <code>boxIframe</code> om de link in een iframe doos te tonen;\n\n- * <code>boxWidth-350px</code> om een boxbreedte van 350px te specificeren;\n\n- <code>boxHeight-90pc</code>  om een hoogte van 90% voor de box te specificeren.\n\nIn een configuratiepaneel kun je de algemene instellingen bewerken, alsmede het uiterlijk van de doos aanpassen met de beschikbare skins.\n\nDeze plugin werkt op de skeletten die het SPIP baken <code>#INSERT_HEAD</ code> gebruiken.[oc_ni_mis]En mancança, toui lu estac devers li image (embé un atribut type descrivent lou mime/type de l’image) couma pura lu estac embé la classa <code>.mediabox</code> soun enriquit per la bouòta multimedia.\n\n	Es poussible de counfigurà cada estac au cas per cas embé de classa suplementari :\n\n-* <code>boxIframe</code> permete de demandà a durbì l’estac en una bouòta iframe ;\n\n-* <code>boxWidth-350px</code> permete de spechificà una larguessa de 350px per la bouòta ;\n\n-* <code>boxHeight-90pc</code> permete de spechificà una autessa de 90% per la bouòta.\n\n	Un panèu de counfiguracioun vi permete de moudificà lu reglage general a la vouòstra counveniença, couma pura l’aspet de la bouòta tra lu abilhage dispounible.\n\n	Aqueu plugin founciouna soubre lu esquèletrou qu’an una balisa <code>#INSERT_HEAD</code>[pt]Por defeito, todas as ligações a imagens (com um atributo tipo que descreva o mime/type da imagem) e as ligações com a classe CSS <code>.mediabox</code> são enriquecidas pela caixa multimédia.\n	\n	É possível configurar cada ligação, caso a caso, com classes adicionais:\n\n-* <code>boxIframe</code> permite abrir uma ligação numa caixa iframe ;\n\n-* <code>boxWidth-350px</code> permite especificar uma largura de 350px para a caixa ;\n\n-* <code>boxHeight-90pc</code> permite especificar uma altura de 90% para a caixa.\n\n	Um painel de configuração permite-lhe editar as suas preferências gerais, e o aspecto da caixa, de entre as alternativas disponíveis.\n	\n	Este plugin funciona em modelos que tenham a tag <code>#INSERT_HEAD</code>[pt_br]Por padrão, todos os links para imagens (com um atributo do tipo que descreve o mime/type da imagem) assim como os links com a classe <code>.mediabox</code> são enriquecidos pela caixa multimedia.\n	\n	É possível configurar cada link ou caso a caso com classes suplementares:\n\n-* <code>boxIframe</code> permite oferecer de abrir o link numa caixa em iframe;\n\n-* <code>boxWidth-350px</code> permite especificar uma largura de 350px para a caixa;\n\n-* <code>boxHeight-90pc</code> permite especificar uma altura de 90% para a caixa.\n\n	Um painel de controle permite que você altere as configurações gerais, bem como a aparência da caixa entre os temas disponíveis.\n	\n	Esse plugin funciona nos templates com a tag <code>#INSERT_HEAD</code>[ru]По умолчанию все ссылки на картинки (файлы с соответствующим mime/type атрибутом) и ссылки с CSS классом <code>.mediabox</code> выводятся в сплывающем окне.\n	\n	Вы можете настроить класс ссылки для каждого конкретного случая :\n\n-* <code>boxIframe</code> позволяет открывать ссылки в iframe ;\n\n-* <code>boxWidth-350px</code> задает ширину всплывающего окна в 350px ;\n\n-* <code>boxHeight-90pc</code> задает высоту окна в 90%.\n\nВ настройках модуля вы можете изменять 	внешний вид блоков и прочие настройки.\n	Модуль работает только в случае, если вы добавляете <code>#INSERT_HEAD</code> в ваши шаблоны.[sk]Podľa predvolených nastavení všetky odkazy k obrázkom (s typom v parametre, ktorý uvádza mime/typ obrázka) a odkazy v triede <code>.mediabox</code> obohacuje multimediálny box.\n\nKaždý odkaz môžete osobitne nastaviť pomocou doplnkových tried:\n\n-* <code>boxIframe</code> umožňuje otvárať odkaz v ráme iframe,\n\n-* <code>boxWidth-350px</code> umožňuje definovať šírku poľa 350px,\n\n-* <code>boxHeight-90pc</code> umožňuje zadať výšku poľa 90%.\n\nOvládací panel vám umožňuje všeobecné nastavenia podľa vašich želaní vybrať dizajn boxu z dostupných vzhľadov.\n\nTento zásuvný modul spolupracuje so šablónami, ktoré obsahujú tag <code>#INSERT_HEAD</code>[uk]Зазвичай усі посилання на зображення (файли з відповідним mime/type атрибутом) і посилання з CSS класом <code>.mediabox</code> виводяться у вікні, що спливає.\n	\n	Ви можете налаштувати клас посилання для кожного випадку:\n\n-* <code>boxIframe</code> дозволяє відкривати посилання в iframe ;\n\n-* <code>boxWidth-350px</code> задає ширину спливаючого вікна у 350px ;\n\n-* <code>boxHeight-90pc</code> задає висоту вікна у 90%.\n\nВ налаштуваннях модуля ви можете змінити зовнішній вигляд блоків та інші налаштування.\n	Модуль працює лише в тому випадку, якщо ви додаєте тег <code>#INSERT_HEAD</code> до ваших шаблонів.</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', 'a:2:{i:1;a:2:{s:3:\"nom\";s:4:\"Lity\";s:3:\"url\";s:26:\"https://sorgalla.com/lity/\";}i:2;a:2:{s:3:\"nom\";s:37:\"Icon made by Freepik www.flaticon.com\";s:3:\"url\";s:23:\"http://www.freepik.com/\";}}', '', '', 'https://contrib.spip.net/MediaBox', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'mediabox', '', 'oui', 'non', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', 'b4fb0ad239c9ef5318c165b9f564d84d'),
(11, 11, 'MEDIAS', 'prive/themes/spip/images/portfolio-32.png', '004.003.004', '1.8.0', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]أدارة الوسائط المتعددة في SPIP[br]Merañ ar mediaoù SPIP[de]Medienverwaltung in  SPIP[en]SPIP’s media management[eo]Mastrumado de ĉiuspecaj dokumentoj de SPIP[es]Gestión de documentos multimedia de SPIP[fa]مديريت رسانه‌‌هاي اسپيپ[fr]Gestion des médias de SPIP[fr_fem]Gestion des médias de SPIP[fr_tu]Gestion des médias de SPIP[it]Gestione dei media di SPIP[ja]SPIPにおけるメディア管理[lb]Gestioun vun de Medien vu SPIP[nl]Beheer van de medias in SPIP[oc_ni_mis]Gestioun dei media de SPIP[pt]Gestão multimédia de SPIP[pt_br]Gerenciamento de mídias do SPIP[ru]Управление медиа файлами[sk]Správa multimédií v SPIPe[uk]Управління медіа-файлами</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', 'a:5:{i:1;a:2:{s:3:\"nom\";s:57:\"Cédric Morin, Romy Duhem-Verdière pour la médiathèque\";s:3:\"url\";s:0:\"\";}i:2;a:2:{s:3:\"nom\";s:8:\"getID3()\";s:3:\"url\";s:22:\"http://www.getid3.org/\";}i:3;a:2:{s:3:\"nom\";s:15:\"MediaElement.js\";s:3:\"url\";s:26:\"http://mediaelementjs.com/\";}i:4;a:2:{s:3:\"nom\";s:21:\"SVG Sanitizer v0.14.0\";s:3:\"url\";s:53:\"https://github.com/darylldoyle/svg-sanitizer/releases\";}i:5;a:2:{s:3:\"nom\";s:16:\"Numix icon theme\";s:3:\"url\";s:48:\"https://github.com/numixproject/numix-icon-theme\";}}', '', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:1:{i:0;a:1:{s:10:\"archiviste\";a:2:{s:3:\"nom\";s:10:\"archiviste\";s:13:\"compatibilite\";s:8:\"[2.2.0;]\";}}}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:1:{i:0;a:3:{s:1:\"Z\";a:2:{s:3:\"nom\";s:1:\"Z\";s:13:\"compatibilite\";s:9:\"[1.7.30;]\";}s:8:\"mediabox\";a:2:{s:3:\"nom\";s:8:\"mediabox\";s:13:\"compatibilite\";s:8:\"[1.2.0;]\";}s:4:\"mots\";a:2:{s:3:\"nom\";s:4:\"mots\";s:13:\"compatibilite\";s:8:\"[2.9.0;]\";}}}}', 'a:3:{s:7:\"MINIDOC\";s:5:\"1.0.3\";s:5:\"ORDOC\";s:5:\"1.1.2\";s:4:\"MEJS\";s:5:\"4.2.7\";}', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'medias', '', 'oui', 'oui', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', 'a139dd2f3a235d4d11ed7e23010f0de0'),
(12, 12, 'MOTS', 'prive/themes/spip/images/mot-32.png', '004.002.002', '2.1.1', '[4.3.0;4.*]', '4.3', '<multi>[ar]المفاتيح ومجموعات المفاتيح[br]Gerioù ha strolladoù ger[de]Schlagworte und Schlagwortgruppen[en]Keywords and keywords groups[eo]Ŝlosilvortoj kaj grupoj de ŝlosilvortoj[es]Palabras clave y grupos de palabras clave[fa]واژه‌ها و گروه‌ واژه‌ها[fr]Mots et Groupes de mots[fr_fem]Mots-clef et Groupes de mots-clef[fr_tu]Mots et Groupes de mots[it]Parole e Gruppi di parole[ja]キーワードとキーワードのグループ[lb]Schlësselwierder a Gruppen[nl]Terfwoorden en groepen van trefwoorden[oc_ni_mis]Mot e Group de mot[pt]Palavras e grupos de palavras[pt_br]Palavras-chave e seus grupos[ru]Ключи и группы ключей[sk]Kľúčové slová a skupiny kľúčových slov[uk]Ключі та групи ключів</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', '', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'mots', '', 'oui', 'oui', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', '0b25e497e39037f8d68d27b3d082c05f'),
(13, 13, 'PLAN', 'prive/images/plan-xx.svg', '004.001.004', '', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]يحسن هذا الملحق صفحة «خرية الموقع» في المجال الخاص وذلك بعرض بنية يمكن فتحها وطيهاوإتاحة الترشيح حسب وضعية المقالات.[de]Dieses Plugin verbessert die « SItemap » des Redaktionssystems durch eine aufklappbare Baumstruktur mit einem Filter nach Artikelstatus.[en]This plugin improves the page \"Site Map\" of the private space by displaying a foldable structure and allowing to filter by article status.[eo]Tiu kromprogramo plibonigas la privatspacan paĝon „Mapo de la retejo“ per malfaldebla strukturo kaj filtrilo pri statuso de artikoloj.[es]Este plugin mejora la página \"Mapa del sitio\" del área privada mostrando una estructura desplegable y permitiendo filtrar por estado del artículo.[fr]Ce plugin améliore la page « Plan du site » de l’espace privé en affichant une structure dépliable et en permettant de filtrer par statut d’articles.[fr_fem]Ce plugin améliore la page « Plan du site » de l’espace privé en affichant une structure dépliable et en permettant de filtrer par statut d’articles.[fr_tu]Ce plugin améliore la page « Plan du site » de l’espace privé en affichant une structure dépliable et en permettant de filtrer par statut d’articles.[it]Questo plugin migliora la pagina \"Mappa del sito\" nell’area privata visualizzando una struttura ad albero e consentendo il filtraggio per stato dell’articolo.[ja]このプラグインは、折りたたみ可能な構造を表示し、記事のステータスでソートすることによって、管理エリアのページ「サイトマップ」を改善します。[nl]Deze plugin verbetert de weergave van de « Sitemap » in het privé gedeelte door een uitvouwbare structuur weet te geven waarin op status van artikel kan worden gefilterd.[pt_br]Este plugin melhora a página «Mapa do site » da área restrita, exibindo uma estrutura expansível e permitindo a filtragem pelo status das matérias.[sk]Tento zásuvný modul vylepší stránku „Mapa stránky“ v súkromej zóne tým, že zobrazí štruktúru stránky vo forme rozbaľovacieho modelu s možnosťou filtrovania článkov podľa stavu spracovania.</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:19:\"Matthieu Marcillaud\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', 'a:1:{i:1;a:2:{s:3:\"nom\";s:22:\"Ivan Bozhanov (jstree)\";s:3:\"url\";s:23:\"https://www.jstree.com/\";}}', 'a:1:{i:1;a:2:{s:3:\"nom\";s:7:\"GNU/GPL\";s:3:\"url\";s:0:\"\";}}', '', 'https://contrib.spip.net/4718', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'plan', '', 'oui', 'non', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', 'b21db87da0bba2e02739c239d31d6dfd'),
(14, 14, 'PORTE_PLUME', 'images/porte-plume-xx.svg', '003.001.008', '', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]الريشة هي شريط أدوات موسع لنظام SPIP يستخدم مكتبة جافاسكريبت [MarkItUp-&gt;http://markitup.jaysalvat.com/home/][de]Der Federhalter ist eine erweiterbare Werkzeugleiste für SPIP auf Grundlage der Javascript-Bibiliothek [MarkItUp->http://markitup.jaysalvat.com/home/][en]The Quill is a SPIP extensible toolbar which uses the [MarkItUp->http://markitup.jaysalvat.com/home/] javascript library.[eo]Plumingo estas etendebla ilobreto por SPIP, kiu uzas la Javascript-bibliotekon [MarkItUp->http://markitup.jaysalvat.com/home/][es]Porta pluma es una barra de herramientas extensible para SPIP que utiliza la librería javascript [MarkItUp->http://markitup.jaysalvat.com/home/][fa]چوب قلم يك نوار ابزار قابل گسترش براي اسپيپ است كه آرشيو جاوا اسكريپت [MarkItUp->http://markitup.jaysalvat.com/home/] را مورد استفاده قرار مي‌دهد.[fr]Porte plume est une barre d’outils extensible pour SPIP qui utilise la bibliothèque javascript [MarkItUp->http://markitup.jaysalvat.com/home/][fr_fem]Porte plume est une barre d’outils extensible pour SPIP qui utilise la bibliothèque javascript [MarkItUp->http://markitup.jaysalvat.com/home/][fr_tu]Porte plume est une barre d’outils extensible pour SPIP qui utilise la bibliothèque javascript [MarkItUp->http://markitup.jaysalvat.com/home/][it]Portapenne è una barra degli strumenti estensibile per SPIP che utilizza la libreria javascript [MarkItUp->http://markitup.jaysalvat.com/home/][nl]Penhouder is een rekbare werkbalk voor SPIP die gebruik van [MarkItUp->http://markitup.jaysalvat.com/home/] javascript library  maakt.[oc_ni_mis]Pouòrta-pluma es una barra d’óutis estensible per SPIP qu’utilisa la biblioutèca javascript [MarkItUp->http://markitup.jaysalvat.com/home/][pt]Pena é uma barra de ferramentas em SPIP que usa a biblioteca javascript [MarkItUp->http://markitup.jaysalvat.com/home/][pt_br]Porte plume é uma barra de feramentas para SPIP que utiliza a biblioteca javascript [MarkItUp->http://markitup.jaysalvat.com/home/][ru]Porte plume - расширение возможностей стандартного текстового редактора SPIP. Использует javascript библиотеку  [MarkItUp->http://markitup.jaysalvat.com/home/].[sk]Porte plume je rozšíriteľný panel s nástrojmi pre SPIP, ktorý využíva javascriptovú knižnicu [MarkItUp->http://markitup.jaysalvat.com/home/][uk]Porte plume - розширення можливостей стандартного текстового редактора SPIP. Використовує javascript бібліотеку  [MarkItUp->http://markitup.jaysalvat.com/home/].</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:19:\"Matthieu Marcillaud\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', 'a:3:{i:1;a:2:{s:3:\"nom\";s:21:\"Jay Salvat (MarkitUp)\";s:3:\"url\";s:30:\"http://markitup.jaysalvat.com/\";}i:2;a:2:{s:3:\"nom\";s:18:\"FamFamFam (Icones)\";s:3:\"url\";s:25:\"http://www.famfamfam.com/\";}i:3;a:2:{s:3:\"nom\";s:38:\"Frey Wazza / The Noun Project (icône)\";s:3:\"url\";s:54:\"https://thenounproject.com/search/?q=preview&i=2766461\";}}', 'a:1:{i:1;a:2:{s:3:\"nom\";s:7:\"GNU/GPL\";s:3:\"url\";s:40:\"http://www.gnu.org/licenses/gpl-3.0.html\";}}', '', 'https://contrib.spip.net/Porte-plume,3117', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'porte_plume', '', 'oui', 'non', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', '6c35b65305a65e353684ccdac97fbbfa'),
(15, 15, 'REVISIONS', 'prive/themes/spip/images/revision-32.png', '003.001.009', '1.2.0', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]متابعة التغييرات في العناصر التحريرية[br]Heuliañ kemmoù an traoù stur[de]Änderungen von redaktionellen Inhalten nachvollziehen[en]Tracking changes of editorial objects[eo]Superrigardo de la modifoj de la redaktaj objektoj[es]Seguimiento de las modificaciones de los objetos editoriales[fa]پيگيري اصلاحات موضوع‌هاي سردبيري[fr]Suivi des modifications des objets éditoriaux[fr_fem]Suivi des modifications des objets éditoriaux[fr_tu]Suivi des modifications des objets éditoriaux[it]Il rilevamento delle revisioni sugli oggetti editoriali[lb]Verwaltung vun de Versiounen vun den Objekter[nl]De revisies van de editoriale objecten volgen[oc_ni_mis]Seguit dei moudificacioun dei ouget editourial[pt]Seguimento das modificações dos objectos editoriais[pt_br]Acompanhamento das alterações dos objetos editoriais[ru]История изменений[sk]Sledujte zmeny redakčných objektov[uk]Відстеження змін об’єктів, що редагуються</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', '', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'revisions', '', 'oui', 'oui', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', 'd8c271d1e89d9b7c066125e6042f8bd7'),
(16, 16, 'SAFEHTML', 'images/safehtml-32.png', '003.001.003', '', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]حماية المنتديات من هجمات من نوع الأوامرالعابرة للمواقع[br]Gwarezadur ar forum ouzh argadennoù evel cross-site scripting[de]Schutz der Foren gegen cross-site scripting Attacken[en]Forums protection against cross-site scripting attacks[eo]Ŝirmilo por la forumoj kontraŭ transreteja atakoj[es]Protección de los foros contra ataques de type cross-site scripting[fr]Protection des forums contre les attaques de type cross-site scripting[fr_fem]Protection des forums contre les attaques de type cross-site scripting[fr_tu]Protection des forums contre les attaques de type cross-site scripting[it]Protezione del forum contro gli attacchi di tipo cross-site scripting[nl]Bescherming van forums tegen cross-site scripting[oc_ni_mis]Proutecioun dei fòrou countra lu atac de tìpou cross-site scripting[pt]Protecção dos fóruns contra os ataques do tipo cross-site scripting[pt_br]Proteção dos foruns contra ataques do tipo cross-site scripting[ru]Защищает форму комментариев от межсайтового скриптинга (XSS)[sk]Ochrana diskusných fór pred útokmi, ako cross-site scripting[uk]Захищає форуми від міжсайтового скриптингу (XSS)</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', 'a:4:{i:1;a:2:{s:3:\"nom\";s:12:\"Roman Ivanov\";s:3:\"url\";s:0:\"\";}i:2;a:2:{s:3:\"nom\";s:10:\"Pixel-Apes\";s:3:\"url\";s:0:\"\";}i:3;a:2:{s:3:\"nom\";s:8:\"JetStyle\";s:3:\"url\";s:0:\"\";}i:4;a:2:{s:3:\"nom\";s:47:\"https://wackowiki.org/doc/Dev/Projects/SafeHTML\";s:3:\"url\";s:63:\"https://bitbucket.org/wackowiki/wackowiki/src/master/wacko/lib/\";}}', 'a:1:{i:1;a:2:{s:3:\"nom\";s:3:\"GPL\";s:3:\"url\";s:40:\"http://www.gnu.org/licenses/gpl-3.0.html\";}}', '', 'http://www.ohloh.net/p/safehtml', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', 'a:1:{s:8:\"SAFEHTML\";s:6:\"1.3.12\";}', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'safehtml', '', 'oui', 'non', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', 'c8812d52a68501033e7b3ca862eb6c08'),
(17, 17, 'SITES', 'prive/themes/spip/images/site-32.png', '004.002.002', '1.2.0', '[4.3.0;4.*]', '4.3', '<multi>[ar]مواقع وترخيص في SPIP (خاص وعمومي)[br]Lec’hioù ha sindikadur e SPIP (prevez ha publik)[de]Verwaltung verlinkter und syndizierter Websites mit  SPIP (im öffentlichen und Redaktionsbereich)[en]Sites and syndication in SPIP (private and public)[eo]Retejoj kaj abonrilato en SPIP (privata kaj publika)[es]Sitios y sindicación en SPIP (privado y público)[fa]سايت‌ها و مشترك‌سازي‌ها در اسپسپ (خصوصي و همگاني)[fr]Sites et syndication dans SPIP (privé et public)[fr_fem]Sites et syndication dans SPIP (privé et public)[fr_tu]Sites et syndication dans SPIP (privé et public)[it]Siti e syndication in SPIP (privato e pubblica)[lb]Websäiten a Syndicatioun am SPIP (privat an ëffentlech)[mg]Sites et syndication dans SPIP (privé et public)[nl]Sites en Websyndicatie in SPIP (privé en publiek)[oc_ni_mis]Sit e sindicacioun en SPIP (privat et pùblicou)[pt]Sítios e vinculação em SPIP (privado e público)[pt_br]Sites e sindicação do SPIP (privado e público)[ru]Подключение других сайтов по RSS[sk]Stránky a syndikácia v SPIPe (súkromná aj verejná)[uk]Підключення інших сайтів по RSS</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', '', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'sites', '', 'oui', 'oui', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', 'b91bf04e5bcbd3acd1a25d8cf19d53b3'),
(18, 18, 'STATS', 'prive/themes/spip/images/statistique-32.png', '003.001.009', '1.0.1', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]إحصاءات SPIP[br]Statistikoù SPIP[de]SPIP Statistiken[en]Statistics of SPIP[eo]Statistikoj de SPIP[es]Estadísticas de SPIP[fa]آمارهاي اسپيپ[fr]Statistiques de SPIP[fr_fem]Statistiques de SPIP[fr_tu]Statistiques de SPIP[it]Statistiche di SPIP[lb]SPIP-Statistiken[nl]Statistieken van SPIP[oc_ni_mis]Estatìstica de SPIP[pt]Estatísticas de SPIP[pt_br]Estatísticas do SPIP[ru]Статистика посещений сайта[sk]Štatistiky SPIPu[uk]Статистика відвідувань сайту</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', '', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'statistiques', '', 'oui', 'oui', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', '17411e14bf4b5cf386077551b7154468');
INSERT INTO `spip_paquets` (`id_paquet`, `id_plugin`, `prefixe`, `logo`, `version`, `version_base`, `compatibilite_spip`, `branches_spip`, `description`, `auteur`, `credit`, `licence`, `copyright`, `lien_doc`, `lien_demo`, `lien_dev`, `etat`, `etatnum`, `dependances`, `procure`, `date_crea`, `date_modif`, `id_depot`, `nom_archive`, `nbo_archive`, `maj_archive`, `src_archive`, `traductions`, `actif`, `installe`, `recent`, `maj_version`, `superieur`, `obsolete`, `attente`, `constante`, `signature`) VALUES
(19, 19, 'SVP', 'svp.svg', '003.001.011', '0.6.2', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]يقدم هذا الملحق، من جهة، دارة تتيح تنفيذ بحث متعدد المعايير حول الملحقات وتجميع معلومات عنها (نماذج وظيفية، نماذج تصاميمن صفحات نموذجية) ومن جهة أخرى، يقدم واجهة لإدارة الملحقات والعلاقات بينها.[de]SVP stellt ein API bereit, mit dem SPIP-Plugins (Zusatzfunktionen, Themen und  Skelette) nach mehreren Kriterien gesucht  und ausgewählt werden können und bietet eine Oberfläche zur Verwaltung der  Plugins sowie ihrer Abhängigkeiten.[en]On one hand, this plugin provides an API to perform multi-criteria searches, to collect and present information on SPIP plugins (functional modules, themes, and skeletons) and on the other hand, proposes a new administration interface to manage the dependencies between plugins.[eo]Tiu kromprogramo disponigas, unue, API-on ebligante plurkriterie serĉi, kolekti kaj prezenti informojn pri SPIP-kromprogramoj (funkciaj, aspektaj kaj skeletaj), kaj, due, nova interfacon de mastrumado de kromprogramoj, kiu zorgas pri la dependeco inter la kromprogramoj.[es]Este plugin proporciona, por un lado, una API que permite efectuar búsquedas multi-criterio, recopilar y presentar información sobre los plugins (módulos funcionales, temas y esqueletos) y, por otro lado, una nueva interfaz de administración de los plugins que gestiona las dependencias entre ellos.[fa]اين پلاگينن،‌ از يك طرف يك آي.پي.يي براي جستجو‌‌هاي چند معياره  براي گردآوري و ارايه‌ي اطلاعات در مورد پلاگين‌هاي اسپيپ (مادوول‌هاي كاركردي، تم‌ها و اسكلث‌ها) در اختيار مي‌گذارد، و از طرف ديگر، يك واسط مديريتي جديد براي مديريت وابستگي‌هاي بين پلاگين‌ها را پيشنهاد مي‌كند.[fr]Ce plugin fournit, d’une part,  une API permettant d’effectuer des recherches multi-critères, de collecter, et de présenter les informations sur les plugins SPIP (modules fonctionnels, thèmes et squelettes) et d’autre part, une nouvelle interface d’administration des plugins gérant les dépendances entre plugins.[fr_fem]Ce plugin fournit, d’une part,  une API permettant d’effectuer des recherches multi-critères, de collecter, et de présenter les informations sur les plugins SPIP (modules fonctionnels, thèmes et squelettes) et d’autre part, une nouvelle interface d’administration des plugins gérant les dépendances entre plugins.[fr_tu]Ce plugin fournit, d’une part,  une API permettant d’effectuer des recherches multi-critères, de collecter, et de présenter les informations sur les plugins SPIP (modules fonctionnels, thèmes et squelettes) et d’autre part, une nouvelle interface d’administration des plugins gérant les dépendances entre plugins.[it]Da un lato, questo plugin fornisce un’API per eseguire ricerche multi-criteri, per raccogliere e presentare informazioni su SPIP plugin (moduli funzionali, temi e scheletri) e, dall’altro, propone una nuova interfaccia di amministrazione per gestire le dipendenze tra i plugin.[nl]Enerzijds biedt deze plugin een API aan voor het multi-criteria zoeken, het verzamelen en het tonen van informatie over SPIP Plugins (functionele modules, thema’s en skeletten), anderzijds biedt het een nieuwe interface voor het beheer van plugins dat ook de onderlinge afhankelijkheden in acht neemt.[oc_ni_mis]Aqueu plugin fournisse, premieramen, una API que permete d’efetuà dei recercà multi-critèri, de couletà, e de presentà li infourmacioun soubre lu plugin SPIP (module fountiounal, tèma e esquèletrou), e segoundamen, una interfaça nouvela d’aministracioun dei plugin que gèron li dependança tra lu plugin.[pt]Por um lado, este plugin fornece um API que permite efectuar pesquisar multi-critério, recolher e apresentar informação sobre plugins SPIP (módulos funcionais, temas e modelos). Por outro lado, propõe uma nova interface de administração, para gerir as dependências entre plugins.[pt_br]Este plugin fornece, por um lado, uma API que permite fazer buscas culti-critérios, coletar e apresentar as informações sobre os plugins SPIP (módulos funcionais, temas e templates) e, por outro lado, uma nova interface de administração dos plugins, gerenciando as dependências entre plugins.[ru]Этот модуль предоставляет API и интерфейс для управления плагинами SPIP.[sk]Tento zásuvný modul poskytuje, po prvé, aplikáciu umožňujúcu vykonávať vyhľadávania na základe viacerých kritérií, vyhľadať a zobraziť informácie o zásuvných moduloch SPIPu (funkčných moduloch, farebných motívoch i šablónach) a po druhé, nové rozhranie nastavení zásuvných modulov riadi závislosti medzi zásuvnými modulmi.[uk]З одного боку, цей плагін забезпечує API для виконання пошуку по безлічі критеріїв, щоб зібрати і представити інформацію про SPIP-плагіни (функціональні модулі, теми і шаблони), а з іншого боку, пропонує новий інтерфейс адміністрування для управління залежностями між плагінами.</multi>', 'a:2:{i:1;a:3:{s:3:\"nom\";s:14:\"Eric Lupinacci\";s:3:\"url\";s:23:\"http://blog.smellup.net\";s:4:\"mail\";s:0:\"\";}i:2;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', 'a:1:{i:1;a:2:{s:3:\"nom\";s:5:\"GPL 3\";s:3:\"url\";s:40:\"http://www.gnu.org/licenses/gpl-3.0.html\";}}', '', 'http://blog.smellup.net/spip.php?rubrique1', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:1:{i:0;a:2:{s:10:\"archiviste\";a:2:{s:3:\"nom\";s:10:\"archiviste\";s:13:\"compatibilite\";s:8:\"[2.2.0;]\";}s:11:\"php:openssl\";a:1:{s:3:\"nom\";s:11:\"php:openssl\";}}}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'svp', '', 'oui', 'oui', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', '962772ff658dd773228eabdde4f6c0db'),
(20, 20, 'TW', 'textwheel-32.png', '003.002.001', '', '[4.3.0;4.*]', '4.3', '<multi>[ar]دمج TextWheel في SPIP[br]Lakaat e TextWheel e SPIP[de]Integration von TextWheel in SPIP[en]Integrate TextWheel in SPIP[eo]Uzi „TextWheel“ en SPIP[es]Integrar TextWheel en SPIP[fa]ادغام چرخ‌نويس (TextWheel) در اسپيپ[fr]Intégrer TextWheel dans SPIP[fr_fem]Intégrer TextWheel dans SPIP[fr_tu]Intégrer TextWheel dans SPIP[it]Integra TextWheel in SPIP[lb]TextWheel a SPIP integréieren[nl]TextWheel in SPIP integreren[oc_ni_mis]Integrà TextWheel en SPIP[pt]Integrar TextWheel em SPIP[pt_br]Integrar TextWheel com o SPIP[ru]Интегрировать TextWheel в SPIP[sk]Integrovať TextWheel do SPIPu[uk]Інтегрувати TextWheel в SPIP</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', 'a:1:{i:1;a:2:{s:3:\"nom\";s:8:\"GNU/LGPL\";s:3:\"url\";s:37:\"http://www.gnu.org/licenses/lgpl.html\";}}', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:1:{i:0;a:2:{s:4:\"yaml\";a:2:{s:3:\"nom\";s:4:\"yaml\";s:13:\"compatibilite\";s:8:\"[1.5.3;]\";}s:11:\"memoization\";a:2:{s:3:\"nom\";s:11:\"memoization\";s:13:\"compatibilite\";s:8:\"[1.8.3;]\";}}}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'textwheel', '', 'oui', 'non', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', 'd6f97fb69307b4263349d6a9be469da7'),
(21, 21, 'URLS', 'prive/themes/spip/images/url-32.png', '004.001.006', '2.0.1', '[4.2.0;4.*]', '4.2,4.3', '<multi>[ar]إدارة تنوعات عناوين URL ذات المعنى ام لا[br]Merañ an adstummoù URL sklaer pe ket[de]Verwaltung von URL-Varianten[en]Management of the URL variants, meaningful or not[eo]Mastrumado de aliformaj retadresoj (URL), sencaj aŭ ne[es]Gestión de las variantes de URL significativas o no[eu]URL aldaeren kudeaketa, adierazgarriak izan ala ez[fa]مديريت تنوع يو.آر.ال‌هاي مهم يا غيرمهم[fr]Gestion des variantes d’URL signifiantes ou non[fr_fem]Gestion des variantes d’URL signifiantes ou non[fr_tu]Gestion des variantes d’URL signifiantes ou non[it]Gestione delle varianti significative URL, o non[nl]Beheer van de URL’s varianten (betekenisdragend of niet)[oc_ni_mis]Gestioun dei varianti d’URL significanti o noun[pt_br]Gerenciamento das variantes de URLs significantes ou não[ru]SEO-friendly URLs (ЧПУ ссылки)[sk]Riadenie variantov URL, či už sémantických, alebo nie[uk]SEO-friendly URLs (ЧПУ посилання)</multi>', 'a:1:{i:1;a:3:{s:3:\"nom\";s:14:\"Collectif SPIP\";s:3:\"url\";s:0:\"\";s:4:\"mail\";s:0:\"\";}}', '', '', '', '', '', '', 'stable', 4, 'a:3:{s:9:\"necessite\";a:0:{}s:9:\"librairie\";a:0:{}s:7:\"utilise\";a:0:{}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '0000-00-00 00:00:00', 'urls_etendues', '', 'oui', 'oui', 1, '', 'non', 'non', 'non', '_DIR_PLUGINS_DIST', '726e4780ee58866e55935a255abda176');

-- --------------------------------------------------------

--
-- Table structure for table `spip_plugins`
--

CREATE TABLE `spip_plugins` (
  `id_plugin` bigint(21) NOT NULL,
  `prefixe` varchar(48) NOT NULL DEFAULT '',
  `nom` text NOT NULL DEFAULT '',
  `slogan` text NOT NULL DEFAULT '',
  `vmax` varchar(24) NOT NULL DEFAULT '',
  `date_crea` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modif` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `compatibilite_spip` varchar(24) NOT NULL DEFAULT '',
  `branches_spip` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `spip_plugins`
--

INSERT INTO `spip_plugins` (`id_plugin`, `prefixe`, `nom`, `slogan`, `vmax`, `date_crea`, `date_modif`, `compatibilite_spip`, `branches_spip`) VALUES
(1, 'SQUELETTES_PAR_RUBRIQUE', 'Squelettes par Rubrique', '<multi>[ar]دعم الصفحات النموذجية ذات اللواحق في SPIP[de]Unterstützung von Skeletten mit Namenszusatz in SPIP[en]Support of suffixed templates in SPIP[eo]Subteno por la sufiksitaj skeletoj en SPIP[es]Implementación de esqueletos con sufijos de SPIP[fa]پشتيباني از اسكليت‌هاي  پسوندي در اسپيپ[fr]Support des squelettes suffixés dans SPIP[fr_fem]Support des squelettes suffixés dans SPIP[fr_tu]Support des squelettes suffixés dans SPIP[it]Supporto di modelli con suffisso in SPIP[lb]Ënnerstëtzung fir Skeletter mat Suffix am SPIP[nl]Ondersteuning van suffix ingewijden skeletten in SPIP[oc_ni_mis]Supouòrt dei esquèletrou sufissat en SPIP[pt]Apoio de modelos com sufixo em SPIP[pt_br]Suporte aos gabaritos com sufixo do SPIP[ru]Номерные шаблоны для SPIP[sk]Podpora pripojených šablón v SPIPe[uk]Шаблони за номерами для SPIP</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(2, 'AIDE', '<multi>[ar]تعليمات SPIP[de]SPIP Hilfe[en]SPIP help[es]Ayuda SPIP[eu]SPIP laguntza[fr]Aide SPIP[fr_tu]Aide SPIP[it]Aiuto SPIP[mg]Aide SPIP[pt]Ajuda SPIP[pt_br]Ajuda do SPIP</multi>', '<multi>[ar]تعليمات SPIP الفورية[de]SPIP Online-Hilfe[en]SPIP online help[es]Ayuda en línea de SPIP[eu]SPIP online laguntza[fr]Aide en ligne de SPIP[fr_tu]Aide en ligne de SPIP[it]Guida in linea di SPIP[mg]Aide en ligne de SPIP[pt]Ajuda online do SPIP[pt_br]Ajuda online do SPIP</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(3, 'ARCHIVISTE', '<multi>[fr]Archiviste[pt_br]Arquivista</multi>', '<multi>[fr]Gérer des archives de fichiers[pt_br]Gerenciar arquivos compactados</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(4, 'BIGUP', '<multi>[ar]تحميل كبير[de]Big Upload[en]Big Upload[fr]Big Upload[pt_br]Big Upload</multi>', '<multi>[ar]تحميل الملفات مهما كان حجمها[de]Dateien hochladen, egal wie gross sie sind.[en]Upload files, whatever their size[fr]Téléverser des fichiers, quelque soit leur taille[pt_br]Transferir arquivos de qualquer tamanho</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(5, 'COMPAGNON', '<multi>[ar]الرفيق[br]Ambrouger[de]Begleiter[en]Companion[eo]Kompano[es]Compañero[fa]همراه[fr]Compagnon[fr_fem]Compagnon[fr_tu]Compagnon[hac]ھامڕا[it]Assistente[ja]仲間さん[lb]Compagnon[nl]Metgezel[oc_ni_mis]Coumpàgnou[pt]Guia[pt_br]Companheiro[ru]Помощник (Companion)[sk]Compagnon[uk]Помічник (Companion)</multi>', '<multi>[ar]مرافق الخطوات الأولى في SPIP[br]Ambrouger evit kregiñ gant SPIP[de]Assistent für die ersten Schritte mit SPIP[en]First steps wizard with SPIP[eo]Helpanto por SPIP-komencantoj[es]Asistente para dar los primeros pasos con SPIP[fa]همراه اول با اسپيپ نيست[fr]Assistant de premiers pas avec SPIP[fr_fem]Assistant de premiers pas avec SPIP[fr_tu]Assistant de premiers pas avec SPIP[hac]ڕانیشاندەرو یەکەمین ھەنگامەکا چنی SPIP[it]Assistente per il primo utilizzo di SPIP[ja]SPIPを使用するように、最初のステップウィザードです。[lb]Assistent fir déi éischt Schrëtt mat SPIP[nl]Assistent van de eerste steppen met SPIP[oc_ni_mis]Assistant de premié pas embé SPIP[pt]Assistente de iniciação a SPIP[pt_br]Assistente de primeiros passos do SPIP[ru]Начальная помощь при работе со SPIP[sk]Sprievodca pri prvých krokoch so SPIPom[uk]Допомога на початку роботи зі SPIP</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(6, 'COMPRESSEUR', 'Compresseur', '<multi>[ar]ضغط أوراق الأنماط ورموز جافاسكريبت[br]Gwaskadurezh css ha javascript[de]Kompression von CSS und Javascript-Code[en]CSS and javascript compression[eo]Densigo css kaj javascript[es]Compresión de css y javascript[fa]فشرده سازي سي.اس.اس‌ها و جاوااسكريبت[fr]Compression des css et javascript[fr_fem]Compression des css et javascript[fr_tu]Compression des css et javascript[hac]دروسکەردەی فشاردریاو سی‌ئێس‌ئێس و جاڤا سکریپتی[it]Compressione di CSS e javascript[ja]CSSとjavascriptの圧縮[lb]Compressioun vun CSS a Javascript[nl]Compressie van CSS en JavaScript[oc_ni_mis]Coumpressioun dei css e javascript[pt]Compressão de css e javascript[pt_br]Compressão dos css e javascript[ru]Плагин для сжатия CSS и Javascript файлов[sk]Kompresia css a javascriptu[uk]Плагін для стискання CSS та Javascript файлів</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(7, 'DUMP', 'Dump', '<multi>[ar]نسخ احتياطي لقاعدة بيانات SPIP واسترجاعها[br]Gwared hag assevel deus an diaz titouroù SPIP[de]Sicherung und Wiederherstellung der  SPIP-Datenbank[en]Backup and restore database SPIP[eo]Savkopio kaj restaŭro de la datumbazo SPIP[es]Copia de seguridad y recuperación de la base de datos de SPIP[fa]بك‌آپ و ذخيره سازي پايگاه داده‌‌هاي اسپيپ[fr]Sauvegarde et restauration de la base SPIP[fr_fem]Sauvegarde et restauration de la base de données SPIP[fr_tu]Sauvegarde et restauration de la base SPIP[hac]پاشەکۆتکەرڎەی و ئەۋەگېڵنای داتابەیسو SPIP[it]Backup e ripristino del database di SPIP[ja]SPIPのデータベースバックアップと復元Sauvegarde et restauration de la base SPIP[lb]Backup an Zeréckspillen vun der SPIP-Datebank[nl]Back-up en restauratie van de SPIP database[oc_ni_mis]Sauvagarda e restauramen de la basa SPIP[pt]Cópia de segurança e restauro da base de dados SPIP[pt_br]Cópia de segurança e restauro da base SPIP[ru]Резервное копирование[sk]Záloha a obnovenie databázy SPIPu[uk]Резервне копіювання і відновлення бази SPIP</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(8, 'IMAGES', 'Images', '<multi>[ar]مرشحات معالجة الصور والألوان[br]Siloù treuzfurmadur skeudennoù ha livioù[de]Bild- und Farbfilter[en]Images processing and colors filters[eo]Filtriloj de bild- kaj kolor-transformo[es]Filtros de transformación de imágenes y de colores[fa]فيلترهاي پردازش تصوير‌ها و رنگ‌ها[fr]Filtres de transformation d’images et de couleurs[fr_fem]Filtres de transformation d’images et de couleurs[fr_tu]Filtres de transformation d’images et de couleurs[it]Filtri di trasformazione delle immagini e dei colori[ja]画像および色変換フィルタ[lb]Ännerungs-Filteren fir d’Biller an d’Faarwen[nl]Beeld en kleur transformatie filters[oc_ni_mis]Filtre de trasfourmacioun d’image e de coulou[pt]Processamento de imagens e filtros de cores[pt_br]Filtros de transformação de imagens e de cores[ru]Набор фильтров по работе с изображениями[sk]Filtre na transformáciu obrázkov a farieb[uk]Фільтри для обробки зображень і роботи з кольорами</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(9, 'FORUM', 'Forum', '<multi>[ar]إدارة المنتديات الخاصة والعمومي في SPIP[ast]Alministración de foros privaos y públicos en SPIP[br]Merañ ar foromoù preves ha foran e-barzh SPIP[de]Verwaltung der privaten und öffentlichen SPIP-Foren[en]Management of private and public forums in SPIP[eo]Mastrumado de la privataj kaj publikaj forumoj de SPIP[es]Administración de los foros privados y públicos en SPIP[fa]مديريت سخنگاه‌هاي خصوصي و همگاني در اسپيپ[fr]Gestion des forums privés et publics dans SPIP[fr_fem]Gestion des forums privés et publics dans SPIP[fr_tu]Gestion des forums privés et publics dans SPIP[it]Gestione dei forum privati e pubblici di SPIP[ja]SPIPの掲示板（プライベートと公開）の管理[lb]Beaarbechte vun de privaten an ëffentleche Forumen am SPIP[nl]Beheer van de privé en openbare SPIP forums[oc_ni_mis]Gestioun dei fòrou privat e pùblicou en SPIP[pt]Gestião dos fóruns públicos e privados em SPIP[pt_br]Gerenciamento dos fóruns privados e públicos do SPIP[ru]Управление форумами и комментариями[sk]Riadenie súkromných aj verejných diskusných fór v SPIPe[uk]Управління загальними і редакційними форумами у SPIP</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(10, 'MEDIABOX', '<multi>[ar]صندوق الفرجة[br]MediaBoest[de]MediaBox[en]MediaBox[eo]MediaBox[es]MediaBox[fa]مدياباكس[fr]MediaBox[fr_fem]MediaBox[fr_tu]MediaBox[it]MediaBox[ja]メディアボックス[lb]MediaBox[nl]MediaBox[oc_ni_mis]MediaBox[pt]MediaBox[pt_br]MediaBox[ru]MediaBox[sk]Multimediálny box[uk]MediaBox</multi>', '<multi>[ar]صندوق الفرجة[br]Boest liesvedia[de]Multimedia-Box[en]Media box[eo]Plurmedia skatolo[es]Caja multimedia[fa]صندوق چندرسانه‌اي[fr]Boîte multimédia[fr_fem]Boîte multimédia[fr_tu]Boîte multimédia[it]Media box[ja]マルチメディアボックス[lb]Mediabox[nl]Multimedia Box[oc_ni_mis]Bouòta multimedia[pt]Media box[pt_br]Caixa multimedia[ru]Медиабокс[sk]Multimediálny box[uk]Медіабокс</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(11, 'MEDIAS', 'Medias', '<multi>[ar]أدارة الوسائط المتعددة في SPIP[br]Merañ ar mediaoù e SPIP[de]Medienverwaltung in  SPIP[en]SPIP’s media management[eo]Mastrumado de ĉiuspecaj dokumentoj en SPIP[es]Gestión de documentos multimedia en SPIP[fa]مديريت رسانه‌ها دراسپيپ[fr]Gestion des médias dans SPIP[fr_fem]Gestion des médias dans SPIP[fr_tu]Gestion des médias dans SPIP[it]Gestione dei media di SPIP[ja]SPIPにおけるメディア管理[lb]Gestioun vun de Medien am SPIP[nl]Beheer van de digitale documenten in SPIP[oc_ni_mis]Gestioun dei media en SPIP[pt]Gestão multimédia de SPIP[pt_br]Gerenciamento de mídias do SPIP[ru]Управление медиа файлами[sk]Správa multimédií v SPIPe[uk]Управління медіа-файлами</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(12, 'MOTS', 'Mots', '<multi>[ar]إدارة المفاتيح ومجموعات المفاتيح في SPIP[br]Merañ gerioù hag strolladoù ger e  SPIP[de]Verwaltung von Schlagworten und Schlagwortgruppen mit  SPIP[en]Management of keywords and keywords groups in SPIP[eo]Mastrumado de ŝlosilvortoj kaj grupoj de ŝlosilvortoj en SPIP[es]Administración de las palabras clave y los grupos de palabras clave en SPIP[fa]مديريت واژه‌ها و گروه‌واژه‌ها در اسپيپ[fr]Gestion des mots et groupes de mots dans SPIP[fr_fem]Gestion des mots-clef et groupes de mots-clef dans SPIP[fr_tu]Gestion des mots et groupes de mots dans SPIP[it]Gestione delle parole e dei gruppi di parole di SPIP[ja]キーワードとキーワードのグループの管理[lb]Gestioun vun de Schlësselwierder a Gruppen am SPIP[nl]Beheer van trefwoorden en groepen van trefwoorden in SPIP[oc_ni_mis]Gestioun dei mot e group de mot en SPIP[pt]Gestão de palavras e grupos de palavras em SPIP[pt_br]Gerenciamento de palavras-chave e grupos de palavras chave do SPIP[ru]Настройка ключей и групп ключей в SPIP[sk]Riadenie kľúčových slov a skupín kľúčových slov v SPIPe[uk]Управління ключами та їх групами в SPIP</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(13, 'PLAN', '<multi>[ar]خريطة الموقع في المجال الخاص[de]Sitemap des Redaktionssystems[en]Site Map in the Private Space[eo]Mapo de la retejo en la privata spaco[es]Mapa del sitio en el área privada[fr]Plan du site dans l’espace privé[fr_fem]Plan du site dans l’espace privé[fr_tu]Plan du site dans l’espace privé[it]Mappa del sito nell’area privata[ja]管理エリアのサイトマップ[nl]Sitemap in het privé gedeelte[pt_br]Mapa do site na área restrita[sk]Mapa stránky v súkromnej zóne</multi>', '<multi>[ar]يحسّن صفحة خريطة الموقع في المجال الخاص[de]Verbesserte Sitemap des Redaktionssystems[en]Improves the page Site Map of the private space.[eo]Plibonigas la mapon de la retejo en la privata spaco[es]Mejora la página del mapa del sitio del área privada[fr]Améliore la page plan du site de l’espace privé[fr_fem]Améliore la page plan du site de l’espace privé[fr_tu]Améliore la page plan du site de l’espace privé[it]Migliora la mappa del sito nell’area privata[ja]管理エリアのサイトマップを改善する。[nl]Verbeterde sitemap in het privé gedeelte[pt_br]Melhora a página mapa do site da área restrita[sk]Vylepší stránku Mapa stránky v súkromnej zóne</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(14, 'PORTE_PLUME', '<multi>[ar]الريشة[de]Federhalter[en]Quill[eo]Plumingo[es]Porta pluma[fa]چوب قلم[fr]Porte plume[fr_fem]Porte plume[fr_tu]Porte plume[it]Portapenne[nl]Penhouder[oc_ni_mis]Pouòrta-pluma[pt]Pena[pt_br]Porte plume[ru]Панель инструментов (Porte plume)[sk]Porte plume[uk]Панель інструментів (Porte plume)</multi>', '<multi>[ar]شريط أدوات لتحسين الكتابة[de]Eine Menüleiste zum Formatieren der Texte[en]A toolbar to enhance your texts[eo]Ilobreto por bone skribi[es]Una barra de herramientas para escribir bien[fa]نوار ابزاري براي بهترنويسي[fr]Une barre d’outils pour bien écrire[fr_fem]Une barre d’outils pour bien écrire[fr_tu]Une barre d’outils pour bien écrire[it]Una barra degli strumenti per scrivere bene[nl]Een penhouder om mooi te schrijven[oc_ni_mis]Una Barra d’óutis da ben escriéure[pt]Uma barra de ferramentas para abrilhantar os seus textos[pt_br]Barre de ferramentas para edição de texto[ru]Дополнительные возможности для текстового редактора[sk]Panel s nástrojmi, vďaka ktorému môžete vylepšiť svoje texty[uk]Додаткові можливості для текстового редактора</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(15, 'REVISIONS', 'Révisions', '<multi>[ar]متابعة التغييرات في العناصر التحريرية[br]Heuliañ  kemmoù an traoù stur[de]Änderungen von redaktionellen Inhalten nachvollziehen[en]Tracking changes of editorial objects[eo]Superrigardo de la modifoj de la redaktaj objektoj[es]Seguimiento de las modificaciones de los objetos editoriales[fa]پيگيري اصلاحات موضوع‌هاي سردبيري[fr]Suivi des modifications des objets éditoriaux[fr_fem]Suivi des modifications des objets éditoriaux[fr_tu]Suivi des modifications des objets éditoriaux[it]Il rilevamento delle revisioni sugli oggetti editoriali[lb]Verwaltung vun de Versiounen vun den Objekter[nl]Revisies laat je toe de  veranderingen van de editorialen objecten zien en volgen.[oc_ni_mis]Seguit dei moudificacioun dei ouget editourial[pt]Seguimento das modificações dos objectos editoriais[pt_br]Acompanhamento das alterações dos objetos editoriais[ru]История изменений[sk]Sledovanie zmien redakčných objektov[uk]Історія змін</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(16, 'SAFEHTML', 'SafeHTML', '<multi>[ar]حماية المنتديات من الأوامرالعابرة للمواقع[br]Gwarezadur ar forum ouzh ar cross-site scripting[de]Schutz der Foren gegen cross-site scripting Attacken[en]Forums protection against cross-site scripting[eo]Ŝirmilo por la forumoj kontraŭ transreteja atakoj[es]Protección de los foros contra el cross-site scripting[fr]Protection des forums contre le cross-site scripting[fr_fem]Protection des forums contre le cross-site scripting[fr_tu]Protection des forums contre le cross-site scripting[it]Protezione del forum contro gli attacchi di tipo cross-site scripting[nl]Bescherming van forums tegen cross-site scripting[oc_ni_mis]Proutecioun dei fòrou countra lou cross-site scripting[pt]Protecção dos fóruns contra o cross-site scripting[pt_br]Proteção dos foruns contra cross-site scripting[ru]Защищает форму комментариев от межсайтового скриптинга (XSS)[sk]Ochrana diskusných fór pred útokmi, ako cross-site scripting[uk]Захищає форуми від міжсайтового скриптингу (XSS)</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(17, 'SITES', 'Sites', '<multi>[ar]إدارة المواقع والترخيص في SPIP[br]Merañ al lec’hioù ha sindikadur e SPIP[de]Verwaltung verlinkter und syndizierter Websites mit  SPIP[en]Management of sites and syndication in SPIP[eo]Mastrumado de retejoj kaj de abonrilato en SPIP[es]Administración de los sitios y de la sindicación en SPIP[fa]مديريت سايت‌ها و مشترك‌سازي در اسپيپ[fr]Gestion des sites et de la syndication dans SPIP[fr_fem]Gestion des sites et de la syndication dans SPIP[fr_tu]Gestion des sites et de la syndication dans SPIP[it]Gestione dei siti e syndication in SPIP[lb]Gestioun vun de Websäiten a Syndicatioun am SPIP[mg]Gestion des sites et de la syndication dans SPIP[nl]Beheer van de sites en van de Websyndicatie in SPIP[oc_ni_mis]Gestioun dei sit e de la sindicacioun en SPIP[pt]Gestão dos sítios e da vinculação em SPIP[pt_br]Gerenciamento de sites e da sindicação do SPIP[ru]Подключение других сайтов по RSS[sk]Riadenie stránok a syndikácie v SPIPe[uk]Підключення інших сайтів по RSS</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(18, 'STATS', '<multi>[ar]الإحصاءات[br]Statistikoù[de]Statistiken[en]Statistics[eo]Statistikoj[es]Estadísticas[fa]آمارها[fr]Statistiques[fr_fem]Statistiques[fr_tu]Statistiques[it]Statistiche[lb]Statistiken[nl]Statistieken[oc_ni_mis]Estatìstica[pt]Estatísticas[pt_br]Estatísticas[ru]Статистика[sk]Štatistiky[uk]Статистика</multi>', '<multi>[ar]إدارة الإحصاءات في SPIP[br]Merañ an statistikoù e SPIP[de]Verwlatung der SPIIP-Statistiken[en]Statistics management in SPIP[eo]Mastrumado de la statistikoj en SPIP[es]Administración de las estadísticas de SPIP[fa]مديريت آمارها در اسپيپ[fr]Gestion des statistiques dans SPIP[fr_fem]Gestion des statistiques dans SPIP[fr_tu]Gestion des statistiques dans SPIP[it]Gestione delle statistiche di SPIP[lb]Verwalte vun de SPIP-Statistiken[nl]Beheer van de bezoekenstatistieken in SPIP[oc_ni_mis]Gestioun dei estatìstica en SPIP[pt]Gerir as estatísticas em SPIP[pt_br]Gerenciamento das estatísticas do SPIP[ru]Плагин по учету статистики посещений вашего сайта[sk]Správa štatistík v SPIPe[uk]Плагін з обліку статистики відвідувань вашого сайту</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(19, 'SVP', 'SVP', '<multi>[ar]خادم معلومات الملحقات وتحميلها[br]SerVijer titouriñ hag enrollañ ar Plugins[de]Informations- und Download-Server für Plugins[en]Information and download server of plugins[eo]SerVilo pri Informo kaj elŝuto de kromProgramoj[es]Servidor de información y descarga de plugins[fa]سرور اطلاعات و بارگذاري پلاگين‌ها[fr]SerVeur d’information et de téléchargement des Plugins[fr_fem]SerVeur d’information et de téléchargement des Plugins[fr_tu]SerVeur d’information et de téléchargement des Plugins[it]Informazioni e server per il download dei plugin[nl]SerVer voor informatie en downloaden van Plugins[oc_ni_mis]SerVidou d’infourmacion e de telechargamen dei Plugin[pt]Servidor de informação e download de Plugins[pt_br]Servidor de informações e transferência de Plugins[ru]Управление плагинами[sk]Server na zisťovanie informácií o zásuvných moduloch a ich sťahovanie[uk]Інформація про сервер для завантаження плагінів</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(20, 'TW', 'TextWheel pour SPIP', '<multi>[ar]إدارة الكتابة في SPIP بواسطة TextWheel[br]Merañ al lizherennañ SPIP gant TextWheel[de]Typographie in SPIP mit TextWheel steuern[en]Management of SPIP typography with TextWheel[eo]SPIP-tipografio kun „TextWheel“[es]Administración de la tipografía SPIP con TextWheel[fa]مديريت حروف‌نگاري در اسپيپ با چرخ‌نويس[fr]Gestion de la typographie SPIP avec TextWheel[fr_fem]Gestion de la typographie SPIP avec TextWheel[fr_tu]Gestion de la typographie SPIP avec TextWheel[it]Gestione della tipografia di SPIP con TextWheel[lb]Verwalte vun der SPIP-Typografie mat TextWheel[nl]Beheer van de SPIP typografie dank zij TextWheel[oc_ni_mis]Gestioun de la tipougrafìa SPIP embé TextWheel[pt]Gestão da tipografia SPIP com TextWheel[pt_br]Gerenciamento da tipografia do SPIP com TextWheel[ru]Управлять оформлением SPIP c помощью TextWheel[sk]Správa typografie SPIPu s modulom TextWheel[uk]Управляти оформленням SPIP за допомогою TextWheel</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(21, 'URLS', 'Urls Etendues', '<multi>[ar]إدارة تنوعات عناوين URL ذات المعنى ام لا[br]Merañ an adstummoù URL sklaer pe ket[de]Verwaltung von URL-Varianten[en]Management of the URL variants, meaningful or not[eo]Mastrumado de aliformaj retadresoj (URL), sencaj aŭ ne[es]Gestión de las variantes de URL significativas o no[eu]URL aldaeren kudeaketa, adierazgarriak izan ala ez[fa]مديريت يو.آر.ال‌هاي مهم يا غيرمهم[fr]Gestion des variantes d’URL signifiantes ou non[fr_fem]Gestion des variantes d’URL signifiantes ou non[fr_tu]Gestion des variantes d’URL signifiantes ou non[it]Gestione delle varianti significative URL, o non[nl]Beheer van de URL varianten (betekenisdragend of niet)[oc_ni_mis]Gestioun dei varianti d’URL significanti o noun[pt_br]Gerenciamento das variantes de URLs significantes ou não[ru]SEO-friendly URLs (ЧПУ ссылки)[sk]Riadenie variantov URL, či už sémantických, alebo nie[uk]SEO-friendly URLs (ЧПУ посилання)</multi>', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `spip_referers`
--

CREATE TABLE `spip_referers` (
  `referer_md5` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `referer` varchar(255) DEFAULT NULL,
  `visites` int(10) UNSIGNED NOT NULL,
  `visites_jour` int(10) UNSIGNED NOT NULL,
  `visites_veille` int(10) UNSIGNED NOT NULL,
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_referers_articles`
--

CREATE TABLE `spip_referers_articles` (
  `id_article` int(10) UNSIGNED NOT NULL,
  `referer_md5` bigint(20) UNSIGNED NOT NULL,
  `referer` varchar(255) NOT NULL DEFAULT '',
  `visites` int(10) UNSIGNED NOT NULL,
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_resultats`
--

CREATE TABLE `spip_resultats` (
  `recherche` char(16) NOT NULL DEFAULT '',
  `id` int(10) UNSIGNED NOT NULL,
  `points` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `table_objet` varchar(30) NOT NULL DEFAULT '',
  `serveur` char(16) NOT NULL DEFAULT '',
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_rubriques`
--

CREATE TABLE `spip_rubriques` (
  `id_rubrique` bigint(21) NOT NULL,
  `id_parent` bigint(21) NOT NULL DEFAULT 0,
  `titre` text NOT NULL DEFAULT '',
  `descriptif` text NOT NULL DEFAULT '',
  `texte` longtext NOT NULL DEFAULT '',
  `id_secteur` bigint(21) NOT NULL DEFAULT 0,
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statut` varchar(10) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lang` varchar(10) NOT NULL DEFAULT '',
  `langue_choisie` varchar(3) DEFAULT 'non',
  `statut_tmp` varchar(10) NOT NULL DEFAULT '0',
  `date_tmp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `profondeur` smallint(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `spip_rubriques`
--

INSERT INTO `spip_rubriques` (`id_rubrique`, `id_parent`, `titre`, `descriptif`, `texte`, `id_secteur`, `maj`, `statut`, `date`, `lang`, `langue_choisie`, `statut_tmp`, `date_tmp`, `profondeur`) VALUES
(1, 0, 'Home', '', '', 1, '2025-01-22 12:58:33', 'publie', '2025-01-22 13:58:33', 'fr', 'non', '0', '0000-00-00 00:00:00', 0),
(2, 0, 'About Us', '', '', 2, '2025-01-17 08:08:57', 'publie', '2025-01-17 09:08:57', 'fr', 'non', '0', '0000-00-00 00:00:00', 0),
(3, 0, 'Car Rentals', '', '', 3, '2025-01-20 09:06:03', 'publie', '2025-01-20 10:06:03', 'fr', 'non', '0', '0000-00-00 00:00:00', 0),
(4, 0, 'Reviews', '', '', 4, '2025-01-21 10:46:03', 'publie', '2025-01-21 11:46:03', 'fr', 'non', '0', '0000-00-00 00:00:00', 0),
(5, 0, 'Contact US', '', '', 5, '2025-01-16 13:57:18', 'publie', '2025-01-16 14:57:18', 'fr', 'non', '0', '0000-00-00 00:00:00', 0),
(6, 1, 'Slide', '', '', 1, '2025-01-20 13:11:05', 'publie', '2025-01-20 14:11:05', 'fr', 'non', '0', '0000-00-00 00:00:00', 1),
(7, 5, 'Board of Direct', '', '', 5, '2025-01-16 13:57:18', 'publie', '2025-01-16 14:57:18', 'fr', 'non', '0', '0000-00-00 00:00:00', 1),
(8, 3, 'Car Details', '', '', 3, '2025-01-20 09:06:03', 'publie', '2025-01-20 10:06:03', 'fr', 'non', '0', '0000-00-00 00:00:00', 1),
(9, 1, 'Our Features', '', 'Discover a world of convenience, safety, and customization, paving the way for unforgettable adventures and seamless mobility solutions.', 1, '2025-01-22 13:00:49', 'publie', '2025-01-22 13:58:33', 'fr', 'non', '0', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spip_syndic`
--

CREATE TABLE `spip_syndic` (
  `id_syndic` bigint(21) NOT NULL,
  `id_rubrique` bigint(21) NOT NULL DEFAULT 0,
  `id_secteur` bigint(21) NOT NULL DEFAULT 0,
  `nom_site` text NOT NULL DEFAULT '',
  `url_site` text NOT NULL DEFAULT '',
  `url_syndic` text NOT NULL DEFAULT '',
  `descriptif` text NOT NULL DEFAULT '',
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `syndication` varchar(3) NOT NULL DEFAULT '',
  `statut` varchar(10) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_syndic` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_index` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `moderation` varchar(3) DEFAULT 'non',
  `miroir` varchar(3) DEFAULT 'non',
  `oubli` varchar(3) DEFAULT 'non',
  `resume` varchar(3) DEFAULT 'oui'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_syndic_articles`
--

CREATE TABLE `spip_syndic_articles` (
  `id_syndic_article` bigint(21) NOT NULL,
  `id_syndic` bigint(21) NOT NULL DEFAULT 0,
  `titre` text NOT NULL DEFAULT '',
  `url` text NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lesauteurs` text NOT NULL DEFAULT '',
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statut` varchar(10) NOT NULL DEFAULT '0',
  `descriptif` text NOT NULL DEFAULT '',
  `lang` varchar(10) NOT NULL DEFAULT '',
  `url_source` tinytext NOT NULL DEFAULT '',
  `source` tinytext NOT NULL DEFAULT '',
  `tags` text NOT NULL DEFAULT '',
  `raw_data` text NOT NULL DEFAULT '',
  `raw_format` tinytext NOT NULL DEFAULT '',
  `raw_methode` tinytext NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_types_documents`
--

CREATE TABLE `spip_types_documents` (
  `extension` varchar(10) NOT NULL DEFAULT '',
  `titre` text NOT NULL DEFAULT '',
  `descriptif` text NOT NULL DEFAULT '',
  `mime_type` varchar(100) NOT NULL DEFAULT '',
  `inclus` enum('non','image','embed') NOT NULL DEFAULT 'non',
  `upload` enum('oui','non') NOT NULL DEFAULT 'oui',
  `media_defaut` varchar(10) NOT NULL DEFAULT 'file',
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `spip_types_documents`
--

INSERT INTO `spip_types_documents` (`extension`, `titre`, `descriptif`, `mime_type`, `inclus`, `upload`, `media_defaut`, `maj`) VALUES
('3ga', '3GP Audio File', '', 'audio/3ga', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('3gp', '3rd Generation Partnership Project', '', 'video/3gpp', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('7z', '7 Zip', '', 'application/x-7z-compressed', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('aac', 'Advanced Audio Coding', '', 'audio/mp4a-latm', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('abw', 'Abiword', '', 'application/abiword', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ac3', 'AC-3 Compressed Audio', '', 'audio/x-aac', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('ai', 'Adobe Illustrator', '', 'application/illustrator', 'non', 'oui', 'image', '2025-01-15 11:45:40'),
('aifc', 'Compressed AIFF Audio', '', 'audio/x-aifc', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('aiff', 'AIFF', '', 'audio/x-aiff', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('amr', 'Adaptive Multi-Rate Audio', '', 'audio/amr', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('anx', 'Annodex', '', 'application/annodex', 'embed', 'oui', 'file', '2025-01-15 11:45:40'),
('ape', 'Monkey\'s Audio File', '', 'audio/x-monkeys-audio', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('asf', 'Windows Media', '', 'video/x-ms-asf', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('asx', 'Advanced Stream Redirector', '', 'video/x-ms-asf', 'non', 'oui', 'video', '2025-01-15 11:45:40'),
('avi', 'AVI', '', 'video/x-msvideo', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('axa', 'Annodex Audio', '', 'audio/annodex', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('axv', 'Annodex Video', '', 'video/annodex', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('bib', 'BibTeX', '', 'application/x-bibtex', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('bin', 'Binary Data', '', 'application/octet-stream', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('blend', 'Blender', '', 'application/x-blender', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('bmp', 'BMP', '', 'image/x-ms-bmp', 'image', 'oui', 'image', '2025-01-15 11:45:40'),
('bz2', 'BZip', '', 'application/x-bzip2', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('c', 'C source', '', 'text/x-csrc', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('cls', 'LaTeX Class', '', 'text/x-tex', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('csl', 'Citation Style Language', '', 'application/xml', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('css', 'Cascading Style Sheet', '', 'text/css', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('csv', 'Comma Separated Values', '', 'text/csv', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('deb', 'Debian', '', 'application/x-debian-package', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('djvu', 'DjVu', '', 'image/vnd.djvu', 'non', 'oui', 'image', '2025-01-15 11:45:40'),
('doc', 'Word', '', 'application/msword', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('docm', 'Word', '', 'application/vnd.ms-word.document.macroEnabled.12', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('docx', 'Word', '', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('dot', 'Word Template', '', 'application/msword', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('dotm', 'Word template', '', 'application/vnd.ms-word.template.macroEnabled.12', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('dotx', 'Word template', '', 'application/vnd.openxmlformats-officedocument.wordprocessingml.template', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('dv', 'Digital Video', '', 'video/x-dv', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('dvi', 'LaTeX DVI', '', 'application/x-dvi', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('emf', 'Enhanced Metafile', '', 'image/x-emf', 'non', 'oui', 'image', '2025-01-15 11:45:40'),
('enl', 'EndNote Library', '', 'application/octet-stream', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ens', 'EndNote Style', '', 'application/octet-stream', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('eps', 'PostScript', '', 'application/postscript', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('epub', 'EPUB', '', 'application/epub+zip', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('f4a', 'Audio for Adobe Flash Player', '', 'audio/mp4', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('f4b', 'Audio Book for Adobe Flash Player', '', 'audio/mp4', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('f4p', 'Protected Video for Adobe Flash Player', '', 'video/mp4', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('f4v', 'Video for Adobe Flash Player', '', 'video/mp4', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('flac', 'Free Lossless Audio Codec', '', 'audio/x-flac', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('flv', 'Flash Video', '', 'video/x-flv', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('geojson', 'GeoJSON', '', 'application/json', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('gif', 'GIF', '', 'image/gif', 'image', 'oui', 'image', '2025-01-15 11:45:40'),
('gpx', 'GPS eXchange Format', '', 'application/gpx+xml', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('gz', 'GZ', '', 'application/x-gzip', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('h', 'C header', '', 'text/x-chdr', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('html', 'HTML', '', 'text/html', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ics', 'iCalendar', '', 'text/calendar', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('jar', 'Java Archive', '', 'application/java-archive', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('jpg', 'JPEG', '', 'image/jpeg', 'image', 'oui', 'image', '2025-01-15 11:45:40'),
('json', 'JSON', '', 'application/json', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('kml', 'Keyhole Markup Language', '', 'application/vnd.google-earth.kml+xml', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('kmz', 'Google Earth Placemark File', '', 'application/vnd.google-earth.kmz', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('lyx', 'Lyx file', '', 'application/x-lyx', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('m2p', 'MPEG-PS', '', 'video/MP2P', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('m2ts', 'BDAV MPEG-2 Transport Stream', '', 'video/MP2T', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('m3u', 'M3U Playlist', '', 'text/plain', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('m3u8', 'M3U8 Playlist', '', 'text/plain', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('m4a', 'MPEG4 Audio', '', 'audio/mp4a-latm', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('m4b', 'MPEG4 Audio', '', 'audio/mp4a-latm', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('m4p', 'MPEG4 Audio', '', 'audio/mp4a-latm', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('m4r', 'iPhone Ringtone', '', 'audio/aac', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('m4u', 'MPEG4 Playlist', '', 'video/vnd.mpegurl', 'non', 'oui', 'video', '2025-01-15 11:45:40'),
('m4v', 'MPEG4 Video', '', 'video/x-m4v', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('mathml', 'MathML', '', 'application/mathml+xml', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('mbtiles', 'MBTiles', '', 'application/x-sqlite3', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('md', 'Markdown Document', '', 'text/x-markdown', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('mid', 'Midi', '', 'audio/midi', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('mka', 'Matroska Audio', '', 'audio/mka', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('mkv', 'Matroska Video', '', 'video/mkv', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('mng', 'MNG', '', 'video/x-mng', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('mov', 'QuickTime', '', 'video/quicktime', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('mp3', 'MP3', '', 'audio/mpeg', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('mp4', 'MPEG4', '', 'application/mp4', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('mpc', 'Musepack', '', 'audio/x-musepack', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('mpg', 'MPEG', '', 'video/mpeg', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('mts', 'AVCHD MPEG-2 transport stream', '', 'video/MP2T', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('odb', 'OpenDocument Database', '', 'application/vnd.oasis.opendocument.database', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('odc', 'OpenDocument Chart', '', 'application/vnd.oasis.opendocument.chart', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('odf', 'OpenDocument Formula', '', 'application/vnd.oasis.opendocument.formula', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('odg', 'OpenDocument Graphics', '', 'application/vnd.oasis.opendocument.graphics', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('odi', 'OpenDocument Image', '', 'application/vnd.oasis.opendocument.image', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('odm', 'OpenDocument Text-master', '', 'application/vnd.oasis.opendocument.text-master', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('odp', 'OpenDocument Presentation', '', 'application/vnd.oasis.opendocument.presentation', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ods', 'OpenDocument Spreadsheet', '', 'application/vnd.oasis.opendocument.spreadsheet', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('odt', 'OpenDocument Text', '', 'application/vnd.oasis.opendocument.text', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('oga', 'Ogg Audio', '', 'audio/ogg', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('ogg', 'Ogg Vorbis', '', 'audio/ogg', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('ogv', 'Ogg Video', '', 'video/ogg', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('ogx', 'Ogg Multiplex', '', 'application/ogg', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('otg', 'OpenDocument Graphics-template', '', 'application/vnd.oasis.opendocument.graphics-template', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('otp', 'OpenDocument Presentation-template', '', 'application/vnd.oasis.opendocument.presentation-template', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ots', 'OpenDocument Spreadsheet-template', '', 'application/vnd.oasis.opendocument.spreadsheet-template', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ott', 'OpenDocument Text-template', '', 'application/vnd.oasis.opendocument.text-template', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('pas', 'Pascal', '', 'text/x-pascal', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('pdf', 'PDF', '', 'application/pdf', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('pgn', 'Portable Game Notation', '', 'application/x-chess-pgn', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('pls', 'Playlist', '', 'text/plain', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('png', 'PNG', '', 'image/png', 'image', 'oui', 'image', '2025-01-15 11:45:40'),
('pot', 'PowerPoint Template', '', 'application/vnd.ms-powerpoint', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('potm', 'Powerpoint template', '', 'application/vnd.ms-powerpoint.template.macroEnabled.12', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('potx', 'Powerpoint template', '', 'application/vnd.openxmlformats-officedocument.presentationml.template', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ppam', 'Powerpoint addin', '', 'application/vnd.ms-powerpoint.addin.macroEnabled.12', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ppsm', 'Powerpoint slideshow', '', 'application/vnd.ms-powerpoint.slideshow.macroEnabled.12', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ppsx', 'Powerpoint slideshow', '', 'application/vnd.openxmlformats-officedocument.presentationml.slideshow', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ppt', 'PowerPoint', '', 'application/vnd.ms-powerpoint', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('pptm', 'Powerpoint', '', 'application/vnd.ms-powerpoint.presentation.macroEnabled.12', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('pptx', 'Powerpoint', '', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ps', 'PostScript', '', 'application/postscript', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('psd', 'Photoshop', '', 'image/x-photoshop', 'non', 'oui', 'image', '2025-01-15 11:45:40'),
('qt', 'QuickTime', '', 'video/quicktime', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('ra', 'RealAudio', '', 'audio/x-pn-realaudio', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('ram', 'RealAudio', '', 'audio/x-pn-realaudio', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('rar', 'WinRAR', '', 'application/x-rar-compressed', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('rdf', 'Resource Description Framework', '', 'application/rdf+xml', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ris', 'RIS', '', 'application/x-research-info-systems', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('rm', 'RealAudio', '', 'audio/x-pn-realaudio', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('rpm', 'RedHat/Mandrake/SuSE', '', 'application/x-redhat-package-manager', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('rtf', 'RTF', '', 'application/rtf', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('sdc', 'StarOffice Spreadsheet', '', 'application/vnd.stardivision.calc', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('sdd', 'StarOffice Presentation', '', 'application/vnd.stardivision.impress', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('sdw', 'StarOffice Writer document', '', 'application/vnd.stardivision.writer', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('sit', 'Stuffit', '', 'application/x-stuffit', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('sla', 'Scribus', '', 'application/x-scribus', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('spx', 'Ogg Speex', '', 'audio/ogg', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('srt', 'SubRip Subtitle', '', 'text/plain', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ssa', 'SubStation Alpha Subtitle', '', 'text/plain', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('sty', 'LaTeX Style Sheet', '', 'text/x-tex', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('svg', 'SVG', '', 'image/svg+xml', 'image', 'oui', 'image', '2025-01-15 11:45:40'),
('svgz', 'Compressed Scalable Vector Graphic', '', 'image/svg+xml', 'embed', 'oui', 'image', '2025-01-15 11:45:40'),
('swf', 'Flash', '', 'application/x-shockwave-flash', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('sxc', 'OpenOffice.org Calc', '', 'application/vnd.sun.xml.calc', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('sxi', 'OpenOffice.org Impress', '', 'application/vnd.sun.xml.impress', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('sxw', 'OpenOffice.org', '', 'application/vnd.sun.xml.writer', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('tar', 'Tar', '', 'application/x-tar', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('tex', 'LaTeX', '', 'text/x-tex', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('tgz', 'TGZ', '', 'application/x-gtar', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('tif', 'TIFF', '', 'image/tiff', 'embed', 'oui', 'image', '2025-01-15 11:45:40'),
('torrent', 'BitTorrent', '', 'application/x-bittorrent', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('ts', 'MPEG transport stream', '', 'video/MP2T', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('ttf', 'TTF Font', '', 'application/x-font-ttf', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('txt', 'Texte', '', 'text/plain', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('usf', 'Universal Subtitle Format', '', 'application/xml', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('vcf', 'vCard', '', 'text/vcard', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('vtt', 'WebVTT', '', 'text/vtt', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('wav', 'WAV', '', 'audio/x-wav', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('webm', 'WebM', '', 'video/webm', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('webp', 'WEBP', '', 'image/webp', 'image', 'oui', 'image', '2025-01-15 11:45:40'),
('wma', 'Windows Media Audio', '', 'audio/x-ms-wma', 'embed', 'oui', 'audio', '2025-01-15 11:45:40'),
('wmf', 'Windows Metafile', '', 'image/x-emf', 'non', 'oui', 'image', '2025-01-15 11:45:40'),
('wmv', 'Windows Media Video', '', 'video/x-ms-wmv', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('wpl', 'Windows Media Player Playlist', '', 'application/vnd.ms-wpl', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('xcf', 'GIMP multi-layer', '', 'application/x-xcf', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('xlam', 'Excel', '', 'application/vnd.ms-excel.addin.macroEnabled.12', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('xls', 'Excel', '', 'application/vnd.ms-excel', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('xlsb', 'Excel binary', '', 'application/vnd.ms-excel.sheet.binary.macroEnabled.12', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('xlsm', 'Excel', '', 'application/vnd.ms-excel.sheet.macroEnabled.12', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('xlsx', 'Excel', '', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('xlt', 'Excel Template', '', 'application/vnd.ms-excel', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('xltm', 'Excel template', '', 'application/vnd.ms-excel.template.macroEnabled.12', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('xltx', 'Excel template', '', 'application/vnd.openxmlformats-officedocument.spreadsheetml.template', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('xml', 'XML', '', 'application/xml', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('xspf', 'XSPF', '', 'application/xspf+xml', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('y4m', 'YUV4MPEG2', '', 'video/x-raw-yuv', 'embed', 'oui', 'video', '2025-01-15 11:45:40'),
('yaml', 'YAML', '', 'text/yaml', 'non', 'oui', 'file', '2025-01-15 11:45:40'),
('zip', 'Zip', '', 'application/zip', 'non', 'oui', 'file', '2025-01-15 11:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `spip_urls`
--

CREATE TABLE `spip_urls` (
  `id_parent` bigint(21) NOT NULL DEFAULT 0,
  `url` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL DEFAULT 'article',
  `id_objet` bigint(21) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `segments` smallint(3) NOT NULL DEFAULT 1,
  `perma` tinyint(1) NOT NULL DEFAULT 0,
  `langue` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_versions`
--

CREATE TABLE `spip_versions` (
  `id_version` bigint(21) NOT NULL DEFAULT 0,
  `id_objet` bigint(21) NOT NULL DEFAULT 0,
  `objet` varchar(25) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_auteur` varchar(23) NOT NULL DEFAULT '',
  `titre_version` text NOT NULL DEFAULT '',
  `permanent` char(3) NOT NULL DEFAULT '',
  `champs` text NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_versions_fragments`
--

CREATE TABLE `spip_versions_fragments` (
  `id_fragment` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `version_min` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `version_max` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `id_objet` bigint(21) NOT NULL,
  `objet` varchar(25) NOT NULL DEFAULT '',
  `compress` tinyint(4) NOT NULL,
  `fragment` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_visites`
--

CREATE TABLE `spip_visites` (
  `date` date NOT NULL,
  `visites` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spip_visites_articles`
--

CREATE TABLE `spip_visites_articles` (
  `date` date NOT NULL,
  `id_article` int(10) UNSIGNED NOT NULL,
  `visites` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `maj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spip_articles`
--
ALTER TABLE `spip_articles`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_rubrique` (`id_rubrique`),
  ADD KEY `id_secteur` (`id_secteur`),
  ADD KEY `id_trad` (`id_trad`),
  ADD KEY `lang` (`lang`),
  ADD KEY `statut` (`statut`,`date`);

--
-- Indexes for table `spip_auteurs`
--
ALTER TABLE `spip_auteurs`
  ADD PRIMARY KEY (`id_auteur`),
  ADD KEY `login` (`login`),
  ADD KEY `statut` (`statut`),
  ADD KEY `en_ligne` (`en_ligne`);

--
-- Indexes for table `spip_auteurs_liens`
--
ALTER TABLE `spip_auteurs_liens`
  ADD PRIMARY KEY (`id_auteur`,`id_objet`,`objet`),
  ADD KEY `id_auteur` (`id_auteur`),
  ADD KEY `id_objet` (`id_objet`),
  ADD KEY `objet` (`objet`);

--
-- Indexes for table `spip_depots`
--
ALTER TABLE `spip_depots`
  ADD PRIMARY KEY (`id_depot`);

--
-- Indexes for table `spip_depots_plugins`
--
ALTER TABLE `spip_depots_plugins`
  ADD PRIMARY KEY (`id_depot`,`id_plugin`);

--
-- Indexes for table `spip_documents`
--
ALTER TABLE `spip_documents`
  ADD PRIMARY KEY (`id_document`),
  ADD KEY `id_vignette` (`id_vignette`),
  ADD KEY `mode` (`mode`),
  ADD KEY `extension` (`extension`);

--
-- Indexes for table `spip_documents_liens`
--
ALTER TABLE `spip_documents_liens`
  ADD PRIMARY KEY (`id_document`,`id_objet`,`objet`),
  ADD KEY `id_document` (`id_document`),
  ADD KEY `id_objet` (`id_objet`),
  ADD KEY `objet` (`objet`);

--
-- Indexes for table `spip_forum`
--
ALTER TABLE `spip_forum`
  ADD PRIMARY KEY (`id_forum`),
  ADD KEY `id_auteur` (`id_auteur`),
  ADD KEY `id_parent` (`id_parent`),
  ADD KEY `id_thread` (`id_thread`),
  ADD KEY `optimal` (`statut`,`id_parent`,`id_objet`,`objet`,`date_heure`);

--
-- Indexes for table `spip_groupes_mots`
--
ALTER TABLE `spip_groupes_mots`
  ADD PRIMARY KEY (`id_groupe`);

--
-- Indexes for table `spip_jobs`
--
ALTER TABLE `spip_jobs`
  ADD PRIMARY KEY (`id_job`),
  ADD KEY `date` (`date`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `spip_jobs_liens`
--
ALTER TABLE `spip_jobs_liens`
  ADD PRIMARY KEY (`id_job`,`id_objet`,`objet`),
  ADD KEY `id_job` (`id_job`);

--
-- Indexes for table `spip_meta`
--
ALTER TABLE `spip_meta`
  ADD PRIMARY KEY (`nom`);

--
-- Indexes for table `spip_mots`
--
ALTER TABLE `spip_mots`
  ADD PRIMARY KEY (`id_mot`),
  ADD KEY `id_groupe` (`id_groupe`);

--
-- Indexes for table `spip_mots_liens`
--
ALTER TABLE `spip_mots_liens`
  ADD PRIMARY KEY (`id_mot`,`id_objet`,`objet`),
  ADD KEY `id_mot` (`id_mot`),
  ADD KEY `id_objet` (`id_objet`),
  ADD KEY `objet` (`objet`);

--
-- Indexes for table `spip_paquets`
--
ALTER TABLE `spip_paquets`
  ADD PRIMARY KEY (`id_paquet`),
  ADD KEY `id_plugin` (`id_plugin`);

--
-- Indexes for table `spip_plugins`
--
ALTER TABLE `spip_plugins`
  ADD PRIMARY KEY (`id_plugin`),
  ADD KEY `prefixe` (`prefixe`);

--
-- Indexes for table `spip_referers`
--
ALTER TABLE `spip_referers`
  ADD PRIMARY KEY (`referer_md5`);

--
-- Indexes for table `spip_referers_articles`
--
ALTER TABLE `spip_referers_articles`
  ADD PRIMARY KEY (`id_article`,`referer_md5`),
  ADD KEY `referer_md5` (`referer_md5`);

--
-- Indexes for table `spip_rubriques`
--
ALTER TABLE `spip_rubriques`
  ADD PRIMARY KEY (`id_rubrique`),
  ADD KEY `lang` (`lang`),
  ADD KEY `id_parent` (`id_parent`);

--
-- Indexes for table `spip_syndic`
--
ALTER TABLE `spip_syndic`
  ADD PRIMARY KEY (`id_syndic`),
  ADD KEY `id_rubrique` (`id_rubrique`),
  ADD KEY `id_secteur` (`id_secteur`),
  ADD KEY `statut` (`statut`,`date_syndic`);

--
-- Indexes for table `spip_syndic_articles`
--
ALTER TABLE `spip_syndic_articles`
  ADD PRIMARY KEY (`id_syndic_article`),
  ADD KEY `id_syndic` (`id_syndic`),
  ADD KEY `statut` (`statut`),
  ADD KEY `url` (`url`(255));

--
-- Indexes for table `spip_types_documents`
--
ALTER TABLE `spip_types_documents`
  ADD PRIMARY KEY (`extension`),
  ADD KEY `inclus` (`inclus`);

--
-- Indexes for table `spip_urls`
--
ALTER TABLE `spip_urls`
  ADD PRIMARY KEY (`id_parent`,`url`),
  ADD KEY `type` (`type`,`id_objet`),
  ADD KEY `langue` (`langue`),
  ADD KEY `url` (`url`);

--
-- Indexes for table `spip_versions`
--
ALTER TABLE `spip_versions`
  ADD PRIMARY KEY (`id_version`,`id_objet`,`objet`),
  ADD KEY `id_version` (`id_version`),
  ADD KEY `id_objet` (`id_objet`),
  ADD KEY `objet` (`objet`);

--
-- Indexes for table `spip_versions_fragments`
--
ALTER TABLE `spip_versions_fragments`
  ADD PRIMARY KEY (`id_objet`,`objet`,`id_fragment`,`version_min`);

--
-- Indexes for table `spip_visites`
--
ALTER TABLE `spip_visites`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `spip_visites_articles`
--
ALTER TABLE `spip_visites_articles`
  ADD PRIMARY KEY (`date`,`id_article`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spip_articles`
--
ALTER TABLE `spip_articles`
  MODIFY `id_article` bigint(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `spip_auteurs`
--
ALTER TABLE `spip_auteurs`
  MODIFY `id_auteur` bigint(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spip_depots`
--
ALTER TABLE `spip_depots`
  MODIFY `id_depot` bigint(21) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spip_documents`
--
ALTER TABLE `spip_documents`
  MODIFY `id_document` bigint(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `spip_forum`
--
ALTER TABLE `spip_forum`
  MODIFY `id_forum` bigint(21) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spip_groupes_mots`
--
ALTER TABLE `spip_groupes_mots`
  MODIFY `id_groupe` bigint(21) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spip_jobs`
--
ALTER TABLE `spip_jobs`
  MODIFY `id_job` bigint(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `spip_mots`
--
ALTER TABLE `spip_mots`
  MODIFY `id_mot` bigint(21) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spip_paquets`
--
ALTER TABLE `spip_paquets`
  MODIFY `id_paquet` bigint(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `spip_plugins`
--
ALTER TABLE `spip_plugins`
  MODIFY `id_plugin` bigint(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `spip_rubriques`
--
ALTER TABLE `spip_rubriques`
  MODIFY `id_rubrique` bigint(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `spip_syndic`
--
ALTER TABLE `spip_syndic`
  MODIFY `id_syndic` bigint(21) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spip_syndic_articles`
--
ALTER TABLE `spip_syndic_articles`
  MODIFY `id_syndic_article` bigint(21) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
