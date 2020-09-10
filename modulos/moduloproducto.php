<?php

require('../modulos/cnx.php');

if (isset($_POST['accion'])) 
	{
	if ($_POST['accion'] == 'guardar') 
		{
        $nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$id_tipo = $_POST['id_tipo'];
	
	
	  $sql = "INSERT INTO `productos`( `nombre`, `descripcion`, `id_tipoProductos`) VALUES ('$nombre','$descripcion','$id_tipo')";

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
	  $tipo = $_POST['id_tipoProductos'];

  
	$sql = "UPDATE `Productos` SET `nombre` = '$nombre', `descripcion` = '$descripcion', `id_tipoProductos` = '$tipo'  WHERE `id` = $id";

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
	
		$sql = "DELETE FROM Cargos WHERE id='".$ID."'";

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
  
	  $sql = "select id,nombre,descripcion,id_tipoProductos  FROM productos  WHERE id ='".$ID."'";

		  
		$result = $conexion->query($sql);
                              
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			?>
			  <form class="">
                    <div class="position-relative form-group"><label for="nombre" class="">Nombre</label>
                        <input id="nombre" type="text" placeholder="nombre" value="<?php echo $row["nombre"] ?>" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="descripcion" class="">Descripción</label>
                        <input id="descrip" type="text" placeholder="descripcion" value=" <?php echo $row["descripcion"] ?>" required class="form-control"></div>
					<div class="position-relative form-group"><label for="tipoproducto" class="">Tipo Producto</label>
                        <input id="tipo" type="text" placeholder="tipoproducto" value=" <?php echo $row["tipoProducto"] ?>" required class="form-control"></div>
                </form>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btn-cerrar" data-dismiss="modal">Cerrar</button>
        <button class="mt-1 btn btn-primary" type="submit" onClick="editarproducto(<?php echo $row["id"] ?>)" value="actualizar">Actualizar</button>
      </div>
			    
			    

		<?php  }
		} else { ?>
		   <option value="0">No cargo</option>

		<?php } 
		
	  }
}
  ?>
