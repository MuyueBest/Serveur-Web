-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 28 Mars 2022 à 13:06
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formulaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `formulaires`
--

CREATE TABLE `formulaires` (
  `civilite` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `adresse` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `codepostal` int(5) NOT NULL,
  `ville` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pays` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `c_interets` text CHARACTER SET utf8 COLLATE utf8_bin,
  `message` text CHARACTER SET utf8 COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formulaires`
--

INSERT INTO `formulaires` (`civilite`, `nom`, `prenom`, `adresse`, `codepostal`, `ville`, `pays`, `c_interets`, `message`) VALUES
('Madame', 'azeazeaz', 'azeazeaze', 'azeazeazea', 12345, 'azeazeaze', '', '', ''),
('Monsieur', 'jouvellier', 'axel', 'prout ville', 17500, 'st prout de prout', '', 'aucun', 'ca pue');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `formulaires`
--
ALTER TABLE `formulaires`
  ADD PRIMARY KEY (`nom`,`prenom`,`adresse`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
