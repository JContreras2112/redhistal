<?php 
session_start();
//manda a traer la conexion.php donde se encuentra el codigo de la conexion del servidor y la base de datos
include('dbredhistal/conexion.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"lang="es" xml:lang="es">
<head>
<title>REDHISTAL</title>
<!--  meta -->
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--CSS -->
<link rel="stylesheet" href="styles/style.css" type="text/css"/>
<link rel="stylesheet" href="styles/logueo.css" type="text/css"/>

<!--JS -->

<script src="scripts/jquery.js" type="text/javascript"></script>
<script src="scripts/jflow.js" type="text/javascript"></script>
<script src="scripts/functions.js" type="text/javascript"></script>


</head>

<body>
<!-- Codigo de menu superior-->
    <header id="right">
	
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
                <li><a href="#">Nosotros</a>
				<ul>
                        <li><a href="descripcion.php">Descripción</a>
                        <li><a href="objetivo.php">Objetivos</a></li>
                    </ul>
				</li>
				  <li><a href="documentos.php">Documentos</a></li>
                <li><a href="investigadores.php">Investigadores</a>
                    <ul>
                        <li><a href="relaciones.php">Relaciones</a></li>
                    </ul>
                </li>
                <li><a href="noticias.php">Noticias</a></li>
                <li><a href="enlaces.php">Enlaces</a></li></b>
  
            </ul>
        </nav>
        <div class="clear"></div>
    </div>
</div>

    <div class="container1">
        <div id="mySlides">
            <div id="slide1">
                <img src="images/slider1.jpg" alt="Slide 1 jFlow Plus"/>
               <!-- <span><b class="slideheading">First Featured Slide</b><br/>Featured Text.....<a href="#"
                                                                                                title="Coolness"
                                                                                                class="readmore">Read
                    More!</a></span>-->
            </div>
            <div id="slide2">
                <img src="images/slider2.jpg" alt="Slide 2 jFlow Plus"/>
                
            </div>
            <div id="slide3">
                <img src="images/slider3.jpg" alt="Slide 3 jFlow Plus"/>
               
            </div>
        </div>

        <div id="myController">
            <span class="jFlowControl"></span>
            <span class="jFlowControl"></span>
            <span class="jFlowControl"></span>
        </div>

        <section class="jFlowPrev">
            <div></div>
        </section>
        <section class="jFlowNext">
            <div></div>
        </section>
        <br/>

        <article class="box" id="home_featured21">
            <div class=" block"  width="310px" align="left">

                 <a height="745px" class="twitter-timeline" href="https://twitter.com/Juaniitta_Q" data-widget-id="516609494206279680">Tweets por @Juaniitta_Q</a>
                 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            <div  align="left">
                <table width="340px" height="100px" border="2px" bgcolor="white"  style="margin-left: 490px;" href="investigadores.php">
<tr>
<td style=" border-radius: 20px;">
 <h2 align="center">Noticias</h2> <br>
				  <img width="400px" height="100px" src="images/slider3.jpg" /><br/>
				 <?php
		//codigo para mandar a traer todos los nombbres de los investigadores que estan alacenados en la base de datos.				
$consulta=mysql_query('SELECT*FROM noticias');
while($row=mysql_fetch_array($consulta)){
           echo'<a href="noticias.php?a=<?php echo'.$row['id_not'].'?>">'.$row['titulo'].'<br/> </a>';
			
}
?>
				 
				 
				 </p></a>
</td>
</tr>
</table>			  
</div>
			<!--Codigo para para loguearse-->
            <div  style="margin-top: 20px;" align="right" >
              
			      <!-- Ingresar a la pagina principal-->
                     <form id="registrar" name="form1" method="post" action="usuario/comprobar_usuario.php">
                      <img src="iconos/sesion.jpg" width="400px" height="65px" ></br></br>
                       <b>Email</b><br/>
					   <input type="email" id="email" name="email"  placeholder="midireccion@gmail.com"></br><br>
                       <b>Password</b><br>
					   <input type="password" id="password" name="password"></br><br>
                     <input style="margin-right:65px;" type="submit" name="acceder" value="Acceder"/><br/></br></br></br>
					   <a href="usuario/registrar_usuario.php" target="contenido"><b style="text-align:left;">¿Aún no tienes una cuenta?,
					   ¡REGISTRATE AQUÍ!.</b></a><br/>
					  <img src="iconos/sesionpie.jpg" width="400px" height="47px" >
                       </form>

                <br/>
                <br/>
                  </article>  
		<footer>
			  Siguenos en |<a href="https://www.facebook.com/Juaniitta.Qonttreraz"> <img src="iconos/face.png" width="30px" height="20px"/></a>| <img src="iconos/twitter.png" width="30px" height="20px" />|RedHisTAL@Copyright 2014.
               
</footer>
</div>
</div>
</body>
</html>

