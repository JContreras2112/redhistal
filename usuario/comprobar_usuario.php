<?php
session_start();
if($_POST['email'] !="" AND $_POST['password'] !="")
{
if($_POST['email'] !="shirs_sun@live.com.mx" AND $_POST['password'] !="camero")
{
$_SESSION['admin']= $_POST['email'];
}
else{
$_SESSION['error'] ="Loguin incorrecto";
}
}
else{
$_SESSION['llene'] = "No puede dejar vacio un campo";
}
header("location: administrador/administrador.php");

?>