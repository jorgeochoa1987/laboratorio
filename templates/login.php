
<body>
    <head>
    <link href="../css/login.css" rel="stylesheet"></head></head>   
	<div class="login"> 
		<div class="login-screen"> 
			<div class="app-title">
				<h1>¡ Bienvenido !</h1>
			</div>

			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" placeholder="username" id="id_user" >
				<label class="login-field-icon fui-user" for="login-name"  placeholder="Id de usuario"    type="text"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" id="pass" type="password"  placeholder="Ingrese contraseña" >
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

                <button class="mt-2 btn btn-primary" id="acceder" value="Iniciar sesión" >Iniciar Sesión</button>
            </div>
            <div id="resultado"></div>

		</div>
	</div>
</body>

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
         alert('Verifica nuevamente la información'+ echo);
     }
}

);
});

</script>    