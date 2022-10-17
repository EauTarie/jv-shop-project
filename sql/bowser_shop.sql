-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 17 oct. 2022 à 10:26
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bowser_shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `moderators`
--

DROP TABLE IF EXISTS `moderators`;
CREATE TABLE IF NOT EXISTS `moderators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `moderators`
--

INSERT INTO `moderators` (`id`, `pseudo`, `mail`, `pass`) VALUES
(1, 'eautarie', 'eautarie@gmail.com', 'eaulympique');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Zelda Ocarina of time', 255.5),
(2, 'Wario Ware', 230.3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`) VALUES
(1, 'eau secours', 'eausecours@gmail.com', '73b0a0e3557f1e73dd2b781d3eaebc694ca4345d102b329938a4a5a07cd5b80a'),
(3, 'Eau Tarie', 'eautarie@gmail.com', '21909ab38f21039896ad9fa3f239c44ad8d68fed59a4f878cf15fc3fc0385108'),
(4, 'eautrie', 'jgihfu@gmail.com', '21909ab38f21039896ad9fa3f239c44ad8d68fed59a4f878cf15fc3fc0385108'),
(5, 'bonjour', 'bonjour@gmail.com', '2cb4b1431b84ec15d35ed83bb927e27e8967d75f4bcd9cc4b25c8d879ae23e18');

-- --------------------------------------------------------

--
-- Structure de la table `vendeurs`
--

DROP TABLE IF EXISTS `vendeurs`;
CREATE TABLE IF NOT EXISTS `vendeurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `tel_number` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `adress_postal` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeurs`
--

INSERT INTO `vendeurs` (`id`, `first_name`, `last_name`, `pass`, `tel_number`, `email`, `departement`, `adress_postal`, `country`) VALUES
(1, 'truc', 'truc', 'fe6b57e537d2ff888ead8bc8484965b34838088143d9d7f12c82c964104be641', 'truc', 'truc@gmail.com', 'truc', 'truc', 'truc'),
(2, 'eau', 'tarie', '21909ab38f21039896ad9fa3f239c44ad8d68fed59a4f878cf15fc3fc0385108', '5555', 'eautarie@gmail.com', 'truc', 'truc', 'truc'),
(3, 'gilbert', 'martin', 'fe6b57e537d2ff888ead8bc8484965b34838088143d9d7f12c82c964104be641', '555', 'gilbertmartin@gmail.com', 'truc', 'truc', 'truc'),
(4, 'zaza', 'zaza', '9a8b64bb1668aae447964e503998fe5e9686c4101556a33edd13d826aa0b69e3', '555', 'zaza@gmail.com', 'zaza', 'zaza', 'zaza'),
(5, 'bo', 'bo', '3d099d0f13df9d0bb4427a6ce99d61b988861761e286d6e34b17d6371b46b13f', '55', 'bo@gmail.com', 'bo', 'bo', 'bo'),
(6, 'jour', 'jour', 'b5977b836b445eafefdfebe5d6463785186ff90d78f03af3864190d729957cf2', '555', 'jour@gmail.com', 'jour', 'jour', 'jour');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
