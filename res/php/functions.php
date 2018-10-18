<?php 
	require 'init.php';
	class User_Actions{

		public function logIn($username_email, $pass){
			//esta variable esta en init.php
			global $database;

			$data = $database->select("users", [
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


		public function getProfile($session){
			global $database;

			$user = $database->select("users",[
				"user_id"

			],[
				"OR"=>[
					"username"=> $session,
					"email"=>$session
				]				
			]);
			return $user;
		}
		public function checkExistance($username,$email){
			global $database;

			$users = $database->count("users",[
				"OR"=>[
					"username"=> $username,
					"email"=>$email
				]
				
			]);
			return $users;
		}

		public function register($name,$last_name,$username,$email,$pass){
			global $database;

			//evitar redundacia de datos 
			if ($this->checkExistance($username,$email)==0) {
					$register = $database->insert("users",[
					"name" => htmlentities($name),
					"last_name"=>htmlentities($last_name),
					"username"=>htmlentities($username),
					"email"=>htmlentities($email),
					"password"=> password_hash($pass, PASSWORD_BCRYPT),
					"created_at"=>time()
				]);
					return $database->id();				
			}else{
				return false;
			}					
		}

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

		public function getPostInfo($id_post){

			global $database;

			$posts = $database->select("post",[
				//unir tabla post con categoria 
				"[>]categoria"=>["id_categoria"=>"id"]
			],[	
				"post.name",
				"post.body",
				"post.img_post",
				"post.created_at",
				"categoria.categoria"
			],[
				"post.id_post" => $id_post				
			]);
			return $posts;
		}		
		public function markAsFavorite($post_id, $user_id){
			global $database;

			$database->insert("favorites",[
				"user_id"=>$user_id,
				"post_id"=>$post_id
			]);
			return $database->id();
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
				"OR"=>[
				"username"=>$email,
				"email"=>$email
				]
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
				"body"=>$description,
				"img_post"=>$name_img,
				"id_categoria"=>htmlentities($category_id),
				"admin_id"=>$admin_id,
				"created_at"=>time()
			]);
			return $database->id();
		}

		public function savePOM($pom_name,$file,$type,$size){
			global $database;
			$database->insert("tbl_uploads",[
				"name"=>$pom_name
			]);

			return $database->id();

		}
	}
 ?>