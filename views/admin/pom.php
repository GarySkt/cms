<div class="ui form new_posts_container" id="new_pom_container">

	<h1>Planes Operativos de Mercado</h1>	
		
		<form name="formulario-envia" id="formulario-envia" enctype="multipart/form-data" method="post">
			<table>
				<tr>
					<td>Nombre:</td>
					<td><input type="text" name="txtnom" id="txtnom"></td>
				</tr>
				<tr>
					<td>PDF</td>
					<td><input type="file" name="pdf" id="pdf"></td>
				</tr>
				<tr>
					<td><input type="button" name="btn" id="btn" value="REGISTRAR" onclick="guardar_pom();"></td>
				</tr>
			</table>		
		</form>

	    <br /><br />
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
	    					<a href="/cms/res/php/admin_actions/uploads/<?php echo $pom['file'] ?>" target="_blank"><i class="eye icon" style="cursor: pointer;" title="Visualizar"></i></a>
	    					<i class="trash icon btnRemovePom"  style="color: #ff2a00; cursor: pointer;" title="Eliminar POM" dataPomID="<?php echo $pom['id'];?>"></i>
	    				</td>	    				
	    			</tr>
				<?php endforeach; ?>	 
	    	</tbody>	    	
	    </table>	    	    
</div>
