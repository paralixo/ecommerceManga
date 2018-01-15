-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 15 jan. 2018 à 13:59
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `easymanga`
--
CREATE DATABASE IF NOT EXISTS `easymanga` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE easymanga;

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `id_auteur` int(11) NOT NULL AUTO_INCREMENT,
  `firstname_auteur` varchar(144) NOT NULL,
  `lastname_auteur` varchar(144) NOT NULL,
  PRIMARY KEY (`id_auteur`),
  UNIQUE KEY `id_auteur` (`id_auteur`)
) ;

-- --------------------------------------------------------

--
-- Structure de la table `civilite`
--

DROP TABLE IF EXISTS `civilite`;
CREATE TABLE IF NOT EXISTS `civilite` (
  `id_civilite` int(1) NOT NULL,
  `civilite` varchar(5) NOT NULL,
  PRIMARY KEY (`id_civilite`),
  UNIQUE KEY `id_civilite` (`id_civilite`)
) ;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `prix_commande` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`),
  UNIQUE KEY `id_commande` (`id_commande`),
  KEY `id_user` (`id_user`)
) ;

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

DROP TABLE IF EXISTS `editeur`;
CREATE TABLE IF NOT EXISTS `editeur` (
  `id_editeur` int(11) NOT NULL AUTO_INCREMENT,
  `editeur` varchar(144) NOT NULL,
  PRIMARY KEY (`id_editeur`),
  UNIQUE KEY `id_editeur` (`id_editeur`)
) ;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `src_image` varchar(250) NOT NULL,
  PRIMARY KEY (`id_image`),
  UNIQUE KEY `id_image` (`id_image`)
) ;

-- --------------------------------------------------------

--
-- Structure de la table `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `id_manga` int(11) NOT NULL AUTO_INCREMENT,
  `name_manga` varchar(200) NOT NULL,
  `prix_manga` varchar(5) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `id_editeur` int(11) NOT NULL,
  `id_image` int(11) NOT NULL,
  `id_tome` int(11) NOT NULL,
  PRIMARY KEY (`id_manga`),
  UNIQUE KEY `id_manga` (`id_manga`),
  KEY `id_auteur` (`id_auteur`),
  KEY `id_editeur` (`id_editeur`,`id_image`,`id_tome`),
  KEY `id_image` (`id_image`),
  KEY `id_tome` (`id_tome`)
) ;

-- --------------------------------------------------------

--
-- Structure de la table `tome`
--

DROP TABLE IF EXISTS `tome`;
CREATE TABLE IF NOT EXISTS `tome` (
  `id_tome` int(11) NOT NULL AUTO_INCREMENT,
  `title_tome` varchar(144) NOT NULL,
  `num_tome` int(3) NOT NULL,
  `date_tome` date NOT NULL,
  PRIMARY KEY (`id_tome`),
  UNIQUE KEY `id_tome` (`id_tome`)
) ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login_user` varchar(144) NOT NULL,
  `mdp_user` varchar(144) NOT NULL,
  `email_user` varchar(144) NOT NULL,
  `firstname_user` varchar(144) NOT NULL,
  `lastname_user` varchar(144) NOT NULL,
  `tel_user` int(10) NOT NULL,
  `cp_user` varchar(5) NOT NULL,
  `ville_user` varchar(144) NOT NULL,
  `adresse_user` varchar(240) NOT NULL,
  `id_civilite` int(1) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`),
  KEY `id_civilite` (`id_civilite`)
) ;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `civilite`
--
ALTER TABLE `civilite`
  ADD CONSTRAINT `civilite_ibfk_1` FOREIGN KEY (`id_civilite`) REFERENCES `civilite` (`id_civilite`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `manga`
--
ALTER TABLE `manga`
  ADD CONSTRAINT `manga_ibfk_1` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`),
  ADD CONSTRAINT `manga_ibfk_2` FOREIGN KEY (`id_editeur`) REFERENCES `editeur` (`id_editeur`),
  ADD CONSTRAINT `manga_ibfk_3` FOREIGN KEY (`id_image`) REFERENCES `image` (`id_image`),
  ADD CONSTRAINT `manga_ibfk_4` FOREIGN KEY (`id_tome`) REFERENCES `tome` (`id_tome`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_civilite`) REFERENCES `civilite` (`id_civilite`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
