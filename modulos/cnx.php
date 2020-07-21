<?php
$servername = "localhost";
$database = "";
$username = "";
$password = "";
// conexión
$conn = mysqli_connect($servername, $username, $password, $database);
//Verifico
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
