<?php 
	require 'functions.php';
	$user = new User_Actions();

	if (!isset($_GET['section'])) {
		//obtener publicaciones recientes
		$posts = $user->getRecentPosts();

	}
 ?>