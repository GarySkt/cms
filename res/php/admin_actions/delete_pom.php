<?php
	require '../functions.php';
	$obj = new Admin_Actions();
	$delete = $obj->deletepom($_POST['pom_id']);
	echo $delete;
	//echo $_POST['category'];

?>