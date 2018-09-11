<?php 
	require 'init.php';
	class User_Actions{
		
	}

	class Admin_Actions{
		public function logIn($username_email, $pass){
			//esta variable esta en init.php
			global $database;

			$data = $database->select("admin", [
				"password"
		],[
			"OR"=>[
				"username"=>$username_email,
				"email"=>$username_email
			]
		]);
			$password_db = $data[0]["password"];
			if (password_verify($pass,$password_db)) {
			return true;
			}else{
				return false;
			}			
		}
		public function getCategories(){
			global $database;

			$categories=$database->select("categoria",[
				"id",
				"categoria"
			]);
			return $categories;
		}
		public function savecategory($category){
			global $database;
			//tabladonde se insertara -- informacion a gardar
			$database->insert("categoria",[
				"categoria"=>htmlentities($category)
			]);
			return $database->id();
		}
		public function deletecategory($category_id){
			global $database;
			//tabladonde se insertara -- informacion a gardar
			$delete=$database->delete("categoria",[
				"id"=>htmlentities($category_id)
			]);
			return $delete->rowCount();
		}
	}
 ?>