<?php
	require '../functions.php';
	$obj = new Admin_Actions();
	$delete = $obj->deleteSE($_POST['id_se']);
	echo $delete;
	//echo $_POST['category'];
?>