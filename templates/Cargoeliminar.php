<?php

if (empty($_REQUEST['id'])) { 
    header('Location: Cargolist.php');
} else { 
    require('../modulos/cnx.php'); 
    $idusuario = $_REQUEST['id'];
    //$cargo = "SELECT `id`, `nombre`, `descripcion` FROM `Cargos` WHERE id = $idusuario";
    $query = mysqli_query($conexion, "SELECT id, nombre, descripcion FROM Cargo WHERE id = $idusuario");
    $result = mysqli_num_rows($query);
    if ($result > 0) {
        while ($data = mysqli_fetch_array($query)) {
            $id = $data['id'];
            $nombre = $data['nombre'];
            $descripcion = $data['descripcion'];
        }
    }else{
        header('Location: Cargolist.php');
    }
}
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
    <div>
    <h2>¿Esta seguro de eliminar el siguiente registro?</h2>
    <p>Id: <span><?php echo $id; ?></span></p>
    <p>Nombre: <span><?php echo $nombre; ?></span></p>
    <p>Descripción: <span><?php echo  $descripcion ; ?></span></p>
    <form method="post" action="">
    <a href="Cargolist.php">Cancelar</a>
    <input type="Submit" value="Aceptar">
    </form>

    </div>
    </section>
</body>
</html>