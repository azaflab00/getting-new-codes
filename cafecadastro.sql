-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Out-2020 às 00:23
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cafecadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cafescad`
--

DROP TABLE IF EXISTS `cafescad`;
CREATE TABLE IF NOT EXISTS `cafescad` (
  `idcf` int(11) NOT NULL AUTO_INCREMENT,
  `nomecf` varchar(40) NOT NULL,
  `desccf` tinytext DEFAULT NULL,
  PRIMARY KEY (`idcf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cafescad`
--

INSERT INTO `cafescad` (`nomecf`, `desccf`) VALUES
('Espresso', 'O cafe espresso (ou expresso, dependendo da preferencia de escrita), um dos principais tipos de cafe, base de diversos outros. O nome espresso vem do italiano espremido, pressionado.'),
('Ristretto', 'O ristretto e uma versao mais concentrada do cafe espresso padrao. Entre os tipos de cafe mais populares, e o que apresenta maior intensidade. Basicamente, trata-se da extracao da mesma quantidade.'),
('Latte', 'O Cafe Latte nao e exatamente uma forma sofisticada de se tratar do cafe com leite. Em sua receita, utiliza-se leite vaporizado misturado a uma dose de cafe espresso, alem de 1 cm de espuma sobre ele.'),
('Cappuccino', 'Sua receita inclui uma dose de cafÃ© espresso misturado com leite vaporizado, espuma de leite e chocolate em pequenos pedacos ou em pao sobre a bebida.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
