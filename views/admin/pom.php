<div class="ui form new_posts_container" id="new_pom_container">
	<h1>Planes Operativos de Mercado</h1>	
		<p><b>Nombre</b></p>
		<div class="ui input">
			<input type="text" class="txtNamePOM" placeholder="Nombre POM">
		</div>
		<br /><br />		
			<input type="file" name="file" />			
			<button class="ui green button btnupload">Subir</button>		
	    <br /><br />
	    <table class="ui single line table tblpom">
	    	<thead>
	    		<tr>
	    			<th>Nombre POM</th>
	    			<th>Archivo</th>
	    			<th>Tipo</th>
	    			<th>Tama&ntilde;o</th>
	    			<th>Acci&oacute;n</th>
	    		</tr>
	    	</thead>
	    	<tbody>
	    		<?php for ($i=1; $i < 10; $i++): ?>
	    			<tr>
	    				<td>POM Per&uacute;</td>
	    				<td>pom_peru.pdf</td>
	    				<td>aplicacion / pdf</td>
	    				<td>349 KB</td>	    				
		    			<td>
		    				<i class="trash icon"  style="color: #ff2a00; cursor: pointer;" title="Eliminar POM"></i>
		    				<i class="eye icon" style="color: #4D69F6; cursor: pointer;" title="Visualizar"></i>
		    			</td>
	    			</tr>
	    		<?php endfor; ?>
	    	</tbody>	    	
	    </table>
</div>
