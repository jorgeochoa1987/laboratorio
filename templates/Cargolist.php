<?php
    require('../modulos/cnx.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos</title>
</head>
<body>
<div class="main-card mb-3 card">
      <div class="card-body"><h5 class="card-title">Listado de cargos</h5>
      <br> 
         <a href="?p=cargo" >Nuevo</a>
            <table class="mb-0 table">
               <head>
               <tr>
                  <th>Id</th>
                  <th>Cargo</th>
                  <th>Acciónes</th>
               </tr>
               </head>
               <body>
<?php 
         $usuario = "SELECT `id`, `nombre`, `crea`, `modifica`, `creaFecha`, `modificaFecha` FROM `Cargos`";
         $resultado = mysqli_query($conexion,$usuario);
          while ($row = mysqli_fetch_assoc( $resultado))  {?>

               <tr>                  
                <td><?php echo $row['id'] ?></td>
               <td><?php echo $row['nombre'] ?></td>
               <td> <button onclick="Editar(<?php echo $row['id']; ?>)"> Editar </button>
               <button onclick="Eliminar(<?php echo $row['id']; ?>) " >Eliminar </button> </td>
               </tr>
<?php }?>
              
               </body>
            </table>
      </div>
</div>

     </table>
     <script>
    function Editar(id) { 
       window.location = "?p=Cargomodificar?id="+id;
    }
    function Eliminar(id) {
       window.location = "cargoeliminar.php?parametro="+id;
    }

     </script>
</body>
</html>


