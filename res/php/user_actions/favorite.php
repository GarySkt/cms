<?php
	require '../functions.php';
	$user = new User_Actions();

	//obtener el perfil del usuario
	$profile = $user->getProfile($_SESSION["user"]);

	//marcar como favorito
	$favorite = $user->markAsFavorite($_POST["post_id"],$profile[0]["user_id"]);

	if ($favorite > 0) {
		echo "true";
	}else{
		echo "no";
	}
?>