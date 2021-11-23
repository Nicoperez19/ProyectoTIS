-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2021 a las 15:14:13
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_depto` int(8) NOT NULL,
  `nombre_depto` varchar(30) NOT NULL,
  `correo_depto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_depto`, `nombre_depto`, `correo_depto`) VALUES
(231, 'RRHH', 'rrhh@muni.cl'),
(232, 'Finanzas', 'finanzas@muni.cl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo_inf` int(8) NOT NULL,
  `codigo_qr` varchar(100) NOT NULL,
  `caracteristicas` char(200) NOT NULL,
  `forma_adquisicion` char(100) NOT NULL,
  `costo_adquisicion` int(7) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `estado` varchar(14) NOT NULL,
  `id_depto` int(8) NOT NULL,
  `run_funcionario` int(8) NOT NULL,
  `codigo_muni` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo_inf`, `codigo_qr`, `caracteristicas`, `forma_adquisicion`, `costo_adquisicion`, `fecha_ingreso`, `estado`, `id_depto`, `run_funcionario`, `codigo_muni`) VALUES
(1, '456aa', 'AMD Ryzen™ 7 5800H (4MB Cache L2 / 16MB Cache L3, 3.20 GHz, Cores: 8, Threads: 16)', 'Proveedor', 1200000, '2021-11-01', 'Disponible', 231, 123, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario`
--

CREATE TABLE `funcionario` (
  `run_funcionario` int(8) NOT NULL,
  `nombre_funcionario` char(30) NOT NULL,
  `correo_funcionario` char(30) NOT NULL,
  `cargo_funcionario` char(30) NOT NULL,
  `direccion_funcionario` char(40) NOT NULL,
  `telefono_funcionario` int(9) NOT NULL,
  `id_depto` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `funcionario`
--

INSERT INTO `funcionario` (`run_funcionario`, `nombre_funcionario`, `correo_funcionario`, `cargo_funcionario`, `direccion_funcionario`, `telefono_funcionario`, `id_depto`) VALUES
(123, 'user', 'user@ing.ucsc.cl', 'admin', 'concepción', 123456789, 231);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `run_funcionario` int(8) NOT NULL,
  `contrasena` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`run_funcionario`, `contrasena`) VALUES
(123, '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `codigo_mant` int(8) NOT NULL,
  `fecha_mant` date NOT NULL,
  `fecha_ultimo_mant` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`codigo_mant`, `fecha_mant`, `fecha_ultimo_mant`) VALUES
(12, '2021-11-02', '2021-11-02'),
(13, '2021-11-03', '2021-11-03'),
(14, '2021-11-05', '2021-11-02'),
(15, '2021-11-30', '2021-11-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipalidad`
--

CREATE TABLE `municipalidad` (
  `codigo_muni` int(8) NOT NULL,
  `nombre_muni` char(30) NOT NULL,
  `direccion_muni` char(40) NOT NULL,
  `telefono_muni` int(9) NOT NULL,
  `correo_muni` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipalidad`
--

INSERT INTO `municipalidad` (`codigo_muni`, `nombre_muni`, `direccion_muni`, `telefono_muni`, `correo_muni`) VALUES
(23, 'Municipalidad Concepción', 'Concepción', 123456, 'Municipalidad2020@muni.cl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_preventiva`
--

CREATE TABLE `m_preventiva` (
  `codigo_mant` int(8) NOT NULL,
  `fecha_proxima_mant` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `m_preventiva`
--

INSERT INTO `m_preventiva` (`codigo_mant`, `fecha_proxima_mant`) VALUES
(12, '2021-11-11'),
(13, '2021-12-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_reactiva`
--

CREATE TABLE `m_reactiva` (
  `codigo_mant` int(8) NOT NULL,
  `tipo_falla` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `m_reactiva`
--

INSERT INTO `m_reactiva` (`codigo_mant`, `tipo_falla`) VALUES
(12, 'Pantalla'),
(13, 'CPU');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_realiza`
--

CREATE TABLE `se_realiza` (
  `id_equipo_inf` int(8) NOT NULL,
  `codigo_mant` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `se_realiza`
--

INSERT INTO `se_realiza` (`id_equipo_inf`, `codigo_mant`) VALUES
(1, 12);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_depto`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo_inf`),
  ADD KEY `id_depto` (`id_depto`),
  ADD KEY `run_funcionario` (`run_funcionario`),
  ADD KEY `codigo_muni` (`codigo_muni`);

--
-- Indices de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`run_funcionario`),
  ADD KEY `id_depto` (`id_depto`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD KEY `run_funcionario` (`run_funcionario`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`codigo_mant`);

--
-- Indices de la tabla `municipalidad`
--
ALTER TABLE `municipalidad`
  ADD PRIMARY KEY (`codigo_muni`);

--
-- Indices de la tabla `m_preventiva`
--
ALTER TABLE `m_preventiva`
  ADD KEY `codigo_mant` (`codigo_mant`);

--
-- Indices de la tabla `m_reactiva`
--
ALTER TABLE `m_reactiva`
  ADD KEY `codigo_mant` (`codigo_mant`);

--
-- Indices de la tabla `se_realiza`
--
ALTER TABLE `se_realiza`
  ADD KEY `id_equipo_inf` (`id_equipo_inf`),
  ADD KEY `codigo_mant` (`codigo_mant`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo_inf` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1214;

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `codigo_mant` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54322;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`codigo_muni`) REFERENCES `municipalidad` (`codigo_muni`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_2` FOREIGN KEY (`id_depto`) REFERENCES `departamento` (`id_depto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_3` FOREIGN KEY (`run_funcionario`) REFERENCES `funcionario` (`run_funcionario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`id_depto`) REFERENCES `departamento` (`id_depto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`run_funcionario`) REFERENCES `funcionario` (`run_funcionario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `m_preventiva`
--
ALTER TABLE `m_preventiva`
  ADD CONSTRAINT `m_preventiva_ibfk_1` FOREIGN KEY (`codigo_mant`) REFERENCES `mantenimiento` (`codigo_mant`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `m_reactiva`
--
ALTER TABLE `m_reactiva`
  ADD CONSTRAINT `m_reactiva_ibfk_1` FOREIGN KEY (`codigo_mant`) REFERENCES `mantenimiento` (`codigo_mant`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `se_realiza`
--
ALTER TABLE `se_realiza`
  ADD CONSTRAINT `se_realiza_ibfk_2` FOREIGN KEY (`id_equipo_inf`) REFERENCES `equipo` (`id_equipo_inf`) ON UPDATE CASCADE,
  ADD CONSTRAINT `se_realiza_ibfk_3` FOREIGN KEY (`codigo_mant`) REFERENCES `mantenimiento` (`codigo_mant`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
