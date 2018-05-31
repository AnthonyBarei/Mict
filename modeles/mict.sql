-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 31 mai 2018 à 15:45
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `mict`
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
-- Structure de la table `boutique`
--

CREATE TABLE `boutique` (
  `id` int(11) NOT NULL,
  `Lien` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `boutique`
--

INSERT INTO `boutique` (`id`, `Lien`) VALUES
(1, 'http://www.bednspa.com/suites/suites.html');

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
  `workshop_infos` longtext,
  `workshop_description` longtext NOT NULL,
  `workshop_price` longtext NOT NULL,
  `workshop_projects` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='projects is json list';

--
-- Déchargement des données de la table `workshop`
--

INSERT INTO `workshop` (`workshop_id`, `workshop_name`, `workshop_infos`, `workshop_description`, `workshop_price`, `workshop_projects`) VALUES
(66, 'Les ateliers', '[\"3 heures \",\"3 à 6 personnes\",\"chez toi ou tes amis\",\"Paris \\/ région parisienne\",\"tout inclus\"]', '[\"L\'essence même de Made in chez toi, c\'est de coudre ensemble, de partager de bons moments avec ses amis ou avec de nouvelles connaissances, le tout dans un environnement agréable et cosy.\",\"Les ateliers, c\'est l\'expression naturelle de ce concept. On se retrouve tous chez toi, ou lui, ou elle, dans un salon ou un séjour -- ce qui est beaucoup plus agréable que de se retrouver dans une salle de « cours » froide et impersonnelle !\",\"Apprendre la couture doit pouvoir être universel : tout le monde est bienvenu, de la personne qui n\'a jamais touché une machine ou une bobine à celle qui a déjà de bonnes réalisations à son actif.\",\"C\'est pourquoi Made in chez toi s\'occupe de tout, et surtout de fournir tout le nécessaire au bon déroulement de l\'atelier : les machines -- une machine électronique haut de gamme par personne --, les tissus adaptés au thème de l\'atelier, le fil, le biais, le passe-poil, les fermetures, boutons, règles, ciseaux, découseurs... Tout ce qu\'il faut pour pouvoir coudre sans avoir à investir soi-même dans du matériel plus ou moins coûteux. D\'ailleurs, chaque atelier est l\'occasion de viser ou réviser les concepts de base de la couture, en fonction de votre niveau.\",\"Quand tu choisis un atelier, il faut choisir le thème qui sera abordé. Tu peux cliquer sur le bouton ci-dessous pour consulter les thèmes que Made in chez toi t\'a bichonnés. Une fois le thème sélectionné, et l\'atelier réservé, je t\'appelle pour te donner tous les détails. Chacun devra ensuite choisir son projet spécifique, parmi la liste de projets proposés dans le thème, afin que je puisse apporter le jour J le matériel nécessaire pour chacun (patrons, tissus...).\",\"Pas de stress, je peux vous conseiller sur ce point, en fonction du niveau et des attentes de chacun. En effet, certains projets sont plus ou moins faciles. D\'autres sont plus ou moins longs. Dans tous les cas, même pour les projets les plus simples, il est possible d\'adapter le niveau de difficulté avec des options (doublures, passepoils, réversible...), pour que tout le monde se fasse plaisir !\",\"Si tes amis ne sont pas intéressés, si vous n\'avez jamais les mêmes créneaux, ou si tu veux rencontrer de nouvelles personnes, tu peux joindre un atelier déjà planifié et où il reste de la place. En effet, même quand tu organises un atelier chez toi, tu peux l\'« ouvrir au public » et proposer à d\'autres d\'y participer. Intéressant pour rencontrer du monde, intéressant aussi car plus vous êtes nombreux, plus le prix individuel diminue ! Clique sur le bouton « Les tarifs » ci-dessous pour en savoir plus.\",\"Enfin, pense à Made in chez toi pour tous tes événements festifs. Noël, Pâques, Halloween, anniversaires, EVJF, fête des mères (et des pères :) ), Made in chez toi a des ateliers spécifiques et sur-mesure prévus pour passer de bons moments avec tes amis et tes proches !\"]', '[[\"3\",\"90 €\",\"soit 30 € \\/ h\"],[\"4\",\"80 €\",\"soit 27 € \\/h\"],[\"5\",\"75 €\",\"soit 25 € \\/h\"],[\"6\",\"70 €\",\"soit 23 € \\/ h\"]]', '[\"Rappel : 1 atelier = 3 heures, chez toi, machine, tissus et fournitures compris\",\"\",\"\"]'),
(70, 'Les cours particuliers', '[\"3 heures \",\"chez toi \",\"Paris \\/ région parisienne\",\"cours sur-mesure\"]', '[\"Tu te reconnais bien ci-dessus mais... pas de chance ! Toutes tes copines qui étaient partantes pour l\'atelier se laissent rattraper par... tu sais... les enfants... le boulot... les courses... la famille... Bref, difficile de trouver un créneau pour tout le monde !\",\"Tu décides de ne plus attendre pour sortir ton livre de couture de l\'étagère :) Made in chez toi pense aussi à toi ! La formule Cours Particuliers, c\'est le sur-mesure de l\'apprentissage de la couture !\",\"Tu débutes ? On commence pas à pas en détaillant chaque étape, et tu repars vite avec une de tes réalisations ; parce qu\'elle est importante, cette première...\",\"Tu t\'y connais déjà un peu ? Made in chez toi arrive là où ça coince ! Tu avances ton projet autant que tu peux\\/veux, et on se penche sur les difficultés en temps réel pour un temps d\'enseignement optimisé.\",\"Tu n\'as pas de machine à coudre ? Tu peux quand même suivre un cours particulier, Made in chez toi t\'en fournit une. Oui ! Il faut bien s\'y frotter pour s\'y piquer, à la couture ! En revanche, les fournitures, elles, ne sont pas fournies.\"]', '[[\"1\",\"90 €\",\"400 €\"],[\"2\",\"100 €\",\"450 €\"],[\"3\",\"sur devis\",\"sur devis\"],[\"\",\"\",\"\"]]', '[\"Les prix correspondent à des cours de 3 heures, chez toi. Tu peux aussi opter pour la carte de 5 cours, valable 1 an, pour économiser 10 € sur le prix de chaque atelier !\",\"Les tarifs dépendent de ta zone géographique :\",\"Zone 1 : Paris, 92, 93, 95<br\\/>Zone 2 : 77, 78, 91, 94<br\\/>Zone 3 : autres\"]'),
(71, 'La carte cadeau Made in chez toi', '[\"85 € \",\"Valable un an\",\"Ateliers ou cours particuliers\",\"Paris \\/ région parisienne\",\"Son coupe-fil offert\"]', '[\"Tu es à la recherche d\'un cadeau original et personnalisé pour Noël ? Pour un anniversaire ? Une fête de famille ? Un départ en retraite ?\",\"Avec la carte cadeau Made in chez toi, tu peux offrir un cadeau inédit, convivial et, par dessus tout, utile !\",\"Pour toi, au même tarif qu\'un cours ou un atelier classique, c\'est la réception rapide (par lettre prioritaire) d\'une carte cadeau réelle, tangible, personnalisée et très originale (bien plus qu\'un simple code à taper dans un champ \\\"code promotionnel\\\"...) qui mettra très vite l\'eau à la bouche de son destinataire.\",\"Pour l\'heureux bénéficiaire, c\'est l\'assurance de pouvoir participer sous un an à un atelier ou un cours particulier de son choix, avec les mêmes avantages que les autres clients (ateliers collectifs tout inclus, cours particuliers sur-mesure...). Mais comme ce n\'est tout de même pas un client comme un autre, un accessoire indispensable lui sera offert le jour de la prestation !\",\"Alors n\'hésite plus et fais découvrir la passion de la couture à tes proches !\"]', '[[\"\",\"\",\"\"],[\"\",\"\",\"\"],[\"\",\"\",\"\"],[\"\",\"\",\"\"]]', ''),
(72, 'Entreprises, CE et projets sur mesure', '[\"Plusieurs formules\",\"à domicile ou dans l\'entreprise\",\"ateliers ou stages\",\"tout inclus\"]', '[\"Made in chez toi n\'oublie pas le monde du travail ! Parce que ce que l\'on peut coudre entre amis, on peut le coudre entre collègues :)\",\"Plusieurs formules sont possibles : subvention de cours ou d\'ateliers chez les salariés sous forme de bons d\'achat, ateliers dans vos locaux ou à proximité, animation de stage de couture, pendant l\'année ou lors de vacances scolaires... Le tout avec des prix agressifs et dégressifs :) Votre devis et tous les détails sur demande, ici.\",\"Comme pour les ateliers, tout est inclus : une machine à coudre haut de gamme par personne, les tissus, fil, accessoires, outils... Rien à apporter, et à la fin de l\'atelier, une création à emporter !\",\"En plus des CE, Made in chez toi anime aussi des ateliers découverte de la couture par les enfants. Une offre complète est disponible, des goûters et animations d\'anniversaires (de 6 à 15 ans) jusqu\'aux animations scolaires (dès le CP), en passant par des stages ou par des ateliers 4 mains (mères \\/ filles) pour transmettre ensemble la passion de la couture à vos enfants.\",\"Quels qu\'ils soient, discutons de vos projets !\"]', '0', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Index pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `boutique`
--
ALTER TABLE `boutique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `workshop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `goldenbook`
--
ALTER TABLE `goldenbook`
  ADD CONSTRAINT `goldenbook_ibfk_1` FOREIGN KEY (`goldenbook_user`) REFERENCES `user` (`user_id`);
