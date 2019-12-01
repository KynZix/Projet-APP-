-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 01 déc. 2019 à 18:56
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
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `reponse` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=244 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id`, `question`, `reponse`) VALUES
(1, 'Comment utiliser l\'appareil ?', 'Réponse 1'),
(2, 'Question 2', 'Réponse 2'),
(3, 'Comment créer un compte ?', 'Il est actuellement impossible de manuellement créer son propre compte. Pour en avoir un, il faut se rendre dans l\'un des centres Psitech. Un gestionnaire se chargera de créer un compte en fonction des données que lui vous fournissez, et le mot de passe vous sera envoyé par mail.'),
(4, 'Question 4', 'Réponse 4'),
(5, 'Question 5', 'Réponse 5'),
(6, 'Question 6', 'Réponse 6'),
(7, 'Question 7', 'Réponse 7'),
(8, 'Question 8', 'Réponse 8'),
(9, 'Question 9', 'Réponse 9'),
(10, 'Question 10', 'Réponse 10'),
(11, 'Question 11', 'Réponse 11'),
(12, 'Question 12', 'Réponse 12'),
(13, 'Question 13', 'Réponse 13'),
(14, 'Question 14', 'Réponse 14'),
(15, 'Question 15', 'Réponse 15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
