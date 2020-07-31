<?php

if (empty($_REQUEST['id'])) 
{
    header('Location: Cargolist.php');
}elseif  {
    require('../modulos/cnx.php');
    $idusuario = $_REQUEST['id'];
}

$codigo = $_POST['id'];
$cargo = "DELETE FROM `Cargos` WHERE id = $codigo";
$resultado = mysqli_query($conexion,$cargo);
echo "Eliminado correctamente";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
</head>
<body>
    <section id="container">
    <h1>Eliminar Usuario</h1>
    </section>
</body>
</html>