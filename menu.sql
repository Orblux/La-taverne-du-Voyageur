-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 23 Octobre 2015 à 17:49
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
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titre` (`titre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `type`, `titre`, `description`, `prix`) VALUES
(19, 'salades', 'Salade Italienne', 'Salade verte, jambon cru, coppa, mozzarelle, tomate', '9.50'),
(20, 'salades', 'Salade Océane', 'Salade verte, fruits de mer marinés, filet de rouget poché', '9.50'),
(21, 'salades', 'Salade Auvergnate', 'Salade verte, toast de fourme chaude, lardons rôtis', '9.50'),
(22, 'salades', 'Salade de Foie de Volailles', 'Salade verte, foie de volaille rôtis, tomates, œuf poêlé', '9.50'),
(23, 'ravioles', 'Au Foie Gras', '', '11.90 & XL 14.90'),
(24, 'ravioles', 'Au Fruits de Mer', '', '11.90 & XL 14.90'),
(25, 'ravioles', 'Au Poivre Vert', '', '11.90 & XL 14.90'),
(26, 'ravioles', 'Aux Morilles', '', '11.90 & XL 14.90'),
(27, 'viandes', 'Sauté de canard du Chef', '', '12.50'),
(28, 'viandes', 'Pièce du boucher', 'Bavette, entrecôte,...', '13.80'),
(29, 'viandes', 'Filet Mignon sauce morilles', '', '12.50'),
(30, 'viandes', 'Gâteau de foie maison sauce écrevisses', '', '12.50'),
(31, 'poissons', 'Le gratin de poisson aux ravioles', '', '11.90'),
(32, 'poissons', 'La cocotte du pécheur', 'Différents poissons selon arrivage', '11.90'),
(33, 'poissons', 'Les cuisses de grenouille', '', '13.90'),
(34, 'fromages', 'Assiette de fromage', '', '3.90'),
(35, 'fromages', 'Fromage blanc Faisselle', ' ', '2.90'),
(36, 'douceurs', 'Vacherin', 'Glace-meringuée', '5.50'),
(37, 'douceurs', 'Crème brulée', '', '5.50'),
(38, 'douceurs', 'Mousse au chocolat', '', '4.50'),
(39, 'douceurs', 'Ile flottante', '', '4.50'),
(40, 'burgers', 'Le classic :', 'Bun’s, steak haché 180g, salade verte, tomate, oignon frites, cheddar, frites', '11.50'),
(41, 'burgers', 'L''Auvergnat :', 'Bun’s, steak haché 180 gr, salade verte, tomate, fourme, frites', '11.50'),
(42, 'burgers', 'L''Italien :', 'Bun’s, steack haché 180 gr, salade verte, jambon cru, pesto, frites', '12.50'),
(43, 'menus', 'Menu du jour :', 'Entrée du jour & Plat du jour<br>Fromage<br>Dessert<br><small>Quart de vin & Café</small>', '12.90'),
(44, 'menus', 'Menu Rapée :', 'Charcuterie & Rapée<br>Fromage OU Dessert', '13.90'),
(45, 'menus', 'Menu du Week-end :', 'Entrée<br>Plat du week-end<br>Fromage OU Dessert<br><small>Verre de vin OU Café', '15.50'),
(46, 'menus', 'Menu Grenouilles :', 'Assiette de charcuterie<br>Cuisse de grenouilles - Rapée<br>Fromage OU Dessert', '18.90'),
(47, 'menus', 'Menu Taverne :', 'Entrée à la carte<br>Plat à la carte<br>Fromage blanc ou sec<br>Dessert', '26.50'),
(48, 'menus', 'Menu Petit Voyageur :', 'Steak ou Nuggets<br>Frites ou Légumes<br>Dessert<br><small>Petit sirop</small><br><strong>Réservé au - de 12 ans</strong>', '7.90');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
