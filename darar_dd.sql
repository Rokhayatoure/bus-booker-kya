-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 juil. 2023 à 00:44
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `darar_dd`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `num` varchar(25) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `sexe` enum('M','F') NOT NULL,
  `adresse` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `num`, `mail`, `sexe`, `adresse`) VALUES
(2, 'Est', 'Eum', '+1 (699) 394-3812', 'xywum@mailinator.com', 'F', 'Magnam expedita opti'),
(3, 'Dolori', 'Rerum', '+1 (366) 661-5974', 'rihewi@mailinator.com', 'M', 'Quis qui repellendus'),
(4, 'Laborum', 'Cupiditate', '+1 (729) 228-8157', 'nalen@mailinator.com', 'M', 'Consequuntur similiq');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `objet` varchar(100) NOT NULL,
  `destinataire` varchar(100) NOT NULL,
  `contenu` varchar(100) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `date` datetime(6) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_client` int(10) NOT NULL,
  `type` enum('Plein','Demi','Une_zone') NOT NULL,
  `time` time DEFAULT NULL,
  `depart` varchar(255) NOT NULL,
  `nbre` int(11) DEFAULT NULL,
  `statut` enum('EN ATTENTE','ACCEPTED','REJECTED','') NOT NULL DEFAULT 'EN ATTENTE',
  PRIMARY KEY (`id`),
  KEY `FK_ReservationClient` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`date`, `destination`, `id`, `id_client`, `type`, `time`, `depart`, `nbre`, `statut`) VALUES
('1971-05-28 00:00:00.000000', '1', 1, 2, 'Une_zone', '09:34:00', '2', 57, 'ACCEPTED'),
('1991-06-08 00:00:00.000000', '1', 2, 3, 'Plein', '09:33:00', '2', 46, 'EN ATTENTE'),
('1975-06-10 00:00:00.000000', '2', 3, 4, 'Une_zone', '08:26:00', '2', 35, 'REJECTED');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mail`, `password`, `role`) VALUES
(1, 'Toure', 'Rokhaya', 'kya@gmail.com', 'azerty', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `FK_ReservationClient` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
