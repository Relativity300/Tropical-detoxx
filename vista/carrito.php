<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    
    <link rel="stylesheet" href="../css/Carrito.css">
    <link rel="stylesheet" href="../css/campo/fondoAzul.css">

    <title>carrito</title>
</head>
<body>
<?=require_once'campo/Nav.php';?>
 <form action="">
  <input class="buscar" type="text">
 </form>

<section>

<div class="card carta" style="width: 18rem;">
    <h5 class="card-title producto">Card title</h5>
  <img src="../IMG/jugo1.jpg" class="card-img-top iimg " alt="jugos">
  <p class="precio">1.000$</p>


  <div class="botones">
    
<!-- Button trigger modal -->
<button type="button" class=" btn-primary button-boton" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="bi bi-cart-x icono"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-down-left-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.096 3.146a.5.5 0 1 1 .707.708L6.707 9.95h2.768a.5.5 0 1 1 0 1H5.5a.5.5 0 0 1-.5-.5V6.475a.5.5 0 1 1 1 0v2.768l4.096-4.097z"/>
</svg></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">informacion de producto.</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Cantidad: 3/vaso mediano</h2>
        <h2>Precio: 2000$</h2>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Atras</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Si</button>
      </div>
    </div>
  </div>
</div>



    <!-- Button trigger modal -->
<button type="button " class=" btn-primary button-boton" data-bs-toggle="modal" data-bs-target="#exampleModall">
<i class="bi bi-file-earmark-text icono"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
      <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
      <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
    </svg></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">informacion de producto.</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1>jugo mango.</h1>
        <form action="">
          <label for="" margin: 1em >Cantidad </label><input class="cantidad" type="number" name="" id=""><br><br>
          <label for="">Vaso </label><select name="" id="">
            <option value="">pequeño</option>
            <option value="">mediano</option>
            <option value="">grande</option>
          </select>
        </form>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Atras</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Si</button>
      </div>
    </div>
  </div>
</div>


    
    
    <div class="div-p">
      <p class="p-jugo">jugo de mango | <br> cantidad: 3 </p> 

      <!-- Button trigger modal -->
<button type="button" class=" btn-primary button-boton-eliminar" data-bs-toggle="modal" data-bs-target="#eexampleModal">
<i class="bi bi-cart-x icono"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart-x" viewBox="0 0 16 16">
      <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"/>
      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
    </svg></i>
</button>

<!-- Modal -->
<div class="modal fade" id="eexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Borrar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>seguro quiere borrar este producto</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Atras</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Si</button>
      </div>
    </div>
  </div>
</div>



     
    </div>
  </div>
</div>





</section>



<div class="card footer">
  <div class="card-header total-card">
    <h1>total: 3.500$</h1>
    <div class="div-complar"><a href="#" class="btn btn-primary conplar">Go somewhere</a></div>
  </div>
  <div class="card-body">

    <h5 class="card-title">CANTIDAD PRODUCTO:5</h5>
    <h5 class="card-title">EVIO: 1.000</h5>
    <h5 class="card-title">DIRECION: TU CASA</h5>
    
  </div>
</div>




      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>