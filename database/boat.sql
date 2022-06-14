-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jun-2022 às 22:48
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
-- Estrutura da tabela `boat`
--

CREATE TABLE `boat` (
  `id` int(11) NOT NULL,
  `img` varchar(400) NOT NULL,
  `name` varchar(90) NOT NULL,
  `price` varchar(40) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `ano_fab` int(4) NOT NULL,
  `tamanho` varchar(40) NOT NULL,
  `trip` varchar(50) NOT NULL,
  `local` varchar(60) NOT NULL,
  `comb` varchar(50) NOT NULL,
  `destaques` int(1) NOT NULL DEFAULT 0 COMMENT '0 Or 1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `boat`
--

INSERT INTO `boat` (`id`, `img`, `name`, `price`, `tipo`, `estado`, `ano_fab`, `tamanho`, `trip`, `local`, `comb`, `destaques`) VALUES
(2, 'https://paraty.com.br/wp-content/uploads/2022/01/barco-jessica-III-02-d.jpg', 'Barco', '38,700.00 R$', 'Cabinado', 'Usado', 2010, '12 pés', '7 Dia | 5 Noite', 'Ubatuba-Sp', 'Gasolina', 1),
(3, 'https://paraty.com.br/wp-content/uploads/2022/01/barco-jessica-III-02-d.jpg', 'Barco', '38,700.00 R$', 'Cabinado', 'Usado', 2010, '12 pés', '7 Dia | 5 Noite', 'Ubatuba-Sp', 'Gasolina', 0),
(4, 'https://www.bombarco.com.br/public/embarcacoes/6127ea1eb753cF0TO01.jpg', 'Barco Pesqueiro', '25,000.00 R$', 'Fibra', 'Usado', 2013, '22 Pés', 'Dia: 6 | Noite: 0', 'Angra dos Reis-Rj', 'Gasolina', 1),
(5, 'https://www.bombarco.com.br/public/embarcacoes/628fb117030253dd29217-81a1-4945-8a63-1489523fc0e0.jpg', 'FS Yachts 215', '350,000.00R$', 'Cabinada', 'Usado', 2018, '21 Pés', 'Dia: 8 | Noite: 2', 'Itajai-Sc', 'Gasolina', 0),
(6, 'https://www.bombarco.com.br/public/embarcacoes/628fb117030253dd29217-81a1-4945-8a63-1489523fc0e0.jpg', 'FS Yachts 215', '350,000.00R$', 'Cabinada', 'Usado', 2018, '21 Pés', 'Dia: 8 | Noite: 2', 'Itajai-Sc', 'Gasolina', 0),
(7, 'https://www.bombarco.com.br/public/embarcacoes/628fb117030253dd29217-81a1-4945-8a63-1489523fc0e0.jpg', 'FS Yachts 215', '350,000.00R$', 'Cabinada', 'Usado', 2018, '21 Pés', 'Dia: 8 | Noite: 2', 'Itajai-Sc', 'Gasolina', 1),
(8, 'https://www.bombarco.com.br/public/embarcacoes/628fb117030253dd29217-81a1-4945-8a63-1489523fc0e0.jpg', 'FS Yachts 215', '350,000.00R$', 'Cabinada', 'Usado', 2018, '21 Pés', 'Dia: 8 | Noite: 2', 'Itajai-Sc', 'Gasolina', 0),
(9, 'https://www.bombarco.com.br/public/embarcacoes/628fb117030253dd29217-81a1-4945-8a63-1489523fc0e0.jpg', 'FS Yachts 215', '350,000.00R$', 'Cabinada', 'Usado', 2018, '21 Pés', 'Dia: 8 | Noite: 2', 'Itajai-Sc', 'Gasolina', 0),
(10, 'https://www.bombarco.com.br/public/embarcacoes/628fb117030253dd29217-81a1-4945-8a63-1489523fc0e0.jpg', 'FS Yachts 215', '350,000.00R$', 'Cabinada', 'Usado', 2018, '21 Pés', 'Dia: 8 | Noite: 2', 'Itajai-Sc', 'Gasolina', 0),
(11, 'https://www.bombarco.com.br/public/embarcacoes/6127ea1eb753cF0TO01.jpg', 'Barco Pesqueiro', '25,000.00 R$', 'Fibra', 'Usado', 2013, '22 Pés', 'Dia: 6 | Noite: 0', 'Angra dos Reis-Rj', 'Gasolina', 0),
(12, 'https://www.bombarco.com.br/public/embarcacoes/6127ea1eb753cF0TO01.jpg', 'Barco Pesqueiro', '25,000.00 R$', 'Fibra', 'Usado', 2013, '22 Pés', 'Dia: 6 | Noite: 0', 'Angra dos Reis-Rj', 'Gasolina', 0),
(13, 'https://www.bombarco.com.br/public/embarcacoes/628fb117030253dd29217-81a1-4945-8a63-1489523fc0e0.jpg', 'FS Yachts 215', '350,000.00R$', 'Cabinada', 'Usado', 2018, '21 Pés', 'Dia: 8 | Noite: 2', 'Itajai-Sc', 'Gasolina', 0),
(14, 'kjhkjhkjh', 'khjkhjkhjkhk', 'jkhjkhkhk', 'jkhjkhjkhkj', 'kjhkjhjkh', 0, 'jhoiioju', 'huihiuhiuh', 'uihuihihhiu', 'uihuihiuhih', 0),
(15, 'kjhkjhkjh', 'khjkhjkhjkhk', 'jkhjkhkhk', 'jkhjkhjkhkj', 'kjhkjhjkh', 0, 'jhoiioju', 'huihiuhiuh', 'uihuihihhiu', 'uihuihiuhih', 0),
(16, 'iojoijiojoi', 'ijoj', 'ijj', 'jioj', 'ijojioj', 2010, 'jhoiioju', 'huihiuhiuh', 'uihuihihhiu', 'uihuihiuhih', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `boat`
--
ALTER TABLE `boat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `boat`
--
ALTER TABLE `boat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
