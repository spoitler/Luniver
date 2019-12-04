-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 16 sep. 2019 à 16:21
-- Version du serveur :  10.3.12-MariaDB
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `luniver`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(20) DEFAULT NULL,
  `prenom_client` varchar(20) DEFAULT NULL,
  `date_naissance` date NOT NULL,
  `email` text DEFAULT NULL,
  `sexe` varchar(5) NOT NULL DEFAULT 'homme',
  `adresse` text DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `code_postal` varchar(5) DEFAULT NULL,
  `password` text NOT NULL,
  `date_creation_compte` datetime NOT NULL DEFAULT current_timestamp(),
  `Admin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idClient`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom_client`, `prenom_client`, `date_naissance`, `email`, `sexe`, `adresse`, `telephone`, `ville`, `code_postal`, `password`, `date_creation_compte`, `Admin`) VALUES
(29, 'bonnes', 'romain', '2000-03-21', 'romain.bonnes@gmail.com', 'Homme', '89 avenue aglaé adanson', '0781634390', 'Montpellier', '34080', '9c2e5f76478168a0a68c06836233704c1951642f3f8d44ed3585c26fd60d18ea3ac7f2c33b64f304933b7c7aaf4883336c85d35ccc13468d64ebc2fcfe1ca9f3', '2019-04-09 11:59:21', 0),
(31, 'bonne', 'romain', '2000-03-21', 'GIDesigner04@gmail.com', 'Homme', '89 avenue aglaé adanson', '0781634390', 'Montpellier', '34080', 'c6001d5b2ac3df314204a8f9d7a00e1503c9aba0fd4538645de4bf4cc7e2555cfe9ff9d0236bf327ed3e907849a98df4d330c4bea551017d465b4c1d9b80bcb0', '2019-04-10 01:31:53', 0);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date_commande` datetime DEFAULT current_timestamp(),
  `etat_commande` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id_compte` int(11) NOT NULL AUTO_INCREMENT,
  `solde` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_compte`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `Nom` varchar(20) DEFAULT NULL,
  `adresse` varchar(20) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `code_postal` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_produit`
--

DROP TABLE IF EXISTS `ligne_produit`;
CREATE TABLE IF NOT EXISTS `ligne_produit` (
  `id_ligneP` int(11) NOT NULL AUTO_INCREMENT,
  `quantitee` int(11) DEFAULT NULL,
  `produit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ligneP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(20) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `description` varchar(110) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `quantite_stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `prix`, `description`, `image`, `quantite_stock`) VALUES
(1, 'TEE SHIRT NOIR', 50, '100% coton<br>\r\nmade in france', 'img/produit1.jpg', 10),
(2, 'TEE - SHIRT NOIR', 75, '100% coton<br>\r\ncoloris noir', 'img/produit2.jpg', 20),
(3, 'tee-shirt', 100, 'coton', 'img/produit3.jpg', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
