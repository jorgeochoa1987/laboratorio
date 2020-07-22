-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2020 a las 19:42:20
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laboratorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `identificacion` int(11) DEFAULT NULL,
  `nombres` text DEFAULT NULL,
  `apellidos` text DEFAULT NULL,
  `correo` text DEFAULT NULL,
  `idCargo` int(11) DEFAULT NULL,
  `crea` varchar(200) DEFAULT NULL,
  `modifica` varchar(200) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `clave` varchar(200) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `identificacion`, `nombres`, `apellidos`, `correo`, `idCargo`, `crea`, `modifica`, `creaFecha`, `modificaFecha`, `clave`) VALUES
(2, 12345678, 'usuario', 'nuevo', 'usuario@correo.com', 1, NULL, NULL, '2020-07-22 14:20:17', '2020-07-22 17:23:39', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
