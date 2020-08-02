    function Editar(id) { 
        window.location = "?p=Cargomodificar&id="+id;
     }
     function Eliminar(id) {
        var idcargo = $("#cargoname").val();
        alertify.confirm("¿ Esta seguro que desea borrar el cargo?",function (asc) {
            if (asc) {
                //ajax call for delete      
                $.ajax({ 
                    url: '../modulos/modelocargo.php',  // esto es una función 
                    type: 'POST', 
                    data: {
                    'accion':'eliminarCargo',  
                    'save':1,
                    'idcargo': idcargo,
                    },
                    
                })
                alertify.success("Cargo eliminado.");
   
            } else {
                alertify.error("Acción Cancelada");
            }
        }, "Default Value");
       
     }