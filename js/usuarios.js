$('#btn-guardar').click(function(){

    identificacion = $('#txt-id').val()
    nombre = $('#txt-nombre').val().toUpperCase()
    apellido = $('#txt-apellido').val().toUpperCase()
    correo = $('#txt-correo').val().toUpperCase()
    cargo = $('#txt-cargo').val().toUpperCase()
    pass = $('#txt-pass').val()
    
    if (identificacion === '' || nombre === '' || apellido === '' || correo === '' || cargo === '' ||  pass === '' ) {
        swal('alert', 'Tiene campos vacios, por favor verifique.', 'warning')
        return
    }

    $.ajax({ 
        url: '../modulos/modulousuario.php',  // esto es una función 
        type: 'POST', 
        data: {
        'accion':'guardar',  
        'save':1,
        'identificacion': identificacion,
        'nombres':nombre,
        'apellidos':apellido,
        'correo':correo,
        'idcargo':cargo,
        'clave':pass
        },
    }).done(function(echo){
    $("#resultado").html(echo);
     if(echo==1)
     {
         swal('Registro guardado exitosamente'+ identificacion, "¡ Listo !");
        document.getElementById("exampleModal").style.display = "none"; 
        window.setTimeout(function(){
            location.reload()
          } ,2000);  
    } 
     else
     {
         alert('Verifica nuevamente la información'+echo );
     }
}

);
});
  

function Eliminaruser(id)
{
    identificacion = id;
    swal({
		title: "Borrar usuario",
		text: "¿ Esta seguro que desea eliminar el usuario"+id+"?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Si, Borrar',
		cancelButtonText: "No, Cancelar!",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
    if (isConfirm){
        $.ajax({ 
            url: '../modulos/modulousuario.php',  // esto es una función 
            type: 'POST', 
            data: {
            'accion':'eliminar',  
            'save':1,
            'identificacion': identificacion,
            },
        }),
      document.getElementById(identificacion).style.display = "none";    
      swal("¡ Borrado !", "El usuario" + id +  "fue borrado", "success");
    } else {
      swal("Cancelado", "Se canceló la acción", "error");
    }
	});
}


function subireditar(id)
{   var ide = id;
    $.ajax({ 
        url: '../modulos/modulousuario.php',  // esto es una función 
        type: 'POST', 
        data: {
        'accion':'consultar',  
        'ide': ide,
        
        },
    }).done(function(echo){ 
    $("#resultado").html(echo); 
   // $('#modaleditar').modal('toggle'); 
       //  swal('Registro guardado exitosamente'+ echo, "¡ Listo !");
        //===============falta agregar el usuario sin refrescar la página ==================
   
}

)};

function editarUsuario(ide){
    var ide =ide
    identificacion = $('#txt-idup').val()
     nombre = $('#txt-nombreup').val().toUpperCase()
     apellido = $('#txt-apellidoup').val().toUpperCase()
     correo = $('#txt-correoup').val().toUpperCase()
     cargo = $('#txt-cargoup').val().toUpperCase()
     pass = $('#txt-passup').val()

     if (identificacion === '' || nombre === '' || apellido === '' || correo === '' || cargo === '' ||  pass === '' ) {
         swal('alert', 'Tiene campos vacios, por favor verifique.', 'warning')
         return
     }
 
     $.ajax({ 
         url: '../modulos/modulousuario.php',  // esto es una función 
         type: 'POST', 
         data: {
         'accion':'actualizar',  
         'save':1,
         'ide':ide,
         'identificacion': identificacion,
         'nombres':nombre,
         'apellidos':apellido,
         'correo':correo,
         'idcargo':cargo,
         'clave':pass
         },
     }).done(function(echo){
     $("#resultado").html(echo);
     swal('Registro se actualizó exitosamente'+ nombre, "¡ Listo !");
    document.getElementById("exampleModal").style.display = "none"; 
    window.setTimeout(function(){
            location.reload()
          } ,2000);   
     } 
 );
 }