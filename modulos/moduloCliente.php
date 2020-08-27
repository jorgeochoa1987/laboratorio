<?php

require('../modulos/cnx.php');

if (isset($_POST['accion'])) 
	{
	if ($_POST['accion'] == 'guardar') 
		{
        $identificacion = $_POST['identificacion'];
		$razonsocial = $_POST['razonsocial'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$contacto = $_POST['contacto'];

	  $sql = "INSERT INTO `clientes` (`id`, `identificacion`, `razonSocial`, `direccion`, `telefono`, `contacto`, `crea`, `modifica`, `creaFecha`, `modificaFecha`) VALUES (NULL, '$identificacion', '$razonsocial', '$direccion', '$telefono', '$contacto', NULL, NULL, current_timestamp(), current_timestamp());";

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
	  $identificacion = $_POST['identificacion'];
	  $razonsocial = $_POST['razonsocial'];
	  $direccion = $_POST['direccion'];
	  $telefono = $_POST['telefono'];
	  $contacto = $_POST['contacto'];
  
	$sql = "UPDATE `clientes` SET `identificacion` = '$identificacion', `razonSocial` = '$razonsocial', `direccion` = '$direccion', `telefono` = '$telefono', `contacto` = '$contacto' WHERE `id` = $id";
 
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
	
		$sql = "DELETE FROM clientes  WHERE id='".$ID."'"; 

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
  
	  $sql = "select *  FROM clientes  WHERE id ='".$ID."'";
 
		  
		$result = $conexion->query($sql);
                              
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			?>
			  <form class="">
                <div class="position-relative form-group"><label for="identificacion" class="">Identificación</label>
                    <input id="edidentificacion" type="number" placeholder="Ingrese identificación" required class="form-control" value="<?php echo $row["identificacion"] ?>"></div>
                <div class="position-relative form-group"><label for="razonsocial" class="">Razón social</label>
                    <input id="edrazonsocial" type="text" placeholder="Ingrese razón social" required class="form-control"  value="<?php echo $row["razonSocial"] ?>"></div>
                <div class="position-relative form-group"><label for="direccion" class="">Dirección</label>
                    <input id="eddireccion" type="text" placeholder="Ingrese dirección" required class="form-control"  value="<?php echo $row["direccion"] ?>"></div>
                <div class="position-relative form-group"><label for="direccion" class="">Teléfono</label>
                    <input id="edtelefono" type="number" placeholder="Ingrese teléfono" required class="form-control"  value="<?php echo $row["telefono"] ?>"></div>
                <div class="position-relative form-group"><label for="contacto" class="">Contacto</label>
                    <input id="edcontacto" type="text" placeholder="Ingrese nombre contacto" required class="form-control"  value="<?php echo $row["contacto"] ?>"></div>
            </form> 
      </div>  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btn-cerrar" data-dismiss="modal">Cerrar</button>
        <button class="mt-1 btn btn-primary" type="submit" onClick="editarcliente(<?php echo $row["id"] ?>)" value="actualizar">Actualizar</button>
      </div>
			     
			    

		<?php  }
		} else { ?>
		   <option value="0">No cliente</option>

		<?php } 
		
	  }
}
  ?>
