<?php
    require('../modulos/cnx.php');?>

<div class="main-card mb-3 card">
      <div class="card-body"><h5 class="card-title">Listado de usuarios</h5>
            <br> 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo usuario</button>
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


     <!--modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="">
                    <div class="position-relative form-group"><label for="id_user" class="">Identificación</label>
                        <input id="id_user" type="number" placeholder="identificación" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="nombres" class="">Nombres</label>
                        <input id="nombres" type="text" placeholder="Nombre" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="apellidos" class="">Apellidos</label>
                        <input  id="apellidos" type="text" placeholder="Apellidos" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="cargo" class="">Correo</label>
                        <input  id="correo" type="text" placeholder="Correo"  class="form-control"></div>
                    <div class="position-relative form-group"><label for="cargo" class="">Cargo</label>
                        <input  id="cargo" type="text" placeholder="Cargo" required class="form-control"></div> 
                    <div class="position-relative form-group"><label for="cargo" class="">Usuario</label>
                        <input  id="usuario" type="text" placeholder="Usuario" class="form-control"></div>
                    <div class="position-relative form-group"><label for="cargo" class="">Contraseña</label>
                        <input  id="pass" type="password"  placeholder="Contraseña" required  class="form-control"></div>

                    
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button class="mt-1 btn btn-primary" type="submit" id="guardar" value="Guardar">Guardar</button>
      </div>
    </div>
  </div>
</div>
 


