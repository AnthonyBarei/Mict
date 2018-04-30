-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 30 avr. 2018 à 15:44
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Mict`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_name` varchar(255) NOT NULL,
  `article_price` int(11) NOT NULL,
  `article_img` varchar(255) DEFAULT NULL,
  `article_description` varchar(255) NOT NULL,
  `article_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `config`
--

CREATE TABLE `config` (
  `config_id` int(11) NOT NULL,
  `config_name` varchar(255) NOT NULL,
  `config_value` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `goldenbook`
--

CREATE TABLE `goldenbook` (
  `goldenbook_id` int(11) NOT NULL,
  `goldenbook_user` int(11) NOT NULL,
  `goldenbook_date` date NOT NULL,
  `goldenbook_commentary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(400) NOT NULL,
  `news_body` varchar(1500) NOT NULL,
  `news_link` varchar(600) NOT NULL,
  `news_start` date NOT NULL,
  `news_end` date NOT NULL,
  `news_recurrence` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_body`, `news_link`, `news_start`, `news_end`, `news_recurrence`) VALUES
(1, 'Passé', 'passé', '', '2017-01-01', '2017-12-31', 0),
(2, 'présent', 'présent', 'présent', '2018-01-01', '2018-12-31', 0),
(3, 'futur', 'futur', 'futur', '2019-01-01', '2019-12-31', 0);

-- --------------------------------------------------------

--
-- Structure de la table `offer`
--

CREATE TABLE `offer` (
  `offer_id` int(11) NOT NULL,
  `offer_name` varchar(255) NOT NULL,
  `offer_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_rows` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='rows is a json list';

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

CREATE TABLE `partners` (
  `partners_id` int(11) NOT NULL,
  `partner_name` varchar(255) NOT NULL,
  `partner_description` varchar(255) NOT NULL,
  `partner_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_fix_phone` varchar(255) DEFAULT NULL,
  `user_mobile_phone` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_type` tinyint(1) NOT NULL,
  `user_isadmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `workshop` (
  `workshop_id` int(11) NOT NULL,
  `workshop_name` varchar(255) NOT NULL,
  `workshop_infos` varchar(10000) NOT NULL,
  `workshop_description` varchar(10000) NOT NULL,
  `workshop_price` int(11) NOT NULL,
  `workshop_projects` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='projects is json list';

--
-- Déchargement des données de la table `workshop`
--

INSERT INTO `workshop` (`workshop_id`, `workshop_name`, `workshop_infos`, `workshop_description`, `workshop_price`, `workshop_projects`) VALUES
(1, 'Les ateliers', '{\r\n  \"durée\": \"3 heures\",\r\n  \"capacité\": \"3 à 6 personnes\",\r\n  \"contexte\": \"chez toi ou tes amis\",\r\n  \"lieu\": \"Paris / région parisienne\",\r\n  \"complément\": \"tout inclus\"\r\n}', 'l\'essence même de Made in chez toi, c\'est de coudre ensemble, de partager de bons moments avec ses amis ou avec de nouvelles connaissances, le tout dans un environnement agréable et cosy.\r\n\r\nLes ateliers, c\'est l\'expression naturelle de ce concept. On se retrouve tous chez toi, ou lui, ou elle, dans un salon ou un séjour -- ce qui est beaucoup plus agréable que de se retrouver dans une salle de « cours » froide et impersonnelle !\r\n\r\nApprendre la couture doit pouvoir être universel : tout le monde est bienvenu, de la personne qui n\'a jamais touché une machine ou une bobine à celle qui a déjà de bonnes réalisations à son actif.\r\n\r\nC\'est pourquoi Made in chez toi s\'occupe de tout, et surtout de fournir tout le nécessaire au bon déroulement de l\'atelier : les machines -- une machine électronique haut de gamme par personne --, les tissus adaptés au thème de l\'atelier, le fil, le biais, le passe-poil, les fermetures, boutons, règles, ciseaux, découseurs... Tout ce qu\'il faut pour pouvoir coudre sans avoir à investir soi-même dans du matériel plus ou moins coûteux. D\'ailleurs, chaque atelier est l\'occasion de viser ou réviser les concepts de base de la couture, en fonction de votre niveau.\r\n\r\nQuand tu choisis un atelier, il faut choisir le thème qui sera abordé. Tu peux cliquer sur le bouton ci-dessous pour consulter les thèmes que Made in chez toi t\'a bichonnés. Une fois le thème sélectionné, et l\'atelier réservé, je t\'appelle pour te donner tous les détails. Chacun devra ensuite choisir son projet spécifique, parmi la liste de projets proposés dans le thème, afin que je puisse apporter le jour J le matériel nécessaire pour chacun (patrons, tissus...).\r\n\r\nPas de stress, je peux vous conseiller sur ce point, en fonction du niveau et des attentes de chacun. En effet, certains projets sont plus ou moins faciles. D\'autres sont plus ou moins longs. Dans tous les cas, même pour les projets les plus simples, il est possible d\'adapter le niveau de difficulté avec des options (doublures, passepoils, réversible...), pour que tout le monde se fasse plaisir !\r\n\r\nSi tes amis ne sont pas intéressés, si vous n\'avez jamais les mêmes créneaux, ou si tu veux rencontrer de nouvelles personnes, tu peux joindre un atelier déjà planifié et où il reste de la place. En effet, même quand tu organises un atelier chez toi, tu peux l\'« ouvrir au public » et proposer à d\'autres d\'y participer. Intéressant pour rencontrer du monde, intéressant aussi car plus vous êtes nombreux, plus le prix individuel diminue ! Clique sur le bouton « Les tarifs » ci-dessous pour en savoir plus.\r\n\r\nEnfin, pense à Made in chez toi pour tous tes événements festifs. Noël, Pâques, Halloween, anniversaires, EVJF, fête des mères (et des pères :) ), Made in chez toi a des ateliers spécifiques et sur-mesure prévus pour passer de bons moments avec tes amis et tes proches !', 30, ''),
(2, 'Lorem Ipsum', '{\r\n  \"durée\": \"1 heures\",\r\n  \"capacité\": \"2 personnes\",\r\n  \"contexte\": \"ipsum\",\r\n  \"lieu\": \"Paris\",\r\n  \"complément\": \"rien inclus\"\r\n}', 'Verum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita. Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis; hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.', 152, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Index pour la table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`config_id`);

--
-- Index pour la table `goldenbook`
--
ALTER TABLE `goldenbook`
  ADD PRIMARY KEY (`goldenbook_id`),
  ADD KEY `goldenbook_user` (`goldenbook_user`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Index pour la table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partners_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`workshop_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `config`
--
ALTER TABLE `config`
  MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `goldenbook`
--
ALTER TABLE `goldenbook`
  MODIFY `goldenbook_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `offer`
--
ALTER TABLE `offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `partners`
--
ALTER TABLE `partners`
  MODIFY `partners_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT pour la table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `workshop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `goldenbook`
--
ALTER TABLE `goldenbook`
  ADD CONSTRAINT `goldenbook_ibfk_1` FOREIGN KEY (`goldenbook_user`) REFERENCES `user` (`user_id`);
