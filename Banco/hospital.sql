-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Ago-2021 às 00:47
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hospital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_agendamentos`
--

CREATE TABLE `tb_agendamentos` (
  `id_agendamento` int(11) NOT NULL,
  `curso` varchar(100) CHARACTER SET latin1 NOT NULL,
  `data` date NOT NULL,
  `hora` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_doença`
--

CREATE TABLE `tb_doença` (
  `id_doenca` int(11) NOT NULL,
  `nome` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_evolucao`
--

CREATE TABLE `tb_evolucao` (
  `id_evolucao` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `data` date NOT NULL,
  `obs` varchar(100) CHARACTER SET latin1 NOT NULL,
  `curso` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fatores`
--

CREATE TABLE `tb_fatores` (
  `id_fatores` int(11) NOT NULL,
  `hiper_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `hiper_valor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `mellitus_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `mellitus_valor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `dislipidemia_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `dislipedemia_valor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `anemia_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `anemia_valor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `hiperteriodismo_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `hiperteriodismo_valor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `hipo_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `hipo_valor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `cardio_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `cardio_valor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `depre_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `depre_valor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `obesidade_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `sedentarismo_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `tabagista_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `tabagista_valor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `medicamento_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `medicamento_valor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `exercicios_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `exercicios_valor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `saude_enum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `saude_valor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `parentes` varchar(200) CHARACTER SET latin1 NOT NULL,
  `sintomas` varchar(200) CHARACTER SET latin1 NOT NULL,
  `obs` varchar(2000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_gestante`
--

CREATE TABLE `tb_gestante` (
  `id_gestante` int(11) NOT NULL,
  `qtd_aborto` varchar(100) CHARACTER SET latin1 NOT NULL,
  `qtd_parto` varchar(100) CHARACTER SET latin1 NOT NULL,
  `qtd_gravidez` varchar(100) CHARACTER SET latin1 NOT NULL,
  `dum` varchar(200) CHARACTER SET latin1 NOT NULL,
  `dpp` varchar(200) CHARACTER SET latin1 NOT NULL,
  `natimorto` varchar(100) CHARACTER SET latin1 NOT NULL,
  `amamentacao` varchar(100) CHARACTER SET latin1 NOT NULL,
  `peso` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ant_diabete` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ant_hipertensao` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ant_eclampsia` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ant_trombo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ant_doe_mental` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ant_cardiopatia` varchar(100) CHARACTER SET latin1 NOT NULL,
  `prematuro` varchar(100) CHARACTER SET latin1 NOT NULL,
  `isoimunizacao` varchar(100) CHARACTER SET latin1 NOT NULL,
  `inf_urinaria` varchar(100) CHARACTER SET latin1 NOT NULL,
  `oligo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `cardiopatia` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tabagismo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `diab_gest` varchar(100) CHARACTER SET latin1 NOT NULL,
  `eclampsia` varchar(100) CHARACTER SET latin1 NOT NULL,
  `hipertensao` varchar(100) CHARACTER SET latin1 NOT NULL,
  `datismo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `hemorragia` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ciur` varchar(100) CHARACTER SET latin1 NOT NULL,
  `st_vaciana` varchar(100) CHARACTER SET latin1 NOT NULL,
  `influenza` varchar(100) CHARACTER SET latin1 NOT NULL,
  `dose1` varchar(100) CHARACTER SET latin1 NOT NULL,
  `dose2` varchar(100) CHARACTER SET latin1 NOT NULL,
  `dose3` varchar(100) CHARACTER SET latin1 NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `evolucao` varchar(10000) CHARACTER SET latin1 NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ginecologica`
--

CREATE TABLE `tb_ginecologica` (
  `id_ginecologica` int(11) NOT NULL,
  `qtd_gravidez` varchar(100) CHARACTER SET latin1 NOT NULL,
  `qtd_partos` varchar(100) CHARACTER SET latin1 NOT NULL,
  `qtd_abortos` varchar(100) CHARACTER SET latin1 NOT NULL,
  `vida_sexual` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ant_cirurgicos` varchar(100) CHARACTER SET latin1 NOT NULL,
  `peso` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ult_prevensao` varchar(100) CHARACTER SET latin1 NOT NULL,
  `anticocepcional` varchar(100) CHARACTER SET latin1 NOT NULL,
  `queixa` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pre_arterial` varchar(100) CHARACTER SET latin1 NOT NULL,
  `vulva` varchar(100) CHARACTER SET latin1 NOT NULL,
  `cont_vaginal` varchar(100) CHARACTER SET latin1 NOT NULL,
  `colo_uterino` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Schiller` varchar(100) CHARACTER SET latin1 NOT NULL,
  `iodo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `evolucao` varchar(10000) CHARACTER SET latin1 NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_neurologica`
--

CREATE TABLE `tb_neurologica` (
  `id_neurologica` int(11) NOT NULL,
  `queixa` varchar(200) CHARACTER SET latin1 NOT NULL,
  `hmp` varchar(200) CHARACTER SET latin1 NOT NULL,
  `pas` varchar(200) CHARACTER SET latin1 NOT NULL,
  `fc` varchar(200) CHARACTER SET latin1 NOT NULL,
  `fr` varchar(200) CHARACTER SET latin1 NOT NULL,
  `compelmentares` varchar(200) CHARACTER SET latin1 NOT NULL,
  `antecedentes` varchar(200) CHARACTER SET latin1 NOT NULL,
  `patologia` varchar(200) CHARACTER SET latin1 NOT NULL,
  `mendicamento` varchar(200) CHARACTER SET latin1 NOT NULL,
  `motricidade_vol` varchar(200) CHARACTER SET latin1 NOT NULL,
  `inspecao` varchar(200) CHARACTER SET latin1 NOT NULL,
  `palpacao` varchar(200) CHARACTER SET latin1 NOT NULL,
  `reflexo` varchar(200) CHARACTER SET latin1 NOT NULL,
  `tonus` varchar(200) CHARACTER SET latin1 NOT NULL,
  `trofismo` varchar(200) CHARACTER SET latin1 NOT NULL,
  `motricidade` varchar(200) CHARACTER SET latin1 NOT NULL,
  `mmii` varchar(200) CHARACTER SET latin1 NOT NULL,
  `mmss` varchar(200) CHARACTER SET latin1 NOT NULL,
  `cordenacao` varchar(200) CHARACTER SET latin1 NOT NULL,
  `marcha` varchar(200) CHARACTER SET latin1 NOT NULL,
  `forca` varchar(200) CHARACTER SET latin1 NOT NULL,
  `dor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `tatil` varchar(200) CHARACTER SET latin1 NOT NULL,
  `termica` varchar(200) CHARACTER SET latin1 NOT NULL,
  `dolorosa` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL,
  `diagnostico_fisio` varchar(200) CHARACTER SET latin1 NOT NULL,
  `objetivo` varchar(200) CHARACTER SET latin1 NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `diagnostico_cl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_paciente`
--

CREATE TABLE `tb_paciente` (
  `id_paciente` int(11) NOT NULL,
  `nome` varchar(200) CHARACTER SET latin1 NOT NULL,
  `cpf` varchar(100) CHARACTER SET latin1 NOT NULL,
  `sexo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `civil` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL,
  `dt_nasc` varchar(100) CHARACTER SET latin1 NOT NULL,
  `raca` varchar(100) CHARACTER SET latin1 NOT NULL,
  `profissao` varchar(100) CHARACTER SET latin1 NOT NULL,
  `mae` varchar(100) CHARACTER SET latin1 NOT NULL,
  `numero` varchar(100) CHARACTER SET latin1 NOT NULL,
  `rua` varchar(200) CHARACTER SET latin1 NOT NULL,
  `bairro` varchar(200) CHARACTER SET latin1 NOT NULL,
  `cidade` varchar(100) CHARACTER SET latin1 NOT NULL,
  `telefone` varchar(20) CHARACTER SET latin1 NOT NULL,
  `id_usuário` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sinais`
--

CREATE TABLE `tb_sinais` (
  `id_sinais` int(11) NOT NULL,
  `arterial` varchar(200) CHARACTER SET latin1 NOT NULL,
  `glicemia` varchar(200) CHARACTER SET latin1 NOT NULL,
  `spo` varchar(200) CHARACTER SET latin1 NOT NULL,
  `pulso` varchar(200) CHARACTER SET latin1 NOT NULL,
  `r` varchar(200) CHARACTER SET latin1 NOT NULL,
  `altura` varchar(200) CHARACTER SET latin1 NOT NULL,
  `peso` varchar(200) CHARACTER SET latin1 NOT NULL,
  `abdominal` varchar(200) CHARACTER SET latin1 NOT NULL,
  `imc` varchar(200) CHARACTER SET latin1 NOT NULL,
  `dor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `obs` varchar(2000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_traumatologica`
--

CREATE TABLE `tb_traumatologica` (
  `id_traumatologica` int(11) NOT NULL,
  `a_cabeca` varchar(200) DEFAULT NULL,
  `a_ombros` varchar(200) DEFAULT NULL,
  `a_claviculas` varchar(200) DEFAULT NULL,
  `a_alba` varchar(200) DEFAULT NULL,
  `a_adams` varchar(200) DEFAULT NULL,
  `a_maos` varchar(200) DEFAULT NULL,
  `a_iliacas` varchar(200) DEFAULT NULL,
  `a_eias` varchar(200) DEFAULT NULL,
  `a_joelhos` varchar(200) DEFAULT NULL,
  `a_patelas` varchar(200) DEFAULT NULL,
  `a_pes` varchar(200) DEFAULT NULL,
  `a_halux` varchar(200) DEFAULT NULL,
  `l_cabeca` varchar(200) DEFAULT NULL,
  `l_cervica` varchar(200) DEFAULT NULL,
  `l_ombro` varchar(200) DEFAULT NULL,
  `l_maos` varchar(200) DEFAULT NULL,
  `l_dorso` varchar(200) DEFAULT NULL,
  `l_abdomen` varchar(200) DEFAULT NULL,
  `l_lombar` varchar(200) DEFAULT NULL,
  `l_pelvel` varchar(200) DEFAULT NULL,
  `l_tronco` varchar(200) DEFAULT NULL,
  `l_joelho` varchar(200) DEFAULT NULL,
  `p_cabeca` varchar(200) DEFAULT NULL,
  `p_ombro` varchar(200) DEFAULT NULL,
  `p_escapula` varchar(200) DEFAULT NULL,
  `p_adams` varchar(200) DEFAULT NULL,
  `p_local` varchar(200) DEFAULT NULL,
  `p_eipi` varchar(200) DEFAULT NULL,
  `p_prega` varchar(200) DEFAULT NULL,
  `p_poplitea` varchar(200) DEFAULT NULL,
  `p_calcaneo` varchar(200) DEFAULT NULL,
  `diagrama` varchar(200) DEFAULT NULL,
  `queixa` varchar(200) DEFAULT NULL,
  `hda` varchar(200) DEFAULT NULL,
  `hdp` varchar(200) DEFAULT NULL,
  `hdf` varchar(200) DEFAULT NULL,
  `outras` varchar(200) DEFAULT NULL,
  `marcha` varchar(200) DEFAULT NULL,
  `inspecao` varchar(200) DEFAULT NULL,
  `palpacao` varchar(200) DEFAULT NULL,
  `perimetria` varchar(200) DEFAULT NULL,
  `especiais` varchar(200) DEFAULT NULL,
  `complementares` varchar(200) DEFAULT NULL,
  `obs` varchar(200) DEFAULT NULL,
  `objetivos` varchar(200) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_triagem`
--

CREATE TABLE `tb_triagem` (
  `id_triagem` int(11) NOT NULL,
  `id_exames` int(11) NOT NULL,
  `id_sinais` int(11) NOT NULL,
  `id_fatores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET latin1 NOT NULL,
  `login` varchar(100) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(50) CHARACTER SET latin1 NOT NULL,
  `curso` varchar(50) CHARACTER SET latin1 NOT NULL,
  `valida` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_agendamentos`
--
ALTER TABLE `tb_agendamentos`
  ADD PRIMARY KEY (`id_agendamento`),
  ADD KEY `id_pacien` (`id_paciente`) USING BTREE;

--
-- Índices para tabela `tb_doença`
--
ALTER TABLE `tb_doença`
  ADD PRIMARY KEY (`id_doenca`);

--
-- Índices para tabela `tb_evolucao`
--
ALTER TABLE `tb_evolucao`
  ADD PRIMARY KEY (`id_evolucao`),
  ADD KEY `id_paciente_fk` (`id_paciente`) USING BTREE;

--
-- Índices para tabela `tb_fatores`
--
ALTER TABLE `tb_fatores`
  ADD PRIMARY KEY (`id_fatores`);

--
-- Índices para tabela `tb_gestante`
--
ALTER TABLE `tb_gestante`
  ADD PRIMARY KEY (`id_gestante`),
  ADD KEY `id_user` (`id_usuario`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Índices para tabela `tb_ginecologica`
--
ALTER TABLE `tb_ginecologica`
  ADD PRIMARY KEY (`id_ginecologica`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_pacient` (`id_paciente`) USING BTREE;

--
-- Índices para tabela `tb_neurologica`
--
ALTER TABLE `tb_neurologica`
  ADD PRIMARY KEY (`id_neurologica`),
  ADD KEY `id_user_fk` (`id_usuario`) USING BTREE,
  ADD KEY `id_paci_fk` (`id_paciente`) USING BTREE;

--
-- Índices para tabela `tb_paciente`
--
ALTER TABLE `tb_paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Índices para tabela `tb_sinais`
--
ALTER TABLE `tb_sinais`
  ADD PRIMARY KEY (`id_sinais`);

--
-- Índices para tabela `tb_traumatologica`
--
ALTER TABLE `tb_traumatologica`
  ADD PRIMARY KEY (`id_traumatologica`),
  ADD KEY `id_pacien_fk` (`id_paciente`) USING BTREE,
  ADD KEY `id_usuario_fk` (`id_usuario`) USING BTREE;

--
-- Índices para tabela `tb_triagem`
--
ALTER TABLE `tb_triagem`
  ADD PRIMARY KEY (`id_triagem`),
  ADD KEY `id_fatores` (`id_fatores`),
  ADD KEY `id_sinais` (`id_sinais`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_agendamentos`
--
ALTER TABLE `tb_agendamentos`
  MODIFY `id_agendamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_doença`
--
ALTER TABLE `tb_doença`
  MODIFY `id_doenca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_evolucao`
--
ALTER TABLE `tb_evolucao`
  MODIFY `id_evolucao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_fatores`
--
ALTER TABLE `tb_fatores`
  MODIFY `id_fatores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_gestante`
--
ALTER TABLE `tb_gestante`
  MODIFY `id_gestante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_ginecologica`
--
ALTER TABLE `tb_ginecologica`
  MODIFY `id_ginecologica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_neurologica`
--
ALTER TABLE `tb_neurologica`
  MODIFY `id_neurologica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_paciente`
--
ALTER TABLE `tb_paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_sinais`
--
ALTER TABLE `tb_sinais`
  MODIFY `id_sinais` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_traumatologica`
--
ALTER TABLE `tb_traumatologica`
  MODIFY `id_traumatologica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_triagem`
--
ALTER TABLE `tb_triagem`
  MODIFY `id_triagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_agendamentos`
--
ALTER TABLE `tb_agendamentos`
  ADD CONSTRAINT `id_pacien` FOREIGN KEY (`id_paciente`) REFERENCES `tb_paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_evolucao`
--
ALTER TABLE `tb_evolucao`
  ADD CONSTRAINT `id_paciente_fk` FOREIGN KEY (`id_paciente`) REFERENCES `tb_paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_gestante`
--
ALTER TABLE `tb_gestante`
  ADD CONSTRAINT `id_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `tb_paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_ginecologica`
--
ALTER TABLE `tb_ginecologica`
  ADD CONSTRAINT `id_pacient` FOREIGN KEY (`id_paciente`) REFERENCES `tb_paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_neurologica`
--
ALTER TABLE `tb_neurologica`
  ADD CONSTRAINT `id_paci_fk` FOREIGN KEY (`id_paciente`) REFERENCES `tb_paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_traumatologica`
--
ALTER TABLE `tb_traumatologica`
  ADD CONSTRAINT `id_pacien_fk` FOREIGN KEY (`id_paciente`) REFERENCES `tb_paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_triagem`
--
ALTER TABLE `tb_triagem`
  ADD CONSTRAINT `id_fatores` FOREIGN KEY (`id_fatores`) REFERENCES `tb_fatores` (`id_fatores`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_sinais` FOREIGN KEY (`id_sinais`) REFERENCES `tb_sinais` (`id_sinais`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
