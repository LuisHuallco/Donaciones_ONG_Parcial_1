-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2025 a las 01:25:10
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ong_donaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

CREATE TABLE `donaciones` (
  `id` int(11) NOT NULL,
  `id_donante` int(11) DEFAULT NULL,
  `id_proyecto` int(11) DEFAULT NULL,
  `monto` decimal(10,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `donaciones`
--

INSERT INTO `donaciones` (`id`, `id_donante`, `id_proyecto`, `monto`, `fecha`) VALUES
(1, 2, 1, 1100.00, '2025-11-14'),
(2, 4, 2, 600.00, '2025-11-14'),
(3, 6, 3, 6000.00, '2025-11-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donantes`
--

CREATE TABLE `donantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(120) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `donantes`
--

INSERT INTO `donantes` (`id`, `nombre`, `correo`, `telefono`) VALUES
(1, 'Luis Huallco', 'luishualco2005@gmail.com', '0989523533'),
(2, 'Fabian Suarez', 'fabian2005@gmail.com', '0999523533'),
(3, 'Diego Peña', 'Diego78@gmail.com', '0985231664'),
(4, 'Edwin Perez', 'Edwin2000@gmail.com', '0986245788'),
(5, 'Diego Maradona', 'Diego110@gmail.com', '0254783611'),
(6, 'Cristian Zambrano ', 'Zambo252@hotmail.com', '09899999999');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Proyecto ABCD', 'Donaciones para niños y niñas.'),
(2, 'Alimentación para Familias Vulnerables', 'Programa destinado a brindar alimentos básicos a familias en situación de pobreza extrema, garantizando una alimentación adecuada durante cada mes.'),
(3, 'Atención Médica Comunitaria', 'Proyecto que organiza brigadas médicas, entrega de medicinas y chequeos gratuitos para adultos mayores y personas en zonas rurales.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_donante` (`id_donante`),
  ADD KEY `id_proyecto` (`id_proyecto`);

--
-- Indices de la tabla `donantes`
--
ALTER TABLE `donantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `donantes`
--
ALTER TABLE `donantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD CONSTRAINT `donaciones_ibfk_1` FOREIGN KEY (`id_donante`) REFERENCES `donantes` (`id`),
  ADD CONSTRAINT `donaciones_ibfk_2` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
