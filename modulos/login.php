<?php
require('cnx.php');
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $pass = $_POST['pass'];
   
    if($id=='' or $pass =='')
    {
      echo '<div class="comment_box" id="Respuesta"> debe ingresar usuario y contraseña </div>';
      exit();
    }
	  $sql = "SELECT * FROM `usuarios` WHERE `identificacion` = $id and clave = $pass";

	  $resultado = mysqli_query($conexion, $sql );
	  $datos = mysqli_fetch_array($resultado);
	 // echo $sql;
	  $userBD = $datos['identificacion'];
	  $passwordBD = $datos['clave'];
	  if ($id = $userBD  and $pass = $passwordBD)
	  {
		 echo("1"); 
	  }
	  else
	  {
		  echo "2";
		  //echo $userBD; echo $passwordBD; 

	  }


  }
  ?>