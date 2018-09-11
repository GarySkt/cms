<?php 
	session_start();
	require 'medoo.php';
	use Medoo\Medoo;

try {
	$database = new Medoo([

		'database_type' => 'mysql',
		'database_name' => 'db_dircetur',
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
	]);
	
} catch (Exception $e) {
	echo "No se pudo conectar con la base de datos";
	
}


	

 ?>