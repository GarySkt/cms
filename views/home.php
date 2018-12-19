<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
<div class="ui grid stackable container" style="margin-top: 25px;">
	<div class="sixteen wide column title">
		<h2>Publicaciones Recientes</h2>
	</div>

<?php foreach($posts as $post):?>

		<a href="post/<?php echo $post["id_post"];?>" class="four wide column zoom">
			<div class="post_container">
				<!--imagen en 1280 x 720 -->
				<img class="img-fluid" src="res/img/img_post/<?php echo $post["img_post"];?>.png" alt="<?php echo $post["name"];?>">
				<h2 class="post_title" ><?php echo $post["name"];?></h2>
				<p class="post_date" ><?php echo date("d-m-Y", $post["created_at"]);?></p>			
			</div>		
		</a>
	<?php endforeach;?>
	

</div>