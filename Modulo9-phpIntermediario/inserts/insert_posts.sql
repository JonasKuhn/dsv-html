INSERT INTO `posts`(`titulo`, `data_criacao`, `texto`, `nome_autor`) 
VALUES ('Titulo de teste', '18-05-03 00:00:00', 'texto para exemplo', 'Jonas Kuhn');


CREATE TABLE `blog`.`usuario` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(40) NOT NULL , `email` VARCHAR(40) NOT NULL , `senha` VARCHAR(40) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;