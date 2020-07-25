
<?php
 // start a session
 session_start();
 ?>

    <input id="id_user" type="text" placeholder="Ingrese id" required>
    <input id="pass" type="password"  placeholder="Ingrese contraseña" required>
   
    <input type="submit" id="acceder" value="Iniciar sesión">

    <div id="resultado"></div>



<!--===============================================================================================-->
<script src="../js/librerias/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->



<script>
$("#acceder").on("click", function(){

    var id_user = $("#id_user").val();
    var pass_user = $("#pass").val();
    

    $.ajax({ 
        url: '../modulos/login.php',  // esto es una función 
        type: 'POST', 
        data: {
        'save':1,  
        'id': id_user,
        'pass':pass_user
        }
    }).done(function(echo){
    $("#resultado").html(echo);
     if(echo==1)
     {
        window.location.href = "dashboard.php";
        
     }
     else
     {
         alert('Verifica nuevamente la información');
     }
}

);
});

</script>    