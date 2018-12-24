
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
	<table class="ui celled padded table tblPosts">
		<thead>
			<th>Nombre</th>
			<th>Categoria</th>
			<th>Autor</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			<?php foreach($AllPost as $post):?>
			<tr>
				<td><?php echo $post["name"];?></td>
				<td><?php echo $post["id_categoria"];?></td>
				<td><?php echo $post["admin_id"];?></td>
				<td>
					<i class="eye icon" style="color: #ff2a00; cursor: pointer; title="Visualizar"></i>
					<i class="edit icon" style="color: #ff2a00; cursor: pointer; title="Editar"></i>
					<i class="fas fa-trash btnRemovePost" dataPostID="<?php echo $post['id_post'];?>" style="color: #ff2a00; cursor: pointer; title="Eliminar Publicacion"></i>
				</td>
			</tr>

		<?php endforeach;?>
			
		</tbody>
		
	</table>
</div>
