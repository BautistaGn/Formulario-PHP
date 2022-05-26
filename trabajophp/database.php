<?php
$servidor="localhost";          //declaro conexión con el servidor
$usuario="root";            //nombre por defecto
$clave="";          //otra opción es root.pwd (dejarlo en blanco a veces no es una buena practica)
$basedeDatos="formulario";        //esta conectada en la parte de localhost/phpmyadmin (formulario es el nombre con el que fue creado la tabla)  
//$enlace = mysqli_connect("localhost","root","","formulario"); (es otra forma) 
$enlace = mysqli_connect($servidor, $usuario, $clave, $basedeDatos);

if(!$enlace){    //invierto el if, dando a entender negación, es decir, si el enlace no se puede ejecutar se imprime lo sig por pantalla
    echo "Error en la conexión con el servidor";
}
?>