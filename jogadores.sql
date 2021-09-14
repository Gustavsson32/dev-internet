-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Set-2021 às 00:28
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula_laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `idade` int(2) DEFAULT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  `clube` varchar(50) DEFAULT NULL,
  `situacao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogadores`
--

INSERT INTO `jogadores` (`id`, `nome`, `foto`, `idade`, `nacionalidade`, `clube`, `situacao`) VALUES
(61, 'Cristiano Ronaldo', 'zLE3X0BmOfk8vze9QVJRzinG9gMFk51AbfJ0wl1C.webp', 33, 'Portugues', 'Manchester Unite', 'Vigente'),
(62, 'Maicon', 'CP1hWTwDth7pnDrvBsVO5SqbXoIjNqwE89OzOen3.jpg', 35, 'Brasileiro', 'Gremio', 'Rescindido'),
(63, 'Messi', 'ekPac7ZSKTvIDfmJHYRroznOQkI4R9IQlyUWyOwG.jpg', 32, 'Argentino', 'PSG', 'Vigente'),
(64, 'Geromel', 'uKygLmsWkc8OjQd8YmBEROi6zja1EbA099u9EB7k.jpg', 34, 'Brasileiro', 'Gremio', 'Vigente'),
(68, 'Lewandovski', '83ovjlX9eV9q9wnr6P7Z3gdeh3l2MAxrybe5Xdcu.jpg', 34, 'Polones', 'Bayern de Munique', 'Vigente'),
(69, 'Mbappe', 'vHuBeCbdItA4qsxq1Abeco0PrZl0Vkr5D2Neh3J9.jpg', 22, 'Frances', 'PSG', 'Vigente');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogadores`
--
ALTER TABLE `jogadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
