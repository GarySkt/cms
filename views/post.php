<div class="post_main_img">
	<img src="../res/img/img_post/<?php echo $post[0]["img_post"];?>.png" alt="<?php echo $post[0]["name"];?>">
</div>
<div class="post_main_body">
	<h1><?php echo $post[0]["name"];?></h1>
	<p>
		<?php echo date("d-m-Y", $post[0]["created_at"]);?>			
	</p>
	<p><?php echo $post[0]["body"];?></p>
</div>