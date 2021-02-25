-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 24 fév. 2021 à 13:56
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `coursphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `interro`
--

CREATE TABLE `interro` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_membre` int(10) UNSIGNED NOT NULL,
  `note` decimal(3,1) NOT NULL,
  `num_interro` tinyint(4) NOT NULL,
  `trimestre` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `interro`
--

INSERT INTO `interro` (`id`, `id_membre`, `note`, `num_interro`, `trimestre`) VALUES
(1, 1, '0.0', 1, 1),
(2, 2, '12.5', 1, 1),
(3, 3, '10.0', 1, 1),
(4, 4, '13.5', 1, 1),
(5, 5, '11.0', 1, 1),
(6, 6, '18.5', 1, 1),
(7, 7, '16.0', 1, 1),
(8, 8, '5.0', 2, 1),
(9, 1, '8.0', 2, 1),
(10, 2, '20.0', 2, 1),
(11, 3, '17.0', 2, 1),
(12, 4, '3.0', 2, 1),
(13, 5, '9.0', 2, 1),
(14, 6, '15.0', 2, 1),
(15, 7, '14.5', 2, 1),
(16, 8, '10.5', 2, 1),
(17, 1, '8.0', 1, 2),
(18, 2, '11.5', 1, 2),
(19, 3, '19.0', 1, 2),
(20, 4, '19.5', 1, 2),
(21, 5, '1.0', 1, 2),
(22, 6, '5.5', 1, 2),
(23, 7, '9.5', 1, 2),
(24, 8, '8.0', 1, 2),
(25, 1, '9.0', 2, 2),
(26, 2, '11.0', 2, 2),
(27, 3, '18.0', 2, 2),
(28, 4, '8.5', 2, 2),
(29, 5, '0.5', 2, 2),
(30, 6, '3.0', 2, 2),
(31, 7, '13.0', 2, 2),
(32, 8, '16.0', 2, 2),
(33, 1, '12.0', 1, 3),
(34, 2, '12.5', 1, 3),
(35, 3, '13.5', 1, 3),
(36, 4, '15.0', 1, 3),
(37, 5, '14.0', 1, 3),
(38, 6, '17.0', 1, 3),
(39, 7, '9.5', 1, 3),
(40, 8, '10.0', 1, 3),
(41, 1, '13.0', 2, 3),
(42, 2, '3.0', 2, 3),
(43, 3, '11.0', 2, 3),
(44, 4, '8.0', 2, 3),
(45, 5, '1.0', 2, 3),
(46, 6, '3.0', 2, 3),
(47, 7, '10.5', 2, 3),
(48, 8, '14.0', 2, 3),
(49, 1, '17.0', 1, 4),
(50, 2, '12.0', 1, 4),
(51, 3, '13.0', 1, 4),
(52, 4, '9.0', 1, 4),
(53, 5, '19.0', 1, 4),
(54, 6, '17.0', 1, 4),
(55, 7, '16.0', 1, 4),
(56, 8, '18.0', 1, 4),
(57, 1, '12.0', 2, 4),
(58, 2, '12.0', 2, 4),
(59, 3, '12.5', 2, 4),
(60, 4, '14.0', 2, 4),
(61, 5, '16.0', 2, 4),
(62, 6, '11.0', 2, 4),
(63, 7, '10.0', 2, 4),
(64, 8, '9.5', 2, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `interro`
--
ALTER TABLE `interro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `interro`
--
ALTER TABLE `interro`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
