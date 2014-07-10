<?Php 
///Conectamos a la DB
 
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());

$nombre = $_POST['nombrearea']; 
$ncol = $_POST['ncolaboradores'];
$result=pg_query($dbconn,"INSERT INTO area (nombre,colaboradores) VALUES ('".$nombre."','".$ncol."')") or die('Error: ' . pg_last_error());
if($result){
	header("Location:/AreaIngresada.php");
}
else{
	header("Location:/AreaMala.php");
}
pg_close($dbconn);
?>