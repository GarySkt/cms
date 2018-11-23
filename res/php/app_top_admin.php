<?php 
	require "functions.php";
	$admin = new Admin_Actions();

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

	
	
 ?>