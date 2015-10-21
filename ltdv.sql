-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 21 Octobre 2015 à 02:08
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `ltdv`
--

CREATE TABLE IF NOT EXISTS `ltdv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `droits` int(11) NOT NULL,
  `tentative` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `identifiant` (`identifiant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `ltdv`
--

INSERT INTO `ltdv` (`id`, `identifiant`, `password`, `droits`, `tentative`) VALUES
(1, '67bb98796d44cd1a09b782ca5de6012a885c2200', '$2y$10$3UFyOmiGiQM4tXfWMi0e4Om75vZa006VJeCCnTcybVkCtf1PKLwXW', 0, 0),
(4, 'adc3d2ea9c195a58130be146d197d120c05d345b', '$2y$10$i4HJR/V98lHNbT0XP7x9deAkj6/DG9QxBri7VXVel/lZYVIjs8//y', 0, 0),
(6, '95d2e9be01a097c4401b5c112a4bb67a9802ff20', '$2y$10$/biXyfX/4TLpD9WsXbkQeO4NlTjTUQ9TPSkzZACBWhHD8gVbfTiUK', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
