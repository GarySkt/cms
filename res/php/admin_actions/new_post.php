<?php
	require '../functions.php';
	$obj = new Admin_Actions();

	$name_img=uniqid();//retorna id unico para renombrar la imagen
	//obtener perfil administrador activo
	$profile = $obj->getProfile($_SESSION['admin']);

	$save = $obj->savepost($_POST['txtNamePost'],$_POST['txtCategoryPost'],$_POST['description'],$name_img,$profile[0]['admin_id']);
	if ($save > 0) {
		move_uploaded_file($_FILES['image_file']["tmp_name"], "../../img/img_post/" . $name_img . ".png");
		echo "true";
	}else{
		echo "false";
	}
?>