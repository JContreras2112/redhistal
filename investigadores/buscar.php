<html> 
<body> 
<form method="POST" action="http://mysevidor/php/buscador.php3"> 
<strong>Ingresa el nombre completo del investigador:</strong><br/> <input type="text" name="T1" size="20"><br><br> 
<input type="submit" value="Buscar" name="buscar"> 
</form> 
</body> 
</html>

<?php 
session_start();
include('../dbredhistal/conexion.php');
if (!isset($buscar)){ 
      echo "Debe especificar una cadena a bucar"; 
      echo "</html></body> \n"; 
      exit; 
} 

$result = mysql_query("SELECT * FROM investigador WHERE nombre,ape_pat,ape_mat LIKE '%$buscar%' ORDER BY nombre"); 
if ($row = mysql_fetch_array($result)){ 
      echo "<table border = '1'> \n"; 
//Mostramos los nombres de las tablas 
echo "<tr> \n"; 
while ($field = mysql_fetch_field($result)){ 
            echo "<td>$field->name</td> \n"; 
} 
      echo "</tr> \n"; 
do { 
            echo "<tr> \n"; 
            echo "<td>".$row["id_inv"]."</td> \n"; 
            echo "<td>".$row["nombre"]."</td> \n"; 
            echo "<td>".$row["ape_pat"]."</td> \n"; 
            echo "<td>".$row["ape_mat"]."</td> \n"; 
            echo "</tr> \n"; 
      } while ($row = mysql_fetch_array($result)); 
            echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?> 