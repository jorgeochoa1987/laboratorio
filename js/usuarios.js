
function Editar(id) {
   window.location = "?p=Cargomodificar?id="+id;
   
}
function Eliminar(id) {
   window.location = "cargomodificar.php?parametro="+id;
}

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
       url: '../modulos/modulousuario.php',  // esto es una función 
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