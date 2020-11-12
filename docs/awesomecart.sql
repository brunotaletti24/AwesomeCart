-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2020 às 11:01
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `awesomecart`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(232) NOT NULL,
  `description` varchar(232) NOT NULL,
  `percentage` int(3) NOT NULL,
  `code` varchar(232) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `percentage`, `code`, `photo`) VALUES
(2, 'Macbook air', 'The best notebook on the market', 50, 'APPLE50', 0x6d6163626f6f6b2d6169722d73696c7665722d73656c6563742d3230313831302e6a7067),
(3, 'Vx Case Pods', 'You never saw an earpod like that', 20, 'VXCP20', 0x7678706f64732e6a7067);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(232) NOT NULL,
  `last_name` varchar(232) NOT NULL,
  `username` varchar(232) NOT NULL,
  `email` varchar(232) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `password` varchar(232) NOT NULL,
  `access_level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `phone`, `password`, `access_level`) VALUES
(2, 'Bruno', 'Rodrigues Taletti de Oliveira', 'brunotaletti', 'brunotaletti@outlook.com', 71992753482, '730187b1ae2167e08f7c3067affede78', 1),
(5, 'Breno', 'Oliveira Melo', 'brenomelo.oliveira', 'brenooliveiramelo1@gmail.com', 71940028922, '5742dbc5ff093d61a8da364da66590b9', 1),
(6, 'Gabriel', 'Marcotti', 'gmarcotti', 'gabrielmarcotti@gmail.com', 71998756584, '523e236e1eae78084d0ba54c19226ca4', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
