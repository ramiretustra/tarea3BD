<!DOCTYPE html> 
<?php
session_start();
?>
<html> 
<head> 
    <title>BIENVENIDO JIM 2014</title> 
</head> 
  
<body> 
    <h1>Editar Area</h1> 
    <?php
// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());
$id_1 = $_GET["id"];
$result=pg_query("SELECT * FROM area where idarea='".$id_1."'");
$row=pg_fetch_row($result, 0, PGSQL_NUM);
?>		<form method ='post' action='/CheckEditArea.php'> 
            <pre> 
                Nombre: <input type='text' name='Nombre'  value="<?= htmlspecialchars($row[1]) ?>" ?>
                Nuemro Colaboradores: <input type='text' name='Ncol' value="<?= htmlspecialchars($row[2]) ?>" ?>
                <input type="hidden" name="variable1" value=<?php echo $id_1 ?> />               
            </pre> 
            <br><input type='submit' value='Ingresar'></br> 
        </form>
<?php
// Cerrando la conexión
pg_close($dbconn);
?> 
</body> 
</html>