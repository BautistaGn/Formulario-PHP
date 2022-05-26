<?php
require 'database.php';
if($_POST){
$usuario=$_POST['cuenta'];
$password=$_POST['contra'];
$consulta = mysqli_query($enlace, "SELECT*FROM datos where Nombre='$usuario' and Contraseña='$password'");
$fila = mysqli_num_rows($consulta);
if ($fila > 0){
    session_start();
    $_SESSION['cliente'] = $usuario;
    header("location:inicio.php");
} else{
    echo '
    <script>
    alert("El Nombre o la Contraseña son invalidos");
    </script>
    ';
}
mysqli_free_result($consulta);
mysqli_close($enlace);
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
    <div class="container">
    <h1>Login</h1>
    <form action="index2.php" method="post">
    <input type="text" name="cuenta" placeholder="Ingrese nombre de la cuenta"> <br>
    <input type="password" name="contra" placeholder="Ingrese contraseña">
    <input type="submit" value="Enviar" name="logear" >
    </form>
    <a href="index.php">Haga click para registrarse</a><br>
</div>
</body>
</html>