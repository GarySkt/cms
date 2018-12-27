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
		$_GET['section']=="new_post"
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
		//obtener contenido pom
		$pom = $user->getPom();		
	}elseif(
		isset($_GET['section']) &&
		$_GET['section']=="sectores_exportacion"
	){
		//obtener contenido de 
		$se = $user->getSectorExportacion();		
	}elseif(
		isset($_GET['section']) &&
		$_GET['section']=="analisis_exportacion"
	){
		//obtener contenido de 
		$analisis_x = $user->getAnalisisExport();		
	}
	elseif(
		isset($_GET['section']) &&
		$_GET['section']=="asociaciones_artesanales"
	){
		//obtener contenido de asociaciones artesanales
		$asoc_art = $user->getasoc_art();		
	}	

	elseif(
		isset($_GET['section']) &&
		$_GET['section']=="all_posts"
	){
		//obtener contenido pom
		$AllPost = $user->getAllPosts();		
	}

	elseif(
		isset($_GET['section']) &&
		$_GET['section']=="all_posts_list"
	){
		//obtener contenido pom
		$AllPost = $user->getAllPosts();		
	}
	elseif(
		isset($_GET['section']) &&
		$_GET['section']=="banner"
	){
		//obtener contenido slider
		$slider = $user->getSlider();
				
	}


	
 ?>