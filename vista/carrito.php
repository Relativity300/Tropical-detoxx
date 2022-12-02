<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../IMG/Logo.jpeg">

  <link rel="stylesheet" href="../css/Carrito.css">
  <!-- <link rel="stylesheet" href="../css/campo/fondoAzul.css"> -->

  <title>Tropical Detox </title>
</head>

<body>
  <?php require_once 'campo/Nav.php'; ?>

  <section>
    <h1 class="titlo">Carrito de compras</h1>
    <form action="">
      <input type="search" name="nombre" placeholder="Buscar">
    </form>
    <div class="cartOrden">

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

          <!-- Button trigger modal -->
          <button type="button " class="btn button-boton" data-bs-toggle="modal" data-bs-target="#exampleModall">
            <i class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
              </svg>
            </i>
          </button>


          <button type="button" class=" btn button-boton-eliminar" data-bs-toggle="modal" data-bs-target="#eexampleModal">
            <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
              </svg></i>
          </button>

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

          <!-- Button trigger modal -->
          <button type="button " class="btn button-boton" data-bs-toggle="modal" data-bs-target="#exampleModall">
            <i class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
              </svg>
            </i>
          </button>


          <button type="button" class=" btn button-boton-eliminar" data-bs-toggle="modal" data-bs-target="#eexampleModal">
            <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
              </svg></i>
          </button>

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

          <!-- Button trigger modal -->
          <button type="button " class="btn button-boton" data-bs-toggle="modal" data-bs-target="#exampleModall">
            <i class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
              </svg>
            </i>
          </button>


          <button type="button" class=" btn button-boton-eliminar" data-bs-toggle="modal" data-bs-target="#eexampleModal">
            <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
              </svg></i>
          </button>

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
              <h4 class="letra">Cantidad: 3/vaso mediano</h4>
              <h4 class="letra">Precio: 2000$</h4>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Atras</button>
            </div>
          </div>
        </div>
      </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-6.5" id="exampleModalLabel">Editar.</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body orden">
            <h4 class="jugoletra">jugo mango:</h4>
            <form action="">
              <label class="letra" for="" margin: 1em>Cantidad </label><input class="cantidad" type="number" name="" id=""><br><br>
              <label class="letra" for="">Vaso </label><select name="" id="">
                <option value="">pequeño</option>
                <option value="">mediano</option>
                <option value="">grande</option>
              </select>
            </form>
          </div>


          <div class="modal-footer">
            <button type="button" class=" btn btn-danger" data-bs-dismiss="modal">Atras</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Si</button>
          </div>
        </div>
      </div>
    </div>







    <!-- Modal -->
    <div class="modal fade" id="eexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-6.5" id="exampleModalLabel">Borrar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="letra">seguro quiere borrar este producto</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Atras</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Si</button>
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



  <div class="card footer">
    <div class="card-header total-card">
      <h1>total: 3.500$</h1>
      <div class="div-complar">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Conpar">
          Conpar
        </button>
      </div>
    </div>
    <div class="card-body">

      <h5 class="card-title">CANTIDAD PRODUCTO:5</h5>
      <h5 class="card-title">EVIO: 1.000</h5>
      <!-- <h5 class="card-title">DIRECION: TU CASA</h5> -->

    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="Conpar" tabindex="-1" aria-labelledby="Conpar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-7" id="exampleModalLabel">comprar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h4  class="letra">#1: jugo de mango<br> cantidad: 1 <br> tamaño: pequelo <br> precio:2.000</h4><br>
          <h4  class="letra">#2: jugo de mango<br> cantidad: 1 <br> tamaño: pequelo <br> precio:2.000</h4><br>
          <h4  class="letra">#3: jugo de mango<br> cantidad: 1 <br> tamaño: pequelo <br> precio:2.000</h4><br>
          <h4  class="letra">Total:6.000</h6>

        </div>
        <div class="modal-footer">
          <a href="categoria.php"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">seguir viendo</button></a>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#e">Comprar</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="e" tabindex="-1" aria-labelledby="e" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-6.5" id="exampleModalLabel">Pedir</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h4>Pago de carrito</h3>
            <p>si quieres pedir a domicilio ponga la dirección si no quiere degelo en blanco</p>
            <input type="text">
        </div>
        <div class="modal-footer">
          <a href="carrito.php"><button type="button" class="btn btn-primary">Canselar</button></a>
          <a href="Pedido.php"><button type="button" class="btn btn-primary"> Pedir</button></a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="js/app-style-switcher.js"></script>




</body>

</html>