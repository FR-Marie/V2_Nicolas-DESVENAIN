-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 28 oct. 2022 à 08:11
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `v2_nicolas-desvenain`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date_actualite` datetime NOT NULL,
  `titre_actualite` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_actualite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_actualite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume_actualite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `date_actualite`, `titre_actualite`, `image_actualite`, `lien_actualite`, `resume_actualite`) VALUES
(1, '2022-10-18 15:12:29', 'Un titre d\'actualité', 'https://zupimages.net/up/22/39/qp67.jpg', 'https://www.lemonde.fr/', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in nisl quis sem mattis bibendum. Donec et sem malesuada, porttitor elit id, euismod sem. Duis hendrerit lorem interdum bibendum pharetra.'),
(2, '2022-10-18 15:12:29', 'Un titre d\'actualité', 'https://zupimages.net/up/22/39/qp67.jpg', 'https://www.lemonde.fr/', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in nisl quis sem mattis bibendum. Donec et sem malesuada, porttitor elit id, euismod sem. Duis hendrerit lorem interdum bibendum pharetra.'),
(3, '2022-10-18 15:12:29', 'Un titre d\'actualité', 'https://zupimages.net/up/22/39/qp67.jpg', 'https://www.lemonde.fr/', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in nisl quis sem mattis bibendum. Donec et sem malesuada, porttitor elit id, euismod sem. Duis hendrerit lorem interdum bibendum pharetra.'),
(4, '2022-10-18 15:12:29', 'Un titre d\'actualité', 'https://zupimages.net/up/22/39/qp67.jpg', 'https://www.lemonde.fr/', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in nisl quis sem mattis bibendum. Donec et sem malesuada, porttitor elit id, euismod sem. Duis hendrerit lorem interdum bibendum pharetra.');

-- --------------------------------------------------------

--
-- Structure de la table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20221017074836', '2022-10-17 07:48:44', 64),
('DoctrineMigrations\\Version20221017133253', '2022-10-17 13:33:02', 36),
('DoctrineMigrations\\Version20221017142736', '2022-10-17 14:27:43', 36),
('DoctrineMigrations\\Version20221018074005', '2022-10-18 07:41:14', 162),
('DoctrineMigrations\\Version20221018075443', '2022-10-18 07:54:50', 49),
('DoctrineMigrations\\Version20221018094714', '2022-10-18 09:47:22', 39),
('DoctrineMigrations\\Version20221018100108', '2022-10-18 10:01:15', 39),
('DoctrineMigrations\\Version20221018125323', '2022-10-18 12:53:30', 44),
('DoctrineMigrations\\Version20221018125354', '2022-10-18 12:54:03', 40),
('DoctrineMigrations\\Version20221018130934', '2022-10-18 13:09:40', 32),
('DoctrineMigrations\\Version20221019063905', '2022-10-19 06:39:14', 194),
('DoctrineMigrations\\Version20221021134531', '2022-10-21 13:45:39', 178),
('DoctrineMigrations\\Version20221024071919', '2022-10-24 07:19:26', 178),
('DoctrineMigrations\\Version20221024112027', '2022-10-24 11:20:35', 259),
('DoctrineMigrations\\Version20221024112254', '2022-10-24 11:23:01', 112),
('DoctrineMigrations\\Version20221024112507', '2022-10-24 11:25:13', 29);

-- --------------------------------------------------------

--
-- Structure de la table `epoques`
--

DROP TABLE IF EXISTS `epoques`;
CREATE TABLE IF NOT EXISTS `epoques` (
  `id` int NOT NULL AUTO_INCREMENT,
  `epoque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `epoques`
--

INSERT INTO `epoques` (`id`, `epoque`) VALUES
(1, 'Xème siècle'),
(2, 'XIème siècle'),
(3, 'XIIème siècle'),
(4, 'XIIIème siècle'),
(5, 'XIVème siècle'),
(6, 'XVème siècle'),
(7, 'XVIème siècle'),
(8, 'XVIIème siècle'),
(9, 'XVIIIème siècle'),
(10, 'XIXème siècle'),
(11, 'XXème siècle');

-- --------------------------------------------------------

--
-- Structure de la table `instruments`
--

