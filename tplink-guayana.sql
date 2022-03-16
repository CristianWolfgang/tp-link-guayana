-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2022 a las 20:16:57
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tplink-guayana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `name`, `image`) VALUES
(2, 'ledplus', 'marcas_0_194754.png'),
(4, 'wireplus', 'marcas_0_194527.png'),
(6, 'alhua-technology', 'marcas_0_194507.png'),
(8, 'Domótica', 'marcas_0_193830.png'),
(10, 'Inter', 'marcas_0_183815.png'),
(11, 'genno', 'marcas_0_183412.png'),
(14, 'tplink', 'marcas_0_173518.png'),
(16, 'siera', 'marcas_0_104953.png'),
(17, 'computación', 'marcas_0_103641.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` mediumint(255) NOT NULL,
  `name` char(255) NOT NULL,
  `type` char(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `price` mediumint(255) NOT NULL,
  `company` char(255) NOT NULL,
  `stock` smallint(255) NOT NULL,
  `photo` char(255) DEFAULT NULL,
  `new` tinyint(1) DEFAULT NULL,
  `promo` tinyint(1) DEFAULT NULL,
  `keywords` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `about`, `price`, `company`, `stock`, `photo`, `new`, `promo`, `keywords`) VALUES
(150, 'MSI GF75 17.3\" Gaming Laptop Intel Core i7-9750H 8GB RAM 512GB SSD 120Hz GTX 1660 Ti Aluminio Negro\r\n', 'laptop', '9ª generación i7-9750H.\nNVIDIA GeForce GTX 1660 Ti 6GB.\nTasa de actualización de 120 Hz.\nSalida HDMI 4K a 30 Hz.\nTecnología de conmutación en plano.\n', 1170, 'MSI', 100, 'laptop-gamer-msi.jpg', 1, 0, 'laptop gamer intel core i7 gaming msi nvidia geforce gtx'),
(156, 'Corneta Portátil Jbl Charge 2 Inalámbrica Altavoz Bluetooth\r\n', 'musica', 'El estéreo de doble canal, equipado con altavoz de bajos.protector impermeable, antivibración, polvo.La configuración de Bluetooth, utiliza el chip bluetooth de JL.', 50, 'UBL', 15, 'corneta.jpg', 0, 0, 'corneta joy bluetooh  estereo portatil inlalambrico'),
(152, 'BLU Studio Mini -5.5HD Smartphone, 32GB+2GB Ram -Negro\r\n', 'smartphone', 'Pantalla de cristal curvado de 5.5 pulgadas HD + 18:9 resolución de 720 x 1440.\nCámara principal de 13 MP con flash LED, cámara selfie de 8 MP con flash LED.\nMemoria interna de 32 GB, 2 GB de RAM Micro SD de hasta 64 GB.', 64, 'BLU', 20, 'smart-phone-blu.jpg', 0, 1, 'smartphone blu 32gb ram studio mini '),
(154, 'Toshiba 43LF621U21 43-inch Smart 4K UHD with Dolby Vision - Fire TV Edition, Released 2020\r\n', 'TV', 'Voice remote with Alexa: Use your voice to watch live TV, launch apps, search for titles, play music, switch inputs, control smart home devices, and more.', 350, 'Toshiba', 70, 'tv-toshiba.jpg', 0, 0, 'tv television plasma 4k toshiba dolby alexa '),
(158, 'Android TV', 'TV', 'El televisor Hisense A6G cuenta con calidad de imagen 4K Ultra HD con cuatro veces la resolución de una pantalla Full HD normal, junto con 8,3 millones de píxeles y una retroiluminación LED de gama completa para crear una imagen más nítida y colorida.\r\n', 290, 'Hisense', 100, 'tv-android.jpg', 1, 1, 'android tv android-tv hisense 4k plasma HD'),
(161, 'Laptop HP 14', 'laptop', 'Ram:4GB.\r\nIntel Core i7 vPRO.\r\n250GB de almacenamiento.', 400, 'Hp', 10, 'Laptop-2.jpg', 1, 1, 'laptop hp ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` mediumint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
