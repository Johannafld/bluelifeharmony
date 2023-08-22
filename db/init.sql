CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL
) ENGINE = MyISAM DEFAULT CHARSET = utf8;

CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(200) NOT NULL,
  `photo` text,
  `content` text,
  `background_color` varchar(200),
  `creator_id` int(11) NOT NULL FOREIGN_KEY
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE = MyISAM DEFAULT CHARSET = utf8;