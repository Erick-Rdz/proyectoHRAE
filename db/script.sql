-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2020 a las 19:29:12
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hrae`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `nombre`) VALUES
(3, 'COVID 2'),
(7, 'ADMINISTRACION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalagoincidencias`
--

CREATE TABLE `catalagoincidencias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `catalagoincidencias`
--

INSERT INTO `catalagoincidencias` (`id`, `nombre`) VALUES
(2, 'VACACIONES PRIMER PERIODO'),
(3, 'VACACIONES SEGUNDO PERIODO'),
(10, 'PRUEBA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo`
--

CREATE TABLE `codigo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `codigo`
--

INSERT INTO `codigo` (`id`, `nombre`, `descripcion`) VALUES
(1, 'AMO2035 ', 'ENFERMERA GENERAL'),
(4, 'AM02034', 'ESPECIALISTA'),
(5, 'PRUEBA', 'PRUEBA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermera`
--

CREATE TABLE `enfermera` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fechaNac` date NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `turno` varchar(30) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enfermera`
--

INSERT INTO `enfermera` (`id`, `codigo`, `nombre`, `fechaNac`, `sexo`, `turno`, `fechaIngreso`, `area`) VALUES
(16, 1, 'ELIZBETH ', '2020-09-04', 'Femenino', 'Jornadas Especiales', '2020-09-05', 7),
(17, 4, 'SOFIA', '2020-09-04', 'Masculino', 'Matutino', '2020-09-05', 3),
(21, 5, 'ERICK RODRIGUEZ', '2020-10-04', 'Femenino', 'Vespertino', '2020-10-02', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `id` int(11) NOT NULL,
  `idIncidencia` int(11) NOT NULL,
  `Enfermera` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `fechafin` date DEFAULT NULL,
  `cubreEnfermera` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id`, `idIncidencia`, `Enfermera`, `fecha`, `fechafin`, `cubreEnfermera`) VALUES
(88, 2, 16, '2020-10-07', NULL, NULL),
(89, 3, 17, '2020-10-21', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalagoincidencias`
--
ALTER TABLE `catalagoincidencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `codigo`
--
ALTER TABLE `codigo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `enfermera`
--
ALTER TABLE `enfermera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkIdx_47` (`codigo`),
  ADD KEY `fkIdx_50` (`area`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkIdx_53` (`Enfermera`),
  ADD KEY `fkIdx_56` (`idIncidencia`),
  ADD KEY `fkIdx_59` (`cubreEnfermera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `catalagoincidencias`
--
ALTER TABLE `catalagoincidencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `codigo`
--
ALTER TABLE `codigo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `enfermera`
--
ALTER TABLE `enfermera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `enfermera`
--
ALTER TABLE `enfermera`
  ADD CONSTRAINT `FK_47` FOREIGN KEY (`codigo`) REFERENCES `codigo` (`id`),
  ADD CONSTRAINT `FK_50` FOREIGN KEY (`area`) REFERENCES `area` (`id`);

--
-- Filtros para la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `FK_53` FOREIGN KEY (`Enfermera`) REFERENCES `enfermera` (`id`),
  ADD CONSTRAINT `FK_56` FOREIGN KEY (`idIncidencia`) REFERENCES `catalagoincidencias` (`id`),
  ADD CONSTRAINT `FK_59` FOREIGN KEY (`cubreEnfermera`) REFERENCES `enfermera` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
