-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 mai 2021 à 03:34
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hello`
--

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE `langue` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `translate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`id`, `name`, `translate`) VALUES
(1, 'Français', 'Bonjour'),
(2, 'Anglais', 'Hello'),
(3, 'Tahitien', 'Iaorana'),
(24, 'bébé tu dead sa', 'voilà quoi'),
(25, 'bébé tu dead sa', 'voilà quoi'),
(26, 'bébé tu dead sa', 'voilà quoi'),
(27, 'bébé tu dead sa', 'voilà quoi'),
(28, 'bébé tu dead sa', 'voilà quoi'),
(29, 'bébé tu dead sa', 'voilà quoi');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `langue`
--
ALTER TABLE `langue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `langue`
--
ALTER TABLE `langue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
