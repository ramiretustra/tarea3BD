<?Php 
///Conectamos a la DB
 
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());

$email = $_POST['email']; 
$password = $_POST['password'];
$result=pg_query($dbconn,"SELECT * FROM persona WHERE email='".$email."' and pass='".$password."'") or die('Error: ' . pg_last_error());
$arr = pg_fetch_array($result, 0, PGSQL_NUM); 
        if($arr[6]==$email && $arr[7]==$password){ 
                header("Location:/menucoordiandorg.php?var=".$arr[0]); 
        } 
 
        else{ 
                header("Location:usuariomalo.php"); 
        } 
pg_close($dbconn);
?>
