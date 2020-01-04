-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 04, 2020 at 05:03 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `GestionEtuAWA`
--

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `cne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_e` int(11) NOT NULL,
  `niveau_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`id`, `cne`, `nom`, `prenom`, `cin`, `tel`, `date_naiss`, `adresse`, `id_e`, `niveau_id`) VALUES
(1, 'Z132883456', 'Hajjioui', 'Abdelfettah', 'DO25055', '0623543749', '04-04-1998', '100, Zanqat Nador, Hay Essalam, Meknes', 1, 2),
(2, 'Z132883456', 'Dakkak', 'Omar', 'Z608298', '0613265172', '21-06-1998', '41, bloc 4, Hay Al Andalouss Taza', 2, 2),
(3, 'Z132883456', 'Karimi', 'Amine', 'Z60321', '0613215172', '23-07-1998', '21, bloc 2, Hay Al Qods, Taza', 3, 2),
(4, 'Z132883456', 'Benkaddour', 'Aziz', 'I60321', '0623215172', '13-08-1998', '28, bloc 1, Hay Urshalim, Fez', 4, 1),
(5, 'Z132883456', 'El Yaagoubi', 'Adam', 'Z621241', '0614215172', '13-02-1999', '55, bloc 5, Friouatou, Taza', 5, 1),
(6, 'Z142283456', 'Yaagoubi', 'Fati', 'Z6213141', '0614212122', '18-09-1999', '55, bloc 5, Friouatou, Taza', 6, 1),
(7, 'Z141283456', 'Senhaji', 'Yousra', 'Z613122', '0612121221', '16-09-1999', '22, bloc 1, Hay Al Qods 3, Taza', 7, 1),
(8, 'Z141283456', 'Mokhtari', 'Zakaryae', 'S613122', '0612124521', '16-05-1998', '22, Hay Mellila, Beni Nsar, Nador', 8, 2),
(9, 'Z141283456', 'Bendahan', 'Omar', 'Z608298', '0666063087', '21-06-1998', '42, Bloc 4, Hay Al Andalouss, Taza', 9, 2),
(10, 'Z141213131', 'Malek', 'Jouhayna', 'Z521409', '0666063211', '22-08-1998', '44, Bloc 5, Hay Al Andalouss, Taza', 10, 2),
(11, 'S148006142', 'Alami', 'Omar', 'Z607398', '0672826152', '23-07-1998', '41, qods, Taza', 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE `matiere` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prof_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`id`, `nom`, `prof_id`) VALUES
(1, 'COMPLEXITE', 1),
(2, 'AWA', 2),
(3, 'MACHINE LEARNING', 4),
(4, 'POO EN JAVA', 3);

-- --------------------------------------------------------

--
-- Table structure for table `matiere_niveau`
--

CREATE TABLE `matiere_niveau` (
  `matiere_id` int(11) NOT NULL,
  `niveau_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matiere_niveau`
--

INSERT INTO `matiere_niveau` (`matiere_id`, `niveau_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20191221094955', '2019-12-21 09:50:07'),
('20191221104914', '2019-12-21 10:49:21'),
('20191222025544', '2019-12-22 02:56:52'),
('20191222085855', '2019-12-22 08:59:07'),
('20200104153701', '2020-01-04 15:37:15'),
('20200104161228', '2020-01-04 16:13:11'),
('20200104161452', '2020-01-04 16:14:57'),
('20200104161629', '2020-01-04 16:16:33'),
('20200104163724', '2020-01-04 16:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `niveau`
--

INSERT INTO `niveau` (`id`, `nom`, `departement`) VALUES
(1, 'GI1', 'Maths info'),
(2, 'GI2', 'Maths info');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `etudiant_id` int(11) DEFAULT NULL,
  `matiere_id` int(11) DEFAULT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

CREATE TABLE `professeur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`id`, `nom`) VALUES
(1, 'DADI EL WARDANI'),
(2, 'SARA KOULALI'),
(3, 'BAHRI ABDELKHALEK'),
(4, 'OUAZZA AHMED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_227C02EBB3E9C81` (`niveau_id`);

--
-- Indexes for table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9014574AABC1F7FE` (`prof_id`);

--
-- Indexes for table `matiere_niveau`
--
ALTER TABLE `matiere_niveau`
  ADD PRIMARY KEY (`matiere_id`,`niveau_id`),
  ADD KEY `IDX_6B3CD676F46CD258` (`matiere_id`),
  ADD KEY `IDX_6B3CD676B3E9C81` (`niveau_id`);

--
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_CFBDFA14DDEAB1A3` (`etudiant_id`),
  ADD KEY `IDX_CFBDFA14F46CD258` (`matiere_id`);

--
-- Indexes for table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `FK_227C02EBB3E9C81` FOREIGN KEY (`niveau_id`) REFERENCES `niveau` (`id`);

--
-- Constraints for table `matiere`
--
ALTER TABLE `matiere`
  ADD CONSTRAINT `FK_9014574AABC1F7FE` FOREIGN KEY (`prof_id`) REFERENCES `professeur` (`id`);

--
-- Constraints for table `matiere_niveau`
--
ALTER TABLE `matiere_niveau`
  ADD CONSTRAINT `FK_6B3CD676B3E9C81` FOREIGN KEY (`niveau_id`) REFERENCES `niveau` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6B3CD676F46CD258` FOREIGN KEY (`matiere_id`) REFERENCES `matiere` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `FK_CFBDFA14DDEAB1A3` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiants` (`id`),
  ADD CONSTRAINT `FK_CFBDFA14F46CD258` FOREIGN KEY (`matiere_id`) REFERENCES `matiere` (`id`);
