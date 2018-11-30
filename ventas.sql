-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2018 a las 05:36:18
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Actualizar_Producto` (`param_descripcion` VARCHAR(150), `param_precio` DOUBLE, `param_stockMinimo` INT, `param_id` INT)  BEGIN

	update producto set 
    	descripcion = param_descripcion, 
        precio = param_precio, 
        stockMinimo = param_stockMinimo
    where idProducto = param_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Eliminar_Producto` (`param_id` INT)  BEGIN

	delete from producto where idProducto = param_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Insertar_Producto` (`param_descripcion` VARCHAR(150), `param_precio` DOUBLE, `param_stockMinimo` INT)  BEGIN

	insert into producto ( descripcion, precio, stockMinimo )
    values ( param_descripcion, param_precio, param_stockMinimo );

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Seleccionar_Producto` ()  BEGIN

	SELECT * FROM producto;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Seleccionar_Producto_PorID` (IN `id` INT)  BEGIN

	SELECT * FROM producto
    WHERE idProducto = id;
    

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `stockMinimo` tinyint(4) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `descripcion`, `stockMinimo`, `precio`) VALUES
(15, 'prueba', 21, 12),
(16, 'prueba', 12, 21),
(17, 'iphone1', 127, 1000),
(18, 'wewqe', 12, 12312);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
