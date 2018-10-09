<?php 	require '../res/php/app_top_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Control Panel</title>
	<link rel="stylesheet" href="../res/css/framework/Semantic-UI-CSS-master/semantic.min.css">	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	
	<link rel="stylesheet" href="../res/css/main.css">
	<link rel="icon" type="image/png" href="../res/img/escudo.png">
</head>
<body>
	<?php
		if(
			isset($_SESSION['admin'])
			){
				require "../views/nav/main_admin_nav.php";			
			}	 	
	  ?>
	<!-- si no hay una seccion seleccionada aparecera esto-->
	<?php 
	//si no hay sesion iniciada mandara a home
		if(
			!isset($_SESSION['admin'])
		){
			require '../views/admin/home.php';
		}elseif(
			//si la sesion esta iniciada y no hay vista seleccionada
			isset($_SESSION['admin']) && 
			!isset($_GET['section'])
		){
			require '../views/admin/main.php';

		}elseif(
			//si la sesion esta iniciada y  hay vista seleccionada
			isset($_SESSION['admin']) && 
			isset($_GET['section']) &&
			$_GET['section']=="posts"
		){
			require '../views/admin/posts.php';

		}elseif(
			//si la sesion esta iniciada y  hay vista seleccionada
			isset($_SESSION['admin']) && 
			isset($_GET['section']) &&
			$_GET['section']=="categories"
		){
			require '../views/admin/categories.php';

		}elseif(
			//si la sesion esta iniciada y  hay vista seleccionada
			isset($_SESSION['admin']) && 
			isset($_GET['section']) &&
			$_GET['section']=="banner"
		){
			require '../views/admin/banner.php';
		}

	 ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../res/css/framework/Semantic-UI-CSS-master/semantic.min.js"></script>
	<script src="../res/js/admin.js"></script>
	<script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
	
</body>
</html>