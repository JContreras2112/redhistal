<?php 
//manda a traer la conexion.php donde se encuentra el codigo de la conexion del servidor y la base de datos
include('../dbredhistal/conexion.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"lang="es" xml:lang="es">
<head>
<title>REDHISTAL</title>
<!--  meta -->
<meta charset="utf-8"/>
<!--CSS -->
<link rel="stylesheet" href="../styles/style.css" type="text/css"/>
<link rel="stylesheet" href="../styles/iniciar_sesion.css" type="text/css"/>

<!--JS -->

<script src="../scripts/jquery.js" type="text/javascript"></script>
<script src="../scripts/jflow.js" type="text/javascript"></script>
<script src="../scripts/functions.js" type="text/javascript"></script>

<script src=".../js/cufon-yui.js" type="text/javascript"></script>
		<script src=".../js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script><!--La funcion de este escritp es para que cada input al que se le agregre este codigo(onkeypress="return val(event)"El evento onKeyPress se genera cuando se mantiene pulsada una tecla.) solo acepte letras y no numeros-->
function val(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron =/[A-Za-zñ]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
</script>
		
</head>

<body>
<!-- Codigo de menu superior-->
    <header>
	
        <a href="../index.php">Inicio</a>|<a href="../mapa_del_sitio.php">Mapa del sitio</a>|<a href="../contacto.php">Contacto</a>|<a href="#"><?php
echo "Fecha actual: ";
$fecha=date("j/n/y");
echo $fecha;
?></a><br/><br/>
   
	</header>
  
<div class="main-container">
    <div id="sub-headline">
      <!--logotipo de redhistal-->
       <div class="tagline_left" style=" align:left; width:700px; height:100px;> <a href=""><img src="../iconos/redhistal2.png"onmouseover="this.src='../iconos/redhistal1.png';" onmouseout="this.src='../iconos/redhistal2.png';"/></a></div>
       
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
               <b> <li><a href="../index.php">Inicio</a></li>
                <li ><a  href="#">Nosotros</a>
				<ul>
                        <li ><a href="../descripcion.php">Descripción</a>
                        <li ><a href="../objetivo.php">Objetivos</a></li>
                    </ul>
				</li>
				  <li><a href="../documentos.php">Documentos</a></li>
                <li><a href="../investigadores.php">Investigadores</a>
                    <ul>
                        <li><a href="../relaciones.php">Relaciones</a></li>
                    </ul>
                </li>
                <li ><a href="../noticias.php">Noticias</a></li>
                <li><a href="../enlaces.php">Enlaces</a></li></b>
                
            </ul>
        </nav>
        <div class="clear"></div>
    </div>
</div>

   <div class="container1">
          <article class="box" id="home_featured21" align="center">
		  <h3 align="center"> REGISTRAR USUARIO</h3>
		  <form style=" width: 500px;  margin: 0px auto; padding: 60px 30px; background: #EFFBF8; border: 1px solid #e1e1e1;
   -moz-box-shadow: 0px 0px 8px #444; -webkit-box-shadow: 0px 0px 8px #444;   border-radius: 20px;  -moz-border-radius: 20px;
   -webkit-border-radius: 20px; "   action="../usuario/enviar_email.php" method="post" enctype="multipart/form-data" >

<table width="500px" align="center">
<tr>
<td>

<label for="Nombre">Nombre: </label>
</td>
<td>
<input type="text" name="Nombre" onkeypress="return val(event)" maxlength="50" size="25">
</td>
</tr>
<tr>
<td valign="top">
<label for="Apellido_Paterno">Apellido Paterno: </label>
</td>
<td>
<input type="text" name="Apellido_Paterno" onkeypress="return val(event)" maxlength="50" size="25">
</td>
</tr>
<tr>
<td valign="top">
<label for="Apellido_Materno">Apellido Materno: </label>
</td>
<td>
<input type="text" name="Apellido_Materno"  onkeypress="return val(event)"maxlength="50" size="25">
</td>
</tr>
<tr>
<td>
<label for="email">Dirección de E-mail: </label>
</td>
<td>
<input type="text" name="Email" maxlength="80" size="35">
</td>
</tr>
<tr>
<td align="rigth">
<input type="submit" value="Enviar correo"  align="rigth">
</td>
</tr>
</table>
</form>
         </article>  
			
		<footer>
			  Siguenos en |<a href="https://www.facebook.com/Juaniitta.Qonttreraz"> <img src="../iconos/face.png" width="30px" height="20px"/></a>| <img src="../iconos/twitter.png" width="30px" height="20px" />|RedHisTAL@Copyright 2014.
               
</footer>
</div>

</body>
</html>