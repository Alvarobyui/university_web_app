-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2023 a las 22:53:52
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `universidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursousuario`
--

CREATE TABLE `cursousuario` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `nota` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursousuario`
--

INSERT INTO `cursousuario` (`id`, `usuario_id`, `materia_id`, `nota`) VALUES
(1, 2, 1, '50'),
(2, 3, 3, '90'),
(3, 4, 1, '100'),
(4, 5, 4, '99'),
(5, 6, 5, '100'),
(14, 6, 5, '100'),
(15, 14, 5, '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `nombre`, `descripcion`) VALUES
(1, 'PHP y Laravel', '70%/100%'),
(2, 'Bases de Datos', '70%/100%'),
(3, 'POO y PHP', '70%/100%'),
(4, 'SQL y mySQL', '70%/100%'),
(5, 'sinasignar', 'sin asignar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `rol` int(11) NOT NULL DEFAULT 1,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `contacto` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `rol`, `nombre`, `apellido`, `contacto`, `estado`) VALUES
(1, 'admin@admin.com', 'admin', 1, 'Alvaro', 'Diaz', 924126535, 1),
(2, 'maestro@maestro.com', 'maestro', 2, 'Harold', 'Carazas', 987654321, 1),
(3, 'alumno@alumno.com', 'alumno', 3, 'Alumno', 'Funval', 987654321, 1),
(4, 'alumno1@alumno.com', 'alumno', 2, 'Alumno', 'Funval', 987654321, 1),
(5, 'alumno2@alumno.com', 'alumno', 3, 'Alumno', 'Funval', 987654321, 1),
(6, 'alumno3@alumno.com', 'alumno', 3, 'Alumno', 'Funval', 987654321, 1),
(7, 'test@test.com', '', 1, 'ttes', 'tes', 920123456, 1),
(14, 'mestro1@maestro.com', '', 2, 'maestr', 'o', 987654321, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursousuario`
--
ALTER TABLE `cursousuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CursoUsuario_usuario_id_usuario_id` (`usuario_id`),
  ADD KEY `CursoUsuario_materia_id_materia_id` (`materia_id`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursousuario`
--
ALTER TABLE `cursousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursousuario`
--
ALTER TABLE `cursousuario`
  ADD CONSTRAINT `CursoUsuario_materia_id_materia_id` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`id`),
  ADD CONSTRAINT `CursoUsuario_usuario_id_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
