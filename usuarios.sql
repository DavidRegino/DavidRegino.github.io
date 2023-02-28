-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2023 a las 01:50:36
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `sexo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Correo`, `Telefono`, `Fecha_nacimiento`, `sexo`) VALUES
(1, 'David Regino Ramírez Hernández', 'davidreginoramirezhernandez4@gmail.com', '6673023087', '2006-06-06', 1),
(2, 'Rosa Guadalupe Hernández Mendoza', 'rosyhdez4@hotmail.com', '6671347981', '1978-06-07', 0),
(3, 'Regino Ramirez Ramírez', 'regino_r@hotmail.com', '6614167653', '1972-08-08', 1),
(4, 'Miguel Adán Ramírez Hernández', 'proguel1234@gmail.com', '6674350251', '2009-05-12', 1),
(5, 'Jesús Ángel Medina Mendoza', 'oneju@gmail.com', '4599161625', '2004-11-30', 1),
(6, 'Pablo Escobar Guzmán', 'cocabuena@gmail.com', '3582056991', '1900-12-25', 1),
(7, 'Regina Blancas Zapata', 'zapato@gmail.com', '8849179175', '0500-02-03', 0),
(8, 'Lola Beltran Cardenas', 'lobel@gmail.com', '6796312805', '2023-02-27', 0),
(9, 'Pablo Jesus Garcia Nuñez', 'ñ@gmail.com', '3358546698', '1943-05-31', 1),
(10, 'Irlanda Castro Quintero', 'ayuda@gmail.co,', '7229742613', '1999-02-26', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
