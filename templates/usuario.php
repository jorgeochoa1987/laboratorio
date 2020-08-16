<?php
    require('../modulos/cnx.php');?>
<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-users icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Listado de usuarios
                                        <div class="page-title-subheading">Actualmente cuenta con # de clientes registrados</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                    <div class="d-inline-block dropdown">
                                        <button type="button"  aria-haspopup="true" class="btn-shadow  btn btn-info"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-user-plus"></i>
                                            </span>
                                            Agregar usuario
                                        </button>
                                        
                                    </div>
                                </div>    </div>
                        </div>   
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example_length"><label>Mostrar <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example_filter" class="dataTables_filter"><label>Buscar:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div></div></div><div class="row"><div class="col-sm-12"><table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
                                    <thead>
                                    <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 128.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Id</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 204.2px;" aria-label="Position: activate to sort column ascending">Identificación</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 44.2px;" aria-label="Age: activate to sort column ascending">Nombres</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 94.2px;" aria-label="Start date: activate to sort column ascending">Apellidos</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 69.2px;" aria-label="Salary: activate to sort column ascending">Correo</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 69.2px;" aria-label="Salary: activate to sort column ascending">Cargo</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 69.2px;" aria-label="Salary: activate to sort column ascending">Acciones</th>
                                    </thead>
               <body> 
               <?php  
               $usuario = "SELECT `id`, `identificacion`, `nombres`, `apellidos`, `correo`, `idCargo` FROM `usuarios`" ;
               $resultado = mysqli_query($conexion,$usuario);
               //echo $usuario;
                while ($row = mysqli_fetch_assoc( $resultado))  {?>                             
                  <tr id ="<?php echo $row['identificacion'] ?>">
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['identificacion'] ?></td>
                  <td><?php echo $row['nombres'] ?></td> 
                  <td><?php echo $row['apellidos'] ?></td>
                  <td><?php echo $row['correo'] ?></td>
                  <td><?php echo $row['idCargo'] ?></td>
                  <td> 
                  <button  class="btn btn-info"   data-toggle="modal" data-target="#modaleditar" onclick="subireditar(<?php echo $row['identificacion'] ?>)"><i class="fa fa-pencil-square"></i> Editar </button> 
                  <button   class="btn btn-danger"  onclick="Eliminaruser(<?php echo $row['identificacion'];?>)"><i class="fa fa-trash"></i> Eliminar</button>
                  </td> 
                  </tr> 
               <?php }?> 
                  <td class="nuevos"></td>

               </body>
            </table>
      </div>
</div>

     </table>
     </div>

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
                        <input id="txt-id" type="number" placeholder="identificación" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="nombres" class="">Nombres</label>
                        <input id="txt-nombre" type="text" placeholder="Nombre" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="apellidos" class="">Apellidos</label>
                        <input  id="txt-apellido" type="text" placeholder="Apellidos" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="correo" class="">Correo</label>
                        <input  id="txt-correo" type="text" placeholder="Correo"  class="form-control"></div>
                    <div class="position-relative form-group"><label for="cargo" class="">Cargo</label>
                        <select id="txt-cargo" type="text" placeholder="Cargo" required class="form-control">
                             <?php 

                             $sql = "SELECT id, nombre FROM cargos";
                             $result = $conexion->query($sql);
                              
                             if ($result->num_rows > 0) {
                               // output data of each row
                               while($row = $result->fetch_assoc()) {
                                 ?>
                                   <option value="<?php echo $row["id"] ?>"><?php echo $row["nombre"] ?></option>
                             <?php  }
                             } else { ?>
                                <option value="0">No cargo</option>

                             <?php } ?>
                             
                            
                             
                             
                          </select>     
                       </div> 
                    <div class="position-relative form-group"><label for="contrasena" class="">Contraseña</label>
                        <input  id="txt-pass" type="password"  placeholder="Contraseña" required  class="form-control"></div>

                    
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btn-cerrar" data-dismiss="modal">Cerrar</button>
        <button class="mt-1 btn btn-primary" type="submit" id="btn-guardar" value="Guardar">Guardar</button>
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
        <h5 class="modal-title" id="labeleditar">Editar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div id="resultado"></div> 
     
    </div>
  </div>
</div>