<div class="ui pointing menu" style="margin-bottom: 0px;">
  <a class="item active">
    Inicio
  </a>
  <a class="item">
    Publicaciones
  </a>  
  <?php if(isset($_SESSION["user"])):?>
    <a class="item">
      Mis publicaciones      
    </a>
    <?php endif;?>


  <?php if(!isset($_SESSION["user"])):?>
    <div  class="right menu">
      <a href="http://localhost/cms/log-in" class="item">
        Iniciar Sesion
      </a>
      <a href="http://localhost/cms/register" class="item">
        Registrarme
      </a>
    </div>
    <?php else: ?>
      <div  class="right menu">
      <a href="http://localhost/cms/log-out" class="item">
        Cerrar Sesi&oacute;n
      </a>      
    </div>
<?php endif;?>
</div>
