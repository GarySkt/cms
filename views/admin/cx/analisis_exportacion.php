<div class="ui form new_posts_container">
	<form enctype="multipart/form-data" id="agregar_pom_container" class="ui form agregar_pom_container">
		<h1 class="ui red header">An&aacute;lisis de Exportaci&oacute;n</h1>	
		<p><b>Mes</b></p>
		<div class="ui input">
			<input type="text" class="txtnamepom" name="txtnamepom" placeholder="Mes">
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
					<th>Mes</th>
					<th>Archivo</th>					
					<th>Acci&oacute;nes</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($analisis_x as $analisis_x): ?>
					<tr>
						<td><?php echo $analisis_x['mes'] ?></td>
						<td><?php echo $analisis_x['file_ae'] ?></td>						
						<td>
							<a href="/cms/res/pdf/analisis_x/<?php echo $analisis_x['file'] ?>" target="_blank"><i class="eye icon" style="cursor: pointer;" title="Visualizar"></i></a>
							<i class="trash icon btnRemovePom"  style="color: #ff2a00; cursor: pointer;" title="Eliminar POM" dataPomID="<?php echo $analisis_x['id_ae'];?>"></i>
						</td>	    				
					</tr>
				<?php endforeach; ?>	 
			</tbody>	    	
		</table>
		<!-- end tabla tblpom -->

	</form>

</div>
