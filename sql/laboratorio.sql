-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2020 a las 04:51:39
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

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
-- Estructura de tabla para la tabla `calidadencabezado`
--

CREATE TABLE `calidadencabezado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Fecha` int(11) NOT NULL,
  `Hora` int(11) NOT NULL,
  `id_tipoMuestra` int(11) NOT NULL,
  `id_lugarMuestra` int(11) NOT NULL,
  `Despacho` int(11) NOT NULL,
  `id_Cliente` int(11) NOT NULL,
  `id_Producto` int(11) NOT NULL,
  `id_tipoProducto` int(11) NOT NULL,
  `Slump` int(11) NOT NULL,
  `temperaturaAmbiente` int(11) NOT NULL,
  `temperaturaConcreto` int(11) NOT NULL,
  `id_cemento` int(11) NOT NULL,
  `id_procedencia` int(11) NOT NULL,
  `id_proveedorCemento` int(11) NOT NULL,
  `cantidadAgua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `nombre`, `descripcion`, `crea`, `modifica`, `creaFecha`, `modificaFecha`) VALUES
(1, 'Asesor', '', 'Daniel', NULL, '2020-07-26 01:42:24', '2020-07-26 01:42:24'),
(2, 'Gerente', '', '', NULL, '2020-07-26 01:46:25', '2020-07-26 01:46:25'),
(3, 'Auxiliar', '', '12345678', NULL, '2020-07-26 01:47:28', '2020-07-26 01:47:28'),
(4, 'Laboratorio', '', '12345678', NULL, '2020-07-26 22:55:44', '2020-07-26 22:55:44'),
(5, 'Laboratorio', '', '12345678', NULL, '2020-07-28 03:19:02', '2020-07-28 03:19:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `identificacion` int(20) DEFAULT NULL,
  `razonSocial` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `identificacion`, `razonSocial`, `direccion`, `telefono`, `contacto`, `crea`, `modifica`, `creaFecha`, `modificaFecha`) VALUES
(6, 111, 'qwe3132', 'djdjeeee', 2147483647, 'qlwkjlkwjdkas', NULL, NULL, '2020-08-27 02:01:28', '2020-08-27 02:19:35'),
(8, 1095809867, '2131232', 'fsadfsa', 231312, '2312312312', NULL, NULL, '2020-08-27 02:19:54', '2020-08-27 02:19:54'),
(9, 1095809867, 'sdfafds', 'sector d torre 12 apto 301', 2147483647, 'vgdfgagf', NULL, NULL, '2020-08-27 02:29:22', '2020-08-27 02:29:22'),
(10, 1095809867, 'sdfafds', 'sector d torre 12 apto 301', 2147483647, 'vgdfgagf', NULL, NULL, '2020-08-27 02:39:50', '2020-08-27 02:39:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechasproductos`
--

CREATE TABLE `fechasproductos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugarmuestras`
--

CREATE TABLE `lugarmuestras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiasprimas`
--

CREATE TABLE `materiasprimas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_tipoMaterias` int(11) NOT NULL,
  `id_unidad` int(11) NOT NULL,
  `id_procedencia` int(11) NOT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materiasprimas`
--

INSERT INTO `materiasprimas` (`id`, `nombre`, `descripcion`, `id_tipoMaterias`, `id_unidad`, `id_procedencia`, `crea`, `modifica`, `creaFecha`, `modificaFecha`) VALUES
(1, 'UYEW', 'dgfds', 1, 1, 0, NULL, NULL, '2020-08-23 23:17:02', '2020-08-23 23:17:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Laboratorio', 'Este es el modulo'),
(2, 'Permisos', 'Prueba'),
(8, 'PRUEBA 3', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedenciamaterias`
--

CREATE TABLE `procedenciamaterias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_tipoProductos` int(11) NOT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_tipomaterias` int(11) NOT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomaterias`
--

CREATE TABLE `tipomaterias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipomaterias`
--

