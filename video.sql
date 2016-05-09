-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 09 Mai 2016 à 14:44
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `hamsterhub`
--

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id`, `name`, `url`, `description`, `image`, `user_id`) VALUES
(1, 'Dark souls 3', 'https://www.youtube.com/embed/cCnM5U6tSuA', 'Petite vidéo sur Dark souls 3', 'https://d1r7xvmnymv7kg.cloudfront.net/sites_products/darksouls3/assets/img/DARKSOUL_facebook_mini.jpg', 1),
(2, 'Dark soulls 3 trailer', 'https://www.youtube.com/embed/WEb19-cjA4M', 'Trailer du magnifique Dark souls 3, have fun ;)', 'http://img.clubic.com/08409132-photo-clubic-mars-darksouls3-01.jpg', 1),
(3, 'DARK SOULS III Final Boss Epic Battle!', 'https://www.youtube.com/embed/MnFwU-guud8', 'I feel so great after finishing the souls series. I wouldnt have ended it in any other way. \r\n\r\nI like to think of that last lightning bolt as a kiss goodbye from the souls series ', 'http://www.config-gamer.fr/media/k2/galleries/4498/Dark%20Souls%20III.jpeg', 2),
(6, 'DARK SOULS III Final Boss Epic Battle!', 'https://www.youtube.com/embed/MnFwU-guud8', 'I feel so great after finishing the souls series. I wouldnt have ended it in any other way. \r\n\r\nI like to think of that last lightning bolt as a kiss goodbye from the souls series ', 'http://www.config-gamer.fr/media/k2/galleries/4498/Dark%20Souls%20III.jpeg', 1),
(7, 'EPIC BATTLE | Dragonslayer Armour Dark Souls 3 Boss', 'https://www.youtube.com/embed/9tIHTnyqSlA', 'Dragonslayer Armour Boss from Dark Souls 3 is pretty serious business. He''s got these crazy deformed dragons flying around shooting blasts at us. He using a huge shield, armor, and lightning. IM SO SCARED! EPIC BATTLE TIME!', 'https://i.kinja-img.com/gawker-media/image/upload/sz0ctbadayshmiid7ebo.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
