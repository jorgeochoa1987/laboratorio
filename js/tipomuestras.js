$('#btn-guardartipomuestras').click(function(){
 

    nombre = $('#txt-Ednombretipomuestras').val().toUpperCase();
    descripcion = $('#txt-descripciontipomuestras').val()
    
    if (nombre === '' ) {
        swal('alert', 'Tiene campos vacios, por favor verifique.', 'warning')
        return
    }

    $.ajax({ 
        url: '../modulos/modulotipomuestras.php',  // esto es una función 
        type: 'POST', 
        data: {
        'accion':'guardar',  
        'save':1,
        'nombre':nombre,
        'descripcion': descripcion
        },
    }).done(function(echo){
    $("#resultado").html(echo);
     if(echo==1)
     {
         swal('Registro guardado exitosamente '+ nombre, "¡ Listo !");
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
  

function eliminartipomuestras(id)
{
    identificacion = id;
    swal({
		title: "Borrar módulo",
		text: "¿ Esta seguro que desea eliminar el tipo de la muestra "+id+"?",
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
            url: '../modulos/modulotipomuestras.php',  // esto es una función 
            type: 'POST', 
            data: {
            'accion':'eliminar',  
            'save':1,
            'id': id
            },
        }),
      document.getElementById(identificacion).style.display = "none";    
      swal("¡ Borrado !", "El tipo muestra " + id +  " fue borrado", "success");
    } else {
      swal("Cancelado", "Se canceló la acción", "error");
    }
	});
}


function subireditartipomuestras(id)
{   var ide = id; 
    $.ajax({ 
        url: '../modulos/modulotipomuestras.php',  // esto es una función 
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

function editartipomuestras(id){
    var ide =id;
    nombre = $('#txt-Ednombretm').val();  
    descripcion = $('#txt-Eddescriptm').val();
 
     if ( nombre == '') {
         swal('alert', 'Tiene campos vacios, por favor verifique.', 'warning')
         return
     }
 
     $.ajax({ 
         url: '../modulos/modulotipomuestras.php',  // esto es una función 
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
    swal('Registro se actualizó exitosamente'+ nombre, "¡ Listo !");
    document.getElementById("modaleditar").style.display = "none"; 
    window.setTimeout(function(){
            location.reload()
          } ,2000);   
     } 
 );
 }