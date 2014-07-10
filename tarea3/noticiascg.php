<!DOCTYPE html> 
<?php $id_1 = $_GET["var"]; ?>
<html> 
<head>
 <h1 ALIGN=center><form method = 'post' action= 'AgregarNoticia.php?var=<?php echo $id_1?>'><input type='submit' value='Agregar Noticia'></form></br></h1>
    <title>Noticias</title> 
</head> 
  
<body> 
    <?php
// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());

//selecciono campos para mostrarlos(todos)
$result=pg_query("SELECT * FROM noticia") or die('Error: ' . pg_last_error());

echo "<h1 ALIGN=center><FONT COLOR=black face=Futurama Bold Font>Noticias</font></h1>";
echo "<table border=1 align=center bgcolor=white>\n";
echo "<tr><td>Titular</td><td>Contenido</td><td>Fecha</td><td>Area</td><td>Editar</td><td>Eliminar</td></tr>\n"; //cabecera de la tabla
$contador = 0;
while($row=pg_fetch_row($result, $contador, PGSQL_NUM)){
	$area=pg_query("SELECT * FROM area WHERE idarea='".$row[5]."'") or die('Error: ' . pg_last_error());
	$nombre=pg_fetch_row($area, 0, PGSQL_NUM);
	echo "<tr>
			<td>".$row[1]."</td>
			<td height=70 width=500>".$row[2]."</td>
			<td>".$row[3]."</td>
			<td>".$nombre[1]."</td>
			<td><a href='/EditarNoticia.php/?id=",$row[0],"'><input type='submit' value='editar'></a></td>
			<td><a href='/ConfirmarEliminacionArea.php/?id=",$row[0],"'><input type='submit' value='eliminar'></a></td>
		  </tr> \n"; //muestro cada campo de la BD en su respectiva cabecera de la tabla.
$contador=$contador+1;
}

echo "</table>\n";
// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);
?>
<a href = "menucoordiandorg.php"><input type="submit" value="Volver"></a> 
</body> 
  
</html>

