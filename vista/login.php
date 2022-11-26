<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tropical Detox </title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/loginf.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
    
  </head>
  <body>

  <?php

include('campo/Nav.php')
?>

    <div class="contenedor">
  

      <div class="login">
        <article class="fondo">
          <img src="../IMG/Logo.jpeg" alt="User">
          <h3>Inicio de Sesión</h3>
          <form name="frmAcceso" action="" method="POST" id="formulario" name="formulario">
            <span class="icon-user"></span><input class="inp" type="email" name="usuario" id="correo" placeholder="Digite su Correo" >
            <br>
            
            <div class="input-group-append ">
            <span class="icon-key"></span><input class="inp" type="password" name="contrasena" id="clave" placeholder="Digite su contraseña">
            <div class="d-flex flex-row-reverse" >
            <button id="show_password" class="btn" type="button" onclick="mostrarPassword()"> <box-icon type='solid' name='show'></box-icon> </button>
            </div>
          </div>
            <br>
            <a href="restablecer.php" class="he">He olvidado mi contraseña // </a>
            <a href="registro.php" class="he"><i class="fa fa-sticky-note" aria-hidden="true"></i> estoy registrado</a>
            <button type="submit" name="submit" id="submit"  class="boton">Iniciar Sesión</button>
          </form>
        </article>
      </div>

    </div>

    <?php require_once'campo/footer.php';?>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script>



document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });


  function mostrarPassword(){
		var cambio = document.getElementById("clave");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});

  function validarFormulario(evento) {
    evento.preventDefault();
    var correo = document.getElementById('correo').value;
    var clave = document.getElementById('clave').value;

    let NoEspeciales = /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Letras y espacios, pueden llevar acentos.
    var expReg= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let cedulaNum = /^\d{0,10}$/ // 0 a 9 numeros.
    let numerost = /^\d{0,11}$/
    let contraseVali = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;

    //LOS DOS ESTAN VACIOS
    if(!correo && !clave){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Tienes que ingresar los campos'
      })
      return;
    }
    //CORREO VACIO
    if (!correo) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Tienes que ingresar el correo'
      })
      return;
    }

    //NO TERMINA EN @GMAIL.COM
    //EXPRECION REGULAR
    var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    var valido = expReg.test(correo);
    if(!valido){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'el correo tiene que terminar en "@gmail.com"'
      })
      return;
    }
    

    //CLAVE TIENE MENOS DE 5 CARACTERES
    if (!clave) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'La contraseña es un campo obligatorio'
      })

      return;
    }
    //CLAVE NO INGRESADA
    let validarexprclave = contraseVali.test(clave)
    if (!validarexprclave) {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'La debe tener una mayuscula, y un caracter especial'
        })
      return;


    }
    
    return window.location.href = 'index.php';

    
    this.submit();
  }
    </script>


  </body>
</html>
