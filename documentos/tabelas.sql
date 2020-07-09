// Cria o banco de dados
CREATE SCHEMA soue ;

// Tabela Perfil
CREATE TABLE `soue`.`perfil` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(50) NOT NULL,
  `ativo` INT NOT NULL,
  PRIMARY KEY (`id`));
  
// Inclusão dos perfis
INSERT INTO `soue`.`perfil` (`descricao`, `ativo`) VALUES ('Administrador', '1');
INSERT INTO `soue`.`perfil` (`descricao`, `ativo`) VALUES ('Funcionário', '1');
INSERT INTO `soue`.`perfil` (`descricao`, `ativo`) VALUES ('Cadastrador', '1');
  
// Tabela Permissões


// Tabela Tipo Funcionário
CREATE TABLE `soue`.`tipo_funcionario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(100) NOT NULL,
  `ativo` INT NOT NULL,
  PRIMARY KEY (`id`));
  
// Inclusão tabela Tipo Funcionário
INSERT INTO `soue`.`tipo_funcionario` (`descricao`, `ativo`) VALUES ('Administrativo', '1');
INSERT INTO `soue`.`tipo_funcionario` (`descricao`, `ativo`) VALUES ('Jurídico', '1');
INSERT INTO `soue`.`tipo_funcionario` (`descricao`, `ativo`) VALUES ('Produção', '1');
INSERT INTO `soue`.`tipo_funcionario` (`descricao`, `ativo`) VALUES ('Tecnologia', '1');
INSERT INTO `soue`.`tipo_funcionario` (`descricao`, `ativo`) VALUES ('Contábil', '1');
INSERT INTO `soue`.`tipo_funcionario` (`descricao`, `ativo`) VALUES ('Financeira', '1');
INSERT INTO `soue`.`tipo_funcionario` (`descricao`, `ativo`) VALUES ('Comercial', '1');

// Tabela Empresa
CREATE TABLE `soue`.`empresas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `empresa` VARCHAR(100) NOT NULL,
  `ativo` INT NOT NULL,
  PRIMARY KEY (`id`));
  
// Inclusão tabela Empresas
INSERT INTO `soue`.`empresas` (`empresa`, `ativo`) VALUES ('Empresa1', '1');
INSERT INTO `soue`.`empresas` (`empresa`, `ativo`) VALUES ('Empresa2', '1');
INSERT INTO `soue`.`empresas` (`empresa`, `ativo`) VALUES ('Empresa3', '1');
INSERT INTO `soue`.`empresas` (`empresa`, `ativo`) VALUES ('Empresa4', '1');


// Tabela Projetos
CREATE TABLE `soue`.`projetos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `projeto` VARCHAR(100) NOT NULL,
  `ativo` INT NOT NULL,
  PRIMARY KEY (`id`));
  
// Inclusão Tabela Projetos
INSERT INTO `soue`.`projetos` (`projeto`, `ativo`) VALUES ('projeto1', '1');
INSERT INTO `soue`.`projetos` (`projeto`, `ativo`) VALUES ('projeto2', '1');
INSERT INTO `soue`.`projetos` (`projeto`, `ativo`) VALUES ('projeto3', '1');
INSERT INTO `soue`.`projetos` (`projeto`, `ativo`) VALUES ('nenhum', '1');
INSERT INTO `soue`.`projetos` (`projeto`, `ativo`) VALUES ('todos', '1');


// Tabela Departamento
CREATE TABLE `soue`.`departamentos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `departamento` VARCHAR(100) NOT NULL,
  `ativo` INT NOT NULL,
  PRIMARY KEY (`id`));
  
// Inclusão Tabela Departamentos
INSERT INTO `soue`.`departamentos` (`departamento`, `ativo`) VALUES ('Administrativo', '1');
INSERT INTO `soue`.`departamentos` (`departamento`, `ativo`) VALUES ('Jurídico', '1');
INSERT INTO `soue`.`departamentos` (`departamento`, `ativo`) VALUES ('Produção', '1');
INSERT INTO `soue`.`departamentos` (`departamento`, `ativo`) VALUES ('Tecnologia', '1');
INSERT INTO `soue`.`departamentos` (`departamento`, `ativo`) VALUES ('Contábil', '1');
INSERT INTO `soue`.`departamentos` (`departamento`, `ativo`) VALUES ('Financeira', '1');
INSERT INTO `soue`.`departamentos` (`departamento`, `ativo`) VALUES ('Comercial', '1');

// Tabela Cargo
CREATE TABLE `soue`.`cargos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cargo` VARCHAR(100) NOT NULL,
  `ativo` INT NOT NULL,
  PRIMARY KEY (`id`));
  
// Inclusão Tabela Cargos
INSERT INTO `soue`.`cargos` (`cargo`, `ativo`) VALUES ('Estagiário', '1');
INSERT INTO `soue`.`cargos` (`cargo`, `ativo`) VALUES ('Analista', '1');
INSERT INTO `soue`.`cargos` (`cargo`, `ativo`) VALUES ('Assistente', '1');
INSERT INTO `soue`.`cargos` (`cargo`, `ativo`) VALUES ('Atendente', '1');
INSERT INTO `soue`.`cargos` (`cargo`, `ativo`) VALUES ('Coordenador', '1');
INSERT INTO `soue`.`cargos` (`cargo`, `ativo`) VALUES ('Designer', '1');
INSERT INTO `soue`.`cargos` (`cargo`, `ativo`) VALUES ('Gerente', '1');
INSERT INTO `soue`.`cargos` (`cargo`, `ativo`) VALUES ('Adm. Sistemas', '1');

// Tabela Usuários
CREATE TABLE `soue`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(150) NOT NULL,
  `usuario` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  `id_tipo_usuario` INT NOT NULL,
  `id_empresa` INT NOT NULL,
  `id_projeto` INT NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `id_departamento` INT NOT NULL,
  `id_cargo` INT NOT NULL,
  `ramal` INT NULL,
  `salario` FLOAT(10,2) NOT NULL,
  `data_admissao` DATE NOT NULL,
  `cpf` VARCHAR(15) NOT NULL,
  `id_perfil` INT NOT NULL,
  `ativo` INT NOT NULL,
  PRIMARY KEY (`id`));
  
// Inclusão Administrador tabela usuários
INSERT INTO `soue`.`usuarios` (`id`, `nome`, `usuario`, `senha`, `id_tipo_usuario`, `id_empresa`, `id_projeto`, `email`, `id_departamento`, `id_cargo`, `ramal`, `salario`, `data_admissao`, `cpf`, `perfil`, `ativo`) VALUES ('1', 'Administrador', 'admin', 'MTIzNDU2', '1', '1', '5', 'admin@admin.com.br', '4', '8', '123', '5000.00', '2015-06-10', '13245678910', '1', '1');
