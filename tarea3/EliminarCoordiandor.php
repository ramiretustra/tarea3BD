<?Php 
session_start();
///Conectamos a la DB
 
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());

$id_1 = $_GET["id2"];
$result=pg_query($dbconn,"DELETE FROM persona WHERE idpersona='".$id_1."'") or die('Error: ' . pg_last_error());
if($result){
    header("Location:/CoordinadorEliminado.php");
}
else{
    header("Location:/CoordinadorMalEliminada.php");
}
pg_close($dbconn);
?>
