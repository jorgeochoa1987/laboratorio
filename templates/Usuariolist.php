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
      <div class="card-body"><h5 class="card-title">Listado de usuarios</h5>
            <br> 
            <a href="?p=usuario_l" >Nuevo</a>
            <table class="mb-0 table">
               <head>
               <tr>
                  <th>Id</th>
                  <th>Identificación</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Correo</th>
                  <th>Cargo</th>
                  <th>Usuario</th>
                  <th>Acciónes</th>
               </tr>
               </head>
               <body>
<?php 
         $usuario = "SELECT `id`, `identificacion`, `nombres`, `apellidos`, `correo`, `idCargo`, `usuario` FROM `usuarios`" ;
         $resultado = mysqli_query($conexion,$usuario);
          while ($row = mysqli_fetch_assoc( $resultado))  {?>

                             
               <tr>
               <td><?php echo $row['id'] ?></td>";
               <td><?php echo $row['identicacion'] ?></td>";
               <td><?php echo $row['nombres'] ?></td>";
               <td><?php echo $row['apellidos'] ?></td>";
               <td><?php echo $row['correo'] ?></td>";
               <td><?php echo $row['idCargo'] ?></td>";
               <td><?php echo $row['usuario'] ?></td>";
               <td> <button  onclick="Editar(<?php echo $row['id']; ?>)"> Editar </button> 
               <button  onclick="Eliminar(<?php echo $row['id']; ?>) " >Eliminar </button>
               </td>";
               </tr>
<?php }?>
              
              
               </body>
            </table>
      </div>
</div>

     </table>
     <script>
    function Editar(id) {
     console.log(id);
       window.location = "?p=Cargomodificar?id="+id;
       //console.log("ingresé");
    }
    function Eliminar(id) {
       window.location = "cargomodificar.php?parametro="+id;
    }
     </script>
</body>
</html>


