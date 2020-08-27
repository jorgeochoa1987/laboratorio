$(document).ready(inicioCargo)


function inicioCargo() {
    $('#btn-guardarproducto').click(guardarproducto)
   // $('#btn-editar').click(editar)
    $('#btn-eliminarcargo').click(eliminarcargo)
}
 

function guardarproducto(){ 

   const nombre = $('#nombre').val().toUpperCase()
   const descripcion = $('#descrip').val()
   const id_tipo = $('#tipo').val()

    if (nombre === '' ) {
        swal('alert', 'Tiene campos vacios, por favor verifique.', 'warning')
        return
    }

    $.ajax({  
        url: '../modulos/moduloproducto.php',  // esto es una función 
        type: 'POST', 
        data: {
        'accion':'guardar',  
        'save':1,
        'nombre':nombre,
        'descripcion': descripcion,
        'id_tipo': id_tipo
        },
    }).done(function(echo){
    $("#resultado").html(echo);
     if(echo==1)
     {
         swal('Registro guardado exitosamente '+ nombre, "¡ Listo !");
        document.getElementById("exampleModal").style.display = "none";
        location.reload(); 
        //===============falta agregar el usuario sin refrescar la página ==================
    } 
     else
     {
         alert('Verifica nuevamente la información'+echo );
     }
}

);
}
  

function eliminarcargo(id)
{
    identificacion = id;
    swal({
		title: "Borrar módulo",
		text: "¿ Esta seguro que desea eliminar el cargo "+id+"?",
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
            url: '../modulos/modulocargo.php',  // esto es una función 
            type: 'POST', 
            data: {
            'accion':'eliminar',  
            'save':1,
            'id': id
            },
        }),
      document.getElementById(identificacion).style.display = "none";    
      swal("¡ Borrado !", "El cargo " + id +  " fue borrado", "success");
    } else {
      swal("Cancelado", "Se canceló la acción", "error");
    }
	});
}


function subireditarcargo(id)
{   var ide = id;
    $.ajax({ 
        url: '../modulos/modulocargo.php',  // esto es una función 
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

function editarcargo(id){
    var ide =id

    const nombre = $('#txt-nombrecargo').val().toUpperCase()
    const descripcion = $('#txt-descripcioncargo').val()

     if ( nombre === '') {
         swal('alert', 'Tiene campos vacios, por favor verifique.', 'warning')
         return
     }
 
     $.ajax({ 
         url: '../modulos/modulocargo.php',  // esto es una función 
         type: 'POST', 
         data: {
         'accion':'actualizar',  
         'save':1,
         'id':ide,
         'nombre':nombre,
         'descripcion':descripcion,
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