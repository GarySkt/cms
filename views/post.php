
<div class="post_main_body">
	<div class="post_main_img">
		<img src="../res/img/img_post/<?php echo $post[0]["img_post"];?>.png" alt="<?php echo $post[0]["name"];?>">
	</div>
	<h1>
		<?php echo $post[0]["name"];?>
		<?php if(isset($_SESSION["user"])):?>
			<span class="btnMarkFavorite" data-postId="<?php echo $_GET["id_post"];?>" title="Marca como Favorito"><i class="fa fa-heart"></i></span>
		<?php endif;?>			
	</h1>
	<p>
		<?php echo date("d-m-Y", $post[0]["created_at"]);?>			
	</p>
	<p><?php echo $post[0]["body"];?></p>
</div>