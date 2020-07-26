<?php
 session_start();
require('../modulos/cnx.php');

if (isset($_POST['accion'])) 
	{
	if ($_POST['accion'] == 'guardarmodulo') 
		{
        $nombrecargo = $_POST['cargo'];
		$crea = $_POST['creausuario'];
		
    	if($nombrecargo =='' )
    {
      echo '<div class="comment_box" id="Respuesta"> Tiene  campos obligatorios vacios </div>';
      exit();
    }
	
	$sql = "INSERT INTO `Cargos`( `nombre`, `crea`) VALUES ('$nombrecargo','$crea')";
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