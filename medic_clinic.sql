-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2022 às 13:27
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `medic_clinic`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `dataehora` datetime DEFAULT NULL,
  `stats` varchar(40) DEFAULT NULL,
  `descricao` varchar(40) DEFAULT NULL,
  `codConsulta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`dataehora`, `stats`, `descricao`, `codConsulta`) VALUES
('0000-00-00 00:00:00', '44', '44', 44),
('0000-00-00 00:00:00', '44', '33', 44),
('0000-00-00 00:00:00', '55', '55', 123),
('0000-00-00 00:00:00', '33', '33', 333),
('0000-00-00 00:00:00', '99', '99', 777);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clinic`
--

CREATE TABLE `clinic` (
  `cod_clinic` int(11) NOT NULL,
  `nome` varchar(128) NOT NULL,
  `cnpj` int(11) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `street` varchar(50) NOT NULL,
  `street_number` int(11) NOT NULL,
  `street_complement` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `open_hour` datetime NOT NULL,
  `close_hour` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clinic`
--

INSERT INTO `clinic` (`cod_clinic`, `nome`, `cnpj`, `email`, `street`, `street_number`, `street_complement`, `district`, `phone`, `open_hour`, `close_hour`) VALUES
(4, '444', 444, '444', '444', 444, '123', '444', '444', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '11', 11, '11', '111', 11, '11', '11', '11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '133', 33, '33', '33', 33, '33', '33', '33', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '44', 44, '44', '44', 44, '44', '44', '44', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `cargo` varchar(20) DEFAULT NULL,
  `PHD` varchar(20) DEFAULT NULL,
  `codmedico` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `cpf` int(20) DEFAULT NULL,
  `birthDate` int(14) DEFAULT NULL,
  `cttemerg` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE `prontuario` (
  `vacina` varchar(20) DEFAULT NULL,
  `examepedido` varchar(40) DEFAULT NULL,
  `examevisto` varchar(40) DEFAULT NULL,
  `cirurgia` varchar(40) DEFAULT NULL,
  `receita` varchar(100) DEFAULT NULL,
  `codProntuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `prontuario`
--

INSERT INTO `prontuario` (`vacina`, `examepedido`, `examevisto`, `cirurgia`, `receita`, `codProntuario`) VALUES
('11', '11', '11', '11', '11', 79),
('33', '33', '33', '33', '33', 80),
('77', '88', '88', '88', '88', 81);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`cod_clinic`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`codmedico`);

--
-- Índices para tabela `prontuario`
--
ALTER TABLE `prontuario`
  ADD PRIMARY KEY (`codProntuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clinic`
--
ALTER TABLE `clinic`
  MODIFY `cod_clinic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `codmedico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prontuario`
--
ALTER TABLE `prontuario`
  MODIFY `codProntuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
