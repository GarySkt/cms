<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
<div class="ui raised very padded text container segment">
	<h1 style="color: red;">Comercio Exterior</h1>
	<p align="justify">La Dirección de Comercio Exterior, es un Organo de Línea de segundo nivel organizacional, responsable de ejecutar la política de desarrollo de comercio exterior en la Región; así como promover el desarrollo de una cultura exportadora en coordinación con la Gerencia Regional de Desarrollo Económico del Gobierno Regional de Tacna y con el Ministerio de Comercio Exterior y Turismo, su sigla es DCE.</p>
	<br>
	<div class="ui two column centered grid">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/0-IKUz_UMV8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>		
	</div>
	<br>
	<h2 style="color: red;">PRIMEROS PASOS – EXPORTA FACIL :</h2>
	<p align="justify">La exportación consiste en enviar mercancías desde el territorio nacional en forma legal para su uso o consumo en el extranjero. Con las exportaciones colocamos nuestros insumos, productos o bienes en el mercado extranjero a fin que sean utilizados allí para su consumo, industria o en los servicios que presten.</p>	

	<div >
		<h2 style="color: red;">Planes Operativos de Mercado</h2>		
	</div>	
	<br>
	<div class="ui three stackable cards">
		<?php foreach($pom as $pom): ?>
		<div class="card" style="text-align: center; padding: 10px;">
			<a class="" style="color: #FF0000" href="res/php/admin_actions/uploads/<?php echo $pom['file'] ?>" target="_blank"><?php echo $pom['name'] ?></a>
		</div>
	<?php endforeach; ?>
	</div>

</div>


