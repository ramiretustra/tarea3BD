<!DOCTYPE html> 
<html> 
  
<head> 
    <meta charset="utf-8"> 
    <TITLE>BIENVENIDO JIM 2014</TITLE> 
</head> 
  
<body> 
    <div id="Titulo"> 
        <h1>Agregar Coordinador de Area</h1> 
    </div> 
    <div id="areas"> 
        <form method ='post' action="CheckAgregarCoordinadorArea.php"> 
            <pre> 
                Nombre: <input type="text" name="nombre">
                Rol USM: <input type="text" name="rolusm"> 
                RUT: <input type="text" name="rut"> 
                Fono: <input type="text" name="fono"> 
                Talla: <input type="text" name="talla"> 
                Email: <input type="text" name="mail"> 
                Password: <input type="text" name="pass"> 
                Carrera: <input type="text" name="carrera"> 
                Campus: <input type="text" name="campus">
            </pre> 
            <br><input type="submit" value="Ingresar"></br> 
        </form> 
        <a href = "coordinadorescg.php"><input type="submit" value="Salir"></a> 
    </div> 
</body>   
</html>