
<div class="ui raised very padded text container segment">
	<h2 class="ui red header">Slider</h2>
	<div class="ui input">
		<input type="file">	
	</div>
	<div >
		<button class="ui button"> Subir</button>	
	</div>
	<table class="ui single line table tblpom">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Estado</th>					
					<th>Acci&oacute;nes</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($slider as $slider): ?>
					<tr>
						<td><?php echo $slider['img'] ?></td>						
						<td>
							<div class="ui dropdown">
							  <div class="text">Activo</div>
							  <i class="dropdown icon"></i>
							  
							    </div>
							    
							  </div>
							</div>
						</td>
						<td>
							<a href="/cms/res/pdf/pom/<?php echo $slider['file'] ?>" target="_blank"><i class="eye icon" style="cursor: pointer;" title="Visualizar"></i></a>
							<i class="trash icon btnRemovePom"  style="color: #ff2a00; cursor: pointer;" title="Eliminar POM" dataPomID="<?php echo $slider['id'];?>"></i>
						</td>	    				
					</tr>
				<?php endforeach; ?>	 
			</tbody>	    	
		</table>	
</div>


