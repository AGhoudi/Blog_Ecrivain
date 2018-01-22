-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 
-- Généré le :  lun. 22 jan. 2018 à 11:18
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
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 1, 'Max', 'Joli blog!!!\r\nbel effort.', '2018-01-17 12:17:23'),
(3, 1, 'bill', 'Non il est nul ton blog', '2018-01-17 12:18:35'),
(4, 1, 'Tom', 'Oui c\'est vrai le design est pas terrible', '2018-01-17 12:19:21'),
(5, 2, 'jimmy', 'Merci de te présenter', '2018-01-17 12:20:21'),
(6, 2, 'francis', 'Oui au mon on sait a qui on a affaire.', '2018-01-17 12:20:51'),
(7, 2, 'Emilie', 'Moi en tout cas, j\'aime pas les blogs,\r\nc\'est trop has been, limite année 90.', '2018-01-17 12:21:41'),
(8, 4, 'thomas', 'Lol, même pas capable d\'écrire une ligne, mdr', '2018-01-17 12:22:25'),
(9, 4, 'Martin', 'Au fait? il parle de quoi ton roman?', '2018-01-17 12:22:55'),
(10, 4, 'Charlotte', 'Les romans et les blogs c\'est pour les vieux.', '2018-01-17 12:23:28');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Bienvenue sur mon super blog!!!', 'Bienvenue sur mon super blog!!!\r\nIl y aura ici les meilleures news du monde.', '2018-01-09 14:30:28'),
(2, 'Jean Forteroche', 'Je me présente, je suis Jean Forteroche, acteur, chanteur, danseur, cinéaste, écrivain, et plongeur professionnel; je suis le meilleur, même si j\'ai pas écrit la moindre ligne de mon premier roman.', '2018-01-09 15:04:00'),
(4, 'Première ligne de mon roman', 'J\'étais assis... ah... non en fait j\'ai rien dis, arghhh... le début ne va pas, bon ben tant pis, je commencerais mon roman une autre fois alors.', '2018-01-09 15:08:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
