<?php
 // start a session
 session_start();
 ?>


<input id="id_user" type="text" placeholder="identificación" required>
<input id="nombres" type="text" placeholder="Nombre" required>
<input id="apellidos" type="text" placeholder="Apellidos" required>
<input id="correo" type="text" placeholder="Correo" required>
<input id="cargo" type="text" placeholder="Cargo" required>
<input id="usuario" type="text" placeholder="Usuario" required>
<input id="pass" type="password"  placeholder="Contraseña" required>
   
<input type="submit" id="guardar" value="Guardar">

    <div id="resultado"></div>


    
<!--===============================================================================================-->
<script src="../js/librerias/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->



<script>
$("#guardar").on("click", function(){
 
    var id_user = $("#id_user").val();
    var nombres = $("#nombres").val();
    var apellidos = $("#apellidos").val();
    var correo = $("#correo").val();
    var cargo = $("#cargo").val();
    var usuario = $("#usuario").val();
    var password = $("#pass").val();
    var crea  = 'jorge';

    $.ajax({ 
        url: '../modulos/modelousuario.php',  // esto es una función 
        type: 'POST', 
        data: {
        'accion':'guardarinformacionusuarios',  
        'save':1,
        'idusuario': id_user,
        'nombresusuario':nombres,
        'apellidosusuario': apellidos,
        'correousuario':correo,
        'cargousuario': cargo,
        'usuariousuario':usuario,
        'passusuario': password,
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