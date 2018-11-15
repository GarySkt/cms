<div class="ui raised very padded text container segment">
	<script src="../res/js/jssor-slider/js/jssor.slider.mini.js"></script>
<script src="../res/js/tinymce/tinymce.min.js"></script>
<script src="../res/js/handlebars/handlebars-v1.3.0.js"></script>
<link rel="stylesheet" href="../res/css/slider_style.css">
<div class="container cont-wrap ">
	<!-- <div class="container cont-wrap ui form new_posts_container">-->
	<!-- Slider Panel start -->
		<div class="row">
			<div class="col-md-8">
				<form role="form" id="file-form" class="form-inline" action="" method="POST">
					<div class="form-group ui input">
						<input type="file" id="file-select" name="photos[]" value="Browse" multiple/>
						<input type="hidden" name="upload" value="1"/>
					</div>
					 	<button type="submit" id="upload-button" class="btn btn-success">Cargar Imagen</button>
				</form>					
			</div>
			<div class="col-md-1 col-md-offset-1">
				<label class="admin-label  control-label">Hide?:</label>
				<input type="checkbox" class="slider-hide" value="1"/>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-4">
				<button id='add_slide' class='btn btn-primary'>A&ntilde;adir</button>
				<button id='del_slide' class='btn btn-danger'>Eliminar</button>			
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="slides">	
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<button id="save_slider" class="btn btn-success">Guardar</button>
			</div>
		</div>
	<!-- Slider Panel end -->
	</div>
	<script src="../res/js/slider_admin.js"></script>
	
</div>


