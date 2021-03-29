-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2021 a las 21:38:32
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hccomputer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE `descargas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `descargas`
--

INSERT INTO `descargas` (`id`, `nombre`, `descripcion`, `link`, `imagen`) VALUES
(2, 'libro directo', 'sin cenecea', '', 'https://www.solucioneshc.com/imagenes/libros/eir.PNG'),
(3, 'kjh', 'kjhkj', 'kjhkj', 'https://www.solucioneshc.com/imagenes/libros/eir.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`ID`, `user`, `password`, `email`, `pasadmin`, `rol`) VALUES
(1, 'comun', '123456', 'hector@gmail.com', '', 2),
(2, 'admin', '', '1@gmail.com', '123456', 1),
(3, 'prueba', '123456', 'insert1@gmail.com', '', 2),
(4, 'prueba2', '123456', '2@gmail.com', '', 2),
(5, 'nueva prueba ', '123456', 'alfonzo@gmail.com', '', 2),
(6, 'pablo', '123456789', 'pablo@gmail.com', '', 2),
(7, 'jose', '123456', 'jose@gmail.com', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetalleventa`
--

CREATE TABLE `tbldetalleventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` decimal(20,0) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCARGADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbldetalleventa`
--

INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) VALUES
(1, 1, 1, '200', 1, 0),
(2, 2, 1, '30', 1, 0),
(3, 3, 1, '30', 1, 0),
(4, 4, 1, '30', 1, 0),
(5, 5, 1, '30', 1, 0),
(6, 6, 1, '30', 1, 0),
(7, 6, 2, '1200', 1, 0),
(8, 7, 1, '30', 1, 0),
(9, 7, 2, '1200', 1, 0),
(10, 7, 3, '700', 1, 0),
(11, 8, 1, '30', 1, 0),
(12, 9, 2, '1200', 1, 0),
(13, 9, 3, '700', 1, 0),
(14, 9, 4, '30', 1, 0),
(15, 10, 1, '30', 1, 0),
(16, 10, 2, '1200', 1, 0),
(17, 10, 3, '700', 1, 0),
(18, 11, 3, '700', 1, 0),
(19, 12, 1, '30', 1, 0),
(20, 13, 1, '30', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,0) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Computacion', '30', 'libros', 'https://www.solucioneshc.com/imagenes/computacion.jpg'),
(2, 'juegos', '1200', 'prueba de juegos', 'https://www.solucioneshc.com/imagenes/juegos.jpg'),
(3, 'paginas web', '700', 'paginas web', 'https://www.solucioneshc.com/imagenes/web.jpg'),
(4, 'servicio t', '30', 'servicio tecnico', 'https://www.solucioneshc.com/imagenes/stecnico.jpg'),
(5, 'Edicion videos', '40', 'edicion de videos', 'https://www.solucioneshc.com/imagenes/videos.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `ID` int(11) NOT NULL,
  `Clavetransacion` varchar(250) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Total` decimal(50,0) NOT NULL,
  `Status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblventas`
--

INSERT INTO `tblventas` (`ID`, `Clavetransacion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `Status`) VALUES
(1, '12345789', '', '2020-05-21 00:00:00', 'hector@gmail.com', '700', 'pendiente'),
(2, 'stk03plfa2p9l7enmiofpfoh2m', '', '2020-05-21 22:30:28', '', '30', 'pendiente'),
(3, 'stk03plfa2p9l7enmiofpfoh2m', '', '2020-05-21 22:31:07', '', '30', 'pendiente'),
(4, 'stk03plfa2p9l7enmiofpfoh2m', '', '2020-05-21 22:31:41', 'hector.reyes@gmail.com', '30', 'pendiente'),
(5, 'stk03plfa2p9l7enmiofpfoh2m', '', '2020-05-21 22:37:44', '', '30', 'pendiente'),
(6, 'stk03plfa2p9l7enmiofpfoh2m', '', '2020-05-21 23:21:45', 'hectorycr@gmail.com', '1230', 'pendiente'),
(7, 'stk03plfa2p9l7enmiofpfoh2m', '', '2020-05-22 00:49:13', '', '1930', 'pendiente'),
(8, 'on1je80b14s9drs0d49ujitv9d', '', '2020-05-23 00:06:31', 'soportewen@gmail.com', '30', 'pendiente'),
(9, 'mq8h1ik9ks9pb8jbenuaho3q30', '', '2020-05-27 18:46:57', 'hector.reyes@gmail.com', '1930', 'pendiente'),
(10, 'kgber4cf0s0rmebe1knsdjc1un', '', '2020-05-28 17:09:51', '2@gmail.com', '1930', 'pendiente'),
(11, 'vv30fqm8sfmgftk6s6kip6jqqb', '', '2021-03-03 11:36:44', 'hectorycr@gmail.com', '700', 'pendiente'),
(12, 'vv30fqm8sfmgftk6s6kip6jqqb', '', '2021-03-04 11:41:28', 'hectorycr@gmail.com', '30', 'pendiente'),
(13, 'vv30fqm8sfmgftk6s6kip6jqqb', '', '2021-03-04 11:49:21', 'hectorycr@gmail.com', '30', 'pendiente'),
(14, '', '', '2021-03-05 11:10:38', 'hectorycr@gmail.com', '0', 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVENTA` (`IDVENTA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD CONSTRAINT `tbldetalleventa_ibfk_1` FOREIGN KEY (`IDVENTA`) REFERENCES `tblventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbldetalleventa_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `tblproductos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
