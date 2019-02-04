-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Fev-2019 às 22:48
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mercado_solidario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartao`
--

CREATE TABLE `cartao` (
  `idCartao` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `num_cct` varchar(100) NOT NULL,
  `bandeira` varchar(22) NOT NULL,
  `validade` varchar(8) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `categoria`) VALUES
(1, 'para sua casa'),
(2, 'esportivos'),
(3, 'musica e hobies'),
(4, 'artigos infantis'),
(5, 'eletronicos'),
(6, 'comercio e escritorio'),
(7, 'moda e beleza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `idt_Compra` int(11) NOT NULL,
  `idCompra` int(11) NOT NULL,
  `vlr_total` decimal(10,0) NOT NULL,
  `forma_pgmt` varchar(20) NOT NULL,
  `qtde_parcela` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `id_comprador` int(11) NOT NULL,
  `id_instituicao` int(11) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `id_cartao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`idt_Compra`, `idCompra`, `vlr_total`, `forma_pgmt`, `qtde_parcela`, `id_produto`, `id_vendedor`, `id_comprador`, `id_instituicao`, `id_endereco`, `id_cartao`) VALUES
(1, 13213, '1500', 'cartao', 6, 1, 1, 1, 1, 1, 1),
(2, 13213, '1500', 'cartao', 6, 1, 1, 1, 1, 1, 1),
(3, 13213, '1500', 'cartao', 6, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `idConta` int(11) NOT NULL,
  `banco` varchar(20) DEFAULT NULL,
  `agencia` varchar(20) DEFAULT NULL,
  `conta` varchar(20) DEFAULT NULL,
  `titular` varchar(50) DEFAULT NULL,
  `cpf_cnpj` varchar(22) DEFAULT NULL,
  `id_instituicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `idEndereco` int(11) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `num` varchar(5) NOT NULL,
  `compl` varchar(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_instituicao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto_pdt`
--

CREATE TABLE `foto_pdt` (
  `idFoto_pdt` int(11) NOT NULL,
  `url_foto` varchar(200) DEFAULT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `intstuicoes`
--

CREATE TABLE `intstuicoes` (
  `idInst` int(11) NOT NULL,
  `dta_cadastro` date NOT NULL,
  `razao_social` varchar(100) NOT NULL,
  `nome_fantasia` varchar(50) DEFAULT NULL,
  `cnpj` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(22) NOT NULL,
  `descricao` longtext,
  `img_inst` varchar(200) DEFAULT NULL,
  `causa` varchar(20) NOT NULL,
  `site` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `nome_pdt` varchar(50) DEFAULT NULL,
  `vlr_pdt` decimal(10,0) DEFAULT NULL,
  `vlr_doacao` decimal(10,0) DEFAULT NULL,
  `descricao` longtext,
  `id_tipo` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `idTelefone` int(11) NOT NULL,
  `num` varchar(10) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_instituicao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`idTipo`, `tipo`, `id_categoria`) VALUES
(1, 'Moveis', 1),
(2, 'Eletrodomesticos', 1),
(3, 'Utencilios', 1),
(4, 'Decoracao', 1),
(5, 'Esporte', 2),
(6, 'Ginástica', 2),
(7, 'Ciclismo', 2),
(8, 'Instrumentos', 3),
(9, 'CD e DVD', 3),
(10, 'Livros e Revistas', 3),
(11, 'Catogoria sem seleção de Tipo', 4),
(13, 'Video Games', 5),
(14, 'Computadores e Acessorios', 5),
(15, 'Celular', 5),
(16, 'Audio, TV e Fotografia', 5),
(17, 'Equipamentos', 6),
(18, 'Mobiliarios', 6),
(19, 'Beleza e Saude', 7),
(20, 'Roupas e Calçados', 7),
(21, 'Bolsas, Malas e Mochilas', 7),
(22, 'Bijoterias, Relogios e Acessorios', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `dta_cadastro` date NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tipo_pessoa` varchar(20) NOT NULL,
  `cpf_cnpj` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(22) NOT NULL,
  `img_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartao`
--
ALTER TABLE `cartao`
  ADD PRIMARY KEY (`idCartao`),
  ADD KEY `FK_CARTAO_USUARIO` (`id_usuario`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idt_Compra`);

--
-- Indexes for table `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`idConta`),
  ADD KEY `FK_CONTA_INSTITUICOES` (`id_instituicao`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idEndereco`),
  ADD KEY `FK_ENDERECO_USUARIO` (`id_usuario`),
  ADD KEY `FK_ENDERECO_INSTITUICOES` (`id_instituicao`);

--
-- Indexes for table `foto_pdt`
--
ALTER TABLE `foto_pdt`
  ADD PRIMARY KEY (`idFoto_pdt`),
  ADD KEY `FK_FOTOPDT_PRODUTO` (`id_produto`);

--
-- Indexes for table `intstuicoes`
--
ALTER TABLE `intstuicoes`
  ADD PRIMARY KEY (`idInst`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `FK_PRODUTO_VENDEDOR` (`id_vendedor`),
  ADD KEY `FK_PRODUTO_CATEGORIA` (`id_categoria`),
  ADD KEY `FK_PROFUTO_TIPO` (`id_tipo`);

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`idTelefone`),
  ADD KEY `FK_TELEFONE_USUARIO` (`id_usuario`),
  ADD KEY `FK_TELEFONE_INSTITUICOES` (`id_instituicao`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`),
  ADD KEY `FK_TIPO_CATEGORIA` (`id_categoria`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartao`
--
ALTER TABLE `cartao`
  MODIFY `idCartao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `idt_Compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `conta`
--
ALTER TABLE `conta`
  MODIFY `idConta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idEndereco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto_pdt`
--
ALTER TABLE `foto_pdt`
  MODIFY `idFoto_pdt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intstuicoes`
--
ALTER TABLE `intstuicoes`
  MODIFY `idInst` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telefone`
--
ALTER TABLE `telefone`
  MODIFY `idTelefone` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cartao`
--
ALTER TABLE `cartao`
  ADD CONSTRAINT `FK_CARTAO_USUARIO` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Limitadores para a tabela `conta`
--
ALTER TABLE `conta`
  ADD CONSTRAINT `FK_CONTA_INSTITUICOES` FOREIGN KEY (`id_instituicao`) REFERENCES `intstuicoes` (`idInst`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `FK_ENDERECO_INSTITUICOES` FOREIGN KEY (`id_instituicao`) REFERENCES `intstuicoes` (`idInst`),
  ADD CONSTRAINT `FK_ENDERECO_USUARIO` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Limitadores para a tabela `foto_pdt`
--
ALTER TABLE `foto_pdt`
  ADD CONSTRAINT `FK_FOTOPDT_PRODUTO` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`idProduto`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `FK_PRODUTO_CATEGORIA` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`idCategoria`),
  ADD CONSTRAINT `FK_PRODUTO_VENDEDOR` FOREIGN KEY (`id_vendedor`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `FK_PROFUTO_TIPO` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`idTipo`);

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `FK_TELEFONE_INSTITUICOES` FOREIGN KEY (`id_instituicao`) REFERENCES `intstuicoes` (`idInst`),
  ADD CONSTRAINT `FK_TELEFONE_USUARIO` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Limitadores para a tabela `tipo`
--
ALTER TABLE `tipo`
  ADD CONSTRAINT `FK_TIPO_CATEGORIA` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
