CREATE DATABASE  IF NOT EXISTS `formulario` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `formulario`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: formulario
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_cliente` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `razao_social` varchar(110) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(110) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(110) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(110) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(110) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `obs` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_cliente` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`cnpj`,`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'0001-1','29.638.604/0001-40','Alexandre e Jorge Marketing ME','(91)9-9771-886','financeiro@alexandreejorgemarketingme.com.br','Conjunto Jardim Primavera','Tapanã (Icoaraci)','Belém',' 66830-350','Marketing','Ativo'),(2,'0001-2','09.797.508/0001-37','Elias e Luciana Fotografias ME','(91)9-3540-8612','compras@eliaselucianafotografiasme.com.br','Quadra A','Maracacuera (Icoaraci)','Belém','66815-605 ','Fotografia','Inativo'),(3,'0001-3','07.296.224/0001-31','Nathan e Jaqueline Advocacia Ltda','(93)9-2502-1767','producao@nathanejaquelineadvocacialtda.com.br','Travessa Abraham Lincoln','Sudam II','Altamira','68374-284 ','Advocacia','Ativo'),(4,'0001-4','20.804.869/0001-04','Carlos Eduardo e Márcia Contábil Ltda','(91)9-2685-3184','estoque@carloseduardoemarciacontabilltda.com.br','Travessa Maria Pimentel','Titanlândia','Castanhal',' 68741-534','Contabilidade','Ativo'),(5,'0001-5','74.355.648/0001-17','Isabelle e Daiane Esportes ME','(91)9-2916-7879','orcamento@isabelleedaianeesportesme.com.br','Passagem Karina Reis','Centro','Ananindeua',' 67030-175','Artigos esportivos','Ativo'),(6,'0001-6','08.913.201/0001-91','Geraldo e Danilo Buffet ME','(91)9-3507-8181','comunicacoes@geraldoedanilobuffetme.com.br','Alameda Mendes','Murubira (Mosqueiro)','Belém',' 66918-740','Buffet','Ativo'),(7,'0001-7','02.795.811/0001-51','Malu e Vera Fotografias Ltda','(91)9-3811-7902','pesquisa@malueverafotografiasltda.com.br','Vila S Silva','Ponta Grossa (Icoaraci)','Belém','66812-481 ','Fotografia','Ativo'),(8,'0001-8','26.676.052/0001-76','Regina e Marli Telecom Ltda','(91)9-3811-3671','contabilidade@reginaemarlitelecomltda.com.br','Alameda Três','São Clemente','Belém',' 66643-250','Contabilidade','Ativo'),(9,'0001-9','36.499.419/0001-87','Julio e Bianca Financeira ME','(93)9-3524-4317','financeiro@julioebiancafinanceirame.com.br','Avenida Jorge Nogueira','Mutirão','Altamira',' 68377-883','Financeiro','Ativo'),(10,'0002-1','40.583.659/0001-32','Manoel e Emilly Pizzaria ME','(93)9-2791-2761','rh@manoeleemillypizzariame.com.br','Travessa Sexta','Floresta','Itaituba',' 68181-430','Serviços alimentícios','Ativo'),(11,'0002-2','64.337.734/0001-43','Maria e Pedro Henrique Assessoria Jurídica ME','(91)9-2939-1144','representantes@assessoriajuridicame.com.br','Quadra Nove','Icuí-Guajará','Ananindeua','67125-371 ','Assessoria Jurídica','Ativo'),(12,'0002-3','80.555.447/0001-66','Severino e Marcos Vinicius Alimentos ME','(91)9-2635-3985','presidencia@alimentosme.com.br','...','...','...','68628-280 ','Distribuidora de Alimentos não perecíveis','Inativo'),(13,'0002-4','63.871.964/0001-25','Hugo e João Comercio de Bebidas ME','(94)9-2992-3257','marketing@comerciodebebidasme.com.br','Passagem Atalaia','Beira Rio','Tucuruí','68460-058 ','Distribuidora de Bebidas','Ativo'),(14,'0002-5','02.038.536/0001-21','Joaquim e Marli Joalheria Ltda','(94)9-2992-3257','financeiro@joaquimemarlijoalherialtda.com.br','Passagem Atalaia','Beira Rio','Tucuruí','68460-058 ','Joalheria','Inativo'),(15,'0002-6','03.908.851/0001-25','Evelyn e Geraldo Entulhos Ltda','(91)9-3529-8591','tesouraria@evelynegeraldoentulhosltda.com.br','Rua Uberlândia','Célio Miranda','Paragominas',' 68626-000','Coleta','Ativo'),(16,'0002-7','72.487.427/0001-77','Lara e Joana Transportes ME','(91)9-2772-1911','compras@laraejoanatransportesme.com.br','Avenida Conselheiro Furtado','Batista Campos','Belém',' 66025-160','Transportes','Ativo'),(17,'0002-8','73.984.274/0001-36','Thomas e Mateus Limpeza ME','(91)9-2954-1893','presidencia@thomasemateuslimpezame.com.br','Avenida Conselheiro Furtado','Batista Campos','Belém',' 66025-160','Serviço de Limpeza','Ativo'),(18,'0002-9','33.803.901/0001-70','Larissa e Davi Contábil ME','(91)9-2767-0844','administracao@larissaedavicontabilme.com.br','Rua do Arsenal','Cidade Velha','Belém','66020-060 ','Contabilidade','Inativo'),(19,'0003-1','21.525.136/0001-95','Edson e Pedro Doces & Salgados ME','(91)9-2862-0983','sac@edsonepedrodocessalgadosme.com.br','Vila Nossa Senhora do Perpétuo Socorro','Marco','Belém','66085-340 ','Serviços Alimentícios','Ativo'),(20,'0003-2','48.517.466/0001-95','Marcos e Bianca Buffet Ltda','(94)9-2966-6244','fiscal@marcosebiancabuffetltda.com.br','Avenida Maria Adelina','Independência','Marabá',' 68501-110','Buffet','Ativo');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contrato_cliente`
--

