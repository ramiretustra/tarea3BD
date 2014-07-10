<?Php 
///Conectamos a la DB
session_start();
$_SESSION['id_session2']=$_REQUEST['variable1'];
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());
$nombre = $_POST['Nombre']; 
$ncol =(int)$_POST['Ncol']; 
$sql = "UPDATE area
 			set nombre='".$nombre."', colaboradores='".$ncol."' WHERE idarea='".$_SESSION['id_session2']."' ";
$result = pg_query($sql) or die('Error al editar Area: ' . pg_last_error());
if($result){
	header("Location:AreaIngresada.php");
}
else{
	header("Location:AreaMala.php");
}

pg_free_result($result);
pg_close($dbconn); 
?>