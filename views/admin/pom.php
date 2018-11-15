<div class="ui form new_posts_container" id="new_pom_container">
	<h1>Planes Operativos de Mercado</h1>	
		<p><b>Nombre</b></p>
		<div class="ui input">
			<input type="text" class="txtNamePOM" placeholder="Nombre POM">
		</div>
		<br /><br />
		<form action="../res/php/admin_actions/upload_pom.php" method="post" enctype="multipart/form-data">
			<input type="file" name="file" />			
			<button type="submit" name="btn-upload" class="ui green button btnupload">Subir</button>
			
		</form>
		<?php
			if(isset($_GET['success']))
			{
				?>
		        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
		        <?php
			}
			else if(isset($_GET['fail']))
			{
				?>
		        <label>Problem While File Uploading !</label>
		        <?php
			}
			else
			{
				?>
		        <label>Solo archivos en formato PDF</label>
		        <?php
			}
		?>

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
</div>
