<?php
 session_start();
require('../modulos/cnx.php');

if (isset($_POST['accion'])) 
	{
	if ($_POST['accion'] == 'guardarmodulo') 
		{
        $nombremodulo = $_POST['enviomodulo'];
		$descripcion = $_POST['enviodescripcion'];
		
    	if($nombremodulo =='' )
    {
      echo '<div class="comment_box" id="Respuesta"> Tiene  campos obligatorios vacios </div>';
      exit();
    }
	
	$sql = "INSERT INTO `Modulos`( `nombre`, `descripcion`) VALUES ('$nombremodulo','$descripcion')";
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