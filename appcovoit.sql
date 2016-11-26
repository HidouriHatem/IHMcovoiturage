-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 26 Novembre 2016 à 14:27
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `appcovoit`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(10) NOT NULL,
  `auteur` int(10) NOT NULL,
  `horaire_depart` datetime NOT NULL,
  `depart` varchar(255) NOT NULL,
  `horaire_arrivee` datetime NOT NULL,
  `destination` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`id`, `auteur`, `horaire_depart`, `depart`, `horaire_arrivee`, `destination`, `message`) VALUES
(5, 3, '2016-11-02 15:30:00', 'gabes', '2016-11-11 15:30:00', 'Gafsa', ''),
(6, 5, '2016-11-11 12:00:00', 'nabeul', '2016-11-12 20:50:00', 'Tunis', 'bienvenue'),
(7, 9, '2016-11-10 12:13:00', 'tozeur', '2016-11-19 12:50:00', 'tunis', 'test'),
(8, 5, '2016-11-11 11:11:00', 'Gafsa', '2016-11-12 18:20:00', 'Sfax', 'test test'),
(9, 5, '2016-11-11 12:00:00', 'zarroug', '2016-11-12 12:00:00', 'sened', '');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `id` int(10) NOT NULL,
  `login` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `surnom` varchar(20) NOT NULL,
  `etage` varchar(2) NOT NULL,
  `possedeVoiture` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `eleves`
--

INSERT INTO `eleves` (`id`, `login`, `code`, `nom`, `prenom`, `surnom`, `etage`, `possedeVoiture`) VALUES
(3, 'hatem', 'hatem', 'hatem', 'hatem', 'hatem', '5', 1),
(4, 'test', 'test', 'test', 'test', 'test', '26', 1),
(5, 'test2', 'test2', 'test2', 'test2', 'test2', '30', 1),
(6, 'test4', 'test4', 'test4', 'test4', 'test4', '20', 1),
(7, 'test5', 'test5', 'test5', 'test5', '', '20', 1),
(8, 'test6', 'test6', 'test6', 'test6', '', '20', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
