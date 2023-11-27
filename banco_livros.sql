-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/11/2023 às 00:25
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco livros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadcartao`
--

CREATE TABLE `cadcartao` (
  `NUMEROCARTAO` varchar(16) NOT NULL,
  `NOMECARTAO` varchar(70) NOT NULL,
  `CVV` int(11) NOT NULL,
  `DATAVALIDADE` date NOT NULL,
  `CPFPESSOA` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadlivro`
--

CREATE TABLE `cadlivro` (
  `nomeautor` varchar(100) NOT NULL,
  `nomelivro` varchar(100) NOT NULL,
  `editora` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `sinopse` varchar(100) NOT NULL,
  `CPFPESSOA` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadpessoa`
--

CREATE TABLE `cadpessoa` (
  `nomepessoa` varchar(70) NOT NULL,
  `CPF` varchar(15) NOT NULL,
  `datanasc` date NOT NULL,
  `email` varchar(70) NOT NULL,
  `senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `enderecopessoa`
--

CREATE TABLE `enderecopessoa` (
  `CIDADE` varchar(200) NOT NULL,
  `RUA` varchar(200) NOT NULL,
  `NUMERO` varchar(100) NOT NULL,
  `BAIRRO` varchar(200) NOT NULL,
  `CEP` varchar(100) NOT NULL,
  `COMPLEMENTO` varchar(200) NOT NULL,
  `CPFPESSOA` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadcartao`
--
ALTER TABLE `cadcartao` ADD FULLTEXT KEY `CPFPESSOA` (`CPFPESSOA`);

--
-- Índices de tabela `cadlivro`
--
ALTER TABLE `cadlivro`
  ADD KEY `CPFPESSOA` (`CPFPESSOA`);

--
-- Índices de tabela `cadpessoa`
--
ALTER TABLE `cadpessoa`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices de tabela `enderecopessoa`
--
ALTER TABLE `enderecopessoa`
  ADD KEY `CPFPESSOA` (`CPFPESSOA`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cadcartao`
--
ALTER TABLE `cadcartao`
  ADD CONSTRAINT `cadcartao_ibfk_1` FOREIGN KEY (`CPFPESSOA`) REFERENCES `cadpessoa` (`CPF`) ON DELETE CASCADE;

--
-- Restrições para tabelas `cadlivro`
--
ALTER TABLE `cadlivro`
  ADD CONSTRAINT `cadlivro_ibfk_1` FOREIGN KEY (`CPFPESSOA`) REFERENCES `cadpessoa` (`CPF`) ON DELETE CASCADE;

--
-- Restrições para tabelas `enderecopessoa`
--
ALTER TABLE `enderecopessoa`
  ADD CONSTRAINT `enderecopessoa_ibfk_1` FOREIGN KEY (`CPFPESSOA`) REFERENCES `cadpessoa` (`CPF`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
