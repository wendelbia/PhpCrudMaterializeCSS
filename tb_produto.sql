-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2017 às 00:52
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_produto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `valor_produto` varchar(100) NOT NULL,
  `descricao_produto` varchar(100) NOT NULL,
  `data_produto` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`id`, `nome_produto`, `valor_produto`, `descricao_produto`, `data_produto`) VALUES
(1, 'ventilador philco htdd3', '120,00', 'v', '2017-05-29 02:21:12'),
(53, 'celular sansung galax 5', '2500', 'cor branca, preta, fone, carregador, manual e capa', '2017-06-05 18:36:44'),
(76, 'pneu continental', '8000', 'pneu com frizo', '2017-06-02 22:38:11'),
(86, 'ar condicionado lg', '800', '1500watts', '2017-06-04 15:52:51'),
(87, 'liquidificador arno', '300', 'vermelho/branco/preto', '2017-06-04 16:02:13'),
(88, 'smart phone s5', '600,00', 'duos chip android 5.1 screen 5" 16bg', '2017-06-05 19:25:27'),
(89, 'smartphone moto g4 ', '698,88', 'play dtv colors dual chip', '2017-06-05 19:26:18'),
(90, 'smartphone samsung galaxy j7', '849,99', 'android 5.1" 16gb 4g cÃ¢mera 13mp', '2017-06-05 19:27:19'),
(91, 'smart tv led 32" samsung 32j4300 hd', '1.219,00', 'com conversor digital 2 HDMI 1 USB wifi', '2017-06-05 19:29:23'),
(92, 'noteboock samsung essentials e34', '2.039,00', 'intel core i3 4gb 1tb tela led full hd 15,6', '2017-06-05 19:30:30'),
(93, 'iPhone 7 plus 32gb ouro rosa screen', '4.099,00', 'retina hd 5,5" 3d touch cam doblou', '2017-06-05 19:31:35'),
(94, 'robÃ´ aspirador de pÃ³ ', '1.200,99', 'limpeza programÃ¡vel com controle', '2017-06-05 19:32:18'),
(95, 'hoverboard smart balance scooter', '995,00', 'mymax bateria samsung - colorful bivolt', '2017-06-05 19:33:09'),
(96, 'iPad Pro Cellular 256 wi-fi', '9.499,99', '4g tela retina 12,9" dourado - apple', '2017-06-05 19:34:16'),
(97, 'relÃ³gio para corrida tomtom spark', '1.624,99', 'cardio unisses gps com monitor', '2017-06-05 19:34:59'),
(98, 'fone de ouvido over ear shb4000', '127,90', 'c/ bluetooth branco - philips', '2017-06-05 19:35:53'),
(99, 'fechadura digital ezon shs-1321', '689,90', 'touchscreen, com senha, rfid card', '2017-06-05 19:36:45'),
(100, 'monitor cardÃ­aco suunto m2 women', '419,99', 'fuchsia box - suunto', '2017-06-05 19:37:24'),
(101, 'lampada led colorido controle ', '170,90', 'inteligente 3 em 1 bluetooth', '2017-06-05 19:38:03'),
(102, 'console playstation 4 slim cuh2016a', '1.219,90', 'c/ 500gb de capacidade - preto', '2017-06-05 19:38:57'),
(103, 'pulseira inteligente sony smartband preto', '249,90', 'pulseira inteligente sony smartband preto p/g', '2017-06-05 19:39:53'),
(104, 'fone de ouvido over ear shb4000', '127,90', 'bluetooth branco - philips fone de ouvido over ear', '2017-06-05 19:40:58'),
(105, 'relÃ³gio masculino mondaine', '139,99', 'analÃ³gico com calendÃ¡rio esportivo', '2017-06-05 19:42:34'),
(106, 'hd externo portÃ¡til wd', '239,00', 'elements 1tb usb 3.0', '2017-06-05 19:43:19'),
(107, 'hd externo portÃ¡til wd', '239,00', 'elements 1tb usb 3.0', '2017-06-05 19:43:25'),
(108, 'multifuncional hp', '201,74', 'deskjet ink advantege', '2017-06-05 19:44:04'),
(109, 'cervejeira consul ', '1.817,05', '82 litros czd12', '2017-06-05 19:45:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
