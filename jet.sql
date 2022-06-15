-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2022 às 18:29
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estudoapi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jet`
--

CREATE TABLE `jet` (
  `id` int(200) NOT NULL,
  `img` varchar(400) NOT NULL,
  `name` varchar(90) NOT NULL,
  `price` varchar(40) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `ano_fab` int(4) NOT NULL,
  `local` varchar(60) NOT NULL,
  `comb` varchar(50) NOT NULL,
  `destaques` int(1) NOT NULL DEFAULT 0 COMMENT '0 or 1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jet`
--

INSERT INTO `jet` (`id`, `img`, `name`, `price`, `tipo`, `estado`, `ano_fab`, `local`, `comb`, `destaques`) VALUES
(1, 'kljohhjhjkh', 'khuihuihiuhi', 'uhuihukhkj', 'jkhkjhklh', 'jkhjkhk', 989, 'uhlhjkhkjh', 'jkhklhljkh', 1),
(2, 'kjhlgkjhg', 'jhkgjkhjkh', 'gkjhg', 'jhkj', 'jhkgjh', 4322, 'klçjjkçlj', 'lkjjklçjç', 0),
(3, 'kljohhjhjkh', 'khuihuihiuhi', 'uhuihukhkj', 'jkhkjhklh', 'jkhjkhk', 989, 'uhlhjkhkjh', 'jkhklhljkh', 1),
(4, 'kjhlgkjhg', 'jhkgjkhjkh', 'gkjhg', 'jhkj', 'jhkgjh', 4322, 'klçjjkçlj', 'lkjjklçjç', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jet`
--
ALTER TABLE `jet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jet`
--
ALTER TABLE `jet`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