DROP TABLE IF EXISTS `contrato_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contrato_cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_upload` date NOT NULL,
  `path` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contrato_cliente`
--

LOCK TABLES `contrato_cliente` WRITE;
/*!40000 ALTER TABLE `contrato_cliente` DISABLE KEYS */;
INSERT INTO `contrato_cliente` VALUES (1,'001_23.pdf','2023-04-17','arquivos/643da6e67d411.pdf','Alexandre e Jorge Marketing ME'),(2,'002_23.pdf','2023-04-17','arquivos/643da6f774c09.pdf','Nathan e Jaqueline Advocacia Ltda'),(3,'003_23.pdf','2023-04-17','arquivos/643da705e2925.pdf','Carlos Eduardo e Márcia Contábil Ltda'),(4,'004_23.pdf','2023-04-17','arquivos/643da71726c8a.pdf','Maria e Pedro Henrique Assessoria Jurídica ME'),(5,'005_23.pdf','2023-04-17','arquivos/643da7300b91e.pdf','Regina e Marli Telecom Ltda');
/*!40000 ALTER TABLE `contrato_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contrato_fornecedor`
--

DROP TABLE IF EXISTS `contrato_fornecedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contrato_fornecedor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_upload` date NOT NULL,
  `path` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fornecedor` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contrato_fornecedor`
--

LOCK TABLES `contrato_fornecedor` WRITE;
/*!40000 ALTER TABLE `contrato_fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `contrato_fornecedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fornecedor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_fornecedor` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fornecedor` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `obs` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_fornecedor` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`cnpj`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fornecedor`
--

LOCK TABLES `fornecedor` WRITE;
/*!40000 ALTER TABLE `fornecedor` DISABLE KEYS */;
INSERT INTO `fornecedor` VALUES (1,'1000-1','46.074.635/0001-34','TERSEV Serviços de Limpeza ltda','(91)9-9296-9473','servicosdelimpeza@tersev.com.br','Belém','Rua WQ-17 ','Parque Verde ','66633-720 ','Serviços de limpeza','Ativo'),(2,'1001-2','32.178.901/0001-64','LSI-TEC Segurança e Soluções','(91)9-9282-1732','www.lsitec@solucoes.com.br','Belém','Passagem Damasco','Coqueiro','66650-470','Segurança de Dados','Ativo'),(3,'1001-3','62.551.152/0001-30','ULTRANET ltda','(93)9-8457-5344','ultranet@ltda.com.br','Santarém','Travessa Vinte e Cinco','Nova República','68025-490','Serviços de Banda Larga','Ativo'),(4,'1001-4','14.408.555/0001-81','PROXXI Engenharia e Infraestrutura','(94)9-9186-7094','infraestrutura@proxxi.com.br','Redenção','Rua C-Doze','Átila Douglas','68554-613','Infraestrutura','Ativo'),(5,'1001-5','58.383.561/0001-05','AGIS Comunicação e Soluções Digitais','(91)9-9423-2620','agis@comunicacoes.com.br','Belém','Passagem Deus é Fiel','Parque Guajará (Icoaraci)','66821-027','Comunicação e Soluções Digitais','Ativo');
/*!40000 ALTER TABLE `fornecedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_funcionario` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `funcao` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_acesso` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`codigo_acesso`,`cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'01-1','652.331.552-08','Ana Paula Saraiva','Administrador','(91)9-8541-7589','saraiva.anap@gmail.com','Rua Uberlândia','Paragominas','Célio Miranda','68626-000 ','5597853'),(2,'01-2','054.789.632-00','Nicolas Pinheiro','Financeiro','(91)9-8745-2120','nicolas_pinheiro@gmail.com','Rua Creuza Maria Nunes','Paragominas','Tropical','68626-758 ','3120500'),(3,'01-3',' 653.052.082-30','Hiago Silva','Gerente de Portifolio','(91)9-9963-3950','hiago.lindo@gmail.com','Avenida Portugal','Paragominas','Célio Miranda','68626-080','3261115'),(4,'01-4',' 001.547.552-10','Ana Roberta Saraiva','Gerente de Projeto','(91)9-8956-7441','anas.saraiva270@gmail.com','Avenida Raimundo Pedro da Silva','Paragominas','Tropical','68626-700','3841688'),(5,'01-5',' 023.054.552-30','Nathalia Santos','Diretor','(91)9-8445-1011','nataliasantos90@gmail.com','Rua Guarani','Paragominas','Camboatã','68626-500','7395047'),(6,'01-5',' 929.526.810-58','Aline Figueiredo','Gerente de Projeto','(67)9-9103-0849','alinesoufig@gmail.com','3 Tv. Loteamento Atalaia','Salinópolis','Pedrinhas','68721-000','1713089'),(7,'01-5',' 892.449.956-46','Daniel Figueiredo','Gerente de Projeto','(95)9-8255-1583','daniel@gmail.com','Rua Dona Sinhá Francisca Alves de Lima','Boa Vista','Senador Hélio Campos','69316-414','9505096');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordem_de_servico`
--

