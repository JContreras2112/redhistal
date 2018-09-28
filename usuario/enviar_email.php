
<?php 
//manda a traer lo que se a registrado en cada caja de texto input
$mail = "Nombre:$_POST[Nombre]
Apellido_Paterno:$_POST[Apellido_Paterno]
Apellido_Materno:$_POST[Apellido_Materno]
Email:$_POST[Email]";
//Titulo
$titulo = "Registrar usuario";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From:".$_POST['Email']."\r\n";
//Enviamos el mensaje al correo del administrador 
	

    if($_POST['Nombre'] == '' or $_POST['Apellido_Paterno'] == '' or $_POST['Apellido_Materno'] == '
	' or $_POST['Email'] == '')//Este codigo es para verificar si se registran datos en todos los campos, sino de lo contrario mandara error

    {
      echo'<script language="Javascript" type="text/javascript">
    alert("No puede dejar ningun campo vacio.");
</script>';
       echo'<a href="../usuario/registrar_usuario.php">Vuelva a insertar los datos correspondientes.</a>';//Si los campos están vacíos muestra el siguiente mensaje, caso contrario sigue el siguiente codigo.

    }
	else
			
		{


$bool = mail("juanita.contreras.pelaez@gmail.com",$titulo,$mail,$headers);
if($bool){
echo'<script language="Javascript" type="text/javascript">
    alert("Correo enviado con éxito.");</script><br/>';
echo'<a href="../index.php">Inicio</a>';
    
}else{
    
	echo'<script language="Javascript" type="text/javascript">
    alert("El correo no se pudo enviar.");
</script><br/>
	<a href="../usuario/registrar_usuario.php">Vuelva a insertar los datos correspondientes.</a>';
}
}
?>