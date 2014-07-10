<!DOCTYPE html> 
<?php
session_start();
?>
<html> 
<head> 
    <title>BIENVENIDO JIM 2014</title> 
</head> 
  
<body> 
    <h1>Editar Coordinador</h1> 
    <?php
// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=localhost dbname=tarea3 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());
$id_1 = $_GET["id"];
$result=pg_query("SELECT * FROM persona where idpersona='".$id_1."'");
$row=pg_fetch_row($result, 0, PGSQL_NUM);
?>		<form method ='post' action='/CheckEditCoordinador.php'> 
            <pre> 
                Nombre: <input type="text" name="nombre" value="<?= htmlspecialchars($row[1]) ?>" ?> 
                Rol USM: <input type="text" name="rolusm" value="<?= htmlspecialchars($row[2]) ?>" ?> 
                RUT: <input type="text" name="rut" value="<?= htmlspecialchars($row[3]) ?>" ?> 
                Fono: <input type="text" name="fono" value="<?= htmlspecialchars($row[4]) ?>" ?> 
                Talla: <input type="text" name="talla" value="<?= htmlspecialchars($row[5]) ?>" ?> 
                Email: <input type="text" name="mail" value="<?= htmlspecialchars($row[6]) ?>" ?> 
                Password: <input type="text" name="pass" value="<?= htmlspecialchars($row[7]) ?>" ?> 
                Carrera: <input type="text" name="carrera" value="<?= htmlspecialchars($row[8]) ?>" ?> 
                Campus: <input type="text" name="campus" value="<?= htmlspecialchars($row[9]) ?>" ?>

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