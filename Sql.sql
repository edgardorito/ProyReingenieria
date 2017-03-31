CREATE TABLE `proyreing`.`registroalumno` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido` VARCHAR(50) NOT NULL,
  `matricula` VARCHAR(20) NOT NULL,
  `cuatrimestre` VARCHAR(10) NULL,
  `email` VARCHAR(15) NOT NULL,
  `contrasena` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`));
