-- Adminer 4.8.1 MySQL 5.7.36 dump

DROP DATABASE IF EXISTS `gart_php-poo-tpblog`;
CREATE DATABASE `gart_php-poo-tpblog` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gart_php-poo-tpblog`;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`) VALUES
(1,	'Mon titre 01',	'Your best is an idiot!\r\nKif might! The alien mothership is in orbit here. If we can hit that bullseye, the rest of the dominoes will fall like a house of cards. Checkmate. I never loved you. My fellow Earthicans, as I have explained in my book \'Earth in the Balance\'\', and the much more popular \'\'Harry Potter and the Balance of Earth\', we need to defend our planet against pollution. Also dark wizards.',	'2023-08-01 09:50:22'),
(2,	'Mon titre 02',	'Your best is an idiot!\r\nKif might! The alien mothership is in orbit here. If we can hit that bullseye, the rest of the dominoes will fall like a house of cards. Checkmate. I never loved you. My fellow Earthicans, as I have explained in my book \'Earth in the Balance\'\', and the much more popular \'\'Harry Potter and the Balance of Earth\', we need to defend our planet against pollution. Also dark wizards.',	'2023-08-01 09:50:33'),
(3,	'Mon titre 03',	'Your best is an idiot!\r\nKif might! The alien mothership is in orbit here. If we can hit that bullseye, the rest of the dominoes will fall like a house of cards. Checkmate. I never loved you. My fellow Earthicans, as I have explained in my book \'Earth in the Balance\'\', and the much more popular \'\'Harry Potter and the Balance of Earth\', we need to defend our planet against pollution. Also dark wizards.',	'2023-08-01 09:53:11');

-- 2023-08-01 13:48:32
