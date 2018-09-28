
<?php 
//manda a traer la conexion.php donde se encuentra el codigo de la conexion del servidor y la base de datos

session_start();
include('../dbredhistal/conexion.php');
 
//solo si no esta vacio $_POST['imagen'] pasa esto:
$ruta="../imagen_investigador";
$nameimagen=$_FILES['imagen']['name'];
$tmpimagen=$_FILES['imagen']['tmp_name'];
move_uploaded_file($tmpimagen,$ruta."/".$nameimagen);
$ruta=$ruta."/".$nameimagen;
        
           $nombre=$_POST['nombre'];
		   
           $apellidopat=$_POST['apellidopat'];
           $apellidomat=$_POST['apellidomat'];
           $institucion=$_POST['institucion'];
           $pagina=$_POST['pagina'];
            $direccion=$_POST['direccion'];
			
			if(isset($_POST['enviar']))//para saber si el botón registrar fue presionado.

{

    if($_POST['nombre'] == '' or $_POST['apellidopat'] == '' or $_POST['apellidomat'] == '
	' or $_POST['institucion'] == '' or $_POST['pagina'] == '' or $_POST['direccion']=='')

    {

       echo'<script language="Javascript" type="text/javascript">
    alert("No puede dejar ningun campo vacio.");
</script><a href="../investigadores/agregar_investigador.php">Vuelva a insertar los datos correspondientes.</a>';//Si los campos están vacíos muestra el siguiente mensaje, caso contrario sigue el siguiente codigo.

    }

    else
			
		{	
			
        $sql  = "INSERT INTO investigador VALUES ('NULL','$nombre','$apellidopat','$apellidomat','$institucion','$pagina','$ruta','NULL','$direccion')";
        $res  = mysql_query($sql) or die(mysql_error());
 
    if ($res){
   echo'<script language="Javascript" type="text/javascript">
    alert("Inserccion con exito.");
</script>';
header("Location:../investigadores.php");

    }
    
else{

echo'<script language="Javascript" type="text/javascript">
    alert("Error, vuelva a insertar sus datos.");
</script><a href="../investigadores/agregar_investigador.php">Vuelva a insertar los datos correspondientes.</a>';
}
}
}
 

?>









<?php 
//manda a traer la conexion.php donde se encuentra el codigo de la conexion del servidor y la base de datos
/*
session_start();
include('../dbredhistal/conexion.php');
 /*
if(isset($_POST['enviar'])){

    if(isset($_POST['imagen'])&&$_POST['imagen']){
//solo si no esta vacio $_POST['imagen'] pasa esto:
$rutaEnServidor =   'C:/wamp/www/proyecto_redhistal/imagenes';
$rutaTemporal   =   $_FILES['imagen']['tmp_name'];
$nombreImagen   =   $_FILES['imagen']['name'];
$rutaDestino    =   $rutaEnServidor.'/'.$nombreImagen;
 
move_uploaded_file($rutaTemporal,$rutaDestino);
 
 
           $nombre=$_POST['nombre'];
           $apellidopat=$_POST['apellidopat'];
           $apellidomat=$_POST['apellidomat'];
           $institucion=$_POST['institucion'];
           $pagina=$_POST['pagina'];
            $direccion=$_POST['direccion'];
        $sql  = "INSERT INTO investigador VALUES ('NULL','$nombre','$apellidopat','$apellidomat','$institucion','$pagina','$rutaDestino','NULL','$direccion')";
        $res  = mysql_query($sql) or die(mysql_error());
 
    if ($res){
    echo 'inserci&oacute;n con exito';
    }
    }
else{
    echo 'no se puedo insertar';
}
}
*/

 
//solo si no esta vacio $_POST['imagen'] pasa esto:
/*
$ruta="C:/wamp/www/proyecto_redhistal/imagenes";
$nameimagen=$_FILES['imagen']['name'];
$tmpimagen=$_FILES['imagen']['tmp_name'];
move_uploaded_file($tmpimagen,$ruta."/".$nameimagen);
$ruta=$ruta."/".$nameimagen;
        
           $nombre=$_POST['nombre'];
           $apellidopat=$_POST['apellidopat'];
           $apellidomat=$_POST['apellidomat'];
           $institucion=$_POST['institucion'];
           $pagina=$_POST['pagina'];
            $direccion=$_POST['direccion'];
        $sql  = "INSERT INTO investigador VALUES ('NULL','$nombre','$apellidopat','$apellidomat','$institucion','$pagina','$ruta','NULL','$direccion')";
        $res  = mysql_query($sql) or die(mysql_error());
 
    if ($res){
   echo'<script language="Javascript" type="text/javascript">
    alert("Inserccion con exito.");
</script><a href="../investigadores.php">Investigadores</a>';


    }
    
else{

echo'<script language="Javascript" type="text/javascript">
    alert("Error, vuelva a insertar sus datos.");
</script><a href="../agregar_investigador.php">Vuelva a insertar los datos correspondientes.</a>';
}
*/

/*$extimagen=pathinfo($nameimagen);
$ext= array("png","gif","JPG");
$urlnueva="../imagenes/".$nameimagen;

if(is_uploaded_file($tmpimagen))
{
if(array_search($extimagen['extension'],$ext))
{
copy($tmpimagen,$urlnueva);
echo"Se ha guardado correctamente";
}else{

echo"Error, solo imagenes";
}}
else{
echo"Elija una imagen";
}

*/
?>

