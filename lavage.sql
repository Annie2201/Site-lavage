-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 08 Mars 2021 à 13:30
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lavage`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `names` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `names`) VALUES
(1, '2 roues'),
(2, 'voiture normale'),
(3, '4X4 ou Camionnette');

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE `date` (
  `id_date` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `date`
--

INSERT INTO `date` (`id_date`, `date`) VALUES
(1, '2021-02-26'),
(2, '2021-02-27'),
(3, '2021-03-07'),
(4, '2021-03-08');

-- --------------------------------------------------------

--
-- Structure de la table `prise_en_charge`
--

CREATE TABLE `prise_en_charge` (
  `id_pec` int(11) NOT NULL,
  `id_vehicule` int(11) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `prise_en_charge`
--

INSERT INTO `prise_en_charge` (`id_pec`, `id_vehicule`, `titre`, `user`) VALUES
(3, 3, 'Prise en charge', 'Laure'),
(8, 2, 'Prise en charge', 'Moussah'),
(9, 1, 'Prise en charge', 'Kelly'),
(10, 4, 'En attente', '0'),
(11, 5, 'En attente', '0'),
(12, 6, 'En attente', '0'),
(13, 7, 'En attente', '0'),
(14, 8, 'En attente', '0');

-- --------------------------------------------------------

--
-- Structure de la table `prix_lavage`
--

CREATE TABLE `prix_lavage` (
  `id_prix` int(11) NOT NULL,
  `type_lavage` char(100) NOT NULL,
  `prix` int(11) NOT NULL,
  `temps_attente` varchar(100) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `prix_lavage`
--

INSERT INTO `prix_lavage` (`id_prix`, `type_lavage`, `prix`, `temps_attente`, `id_categorie`) VALUES
(1, 'lavage interieur', 1000, '10', 1),
(2, 'lavage interieur', 4000, '30', 2),
(3, 'lavage interieur', 9000, '45', 3),
(4, 'lavage exterieure', 2000, '10', 1),
(5, 'lavage exterieure', 5000, '30', 2),
(6, 'lavage exterieure', 8000, '45', 3),
(7, 'lavage interieur et exterieure', 2500, '20', 1),
(8, 'lavage interieur et exterieure', 8000, '60', 2),
(9, 'lavage interieur et exterieure', 15000, '45', 3),
(10, 'lavage complet', 20000, '90', 2),
(11, 'lavage complet', 30000, '120', 3);

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `id_user` int(6) NOT NULL,
  `statut` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `test`
--

INSERT INTO `test` (`id_test`, `id_user`, `statut`) VALUES
(2, 3, 'Disponible'),
(3, 2, 'Disponible'),
(5, 5, 'Disponible'),
(7, 4, 'Disponible');

-- --------------------------------------------------------

--
-- Structure de la table `type_user`
--

CREATE TABLE `type_user` (
  `id_type` int(11) NOT NULL,
  `noms` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_user`
--

INSERT INTO `type_user` (`id_type`, `noms`) VALUES
(1, 'admin'),
(2, 'laveur');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` char(150) NOT NULL,
  `prenom` char(150) NOT NULL,
  `id_type` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `id_type`, `password`) VALUES
(1, 'Lenny', 'Bar', 1, 'admin01'),
(2, 'Kelly', 'Diocy', 2, 'user01'),
(3, 'Moussah', 'Razeh', 2, 'user02'),
(4, 'Laure', 'Dure', 2, 'user03'),
(5, 'Justin', 'Instant', 2, 'user04'),
(6, 'Lord', 'Voldemort', 2, 'user05');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vehicule` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `prenoms` char(100) NOT NULL,
  `model` varchar(120) NOT NULL,
  `id_prix` int(2) NOT NULL,
  `id_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id_vehicule`, `name`, `prenoms`, `model`, `id_prix`, `id_date`) VALUES
(1, 'Vincent', 'Timaitre', 'Fourgon Peugeot DA4', 3, 1),
(2, 'Jessica', 'Pote', 'Suzuki GSX 250R', 7, 1),
(3, 'Charles', 'Atant', 'Peugeot 308', 5, 2),
(4, 'Yves', 'Rognes', 'Ford Ranger simple cabine', 9, 2),
(5, 'Granger', 'Hermione', 'Suzuki SV650 Scrambler', 1, 3),
(6, 'Lovegood', 'Luna', 'Mazda MX-5', 10, 3),
(7, 'Malfoy', 'Draco', 'Aston Martin', 2, 4),
(8, 'Rubeus', 'Hagrid', 'Volvo FL 210', 6, 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`id_date`);

--
-- Index pour la table `prise_en_charge`
--
ALTER TABLE `prise_en_charge`
  ADD PRIMARY KEY (`id_pec`);

--
-- Index pour la table `prix_lavage`
--
ALTER TABLE `prix_lavage`
  ADD PRIMARY KEY (`id_prix`);

--
-- Index pour la table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- Index pour la table `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_vehicule`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `date`
--
ALTER TABLE `date`
  MODIFY `id_date` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `prise_en_charge`
--
ALTER TABLE `prise_en_charge`
  MODIFY `id_pec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `prix_lavage`
--
ALTER TABLE `prix_lavage`
  MODIFY `id_prix` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id_vehicule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
