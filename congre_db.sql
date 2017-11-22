-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 03:46 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `congre_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accueil`
--

CREATE TABLE `accueil` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `text` mediumtext CHARACTER SET utf8 COLLATE utf8_bin,
  `langue` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accueil`
--

INSERT INTO `accueil` (`id`, `type`, `text`, `langue`) VALUES
(1, 'titre_accueil', '2<sup>eme</sup> CONGRES INTERNATIONAL SUR LES ALGUES ', 'Fr'),
(2, 'dateLimite_accueil', 'Du 22 au 24 Mars 2018, Marrakech, Maroc', 'Fr'),
(3, 'presentation', '<p>La reussite du CIAlgues en 2016 a laisse un impact tres remarquable au sein de tous les participants.<br /> La deuxieme edition CIAlgue-2018 sera une continuite de cette activite internationale axant sur l\'interet evolutif de differents domaines impliquant les algues. Ces thallophytes continuent a ouvrir de nombreuses perspectives pour la recherche scientifiques et pour de nombreux secteurs economiques. </p>\r\n                    <br>\r\n                    <p>Leurs importances alimentaires, sanitaires, cosmetiques, industrielles et energetiques fait de ces vegetaux inferieurs un materiel a exploiter par diverses methodes et ouvrant plusieurs perspectives et offrant une opportunite pour l\'offre d\'emploi. </p><br />\r\n                    <p> Le CIAlgues-2018 sera donc une occasion pour croiser les connaissances autour des macros et micro algues et pour aider a structurer la filiere algues en faisant un etat des lieux le plus complet possible. Il permettra de mettre en valeur les diverses strategies biotechnologiques pour exploiter les potentialites economiques des algues. Il permettra aussi aux participants de saisir des occasions de collaboration en recherche et d\'evaluer des possibilites de partenariat\r\n                    </p>', 'Fr'),
(4, 'titre_accueil', '2<sup>nd</sup> INTERNATIONAL CONGRESS ON ALGAE', 'En'),
(5, 'dateLimite_accueil', 'From 22 to 24 March 2018, Marrakech, Morocco', 'En'),
(6, 'presentation', '<p>The success of the CIAlgues in 2016 has left a very remarkable impact among all the participants. <br /> The second edition CIAlgue-2018 will be a continuation of this international activity focusing on the evolving interest of different areas involving algae. These thallophytes continue to open up many perspectives for scientific research and for many economic sectors.</p>\r\n                    <br>\r\n                    <p>Their importance in food, health, cosmetics, industry and energy makes these lower plants a material to be exploited by various methods and opening up several perspectives and offering an opportunity for the job offer. </p><br />\r\n                    <p> The CIAlgues-2018 will be an opportunity to cross knowledge about macros and micro algae and to help structure the algae chain by making a complete inventory of the situation. It will make it possible to highlight the various biotechnological strategies to exploit the economic potentialities of algae. It will also allow participants to seize opportunities for collaborative research and to assess opportunities for partnerships.\r\n                    </p>', 'En');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `ar_title` varchar(255) DEFAULT NULL,
  `ar_text` text CHARACTER SET utf8 COLLATE utf8_bin,
  `author` varchar(25) DEFAULT NULL,
  `ar_path` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `ar_title`, `ar_text`, `author`, `ar_path`) VALUES
(8, 'Hello Test', '<h1>This is a Test</h1>hDJKLJKLSDJ AJKDLASDJ KLADJKLASDJK AL jkdsajkl dsaklas dajlkasjdaksldj&nbsp;<br>', NULL, NULL),
(9, 'Hello Test dshjajhja hdaj Title Edited', '<h1>hhgewhjs this Text is Edited by Uns</h1>hjksdha hadj hadhkajd hakdh kashdkas&nbsp;<br>', NULL, NULL),
(11, 'Venue', '<h1><br></h1>', 'admin', ''),
(65, 'HEBERGEMENT', '<h1><span class=\"wysiwyg-color-red\"><b>EN COURS DE CONSTRUCTION ...</b></span></h1>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `dateCalendar` date DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `langue` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `dateCalendar`, `description`, `langue`) VALUES
(1, '2017-11-30', 'Date limite de soumission des formulaires d\'inscription et des resumes pour les presentations orales et par affiches   ', 'Fr'),
(2, '2018-01-15', 'Notification d\'acceptation des presentations orales et des presentations par affiches', 'Fr'),
(3, '2018-01-31', 'Date limite pour le paiement des frais d\'inscription ', 'Fr'),
(5, '2017-11-30', 'Deadline for submitting registration forms and abstracts for oral and poster submissions         ', 'En'),
(6, '2018-01-15', 'Notification of Acceptance of Oral Presentations and Poster Presentations', 'En'),
(7, '2018-01-03', 'Deadline for payment of the registration fee   ', 'En');

-- --------------------------------------------------------

--
-- Table structure for table `commite`
--

CREATE TABLE `commite` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commite`
--

