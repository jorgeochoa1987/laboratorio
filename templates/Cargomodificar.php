<?php
 // start a session
 session_start();
 $cod = $_GET["parametro"];
 require('../modulos/cnx.php');
 $cargo = "SELECT  `nombre`,  FROM `Cargos` WHERE `id` = $cod ";

 ?>


<input id="cargoname" type="text" placeholder="cargo" value= $cargo required>
<input type="submit" id="guardar" value="Guardar">

    <div id="resultado"></div>


    
<!--===============================================================================================-->
<script src="../js/librerias/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->



<script>
$("#guardar").on("click", function(){
 
    var cargo = $("#cargoname").val();
    var crea = '<?php echo $_SESSION ['username']?>';

    $.ajax({ 
        url: '../modulos/modelocargo.php',  // esto es una función 
        type: 'POST', 
        data: {
        'accion':'guardarcargo',  
        'save':1,
        'cargo': cargo,
        'creausuario':crea,
        },
    }).done(function(echo){
    $("#resultado").html(echo);
     if(echo==1)
     {
        alert('Registro guardado exitosamente');
     }
     else
     {
         alert('Verifica nuevamente la información'+echo );
     }
}

);
});

</script>    