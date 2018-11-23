<?php

	require '../init.php';
	
	$nom = $_POST["txtnom"];
	$file = $_FILES["pdf"];

	if ($pdf["type"] == "image/jpg" or $pdf["type"] == "image/jpeg") {
		$nom_encriptado =md5($pdf["tmp_name"]);
		$ruta="../uploads/".$nom_encriptado.".jpg";
		move_uploaded_file($pdf["tmp_name"], $ruta);
		mysql_query("insert into ")
	}	

?>