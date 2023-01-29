-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 29 jan. 2023 à 20:57
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_iot_1`
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
  `nom_piece` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `humidite`
--

CREATE TABLE `humidite` (
  `horodatage` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `valeur` int(11) NOT NULL,
  `nom_piece` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `luminosite`
--

CREATE TABLE `luminosite` (
  `horodatage` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `valeur` int(11) NOT NULL,
  `nom_piece` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `nom_piece` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `t_consigne` float NOT NULL,
  `l_consigne` int(11) NOT NULL,
  `h_consigne` int(11) NOT NULL,
  `adresse_mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `temperature_ext`
--

CREATE TABLE `temperature_ext` (
  `horodatage` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `valeur` float NOT NULL,
  `nom_piece` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `temperature_int`
--

CREATE TABLE `temperature_int` (
  `horodatage` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `valeur` float NOT NULL,
  `nom_piece` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `adresse_mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cp` int(11) NOT NULL,
  `ville` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL
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
  MODIFY `id_etat` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
