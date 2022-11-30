<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/registro.css">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../IMG/Logo.jpeg">
  <title>Tropical Detox </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>
  <?php

  include('campo/Nav.php')
  ?>
  <section class="form-register">
    <center>

      <h4>Formulario Registro</h4>
    </center>


    <form name="frmUsuario" id="formulario" method="POST" action="">
      <input class="controls" type="text" name="nombreusuario" id="nombre" placeholder="ingrese su nombre">
      <input class="controls" type="text" name="nombreusuario" id="apellido" placeholder="ingrese su apellido">
      <input class="controls" type="text" name="nombreusuario" id="cedula" placeholder="ingrese su identificacion" minlength="2" maxlength="10">
      <input class="controls" type="email" name="correoelectronico" id="correo" placeholder="ingrese su correo">
      <input class="controls" type="text" name="direccion" id="direccion" placeholder="ingrese su direccion">
      <input class="controls" type="number" name="telefono" id="telefono" placeholder="ingrese su telefono">
      <div class="d-flex">
        <input class="controls" type="password" id="contrasenia" placeholder="Contraseña">
        <button class="btn btn-transparent btn-sm" type="button" onclick="mostrarContrasena1()"><i class="fa-sharp fa-solid fa-eye-slash"></i></button>
      </div>
      <div class="d-flex">
        <input class="controls" type="password" id="Confirmclave" placeholder="Confirmar contraseña">
        <button class="btn btn-transparent btn-sm" type="button" onclick="mostrarContrasena2()"><i class="fa-sharp fa-solid fa-eye-slash"></i></button>
      </div>


      </select>
      <button class="botons" type="button" name="submit" id="submit" onclick="validarFormulario()">Registrar</button>
      <p><a href="login.php">Ya tengo Cuenta</a></p>


    </form>
  </section>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <br>


  <script>
    function mostrarContrasena1() {
      var tipo = document.getElementById("contrasenia");
      if (tipo.type == "password") {
        tipo.type = "text";
      } else {
        tipo.type = "password";
      }
    }

    function mostrarContrasena2() {
      var tipo = document.getElementById("Confirmclave");
      if (tipo.type == "password") {
        tipo.type = "text";
      } else {
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
      let cedulaNum = /^\d{8,10}$/ // 0 a 9 numeros.
      let numerost = /^\d{10}$/
      let contraseVali = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
      var valoresAceptados = /^[0-9]+$/;

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
      //Apellido
      if (!Valapellido) {
            return Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Ingrese su Apellido'
            })
        }
        if (typeof Valapellido === "number") {
            return Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El Apellido no puede contener numeros'
            })
        }
        var validoApellido = NoEspeciales.test(Valapellido);
        if (!validoApellido) {
            return Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El Apellido no puede tener caracteres especiales'
            })
        }


      /////////////CEDULA/////////////////
      /////////////CEDULA/////////////////
      if (!Valcedula) {
            return Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'La identificacion es invalida'
            })
        }

       

        var validoCedula = cedulaNum.test(Valcedula);
        if (!validoCedula) {
            return Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'La cedula es invalida'
            })
        }

        
        var validoCedula = valoresAceptados.test(Valcedula);
            if (!validoCedula) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'La cedula solo puede tener numeros'
                })
            }

        //telefono

        if (!Valtelefono) {
            return Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Telefono no valido'
            })
        }

        var Validotelefono = numerost.test(Valtelefono)

        if (!Validotelefono) {
            return Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Telefono no valido'
            })
        }

        var ValidotelefonoT = valoresAceptados.test(Valtelefono);
            if (!ValidotelefonoT) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El telefono no puede contener letras'
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

  <?php require_once 'campo/footer.php'; ?>
</body>

</html>