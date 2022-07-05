<?php
require 'database.php';
if($_POST){
$nombre=$_POST['nombre'];        
$apellido=$_POST['apellido'];
$password=$_POST['contraseña'];
$fecha=$_POST['calendario'];
$sexo=$_POST['sexo'];
$nacionalidad=$_POST['nacionalidad'];
$id= rand(1,99);
}
if(isset($_POST['registrarse'])){       //registrarse sale del boton submit (linea 85); se almacenaran los datos  
 //declaro una id random desde el 1 hasta el 99, no influye en nada al codigo (puede ser eliminada esta linea)
    $hash =password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
    
    $insertarDatos = "INSERT INTO datos VALUES('$nombre',   
     '$apellido', 
     '$hash', 
     '$nacionalidad', 
     '$sexo', 
     '$fecha', 
     '$id')";

    if (mysqli_query($enlace, $insertarDatos)){
        echo "<script>alert ('Usuario registrado con exito: $nombre'); window.location='index2.php'</script>";
    } else{
        echo "Error: ".$sql."<br>".mysql_error($enlace);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="main.js"></script>
</head>
<body>
        <h1>Registro</h1>
       <form action="index.php" method="post">
    <div>
    <div class="ub1">&#128273; Ingresar usuario</div>
        <input type="text" name="nombre" id="" placeholder="Ingrese nombre de usuario" required>
         <input type="text" name="apellido" placeholder="Ingrese apellido" required>
         <div class="ub1">&#128272; Ingresar Contraseña</div>
         <input type="password" name="contraseña" placeholder="Ingrese contraseña" id="input" required>
         <input type="checkbox" onclick="funcion()"> Ver contraseña <br>
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
