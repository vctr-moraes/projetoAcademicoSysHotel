-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Out-2017 às 18:03
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acomodacao`
--

CREATE TABLE `acomodacao` (
  `idAcomodacao` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `numeroQuarto` int(11) NOT NULL,
  `qtdCamas` int(11) NOT NULL,
  `tvCabo` tinyint(4) NOT NULL
);

--
-- Extraindo dados da tabela `acomodacao`
--

INSERT INTO `acomodacao` (`idAcomodacao`, `descricao`, `numeroQuarto`, `qtdCamas`, `tvCabo`) VALUES
(1, 'Apartamentos', 1001, 1, 0),
(2, 'Suíte', 2001, 1, 1),
(3, 'Suíte', 2002, 1, 1),
(4, 'Suíte', 2003, 1, 1),
(5, 'Suíte', 2004, 1, 1),
(6, 'Suíte', 2005, 1, 1),
(7, 'Apartamento', 1002, 1, 0),
(8, 'Apartamento', 1003, 1, 0),
(9, 'Apartamento', 1004, 1, 0),
(10, 'Apartamento', 1005, 1, 0),
(11, 'Suíte Cobertura', 3001, 1, 1),
(12, 'Suíte Cobertura', 3002, 1, 1),
(13, 'Suíte Cobertura', 3003, 1, 1),
(14, 'Suíte Cobertura', 3004, 1, 1),
(15, 'Suíte Cobertura', 3005, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpf` bigint(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` int(8) DEFAULT NULL
);

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `endereco`, `telefone`, `email`, `senha`) VALUES
(0, '', '', '', '', 0),
(11111111111, 'Victor Alvarenga de Moraes', 'Rua Ana Borges Barbosa', '28999888060', 'victor.moraes@outlook.com.br', 22222222),
(22222222222, 'Jose Marcolano Moura', 'Rua Armelino JosÃ©', '2733436752', 'jose_marcola@hotmail.com', 33333333),
(33333333333, 'Maria Riscafaca da Silva Santos', 'Avenida Doutor Luiz Souza', '2835522345', 'mariazinha@gmail.com', 44444444),
(44444444444, 'Joaquim Antonio', 'Avenida Jose Miguel', '2835529865', 'joaca@hotmail.com', 55555555),
(55555555555, 'Maria Helena de Souza', 'Avenida Jorge Antonio dos Santos', '27998897653', 'm_helena@gmail.com', 66666666),
(66666666666, 'Marcelo Antonio da Costa', 'Rua dos Espanhois', '28990987598', 'marc_cos@outlook.com.br', 77777777);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `idReserva` int(11) NOT NULL,
  `data` date NOT NULL,
  `tipoPagamento` varchar(45) NOT NULL,
  `dataEntrada` date NOT NULL,
  `dataSaida` date NOT NULL,
  `valorTotal` float NOT NULL,
  `status` varchar(45) NOT NULL,
  `acomodacao` varchar(45) NOT NULL,
  `fkCliente` bigint(20) NOT NULL
);

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`idReserva`, `data`, `tipoPagamento`, `dataEntrada`, `dataSaida`, `valorTotal`, `status`, `acomodacao`, `fkCliente`) VALUES
(17, '2017-10-05', 'Especie', '2017-10-05', '2017-10-07', 400, 'Reservado', 'Apartamento', 33333333333),
(19, '2017-10-06', 'Especie', '2017-10-06', '2017-10-13', 2520, 'Reservado', 'Suite', 11111111111),
(23, '2017-10-06', 'Especie', '2017-10-06', '2017-10-13', 1400, 'Reservado', 'Apartamento', 22222222222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acomodacao`
--
ALTER TABLE `acomodacao`
  ADD PRIMARY KEY (`idAcomodacao`),
  ADD UNIQUE KEY `idAcomodação_UNIQUE` (`idAcomodacao`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idReserva`),
  ADD UNIQUE KEY `idReserva_UNIQUE` (`idReserva`),
  ADD KEY `fkCliente_idx` (`fkCliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acomodacao`
--
ALTER TABLE `acomodacao`
  MODIFY `idAcomodacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fkCliente` FOREIGN KEY (`fkCliente`) REFERENCES `cliente` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
