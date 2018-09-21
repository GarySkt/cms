<?php 
	require '../functions.php';
	$user = new User_Actions();
	//login
	//variables desde admin.js
	$login = $user->logIn($_POST['email'], $_POST['pass']);
	if ($login){
	// inicio de sesion
		$_SESSION['user'] = $_POST['email'];
		echo "true";
	}else{
		echo "false";
	}
	//echo $login;
 ?>