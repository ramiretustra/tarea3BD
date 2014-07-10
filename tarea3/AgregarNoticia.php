<!DOCTYPE html> 
<?php $id_1 = $_GET["var"]; ?>
<html> 
  
<head> 
    <meta charset="utf-8"> 
    <TITLE>BIENVENIDO JIM 2014</TITLE> 
</head> 
  
<body> 
    <div id="Titulo"> 
        <h1>Agregar Noticia</h1> 
    </div> 
    <div id="areas"> 
        <form method ='post' action="CheckAgregarNoticia.php"> 
            <pre> 
                Titulo: <input type="text" name="titulo"> 
                
                 <textarea type='text' name='contenido'cols='60' rows='8'>Redacte su noticia...</textarea>

                 Fecha: <input type="date" name="fecha">

                 <input type="hidden" name="var" value=<?php echo $id_1;?> />
            </pre> 
            <br><input type="submit" value="Ingresar"></br> 
        </form> 
        <a href = "noticiascg.php"><input type="submit" value="Salir"></a> 
    </div> 
</body>   
</html>