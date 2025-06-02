-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2025 a las 21:30:34
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
-- Base de datos: `blogdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `postbody` text NOT NULL,
  `img` varchar(1000) NOT NULL,
  `idUser` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `postbody`, `img`, `idUser`) VALUES
(1, 'asd', 'asdasd', 'asd', NULL),
(2, 'asd', 'asd', '1_mGLO5IfhJv4o0NYOAZI60A.png', NULL),
(3, 'asd', 'asd', '1_mGLO5IfhJv4o0NYOAZI60A.png', NULL),
(4, 'avvvasadas', 'asasssssssssssssasaasasssssssssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasassssssssssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssssasasssssss', '1_mGLO5IfhJv4o0NYOAZI60A.png', NULL),
(5, 'pepepepee', 'asdasd', 'Reyo.jpg', NULL),
(6, 'Balalo', 'Balalelo', 'Dateyamakuroishi.webp', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `email`) VALUES
(1, 'BalatrinBalatrez', '$2y$10$kM1wSu/gsyy.feN9reV3PeoY7vat705AnnDETjGLPfdMp2Ek4333W', 'maurijavi7@gmail.com'),
(2, 'Mariano', '$2y$10$poMuMRNCnud8W6RIRjI.J.N32d1sNi9sykeMydpH2LhJT9/iFVyau', 'maurijavi7@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
