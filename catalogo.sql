-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-01-2022 a las 17:22:39
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `correo`, `password`) VALUES
(1, 'jupachon@unal.edu.co', '$2y$10$5v1wYHB3r3MQRFAGtidIo.Rf97twYgC5JdcBDPTfe6soz0gYecgiy'),
(2, 'ptabordam@unal.edu.co', '$2y$10$u8GNlGYfzRUAYTk4adsztu5ZHPuYBcIpW00vh65jf/AgLfr6gAC3e'),
(3, 'almunozr@unal.edu.co', '$2y$10$iP/efdRjj9NGOv54FEIzZua0gD0OSdJhUZTqKbL.Xr83ke7yiqbVO'),
(4, 'a@unal.edu.co', '$2y$10$tSZJ64Rci3Tr7VynoJbg9.LYrQv/hngduVqC/O7/ffwkEVLqnJgxi'),
(5, 'cosiaca@unal.edu.co', '$2y$10$.X5nXP1stHDX9RCcsFB0Murif.jRFDZUNnDgaNdUfbZk1xuytbOxK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombre`, `precio`, `imagen`) VALUES
(1211, 'Mouse gamer', 139800, 'mouse_gamer.jpg'),
(1212, 'Mouse de colores', 23100, 'mouse.png'),
(1234, 'Celular táctil', 700000, 'celular.jpg'),
(1235, 'Computador portátil', 2560000, 'computador.jpg'),
(1236, 'Audífonos', 230000, 'audifonos.jpg'),
(1237, 'Tablet digitalizadora', 1200000, 'tablet.jpg'),
(1238, 'Lápiz óptico', 57300, 'lapiz.jpg'),
(1239, 'Computador de escritorio gamer', 4300000, 'comgamer.jpg'),
(1263, 'Play Station 5', 5000000, 'play.jpeg'),
(1324, 'Cámara digital', 120000, 'camara.jpg'),
(1325, 'Teclado inalámbrico', 120000, 'teclado.jpg'),
(1345, 'Impresora a color', 450000, 'impresor.jpg'),
(1374, 'iPad', 2000000, 'iPad.jpg'),
(1476, 'Cargador para portátil', 100000, 'cargador.jpg'),
(1527, 'Play Station 3', 2100000, 'PLAY3.jpg'),
(1654, 'Alexa', 200000, 'alexa.jpg'),
(1672, 'Cargador celular', 50000, 'cargador_celular.jpg'),
(1789, 'Play Station 4', 2300000, 'play4.jpg'),
(1829, 'Reloj inteligente', 320000, 'reloj.jpg'),
(1893, 'Gafas de realidad virtual', 210000, 'gafas.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
