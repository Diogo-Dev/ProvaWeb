-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Jun-2019 às 01:46
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybooks`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_genero` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id`, `nome_genero`) VALUES
(1, 'Infanto-Juvenil'),
(3, 'romance');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

DROP TABLE IF EXISTS `livros`;
CREATE TABLE IF NOT EXISTS `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_livro` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `genero` int(10) NOT NULL,
  `imagem` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `genero_fk` (`genero`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `nome_livro`, `autor`, `genero`, `imagem`) VALUES
(6, 'Em Busca do Amuleto de Aloni', 'Eduardo Cilto', 1, 'imagens/infanto2.jpg'),
(7, 'Traços', 'E.Samuel', 1, 'imagens/infanto1'),
(11, 'O Resgate de Althea', 'E. Samuel', 1, 'imagens/infanto3.jpg'),
(12, 'Todas as coisas belas', 'Eduardo Cilto', 3, 'imagens/livro2.jpg'),
(13, 'Os Ungidos', 'Ellen G. White', 3, 'http://imagens.lelivros.love/2019/02/Baixar-Livro-Os-Ungidos-Conflito-Vol-02-Ellen-G.-White-em-Pdf-Epub-e-Mobi-ou-Ler-Online-370x555.jpg'),
(14, 'Os Ungidos', 'Ellen G. White', 3, 'http://imagens.lelivros.love/2019/02/Baixar-Livro-Os-Ungidos-Conflito-Vol-02-Ellen-G.-White-em-Pdf-Epub-e-Mobi-ou-Ler-Online-370x555.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `int` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) NOT NULL,
  `senha` varchar(8) NOT NULL,
  PRIMARY KEY (`int`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
