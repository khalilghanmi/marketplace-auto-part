-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 12 jan. 2023 à 19:16
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
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`) VALUES
(1, 'خليل', 'demo@demo.com', '123456789'),
(2, 'خليل', 'demo1@demo.com', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`id`, `emp_name`, `salary`, `gender`, `city`, `email`) VALUES
(1, 'Yogesh', '30000', 'male', 'Bhopal', 'yogesh@makitweb.com'),
(2, 'Vishal', '28000', 'male', 'Pune', 'vishal@makitweb.com'),
(3, 'Vijay', '35000', 'male', 'Jaipur', 'vijayec@makitweb.com'),
(4, 'Rahul', '25000', 'male', 'Kanpur', 'rahul512@makitweb.com'),
(5, 'Sonarika', '50000', 'female', 'Mumbai', 'bsonarika@makitweb.com'),
(6, 'Jitentendre', '48000', 'male', 'Bhopal', 'jiten94@makitweb.com'),
(7, 'Aditya', '36000', 'male', 'Pune', 'aditya@makitweb.com'),
(15, 'Shalu', '43000', 'female', 'Bhopal', 'gshalu521@makitweb.com');

-- --------------------------------------------------------

--
-- Structure de la table `prod_images`
--

CREATE TABLE `prod_images` (
  `id` int(11) NOT NULL,
  `donnees_binaires` longblob NOT NULL,
  `nom_fichier` text NOT NULL,
  `taille_fichier` text NOT NULL,
  `type_fichier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prod_images`
--

INSERT INTO `prod_images` (`id`, `donnees_binaires`, `nom_fichier`, `taille_fichier`, `type_fichier`) VALUES
(23, '', 'khalilovic4558.png', '', ''),
(24, '', 'khalilovic3321.png', '', ''),
(25, '', 'khalilovic6748.jpg', '', ''),
(26, '', 'khalilovic5804.png', '', ''),
(27, '', 'khalilovic7068.png', '', ''),
(28, '', 'khalilovic9072.png', '', ''),
(29, '', 'khalilovic1306.webpuser_images/2023/January/', '', ''),
(30, '', 'khalilovic3532.png', '', ''),
(31, '', 'user_images/2023/January/khalilovic8804.png', '', ''),
(32, '', 'user_images/2023/January/khalilovic5766.png', '', ''),
(33, '', 'user_images/2023/January/khalilovic9881.jpeg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `userProfession` varchar(50) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `userName`, `userProfession`, `userPic`) VALUES
(53, 'admin6974', 'testing', '661686.png'),
(52, 'khalil_web', 'devloppeur web', '976577.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prod_images`
--
ALTER TABLE `prod_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `prod_images`
--
ALTER TABLE `prod_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
