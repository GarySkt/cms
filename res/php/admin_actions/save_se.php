<?php
	require '../functions.php';
	$obj = new Admin_Actions();
//
	$name_img=uniqid();//retorna id unico para renombrar la imagen
	//obtener perfil administrador activo	

	$save=$obj->saveSE($_POST['txtNameSector'],$_POST['txtProductoExportado'],$_POST['txtMercadoExportacion'],$_POST['txtTotalFOB'],$name_img);

	if ($save > 0) {
		move_uploaded_file($_FILES['image_file']["tmp_name"], "../../img/img_se/".$name_img.".png");//guardar la imagen
		echo "true";
	}else{
		echo "false";
	}
?>