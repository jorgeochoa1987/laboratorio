<?php
$servername = "localhost";
$database = "Laboratorio";
$username = "admin";
$password = "Admin2020";
// conexión
$conn = mysqli_connect($servername, $username, $password, $database);
//Verifico
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