INSERT INTO `tipomaterias` (`id`, `nombre`, `descripcion`, `crea`, `modifica`, `creaFecha`, `modificaFecha`) VALUES
(1, 'TIPO DE MP 1', 'qwerty', NULL, NULL, '2020-08-23 23:16:33', '2020-08-23 23:16:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomuestras`
--

CREATE TABLE `tipomuestras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipomuestras`
--

INSERT INTO `tipomuestras` (`id`, `nombre`, `crea`, `modifica`, `creaFecha`, `modificaFecha`, `descripcion`) VALUES
(1, 'erwwerewrw', NULL, NULL, '2020-08-23 15:08:46', '2020-08-23 23:11:07', '   wawdwea es una prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproductos`
--

CREATE TABLE `tipoproductos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id`, `nombre`, `descripcion`, `crea`, `modifica`, `creaFecha`, `modificaFecha`) VALUES
(1, 'GFCXSA', '  3edc', NULL, NULL, '2020-08-23 16:54:40', '2020-08-23 17:00:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `identificacion` int(11) DEFAULT NULL,
  `nombres` text DEFAULT NULL,
  `apellidos` text DEFAULT NULL,
  `correo` varchar(200) DEFAULT NULL,
  `idCargo` int(11) DEFAULT NULL,
  `crea` varchar(200) DEFAULT NULL,
  `modifica` varchar(200) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT current_timestamp(),
  `modificaFecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `clave` varchar(200) CHARACTER SET armscii8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `identificacion`, `nombres`, `apellidos`, `correo`, `idCargo`, `crea`, `modifica`, `creaFecha`, `modificaFecha`, `clave`) VALUES
(2, 12345678, 'usuario', 'nuevo', 'usuario@correo.com', 1, NULL, NULL, '2020-07-22 14:20:17', '2020-07-22 17:23:39', '123456'),
(16, 1098, 'LUIS DANIEL', 'RINCON FORERO', 'LDANIELRINCONF@GMAIL.COM', 1, NULL, NULL, '2020-08-07 03:11:30', '2020-08-07 03:11:30', '123'),
(17, 1098, 'LUIS DANIEL', 'RINCON FORERO', 'LDANIELRINCONF@GMAIL.COM', 1, NULL, NULL, '2020-08-07 03:11:30', '2020-08-07 03:11:30', '123'),
(18, 1, 'CAMILA', 'SANDOVAL', 'CAMILASANDOVALZARATE@GMAIL.COM', 2, NULL, NULL, '2020-08-07 03:13:54', '2020-08-07 03:13:54', '123'),
(19, 1, 'CAMILA', 'SANDOVAL', 'CAMILASANDOVALZARATE@GMAIL.COM', 2, NULL, NULL, '2020-08-07 03:13:54', '2020-08-07 03:13:54', '123'),
(22, 1098670572, 'LUIS DANIEL', 'RINCON FORERO', 'LDANIELRINCONF@GMAIL.COM', 1, NULL, NULL, '2020-08-09 22:26:32', '2020-08-09 22:26:32', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calidadencabezado`
--
ALTER TABLE `calidadencabezado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fechasproductos`
--
ALTER TABLE `fechasproductos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugarmuestras`
--
ALTER TABLE `lugarmuestras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materiasprimas`
--
ALTER TABLE `materiasprimas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `procedenciamaterias`
--
ALTER TABLE `procedenciamaterias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipomaterias`
--
ALTER TABLE `tipomaterias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipomuestras`
--
ALTER TABLE `tipomuestras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoproductos`
--
ALTER TABLE `tipoproductos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calidadencabezado`
--
ALTER TABLE `calidadencabezado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `fechasproductos`
--
ALTER TABLE `fechasproductos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lugarmuestras`
--
ALTER TABLE `lugarmuestras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materiasprimas`
--
ALTER TABLE `materiasprimas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `procedenciamaterias`
--
ALTER TABLE `procedenciamaterias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipomaterias`
--
ALTER TABLE `tipomaterias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipomuestras`
--
ALTER TABLE `tipomuestras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipoproductos`
--
ALTER TABLE `tipoproductos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
