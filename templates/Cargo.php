<?php
 // start a session
 session_start();
 ?>
 

<input id="cargoname" type="text" placeholder="cargo" required>
<input type="submit" id="guardar" value="Guardar">
<input value=<?php echo  $_SESSION ['username'] ?> id="usuario"  hidden>
<div id="resultado"></div> 


    
<!--===============================================================================================-->
<script src="../js/librerias/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->



<script>
$("#guardar").on("click", function(){
 
    var cargo = $("#cargoname").val();
    var crea =$("#usuario").val();

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