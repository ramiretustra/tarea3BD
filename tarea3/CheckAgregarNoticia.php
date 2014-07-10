<?Php 
///Conectamos a la DB
 
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());

$titular = $_POST['titulo']; 
$cont = $_POST['contenido'];
$fecha = $_POST['fecha'];
$idpersona = $_POST['var'];
$result=pg_query($dbconn,"INSERT INTO noticia (titular,contenido,fecha,idpersona) VALUES ('".$titular."','".$cont."','".$fecha."','".$idpersona."')") or die('Error: ' . pg_last_error());
$result3=pg_query("SELECT idnoticia FROM noticia WHERE titular='".$titular."' and contenido='".$cont."'") or die('Error: ' . pg_last_error());
$row3=pg_fetch_row($result3,0, PGSQL_NUM);
if($result && $result3){
	header("Location:/ElegirArea2.php?var=".$row3[0]);
}
else{
	header("Location:/AreaMala.php");
}
pg_close($dbconn);
?>