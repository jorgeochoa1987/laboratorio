$(document).ready(iniciotipomaterias)



$("#btn-guardarcliente").click(function(){

   identificacion = $('#identificacion').val().toUpperCase();
   razonsocial= $('#razonsocial').val();
   direccion=$('#direccion').val();
   telefono= $('#telefono').val();
   contacto =$('#contacto').val();
    if (identificacion === '' ) {
        swal('alert', 'Para guardar se requiere una identificación', 'warning')
        return
    } 
  
    $.ajax({ 
        url: '../modulos/moduloCliente.php',  // esto es una función 
        type: 'POST', 
        data: {
        'accion':'guardar',  
        'save':1,
        'identificacion':identificacion,
        'razonsocial': razonsocial,
        'direccion': direccion,
        'telefono': telefono,
        'contacto': contacto,

        },
    }).done(function(echo){
    $("#resultado").html(echo);
     if(echo==1)
     {
         swal('Registro guardado exitosamente '+ identificacion, "¡ Listo !");
        document.getElementById("exampleModal").style.display = "none"; 
        window.setTimeout(function(){
            location.reload()
          } ,600);  
 
    } 
     else
     {
         alert('Verifica nuevamente la información'+echo );
     }
}

); 
});
  

function eliminarcliente(id) 
{
    id= id;
    identificacion = $("#identificacionTd").val();
    swal({
		title: "Borrar Cliente",
		text: "¿ Esta seguro que desea eliminar el cliente con idendificación:  "+identificacion+"?",
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
            url: '../modulos/moduloCliente.php',  // esto es una función 
            type: 'POST', 
            data: {
            'accion':'eliminar',  
            'save':1,
            'id': id
            },  
        }),
      document.getElementById(id).style.display = "none";    
      swal("¡ Borrado !", "El cliente " + identificacion +  " fue borrado", "success");
    
 
    } else {
      swal("Cancelado", "Se canceló la acción", "error");
    }
	}); 
} 


function subireditarcliente(id)
{   var ide = id; 
    $.ajax({ 
        url: '../modulos/moduloCliente.php',  // esto es una función 
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

function editarcliente(id){
    var ide =id; 

    identificacion = $('#edidentificacion').val();
    razonsocial= $('#edrazonsocial').val();
    direccion=$('#eddireccion').val();
    telefono= $('#edtelefono').val();
    contacto =$('#edcontacto').val();

     if ( identificacion === '') {
         swal('alert', 'Tiene campos vacios, por favor verifique.', 'warning')
         return
     }
 
     $.ajax({ 
         url: '../modulos/moduloCliente.php',  // esto es una función 
         type: 'POST', 
         data: {
         'accion':'actualizar',  
         'save':1, 
         'id':ide,
         'identificacion' : identificacion,
        'razonsocial':razonsocial,
        'direccion':direccion,
        'telefono':telefono,
        'contacto' :contacto,  
         },
     }).done(function(echo){
     $("#resultado").html(echo);
     swal('Registro se actualizó exitosamente'+ identificacion, "¡ Listo !");
     document.getElementById("exampleModal").style.display = "none"; 
     window.setTimeout(function(){
        location.reload()
      } ,500);      
 } 
 
 ); 
 }