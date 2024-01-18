-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 18 jan. 2024 à 14:31
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
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id` varchar(20) NOT NULL,
  `Departement` text NOT NULL,
  `Faculte` text NOT NULL,
  `Promotion` text NOT NULL,
  `classe` text NOT NULL,
  `NumberStudents` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `idCours` varchar(20) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id_enseignant`, `nom`, `prenom`, `Diplome`, `idCours`, `telephone`, `email`) VALUES
('BIU-5889', 'brice berry', 'irumva', 'Bujumbura International Univer', '', '75896896', 'irumvabr@gmail.'),
('BIU-589', 'brice berry', 'irumva', 'Bujumbura International Univer', '', '75896896', 'irumvabr@gmail.'),
('BIU-965', 'brice berry', 'irumva', 'Bujumbura International Univer', '', '75896896', 'irumvabr@gmail.');

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
-- Structure de la table `timetable`
--

CREATE TABLE `timetable` (
  `idTimetable` varchar(20) NOT NULL,
  `weekTime` varchar(20) NOT NULL,
  `idCours` varchar(20) NOT NULL,
  `idProfesseur` varchar(20) NOT NULL,
  `idSalle` varchar(20) NOT NULL,
  `mon8_10` varchar(15) NOT NULL,
  `tue8_10` varchar(15) NOT NULL,
  `mon10_12` varchar(15) DEFAULT NULL,
  `mon1_3` varchar(15) DEFAULT NULL,
  `mon3_5` varchar(15) DEFAULT NULL,
  `tue10_12` varchar(15) DEFAULT NULL,
  `tue1_3` varchar(15) DEFAULT NULL,
  `tue3_5` varchar(15) DEFAULT NULL,
  `wed8_10` varchar(15) DEFAULT NULL,
  `wed10_12` varchar(15) DEFAULT NULL,
  `wed1_3` varchar(15) DEFAULT NULL,
  `wed3_5` varchar(15) DEFAULT NULL,
  `thu8_10` varchar(15) DEFAULT NULL,
  `thu10_12` varchar(15) DEFAULT NULL,
  `thu1_3` varchar(15) DEFAULT NULL,
  `thu3_5` varchar(15) DEFAULT NULL,
  `fri8_10` varchar(15) DEFAULT NULL,
  `fri10_12` varchar(15) DEFAULT NULL,
  `fri1_3` varchar(15) DEFAULT NULL,
  `fri3_5` varchar(15) DEFAULT NULL,
  `sat8_10` varchar(15) DEFAULT NULL,
  `sat10_12` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`idTimetable`);

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
