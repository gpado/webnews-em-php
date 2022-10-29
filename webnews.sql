-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Out-2022 às 21:13
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `webnews`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(60) NOT NULL,
  `Categoria` varchar(60) NOT NULL,
  `Data_Publicacao` date NOT NULL,
  `Conteudo` text NOT NULL,
  `Imagem` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `Titulo`, `Categoria`, `Data_Publicacao`, `Conteudo`, `Imagem`) VALUES
(63, 'Tiroteio em Paraisópolis', 'Teste1', '2022-10-19', 'A princípio, ele usou a expressão “fomos atacados por criminosos”, mas, em seguida, afirmou que a motivação dos disparos não estava elucidada e que poderia se tratar de uma “questão', 'src/img/img1.jpg'),
(64, 'BC divulga ranking dos 15 melhores', 'Teste2', '2022-10-29', 'A escolha da melhor instituição financeira deve levar em conta vários quesitos, como a satisfação dos clientes, o atendimento, a confiança, assessoria financeira e diversos outros.', 'src/img/img2.jpg'),
(65, 'Piracicaba aponta falta de médicos', 'Teste3', '2022-10-29', 'A Prefeitura de Piracicaba (SP) anunciou nesta sexta-feira (28) a abertura de um edital para compra direta de plantões médicos para Urgência e Emergência na cidade. ', 'src/img/img3.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
