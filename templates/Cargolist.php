<?php
 session_start();
    require('../modulos/cnx.php');
    $usuario = "SELECT `id`, `nombre`, `crea`, `modifica`, `creaFecha`, `modificaFecha` FROM `Cargos`";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos</title>
</head>
<body>
<br>

    <table border = '1'>
    <button onclick= "location.href='cargo.php'" >Nuevo</button>
    <tr>
    <td>Id</td>
    <td>Cargo</td>
    <td>Editar</td>
    <td>Eliminar</td>
     </tr>
     <?php 
    $resultado = mysqli_query($conexion,$usuario);
 while ($row = mysqli_fetch_assoc( $resultado))  {?>
    <?php
    echo "<tr>";
    echo "<td>".$row['id'] ."</td>";
    echo "<td>".$row['nombre'] ."</td>";
    echo "<td> <button onclick='Editar(".$row['id'].")'> Editar </button> </td>";
    echo "<td> <button onclick=\"Eliminar(".$row['id'].")\"> Eliminar </button> </td>";
    echo "</tr>";
    ?>
    <?php }?>
 
    <td> <button onclick="Editar(2)"> Editar </button> </td>
     </table>
     <script>
    function Editar(id) {
     console.log(id);
       window.location = "Cargomodificar.php?id="+id;
       console.log("ingresé");
    }
    function Eliminar(id) {
       window.location = "cargomodificar.php?parametro="+id;
    }

     </script>
</body>
</html>


