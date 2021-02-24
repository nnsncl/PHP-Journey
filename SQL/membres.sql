-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 23 fév. 2021 à 23:49
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
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cp` char(5) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `naissance` date NOT NULL,
  `inscription` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `prenom`, `nom`, `email`, `adresse`, `cp`, `ville`, `tel`, `naissance`, `inscription`) VALUES
(1, 'Ted', 'Mosby', 'ted.mosby@haveyoumetted.com', '7, 4e avenue', '92555', 'New-York', '226-555-9874', '1979-03-09', '2008-12-16'),
(2, 'John', 'Casey', 'jcasey@nsa.gov.us', 'Big Brother Street', '95062', 'Burbank', '265-985-9665', '1971-10-15', '2009-03-26'),
(3, 'Jack', 'Bauer', 'jack.bauer@ctu.gov.us', 'ctu street', '95668', 'Los Angeles', '246-555-9875', '1966-04-09', '2008-12-12'),
(4, 'Sheldon', 'Cooper', 'spock@physics-nerds.com', 'nerds building', '95668', 'Los-Angeles', '246-552-6597', '1985-09-05', '2009-04-02'),
(5, 'Morgan', 'Grimes', 'morgan.grimes@buy-more.com', 'Dummy Street', '95062', 'Burbank', '265-958-9847', '1980-04-12', '2009-03-25'),
(6, 'Jethro', 'Gibbs', 'gibbs@ncis.nav', 'en vadrouille', '96854', 'Trou paumé', '569-985-6325', '1957-11-01', '2008-10-09'),
(7, 'Gregory', 'House', 'greg.house@princeton-hospital.com', 'Princeton hospital', '48785', 'Princeton', '555-555-9658', '1961-06-07', '2008-10-06'),
(8, 'Lilly', 'Aldrin', 'lilly@marshall.com', '7, 4e avenue', '92555', 'New-York', '213-555-6589', '0979-01-02', '2009-03-10'),
(9, 'Leonard', 'Hofstadter', 'leonard@physics-nerds.com', 'nerds building', '95668', 'Los-Angeles', '246-552-6597', '1984-09-01', '2009-04-24'),
(10, 'Walker', 'Sarah', 'swalker@cia.gov.us', 'St Geek Street', '95062', 'Burbank', '123-654-6589', '1977-08-08', '2009-02-26'),
(11, 'Lisa', 'Cuddy', 'lisa.cuddy@princeton-hospital.com', 'Princeton hospital', '48785', 'Princeton', '555-555-9657', '1967-08-09', '2009-01-03'),
(12, 'Kate', 'Todd', 'kate@ncis-dcd.com', '6 pieds sous terre', '96854', 'Trou paumé', '000-000-0000', '1974-03-21', '2008-12-07'),
(13, 'Chuck', 'Bartowski', 'chuck.b@buy-more.com', 'St Geek Street', '95062', 'Burbank', '123-654-7894', '1977-10-07', '2009-02-24'),
(14, 'Barney', 'Stinson', 'barney@thebrocode.com', '12, 5e avenue', '92555', 'New-York', '223-555-8974', '1978-09-18', '2008-11-02'),
(15, 'Abbygail', 'Sciuto', 'abby@ncis.nav', 'labo du ncis', '96854', 'Trou paumé', '012-345-6789', '1983-01-11', '2008-11-12'),
(16, 'Robin', 'Scherbatsky', 'robins@abc-news.com', '7, 4e avenue', '92555', 'New-York', '213-555-6589', '1977-03-08', '2009-03-13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
