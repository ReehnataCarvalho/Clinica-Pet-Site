-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Mar-2019 às 15:56
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinicapet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `img`, `titulo`, `texto`) VALUES
(7, 'banner-clinica-pet.png', 'Quem ama mais, cuida melhor.', 'Previna doenÃ§as do seu pet.'),
(8, 'banner-clinica-pet-2.png', 'Clinica Fada Madrinha Pet', 'Oftalmologia veterinÃ¡ria em SÃ£o Paulo.'),
(9, 'banner-clinica-pet-3.png', 'Atendimento com especialistas', 'Realizamos diversos procedimentos cirÃºrgicos.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `msg`) VALUES
(1, 'Renata', 'reehnataoliveira592@gmail.com', 'Teste de envio de Email.'),
(2, '\".$this->nome.\"', '\".$this->email.\"', '\".$this->msg.\"'),
(7, 'Renata Carvalho', 'reehnataoliveira592@gmail.com', 'Teste1 ok'),
(8, 'Renata Carvalho', 'reehnataoliveira592@gmail.com', 'sbdehh.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudosite`
--

CREATE TABLE `conteudosite` (
  `id` int(11) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `logoImg` varchar(250) NOT NULL,
  `logoAlt` varchar(150) NOT NULL,
  `direitosAut` varchar(250) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimento`
--

CREATE TABLE `depoimento` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `nomeCli` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `depoimento`
--

INSERT INTO `depoimento` (`id`, `texto`, `nomeCli`) VALUES
(20, 'redd', 'Renata Carvalhoredd'),
(21, 'teste 10:59', 'Renata Carvalho'),
(22, 'sdsdsd', 'Reeh teste 1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaque`
--

CREATE TABLE `destaque` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `texto` text NOT NULL,
  `linkUrl` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `destaque`
--

INSERT INTO `destaque` (`id`, `img`, `titulo`, `texto`, `linkUrl`) VALUES
(13, 'destque-clinica-pet-4.png', 'Destaque 01', 'Nonono noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon', 'index.php'),
(14, 'destque-clinica-pet-2.png', 'Destaque 02', 'Nonono noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon', 'index.php'),
(15, 'destque-clinica-pet-3.png', 'Destaque 03', 'Nonono noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon', 'index.php'),
(16, 'destque-clinica-pet.png', 'Destaque 04', 'Nonono noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon', 'index.php');

-- --------------------------------------------------------

--
-- Estrutura da tabela `redesocial`
--

CREATE TABLE `redesocial` (
  `id` int(11) NOT NULL,
  `linkFace` varchar(250) NOT NULL,
  `linkInsta` varchar(250) NOT NULL,
  `linkWhats` varchar(250) NOT NULL,
  `linkTwitter` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rodape`
--

CREATE TABLE `rodape` (
  `id` int(11) NOT NULL,
  `logoImg` varchar(250) NOT NULL,
  `logoAlt` varchar(150) NOT NULL,
  `texto` text NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `webSite` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `img` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `linkUrl` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nomeUsua` varchar(250) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(500) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nomeUsua`, `login`, `senha`, `img`) VALUES
(6, 'Renata Carvalho', 'reehnataoliveira@gmail.com', '123456', 'destque-clinica-pet-5.png'),
(8, 'reehnataCarvalho', 'teste 1', 'Rg499216672', 'destque-clinica-pet-3.png'),
(12, 'reehnataCarvalho', 'teste 2', 'Rg499216672', 'destque-clinica-pet-2.png'),
(13, 'reehnataoliveira@gmail.com', 'teste 1', '123456', 'cafeVinho2.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `link` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `alt` varchar(150) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conteudosite`
--
ALTER TABLE `conteudosite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depoimento`
--
ALTER TABLE `depoimento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destaque`
--
ALTER TABLE `destaque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redesocial`
--
ALTER TABLE `redesocial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rodape`
--
ALTER TABLE `rodape`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `conteudosite`
--
ALTER TABLE `conteudosite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `depoimento`
--
ALTER TABLE `depoimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `destaque`
--
ALTER TABLE `destaque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `redesocial`
--
ALTER TABLE `redesocial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rodape`
--
ALTER TABLE `rodape`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
