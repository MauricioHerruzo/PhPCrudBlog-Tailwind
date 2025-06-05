-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2025 a las 10:06:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

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
(31, 'Plato Gourmet de Mar y Montaña', 'En las vastas tierras de Hyrule, donde la supervivencia depende tanto de la espada como del sartén, hay platos que trascienden lo básico y se convierten en verdaderas obras maestras. Uno de ellos es el Plato Gourmet de Mar y Montaña, una receta que mezcla lo mejor de la caza y la pesca para ofrecer una comida deliciosa, nutritiva y digna del mismísimo Castillo de Hyrule.\r\n\r\nEste plato se prepara cocinando Carne Gourmet Cruda o Ave Entera Cruda junto con mariscos frescos, como Lubinas de Hyrule o Carpas Sanke, en una olla. La clave está en la calidad de los ingredientes: cuanto más selectos sean los cortes de carne y más frescos los mariscos, más corazones restaurará este manjar. Además, aunque este plato no otorga efectos especiales por defecto, si usas mariscos con propiedades específicas —como un caracol vigoroso o un pez glacial— podrás añadir bonificaciones adicionales, como resistencia al frío o recuperación de energía.\r\n\r\nUna de las grandes ventajas de este plato es su versatilidad. ¿Tienes más carne que pescado? Aún puedes prepararlo. ¿Solo tienes peces sin efecto especial? No hay problema: el resultado seguirá siendo un plato que llena varios corazones y deja a Link listo para enfrentar cualquier desafío, desde un campamento de bokoblins hasta la cima del Monte Lanayru.\r\n\r\nConsejo de cazador: Para conseguir carne gourmet, apunta a animales grandes como búfalos o ciervos majestuosos que rondan zonas como Hebra o el Gran Bosque de Hyrule. En cuanto a los mariscos, visita lagos y ríos como el Lago Hylia o las aguas cercanas a la Aldea Hatelia, donde es común encontrar una buena variedad de peces.\r\n\r\nNo subestimes el poder de una buena comida en medio de tu aventura. El Plato Gourmet de Mar y Montaña no solo llena el estómago, sino que representa el espíritu mismo de la cocina en Breath of the Wild: experimentar, combinar y disfrutar de los frutos del mundo abierto más sabroso de Hyrule.', 'BotW_Link_Cooking.webp', NULL),
(32, 'Sopa Cremosa de Carne', 'Cuando las noches se tornan frías en las alturas de Hebra o tras una batalla contra un centaleón, no hay mejor recompensa que una buena Sopa Cremosa de Carne. Este plato, tan reconfortante como poderoso, es una de las recetas más nutritivas que Link puede preparar en Breath of the Wild.\r\n\r\nLa receta base es sencilla, pero deliciosa: carne (cualquier tipo sirve), leche fresca, sal de roca y una verdura, hierba o flor sin efectos especiales. Cocinados en una olla, estos ingredientes se transforman en una sopa cremosa que restaura hasta seis corazones, ideal para recuperar fuerzas rápidamente y seguir explorando el vasto mundo de Hyrule.\r\n\r\nPero lo interesante de esta sopa es su versatilidad. Existen numerosas variantes que añaden efectos adicionales según el ingrediente vegetal que se elija:\r\n\r\nSopa Cremosa Energizante, usando miel de abeja robusta, para recuperar parte del medidor de energía.\r\n\r\nSopa Cremosa Picante, con ingredientes como Warm Safflina, que otorga resistencia al frío.\r\n\r\nSopa Cremosa Vigorosa, hecha con rábanos vivaces, que cura todos los corazones y otorga adicionales.\r\n\r\nSopas de velocidad, defensa, sigilo o incluso resistencia eléctrica o al calor, dependiendo del ingrediente añadido.', 'Breath-of-the-Wild-Best-Cooking-Recipes.avif', NULL),
(33, 'Tarta de Fruta', 'Este postre exquisito no es solo un manjar para recuperar corazones, sino que guarda un lugar especial en el corazón de la Princesa Zelda, siendo su favorito según los libros de la biblioteca del castillo.\r\n\r\nPreparar una Tarta de Fruta requiere: una manzana o una baya silvestre, cualquier otra fruta, además de trigo de Tabantha y azúcar de caña. Estos ingredientes, al ser cocinados en una olla, se convierten en una tarta fragante, ligera y perfectamente equilibrada, ideal para celebraciones o momentos de descanso tras un largo viaje.\r\n\r\nEste postre no solo se limita a su versión clásica. Existen muchas variantes según la fruta utilizada, cada una con efectos únicos que pueden marcar la diferencia en batalla o exploración:\r\n\r\nTarta de Fruta Picante: hecha con pimientos picantes, otorga resistencia al frío.\r\n\r\nTarta de Fruta Electrizante: preparada con voltfrutas, protege contra ataques eléctricos.\r\n\r\nTarta Vigorosa o Energizante: usando ingredientes especiales, puede llenar completamente o parcialmente el medidor de energía.\r\n\r\nTarta de Fruta Curativa: con durians vivaces, restaura todos los corazones y otorga corazones extra.\r\n\r\nTarta de Velocidad, Defensa, Sigilo o Poder: dependiendo de si usas semillas de loto, plátanos poderosos, o flores silenciosas, entre otros ingredientes.', 'BOTW-Cooking-Header.webp', NULL),
(34, 'Manzana Glaseada con Miel', 'A veces, lo más simple puede ser lo más poderoso. No hablo solo de espadas o escudos, sino también de la comida. En uno de mis viajes, mientras descansaba en la Aldea Kakariko, ayudé a una pequeña cocinera llamada Koko. Quería preparar manzanas glaseadas con miel para el postre, una receta que le recordaba a su madre. Solo le faltaba un ingrediente: miel de abeja robusta.\r\n\r\nCuando le llevé la miel, sus ojos se iluminaron como si hubiera traído un pedazo del pasado. Se metió en la cocina con entusiasmo y en poco tiempo volvió con una manzana glaseada con miel, cálida y brillante. Me ofreció una. La probé… y entendí. El dulzor de la miel y el toque ácido de la manzana recién madura se fundían en la boca como un recuerdo feliz.\r\n\r\nSi cocinas solo manzanas con miel de abeja robusta, sin añadir otros ingredientes con efectos distintos, obtendrás una versión energizante: restaura un poco de la rueda de energía y cura cinco corazones. Ideal después de una buena escalada o una larga carrera.\r\n\r\nHay algo especial en esta receta. No solo por lo que cura, sino por lo que representa. Para Koko, era un lazo con su madre. Para mí, es una pausa en el camino. Un momento para recordar que no todo en Hyrule son monstruos y templos. También hay dulzura, nostalgia y calidez.\r\n\r\nConsejo del camino: si encuentras un panal colgando de un árbol, vale la pena el riesgo de enfrentarte a unas abejas molestas. La miel que dejan es uno de los ingredientes más valiosos —no por su rareza, sino por lo que puede crear.', 'LinkAyuda.avif', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
