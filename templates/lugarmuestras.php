<?php
    require('../modulos/cnx.php');?>

<div class="main-card mb-3 card" id="cuerpo">
      <div class="card-body"><h5 class="card-title">Listado de lugares muestras</h5>
            <br> 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo</button>
            <table class="mb-0 table" id="tablalugarmuestras">
               <head>
               <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Descripción</th>
               </tr>
               </head>
               <body>
               <?php  
               $usuario = "SELECT `id`, `nombre`, `descripcion` FROM `lugarMuestras`" ;
               $resultado = mysqli_query($conexion,$usuario);
               //echo $usuario;
                while ($row = mysqli_fetch_assoc( $resultado))  {?>                             
                  <tr id ="<?php echo $row['id'] ?>">
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['nombre'] ?></td>
                  <td><?php echo $row['descripcion'] ?></td> 
                  <td> <button  class="btn btn-info"   data-toggle="modal" data-target="#modaleditar" onclick="subireditarlugarmuestras(<?php echo $row['id'] ?>)"> Editar </button> 
                  <button   class="btn btn-danger"  onclick="eliminarlugarmuestras(<?php echo $row['id'];?>)">Eliminar </button>
                  </td> 
                  </tr> 
               <?php }?> 
                  <td class="nuevos"></td>

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
        <h5 class="modal-title" id="exampleModalLabel">Nuevo lugar muestra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="">
                    <div class="position-relative form-group"><label for="nombre" class="">Nombre</label>
                        <input id="txt-nombrelugarmuestras" type="text" placeholder="nombre" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="descripcion" class="">Descripción</label>
                        <input id="txt-descripcionlugarmuestras" type="text" placeholder="Descripcion" required class="form-control"></div>
                    
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btn-cerrarlugarmuestras" data-dismiss="modal">Cerrar</button>
        <button class="mt-1 btn btn-primary" type="submit" id="btn-guardarlugarmuestras" value="Guardar">Guardar</button>
      </div>
    </div>
  </div>
</div> 
<!--Modal editar-->
 
 <!--modal -->
 <div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="labeleditar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="labeleditar">Editar lugar muestra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div id="resultado"></div> 
     
    </div>
  </div>
</div>