INSERT INTO `commite` (`id`, `nom`, `country`, `university`, `type`) VALUES
(13, 'F.Benkhalti', 'Maroc', '', 2),
(12, 'A.Rochdi', 'Maroc', '', 2),
(11, 'D.Hsissou', 'Maroc', '', 2),
(10, 'A.Benharref', 'Maroc', '', 2),
(9, 'A.Reani', 'Maroc', '', 2),
(8, 'C.Girard', 'France', '', 2),
(7, 'K.Bendiab', 'Maroc', '', 2),
(6, 'K.Makroum', 'Maroc', '', 2),
(5, 'C.D.Gadhi', 'Maroc', '', 2),
(4, 'H.Amraoui', 'Maroc', '', 2),
(3, 'M.Loudiki', 'Maroc', '', 2),
(2, 'M.Faize', 'Maroc', '', 2),
(1, 'A.Aboudia', 'Maroc', '', 2),
(14, 'R.Jalal', 'Maroc', '', 2),
(15, 'B.Sabour', 'Maroc', '', 2),
(16, 'H.Bouamama', 'Maroc', '', 2),
(17, 'E.M.Kabil', 'Maroc', '', 2),
(18, 'N.Seddiqi', 'Maroc', '', 2),
(19, 'H.Boussetta', 'Tunisie', '', 2),
(20, 'T.Koussa', 'Maroc', '', 2),
(21, 'N.Zehhar', 'Maroc', '', 2),
(22, 'M.El Kaoua', 'Maroc', '', 2),
(24, 'L.Zidane', 'Maroc', '', 2),
(25, 'H.Amraoui', 'Maroc', 'FSTG', 1),
(26, 'F.Benkhalti', 'Maroc', 'FSTG', 1),
(27, 'H.Bouamama', 'Maroc', 'FSTG', 1),
(28, 'M.El Kaoua', 'Maroc', 'FSTG', 1),
(29, 'D.Hsissou', 'Maroc', 'FSTG', 1),
(30, 'R.Nmila', 'Maroc', 'FSE', 1),
(31, 'H.Rchid', 'Maroc', 'FSE', 1),
(32, 'N.Seddiqi', 'Maroc', 'FSTG', 1),
(33, 'N.Zehhar', 'Maroc', 'FSTG', 1),
(34, 'O.Cherifi', 'Maroc', 'FSTG', 2),
(35, 'N.Kchaou', 'Tunisia', '-', 2),
(36, 'M.Aroudane', 'Maroc', 'Ecole Souihla Marrakech', 2),
(37, 'Kaya', 'Maroc', '-', 2),
(38, 'H.Belarbi', 'Espagne', '-', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contactme`
--

CREATE TABLE `contactme` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `sujet` varchar(255) DEFAULT NULL,
  `message` text,
  `emiteur` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `frais`
--

CREATE TABLE `frais` (
  `id` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `dateLimite` date DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `langue` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `frais`
--

INSERT INTO `frais` (`id`, `type`, `dateLimite`, `state`, `prix`, `langue`) VALUES
(1, 'Enseignant-chercheurs', '2018-01-31', 1, 200, 'Fr'),
(2, 'Enseignant-chercheurs', '2018-01-31', 0, 250, 'Fr'),
(3, 'Doctorant', '2018-01-31', 1, 100, 'Fr'),
(4, 'Doctorant', '2018-01-31', 0, 120, 'Fr'),
(5, 'Accompagnateurs', '2018-01-31', 1, 100, 'Fr'),
(6, 'Accompagnateurs', '2018-01-31', 0, 120, 'Fr'),
(7, 'Teacher-researchers', '2018-01-31', 1, 200, 'En'),
(8, 'Teacher-researchers', '2018-01-31', 0, 250, 'En'),
(9, 'PhD student', '2018-01-31', 1, 100, 'En'),
(10, 'PhD student', '2018-01-31', 0, 120, 'En'),
(11, 'Accompanying', '2018-01-31', 1, 100, 'En'),
(12, 'Accompanying', '2018-01-31', 0, 120, 'En');

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `theme` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `titre` text CHARACTER SET utf8 COLLATE utf8_bin,
  `country` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inscription`
--



-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `id` int(11) NOT NULL,
  `titre` varchar(510) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `langue` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`id`, `titre`, `description`, `langue`) VALUES
