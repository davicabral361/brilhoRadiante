-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jun-2022 às 21:57
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdclinica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbagenda`
--

CREATE TABLE `tbagenda` (
  `idAgenda` int(11) NOT NULL,
  `dataagenda` date NOT NULL,
  `horaagenda` time NOT NULL,
  `codProfissional` int(11) NOT NULL,
  `codPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `tbagenda`:
--   `codProfissional`
--       `tbprofissional` -> `codProfissional`
--   `codPaciente`
--       `tbpaciente` -> `codPaciente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpaciente`
--

CREATE TABLE `tbpaciente` (
  `nomePaciente` varchar(40) NOT NULL,
  `cpfPaciente` char(14) NOT NULL,
  `rgPaciente` varchar(20) NOT NULL,
  `dtNascPaciente` date NOT NULL,
  `emailPaciente` varchar(40) NOT NULL,
  `telefonePaciente` varchar(40) NOT NULL,
  `celularPaciente` varchar(40) NOT NULL,
  `codPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `tbpaciente`:
--

--
-- Extraindo dados da tabela `tbpaciente`
--

INSERT INTO `tbpaciente` (`nomePaciente`, `cpfPaciente`, `rgPaciente`, `dtNascPaciente`, `emailPaciente`, `telefonePaciente`, `celularPaciente`, `codPaciente`) VALUES
('adsdsadasd', '11111111111', 'asdasdsad', '2022-06-14', 'mdsasdasda', '22132131', '213131231', 3),
('asasasd', '52807911803', 'fdsdfsdf', '2022-06-15', 'dsadsaasd', '213131', '2131231', 4),
('asasasd', '52807911803', 'fdsdfsdf', '2022-06-15', 'dsadsaasd', '213131', '2131231', 5),
('asasasd', '52807911803', 'fdsdfsdf', '2022-06-15', 'dsadsaasd', '213131', '2131231', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprofissional`
--

CREATE TABLE `tbprofissional` (
  `codProfissional` int(11) NOT NULL,
  `nomeProfissional` varchar(40) NOT NULL,
  `cpfProfissional` char(14) NOT NULL,
  `rgProfissional` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `tbprofissional`:
--

--
-- Extraindo dados da tabela `tbprofissional`
--

INSERT INTO `tbprofissional` (`codProfissional`, `nomeProfissional`, `cpfProfissional`, `rgProfissional`) VALUES
(1, 'AMrques', '11122233396', '11122233396'),
(2, 'adasda', '52807911803', '52807911803');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbagenda`
--
ALTER TABLE `tbagenda`
  ADD PRIMARY KEY (`idAgenda`),
  ADD KEY `codProfissional` (`codProfissional`),
  ADD KEY `codPaciente` (`codPaciente`);

--
-- Índices para tabela `tbpaciente`
--
ALTER TABLE `tbpaciente`
  ADD PRIMARY KEY (`codPaciente`);

--
-- Índices para tabela `tbprofissional`
--
ALTER TABLE `tbprofissional`
  ADD PRIMARY KEY (`codProfissional`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbagenda`
--
ALTER TABLE `tbagenda`
  MODIFY `idAgenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbpaciente`
--
ALTER TABLE `tbpaciente`
  MODIFY `codPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbprofissional`
--
ALTER TABLE `tbprofissional`
  MODIFY `codProfissional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbagenda`
--
ALTER TABLE `tbagenda`
  ADD CONSTRAINT `tbagenda_ibfk_1` FOREIGN KEY (`codProfissional`) REFERENCES `tbprofissional` (`codProfissional`),
  ADD CONSTRAINT `tbagenda_ibfk_2` FOREIGN KEY (`codPaciente`) REFERENCES `tbpaciente` (`codPaciente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
