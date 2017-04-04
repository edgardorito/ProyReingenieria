CREATE TABLE `proyreing`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido` VARCHAR(50) NOT NULL,
  `matricula` VARCHAR(20) NOT NULL,
  `cuatrimestre` VARCHAR(10) NULL,
  `email` VARCHAR(15) NOT NULL,
  `contrasena` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE IF NOT EXISTS `proyreing`.`cursos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `idptc` INT(20) NOT NULL,
  `cuatrimestre` VARCHAR(45) NOT NULL,
  `materia` VARCHAR(45) NOT NULL,
  `horario` VARCHAR(45) NOT NULL,
  `grupo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB
