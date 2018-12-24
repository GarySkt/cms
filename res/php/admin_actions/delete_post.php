<?php

	require '../functions.php';
	$obj = new Admin_Actions();
	$delete = $obj->deletePost($_POST['id_post']);
	echo $delete;
	

?>