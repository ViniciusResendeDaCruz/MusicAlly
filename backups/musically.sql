-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Ago-2022 às 21:08
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `musically`
--
CREATE DATABASE IF NOT EXISTS `musically` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `musically`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

DROP TABLE IF EXISTS `musicas`;
CREATE TABLE IF NOT EXISTS `musicas` (
  `registro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `duracao` int(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `reproducoes` int(11) NOT NULL,
  `musico_id` int(11) NOT NULL,
  PRIMARY KEY (`registro`),
  KEY `musico_id` (`musico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `musicas`
--

INSERT INTO `musicas` (`registro`, `nome`, `duracao`, `arquivo`, `reproducoes`, `musico_id`) VALUES
(1, 'Play Hard', 10, 'linkzão', 0, 3),
(5, 'Work Hard', 12, 'fsdffs', 0, 3),
(6, 'BIJ', 3, 'arqq', 0, 3),
(10, 'Not Musica', 1, 'Not Musica', 0, 3),
(61, 'Lavanderia Fantasma', 6, 'commodo ipsum. Suspendisse non leo. Vivamus nibh', 0, 6),
(62, 'Procurar', 4, 'rhoncus. Proin nisl', 0, 7),
(63, 'Látex Estreito', 6, 'malesuada fames ac turpis egestas.', 0, 6),
(64, 'Felicidade', 15, 'euismod urna. Nullam lobortis quam a', 0, 7),
(65, 'Lenha Asphyxiate Felicidade', 3, 'fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum.', 0, 5),
(66, 'Desejo Toalete', 6, 'adipiscing non, luctus', 0, 8),
(67, 'Lenha Asphyxiate Felicidade', 9, 'ac mi eleifend egestas. Sed pharetra,', 0, 8),
(68, 'Respirar', 6, 'vulputate mauris sagittis placerat. Cras dictum', 0, 6),
(69, 'Colo Gravata', 12, 'risus. Donec egestas. Aliquam nec enim. Nunc ut', 0, 7),
(70, 'Sanduíche Lavanderia', 6, 'ac facilisis facilisis, magna tellus faucibus leo,', 0, 8),
(71, 'Almofada Etiqueta Adoçante', 19, 'non, egestas a, dui. Cras pellentesque. Sed dictum. Proin', 0, 8),
(72, 'Diagonal Lenha', 6, 'fringilla purus mauris a nunc. In at', 0, 6),
(73, 'Marcador Medida', 13, 'sed tortor. Integer aliquam adipiscing lacus. Ut nec', 0, 7),
(74, 'Investigador', 16, 'sit amet risus. Donec egestas. Aliquam nec enim.', 0, 8),
(75, 'Civil Nervosismo Construir', 5, 'lobortis quis, pede. Suspendisse dui. Fusce diam', 0, 6),
(76, 'Tomar Ruga Desaparecer', 6, 'faucibus orci', 0, 7),
(77, 'Falar', 4, 'sodales purus, in', 0, 8),
(78, 'Gravata', 20, 'fringilla purus mauris a nunc. In', 0, 8),
(79, 'Hora', 4, 'ullamcorper. Duis cursus, diam at pretium aliquet, metus', 0, 6),
(80, 'Lavanderia', 6, 'aliquam eu, accumsan sed, facilisis vitae,', 0, 8),
(81, 'Ruga Desaparecer', 19, 'arcu. Vivamus sit amet', 0, 7),
(82, 'Civil', 13, 'Mauris eu turpis. Nulla aliquet. Proin', 0, 8),
(83, 'Face Nero', 11, 'tempor augue ac ipsum. Phasellus vitae mauris', 0, 7),
(84, 'Almofada Etiqueta', 20, 'facilisis facilisis,', 0, 6),
(85, 'Guincho Formal', 12, 'facilisis non, bibendum sed, est. Nunc', 0, 8),
(86, 'Civil', 10, 'ultrices iaculis odio. Nam interdum enim non nisi. Aenean', 0, 7),
(87, 'Conquistar Diagonal', 16, 'vulputate', 0, 8),
(88, 'Buracos Lago', 11, 'dolor.', 0, 7),
(89, 'Lenha Asphyxiate', 11, 'cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam', 0, 8),
(90, 'Adoçante', 16, 'Nulla eu neque pellentesque massa lobortis ultrices. Vivamus', 0, 7),
(91, 'Grafite Face', 18, 'molestie tortor nibh sit amet orci. Ut', 0, 6),
(92, 'Almofada Etiqueta', 4, 'dui. Suspendisse ac metus vitae velit egestas lacinia.', 0, 5),
(93, 'Equipamento Temperatura Investigador', 15, 'ante, iaculis nec, eleifend non, dapibus rutrum, justo.', 0, 8),
(94, 'Forma', 10, 'a', 0, 6),
(95, 'Nervosismo Construir', 4, 'Vestibulum ut eros', 0, 6),
(96, 'Marcador', 3, 'nibh dolor, nonummy ac, feugiat non,', 0, 7),
(97, 'Falar', 11, 'pede. Suspendisse dui. Fusce', 0, 8),
(98, 'Gravata Sanduíche', 11, 'nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla', 0, 8),
(99, 'Investigador', 7, 'risus. Duis a mi fringilla mi lacinia mattis.', 0, 7),
(100, 'Deportar Forma', 4, 'eget metus eu erat', 0, 8),
(101, 'Criatura', 12, 'Mauris molestie pharetra nibh.', 0, 8),
(102, 'Diagonal Lenha', 10, 'sem, vitae aliquam eros turpis non enim. Mauris quis', 0, 6),
(103, 'Advogado', 9, 'vel turpis.', 0, 8),
(104, 'Asphyxiate', 12, 'lectus pede, ultrices a, auctor', 0, 7),
(105, 'Porca Látex', 13, 'pede, ultrices a, auctor non, feugiat nec, diam.', 0, 6),
(106, 'Noviço', 17, 'tempor erat neque non quam. Pellentesque habitant', 0, 5),
(107, 'Procurar', 14, 'sem mollis dui, in sodales elit erat', 0, 6),
(108, 'Gravata Sanduíche', 20, 'iaculis quis, pede. Praesent eu dui. Cum sociis', 0, 6),
(109, 'Advogado Aeróbica', 14, 'egestas lacinia. Sed congue, elit sed consequat auctor,', 0, 7),
(110, 'Guincho Formal Desejo', 9, 'malesuada vel,', 0, 6),
(111, 'Ruga', 3, 'Donec dignissim magna a tortor. Nunc commodo', 0, 8),
(112, 'Lenha Asphyxiate Felicidade', 4, 'et magnis dis parturient', 0, 5),
(113, 'Lago Advogado', 17, 'nisi a odio', 0, 8),
(114, 'Almofada', 6, 'adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras', 0, 7),
(115, 'Etiqueta Adoçante', 13, 'sem magna', 0, 7),
(116, 'Sardinha Buracos Lago', 11, 'vel lectus. Cum sociis natoque', 0, 5),
(117, 'Nero', 18, 'Donec felis orci,', 0, 6),
(118, 'Conquistar Diagonal Lenha', 10, 'fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum.', 0, 7),
(119, 'Almofada', 12, 'a, auctor non, feugiat nec, diam. Duis mi enim,', 0, 5),
(120, 'Livre Queimar', 7, 'Nam consequat dolor vitae dolor.', 0, 7),
(121, 'Desaparecer Deportar', 10, 'arcu. Nunc mauris. Morbi', 0, 7),
(122, 'Armadura Hipnotizar', 16, 'dignissim lacus. Aliquam rutrum', 0, 7),
(123, 'Construir Guincho', 2, 'rutrum magna.', 0, 6),
(124, 'Porca', 14, 'magna. Lorem ipsum dolor sit amet,', 0, 7),
(125, 'Face Nero', 14, 'posuere cubilia Curae', 0, 6),
(126, 'Procurar Noviço Almofada', 13, 'in faucibus orci luctus et', 0, 6),
(127, 'Social', 2, 'dictum cursus. Nunc mauris elit, dictum', 0, 7),
(128, 'Adoçante', 18, 'mauris,', 0, 7),
(129, 'Armadura', 4, 'Sed eget lacus. Mauris non dui nec urna suscipit', 0, 8),
(130, 'Fantasma Funda', 5, 'Sed eget lacus. Mauris non dui nec urna suscipit nonummy.', 0, 6),
(131, 'Formal Desejo', 13, 'In scelerisque scelerisque dui. Suspendisse ac', 0, 7),
(132, 'Ruga', 2, 'libero. Proin', 0, 7),
(133, 'Látex Estreito', 14, 'nec enim. Nunc ut erat. Sed nunc est,', 0, 7),
(134, 'Medida Meatball', 12, 'arcu. Curabitur ut odio', 0, 6),
(135, 'Totem Atlas Porca', 19, 'interdum. Sed auctor odio a purus. Duis elementum,', 0, 5),
(136, 'Adoçante Social', 5, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames', 0, 5),
(137, 'Adoçante Social', 5, 'Phasellus ornare. Fusce mollis. Duis sit', 0, 7),
(138, 'Temperatura Investigador', 10, 'quam. Pellentesque habitant', 0, 6),
(139, 'Adoçante Social', 11, 'Mauris vel', 0, 7),
(140, 'Assento Hora', 19, 'Fusce mi lorem,', 0, 5),
(141, 'Falar Criatura', 13, 'Nullam enim. Sed nulla ante, iaculis nec,', 0, 6),
(142, 'Noviço Almofada Etiqueta', 14, 'arcu. Vestibulum ut eros non enim', 0, 8),
(143, 'Nero Livre Queimar', 7, 'natoque penatibus et', 0, 7),
(144, 'Guincho Formal Desejo', 16, 'Aliquam auctor, velit', 0, 8),
(145, 'Livre', 19, 'mus. Donec dignissim magna a tortor.', 0, 8),
(146, 'Ruga Desaparecer', 4, 'montes, nascetur ridiculus', 0, 6),
(147, 'Tomar', 9, 'odio, auctor', 0, 7),
(148, 'Adoçante Social Sardinha', 13, 'nunc sed pede. Cum sociis natoque penatibus', 0, 6),
(149, 'Etiqueta', 3, 'lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam.', 0, 6),
(150, 'Respirar Armadura', 10, 'parturient montes,', 0, 7),
(151, 'Porca Látex', 5, 'ridiculus', 0, 7),
(152, 'Sanduíche Lavanderia Fantasma', 4, 'non ante bibendum ullamcorper.', 0, 7),
(153, 'Medida Meatball', 16, 'orci luctus et ultrices posuere cubilia Curae', 0, 7),
(154, 'Felicidade', 6, 'ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend', 0, 8),
(155, 'Galope Colo', 10, 'et nunc. Quisque ornare', 0, 6),
(156, 'Asphyxiate', 20, 'id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend', 0, 8),
(157, 'Gravata Sanduíche', 4, 'in lobortis tellus justo sit amet nulla. Donec non', 0, 8),
(158, 'Tomar Ruga', 19, 'Nunc lectus pede, ultrices a, auctor', 0, 5),
(159, 'Construir', 11, 'magna. Cras convallis convallis', 0, 5),
(160, 'Totem', 13, 'hendrerit id, ante. Nunc', 0, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `playlists`
--

DROP TABLE IF EXISTS `playlists`;
CREATE TABLE IF NOT EXISTS `playlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `publica` tinyint(1) NOT NULL DEFAULT '0',
  `quantidade` int(11) NOT NULL DEFAULT '0',
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `playlists`
--

INSERT INTO `playlists` (`id`, `nome`, `descricao`, `publica`, `quantidade`, `usuario_id`) VALUES
(1, 'Musicas Legais', 'Uma playlist com músicas legais', 1, 2, 1),
(2, 'Musicas Legais #2', 'Outra playlist com musicas legais', 1, 25, 1),
(3, 'Musicas Legais #3', 'Outra playlist com musicas legais', 1, 25, 1),
(4, 'Musicas Legais #4', 'Outra playlist com musicas legais', 1, 25, 1),
(5, 'enim. Nunc ut', 'lorem ipsum sodales purus,', 0, 16, 1),
(6, 'tincidunt pede', 'adipiscing, enim mi tempor', 0, 42, 1),
(7, 'tempor, est ac mattis', 'ut aliquam iaculis, lacus pede', 0, 11, 1),
(8, 'elit elit fermentum', 'ornare, facilisis eget, ipsum. Donec sollicitudin', 1, 41, 1),
(9, 'est ac', 'non justo. Proin', 1, 31, 1),
(10, 'lorem lorem, luctus', 'risus. Duis a mi fringilla mi', 1, 8, 1),
(11, 'orci, adipiscing non, luctus', 'elit erat vitae risus. Duis', 1, 39, 1),
(12, 'a, magna. Lorem', 'non, feugiat nec, diam.', 0, 29, 1),
(13, 'volutpat ornare, facilisis', 'elit sed consequat', 0, 6, 1),
(14, 'a nunc. In', 'nisi nibh lacinia', 0, 23, 1),
(15, 'Nulla aliquet. Proin velit.', 'Pellentesque tincidunt tempus risus. Donec', 1, 8, 1),
(16, 'arcu. Vivamus', 'gravida sagittis. Duis gravida. Praesent', 0, 1, 1),
(17, 'elit, dictum', 'Proin dolor. Nulla', 0, 41, 1),
(18, 'Donec egestas. Duis', 'arcu ac orci. Ut', 1, 21, 1),
(19, 'nec, leo.', 'elit pede, malesuada vel,', 0, 25, 1),
(20, 'tristique neque venenatis lacus.', 'Lorem ipsum dolor', 1, 18, 1),
(21, 'mauris blandit', 'Integer sem elit, pharetra ut,', 1, 25, 1),
(22, 'risus. Nunc ac', 'bibendum. Donec felis orci,', 0, 43, 1),
(23, 'bibendum. Donec felis orci,', 'ultrices. Vivamus rhoncus. Donec est.', 1, 4, 1),
(24, 'egestas ligula. Nullam', 'elit, pretium et, rutrum', 0, 30, 1),
(25, 'lectus rutrum urna,', 'Maecenas iaculis aliquet diam. Sed', 1, 32, 1),
(26, 'erat neque non', 'eu odio tristique pharetra.', 0, 36, 1),
(27, 'quis diam. Pellentesque', 'lorem, eget mollis lectus pede', 1, 41, 1),
(28, 'dictum magna. Ut', 'ac mattis velit justo nec', 0, 7, 1),
(29, 'nunc est, mollis', 'tempus eu, ligula. Aenean euismod mauris', 0, 29, 1),
(30, 'in consectetuer ipsum nunc', 'massa. Mauris vestibulum, neque sed dictum', 0, 43, 1),
(31, 'auctor non, feugiat', 'a neque. Nullam ut nisi', 1, 42, 1),
(32, 'ante bibendum ullamcorper.', 'mollis lectus pede', 0, 22, 1),
(33, 'sem molestie sodales. Mauris', 'laoreet, libero et tristique pellentesque,', 1, 2, 1),
(34, 'blandit enim consequat purus.', 'Mauris nulla. Integer urna. Vivamus', 1, 31, 1),
(35, 'enim diam vel arcu.', 'In tincidunt congue turpis.', 1, 20, 1),
(36, 'a odio', 'tempor bibendum. Donec felis', 0, 11, 1),
(37, 'fermentum metus. Aenean', 'dolor dapibus gravida. Aliquam', 0, 3, 1),
(38, 'eleifend. Cras', 'non, egestas a, dui. Cras', 1, 3, 1),
(39, 'sem ut dolor', 'Quisque imperdiet, erat nonummy ultricies ornare,', 0, 21, 1),
(40, 'libero at auctor', 'ac ipsum. Phasellus vitae mauris sit', 1, 11, 1),
(41, 'augue malesuada malesuada. Integer', 'Sed nulla ante, iaculis nec,', 0, 22, 1),
(42, 'Curae Donec tincidunt. Donec', 'Phasellus ornare. Fusce mollis. Duis', 0, 43, 1),
(43, 'purus sapien, gravida non,', 'sem. Nulla interdum. Curabitur', 1, 10, 1),
(44, 'ante bibendum ullamcorper. Duis', 'Nunc mauris. Morbi non sapien molestie', 1, 38, 1),
(45, 'et tristique', 'elementum at, egestas a,', 1, 23, 1),
(46, 'vestibulum massa rutrum magna.', 'Nullam vitae diam. Proin dolor. Nulla', 1, 21, 1),
(47, 'tortor at risus. Nunc', 'aliquet molestie tellus. Aenean egestas', 1, 38, 1),
(48, 'Integer vulputate, risus', 'Suspendisse ac metus vitae velit egestas', 1, 36, 1),
(49, 'Quisque ac libero', 'quis massa. Mauris', 1, 18, 1),
(50, 'eu, ligula. Aenean', 'consectetuer ipsum nunc id', 1, 21, 1),
(51, 'nisl. Quisque', 'pharetra nibh. Aliquam', 1, 7, 1),
(52, 'erat vel', 'eu neque pellentesque massa', 1, 33, 1),
(53, 'mauris eu', 'dolor, nonummy ac, feugiat non, lobortis', 1, 23, 1),
(54, 'dictum eu,', 'mi pede, nonummy ut, molestie', 1, 36, 1),
(55, 'Uma playlist muito do balacobaco', 'Essa descrição é muito legal pois mostra do que se trata a playlist do balacobaco eeeee', 0, 0, 1),
(56, 'teste', '123', 0, 0, 1),
(57, '321123', '123123', 1, 0, 1),
(58, '321123', '123123', 1, 0, 1),
(59, '123', '321', 0, 0, 1),
(60, 'teste', '123321', 1, 0, 1),
(61, '123123', '12312321', 1, 0, 1),
(62, '123', '321', 0, 0, 1),
(63, 'nn', 'nnn', 1, 0, 1),
(64, '123', '123', 1, 0, 1),
(65, 'Minha primeira playlist', 'Sou um produtor que gosto de playlists', 1, 0, 3),
(66, 'JamillyList', 'Uma polaylist', 0, 0, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `playlists_musicas`
--

DROP TABLE IF EXISTS `playlists_musicas`;
CREATE TABLE IF NOT EXISTS `playlists_musicas` (
  `playlist_id` int(11) NOT NULL,
  `musica_id` int(11) NOT NULL,
  KEY `id_musica` (`musica_id`),
  KEY `id_playlist` (`playlist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `playlists_musicas`
--

INSERT INTO `playlists_musicas` (`playlist_id`, `musica_id`) VALUES
(1, 6),
(59, 1),
(59, 93),
(59, 91),
(66, 115),
(66, 135),
(59, 103);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` enum('P','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `senha`, `tipo`) VALUES
(1, 'Vinicius', '', 'vinnyzika2.0@gmail.com', '$2y$10$kHl8fdvirOHwwdxGoLqbI.1eF2g5fVn5CJyCRC5rh4KdqX/2n4oEq', 'N'),
(3, 'Vinicius(P)', '', 'vinicius.resende.cruz@gmail.com', '$2y$10$dyz/7gG1EtgvZBoELDSlLevYDj2KGwgNCmojhkdwH6g4b/l7B7kra', 'P'),
(4, 'Jamilly', '', 'jamilly.antonio1@estudante.ufla.br', '$2y$10$6sA4XosRFPJSGQiNbZi2ou184oLkN7zomb.STpI/JjpbBCAtV0O2u', 'N'),
(5, 'Produtor(5)', 'PPp', 'teste@teste.com', 'teste@teste.com', 'P'),
(6, 'Produtor(6)', 'PP', 'teste@teste.com', 'teste@teste.com', 'P'),
(7, 'Produtor(7)', 'PP', 'teste@teste.com', 'teste@teste.com', 'N'),
(8, 'Produtor(8)', 'PP', 'teste@teste.com', 'teste@teste.com', 'N');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `musicas`
--
ALTER TABLE `musicas`
  ADD CONSTRAINT `musico_id` FOREIGN KEY (`musico_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `playlists`
--
ALTER TABLE `playlists`
  ADD CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `playlists_musicas`
--
ALTER TABLE `playlists_musicas`
  ADD CONSTRAINT `id_musica` FOREIGN KEY (`musica_id`) REFERENCES `musicas` (`registro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_playlist` FOREIGN KEY (`playlist_id`) REFERENCES `playlists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
