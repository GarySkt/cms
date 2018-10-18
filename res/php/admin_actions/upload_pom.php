<?php
	require '../functions.php';
	$obj = new Admin_Actions();

	$save = $obj->savePOM($_POST['pom_name'])

	//echo $_POST['pom_name'];
	echo $save;

?>