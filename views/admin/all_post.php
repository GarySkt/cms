<div class="ui padded container segment">
	<div class="ui grid">
		<div>
		<h1 class="ui red header">Todas las publicaciones</h1>		
		</div>
		<div class="ui large buttons">
		  <button class="ui button btnGridPosts" id="btnGridPosts"><i class="th large icon"></i></button>
		  <div class="or"></div>
		  <button class="ui button btnListPosts" id="btnListPosts"><i class="list icon"></i></button>
		</div>
		<br>		
		<button class="ui red button" id="btnNewPost"><i class="plus circle icon"></i>Nueva Publicaci&oacute;n</button>
	</div>
	<br>
	<div class="ui grid stackable container tblPosts" style="margin-top: 25px;">

		<?php foreach($AllPost as $post):?>

			<a href="" class="four wide column zoom">
				<div class="post_container">
					<!--imagen en 1280 x 720 -->
					<img class="img-fluid" style="width: 250px; height: 200px;" src="/cms/res/img/img_post/<?php echo $post["img_post"];?>.png" alt="<?php echo $post["name"];?>">
					<h2 class="post_title" ><?php echo $post["name"];?></h2>
					<p class="post_date" ><?php echo date("d-m-Y", $post["created_at"]);?></p>			
					<i class="eye icon" style="color: #ff2a00; cursor: pointer; title="Visualizar"></i>
					<i class="edit icon" style="color: #ff2a00; cursor: pointer; title="Editar"></i>
					<i class="fas fa-trash btnRemovePost" dataPostID="<?php echo $post['id_post'];?>" style="color: #ff2a00; cursor: pointer; title="Eliminar Publicacion"></i>
				</div>		
			</a>
		<?php endforeach;?>	

	</div>
	
</div>

