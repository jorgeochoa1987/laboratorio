$(document).ready(inicioUsuario)

function inicioUsuario() {
    $('#btn-guardar').click(guardar)
}


function guardar(){
 
   const identificacion = $('#txt-id').val()
   const nombre = $('#txt-nombre').val().toUpperCase()
   const apellido = $('#txt-apellido').val().toUpperCase()
   const correo = $('#txt-correo').val().toUpperCase()
   const cargo = $('#txt-cargo').val().toUpperCase()
   const pass = $('#txt-pass').val()
    
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
        alert('Registro guardado exitosamente');
        limpiar()
        cerrarmodal()
       
     }
     else
     {
         alert('Verifica nuevamente la información'+echo );
     }
}

);
}

function limpiar() {
   $('.form-control').val('')
}
function cerrarmodal() {
   $('.modal fade').modal(toggle)
}

