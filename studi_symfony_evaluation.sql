-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 juil. 2021 à 12:51
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `studi_symfony_evaluation`
--
CREATE DATABASE IF NOT EXISTS `studi_symfony_evaluation` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `studi_symfony_evaluation`;

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `nationnalite_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `code_identification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `nationnalite_id`, `nom`, `prenom`, `date_naissance`, `code_identification`) VALUES
(10, 60, 'Jean', 'François', '1970-07-14', 'JF197060'),
(11, 3, 'Abdel', 'Taberkane', '1960-06-01', 'AT196003'),
(12, 182, 'Doe', 'John', '1970-07-13', 'JD1970182');

-- --------------------------------------------------------

--
-- Structure de la table `cible`
--

CREATE TABLE `cible` (
  `id` int(11) NOT NULL,
  `nationnalite_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `nom_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cible`
--

INSERT INTO `cible` (`id`, `nationnalite_id`, `nom`, `prenom`, `date_naissance`, `nom_code`) VALUES
(9, 164, 'Lindberg', 'Noa', '1983-01-01', 'NL1983'),
(10, 182, 'Gillespie', 'Vikki', '1956-01-01', 'VG');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nationnalite_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `nom_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nationnalite_id`, `nom`, `prenom`, `date_naissance`, `nom_code`) VALUES
(56, 182, 'Berglund', 'James', '1970-07-14', 'JB1970182'),
(57, 164, 'Mattsson', 'Erik', '1985-06-01', 'EM1985164'),
(58, 86, 'Goos', 'Azer', '2000-07-13', 'GA2000');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20210611145033', '2021-06-11 14:52:21'),
('20210614104836', '2021-06-14 10:48:42'),
('20210614105306', '2021-06-14 10:53:10'),
('20210616111237', '2021-06-16 11:12:46'),
('20210616143018', '2021-06-16 14:30:31'),
('20210624104533', '2021-06-24 10:46:35'),
('20210624105711', '2021-06-24 10:57:19'),
('20210628103504', '2021-06-28 10:35:13'),
('20210629150107', '2021-06-29 15:03:01'),
('20210629152101', '2021-06-29 15:21:07'),
('20210701095518', '2021-07-01 09:55:37'),
('20210701120313', '2021-07-01 12:03:21');

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `pays_id` int(11) DEFAULT NULL,
  `specialite_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mission`
--

INSERT INTO `mission` (`id`, `titre`, `description`, `nom_code`, `statut`, `date_debut`, `date_fin`, `pays_id`, `specialite_id`) VALUES
(34, 'Assassinat', 'Assassinez la cible', 'NomDeCode', 'En cours', '2016-01-01', '2026-01-01', 164, 8);

-- --------------------------------------------------------

--
-- Structure de la table `mission_agent`
--

CREATE TABLE `mission_agent` (
  `mission_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mission_agent`
--

INSERT INTO `mission_agent` (`mission_id`, `agent_id`) VALUES
(34, 11);

-- --------------------------------------------------------

--
-- Structure de la table `mission_cible`
--

CREATE TABLE `mission_cible` (
  `mission_id` int(11) NOT NULL,
  `cible_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mission_cible`
--

INSERT INTO `mission_cible` (`mission_id`, `cible_id`) VALUES
(34, 9);

-- --------------------------------------------------------

--
-- Structure de la table `mission_contact`
--

CREATE TABLE `mission_contact` (
  `mission_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mission_contact`
--

INSERT INTO `mission_contact` (`mission_id`, `contact_id`) VALUES
(34, 57);

-- --------------------------------------------------------

--
-- Structure de la table `mission_planque`
--

CREATE TABLE `mission_planque` (
  `mission_id` int(11) NOT NULL,
  `planque_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mission_planque`
--

INSERT INTO `mission_planque` (`mission_id`, `planque_id`) VALUES
(34, 10);

-- --------------------------------------------------------

--
-- Structure de la table `nationnalite`
--

CREATE TABLE `nationnalite` (
  `id` int(11) NOT NULL,
  `nom_natio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `nationnalite`
--

INSERT INTO `nationnalite` (`id`, `nom_natio`, `pays_id`) VALUES
(1, 'afghan', 1),
(2, 'albanais', 2),
(3, 'algérien', 3),
(4, 'Andorran', 4),
(5, 'Angolais', 5),
(6, 'Antiguais, Barboudes', 6),
(7, 'argentin', 7),
(8, 'arménien', 8),
(9, 'australien', 9),
(10, 'autrichien', 10),
(11, 'azerbaïdjanais', 11),
(12, 'Bahaméen', 12),
(13, 'Bahreïn', 13),
(14, 'Bangladais', 14),
(15, 'Barbadien', 15),
(16, 'biélorusse', 16),
(17, 'Belge', 17),
(18, 'Bélizien', 18),
(19, 'Béninois', 19),
(20, 'Bhoutanais', 20),
(21, 'bolivien', 21),
(22, 'bosniaque, herzégovinien', 22),
(23, 'Motswana (singulier), Batswana (pluriel)', 23),
(24, 'brésilien', 24),
(25, 'Brunéien', 25),
(26, 'bulgare', 26),
(27, 'Burkinabé', 27),
(28, 'Burundais', 28),
(29, 'cambodgien', 29),
(30, 'camerounais', 30),
(31, 'canadien', 31),
(32, 'Cap-Vert', 32),
(33, 'Centrafricaine', 33),
(34, 'Tchadien', 34),
(35, 'chilien', 35),
(36, 'chinois', 36),
(37, 'colombien', 37),
(38, 'Comorien', 38),
(39, 'Congolais', 39),
(40, 'costaricain', 40),
(41, 'Ivoirien', 41),
(42, 'croate', 42),
(43, 'cubain', 43),
(44, 'Chypriote', 44),
(45, 'tchèque', 45),
(46, 'danois', 46),
(47, 'Djibouti', 47),
(48, 'dominicain', 48),
(49, 'dominicain', 49),
(50, 'Timorais de l\'Est', 50),
(51, 'équatorien', 51),
(52, 'égyptien', 52),
(53, 'Salvadorien', 53),
(54, 'Guinée équatoriale', 54),
(55, 'Érythréen', 55),
(56, 'estonien', 56),
(57, 'éthiopien', 57),
(58, 'fidjien', 58),
(59, 'finlandais', 59),
(60, 'français', 60),
(61, 'gabonais', 61),
(62, 'gambien', 62),
(63, 'géorgien', 63),
(64, 'Allemand', 64),
(65, 'ghanéen', 65),
(66, 'grec', 66),
(67, 'Grenadien', 67),
(68, 'guatémaltèque', 68),
(69, 'Guinéen', 69),
(70, 'Guinée-Bissau', 70),
(71, 'guyanais', 71),
(72, 'haïtien', 72),
(73, 'Hondurien', 73),
(74, 'hongrois', 74),
(75, 'Islandais', 75),
(76, 'Indien', 76),
(77, 'indonésien', 77),
(78, 'iranien', 78),
(79, 'irakien', 79),
(80, 'irlandais', 80),
(81, 'israélien', 81),
(82, 'italien', 82),
(83, 'jamaïquain', 83),
(84, 'Japonais', 84),
(85, 'jordanien', 85),
(86, 'kazakh', 86),
(87, 'Kenyan', 87),
(88, 'I-Kiribati', 88),
(89, 'Nord coréen', 89),
(90, 'Sud coréen', 90),
(91, 'koweïtien', 91),
(92, 'kirghiz', 92),
(93, 'Laotien', 93),
(94, 'letton', 94),
(95, 'libanais', 95),
(96, 'Mosotho', 96),
(97, 'Libérien', 97),
(98, 'libyen', 98),
(99, 'Liechtensteinois', 99),
(100, 'lituanien', 100),
(101, 'Luxembourgeois', 101),
(102, 'macédonien', 102),
(103, 'malgache', 103),
(104, 'malawite', 104),
(105, 'malais', 105),
(106, 'Maldives', 106),
(107, 'malien', 107),
(108, 'maltais', 108),
(109, 'Marshallais', 109),
(110, 'mauritanien', 110),
(111, 'Mauricien', 111),
(112, 'mexicain', 112),
(113, 'Micronésien', 113),
(114, 'moldave', 114),
(115, 'Monégasque', 115),
(116, 'mongol', 116),
(117, 'marocain', 117),
(118, 'mozambicain', 118),
(119, 'birman', 119),
(120, 'namibien', 120),
(121, 'Nauruan', 121),
(122, 'népalais', 122),
(123, 'néerlandais', 123),
(124, 'Néo-Zélandais', 124),
(125, 'nicaraguayen', 125),
(126, 'Nigérien', 126),
(127, 'nigérian', 127),
(128, 'norvégien', 128),
(129, 'Omanais', 129),
(130, 'pakistanais', 130),
(131, 'Palaos', 131),
(132, 'panaméen', 132),
(133, 'Papouasie-Nouvelle-Guinée', 133),
(134, 'paraguayen', 134),
(135, 'péruvien', 135),
(136, 'Philippin', 136),
(137, 'polonais', 137),
(138, 'Portugais', 138),
(139, 'Qatari', 139),
(140, 'roumain', 140),
(141, 'russe', 141),
(142, 'Rwandais', 142),
(143, 'Kittien et Nevisien', 143),
(144, 'Sainte-Lucie', 144),
(145, 'Samoa', 145),
(146, 'Sammarinais', 146),
(147, 'Sao Toméen', 147),
(148, 'Arabie saoudite', 148),
(149, 'Sénégalais', 149),
(150, 'serbe', 150),
(151, 'Seychellois', 151),
(152, 'sierra léonais', 152),
(153, 'singapourien', 153),
(154, 'slovaque', 154),
(155, 'slovène', 155),
(156, 'Îles Salomon', 156),
(157, 'somali', 157),
(158, 'Sud africain', 158),
(159, 'Espanol', 159),
(160, 'Sri lankais', 160),
(161, 'soudanais', 161),
(162, 'Surinam', 162),
(163, 'Swazi', 163),
(164, 'suédois', 164),
(165, 'Suisse', 165),
(166, 'syrien', 166),
(167, 'Taïwanais', 167),
(168, 'Tadjik', 168),
(169, 'tanzanien', 169),
(170, 'thaïlandais', 170),
(171, 'togolais', 171),
(172, 'Tonga', 172),
(173, 'Trinidadien', 173),
(174, 'tunisien', 174),
(175, 'turc', 175),
(176, 'Turkmène', 176),
(177, 'Tuvaluan', 177),
(178, 'ougandais', 178),
(179, 'ukrainien', 179),
(180, 'Émirien', 180),
(181, 'Britanique', 181),
(182, 'américain', 182),
(183, 'uruguayen', 183),
(184, 'Ouzbékistan', 184),
(185, 'Ni-Vanuatu', 185),
(186, 'rien', 186),
(187, 'vénézuélien', 187),
(188, 'vietnamien', 188),
(189, 'yéménite', 189),
(190, 'zambien', 190),
(191, 'zimbabwéen', 191);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`) VALUES
(1, 'Afghanistan'),
(2, 'Albanie'),
(3, 'Algérie'),
(4, 'Andorre'),
(5, 'Angola'),
(6, 'Antigua-et-Barbuda'),
(7, 'Argentine'),
(8, 'Arménie'),
(9, 'Australie'),
(10, 'Autriche'),
(11, 'Azerbaïdjan'),
(12, 'Les Bahamas'),
(13, 'Bahreïn'),
(14, 'Bangladesh'),
(15, 'Barbade'),
(16, 'Biélorussie'),
(17, 'Belgique'),
(18, 'Belize'),
(19, 'Bénin'),
(20, 'Bhoutan'),
(21, 'Bolivie'),
(22, 'Bosnie Herzégovine'),
(23, 'Botswana, Motswana'),
(24, 'Brésil'),
(25, 'Brunéi'),
(26, 'Bulgarie'),
(27, 'Burkina Faso'),
(28, 'Burundi'),
(29, 'Cambodge'),
(30, 'Cameroun'),
(31, 'Canada'),
(32, 'Cap-Vert'),
(33, 'République centrafricaine'),
(34, 'Tchad'),
(35, 'Chili'),
(36, 'Chine'),
(37, 'Colombie'),
(38, 'Comores'),
(39, 'Congolais'),
(40, 'Costa Rica'),
(41, 'Côte d\'Ivoire'),
(42, 'Croatie'),
(43, 'Cuba'),
(44, 'Chypre'),
(45, 'République Tchèque'),
(46, 'Danemark'),
(47, 'Djibouti'),
(48, 'Dominique'),
(49, 'République Dominicaine'),
(50, 'Timor oriental'),
(51, 'Équateur'),
(52, 'Egypte'),
(53, 'Le Salvador'),
(54, 'Guinée Équatoriale'),
(55, 'Érythrée'),
(56, 'Estonie'),
(57, 'Ethiopie'),
(58, 'Fidji'),
(59, 'Finlande'),
(60, 'France'),
(61, 'Gabon'),
(62, 'La Gambie'),
(63, 'Géorgie'),
(64, 'Allemagne'),
(65, 'Ghana'),
(66, 'Grèce'),
(67, 'Grenade'),
(68, 'Guatemala'),
(69, 'Guinée'),
(70, 'Guinée-Bissau'),
(71, 'Guyane'),
(72, 'Haïti'),
(73, 'Honduras'),
(74, 'Hongrie'),
(75, 'Islande'),
(76, 'Inde'),
(77, 'Indonésie'),
(78, 'Iran'),
(79, 'Irak'),
(80, 'Irlande'),
(81, 'Israël'),
(82, 'Italie'),
(83, 'Jamaïque'),
(84, 'Japon'),
(85, 'Jordan'),
(86, 'Kazakhstan'),
(87, 'Kenya'),
(88, 'Kiribati'),
(89, 'Corée du Nord'),
(90, 'COREE DU SUD'),
(91, 'Koweit'),
(92, 'République du Kirghizistan'),
(93, 'Laos'),
(94, 'Lettonie'),
(95, 'Liban'),
(96, 'Lesotho'),
(97, 'Libéria'),
(98, 'Libye'),
(99, 'Liechtenstein'),
(100, 'Lituanie'),
(101, 'Luxembourg'),
(102, 'Macédoine'),
(103, 'Madagascar'),
(104, 'Malawi'),
(105, 'Malaisie'),
(106, 'Maldives'),
(107, 'Mali'),
(108, 'Malte'),
(109, 'Iles Marshall'),
(110, 'Mauritanie'),
(111, 'Maurice'),
(112, 'Mexique'),
(113, 'États fédérés de Micronésie'),
(114, 'Moldavie'),
(115, 'Monaco'),
(116, 'Mongolie'),
(117, 'Maroc'),
(118, 'Mozambique'),
(119, 'Myanmar (Birmanie)'),
(120, 'Namibie'),
(121, 'Nauru'),
(122, 'Népal'),
(123, 'Pays-Bas'),
(124, 'Nouvelle-Zélande'),
(125, 'Nicaragua'),
(126, 'Niger'),
(127, 'Nigeria'),
(128, 'Norvège'),
(129, 'Oman'),
(130, 'Pakistan'),
(131, 'Palaos'),
(132, 'Panama'),
(133, 'Papouasie Nouvelle Guinée'),
(134, 'Paraguay'),
(135, 'Pérou'),
(136, 'Philippines'),
(137, 'Pologne'),
(138, 'le Portugal'),
(139, 'Qatar'),
(140, 'Roumanie'),
(141, 'Russie'),
(142, 'Rwanda'),
(143, 'Saint-Christophe-et-Niévès'),
(144, 'Sainte-Lucie'),
(145, 'Samoa'),
(146, 'Saint Marin'),
(147, 'Sao Tomé et Principe   '),
(148, 'Arabie Saoudite'),
(149, 'Sénégal'),
(150, 'Serbie et Monténégro'),
(151, 'les Seychelles'),
(152, 'Sierra Leone'),
(153, 'Singapour'),
(154, 'Slovaquie'),
(155, 'Slovénie'),
(156, 'Les îles Salomon'),
(157, 'Somalie'),
(158, 'Afrique du Sud'),
(159, 'Espagne'),
(160, 'Sri Lanka'),
(161, 'Soudan'),
(162, 'Surinam'),
(163, 'Swaziland'),
(164, 'Suède'),
(165, 'la Suisse'),
(166, 'Syrie'),
(167, 'Taïwan'),
(168, 'Tadjikistan'),
(169, 'Tanzanie'),
(170, 'Thaïlandais'),
(171, 'Aller'),
(172, 'Tonga'),
(173, 'Trinité-et-Tobago'),
(174, 'Tunisie'),
(175, 'dinde'),
(176, 'Turkménistan'),
(177, 'Tuvalu'),
(178, 'Ouganda,'),
(179, 'UkraineU'),
(180, 'Emirats Arabes Unis'),
(181, 'Royaume-Uni'),
(182, 'États Unis'),
(183, 'Uruguay'),
(184, 'Ouzbékistan'),
(185, 'Vanuatu'),
(186, 'Vatican'),
(187, 'Venezuela'),
(188, 'Viêt Nam'),
(189, 'Yémen'),
(190, 'Zambie'),
(191, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Structure de la table `planque`
--

CREATE TABLE `planque` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `planque`
--

INSERT INTO `planque` (`id`, `code`, `adresse`, `type`, `cp`, `ville`, `pays_id`) VALUES
(10, '789485', '3 Rue des Potiers', 'Garage', '78531', 'Uppsala', 164);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`id`, `nom`) VALUES
(6, 'Spécialité 1'),
(7, 'Spécialité 2'),
(8, 'Spécialité 3');

-- --------------------------------------------------------

--
-- Structure de la table `specialite_agent`
--

CREATE TABLE `specialite_agent` (
  `specialite_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `specialite_agent`
--

INSERT INTO `specialite_agent` (`specialite_id`, `agent_id`) VALUES
(7, 11),
(8, 11),
(8, 12);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'alexandre@gmail.com', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$Vm8vbEhUZGpkdmhaOFpyaw$Kk5+JNEYFxWkMBaGyfl6y5bHElOyq4Odpd1+WaPVwLg'),
(2, 'alexandre.petit@gmail.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$LmJ3TW5oaW1MMkRrMmVoeA$uO6fkNQJkqtZ2FpR5kuLAhgWfpSGBwdV4T+tG3NblcA');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_268B9C9DD85FF994` (`nationnalite_id`);

--
-- Index pour la table `cible`
--
ALTER TABLE `cible`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E15DEC3BD85FF994` (`nationnalite_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4C62E638D85FF994` (`nationnalite_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9067F23CA6E44244` (`pays_id`),
  ADD KEY `IDX_9067F23C2195E0F0` (`specialite_id`);

--
-- Index pour la table `mission_agent`
--
ALTER TABLE `mission_agent`
  ADD PRIMARY KEY (`mission_id`,`agent_id`),
  ADD KEY `IDX_B61DC3A0BE6CAE90` (`mission_id`),
  ADD KEY `IDX_B61DC3A03414710B` (`agent_id`);

--
-- Index pour la table `mission_cible`
--
ALTER TABLE `mission_cible`
  ADD PRIMARY KEY (`mission_id`,`cible_id`),
  ADD KEY `IDX_71CBB306BE6CAE90` (`mission_id`),
  ADD KEY `IDX_71CBB306A96E5E09` (`cible_id`);

--
-- Index pour la table `mission_contact`
--
ALTER TABLE `mission_contact`
  ADD PRIMARY KEY (`mission_id`,`contact_id`),
  ADD KEY `IDX_DD5E7275BE6CAE90` (`mission_id`),
  ADD KEY `IDX_DD5E7275E7A1254A` (`contact_id`);

--
-- Index pour la table `mission_planque`
--
ALTER TABLE `mission_planque`
  ADD PRIMARY KEY (`mission_id`,`planque_id`),
  ADD KEY `IDX_DA0690F7BE6CAE90` (`mission_id`),
  ADD KEY `IDX_DA0690F7CE8A20B` (`planque_id`);

--
-- Index pour la table `nationnalite`
--
ALTER TABLE `nationnalite`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_201D06D5A6E44244` (`pays_id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `planque`
--
ALTER TABLE `planque`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4B3A04BAA6E44244` (`pays_id`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `specialite_agent`
--
ALTER TABLE `specialite_agent`
  ADD PRIMARY KEY (`specialite_id`,`agent_id`),
  ADD KEY `IDX_5451202C2195E0F0` (`specialite_id`),
  ADD KEY `IDX_5451202C3414710B` (`agent_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `cible`
--
ALTER TABLE `cible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `nationnalite`
--
ALTER TABLE `nationnalite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT pour la table `planque`
--
ALTER TABLE `planque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `FK_268B9C9DD85FF994` FOREIGN KEY (`nationnalite_id`) REFERENCES `nationnalite` (`id`);

--
-- Contraintes pour la table `cible`
--
ALTER TABLE `cible`
  ADD CONSTRAINT `FK_E15DEC3BD85FF994` FOREIGN KEY (`nationnalite_id`) REFERENCES `nationnalite` (`id`);

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `FK_4C62E638D85FF994` FOREIGN KEY (`nationnalite_id`) REFERENCES `nationnalite` (`id`);

--
-- Contraintes pour la table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `FK_9067F23C2195E0F0` FOREIGN KEY (`specialite_id`) REFERENCES `specialite` (`id`),
  ADD CONSTRAINT `FK_9067F23CA6E44244` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `mission_agent`
--
ALTER TABLE `mission_agent`
  ADD CONSTRAINT `FK_B61DC3A03414710B` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B61DC3A0BE6CAE90` FOREIGN KEY (`mission_id`) REFERENCES `mission` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `mission_cible`
--
ALTER TABLE `mission_cible`
  ADD CONSTRAINT `FK_71CBB306A96E5E09` FOREIGN KEY (`cible_id`) REFERENCES `cible` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_71CBB306BE6CAE90` FOREIGN KEY (`mission_id`) REFERENCES `mission` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `mission_contact`
--
ALTER TABLE `mission_contact`
  ADD CONSTRAINT `FK_DD5E7275BE6CAE90` FOREIGN KEY (`mission_id`) REFERENCES `mission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_DD5E7275E7A1254A` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `mission_planque`
--
ALTER TABLE `mission_planque`
  ADD CONSTRAINT `FK_DA0690F7BE6CAE90` FOREIGN KEY (`mission_id`) REFERENCES `mission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_DA0690F7CE8A20B` FOREIGN KEY (`planque_id`) REFERENCES `planque` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `nationnalite`
--
ALTER TABLE `nationnalite`
  ADD CONSTRAINT `FK_201D06D5A6E44244` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `planque`
--
ALTER TABLE `planque`
  ADD CONSTRAINT `FK_4B3A04BAA6E44244` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `specialite_agent`
--
ALTER TABLE `specialite_agent`
  ADD CONSTRAINT `FK_5451202C2195E0F0` FOREIGN KEY (`specialite_id`) REFERENCES `specialite` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5451202C3414710B` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
