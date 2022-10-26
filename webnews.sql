-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Out-2022 às 13:03
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webnews`
--
CREATE DATABASE IF NOT EXISTS `webnews` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webnews`;

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
(60, 'RevisÃ£o de path', 'Teste3', '2022-01-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec ultricies dolor, sed vehicula ligula. Donec enim nulla, molestie eu purus et, rutrum varius mauris. Pellentesque non lacus quis velit bibendum pulvinar quis iaculis nibh. Donec in convallis nunc. Donec luctus nisi sed vulputate interdum. Sed hendrerit, lorem a molestie venenatis, quam magna placerat augue, ac vulputate velit metus quis nisi. Morbi nec molestie ante. Mauris metus libero, scelerisque nec lorem vitae, dignissim aliquet metus. Phasellus quis pulvinar leo, eu interdum nibh. Vivamus id ornare felis. Suspendisse vel libero tellus. In at interdum leo. Praesent tincidunt semper quam. Suspendisse accumsan dolor vitae gravida pellentesque.', 'teste/image.png'),
(62, 'AnimaÃ§Ãµes de RespiraÃ§Ã£o', 'Teste3', '2020-03-14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec ultricies dolor, sed vehicula ligula. Donec enim nulla, molestie eu purus et, rutrum varius mauris. Pellentesque non lacus quis velit bibendum pulvinar quis iaculis nibh. Donec in convallis nunc. Donec luctus nisi sed vulputate interdum. Sed hendrerit, lorem a molestie venenatis, quam magna placerat augue, ac vulputate velit metus quis nisi. Morbi nec molestie ante. Mauris metus libero, scelerisque nec lorem vitae, dignissim aliquet metus. Phasellus quis pulvinar leo, eu interdum nibh. Vivamus id ornare felis. Suspendisse vel libero tellus. In at interdum leo. Praesent tincidunt semper quam. Suspendisse accumsan dolor vitae gravida pellentesque.', 'teste/image2.png'),
(61, 'Teste 2037322.11', 'Teste4', '2022-01-02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec ultricies dolor, sed vehicula ligula. Donec enim nulla, molestie eu purus et, rutrum varius mauris. Pellentesque non lacus quis velit bibendum pulvinar quis iaculis nibh. Donec in convallis nunc. Donec luctus nisi sed vulputate interdum. Sed hendrerit, lorem a molestie venenatis, quam magna placerat augue, ac vulputate velit metus quis nisi. Morbi nec molestie ante. Mauris metus libero, scelerisque nec lorem vitae, dignissim aliquet metus. Phasellus quis pulvinar leo, eu interdum nibh. Vivamus id ornare felis. Suspendisse vel libero tellus. In at interdum leo. Praesent tincidunt semper quam. Suspendisse accumsan dolor vitae gravida pellentesque.', 'teste/image.png'),
(59, 'NotÃ­cia Nova!', 'Teste3', '2021-12-23', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec ultricies dolor, sed vehicula ligula. Donec enim nulla, molestie eu purus et, rutrum varius mauris. Pellentesque non lacus quis velit bibendum pulvinar quis iaculis nibh. Donec in convallis nunc. Donec luctus nisi sed vulputate interdum. Sed hendrerit, lorem a molestie venenatis, quam magna placerat augue, ac vulputate velit metus quis nisi. Morbi nec molestie ante. Mauris metus libero, scelerisque nec lorem vitae, dignissim aliquet metus. Phasellus quis pulvinar leo, eu interdum nibh. Vivamus id ornare felis. Suspendisse vel libero tellus. In at interdum leo. Praesent tincidunt semper quam. Suspendisse accumsan dolor vitae gravida pellentesque.', 'teste/image2.png'),
(57, 'Nova AtualizaÃ§Ã£o - v.0.8.2', 'Teste2', '2021-12-12', 'Lorem ipsum sit amenooo, Lorem ipsum sit amenooo, Lorem ipsum sit amenooo, Lorem ipsum sit amenooo Lorem ipsum sit amenooo\r\nLorem ipsum sit amenooo', 'teste/image.png'),
(58, 'Nova AtualizaÃ§Ã£o - v.0.8.3', 'Teste4', '2021-12-22', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec ultricies dolor, sed vehicula ligula. Donec enim nulla, molestie eu purus et, rutrum varius mauris. Pellentesque non lacus quis velit bibendum pulvinar quis iaculis nibh. Donec in convallis nunc. Donec luctus nisi sed vulputate interdum. Sed hendrerit, lorem a molestie venenatis, quam magna placerat augue, ac vulputate velit metus quis nisi. Morbi nec molestie ante. Mauris metus libero, scelerisque nec lorem vitae, dignissim aliquet metus. Phasellus quis pulvinar leo, eu interdum nibh. Vivamus id ornare felis. Suspendisse vel libero tellus. In at interdum leo. Praesent tincidunt semper quam. Suspendisse accumsan dolor vitae gravida pellentesque.', 'teste/image2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
