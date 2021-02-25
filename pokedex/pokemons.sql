-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 25 fév. 2021 à 09:18
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `php-journey`
--

-- --------------------------------------------------------

--
-- Structure de la table `pokedex`
--

CREATE TABLE `pokedex` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `taille` varchar(50) DEFAULT NULL,
  `poids` varchar(50) DEFAULT NULL,
  `catégorie` varchar(50) DEFAULT NULL,
  `pv` int(11) DEFAULT NULL,
  `attaque` int(11) DEFAULT NULL,
  `defense` int(11) DEFAULT NULL,
  `attaque_spe` int(11) DEFAULT NULL,
  `defense_spe` int(11) DEFAULT NULL,
  `vitesse` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pokedex`
--

INSERT INTO `pokedex` (`id`, `nom`, `taille`, `poids`, `catégorie`, `pv`, `attaque`, `defense`, `attaque_spe`, `defense_spe`, `vitesse`, `image`) VALUES
(1, 'Bulbizarre', '0,7m', '6,9kg', 'Graine', 3, 3, 3, 4, 4, 3, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png'),
(2, 'Herbizarre', '1,0m', '13,0kg', 'Graine', 4, 4, 4, 5, 5, 4, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png'),
(3, 'Florizarre', '2,0m', '100,0kg', 'Graine', 5, 5, 5, 6, 6, 5, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png'),
(4, 'Salamèche', '0,6m', '8,5kg', 'Lézard', 3, 4, 3, 4, 3, 4, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png'),
(5, 'Reptincel', '1,1m', '19,0kg', 'Flamme', 4, 4, 4, 5, 4, 5, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/005.png'),
(6, 'Dracaufeu', '1,7m', '90,5kg', 'Flamme', 5, 5, 5, 7, 5, 6, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/006.png'),
(7, 'Carapuce', '0,5m', '9,0kg', 'Minitortue', 3, 3, 4, 3, 4, 3, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png'),
(8, 'Carabaffe', '1,0m', '22,5kg', 'Tortue', 4, 4, 5, 4, 5, 4, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/008.png'),
(9, 'Tortank', '1,6m', '85,5kg', 'Carapace', 5, 5, 6, 5, 7, 5, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/009.png'),
(10, 'Chenipan', '0,3m', '2,9kg', 'Ver', 3, 2, 3, 2, 2, 3, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/010.png'),
(11, 'Chrysacier ', '0,7m', '9,9kg', 'Cocon', 3, 2, 4, 2, 2, 2, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/011.png'),
(12, 'Papillusion', '1,1m', '32,0kg', '', 4, 3, 3, 6, 5, 5, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/012.png'),
(13, 'Aspicot ', '0,3m', '3,2kg', 'Insectopic', 3, 3, 2, 2, 2, 3, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/013.png'),
(14, 'Coconfort ', '0,6m', '10,0m', 'Cocon', 3, 2, 3, 2, 2, 3, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/014.png'),
(15, 'Dardargnan', '1,0m', '29,5kg', 'Guêpoison', 4, 6, 3, 3, 5, 5, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/015.png'),
(16, 'Roucool', '0,3m', '1,8kg', 'Minoiseau', 3, 3, 3, 3, 3, 4, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/016.png'),
(17, 'Roucoups ', '1,1m', '30,0kg', 'Oiseau', 4, 4, 4, 3, 3, 5, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/017.png'),
(18, 'Roucarnage ', '1,5m', '39,5kg', 'Oiseau', 5, 5, 5, 5, 5, 6, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/018.png'),
(19, 'Rattata ', '0,3m', '3,5kg', 'Souris', 2, 4, 3, 2, 3, 5, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/019.png'),
(20, 'Rattatac ', '0,7m', '18,5kg', 'Souris', 4, 5, 4, 3, 5, 6, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/020.png'),
(21, 'Piafabec', '0,3m', '2,0kg', 'Minoiseau', 3, 4, 2, 2, 2, 5, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/021.png'),
(22, 'Rapasdepic ', '1,2m', '38,0kg', 'Bec-Oiseau', 4, 6, 4, 4, 4, 6, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/022.png'),
(23, 'Abo', '2,0m', '6,9kg', 'Serpent', 3, 4, 3, 3, 4, 4, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/023.png'),
(24, 'Arbok ', '3,5m', '65,0m', 'Cobra', 4, 6, 5, 4, 5, 5, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/024.png'),
(25, 'Pikachu', '0,4m', '6,0kg', 'Souris', 3, 4, 3, 3, 3, 6, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png'),
(26, 'Raichu', '0,8m', '30,0kg', 'Souris', 4, 6, 4, 6, 5, 7, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/026.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pokedex`
--
ALTER TABLE `pokedex`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pokedex`
--
ALTER TABLE `pokedex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
