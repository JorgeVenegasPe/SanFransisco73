-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2023 a las 17:20:24
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_barberia`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_cortes` (IN `p_nombre_corte` VARCHAR(50), IN `p_descripcion` VARCHAR(500), IN `p_imagen` BLOB, IN `p_precio` DOUBLE, IN `p_id_rostro` INT)   BEGIN
 INSERT INTO tb_cortes(nombre_corte, descripcion, imagen,precio, id_rostro) VALUES(p_nombre_corte, p_descripcion, p_imagen, p_precio,p_id_rostro);
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_rostro` (IN `p_rostro` VARCHAR(50), IN `p_caracteristicas` VARCHAR(500), IN `p_descripcion` VARCHAR(500))   BEGIN
    INSERT INTO tb_rostro(rostro, caracteristicas, descripcion ) VALUES(p_rostro, p_caracteristicas, p_descripcion);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_user` (IN `p_email` VARCHAR(50), IN `p_usuario` VARCHAR(50), IN `p_password` VARCHAR(50))   BEGIN
    INSERT INTO tb_usuario(email, usuario, password) VALUES(p_email, p_usuario, p_password);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cortes`
--

CREATE TABLE `tb_cortes` (
  `id_cortes` int(11) NOT NULL,
  `nombre_corte` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` blob NOT NULL,
  `precio` double NOT NULL,
  `id_rostro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_cortes`
--

