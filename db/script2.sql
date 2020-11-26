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
 `id`           integer NOT NULL AUTO_INCREMENT ,
 `codigo`       integer NOT NULL ,
 `nombre`       varchar(100) NOT NULL ,
 `fechaNac`     date NOT NULL ,
 `sexo`         varchar(30) NOT NULL ,
 `fechaIngreso` date NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_47` (`codigo`),
CONSTRAINT `FK_47` FOREIGN KEY `fkIdx_47` (`codigo`) REFERENCES `CODIGO` (`id`)
);






-- ************************************** `Mes_Turno`

CREATE TABLE `Mes_Turno`
(
 `id`            integer NOT NULL AUTO_INCREMENT ,
 `fecha_entrada` date NOT NULL ,
 `fecha_salida`  date NULL ,
 `turno`         varchar(45) NOT NULL ,
 `id_enfermera`  integer NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_86` (`id_enfermera`),
CONSTRAINT `FK_86` FOREIGN KEY `fkIdx_86` (`id_enfermera`) REFERENCES `ENFERMERA` (`id`)
);






-- ************************************** `Mes_Area`

CREATE TABLE `Mes_Area`
(
 `id`            integer NOT NULL AUTO_INCREMENT ,
 `fecha_entrada` date NOT NULL ,
 `fecha_salida`  date NULL ,
 `id_area`       integer NOT NULL ,
 `id_enfermera`  integer NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_71` (`id_area`),
CONSTRAINT `FK_71` FOREIGN KEY `fkIdx_71` (`id_area`) REFERENCES `AREA` (`id`),
KEY `fkIdx_74` (`id_enfermera`),
CONSTRAINT `FK_74` FOREIGN KEY `fkIdx_74` (`id_enfermera`) REFERENCES `ENFERMERA` (`id`)
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





