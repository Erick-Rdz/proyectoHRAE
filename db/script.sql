-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;


-- ************************************** `CODIGO`

CREATE TABLE `CODIGO`
(
 `id`          integer NOT NULL AUTO_INCREMENT ,
 `nombre`      varchar(50) NOT NULL ,
 `descripcion` varchar(50) NOT NULL ,

PRIMARY KEY (`id`)
);






-- ************************************** `CATALAGOINCIDENCIAS`

CREATE TABLE `CATALAGOINCIDENCIAS`
(
 `id`     integer NOT NULL AUTO_INCREMENT ,
 `nombre` varchar(70) NOT NULL ,

PRIMARY KEY (`id`)
);






-- ************************************** `AREA`

CREATE TABLE `AREA`
(
 `id`     integer NOT NULL AUTO_INCREMENT ,
 `nombre` varchar(50) NOT NULL ,

PRIMARY KEY (`id`)
);






-- ************************************** `ENFERMERA`

CREATE TABLE `ENFERMERA`
(
 `id`            integer NOT NULL AUTO_INCREMENT ,
 `codigo`        integer NOT NULL ,
 `nombre`        varchar(100) NOT NULL ,
 `fechaNac`      date NOT NULL ,
 `sexo`          varchar(30) NOT NULL ,
 `turno`         varchar(30) NOT NULL ,
 `horaEntrada`   time NOT NULL ,
 `horaSalida`    time NOT NULL ,
 `diasLaborales` varchar(80) NOT NULL ,
 `fechaIngreso`  date NOT NULL ,
 `area`          integer NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_47` (`codigo`),
CONSTRAINT `FK_47` FOREIGN KEY `fkIdx_47` (`codigo`) REFERENCES `CODIGO` (`id`),
KEY `fkIdx_50` (`area`),
CONSTRAINT `FK_50` FOREIGN KEY `fkIdx_50` (`area`) REFERENCES `AREA` (`id`)
);






-- ************************************** `INCIDENCIAS`

CREATE TABLE `INCIDENCIAS`
(
 `id`             integer NOT NULL AUTO_INCREMENT ,
 `idIncidencia`   integer NOT NULL ,
 `Enfermera`      integer NOT NULL ,
 `fecha`          date NOT NULL ,
 `fechafin`       date NULL ,
 `cubreEnfermera` integer NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_53` (`Enfermera`),
CONSTRAINT `FK_53` FOREIGN KEY `fkIdx_53` (`Enfermera`) REFERENCES `ENFERMERA` (`id`),
KEY `fkIdx_56` (`idIncidencia`),
CONSTRAINT `FK_56` FOREIGN KEY `fkIdx_56` (`idIncidencia`) REFERENCES `CATALAGOINCIDENCIAS` (`id`),
KEY `fkIdx_59` (`cubreEnfermera`),
CONSTRAINT `FK_59` FOREIGN KEY `fkIdx_59` (`cubreEnfermera`) REFERENCES `ENFERMERA` (`id`)
);





