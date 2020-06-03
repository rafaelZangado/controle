-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 03/06/2020 às 18:54
-- Versão do servidor: 10.1.13-MariaDB
-- Versão do PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `codigo` varchar(100) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `preco` tinyint(1) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `modifi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cadastro`
--

INSERT INTO `cadastro` (`codigo`, `nome_produto`, `preco`, `descricao`, `categoria`, `id`, `modifi`) VALUES
('teste1', 'teste2', 0, 'teste4', 'test6', 3, NULL),
('outro teste', 'outro teste ', 0, 'outro teste ', '11111', 4, NULL),
('1', '2', 3, '4', '5', 5, NULL),
('edita', 'editando', 0, 'edita descricao', 'edita categoria', 6, NULL),
('aaa', 'aaa', 0, 'aaa', 'aaaa', 7, NULL),
('', '', 0, '', '', 8, NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
