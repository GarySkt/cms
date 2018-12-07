<div class="ui container segment">
	<h1 class="title">Asociaciones Artesanales</h1>
	<div class="ui three stackable cards">
		<?php foreach($asoc_art as $asoc_art): ?>
  		<div class="red card" style="width: 330px;">
    		<div class="content">
			    <div class="header"><?php echo $asoc_art['nombre_aa'] ?></div>			    
			    <div class="description">
			    	<div class="ui list">				    			    		
			    		<div class="item"><b>Teléfonos:</b><?php echo $asoc_art['telefono']; ?></div>
			    		<div class="item"><b>E-mail:</b><?php echo $asoc_art['email']; ?></div>
			    		<div class="item"><b>Dirección:</b><?php echo $asoc_art['direccion']; ?></div>
			    		<div class="item"><b>Presidente(a):</b><?php echo $asoc_art['presidente']; ?></div>
			    	</div>
			    </div>
		    </div>
  		</div>
  		<?php endforeach; ?>		
	</div>

</div>
