-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 29 Février 2016 à 11:03
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
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `role` varchar(15) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'member', NULL, 'roberto.delaVega@hotmail.com', '$2y$10$CGlIPqubqwiNONIbnk5GnO9hzi709fGPlIbkEGqURp5k2Ae4SIqgu', '2016-02-24 12:51:19', '2016-02-24 12:51:19'),
(2, 'member', NULL, 'az@az.com', '$2y$10$CDUtnhKP1Qcdsm9NsaGiL.ynu5QoqwMpu8/w7AgixjUZRLtXr5xxG', '2016-02-24 12:54:41', '2016-02-24 12:54:41'),
(3, 'member', NULL, 'rt@rt.com', '$2y$10$MRJVkLaw.3apzNaoq7.pzuSg9fg558sgMXD1FW9gPqKArfTZ7Ani2', '2016-02-24 13:02:22', '2016-02-24 13:02:22'),
(4, 'member', 'xc', 'xc@xc.com', '$2y$10$8riYGSSvI1mj4rf.nzFLou4RGn7.gT0R1SGYcMTCtEygOWP4faUjy', '2016-02-24 14:20:00', '2016-02-24 14:20:00'),
(5, 'member', 'aq', 'aq@aq.com', '$2y$10$OsqwOcBKKLdyiVvQxwtoIu.HgGyRc9RqVt6GRip8KqXjDVp3lihYK', '2016-02-24 14:56:36', '2016-02-24 14:56:36'),
(6, 'member', 'qs', 'qs@qs.com', '$2y$10$OZin8wk7yCuLq38vC9mi4enfyl8JGky7atLNPRNEeTK7SBZGCYJBC', '2016-02-24 15:39:00', '2016-02-24 15:39:00'),
(7, 'member', 'cam', 'cam@cam.com', '$2y$10$rTxfWb6O/7Ok.29RPthahe9hprVupJloBUHOwERtk9OqeLn0yqbwi', '2016-02-24 16:05:15', '2016-02-24 16:05:15'),
(8, 'member', 'w', 'w@w.com', '$2y$10$N30lP6nAwwHoLiOnitqVbuuV5ymAtQdZnflJlnoSTbzVFtzkqfTq6', '2016-02-24 16:38:12', '2016-02-24 16:38:12'),
(9, 'member', 'ol', 'ol@ol.com', '$2y$10$9SwF.zkduyLiiHEfGrlqpuA9xZygTdYr687uWbDzLLSRK44vQ4xCe', '2016-02-25 11:27:36', '2016-02-25 11:27:36'),
(10, 'member', 'op', 'op@op.com', '$2y$10$YueC6Bqt5kGVeaJV70Io2ezVwC3GJMsbI0SKsWoehplAdve9dht4C', '2016-02-25 11:28:32', '2016-02-25 11:28:32'),
(11, 'member', 'pmpmpm', 'pm@pm.com', '$2y$10$nOIimX1zpoyFjqNugfyB/OgZN4wXxqjQFWDY1OA15Wkn2q1eKpxJ2', '2016-02-25 11:30:13', '2016-02-25 11:30:13'),
(12, 'member', 'tg', 'tg@tg.com', '$2y$10$vFsQE2btSo.BBhgGoXwcb.CSCuv5Q71jCEjChOaZXPXfIMqZdPEBa', '2016-02-25 11:33:51', '2016-02-25 11:33:51');

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
  `img_voyage` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `country_id` varchar(11) DEFAULT NULL,
  `comments_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `voyages`
--

INSERT INTO `voyages` (`id`, `date`, `budget`, `difficulte`, `name`, `description_voyage`, `img_voyage`, `updated_at`, `created_at`, `user_id`, `country_id`, `comments_id`) VALUES
(1, NULL, 659, 3, 'Québec et Montréal en duo', 'Ce séjour au Québec vous emmène sur le chemin du Roy, la plus ancienne route terrestre du Canada, reliant les villes les plus animées du pays : Montréal, Trois-Rivières et Québec. Commencez par la métropole américaine de Montréal, découvrez le mariage des quartiers anciens aux petites maisons colorées et des gratte-ciel typiquement américains. Puis faites la connaissance de Trois-Rivières, élue capitale culturelle du pays en 2009. En suivant le chemin du Roy, vous pourrez contempler le riche patrimoine de la Nouvelle-France qui longe le fleuve Saint-Laurent. Enfin, Québec saura vous séduire par son charme pittoresque, sa gastronomie et sa joie de vivre.', '', NULL, NULL, 0, '1', NULL),
(3, NULL, 656, 3, 'djschnojshjesjro', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:05:44', '2016-02-26 17:05:44', 12, 'RO', NULL),
(4, NULL, 656, 3, 'djschnojshjesjro', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:08:49', '2016-02-26 17:08:49', 12, 'RO', NULL),
(5, NULL, 656, 3, 'djschnojshjesjro', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:08:57', '2016-02-26 17:08:57', 12, 'RO', NULL),
(6, NULL, 656, 3, 'djschnojshjesjro', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:11:38', '2016-02-26 17:11:38', 12, 'RO', NULL),
(7, NULL, 656, 3, 'djschnojshjesjro', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:12:07', '2016-02-26 17:12:07', 12, 'RO', NULL),
(8, NULL, 656, 3, 'djschnojshjesjro', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:12:38', '2016-02-26 17:12:38', 12, 'RO', NULL),
(9, NULL, 656, 3, 'djschnojshjesjro', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:13:07', '2016-02-26 17:13:07', 12, 'RO', NULL),
(10, NULL, 656, 3, 'djschnojshjesjro', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:13:18', '2016-02-26 17:13:18', 12, 'RO', NULL),
(11, NULL, 656, 3, 'djschnojshjesjro', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:13:36', '2016-02-26 17:13:36', 12, 'RO', NULL),
(12, NULL, 656, 3, 'djschnojshjesjro', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:14:06', '2016-02-26 17:14:06', 12, 'RO', NULL),
(13, NULL, 659, 3, 'vrkejfejuoevjipr&agrave;e', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:14:29', '2016-02-26 17:14:29', 12, 'TJ', NULL),
(14, NULL, 659, 3, 'vrkejfejuoevjipr&agrave;e', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:16:12', '2016-02-26 17:16:12', 12, 'TJ', NULL),
(15, NULL, 659, 3, 'vrkejfejuoevjipr&agrave;e', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:16:28', '2016-02-26 17:16:28', 12, 'TJ', NULL),
(16, NULL, 659, 3, 'vrkejfejuoevjipr&agrave;e', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:18:44', '2016-02-26 17:18:44', 12, 'TJ', NULL),
(17, NULL, 659, 3, 'vrkejfejuoevjipr&agrave;e', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:20:33', '2016-02-26 17:20:33', 12, 'TJ', NULL),
(18, NULL, 659, 3, 'vrkejfejuoevjipr&agrave;e', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:21:48', '2016-02-26 17:21:48', 12, 'TJ', NULL),
(19, NULL, 659, 3, 'vrkejfejuoevjipr&agrave;e', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:22:13', '2016-02-26 17:22:13', 12, 'TJ', NULL),
(20, NULL, 659, 3, 'vrkejfejuoevjipr&agrave;e', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'IMG_4107.JPG', '2016-02-26 17:22:51', '2016-02-26 17:22:51', 12, 'TJ', NULL),
(21, NULL, 659, 3, 'az', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus', 'avatar_cp_big.jpg', '2016-02-29 10:02:50', '2016-02-29 10:02:50', 12, 'BZ', NULL);

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
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyages`
--
ALTER TABLE `voyages`
  ADD PRIMARY KEY (`id`),
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
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `voyages`
--
ALTER TABLE `voyages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `days`
--
ALTER TABLE `days`
  ADD CONSTRAINT `fk_day_Voyage1` FOREIGN KEY (`voyage_id`) REFERENCES `voyages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
