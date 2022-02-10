-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Fev-2022 às 03:25
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placar_futebol`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `placares`
--

DROP TABLE IF EXISTS `placares`;
CREATE TABLE IF NOT EXISTS `placares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posicao` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(150) NOT NULL,
  `pts` int(11) NOT NULL DEFAULT '0',
  `j` int(11) NOT NULL DEFAULT '0',
  `v` int(11) NOT NULL DEFAULT '0',
  `e` int(11) NOT NULL DEFAULT '0',
  `d` int(11) NOT NULL DEFAULT '0',
  `gp` int(11) NOT NULL DEFAULT '0',
  `gc` int(11) NOT NULL DEFAULT '0',
  `sg` int(11) NOT NULL DEFAULT '0',
  `logo` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `placares`
--

INSERT INTO `placares` (`id`, `posicao`, `nome`, `pts`, `j`, `v`, `e`, `d`, `gp`, `gc`, `sg`, `logo`) VALUES
(1, 0, 'Cruzeiro', 0, 0, 0, 0, 0, 0, 0, 0, ''),
(2, 0, 'Bahia', 0, 0, 0, 0, 0, 0, 0, 0, ''),
(3, 0, 'Atlético MG', 0, 0, 0, 0, 0, 0, 0, 0, ''),
(4, 0, 'Flamengo', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(5, 0, 'Palmeiras', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(6, 0, 'Botafogo', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(7, 0, 'Avaí', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(8, 0, 'Bragantino', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(9, 0, 'Goiás', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(10, 0, 'São Caetano', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(11, 0, 'Grêmio', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(12, 0, 'Náutico', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(13, 0, 'Santos', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(14, 0, 'São Paulo', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(15, 0, 'Guarani', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(16, 0, 'Gama', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(17, 0, 'Fortaleza', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(18, 0, 'Fluminense', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(19, 0, 'Vitória', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(20, 0, 'Vasco', 0, 0, 0, 0, 0, 0, 0, 0, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
