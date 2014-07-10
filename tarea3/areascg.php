<!DOCTYPE html> 
<html> 
<head>
 <h1 ALIGN=center><form method = 'post' action= 'AgregarArea.php'><input type='submit' value='Agregar Area'></form></br></h1>
    <title>Areas</title> 
</head> 
  
<body> 
    <?php
// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());

//selecciono campos para mostrarlos(todos)
$result=pg_query("SELECT * FROM area");

echo "<h1 ALIGN=center><FONT COLOR=black face=Futurama Bold Font>Areas</font></h1>";
echo "<table border=1 align=center bgcolor=white>\n";
echo "<tr><td>Nombre</td><td>N° Colaboradores</td><td>Editar</td><td>Eliminar</td></tr>\n"; //cabecera de la tabla
$contador = 0;
while($row=pg_fetch_row($result, $contador, PGSQL_NUM)){
	echo "<tr>
			<td>".$row[1]."</td>
			<td>".$row[2]."</td>
			<td><a href='/EditarArea.php/?id=",$row[0],"'><input type='submit' value='editar'></a></td>
			<td><a href='/ConfirmarEliminacionArea.php/?id=",$row[0],"'><input type='submit' value='eliminar'></a></td>
		  </tr> \n"; //muestro cada campo de la BD en su respectiva cabecera de la tabla.
$contador=$contador+1;
}

echo "</table>\n";
echo $row[0];
// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);
?>
<a href = "menucoordiandorg.php"><input type="submit" value="Volver"></a> 
</body> 
  
</html>
