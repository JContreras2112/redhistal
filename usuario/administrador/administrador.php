<?php 
session_start();
if(isset ($_SESSION['admin']))
{
echo "Bienvenido Administrador:".$SESSION['admin'] ;
}
else{

?>


<?php
if(isset($_SESSION['llene']))
{
echo $_SESSION['llene'];
unset($_SESSION['llene']);
}
elseif(isset( $_SESSION['error']))
{
echo $_SESSION['error'];
unset($_SESSION['error']);

}
}
?>