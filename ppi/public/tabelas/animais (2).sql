-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Jun-2022 às 02:28
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
-- Estrutura da tabela `animais`
--

DROP TABLE IF EXISTS `animais`;
CREATE TABLE IF NOT EXISTS `animais` (
  `cd_animal` int(11) NOT NULL AUTO_INCREMENT,
  `ds_nome_animal` varchar(120) NOT NULL,
  `ds_raca` varchar(120) NOT NULL,
  `ds_cor` varchar(90) NOT NULL,
  `ds_sexo` varchar(1) NOT NULL,
  `ds_nome_proprietario` varchar(340) DEFAULT NULL,
  `nr_cpf_proprietario` varchar(14) DEFAULT NULL,
  `ds_endereco` varchar(300) DEFAULT NULL,
  `nr_telefone` int(13) DEFAULT NULL,
  `ds_observacoes` mediumtext,
  `cd_carteira_vacinacao` int(11) DEFAULT NULL,
  `x_ativo` tinyint(1) NOT NULL DEFAULT '1',
  `x_castrado` tinyint(1) NOT NULL DEFAULT '0',
  `cd_status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `dt_adocao` date DEFAULT NULL,
  `dt_encontrado` date DEFAULT NULL,
  `dt_morto` date DEFAULT NULL,
  `dt_castrado` date DEFAULT NULL,
  PRIMARY KEY (`cd_animal`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`cd_animal`, `ds_nome_animal`, `ds_raca`, `ds_cor`, `ds_sexo`, `ds_nome_proprietario`, `nr_cpf_proprietario`, `ds_endereco`, `nr_telefone`, `ds_observacoes`, `cd_carteira_vacinacao`, `x_ativo`, `x_castrado`, `cd_status`, `created_at`, `updated_at`, `deleted_at`, `dt_adocao`, `dt_encontrado`, `dt_morto`, `dt_castrado`) VALUES
(1, 'PRETINHA', 'Rottweiler', 'Preta', 'F', 'Gabriel Dessbesell', '054302102835', 'Rua Argentina Nº103 Zona Norte', 991838588, 'Foi Machucada a patinha', 0, 1, 1, 3, '2022-06-15 19:46:23', NULL, NULL, '2022-06-01', NULL, NULL, NULL),
(2, 'LAIKA', 'LABRADOR', 'Preto', 'F', 'Nicolas Morche', '0320158025', 'Bairro Centro Panambi RS', 991578927, 'Foi encontrado perdida no centro da cidade de Panambi RS', 2147483647, 1, 1, 3, '2022-06-15 19:52:22', NULL, NULL, NULL, '2022-06-04', NULL, '2022-06-04'),
(3, 'BLACK', 'LABRADOR', 'Marrom', 'M', 'Gabriel Dessbesell', '0320142536', 'Rua Argentina Zona Norte 103', 991838588, NULL, 217035241, 1, 1, 3, '2022-06-15 19:55:49', NULL, NULL, NULL, NULL, NULL, '2022-06-06'),
(4, 'MONSTRÃO', 'PINSCHER', 'Marrom', 'M', 'Gabriel Tavares', '0320157835', 'Rua Barrão do Riu Branco', 996806827, NULL, NULL, 1, 1, 1, '2022-06-15 19:59:38', NULL, NULL, '2022-06-09', NULL, NULL, '2022-06-10'),
(5, ' AURORA', 'PASTOR ALEMÃO', 'Preto e Marrom', 'M', 'Alef', '0142302574', 'Jardim Paraguai', 997282822, NULL, NULL, 1, 0, 3, '2022-06-15 20:05:33', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'LUMA ', 'SCHAWSCHAW', 'Marrom', 'F', 'Bianca', '2534012', 'Rua Argentina Zona Norte', 991842510, 'Foi morte por Atropelamento', 2147483647, 1, 0, 2, '2022-06-15 20:08:48', NULL, NULL, NULL, NULL, '2022-06-15', NULL),
(7, 'ZEUS', 'DOBERMAN', 'Preto', 'M', 'Marcos', '2245201730', 'Bairro Arco Iris ', 99234969, 'Foi encotrado', NULL, 1, 1, 3, '2022-06-15 20:14:02', NULL, NULL, NULL, '2022-06-15', NULL, '2022-06-16'),
(8, 'JADE', 'PITBULL', 'Marrom', 'F', 'Fernanda', '254253007', 'Bairro Pavão', 991520614, 'Foi encontrada', NULL, 1, 1, 3, '2022-06-15 20:18:34', NULL, NULL, NULL, '2022-06-18', NULL, NULL),
(9, 'FOFINHO', 'VIRA LATA', 'Preto e Branco', 'M', 'Gabriel Dessbesell', NULL, 'Rua Argentina Zona Norte', 991838588, 'Foi encontrado ', NULL, 1, 1, 3, '2022-06-15 20:20:44', NULL, NULL, NULL, '2022-06-19', NULL, '2022-06-20'),
(10, 'LILICA', 'BOXER', 'Marrom e Branco', 'F', 'Anita', '217802560', 'Curitiba Paraná', NULL, 'Foi Morta por alguma cirurgia', 2147483647, 1, 0, 2, '2022-06-15 20:25:04', NULL, NULL, NULL, NULL, '2022-06-15', NULL),
(11, 'BIDU', 'SALCHICHA', 'Preto', 'M', 'Laini', '0320142536', 'Centro de Panambi RS', 981145018, 'Morreu de velho', NULL, 1, 1, 2, '2022-06-15 20:27:28', NULL, NULL, NULL, NULL, '2022-06-20', '2022-06-15'),
(12, 'DODY', 'PASTOR ALEMÃO', 'Marrom e Preto', 'M', 'Gabriel Dessbesell', '0320158025', 'Rua Argentina Zona Norte', 991838588, NULL, 2147483647, 1, 1, 3, '2022-06-15 20:29:34', NULL, NULL, NULL, NULL, NULL, '2022-06-30'),
(19, 'TEste', 'teste', 'cinzento', 'M', '', '', '', NULL, NULL, NULL, 1, 0, 1, '2022-06-23 21:27:18', NULL, '2022-06-23 20:06:21', NULL, NULL, NULL, NULL),
(22, 'Max', 'Husky Siberiano', 'cinzento', 'M', 'Nicolas', '5345345345345', 'B. Italiana', NULL, NULL, NULL, 1, 0, 1, '2022-06-23 22:26:55', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
