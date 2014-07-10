<!DOCTYPE html> 
<?php
$id_1 = $_GET["var"];
?>
<html> 
<head> 
    <title>BIENVENIDO JIM 2014</title> 
</head> 
	<body> 
	    <h2>Panel de control</h2> 
	    <a href = "misdatoscg.php"><input type="submit" value="Mis Datos" ></a></br>
	    <a href = "areascg.php"><input type="submit" value="Areas" ></a></br>
	    <a href = "coordinadorescg.php"><input type="submit" value="Coordinadores de Area"></a></br>  
	    <a href = "/noticiascg.php?var=<?php echo $id_1?>"><input type='submit' value='Noticias'></a></br>
	    <a href = "postulantescg.php"><input type="submit" value="Postulantes"></a></br>
	    <a href = "colaboradoresseleccionados.php"><input type="submit" value="Colaboradores Seleccionados"></a></br>
	    <a href = "coordinadorgeneral.php"><input type="submit" value="Cerrar Sesion"></a></br>
	</body>   
</html>