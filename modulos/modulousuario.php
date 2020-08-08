<?php

require('../modulos/cnx.php');

if (isset($_POST['accion'])) 
	{
	if ($_POST['accion'] == 'guardar') 
		{
        $identificacion = $_POST['identificacion'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$correo = $_POST['correo'];
		$cargo = $_POST['idcargo'];
		$pass = $_POST['clave'];
		
	
	  $sql = "INSERT INTO `usuarios`( `identificacion`, `nombres`, `apellidos`, `correo`, `idCargo`, `clave`) VALUES ('$identificacion','$nombres','$apellidos','$correo','$cargo','$pass')";

	  $resultado = mysqli_query($conexion, $sql );

	  	if ($resultado)
	  {
		echo("1");
	  }
	  	else
	  {
		echo($sql);  
	  }
        }
  }

  
  if (isset($_POST['accion'])) 
	{
	if ($_POST['accion'] == 'eliminar') 
		{
        $ID = $_POST['identificacion'];	
	
		$sql = "DELETE FROM usuarios WHERE identificacion='".$ID."'";

	  $resultado = mysqli_query($conexion, $sql );

	  	if ($resultado)
	  {
		echo("1");
	  }
	  	else
	  {
		echo($sql);  
	  }
        }
  }

  if (isset($_POST['accion'])) 
  {
  if ($_POST['accion'] == 'consultar') 
	  {
	  $ID = $_POST['ide'];	
  
	  $sql = "select *, cr.nombre  as cargo FROM usuarios as usu join cargos as cr on usu.idCargo = cr.id  WHERE usu.identificacion='".$ID."'";

		  
		$result = $conexion->query($sql);
                              
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			?>
			  <form class="">
                    <div class="position-relative form-group"><label for="id_user" class="">Identificación</label>
					<input id="txt-ide" type="number" placeholder="identificación" value="<?php echo $row["id"] ?>"  class="form-control" hidden></div>

                        <input id="txt-id" type="number" placeholder="identificación" value="<?php echo $row["identificacion"] ?>" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="nombres" class="">Nombres</label>
                        <input id="txt-nombre" type="text" placeholder="Nombre" value=" <?php echo $row["nombres"] ?>" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="apellidos"  class="">Apellidos</label>
                        <input  id="txt-apellido" type="text" placeholder="Apellidos" value="<?php echo $row["apellidos"] ?>" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="correo" class="">Correo</label>
                        <input  id="txt-correo" type="text" placeholder="Correo"  value="<?php echo $row["correo"] ?>" class="form-control"></div>
                    <div class="position-relative form-group"><label for="cargo" class="">Cargo</label>
                        <select id="txt-cargo" type="text"   placeholder="Cargo" required class="form-control">
						<option value="<?php echo $row["idCargo"] ?>"> <?php echo $row["cargo"] ?></option>

							 <?php 

                             $sql2 = "SELECT id, nombre FROM cargos";
                             $result2 = $conexion->query($sql2);
                              
                             if ($result2->num_rows > 0) {
                               // output data of each row
                               while($row2 = $result2->fetch_assoc()) {
                                 ?>
                                   <option value="<?php echo $row2["id"] ?>"><?php echo $row2["nombre"] ?></option>
                             <?php  }
                             } else { ?> 
                                <option value="0">No cargo</option>

                             <?php } ?>
                             
                            
                             
                             
                          </select>     
                       </div> 
                    <div class="position-relative form-group"><label for="contrasena" class="">Contraseña </label> 
                        <input  id="txt-pass" type="password"  value="<?php echo $row["clave"] ?>" placeholder="Contraseña"  class="form-control"></div>

                    
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btn-cerrar" data-dismiss="modal">Cerrar</button>
        <button class="mt-1 btn btn-primary" type="submit" id="editarUsuario" value="actualizar">Actualizar</button>
      </div>
			    
			   

		<?php  }
		} else { ?>
		   <option value="0">No cargo</option>

		<?php } 
		
	  }
}
  ?>
