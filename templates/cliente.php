<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-users icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Listado de clientes
                                        <div class="page-title-subheading">Actualmente cuenta con # de clientes registrados</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                    <div class="d-inline-block dropdown">
                                    <button type="button"  aria-haspopup="true" class="btn-shadow  btn btn-info"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-user-plus"></i>
                                            </span>
                                            Agregar
                                        </button> 
                                        
                                    </div> 
                                </div>       
                             </div> 
                        </div>            
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example_length"><label>Mostrar <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example_filter" class="dataTables_filter"><label>Buscar:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example" id="search" ></label></div></div></div><div class="row"><div class="col-sm-12"><table style="width: 100%;" id="tabla" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
                                    <thead>
                                    <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 128.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Identificación</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 204.2px;" aria-label="Position: activate to sort column ascending">Razón Social</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 44.2px;" aria-label="Age: activate to sort column ascending">Contacto</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 94.2px;" aria-label="Start date: activate to sort column ascending">Dirección</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 69.2px;" aria-label="Salary: activate to sort column ascending">Telefono</th> 
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 69.2px;" aria-label="Salary: activate to sort column ascending">Acción</th></tr>
                                    </thead>
                                    <tbody><tr role="row" class="odd">
                                        <?php  
                                                require('../modulos/cnx.php');
                                                $clientes = "SELECT *  FROM `clientes`" ;
                                                $resultado = mysqli_query($conexion,$clientes);
                                                    while ($row = mysqli_fetch_assoc( $resultado))  {?>
                                                    <input  id="identificacionTd" value="<?php echo $row['identificacion'] ?>" hidden>                              
                                                    <tr id ="<?php echo $row['id'] ?>">
                                                    <td><?php echo $row['identificacion'] ?></td>
                                                    <td><?php echo $row['razonSocial'] ?></td> 
                                                    <td><?php echo $row['contacto'] ?></td> 
                                                    <td><?php echo $row['direccion'] ?></td> 
                                                    <td><?php echo $row['telefono'] ?></td> 
                                                    <td> <button  class="btn btn-info"   data-toggle="modal" data-target="#modaleditar" onclick="subireditarcliente(<?php echo $row['id'] ?>)">Editar</button>  
                                                    <button   class="btn btn-danger"  onclick="eliminarcliente(<?php echo $row['id'];?>)">Eliminar</button> 
                                                    </td> 
                                                    </tr> 
                                        <?php }?> 
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example_info" role="status" aria-live="polite">mostrando 1a 10 clientes</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"></div></div></div></div>
                            </div>
                        </div>
                    </div>

   <!--modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
            <form class="">
                <div class="position-relative form-group"><label for="identificacion" class="">Identificación</label>
                    <input id="identificacion" type="number" placeholder="Ingrese identificación" required class="form-control"></div>
                <div class="position-relative form-group"><label for="razonsocial" class="">Razón social</label>
                    <input id="razonsocial" type="text" placeholder="Ingrese razón social" required class="form-control"></div>
                <div class="position-relative form-group"><label for="direccion" class="">Dirección</label>
                    <input id="direccion" type="text" placeholder="Ingrese dirección" required class="form-control"></div>
                <div class="position-relative form-group"><label for="direccion" class="">Teléfono</label>
                    <input id="telefono" type="number" placeholder="Ingrese teléfono" required class="form-control"></div>
                <div class="position-relative form-group"><label for="contacto" class="">Contacto</label>
                    <input id="contacto" type="text" placeholder="Ingrese nombre contacto" required class="form-control"></div>
            </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btn-cerrarcliente" data-dismiss="modal">Cerrar</button>
        <button class="mt-1 btn btn-primary" type="submit" id="btn-guardarcliente" value="Guardar">Guardar</button>
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
        <h5 class="modal-title" id="labeleditar">Editar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div id="resultado"></div> 
     
    </div>
  </div>
</div>
