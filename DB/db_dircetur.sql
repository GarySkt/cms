-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2018 a las 17:08:56
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
(1, 'admin', 'admin@admin.com', '$2y$10$DSjlHDuIeK7dKcbf1/8R4uC0x.atbLgFjBcrnA285GLuNYzZf0.jW', '111');

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
(2, 'Tecnologia'),
(3, 'Deporte'),
(4, 'Cultura'),
(5, 'Otros'),
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
(7, 'El ministro #RogerValencia destac&oacute; que los empresarios del mundo tienen en los pa&iacute;ses de la #AlianzaDelPac', '<p>El ministro de Comercio Exterior y Turismo del Per&uacute;, Rogers Valencia, destac&oacute; que los empresarios del mundo tienen en los pa&iacute;ses de la Alianza del Pac&iacute;fico un lugar ideal para consolidar sus inversiones. As&iacute; lo indic&oacute; durante el desarrollo de la Cumbre &ldquo;Oportunidades de Inversi&oacute;n en la Alianza del Pac&iacute;fico&rdquo;, el cual se desarroll&oacute; en la ciudad de Nueva York (EE.UU.).</p>\r\n\r\n<p>En este evento, que cont&oacute; con la presencia de m&aacute;s de 300 inversionistas -y donde particip&oacute; junto a sus contrapartes de comercio y los presidentes del Per&uacute;, Colombia, Chile y M&eacute;xico-, el titular del Mincetur coment&oacute; que existe una integraci&oacute;n muy s&oacute;lida y econom&iacute;as estables en este bloque, que permiten garantizar emprendimientos de todo tipo.</p>\r\n\r\n<p>&ldquo;Existen avances en materia de integraci&oacute;n en los procesos productivos, conectividad a&eacute;rea, avances en telecomunicaciones, as&iacute; como la integraci&oacute;n de las bolsas de valores de los cuatro pa&iacute;ses miembro. No olvidemos el trabajo que se est&aacute; realizando en estrategia digital y normativas diversas&rdquo;, se&ntilde;al&oacute;.</p>\r\n\r\n<p><strong>SOBRE LA CUMBRE</strong></p>\r\n\r\n<p>La &ldquo;Cumbre de Inversiones de la Alianza del Pac&iacute;fico&rdquo; cont&oacute; con la participaci&oacute;n de importantes inversionistas de distantes partes del mundo.</p>\r\n\r\n<p>Este evento permiti&oacute;, una vez m&aacute;s, reafirmar el compromiso del Per&uacute; en integrar el comercio y las pol&iacute;ticas regionales junto con Chile, Colombia y M&eacute;xico.</p>\r\n\r\n<p><strong>OFICINA DE COMUNICACIONES Y PROTOCOLO</strong></p>\r\n\r\n<p><strong>MINISTERIO DE COMERCIO EXTERIOR Y TURISMO</strong></p>\r\n', '5bb3818b8a319', 7, 1, '1538490763'),
(8, 'Impulso exportador: 560 productores de banano org&aacute;nico de Piura reciben marca colectiva &ldquo;Ecochira&rdquo;', '<p>El Ministerio de Comercio Exterior y Turismo (Mincetur) entreg&oacute; a 560 productores de banano org&aacute;nico del distrito de Querocotillo (Piura), la marca colectiva Ecochira. A trav&eacute;s de este signo distintivo podr&aacute;n consolidar su presencia en los m&aacute;s exigentes mercados internacionales.</p>\r\n\r\n<p>El viceministro de Comercio Exterior, Edgar V&aacute;squez, destac&oacute; que esta marca fue entregada a la Asociaci&oacute;n de Peque&ntilde;os Productores Org&aacute;nicos de Querocotillo (APOQ), ubicada en la provincia de Sullana, en el marco de la Expoalimentaria 2018, evento en el cual particip&oacute; gracias al apoyo del Mincetur y el Gobierno Regional de Piura.</p>\r\n\r\n<p>Como se recuerda, el Valle del Chira es la zona de producci&oacute;n m&aacute;s representativa del cultivo de banano en la regi&oacute;n Piura y el Per&uacute;. Los productores de APOQ cuentan con 450 hect&aacute;reas en este valle, siendo ellos los beneficiarios directos de la marca.</p>\r\n\r\n<p>&ldquo;Ecochira fue desarrollada con el apoyo del Mincetur, luego de identificar la necesidad de generar un signo distintivo para fortalecer el posicionamiento y las exportaciones del banano org&aacute;nico del valle de Chira, ello en coordinaci&oacute;n con la Mesa T&eacute;cnica del Banano Org&aacute;nico de la regi&oacute;n&rdquo;, destac&oacute; el viceministro V&aacute;squez.</p>\r\n\r\n<p>Como se sabe, Piura es una de las principales regiones productoras de banano org&aacute;nico en el Per&uacute;; el cual cuenta con atributos propios que lo diferencian de los dem&aacute;s bananos, en cuanto a la forma, aroma y sabor, caracter&iacute;sticos de un producto de la m&aacute;s alta calidad.</p>\r\n\r\n<p>&ldquo;El pr&oacute;ximo reto a cumplir ser&aacute; lograr el posicionamiento de esta marca en el mercado internacional, contribuyendo as&iacute; a los objetivos planteados en el Plan Estrat&eacute;gico Nacional Exportador &ndash; PENX 2025&rdquo;, destac&oacute; el viceministro V&aacute;squez.</p>\r\n\r\n<p><strong>SOBRE ECOCHIRA</strong></p>\r\n\r\n<ul style=\"list-style-type:none\">\r\n	<li>La oferta exportable de banano en el Per&uacute; se caracteriza por ser org&aacute;nica certificada en un 100%, por lo tanto, los m&eacute;todos de producci&oacute;n se consideran como propios de la agricultura ecol&oacute;gica. &ldquo;ECO&rdquo; denota el aspecto ecol&oacute;gico: &quot;Banano ecol&oacute;gico del CHIRA&quot;.</li>\r\n	<li>&ldquo;ECOCHIRA&quot; fue registrada en el Instituto Nacional de Defensa de la Competencia y de la Protecci&oacute;n de la Propiedad Intelectual (INDECOPI) mediante Resoluci&oacute;n N&deg; 3925-2018/DSD-INDECOPI, para distinguir el banano fresco sin procesar. El registro de la marca colectiva denominada &ldquo;ECOCHIRA&rdquo; se realiz&oacute; a favor de la Asociaci&oacute;n de Peque&ntilde;os Productores Org&aacute;nicos de Querecotillo (APOQ).</li>\r\n</ul>\r\n\r\n<p><strong>DATOS IMPORTANTES</strong></p>\r\n\r\n<ul style=\"list-style-type:none\">\r\n	<li>Cabe indicar que el banano del Valle de Chira, espec&iacute;ficamente de la Asociaci&oacute;n de Peque&ntilde;os Productores Org&aacute;nicos de Querecotillo (APOQ) est&aacute; certificado con las normas org&aacute;nicas EU 2092/91, NOP, JAS y cuenta adem&aacute;s con certificaci&oacute;n de buenas pr&aacute;cticas agr&iacute;colas Global GAP. De esta forma, con una oferta exportable diferenciada, se podr&aacute; atender a nichos de mercado exigentes que demandan este tipo de productos.</li>\r\n	<li>La producci&oacute;n de banano org&aacute;nico en Piura se acerca a las 205 mil toneladas anuales, y se produce en una extensi&oacute;n de 11,600 hect&aacute;reas, aproximadamente. Los principales mercados de destino del banano org&aacute;nico son los pa&iacute;ses de la Uni&oacute;n Europea, Estados Unidos y Jap&oacute;n.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '5bb382d38e5b8', 7, 1, '1538491091'),
(9, 'MINAM, MINCETUR y CIES convocan el IV Concurso de Periodismo en innovaci&oacute;n y desarrollo sostenible', '<p>En este d&iacute;a emblem&aacute;tico por el D&iacute;a del Periodista, los ministerios del&nbsp;<a href=\"https://www.gob.pe/minam\">Ambiente</a>, de&nbsp;<a href=\"https://www.gob.pe/mincetur\">Comercio Exterior y Turismo</a>&nbsp;y el Consorcio de Investigaci&oacute;n Econ&oacute;mica y Social (CIES) lanzan el IV Concurso de Periodismo&nbsp;<em>Generando innovaci&oacute;n y desarrollo sostenible: impacto y oportunidades de las pol&iacute;ticas p&uacute;blicas. Superando la trampa del ingreso medio en el Per&uacute;</em>, con el prop&oacute;sito de fomentar la participaci&oacute;n de los periodistas como generadores e indagadores de contenidos.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>El Concurso busca motivar en el periodismo la difusi&oacute;n de actividades sostenibles que se realizan en las regiones de Cusco, Madre de Dios y San Mart&iacute;n vinculadas a los avances, oportunidades y desaf&iacute;os de los peruanos en los siguientes temas: bionegocios, conservaci&oacute;n de ecosistemas, turismo sostenible, turismo rural comunitario y producto tur&iacute;stico.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Se espera recoger testimonios contempor&aacute;neos de estas experiencias de mejora y crecimiento socio econ&oacute;mico en estas regiones, de tal manera que contribuyan en la promoci&oacute;n de actividades tur&iacute;sticas y de conservaci&oacute;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Este Concurso est&aacute; dirigido al periodismo escrito, televisivo, radial y digital; as&iacute; como a estudiantes de periodismo y ciencias de la comunicaci&oacute;n de todo el pa&iacute;s. Se premiar&aacute;n a los tres primeros puestos de cada categor&iacute;a con un monto total de 16 mil soles, as&iacute; como con pasant&iacute;as y otros reconocimientos. Los trabajos period&iacute;sticos podr&aacute;n ser enviados hasta el lunes 4 de febrero de 2019. El anuncio de ganadores se efectuar&aacute; el lunes 25 de febrero de 2019.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>El Concurso se convoca con el auspicio del&nbsp;<a href=\"https://www.idrc.ca/\">Centro Internacional de Investigaciones para el Desarrollo de Canad&aacute;</a>&nbsp;(IDRC por sus siglas en ingl&eacute;s) y el apoyo del&nbsp;<a href=\"http://colegiodeperiodistasperu.pe/\">Colegio de Periodistas del Per&uacute;</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://www.cies.org.pe/sites/all/modules/pubdlcnt/pubdlcnt.php?file=/sites/default/files/files/Concurso%20periodismo/IV%20Concurso%20de%20Periodismo/Bases%20y%20Anexos%20del%20IV%20Concurso%20de%20Periodismo.pdf&amp;nid=6424\"><strong>Descargue las Bases escaneadas con sello y firma de las tres instituciones.</strong></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>#ConcursoPeriodismo&nbsp; &nbsp;#Innovaci&oacute;nDesarrolloSostenible</p>\r\n\r\n<p>#ImpactoOportunidadesPol&iacute;ticasP&uacute;blicas&nbsp; &nbsp;#SuperandoTrampaIngresoMedioPer&uacute;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '5bb383c6af715', 7, 1, '1538491334'),
(11, '#Diamundialdelturismo', '<blockquote>\r\n<p>En el D&iacute;a Mundial del Turismo, el canciller <a href=\"https://twitter.com/NestorPopolizio?ref_src=twsrc%5Etfw\">@NestorPopolizio</a> los invita a conocer la variedad y riqueza de nuestro pa&iacute;s, disfrutando de los atractivos tur&iacute;sticos que tiene el Per&uacute; .ðŸ™ŒðŸ‡µðŸ‡ª<a href=\"https://twitter.com/hashtag/DiaMundialdelTurismo?src=hash&amp;ref_src=twsrc%5Etfw\">#DiaMundialdelTurismo</a> <a href=\"https://t.co/sKDES9DSFO\">pic.twitter.com/sKDES9DSFO</a></p>\r\n&mdash; Canciller&iacute;a Per&uacute;ðŸ‡µðŸ‡ª (@CancilleriaPeru) <a href=\"https://twitter.com/CancilleriaPeru/status/1045335808583102464?ref_src=twsrc%5Etfw\">27 de septiembre de 2018</a></blockquote>\r\n', '5bb38515e4e8b', 6, 1, '1538491669'),
(13, 'Presidentes de la Alianza del Pac&iacute;fico liderar&aacute;n Cumbre de Oportunidades de Inversi&oacute;n en Nueva York', '<p>Con la participaci&oacute;n de los mandatarios de Chile, Sebasti&aacute;n Pi&ntilde;era; de Colombia, Iv&aacute;n Duque; de M&eacute;xico, Enrique Pe&ntilde;a Nieto; y del Per&uacute;, Mart&iacute;n Vizcarra, se llevar&aacute; a cabo el 26 de septiembre, en Nueva York, la Cumbre de Oportunidades de Inversi&oacute;n de la Alianza del Pac&iacute;fico (Pacific Alliance Investment Summit 2018). En esta ocasi&oacute;n, los presidentes dialogar&aacute;n sobre el potencial del mecanismo como motor de desarrollo y crecimiento, as&iacute; como sobre las m&uacute;ltiples alternativas econ&oacute;micas que este ofrece.</p>\r\n\r\n<p>La Cumbre supone una oportunidad para destacar c&oacute;mo la Alianza del Pac&iacute;fico se conecta globalmente a trav&eacute;s del comercio, las inversiones, la innovaci&oacute;n y los mercados financieros; as&iacute; como para dar a conocer su impacto en la regi&oacute;n y su proyecci&oacute;n al Asia Pac&iacute;fico, lo que la consolida como una de las plataformas globales m&aacute;s confiables y atractivas para los inversionistas.</p>\r\n\r\n<p>Como parte del programa, el ministro de Relaciones Exteriores de Chile, Roberto Ampuero; el ministro de Comercio, Industria y Turismo de Colombia, Jos&eacute; Manuel Restrepo; el ministro de Comercio Exterior y Turismo de Per&uacute;, Rogers Valencia; y el secretario de Econom&iacute;a de M&eacute;xico, Ildefonso Guajardo, dialogar&aacute;n sobre la necesidad de impulsar y agilizar el desarrollo de cadenas globales de valor, el potencial de la relaci&oacute;n de la Alianza del Pac&iacute;fico con los Estados Asociados y las oportunidades del mecanismo ante el contexto econ&oacute;mico global.</p>\r\n\r\n<p>El sector privado conformar&aacute; tambi&eacute;n un panel en el que discutir&aacute; temas relacionados con el rol de las corporaciones en la Alianza del Pac&iacute;fico. Dicho panel estar&aacute; formado por directivos y CEOs de Telef&oacute;nica Open Future &amp; Wayra Country Manager, de la Asociaci&oacute;n Nacional de Empresarios de Colombia, de BlackRock, y de DWS Group.</p>\r\n', '5bb388d2cce29', 7, 1, '1538492626'),
(14, 'Mincetur: exportaciones peruanas lograr&aacute;n r&eacute;cord hist&oacute;rico en gesti&oacute;n de presidente Vizcarra', '<p>El ministro de Comercio Exterior y Turismo, Rogers Valencia, destac&oacute; hoy que las exportaciones peruanas lograr&aacute;n un r&eacute;cord hist&oacute;rico durante la gesti&oacute;n del presidente de la Rep&uacute;blica, Mart&iacute;n Vizcarra. Esto gracias a la pol&iacute;tica de apertura de mercados y la promoci&oacute;n comercial que realiza el sector.</p>\r\n\r\n<p>Al hacer un balance por los primeros 180 d&iacute;as de gesti&oacute;n al mando del Mincetur, el ministro se&ntilde;al&oacute; que los env&iacute;os al mercado internacional superar&iacute;an los US$ 50 mil millones en el 2018, lo que establecer&iacute;a una cifra hist&oacute;rica para el Per&uacute;.</p>\r\n\r\n<p>&ldquo;A julio del 2018, las exportaciones nacionales bordearon los US$ 28 mil millones, 18% m&aacute;s que el mismo periodo del 2017. Esto fue impulsado en buena parte por el aumento de las exportaciones no tradicionales de productos como la pota (+65%), los fosfatos (+40%), los textiles de lana (+40%), el mango (+35%) y la uva (34%). Esta cifra es importante y avizora que a fin de a&ntilde;o lograremos un r&eacute;cord exportador&rdquo;, indic&oacute;.</p>\r\n\r\n<p>Como se recuerda Mincetur realiza una importante labor en la b&uacute;squeda de nuevos mercados y la promoci&oacute;n comercial.</p>\r\n\r\n<p><strong>DESARROLLO EXPORTADOR REGIONAL</strong></p>\r\n\r\n<p>El ministro Valencia sostuvo que para continuar con el crecimiento exportador, es importante consolidar las exportaciones de las regiones del Per&uacute;. En ese sentido, coment&oacute; que uno de los logros alcanzados por el Mincetur es la actualizaci&oacute;n de 18 Planes Regionales de Exportaci&oacute;n (PERX), cinco entregados en el periodo del presidente Vizcarra.</p>\r\n\r\n<p>Los PERX son la hoja de ruta que tiene cada regi&oacute;n del pa&iacute;s para impulsar y consolidar los env&iacute;os no tradicionales de cada zona del pa&iacute;s. El Ministerio de Comercio Exterior y Turismo viene trabajando en ellos y a final de a&ntilde;o se tiene previsto concluir con la entrega de los planes regionales.</p>\r\n\r\n<p><strong>CAF&Eacute;S DEL PER&Uacute;</strong></p>\r\n\r\n<p>En ese sentido, la labor que se realiza para el impulso exportador es transversal. Un claro ejemplo es la puesta en marcha de iniciativas como el lanzamiento de la marca Caf&eacute;s del Per&uacute;, realizado en agosto &uacute;ltimo.</p>\r\n\r\n<p>&ldquo;El lanzamiento de Caf&eacute;s del Per&uacute; contribuye al posicionamiento global de este producto. La marca busca que el caf&eacute; peruano pueda envolver al consumidor con la historia de un producto que se conecta con la riqueza cultural y la biodiversidad del Per&uacute;, y que adem&aacute;s tiene un fuerte componente social, ya que su producci&oacute;n involucra a casi medio mill&oacute;n de familias de diferentes zonas del pa&iacute;s&rdquo;, finaliz&oacute; el titular del Mincetur.</p>\r\n', '5bb3895eacd73', 7, 1, '1538492766'),
(15, 'Mincetur presenta plan tur&iacute;stico para el desarrollo sostenible del Ca&ntilde;&oacute;n de Cotahuasi', '<ul style=\"list-style-type:none\">\r\n	<li>La ceremonia de entrega de este documento se dio en el marco de las actividades por el D&iacute;a Mundial del Turismo.</li>\r\n</ul>\r\n\r\n<p>La viceministra de Turismo, Liz Chirinos, entreg&oacute; hoy al Gobierno Regional de Arequipa el &ldquo;Plan de Protecci&oacute;n, Conservaci&oacute;n, Promoci&oacute;n y Desarrollo Tur&iacute;stico del Ca&ntilde;&oacute;n de Cotahuasi y de su Zona de Influencia&rdquo;. El plan constituye un documento de planificaci&oacute;n que contiene estrategias para el desarrollo sostenible de este atractivo tur&iacute;stico, ubicado en la regi&oacute;n de Arequipa.</p>\r\n\r\n<p>&ldquo;Es la primera vez que el Estado elabora un documento que contiene dos instrumentos de planificaci&oacute;n, tales como el &lsquo;Plan de Desarrollo Tur&iacute;stico Sostenible de la Provincia de la Uni&oacute;n&rsquo; y el &acute;Plan de Uso de Tur&iacute;stico del &aacute;rea natural protegida Reserva Paisajista Subcuenca del Ca&ntilde;&oacute;n de Cotahuasi&rsquo;, los cuales comparten la misma &aacute;rea geogr&aacute;fica&rdquo;, se&ntilde;al&oacute;.</p>\r\n\r\n<p>Explic&oacute; que el plan contiene propuestas de proyectos de inversi&oacute;n con finalidad tur&iacute;stica referidos al mejoramiento de acceso a diversos espacios, puesta en valor de centros arqueol&oacute;gicos, acondicionamientos tur&iacute;sticos e innovaci&oacute;n tur&iacute;stica, entre otros.</p>\r\n\r\n<p>&ldquo;Esperamos que esta experiencia sirva de referencia para que pueda ser aplicada en otros espacios de caracter&iacute;sticas similares y con gran potencial de desarrollo tur&iacute;stico&rdquo;, sostuvo.</p>\r\n\r\n<p>Cabe precisar que este instrumento es el resultado del esfuerzo conjunto de las entidades miembro de la Comisi&oacute;n T&eacute;cnica Multisectorial (CMT) encargada de la elaboraci&oacute;n del Plan, que estuvo presidida por el Mincetur e integrada por el Ministerio de Cultura, el Ministerio del Ambiente, el Gobierno Regional de Arequipa y la Municipalidad Provincial de La Uni&oacute;n.</p>\r\n\r\n<p>La viceministra Liz Chirinos entreg&oacute; el citado plan a la gobernadora regional de Arequipa, Yamila Osorio, en el marco de la actividad central por el D&iacute;a Mundial del Turismo. Cont&oacute; tambi&eacute;n con la presencia de la directora de Turismo de Promper&uacute;, Marisol Acosta; y el gerente regional de Comercio Exterior y Turismo, Miguel Apaza, entre otras autoridades.</p>\r\n\r\n<p><strong>D&Iacute;A MUNDIAL DEL TURISMO</strong></p>\r\n\r\n<p>El &ldquo;D&iacute;a Mundial del Turismo&rdquo; se celebra el 27 de setiembre todos los a&ntilde;os y es realizado por la Organizaci&oacute;n Mundial del Turismo (OMT). Su prop&oacute;sito es divulgar y sensibilizar sobre el valor social, cultural, pol&iacute;tico y econ&oacute;mico del turismo.</p>\r\n\r\n<p>La celebraci&oacute;n en el Per&uacute; busca impulsar el turismo interno y hacer un llamado a la consciencia de los peruanos sobre la importancia de preservar nuestros recursos naturales y tur&iacute;sticos, as&iacute; como de contratar servicios formales.</p>\r\n\r\n<p>Con ese objetivo, el Mincetur lanz&oacute;, durante la semana del 23 al 30 de septiembre, descuentos especiales de hasta un 50%. Estas promociones se podr&aacute;n encontrar en el portal web Y t&uacute; qu&eacute; planes? (www.ytuqueplanes.com ).</p>\r\n\r\n<p><strong>IMPORTANTE</strong></p>\r\n\r\n<p>La Reserva Paisaj&iacute;stica Subcuenca del Cotahuasi (RPSCC) se ubica en la provincia de La Uni&oacute;n, a 9 horas y 30 minutos en auto desde Arequipa. El valle permite visitar pueblos tradicionales y disfrutar de aguas termales, la catarata de Sipia y las fallas geol&oacute;gicas del ca&ntilde;&oacute;n. Con 3.562 metros de profundidad, es uno de los mayores del mundo.</p>\r\n', '5bb3899921624', 7, 1, '1538492825'),
(16, 'En el D&iacute;a Mundial del Turismo: Ministro Valencia invita conocer el Per&uacute;', '<p>El ministro de Comercio Exterior y Turismo, Rogers Valencia, invit&oacute; a todos los peruanos a conocer el pa&iacute;s, esto al conmemorarse hoy el D&iacute;a Mundial del Turismo.</p>\r\n\r\n<p>En un video publicado en las redes sociales del Mincetur indic&oacute; que &ldquo;somos privilegiados de vivir en un pa&iacute;s tan singular como el Per&uacute;&rdquo;.</p>\r\n\r\n<p>En ese sentido, mencion&oacute; que con ocasi&oacute;n de celebrar el D&iacute;a Mundial del Turismo, el Ministerio de Comercio Exterior y Turismo viene impulsando una campa&ntilde;a de descuentos que se prolongar&aacute; hasta el pr&oacute;ximo 29 de septiembre, a trav&eacute;s del portal web Y t&uacute; qu&eacute; planes? (<a href=\"https://ytuqueplanes.com/\" target=\"_blank\">www.ytuqueplanes.com</a>).</p>\r\n\r\n<p>&ldquo;Queremos darte la oportunidad de viajar con descuentos especiales para que disfrutes del Per&uacute; a fondo. Conoce el Per&uacute;. &iexcl;Feliz d&iacute;a Mundial del Turismo!&rdquo;, finaliz&oacute;.</p>\r\n\r\n<p><strong>TURISMO Y TRANSFORMACI&Oacute;N DIGITAL</strong></p>\r\n\r\n<p>Como se recuerda, la tem&aacute;tica de este a&ntilde;o del D&iacute;a Mundial del Turismo es &ldquo;Turismo y Transformaci&oacute;n Digital&rdquo;. Se centra en la contribuci&oacute;n de las tecnolog&iacute;as digitales al desarrollo de un turismo sostenible, siendo estas a su vez una plataforma para dinamizar la actividad econ&oacute;mica en la industria.</p>\r\n\r\n<p>En esa l&iacute;nea, desde julio &uacute;ltimo el Mincetur lanz&oacute; el aplicativo de descuentos tur&iacute;sticos &ldquo;J&oacute;venes en Ruta&rdquo; (habilitado en las plataformas Android y IOS), destinado a los j&oacute;venes entre 15 y 25 a&ntilde;os. As&iacute;, a trav&eacute;s de esta plataforma, los usuarios podr&aacute;n acceder a una diversidad de promociones tur&iacute;sticas.</p>\r\n', '5bb389cc9b073', 6, 1, '1538492876');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `comment`, `img`, `link`) VALUES
(1, '<p>Test1</p>', 'sli2.jpg', ''),
(2, '<p>slider1</p>', 'sli1.jpg', ''),
(3, '<p>Direccion regional de comercio exterior y turismo</p>', 'banner.png', 'http://directur.gob.pe'),
(4, '<p>testetoasdsd</p>', 'footer-bg.jpg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_meta`
--

CREATE TABLE `slider_meta` (
  `hide` varchar(10) NOT NULL,
  `id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider_meta`
--

INSERT INTO `slider_meta` (`hide`, `id`) VALUES
('nonehide', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social_networks`
--

CREATE TABLE `social_networks` (
  `facebook` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Redes sociales link';

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
(1, 'Gary', 'Calle', 'gcalle', 'gcalle@gmail.com', '$2y$10$62.ri.6.4NpzYU5YhzkiietBie/4VX3fqilW8oeZ16BBxbAul3TPC', '1537803759');

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
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider_meta`
--
ALTER TABLE `slider_meta`
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
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
