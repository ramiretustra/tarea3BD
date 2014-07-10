<?Php 
///Conectamos a la DB
session_start();
$_SESSION['id_session2']=$_REQUEST['variable1'];
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());
$Nombre = $_POST['nombre'];
$RolUSM = $_POST['rolusm'];
$RUT = $_POST['rut'];
$Fono = $_POST['fono'];
$Talla = $_POST['talla'];
$Email = $_POST['mail'];
$Password = $_POST['pass'];
$Carrera = $_POST['carrera'];
$Campus = $_POST['campus'];
$sql = "UPDATE persona
 			set nombre='".$Nombre."', rolusm='".$RolUSM."', rut='".$RUT."', fono='".$Fono."', talla='".$Talla."', email='".$Email."', pass='".$Password."', carrera='".$Carrera."', campus='".$Campus."' WHERE idpersona='".$_SESSION['id_session2']."' ";
$result = pg_query($sql) or die('Error al editar Coordinador: ' . pg_last_error());
if($result){
	header("Location:CoordinadorIngresado.php");
}
else{
	header("Location:CoordinadorMalo.php");
}

pg_free_result($result);
pg_close($dbconn); 
?>