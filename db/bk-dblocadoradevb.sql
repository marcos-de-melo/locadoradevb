-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/05/2024 às 15:59
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dblocadoradevb`
--
CREATE DATABASE IF NOT EXISTS `dblocadoradevb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dblocadoradevb`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcategorias`
--

CREATE TABLE `tbcategorias` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcategorias`
--

INSERT INTO `tbcategorias` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Ação'),
(2, 'Aventura'),
(3, 'Terror'),
(4, 'Comédia'),
(5, 'Ficção Ciêntifica'),
(6, 'Suspense'),
(7, 'Romance');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbclientes`
--

CREATE TABLE `tbclientes` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(45) NOT NULL,
  `emailCliente` varchar(45) NOT NULL,
  `telefoneCliente` varchar(45) NOT NULL,
  `cpfCliente` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbvideos`
--

CREATE TABLE `tbvideos` (
  `idVideo` int(11) NOT NULL,
  `tituloVideo` varchar(200) NOT NULL,
  `duracaoVideo` varchar(45) NOT NULL,
  `valorLocacaoVideo` decimal(10,2) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `statusVideo` int(11) NOT NULL DEFAULT 1 COMMENT '1 - Disponivel\n2 - Locado\n3 - Indisponivel'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbvideos`
--

INSERT INTO `tbvideos` (`idVideo`, `tituloVideo`, `duracaoVideo`, `valorLocacaoVideo`, `idCategoria`, `statusVideo`) VALUES
(1, 'Caça Fantasmoas', '2 horas', 10.00, 1, 1),
(2, 'Crepusculo', '3 horas', 15.00, 1, 1),
(3, 'Rambo 1', '1:30 horas', 5.00, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbcategorias`
--
ALTER TABLE `tbcategorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tbvideos`
--
ALTER TABLE `tbvideos`
  ADD PRIMARY KEY (`idVideo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcategorias`
--
ALTER TABLE `tbcategorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbvideos`
--
ALTER TABLE `tbvideos`
  MODIFY `idVideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
