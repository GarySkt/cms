<?php 
	require '../functions.php';
	$admin = new Admin_Actions();
	//login
	//variables desde admin.js
	$login = $admin->logIn($_POST['email'], $_POST['pass']);
	if ($login){
	// inicio de sesion
		$_SESSION['admin'] = $_POST['email'];
		echo "true";
	}else{
		echo "false";
	}
	//echo $login;
 ?>