-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 10, 2020 at 01:46 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Laboratorio`
--

-- --------------------------------------------------------

--
-- Table structure for table `calidadEncabezado`
--

CREATE TABLE `calidadEncabezado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
-- Table structure for table `Cargos`
--

CREATE TABLE `Cargos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Cargos`
--

INSERT INTO `Cargos` (`id`, `nombre`, `descripcion`, `crea`, `modifica`, `creaFecha`, `modificaFecha`) VALUES
(1, 'Asesor', '', 'Daniel', NULL, '2020-07-26 01:42:24', '2020-07-26 01:42:24'),
(2, 'Gerente', '', '', NULL, '2020-07-26 01:46:25', '2020-07-26 01:46:25'),
(3, 'Auxiliar', '', '12345678', NULL, '2020-07-26 01:47:28', '2020-07-26 01:47:28'),
(4, 'Laboratorio', '', '12345678', NULL, '2020-07-26 22:55:44', '2020-07-26 22:55:44'),
(5, 'Laboratorio', '', '12345678', NULL, '2020-07-28 03:19:02', '2020-07-28 03:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `Clientes`
--

CREATE TABLE `Clientes` (
  `id` int(11) NOT NULL,
  `identificacion` int(20) DEFAULT NULL,
  `razonSocial` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fechasProductos`
--

CREATE TABLE `fechasProductos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lugarMuestras`
--

CREATE TABLE `lugarMuestras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `materiasPrimas`
--

CREATE TABLE `materiasPrimas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_tipoMaterias` int(11) NOT NULL,
  `id_unidad` int(11) NOT NULL,
  `id_procedencia` int(11) NOT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Modulos`
--

CREATE TABLE `Modulos` (
  `id` int(11) NOT NULL,
  `nombre` text,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Modulos`
--

INSERT INTO `Modulos` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Laboratorio', 'Este es el modulo'),
(2, 'Permisos', 'Prueba'),
(8, 'PRUEBA 3', 'prueba');

-- --------------------------------------------------------

--
-- Table structure for table `procedenciaMaterias`
--

CREATE TABLE `procedenciaMaterias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Productos`
--

CREATE TABLE `Productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_tipoProductos` int(11) NOT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Proveedores`
--

CREATE TABLE `Proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_tipomaterias` int(11) NOT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipoMaterias`
--

CREATE TABLE `tipoMaterias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipoMuestras`
--

CREATE TABLE `tipoMuestras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipoProductos`
--

CREATE TABLE `tipoProductos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Unidades`
--

CREATE TABLE `Unidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `crea` varchar(20) DEFAULT NULL,
  `modifica` varchar(20) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `identificacion` int(11) DEFAULT NULL,
  `nombres` text,
  `apellidos` text,
  `correo` varchar(200) DEFAULT NULL,
  `idCargo` int(11) DEFAULT NULL,
  `crea` varchar(200) DEFAULT NULL,
  `modifica` varchar(200) DEFAULT NULL,
  `creaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificaFecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `clave` varchar(200) CHARACTER SET armscii8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `identificacion`, `nombres`, `apellidos`, `correo`, `idCargo`, `crea`, `modifica`, `creaFecha`, `modificaFecha`, `clave`) VALUES
(2, 12345678, 'usuario', 'nuevo', 'usuario@correo.com', 1, NULL, NULL, '2020-07-22 14:20:17', '2020-07-22 17:23:39', '123456'),
(16, 1098, 'LUIS DANIEL', 'RINCON FORERO', 'LDANIELRINCONF@GMAIL.COM', 1, NULL, NULL, '2020-08-07 03:11:30', '2020-08-07 03:11:30', '123'),
(17, 1098, 'LUIS DANIEL', 'RINCON FORERO', 'LDANIELRINCONF@GMAIL.COM', 1, NULL, NULL, '2020-08-07 03:11:30', '2020-08-07 03:11:30', '123'),
(18, 1, 'CAMILA', 'SANDOVAL', 'CAMILASANDOVALZARATE@GMAIL.COM', 2, NULL, NULL, '2020-08-07 03:13:54', '2020-08-07 03:13:54', '123'),
(19, 1, 'CAMILA', 'SANDOVAL', 'CAMILASANDOVALZARATE@GMAIL.COM', 2, NULL, NULL, '2020-08-07 03:13:54', '2020-08-07 03:13:54', '123'),
(20, 12345, 'COMPETENCIAS GENERALES', 'RINCON FORERO', 'LDANIELRINCONF@GMAIL.COM', 2, NULL, NULL, '2020-08-07 03:14:57', '2020-08-07 03:14:57', '123'),
(21, 12345, 'COMPETENCIAS GENERALES', 'RINCON FORERO', 'LDANIELRINCONF@GMAIL.COM', 2, NULL, NULL, '2020-08-07 03:14:57', '2020-08-07 03:14:57', '123'),
(22, 1098670572, 'LUIS DANIEL', 'RINCON FORERO', 'LDANIELRINCONF@GMAIL.COM', 1, NULL, NULL, '2020-08-09 22:26:32', '2020-08-09 22:26:32', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calidadEncabezado`
--
ALTER TABLE `calidadEncabezado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Cargos`
--
ALTER TABLE `Cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fechasProductos`
--
ALTER TABLE `fechasProductos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lugarMuestras`
--
ALTER TABLE `lugarMuestras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materiasPrimas`
--
ALTER TABLE `materiasPrimas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Modulos`
--
ALTER TABLE `Modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procedenciaMaterias`
--
ALTER TABLE `procedenciaMaterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Productos`
--
ALTER TABLE `Productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Proveedores`
--
ALTER TABLE `Proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipoMaterias`
--
ALTER TABLE `tipoMaterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipoMuestras`
--
ALTER TABLE `tipoMuestras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipoProductos`
--
ALTER TABLE `tipoProductos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Unidades`
--
ALTER TABLE `Unidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calidadEncabezado`
--
ALTER TABLE `calidadEncabezado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Cargos`
--
ALTER TABLE `Cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Clientes`
--
ALTER TABLE `Clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fechasProductos`
--
ALTER TABLE `fechasProductos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lugarMuestras`
--
ALTER TABLE `lugarMuestras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materiasPrimas`
--
ALTER TABLE `materiasPrimas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Modulos`
--
ALTER TABLE `Modulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `procedenciaMaterias`
--
ALTER TABLE `procedenciaMaterias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Productos`
--
ALTER TABLE `Productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Proveedores`
--
ALTER TABLE `Proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipoMaterias`
--
ALTER TABLE `tipoMaterias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipoMuestras`
--
ALTER TABLE `tipoMuestras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipoProductos`
--
ALTER TABLE `tipoProductos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Unidades`
--
ALTER TABLE `Unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
