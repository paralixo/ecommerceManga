-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 05 mars 2018 à 13:16
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `firstname_auteur`, `lastname_auteur`) VALUES
(1, 'Kentaro', 'Miura'),
(2, 'Tite', 'Kubo'),
(3, 'Akira', 'Toriyama'),
(4, 'Hiromu', 'Arakawa'),
(5, 'Tôru', 'Fujisawa'),
(6, 'Yoshihiro', 'Togashi'),
(7, 'Hiroya', 'Oku'),
(8, 'Hirohiko', 'Araki'),
(9, 'Kōhei', 'Horikoshi'),
(10, 'Masashi', 'Kishimoto'),
(11, 'One', ''),
(12, 'Eiichirō', 'Oda'),
(13, 'Takeshi', 'Konomi');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `civilite`
--

INSERT INTO `civilite` (`id_civilite`, `civilite`) VALUES
(1, 'M.'),
(2, 'Mme');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`id_editeur`, `editeur`) VALUES
(1, 'Glénat'),
(2, 'Kurokawa'),
(3, 'Pika Edition'),
(4, 'Kana'),
(5, 'Ki-oon'),
(6, 'Tonkam'),
(7, 'Kurokawa');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `src_image`) VALUES
(1, '../images/manga/berserk.jpg'),
(2, '../images/manga/bleach.jpg'),
(3, '../images/manga/db.jpg'),
(4, '../images/manga/fullmetal.jpg'),
(5, '../images/manga/gto.jpg'),
(6, '../images/manga/hxh.jpg'),
(7, '../images/manga/inuyashiki.jpg'),
(8, '../images/manga/jojo.jpg'),
(9, '../images/manga/mha.jpg'),
(10, '../images/manga/naruto.jpg'),
(11, '../images/manga/one-punch.jpg'),
(12, '../images/manga/op.jpg'),
(13, '../images/manga/princetennis.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='table de recensement des mangas.';

--
-- Déchargement des données de la table `manga`
--

INSERT INTO `manga` (`id_manga`, `name_manga`, `prix_manga`, `id_auteur`, `id_editeur`, `id_image`, `id_tome`) VALUES
(1, 'Berserk', '6.50', 1, 1, 1, 1),
(2, 'bleach', '6.5', 2, 1, 2, 1),
(3, 'Dragon Ball', '6.5', 3, 1, 3, 1),
(4, 'Fullmetal Alchemist', '6.5', 4, 2, 4, 1),
(5, 'Great Teacher Onizuka', '6.5', 5, 3, 5, 1),
(6, 'Hunter x Hunter', '6.5', 6, 4, 6, 1),
(7, 'Inuyashiki', '6.5', 7, 5, 7, 1),
(8, 'JoJo\'s Bizarre Adventure', '6.5', 8, 6, 8, 1),
(9, 'My Hero Academia', '6.5', 9, 5, 9, 1),
(10, 'Naruto', '6.5', 10, 4, 10, 1),
(11, 'One Punch Man', '6.5', 11, 7, 11, 1),
(12, 'One piece', '6.5', 12, 1, 12, 1),
(13, 'Prince du Tennis', '6.5', 13, 4, 13, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tome`
--

INSERT INTO `tome` (`id_tome`, `title_tome`, `num_tome`, `date_tome`) VALUES
(1, '0', 0, '0000-01-01');

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
  `tel_user` int(10) DEFAULT NULL,
  `cp_user` varchar(5) DEFAULT NULL,
  `ville_user` varchar(144) DEFAULT NULL,
  `adresse_user` varchar(240) DEFAULT NULL,
  `id_civilite` int(1) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`),
  KEY `id_civilite` (`id_civilite`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='table utilisateur';

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login_user`, `mdp_user`, `email_user`, `firstname_user`, `lastname_user`, `tel_user`, `cp_user`, `ville_user`, `adresse_user`, `id_civilite`) VALUES
(4, 'lukihd', 'siam33140', 'lucas.eri@outlook.com', 'lucas', 'erisset', NULL, NULL, NULL, NULL, 1),
(5, 'flouflou', 'floufloudu33', 'flouflou@yahoo.fr', 'florian', 'lafuente', NULL, NULL, NULL, NULL, 2),
(6, 'edfrtghjk;l:m', '', '', 'zdfrgthyuk', 'defrgthyjui', NULL, NULL, NULL, NULL, 2),
(7, 'edfrtghjk;l:m', '', '', 'zdfrgthyuk', 'defrgthyjui', NULL, NULL, NULL, NULL, 2),
(8, 'dcvfbgnh,j', '', '', 'vdfbgh,jv', 'efrgthby', NULL, NULL, NULL, NULL, 2);

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
