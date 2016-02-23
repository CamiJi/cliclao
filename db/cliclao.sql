-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 23 Février 2016 à 10:17
-- Version du serveur :  5.6.25
-- Version de PHP :  5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cliclao`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `voyage_id` int(11) DEFAULT NULL,
  `user_id` blob,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `continent` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `country`
--

INSERT INTO `country` (`id`, `name`, `description`, `continent`) VALUES
(1, 'canada', 'Découvrez nos suggestions de voyages au Canada entièrement personnalisables à votre rythme et selon vos envies : UNE EXPÉRIENCE AUTHENTIQUE, UN PARTAGE, UNE RENCONTRE AVEC LE CANADA Marco Vasco c’est avant tout une philosophie du voyage axée sur une expérience unique de la destination. Laissez-vous tenter par un voyage original et inoubliable dans l’ouest en séjour, en autotour ou bien par le train dans l''est.', 'ameriques');

-- --------------------------------------------------------

--
-- Structure de la table `days`
--

CREATE TABLE IF NOT EXISTS `days` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `bodyText` longtext,
  `img` varchar(255) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `town` varchar(45) DEFAULT NULL,
  `lat` int(11) DEFAULT NULL,
  `long` int(11) DEFAULT NULL,
  `voyage_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `days`
--

INSERT INTO `days` (`id`, `name`, `bodyText`, `img`, `ordering`, `town`, `lat`, `long`, `voyage_id`, `created_at`, `updated_at`) VALUES
(7, 'Départ pour Montréal', '    <ul>\r\n  <li>Bienvenue au <strong>Québec </strong> !!!</li>\r\n  <li>Transfert (en option) à l’<strong>hôtel Lord Berri 3*</strong> (ou similaire) en centre ville.</li>\r\n  <li><strong>Montréal</strong>, la métropole, offre les mille et un attraits des grandes villes du monde. <br />\r\nMais Montréal, l''unique, sait aussi se distinguer. <br />\r\nMulticulturelle, elle mêle son accent français  à celui de plus de 80 autres communautés culturelles et charme par son ambiance américano-européenne. Inventive, elle se grise dans un tourbillon de créations culturelles, tant classiques que d''avant-garde. <br />\r\nSon centre-ville grouille de vie au pied de sa montagne, alors que son histoire s''enracine dans ses vieux quartiers près du fleuve. </li>\r\n  <li>Nuit à votre hôtel.</li>\r\n    </ul> ', 'http://www.buscadordevuelosbaratos.net/wp-content/uploads/viajar-edrams.jpg', 1, 'montreal', NULL, NULL, 1, NULL, NULL),
(8, 'Journées libres pour découvrir la ville', '<ul>\r\n  <li><strong>En option</strong> : visite de la ville en bus (3h): Une visite complète de la ville, avec plus de 200 lieux  d''intérêt, incluant un arrêt photo à la Basilique Notre-Dame, l''Oratoire Saint-Joseph, les secteurs résidentiels et financiers, le Vieux-Montréal, le Quartier Français, une vue extérieure du site olympique, l''Université McGill et une vue panoramique à partir d''un point d''observation au sommet du Mont-Royal. </li>\r\n  <li><strong>En option</strong> : visite avec un guide privatif du Vieux Montréal à pied (2h30) : Découvrez le plus ancien quartier de la ville avec son histoire, son architecture unique en Amérique du Nord, ses musées, ses galeries d''art et ses nombreux cafés et restaurants.<br />\r\nEn vous baladant en calèche au milieu de demeures des XVIIIe et XIXe siècles dans le Vieux-Montréal, vous découvrirez l''imposante Basilique Notre-Dame, de style néo-gothique, ainsi que des musées qui racontent le passé comme le Musée Pointe-à-Callière et le Centre d''histoire de Montréal. Le Vieux-Port invite à la détente en toutes saisons. Parmi ses attraits, mentionnons le Centre des sciences de Montréal, un vaste complexe consacré à la culture scientifique, doté d''un cinéma IMAX. <br />\r\nAu centre-ville, les grands magasins, les boutiques et les cinémas pullulent, sans oublier les grands musées, comme le Musée des beaux-arts de Montréal, le Musée d''art contemporain, le Musée McCord d''histoire canadienne ou encore le Centre canadien d''architecture. </li>\r\n<li><strong>En option</strong> : Pass musées</li>\r\n<li><strong>En option </strong>: Spa Le Scandinave les Bains : Situé dans le vieux Montréal, face au Saint Laurent, ce tout nouveau spa dispose d’un emplacement hors pair. Sauna, bain de vapeur, jacuzzis, douches nordiques, salle de soins, tout est fait pour votre bien être. </li>\r\n</ul></li>\r\n<li>Nuits à votre hôtel</li>\r\n</ul>', 'http://c0.marcovasco.fr/sites/www.planetveo.com/files/styles/lightbox-image/public/tour_day_images/can/j2-3_montreal_0.jpg?itok=rzYeCotV', 2, 'Montreal', NULL, NULL, 1, NULL, NULL),
(9, 'Départ en train pour Québec', '  <ul>\r\n    <li>Petit déjeuner à l’hôtel.</li>\r\n    <li>Transfert à la gare en taxi.</li>\r\n    <li>Départ en train pour <strong>Québec</strong>. <br />\r\nLe train est le moyen de transport idéal pour découvrir une région dans le confort douillet d’un siège.<br />\r\nCe trajet en train vous permettra de parcourir les magnifiques paysages enneigés qui séparent la tumultueuse <strong>Montréal</strong>  de la vieille ville de Québec, le tout bien au chaud dans votre wagon. </li>\r\n    <li>Une fois arrivée à destination, transfert optionnel à l’<strong>Hôtel Acadia 3*</strong> (ou similaire) en centre ville.\r\n<ul>\r\n    <li><strong>Option</strong> : visite regroupée de la ville 2h en minibus : Savourez le charme européen de la première ville française d''Amérique du Nord !<br />\r\nCe tour offre une visite des principaux sites historiques de la ville de Québec : le quartier Latin, <strong>les plaines d''Abraham</strong>, les remparts, le célèbre <strong>Château Frontenac</strong>, l''Assemblée nationale, la Basilique, l''Hôtel de ville, la Place Royale, la Citadelle ainsi que plusieurs points d''intérêt des quartiers plus modernes de la ville.</li>\r\n</ul></li>\r\n    <li>Nuit à votre hôtel.</li>\r\n      </ul>', 'http://c2.marcovasco.fr/sites/www.planetveo.com/files/styles/lightbox-image/public/tour_day_images/can/j4_quebec.jpg?itok=VAdbB1gY', 3, 'Québec', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `themes`
--

INSERT INTO `themes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'trekking', NULL, NULL),
(2, 'famille', NULL, NULL),
(3, 'voiture', NULL, NULL),
(4, 'bateau', NULL, NULL),
(5, 'lune de miel', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `voyages`
--

CREATE TABLE IF NOT EXISTS `voyages` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `budget` int(11) DEFAULT NULL,
  `difficulte` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description_voyage` longtext NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `theme_id_id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `comments_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `voyages`
--

INSERT INTO `voyages` (`id`, `date`, `budget`, `difficulte`, `name`, `description_voyage`, `updated_at`, `created_at`, `theme_id_id`, `country_id`, `comments_id`) VALUES
(1, NULL, 3, 3, 'Québec et Montréal en duo', 'Ce séjour au Québec vous emmène sur le chemin du Roy, la plus ancienne route terrestre du Canada, reliant les villes les plus animées du pays : Montréal, Trois-Rivières et Québec. Commencez par la métropole américaine de Montréal, découvrez le mariage des quartiers anciens aux petites maisons colorées et des gratte-ciel typiquement américains. Puis faites la connaissance de Trois-Rivières, élue capitale culturelle du pays en 2009. En suivant le chemin du Roy, vous pourrez contempler le riche patrimoine de la Nouvelle-France qui longe le fleuve Saint-Laurent. Enfin, Québec saura vous séduire par son charme pittoresque, sa gastronomie et sa joie de vivre.', NULL, NULL, 2, 1, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_day_Voyage1_idx` (`voyage_id`);

--
-- Index pour la table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyages`
--
ALTER TABLE `voyages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Voyage_theme_id1_idx` (`theme_id_id`),
  ADD KEY `fk_voyages_comments1_idx` (`comments_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `voyages`
--
ALTER TABLE `voyages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `days`
--
ALTER TABLE `days`
  ADD CONSTRAINT `fk_day_Voyage1` FOREIGN KEY (`voyage_id`) REFERENCES `voyages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `voyages`
--
ALTER TABLE `voyages`
  ADD CONSTRAINT `fk_Voyage_theme_id1` FOREIGN KEY (`theme_id_id`) REFERENCES `themes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;