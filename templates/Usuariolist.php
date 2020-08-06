<?php
    require('../modulos/cnx.php');?>

<div class="main-card mb-3 card">
      <div class="card-body"><h5 class="card-title">Listado de usuarios</h5>
            <br> 
            <button class="mb-2 mr-2 btn btn-info" id="nuevoUsuario" >Nuevo</button> 
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
               echo $usuario;
                while ($row = mysqli_fetch_assoc( $resultado))  {?>                             
                  <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['identicacion'] ?></td>
                  <td><?php echo $row['nombres'] ?></td>
                  <td><?php echo $row['apellidos'] ?></td>
                  <td><?php echo $row['correo'] ?></td>
                  <td><?php echo $row['idCargo'] ?></td>
                  <td><?php echo $row['usuario'] ?></td>
                  <td> <button  onclick="Editar(<?php echo $row['id']; ?>)"> Editar </button> 
                  <button  onclick="Eliminar(<?php echo $row['id']; ?>) " >Eliminar </button>
                  </td>
                  </tr>
               <?php }?>
              
              
               </body>
            </table>
      </div>
</div>

     </table>
 


