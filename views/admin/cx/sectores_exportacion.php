<form enctype="multipar/form-data" id="new_posts_container" class="ui form new_posts_container">
	<div class="title">
		<h1>Sectores de Exportaci&oacute;n</h1>		
	</div>
	<p><b>Seleccione una imagen de portada</b></p>
	<div class="ui input">
		<input type="file" class="image_file" name="image_file">
	</div>
	<p><b>Sector</b></p>
	<div class="ui input">
		<input type="text" class="txtNameSector" name="txtNameSector" placeholder="Nombre del Sector">
	</div>	
	<p><b>Productos Exportados</b></p>
	<div class="ui input">
		<input type="text" class="txtProductoExportado" name="txtProductoExportado" placeholder="Productos">
	</div>	
	<p><b>Mercados de Exportaci&oacute;n</b></p>
	<div class="ui input">
		<input type="text" class="txtMercadoExportacion" name="txtMercadoExportacion" placeholder="Paises">
	</div>
	<p><b>Total FOB USD</b></p>
	<div class="ui input">
		<input type="text" class="txtTotalFOB" name="txtTotalFOB" placeholder="Total">
	</div>			
	<button class="ui blue basic button btnSaveSE">Subir</button>
	<p class="clearfix"></p>

	<!-- tabla tblse -->
		<table class="ui single line table tblSE">
			<thead>
				<tr >
					<th>Sector</th>
					
					<th>Total</th>
					<th>Acci&oacute;nes</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($se as $se): ?>
					<tr>
						<td><?php echo $se['sector'] ?></td>
						
						<td><?php echo $se['total_fob'] ?></td>
						<td>							
							<i class="trash icon btnRemoveSE"  style="color: #ff2a00; cursor: pointer;" title="Eliminar Sector" dataSEID="<?php echo $se['id_se'];?>"></i>
						</td>	    				
					</tr>
				<?php endforeach; ?>	 
			</tbody>	    	
		</table>
		<!-- end tabla tblpom -->
</form>