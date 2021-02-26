-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Jeudi 17 Avril 2008 à 12:35
-- Version du serveur: 5.0.45
-- Version de PHP: 5.2.5
-- 
-- Base de données: `cours`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `fruitsetlegumes`
-- 

DROP TABLE IF EXISTS `fruitsetlegumes`;
CREATE TABLE `fruitsetlegumes` (
  `id` int(11) NOT NULL auto_increment,
  `nom` varchar(50) NOT NULL,
  `type` tinyint(127) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Contenu de la table `fruitsetlegumes`
-- 

INSERT INTO `fruitsetlegumes` (`id`, `nom`, `type`) VALUES 
(1, 'Pomme', 1),
(2, 'Banane', 1),
(3, 'Carotte', 2),
(4, 'Kiwi', 1),
(5, 'Fraise', 1),
(6, 'Chou-fleur', 2),
(7, 'Bettraves', 2),
(8, 'Concombre', 2);
