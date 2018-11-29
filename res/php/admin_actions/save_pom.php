<?php

	require '../functions.php';
	$obj = new Admin_Actions();

//	pom_file=uniqid();

	$save = $obj->savepom($_POST['txtnamepom']);
	/*if ($save > 0) {
		move_uploaded_file($_FILES['pom_file']["tmp_name"], "../uploads/".$pom_file.".pdf");
		echo "true";
	}else{
		echo "false";
	}*/
	echo $save;
	//echo $_POST['txtnamepom'];

?>