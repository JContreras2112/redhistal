<?php
include("../dbredhistal/conexion.php");

$email = $_POST["email"];
$password = $_POST["password"];

$consulta = mysql_query("select * from usuario where correo ='".$email."' AND pass='".$password."'",$conexion);
$array_consulta = mysql_fetch_array($consulta);

if($array_consulta==false){

echo "Usuario no encontrado en la base de datos";
}
else{

echo "Bienvenido ";
}



?>