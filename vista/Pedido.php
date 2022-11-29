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

  <title>Tropical Detox </title>
</head>

<body>
  <?php require_once 'campo/Nav.php'; ?>
  <h1 class="titlo">Mis pedidos</h1>
  <section>
    <form action="">
      <input type="search" name="nombre" placeholder="Buscar">
    </form>
    <div class="card carta" style="width: 18rem;">
      <h5 class="card-title producto">Jugo de mango : 4</h5>
      <img src="../IMG/jugo1.jpg" class="card-img-top iimg " alt="jugos">
      <p class="precio">5.000$</p>



      <div class="botones">

        <!-- Button trigger modal -->
        <button type="button" class="btn  button-boton" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
              <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
              <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
            </svg></i>
        </button>

        <p class="Estado">Estado:</p>



      </div>
    </div>

    <div class="card carta" style="width: 18rem;">
      <h5 class="card-title producto">Jugo de mango : 4</h5>
      <img src="../IMG/jugo1.jpg" class="card-img-top iimg " alt="jugos">
      <p class="precio">5.000$</p>



      <div class="botones">

        <!-- Button trigger modal -->
        <button type="button" class="btn  button-boton" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
              <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
              <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
            </svg></i>
        </button>

        <p class="Estado">Estado:</p>



      </div>

    </div>

    <div class="card carta" style="width: 18rem;">
      <h5 class="card-title producto">Jugo de mango : 4</h5>
      <img src="../IMG/jugo1.jpg" class="card-img-top iimg " alt="jugos">
      <p class="precio">5.000$</p>



      <div class="botones">

        <!-- Button trigger modal -->
        <button type="button" class="btn  button-boton" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
              <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
              <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
            </svg></i>
        </button>

        <p class="Estado">Estado:</p>



      </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-6.5" id="exampleModalLabel">Informacion.</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h4>Cantidad: 3/vaso mediano</h4>
            <h4>Precio: 2000$</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Atras</button>
          </div>
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


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="js/app-style-switcher.js"></script>





</body>

</html>