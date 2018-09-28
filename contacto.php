<?php 
//manda a traer la conexion.php donde se encuentra el codigo de la conexion del servidor y la base de datos
include('dbredhistal/conexion.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"lang="es" xml:lang="es">
<head>
<title>REDHISTAL</title>
<!--  meta -->
<meta charset="utf-8"/>
<!--CSS -->
<link rel="stylesheet" href="styles/style.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="styles/iniciar_sesion.css">

<!--JS -->

<script src="scripts/jquery.js" type="text/javascript"></script>
<script src="scripts/jflow.js" type="text/javascript"></script>
<script src="scripts/functions.js" type="text/javascript"></script>
</head>

<body>
<!-- Codigo de menu superior-->
    <header>
	
        <a href="index.php">Inicio</a>|<a href="mapa_del_sitio.php">Mapa del sitio</a>|<a href="contacto.php">Contacto</a>|<a href="#"><?php
echo "Fecha actual: ";
$fecha=date("j/n/y");
echo $fecha;
?></a><br/><br/>
   
	</header>
  
<div class="main-container">
    <div id="sub-headline">
       <div class="tagline_left" style=" align:left; width:700px; height:100px;> <a href=""><img src="iconos/redhistal2.png"onmouseover="this.src='iconos/redhistal1.png';" onmouseout="this.src='iconos/redhistal2.png';"/></a></div>
        <div class="tagline_right">
           <!-- Buscador de Google --> 

             <center> 
                   <form method=GET action="http://www.google.com/search"> 
            <table ><tr><td> 
                <A HREF=" http://www.google.com/"> </A> 
                                 <INPUT TYPE=text name=q size=31 maxlength=255 value=""> 
                                      <INPUT TYPE=hidden name=hl value=es> 
                                       <INPUT type=submit name=btnG id="go" value="Buscar"> 
                                    </td></tr></table> 
                                     </form> 
                                   </center> 

<!-- Fin Buscador de Google -->
                
            </form>
        </div>
        <br class="clear"/>
    </div><br/><br/>
	
<div class="main-container">
    <div id="nav-container">
        <nav>
            <ul class="nav">
               <b> <li><a href="index.php">Inicio</a></li>
                <li ><a  href="#">Nosotros</a>
				<ul>
                        <li ><a href="descripcion.php">Descripción</a>
                        <li ><a href="objetivo.php">Objetivos</a></li>
                    </ul>
				</li>
				  <li><a href="documentos.php">Documentos</a></li>
                <li><a href="investigadores.php">Investigadores</a>
                    <ul>
                        <li><a href="relaciones.php">Relaciones</a></li>
                    </ul>
                </li>
                <li ><a href="noticias.php">Noticias</a></li>
                <li><a href="enlaces.php">Enlaces</a></li></b>
                
            </ul>
        </nav>
        <div class="clear"></div>
    </div>
</div>

    <div class="container1">
          <article class="box" id="home_featured21">
           <h1 align="center">CONTACTO</h1>
		  <HR  width="300px" border="2px"  size="2px" color="black" align="center"> </hr></br><br/>
		  
		  <p> DR. LUIS VILLASEÑOR PINEDA<br/><br/>
		   Telefono: xxxxxxxxxxxxx</br><br/>
		  Correo electrónico: villasen@inaoep.mx<br/><br/><br/><br/><br/>
		  
		  
		 <h2 align="center" > COMITÉ RESPONSABLE</h2>
		  </p>
		  
  
		   
            </article>  
		<footer>
			  Siguenos en |<a href="https://www.facebook.com/Juaniitta.Qonttreraz"> <img src="iconos/face.png" width="30px" height="20px"/></a>| <img src="iconos/twitter.png" width="30px" height="20px" />|RedHisTAL@Copyright 2014.
               
</footer>
</div>

</body>
</html>