<div id="new_posts_container" class="ui form new_posts_container">
	<h1>Categorias</h1>
	<p><b>Nombre de la categoria</b></p>
	<div class="ui input">
		<input type="text" class="txtNameCategory" placeholder="Nombre de la categoria">
	</div>
	
	<button class="ui blue basic button btnSaveCategory">Agregar</button>
	<p class="clearfix"></p>

	<h3>Categorias Existentes</h3>

	<table class="ui single line table tblCategories">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Acci&oacute;nes</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($categories as $category):?>
			<tr>
				<td><?php echo $category['categoria']?></td>
				<td><i class="fas fa-trash btnRemoveCategory" dataCategoryID="<?php echo $category['id'];?>" style="color: #ff2a00; cursor: pointer; title="Eliminar Categoria"></i></td>
			</tr>

		<?php endforeach;?>
			
		</tbody>
	</table>
</div>