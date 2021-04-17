-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 17/04/2021 às 16:09
-- Versão do servidor: 8.0.23
-- Versão do PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud_book`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id` int NOT NULL,
  `isbn` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editora` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edicao` int NOT NULL,
  `volume` int NOT NULL,
  `qtd_paginas` int NOT NULL,
  `data_pub` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id`, `isbn`, `categoria`, `titulo`, `autor`, `editora`, `edicao`, `volume`, `qtd_paginas`, `data_pub`) VALUES
(1, '8576084732', 'Programação', 'Use a cabeça!: Programação', 'Alta Books', 'Alta Books', 1, 2, 440, '2009-08-18'),
(2, '8575224050', 'Programação', 'Python Para Desenvolvedores', 'Novatec Editora', 'Novatec Editora', 1, 1, 320, '2014-10-03');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
