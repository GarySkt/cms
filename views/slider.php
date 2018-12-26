
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div id="elslider" >
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      
      <?php $primer_slider = true;?>
      <?php foreach($slider as $slider):?>

        <?php 
          if ($primer_slider == true) { ?>
            <div class="carousel-item active">
            <?php $primer_slider = false;?>
          <?php } else { ?>
            <div class="carousel-item">
          <?php } ?>
              <img class="d-block w-100" style="height: 650px; width: 450px;" src="/cms/res/img/img_slider/<?php echo $slider['img'] ?>">
            </div>

      <?php endforeach; ?>    
    
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<script>
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 2000
    })    
  })

</script>
</div>