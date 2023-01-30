-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 30 jan. 2023 à 23:28
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_iot_1`
--

-- --------------------------------------------------------

--
-- Structure de la table `luminosite`
--

CREATE TABLE `luminosite` (
  `horodatage` timestamp NOT NULL DEFAULT current_timestamp(),
  `valeur` int(11) NOT NULL,
  `nom_piece` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `luminosite`
--

INSERT INTO `luminosite` (`horodatage`, `valeur`, `nom_piece`) VALUES
('2023-01-23 16:03:35', 44, 'chambre'),
('2023-01-19 22:27:24', 33, 'chambre'),
('2023-01-11 22:27:24', 19, 'chambre'),
('2023-01-24 22:27:51', 32, 'chambre');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `luminosite`
--
ALTER TABLE `luminosite`
  ADD PRIMARY KEY (`horodatage`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
