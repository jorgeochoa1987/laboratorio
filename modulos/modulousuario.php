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
  
	  $sql = "select * FROM usuarios WHERE identificacion='".$ID."'";

		  
		$result = $conexion->query($sql);
                              
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			?>
			   <div class="position-relative form-group"><label for="id_user" class="">Identificación</label>
                        <input id="txt-id" type="number" placeholder="identificación" required class="form-control" value=<?php echo $row["identificacion"] ?>></div>
                    <div class="position-relative form-group"><label for="nombres" class="">Nombres</label>
                        <input id="txt-nombre" type="text" placeholder="Nombre" required class="form-control" value="<?php echo $row["nombres"] ?>"></div>
		<?php  }
		} else { ?>
		   <option value="0">No cargo</option>

		<?php } 
		
	  }
}
  ?>
