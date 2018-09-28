<?php 
session_start();
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

    <div class="container1"  bgcolor="blue" >
          <article class="box" id="home_featured21" bgcolor="blue">
           <h1 align="center"> INVESTIGADORES </h1><br/><br/>
              <p align="left"  style="margin: -11px auto;size:18px; color:black;"><b>LISTA DE INVESTIGADORES</b></p><br/>               
		   <div style="border:1px solid  Black; background : #EFFBF8; padding : 4px; width : 260px;
            height : 189px; overflow : auto;">
		   
		   <?php
        //codigo para mandar a traer todos los nombres de los investigadores que estan almacenados en la base de datos.	
//consulta		
$consulta = mysql_query("SELECT *FROM investigador order by id_inv desc");
while ($row= mysql_fetch_array($consulta)){

			
			echo "<a href='investigadores.php?id_inv=".$row['id_inv']."'>" . $row['nombre'] . "&nbsp&nbsp" . $row['ape_pat'] . "&nbsp&nbsp" . $row['ape_mat'] . "<br/></a>";
}
 

?></div>
<form style=" width: 400px;  margin: -210px auto; padding: 60px 30px; background: #EFFBF8; border: 1px solid #e1e1e1;
   -moz-box-shadow: 0px 0px 8px #444; -webkit-box-shadow: 0px 0px 8px #444;   border-radius: 20px;  -moz-border-radius: 20px;
   -webkit-border-radius: 20px; " value="id_inv" class="tagline_right" >
            <p align="center"  style="margin: -11px auto;size:18px; color:black;"><b>DATOS DEL INVESTIGADOR</b></p><br/>
		  		  		   <?php
		// Formulario2 :codigo para mandar a traer todos datos de un solo investigador al momento que se le de click en el formulario 1(muestra todos los investigadores que estan almacenados en la base de datos).	
		
		
		$id = ((isset($_GET['id_inv']) && strlen($_GET['id_inv'])>0) ? $_GET['id_inv'] : 0);//La razón de usar strlen ademas de isset es que este ultimo solo comprueba si esta declarada y no le importa el valor que tenga (aunque sea nulo).
		$consulta2=mysql_query("SELECT * FROM investigador where  id_inv='$id'");//codigo para hacer la consulta a la DB
		
		
while($row=mysql_fetch_array($consulta2)){

            echo'<div align="center"><img src="'.$row['ruta_img'].'"  width="100px" height="100px"/></div><br/>';
			echo'<p style="color:black;size:09px;" align="center"><b>NOMBRE COMPLETO</b></p>';
			echo'<p style="color:black;size:12px;" align="center">'.$row['nombre'].'&nbsp&nbsp'.$row['ape_pat'].'&nbsp&nbsp'.$row['ape_mat'].' <br/>';
			echo'<p style="color:black;size:09px;" align="center"><b>INSTITUCIÓN</b></p>';
			echo'<p align="center">'.$row['inst'].'<br/></p>';
			echo'<p style="color:black;size:09px;" align="center"><b>PÁGINA PERSONAL</b><br/>';
			echo''.$row['pag_per'].'<br/></p>';
			echo'<p style="color:black;size:09px;" align="center"><b>DIRECCIÓN</b><br/>';
			echo''.$row['direccion'].'</p>';
}
 mysql_free_result($consulta2);//Libera la memoria del resultado
mysql_close($conexion); //Cierra una conexión de MySQL

?>


</form>
	
		   
            </article>  
			<a href="investigadores/agregar_investigador.php">Agregar investigador</a>
		<footer>
			  Siguenos en |<a href=""> <img src="iconos/face.png" width="30px" height="20px"/></a>| <img src="iconos/twitter.png" width="30px" height="20px" />|RedHisTAL@Copyright 2014.
               
</footer>
</div>

</body>
</html> 