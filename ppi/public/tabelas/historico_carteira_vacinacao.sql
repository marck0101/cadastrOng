-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Jun-2022 às 02:29
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_ong`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_carteira_vacinacao`
--

DROP TABLE IF EXISTS `historico_carteira_vacinacao`;
CREATE TABLE IF NOT EXISTS `historico_carteira_vacinacao` (
  `cd_historico_vacinacao` int(11) NOT NULL AUTO_INCREMENT,
  `cd_carteira_vacinacao` int(11) NOT NULL,
  `ds_nome_medicamento` varchar(200) NOT NULL,
  `dt_vacinacao` date NOT NULL,
  `nr_peso` float NOT NULL,
  `ds_nome_responsavel` varchar(200) NOT NULL,
  `dt_proxima_vacinacao` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`cd_historico_vacinacao`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historico_carteira_vacinacao`
--

INSERT INTO `historico_carteira_vacinacao` (`cd_historico_vacinacao`, `cd_carteira_vacinacao`, `ds_nome_medicamento`, `dt_vacinacao`, `nr_peso`, `ds_nome_responsavel`, `dt_proxima_vacinacao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1231321, 'Pfizer', '2020-06-11', 110.55, 'Flavia', '2022-06-14', '2022-06-14 22:00:07', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
