<!DOCTYPE html> 
<html> 
<head>
    <title>BIENVENIDO JIM 2014</title> 
</head> 
  
<body> 
<?php
session_start();
$id_1 = $_GET["id"];
echo "
	<h2>Esta seguro que desea eliminar el area seleccionada?</h2> 
	<a href='/EliminarArea.php/?id2=",$id_1,"'><input type='submit' value='Aceptar'></a>
    <a href='/areascg.php'><input type='submit' value='Cancelar'></a>
    ";
?>
</body> 
  
</html>