<?php

require('../modulos/cnx.php');

if (isset($_POST['accion'])) 
	{
	if ($_POST['accion'] == 'guardar') 
		{
        $nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
	
	
	  $sql = "INSERT INTO `Unidades`( `nombre`, `descripcion`) VALUES ('$nombre','$descripcion')";

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
  
	$sql = "UPDATE `Unidades` SET `nombre` = '$nombre', `descripcion` = '$descripcion'  WHERE `id` = $id";

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
	
		$sql = "DELETE FROM Unidades WHERE id='".$ID."'";

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
  
	  $sql = "select id,nombre,descripcion  FROM Unidades  WHERE id ='".$ID."'";

		  
		$result = $conexion->query($sql);
                              
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			?>
			  <form class="">
                    <div class="position-relative form-group"><label for="id_user" class="">Nombre</label>

                        <input id="txt-Ednombreunidades" type="text" placeholder="nombre" value="<?php echo $row["nombre"] ?>" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="descripcion" class="">Descripción</label>
                        <input id="txt-Eddescripcionunidades" type="text" placeholder="descripcion" value=" <?php echo $row["descripcion"] ?>" required class="form-control"></div>
                    
                </form>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btn-cerrar" data-dismiss="modal">Cerrar</button>
        <button class="mt-1 btn btn-primary" type="submit" onClick="editarunidades(<?php echo $row["id"] ?>)" value="actualizar">Actualizar</button>
      </div>
			    
			    

		<?php  }
		} else { ?>
		   <option value="0">No cargo</option>

		<?php } 
		
	  }
}
  ?>
