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
    <title>Actualizar cargo</title>
</head>
<body>
<div class="card-body"><h5 class="card-title">Modificación de cargos</h5>
                <form class="">
                    <div class="position-relative form-group"><label for="cargo" class="">Cargo</label>
                        <input id="cargo" type="text" placeholder="Cargo" required class="form-control"  value= <?php echo $iduser; ?> ></div>
                    <div class="position-relative form-group"><label for="nombres" class="">Descripción</label>
                        <input id="descripcion" type="text" placeholder="Descripción" required class="form-control"></div>
                    <button class="mt-1 btn btn-primary" type="submit" id="guardar" value="Guardar">Guardar</button>
                </form>
</div>
</body>
</html>