<div class="ui pointing menu navbar" style="margin-bottom: 0px; background-color: #FF0000; margin-bottom: 5px;">
  <a href="index.php" class="item" style="color:#FFFFFF;">
    <i class="home icon"></i>Inicio
  </a>  
  <div class="ui simple dropdown item" style="color:#FFFFFF;">
    <i class="university icon"></i>Institucional
    <div class="menu">      
      <a href="http://localhost/cms/misionvision" class="item">Mision y Vision</a>
      <a href="http://localhost/cms/competencianaturaleza" class="item">Competencia y naturaleza</a>
      <a href="http://localhost/cms/fines" class="item">Fines</a>      
      <div class="ui simple dropdown item">
        Funciones<i class="angle right icon"></i>
        <div class="menu">
          <a href="#" class="item">Organo de direccion</a>
          <a href="#" class="item">Organo de asesoramiento y apoyo</a>
          <a href="#" class="item">Organos de Linea</a>
        </div>        
      </div>
      <a href="#" class="item">Organizacion</a>
      <a href="#" class="item">Transparencia</a>
    </div>
  </div>
  <div class="ui simple dropdown item" style="color:#FFFFFF;">
    <i class="folder icon"></i>Gestion
    <div class="menu">
      <a href="#" class="item">Actividades Oficiales</a>
      <a href="#" class="item">Planeamiento y Organizacion</a>
      <a href="#" class="item">Informacion Presupuestal</a>
    </div>    
  </div>  
  <div class="ui simple dropdown item">    
    <a href="http://localhost/cms/cx" style="color:#FFFFFF;">
    <i class="truck icon"></i>Comercio Exterior</a>    
    <div class="menu">
      <a href="http://localhost/cms/objetivos_funciones" class="item">Objetivos y Funciones</a>      
      <a href="http://localhost/cms/pom" class="item">Planes Operativos de Mercado</a>
      <a href="http://localhost/cms/sectores_exportacion" class="item">Sectores de Exportacion</a>
      <a href="#" class="item">Analisis de Exportaciones</a>
      <a href="#" class="item">PERX</a>
    </div>
  </div> 
  <div class="ui simple dropdown item" style="color:#FFFFFF;">
    <i class="building icon"></i>Turismo
    <div class="menu">
      <a href="#" class="item">Objetivos</a>
      <a href="#" class="item">Funciones</a>
      <a href="#" class="item">Directorio de Empresas turisticas</a>
      <a href="#" class="item">Recursos turisticos</a>   
    </div>
  </div>
  <div class="ui simple dropdown item" style="color:#FFFFFF;">
    <i class="paint brush icon"></i>Artesania
    <div class="menu">
      <a href="#" class="item">Objetivos</a>
      <a href="#" class="item">Funciones</a>
      <a href="#" class="item">Base legal</a>
      <a href="#" class="item">Asociaciones Artesanales</a>
      <a href="#" class="item">Lineas Artesanales</a>
      <a href="#" class="item">Formato de solicitud de inscripcion</a> 
    </div>
  </div>
  <div class="ui simple dropdown item" style="color:#FFFFFF;">
    <i class="info icon"></i>Datos Generales
    <div class="menu">
      <a href="#" class="item">Directorio institucional</a>
      <a href="#" class="item">Formato de solicitud de acceso a la informacion publica</a>         
    </div>
  </div>  
  <a href="#" class="item" style="color:#FFFFFF;">
    <i class="users icon"></i>Contactenos
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

