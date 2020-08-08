$(document).ready(inicioUsuario)

const eliminar = '#btn-eliminar'

function inicioUsuario() {
    $('#btn-guardar').click(guardar)
    $('#btn-editar').click(editar)
    $('#btn-eliminar').click(eliminar)
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
        document.getElementById("exampleModal").style.display = "none";    
     }
     else
     {
         alert('Verifica nuevamente la información'+echo );
     }
}

);
}


function eliminarusuario(id){
    identificacion = id;
    $.ajax({ 
        url: '../modulos/modulousuario.php',  // esto es una función 
        type: 'POST', 
        data: {
        'accion':'eliminar',  
        'save':1,
        'identificacion': identificacion,
     
        },
    }).done(function(echo){
    $("#resultado").html(echo);
     if(echo==1)
     {
        alert('Registro eliminado  exitosamente');
       // document.getElementById("exampleModal").style.display = "none";    
     }
     else
     {
         alert('Verifica nuevamente la información'+echo );
     }
}

);
}




