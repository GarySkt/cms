<?php 
	require "functions.php";
	$admin = new Admin_Actions();
	$user = new User_Actions();

	if (
		//si la sesion esta iniciada
		isset($_SESSION['admin'])&&
		//si hay una seccion seleccionada
		isset($_GET['section'])&&
		//y es posts
		$_GET['section']=="posts"
	) {
		//obtener categorias de la DB
		$categories=$admin->getCategories();
	}

	if (
		//si la sesion esta iniciada
		isset($_SESSION['admin'])&&
		//si hay una seccion seleccionada
		isset($_GET['section'])&&
		//y es categories
		$_GET['section']=="categories"
	) {
		//obtener categorias de la DB
		$categories=$admin->getCategories();
	}

	elseif(
		isset($_GET['section']) &&
		$_GET['section']=="pom"
	){
		//obtener contenido de publicacion
		$pom = $user->getPom();		
	}
	
 ?>