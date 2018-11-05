<?php 
	require 'res/php/app_top.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Direccion Regional de Comercio Exterior y Turismo</title>
	<link rel="stylesheet" href="http://localhost/cms/res/css/framework/Semantic-UI-CSS-master/semantic.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://localhost/cms/res/css/main.css">
	<link rel="icon" type="image/png" href="res/img/escudo.png">
</head>
<body>
	<?php require 'views/nav/main_nav.php'; ?>
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
			$_GET['section']=="misionvision"
		){
			require 'views/main_nav/misionvision.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="competencianaturaleza"
		){
			require 'views/main_nav/competencianaturaleza.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="fines"
		){
			require 'views/main_nav/fines.php';
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
		}
//-----------------------ARTESANIA------------------------//
		elseif(
			isset($_GET['section']) &&
			$_GET['section']=="objetivos_funciones_art"
		){
			require 'views/main_nav/art/objetivos_funciones_art.php';
		}
//---------------------TURISMO---------------------------//		
		elseif(
			isset($_GET['section']) &&
			$_GET['section']=="objetivos_dta"
		){
			require 'views/main_nav/dta/objetivos_dta.php';
		}elseif(
			isset($_GET['section']) &&
			$_GET['section']=="funciones_dta"
		){
			require 'views/main_nav/dta/funciones_dta.php';
		}

	 ?>
	 
	 <?php require 'views/nav/footer.php';?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://localhost/cms/res/css/framework/Semantic-UI-CSS-master/semantic.min.js"></script>
	<script src="http://localhost/cms/res/css/framework/Semantic-UI-CSS-master/semantic.js"></script>
	<script src="http://localhost/cms/res/js/main.js"></script>
</body>
</html>