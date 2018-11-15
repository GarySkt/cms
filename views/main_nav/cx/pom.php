<div class="ui raised very padded text container segment">
	<h1>Planes Operativos de Mercado</h1>

	<?php
		//$sql="SELECT * FROM tbl_uploads";
		$con=mysqli_connect("localhost","root","","db_dircetur");
		$result_set=mysqli_query($con,"SELECT name FROM tbl_uploads");
		while($row=mysqli_fetch_array($result_set))
		{
	?>
		<div class="ui primary basic button">
			<a class="" href="#"><?php echo $row['name'] ?></a>
		</div>		
	<?php
		}
	?>	 
</div>