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
<link rel="stylesheet" href="style/documentos.css" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Aclonica:regular" rel="stylesheet" type="text/css" >
 <link rel="stylesheet" href="documentos/uploadify/uploadify.css" type="text/css" />


<!--JS -->

<script src="scripts/jquery.js" type="text/javascript"></script>
<script src="scripts/jflow.js" type="text/javascript"></script>
<script src="scripts/functions.js" type="text/javascript"></script>
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="documentos/js/funciones.js"></script>
 <script type="text/javascript" src="documentos/uploadify/jquery.uploadify.js"></script> <!--documentos -->
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
	
<!-- codigo del menu principal -->
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
<!-- Cuerpo del la pagina documentos-->
    <div class="container1">
          <article action="docum.php" class="box" id="home_featured21">
           <!-- Codigo para buscar un documento por nombre o fecha-->
          <form align="right">
               
          <input type="text"  value=""/>
          <input type="submit"  value="Buscar"/> </form><br/>
          
<!-- Codigo que muestra los documentos almacenados en la base de datos -->   


<?php

	include("dbredhistal/mysql.inc.php");
	
	$db = new MySQL();
	$listar= $db->consulta("SELECT * FROM documentos");

if($db->num_rows($listar)>0){
	echo"<table style='background:#DDDDDD;border-collapse: collapse;border-radius:5px;align:right;'>";
	echo"<caption style ='background: skyblue;color: #6600CC;border-radius:5px;text-align: center;  width:500px;  font-family: Arial;font-size: 20px;'>
	LISTA DE DOCUMENTOS</caption>";
		echo"<tr>";
			echo "<th style='black'>Descripcion</th>";
			echo "<th style='black' width=\"70\" align=\"center\">Vista</th>";
		echo"</tr>";
			while($row=($db->fetch_array($listar))){
				echo"<tr>";
					
				echo"<td>".$row['descripcion']."</td>";
					switch ($row['tipo']) {
						case 'pdf':
								echo"<td><a target='_Blank' href='documentos/uploads/".$row['nombre']."'><img src='documentos/images/pdf.png' width='40' height='40'></a></td>";
							break;
						case 'docx':
								echo"<td><a target='_Blank' href='documentos/uploads/".$row['nombre']."'><img src='documentos/images/doc.png' width='40' height='40'></a></td>";
							break;
						case 'xlsx':
								echo"<td><a target='_Blank' href='documentos/uploads/".$row['nombre']."'><img src='documentos/images/xls.png' width='40' height='40'></a></td>";
							break;
						case 'html':
								echo"<td><a target='_Blank' href='documentos/uploads/".$row['nombre']."'><img src='documentos/images/html.png' width='40' height='40'></a></td>";
							break;
						case 'txt':
								echo"<td><a target='_Blank' href='documentos/uploads/".$row['nombre']."'><img src='documentos/images/txt.png' width='40' height='40'></a></td>";
							break;
						case 'zip':
								echo"<td><a target='_Blank' href='documentos/uploads/".$row['nombre']."'><img src='documentos/images/zip.png' width='40' height='40'></a></td>";
							break;
								
						default:
								echo"<td><a target='_Blank' href='documentos/uploads/'".$row['nombre']."'><img src='documentos/uploads/".$row['nombre']."' width='40' height='40'></a></td>";
							break;
					}
				echo"</tr>";
			}
	echo"</table>";
}else{
	echo"<div id='mensajevacio' align=\"center\">No hay archivos por el momento</div>";
}
mysql_close($conexion);
?> 
<a href="documentos/index.php">Index</a>
	  
	
            </article>  
          <footer>
			  Siguenos en |<a href="https://www.facebook.com/Juaniitta.Qonttreraz"> <img src="iconos/face.png" width="30px" height="20px"/></a>| <img src="iconos/twitter.png" width="30px" height="20px" />|RedHisTAL@Copyright 2014.
               
</footer> 
</div>	
 <!-- Menu inferior de la pagina-->
		

</body>
</html>