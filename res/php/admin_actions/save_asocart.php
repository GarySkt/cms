<?php
	require '../functions.php';
	$obj = new Admin_Actions();
	
	$save = $obj->saveAsocArt($_POST['txtAsociacion'],$_POST['txtPresidente'],$_POST['txtTelefono'],$_POST[txtDireccion],$_POST['txtEmail']);
	echo $save;
	//echo $_POST['category'];

?>