-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10/11/2023 às 14:53
-- Versão do servidor: 10.5.20-MariaDB
-- Versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id21341890_root`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `site1`
--

CREATE TABLE `site1` (
  `usuario` varchar(16) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `site1`
--

INSERT INTO `site1` (`usuario`, `senha`, `email`) VALUES
('tvost', '$2y$10$J0w7TZM1CQjjXNCW/YTnYOIqjIzmMvU1M2adS9mnJsK1HuCMPi.e6', 'otaviorodriguessantana64@gmail.com'),
('tvost', '$2y$10$hUVWLok0miyHczmAzfTK7uU1HsNHkYCoQ7/O/ahTKPva/SljmTQQy', 'otaviorodriguessantana64@gmail.com'),
('tvost', '$2y$10$ofwIgjZ83O4QCn5p/7Fk3usogd0XbfruLGg5fY4T4r8nw2MvCtcbm', 'otavio_rodrigues8@hotmail.com'),
('tvost', '$2y$10$zn3mW9RdAy71mWbyKbCAW.Wm6YqjGnufjCEZLpOVkDrMsJOyM85Zi', 'otaviorodriguessantana64@gmail.com'),
('tvost', '$2y$10$7EkfL2pJnCZ.xT2AHZIZZOzi/xnzbY3phl.GYxRu4X7hQ5SHq1n0a', 'otaviorodriguessantana64@gmail.com'),
('tvost', '$2y$10$g8n6MSBcMJxVkwEiJK4whuQWsUZFj2r/O/FmkMiR..dFgOi2Ullaq', 'otaviorodriguessantana64@gmail.com'),
('x', '$2y$10$HekZFx.h0znzrtDDAHL9w.FBvSCuPHOUs/GwaWud/jhfkKOIo87F6', 'x@hotmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
