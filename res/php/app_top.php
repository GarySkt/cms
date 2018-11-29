<?php 
	require 'functions.php';
	$user = new User_Actions();

	if (!isset($_GET['section'])) {
		//obtener publicaciones recientes
		$posts = $user->getRecentPosts();
	}elseif(
		isset($_GET['section']) &&
		$_GET['section']=="post"
	){
		//obtener contenido de publicacion
		$post = $user->getPostInfo($_GET['id_post']);		
	}

	elseif(
		isset($_GET['section']) &&
		$_GET['section']=="pom"
	){
		//obtener contenido de publicacion
		$pom = $user->getPom();		
	}elseif(
		isset($_GET['section']) &&
		$_GET['section']=="sectores_exportacion"
	){
		//obtener contenido de publicacion
		$se = $user->getSectorExportacion();		
	}

 ?>