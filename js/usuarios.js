$(document).ready(inicioUsuario)

const eliminar = '#btn-eliminar'

function inicioUsuario() {
    $('#btn-guardar').click(guardar)
   // $('#btn-editar').click(editar)
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
         swal('Registro guardado exitosamente'+ identificacion, "¡ Listo !");
        document.getElementById("exampleModal").style.display = "none"; 
        //===============falta agregar el usuario sin refrescar la página ==================
    } 
     else
     {
         alert('Verifica nuevamente la información'+echo );
     }
}

);
}
  

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
    const identificacion = $('#txt-idup').val()
    const nombre = $('#txt-nombreup').val().toUpperCase()
    const apellido = $('#txt-apellidoup').val().toUpperCase()
    const correo = $('#txt-correoup').val().toUpperCase()
    const cargo = $('#txt-cargoup').val().toUpperCase()
    const pass = $('#txt-passup').val()

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
      if(echo==1)
      {
          swal('Registro se actualizó exitosamente'+ identificacion, "¡ Listo !");
         document.getElementById("exampleModal").style.display = "none"; 
         //===============falta agregar el usuario sin refrescar la página ==================
     } 
      else
      {
          alert('Verifica nuevamente la información'+echo );
      }
 }
 
 );
 }