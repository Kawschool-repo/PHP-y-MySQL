--phpmyadmin
--ELIMINAR UNA DATABASE
DROP DATABASE `tienda_online`;
CREATE DATABASE tienda_online;

CREATE TABLE `tienda_online`.`paises` (
     `id` INT(11) NOT NULL AUTO_INCREMENT , 
     `nombre` VARCHAR(50) NOT NULL , 
     PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `tienda_online`.`peliculas` (
    `id` INT(11) NOT NULL AUTO_INCREMENT ,
    `titulo` VARCHAR(80) NOT NULL , 
    `descripcion` TEXT NOT NULL , 
    `foto` VARCHAR(50) NOT NULL ,
    `pais_id` INT NOT NULL , 
    `fecha` DATE NOT NULL , 
    `estado` INT(2) NOT NULL DEFAULT '1' ,
    PRIMARY KEY (`id`), INDEX (`pais_id`)
) ENGINE = InnoDB;

INSERT INTO `paises` (`id`, `nombre`) 
VALUES (NULL, 'EE.UU'), (NULL, 'ESPAÑA')

SELECT * FROM paises WHERE id=1;

UPDATE paises SET nombre = 'ESPAÑAS'  WHERE id = 2;

SELECT peliculas.id,titulo,descripcion,foto,nombre,fecha,estado  FROM peliculas
INNER JOIN paises
ON peliculas.pais_id = paises.id

SELECT pe.id,titulo,descripcion,foto,nombre,fecha,estado 
 FROM peliculas pe
INNER JOIN paises pa
ON pe.pais_id = pa.id