DROP TABLE IF EXISTS `instruments`;
CREATE TABLE IF NOT EXISTS `instruments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `instrument` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `instruments`
--

INSERT INTO `instruments` (`id`, `instrument`) VALUES
(1, 'Vièle'),
(2, 'Luth'),
(3, 'Lyre'),
(4, 'Rebãb');

-- --------------------------------------------------------

--
-- Structure de la table `lutherie`
--

DROP TABLE IF EXISTS `lutherie`;
CREATE TABLE IF NOT EXISTS `lutherie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre_site` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre_introduction` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_galerie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` longtext COLLATE utf8mb4_unicode_ci,
  `galerie1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galerie2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galerie3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galerie4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galerie5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galerie6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galerie7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galerie8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galerie9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galerie10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galerie11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galerie12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galerie13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galerie14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galerie15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `lutherie`
--

INSERT INTO `lutherie` (`id`, `titre_site`, `titre_introduction`, `introduction`, `image_description`, `image_galerie`, `description1`, `description2`, `galerie1`, `galerie2`, `galerie3`, `galerie4`, `galerie5`, `galerie6`, `galerie7`, `galerie8`, `galerie9`, `galerie10`, `galerie11`, `galerie12`, `galerie13`, `galerie14`, `galerie15`) VALUES
(1, 'Lutherie d\'Oc', 'Un art accessible pour tout le monde...', '<div>Ici Nicolas exprime le fait que son métier est tout public, tous budgets mais que la qualité \"à un prix\". The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. EDITION DU TEXTE VIA LE DASHBOARD ADMIN!!</div>', 'img-transitoire.jpg', 'img-transitoire.jpg', '<div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>', '<div>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</div>', 'img-transitoire.jpg', 'img-transitoire.jpg', 'img-transitoire.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `luthier`
--

DROP TABLE IF EXISTS `luthier`;
CREATE TABLE IF NOT EXISTS `luthier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre_page` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_slide1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_slide2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_slide3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_slide4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_slide5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_introduction` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre_texte1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texte1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre_texte2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texte2` longtext COLLATE utf8mb4_unicode_ci,
  `titre_texte3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texte3` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `luthier`
--

INSERT INTO `luthier` (`id`, `titre_page`, `image_slide1`, `image_slide2`, `image_slide3`, `image_slide4`, `image_slide5`, `titre_introduction`, `introduction`, `titre_texte1`, `texte1`, `titre_texte2`, `texte2`, `titre_texte3`, `texte3`) VALUES
(1, 'Nicolas DESVENAIN', 'ND-1.jpg', 'ND-2.jpg', 'ND-3.jpg', NULL, NULL, 'La Passion de l\'Art...', '<div>MODIFS DEPUIS LE DASHBOARD ADMIN OK!!<br>Tombé dans la marmite occitane dès son enfance, Nicolas DESVENAIN aime raconter l\'histoire de chaque instrument, dans le moindre détail, la fabrication de ces magnifiques répliques par des artistes luthiers renommés de Toulouse, de Carcassonne et de Corse : l\'organistrum, la cornemuse polyphonique du XIIIe siècle, les percussions en peau de chèvre tendue, le carillon du roi David, l\'orgue portatif, la flûte traversière en roseau, la vièle à archet, les instruments savants et raffinés comme le rebec (en langue arabe le « rabab »), le luth, la guitare sarrasine, sans oublier, entre beaucoup d\'autres, la guimbarde des comtes de Toulouse.</div>', 'Récompenses & succès...', '<div>Il se penche à l\'orée des années 2000 sur l\'histoire du chant trobar, se documente et apprend à lire les enluminures médiévales. Son acharnement finit par payer. En 2003, l\'Ariégeois est repéré par le groupe Oc\' et accompagne en concert la formation corse I Muvrini. Outre cette aventure, il crée la même année La Rosa Trobadoresca.</div>', 'A l\'international...', '<div>Une aventure qui lui permet de faire revivre cet amour platonique, ce fameux patois du XIIe siècle. Une passion qu\'il a même pu transmettre aux Américains, puisqu\'il intervient ponctuellement dans tous les États-Unis pour partager ses connaissances de l\'art Trobar. Son envie d\'apprendre ne s\'arrête pas là, puisqu\'il a eu la chance d\'être initié à l\'art de la lutherie, qu\'il exerce à présent professionnellement.</div>', 'Le mot de l\'artiste...', '<div>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projets_en_cours`
--

DROP TABLE IF EXISTS `projets_en_cours`;
CREATE TABLE IF NOT EXISTS `projets_en_cours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre_projet` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_projet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_projet` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets_en_cours`
--

INSERT INTO `projets_en_cours` (`id`, `titre_projet`, `image_projet`, `resume_projet`) VALUES
(2, 'Titre du projet en cours', 'https://zupimages.net/up/22/39/qp67.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).');

-- --------------------------------------------------------

--
-- Structure de la table `realisations`
--

DROP TABLE IF EXISTS `realisations`;
CREATE TABLE IF NOT EXISTS `realisations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre_page` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre_realisation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_realisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume_realisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_realisation1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_realisation2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `annexe_realisation1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annexe_realisation2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annexe_realisation3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annexe_realisation4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annexe_realisation5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_realisation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instrument_id` int DEFAULT NULL,
  `epoque_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FC5C476DCF11D9C` (`instrument_id`),
  KEY `IDX_FC5C476D45E7D711` (`epoque_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `realisations`
--

INSERT INTO `realisations` (`id`, `titre_page`, `titre_realisation`, `image_realisation`, `resume_realisation`, `description_realisation1`, `description_realisation2`, `annexe_realisation1`, `annexe_realisation2`, `annexe_realisation3`, `annexe_realisation4`, `annexe_realisation5`, `video_realisation`, `instrument_id`, `epoque_id`) VALUES
(1, 'Réalisations', 'Vièle à archet du palais des rois de Majorque', 'viele-perpignan-5.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>', '<div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>', 'viele-perpignan-2.png', 'viele-perpignan-1.png', 'viele-perpignan-4.png', 'viele-perpignan-3.png', NULL, NULL, 1, 4),
(2, 'Réalisations', 'Rebãb des cantigas de Santa Maria', 'rebab-santa-maria-4.png', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions.', '<div>Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</div>', '<div>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</div>', 'rebab-santa-maria-2.png', 'rebab-santa-maria-3.png', 'rebab-santa-maria-5.png', 'rebab-santa-maria-1.png', NULL, NULL, NULL, NULL),
(3, 'Réalisations', 'Vièle de Saint Jacques de Compostelle', 'viele-st-jacques-2.png', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions.', '<div>Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</div>', '<div>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</div>', 'viele-st-jacques-1.png', 'viele-st-jacques-3.png', 'viele-st-jacques-4.png', 'viele-st-jacques-5.png', NULL, NULL, NULL, NULL),
(7, 'Réalisations', 'Une réalisation fausse pour activer paginator', 'img-transitoire.jpg', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions ', '<div>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</div>', '<div>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</div>', 'img-transitoire.jpg', 'img-transitoire.jpg', 'img-transitoire.jpg', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'marie.favre.rochex@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$SHmvUsJfNK2revuFDpp1euamPB1om2Np4YoAQbl1Dw.kBivXHG60u'),
(2, 'usertests@mail.com', '[]', '$2y$13$cZAuV5hauH4bj/hU0mcKV.3xBdWM1R3sf7gox/wwT2Cf8KjLUD/ti');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre_video` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id`, `titre_video`, `description_video`, `chemin_video`) VALUES
(1, 'La première vidéo', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero.', 'https://www.youtube.com/embed/ijdU9hzTFSw'),
(2, 'La première vidéo', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero.', 'https://www.youtube.com/embed/ijdU9hzTFSw'),
(3, 'La première vidéo', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero.', 'https://www.youtube.com/embed/ijdU9hzTFSw'),
(4, 'La première vidéo', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero.', 'https://www.youtube.com/embed/ijdU9hzTFSw'),
(5, 'La première vidéo', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero.', 'https://www.youtube.com/embed/ijdU9hzTFSw'),
(6, 'La première vidéo', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero.', 'https://www.youtube.com/embed/ijdU9hzTFSw'),
(7, 'La première vidéo', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero.', 'https://www.youtube.com/embed/ijdU9hzTFSw'),
(8, 'La première vidéo', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero.', 'https://www.youtube.com/embed/ijdU9hzTFSw');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `realisations`
--
ALTER TABLE `realisations`
  ADD CONSTRAINT `FK_FC5C476D45E7D711` FOREIGN KEY (`epoque_id`) REFERENCES `epoques` (`id`),
  ADD CONSTRAINT `FK_FC5C476DCF11D9C` FOREIGN KEY (`instrument_id`) REFERENCES `instruments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
