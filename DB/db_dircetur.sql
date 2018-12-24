-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-12-2018 a las 00:21:24
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_dircetur`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$d5CN1IctIIjEUOXjedMZAOIFOfy45ambh/xQCP7CNCE/YW3hWkRrK', '111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociacion_artesanal`
--

CREATE TABLE `asociacion_artesanal` (
  `id_aa` int(11) NOT NULL,
  `nombre_aa` varchar(100) NOT NULL,
  `presidente` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asociacion_artesanal`
--

INSERT INTO `asociacion_artesanal` (`id_aa`, `nombre_aa`, `presidente`, `telefono`, `direccion`, `email`) VALUES
(1, 'Artesanos y Emprendedores de la Región Tacna', 'Fresia María Espinoza Molina', '052-318354 | 952-923625', 'Av. Circunvalación Nro.2161 C.P.M La Natividad', 'luzmarina_guzman_147@hotmail.com'),
(2, 'nombre aa', 'presidnte', 'tele', 'direasdasd', 'eramsdas'),
(3, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(3, 'Deporte'),
(4, 'Cultura'),
(6, 'Turismo'),
(7, 'Comercio Exterior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `body` text NOT NULL,
  `img_post` varchar(150) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `name`, `body`, `img_post`, `id_categoria`, `admin_id`, `created_at`) VALUES
(9, 'MINAM, MINCETUR y CIES convocan el IV Concurso de Periodismo en innovaci&oacute;n y desarrollo sostenible', '<p>En este d&iacute;a emblem&aacute;tico por el D&iacute;a del Periodista, los ministerios del&nbsp;<a href=\"https://www.gob.pe/minam\">Ambiente</a>, de&nbsp;<a href=\"https://www.gob.pe/mincetur\">Comercio Exterior y Turismo</a>&nbsp;y el Consorcio de Investigaci&oacute;n Econ&oacute;mica y Social (CIES) lanzan el IV Concurso de Periodismo&nbsp;<em>Generando innovaci&oacute;n y desarrollo sostenible: impacto y oportunidades de las pol&iacute;ticas p&uacute;blicas. Superando la trampa del ingreso medio en el Per&uacute;</em>, con el prop&oacute;sito de fomentar la participaci&oacute;n de los periodistas como generadores e indagadores de contenidos.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>El Concurso busca motivar en el periodismo la difusi&oacute;n de actividades sostenibles que se realizan en las regiones de Cusco, Madre de Dios y San Mart&iacute;n vinculadas a los avances, oportunidades y desaf&iacute;os de los peruanos en los siguientes temas: bionegocios, conservaci&oacute;n de ecosistemas, turismo sostenible, turismo rural comunitario y producto tur&iacute;stico.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Se espera recoger testimonios contempor&aacute;neos de estas experiencias de mejora y crecimiento socio econ&oacute;mico en estas regiones, de tal manera que contribuyan en la promoci&oacute;n de actividades tur&iacute;sticas y de conservaci&oacute;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Este Concurso est&aacute; dirigido al periodismo escrito, televisivo, radial y digital; as&iacute; como a estudiantes de periodismo y ciencias de la comunicaci&oacute;n de todo el pa&iacute;s. Se premiar&aacute;n a los tres primeros puestos de cada categor&iacute;a con un monto total de 16 mil soles, as&iacute; como con pasant&iacute;as y otros reconocimientos. Los trabajos period&iacute;sticos podr&aacute;n ser enviados hasta el lunes 4 de febrero de 2019. El anuncio de ganadores se efectuar&aacute; el lunes 25 de febrero de 2019.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>El Concurso se convoca con el auspicio del&nbsp;<a href=\"https://www.idrc.ca/\">Centro Internacional de Investigaciones para el Desarrollo de Canad&aacute;</a>&nbsp;(IDRC por sus siglas en ingl&eacute;s) y el apoyo del&nbsp;<a href=\"http://colegiodeperiodistasperu.pe/\">Colegio de Periodistas del Per&uacute;</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://www.cies.org.pe/sites/all/modules/pubdlcnt/pubdlcnt.php?file=/sites/default/files/files/Concurso%20periodismo/IV%20Concurso%20de%20Periodismo/Bases%20y%20Anexos%20del%20IV%20Concurso%20de%20Periodismo.pdf&amp;nid=6424\"><strong>Descargue las Bases escaneadas con sello y firma de las tres instituciones.</strong></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>#ConcursoPeriodismo&nbsp; &nbsp;#Innovaci&oacute;nDesarrolloSostenible</p>\r\n\r\n<p>#ImpactoOportunidadesPol&iacute;ticasP&uacute;blicas&nbsp; &nbsp;#SuperandoTrampaIngresoMedioPer&uacute;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '5bb383c6af715', 7, 1, '1538491334'),
(13, 'Presidentes de la Alianza del Pac&iacute;fico liderar&aacute;n Cumbre de Oportunidades de Inversi&oacute;n en Nueva York', '<p>Con la participaci&oacute;n de los mandatarios de Chile, Sebasti&aacute;n Pi&ntilde;era; de Colombia, Iv&aacute;n Duque; de M&eacute;xico, Enrique Pe&ntilde;a Nieto; y del Per&uacute;, Mart&iacute;n Vizcarra, se llevar&aacute; a cabo el 26 de septiembre, en Nueva York, la Cumbre de Oportunidades de Inversi&oacute;n de la Alianza del Pac&iacute;fico (Pacific Alliance Investment Summit 2018). En esta ocasi&oacute;n, los presidentes dialogar&aacute;n sobre el potencial del mecanismo como motor de desarrollo y crecimiento, as&iacute; como sobre las m&uacute;ltiples alternativas econ&oacute;micas que este ofrece.</p>\r\n\r\n<p>La Cumbre supone una oportunidad para destacar c&oacute;mo la Alianza del Pac&iacute;fico se conecta globalmente a trav&eacute;s del comercio, las inversiones, la innovaci&oacute;n y los mercados financieros; as&iacute; como para dar a conocer su impacto en la regi&oacute;n y su proyecci&oacute;n al Asia Pac&iacute;fico, lo que la consolida como una de las plataformas globales m&aacute;s confiables y atractivas para los inversionistas.</p>\r\n\r\n<p>Como parte del programa, el ministro de Relaciones Exteriores de Chile, Roberto Ampuero; el ministro de Comercio, Industria y Turismo de Colombia, Jos&eacute; Manuel Restrepo; el ministro de Comercio Exterior y Turismo de Per&uacute;, Rogers Valencia; y el secretario de Econom&iacute;a de M&eacute;xico, Ildefonso Guajardo, dialogar&aacute;n sobre la necesidad de impulsar y agilizar el desarrollo de cadenas globales de valor, el potencial de la relaci&oacute;n de la Alianza del Pac&iacute;fico con los Estados Asociados y las oportunidades del mecanismo ante el contexto econ&oacute;mico global.</p>\r\n\r\n<p>El sector privado conformar&aacute; tambi&eacute;n un panel en el que discutir&aacute; temas relacionados con el rol de las corporaciones en la Alianza del Pac&iacute;fico. Dicho panel estar&aacute; formado por directivos y CEOs de Telef&oacute;nica Open Future &amp; Wayra Country Manager, de la Asociaci&oacute;n Nacional de Empresarios de Colombia, de BlackRock, y de DWS Group.</p>\r\n', '5bb388d2cce29', 7, 1, '1538492626'),
(15, 'Mincetur presenta plan tur&iacute;stico para el desarrollo sostenible del Ca&ntilde;&oacute;n de Cotahuasi', '<ul style=\"list-style-type:none\">\r\n	<li>La ceremonia de entrega de este documento se dio en el marco de las actividades por el D&iacute;a Mundial del Turismo.</li>\r\n</ul>\r\n\r\n<p>La viceministra de Turismo, Liz Chirinos, entreg&oacute; hoy al Gobierno Regional de Arequipa el &ldquo;Plan de Protecci&oacute;n, Conservaci&oacute;n, Promoci&oacute;n y Desarrollo Tur&iacute;stico del Ca&ntilde;&oacute;n de Cotahuasi y de su Zona de Influencia&rdquo;. El plan constituye un documento de planificaci&oacute;n que contiene estrategias para el desarrollo sostenible de este atractivo tur&iacute;stico, ubicado en la regi&oacute;n de Arequipa.</p>\r\n\r\n<p>&ldquo;Es la primera vez que el Estado elabora un documento que contiene dos instrumentos de planificaci&oacute;n, tales como el &lsquo;Plan de Desarrollo Tur&iacute;stico Sostenible de la Provincia de la Uni&oacute;n&rsquo; y el &acute;Plan de Uso de Tur&iacute;stico del &aacute;rea natural protegida Reserva Paisajista Subcuenca del Ca&ntilde;&oacute;n de Cotahuasi&rsquo;, los cuales comparten la misma &aacute;rea geogr&aacute;fica&rdquo;, se&ntilde;al&oacute;.</p>\r\n\r\n<p>Explic&oacute; que el plan contiene propuestas de proyectos de inversi&oacute;n con finalidad tur&iacute;stica referidos al mejoramiento de acceso a diversos espacios, puesta en valor de centros arqueol&oacute;gicos, acondicionamientos tur&iacute;sticos e innovaci&oacute;n tur&iacute;stica, entre otros.</p>\r\n\r\n<p>&ldquo;Esperamos que esta experiencia sirva de referencia para que pueda ser aplicada en otros espacios de caracter&iacute;sticas similares y con gran potencial de desarrollo tur&iacute;stico&rdquo;, sostuvo.</p>\r\n\r\n<p>Cabe precisar que este instrumento es el resultado del esfuerzo conjunto de las entidades miembro de la Comisi&oacute;n T&eacute;cnica Multisectorial (CMT) encargada de la elaboraci&oacute;n del Plan, que estuvo presidida por el Mincetur e integrada por el Ministerio de Cultura, el Ministerio del Ambiente, el Gobierno Regional de Arequipa y la Municipalidad Provincial de La Uni&oacute;n.</p>\r\n\r\n<p>La viceministra Liz Chirinos entreg&oacute; el citado plan a la gobernadora regional de Arequipa, Yamila Osorio, en el marco de la actividad central por el D&iacute;a Mundial del Turismo. Cont&oacute; tambi&eacute;n con la presencia de la directora de Turismo de Promper&uacute;, Marisol Acosta; y el gerente regional de Comercio Exterior y Turismo, Miguel Apaza, entre otras autoridades.</p>\r\n\r\n<p><strong>D&Iacute;A MUNDIAL DEL TURISMO</strong></p>\r\n\r\n<p>El &ldquo;D&iacute;a Mundial del Turismo&rdquo; se celebra el 27 de setiembre todos los a&ntilde;os y es realizado por la Organizaci&oacute;n Mundial del Turismo (OMT). Su prop&oacute;sito es divulgar y sensibilizar sobre el valor social, cultural, pol&iacute;tico y econ&oacute;mico del turismo.</p>\r\n\r\n<p>La celebraci&oacute;n en el Per&uacute; busca impulsar el turismo interno y hacer un llamado a la consciencia de los peruanos sobre la importancia de preservar nuestros recursos naturales y tur&iacute;sticos, as&iacute; como de contratar servicios formales.</p>\r\n\r\n<p>Con ese objetivo, el Mincetur lanz&oacute;, durante la semana del 23 al 30 de septiembre, descuentos especiales de hasta un 50%. Estas promociones se podr&aacute;n encontrar en el portal web Y t&uacute; qu&eacute; planes? (www.ytuqueplanes.com ).</p>\r\n\r\n<p><strong>IMPORTANTE</strong></p>\r\n\r\n<p>La Reserva Paisaj&iacute;stica Subcuenca del Cotahuasi (RPSCC) se ubica en la provincia de La Uni&oacute;n, a 9 horas y 30 minutos en auto desde Arequipa. El valle permite visitar pueblos tradicionales y disfrutar de aguas termales, la catarata de Sipia y las fallas geol&oacute;gicas del ca&ntilde;&oacute;n. Con 3.562 metros de profundidad, es uno de los mayores del mundo.</p>\r\n', '5bb3899921624', 7, 1, '1538492825'),
(16, 'En el D&iacute;a Mundial del Turismo: Ministro Valencia invita conocer el Per&uacute;', '<p>El ministro de Comercio Exterior y Turismo, Rogers Valencia, invit&oacute; a todos los peruanos a conocer el pa&iacute;s, esto al conmemorarse hoy el D&iacute;a Mundial del Turismo.</p>\r\n\r\n<p>En un video publicado en las redes sociales del Mincetur indic&oacute; que &ldquo;somos privilegiados de vivir en un pa&iacute;s tan singular como el Per&uacute;&rdquo;.</p>\r\n\r\n<p>En ese sentido, mencion&oacute; que con ocasi&oacute;n de celebrar el D&iacute;a Mundial del Turismo, el Ministerio de Comercio Exterior y Turismo viene impulsando una campa&ntilde;a de descuentos que se prolongar&aacute; hasta el pr&oacute;ximo 29 de septiembre, a trav&eacute;s del portal web Y t&uacute; qu&eacute; planes? (<a href=\"https://ytuqueplanes.com/\" target=\"_blank\">www.ytuqueplanes.com</a>).</p>\r\n\r\n<p>&ldquo;Queremos darte la oportunidad de viajar con descuentos especiales para que disfrutes del Per&uacute; a fondo. Conoce el Per&uacute;. &iexcl;Feliz d&iacute;a Mundial del Turismo!&rdquo;, finaliz&oacute;.</p>\r\n\r\n<p><strong>TURISMO Y TRANSFORMACI&Oacute;N DIGITAL</strong></p>\r\n\r\n<p>Como se recuerda, la tem&aacute;tica de este a&ntilde;o del D&iacute;a Mundial del Turismo es &ldquo;Turismo y Transformaci&oacute;n Digital&rdquo;. Se centra en la contribuci&oacute;n de las tecnolog&iacute;as digitales al desarrollo de un turismo sostenible, siendo estas a su vez una plataforma para dinamizar la actividad econ&oacute;mica en la industria.</p>\r\n\r\n<p>En esa l&iacute;nea, desde julio &uacute;ltimo el Mincetur lanz&oacute; el aplicativo de descuentos tur&iacute;sticos &ldquo;J&oacute;venes en Ruta&rdquo; (habilitado en las plataformas Android y IOS), destinado a los j&oacute;venes entre 15 y 25 a&ntilde;os. As&iacute;, a trav&eacute;s de esta plataforma, los usuarios podr&aacute;n acceder a una diversidad de promociones tur&iacute;sticas.</p>\r\n', '5bb389cc9b073', 6, 1, '1538492876'),
(17, 'prueba', '<p>asdaadcacawcdawcdawcdacwdacwdcawdca\\wdc\\aw\\cdawaaa</p>\n\n<p>cawd</p>\n\n<p>ca</p>\n\n<p>wdc</p>\n\n<p>awd</p>\n\n<p>ca</p>\n\n<p>wdc</p>\n\n<p>awd</p>\n', '5c10423f7de8d', 3, 1, '1544569407');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector_exportacion`
--

CREATE TABLE `sector_exportacion` (
  `id_se` int(11) NOT NULL,
  `img_se` varchar(150) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `producto_exportado` varchar(300) NOT NULL,
  `mercado_exportacion` varchar(300) NOT NULL,
  `total_fob` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla Sectores de Exportacion';

--
-- Volcado de datos para la tabla `sector_exportacion`
--

INSERT INTO `sector_exportacion` (`id_se`, `img_se`, `sector`, `producto_exportado`, `mercado_exportacion`, `total_fob`) VALUES
(1, '', 'Mineria', 'Minerales de cobre / Concentrados de cobre a granel / Oro / Concentrados de Zinc.', 'Brasil / Chile / China / Chile / Corea del Sur / España / India Japon / Mexico / Emiratos Arabes Unidos / Estados Unidos.', '1,140,721,422.71'),
(2, '', 'Agricultura', 'Cafe', 'Alemania / Belgica / Canada / Chile / Dinamarca / Estados Unidos / Finlandia / Hungria / Irlanda / Japon / Holanda / Reino Unido / Republica Checa / Suiza.', '6,665,799.57'),
(3, '', 'Agroindustria', 'Alcachofas / Maíz Blanco / Maíz Gigante de Cusco / Maíz Chulpi / Maíz Montaña / Cacao en grano / Cacao Orgánico / Cacao convencional / Aguaymanto deshidratado / Kiwicha / Chirimoyas frescas / Sal de Maras / Cañihua / Chía.', 'España / Estados Unidos / Holanda / Belgica / Canada / Japon / Italia / Alemania / Estados Unidos / Chile / Mexico / Ecuador / Rusia.', '14,249,196.71'),
(5, '', 'Artesania', 'Nacimientos / Peletería / Cerámicas de animales / Artículos de decoración / Instrumentos Musicales / Bolsos / Monederos / Estuches / Cintillos / Bisutería.', 'Alemania / Australia / Bolivia / Chile / España / Estados Unidos / Francia / Italia / Mexico / Puerto Rico / Reino Unido / Austria / Suiza.', '768,760.43'),
(6, '', 'Industria', 'Colorantes / Bolsas plásticas impresas / Andamios / Estructura para andamios / Contenedores / Retroexcavadora / Semirremolque / Cargador Frontal / Camiones / Tractores', 'Brasil / Canadá / Chile / Colombia / Egipto / España / Estados Unidos / Francia / Italia / India / Panamá / Suiza / México / Alemania.', '9,819,491.42'),
(12, '5c048cf29f2f8', 'Textil', 'Confecciones en Alpaca / Ovino / Algod&oacute;n', 'Alemania / Australia / Austria / Chile / Dinamarca / Espa&ntilde;a / Estados Unidos / Francia / Italia / M&eacute;xico / Puerto Rico / Reino Unido / Suiza.', '1,568,343.34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `comment`, `img`, `link`, `estado`) VALUES
(1, '<p style=\"text-align: center;\"><strong>Test1</strong></p>', 'sli2.jpg', '', 'i'),
(2, '<p><strong>slider1</strong></p>', 'sli1.jpg', '', 'i'),
(3, '<p style=\"text-align: center;\"><strong>Direccion regional de comercio exterior y turismo</strong></p>', 'banner.png', 'http://directur.gob.pe', 'A'),
(4, '<p>testetoasdsd</p>', 'footer-bg.jpg', '', 'I'),
(5, '<p>Dia mundial del turismo</p>', 'DIA.png', 'http://www.mincetur.gob.pe', 'I'),
(6, '<p style=\"text-align: center;\"><strong>Mincetur</strong></p>', 'standard_foto1.jpg', '', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `file` varchar(150) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `name`, `file`, `type`, `size`) VALUES
(7, 'BRASIL', '12013-brasil.pdf', 'application/pdf', 13726),
(8, 'JAPON', '14177-pdm-japon.pdf', 'application/pdf', 3632),
(9, 'PANAMA', '54294-pdm-panama.pdf', 'application/pdf', 2434),
(10, 'CHILE', '82386-pdm_chile.pdf', 'application/pdf', 11611),
(11, 'TURQUIA', '34410-turquia.pdf', 'application/pdf', 11475),
(13, '', '5c048f95a7b7f', '', 0),
(14, '', '5c04902181510', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `name`, `last_name`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Gary', 'Calle', 'gcalle', 'gcalle@gmail.com', '$2y$10$62.ri.6.4NpzYU5YhzkiietBie/4VX3fqilW8oeZ16BBxbAul3TPC', '1537803759'),
(2, 'Gary', 'Calle', 'gcallecortez', 'gcallecortez@gmail.com', '$2y$10$d5CN1IctIIjEUOXjedMZAOIFOfy45ambh/xQCP7CNCE/YW3hWkRrK', '1539610353');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `contrasena`, `email`, `estado`) VALUES
(1, 'admin', '123', 'admin@dircetur.gob.pe', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indices de la tabla `asociacion_artesanal`
--
ALTER TABLE `asociacion_artesanal`
  ADD PRIMARY KEY (`id_aa`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indices de la tabla `sector_exportacion`
--
ALTER TABLE `sector_exportacion`
  ADD PRIMARY KEY (`id_se`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `asociacion_artesanal`
--
ALTER TABLE `asociacion_artesanal`
  MODIFY `id_aa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `sector_exportacion`
--
ALTER TABLE `sector_exportacion`
  MODIFY `id_se` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
