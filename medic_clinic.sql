-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Nov-2022 às 20:03
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

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
('44', '44', '44', 33);

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
(4, '123', 123, '123', '123', 123, '123', '123', '123', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`cod_medico`, `nome`, `phone`, `street`, `birthDate`, `cttemerg`, `cargo`, `PHD`, `cpf`, `estadocivil`) VALUES
(1, 'aa', '11', 'aa', '0000-00-00', '11', 'aa', 11, 11, 'aa'),
(2, 'a', '1', 'a', '0000-00-00', '1', 'a', 1, 1, 'a'),
(3, 'a', '1', 'a', '0000-00-00', '1', 'a', 1, 1, 'a'),
(12, '33', '33', '33', '0000-00-00', '33', '33', 33, 33, '33'),
(66, '77', '77', '77', '0000-00-00', '77', '77', 77, 77, '88'),
(88, '88', '688', '6688', '0000-00-00', '6688', '6688', 6688, 6688, '6688');

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

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`nome`, `phone`, `street`, `cpf`, `birthDate`, `cttemerg`, `estadocivil`, `tiposanguineo`, `alergia`, `deficiencia`, `convenio`, `codPaciente`) VALUES
('33', 33, '33', 33, '33', 33, '33', '33', '33', '33', '33', 11),
('33', 33, '33', 33, '33', 33, '33', '33', '33', '33', '33', 12),
('55', 55, '55', 55, '55', 55, '55', '55', '55', '55', '55', 44);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE `prontuario` (
  `nomePaciente` varchar(128) DEFAULT NULL,
  `nomeMedico` varchar(128) DEFAULT NULL,
  `dataHoraConsulta` datetime DEFAULT NULL,
  `tipoConsulta` varchar(128) DEFAULT NULL,
  `encaminhamento` text DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `codConsulta` int(11) NOT NULL
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
  `horario` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `recepcionista`
--

INSERT INTO `recepcionista` (`nome`, `phone`, `street`, `cpf`, `birthDate`, `cttemerg`, `estadocivil`, `codRecepcionista`, `horario`) VALUES
('11', 11, '11', 11, '0000-00-00', 11, '11', 33, 11),
('44', 44, '44', 44, '0000-00-00', 44, '44', 44, 44);

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
  ADD PRIMARY KEY (`codConsulta`);

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
  MODIFY `cod_clinic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `prontuario`
--
ALTER TABLE `prontuario`
  MODIFY `codConsulta` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
