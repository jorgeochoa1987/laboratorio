<?php

require('../modulos/cnx.php');

if (isset($_POST['accion'])) 
	{
	if ($_POST['accion'] == 'guardar') 
		{
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$tipo = $_POST['tipo'];
		$unidad = $_POST['unidad'];
		$procedencia = $_POST['procedencia'];
		
	
	  $sql = "INSERT INTO `materiasPrimas`(  `nombre`, `descripcion`, `id_tipoMaterias`, `id_unidad`, `id_procedencia`) VALUES ('$nombre','$descripcion','$tipo','$unidad','$procedencia')";

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
  if ($_POST['accion'] == 'actualizar') 
	  {
	  $id  = $_POST['id'];
      $nombre = $_POST['nombre'];
      $descripcion = $_POST['descripcion'];
      $tipo = $_POST['tipo'];
      $unidad = $_POST['unidad'];
      $procedencia = $_POST['procedencia'];
	
  
	$sql = "UPDATE `materiasPrimas` SET  `nombre` = '$nombre', `descripcion` = '$descripcion', `tipo` = '$tipo', `unidad` = '$unidad', `procedencia` = '$procedencia' WHERE `id` = $id";

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
        $ID = $_POST['id'];	
	
		$sql = "DELETE FROM materiasPrimas WHERE id='".$ID."'";

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
	  $ID = $_POST['id'];	
  
	  $sql = "select MP.nombre, MP.descripcion, TM.nombre  as tipomuestra, FROM materiasPrimas as MP join tipoMaterias as TM on MP.id_tipoMaterias = TM.id  WHERE MP.id='".$ID."'";

		  
		$result = $conexion->query($sql);
                              
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			?>
			  <form class="">
                    <div class="position-relative form-group"><label for="id_user" class="">Identificación</label>

                        <input id="txt-idup" type="number" placeholder="identificación" value="<?php echo $row["identificacion"] ?>" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="nombres" class="">Nombres</label>
                        <input id="txt-nombreup" type="text" placeholder="Nombre" value=" <?php echo $row["nombres"] ?>" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="apellidos"  class="">Apellidos</label>
                        <input  id="txt-apellidoup" type="text" placeholder="Apellidos" value="<?php echo $row["apellidos"] ?>" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="correo" class="">Correo</label>
                        <input  id="txt-correoup" type="text" placeholder="Correo"  value="<?php echo $row["correo"] ?>" class="form-control"></div>
                    <div class="position-relative form-group"><label for="cargo" class="">Cargo</label>
                        <select id="txt-cargoup" type="text"   placeholder="Cargo" required class="form-control">
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
                        <input  id="txt-passup" type="password"  value="<?php echo $row["clave"] ?>" placeholder="Contraseña"  class="form-control"></div>

                    
                </form>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btn-cerrar" data-dismiss="modal">Cerrar</button>
        <button class="mt-1 btn btn-primary" type="submit" onClick="editarUsuario(<?php echo $row["id"] ?>)" value="actualizar">Actualizar</button>
      </div>
			    
			    

		<?php  }
		} else { ?>
		   <option value="0">No cargo</option>

		<?php } 
		
	  }
}
  ?>
