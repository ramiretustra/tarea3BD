<!DOCTYPE html> 
<html> 
<head>
 <h1 ALIGN=center><form method = 'post' action= 'AgregarCoordinadorArea.php'><input type='submit' value='Agregar Coordinador de Area'></form></br></h1>
    <title>BIENVENIDO JIM 2014</title> 
</head> 
  
<body> 
    <?php
// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());

//selecciono campos para mostrarlos(todos)
$result1=pg_query("SELECT * FROM coordinadorarea"); //ejecuta la consulta, guardando todos los coordinadores de area
$row=pg_fetch_row($result1,0, PGSQL_NUM); //guarda en row[] todos los datos del coordinador de area que esta primero
$result=pg_query("SELECT * FROM persona WHERE idpersona='".$row[1]."'"); //guarda en result la persona que equivale al id (row[1]) del primer coordinador
echo "<h1 ALIGN=center><FONT COLOR=black face=Futurama Bold Font>Areas</font></h1>";
echo "<table border=1 align=center bgcolor=white>\n";
echo "<tr><td>Nombre</td><td>Editar</td><td>Eliminar</td></tr>\n"; //cabecera de la tabla

$contador = 1;
while($row1=pg_fetch_row($result, 0, PGSQL_NUM)){ //recupera en row1[] los datos de la persona que encontro 
	echo "<tr>
			<td>".$row1[1]."</td>
			<td><a href='/EditarCoordiandor.php/?id=",$row1[0],"'><input type='submit' value='editar'></a></td>
			<td><a href='/ConfirmarEliminacionCoordinador.php/?id=",$row1[0],"'><input type='submit' value='eliminar'></a></td>
		  </tr> \n"; //muestro cada campo de la BD en su respectiva cabecera de la tabla.
	$row=pg_fetch_row($result1,$contador, PGSQL_NUM);//guarda en row[] todos los datos del coordinador de area que esta en la posicion $contador
	$result=pg_query("SELECT * FROM persona WHERE idpersona='".$row[1]."'"); //guarda en result la persona que equivale al id (row[1])
$contador=$contador+1;
}

echo "</table>\n";
// Liberando el conjunto de resultados
pg_free_result($result);
pg_free_result($result1);

// Cerrando la conexión
pg_close($dbconn);
?>
<a href = "menucoordiandorg.php"><input type="submit" value="Volver"></a> 
</body> 
  
</html>