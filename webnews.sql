-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Out-2022 às 22:28
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
(68, 'Sistemas de NÃ­veis', 'Game Design', '2022-06-11', ' Existem vÃ¡rias estruturas que tornam os jogos tÃ£o interessantes para o pÃºblico, e os sistemas de nÃ­veis sÃ£o um deles, tendo surgido primeiro nos RPGs, mas hoje estÃ¡ presente em toda a industria, porÃ©m pode se tornar uma grande fonte de ansiedade, por isso... ', 'src/img/game_design.jpg'),
(69, 'Interface de RespiraÃ§Ã£o - Um desafio com Canvas', 'Desenvolvimento', '2022-09-30', '  Mauris nec purus ipsum. Pellentesque lacinia, sapien vel fermentum commodo, neque orci suscipit metus, at vulputate tortor est a dui. Ut ut nibh eu eros vehicula lobortis in ac tortor. Suspendisse eget sodales nunc. Vivamus accumsan id lacus et consequat. Morbi ut cursus justo. Aliquam erat volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit purus in nisl condimentum, sed varius dolor viverra. Vestibulum rhoncus ultrices neque, eu congue ipsum efficitur id. Morbi dictum dui arcu, a dignissim nulla hendrerit vel. Maecenas at iaculis mi, ut tempor est.  ', 'src/img/keyboard.jpg'),
(70, 'Novo formulÃ¡rio de consulta', 'CorreÃ§Ã£o de Bugs', '2022-06-09', '  Mauris nec purus ipsum. Pellentesque lacinia, sapien vel fermentum commodo, neque orci suscipit metus, at vulputate tortor est a dui. Ut ut nibh eu eros vehicula lobortis in ac tortor. Suspendisse eget sodales nunc. Vivamus accumsan id lacus et consequat.  ', 'src/img/bug2.jpg'),
(71, 'Parceria com a ONG Future Home', 'Outros', '2022-10-31', ' Ut ut nibh eu eros vehicula lobortis in ac tortor. Suspendisse eget sodales nunc. Vivamus accumsan id lacus et consequat. Morbi ut cursus justo. Aliquam erat volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit purus in nisl condimentum, sed varius dolor viverra. Vestibulum rhoncus ultrices neque, eu congue ipsum efficitur id. Morbi dictum dui arcu, a dignissim nulla hendrerit vel. Maecenas at iaculis mi, ut tempor est. ', 'src/img/kanban.jpg'),
(72, 'AnimaÃ§Ãµes de RespiraÃ§Ã£o', 'Game Design', '2022-10-20', ' Pellentesque ex leo, iaculis quis laoreet nec, faucibus eget mi. Nullam elementum ligula eu dui vestibulum ultrices. Nunc vitae turpis pharetra, elementum dui eu, suscipit justo. ', 'src/img/game.jpg'),
(73, 'Interface de UsuÃ¡rio', 'Desenvolvimento', '2022-08-09', 'Exemplo', 'src/img/code.jpg'),
(63, 'Personagem - Guia de RespiraÃ§Ã£o', 'Planejamento', '2022-10-18', '  Qual a melhor forma de se ensinar alguÃ©m alguma coisa do que tendo outra \"pessoa\" para guiÃ¡-la sobre o que fazer ou nÃ£o? Pois foi pensando nisso que nÃ³s estamos planejando um personagem novo para o Breath, eprecisamos...  ', 'src/img/idea.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
