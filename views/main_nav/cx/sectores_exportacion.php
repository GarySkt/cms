<div class="ui padded container segment">
	<!--ui raised very padded text container segment -->
	<h1 class="title">Sectores de Exportacion</h1>
	<div class="ui three stackable cards">
		<?php foreach($se as $se): ?>		
			<div class="card" style="margin: 10px">				
				<div class="image">					
					<img class="ui medium image" src="../cms/res/img/img_se/<?php echo $se["img_se"];?>.png" alt="<?php echo $se["sector"];?>">				
				</div>
				<div class="content">
					<h2 class="header"><?php echo $se['sector'] ?></h2>
					<div class="description">
						<p><b>Productos Exportados:</b></p>
						<p><?php echo $se['producto_exportado'] ?></p>
						<p><b>Mercados de Exportacion:</b></p>
						<p><?php echo $se['mercado_exportacion'] ?></p>
						<p><b>Total FOB USD: $</b><?php echo $se['total_fob']?></p>							
					</div>						
				</div>								
			</div>
		<?php endforeach; ?>
	</div>	
</div>
