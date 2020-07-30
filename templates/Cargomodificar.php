<?php
 session_start();
 require('../modulos/cnx.php');

if(empty($_GET['id']))
{
    header('Location: Cargolist.php');
}
$iduser = $_GET['id'];
$sql = "SELECT  `nombre`  FROM `Cargos` WHERE `id` = $iduser";
$resultado = mysqli_query($conexion, $sql );
$datos = mysqli_fetch_array($resultado);
if ($datos == 0) {
    header('Location: Cargolist.php');
}else {
    $iduser = $datos['nombre'];
    }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR USUARIO</title>
</head>
<body>
<input id="cargoname" type="text" placeholder="cargo" value= <?php echo $iduser; ?> required>
<input type="submit" id="guardar" value="Guardar">
</body>
</html>