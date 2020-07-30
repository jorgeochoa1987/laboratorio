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
      <div class="card-body"><h5 class="card-title">Listado de módulos</h5>
      <br> 
         <a href="?p=modulo" >Nuevo</a>
            <table class="mb-0 table">
               <head>
               <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Acciones</th>
               </tr>
               </head>
               <body>
<?php 
         $usuario = "SELECT `id`, `nombre`, `descripcion` FROM `Modulos`";
         $resultado = mysqli_query($conexion,$usuario);
          while ($row = mysqli_fetch_assoc( $resultado))  {?>

               <tr>                  
                <td><?php echo $row['id'] ?></td>";
               <td><?php echo $row['nombre'] ?></td>";
               <td><?php echo $row['descripcion'] ?></td>";
               <td> <button onclick="Editar(<?php echo $row['id']; ?>)"> Editar </button>
               <button onclick="Eliminar(<?php echo $row['id']; ?>) " >Eliminar </button> </td>";
               </tr>
<?php }?>
              
               </body>
            </table>
      </div>
</div>

     </table>
     <script>
    function Editar(id) { 
       window.location = "?p=modulo?id="+id;
    }
    function Eliminar(id) {
       window.location = "cargomodificar.php?parametro="+id;
    }

     </script>
</body>
</html>


