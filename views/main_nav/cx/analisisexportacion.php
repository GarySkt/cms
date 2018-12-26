
<div class="ui padded container segment " style="text-align: center;">
	<h1 class="title">Analisis de Exportacion</h1>
	<hr>
	<h2><?php echo date ("Y"); ?></h2>
	<ul class="ui list" style="font-size: 140%;">	
	<?php foreach($analisis_x as $analisis_x): ?>	
		<li><a href="res/pdf/<?php echo $analisis_x['file_ae']?>" download="enero"><?php echo $analisis_x['mes'] ?></a></li>

	<?php endforeach; ?>		
	</ul>


</div>
