-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 18 oct. 2022 à 14:56
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
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `comments` text NOT NULL,
  `date_submission` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `pseudo`, `mail`, `comments`, `date_submission`) VALUES
(1, 'truc', 'truc@gmail.com', 'truc', '2022-10-18 16:40:11'),
(2, 'Anonyme', '', 'bonjour', '2022-10-18 16:43:13');

-- --------------------------------------------------------

--
-- Structure de la table `moderators`
--

DROP TABLE IF EXISTS `moderators`;
CREATE TABLE IF NOT EXISTS `moderators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` int(15) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `moderators`
--

INSERT INTO `moderators` (`id`, `pseudo`, `last_name`, `first_name`, `age`, `phone`, `mail`, `pass`) VALUES
(2, 'bonjour', 'bonjour', 'bonjour', 2, 25060, 'bonjour@gmail.com', 'bonjour'),
(3, 'eautarie', 'truc', 'tric', 55, 55, 'eautarie@gmail.com', '$2y$10$RYAqj7E3XmF.ZXZ3d9duvOyHGCjFWk1wMoPVf./hhkgzidctB.2em'),
(4, 'eaulympique', 'eau', 'lympique', 55, 55, 'eaulympique@gmail.com', 'd778bcbfdc5b7f10074bd8dba678d53c');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `comments`) VALUES
(1, 'Zelda ocarina of time', 40.3, ''),
(2, 'Wario Ware', 30, ''),
(5, 'bonjour', 333, 'bonjour'),
(6, 'truc', 555, 'truc'),
(7, 'truc', 555, 'truc\r\n'),
(8, 'truc', 555, 'truc\r\n'),
(9, 'truc', 555, 'truc'),
(10, 'truc', 666, 'truc');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `date_inscription`) VALUES
(1, 'truc', 'truc@gmail.com', 'fe6b57e537d2ff888ead8bc8484965b34838088143d9d7f12c82c964104be641', '2022-10-04 08:39:18'),
(2, 'bonjour', 'bonjour@gmail.com', '2cb4b1431b84ec15d35ed83bb927e27e8967d75f4bcd9cc4b25c8d879ae23e18', '2022-10-04 08:45:14'),
(3, 'eautarie', 'eautarie@gmail.com', '21909ab38f21039896ad9fa3f239c44ad8d68fed59a4f878cf15fc3fc0385108', '2022-10-11 16:40:11');

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
  `departement` varchar(5) NOT NULL,
  `adress_postal` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeurs`
--

INSERT INTO `vendeurs` (`id`, `first_name`, `last_name`, `pass`, `tel_number`, `email`, `departement`, `adress_postal`, `country`) VALUES
(2, 'bonjour', 'bonjour', '565b982218054a553d47b16e6e1a12fc117d4c7d54ff7fb78e63bf06057b6634', '555', 'bonjour@gmail.com', 'a', 'a', 'a'),
(3, 'eau', 'tarie', '21909ab38f21039896ad9fa3f239c44ad8d68fed59a4f878cf15fc3fc0385108', '555', 'eautarie@gmail.com', 'eau', 'eau', 'eau');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
