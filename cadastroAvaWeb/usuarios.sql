-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.28
-- Versão do PHP: 5.3.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `preavaliacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `username` varchar(50) NOT NULL,
  `nome_completo` varchar(500) NOT NULL,
  `nome_exibido` varchar(50) NOT NULL,
  `entrada` varchar(10) NOT NULL,
  `cargo` varchar(250) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `nascimento` varchar(10) NOT NULL,
  `nome_mae` varchar(500) NOT NULL,
  `nome_pai` varchar(500) NOT NULL,
  `endereco` varchar(500) NOT NULL,
  `num_casa` varchar(7) NOT NULL,
  `bairro` varchar(250) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`username`, `nome_completo`, `nome_exibido`, `entrada`, `cargo`, `sexo`, `cpf`, `rg`, `nascimento`, `nome_mae`, `nome_pai`, `endereco`, `num_casa`, `bairro`, `cep`, `telefone`, `email`, `senha`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('armando', 'ertyertgerg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('fgdhdfghgfdh', 'fdghfdg', 'fdghfdg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
