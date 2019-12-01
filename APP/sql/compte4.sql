-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 01 déc. 2019 à 13:43
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
-- Base de données :  `app`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte4`
--

DROP TABLE IF EXISTS `compte4`;
CREATE TABLE IF NOT EXISTS `compte4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` text NOT NULL,
  `dateNaissance` date NOT NULL,
  `numeroTelephone` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `pays` text NOT NULL,
  `ville` text NOT NULL,
  `codePostal` int(11) NOT NULL,
  `adresse` text NOT NULL,
  `complementAdresse` text NOT NULL,
  `typeUtilisateur` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte4`
--

INSERT INTO `compte4` (`id`, `mail`, `dateNaissance`, `numeroTelephone`, `nom`, `prenom`, `sexe`, `pays`, `ville`, `codePostal`, `adresse`, `complementAdresse`, `typeUtilisateur`) VALUES
(25, 'cyne@gmail', '2019-12-01', 1023456789, 'NERIN', 'Cyril', 'homme', 'France', 'ISSY', 92130, '4 Bis rue CHENIER', 'NR', 'administrateur'),
(24, 'cyne@gmail', '2019-12-01', 1023456789, 'NERIN', 'Cyril', 'homme', 'France', 'ISSY', 92130, '4 Bis rue CHENIER', '', 'administrateur'),
(23, 'cyne@gmail', '2019-12-01', 1023456789, 'NERIN', 'Cyril', 'homme', 'France', 'ISSY', 92130, '4 Bis rue CHENIER', '', 'administrateur'),
(22, 'cyne@gmail', '2019-12-01', 1023456789, 'NERIN', 'Cyril', 'homme', 'France', 'ISSY', 92130, '4 Bis rue CHENIER', '', 'administrateur'),
(21, 'cyne@gmail', '2019-12-01', 1023456789, 'NERIN', 'Cyril', 'homme', 'France', 'ISSY', 92130, '4 Bis rue CHENIER', '', 'administrateur'),
(20, 'cyne@gmail', '2019-12-01', 1023456789, 'NERIN', 'Cyril', 'homme', 'France', 'ISSY', 92130, '4 Bis rue CHENIER', 'NR', 'administrateur'),
(19, 'cyne@gmail', '2019-12-01', 1023456789, 'NERIN', 'Cyril', 'homme', 'France', 'ISSY', 92130, '4 Bis rue CHENIER', 'NR', 'administrateur'),
(18, 'cyne@gmail', '1900-01-01', 1023456789, 'NERIN', 'Cyril', 'homme', 'France', 'ISSY', 92130, '4 Bis rue CHENIER', 'NR', 'administrateur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
