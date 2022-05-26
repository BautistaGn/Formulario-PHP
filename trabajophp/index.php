<?php
require 'database.php';

if(isset($_POST['registrarse'])){       //registrarse sale del boton submit (linea 85); se almacenaran los datos  
$nombre=$_POST['nombre'];        
$apellido=$_POST['apellido'];
$password=$_POST['contraseña'];
$fecha=$_POST['calendario'];
$sexo=$_POST['sexo'];
$nacionalidad=$_POST['nacionalidad'];
$id= rand(1,99); //declaro una id random desde el 1 hasta el 99, no influye en nada al codigo (puede ser eliminada esta linea)
                //recordar en caso de ser eliminada sacar desde el proceso de insertar y desde la base de datos para evitar error

   /* echo "Su nombre es ". $nombre;
    echo "Su apellido es ". $apellido;                   //esto es para mostrar en pantalla los datos (posibilidad de separar con
    echo "Su contraseña es ". $password;                                                                \n o "<br>")
    echo "Su fecha de nacimiento es ".$fecha;
    echo "Su genero seleccionado es ". $sexo;
    echo "Su genero seleccionado es ". $nacionalidad;
    */

    //InsertarDATOS; tene en cuenta que estos datos tienen que ir en orden segun la base de datos, o la plantilla (revisar)
    //aca estoy diciendo que se inserten estos datos en la base
    //"INSERT INTO -datos- VALUES (variables) -datos es el nombre de la clase hija de formulario (contiene la estructura)

    $insertarDatos = "INSERT INTO datos VALUES('$nombre',   
     '$apellido', 
     '$password', 
     '$nacionalidad', 
     '$sexo', 
     '$fecha', 
     '$id')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos); //estoy diciendo que se ejecuten, 
    
   if (!$ejecutarInsertar){  //en caso de error invierto el if y imprimo el ECHO
       echo "Existe un error en la linea de sql";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <h1>Registro</h1>
       <form action="index.php" method="post">
    <div>
        <input type="text" name="nombre" id="" placeholder="Ingrese nombre de usuario" required>
         <input type="text" name="apellido" placeholder="Ingrese apellido" required>
         <input type="password" name="contraseña" placeholder="Ingrese contraseña" required>
        </div>
        <div>     
        <label>Ingrese nacionalidad</label>
        <select name="nacionalidad" required> 
            <option >Argentina</option>
            <option >Brasil</option>
            <option >Paraguay</option>
        </select>
        </div>
        <div>
        <label>Ingrese sexo:</label>
        <label>Hombre</label>
        <input type="radio" name="sexo" value="hombre">
        <label>Mujer</label>
        <input type="radio" name="sexo" value="mujer">
        <label>Indefinido</label>
        <input type="radio" name="sexo" value="indefinido">
        
        </div>
        <br>
        <input type="date" name="calendario" required> <br>
        <br>
        <input type="submit" value="Enviar" name="registrarse">
        <br>
        <a href="index2.php">En caso de tener una cuenta clickee aquí</a>
       </form>
</body>
</html>

