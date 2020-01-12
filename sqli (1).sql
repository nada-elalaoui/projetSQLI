-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 sep. 2019 à 21:53
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sqli`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `Email` varchar(30) NOT NULL,
  `MDP` varchar(8) NOT NULL,
  `ID_Admin` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_Admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `ID_INF` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `TyprM` varchar(100) NOT NULL,
  `Marque` varchar(100) NOT NULL,
  `Modele` varchar(100) NOT NULL,
  `NS` varchar(100) NOT NULL,
  `IDINV` int(11) NOT NULL,
  `Datel` date NOT NULL,
  `Datef` date NOT NULL,
  `Datea` date NOT NULL,
  `CPU` varchar(100) NOT NULL,
  `RAM` varchar(100) NOT NULL,
  `TypeHHD` varchar(100) NOT NULL,
  `Capacite` varchar(100) NOT NULL,
  `Taille` varchar(100) NOT NULL,
  `NSE` varchar(100) NOT NULL,
  `Souris` varchar(100) NOT NULL,
  `Clavier` varchar(100) NOT NULL,
  `Adaptateurs` varchar(100) NOT NULL,
  `Casque` varchar(100) NOT NULL,
  `NSC` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_INF`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `information`
--

INSERT INTO `information` (`ID_INF`, `Nom`, `Prenom`, `TyprM`, `Marque`, `Modele`, `NS`, `IDINV`, `Datel`, `Datef`, `Datea`, `CPU`, `RAM`, `TypeHHD`, `Capacite`, `Taille`, `NSE`, `Souris`, `Clavier`, `Adaptateurs`, `Casque`, `NSC`) VALUES
(1, 'Moussaoui', 'Nisrine', 'Fixe', 'DELL', ' XPS 8900 / Latitude E7470', 'XXXXNN', 220534, '2018-01-01', '2020-01-01', '2019-01-01', '3,0 Ghz', '16 Go', 'SSD M2', '1To', '24 \"', 'KDHFU8766DE73EN', 'DELL', 'DELL', 'Display port To VGA', 'Microsoft', '9876GHSU'),
(2, 'test', 'test', 'test', 'test', 'test', '9', 1, '2019-09-06', '2019-09-06', '2019-09-04', 'I', 'I', 'TEST', 'TEST', '1', 'D', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST'),
(3, 'test', 'test', 'test', 'test', 'test', '9', 1, '2019-09-06', '2019-09-06', '2019-09-04', 'I', 'I', 'TEST', 'TEST', '1', 'D', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
