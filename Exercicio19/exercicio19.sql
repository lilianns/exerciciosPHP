-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: database
-- Tempo de geração: 11/09/2023 às 16:05
-- Versão do servidor: 11.0.2-MariaDB-1:11.0.2+maria~ubu2204
-- Versão do PHP: 8.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `titans`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `exercicio19`
--

CREATE TABLE `exercicio19` (
  `id` int(11) NOT NULL,
  `matriz` varchar(520) NOT NULL,
  `diagonal` varchar(520) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `exercicio19`
--

INSERT INTO `exercicio19` (`id`, `matriz`, `diagonal`) VALUES
(1, 'Array', 'Array'),
(2, '2, 3, 3, 5, 2, 50, 1, 5, 6, 5, 6, 6, 2, 2, 5, 6, 1, 2, 5, 5', '6, 50, 50, 5, 10'),
(3, '2, 3, 3, 5, 2, 50, 1, 5, 6, 5, 6, 6, 2, 2, 5, 6, 1, 2, 5, 5', '6, 50, 50, 5, 10'),
(4, '2, 3, 3, 5, 2, 50, 1, 5, 6, 5, 6, 6, 2, 2, 5, 6, 1, 2, 5, 5', '6, 50, 50, 5, 10'),
(5, '2, 3, 3, 5, 2, 50, 1, 5, 6, 5, 6, 6, 2, 2, 5, 6, 1, 2, 5, 5', '6, 50, 50, 5, 10'),
(6, '1, 2, 3, 4, 6, 9, 10, 11, 15, 1, 1, 5, 3, 2, 11, 16, 12, 15, 14, 18', '1, 8, 1, 15, 20');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `exercicio19`
--
ALTER TABLE `exercicio19`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `exercicio19`
--
ALTER TABLE `exercicio19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
