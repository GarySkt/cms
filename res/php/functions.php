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
		
		/*CX*/
		/*cx pom*/
		public function getPom(){
			global $database;

			$pom = $database->select("tbl_uploads",[
				"id",
				"name",
				"file",
				"type",
				"size"
			]);
			return $pom;
		}

		/*cx pom end*/
		/*Sectores de Exportacion*/
		public function getSectorExportacion(){
			global $database;

			$se = $database->select("sector_exportacion",[
				"id_se",
				"sector",
				"producto_exportado",
				"mercado_exportacion",
				"total_fob"
			]);
			return $se;
		}
		/* end Sectores de Exportacion*/
		/*end CX*/
		/*ARTESANIA*/
		
		public function getasoc_art(){
			global $database;

			$asoc_art = $database->select("asociacion_artesanal",[
				"id_aa",
				"nombre_aa",
				"presidente",
				"telefono",
				"direccion",
				"email"
			]);
			return $asoc_art;			
		}
		/*END ARTESANIA*/

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
/*-----ACCIONES ADMINISTRADOR-----*/
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

		/*categorias*/
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
			//tabladonde se insertara -- informacion a guardar
			$delete=$database->delete("categoria",[
				"id"=>htmlentities($category_id)
			]);
			return $delete->rowCount();
		}

		/*end categorias*/	

		/*post*/
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

		/*end post*/
		/*cx*/		
		/*pom*/
		/*save*/
		public function savepom($txtnamepom,$name_img){
			global $database;
			$database->insert("tbl_uploads",[
				//htmlentities previene la inyectar codigo
				"name"=>htmlentities($txtnamepom),
				"file"=>$name_img
			]);
			return $database->id();
		}
		/*delete*/
		public function deletepom($pom_id){
			global $database;
			
			$delete=$database->delete("tbl_uploads",[
				"id"=>htmlentities($pom_id)
			]);
			return $delete->rowCount();
		}
		/*end pom*/
		/*Sector de Exportacion*/
		/*delete*/
		public function deleteSE($id_se){
			global $database;
			
			$delete=$database->delete("sector_exportacion",[
				"id_se"=>htmlentities($id_se)
			]);
			return $delete->rowCount();
		}
		/*end delete*/
		/*save*/
		public function saveSE($txtNameSector,$txtProductoExportado,$txtMercadoExportacion,$txtTotalFOB,$name_img){
			global $database;
			//tabladonde se insertara -- informacion a gardar
			$database->insert("sector_exportacion",[
				"img_se"=>$name_img,
				"sector"=>htmlentities($txtNameSector),
				"producto_exportado"=>htmlentities($txtProductoExportado),				
				"mercado_exportacion"=>htmlentities($txtMercadoExportacion),
				"total_fob"=>htmlentities($txtTotalFOB)				
			]);
			return $database->id();
		}


		/*end Sector de Exportacion*/
		/*cx*/	

		/*Artesania*/
		/*Asociaciones Artesanales*/
		public function saveAsocArt($txtAsociacion,$txtPresidente,$txtTelefono,$txtDireccion,$txtEmail){
			global $database;
			//tabladonde se insertara -- informacion a gardar
			$database->insert("asociacion_artesanal",[
				"nombre_aa"=>htmlentities($txtAsociacion),
				"presidente"=>htmlentities($txtPresidente),
				"telefono"=>htmlentities($txtTelefono),				
				"direccion"=>htmlentities($txtDireccion),
				"email"=>htmlentities($txtEmail)				
			]);
			return $database->id_aa();
		}
		/*End Asociaciones Artesanales*/
		/*End Artesania*/
	}
 ?>