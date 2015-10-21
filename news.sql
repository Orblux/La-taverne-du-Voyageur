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
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `auteur` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titre` (`titre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `date`, `auteur`, `titre`, `contenu`) VALUES
(1, '2015-10-19 01:52:07', 'adc3d2ea9c195a58130be146d197d120c05d345b', 'Automne 2015', 'Pour l''automne nous vous proposons de nouveaux plats inédits pour votre plus grand plaisir. Issu directement des producteurs locaux vous pourrez venir goûter ces mets cuisinés par notre cuisinier dans des recettes typiques.'),
(2, '2015-10-19 01:52:07', 'adc3d2ea9c195a58130be146d197d120c05d345b', 'Noël et le Nouvel An', 'Pour ces occasions nous vous proposons deux événements inédits, n''hésitez pas à suivre notre actualité pour en savoir plus dans les mois à venir.'),
(3, '2015-10-21 00:16:18', '67bb98796d44cd1a09b782ca5de6012a885c2200', 'Création du site internet !', 'Le grand moment est enfin arrivé ! Notre établissement de renom se dote maintenant d''un tout nouveau site ! Vous y retrouverez nos savoureux menus ainsi que maints informations utiles.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
