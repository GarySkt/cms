<?php 
	require 'res/php/app_top.php';
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Direccion Regional de Comercio Exterior y Turismo</title>
	<link rel="stylesheet" href="/cms/res/css/framework/Semantic-UI-CSS-master/semantic.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/cms/res/css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="icon" type="image/png" href="/cms/res/img/escudo.png">	

	

</head>
<body>
	<!--------------Navbar---------------->
	<?php require 'views/nav/new_main_nav.php'; ?>
	<!--------------BANNER---------------->
	
	<?php require 'views/slider.php'; ?>
	<!--------------End BANNER---------------->
	
	<!-- si no hay una seccion seleccionada aparecera esto-->
	<?php 
		if(!isset($_GET['section'])) {
			require 'views/home.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="post"
		){
			require 'views/post.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="register"
		){
			require 'views/register.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="log-in"
		){
			require 'views/login.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="dircetur"
		){
			require 'views/main_nav/dircetur.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="organo_direccion"
		){
			require 'views/main_nav/dircetur/organo_direccion.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="organo_asesoramiento_apoyo"
		){
			require 'views/main_nav/dircetur/organo_asesoramiento_apoyo.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="organizacion"
		){
			require 'views/main_nav/dircetur/organizacion.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="directorio"
		){
			require 'views/main_nav/directorio.php';
		}	

//-----------------------COMERCIO EXTERIOR------------------------//
		elseif(
			isset($_GET['section']) &&
			$_GET['section']=="cx"
		){
			require 'views/main_nav/cx.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="objetivos_funciones"
		){
			require 'views/main_nav/cx/objetivos_funciones.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="pom"
		){
			require 'views/main_nav/cx/pom.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="sectores_exportacion"
		){
			require 'views/main_nav/cx/sectores_exportacion.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="analisisexportacion"
		){
			require 'views/main_nav/cx/analisisexportacion.php';
		}
//-----------------------ARTESANIA------------------------//
		elseif(
			isset($_GET['section']) &&
			$_GET['section']=="objetivos_funciones_art"
		){
			require 'views/main_nav/art/objetivos_funciones_art.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="rna"
		){
			require 'views/main_nav/art/rna.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="asociaciones_artesanales"
		){
			require 'views/main_nav/art/asociaciones_artesanales.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="artesania"
		){
			require 'views/main_nav/art/artesania.php';
		}
//---------------------TURISMO---------------------------//		
		elseif(
			isset($_GET['section']) &&
			$_GET['section']=="objetivos_funciones_dta"
		){
			require 'views/main_nav/dta/objetivos_funciones_dta.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="directorio_dta"
		){
			require 'views/main_nav/dta/directorio_dta.php';
		}


	 ?>
	 
	 <?php require 'views/nav/footer.php';?>

	
	<script src="/res/css/framework/Semantic-UI-CSS-master/semantic.min.js"></script>
	<script src="/res/css/framework/Semantic-UI-CSS-master/semantic.js"></script>
	<script src="/res/js/main.js"></script>
	
</body>
</html>