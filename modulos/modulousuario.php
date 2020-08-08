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
        $ID = $_POST['Id'];	
	
		$sql = "DELETE FROM usuarios WHERE Id='".$ID."'";

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
  ?>
