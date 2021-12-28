-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2021 a las 02:46:20
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.26

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
