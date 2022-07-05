<?php
require 'database.php';
if($_POST){
$usuario=$_POST['cuenta'];
$password=$_POST['contra'];
$consulta = mysqli_query($enlace, "SELECT*FROM datos where Nombre='$usuario'");
$fila = mysqli_num_rows($consulta);
$buscarpass = mysqli_fetch_array($consulta);

if(($fila == 1) && (password_verify($password, $buscarpass['Contraseña']))){
    session_start();
    $_SESSION['cliente'] = $usuario;
    header("location:inicio/index.php");
}else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
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
</head>
<body>
    <div class="container">
    <h1>Login</h1>
    <form action="index2.php" method="post">
    <input type="text" name="cuenta" placeholder="Ingrese nombre de la cuenta"> <br>
    <input type="password" name="contra" placeholder="Ingrese contraseña">
    <input type="submit" value="Enviar" name="logear" >
    </form>
    <p>No tienes una cuenta creada? Haz <a href="index.php">click </a>para registrarte!</p>
</div>
</body>
</html>