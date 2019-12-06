-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2019 a las 16:41:50
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `compras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `ID` int(2) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` int(9) NOT NULL,
  `comentario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`ID`, `email`, `telefono`, `comentario`) VALUES
(1, 'elsin.vila@tecsup.edu.pe', 938533946, 'asdsadasd'),
(3, 'chupetin@gmail.com', 123123123, 'Gaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `ID_Pedido` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `distrito` varchar(30) NOT NULL,
  `nom_pedido` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `mensaje` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`ID_Pedido`, `username`, `distrito`, `nom_pedido`, `precio`, `direccion`, `mensaje`) VALUES
(25, 'Elsin14', 'La Molina', 'COMBO CLASSIC', 25.9, 'Av. La Molina 777', 'No demorar.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'MEGA DÚO', '12 PIEZAS DE POLLO \r\n8 NUGGETS O HOT WINGS \r\n1 PAPA FAMILIAR \r\n1 ENSALADA FAMILIAR \r\n1 GASEOSA DE 1.5 Lts', 25.9, 'img1.jpg'),
(2, 'COMBO NUGGETS', '12 PIEZAS DE POLLO \r\n8 NUGGETS O HOT WINGS \r\n1 PAPA FAMILIAR \r\n1 ENSALADA FAMILIAR \r\n1 GASEOSA DE 1.5 LTS', 28.9, 'img2.jpg'),
(3, 'MEGA CLÁSICO', '12 PIEZAS DE POLLO\r\n8 NUGGETS O HOT WINGS\r\n1 PAPA FAMILIAR\r\n1 ENSALADA FAMILIAR\r\n1 GASEOSA DE 1.5 LTS', 27.9, 'img3.jpg'),
(4, 'COMBO CLASSIC', '12 PIEZAS DE POLLO \r\n8 NUGGETS O HOT WINGS \r\n1 PAPA FAMILIAR \r\n1 ENSALADA FAMILIAR \r\n1 GASEOSA DE 1.5 LTS ', 25.9, 'img4.jpg'),
(5, 'COMBO HOT WING', '9 HOT WINGS\r\n1 PAPA PERSONAL\r\n1 GASEOSA PERSONAL\r\n', 17.9, 'img5.jpg'),
(6, 'COMBO FULL', '3 PIEZAS DE POLLO\r\n1 PAPA PERSONAL\r\n1 GASEOSA PERSONAL\r\n', 18.9, 'img6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `numero` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombres`, `apellido`, `username`, `contraseña`, `correo`, `numero`) VALUES
(2, 'Yeridi Crhis', 'Huaman Taquire', 'user02', '1234', 'user02@gmail.com', '123456789'),
(3, 'Karoline', 'Bustinza', 'user03', '12345', 'user03@gmail.com', '789852489'),
(6, 'Elsin Drafus', 'Vila Guillen', 'Elsin14', 'elsin14', 'elsin.vila@tecsup.ed', '938533946'),
(12, 'Chupetin', 'Trujillo', 'Chupetin123', 'chupetin', 'chupetin@gmail.com', '938258451');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID_Pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ID_Pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
