-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 12 juin 2023 à 15:05
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `players`
--

-- --------------------------------------------------------

--
-- Structure de la table `selection`
--

DROP TABLE IF EXISTS `selection`;
CREATE TABLE IF NOT EXISTS `selection` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `poste` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `age` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `selection`
--

INSERT INTO `selection` (`id`, `name`, `poste`, `age`) VALUES
(1, 'Alphonse Areola', 'Gardien', 30),
(2, 'Mike Maignan', 'Gardien', 23),
(3, 'Brice Samba', 'Gardien', 12),
(4, 'Axel Disasi', 'Défenseur', 22),
(5, 'Wesley Fofana', 'Défenseur', 34),
(6, 'Théo Hernandez', 'Défenseur', 33),
(7, 'Ibrahima Konaté', 'Défenseur', 22),
(8, 'Jules Koundé', 'Défenseur', 22),
(9, 'Benjamin Pavard', 'Défenseur', 22),
(10, 'Dayot Upamecano', 'Défenseur', 33),
(11, 'Eduardo Camavinga', 'Milieu', 33),
(12, 'Youssouf Fofana', 'Milieu', 33),
(13, 'Antoine Griezmann', 'Milieu', 33),
(14, 'Boubacar Kamara', 'Milieu', 33),
(15, 'Aurelien Tchouaméni', 'Milieu', 22),
(16, 'Jordan Veretout', 'Milieu', 32),
(18, 'Adam', 'Milieu', 21);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `password`) VALUES
(1, 'ddechamps', '$2y$10$PGtc5MhHxSmPubmI4c7rb.B2psfBKs72mxifTyg0kuAaBdos/IEla');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
