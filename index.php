<?php 
	require 'res/php/app_top.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS</title>
	<link rel="stylesheet" href="http://localhost/cms/res/css/framework/Semantic-UI-CSS-master/semantic.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://localhost/cms/res/css/main.css">
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
		}
	 ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://localhost/cms/res/css/framework/Semantic-UI-CSS-master/semantic.min.js"></script>
	<script src="http://localhost/cms/res/js/main.js"></script>
</body>
</html>