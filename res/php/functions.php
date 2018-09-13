<?php 
	require 'init.php';
	class User_Actions{

		public function getRecentPosts(){
			global $database;

			$posts = $database->select("post",[
				"id_post",
				"name",
				"img_post",
				"created_at"
			],[
				"ORDER"=>["post.id_post" => "DESC"],//nombre de tabla . nombre campo
				"LIMIT"=>"8"
			]);
			return $posts;
		}
		
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
		public function getProfile($email){
			global $database;

			$admin=$database->select("admin",[
				"admin_id",
				"username"
			],[
				//where
				"email"=>$email

			]);
			return $admin;
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
		public function savepost($name, $category_id,$description,$name_img,$admin_id){
			global $database;
			//tabladonde se insertara -- informacion a gardar
			$database->insert("post",[
				"name"=>htmlentities($name),
				"body"=>htmlentities($description),
				"img_post"=>$name_img,
				"id_categoria"=>htmlentities($category_id),
				"admin_id"=>$admin_id,
				"created_at"=>time()
			]);
			return $database->id();
		}
	}
 ?>