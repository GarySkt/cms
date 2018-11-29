<div class="ui raised very padded text container segment">
	<div class="title">
		<h1>Planes Operativos de Mercado</h1>		
	</div>	
	<br>
	<div class="ui three stackable cards">
		<?php foreach($pom as $pom): ?>
		<div class="card" style="align-items: center; padding: 10px;">
			<a class="" style="color: #FF0000" href="res/php/admin_actions/uploads/<?php echo $pom['file'] ?>" target="_blank"><?php echo $pom['name'] ?></a>
		</div>
	<?php endforeach; ?>
	</div>
</div>