-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/01/2024 às 21:34
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_dados`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome_cliente` varchar(100) DEFAULT NULL,
  `naturalidade` varchar(50) DEFAULT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `profissao` varchar(50) DEFAULT NULL,
  `estado_civil` varchar(50) NOT NULL,
  `identidade` varchar(20) DEFAULT NULL,
  `orgao_expedidor` varchar(20) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `numero_casa` int(11) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `ponto_referencia` varchar(100) DEFAULT NULL,
  `telefone_contato` varchar(15) DEFAULT NULL,
  `celular_contato` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome_cliente`, `naturalidade`, `nacionalidade`, `data_nascimento`, `profissao`, `estado_civil`, `identidade`, `orgao_expedidor`, `cpf`, `rua`, `cep`, `numero_casa`, `cidade`, `uf`, `ponto_referencia`, `telefone_contato`, `celular_contato`) VALUES
(7, 'VICTOR AUGUSTO TRAVASSSO DE JESUS', 'São luis - MA', 'Brasileiro', '2004-03-25', 'Tecnico de Informatica', 'Casado', '1234567890', 'SSP/MA', '123.456.789-0', 'Armando viera da silva', '65030-130', 6, 'São luis', 'MA', 'Associação de Japônes', '(98)32435341', '(98)989171539');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
