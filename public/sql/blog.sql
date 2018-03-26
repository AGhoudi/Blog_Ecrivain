-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Host: localhost:3306
-- Generation Time: Mar 26, 2018 at 03:31 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5
=======
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 19 mars 2018 à 16:23
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31
>>>>>>> 42328a76a4b3c36519466b0995c5a721101ad921

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
<<<<<<< HEAD
  `report_comment` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
=======
  `report_comment` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
>>>>>>> 42328a76a4b3c36519466b0995c5a721101ad921

--
-- Dumping data for table `comments`
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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
<<<<<<< HEAD
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
=======
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `members`
--

/*INSERT INTO `members` (`id`, `username`, `password`) VALUES*/

>>>>>>> 42328a76a4b3c36519466b0995c5a721101ad921

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`) VALUES
(1, 'Jean_Forteroche', '$2y$10$.Q9c2I5Q3YByW3/YNYjkLOFrxT2zXA2S0kLkMQTIyF/zMNpJ7VjTe');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
<<<<<<< HEAD
  `creation_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
=======
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
>>>>>>> 42328a76a4b3c36519466b0995c5a721101ad921

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Chapitre 1', 'Je me présente, je suis Jean Forteroche, acteur, chanteur, danseur, cinéaste, écrivain, et plongeur professionnel; je suis le meilleur, même si j\'ai pas écrit la moindre ligne de mon premier roman.', '2018-01-09 15:04:00'),
(3, 'Chapitre 3', 'J\'étais assis... ah... non en fait j\'ai rien dis, arghhh... le début ne va pas, bon ben tant pis, je commencerais mon roman une autre fois alors.', '2018-01-09 15:08:00'),
(4, 'Chapitre 4', 'Je teste le blog une fois', '2018-02-07 19:30:03'),
(5, 'Chapitre 5', 'Toto était un enfant très malin, qui adorait faire des blagues à ses amis', '2018-02-07 19:31:57'),
(6, 'Chapitre 1', 'un test', '2018-03-06 19:58:11'),
(24, 'Chapitre 6', 'chapitre 6', '2018-03-07 10:58:11'),
<<<<<<< HEAD
(26, 'test', 'test', '2018-03-19 17:21:42'),
(27, 'Test du post', '<p style=\"text-align: center;\"><em><strong>J\'aime trop ton blog.</strong></em></p>\r\n<p style=\"text-align: center;\"><em><strong>Bravo</strong></em></p>', '2018-03-21 16:10:52'),
(28, 'Le chapitre', '<p style=\"text-align: center;\"><em><strong>Super Blog</strong></em></p>', '2018-03-22 15:28:48'),
(32, 'Le test', '<p style=\"text-align: center;\"><em><strong>Ceci est un test</strong></em></p>\r\n<p style=\"text-align: center;\"><em><strong>un test je vous dis</strong></em></p>\r\n<p style=\"text-align: center;\"><em><strong>un vrai test.</strong></em></p>', '2018-03-22 15:54:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;
=======
(26, 'test', 'test', '2018-03-19 17:21:42');
COMMIT;
>>>>>>> 42328a76a4b3c36519466b0995c5a721101ad921

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
