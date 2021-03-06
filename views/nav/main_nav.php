<div class="ui pointing menu navbar" style="margin-bottom: 0px; background-color: #FF0000; margin-bottom: 5px;">
  <a href="index.php" class="item" style="color:#FFFFFF;">
    <i class="home icon"></i>Inicio
  </a>  
  <div class="ui simple dropdown item" style="color:#FFFFFF;">
    <a href="/dircetur" style="color:#FFFFFF;">
    <i class="university icon"></i>Institucional</a>      
    <div class="menu">      
      <a href="/misionvision" class="item">Mision y Vision</a>
      <a href="/competencianaturaleza" class="item">Competencia y naturaleza</a>
      <a href="/fines" class="item">Fines</a>      
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
    <a href="/cx" style="color:#FFFFFF;">
    <i class="truck icon"></i>Comercio Exterior</a>    
    <div class="menu">
      <a href="/objetivos_funciones" class="item">Objetivos y Funciones</a>      
      <a href="/pom" class="item">Planes Operativos de Mercado</a>
      <a href="/sectores_exportacion" class="item">Sectores de Exportacion</a>
      <a href="#" class="item">Analisis de Exportaciones</a>
      <a href="#" class="item">PERX</a>
    </div>
  </div> 
  <div class="ui simple dropdown item" style="color:#FFFFFF;">
    <i class="building icon"></i>Turismo
    <div class="menu">
      <a href="/objetivos_dta" class="item">Objetivos</a>
      <a href="/funciones_dta" class="item">Funciones</a>
      <div class="ui simple dropdown item">
        Directorio de Empresas turisticas<i class="angle right icon"></i> 
        <div class="menu">
          <a class="item" href="">Agencia de Viajes y Turismo</a>
          <a class="item" href="">Restaurantes</a>
          <a class="item" href="">Establecimientos</a>
        </div>
      </div>     

      <a href="#" class="item">Recursos turisticos</a>   
    </div>
  </div>
  <div class="ui simple dropdown item" style="color:#FFFFFF;">
    <i class="paint brush icon"></i>Artesania
    <div class="menu">
      <a href="/objetivos_funciones_art" class="item">Objetivos y Funciones</a>      
      <div class="ui simple dropdown item">
        Base Legal<i class="angle right icon"></i> 
        <div class="menu">
          <a href="../cms/res/pdf/LEY-ARTESANO.pdf" target="_blank" class="item">Ley del Artesano</a>
          <a href="../cms/res/pdf/Reconocimiento-Linea-Artesanales.pdf" target="_blank" class="item">Reconocimiento Lineas Artesanales</a>
          <a href="../cms/res/pdf/Ordenanza_Actividades.pdf" target="_blank" class="item">Ordenanza Actividades Artesanales en la Regi&oacute;n</a>
        </div>  
      </div>      
      <a href="https://www.mincetur.gob.pe/turismo/lineas-de-intervencion/desarrollo-de-la-artesania/reconocimientos-y-concursos/" class="item" target="_blank">Reconocimientos, Concursos y Eventos</a>
      <a href="https://artesanosdetacna.wordpress.com/" target="_blank" class="item">Artesanos de Tacna</a>
      <a href="/asociaciones_artesanales" class="item">Asociaciones Artesanales</a>
      <a href="#" class="item">Lineas Artesanales</a>
      <a href="/rna" class="item">Registro Nacional del Artesano</a> 
    </div>
  </div>
  <div class="ui simple dropdown item" style="color:#FFFFFF;">
    <i class="info icon"></i>Datos Generales
    <div class="menu">
      <a href="/directorio" class="item">Directorio institucional</a>

      <a href="../cms/res/pdf/solicitudaccesoip.pdf" target="_blank" class="item">Formato de solicitud de acceso a la informacion publica</a>         
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
      <a href="/log-in" class="item">
        Iniciar Sesion
      </a>
      <a href="/register" class="item">
        Registrarme
      </a>
    </div>
    <?php else: ?>
      <div  class="right menu">
      <a href="/log-out" class="item">
        Cerrar Sesi&oacute;n
      </a>      
    </div>
<?php endif;?>
</div>

