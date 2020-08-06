<!--formulario de registro al usuario -->
<div class="card-body"><h5 class="card-title">Registro de usuarios</h5>
                <form class="">
                    <div class="position-relative form-group"><label for="id_user" class="">Identificación</label>
                        <input id="id_user" type="text" placeholder="identificación" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="nombres" class="">Nombres</label>
                        <input id="nombres" type="text" placeholder="Nombre" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="apellidos" class="">Apellidos</label>
                        <input  id="apellidos" type="text" placeholder="Apellidos" required class="form-control"></div>
                    <div class="position-relative form-group"><label for="cargo" class="">Correo</label>
                        <input  id="correo" type="text" placeholder="Correo"  class="form-control"></div>
                    <div class="position-relative form-group"><label for="cargo" class="">Cargo</label>
                        <input  id="cargo" type="text" placeholder="Cargo" required class="form-control"></div> 
                    <div class="position-relative form-group"><label for="cargo" class="">Usuario</label>
                        <input  id="usuario" type="text" placeholder="Usuario" class="form-control"></div>
                    <div class="position-relative form-group"><label for="cargo" class="">Contraseña</label>
                        <input  id="pass" type="password"  placeholder="Contraseña" required  class="form-control"></div>

                    <button class="mt-1 btn btn-primary" type="submit" id="guardar" value="Guardar">Guardar</button>
                </form>
</div>

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