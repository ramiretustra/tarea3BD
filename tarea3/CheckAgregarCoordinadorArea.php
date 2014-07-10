<?Php 
///Conectamos a la DB
 
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());

$nombre = $_POST['nombrearea']; 
$Nombre = $_POST['nombre'];
$RolUSM = $_POST['rolusm'];
$RUT = $_POST['rut'];
$Fono = $_POST['fono'];
$Talla = $_POST['talla'];
$Email = $_POST['mail'];
$Password = $_POST['pass'];
$Carrera = $_POST['carrera'];
$Campus = $_POST['campus'];
$result=pg_query($dbconn,"INSERT INTO persona (nombre,rolusm,rut,fono,talla,email,pass,campus,carrera) VALUES ('".$Nombre."','".$RolUSM."','".$RUT."','".$Fono."','".$Talla."','".$Email."','".$Password."','".$Carrera."','".$Campus."')") or die('Error: ' . pg_last_error());
$result1=pg_query("SELECT * FROM persona WHERE rolusm='".$RolUSM."' and rut='".$RUT."'") or die('Error: ' . pg_last_error());
$row=pg_fetch_row($result1,0, PGSQL_NUM);
$result2=pg_query("INSERT INTO coordinadorarea(idpersona) VALUES ('".$row[0]."')") or die('Error: ' . pg_last_error());
$result3=pg_query("SELECT idcoordinadorarea FROM coordinadorarea WHERE idpersona='".$row[0]."'") or die('Error: ' . pg_last_error());
$row3=pg_fetch_row($result3,0, PGSQL_NUM);
if($result && $result2 && $result3){
	header("Location:/ElegirArea.php?var=".$row3[0]);
}
else{
	header("Location:/CoordinadorMalo.php");
}
pg_close($dbconn);
?>