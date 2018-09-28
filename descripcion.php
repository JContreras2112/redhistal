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
           <h1 align="center"><b> DESCRIPCIÓN </b></h1><br/>
		   
		   <p style="size:1em; color:black; text-align:justify;face: Comic Sans MS,arial,verdana;size:4;">
		   Uno de los principales motores de la actual sociedad del conocimiento es la gran cantidad de información disponible. Es gracias a la enorme infraestructura tecnológica existente que la recolección y el acceso a la información es posible para casi cualquier campo del conocimiento. Sin embargo, aún estamos lejos de asimilar esa enorme cantidad de información. Por un lado, el enorme volumen de documentos –tanto en lenguaje escrito como hablado– complica la procuración de cierta pieza de información, y por otro lado, la barrera del lenguaje evita el aprovechamiento de información libremente disponible en otros idiomas. No obstante, es evidente que se han alcanzado importantes logros y poco a poco la computadora es parte cotidiana en el tratamiento automático de las lenguas humanas.
		   
		   <br/>  <br/>
		   
		   El Tratamiento Automático del Lenguaje Humano (TALH) se ocupa de la recolección, manipulación, almacenamiento, recuperación y clasificación de información escrita y hablada en lenguaje natural. Su objetivo principal es permitir que una computadora comprenda y produzca información en una o varias lenguas humanas. Como es de imaginar la tarea es en extremo compleja y el problema es relevante desde diversas disciplinas. Desde la particular perspectiva de la ciencia de la computación el problema se aborda desde diferentes áreas, tales como: extracción de información, minería de texto, traducción automática, búsqueda inteligente, reconocimiento de voz, sistemas de conversión texto a voz, interfaces inteligentes, etc.

            <br/>  <br/>  
           El presente taller pretende reunir a la comunidad especializada en el TALH bajo el contexto específico de la Latinoamérica hispanoparlante (al menos en este primer taller). El objetivo primario es reunir a los principales grupos de investigación en el TALH y definir estrategias pertinentes orientadas, en un primer tiempo, al tratamiento del idioma español, y en un segundo tiempo, a abordar el rico contexto multilingüe propio de la región. Con este tipo de acercamientos se tendría especial interés en formalizar una red latinoamericana de TALH, con la firme intención de buscar soluciones: (i) al tratamiento del español, respetando las particularidades de este idioma presentes en cada uno de países hispanohablantes latinoamericanos, y (ii) para abordar las muchas otras lenguas presentes en la región. Este último punto cobra especial interés dada la situación de las comunidades indígenas de esta región. Hay que recordar que la lengua no sólo es el vehículo por excelencia para la comunicación es también la expresión misma de una cultura. De ahí que brindar los mecanismos para que una lengua se integre a la infraestructura tecnología actual sea de vital importancia para el desarrollo de los diversos pueblos latinoamericanos.
		   
		   </p>

		  
		   
		   
		   
            </article>  
		<footer>
			  Siguenos en |<a href="https://www.facebook.com/Juaniitta.Qonttreraz"> <img src="iconos/face.png" width="30px" height="20px"/></a>| <img src="iconos/twitter.png" width="30px" height="20px" />|RedHisTAL@Copyright 2014.
               
</footer>
</div>

</body>
</html>