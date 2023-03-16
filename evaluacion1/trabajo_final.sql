-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2023 a las 02:18:20
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
-- Base de datos: `trabajo final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `color` varchar(50) NOT NULL,
  `existencia` int(11) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `medida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`, `descripcion`, `color`, `existencia`, `marca`, `medida`) VALUES
(1, 'Pizza Tower', 227.99, 'Pizza Tower is a fast paced 2D platformer inspired by the Wario Land series, with an emphasis on movement, exploration and score attack. Featuring highly stylized pixel art inspired by the cartoons from the \'90s, and a highly energetic soundtrack.\r\n', 'Morado', 100, ' Tour De Pizza', '300 MB'),
(2, 'Geometry dash', 45.99, 'Jump and fly your way through danger in this rhythm-based action platformer!\r\n', 'Azul', 100, 'RobTop', '100 MB'),
(3, 'Grand Theft Auto V', 576.67, 'Grand Theft Auto V para PC ofrece a los jugadores la opción de explorar el galardonado mundo de Los Santos y el condado de Blaine con una resolución de 4K y disfrutar del juego a 60 fotogramas por segundo.', 'Variado', 100, 'Rockstar Games', '72 GB'),
(4, 'Celeste', 179.99, 'Ayuda a Madeline a sobrevivir a los demonios de su interior en su viaje hasta la cima de la montaña Celeste, en este ajustadísimo plataforma, obra de los creadores de TowerFall. Enfréntate a cientos de desafíos diseñados a mano, devela retorcidos secretos y, y reconstruye el misterio de la montaña.', 'Celeste', 100, ' Extremely OK Games, Ltd.', '1200 MB'),
(5, 'The Forest', 185.99, 'As the lone survivor of a passenger jet crash, you find yourself in a mysterious forest battling to stay alive against a society of cannibalistic mutants. Build, explore, survive in this terrifying first person survival horror simulator.', 'negro', 100, 'Endnight Games Ltd', '5 GB'),
(6, 'God of War', 829, 'Kratos ha dejado atrás su venganza contra los dioses del Olimpo y vive ahora como un hombre en los dominios de los dioses y monstruos nórdicos. En este mundo cruel e implacable debe luchar para sobrevivir… y enseñar a su hijo a hacerlo también.', 'Rojo', 100, ' Santa Monica Studio', '70 GB'),
(7, 'Sekiro™: Shadows Die Twice - GOTY Edition', 1299, 'Juego del año - The Game Awards 2019 Mejor juego de acción de 2019 - IGN Traza tu propio camino hacia la venganza en la galardonada aventura de FromSoftware, creadores de Bloodborne y la saga Dark Souls. Véngate. Restituye tu honor. Mata con ingenio.', 'Cafe', 100, ' FromSoftware', '25 GB'),
(8, 'Marvel’s Spider-Man Remastered', 999, 'En Marvel’s Spider-Man Remasterizado, la vida de Peter Parker se topa con la de Spider-Man en una historia original repleta de acción. Ponte en la piel de un Peter Parker veterano que ha pulido sus habilidades en la lucha contra el crimen y los villanos en la Nueva York de Marvel.', 'Rojo', 100, ' PlayStation PC LLC', '75 GB'),
(9, 'Crash Bandicoot™ N. Sane Trilogy', 999, '¡Vuelve Crash Bandicoot™, tu marsupial favorito! Mejorado, embelesado y listo para bailar con la colección de juegos La trilogía. Revive tus momentos favoritos con Crash Bandicoot™, Crash Bandicoot™ 2: Cortex Strikes Back y Crash Bandicoot™ 3: Warped, ¡con gráficos remasterizados en toda su', 'Naranja', 100, ' Activision', '30 GB'),
(10, 'Call of Duty®: Black Ops II', 439.99, 'Superando las expectativas de los fans con respecto a esta franquicia que ha batido todos los récords, Call of Duty®: Black Ops 2 lleva a los jugadores a una futura Guerra Fría', 'Negro', 100, ' Activision', '16 GB');

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
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
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
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
