<?Php 
///Conectamos a la DB
 
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());

$idarea = $_GET['id']; 
$idcoordinadorarea = $_GET['var2'];
$result=pg_query($dbconn,"UPDATE coordinadorarea SET idarea='".$idarea."' WHERE idcoordinadorarea = '".$idcoordinadorarea."'") or die('Error: ' . pg_last_error());
if($result){
	header("Location:/CoordinadorIngresado.php");
}
else{
	header("Location:/CoordinadorMalo.php");
}
pg_close($dbconn);
?>