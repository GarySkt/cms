
<div class="ui raised very padded text container segment">
<h2>Slider</h2>

<div class="container cont-wrap">
	<!-- Slider Panel start -->
		<div class="row">
			<div class="col-md-8">
				<form role="form" id="file-form" class="form-inline" action="" method="POST">
					<div class="form-group">
						<input type="file" id="file-select" name="photos[]" value="Browse" multiple/>
						<input type="hidden" name="upload" value="1"/>
					</div>
					 	<button type="submit" id="upload-button" class="btn btn-success">Upload</button>
				</form>					
			</div>
			<div class="col-md-1 col-md-offset-1">
				<label class="admin-label  control-label">Hide?:</label>
				<input type="checkbox" class="slider-hide" value="1"/>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-4">
				<button id='add_slide' class='btn btn-primary'>Add</button>
				<button id='del_slide' class='btn btn-danger'>Delete</button>			
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
				<button id="save_slider" class="btn btn-success">Save</button>
			</div>
		</div>
	<!-- Slider Panel end -->
</div>