DROP TABLE IF EXISTS `ordem_de_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ordem_de_servico` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nº_OS` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cliente` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `servico` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsavel` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `data_emissao` date NOT NULL,
  PRIMARY KEY (`id`,`Nº_OS`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordem_de_servico`
--

LOCK TABLES `ordem_de_servico` WRITE;
/*!40000 ALTER TABLE `ordem_de_servico` DISABLE KEYS */;
INSERT INTO `ordem_de_servico` VALUES (1,'001/23','0001-1','Alexandre e Jorge Marketing ME','29.638.604/0001-40','Conjunto Jardim Primavera','(91)9-9771-886','66830-350','Belém','Tapanã (Icoaraci)','','Desenvolvimento de Sistema de Gerenciamento Interno','Ana Roberta Saraiva',303000,'2023-01-14'),(2,'002/23','0001-3','Nathan e Jaqueline Advocacia Ltda','07.296.224/0001-31','Travessa Abraham Lincoln','(93)9-2502-1767','68374-284','Altamira','Sudam II','','Desenvolvimento de Sistema ERP','Aline Figueiredo',433000,'2023-04-16'),(3,'003/23','0001-4','Carlos Eduardo e Márcia Contábil Ltda','20.804.869/0001-04','Travessa Maria Pimentel','(91)9-2685-3184','68741-534','Castanhal','Titanlândia','','Desenvolvimento de Sistema ERP','Daniel Figueiredo',433000,'2023-02-09'),(4,'004/23','0002-2','Maria e Pedro Henrique Assessoria Jurídica ME','64.337.734/0001-43','Quadra Nove','(91)9-2939-1144','67125-371','Ananindeua','Icuí-Guajará','','Desenvolvimento de Sistema ERP','Ana Roberta FIgueiredo',368000,'2023-02-11'),(5,'005/23','0001-8','Regina e Marli Telecom Ltda','26.676.052/0001-76','Alameda Três','(91)9-3811-3671','66643-250','Belém','São Clemente','','Desenvolvimento de Sistema ERP','Daniel Figueiredo',368000,'2023-02-17');
/*!40000 ALTER TABLE `ordem_de_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relatorio`
--

DROP TABLE IF EXISTS `relatorio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `relatorio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nº_OS` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cliente` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `servico` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsavel` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_emissao` date NOT NULL,
  `status_os` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_conclusao` date NOT NULL,
  PRIMARY KEY (`id`,`Nº_OS`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relatorio`
--

LOCK TABLES `relatorio` WRITE;
/*!40000 ALTER TABLE `relatorio` DISABLE KEYS */;
INSERT INTO `relatorio` VALUES (1,'001/23','0001-1','Alexandre e Jorge Marketing ME','29.638.604/0001-40',' (91)9-9771-886',' Conjunto Jardim Primavera',' Tapanã (Icoaraci)',' Belém',' 66830-350',' Desenvolvimento de Sistema de Gerenciamento Interno','','Ana Roberta Saraiva','303000','2023-01-14','Finalizada','2023-02-17'),(2,'002/23','0001-3','Nathan e Jaqueline Advocacia Ltda','07.296.224/0001-31',' (93)9-2502-176',' Travessa Abraham Lincoln',' Sudam II',' Altamira',' 68374-284',' Desenvolvimento de Sistema ERP','','Aline Figueiredo','433000','2023-04-16','Finalizada','2023-02-21'),(3,'003/23','0001-4','Carlos Eduardo e Márcia Contábil Ltda','20.804.869/0001-04',' (91)9-2685-318',' Travessa Maria Pimentel',' Titanlândia',' Castanhal',' 68741-534',' Desenvolvimento de Sistema ERP','','Daniel Figueiredo','433000','2023-02-09','Finalizada','2023-04-07'),(4,'004/23','0002-2','Maria e Pedro Henrique Assessoria Jurídica ME','64.337.734/0001-43',' (91)9-2939-114',' Quadra Nove',' Icuí-Guajará',' Ananindeua',' 67125-371',' Desenvolvimento de Sistema ERP','','Ana Roberta FIgueiredo','368000','2023-02-11','Em Execução','0000-00-00'),(5,'005/23','0001-8','Regina e Marli Telecom Ltda','26.676.052/0001-76',' (91)9-3811-367',' Alameda Três',' São Clemente',' Belém',' 66643-250',' Desenvolvimento de Sistema ERP','','Daniel Figueiredo','368000','2023-02-17','Em Execução','0000-00-00');
/*!40000 ALTER TABLE `relatorio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-17 17:32:30
