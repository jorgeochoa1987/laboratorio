
<?php

$servername = "localhost";
$database = "laboratorio";
$username = "admin";
$password = "Admin2020"; 

$conexion = new mysqli($servername, $username, $password,$database);
 
 if($conexion === false) { 
    echo 'Ha habido un error <br>'.mysqli_connect_error(); 
   } else {

//echo 'Conectado a la base de datos';
    
   }


?>