-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mar. 11 juin 2024 à 18:32
-- Version du serveur : 8.0.37
-- Version de PHP : 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bangertacos`
--

-- --------------------------------------------------------

--
-- Structure de la table `Menus`
--

CREATE TABLE `Menus` (
  `id` int NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `description` varchar(120) DEFAULT NULL,
  `price` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Menus`
--

INSERT INTO `Menus` (`id`, `name`, `description`, `price`) VALUES
(1, 'P\'tit creux', 'Tacos S, Frites, Boisson', 7.00),
(2, 'Gourmand', 'Tacos M, Frites, Boisson', 8.50);

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `surName` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `loyaltyPoints` decimal(6,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`id`, `firstName`, `surName`, `email`, `phone`, `password`, `loyaltyPoints`) VALUES
(9, 'Cyprien', 'Forge', 'cyprien.forge@gmail.com', '0766079834', '$2y$10$zmRtxMDnQ2zBSX6D7RPDf.9cDWvPuhTF6ORM/yrBgGIl89oBnJoFG', 0),
(10, 'Clément', 'Villars', 'clement.villars@gmail.com', '0645213658', '$2y$10$bHpwxg1E5Jd/DuD7cy8zRuEj1fTpnPlgYNmdHKnbJ0iXARb9GwUhO', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Menus`
--
ALTER TABLE `Menus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Menus`
--
ALTER TABLE `Menus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
