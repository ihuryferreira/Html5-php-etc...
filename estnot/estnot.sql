-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 12-Nov-2020 às 00:18
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estnot`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `idaluno` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(12) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `email` varchar(40) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `turno` varchar(3) NOT NULL,
  `periodo` varchar(2) NOT NULL,
  `status` varchar(7) NOT NULL,
  PRIMARY KEY (`idaluno`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idaluno`, `matricula`, `nome`, `telefone`, `email`, `curso`, `turno`, `periodo`, `status`) VALUES
(1, '123456', 'Daniel Gomes de Oliveira', '(62)99310-7549', 'dangogyn@gmail.com', 'ADS', 'not', '8', 'ativo'),
(4, '987321654', 'Flavio Gomes', '(62)998754-987', 'flavio@uol.com.br', 'Design', 'mat', '8', 'ativo'),
(5, '369852147', 'Rejane Martins', '(62)93215-7854', 'rejane@geocities.net', 'Design', 'mat', '3', 'ativo'),
(6, '258796413', 'Maria dos Santos', '(11)7777-7777', 'maria_enf@terra.com', 'Enfermagem', 'not', '2', 'ativo'),
(7, '85214798745', 'Paulo Antonio', '(62)36548-7845', 'paulo-fisio@gmail.com', 'Fisioterapia', 'not', '7', 'ativo'),
(8, '364521789', 'Francisca Malafaia', '(62)98475-3215', 'drafran-adv@uol.com.br', 'Direito', 'not', '1', 'ativo'),
(9, '32165498756', 'Pedro Paulo', '(62)96548-2552', 'pp-@hotmail.com', 'ADS', 'not', '5', 'ativo'),
(10, '65478932165', 'Amanda Nascimento', '(62)99876-4215', 'amanda@gmail.com', 'ADS', 'not', '4', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `senha`) VALUES
(1, 'daniel', '698dc19d489c4e4db73e28a713eab07b'),
(2, 'dangogyn', 'c33367701511b4f6020ec61ded352059');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
