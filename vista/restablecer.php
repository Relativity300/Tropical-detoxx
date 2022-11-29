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
</head>

<body>
  <?php

  include('campo/Nav.php')
  ?>

  <section class="form-register">
    <center>
      <h4>Ingrese su correo</h4>
    </center>

    <form name="frmUsuario" id="frmUsuario" method="POST" action="">
      <input class="controls" type="email" id="correo" placeholder="juan@gmail.com">




      <p>Correo con el que creaste tu cuenta </p>
      
      <button class="botons" type="button" onclick="validar()">Enviar correo de recuperacion</button>
      <a href="recuperar.php">x</a>


    </form>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



  <script>
    function validar() {


      var Valcorreo = document.getElementById('correo').value;

      var expReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/


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
          text: 'El correo debe terminar en @gmail.com'
        })
      }

      Swal.fire({
        icon: 'success',
        title: ';)',
        text: 'Se ha enviado un correo de recuperacion'
      })


    }
  </script>

  <?php require_once 'campo/footer.php'; ?>
</body>

</html>