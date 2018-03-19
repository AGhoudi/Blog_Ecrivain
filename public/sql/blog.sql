-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 19 mars 2018 à 16:23
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
  `report_comment` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`, `report_comment`) VALUES
(1, 1, 'Tom', 'Tom', '2018-03-19 17:22:12', 0),
(5, 2, 'jimmy', 'Merci de te présenter', '2018-01-17 12:20:21', 0),
(6, 2, 'francis', 'Oui au mon on sait a qui on a affaire.', '2018-01-17 12:20:51', 0),
(7, 2, 'Emilie', 'Moi en tout cas, j\'aime pas les blogs,\r\nc\'est trop has been, limite année 90.', '2018-01-17 12:21:41', 0),
(8, 4, 'thomas', 'Lol, même pas capable d\'écrire une ligne, mdr', '2018-01-17 12:22:25', 0),
(9, 4, 'Martin', 'Au fait? il parle de quoi ton roman?', '2018-01-17 12:22:55', 0),
(10, 4, 'Bill', 'Très joli blog', '2018-03-13 14:08:27', 0),
(11, 7, 'billy', 'ok', '2018-02-09 18:17:20', 0),
(12, 7, 'bill', 'ok', '2018-02-10 11:44:57', 0),
(14, 5, 'bill', 'cosby', '2018-02-11 17:32:02', 0),
(18, 2, 'tim', 'tim', '2018-02-18 15:48:36', 0),
(23, 6, 'test', 'test', '2018-03-07 15:12:55', 0),
(24, 6, 'hello', 'hello', '2018-03-07 18:41:41', 0),
(31, 1, 'bill', 'bill', '2018-03-19 16:27:27', 0);

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `members`
--

/*INSERT INTO `members` (`id`, `username`, `password`) VALUES*/


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
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Chapitre 1', 'Je me présente, je suis Jean Forteroche, acteur, chanteur, danseur, cinéaste, écrivain, et plongeur professionnel; je suis le meilleur, même si j\'ai pas écrit la moindre ligne de mon premier roman.', '2018-01-09 15:04:00'),
(3, 'Chapitre 3', 'J\'étais assis... ah... non en fait j\'ai rien dis, arghhh... le début ne va pas, bon ben tant pis, je commencerais mon roman une autre fois alors.', '2018-01-09 15:08:00'),
(4, 'Chapitre 4', 'Je teste le blog une fois', '2018-02-07 19:30:03'),
(5, 'Chapitre 5', 'Toto était un enfant très malin, qui adorait faire des blagues à ses amis', '2018-02-07 19:31:57'),
(6, 'Chapitre 1', 'un test', '2018-03-06 19:58:11'),
(24, 'Chapitre 6', 'chapitre 6', '2018-03-07 10:58:11'),
(26, 'test', 'test', '2018-03-19 17:21:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
