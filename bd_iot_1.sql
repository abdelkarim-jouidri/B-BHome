-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 31 jan. 2023 à 09:45
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
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `id_etat` int(11) NOT NULL,
  `etat_chauffage` tinyint(1) NOT NULL,
  `etat_vmc` int(11) NOT NULL,
  `etat_eclairage` tinyint(1) NOT NULL,
  `etat_volet` int(11) NOT NULL,
  `etat_absence` tinyint(1) NOT NULL,
  `nom_piece` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `etat`
--

INSERT INTO `etat` (`id_etat`, `etat_chauffage`, `etat_vmc`, `etat_eclairage`, `etat_volet`, `etat_absence`, `nom_piece`) VALUES
(1, 0, 64, 1, 100, 1, 'chambre');

-- --------------------------------------------------------

--
-- Structure de la table `humidite`
--

CREATE TABLE `humidite` (
  `horodatage` timestamp NOT NULL DEFAULT current_timestamp(),
  `valeur` int(11) NOT NULL,
  `nom_piece` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `humidite`
--

INSERT INTO `humidite` (`horodatage`, `valeur`, `nom_piece`) VALUES
('2023-01-11 15:59:05', 14, 'chambre');

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

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `nom_piece` varchar(20) NOT NULL,
  `t_consigne` float NOT NULL,
  `l_consigne` int(11) NOT NULL,
  `h_consigne` int(11) NOT NULL,
  `adresse_mail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`nom_piece`, `t_consigne`, `l_consigne`, `h_consigne`, `adresse_mail`) VALUES
('chambre', 12, 80, 6, '');

-- --------------------------------------------------------

--
-- Structure de la table `temperature_ext`
--

CREATE TABLE `temperature_ext` (
  `horodatage` timestamp NOT NULL DEFAULT current_timestamp(),
  `valeur` float NOT NULL,
  `nom_piece` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `temperature_ext`
--

INSERT INTO `temperature_ext` (`horodatage`, `valeur`, `nom_piece`) VALUES
('2023-01-19 19:24:13', 12.4, 'chambre');

-- --------------------------------------------------------

--
-- Structure de la table `temperature_int`
--

CREATE TABLE `temperature_int` (
  `horodatage` timestamp NOT NULL DEFAULT current_timestamp(),
  `valeur` float NOT NULL,
  `nom_piece` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `temperature_int`
--

INSERT INTO `temperature_int` (`horodatage`, `valeur`, `nom_piece`) VALUES
('2023-01-11 15:47:23', 12.5, 'chambre'),
('2023-01-30 22:23:05', 20, 'chambre'),
('2023-01-12 22:23:08', 11, 'chambre'),
('2023-01-05 22:23:08', 18, 'chambre');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `adresse_mail` varchar(100) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `cp` int(11) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id_etat`);

--
-- Index pour la table `humidite`
--
ALTER TABLE `humidite`
  ADD PRIMARY KEY (`horodatage`);

--
-- Index pour la table `luminosite`
--
ALTER TABLE `luminosite`
  ADD PRIMARY KEY (`horodatage`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`nom_piece`);

--
-- Index pour la table `temperature_ext`
--
ALTER TABLE `temperature_ext`
  ADD PRIMARY KEY (`horodatage`);

--
-- Index pour la table `temperature_int`
--
ALTER TABLE `temperature_int`
  ADD PRIMARY KEY (`horodatage`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`adresse_mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etat`
--
ALTER TABLE `etat`
  MODIFY `id_etat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