(1, 'Le programme comprend des conferences pleniÃ¨res (45 min)', '                    ', 'Fr'),
(2, 'des lectures (30 min)', '', 'Fr'),
(3, 'des communications orales (15 min)', '', 'Fr'),
(4, 'des presentations par affiches', 'Les langues officielles du symposium sont l\'anglais et le franÃ§ais', 'Fr'),
(5, 'Le programme comprend des conferences pleniÃ¨res (45 min)', '', 'En'),
(6, 'des lectures (30 min)', '', 'En'),
(7, 'des communications orales (15 min)', '', 'En'),
(8, 'des presentations par affiches', 'Les langues officielles du symposium sont l\'anglais et le franÃ§ais', 'En');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `langue` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `titre`, `description`, `langue`) VALUES
(7, 'Algues et biodiversite', '', 'Fr'),
(8, 'Biotechnologies algales', 'Phytochimie, Substances de defenses naturelles, Bio-PolymÃ¨res, Activites,...', 'Fr'),
(9, 'Algues et agriculture', 'Bio-Pesticides, Bio-Fertilisants, Hormones,..', 'Fr'),
(10, 'Algues et environnement', 'traitement des eaux usees, bioaccumulants de metaux lourds, reduction de lâ€™effet de serre, toxicite des algues.', 'Fr'),
(11, 'Algues et industries', 'Pharmaceutiques, Agroalimentaires, Thalassotherapie, Cosmetique..', 'Fr'),
(12, 'Algocarburants', '', 'Fr'),
(13, 'Algae and biodiversity', '', 'En'),
(14, 'Algae Biotechnology', 'Phytochemistry, Natural defenses, Bio-Polymers, Activities,..', 'En'),
(15, 'Algae and agriculture', 'Bio-Pesticides, Bio-Fertilizers, Hormones,..', 'En'),
(16, 'Algae and environment', 'waste water treatment, heavy metal bioaccumulants, reduction of the greenhouse effect, algae toxicity.', 'En'),
(17, 'Algae and industries', 'Pharmaceuticals, Agroalimentary, Thalassotherapy, Cosmetics..', 'En'),
(18, 'Algocarburants', '', 'En');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `hashed_password` text,
  `quest` varchar(255) DEFAULT NULL,
  `resp` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `hashed_password`, `quest`, `resp`) VALUES
(11, 'admin3', '$2y$10$L2WxvctWcPenr/bn.IqqEOVvaNVmJ2qGcEMqKqrPGLPcMTNANtAry', 'Combien des heures vous dormez ?', '8h'),
(2, 'admin', '$2y$10$QdOkA3I8It8lguvXbe3PxOgf4SSIYaDqZpmMHuLrVWIUozGlE0SXa', 'Quelle votre ami d`enfance?', 'moi'),
(10, 'admin 2', '$2y$10$LHSwCEWHTxG1.GyaNNgH9eNe0D1W9lJU6U2tfn9WFz1VV22vSVyPG', 'A quelle annee vous avez votre premier telephone ?', 'test reponse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accueil`
--
ALTER TABLE `accueil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commite`
--
ALTER TABLE `commite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactme`
--
ALTER TABLE `contactme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frais`
--
ALTER TABLE `frais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accueil`
--
ALTER TABLE `accueil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `commite`
--
ALTER TABLE `commite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `contactme`
--
ALTER TABLE `contactme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `frais`
--
ALTER TABLE `frais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
