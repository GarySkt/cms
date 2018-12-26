<?php

	require '../functions.php';
	$obj = new Admin_Actions();
//
	$name_img=uniqid();//retorna id unico para renombrar la imagen
	//obtener perfil administrador activo	

	$save=$obj->savepom($_POST['txtnamepom'],$name_img);

	if ($save > 0) {
		move_uploaded_file($_FILES['pom_file']["tmp_name"], "../cms/res/pdf/pom/".$name_img.".pdf");//guardar la imagen
		echo "true";
	}else{
		echo "false";
	}

?>