INSERT INTO `tb_cortes` (`id_cortes`, `nombre_corte`, `descripcion`, `imagen`, `precio`, `id_rostro`) VALUES
(1, 'Pompadour', '¡Presentamos el corte Pompadour, la declaración de estilo que redefine la elegancia y la sofisticación en cada mechón! Conquista el mundo con tu look audaz y atrevido, impulsado por la atemporalidad del Pompadour.', 0x433a78616d70706874646f6373696d6167656e6573706f6d7061646f75722e6a7067, 20, 1),
(2, 'Blow Out Fade', '¡Descubre la revolución en estilo con nuestro espectacular \"Blowout Fade\"! Este corte de pelo de última moda no solo es un servicio, ¡es una experiencia de transformación que elevará tu estilo a nuevas alturas!', 0x433a78616d70706874646f6373696d6167656e6573086c6f776f7574666164652e6a7067, 25, 1),
(3, 'Quiff', '¡Presentamos el corte Quiff, la máxima expresión de estilo y audacia! Prepara tu cabello para un viaje al siguiente nivel de elegancia y distinción con este corte que desafía los límites de la moda. Imagina un estilo que fusiona la actitud rebelde con la sofisticación moderna: eso es el Quiff.', 0x433a78616d70706874646f6373696d6167656e657371756966662e6a7067, 30, 1),
(4, 'French crop', '¡Introducimos el corte French Crop, la epítome de la elegancia sin esfuerzo y el estilo contemporáneo! Prepárate para una experiencia de corte que combina la sofisticación parisina con la practicidad moderna, todo en un solo look.', 0x433a78616d70706874646f6373696d6167656e65736672656e636863726f702e6a7067, 27, 1),
(5, 'Bro flow', '¡Descubre el corte Bro Flow, la fusión perfecta de frescura y actitud relajada que redefine la masculinidad con un toque moderno! Este corte no solo es un estilo; es una declaración de autenticidad y confianza que refleja tu personalidad vibrante.', 0x433a78616d70706874646f6373696d6167656e657308726f666c6f772e6a7067, 25, 1),
(6, 'Crew cut', '¡Presentamos el corte Crew Cut, la expresión máxima de elegancia y versatilidad en el mundo del estilo masculino! Prepárate para descubrir un corte que combina la sofisticación clásica con un toque contemporáneo, diseñado para aquellos que buscan un look pulido y sin complicaciones.', 0x433a78616d70706874646f6373696d6167656e6573637265776375742e77656270, 30, 2),
(7, 'Taper fade', '¡Haz una declaración de estilo audaz con nuestro increíble \"Taper Fade\"! Sumérgete en la elegancia y la versatilidad de este corte de cabello de última moda, diseñado para destacar tu individualidad con un toque de sofisticación.', 0x433a78616d70706874646f6373696d6167656e65730961706572666164652e6a7067, 30, 2),
(8, 'Buzz cut', '¡Bienvenido al mundo del corte Buzz Cut, la esencia misma de la audacia y la simplicidad! Descubre la elegancia sin esfuerzo y la confianza que viene con este estilo atemporal y versátil, diseñado para aquellos que valoran la comodidad sin sacrificar el estilo.', 0x433a78616d70706874646f6373696d6167656e657308757a7a6375742e6a7067, 30, 2),
(9, 'Comb over', 'No te conformes con lo común, elige la distinción. El corte Comb Over es la personificación de la elegancia atemporal con un toque moderno. Descubre el equilibrio entre lo clásico y lo contemporáneo con el Comb Over.', 0x433a78616d70706874646f6373696d6167656e6573636f6d626f7665722e77656270, 30, 2),
(10, 'Spiky', '¡Introducing el corte Spiky, la expresión definitiva de rebeldía y estilo audaz! Prepárate para llevar tu look al siguiente nivel con este corte que grita confianza y actitud, diseñado para aquellos que buscan destacar en cualquier multitud.', 0x433a78616d70706874646f6373696d6167656e65737370696b792e77656270, 30, 2),
(11, 'High Fade', '¡Bienvenido a la cima del estilo con nuestro exclusivo \"High Fade\"! Este corte de pelo redefine la elegancia con una fusión perfecta de audacia y precisión, llevando tu imagen a nuevas alturas de modernidad y distinción!.', 0x433a78616d70706874646f6373696d6167656e657368696768666164652e6a7067, 35, 3),
(12, 'Brush Back', '¡Presentamos el corte Brush Back, la manifestación de elegancia relajada y sofisticación moderna! Prepárate para un look que fusiona sin esfuerzo la frescura casual con un toque de refinamiento, diseñado para aquellos que buscan un estilo versátil y lleno de personalidad.', 0x433a78616d70706874646f6373696d6167656e657308727573686261636b2e77656270, 35, 3),
(13, 'Faux Hawk', '¡Descubre el corte Faux Hawk, la fusión perfecta de rebeldía y elegancia que te llevará al centro de la atención! Prepárate para un look que combina la audacia del mohawk con la sofisticación moderna, diseñado para aquellos que buscan destacar con estilo y actitud.', 0x433a78616d70706874646f6373696d6167656e6573666175786861776b2e6a7067, 35, 3),
(14, 'Undercut', '¡Presentamos el corte Undercut, la definición de modernidad y estilo que transformará por completo tu apariencia! Prepárate para un look audaz que combina la frescura contemporánea con una actitud atrevida, diseñado para aquellos que buscan una declaración de moda sin igual.', 0x433a78616d70706874646f6373696d6167656e6573756e6465726375742e6a7067, 25, 3),
(15, 'Low Fade', ' ¡Descubre la revolución en cortes de cabello con nuestro espectacular \"Low Fade\"! Este corte vanguardista combina a la perfección estilo y versatilidad para ofrecerte una apariencia moderna y sofisticada.', 0x433a78616d70706874646f6373696d6167656e65736c6f77666164652e6a7067, 40, 4),
(16, 'Slicked Back', '¡Presentamos el corte Slicked Back, la epitome de la elegancia clásica y sofisticación moderna! Prepárate para un look atemporal que fusiona la distinción vintage con un toque contemporáneo, diseñado para aquellos que buscan un estilo pulido y lleno de clase.', 0x433a78616d70706874646f6373696d6167656e6573736c69636b65646261636b2e6a7067, 40, 4),
(17, 'Caesar', 'Imagina un peinado que captura la esencia de la antigua Roma con un giro moderno. El corte Caesar no es simplemente un peinado; es una declaración de estilo que evoca la grandeza de la historia con un toque actual. Nuestros estilistas expertos han perfeccionado cada detalle para crear una apariencia que resalta tus rasgos faciales y emana confianza.', 0x433a78616d70706874646f6373696d6167656e65736361657361722e6a7067, 40, 4),
(18, 'Degradado', '¡Introducimos el corte de degradado, la manifestación de estilo y precisión en la peluquería moderna! Prepárate para un look que fusiona la técnica experta con la moda contemporánea, diseñado para aquellos que buscan una transición suave y dinámica entre longitudes de cabello.', 0x433a78616d70706874646f6373696d6167656e657364656772616461646f2e6a7067, 40, 4),
(19, 'Moustache', '¡Presentamos el estilo Moustache, la expresión máxima de masculinidad y carácter distintivo! Prepárate para un look que rinde homenaje a la elegancia clásica y añade un toque moderno a tu rostro, diseñado para aquellos que buscan destacar con un toque de sofisticación.', 0x433a78616d70706874646f6373696d6167656e65736d6f757374616368652e6a7067, 50, 5),
(20, 'Beard', '¡Presentamos el combo perfecto: el estilo Beard y Moustache, la expresión definitiva de masculinidad y distinción facial! Prepárate para un look que combina la robustez de una barba bien cuidada con la elegancia distintiva de un bigote, diseñado para aquellos que buscan destacar con un toque de sofisticación y carácter.', 0x433a78616d70706874646f6373696d6167656e657308656172642e6a7067, 50, 5),
(21, 'Chin Strap', '¡Presentamos el estilo Chin Strap, una declaración de moda audaz y definida para aquellos que buscan destacar con un toque distintivo! Prepárate para un look que destaca la mandíbula con una línea nítida y elegante, diseñado para resaltar la estructura facial con un toque moderno..', 0x433a78616d70706874646f6373696d6167656e65736368696e2e706e67, 50, 5),
(22, 'Flequillo Largo', '¡Presentamos el estilo Flequillo Largo, la fusión perfecta de juventud y elegancia desenfadada! Prepárate para un look que agrega un toque juguetón y moderno a tu apariencia, diseñado para aquellos que buscan un peinado que combine comodidad y estilo.', 0x433a78616d70706874646f6373696d6167656e6573666c657175696c6c6f6c6172676f2e6a706567, 50, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rostro`
--

CREATE TABLE `tb_rostro` (
  `id_rostro` int(11) NOT NULL,
  `rostro` varchar(50) NOT NULL,
  `caracteristicas` varchar(500) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_rostro`
--

INSERT INTO `tb_rostro` (`id_rostro`, `rostro`, `caracteristicas`, `descripcion`) VALUES
(1, 'Redondo', 'La longitud y la anchura del rostro son casi iguales. Las líneas de la mandíbula y la frente son suaves y redondeadas.', 'Frente ligeramente más ancha que la barbilla, pómulos prominentes. Busca estilos que alarguen visualmente el rostro, como peinados con capas y gafas angulares.'),
(2, 'Cuadrado', 'La frente, las mejillas y la mandíbula tienen dimensiones similares. La mandíbula es angular.', 'Frente amplia, pómulos pronunciados, mandíbula cuadrada. Busca peinados que suavicen las líneas angulares, como capas suaves y ondas. Gafas redondas pueden equilibrar las líneas.'),
(3, 'Ovalado', 'La longitud del rostro es aproximadamente 1.5 veces la anchura. La frente es ligeramente más ancha que la mandíbula. Este tipo de rostro se considera versátil y suele adaptarse bien a una variedad de estilos.', 'Frente ligeramente más ancha que la barbilla, pómulos prominentes. Busca estilos que alarguen visualmente el rostro, como peinados con capas y gafas angulares.'),
(4, 'Rectangular', 'La longitud del rostro es mayor que la anchura. La mandíbula puede ser cuadrada o angular.', 'Frente amplia, pómulos pronunciados, mandíbula cuadrada. Busca peinados que suavicen las líneas angulares, como capas suaves y ondas. Gafas redondas pueden equilibrar las líneas.'),
(5, 'Triangular', 'La frente es más ancha que la mandíbula. La forma se estrecha hacia la barbilla.', 'Frente más amplia que la mandíbula, mandíbula afilada. Busca peinados que añadan volumen en la mandíbula y gafas que equilibren la frente.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_cortes`
--
ALTER TABLE `tb_cortes`
  ADD PRIMARY KEY (`id_cortes`),
  ADD KEY `id_rostro` (`id_rostro`);

--
-- Indices de la tabla `tb_rostro`
--
ALTER TABLE `tb_rostro`
  ADD PRIMARY KEY (`id_rostro`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_cortes`
--
ALTER TABLE `tb_cortes`
  MODIFY `id_cortes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `tb_rostro`
--
ALTER TABLE `tb_rostro`
  MODIFY `id_rostro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_cortes`
--
ALTER TABLE `tb_cortes`
  ADD CONSTRAINT `tb_cortes_ibfk_1` FOREIGN KEY (`id_rostro`) REFERENCES `tb_rostro` (`id_rostro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
