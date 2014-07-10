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
	<h2>Esta seguro que desea eliminar el coordinador seleccionado?</h2> 
	<a href='/EliminarCoordiandor.php/?id2=",$id_1,"'><input type='submit' value='Aceptar'></a>
    <a href='/coordinadorescg.php'><input type='submit' value='Cancelar'></a>
    ";
?>
</body> 
  
</html>