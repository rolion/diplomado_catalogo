SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `dealer` CASCADE
;

DROP TABLE IF EXISTS `marca` CASCADE
;

DROP TABLE IF EXISTS `modelo` CASCADE
;

DROP TABLE IF EXISTS `vehiculo` CASCADE
;

CREATE TABLE `dealer`
(
	`id_dealer` INT NOT NULL,
	`Nombre` VARCHAR(50),
	`Apellido` VARCHAR(50),
	`Telefono` INT,
	`Correo` VARCHAR(50),
	CONSTRAINT `PK_dealer` PRIMARY KEY (`id_dealer`)
)
;

CREATE TABLE `marca`
(
	`id_marca` INT NOT NULL,
	`descripcion` TEXT,
	CONSTRAINT `PK_marca` PRIMARY KEY (`id_marca`)
)
;

CREATE TABLE `modelo`
(
	`Id_modelo` INT NOT NULL AUTO_INCREMENT ,
	`Modelo` TEXT,
	`Year` INT,
	`idmarca` INT,
	CONSTRAINT `PK_Modelo` PRIMARY KEY (`Id_modelo`)
)
;

CREATE TABLE `vehiculo`
(
	`Id_vehiculo` INT NOT NULL AUTO_INCREMENT ,
	`vin` VARCHAR(50),
	`kilometraje` INT,
	`precio` DOUBLE,
	`idmodelo` INT,
	`id_dealer` INT,
	CONSTRAINT `PK_Vehiculo` PRIMARY KEY (`Id_vehiculo`)
)
;

ALTER TABLE `modelo` 
 ADD INDEX `IXFK_Modelo_marca` (`idmarca` ASC)
;

ALTER TABLE `vehiculo` 
 ADD INDEX `IXFK_vehiculo_dealer` (`id_dealer` ASC)
;

ALTER TABLE `vehiculo` 
 ADD INDEX `IXFK_Vehiculo_Modelo` (`idmodelo` ASC)
;

ALTER TABLE `modelo` 
 ADD CONSTRAINT `FK_Modelo_marca`
	FOREIGN KEY (`idmarca`) REFERENCES `marca` (`id_marca`) ON DELETE No Action ON UPDATE No Action
;

ALTER TABLE `vehiculo` 
 ADD CONSTRAINT `FK_Vehiculo_Modelo`
	FOREIGN KEY (`idmodelo`) REFERENCES `modelo` (`Id_modelo`) ON DELETE No Action ON UPDATE No Action
;

ALTER TABLE `vehiculo` 
 ADD CONSTRAINT `FK_vehiculo_dealer`
	FOREIGN KEY (`id_dealer`) REFERENCES `dealer` (`id_dealer`) ON DELETE No Action ON UPDATE No Action
;

SET FOREIGN_KEY_CHECKS=1
