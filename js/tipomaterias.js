$('#btn-guardartipomaterias').click(function(){

   nombre = $('#txt-nombretipomaterias').val().toUpperCase();
   descripcion = $('#txt-descripciontipomaterias').val()
    
    if (nombre === '' ) {
        swal('alert', 'Tiene campos vacios, por favor verifique.', 'warning')
        return
    }

    $.ajax({ 
        url: '../modulos/modulotipomaterias.php',  // esto es una función 
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
  

function eliminartipomaterias(id)
{
    identificacion = id;
    swal({
		title: "Borrar módulo",
		text: "¿ Esta seguro que desea eliminar el tipo de materia prima "+id+"?",
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
            url: '../modulos/modulotipomaterias.php',  // esto es una función 
            type: 'POST', 
            data: {
            'accion':'eliminar',  
            'save':1,
            'id': id
            },
        }),
      document.getElementById(identificacion).style.display = "none";    
      swal("¡ Borrado !", "El tipo de materia prima " + id +  " fue borrado", "success");
    } else {
      swal("Cancelado", "Se canceló la acción", "error");
    }
	});
}


function subireditartipomaterias(id)
{   var ide = id;
    $.ajax({ 
        url: '../modulos/modulotipomaterias.php',  // esto es una función 
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

function editartipomaterias(id){
    var ide =id

     nombre = $('#txt-nombretipomaterias').val().toUpperCase();  
     descripcion = $('#txt-descripciontipomaterias').val();  

     if ( nombre === '') {
         swal('alert', 'Tiene campos vacios, por favor verifique.', 'warning')
         return
     }
 
     $.ajax({ 
         url: '../modulos/modulotipomaterias.php',  // esto es una función 
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
         window.setTimeout(function(){
            location.reload()
          } ,2000);   
     } 
    } 
    );
    }