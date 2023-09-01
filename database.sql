-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Set-2023 às 00:27
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `aulaweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idCon` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensagem` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `idNot` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`idNot`, `titulo`, `descricao`) VALUES
(1, 'Cientistas alertam sobre os perigos do uso excessivo de dispositivos eletrônicos', 'Um novo estudo destaca os riscos à saúde associados ao uso prolongado de dispositivos eletrônicos e oferece orientações para reduzir os impactos negativos.'),
(4, 'Nova tecnologia de armazenamento promete revolucionar a indústria de eletrônicos', 'Uma empresa de tecnologia lançou um novo tipo de bateria de longa duração que poderia transformar a forma como usamos nossos dispositivos. '),
(5, 'Filme local ganha prêmio em festival internacional de cinema', 'Filme local ganha prêmio em festival internacional de cinemaFilme local ganha prêmio em festival internacional de cinemaFilme local ganha prêmio em festival internacional de cinemaFilme local ganha prêmio em festival internacional de cinemaFilme local ganha prêmio em festival internacional de cinemaFilme local ganha prêmio em festival internacional de cinemaFilme local ganha prêmio em festival internacional de cinemaFilme local ganha prêmio em festival internacional de cinemaFilme local ganha prêmio em festival internacional de cinema');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portfolio`
--

CREATE TABLE `portfolio` (
  `idPor` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idCon`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNot`);

--
-- Índices para tabela `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`idPor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `idCon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `idPor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;
