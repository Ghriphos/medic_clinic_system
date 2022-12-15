-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Dez-2022 às 16:04
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
  `dataehora` varchar(20) DEFAULT NULL,
  `stats` varchar(20) DEFAULT NULL,
  `descricao` varchar(20) DEFAULT NULL,
  `codConsulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`dataehora`, `stats`, `descricao`, `codConsulta`) VALUES
('10/10 11:11', '11', '11', 11);

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
  `open_hour` time NOT NULL,
  `close_hour` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clinic`
--

INSERT INTO `clinic` (`cod_clinic`, `nome`, `cnpj`, `email`, `street`, `street_number`, `street_complement`, `district`, `phone`, `open_hour`, `close_hour`) VALUES
(11, 'LRV', 12345, 'lrvclinic', 'lrv', 11, '11', 'lrvv', '123456', '11:11:00', '12:12:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `cod_medico` int(11) NOT NULL,
  `nome` varchar(128) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `street` varchar(128) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `cttemerg` varchar(50) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `PHD` int(11) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `estadocivil` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `nome` varchar(30) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `cpf` int(20) DEFAULT NULL,
  `birthDate` varchar(20) DEFAULT NULL,
  `cttemerg` int(20) DEFAULT NULL,
  `estadocivil` varchar(20) DEFAULT NULL,
  `tiposanguineo` varchar(20) DEFAULT NULL,
  `alergia` varchar(20) DEFAULT NULL,
  `deficiencia` varchar(20) DEFAULT NULL,
  `convenio` varchar(20) DEFAULT NULL,
  `codPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE `prontuario` (
  `vacina` varchar(256) DEFAULT NULL,
  `examepedido` varchar(256) DEFAULT NULL,
  `examevisto` varchar(256) DEFAULT NULL,
  `cirurgia` varchar(256) DEFAULT NULL,
  `receita` varchar(256) DEFAULT NULL,
  `codProntuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recepcionista`
--

CREATE TABLE `recepcionista` (
  `nome` varchar(40) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `cpf` int(40) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `cttemerg` int(20) DEFAULT NULL,
  `estadocivil` varchar(20) DEFAULT NULL,
  `codRecepcionista` int(11) NOT NULL,
  `horarioInicio` time NOT NULL,
  `horarioFim` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `recepcionista`
--

INSERT INTO `recepcionista` (`nome`, `phone`, `street`, `cpf`, `birthDate`, `cttemerg`, `estadocivil`, `codRecepcionista`, `horarioInicio`, `horarioFim`) VALUES
('11', 11, '11', 11, '0000-00-00', 1234, '11', 11, '11:11:00', '12:12:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`codConsulta`);

--
-- Índices para tabela `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`cod_clinic`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`cod_medico`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`codPaciente`);

--
-- Índices para tabela `prontuario`
--
ALTER TABLE `prontuario`
  ADD PRIMARY KEY (`codProntuario`);

--
-- Índices para tabela `recepcionista`
--
ALTER TABLE `recepcionista`
  ADD PRIMARY KEY (`codRecepcionista`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clinic`
--
ALTER TABLE `clinic`
  MODIFY `cod_clinic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
