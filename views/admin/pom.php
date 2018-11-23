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
	    			<th>Acci&oacute;n</th>
	    		</tr>
	    	</thead>
	    	<tbody>
	    		<?php
					//$sql="SELECT * FROM tbl_uploads";
				    $con=mysqli_connect("localhost","root","","db_dircetur");
					$result_set=mysqli_query($con,"SELECT * FROM tbl_uploads");
					while($row=mysqli_fetch_array($result_set))
					{
				?>
				        <tr>
					        <td><?php echo $row['name'] ?></td>
					        <td><?php echo $row['file'] ?></td>
					        <td><?php echo $row['type'] ?></td>
					        <td><?php echo $row['size'] ?> KB</td>
					        <td><a href="../cms/res/php/admin_actions/uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
					        <td>
		    				<i class="trash icon"  style="color: #ff2a00; cursor: pointer;" title="Eliminar POM"></i>
		    				<i class="eye icon" style="color: #4D69F6; cursor: pointer;" title="Visualizar"></i>
		    			</td>
				        </tr>
				<?php
					}
				?>	 
	    	</tbody>	    	
	    </table>
	    <script src="../res/js/funcion_subir_pom.js"></script>
</div>
