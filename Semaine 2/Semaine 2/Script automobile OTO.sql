-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 25 fév. 2021 à 12:38
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `automobile oto`
--

-- --------------------------------------------------------

--
-- Structure de la table `accesoire`
--

DROP TABLE IF EXISTS `accesoire`;
CREATE TABLE IF NOT EXISTS `accesoire` (
  `acces_id` int(20) NOT NULL,
  `acces_nom` varchar(50) NOT NULL,
  `acces_prix` int(20) NOT NULL,
  `acces_descritpion` varchar(200) NOT NULL,
  PRIMARY KEY (`acces_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `cli_id` int(20) NOT NULL,
  `cli_nom` varchar(20) NOT NULL,
  `cli_prenom` varchar(20) NOT NULL,
  `cli_adresse` varchar(100) NOT NULL,
  `cli_d_naissance` date NOT NULL,
  `cli_tel` int(30) NOT NULL,
  `cli_mail` varchar(50) NOT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `com_id` int(10) NOT NULL AUTO_INCREMENT,
  `com_d_achat` date NOT NULL,
  `com_paie` varchar(10) NOT NULL,
  `com_cli_id` int(10) NOT NULL,
  `com_sal_id` int(10) NOT NULL,
  PRIMARY KEY (`com_id`),
  KEY `com_cli_id` (`com_cli_id`) USING BTREE,
  KEY `com_sal_id` (`com_sal_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

DROP TABLE IF EXISTS `salarie`;
CREATE TABLE IF NOT EXISTS `salarie` (
  `sal_id` int(20) NOT NULL,
  `sal_nom` varchar(50) NOT NULL,
  `sal_prenom` varchar(50) NOT NULL,
  `sal_phone` int(20) NOT NULL,
  `sal_date_naissance` date NOT NULL,
  `sal_mail` varchar(100) NOT NULL,
  `sal_poste` varchar(50) NOT NULL,
  `sal_adresse` varchar(50) NOT NULL,
  PRIMARY KEY (`sal_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `serv_id` int(20) NOT NULL,
  `serv_prix` int(100) NOT NULL,
  `serv_nom` varchar(50) NOT NULL,
  `serv_description` varchar(50) NOT NULL,
  PRIMARY KEY (`serv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `véhicule`
--

DROP TABLE IF EXISTS `véhicule`;
CREATE TABLE IF NOT EXISTS `véhicule` (
  `véhi_id` int(20) NOT NULL,
  `véhi_couleur` varchar(30) NOT NULL,
  `véhi_prix` int(20) NOT NULL,
  `véhi_marque` varchar(20) NOT NULL,
  `véhi_état` varchar(20) NOT NULL,
  `véhi_age` date NOT NULL,
  `véhi_références` int(20) NOT NULL,
  PRIMARY KEY (`véhi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;