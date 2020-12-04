-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2020 a las 17:27:51
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jornadaextendida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `situacion` varchar(15) NOT NULL,
  `id_clase` int(11) DEFAULT NULL,
  `id_inscripcion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `situacion`, `id_clase`, `id_inscripcion`) VALUES
(1, 'Asistio', 1, 1),
(2, 'Falla', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriacentro`
--

CREATE TABLE `categoriacentro` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoriacentro`
--

INSERT INTO `categoriacentro` (`id_categoria`, `nombre`) VALUES
(2, 'Artes'),
(1, 'Deporte'),
(3, 'Tercer Eje');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centrointeres`
--

CREATE TABLE `centrointeres` (
  `id_centro` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `cupos` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `centrointeres`
--

INSERT INTO `centrointeres` (`id_centro`, `nombre`, `cupos`, `hora_inicio`, `hora_final`, `id_categoria`, `estado`) VALUES
(1, 'Baloncesto', 100, '09:30:00', '15:00:00', 1, 'activo'),
(2, 'Futbol', 100, '09:30:00', '15:00:00', 1, 'activo'),
(3, 'Artes', 150, '09:30:00', '15:00:00', 2, 'activo'),
(4, 'Danzas', 150, '09:30:00', '15:00:00', 2, 'activo'),
(5, 'Logica Matematica', 130, '09:30:00', '15:00:00', 3, 'activo'),
(6, 'Ingles', 150, '09:30:00', '15:00:00', 3, 'activo ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `id_clase` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_plan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`id_clase`, `fecha`, `id_plan`) VALUES
(1, '2020-07-22', 2),
(2, '2020-07-22', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `nombre`) VALUES
(1, 'activo'),
(2, 'inactivo'),
(3, 'reportado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gradocurso`
--

CREATE TABLE `gradocurso` (
  `id_grado` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `jornada` varchar(30) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gradocurso`
--

INSERT INTO `gradocurso` (`id_grado`, `nombre`, `jornada`, `estado`) VALUES
(1, 'Primero', 'Mañana', 'activo'),
(2, 'Segundo', 'Mañana', 'activo'),
(3, 'Tercero', 'Mañana', 'activo'),
(4, 'Cuarto', 'Mañana', 'activo'),
(5, 'Quinto', 'Mañana', 'activo'),
(6, 'Sexto', 'Tarde', 'activo'),
(7, 'Septimo', 'Tarde', 'activo'),
(8, 'Octavo', 'Tarde', 'activo'),
(9, 'Noveno', 'Tarde', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id_inscripcion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `anualidad` year(4) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id_inscripcion`, `fecha`, `anualidad`, `estado`, `id_curso`) VALUES
(1, '2020-07-21', 2020, 'activo', 1),
(2, '2020-07-21', 2020, 'activo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `documento` varchar(10) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `eps` varchar(30) NOT NULL,
  `rh` varchar(4) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `id_centro` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `apellido`, `documento`, `telefono`, `fecha_nacimiento`, `eps`, `rh`, `id_usuario`, `id_curso`, `id_centro`, `id_estado`) VALUES
(1, 'Daniel ', 'Camacho', '1001095566', '3045484259', '2002-12-05', 'Salud Total', 'O+', 1, 1, NULL, 1),
(2, 'Eduardo ', 'Camacho', '1005525039', '3132276345', '2002-06-03', 'Compensar', 'A+', 2, 2, NULL, 1),
(3, 'Johari ', 'Cortes', '1000965622', '3132280245', '2002-09-29', 'Salud Total', 'AB+', 3, NULL, 1, 1),
(4, 'Andres', 'Gomez', '52342810', '3103166119', '1973-03-25', 'Salud Total', 'A+', 4, NULL, 1, 1),
(5, 'Dayana', 'Molano', '1009572886', '3123782903', '2003-09-30', 'Compensar', 'O+', 5, 1, NULL, 1),
(6, 'Antonella', 'Suarez', '1001926993', '3123459028', '2005-04-15', 'Sanitas', 'A-', 6, 1, NULL, 1),
(7, 'Camilo', 'Sanchez', '9344966590', '3120963289', '2005-12-24', 'Compensar', 'O+', 7, 1, NULL, 1),
(8, 'Gabriel', 'Escamilla', '1014266290', '3201862930', '2004-02-22', 'Salud Total', 'A+', 8, 1, NULL, 1),
(9, 'Juliana', 'Toro', '1092763589', '3201293222', '2003-03-25', 'Nueva EPS', 'AB-', 9, NULL, 4, 1),
(10, 'Dayana ', 'Chaguala', '1009253288', '3212112636', '2001-12-16', 'Compensar', 'O+', 10, 1, NULL, 1),
(11, 'Damian', 'Sua', '1009265382', '3127420730', '2008-06-09', 'Salud Total', 'A+', 11, 1, NULL, 3),
(12, 'Martha', 'Zarate', '52349209', '3131229373', '2004-08-25', 'Compensar', 'A+', 12, 1, NULL, 1),
(13, 'Sergio', 'Beltran', '1000982237', '3219020775', '2007-08-09', 'Nueva EPS', 'O+', 13, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plancurso`
--

CREATE TABLE `plancurso` (
  `id_plan` int(11) NOT NULL,
  `dia` varchar(10) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  `id_centro` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plancurso`
--

INSERT INTO `plancurso` (`id_plan`, `dia`, `hora_inicio`, `hora_final`, `id_centro`, `id_curso`) VALUES
(1, 'Lunes', '09:30:00', '12:00:00', 1, 1),
(2, 'Miercoles', '09:30:00', '12:00:00', 1, 1),
(3, 'Martes', '09:30:00', '12:00:00', 3, 1),
(4, 'Jueves', '09:30:00', '12:00:00', 3, 1),
(5, 'Viernes', '09:30:00', '12:00:00', 5, 1),
(6, 'Lunes', '09:30:00', '12:00:00', 2, 1),
(7, 'Miercoles', '09:30:00', '12:00:00', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacion`
--

CREATE TABLE `programacion` (
  `id_programacion` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `id_clase` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programacion`
--

INSERT INTO `programacion` (`id_programacion`, `descripcion`, `id_clase`) VALUES
(1, 'Manejo del control con el balon', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusuario`
--

CREATE TABLE `rolusuario` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rolusuario`
--

INSERT INTO `rolusuario` (`id_rol`, `nombre`) VALUES
(1, 'Coordinador'),
(2, 'Estudiante'),
(3, 'Profesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `id_curso` int(11) NOT NULL,
  `numero_curso` varchar(5) NOT NULL,
  `id_grado` int(11) DEFAULT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`id_curso`, `numero_curso`, `id_grado`, `estado`) VALUES
(1, '101', 1, 'activo'),
(2, '102', 1, 'activo'),
(3, '201', 2, 'activo'),
(4, '202', 2, 'activo'),
(5, '301', 3, 'activo'),
(6, '302', 3, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariopersona`
--

CREATE TABLE `usuariopersona` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariopersona`
--

INSERT INTO `usuariopersona` (`id_usuario`, `email`, `clave`, `estado`, `id_rol`) VALUES
(1, 'ejemplo1@email.com', '123456789', 'activo', 1),
(2, 'ejemplo2@email.com', '123456789', 'activo', 2),
(3, 'ejemplo3@email.com', '123456789', 'activo', 3),
(4, 'ejemplo4@email.com', '123456789', 'activo', 2),
(5, 'ejemplo5@email.com', '123456789', 'activo', 2),
(6, 'ejemplo6@email.com', '123456789', 'activo', 2),
(7, 'ejemplo7@email.com', '123456789', 'activo', 2),
(8, 'ejemplo8@email.com', '123456789', 'activo', 2),
(9, 'ejemplo9@email.com', '123456789', 'activo', 3),
(10, 'ejemplo10@email.com', '123456789', 'activo', 2),
(11, 'ejemplo11@email.com', '123456789', 'activo', 2),
(12, 'ejemplo12@email.com', '123456789', 'activo', 2),
(13, 'ejemplo13@email.com', '123456789', 'activo', 2);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vwinfesxcur`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vwinfesxcur` (
`numero_curso` varchar(5)
,`nombre` varchar(30)
,`apellido` varchar(30)
,`documento` varchar(10)
,`telefono` varchar(10)
,`edad` int(5)
,`eps` varchar(30)
,`rh` varchar(4)
,`email` varchar(30)
,`estado` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vwinfpro`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vwinfpro` (
`nombre` varchar(30)
,`apellido` varchar(30)
,`documento` varchar(10)
,`telefono` varchar(10)
,`centro_interes` varchar(30)
,`edad` int(5)
,`email` varchar(30)
,`rol` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vwinfesxcur`
--
DROP TABLE IF EXISTS `vwinfesxcur`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwinfesxcur`  AS  select `s`.`numero_curso` AS `numero_curso`,`p`.`nombre` AS `nombre`,`p`.`apellido` AS `apellido`,`p`.`documento` AS `documento`,`p`.`telefono` AS `telefono`,year(curdate()) - year(`p`.`fecha_nacimiento`) AS `edad`,`p`.`eps` AS `eps`,`p`.`rh` AS `rh`,`up`.`email` AS `email`,`s`.`estado` AS `estado` from ((`persona` `p` join `salon` `s` on(`s`.`id_curso` = `p`.`id_curso`)) join `usuariopersona` `up` on(`up`.`id_usuario` = `p`.`id_usuario`)) where `s`.`numero_curso` = 101 and `p`.`id_estado` = 1 ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vwinfpro`
--
DROP TABLE IF EXISTS `vwinfpro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwinfpro`  AS  select `p`.`nombre` AS `nombre`,`p`.`apellido` AS `apellido`,`p`.`documento` AS `documento`,`p`.`telefono` AS `telefono`,`c`.`nombre` AS `centro_interes`,year(curdate()) - year(`p`.`fecha_nacimiento`) AS `edad`,`up`.`email` AS `email`,`ru`.`nombre` AS `rol` from (((`persona` `p` join `usuariopersona` `up` on(`p`.`id_usuario` = `up`.`id_usuario`)) join `rolusuario` `ru` on(`ru`.`id_rol` = `up`.`id_rol`)) join `centrointeres` `c` on(`c`.`id_centro` = `p`.`id_centro`)) where `ru`.`nombre` = 'Profesor' ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `id_clase` (`id_clase`),
  ADD KEY `id_inscripcion` (`id_inscripcion`);

--
-- Indices de la tabla `categoriacentro`
--
ALTER TABLE `categoriacentro`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `centrointeres`
--
ALTER TABLE `centrointeres`
  ADD PRIMARY KEY (`id_centro`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`id_clase`),
  ADD KEY `id_plan` (`id_plan`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `gradocurso`
--
ALTER TABLE `gradocurso`
  ADD PRIMARY KEY (`id_grado`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_centro` (`id_centro`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `fk_id_usuario` (`id_usuario`);

--
-- Indices de la tabla `plancurso`
--
ALTER TABLE `plancurso`
  ADD PRIMARY KEY (`id_plan`),
  ADD KEY `id_centro` (`id_centro`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD PRIMARY KEY (`id_programacion`),
  ADD KEY `id_clase` (`id_clase`);

--
-- Indices de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
  ADD PRIMARY KEY (`id_rol`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id_curso`),
  ADD UNIQUE KEY `numero_curso` (`numero_curso`),
  ADD KEY `id_grado` (`id_grado`);

--
-- Indices de la tabla `usuariopersona`
--
ALTER TABLE `usuariopersona`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoriacentro`
--
ALTER TABLE `categoriacentro`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `centrointeres`
--
ALTER TABLE `centrointeres`
  MODIFY `id_centro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clase`
--
ALTER TABLE `clase`
  MODIFY `id_clase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `gradocurso`
--
ALTER TABLE `gradocurso`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `plancurso`
--
ALTER TABLE `plancurso`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `programacion`
--
ALTER TABLE `programacion`
  MODIFY `id_programacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuariopersona`
--
ALTER TABLE `usuariopersona`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_clase`) REFERENCES `clase` (`id_clase`),
  ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`id_inscripcion`) REFERENCES `inscripcion` (`id_inscripcion`);

--
-- Filtros para la tabla `centrointeres`
--
ALTER TABLE `centrointeres`
  ADD CONSTRAINT `centrointeres_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoriacentro` (`id_categoria`);

--
-- Filtros para la tabla `clase`
--
ALTER TABLE `clase`
  ADD CONSTRAINT `clase_ibfk_1` FOREIGN KEY (`id_plan`) REFERENCES `plancurso` (`id_plan`);

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `salon` (`id_curso`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuariopersona` (`id_usuario`),
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `salon` (`id_curso`),
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`id_centro`) REFERENCES `centrointeres` (`id_centro`),
  ADD CONSTRAINT `persona_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `plancurso`
--
ALTER TABLE `plancurso`
  ADD CONSTRAINT `plancurso_ibfk_1` FOREIGN KEY (`id_centro`) REFERENCES `centrointeres` (`id_centro`),
  ADD CONSTRAINT `plancurso_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `salon` (`id_curso`);

--
-- Filtros para la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD CONSTRAINT `programacion_ibfk_1` FOREIGN KEY (`id_clase`) REFERENCES `clase` (`id_clase`);

--
-- Filtros para la tabla `salon`
--
ALTER TABLE `salon`
  ADD CONSTRAINT `salon_ibfk_1` FOREIGN KEY (`id_grado`) REFERENCES `gradocurso` (`id_grado`);

--
-- Filtros para la tabla `usuariopersona`
--
ALTER TABLE `usuariopersona`
  ADD CONSTRAINT `usuariopersona_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rolusuario` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
