-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 14 jan. 2023 à 01:49
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pieces-auto-tunisie`
--

-- --------------------------------------------------------

--
-- Structure de la table `attributes`
--

CREATE TABLE `attributes` (
  `id_attributes` int(11) NOT NULL,
  `nom_attributes` varchar(150) NOT NULL,
  `Statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `attributes`
--

INSERT INTO `attributes` (`id_attributes`, `nom_attributes`, `Statut`) VALUES
(1, 'Battery Capacity', 1),
(2, 'Storages', 1),
(3, 'Screen Size', 1),
(4, 'Specifications ', 1),
(6, 'pross', 1);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_image` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `parent_id` int(111) NOT NULL,
  `Statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`category_id`, `category_image`, `parent_id`, `Statut`) VALUES
(1, 'image/categories/computer_63c1987537e28.png', 0, 0),
(2, 'image/categories/scanner_63c19949b3afd.png', 0, 0),
(3, 'image/categories/imprimants_63c19c49d5dd5.png', 0, 0),
(4, 'image/categories/mobiles_63c19c8e3113b.png', 0, 1),
(5, 'image/categories/Laptop_63c1a0b5554a5.png', 1, 1),
(6, 'image/categories/Tablets_63c1a1451656f.png', 4, 1),
(7, 'image/categories/Tablets redmi_63c1a2b111acf.png', 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `category_description`
--

CREATE TABLE `category_description` (
  `category_id` int(111) NOT NULL,
  `name_category` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `description_category` text CHARACTER SET armscii8 NOT NULL,
  `meta_title` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `meta_description` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `meta_keyword` varchar(255) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category_description`
--

INSERT INTO `category_description` (`category_id`, `name_category`, `description_category`, `meta_title`, `meta_description`, `meta_keyword`) VALUES
(1, 'computer', '', 'computer', '', ''),
(2, 'scanner', '', 'scanner', '', ''),
(3, 'imprimants', '', 'imprimants', '', ''),
(4, 'Mobiles & Tablets', '', 'mobiles', '', ''),
(5, 'Laptop', '', 'Laptop', '', ''),
(6, 'Tablets', '', 'Tablets', '', ''),
(7, 'Tablets redmi', '', 'Tablets redmi', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `id_customers` int(11) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `civilite` varchar(6) NOT NULL,
  `date_n` date NOT NULL,
  `adresse` varchar(80) NOT NULL,
  `code_p` int(4) NOT NULL,
  `mobile` varchar(32) NOT NULL,
  `Statut` int(1) NOT NULL,
  `password` varchar(40) NOT NULL,
  `cart` text NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id_customers`, `nom`, `prenom`, `email`, `civilite`, `date_n`, `adresse`, `code_p`, `mobile`, `Statut`, `password`, `cart`, `date_added`) VALUES
(23, 'aziz', 'fnoun', 'aziz.fnoun@gmail.com', 'homme', '1993-04-10', '19 نهج جرزونة خزندار باردو', 2017, '21362298', 1, '04a8cd015867e30ca66c73c73e78ff00', '', '2023-01-09'),
(26, 'ghanmi', 'khalil', 'wordpress.khalil@gmail.com', 'homme', '1993-09-27', '19 rue jarzouna', 2017, '55347574', 1, '04a8cd015867e30ca66c73c73e78ff00', '', '2023-01-09'),
(27, 'haythem', 'gargouri', 'haythemgargouri@gmail.com', 'homme', '1993-08-08', '23 rue jarzouna khaznadar tunis', 2017, '54060273', 1, '04a8cd015867e30ca66c73c73e78ff00', '', '2023-01-09'),
(28, 'hatem', 'ben ammar', 'hatembenammar007@gmail.com', 'homme', '1994-02-13', 'cit&eacute; iben khaldoun rue carthage', 1000, '21789535', 0, '04a8cd015867e30ca66c73c73e78ff00', '', '2023-01-10'),
(29, 'amir', 'ouled hssan', 'amirloumara@hotmail.fr', 'homme', '1994-07-12', '35 rue jarzouna khaznadar', 2017, '58238887', 1, '04a8cd015867e30ca66c73c73e78ff00', '', '2023-01-11');

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE `marques` (
  `id_marques` int(11) NOT NULL,
  `name_marques` varchar(64) CHARACTER SET armscii8 DEFAULT NULL,
  `image_marques` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `Statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `marques`
--

INSERT INTO `marques` (`id_marques`, `name_marques`, `image_marques`, `Statut`) VALUES
(1, 'pistair', 'image/Marques/pistair.jpg', 1),
(2, 'clechocs', 'image/Marques/clechocs.jpg', 1),
(3, 'd131o04a', 'image/Marques/d131o04a.jpg', 1),
(4, 'u540l03ba', 'image/Marques/u540l03ba.jpg', 0),
(7, 'joez pizza', 'image/Marques/joez pizza_63c02e9e2a80f.png', 0),
(8, 'lightstartd', 'image/Marques/lightstartd_63c0254ca6008.png', 1),
(9, 'alt', 'image/Marques/alt_63c02587902c1.png', 1),
(10, 'Mecaniki', 'image/Marques/Mecaniki_63c033e6f391c.svg', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id_attributes`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `category_description`
--
ALTER TABLE `category_description`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customers`,`email`,`mobile`);

--
-- Index pour la table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`id_marques`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id_attributes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `marques`
--
ALTER TABLE `marques`
  MODIFY `id_marques` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
