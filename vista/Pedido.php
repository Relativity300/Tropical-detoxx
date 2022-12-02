<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">

  <link rel="stylesheet" href="../css/Pedido.css">
  <link rel="stylesheet" href="../css/campo/fondoAzul.css">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../IMG/Logo.jpeg">
  <title>Tropical Detox </title>
</head>

<body>
  <?php require_once 'campo/Nav.php'; ?>
  <h1 class="titlo">Mis pedidos</h1>
  <section>
    <form action="">
      <input type="search" name="nombre" placeholder="Buscar">
    </form>

    <!---------------------------------------- personalizados -------------------------------------->

    <h1 class="Estado">Estado de pedidos: En cola</h1>
    <div class="cartOrden">


      <div class="card carta" style="width: 18rem;">
        <h5 class="card-title producto">Jugo de mango : 4</h5>
        <img src="../IMG/jugo1.jpg" class="card-img-top iimg " alt="jugos">
        <p class="precio">5.000$</p>



        <div class="botones">

          <!-- Button trigger modal -->
          <button type="button" class="btn  button-boton" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                  d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
              </svg></i>
          </button>





        </div>

      </div>



      <div class="card carta" style="width: 18rem;">
        <h5 class="card-title producto">Jugo de mango : 4</h5>
        <img src="../IMG/2.jpg" class="card-img-top iimg " alt="jugos">

        <div class="todo">
          <p class="precio">5.000$</p>
          <div class="botones">

            <!-- Button trigger modal -->
            <button type="button" class="btn  button-boton" data-bs-toggle="modal" data-bs-target="#perzonalisado">
              <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                  class="bi bi-info-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path
                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                </svg></i>
            </button>

          </div>
        </div>
      </div>









      <div class="card carta" style="width: 18rem;">
        <h5 class="card-title producto">Jugo de mango : 4</h5>
        <img src="../IMG/guayaba.jpg" class="card-img-top iimg " alt="jugos">
        <div class="todo">
          <p class="precio">5.000$</p>
          <div class="botones">

            <!-- Button trigger modal -->
            <button type="button" class="btn  button-boton" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                  class="bi bi-info-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path
                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                </svg></i>
            </button>

          </div>
        </div>


      </div>
    </div>



















    <!-- Modal1 -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-6.5" id="exampleModalLabel">Informacion.</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h4>Cantidad: 3/Vasos medianos</h4>
            <h4>Jugo de mango</h4>
            <h4>Precio: 2000$</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Atras</button>
          </div>
        </div>
      </div>
    </div>


<!-- Modal2 -->
<div class="modal fade" id="perzonalisado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-6.5" id="exampleModalLabel">Informacion.</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h4>Cantidad: 3/Vasos medianos</h4>
            <h4>frutas de tu Personalizado.</h4>
            <h5>Mango.</h5>
            <h5>fresa.</h5>
            <h5>Mango.</h5>

            <h4>Precio: 2000$</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Atras</button>
          </div>
        </div>
      </div>
    </div>


    </div>











    <!-- <div class="div-p">
        <p class="p-jugo">jugo de mango.</p>
        <p class="p-jugo">cantidad:3</p>
        Button trigger modal -->






  </section>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"></script>
  <script src="js/app-style-switcher.js"></script>





</body>

</html>