-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 22 août 2023 à 15:01
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bluelifeharmony`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `photo` text,
  `content` text,
  `background_color` varchar(200) DEFAULT NULL,
  `creator_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `photo`, `content`, `background_color`, `creator_id`, `created_at`) VALUES
(1, 'La Neurodiversité : Redéfinir l\'Autisme', NULL, 'L\'autisme n\'est plus simplement perçu comme un trouble à corriger.La notion de neurodiversité propose de le considérer comme une variation naturelle de la neurologie humaine. Cette approche encourage la célébration des différences et la valorisation des talents uniques des personnes autistes.En embrassant la neurodiversité, nous ouvrons la voie à une société inclusive où chacun peut s\'épanouir, dépassant les étiquettes pour reconnaître la richesse de la diversité humaine.', '#c8e4b2', 1, '2023-08-22 14:25:01'),
(3, 'Pourquoi le bleu?', NULL, 'Le bleu est bien plus qu\'une couleur dans le monde de l\'autisme.\r\nC\'est un symbole de sensibilisation, d\'acceptation et d\'unité.\r\nAdopté pour représenter la communauté autiste, le bleu rappelle l\'importance de créer un environnement paisible et inclusif. Chaque année en avril, le Mois de la Sensibilisation à l\'Autisme met en lumière les défis et les talents des personnes autistes, avec le bleu comme emblème de soutien. Cette couleur apaisante incarne également la sérénité nécessaire pour le bien-être des individus autistes. En portant le bleu et en participant aux activités de sensibilisation, nous contribuons à promouvoir l\'acceptation et l\'inclusion, créant ainsi un monde plus compréhensif pour tous.', '#2666cf', 1, '2023-08-22 14:28:48'),
(4, 'Les thérapies', NULL, 'Les thérapies adaptées aux personnes autistes sont essentielles pour leur développement. L\'Analyse Appliquée du Comportement (ABA) renforce les comportements positifs. La Thérapie d\'Intégration Sensorielle améliore la gestion des stimuli sensoriels.La Communication Améliorée et Alternatives (CAA) facilite la communication. La Thérapie Comportementale Intensive (TCI) développe diverses compétences. Les Programmes d\'Éducation Individualisés (PEI) sont sur mesure. Ces approches personnalisées permettent aux personnes autistes de réaliser leur plein potentiel et de vivre une vie épanouissante.', '#aad6ff', 1, '2023-08-22 14:31:19'),
(5, 'Comprendre l\'autisme', NULL, 'L\'autisme, également connu sous le nom de trouble du spectre de l\'autisme (TSA), est une condition neurodéveloppementale qui influence la communication, les interactions sociales et les comportements. Les symptômes varient, mais incluent souvent des défis de communication, des difficultés sociales et des comportements répétitifs. Les causes de l\'autisme ne sont pas entièrement comprises, mais des facteurs génétiques et environnementaux sont considérés comme des contributeurs potentiels. Le diagnostic se fait par observation des comportements, avec des critères tels que les problèmes de communication sociale et les intérêts restreints. Un diagnostic précoce est crucial pour fournir un soutien adapté. L\'intervention et l\'éducation peuvent aider les individus autistes à s\'épanouir et à développer leurs compétences uniques.', '#ae1e46', 1, '2023-08-22 14:34:02');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nom`, `prenom`) VALUES
(1, 'johanna.foolchand@hotmail.com', '$2y$10$hE6P.Odk4oztIlVe7qiFteEOFubqtQm5iY3MAorELhgfXy8eo/ALe', 'Foolchand', 'Johanna');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
