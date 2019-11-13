-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Nov-2019 às 18:44
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crude`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `address`
--

CREATE TABLE `address` (
  `IDaddress` int(10) NOT NULL,
  `distrito` text NOT NULL,
  `cidade` text NOT NULL,
  `concelho` char(1) DEFAULT NULL,
  `rua` varchar(100) NOT NULL,
  `cp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `address`
--

INSERT INTO `address` (`IDaddress`, `distrito`, `cidade`, `concelho`, `rua`, `cp`) VALUES
(101, 'asfasdf', 'aaa', 'a', 'aaa', 'aa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `IDuser` int(10) NOT NULL,
  `nome` text NOT NULL,
  `hobbies` longtext DEFAULT NULL,
  `telemovel` char(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`IDuser`, `nome`, `hobbies`, `telemovel`, `email`, `password`) VALUES
(101, 'aa', 'aa', '324', 'a@gmail.com', 'a');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`IDaddress`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDuser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `IDaddress` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `IDuser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk_iduser` FOREIGN KEY (`IDaddress`) REFERENCES `user` (`IDuser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
