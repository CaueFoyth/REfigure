-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2023 às 17:25
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `refigure`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(45) NOT NULL,
  `cpf_cliente` varchar(45) NOT NULL,
  `email_cliente` varchar(45) NOT NULL,
  `celular_cliente` varchar(45) NOT NULL,
  `senha_cliente` varchar(100) NOT NULL,
  `admin` int(1) NOT NULL,
  `logado` int(1) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `numero_local` int(5) NOT NULL,
  `complementos` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `pais` text NOT NULL,
  `bairro` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cliente`, `nome_cliente`, `cpf_cliente`, `email_cliente`, `celular_cliente`, `senha_cliente`, `admin`, `logado`, `rua`, `numero_local`, `complementos`, `cidade`, `estado`, `pais`, `bairro`) VALUES
(1, 'Jônatas Rocha dos Santos', '113.719.458-13', 'jonatasarcaro943@gmail.com', '47 98919-0438', '12341234', 1, 0, '', 0, '', '', '', '', ''),
(2, 'Cauê Marchi Foyth', '125.413.329-12', 'foythcaue@gmail.com', '47 98823-0585', '12345678', 1, 0, 'Egon Tanner', 184, 'casa', 'Joinville', 'SC', 'Brasil', 'Petrópoils'),
(3, 'Lucas Giovani Fruck', '071.524.669-04', 'lucas.f.giovani@gmail.com', '47 98908-0795', '87654321', 1, 0, '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(45) NOT NULL,
  `preco_produto` decimal(5,2) NOT NULL,
  `qtd_produto` int(100) NOT NULL,
  `carrinho` int(1) NOT NULL,
  `preco_final` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome_produto`, `preco_produto`, `qtd_produto`, `carrinho`, `preco_final`) VALUES
(1, 'Urubu Preto e Branco', 70.00, 99, 0, 6930.00),
(2, 'Burguês Preto e Branco', 60.00, 1, 0, 60.00),
(3, 'Capitão Picanha', 130.00, 1, 0, 130.00),
(4, 'Mago Cósmico', 150.00, 1, 0, 150.00),
(5, 'Pirata Narigudo', 140.00, 1, 0, 140.00),
(6, 'Robo Calcinha', 69.69, 1, 0, 69.69),
(7, 'Dino Spino', 170.00, 1, 0, 170.00),
(8, 'Mamute Manny', 140.00, 1, 0, 140.00),
(9, 'Paulo Ruivo', 200.00, 1, 0, 200.00),
(10, 'Mumia Mommy', 97.00, 1, 0, 97.00),
(11, 'Tutubarão', 170.00, 1, 0, 170.00),
(12, 'Pinguim Gordo', 120.00, 1, 0, 120.00),
(13, 'Gato Chato', 120.00, 1, 0, 120.00),
(14, 'Monstro Larry', 130.00, 1, 0, 130.00),
(15, 'Ogro Chogro', 280.00, 1, 0, 280.00);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
