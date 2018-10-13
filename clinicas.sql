SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `clinicas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `clinicas`;

CREATE TABLE `avalia_servico` (
  `cliente_cliente_id` int(11) NOT NULL,
  `fornece_fornece_id` int(11) NOT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  `nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `endereco_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `clinica` (
  `clinica_id` int(11) NOT NULL,
  `razao` varchar(255) NOT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `endereco_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `endereco` (
  `endereco_id` int(11) NOT NULL,
  `cep` int(11) DEFAULT NULL,
  `bairro` varchar(45) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `numero` int(11) NOT NULL,
  `referencia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `fornece` (
  `fornece_id` int(11) NOT NULL,
  `clinica_clinica_id` int(11) DEFAULT NULL,
  `servico_servico_id` int(11) NOT NULL,
  `medico_medico_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `medico` (
  `medico_id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `endereco_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `servico` (
  `servico_id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `valor` decimal(10,5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `user_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `user_group` (
  `user_group_id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `permissoes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `avalia_servico`
  ADD PRIMARY KEY (`cliente_cliente_id`,`fornece_fornece_id`),
  ADD KEY `fk_cliente_has_fornece_fornece1_idx` (`fornece_fornece_id`),
  ADD KEY `fk_cliente_has_fornece_cliente1_idx` (`cliente_cliente_id`);

ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`),
  ADD KEY `fk_cliente_endereco1_idx` (`endereco_id`),
  ADD KEY `fk_cliente_user1_idx` (`user_id`);

ALTER TABLE `clinica`
  ADD PRIMARY KEY (`clinica_id`),
  ADD KEY `fk_clinica_endereco1_idx` (`endereco_id`),
  ADD KEY `fk_clinica_user1_idx` (`user_id`);

ALTER TABLE `endereco`
  ADD PRIMARY KEY (`endereco_id`);

ALTER TABLE `fornece`
  ADD PRIMARY KEY (`fornece_id`),
  ADD KEY `fk_clinica_has_servico_servico1_idx` (`servico_servico_id`),
  ADD KEY `fk_clinica_has_servico_clinica1_idx` (`clinica_clinica_id`),
  ADD KEY `fk_fornece_medico1_idx` (`medico_medico_id`);

ALTER TABLE `medico`
  ADD PRIMARY KEY (`medico_id`),
  ADD KEY `fk_medico_endereco1_idx` (`endereco_id`),
  ADD KEY `fk_medico_user1_idx` (`user_id`);

ALTER TABLE `servico`
  ADD PRIMARY KEY (`servico_id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_user_user_group1_idx` (`user_group_id`);

ALTER TABLE `user_group`
  ADD PRIMARY KEY (`user_group_id`);


ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `clinica`
  MODIFY `clinica_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `endereco`
  MODIFY `endereco_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `medico`
  MODIFY `medico_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `servico`
  MODIFY `servico_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `user_group`
  MODIFY `user_group_id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `avalia_servico`
  ADD CONSTRAINT `fk_cliente_has_fornece_cliente1` FOREIGN KEY (`cliente_cliente_id`) REFERENCES `cliente` (`cliente_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_has_fornece_fornece1` FOREIGN KEY (`fornece_fornece_id`) REFERENCES `fornece` (`fornece_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_endereco1` FOREIGN KEY (`endereco_id`) REFERENCES `endereco` (`endereco_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `clinica`
  ADD CONSTRAINT `fk_clinica_endereco1` FOREIGN KEY (`endereco_id`) REFERENCES `endereco` (`endereco_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clinica_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `fornece`
  ADD CONSTRAINT `fk_clinica_has_servico_clinica1` FOREIGN KEY (`clinica_clinica_id`) REFERENCES `clinica` (`clinica_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clinica_has_servico_servico1` FOREIGN KEY (`servico_servico_id`) REFERENCES `servico` (`servico_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fornece_medico1` FOREIGN KEY (`medico_medico_id`) REFERENCES `medico` (`medico_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `medico`
  ADD CONSTRAINT `fk_medico_endereco1` FOREIGN KEY (`endereco_id`) REFERENCES `endereco` (`endereco_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medico_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_user_group1` FOREIGN KEY (`user_group_id`) REFERENCES `user_group` (`user_group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
