<?php
	
	$Server="localhost";
	$User="LOCALREDHISTAL";
	$DataBase="redhistal";


//codigo para hacer la conexion del servidor local y el usuario
$conexion = mysql_connect($Server,$User)
or   die("Problemas en la conexion del servidor");


//codigo para hacer la conexion de la base de datos MySQL(incluye el nombre de la base de datos 
//seleccionada y la conexion que incluye el servidor y el usuario )
mysql_select_db($DataBase, $conexion) or die("Problemas en la conexion de la base de datos");
mysql_query("SET NAMES 'utf8'");	//consulta para mostrar la letra ñ y los acentos que estan almacenados en la base de datos.	

?>

