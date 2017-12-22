-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Out-2017 às 19:50
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `idade` int(11) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `comentario` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `nome`, `idade`, `pais`, `comentario`) VALUES
(1, 'edmundo', 25, 'Angola', 'fhfghfhf'),
(2, 'Ana Cleusia', 23, 'Angola', 'Ana Cleusia, estudante de ciÃªncia da computaÃ§Ã£o');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dados`
--
ALTER TABLE `dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
