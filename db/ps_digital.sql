-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2022 a las 07:42:54
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ps_digital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma`
--

CREATE TABLE `plataforma` (
  `id_plataforma` int(10) UNSIGNED NOT NULL,
  `plataforma` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plataforma`
--

INSERT INTO `plataforma` (`id_plataforma`, `plataforma`) VALUES
(1, 'ps4'),
(2, 'ps5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_descripcion` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `url_video` varchar(255) NOT NULL,
  `fecha_publicacion` datetime NOT NULL,
  `fk_tipo` int(10) UNSIGNED NOT NULL,
  `fk_plataforma` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `precio`, `img`, `img_descripcion`, `descripcion`, `url_video`, `fecha_publicacion`, `fk_tipo`, `fk_plataforma`) VALUES
(1, 'fifa 22', 7900, 'portada-fifa-22.png', 'imagen portada fifa 22 para ps4', 'descripcion para agregar', 'https://www.youtube.com/embed/o1igaMv46SY', '2022-06-11 22:11:24', 1, 1),
(2, 'farcry 6', 10500, 'portada-farcry-6.png', 'imagen portada farcry 6 para ps5', 'descripcion para agregar', 'https://www.youtube.com/embed/tSDMwngdkF4', '2022-06-11 22:11:26', 1, 2),
(4, 'PS Plus (1 año)', 8000, 'ps-plus.png', 'imagen subscripcion a ps plus por un año', 'descripcion para agregar', 'https://www.youtube.com/embed/vFlRCL5o27k', '2022-06-11 22:11:55', 2, 2),
(5, 'producto 1', 434234, 'imag.png', 'imag descp', 'descripcion anashe', 'www.rgegerg.vom', '2022-06-13 22:33:11', 1, 1),
(8, 'producto 1', 434234, 'imag.png', 'imag descp', 'descripcion anashe', 'www.rgegedwqdrg.vom', '2022-06-13 22:34:00', 1, 1),
(9, 'producto 1', 434234, 'imag.png', 'imag descp', 'descripcion anashe', 'www.rgegewffedwqdrg.vom', '2022-06-13 22:34:20', 1, 1),
(10, 'pruab desde bowser', 1234, 'imag.png', 'todavia no hay flaco', 'ahora desde el browser', 'www.tomainfo.com', '2022-06-13 22:36:06', 1, 1),
(11, 'pruab desde bowser', 1234, 'imag.png', 'fwfwefwf', 'ahora desde el browser', 'todavia no hay flaco', '2022-06-13 22:42:02', 1, 1),
(13, 'pruab desde bowserdwqdqwd', 1234, 'imag.png', 'fwfwefwf', 'ahora desde el browser', 'todavia noewfwfef', '2022-06-13 22:53:58', 1, 1),
(14, 'pruab desde bowserdwqdqwd', 1234, 'imag.png', 'fwfwefwf', 'ahora desde el browser', 'todaviaewfwef', '2022-06-13 22:54:38', 2, 1),
(15, 'wefwf', 42424234, 'image-ejemplo.png', 'tretertte', 'freferfer', 'retetet', '2022-06-13 23:14:20', 1, 2),
(17, 'wefwf', 42424234, 'image-ejemplo.png', 'tretertte', 'freferfer', 'retetetdwqd', '2022-06-13 23:15:33', 1, 2),
(18, 'wefwf', 42424234, 'image-ejemplo.png', 'tretertte', 'freferfer', 'retetetdwqddwqd', '2022-06-13 23:16:11', 1, 2),
(19, 'wefwf', 42424234, 'image-ejemplo.png', 'tretertte', 'freferfer', 'retetetdwqddwqdewd', '2022-06-13 23:16:30', 1, 2),
(20, 'anashe', 5432, '22-06-13 23:35;15', 'anashe imagen', 'anashe 1', 'anashe video', '2022-06-13 23:35:15', 1, 2),
(21, 'frefef', 43243, '22-06-13 23:39;25foto cv.jpg', 'ergergreggegw', 'fewfewf', '423423424234', '2022-06-13 23:39:25', 1, 1),
(22, 'reret', 435, '22-06-13 23:56;21foto cv.jpg', 'gregeg', 'erggg', 'gregerg', '2022-06-13 23:56:21', 1, 1),
(23, '4234', 44244, '22-06-14 00:23:56-foto cv.jpg', 'rewrrerw', 'rwrerwrwe', 'rwerewr', '2022-06-14 00:23:56', 1, 1),
(24, 'ewrwerrwe', 43545, '20220614011330_foto cv.jpg', 'gregegrge', 'reggerg', 'gregegreg', '2022-06-14 01:13:30', 1, 1),
(25, 'wefr', 4234, '20220614013250_foto-para-cv-recortada.png', 'r32r2r3r32r', 'ewfwef', 'ewfewfewf', '2022-06-14 01:32:50', 1, 1),
(26, 'ewwrwr', 4324, '20220614073821_foto cv.jpg', '4324ewrwerwerwr', 'ewrwrr', 'rwerwrrwr', '2022-06-14 07:38:21', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id_tipo` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id_tipo`, `tipo`) VALUES
(1, 'juego'),
(2, 'subscripcion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `mail` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`id_plataforma`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `url_video_UNIQUE` (`url_video`),
  ADD KEY `fk_productos_tipos_idx` (`fk_tipo`),
  ADD KEY `fk_productos_plataforma1_idx` (`fk_plataforma`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id_tipo`),
  ADD UNIQUE KEY `tipo_UNIQUE` (`tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `mail_UNIQUE` (`mail`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  MODIFY `id_plataforma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id_tipo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_plataforma1` FOREIGN KEY (`fk_plataforma`) REFERENCES `plataforma` (`id_plataforma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_tipos` FOREIGN KEY (`fk_tipo`) REFERENCES `tipos` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
