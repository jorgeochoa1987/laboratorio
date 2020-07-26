<?php
 // start a session
 session_start();
 ?>


<input id="moduloname" type="text" placeholder="modulo" required>
<input id="modulodescripcion" type="text" placeholder="descripcion" required>
<input type="submit" id="guardar" value="Guardar">

    <div id="resultado"></div>


    
<!--===============================================================================================-->
<script src="../js/librerias/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->



<script>
$("#guardar").on("click", function(){
 
    var modulo = $("#moduloname").val();
    var descripcion = $("#modulodescripcion").val();

    $.ajax({ 
        url: '../modulos/modelomodulo.php',  // esto es una función 
        type: 'POST', 
        data: {
        'accion':'guardarmodulo',  
        'save':1,
        'enviomodulo': modulo,
        'enviodescripcion':descripcion,
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