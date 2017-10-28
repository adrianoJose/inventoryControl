-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Out-2017 às 15:29
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpoo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_Categoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_Categoria`),
  KEY `id_Categoria` (`id_Categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_Categoria`, `nome_Categoria`) VALUES
(1, 'Alimenticio'),
(2, 'Eletronica'),
(3, 'Vivian'),
(4, 'Limpeza'),
(5, NULL),
(6, 'Hardware');

-- --------------------------------------------------------

--
-- Estrutura da tabela `codigo`
--

CREATE TABLE IF NOT EXISTS `codigo` (
  `cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `codigo`
--

INSERT INTO `codigo` (`cod`) VALUES
(4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada_produto`
--

CREATE TABLE IF NOT EXISTS `entrada_produto` (
  `id_Produto` int(11) NOT NULL,
  `nome_Produto` varchar(250) NOT NULL,
  `quantidade_Entrada` int(11) NOT NULL,
  `data_Entrada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `entrada_produto`
--

INSERT INTO `entrada_produto` (`id_Produto`, `nome_Produto`, `quantidade_Entrada`, `data_Entrada`) VALUES
(3, 'FeijÃ£o Tropeiro', 1131, '2016-11-27'),
(0, '', 10, '2016-12-09'),
(0, '', 10, '2016-12-09'),
(0, '', 10, '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id_Produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_Produto` varchar(250) NOT NULL,
  `preco_Unitario` decimal(10,2) NOT NULL,
  `quantidade_Produto` int(11) NOT NULL,
  `data_Cadastro` date NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_Produto`),
  KEY `categoria` (`categoria`),
  KEY `categoria_2` (`categoria`),
  KEY `categoria_3` (`categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_Produto`, `nome_Produto`, `preco_Unitario`, `quantidade_Produto`, `data_Cadastro`, `categoria`) VALUES
(4, 'Arroz', '3.80', 100, '2016-12-09', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida_produto`
--

CREATE TABLE IF NOT EXISTS `saida_produto` (
  `id_Produto` int(11) NOT NULL,
  `nome_Produto` varchar(250) NOT NULL,
  `quantidade_Saida` int(11) NOT NULL,
  `data_Saida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `ultimo_nome` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero_casa` int(11) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `ultimo_nome`, `telefone`, `celular`, `rua`, `numero_casa`, `complemento`, `bairro`, `cidade`, `cep`, `pais`, `email`, `senha`) VALUES
(1, 'Adriano', 'Silva', '988889898', '98778777787', 'Filomena Martins', 210, 'casa', 'parque olaria', 'Fortaleza', '62670-000', 'brasil', 'adriano@gmail.com', 'adriano'),
(2, 'Jair', 'Pedro', '988776655', '977665544', 'fulana de tal', 0, 'casa', 'esse dai msm', 'sga', '62670-000', 'Brasil', 'jair@gmail.como', 'qwe'),
(4, 'aasas', 'SAASDA', '11111', '213212312', 'ASAADSAS''', 999, '23EQDQ', 'AASDADSAS', 'QADSADQ', '3213213123', 'ASDASDASD', 'adr@gmail.com', 'qwe'),
(5, 'ALTINO', 'DANTAS', '98888888888', '9888888888', 'Manoel Carvalho, 247', 247, 'CASA', 'DDDD', 'Fortaleza', '62670-000', 'Brasil', 'altino@gmail.com', 'qwe123'),
(6, 'adriano', 'jose', '80878070870', '8208123871028', 'adriano', 1212, 'rua', 'pospa', 'asdasd', '8080801217', 'asdajdisl', 'adrianojose@gmail.com', 'adriano'),
(7, 'aaa', 'aaa', '3358877655555', '223444555666', 'aaaaaaa', 2344, 'aaaaaaa', 'aadddd', 'dfre', '62670-000', 'sse', 'admin@d', '123');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id_Categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
