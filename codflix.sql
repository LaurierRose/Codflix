-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 22 avr. 2022 à 14:05
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `discoding`
--

-- --------------------------------------------------------

--
-- Structure de la table `episodes`
--

CREATE TABLE `episodes` (
  `idepisode` int(11) NOT NULL,
  `idsaison` int(11) DEFAULT NULL,
  `titreep` varchar(50) DEFAULT NULL,
  `summaryep` varchar(400) DEFAULT NULL,
  `duration` int(50) DEFAULT NULL,
  `urlep` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `episodes`
--

INSERT INTO `episodes` (`idepisode`, `idsaison`, `titreep`, `summaryep`, `duration`, `urlep`) VALUES
(49, 1, 'Chapter 1: The Mandalorian', 'Five years after the fall of the Empire,[a] a Mandalorian bounty hunter collects a fugitive after a scuffle in a bar on the ice planet Pagodon and returns to the planet Nevarro in his ship, the Razor Crest. ', 37, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(50, 1, 'Chapter 2: The Child', 'While returning to his ship on foot with the Child in tow, the Mandalorian is ambushed by a trio of Trandoshan warriors. He disintegrates one attempting to rush and kill the Child, revealing a tracking fob.', 30, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(51, 1, 'Chapter 3: The Sin', 'The Mandalorian delivers \"the Child\" to the Client. He asks about the plans for the Child, but is given no answer. When the Mandalorian returns to the secret Mandalorian enclave, his heavily damaged armor is replaced by the Armorer with a new set forged from some of the beskar reward. ', 45, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(52, 1, 'Chapter 4: Sanctuary', 'On Sorgan, a sparsely populated forested swamp planet, a village of farmers is pillaged by raiders. The Mandalorian soon lands on Sorgan looking to hide from the Guild with \"the Child\". ', 35, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(53, 1, 'Chapter 5: The Gunslinger', 'The Mandalorian defeats a pursuing bounty hunter in a dogfight, but the Razor Crest is damaged and he lands at a repair facility run by Peli Motto (Amy Sedaris) in Mos Eisley on Tatooine.', 33, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(54, 1, 'Chapter 6: The Prisoner', 'The Mandalorian contacts his old friend Ran. Ran has hired a crew consisting of ex-Imperial sharpshooter Migs Mayfeld, the Devaronian strongman Burg, the droid pilot Zero, and the knife-wielding Twi\'lek woman Xi\'an to rescue her brother Qin, a prisoner of the New Republic.', 30, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(55, 1, 'Chapter 7: The Reckoning', 'The Mandalorian receives a message from Greef Karga. Karga\'s town has been overrun by Imperial troops led by the Client, who is desperate to recover \'the Child\'. ', 54, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(56, 1, 'Chapter 8: Redemption', 'While the Mandalorian, Cara Dune, and Greef Karga are trapped, IG-11 rescues \'the Child\'. The Mandalorian finds a vent into the sewers, where he hopes to find his people\'s hidden stronghold. Moff Gideon gives them until nightfall to surrender, or he will order his troops to fire.', 43, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(57, 2, 'Chapter 9: The Marshal', 'Seeking other Mandalorians to help him reunite the Child with its kind, the Mandalorian approaches gangster Gor Koresh, who attempts to kill him for his beskar armor but fails.', 45, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(58, 2, 'Chapter 10: The Passenger', 'Returning from Mos Pelgo, the Mandalorian subdues bandits who attempt to capture the Child. His speeder bike destroyed, the Mandalorian walks back to Mos Eisley, finding Peli Motto playing cards with Dr. Mandible, who has information about Mandalorians.', 37, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(59, 2, 'Chapter 11: The Heiress', 'The Razor Crest, severely damaged, crash lands on the moon of Trask. The Frog Lady is reunited with her husband, who directs The Mandalorian to an inn, where he learns three Mandalorians have been seen, and the captain of a trawler of Quarren offers passage to find the Mandalorians.', 30, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(60, 2, 'Chapter 12: Siege', 'The Mandalorian and the Child head to Nevarro after the Mon Calamari repairs to the ship proved inadequate. They reunite with Greef Karga and Cara Dune there, who have since turned the planet around. ', 45, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(61, 2, 'Chapter 13: The Jedi', 'On the forest planet of Corvus, Ahsoka Tano confronts Imperial Magistrate Morgan Elsbeth, ruler of the city of Calodan, and her lieutenant Lang. Ahsoka gives Elsbeth one day to surrender and divulge her master\'s location.', 67, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(62, 2, 'Chapter 14: The Tragedy', 'The Mandalorian arrives with Grogu on Tython, and finds the ancient temple on top of a mountain. He seats Grogu at the center so that he may choose his path.', 45, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(63, 2, 'Chapter 15: The Believer', 'Prisoner Migs Mayfeld is working on the Karthon Chop Fields, and is remanded into the custody of Marshal Cara Dune. The Mandalorian needs Mayfeld, a former Imperial soldier, in order to acquire the coordinates to Moff Gideon\'s ship.', 78, 'https://www.youtube.com/embed/eW7Twd85m2g'),
(64, 2, 'Chapter 16: The Rescue', 'The Mandalorian boards an Imperial shuttle with Cara Dune and captures Dr. Pershing. He and Boba Fett then visit Bo-Katan and Koska Reeves, who clash with Fett over the purity of his Mandalorian lineage.', 56, 'https://www.youtube.com/embed/eW7Twd85m2g');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Horreur'),
(3, 'Science-Fiction'),
(4, 'Comédie'),
(5, 'Drame');

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `finish_date` datetime DEFAULT NULL,
  `watch_duration` int(11) NOT NULL DEFAULT '0' COMMENT 'in seconds'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `release_date` date NOT NULL,
  `summary` longtext NOT NULL,
  `trailer_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id`, `genre_id`, `title`, `type`, `status`, `release_date`, `summary`, `trailer_url`) VALUES
(1, 3, 'Blade Runner', 'film', 'published', '1982-01-01', 'L\'action du film se situe à Los Angeles en 2019 et met en scène Rick Deckard (interprété par Harrison Ford), un ancien policier qui reprend du service pour traquer un groupe de réplicants, des androïdes créés à l\'image de l\'Homme, menés par l\'énigmatique Roy Batty (interprété par Rutger Hauer).', 'https://www.youtube.com/embed/eogpIG53Cis'),
(2, 1, 'Léon', 'film', 'published', '1994-01-01', 'Un tueur à gages répondant au nom de Léon, prend sous son aile Mathilda, une petite fille de douze ans, seule rescapée du massacre de sa famille. Pour venger la mort de son petit frère, l\'adolescente demande à Léon de lui apprendre à devenir une redoutable tueuse comme lui.', 'https://www.youtube.com/embed/vSi5jdziv3I'),
(3, 2, 'Dreamcatcher', 'film', 'published', '2003-01-01', 'Quatre amis se retrouvent annuellement pour une partie de chasse dans une forêt du Maine. Elle fut jadis leur terrain d\'aventures, en compagnie de Duddits, l\'enfant mongolien qu\'ils avaient adopté comme un petit frère. Et le théâtre, aussi, d\'événements qu\'ils se sont efforcés d\'oublier.', 'https://www.youtube.com/embed/-zlV7onjqgw'),
(4, 3, 'Mandalorian', 'serie', 'published', '2019-11-12', 'Après la chute de l\'Empire et la fondation de la Nouvelle République, le métier de chasseur de primes ne paie plus. Le Mandalorien, surnommé Mando, connu pour être un des plus redoutables chasseurs de primes, accepte un contrat non officiel. Il s\'agit pour lui, moyennant une prime élevée, de retrouver et de ramener à ses commanditaires un être vivant de 50 ans. ', 'https://www.youtube.com/embed/aOC8E8z_ifw'),
(5, 1, 'Deadpool', 'film', 'published', '2016-01-01', 'L\'histoire du film revient sur sa vie de mercenaire rencontrant l\'amour, avant d\'accepter un traitement expérimental contre le cancer qui pourrait le sauver, qui a en fait pour but de le transformer en esclave. Voyant le traitement le rendre presque immortel grâce à un pouvoir de guérison accéléré mais qui le défigure, il s\'évade et se met à la recherche de celui qui l\'a métamorphosé.', 'https://www.youtube.com/embed/XWtH7anz7io'),
(6, 1, 'Deadpool 2', 'film', 'published', '2018-01-01', 'Deadpool se voit contraint de rejoindre les X-Men : après une tentative ratée de sauver un jeune mutant au pouvoir destructeur, il se retrouve dans une prison antimutants. Arrive Cable, un soldat venant du futur et ayant pour cible le jeune mutant, en quête de vengeance. Deadpool décide de le combattre. Peu convaincu par les règles des X-Men, il crée sa propre équipe, la « X-Force ». Mais cette mission lui réserve de grosses surprises, des ennemis de taille et des alliés indispensables.', 'https://www.youtube.com/embed/D86RtevtfrA'),
(7, 5, 'Un long dimanche de fiançailles', 'film', 'published', '2004-01-01', 'Dans les tranchées de la Somme, pendant la Première Guerre mondiale, cinq soldats français sont accusés de s’être automutilés pour échapper à leur devoir. Condamnés à mort par une cour martiale, ils sont conduits jusqu’à un avant-poste nommé Bingo crépuscule1 et abandonnés à leur sort dans le no man\'s land qui sépare les deux camps. Ils sont apparemment tous tués, soit durant la nuit qu\'ils passent entre les lignes, soit durant l\'attaque française à la baïonnette qui est lancée le lendemain et repoussée par les Allemands, avec de lourdes pertes parmi les attaquants.', 'https://www.youtube.com/embed/Bf70OPKUyYU'),
(8, 2, 'Evil Dead 3', 'film', 'published', '1994-01-01', 'Ash Williams, une tronçonneuse greffée au poignet, un fusil dans l’autre main, se retrouve propulsé dans le passé, en l’an 1300 par le moyen d\'un portail spatio-temporel 1. Il est capturé par les hommes du seigneur Arthur, qui le soupçonnent d\'être un agent du duc Henry, avec lequel Arthur est en guerre. En compagnie d\'Henry, qui a lui aussi été capturé, Ash est emmené dans un château. Il est ensuite jeté dans une fosse où il tue un mort-vivant et récupère les armes qui lui avaient été confisquées. Après avoir exigé qu\'Henry et ses hommes soient libérés et avoir tué un mort-vivant sous les yeux de la population, Ash est célébré comme un héros. Il est de plus en plus attiré par Sheila, la sœur de l\'un des chevaliers d\'Arthur tombés au combat.', 'https://www.youtube.com/embed/ATd3E6o45ro');

-- --------------------------------------------------------

--
-- Structure de la table `saisons`
--

CREATE TABLE `saisons` (
  `idsaison` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `idmedia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `saisons`
--

INSERT INTO `saisons` (`idsaison`, `number`, `idmedia`) VALUES
(1, 1, 4),
(2, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(80) NOT NULL,
  `validation_key` varchar(50) NOT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `validation_key`, `active`) VALUES
(30, 'coding@factory.fr', '$2y$10$BF2V03FRQMfDrDu0C59csO8pvmqOK6TGS8YrlSyiCJ8mdGxHNhd1.', '435734865e9c5eabdf6dccd52252191b', 1),
(31, 'lubyugie@outlook.fr', '$2y$10$KJ0kQOpjycB0kR77sKsR.ON5dOZJ6B0qZ/Z8TMWPZj8VREWsDvR1G', 'e5c15c947fb18a09b7e9aa8f58f7fdc5', 1),
(32, 'laurence.bellebouche@edu.esiee-it.fr', '$2y$10$aAPMdUMOjxZA4lWli.znF.bqNeyix5f98vA9xIn837irAtE9xQX2C', '3e95886303517aab77b3f33339334c8b', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`idepisode`),
  ADD KEY `idsaison` (`idsaison`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_user_id_fk_media_id` (`user_id`),
  ADD KEY `history_media_id_fk_media_id` (`media_id`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_genre_id_fk_genre_id` (`genre_id`) USING BTREE;

--
-- Index pour la table `saisons`
--
ALTER TABLE `saisons`
  ADD PRIMARY KEY (`idsaison`),
  ADD KEY `idmedia` (`idmedia`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `idepisode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `saisons`
--
ALTER TABLE `saisons`
  MODIFY `idsaison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_ibfk_1` FOREIGN KEY (`idsaison`) REFERENCES `saisons` (`idsaison`);

--
-- Contraintes pour la table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_media_id_fk_media_id` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_user_id_fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_genre_id_b1257088_fk_genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);

--
-- Contraintes pour la table `saisons`
--
ALTER TABLE `saisons`
  ADD CONSTRAINT `saisons_ibfk_1` FOREIGN KEY (`idmedia`) REFERENCES `media` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
