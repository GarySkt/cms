<?php 
	require 'res/php/app_top.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS</title>
	<link rel="stylesheet" href="res/css/framework/Semantic-UI-CSS-master/semantic.min.css">
	<link rel="stylesheet" href="res/css/main.css">
</head>
<body>
	<?php require 'views/nav/main_nav.php'; ?>
	<!-- si no hay una seccion seleccionada aparecera esto-->
	<?php 
		if (!isset($_GET['section'])) {

			require 'views/home.php';
		}

	 ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="res/css/framework/Semantic-UI-CSS-master/semantic.min.js"></script>
	
</body>
</html>