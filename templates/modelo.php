<?php

require('cnx.php');

if (isset($_POST['accion'])) 
	{
	if ($_POST['accion'] == 'guardarinformacionusuarios') 
		{
        $identificacion = $_POST['idusuario'];
		$nombres = $_POST['nombresusuario'];
		$apellidos = $_POST['apellidosusuario'];
		$correo = $_POST['correousuario'];
		$cargo = $_POST['cargousuario'];
		$user = $_POST['usuariousuario'];
		$pass = $_POST['passusuario'];
		$crea = $_POST['creausuario'];
		$creafecha = $_POST['creafechausuario'];

    	if($identificacion =='' or $nombres =='' or $apellidos =='' or $correo =='' or $cargo ==''or $user =='' or  $pass =='')
    {
      echo '<div class="comment_box" id="Respuesta"> Tiene  campos obligatorios vacios </div>';
      exit();
    }
	
	  $sql = "INSERT INTO `usuarios`( `identificacion`, `nombres`, `apellidos`, `correo`, `idCargo`, `crea`, `creaFecha`, `clave`, `usuario`) VALUES ('$identificacion','$nombres','$apellidos','$correo','$cargo','$crea','$creafecha','$pass','$user')";

	  $resultado = mysqli_query($conexion, $sql );

	  	if ($resultado)
	  {
		echo("1");
	  }
	  	else
	  {
		echo("0");  
	  }
        }
  }
  ?>