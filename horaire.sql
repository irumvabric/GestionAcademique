-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 08 jan. 2024 à 16:04
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `horaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

CREATE TABLE `cour` (
  `id` varchar(10) NOT NULL,
  `intitule` text NOT NULL,
  `NbrCredit` int(5) NOT NULL,
  `Description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cour`
--

INSERT INTO `cour` (`id`, `intitule`, `NbrCredit`, `Description`) VALUES
('BST-2154', 'UML', 4, 'This code is using a prepared statement with placeholders, and then it binds the actual values using the execute method.'),
('BST-2158', 'UML', 4, 'This code is using a prepared statement with placeholders, and then it binds the actual values using the execute method.');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `id_enseignant` varchar(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `Diplome` varchar(30) NOT NULL,
  `date_embauche` date NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id_enseignant`, `nom`, `prenom`, `Diplome`, `date_embauche`, `telephone`, `email`) VALUES
('BIU-5889', 'brice berry', 'irumva', 'Bujumbura International Univer', '2024-01-01', '75896896', 'irumvabr@gmail.'),
('BIU-589', 'brice berry', 'irumva', 'Bujumbura International Univer', '2021-06-22', '75896896', 'irumvabr@gmail.'),
('BIU-965', 'brice berry', 'irumva', 'Bujumbura International Univer', '2021-06-28', '75896896', 'irumvabr@gmail.');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `idSalle` varchar(15) NOT NULL,
  `Nom` varchar(15) NOT NULL,
  `NbrPlaces` int(15) NOT NULL,
  `EtatSalleOccup` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`idSalle`, `Nom`, `NbrPlaces`, `EtatSalleOccup`) VALUES
('BIU-Salle', 'brice berry', 256, 1),
('BIU-Salle-124', 'brice berry', 425, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `nom`, `prenom`, `tel`, `email`, `username`, `password`) VALUES
(1, 'brice berry', 'irumva', '55544', 'irumvabr@gmail.com', 'a455', '4554'),
(2, 'brice berry', 'irumva', '75896896', 'irumvabr@gmail.com', 'admin', '4587'),
(5, 'Marie', 'Keza', '75452145', 'uterva@gamil.com', 'kewza', '4785556');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id_enseignant`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`idSalle`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
