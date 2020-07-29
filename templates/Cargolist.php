<?php
    require('../modulos/cnx.php');
    $usuario = "SELECT `id`, `nombre`, `crea`, `modifica`, `creaFecha`, `modificaFecha` FROM `Cargos`";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos</title>
</head>
<body>
<div class="main-card mb-3 card">
      <div class="card-body"><h5 class="card-title">Listado de cargos</h5>
            <table class="mb-0 table">
               <thead>
               <tr>
                  <th>#</th>
                  <th>Id</th>
                  <th>Cargo</th>
                  <th>Acción</th>
               </tr>
               </thead>
               <tbody>
<?php 
         $resultado = mysqli_query($conexion,$usuario);
          while ($row = mysqli_fetch_assoc( $resultado))  {?>

               <tr>                  
               <tr>
                <td><?php echo $row['id'] ?></td>";
               <td><?php echo $row['nombre'] ?></td>";
               <td> <button onclick="Editar(<?php echo $row['id']; ?>)"> Editar </button> </td>";
               <td> <button onclick="Eliminar(<?php echo $row['id']; ?>) " >Eliminar </button> </td>";
               </tr>
<?php }?>
              
              
               </tbody>
            </table>
      </div>
</div>


<br> 
<a href="?p=cargo" >Nuevo</a>

    

     </table>
     <script>
    function Editar(id) {
     console.log(id);
       window.location = "?p=Cargomodificar?id="+id;
       console.log("ingresé");
    }
    function Eliminar(id) {
       window.location = "cargomodificar.php?parametro="+id;
    }

     </script>
</body>
</html>


