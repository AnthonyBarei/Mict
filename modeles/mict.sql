-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 24 mars 2018 à 14:55
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mict`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_name` varchar(255) NOT NULL,
  `article_price` int(11) NOT NULL,
  `article_img` varchar(255) DEFAULT NULL,
  `article_description` varchar(255) NOT NULL,
  `article_date` date DEFAULT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `config_name` varchar(255) NOT NULL,
  `config_value` tinyint(1) NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `goldenbook`
--

DROP TABLE IF EXISTS `goldenbook`;
CREATE TABLE IF NOT EXISTS `goldenbook` (
  `goldenbook_id` int(11) NOT NULL AUTO_INCREMENT,
  `goldenbook_user` int(11) NOT NULL,
  `goldenbook_date` date NOT NULL,
  `goldenbook_commentary` varchar(255) NOT NULL,
  PRIMARY KEY (`goldenbook_id`),
  KEY `goldenbook_user` (`goldenbook_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` varchar(255) NOT NULL,
  `offer_date` date DEFAULT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) NOT NULL,
  `page_rows` varchar(255) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='rows is a json list';

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `partners_id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_name` varchar(255) NOT NULL,
  `partner_description` varchar(255) NOT NULL,
  `partner_link` varchar(255) NOT NULL,
  PRIMARY KEY (`partners_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_fix_phone` varchar(255) DEFAULT NULL,
  `user_mobile_phone` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_type` tinyint(1) NOT NULL,
  `user_isadmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_firstname`, `user_lastname`, `user_password`, `user_email`, `user_fix_phone`, `user_mobile_phone`, `user_address`, `user_type`, `user_isadmin`) VALUES
(1, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(2, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(3, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(4, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(5, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(6, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(7, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(8, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(9, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(10, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(11, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(12, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(13, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(14, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(15, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(16, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(17, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(18, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(19, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(20, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(21, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(22, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(23, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(24, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(25, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(26, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(27, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(28, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(29, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(30, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(31, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(32, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(33, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(34, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(35, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(36, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(37, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(38, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(39, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(40, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(41, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(42, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(43, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(44, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(45, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(46, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(47, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(48, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(49, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(50, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(51, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(52, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(53, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(54, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(55, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(56, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(57, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(58, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(59, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(60, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(61, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(62, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(63, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(64, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(65, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(66, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1),
(67, 'anthony', 'barei', 'test', 'anthony.barei@outlook.fr', NULL, '0665245218', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `workshop`
--

DROP TABLE IF EXISTS `workshop`;
CREATE TABLE IF NOT EXISTS `workshop` (
  `workshop_id` int(11) NOT NULL AUTO_INCREMENT,
  `workshop_name` varchar(255) NOT NULL,
  `workshop_infos` varchar(10000) NOT NULL,
  `workshop_description` varchar(10000) NOT NULL,
  `workshop_price` int(11) NOT NULL,
  `workshop_projects` varchar(255) NOT NULL,
  PRIMARY KEY (`workshop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='projects is json list';

--
-- Déchargement des données de la table `workshop`
--

INSERT INTO `workshop` (`workshop_id`, `workshop_name`, `workshop_infos`, `workshop_description`, `workshop_price`, `workshop_projects`) VALUES
(1, 'Les ateliers', '{\r\n  \"durée\": \"3 heures\",\r\n  \"capacité\": \"3 à 6 personnes\",\r\n  \"contexte\": \"chez toi ou tes amis\",\r\n  \"lieu\": \"Paris / région parisienne\",\r\n  \"complément\": \"tout inclus\"\r\n}', 'l\'essence même de Made in chez toi, c\'est de coudre ensemble, de partager de bons moments avec ses amis ou avec de nouvelles connaissances, le tout dans un environnement agréable et cosy.\r\n\r\nLes ateliers, c\'est l\'expression naturelle de ce concept. On se retrouve tous chez toi, ou lui, ou elle, dans un salon ou un séjour -- ce qui est beaucoup plus agréable que de se retrouver dans une salle de « cours » froide et impersonnelle !\r\n\r\nApprendre la couture doit pouvoir être universel : tout le monde est bienvenu, de la personne qui n\'a jamais touché une machine ou une bobine à celle qui a déjà de bonnes réalisations à son actif.\r\n\r\nC\'est pourquoi Made in chez toi s\'occupe de tout, et surtout de fournir tout le nécessaire au bon déroulement de l\'atelier : les machines -- une machine électronique haut de gamme par personne --, les tissus adaptés au thème de l\'atelier, le fil, le biais, le passe-poil, les fermetures, boutons, règles, ciseaux, découseurs... Tout ce qu\'il faut pour pouvoir coudre sans avoir à investir soi-même dans du matériel plus ou moins coûteux. D\'ailleurs, chaque atelier est l\'occasion de viser ou réviser les concepts de base de la couture, en fonction de votre niveau.\r\n\r\nQuand tu choisis un atelier, il faut choisir le thème qui sera abordé. Tu peux cliquer sur le bouton ci-dessous pour consulter les thèmes que Made in chez toi t\'a bichonnés. Une fois le thème sélectionné, et l\'atelier réservé, je t\'appelle pour te donner tous les détails. Chacun devra ensuite choisir son projet spécifique, parmi la liste de projets proposés dans le thème, afin que je puisse apporter le jour J le matériel nécessaire pour chacun (patrons, tissus...).\r\n\r\nPas de stress, je peux vous conseiller sur ce point, en fonction du niveau et des attentes de chacun. En effet, certains projets sont plus ou moins faciles. D\'autres sont plus ou moins longs. Dans tous les cas, même pour les projets les plus simples, il est possible d\'adapter le niveau de difficulté avec des options (doublures, passepoils, réversible...), pour que tout le monde se fasse plaisir !\r\n\r\nSi tes amis ne sont pas intéressés, si vous n\'avez jamais les mêmes créneaux, ou si tu veux rencontrer de nouvelles personnes, tu peux joindre un atelier déjà planifié et où il reste de la place. En effet, même quand tu organises un atelier chez toi, tu peux l\'« ouvrir au public » et proposer à d\'autres d\'y participer. Intéressant pour rencontrer du monde, intéressant aussi car plus vous êtes nombreux, plus le prix individuel diminue ! Clique sur le bouton « Les tarifs » ci-dessous pour en savoir plus.\r\n\r\nEnfin, pense à Made in chez toi pour tous tes événements festifs. Noël, Pâques, Halloween, anniversaires, EVJF, fête des mères (et des pères :) ), Made in chez toi a des ateliers spécifiques et sur-mesure prévus pour passer de bons moments avec tes amis et tes proches !', 30, ''),
(2, 'Lorem Ipsum', '{\r\n  \"durée\": \"1 heures\",\r\n  \"capacité\": \"2 personnes\",\r\n  \"contexte\": \"ipsum\",\r\n  \"lieu\": \"Paris\",\r\n  \"complément\": \"rien inclus\"\r\n}', 'Verum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita. Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis; hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.', 152, '');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `goldenbook`
--
ALTER TABLE `goldenbook`
  ADD CONSTRAINT `goldenbook_ibfk_1` FOREIGN KEY (`goldenbook_user`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
