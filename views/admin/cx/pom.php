<div class="ui form new_posts_container">
	<form enctype="multipart/form-data" id="agregar_pom_container" class="ui form agregar_pom_container">
		<h1 class="ui red header">Planes Operativos de Mercado</h1>	
		<p><b>Pa&iacute;s</b></p>
		<div class="ui input">
			<input type="text" class="txtnamepom" name="txtnamepom" placeholder="Pais">
		</div>				
		<p><b>Seleccione Archivo</b></p>
		<div class="ui input">
			<input type="file" class="pom_file" name="pom_file">
		</div>
		<button class="ui blue basic button btnSavePom">Subir</button>
		<p class="clearfix"></p>
		<br>
		
		<!-- tabla tblpom -->
		<table class="ui single line table tblpom">
			<thead>
				<tr>
					<th>Nombre POM</th>
					<th>Archivo</th>
					<th>Tipo</th>
					<th>Tama&ntilde;o</th>
					<th>Acci&oacute;nes</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($pom as $pom): ?>
					<tr>
						<td><?php echo $pom['name'] ?></td>
						<td><?php echo $pom['file'] ?></td>
						<td><?php echo $pom['type'] ?></td>
						<td><?php echo $pom['size'] ?> KB</td>
						<td>
							<a href="/cms/res/pdf/pom/<?php echo $pom['file'] ?>" target="_blank"><i class="eye icon" style="cursor: pointer;" title="Visualizar"></i></a>
							<i class="trash icon btnRemovePom"  style="color: #ff2a00; cursor: pointer;" title="Eliminar POM" dataPomID="<?php echo $pom['id'];?>"></i>
						</td>	    				
					</tr>
				<?php endforeach; ?>	 
			</tbody>	    	
		</table>
		<!-- end tabla tblpom -->

	</form>

</div>
