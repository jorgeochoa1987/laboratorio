$(document).ready(inicioMateriasprimas)

//const eliminar = '#btn-eliminar'

function inicioMateriasprimas() {
    $('#btn-guardarMP').click(guardar)
   // $('#btn-editar').click(editar)
    $('#btn-eliminar').click(eliminar)
}


function guardar(){
   const nombre = $('#txt-nombreMP').val().toUpperCase()
   const descripcion = $('#txt-descripcionMP').val()
   const tipo = $('#txt-tipoMP').val().toUpperCase()
   const unidad = $('#txt-unidadMP').val().toUpperCase()
   const procedencia = $('#txt-procedenciaMP').val()
    
    if (nombre === '' || tipo === '' || unidad === '' || procedencia === '' ) {
        swal('alert', 'Tiene campos vacios, por favor verifique.', 'warning')
        return
    }

    $.ajax({ 
        url: '../modulos/modulomaterias.php',  // esto es una función 
        type: 'POST', 
        data: {
        'accion':'guardar',  
        'save':1,
        'nombre': nombre,
        'descripcion': descripcion,
        'tipo':tipo,
        'unidad':unidad,
        'procedencia':procedencia
        },
    }).done(function(echo){
    $("#resultado").html(echo);
     if(echo==1)
     {
         swal('Registro guardado exitosamente'+ nombre, "¡ Listo !");
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
  

function subireditarmaterias(id)
{   var ide = id;
    $.ajax({ 
        url: '../modulos/modulomaterias.php',  // esto es una función 
        type: 'POST', 
        data: {
        'accion':'consultar',  
        'id': ide,
        
        },
    }).done(function(echo){ 
    $("#resultado").html(echo); 
   // $('#modaleditar').modal('toggle'); 
       //  swal('Registro guardado exitosamente'+ echo, "¡ Listo !");
        //===============falta agregar el usuario sin refrescar la página ==================
   
}

)};

function editarmaterias(id){
    var ide =id
    const nombre = $('#txt-nombreMP').val().toUpperCase()
   const descripcion = $('#txt-descripcionMP').val()
   const tipo = $('#txt-tipoMP').val().toUpperCase()
   const unidad = $('#txt-unidadMP').val().toUpperCase()
   const procedencia = $('#txt-procedenciaMP').val()


     if (nombre === '' || tipo === '' || unidad === '' || procedencia === ''  ) {
         swal('alert', 'Tiene campos vacios, por favor verifique.', 'warning')
         return
     }
 
     $.ajax({ 
         url: '../modulos/modulomaterias.php',  // esto es una función 
         type: 'POST', 
         data: {
         'accion':'actualizar',  
         'save':1,
         'id':ide,
         'nombre': nombre,
         'descripcion': descripcion,
         'tipo':tipo,
         'unidad':unidad,
         'procedencia':procedencia
         },
     }).done(function(echo){
     $("#resultado").html(echo);
      if(echo==1)
      {
          swal('Registro se actualizó exitosamente'+ nombre, "¡ Listo !");
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
            url: '../modulos/modulomaterias.php',  // esto es una función 
            type: 'POST', 
            data: {
            'accion':'eliminar',  
            'save':1,
            'id': id,
            },
        }),
      document.getElementById(identificacion).style.display = "none";    
      swal("¡ Borrado !", "La materia prima" + id +  "fue borrada", "success");
    } else {
      swal("Cancelado", "Se canceló la acción", "error");
    }
	});
}

