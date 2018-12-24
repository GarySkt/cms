<?php 
	require 'functions.php';
	$user = new User_Actions();

	if (!isset($_GET['section'])) {
		//obtener publicaciones recientes
		$posts = $user->getRecentPosts();
		$slider = $user->getSlider();
	}elseif(
		isset($_GET['section']) &&
		$_GET['section']=="post"
	){
		//obtener contenido de publicacion
		$post = $user->getPostInfo($_GET['id_post']);
		$slider = $user->getSlider();
	}
	
	elseif(
		isset($_GET['section']) &&
		$_GET['section']=="sectores_exportacion"
	){
		//obtener contenido de publicacion
		$se = $user->getSectorExportacion();	
		$slider = $user->getSlider();	
	}


	elseif(
		isset($_GET['section']) &&
		$_GET['section']=="asociaciones_artesanales"
	){
		//obtener contenido de publicacion
		$asoc_art = $user->getasoc_art();
		$slider = $user->getSlider();		
	}

	elseif(
		isset($_GET['section']) &&
		$_GET['section']=="cx"
	){
		//obtener contenido de publicacion
		$pom = $user->getPom();	
		$slider = $user->getSlider();	
	}

 ?>