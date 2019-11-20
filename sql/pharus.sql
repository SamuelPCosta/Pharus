CREATE database pharus DEFAULT CHARACTER SET utf8mb4 ;
USE `pharus` ;

-- -----------------------------------------------------
-- Table usuario--
-- -----------------------------------------------------
CREATE TABLE `pharus`.`usuario` (
  `usuario` VARCHAR(30) NOT NULL,
  `conta_contrato` INT(10) UNSIGNED NOT NULL,
  `nome` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  `tarifa_kwh` FLOAT(3) NULL,
  PRIMARY KEY (`conta_contrato`, `usuario`)
  )
ENGINE = InnoDB;

ALTER TABLE pharus.usuario
ADD CONSTRAINT ck_senha
CHECK (LENGTH(senha)>=8);
-- Restrição de senha: letras e números

CREATE TABLE `pharus`.`admin` (
  `usuario` VARCHAR(30) NOT NULL,
  `nome` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  `admin` INT(1) NULL,
  PRIMARY KEY (`usuario`)
  )
ENGINE = InnoDB;

ALTER TABLE pharus.admin
ADD CONSTRAINT ck_senhaAdmin
CHECK (LENGTH(senha)>=8);

-- -----------------------------------------------------
-- Table consumo --
-- -----------------------------------------------------
CREATE TABLE `pharus`.`consumo` (
  `usuario` INT(10) UNSIGNED NOT NULL,
  `bandeira` INT(1) NOT NULL,
  `kw_h` FLOAT UNSIGNED NOT NULL,
  `gasto` FLOAT UNSIGNED NOT NULL,
  `intervalo_tempo` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`usuario`)
)
ENGINE = InnoDB;
ALTER TABLE pharus.consumo
ALTER bandeira SET DEFAULT '1';

ALTER TABLE pharus.consumo 
ADD CONSTRAINT fk_consumo
FOREIGN KEY (usuario)
REFERENCES usuario (conta_contrato);

-- -----------------------------------------------------
-- Table consumoMensal --
-- -----------------------------------------------------
CREATE TABLE `pharus`.`consumo_mensal` (
  `usuario` INT(10) UNSIGNED NOT NULL,
  `kw_h_total` FLOAT UNSIGNED NOT NULL,
  `gasto_total` FLOAT UNSIGNED NOT NULL,
  `intervalo_tempo` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`usuario`)
)
ENGINE = InnoDB;

ALTER TABLE pharus.consumo_mensal 
ADD CONSTRAINT fk_consumo_mensal
FOREIGN KEY (usuario)
REFERENCES consumo (usuario);

-- -----------------------------------------------------
-- Table meta --
-- -----------------------------------------------------
CREATE TABLE `pharus`.`meta` (
  `usuario` INT(10) UNSIGNED NOT NULL,
  `meta` INT(4),
  `kw_h` FLOAT UNSIGNED NOT NULL,
  `gasto` FLOAT UNSIGNED NOT NULL,
  PRIMARY KEY (`usuario`)
)
ENGINE = InnoDB;

ALTER TABLE pharus.meta 
ADD CONSTRAINT `fk_meta_usuario`
FOREIGN KEY (`usuario`)
REFERENCES `pharus`.`usuario` (`conta_contrato`);

-- -----------------------------------------------------
-- Table dicas ---
-- -----------------------------------------------------
CREATE TABLE `pharus`.`dicas` (
  `id_dicas` INT NOT NULL AUTO_INCREMENT,
  `dica_a` VARCHAR(180) NOT NULL,
  `dica_b` VARCHAR(450) NOT NULL,
  `dica_c` VARCHAR(770) NOT NULL,
  PRIMARY KEY (`id_dicas`))
ENGINE = InnoDB;


-- POVOAMENTO DE ADMIN
INSERT INTO pharus.admin (usuario, nome, email, senha, admin) 
VALUES ('Samuel98', 'Samuel Soares Pereira Costa', 'ssoares981@gmail.com', '7cbdad5346d75ff3f24b91543f0913a8', '1');

-- POVOAMENTO DE DICAS
INSERT INTO pharus.dicas (dica_a, dica_b, dica_c) 
VALUES ('Apague a luz sempre que sair de um cômodo!', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Na lavadora de roupas procure a opção “lavagem rápida” caso haja poucas peças.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Mantenha o ar condicionado à 23 graus!', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Evite usar o ferro de passar roupas quando muitos aparelhos estão ligados.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Comece a passar as roupas pelas peças delicadas, pois elas necessitam de menos
calor.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Desligue o monitor do PC sempre que for se ausentar por mais de 5 minutos.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Prefira ventiladores de mesa ou coluna à ventiladores de teto.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Evite deixar a TV e ou microondas no modo “stand by”.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Retire o carregador da tomada quando não estiver em uso.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Troque lâmpadas incandescente por lâmpadas de LED.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');