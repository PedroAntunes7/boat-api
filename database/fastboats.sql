-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2022 às 04:02
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
-- Banco de dados: `fastboats`
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
(5, 'https://www.bombarco.com.br/public/embarcacoes/628fb117030253dd29217-81a1-4945-8a63-1489523fc0e0.jpg', 'FS Yachts 215', '350,000.00R$', 'Cabinada', 'Usado', 2018, '21 Pés', 'Dia: 8 | Noite: 2', 'Itajai-Sc', 'Gasolina', 0),
(13, 'https://www.bombarco.com.br/public/embarcacoes/628fb117030253dd29217-81a1-4945-8a63-1489523fc0e0.jpg', 'FS Yachts 215', '350,000.00R$', 'Cabinada', 'Usado', 2018, '21 Pés', 'Dia: 8 | Noite: 2', 'Itajai-Sc', 'Gasolina', 0),
(17, 'https://super.abril.com.br/wp-content/uploads/2021/02/SI_424_Oraculo_barcos_SITE.png', 'Barco Legal', 'R$ 30,000.00', 'Cabinado', 'Novo', 2022, '22 Pés', '10 Pessoas', 'Ubatuba-Sp', 'Disel', 0);

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
(5, 'https://super.abril.com.br/wp-content/uploads/2021/02/SI_424_Oraculo_barcos_SITE.png', 'JetSki Doido', 'R$ 30,000.00', 'Cabinado', 'Novo', 2022, 'Ubatuba-Sp', '', 0),
(6, 'https://www.boatshopping.com.br/wp-content/uploads/2019/09/kawasaki-jet-ski-2020-boat-shopping-5.jpg', 'JetSki Doido', 'R$ 30,000.00', '3 Pessoas', 'Seminovo', 2020, 'Varginha-Sp', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `praia`
--

CREATE TABLE `praia` (
  `id` int(11) NOT NULL,
  `foto` varchar(600) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `local` varchar(60) NOT NULL,
  `descricao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `praia`
--

INSERT INTO `praia` (`id`, `foto`, `nome`, `local`, `descricao`) VALUES
(1, 'iojoijoijiojojiojoijo', 'iojiojijijojojj', 'ygopiopioioio', 'iouiouiooijoijuuhuuu'),
(4, 'kjk', 'kjkj', 'kjk', 'kj'),
(5, 'https://img.freepik.com/fotos-gratis/bela-praia-tropical-e-mar-com-coqueiro-na-ilha-paradisiaca_74190-2206.jpg', 'Praia Da Lagoinha', 'Ubatuba-Sp', 'É uma praia super tranquila para banhistas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `photo` varchar(400) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `photo`, `title`, `price`) VALUES
(1, 'https://marcasdeprodutos.com.br/wp-content/uploads/2021/05/desktop-computer-500x500-1.jpg', 'PC Gamer Pro 7 Core', 'R$ 9.800,00'),
(2, 'https://marcasdeprodutos.com.br/wp-content/uploads/2021/05/desktop-computer-500x500-1.jpg', 'PC Gamer Pro 7 Core', 'R$ 9.800,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `token` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`id`, `id_user`, `token`, `description`, `create_at`) VALUES
(7, 14, 'f3cfe4041b8cc7b8c6df8a42da83be8e', 'Thunder Client (https://www.thunderclient.com)', '2022-05-17 15:59:26'),
(8, 13, '5e1afe787db7ed462895aca5badc7315', 'Thunder Client (https://www.thunderclient.com)', '2022-05-17 16:32:52'),
(9, 13, 'bebc0f5636237fd0260a28e83c3fb476', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', '2022-05-17 17:52:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `roles` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `roles`) VALUES
(11, 'Pedro', 'pedro@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', 'client'),
(13, 'Renan', 'renancavichi@gmail.com', 'bc53b5813c49642762c251319405523e399e6176', 'admin'),
(14, 'Maria', 'maria@gmail.com', 'bc53b5813c49642762c251319405523e399e6176', 'client'),
(15, 'arthur', 'arthur@gmail.com', 'arthur', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `boat`
--
ALTER TABLE `boat`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `jet`
--
ALTER TABLE `jet`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `praia`
--
ALTER TABLE `praia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`id_user`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `boat`
--
ALTER TABLE `boat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `jet`
--
ALTER TABLE `jet`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `praia`
--
ALTER TABLE `praia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
