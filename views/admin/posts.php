<form enctype="multipar/form-data" id="new_posts_container" class="ui form new_posts_container">
	<h1>Nueva Publicaci&oacute;n</h1>
	<p><b>Nombre de la publicaci&oacute;n</b></p>
	<div class="ui input">
		<input type="text" class="txtNamePost" name="txtNamePost" placeholder="Nombre de la publicaci&oacute;n">
	</div>
	
	<p><b>Categoria</b></p>
	<div class="field">
		<select class="txtCategoryPost" name="txtCategoryPost">
			<option value="0">-- Seleccionar Categoria --</option>
		</select>
	</div>

	<p><b>Seleccione una imagen de portada</b></p>
	<div class="ui input">
		<input type="file" class="image_file" name="image_file">
	</div>

	<p><b>Publicaci&oacute;n</b></p>
	<!--CKEDITOR -->
	<textarea name="txtDescripcion" id="txtDescripcion"></textarea>
	<button class="ui blue basic button">Subir Publicaci&oacute;n</button>
	<p class="clearfix"></p>
</form>