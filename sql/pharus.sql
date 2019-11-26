CREATE database pharus DEFAULT CHARACTER SET utf8mb4 ;
USE `pharus` ;

-- -----------------------------------------------------
-- Table usuario--
-- -----------------------------------------------------
CREATE TABLE `pharus`.`usuario` (
  `usuario` VARCHAR(30) NOT NULL,
  `conta_contrato` INT(10) UNSIGNED AUTO_INCREMENT NOT NULL,
  `nome` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  `tarifa_kwh` FLOAT(3) NULL,
  `faixa` INT(1) NULL,
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
'Utilize mais a luz natural e para isso você pode optar por pintar os ambientes de sua casa com cores claras, pois isto fará com que a luz reflita no espaço e o ambiente seja mais facilmente iluminado. Além disso, ambientes com cores claras podem ser iluminados com lâmpadas mais econômicas, diminuindo de maneira relevante o seu consumo de energia.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Na lavadora de roupas procure a opção “lavagem rápida” caso haja poucas peças.', 
'Tire da tomada os aparelhos que não estão sendo usados, o aumento do uso de aparelhos eletrônicos vêm adicionando mais energia a ser paga em nossa conta. Isso acontece especialmente pelo fato de eles ficarem ligados sem necessidade quando estão fora de uso. Mantê-los em stand-by, por exemplo, pode significar um aumento de até 12% no consumo de energia.
', 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Mantenha o ar condicionado à 23 graus!', 
'A utilização de aquecimento solar de água é um modo prático de economizar energia. Este tipo de aquecimento proporciona uma economia relevante, pois pode proporcionar gasto zero com a água do banho e evitando o uso de chuveiros elétricos que são, um dos itens que mais consomem energia dentro de uma residência.
', 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Evite usar o ferro de passar roupas quando muitos aparelhos estão ligados.', 
'Optem sempre pela compra de aparelhos novos, pois os aparelhos elétricos e eletrodomésticos contribuem significativamente para um maior consumo de energia quando já estão desgastados, pois necessitam de mais força para compensar quaisquer defeitos.
', 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Comece a passar as roupas pelas peças delicadas, pois elas necessitam de menos
calor.', 
'Verifique freqüentemente os itens como a borracha de vedação da geladeira ou filtros de ar-condicionado para que seja feita a limpeza, troca ou manutenção sempre que necessário, pois o mal  funcionamento destes itens implicam no maior consumo de energia.', 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Desligue o monitor do PC sempre que for se ausentar por mais de 5 minutos.', 
'Desative o bluetooth, wifi ou dados móveis  sempre que não estiver utilizando.  Mesmo fora de alcance do sinal o celular irá continuar buscando uma  conexão de qualidade, essas buscas constantes gera rápida queda no nível de bateria do celular, fazendo você usuário do aparelho pôr para carregar mais vezes que o necessário.    
', 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Prefira ventiladores de mesa ou coluna à ventiladores de teto.', 
'Diminua o brilho de tela do seu celular. As telas coloridas usam bastante energia, para evitar o descarregamento rápido opte pela diminuição do brilho. Nas configurações do seu smartphone existe a opção de adaptação automática do brilho, mas para poupar ainda mais energia deixe o brilho no mínimo manualmente, vale também ressaltar o benefício à saúde dos seus olhos com essa simples ação.
', 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Evite deixar a TV e ou microondas no modo “stand by”.', 
'Diminua o brilho de tela do seu celular. As telas coloridas usam bastante energia, para evitar o descarregamento rápido opte pela diminuição do brilho. Nas configurações do seu smartphone existe a opção de adaptação automática do brilho, mas para poupar ainda mais energia deixe o brilho no mínimo manualmente, vale também ressaltar o benefício à saúde dos seus olhos com essa simples ação.
', 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Retire o carregador da tomada quando não estiver em uso.', 
'Diminua o brilho de tela do seu celular. As telas coloridas usam bastante energia, para evitar o descarregamento rápido opte pela diminuição do brilho. Nas configurações do seu smartphone existe a opção de adaptação automática do brilho, mas para poupar ainda mais energia deixe o brilho no mínimo manualmente, vale também ressaltar o benefício à saúde dos seus olhos com essa simples ação.
', 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('Troque lâmpadas incandescente por lâmpadas de LED.', 
'', 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');