<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/registro.css">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <title>Tropical Detox </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
  <?php

  include('campo/Nav.php')
  ?>
  <section class="form-register">
    <h4>Formulario Registro</h4>
    <form name="frmUsuario" id="formulario" method="POST" action="">
      <input class="controls" type="text" name="nombreusuario" id="nombre" placeholder="Ingrese su Nombre">
      <input class="controls" type="text" name="nombreusuario" id="apellido" placeholder="Ingrese su Apellido">
      <input class="controls" type="text" name="nombreusuario" id="cedula" placeholder="Ingrese su Identificacion" minlength="2" maxlength="10">
      <input class="controls" type="email" name="correoelectronico" id="correo" placeholder="Ingrese su Correo">
      <input class="controls" type="text" name="direccion" id="direccion" placeholder="Ingrese su Dirección">
      <input class="controls" type="number" name="telefono" id="telefono" placeholder="Ingrese su Teléfono" value="3017893467">
      <div class="d-flex">
        <input class="controls" type="password" id="contrasenia" placeholder="Contraseña">
        <button class="btn btn-primary" type="button" onclick="mostrarContrasena1()"><i class="fa-sharp fa-solid fa-eye-slash"></i></button>
      </div>
      <div class="d-flex">
        <input class="controls" type="password" id="Confirmclave" placeholder="Confirmar contraseña">
        <button class="btn btn-primary" type="button" onclick="mostrarContrasena2()" ><i class="fa-sharp fa-solid fa-eye-slash"></i></button>
      </div>


      </select>
      <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
      <button class="botons" type="button" name="submit" id="submit" onclick="validarFormulario()">Registrar</button>
      <p><a href="login.php">¿Ya tengo Cuenta?</a></p>


    </form>
  </section>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <br>


  <script>
    function mostrarContrasena1(){
    var tipo = document.getElementById("contrasenia");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}

function mostrarContrasena2(){
    var tipo = document.getElementById("Confirmclave");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}
    function validarFormulario() {


      var Valnombre = document.getElementById('nombre').value;
      var Valapellido = document.getElementById('apellido').value;
      var Valcedula = document.getElementById('cedula').value;
      var Valdireccion = document.getElementById('direccion').value;
      var Valcorreo = document.getElementById('correo').value;
      var Valtelefono = document.getElementById('telefono').value;
      var Valcontraseina = document.getElementById('contrasenia').value;
      var Valconfirmcontraseina = document.getElementById('Confirmclave').value;

      let NoEspeciales = /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Letras y espacios, pueden llevar acentos.
      var expReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      let cedulaNum = /^\d{0,10}$/ // 0 a 9 numeros.
      let numerost = /^\d{0,11}$/
      let contraseVali = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;


      //TODOS LOS CAMPOS VACIOS 
      if (!Valnombre && !Valcedula && !Valcorreo && !Valcontraseina && !Valapellido && !Valtelefono && !Valdireccion && !Valconfirmcontraseina) {
        return Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Tienes que ingresar todos los campos'
        })
      }


      //NOOMBRE
      if (!Valnombre) {
        return Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Tienes que ingresar el nombre'
        })
      }
      if (typeof Valnombre === "number") {
        return Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'El nombre no puede contener numeros'
        })
      }
      var validoNombre = NoEspeciales.test(Valnombre);
      if (!validoNombre) {
        return Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'el nombre no puede tener caracteres especiales'
        })
      }


      /////////////CEDULA/////////////////
      if (!Valcedula) {
        return Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Tienes que ingresar la cedula'
        })
      }
      var validoCedula = cedulaNum.test(Valcedula);
      if (!validoCedula) {
        return Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Solo son numeros y solo puede ser de 9 digitos'
        })
      }
      //telefono
      var Validotelefono = numerost.test(Valtelefono)

      if (!Validotelefono) {
        return Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'El numero debe contener 10 digitos'
        })
      }


      ///////////////CORREO////////////////
      if (!Valcorreo) {
        return Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Tienes que ingresar el correo'
        })
      }
      var valido = expReg.test(Valcorreo);
      if (!valido) {
        return Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'el correo tiene que terminar en "@gmail.com"'
        })
      }


      ////////////CONTRASEÑA//////////////
      if (!Valcontraseina) {
        return Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Tienes que ingresar la contraseña'
        })
      }

      if (!(Valconfirmcontraseina === Valcontraseina)) {
        return Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Las contraseñas tienen que ser igual'
        })
      }

      var validocContraseina = contraseVali.test(Valcontraseina);
      if (!validocContraseina) {
        return Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Minimo 8 caracteres-Maximo 15, 1 letra mayúscula,1 letra minucula,Al menos un dígito,Al menos 1 caracter especial'
        })
      }




      Swal.fire({
        icon: 'success',
        title: ':)',
        text: 'Te has registrado con exito',
        confirmButtonText: '<a href="login.php"><button class="btn">Ok</button></a>'
      })


    }
  </script>

<?php require_once'campo/footer.php';?>
</body>

</html>