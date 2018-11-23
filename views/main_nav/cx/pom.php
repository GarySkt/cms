<div class="ui raised very padded text container segment">
	<h1>Planes Operativos de Mercado</h1>

	<?php foreach($pom as $pom): ?>
		<div class="ui secondary button">
			<a class="" href="#"><?php echo $pom['name'] ?></a>
		</div>
	<?php endforeach; ?>	
</div>